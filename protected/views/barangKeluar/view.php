<?php
/* @var $this BarangKeluarController */
/* @var $model BarangKeluar */

$this->breadcrumbs=array(
	'Barang Keluars'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List BarangKeluar', 'url'=>array('index')),
	array('label'=>'Create BarangKeluar', 'url'=>array('create')),
	array('label'=>'Update BarangKeluar', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete BarangKeluar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BarangKeluar', 'url'=>array('admin')),
);
?>

<h1>View BarangKeluar #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'kode_barang',
		'jumlah',
		'tanggal',
		'user_id',
	),
)); ?>
