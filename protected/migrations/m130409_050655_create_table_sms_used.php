<?php

class m130409_050655_create_table_sms_used extends CDbMigration
{
	public function up()
	{
	$this->createTable('sms_used',array(
    'id_sms_used'=>'pk',
    'sms_date'=>'date',
    'id_user'=>'integer',
    'out_sms_count'=>'integer',
    'in_sms_count'=>'integer',
    ),'ENGINE=InnoDB');
	}

	public function down()
	{
		$this->dropTable('sms_used');
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}