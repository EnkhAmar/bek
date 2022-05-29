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
        Schema::create('citizen', function (Blueprint $table) {
            $table->id();
            $table->string("register_number")->unique();
            $table->string("last_name");
            $table->string("first_name");
            $table->string("gender");
            $table->date("dob");
            $table->foreignId("family")->nullable()->constrained("family");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('citizen');
    }
};
