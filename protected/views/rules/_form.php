<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'rules-form',
	'enableAjaxValidation'=>false,
	)); ?>
	<div class="row wrapper border-bottom white-bg page-heading" style="margin-left: 0px;">
		<div class="col-lg-10">
			<h2>Rules</h2>
			<ol class="breadcrumb">
				<li>
					<a href="index.html">Home</a>
				</li>
				<li>
					<a>Rules</a>
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
												<div class="form-group">
													<?php echo $form->labelEx($model,'biaya_pemesanan'); ?>
													<?php echo $form->textField($model,'biaya_pemesanan',array('size'=>60,'maxlength'=>200,'class'=>'form-control','placeholder'=>'Persentase dari harga barang, contoh 10%')); ?>
													<?php echo $form->error($model,'biaya_pemesanan'); ?>
												</div>
												<div class="form-group">
													<?php echo $form->labelEx($model,'biaya_penyimpanan'); ?>
													<?php echo $form->textField($model,'biaya_penyimpanan',array('size'=>60,'maxlength'=>200,'class'=>'form-control','placeholder'=>'Persentase dari harga barang, contoh 25%')); ?>
													<?php echo $form->error($model,'biaya_penyimpanan'); ?>
												</div>
												<div class="form-group">
													<?php echo $form->labelEx($model,'lead_time'); ?>
													<?php echo $form->textField($model,'lead_time',array('size'=>60,'maxlength'=>200,'class'=>'form-control','id'=>'cek')); ?>
													<?php echo $form->error($model,'lead_time'); ?>
												</div>
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

			document.getElementById("Rules_Rules_IMAGE").onchange = function() {
				var fileName = this.value;
				var fileExtension = fileName.substr(fileName.length - 4);

				console.log(fileExtension);
				if (fileExtension != ".jpg" && fileExtension != ".png" && fileExtension != ".jpeg" && fileExtension != ".JPG") {
					alert("Format gambar yang diizinkan (jpg,png,jpeg)!");
					$('input#Rules_Rules_IMAGE').val("");
				}
			}

			function updateTextArea() {     
				var allVals = [];
				$('.form-group :checked').each(function(i) {

					allVals.push("1");
				});
				$('#Rules_Rules_IS_ACTIVE').val(allVals).attr('rows',allVals.length) ;

			}
			$(function() {
				$('.form-group input').click(updateTextArea);
				updateTextArea();
			});

			$(document).ready(function(){
				$('.add_data').click(function () {
					dcp = parseInt($('#Rules_Rules_IMAGE').val()); 
		if (dcp==null) { // jika nilai textfield kosong diganti dengan 0
			dcp = 'no image';
		}
		$("#Rules_Rules_IMAGE").val(dcp);         
	});
			});
		</script>