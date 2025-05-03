<?php

use App\Models\Categorie;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Categorie::class)->constrained();
            $table->string('korean_name');
            $table->string('english_name');
            $table->string('img_thumbnail');
            $table->integer('year_of');
            $table->integer('number_of_students');
            $table->string('tuition');
            $table->string('dormitory');
            $table->string('address');
            $table->string('website');
            $table->string('description');
            $table->string('under');
            $table->string('content');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schools');
    }
};
