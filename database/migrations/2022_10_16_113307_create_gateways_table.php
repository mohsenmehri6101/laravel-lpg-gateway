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
        /*Schema::create('gateways', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });*/

        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('token')->comment('برابر با uuid');
            $table->string('identity')->comment('شماره سند');
            $table->tinyInteger('status')->default(2)->comment('وضعیت پرداخت');
            $table->decimal('amount', 20, 2)->default('0')->comment('مبلغ');
            $table->string('tracking_code')->comment('کد رهگیری');
            $table->json('request_json')->nullable()->comment('جزئیات درخواست');
            $table->json('response_json')->nullable()->comment('جزئیات پاسخ');
            $table->uuid('guid')->comment('شناسه کاربر');
            $table->uuid('ref_num')->comment('شناسه کاربر');
            $table->uuid('res_num')->comment('شناسه کاربر');
            $table->uuid('card_hash')->comment('شناسه کاربر');
            $table->string('description', 400)->comment('توضیحات');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('gateways', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->comment('نام درگاه پرداخت');
            $table->string('description')->comment('توضیحات');
            $table->string('logo')->comment('لوگو درگاه پرداخت');
        });

        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->comment('نام سامانه');
            $table->string('callback')->comment('callback تعریف شده');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
        Schema::dropIfExists('gateways');
        Schema::dropIfExists('clients');
    }
};
