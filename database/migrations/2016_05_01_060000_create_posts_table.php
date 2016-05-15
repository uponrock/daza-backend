<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');         // 用户Id
            $table->integer('group_id');        // 小组Id
            $table->string('title');            // 标题
            $table->string('content');          // 内容
            $table->string('location');         // 位置
            $table->double('longitude', 7, 7);  // 经度
            $table->double('latitude', 7, 7);   // 纬度
            $table->string('source');           // 来源
            $table->string('source_link');      // 来源链接
            $table->integer('comment_count');   // 评论数
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('posts');
    }
}
