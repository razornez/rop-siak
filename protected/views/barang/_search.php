<?php
/* @var $this BarangController */
/* @var $model Barang */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'kode_barang'); ?>
		<?php echo $form->textField($model,'kode_barang',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_barang'); ?>
		<?php echo $form->textField($model,'nama_barang',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'satuan'); ?>
		<?php echo $form->textField($model,'satuan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stok_akhir'); ?>
		<?php echo $form->textField($model,'stok_akhir'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'harga'); ?>
		<?php echo $form->textField($model,'harga'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'penggunaan_tahun'); ?>
		<?php echo $form->textField($model,'penggunaan_tahun'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'safety_stok'); ?>
		<?php echo $form->textField($model,'safety_stok'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'no_rak'); ?>
		<?php echo $form->textField($model,'no_rak'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rop'); ?>
		<?php echo $form->textField($model,'rop'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'eoq'); ?>
		<?php echo $form->textField($model,'eoq'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->