<?php 
if (Yii::app()->user->getLevel()!=1){
    $this->redirect(array('site/index'));
}  
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Panel</title>
    <!-- Morris -->
    <link href="css/admin/morris-0.4.3.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="js/plugins/gritter/jquery.gritter.css" rel="stylesheet">


    <!-- textfield -->
    <link href="css/admin/bootstrap.min.css" rel="stylesheet">
    <link href="css/admin/font-awesome.css" rel="stylesheet">
    <link href="css/admin/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/admin/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/admin/iCheck/custom.css" rel="stylesheet">
    <link href="css/admin/chosen/chosen.css" rel="stylesheet">
    <link href="css/admin/colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet">
    <link href="css/admin/cropper/cropper.min.css" rel="stylesheet">
    <link href="css/admin/switchery/switchery.css" rel="stylesheet">
    <link href="css/admin/jasny/jasny-bootstrap.min.css" rel="stylesheet">
    <link href="css/admin/nouslider/jquery.nouislider.css" rel="stylesheet">
    <link href="css/admin/datapicker/datepicker3.css" rel="stylesheet">
    <link href="css/admin/ionRangeSlider/ion.rangeSlider.css" rel="stylesheet">
    <link href="css/admin/ionRangeSlider/ion.rangeSlider.skinFlat.css" rel="stylesheet">
    <link href="css/admin/animate.css" rel="stylesheet">
    <link href="css/admin/style.css" rel="stylesheet">

</head>

<body>
    <div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <?php
            // if(Yii::app()->user->getLevel()==1){
                include 'sidebar.php';
            // }
            ?>
            <?php /*
            if(Yii::app()->user->getLevel()==2){
                include 'object_menu2.html';
            } */
            ?>
        </div>
    </nav>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom" style="margin-left:0px;">
        <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0px">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-search"></i> </a>
            <form class="navbar-form-custom" action="index.php?r=barang/search" method="post">
                <div class="form-group" style="width: 100%;">
                    <input class="form-control" type="text" name="kode_barang" id="kode_barang" placeholder="Search for something..." autofocus="" />
                </div>
            </form>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">ROP & EOQ | Admin Panel</span>
                </li>
                
                <!--<li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell"></i>  <span class="label label-primary"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                    
                        
                    </ul>
                </li>-->


                <li>
                    <a href="index.php?r=site/logout">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
            </ul>

        </nav>
        </div>
        <div class="konten">
             <?php echo $content; ?>
        </div>
        <div class="footer">
            <!-- <div class="pull-right">
                10GB of <strong>250GB</strong> Free.
            </div> -->
            <div>
                <strong>Copyright</strong> &copy; ROP & EOQ razornez
            </div>
        </div>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/admin/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/admin/inspinia.js"></script>

</body>
</html>
