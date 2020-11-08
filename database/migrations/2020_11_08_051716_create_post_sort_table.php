<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreatePostSortTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_sort', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->timestamps();
        });
        DB::insert('insert into post_sort (name) values (?)', ['交換技能']);
        DB::insert('insert into post_sort (name) values (?)', ['找老師']);
        DB::insert('insert into post_sort (name) values (?)', ['找學生']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_sort');
    }
}
