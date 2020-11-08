<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreatePostAreaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_area', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->timestamp('created_at')->useCurrent();
        });
        DB::insert('insert into post_area (name) values (?)', ['新北市']);
        DB::insert('insert into post_area (name) values (?)', ['台北市']);
        DB::insert('insert into post_area (name) values (?)', ['基隆市']);
        DB::insert('insert into post_area (name) values (?)', ['桃園市']);
        DB::insert('insert into post_area (name) values (?)', ['新竹縣']);
        DB::insert('insert into post_area (name) values (?)', ['新竹市']);
        DB::insert('insert into post_area (name) values (?)', ['苗栗市']);
        DB::insert('insert into post_area (name) values (?)', ['台中市']);
        DB::insert('insert into post_area (name) values (?)', ['彰化縣']);
        DB::insert('insert into post_area (name) values (?)', ['雲林縣']);
        DB::insert('insert into post_area (name) values (?)', ['南投縣']);
        DB::insert('insert into post_area (name) values (?)', ['嘉義縣']);
        DB::insert('insert into post_area (name) values (?)', ['嘉義市']);
        DB::insert('insert into post_area (name) values (?)', ['台南市']);
        DB::insert('insert into post_area (name) values (?)', ['高雄市']);
        DB::insert('insert into post_area (name) values (?)', ['屏東縣']);
        DB::insert('insert into post_area (name) values (?)', ['台東縣']);
        DB::insert('insert into post_area (name) values (?)', ['花蓮縣']);
        DB::insert('insert into post_area (name) values (?)', ['宜蘭縣']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_area');
    }
}
