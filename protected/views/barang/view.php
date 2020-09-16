<?php
/* @var $this BarangController */
/* @var $model Barang */

$this->breadcrumbs=array(
	'Barangs'=>array('index'),
	$model->kode_barang,
);

$this->menu=array(
	array('label'=>'List Barang', 'url'=>array('index')),
	array('label'=>'Create Barang', 'url'=>array('create')),
	array('label'=>'Update Barang', 'url'=>array('update', 'id'=>$model->kode_barang)),
	array('label'=>'Delete Barang', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->kode_barang),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Barang', 'url'=>array('admin')),
);
?>

<h1>View Barang #<?php echo $model->kode_barang; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'kode_barang',
		'nama_barang',
		'satuan',
		'stok_akhir',
		'harga',
		'penggunaan_tahun',
		'safety_stok',
		'rop',
		'eoq',
	),
)); ?>
