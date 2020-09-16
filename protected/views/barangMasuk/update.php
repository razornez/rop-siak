<?php
/* @var $this BarangMasukController */
/* @var $model BarangMasuk */

$this->breadcrumbs=array(
	'Barang Masuks'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BarangMasuk', 'url'=>array('index')),
	array('label'=>'Create BarangMasuk', 'url'=>array('create')),
	array('label'=>'View BarangMasuk', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage BarangMasuk', 'url'=>array('admin')),
);
?>

<h1>Update BarangMasuk <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>