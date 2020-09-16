<?php
/* @var $this BarangKeluarController */
/* @var $model BarangKeluar */

$this->breadcrumbs=array(
	'Barang Keluars'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BarangKeluar', 'url'=>array('index')),
	array('label'=>'Create BarangKeluar', 'url'=>array('create')),
	array('label'=>'View BarangKeluar', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage BarangKeluar', 'url'=>array('admin')),
);
?>

<h1>Update BarangKeluar <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>