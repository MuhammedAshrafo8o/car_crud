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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('version'); //العربيه نوعها ايه مثلا رياضية او اقتصادية
            $table->string('category');//العربيه نوعها ايه مثلا نيسان او شيفورليه
            $table->integer('price');
            $table->text('detail');
            $table->boolean('availablecheck'); //booking or not
            $table->string('image');
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
        Schema::dropIfExists('cars');
    }
};
