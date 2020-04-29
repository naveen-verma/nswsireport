<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReports3rdPartyHwTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports_3rd_party_hw', function (Blueprint $table) {
            $table->id();
            $table->integer('report_id')->unsigned();
            $table->integer('3rd_party_hw_id')->unsigned();
            $table->timestamps();
            $table->foreign('report_id')
                ->references('id')
                ->on('reports')
                ->onDelete('cascade');
            $table->foreign('3rd_party_hw_id')
                ->references('id')
                ->on('3rd_party_hw')
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
        Schema::dropIfExists('reports_3rd_party_hw');
    }
}
