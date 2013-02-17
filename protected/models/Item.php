<?php

/**
 * This is the model class for table "item".
 *
 * The followings are the available columns in table 'item':
 * @property integer $id
 * @property string $product_id
 * @property string $name
 * @property string $url
 * @property string $custom_url
 * @property string $img
 * @property integer $product_status
 * @property integer $ad_status
 * @property integer $maint_status
 * @property integer $img_size
 * @property integer $img_needed
 * @property string $img_comment
 * @property integer $img_second_needed
 * @property string $img_second_comment
 * @property integer $seo_metas
 * @property integer $prod_search_metas
 * @property integer $facebook_metas
 * @property integer $retail_price
 * @property integer $base_prace
 * @property integer $prod_match_img
 * @property integer $url_set
 * @property double $weight
 */
class Item extends CActiveRecord
{
	
	//constants for pinnacle status data field
	const STATUS_PINNACLE_READY=1;
	const STATUS_PINNACLE_NOT_READY=0;
	
	//constants for maintenance status data field
	const STATUS_MAINT_PRICE_CHANGE=0;
	const STATUS_MAINT_STATUS_CHANGE_DWSO=1;
	const STATUS_MAINT_STATUS_CHANGE_DISCONTINUED=2;
	
	//constants forgeneral status data field
	const STATUS_GENERAL_PRELIM=0;
	const STATUS_GENERAL_READY_REVIEW=1;
	const STATUS_GENERAL_APPROVED_ADD=2;
	const STATUS_GENERAL_REJECTED=3;
	const STATUS_GENERAL_ON_HOLD=4;
	const STATUS_GENERAL_ACTIVE=5;
	
	
	/**
	 * Returns the static model of the specified AR class.
	 * @return Item the static model class
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
		return 'item';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('product_status, ad_status, maint_status, img_size, img_needed, img_second_needed, seo_metas, prod_search_metas, facebook_metas, retail_price, base_prace, prod_match_img, url_set, weight', 'required'),
			array('product_status, ad_status, maint_status, img_size, img_needed, img_second_needed, seo_metas, prod_search_metas, facebook_metas, retail_price, base_prace, prod_match_img, url_set', 'numerical', 'integerOnly'=>true),
			array('weight', 'numerical'),
			array('product_id', 'length', 'max'=>255),
			array('name, url, custom_url, img, img_comment, img_second_comment', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, product_id, name, url, custom_url, img, product_status, ad_status, maint_status, img_size, img_needed, img_comment, img_second_needed, img_second_comment, seo_metas, prod_search_metas, facebook_metas, retail_price, base_prace, prod_match_img, url_set, weight', 'safe', 'on'=>'search'),
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
			'product_id' => 'Product',
			'name' => 'Name',
			'url' => 'Url',
			'custom_url' => 'Custom Url',
			'img' => 'Img',
			'product_status' => 'Product Status',
			'ad_status' => 'Ad Status',
			'maint_status' => 'Maint Status',
			'img_size' => 'Img Size',
			'img_needed' => 'Img Needed',
			'img_comment' => 'Img Comment',
			'img_second_needed' => 'Img Second Needed',
			'img_second_comment' => 'Img Second Comment',
			'seo_metas' => 'Seo Metas',
			'prod_search_metas' => 'Prod Search Metas',
			'facebook_metas' => 'Facebook Metas',
			'retail_price' => 'Retail Price',
			'base_prace' => 'Base Prace',
			'prod_match_img' => 'Prod Match Img',
			'url_set' => 'Url Set',
			'weight' => 'Weight',
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
		$criteria->compare('product_id',$this->product_id,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('custom_url',$this->custom_url,true);
		$criteria->compare('img',$this->img,true);
		$criteria->compare('product_status',$this->product_status);
		$criteria->compare('ad_status',$this->ad_status);
		$criteria->compare('maint_status',$this->maint_status);
		$criteria->compare('img_size',$this->img_size);
		$criteria->compare('img_needed',$this->img_needed);
		$criteria->compare('img_comment',$this->img_comment,true);
		$criteria->compare('img_second_needed',$this->img_second_needed);
		$criteria->compare('img_second_comment',$this->img_second_comment,true);
		$criteria->compare('seo_metas',$this->seo_metas);
		$criteria->compare('prod_search_metas',$this->prod_search_metas);
		$criteria->compare('facebook_metas',$this->facebook_metas);
		$criteria->compare('retail_price',$this->retail_price);
		$criteria->compare('base_prace',$this->base_prace);
		$criteria->compare('prod_match_img',$this->prod_match_img);
		$criteria->compare('url_set',$this->url_set);
		$criteria->compare('weight',$this->weight);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}