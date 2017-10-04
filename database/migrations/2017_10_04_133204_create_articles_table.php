<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id'); //自增ID
            $table->string("title");  //string对应MySQL中的varchar
            $table->text("content");  //text对应MySQL中的text
            $table->integer("view_count"); //integer对应MySQL中的int
            $table->timestamps(); //包含两个字段，即创建时间字段created_at和修改时间字段updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
