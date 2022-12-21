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
        Schema::create('mangas', function (Blueprint $table) {
            $table->id();
            $table->text('manga_name');
            $table->foreignIdFor(\App\Models\User::class, 'owner_id');
            $table->text('description');
            $table->foreignIdFor(\App\Models\Genre::class, 'name_genre');
            $table->comment('comment');
            $table->uuid('path');
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
        Schema::dropIfExists('mangas');
    }
};
