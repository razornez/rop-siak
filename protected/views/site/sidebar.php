<?php
$log=Yii::app()->user->id;
$tot="SELECT user.USER_NAME, user.USER_IMAGE, user.USER_ID, user_group.GROUP_NAME FROM user join user_group on user.GROUP_ID = user_group.GROUP_ID where USER_ID=$log";
$RE=User::model()->findAllBySql($tot);
?>
<ul class="nav" id="side-menu">
    <li class="nav-header">
        <div class="dropdown profile-element">
        <span>
        <?php 
        foreach ($RE as $R) {
        if ($R->USER_IMAGE==''){
            echo "<img alt='image' class='img-circle' src='images/admin.png' width='48px' height='48px' />";
        }else{
            echo "<img alt='image' class='img-circle' src='avatar/{$R->USER_IMAGE}' width='48px' height='48px' />";
        }} ?>
        </span>
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php foreach ($RE as $R) { echo $R->USER_NAME; } ?></strong>
            </span> <span class="text-muted text-xs block"><?php foreach ($RE as $R) { echo $R->GROUP_NAME; } ?><b class="caret" style="border-top-color: #8095a8;"></b></span> </span> </a>
            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                <li><?php echo CHtml::link('Ganti Password', array('/user/update','id'=>Yii::app()->user->id)); ?></li>
                <!-- <li><?php echo CHtml::link('Profile', array('/user/view','id'=>Yii::app()->user->id)); ?></li> -->
                <li class="divider"></li>
                <li><?php echo CHtml::link('Logout', array('/site/logout'));?></li>
            </ul>
        </div>
        <div class="logo-element">
        SIIB
        </div>
    </li>
    <li>
        <a href="index.php?r=site/adminpanel"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span> </a>
    </li>
    <li>
        <a href="index.php?r=barangMasuk/manage"><i class="fa fa-newspaper-o"></i> <span class="nav-label">Barang Masuk</span> </a>
    </li>
    <li>
        <a href="index.php?r=barangKeluar/manage"><i class="fa fa-newspaper-o"></i> <span class="nav-label">Barang Keluar</span> </a>
    </li>
    
    <li>
        <a href="#"><i class="fa fa-cogs"></i> <span class="nav-label">Master</span><span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li><?php echo CHtml::link('Barang', array('/Barang/manage'));?></li>
            <li><?php echo CHtml::link('Rules', array('/Rules/manage'));?></li>
            <li><?php echo CHtml::link('User', array('/user/manage'));?></a></li>
        </ul>
        </ul>
    </li>
</ul>