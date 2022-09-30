<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('subtitle');
            $table->text('body');
            $table->decimal('price', 8 ,2);

            //! foreign key user
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            //! foreign key category
            $table->unsignedBigInteger('category_id')->nullable();
            //! la colonna foreign dell'articles table fa riferimento all'id della tabella categories
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('SET NULL');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::table('articles', function(Blueprint $table){
            $table->dropForeign(['category_id']);
            $table->dropColumn(['category_id']);

            $table->dropForeign(['user_id']);
            $table->dropColumn(['user_id']);
        });
    }
};
