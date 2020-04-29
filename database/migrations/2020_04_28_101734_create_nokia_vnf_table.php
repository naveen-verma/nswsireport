<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNokiaVnfTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nokia_vnf', function (Blueprint $table) {
            $table->id();
            $table->string('vnf_name');
            $table->boolean('is_nsw_core_vnf');
            $table->boolean('is_nsw_app_vnf');
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
        Schema::dropIfExists('nokia_vnf');
    }
}
