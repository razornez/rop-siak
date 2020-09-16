<?php

/**
 * This is the model class for table "rules".
 *
 * The followings are the available columns in table 'rules':
 * @property integer $id
 * @property integer $biaya_pemesanan
 * @property integer $biaya_penyimpanan
 * @property integer $lead_time
 */
class Rules extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Rules the static model class
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
		return 'rules';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('biaya_pemesanan, biaya_penyimpanan, lead_time', 'required'),
			array('biaya_pemesanan, biaya_penyimpanan, lead_time', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, biaya_pemesanan, biaya_penyimpanan, lead_time', 'safe', 'on'=>'search'),
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
			'biaya_pemesanan' => 'Biaya Pemesanan',
			'biaya_penyimpanan' => 'Biaya Penyimpanan',
			'lead_time' => 'Lead Time',
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
		$criteria->compare('biaya_pemesanan',$this->biaya_pemesanan);
		$criteria->compare('biaya_penyimpanan',$this->biaya_penyimpanan);
		$criteria->compare('lead_time',$this->lead_time);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}