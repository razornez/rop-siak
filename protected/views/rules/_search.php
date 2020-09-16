<?php
/* @var $this RulesController */
/* @var $model Rules */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'biaya_pemesanan'); ?>
		<?php echo $form->textField($model,'biaya_pemesanan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'biaya_penyimpanan'); ?>
		<?php echo $form->textField($model,'biaya_penyimpanan'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->