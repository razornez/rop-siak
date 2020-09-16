<?php
/* @var $this BarangMasukController */
/* @var $model BarangMasuk */

$this->breadcrumbs=array(
	'Barang Masuks'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List BarangMasuk', 'url'=>array('index')),
	array('label'=>'Create BarangMasuk', 'url'=>array('create')),
	array('label'=>'Update BarangMasuk', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete BarangMasuk', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BarangMasuk', 'url'=>array('admin')),
);
?>

<h1>View BarangMasuk #<?php echo $model->id; ?></h1>

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
