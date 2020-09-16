<?php
/* @var $this UserGroupController */
/* @var $data UserGroup */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('GROUP_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->GROUP_ID), array('view', 'id'=>$data->GROUP_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('GROUP_NAME')); ?>:</b>
	<?php echo CHtml::encode($data->GROUP_NAME); ?>
	<br />


</div>