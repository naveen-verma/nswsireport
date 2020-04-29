<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsDeploymentTypeTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports_deployment_type', function (Blueprint $table) {
            $table->id();
            $table->integer('report_id')->unsigned();
            $table->integer('deployment_type_id')->unsigned();
            $table->timestamps();
            $table->foreign('report_id')
                ->references('id')
                ->on('reports')
                ->onDelete('cascade');
            $table->foreign('deployment_type_id')
                ->references('id')
                ->on('deployment_type')
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
        Schema::dropIfExists('reports_deployment_type');
    }
}
