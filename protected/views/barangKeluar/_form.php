<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'Barang-keluar-form',
	'enableAjaxValidation'=>false,
	)); ?>
	<div class="row wrapper border-bottom white-bg page-heading" style="margin-left: 0px;">
		<div class="col-lg-10">
			<h2>Barang Keluar</h2>
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
												<div class="form-group">
													<?php echo $form->labelEx($model,'kode_barang'); ?>
													<?php if (empty($_GET['name'])) {
													echo $form->dropDownList($model,'kode_barang', CHtml::listData(Barang::model()->findAll(),'kode_barang','nama_barang'),array('empty'=>'--Pilih--','class'=>'form-control'));
													}else{ ?>
														<input size="60" maxlength="200" class="form-control" id="cek" min="1" value="<?php echo $_GET['name'] ?>" name="BarangKeluar[kode_barang]" type="text" readonly>
													<?php } ?>
													<?php echo $form->error($model,'kode_barang'); ?>
												</div>
												<div class="form-group">
													<?php echo $form->labelEx($model,'jumlah'); ?>
													<?php echo $form->textField($model,'jumlah',array('size'=>60,'maxlength'=>200,'class'=>'form-control','id'=>'cek', 'min'=>'1', 'value'=>'1')); ?>
													<?php echo $form->error($model,'jumlah'); ?>
												</div>

												<div class="form-group">
												<?php echo $form->labelEx($model,'tanggal'); ?>
													<?php $this->widget('zii.widgets.jui.CJuiDatePicker',
														array(
					                                // you must specify name or model/attribute
															'model'=>$model,
															'attribute'=>'tanggal',
															'value' => date('Y-m-d'),
															'options' => array(
																'dateFormat'=>'yy-mm-dd',
					                                        //'showOn'=>'button',
					                                        //'buttonImage'=>Yii::app()->request->baseUrl.'/images/technorati2.png',
					                                        //'buttonImageOnly'=> true,
																'changeMonth' => 'true',
																'changeYear' => 'true',
																'minDate'=>date('2016-m-d'),
																'maxDate'=>date('yy-mm-dd'),
					                                        //'yearRange'=>'-1',
					                                        // 'showButtonPanel' => 'true', 
					                                        //'constrainInput' => 'false', 
																'duration'=>'fast', 
																'showAnim' =>'slide',
																),
															'htmlOptions' => array(
																'readOnly'=>false,
																'style'=>'z-index: 999;position:relative',
																'class'=>'form-control',
																'value' => date('Y-m-d'),
																),
															)
															); ?>
															<?php echo $form->error($model,'tanggal'); ?>
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