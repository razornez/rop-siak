<!-- Include your PHP file here -->
<div class="row wrapper border-bottom white-bg page-heading" style="margin-left: 0px;">
                <div class="col-lg-10">
                    <?php
                    foreach(Yii::app()->user->getFlashes() as $key => $message) {
                        echo '<div class="flash-' . $key . '">' . $message . "</div>\n";
                        }
                    ?>

                    <h2>User Group</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a>Master Data</a>
                        </li>
                        <li class="active">
                            <strong>User Group</strong>
                        </li>
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
                                  <a href="index.php?r=userGroup/create" class="btn btn-primary">Tambah Data Baru</a>
                                </div>
                              </div>
                            </div>
                              <thead>
                              <tr><?php $this->widget('zii.widgets.grid.CGridView', array(
                                  'id'=>'user-group-grid',
                                  'dataProvider'=>$model->search(),
                                  'filter'=>$model,
                                  'pager'=>array('cssFile'=>Yii::app()->baseUrl.'/css/bootstrap.min.css'),
                                  'columns'=>array(
                                    'GROUP_ID',
                                    'GROUP_NAME',
                                    array(
                                      'class'=>'CButtonColumn',
                                      'template' => '{update}{delete}',
                                    ),
                                  ),
                                )); ?>
                              </tr>
                              </thead>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->
</div></div></div>

    <!-- end content -->
    </div>
