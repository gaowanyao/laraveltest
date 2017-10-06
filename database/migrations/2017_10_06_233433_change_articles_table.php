<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::table('articles', function (Blueprint $table) {
                $table->integer('user_id')->after('id')->default(0);//新增user_id字段
            });
        }

    /**
     * Reverse the migrations.回滚迁移
     *
     * @return void
     */
    public function down()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->dropColume('user_id');//删除user_id字段
        });
    }
}
