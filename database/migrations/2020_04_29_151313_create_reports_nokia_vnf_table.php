<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsNokiaVnfTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports_nokia_vnf', function (Blueprint $table) {
            $table->id();
            $table->integer('report_id')->unsigned();
            $table->integer('nokia_vnf_id')->unsigned();
            $table->timestamps();
            $table->foreign('report_id')
                ->references('id')
                ->on('reports')
                ->onDelete('cascade');
            $table->foreign('nokia_vnf_id')
                ->references('id')
                ->on('nokia_vnf')
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
        Schema::dropIfExists('reports_nokia_vnf');
    }
}
