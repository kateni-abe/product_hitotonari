<?php

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
        Schema::create('personals', function (Blueprint $table) {
            $table->id();
            $table->string('user_icon_id')->nullable(); // ユーザーアイコンID
            $table->date('birth_date')->nullable(); // 生年月日
            $table->string('birth_place')->nullable(); // 出身地
            $table->string('residence')->nullable(); // 居住地
            $table->string('company_name')->nullable(); // 会社名
            $table->string('industry_type')->nullable(); // 業種
            $table->string('position_name')->nullable(); // 役職名
            $table->string('phone_number')->nullable(); // 電話番号
            $table->string('mobile_number')->nullable(); // 携帯番号
            $table->string('facebook_account')->nullable(); // Facebookアカウント
            $table->string('instagram_account')->nullable(); // Instagramアカウント
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personals');
    }
};
