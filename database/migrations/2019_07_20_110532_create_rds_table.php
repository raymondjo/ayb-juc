<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rds', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('responsible_name')->nullable();

            // data of case
            $table->string('address')->nullable();
            $table->string('husband_name')->nullable();
            $table->integer('husband_age')->nullable();
            $table->string('husband_mobile')->nullable();
            $table->string('husband_work')->nullable();
            $table->string('husband_national_id')->nullable();
            // data of wife

            $table->string('wife_name')->nullable();
            $table->integer('wife_age')->nullable();
            $table->string('wife_mobile')->nullable();
            $table->string('wife_work')->nullable();
            $table->string('wife_national_id')->nullable();

            // want to join data
            $table->boolean('cp')->default(false);
            $table->boolean('ep')->default(false);
            $table->boolean('clc')->default(false);
            $table->boolean('ie')->default(false);
            $table->boolean('joined')->default(false);

            // micro data
            $table->text('micro')->nullable();
            $table->text('sts')->nullable();

            //need or not checkbox
            $table->boolean('need_or_not')->default(false);

            //date of expiration date
            $table->date('expire_date');

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
        Schema::dropIfExists('rds');
    }
}
