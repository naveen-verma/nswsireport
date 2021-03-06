<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsApproverTeamsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports_approver_teams', function (Blueprint $table) {
            $table->id();
            $table->integer('report_id')->unsigned();
            $table->integer('spoc_id')->unsigned();
            $table->timestamps();
            $table->foreign('report_id')
                ->references('id')
                ->on('reports')
                ->onDelete('cascade');
            $table->foreign('spoc_id')
                ->references('id')
                ->on('spoc')
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
        Schema::dropIfExists('reports_approver_teams');
    }
}
