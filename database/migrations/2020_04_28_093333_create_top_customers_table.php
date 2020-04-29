<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTopCustomersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('top_customers', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name');
            $table->string('customer_country');
            $table->string('region_id');
            $table->string('customer_market_unit')->nullable();
            $table->string('customer_ct_name')->nullable();
            $table->timestamps();
            $table->foreign('region_id')
                ->references('id')
                ->on('region')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('top_customers');
    }
}
