<?php
/* @var $this BarangController */
/* @var $data Barang */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('kode_barang')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->kode_barang), array('view', 'id'=>$data->kode_barang)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_barang')); ?>:</b>
	<?php echo CHtml::encode($data->nama_barang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('satuan')); ?>:</b>
	<?php echo CHtml::encode($data->satuan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stok_akhir')); ?>:</b>
	<?php echo CHtml::encode($data->stok_akhir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('harga')); ?>:</b>
	<?php echo CHtml::encode($data->harga); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('penggunaan_tahun')); ?>:</b>
	<?php echo CHtml::encode($data->penggunaan_tahun); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('safety_stok')); ?>:</b>
	<?php echo CHtml::encode($data->safety_stok); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_rak')); ?>:</b>
	<?php echo CHtml::encode($data->safety_stok); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('rop')); ?>:</b>
	<?php echo CHtml::encode($data->rop); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('eoq')); ?>:</b>
	<?php echo CHtml::encode($data->eoq); ?>
	<br />

	*/ ?>

</div>