<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeliversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('store_id')->default(0);
            $table->unsignedBigInteger('item_id')->default(0);
            $table->unsignedBigInteger('selected_unit_id')->default(0);
            $table->unsignedBigInteger('base_unit_id')->default(0);
            $table->decimal('conversion_value')->default(0);
            $table->date('deliver_date')->nullable();
            $table->date('confirm_receive_date')->nullable();
            $table->decimal('brutto')->default(0);
            $table->decimal('base_brutto')->default(0);
            $table->decimal('netto')->default(0);
            $table->decimal('base_netto')->default(0);
            $table->decimal('tare')->default(0);
            $table->decimal('base_tare')->default(0);
            $table->string('license_plate')->nullable();
            $table->string('remarks')->nullable();
            $table->unsignedBigInteger('created_by')->default(0);
            $table->unsignedBigInteger('updated_by')->default(0);
            $table->unsignedBigInteger('deleted_by')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('delivers');
    }
}
