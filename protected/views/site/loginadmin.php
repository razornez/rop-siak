<style type="text/css">
body
{
    background: url('images/bg.jpg') fixed;
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

.form-control {
    width: 300px;
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
<center><div class="log">
    <h1><center>Login</center></h1><br>
    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'login-form',
        'enableClientValidation'=>true,
        'clientOptions'=>array(
            'validateOnSubmit'=>true,
        ),
    )); ?>
        <div class="row"><center>
            <?php echo $form->textField($model,'username',array('class'=>'form-control','placeholder'=>'Username')); ?>
            <?php echo $form->error($model,'username'); ?>
        </center></div><br> 

        <div class="row"><center>
            <?php echo $form->passwordField($model,'password',array('class'=>'form-control','placeholder'=>'Password')); ?>
            <?php echo $form->error($model,'password'); ?>
        </div>

        <div class="row rememberMe"><center>
            <?php echo $form->checkBox($model,'rememberMe'); ?>
            <?php echo $form->label($model,'rememberMe'); ?>
            <?php echo $form->error($model,'rememberMe'); ?>
        </center></div>

        <div class="row buttons"><center>
            <?php echo CHtml::submitButton('Login',array('class'=>'btn btn-primary')); ?>
        </center></div>

    <?php $this->endWidget(); ?>
</div></center>
</div> <!-- .entry-meta -->
</div>
