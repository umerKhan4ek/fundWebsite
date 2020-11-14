<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddExtraColumnToFundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('funds', function (Blueprint $table) {
          
            // Target Asset Category
            $table->string('equity_sector')->default('nullable');
            $table->string('international_equilities')->default('nullable');
            $table->string('real_estate')->default('nullable');
            $table->string('commodities')->default('nullable');
            $table->string('cash_usd')->default('nullable');


            // Geography
            $table->string('north_america')->default('nullable');
            $table->string('asia')->default('nullable');
            $table->string('europe')->default('nullable');
            $table->string('ocinia')->default('nullable');
            $table->string('south_america')->default('nullable');
            $table->string('africa')->default('nullable');


            // Asset Breakdown
            $table->string('small_cap')->default('nullable');
            $table->string('health_care')->default('nullable');
            $table->string('consumer_discretionary')->default('nullable');
            $table->string('asia_ex_japan')->default('nullable');
            $table->string('china_tech')->default('nullable');
            $table->string('emrging_market')->default('nullable');
            $table->string('global_ex_us__reits')->default('nullable');
            $table->string('precious_metals_gold')->default('nullable');
            $table->string('_cash')->default('nullable');
            $table->string('image')->default('nullable');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('funds', function (Blueprint $table) {
            //
            
        });
    }
}
