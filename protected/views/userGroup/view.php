<?php
/* @var $this UserGroupController */
/* @var $model UserGroup */

$this->breadcrumbs=array(
	'User Groups'=>array('index'),
	$model->GROUP_ID,
);

$this->menu=array(
	array('label'=>'List UserGroup', 'url'=>array('index')),
	array('label'=>'Create UserGroup', 'url'=>array('create')),
	array('label'=>'Update UserGroup', 'url'=>array('update', 'id'=>$model->GROUP_ID)),
	array('label'=>'Delete UserGroup', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->GROUP_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UserGroup', 'url'=>array('admin')),
);
?>

<h1>View UserGroup #<?php echo $model->GROUP_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'GROUP_ID',
		'GROUP_NAME',
	),
)); ?>
