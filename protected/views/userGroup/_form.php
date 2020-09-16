
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-group-form',
	'enableAjaxValidation'=>false,
)); ?>
<div class="row wrapper border-bottom white-bg page-heading" style="margin-left: 0px;">
    <div class="col-lg-10">
        <h2>User Group</h2>
        <ol class="breadcrumb">
	        <li>
	        	<a href="index.html">Home</a>
	        </li>
	        <li>
	        	<a>User Group</a>
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
                                        <?php echo $form->labelEx($model,'GROUP_NAME'); ?>
                                        <?php echo $form->textField($model,'GROUP_NAME',array('size'=>60,'maxlength'=>200,'class'=>'form-control','placeholder'=>'Masukan Nama Grop','id'=>'cek')); ?>
                                        <?php echo $form->error($model,'GROUP_NAME'); ?>
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