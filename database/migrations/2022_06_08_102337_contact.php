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
        Schema::create ('contacts', function(Blueprint $table) {

            $table->id();
            $table->unsignedBiginteger ('phone_id');
            $table->string('name');
            $table->string('phone');
            $table->text('address');
            $table->timestamps();
        }
    );

    }
public function down ()


    {
        Schema::dropIfExists ('contacts');
    }
};
