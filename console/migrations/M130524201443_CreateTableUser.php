<?php

use yii\db\Migration;

class M130524201443_CreateTableUser extends Migration
{
    public $tableName = '{{%user}}';

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable($this->tableName, [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'city_id' => $this->integer(),
        ], $tableOptions);

        $this->addForeignKey(
            "user_city_id_fk",
            $this->tableName,
            "city_id",
            "city",
            "id",
            "SET NULL",
            "SET NULL"
        );
    }

    public function down()
    {
        $this->dropTable($this->tableName);
    }
}
