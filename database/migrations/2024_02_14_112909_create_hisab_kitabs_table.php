<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\text;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('hisab_kitabs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->ondelete('cascade');
            $table->integer('amount');
            $table->text('particular');
            $table->enum('type', array('income', 'expense', 'lend', 'borrow'));
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hisab_kitabs');
    }
};
