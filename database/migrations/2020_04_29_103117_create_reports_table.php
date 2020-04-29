<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->string('scrm_id');
            $table->string('customer_name');
            $table->string('top_40_customers');
            $table->string('country');
            $table->string('region');
            $table->date('service_request_date');
            $table->date('resource_allocation_date');
            $table->date('boq_recieved_date');
            $table->date('last_boq_recieved_date');
            $table->date('first_submission_date');
            $table->date('final_submission_date');
            $table->string('core_services_spoc_name');
            $table->string('care_spoc_name');
            $table->string('cb_spoc_name');
            $table->string('ssl_spoc_name');
            $table->string('bbt_ticket_id');
            $table->string('gss_delivery_status');
            $table->string('market_ssm_spoc');
            $table->string('lead_bg');
            $table->string('market_or_gss_lead');
            $table->string('hw_specs');
            $table->string('3rd_aprty_vnf_name');
            $table->string('vim_name');
            $table->string('3rd_party_mano_name');
            $table->string('ci_or_cd');
            $table->string('vnf_on_customer_cloud');
            $table->string('remark_challenges_on_services_portfolio');
            $table->string('nsw_core_services_cost');
            $table->string('pms_cost');
            $table->string('nsw_core_care_cost');
            $table->string('nsw_cb_cost');
            $table->string('simple_or_complex');
            $table->string('number_of_times_boq_change');
            $table->string('number_f_times_scope_change');
            $table->string('number_of_times_delivery_model_change');
            $table->string('days_taken_to_get_first_sign_off');
            $table->string('suggested_modification_sign_off');
            $table->string('delay_reason_sign_off');
            $table->string('customer_pricing_template_needed');
            $table->string('days_taken_peo_delivery_model_input');
            $table->string('days_taken_peo_delivery_sign_off');
            $table->string('product_attached_service_cost_changed_by_market_sa');
            $table->string('service_led_cost_change_by_market');
            $table->string('pmo_layer_cost_change_by_market');
            $table->string('cost_deviation_due_to_delivery_ model _change');
            $table->string('cost_deviation_due_to_change_in_standard_guideline');
            $table->string('cost_deviation_pmo_effort_modification');
            $table->string('hw_dimensioning_done');
            $table->string('number_of_sites');
            $table->string('number_of_rack_per_site');
            $table->string('compute_nodes_per_site');
            $table->string('storage_node_per_site');
            $table->string('number_of_leaf_switches_per_site');
            $table->string('number_of_spine_switches_per_site');
            $table->string('number_of_VIMs_per_site');
            $table->string('expected_deployment_timelines');
            $table->string('nod_boq_arrival_after_allocation');
            $table->string('nod_first_submission_after_boq_arrival');
            $table->string('nod_final_submission_after_boq_arrival');
            $table->string('commnets');
            $table->string('sdm_cost');
            $table->string('cs_core_cost');
            $table->string('ims_cost');
            $table->string('nfvi_services_cost');
            $table->string('cbis_cbam_cost');
            $table->timestamps();
            $table->foreign('top_40_customers')
                ->references('id')
                ->on('top_customers')
                ->onDelete('cascade');
            $table->foreign('region')
                ->references('id')
                ->on('region')
                ->onDelete('cascade');
            $table->foreign('core_services_spoc_name')
                ->references('id')
                ->on('spoc')
                ->onDelete('cascade');
            $table->foreign('care_spoc_name')
                ->references('id')
                ->on('spoc')
                ->onDelete('cascade');
            $table->foreign('cb_spoc_name')
                ->references('id')
                ->on('spoc')
                ->onDelete('cascade');
            $table->foreign('ssl_spoc_name')
                ->references('id')
                ->on('spoc')
                ->onDelete('cascade');
            $table->foreign('lead_bg')
                ->references('id')
                ->on('business_groups')
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
        Schema::dropIfExists('reports');
    }
}
