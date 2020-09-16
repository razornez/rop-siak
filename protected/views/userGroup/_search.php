<?php
/* @var $this UserGroupController */
/* @var $model UserGroup */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'GROUP_ID'); ?>
		<?php echo $form->textField($model,'GROUP_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'GROUP_NAME'); ?>
		<?php echo $form->textField($model,'GROUP_NAME',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->