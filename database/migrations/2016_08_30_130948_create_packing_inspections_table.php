<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackingInspectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packing_inspections', function (Blueprint $table) {
            $table->increments('id');
            $table->string('po_num');
            $table->string('date_inspected');
            $table->string('shipment_date');
            $table->string('device_name');
            $table->string('inspector');
            $table->string('packing_type');
            $table->string('unit_condition');
            $table->string('packing_operator');
            $table->string('packing_code_series');
            $table->string('carton_num');
            $table->string('packing_code');
            $table->string('judgement');
            $table->integer('total_qty',false, true)->length(20);
            $table->string('mode_of_defect');
            $table->string('remarks');
            $table->string('dbcon');
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
        Schema::drop('packing_inspections');
    }
}
