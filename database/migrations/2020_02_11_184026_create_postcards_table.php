<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreatePostcardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postcards', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->text('message');
            $table->unsignedInteger('message_color')->nullable();
            $table->string('shadow')->nullable();
            $table->string('horizontal-vertical')->nullable();
            $table->text('photo')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('background_color');
            
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('postcards');
    }
}
