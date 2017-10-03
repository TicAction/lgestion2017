<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kids', function (Blueprint $table) {
            $table->increments('id');
            $table->text('firstname');
            $table->text('lastname');
            $table->date('anniversary');
            $table->timestamps();
        });

        Schema::create('kid_user',function(Blueprint $table){
           $table->integer('user_id');
           $table->integer('kid_id');
           $table->primary(['kid_id','user_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kids');
    }
}
