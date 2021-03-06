<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\OqcInspectionMoldingMOD;

class TblOqcMoldingMod extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_oqc_molding_mod', function(Blueprint $table){
            $table->increments('id');
            $table->string('po');
            $table->string('partcode');
            $table->string('description');
            $table->string('qty');
            $table->string('submission');
            $table->string('lotno');
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
        //
    }
}
