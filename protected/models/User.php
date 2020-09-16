<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $USER_ID
 * @property integer $GROUP_ID
 * @property string $USER_NAME
 * @property string $USER_PASSWORD
 * @property string $USER_FULLNAME
 * @property integer $USER_IS_ACTIVE
 * @property string $USER_IMAGE
 *
 * The followings are the available model relations:
 * @property Post[] $posts
 * @property UserGroup $gROUP
 */
class User extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public $GROUP_NAME;
	public $jumlah;
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
			array('GROUP_ID, USER_NAME, USER_PASSWORD, USER_FULLNAME, USER_IS_ACTIVE', 'required'),
			array('GROUP_ID, USER_IS_ACTIVE', 'numerical', 'integerOnly'=>true),
			array('USER_NAME', 'length', 'max'=>10),
			array('USER_PASSWORD', 'length', 'max'=>30),
			array('USER_FULLNAME', 'length', 'max'=>50),
			array('USER_IMAGE', 'length', 'max'=>200),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('USER_ID, GROUP_ID, USER_NAME, USER_PASSWORD, USER_FULLNAME, USER_IS_ACTIVE, USER_IMAGE', 'safe', 'on'=>'search'),
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
			'posts' => array(self::HAS_MANY, 'Post', 'USER_ID'),
			'gROUP' => array(self::BELONGS_TO, 'UserGroup', 'GROUP_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'USER_ID' => 'User',
			'GROUP_ID' => 'Group',
			'USER_NAME' => 'User Name',
			'USER_PASSWORD' => 'User Password',
			'USER_FULLNAME' => 'User Fullname',
			'USER_IS_ACTIVE' => 'User Is Active',
			'USER_IMAGE' => 'User Image',
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

		$criteria->compare('USER_ID',$this->USER_ID);
		$criteria->compare('GROUP_ID',$this->GROUP_ID);
		$criteria->compare('USER_NAME',$this->USER_NAME,true);
		$criteria->compare('USER_PASSWORD',$this->USER_PASSWORD,true);
		$criteria->compare('USER_FULLNAME',$this->USER_FULLNAME,true);
		$criteria->compare('USER_IS_ACTIVE',$this->USER_IS_ACTIVE);
		$criteria->compare('USER_IMAGE',$this->USER_IMAGE,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}