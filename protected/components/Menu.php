<?php

Yii::import('zii.widgets.CPortlet');

class MenuDokumen extends CPortlet
{
	public function init()
	{
		$this->title="Kelola Data";
		parent::init();
	}

	protected function renderContent()
	{
		$this->render('menu');
	}
}