<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reports extends Model
{
    //
    protected $fillable = ['customer_name','top_40_customers','country','region','service_request_date','resource_allocation_date','boq_recieved_date','last_boq_recieved_date','first_submission_date','final_submission_date','core_services_spoc_name','care_spoc_name','cb_spoc_name','ssl_spoc_name','bbt_ticket_id','gss_delivery_status','market_ssm_spoc','lead_bg','market_or_gss_lead','hw_specs','3rd_aprty_vnf_name','vim_name','3rd_party_mano_name','ci_or_cd','vnf_on_customer_cloud','remark_challenges_on_services_portfolio','nsw_core_services_cost','pms_cost','nsw_core_care_cost','nsw_cb_cost','simple_or_complex','number_of_times_boq_change','number_f_times_scope_change','number_of_times_delivery_model_change','days_taken_to_get_first_sign_off','suggested_modification_sign_off','delay_reason_sign_off','customer_pricing_template_needed','days_taken_peo_delivery_model_input','days_taken_peo_delivery_sign_off','product_attached_service_cost_changed_by_market_sa','service_led_cost_change_by_market','pmo_layer_cost_change_by_market','cost_deviation_due_to_delivery_ model _change','cost_deviation_due_to_change_in_standard_guideline','cost_deviation_pmo_effort_modification','hw_dimensioning_done','number_of_sites','number_of_rack_per_site','compute_nodes_per_site','storage_node_per_site','number_of_leaf_switches_per_site','number_of_spine_switches_per_site','number_of_VIMs_per_site','expected_deployment_timelines','nod_boq_arrival_after_allocation','nod_first_submission_after_boq_arrival','nod_final_submission_after_boq_arrival','commnets','sdm_cost','cs_core_cost','ims_cost','nfvi_services_cost','cbis_cbam_cost'];
    
}
