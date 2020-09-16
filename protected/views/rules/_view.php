<?php
/* @var $this RulesController */
/* @var $data Rules */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('biaya_pemesanan')); ?>:</b>
	<?php echo CHtml::encode($data->biaya_pemesanan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('biaya_penyimpanan')); ?>:</b>
	<?php echo CHtml::encode($data->biaya_penyimpanan); ?>
	<br />


</div>