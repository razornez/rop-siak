<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'barang-form',
	'enableAjaxValidation'=>false,
	)); ?>
	<div class="row wrapper border-bottom white-bg page-heading" style="margin-left: 0px;">
		<div class="col-lg-10">
			<h2>Barang</h2>
			<ol class="breadcrumb">
				<li>
					<a href="index.html">Home</a>
				</li>
				<li>
					<a>Barang</a>
				</li>
				<?php  if(Yii::app()->controller->action->id == 'create') { ?>
					<li class="active">
						<strong>Create</strong>
					</li>
					<?php }else{ ?>
					<li class="active">
						<strong>Update</strong>
					</li>
					<?php } ?>
				</ol>
			</div>
			<!-- Content Now -->
			<div class="wrapper wrapper-content animated fadeInRight">
				<div class="row">
					<div class="col-lg-12">
						<div class="ibox float-e-margins" style="width: 95%;">
							<div class="ibox-content text-center p-md">
								<div class="content-panel">
									<div align="left">
										<div class="panel panel-default">
											<div class="panel-body">
												<?php  if(Yii::app()->controller->action->id == 'create') { ?>
												<div class="form-group">
													<?php echo $form->errorSummary($model); ?>
													<?php echo $form->labelEx($model,'kode_barang'); ?>
													<?php echo $form->textField($model,'kode_barang',array('size'=>60,'maxlength'=>200,'class'=>'form-control','id'=>'cek')); ?>
													<?php echo $form->error($model,'kode_barang'); ?>
												</div>
												<?php }else{ ?>
												<div class="form-group">
													<?php echo $form->errorSummary($model); ?>
													<?php echo $form->labelEx($model,'kode_barang'); ?>
													<?php echo $form->textField($model,'kode_barang',array('size'=>60,'maxlength'=>200,'class'=>'form-control','id'=>'cek', 'disabled'=>true)); ?>
													<?php echo $form->error($model,'kode_barang'); ?>
												</div>
												<?php } ?>
												<div class="form-group">
													<?php echo $form->labelEx($model,'nama_barang'); ?>
													<?php echo $form->textField($model,'nama_barang',array('size'=>60,'maxlength'=>200,'class'=>'form-control','id'=>'cek')); ?>
													<?php echo $form->error($model,'nama_barang'); ?>
												</div>

												<div class="form-group">
													<?php echo $form->labelEx($model,'satuan'); ?>
													<?php echo $form->dropDownList($model,'satuan',array(1=>"Pcs",2=>"Meter"),array('empty'=>'--Pilih--','class'=>'form-control')); ?>
													<?php echo $form->error($model,'satuan'); ?>
												</div>
												<?php  if(Yii::app()->controller->action->id == 'create') { ?>
												<div class="form-group">
													<?php echo $form->labelEx($model,'stok_akhir'); ?>
													<?php echo $form->textField($model,'stok_akhir',array('size'=>60,'maxlength'=>200,'class'=>'form-control','id'=>'cek')); ?>
													<?php echo $form->error($model,'stok_akhir'); ?>
												</div>
												<?php }else{ ?>
												<div class="form-group">
													<?php echo $form->labelEx($model,'stok_akhir'); ?>
													<?php echo $form->textField($model,'stok_akhir',array('size'=>60,'maxlength'=>200,'class'=>'form-control','id'=>'cek', 'disabled'=>true)); ?>
													<?php echo $form->error($model,'stok_akhir'); ?>
												</div>
												<?php } ?>
												<div class="form-group">
													<?php echo $form->labelEx($model,'harga'); ?>
													<?php echo $form->textField($model,'harga',array('size'=>60,'maxlength'=>200,'class'=>'form-control','id'=>'cek')); ?>
													<?php echo $form->error($model,'harga'); ?>
												</div>
												<div class="form-group">
													<?php echo $form->labelEx($model,'penggunaan_tahun'); ?>
													<?php echo $form->textField($model,'penggunaan_tahun',array('size'=>60,'maxlength'=>200,'class'=>'form-control','id'=>'cek')); ?>
													<?php echo $form->error($model,'penggunaan_tahun'); ?>
												</div>
												<div class="form-group">
													<?php echo $form->labelEx($model,'safety_stok'); ?>
													<?php echo $form->textField($model,'safety_stok',array('size'=>60,'maxlength'=>200,'class'=>'form-control','id'=>'cek')); ?>
													<?php echo $form->error($model,'safety_stok'); ?>
												</div>
												<div class="form-group">
													<?php echo $form->labelEx($model,'no_rak'); ?>
													<?php echo $form->textField($model,'no_rak',array('size'=>60,'maxlength'=>200,'class'=>'form-control','id'=>'cek')); ?>
													<?php echo $form->error($model,'no_rak'); ?>
												</div>
												<?php 
												$bp=YII::app()->db->createCommand("SELECT BIAYA_PEMESANAN FROM RULES LIMIT 1")->queryScalar();
												$bpe=YII::app()->db->createCommand("SELECT BIAYA_PENYIMPANAN FROM RULES LIMIT 1")->queryScalar();
												$lt=YII::app()->db->createCommand("SELECT LEAD_TIME FROM RULES LIMIT 1")->queryScalar();
												error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
												// $r_eoq = ( 2 * $model->penggunaan_tahun * (($bp/100) * $model->harga)) / (($bpe/100) * $model->harga);
												// $rr_eoq = round(sqrt($r_eoq), 0, PHP_ROUND_HALF_UP);

												// echo $form->hiddenField($model,'eoq',array('size'=>60,'maxlength'=>200,'class'=>'form-control','value'=>$rr_eoq));
												?>

												<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-primary','id'=>'add_data')); ?>
												<button type="reset" class="btn btn-default">Reset</button>
											</div>
										</div>
									</div>
								</div><!-- /content-panel -->
							</div><!-- /col-md-12 -->
						</div><!-- /row -->
					</div>
				</div>
			</div>
		</div>
		<?php $this->endWidget(); ?>
		<script>

			document.getElementById("Barang_Barang_IMAGE").onchange = function() {
				var fileName = this.value;
				var fileExtension = fileName.substr(fileName.length - 4);

				console.log(fileExtension);
				if (fileExtension != ".jpg" && fileExtension != ".png" && fileExtension != ".jpeg" && fileExtension != ".JPG") {
					alert("Format gambar yang diizinkan (jpg,png,jpeg)!");
					$('input#Barang_Barang_IMAGE').val("");
				}
			}

			function updateTextArea() {     
				var allVals = [];
				$('.form-group :checked').each(function(i) {

					allVals.push("1");
				});
				$('#Barang_Barang_IS_ACTIVE').val(allVals).attr('rows',allVals.length) ;

			}
			$(function() {
				$('.form-group input').click(updateTextArea);
				updateTextArea();
			});

			$(document).ready(function(){
				$('.add_data').click(function () {
					dcp = parseInt($('#Barang_Barang_IMAGE').val()); 
		if (dcp==null) { // jika nilai textfield kosong diganti dengan 0
			dcp = 'no image';
		}
		$("#Barang_Barang_IMAGE").val(dcp);         
	});
			});
		</script>