<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateCatalogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalog', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("clicks")->default(0);
            $table->timestamps();
        });
        DB::insert('insert into catalog (name) values (?)', ['英文']);
        DB::insert('insert into catalog (name) values (?)', ['日文']);
        DB::insert('insert into catalog (name) values (?)', ['韓文']);
        DB::insert('insert into catalog (name) values (?)', ['德文']);
        DB::insert('insert into catalog (name) values (?)', ['法文']);
        DB::insert('insert into catalog (name) values (?)', ['西班牙文']);
        DB::insert('insert into catalog (name) values (?)', ['運動']);
        DB::insert('insert into catalog (name) values (?)', ['藝術']);
        DB::insert('insert into catalog (name) values (?)', ['鋼琴']);
        DB::insert('insert into catalog (name) values (?)', ['吉他']);
        DB::insert('insert into catalog (name) values (?)', ['前端程式']);
        DB::insert('insert into catalog (name) values (?)', ['後端程式']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('catalog');
    }
}
