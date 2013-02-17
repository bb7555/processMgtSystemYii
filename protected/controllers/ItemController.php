<?php

class ItemController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';
	
	private function pinnacle_status($num)
	{
		if($num==Item::STATUS_PINNACLE_READY)
		{
			$pinnacle_status=Item::STATUS_PINNACLE_READY;
		}elseif($num==Item::STATUS_PINNACLE_NOT_READY)
		{
			$pinnacle_status=Item::STATUS_PINNACLE_NOT_READY;
		}
		
		return $pinnacle_status;
	}
	
	private function general_status($num)
	{
		if($num==Item::STATUS_GENERAL_PRELIM)
		{
			$pinnacle_status=Item::STATUS_GENERAL_PRELIM;
		}elseif($num==Item::STATUS_GENERAL_READY_REVIEW)
		{
			$pinnacle_status=Item::STATUS_GENERAL_READY_REVIEW;
		}elseif($num==Item::STATUS_GENERAL_APPROVED_ADD)
		{
			$pinnacle_status=Item::STATUS_GENERAL_APPROVED_ADD;
		}elseif($num==Item::STATUS_GENERAL_REJECTED)
		{
			$pinnacle_status=Item::STATUS_GENERAL_REJECTED;
		}elseif($num==Item::STATUS_GENERAL_ON_HOLD)
		{
			$pinnacle_status=Item::STATUS_GENERAL_ON_HOLD;
		}elseif($num==Item::STATUS_GENERAL_ACTIVE)
		{
			$pinnacle_status=Item::STATUS_GENERAL_ACTIVE;
		}
		
		return $general_status;
	}
	
	private function maint_status($num)
	{
		if($num==Item::STATUS_MAINT_PRICE_CHANGE)
		{
			$maint_status=Item::STATUS_MAINT_PRICE_CHANGE;
		}elseif($num==Item::STATUS_MAINT_STATUS_CHANGE_DWSO)
		{
			$maint_status=Item::STATUS_MAINT_STATUS_CHANGE_DWSO;
		}if($num==Item::STATUS_MAINT_STATUS_CHANGE_DISCONTINUED)
		{
			$maint_status=Item::STATUS_MAINT_STATUS_CHANGE_DISCONTINUED;
		}
		
		return $maint_status;
	}
	
	public function display_pinnacle_status($data)
	{
		
		echo"<select name=\"Item[product_status]\">";
		if($data==Item::STATUS_PINNACLE_READY)
		{
			echo"<option selected=\"selected\" value=\"".Item::STATUS_PINNACLE_READY."\">Ready</option>";
		}else{
			echo"<option value=\"".Item::STATUS_PINNACLE_READY."\">Ready</option>";
		}
		
		if($data==Item::STATUS_PINNACLE_NOT_READY)
		{
			echo"<option selected=\"selected\" value=\"".Item::STATUS_PINNACLE_NOT_READY."\">NOT Ready</option>";
		}else{
			echo"<option value=\"".Item::STATUS_PINNACLE_NOT_READY."\">NOT Ready</option>";
		}
		echo"</select>";
	}
	
	public function display_general_status($data)
	{
		
		echo"<select name=\"Item[ad_status]\">";
		
		if($data==Item::STATUS_GENERAL_PRELIM)
		{
			echo"<option selected=\"selected\" value=\"".Item::STATUS_GENERAL_PRELIM."\">Prelim</option>";
		}else{
			echo"<option value=\"".Item::STATUS_GENERAL_PRELIM."\">Prelim</option>";
		}
		
		if($data==Item::STATUS_GENERAL_READY_REVIEW)
		{
			echo"<option selected=\"selected\" value=\"".Item::STATUS_GENERAL_READY_REVIEW."\">Ready For Review</option>";
		}else{
			echo"<option value=\"".Item::STATUS_GENERAL_READY_REVIEW."\">Ready For Review</option>";
		}
		
		if($data==Item::STATUS_GENERAL_APPROVED_ADD)
		{
			echo"<option selected=\"selected\" value=\"".Item::STATUS_GENERAL_APPROVED_ADD."\">Approved</option>";
		}else{
			echo"<option value=\"".Item::STATUS_GENERAL_APPROVED_ADD."\">Approved</option>";
		}
		
		if($data==Item::STATUS_GENERAL_REJECTED)
		{
			echo"<option selected=\"selected\" value=\"".Item::STATUS_GENERAL_REJECTED."\">Rejected</option>";
		}else{
			echo"<option value=\"".Item::STATUS_GENERAL_REJECTED."\">Rejected</option>";
		}
		
		if($data==Item::STATUS_GENERAL_ON_HOLD)
		{
			echo"<option selected=\"selected\" value=\"".Item::STATUS_GENERAL_ON_HOLD."\">On Hold</option>";
		}else{
			echo"<option value=\"".Item::STATUS_GENERAL_ON_HOLD."\">On Hold</option>";
		}
		
		if($data==Item::STATUS_GENERAL_ACTIVE)
		{
			echo"<option selected=\"selected\" value=\"".Item::STATUS_GENERAL_ACTIVE."\">Active</option>";
		}else{
			echo"<option value=\"".Item::STATUS_GENERAL_ACTIVE."\">Active</option>";
		}
		
		echo"</select>";
	}
	
	public function display_maint_status($data)
	{
		
		echo"<select name=\"Item[maint_status]\">";
		
		if($data==Item::STATUS_MAINT_PRICE_CHANGE)
		{
			echo"<option selected=\"selected\" value=\"".Item::STATUS_MAINT_PRICE_CHANGE."\">Price Change</option>";
		}else{
			echo"<option value=\"".Item::STATUS_MAINT_PRICE_CHANGE."\">Price Change</option>";
		}
		
		if($data==Item::STATUS_MAINT_STATUS_CHANGE_DWSO)
		{
			echo"<option selected=\"selected\" value=\"".Item::STATUS_MAINT_STATUS_CHANGE_DWSO."\">DWSO</option>";
		}else{
			echo"<option value=\"".Item::STATUS_MAINT_STATUS_CHANGE_DWSO."\">DWSO</option>";
		}
		
		if($data==Item::STATUS_MAINT_STATUS_CHANGE_DISCONTINUED)
		{
			echo"<option selected=\"selected\" value=\"".Item::STATUS_MAINT_STATUS_CHANGE_DISCONTINUED."\">Discontnued</option>";
		}else{
			echo"<option value=\"".Item::STATUS_MAINT_STATUS_CHANGE_DISCONTINUED."\">Discontnued</option>";
		}
		
		echo"</select>";
	}
	
	//SET CHECKBOX BOOLEAN VALUES
	
	public function set_checkbox($data)
	{
		if($data==0)
		{
 			$test=false;
		}else if($data==1){
			$test=true;	
		}
		
		return $test;
	}
	
	

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Item;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Item']))
		{
			$model->attributes=$_POST['Item'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Item']))
		{
			$model->attributes=$_POST['Item'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Item');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Item('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Item']))
			$model->attributes=$_GET['Item'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Item::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='item-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
