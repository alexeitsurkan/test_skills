<?php

use yii\db\Migration;

class M130524201444_CreateTableUserSkill extends Migration
{
    public $tableName = '{{%user_skill}}';

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable($this->tableName, [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'skill_id' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->addForeignKey(
            "us_user_id_fk",
            $this->tableName,
            "user_id",
            "user",
            "id",
            "CASCADE",
            "CASCADE"
        );

        $this->addForeignKey(
            "us_skill_id_fk",
            $this->tableName,
            "skill_id",
            "skill",
            "id",
            "CASCADE",
            "CASCADE"
        );
    }

    public function down()
    {
        $this->dropTable($this->tableName);
    }
}
