<style type="text/css">
body
{
    background: url('images/campus anime version wallpaper2.jpg') fixed;
    background-size: cover;
    padding: 0;
    margin: 0;
    font-family: 'Roboto',sans-serif;
}
h1, h2, h3, h4, h5, h6 {
    font-weight: 400;
    color: #fff;
}

label {
    display: inline-block;
    margin-bottom: 5px;
    font-weight: bold;
    color: #fff;
}

p {
    margin: 0px 0px 10px;
    color: #fff;
}
.post .entry-header, .post .entry-title, .post .entry-meta, .post .entry-image, .post .entry-content {
	background: none repeat scroll 0% 0% transparent;
	border: medium none;
	color: rgb(255, 255, 255);
}
input, button, select, textarea{
	color: #666;
}
</style>
<script type="text/javascript">
 $(document).ready(function () {
    $('.forgot-pass').click(function(event) {
      $(".pr-wrap").toggleClass("show-pass-reset");
    }); 
    
    $('.pass-reset-submit').click(function(event) {
      $(".pr-wrap").removeClass("show-pass-reset");
    }); 
});
</script>
<div class="container" style="padding-bottom: 100px; padding-top: 200px;">
<div class="entry-meta">
<center><div class="log" style="width: 400px;">
	<h1><center>Login</center></h1><br>
	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'login-form',
		'enableClientValidation'=>true,
		'clientOptions'=>array(
			'validateOnSubmit'=>true,
		),
	)); ?>
		<div class="row"><center>
			<?php echo $form->labelEx($model,'username'); ?>
			<?php echo $form->textField($model,'username'); ?>
			<?php echo $form->error($model,'username'); ?>
		</center></div><br>	

		<div class="row"><center>
			<?php echo $form->labelEx($model,'password'); ?>
			<?php echo $form->passwordField($model,'password'); ?>
			<?php echo $form->error($model,'password'); ?>
			<p class="hint">
				Belum punya akun, <?php echo CHtml::link(' silahkan register',array('user/create')); ?>
			</center></p>
		</div>

		<div class="row rememberMe"><center>
			<?php echo $form->checkBox($model,'rememberMe'); ?>
			<?php echo $form->label($model,'rememberMe'); ?>
			<?php echo $form->error($model,'rememberMe'); ?>
		</center></div>

		<div class="row buttons"><center>
			<?php echo CHtml::submitButton('Login'); ?>
		</center></div>

	<?php $this->endWidget(); ?>
</div></center>
</div> <!-- .entry-meta -->
</div>
