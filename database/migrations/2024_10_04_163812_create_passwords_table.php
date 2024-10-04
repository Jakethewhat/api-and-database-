<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasswordsTable extends Migration
{
    public function up()
    {
        Schema::create('passwords', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID
            $table->string('username')->unique(); // Username column
            $table->string('password'); // Password column
            $table->timestamps(); // Created and updated timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('passwords'); // Drop the table if it exists
    }
}
