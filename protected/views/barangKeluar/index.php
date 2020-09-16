<?php
/* @var $this BarangKeluarController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Barang Keluars',
);

$this->menu=array(
	array('label'=>'Create BarangKeluar', 'url'=>array('create')),
	array('label'=>'Manage BarangKeluar', 'url'=>array('admin')),
);
?>

<h1>Barang Keluars</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
