<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'USER_ID'); ?>
		<?php echo $form->textField($model,'USER_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'GROUP_ID'); ?>
		<?php echo $form->textField($model,'GROUP_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USER_NAME'); ?>
		<?php echo $form->textField($model,'USER_NAME',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USER_PASSWORD'); ?>
		<?php echo $form->textField($model,'USER_PASSWORD',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USER_FULLNAME'); ?>
		<?php echo $form->textField($model,'USER_FULLNAME',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USER_IS_ACTIVE'); ?>
		<?php echo $form->textField($model,'USER_IS_ACTIVE'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USER_IMAGE'); ?>
		<?php echo $form->textField($model,'USER_IMAGE',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->