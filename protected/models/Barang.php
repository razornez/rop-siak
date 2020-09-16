<?php

/**
 * This is the model class for table "barang".
 *
 * The followings are the available columns in table 'barang':
 * @property string $kode_barang
 * @property string $nama_barang
 * @property integer $satuan
 * @property integer $stok_akhir
 * @property integer $harga
 * @property integer $penggunaan_tahun
 * @property integer $safety_stok
 * @property string $no_rak
 * @property integer $rop
 * @property integer $eoq
 */
class Barang extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Barang the static model class
	 */
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
		return 'barang';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kode_barang, nama_barang, satuan, stok_akhir, harga, penggunaan_tahun, safety_stok, rop, eoq', 'required'),
			array('satuan, stok_akhir, harga, penggunaan_tahun, safety_stok, rop, eoq', 'numerical', 'integerOnly'=>true),
			array('kode_barang, no_rak', 'length', 'max'=>25),
			array('nama_barang', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('kode_barang, nama_barang, satuan, stok_akhir, harga, penggunaan_tahun, safety_stok, no_rak, rop, eoq', 'safe', 'on'=>'search'),
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
			'kode_barang' => 'Kode Barang',
			'nama_barang' => 'Nama Barang',
			'satuan' => 'Satuan',
			'stok_akhir' => 'Stok Akhir',
			'harga' => 'Harga',
			'penggunaan_tahun' => 'Penggunaan Tahun',
			'safety_stok' => 'Safety Stok',
			'no_rak' => 'No Rak',
			'rop' => 'Rop',
			'eoq' => 'Eoq',
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

		$criteria->compare('kode_barang',$this->kode_barang,true);
		$criteria->compare('nama_barang',$this->nama_barang,true);
		$criteria->compare('satuan',$this->satuan);
		$criteria->compare('stok_akhir',$this->stok_akhir);
		$criteria->compare('harga',$this->harga);
		$criteria->compare('penggunaan_tahun',$this->penggunaan_tahun);
		$criteria->compare('safety_stok',$this->safety_stok);
		$criteria->compare('no_rak',$this->no_rak,true);
		$criteria->compare('rop',$this->rop);
		$criteria->compare('eoq',$this->eoq);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}