<?php
/* @var $this BarangMasukController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Barang Masuks',
);

$this->menu=array(
	array('label'=>'Create BarangMasuk', 'url'=>array('create')),
	array('label'=>'Manage BarangMasuk', 'url'=>array('admin')),
);
?>

<h1>Barang Masuks</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
