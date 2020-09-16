<?php CHtml::encode(Yii::app()->name); ?>
<table>
  <tr>
    <th>
   	<div class="alert-message info">
   		News
    </div>
<?php
$terserah=array();
foreach($dataProvider->getData() as $i=>$ii)
{
	$itu=Chtml::link($ii['judul'],array('berita/view','id'=>$ii['id']));
	$awal='a/../berita/'.$ii['id'].$ii['foto'];
	$terserah[$i]=array($awal,$itu);
}
$this->widget('application.extensions.s3slider.S3Slider',
        array(
              'images' => $terserah,
              'width' => '590',
              'height' => '375',
        )
  );
?>
	</th>
	<th style='vertical-align:top;'>
<?php 
  
$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'berita-grid',
	'dataProvider'=>$dataProvider3,
	'summaryText'=>'',
	'columns'=>array(
		array(
			'name'=>'Most Thread',
			'type'=>'raw',
			'headerHtmlOptions'=>array('style'=>'text-align: left','colspan'=>'2'),
			'htmlOptions'=>array('width'=>'190px'),
			'value'=>'Chtml::link(User::model()->findByPk($data["user_id"])->username,
				array("user/view","id"=>$data["user_id"]))',
		),	
		array(
			'headerHtmlOptions'=>array('style'=>'display:none'),
			'htmlOptions'=>array('style'=>'text-align: center','width'=>'70px'),
			'type'=>'raw',
			'value'=>'$data["count(id)"]',
		),	
	),
));
echo '<hr/>';

$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'berita-grid',
	'dataProvider'=>$dataProvider4,
	'summaryText'=>'',
	'columns'=>array(
		array(
			'type'=>'raw',
			'headerHtmlOptions'=>array('style'=>'display:none'),
			'htmlOptions'=>array('width'=>'190px'),
			'value'=>'Chtml::link(User::model()->findByPk($data["user_id"])->username,
				array("user/view","id"=>$data["user_id"]))',
		),	
		array(
			'name'=>'Most Comment',
			'headerHtmlOptions'=>array('colspan'=>'2','style'=>'text-align:left'),
			'htmlOptions'=>array('style'=>'text-align: center','width'=>'70px'),
			'type'=>'raw',
			'value'=>'$data["count(id)"]',
		),	
	),
));
?>
  </th>
</tr>
</table>

<table>
  <tr>
    <th>
		<?php
		$this->widget('zii.widgets.grid.CGridView', array(
			'id'=>'berita-grid',
			'dataProvider'=>$dataProvider5,
			'summaryText'=>'',
			'columns'=>array(
				array(
					'name'=>'Top Thread',
					'type'=>'raw',
					'value'=>'Chtml::link(Thread::model()->findByPk($data["thread_id"])->judul."   (".$data["count(thread_id)"].")",
						array("thread/view","id"=>$data["thread_id"]))',
				),	
			),
		));
		?>    
    </th>
    <th>
	<?php 
			$this->widget('zii.widgets.grid.CGridView', array(
			'id'=>'berita-grid',
			'dataProvider'=>$dataProvider2,
			'summaryText'=>'',
			'columns'=>array(
				array(
					'name'=>'Last Thread',
					'type'=>'raw',
					'value'=>'Chtml::link($data["judul"],array("thread/view","id"=>$data["id"]))',
				),	
			),
		));
	?>    
	</th>
	</tr>
</table>


