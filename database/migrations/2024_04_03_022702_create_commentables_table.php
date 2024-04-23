<?php

// database/migrations/YYYY_MM_DD_create_commentables_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentablesTable extends Migration
{
    public function up()
    {
        Schema::create('commentables', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('comment_id');
            $table->unsignedBigInteger('commentable_id');
            $table->string('commentable_type');
            $table->timestamps();

            $table->foreign('comment_id')->references('id')->on('comments')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('commentables');
    }
}
