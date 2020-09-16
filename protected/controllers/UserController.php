<?php

class UserController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
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
				'actions'=>array('index','view','delete','manage','admin','create','update'),
				'expression'=>'$user->getLevel()==1',
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
	public function actionManage()
	{
		$this->layout = 'columna';
		$model=new User('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['User']))
			$model->attributes=$_GET['User'];

		$this->render('manage',array(
			'model'=>$model,
		));
	}

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
		$this->layout='columna';
		$model=new User;

		if(isset($_POST['User']))
		{
			Yii::app()->user->setFlash('Success', '<p style="color: rgb(23, 107, 54); width: 100%; padding: 20px; font-size: 14px; text-align: center;">Data Berhasil Disimpan</p>');

			$model->attributes=$_POST['User'];
			
			$sss;
			if ($model->USER_IS_ACTIVE=='1,1'){
				$model->USER_IS_ACTIVE='1';
			}else{
				$model->USER_IS_ACTIVE='0';
			}
			
			if(strlen(trim(CUploadedFile::getInstance($model,'USER_IMAGE'))) > 0)
			{
				$sss=CUploadedFile::getInstance($model,'USER_IMAGE');
				$model->USER_IMAGE=$model->USER_NAME.'.'.$sss->extensionName;
			}

			if($model->save())
			{

				if(strlen(trim($model->USER_IMAGE)) > 0)
				{			
					$sss->saveAs(Yii::app()->basePath . '/../avatar/' . $model->USER_IMAGE);
					$this->redirect(array('manage'));
				}else{
					$this->redirect(array('manage'));
				}	
				
			}
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
		$this->layout='columna';
		$model=$this->loadModel($id);

		if(isset($_POST['User']))
		{
			Yii::app()->user->setFlash('Success', '<p style="color: rgb(23, 107, 54); width: 100%; padding: 20px; font-size: 14px; text-align: center;">Data Berhasil Disimpan</p>');

			$model->attributes=$_POST['User'];
			
			$sss;
			if ($model->USER_IS_ACTIVE=='1,1'){
				$model->USER_IS_ACTIVE='1';
			}else{
				$model->USER_IS_ACTIVE='0';
			}
			
			if(strlen(trim(CUploadedFile::getInstance($model,'USER_IMAGE'))) > 0)
			{
				$sss=CUploadedFile::getInstance($model,'USER_IMAGE');
				$model->USER_IMAGE=$model->USER_NAME.'.'.$sss->extensionName;
			}

			if($model->save())
			{

				if(strlen(trim($model->USER_IMAGE)) > 0)
				{			
					$sss->saveAs(Yii::app()->basePath . '/../avatar/' . $model->USER_IMAGE);
					$this->redirect(array('manage'));
				}else{
					$this->redirect(array('manage'));
				}	
				
			}
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
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('User');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new User('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['User']))
			$model->attributes=$_GET['User'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return User the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=User::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param User $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='user-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
