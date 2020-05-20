<?php

use yii\db\Migration;

class M130524201445_CreateTableRussianNames extends Migration
{
    public $tableName = '{{%russian_names}}';

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable($this->tableName, [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()
        ], $tableOptions);
        $this->execute(file_get_contents(__DIR__ . '/sql.sql'));
    }

    public function down()
    {
        $this->dropTable($this->tableName);
    }
}
