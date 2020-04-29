<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpocTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spoc', function (Blueprint $table) {
            $table->id();
            $table->string('spoc_name');
            $table->string('spoc_nokia_id');
            $table->string('spoc_email');
            $table->string('spoc_contact_number');
            $table->string('department');
            $table->boolean('is_core_services_spoc');
            $table->boolean('is_care_spoc');
            $table->boolean('is_cb_spoc');
            $table->boolean('is_ssl_spoc');
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
        Schema::dropIfExists('spoc');
    }
}
