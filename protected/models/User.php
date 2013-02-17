<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property integer $role
 */
class User extends CActiveRecord
{
	//constants for responsibility department
	const ADMIN=0;
	const ART=1;
	const ORDER=2;
	const PURCHASING=3;
	const WEB_MARKETING=4;
	const MISC=5;
	
	public function convertRole($num)
	{
		if($num==0)
		{
			$role = 'admin';
		}elseif($num==1){
			$role = 'Art Dept.';
		}elseif($num==2){
			$role = 'Order Dept.';
		}elseif($num==3){
			$role = 'Purchasing Dept.';
		}elseif($num==4){
			$role = 'Web Marketing';
		}elseif($num==5){
			$role = 'Misc.';
		}
		
		return $role;
	}
	
	/**
	 * Returns the static model of the specified AR class.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('role', 'required'),
			array('role', 'numerical', 'integerOnly'=>true),
			array('username, password', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, username, password, role', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'username' => 'Username',
			'password' => 'Password',
			'role' => 'Role',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('role',$this->role);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function hide($pw)
	{
		$hide = md5($pw);
		return $hide;
	}
	
	
	
}