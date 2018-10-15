<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_table = 'settings';

    /**
     * Run the migrations.
     * @table settings
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->set_table, function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 32);
            $table->longText('keyword');
<<<<<<< HEAD
            $table->string('description', 32);
=======
            $table->longText('description');
            $table->longText('favicon');
            $table->longText('thumb');
            $table->longText('image');
            $table->longText('logo');
            $table->longText('author');
            $table->string('email',32);
            $table->string('hotline',15);
            $table->longText('company');
            $table->string('company_short',30);
>>>>>>> deab427e6ce793a57b310572a2f536b044f29099
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->set_table);
    }
}
