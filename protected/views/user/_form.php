<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
  	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>
<div class="row wrapper border-bottom white-bg page-heading" style="margin-left: 0px;">
    <div class="col-lg-10">
        <h2>User</h2>
        <ol class="breadcrumb">
	        <li>
	        	<a href="index.html">Home</a>
	        </li>
	        <li>
	        	<a>User</a>
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
                                        <?php echo $form->labelEx($model,'USER_NAME'); ?>
                                        <?php echo $form->textField($model,'USER_NAME',array('size'=>60,'maxlength'=>200,'class'=>'form-control','placeholder'=>'Masukan Nama User','id'=>'cek')); ?>
                                        <?php echo $form->error($model,'USER_NAME'); ?>
                                    </div>
                                    <div class="form-group">
                                        <?php echo $form->labelEx($model,'USER_PASSWORD'); ?>
                                        <?php echo $form->passwordField($model,'USER_PASSWORD',array('size'=>60,'maxlength'=>200,'class'=>'form-control','placeholder'=>'Masukan Password','id'=>'cek')); ?>
                                        <?php echo $form->error($model,'USER_PASSWORD'); ?>
                                    </div>
                                    <div class="form-group">
                                        <?php echo $form->labelEx($model,'USER_FULLNAME'); ?>
                                        <?php echo $form->textField($model,'USER_FULLNAME',array('size'=>60,'maxlength'=>200,'class'=>'form-control','placeholder'=>'Masukan Nama Lengkap','id'=>'cek')); ?>
                                        <?php echo $form->error($model,'USER_FULLNAME'); ?>
                                    </div>
                                    <div class="form-group">
                                        <?php echo $form->labelEx($model,'GROUP_ID'); ?>
                                        <?php echo $form->dropDownList($model,'GROUP_ID', CHtml::listData(UserGroup::model()->findAll(),'GROUP_ID','GROUP_NAME'),array('empty'=>'--Pilih--','class'=>'form-control')); ?>
                                        <?php echo $form->error($model,'GROUP_ID'); ?>
                                    </div>
                                    <div class="form-group">
                                        <?php echo $form->labelEx($model,'USER_IMAGE'); ?>
                                        <?php echo $form->fileField($model,'USER_IMAGE',array('class'=>'form-control','accept'=>'.jpg,.png,.jpeg')); ?>
                                        <?php echo $form->error($model,'USER_IMAGE'); ?>
                                    </div>
                                    <div class="form-group">
                                            <label>Is Active</label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" id="isActive" class="isActive" checked>(Ceklis untuk Ya)
                                            </label>
                                            <?php echo $form->hiddenField($model,'USER_IS_ACTIVE'); ?>
                                            <?php echo $form->error($model,'USER_IS_ACTIVE'); ?>
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

document.getElementById("User_USER_IMAGE").onchange = function() {
    var fileName = this.value;
    var fileExtension = fileName.substr(fileName.length - 4);

    console.log(fileExtension);
    if (fileExtension != ".jpg" && fileExtension != ".png" && fileExtension != ".jpeg" && fileExtension != ".JPG") {
        alert("Format gambar yang diizinkan (jpg,png,jpeg)!");
        $('input#User_USER_IMAGE').val("");
    }
}

function updateTextArea() {     
   var allVals = [];
   $('.form-group :checked').each(function(i) {
          
       allVals.push("1");
   });
   $('#User_USER_IS_ACTIVE').val(allVals).attr('rows',allVals.length) ;
    
   }
   $(function() {
      $('.form-group input').click(updateTextArea);
      updateTextArea();
});

$(document).ready(function(){
	$('.add_data').click(function () {
		dcp = parseInt($('#user_USER_IMAGE').val()); 
		if (dcp==null) { // jika nilai textfield kosong diganti dengan 0
            dcp = 'no image';
        }
    $("#user_USER_IMAGE").val(dcp);         
    });
});
</script>