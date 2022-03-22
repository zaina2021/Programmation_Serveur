<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('author_id')->default(0)->index('comments_fk2_idx');
            $table->foreign('author_id')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->unsignedBigInteger('serie_id')->default(0)->index('comments_fk1_idx');
            $table->foreign('serie_id')->references('id')->on('series')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->mediumText('content');
            $table->datetime('date')->useCurrent();
                    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
};
