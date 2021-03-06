<?php

namespace App\Blendx;

class CaseMain extends Blender
{
    protected $relations = [
        'case_categories',
        'case_natures',
        'programs',
        'regions',
        'districts',
        'police_stations',
        'courts',
        'case_statuses',
        'court_orders',
        'additional_court_orders',
        'next_date_statuses',
        'lawyers',
        'case_issue_logs',
        'case_types',
        'case_proceedings',
        'billings'

    ];
    public static function store_validator($route)
    {
        $custom_validator = [
            'case_type_id' => 'required',
            'case_category_id' => 'integer',
            'case_nature_id' => 'integer',
            'region_id' => 'integer',
            'district_id' => 'integer',
            'police_station_id' => 'integer',
            'additional_court_order_id' => 'required',
            'court_order_id' => 'required',
            'case_status_id' => 'required',
            'date_of_filing' => 'required',
            'court_id' => 'required',
            'case_no'=>'required',
            'next_date'=>'required',
            'lawyer_id'=>'required',
            'case_year'=>'required',
            'next_date_lawyerattend'=>'required',
            'next_date_status'=>'required',
        ];
        $custom_validator1 = [
              "case_category_id" => "nullable",
              "case_nature_id" => "nullable",
              "case_type_id" => "required",
              "case_no" => "required",
              "case_year" => "required",
              "subsequent_case_no" => "nullable",
              "program_id" => "nullable",
              "region_id" => "nullable",
              "area" => "nullable",
              "branch" => "nullable",
              "district_id" => "nullable",
              "police_station_id" => "nullable",
              "date_of_incident" => "nullable",
              "whoidentified" => "nullable",
              "court_id" => "required",
              "date_of_filing" => "required",
              "laws_section" => "nullable",
              "allegation" => "nullable",
              "amount_of_money" => "nullable",
              "complainant_name" => "nullable",
              "complainant_designation" => "nullable",
              "complainant_contact" => "nullable",
              "complainant_email" => "nullable",
              "complainant_nextattend" => "nullable",
              "subsequent_name_of_complainant" => "nullable",
              "name_of_accused" => "nullable",
              "phone_of_accused" => "nullable",
              "address_of_accused" => "nullable",
              "disbursement_date" => "nullable",
              "last_cash_receipt_date" => "nullable",
              "case_status_id" => "required",
              "court_order_id" => "required",
              "additional_court_order_id" => "required",
              "next_date" => "required",
              "next_date_status" => "required",
              "lawyer_id" => "required",
              "next_date_lawyerattend" => "required",
              "case_notes" => "nullable",
              "date_of_disposed" => "nullable",
        ];
//        $store = parent::store_validator($route);
//        $finale = array_merge($store,$custom_validator);
        return $custom_validator1;

    }
//    public static function after_validator($validated, $route, $user = null)
//    {
//        $custom
//        $after =  parent::after_validator($validated, $route, $user); // TODO: Change the autogenerated stub
//    }

    public static function update_validator($route)
    {
        $custom_validator = [
            "case_category_id" => "integer",
            "case_nature_id" => "integer",
            "case_type_id" => "required",
            "case_no" => "required",
            "case_year" => "required",
            "subsequent_case_no" => "nullable",
            "program_id" => "integer",
            "region_id" => "integer",
            "area" => "nullable",
            "branch" => "nullable",
            "district_id" => "integer",
            "police_station_id" => "integer",
            "date_of_incident" => "nullable",
            "whoidentified" => "nullable",
            "court_id" => "required",
            "date_of_filing" => "required",
            "laws_section" => "nullable",
            "allegation" => "nullable",
            "amount_of_money" => "nullable",
            "complainant_name" => "nullable",
            "complainant_designation" => "nullable",
            "complainant_contact" => "nullable",
            "complainant_email" => "nullable",
            "complainant_nextattend" => "nullable",
            "subsequent_name_of_complainant" => "nullable",
            "brac_pin" => "nullable",
            "name_of_accused" => "nullable",
            "phone_of_accused" => "nullable",
            "address_of_accused" => "nullable",
            "disbursement_date" => "nullable",
            "last_cash_receipt_date" => "nullable",
            "case_status_id" => "required",
            "court_order_id" => "required",
            "additional_court_order_id" => "required",
            "next_date" => "required",
            "next_date_status" => "required",
            "lawyer_id" => "required",
            "next_date_lawyerattend" => "required",
            "witness" => "nullable",
            "case_notes" => "nullable",
            "date_of_disposed" => "nullable",

        ];

        return $custom_validator;
    }
}
