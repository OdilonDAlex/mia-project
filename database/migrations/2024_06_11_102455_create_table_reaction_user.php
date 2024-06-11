<?php

use App\Models\Reaction;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reaction_user', function (Blueprint $table) {
            $table->foreignIdFor(User::class, 'user_id')->constrained();
            $table->foreignIdFor(Reaction::class, 'reaction_id')->constrained();
            
            $table->primary(['user_id', 'reaction_id']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reaction_user');
    }
};
