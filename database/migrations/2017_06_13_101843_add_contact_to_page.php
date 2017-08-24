<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddContactToPage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pages', function($table) {
            $table->integer('region')->nullable()->unsigned();
            $table->foreign('region')
                ->references('id')->on('region')
                ->onDelete('cascade');
            $table->text('email')->nullable();
            $table->text('kod')->nullable();
            $table->text('ulica')->nullable();
            $table->text('miasto')->nullable();
            $table->text('phone')->nullable();
            $table->integer('page_type_id')->unsigned();
            $table->foreign('page_type_id')
                ->references('id')->on('page_type')
                ->onDelete('cascade');
            $table->integer('page_rank')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pages', function($table) {
            $table->dropColumn('region');
            $table->dropColumn('email');
            $table->text('kod');
            $table->text('ulica');
            $table->text('miasto');
            $table->text('phone');
            $table->foreign('pagetype-id')
                ->references('id')->on('page_type')
                ->onDelete('cascade');
            $table->integer('page_rank')->nullable();

        });
    }
}
