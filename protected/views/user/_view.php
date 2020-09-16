<?php
/* @var $this UserController */
/* @var $data User */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('USER_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->USER_ID), array('view', 'id'=>$data->USER_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('GROUP_ID')); ?>:</b>
	<?php echo CHtml::encode($data->GROUP_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USER_NAME')); ?>:</b>
	<?php echo CHtml::encode($data->USER_NAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USER_PASSWORD')); ?>:</b>
	<?php echo CHtml::encode($data->USER_PASSWORD); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USER_FULLNAME')); ?>:</b>
	<?php echo CHtml::encode($data->USER_FULLNAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USER_IS_ACTIVE')); ?>:</b>
	<?php echo CHtml::encode($data->USER_IS_ACTIVE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USER_IMAGE')); ?>:</b>
	<?php echo CHtml::encode($data->USER_IMAGE); ?>
	<br />


</div>