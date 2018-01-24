<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function() {

  Route::get('/DailyDietForm', function(){
      return view('DailyDietForm');
  });

  Route::get('/index', function(){
      return view('Index');
  });

  Route::get('/AppointmentBook', function(){
      return view('AppointmentBook');
  });

  Route::get('/Checklist', function(){
      return view('Checklist');
  });

  Route::get('/CodeBlueEvaluationForm', function(){
      return view('CodeBlueEvaluationForm');
  });

  Route::post('/CodeBlueEvaluationForm',function(Request $request){
    $data = $request->validate([
      'drill' => 'required|max:255',
      'actual_code_blue' => 'required|max:255',
      '00' => 'required|max:255',
      'comm_00' => 'max:255',
      '01' => 'required|max:255',
      'comm_01' => 'max:255',
      '02' => 'required|max:255',
      'comm_02' => 'max:255',
      '03' => 'required|max:255',
      'comm_03' => 'max:255',
      '04' => 'required|max:255',
      'comm_04' => 'max:255',
      '05' => 'required|max:255',
      'comm_05' => 'max:255',
      '06' => 'required|max:255',
      'comm_06' => 'max:255',
      '07' => 'required|max:255',
      'comm_07' => 'max:255',
      '08' => 'required|max:255',
      'comm_08' => 'max:255',
      '09' => 'required|max:255',
      'comm_09' => 'max:255'
    ]);

    $link = tap(new App\CodeBlueEvaluationForm($data))->save();

    return view('Index');
  });

  Route::get('/CompleteNursingAssessment', function(){
      return view('CompleteNursingAssessment');
  });

  Route::get('/CounsellingForm', function(){
      return view('CounsellingForm');
  });

  Route::get('/CPRFormat', function(){
      return view('CPRFormat');
  });

  Route::get('/CultureBiopsyForm', function(){
      return view('CultureBiopsyForm');
  });

  Route::get('/DischarheGatepass', function(){
      return view('DischargeGatepass');
  });

  Route::get('/DoctorsDailyNotes', function(){
      return view('DoctorsDailyNotes');
  });

  Route::post('/DoctorsDailyNotes',function(Request $request){
    $data = $request->validate([
      'name' => 'required|max:255',
      'ipd_no' => 'unique|numeric|required|max:255',
      'sex' => 'required|max:255',
      'attending_consultant' => 'required|max:255',
      'age' => 'required|digits_between:1,100|max:255',
      'date' => 'required|max:255',
      'c_o_07' => 'required|max:255',
      'oe_pulse_07' => 'required|max:255',
      'bp_07' => 'required|max:255',
      'temp_07' => 'required|max:255',
      'resp_spo2_07' => 'required|max:255',
      'pain_07' => 'required|max:255',
      'c_o_09' => 'required|max:255',
      'oe_pulse_09' => 'required|max:255',
      'bp_09' => 'required|max:255',
      'temp_09' => 'required|max:255',
      'resp_spo2_09' => 'required|max:255',
      'pain_09' => 'required|max:255',
      'c_o_15' => 'required|max:255',
      'oe_pulse_15' => 'required|max:255',
      'bp_15' => 'required|max:255',
      'temp_15' => 'required|max:255',
      'resp_spo2_15' => 'required|max:255',
      'pain_15' => 'required|max:255',
      'c_o_21' => 'required|max:255',
      'oe_pulse_21' => 'required|max:255',
      'bp_21' => 'required|max:255',
      'temp_21' => 'required|max:255',
      'resp_spo2_21' => 'required|max:255',
      'pain_21' => 'required|max:255',
    ]);

    $link = tap(new App\DoctorsDailyNotes($data))->save();

    return view('Index');
  });

  Route::get('/DrugRequisition', function(){
      return view('DrugRequisition');
  });

  Route::post('/DrugRequisition', function(Request $request){
    $data = $request->validate([
      'name_of_drug_01' => 'max:255',
      'quantity_01' => 'max:255',
      'batch_no_01' => 'max:255',
      'expiry_date_01' => 'max:255',
      'issued_by_01' => 'max:255',
      'received_by_01' => 'max:255',
      'name_of_drug_02' => 'max:255',
      'quantity_02' => 'max:255',
      'batch_no_02' => 'max:255',
      'expiry_date_02' => 'max:255',
      'issued_by_02' => 'max:255',
      'received_by_02' => 'max:255',
      'name_of_drug_03' => 'max:255',
      'quantity_03' => 'max:255',
      'batch_no_03' => 'max:255',
      'expiry_date_03' => 'max:255',
      'issued_by_03' => 'max:255',
      'received_by_03' => 'max:255',
      'name_of_drug_04' => 'max:255',
      'quantity_04' => 'max:255',
      'batch_no_04' => 'max:255',
      'expiry_date_04' => 'max:255',
      'issued_by_04' => 'max:255',
      'received_by_04' => 'max:255',
      'name_of_drug_05' => 'max:255',
      'quantity_05' => 'max:255',
      'batch_no_05' => 'max:255',
      'expiry_date_05' => 'max:255',
      'issued_by_05' => 'max:255',
      'received_by_05' => 'max:255',
      'name_of_drug_06' => 'max:255',
      'quantity_06' => 'max:255',
      'batch_no_06' => 'max:255',
      'expiry_date_06' => 'max:255',
      'issued_by_06' => 'max:255',
      'received_by_06' => 'max:255',
      'name_of_drug_07' => 'max:255',
      'quantity_07' => 'max:255',
      'batch_no_07' => 'max:255',
      'expiry_date_07' => 'max:255',
      'issued_by_07' => 'max:255',
      'received_by_07' => 'max:255',
      'name' => 'required|max:255',
      'date' => 'required|max:255',
      'time' => 'required|max:255',

    ]);

    $link = tap(new App\DrugRequisition($data))->save();

    return view('Index');
  });

  Route::get('/ERObservation', function(){
      return view('ERObservation');
  });

  Route::get('/Gatepass', function(){
      return view('Gatepass');
  });

  Route::get('/Glassgow', function(){
      return view('Glassgow');
  });
  Route::post('/GlassGow',function(Request $request){
    $data = $request->validate([

      'date1' => 'required|max:255',
      'r1c1' => 'required|max:255',
      'r1c2' => 'required|max:255',
      'r1c3' => 'required|max:255',
      'r1c4' => 'required|max:255',
      'r1c5' => 'required|max:255',
      'r1c6' => 'required|max:255',
      'r1c7' => 'required|max:255',
      'r1c8' => 'required|max:255',
      'r1c9' => 'required|max:255',
      'r1c10' => 'required|max:255',
      'r1c11' => 'required|max:255',
      'r1c12' => 'required|max:255',

      'r2c1' => 'required|max:255',
      'r2c2' => 'required|max:255',
      'r2c3' => 'required|max:255',
      'r2c4' => 'required|max:255',
      'r2c5' => 'required|max:255',
      'r2c6' => 'required|max:255',
      'r2c7' => 'required|max:255',
      'r2c8' => 'required|max:255',
      'r2c9' => 'required|max:255',
      'r2c10' => 'required|max:255',
      'r2c11' => 'required|max:255',
      'r2c12' => 'required|max:255',

      'r3c1' => 'required|max:255',
      'r3c2' => 'required|max:255',
      'r3c3' => 'required|max:255',
      'r3c4' => 'required|max:255',
      'r3c5' => 'required|max:255',
      'r3c6' => 'required|max:255',
      'r3c7' => 'required|max:255',
      'r3c8' => 'required|max:255',
      'r3c9' => 'required|max:255',
      'r3c10' => 'required|max:255',
      'r3c11' => 'required|max:255',
      'r3c12' => 'required|max:255',

      'r4c1' => 'required|max:255',
      'r4c2' => 'required|max:255',
      'r4c3' => 'required|max:255',
      'r4c4' => 'required|max:255',
      'r4c5' => 'required|max:255',
      'r4c6' => 'required|max:255',
      'r4c7' => 'required|max:255',
      'r4c8' => 'required|max:255',
      'r4c9' => 'required|max:255',
      'r4c10' => 'required|max:255',
      'r4c11' => 'required|max:255',
      'r4c12' => 'required|max:255',

      'r5c1' => 'required|max:255',
      'r5c2' => 'required|max:255',
      'r5c3' => 'required|max:255',
      'r5c4' => 'required|max:255',
      'r5c5' => 'required|max:255',
      'r5c6' => 'required|max:255',
      'r5c7' => 'required|max:255',
      'r5c8' => 'required|max:255',
      'r5c9' => 'required|max:255',
      'r5c10' => 'required|max:255',
      'r5c11' => 'required|max:255',
      'r5c12' => 'required|max:255',

      'r6c1' => 'required|max:255',
      'r6c2' => 'required|max:255',
      'r6c3' => 'required|max:255',
      'r6c4' => 'required|max:255',
      'r6c5' => 'required|max:255',
      'r6c6' => 'required|max:255',
      'r6c7' => 'required|max:255',
      'r6c8' => 'required|max:255',
      'r6c9' => 'required|max:255',
      'r6c10' => 'required|max:255',
      'r6c11' => 'required|max:255',
      'r6c12' => 'required|max:255',

    ]);

    $link = tap(new App\GlassGow($data))->save();

    return view('Index');
  });

  Route::get('/HistoryForm', function(){
      return view('HistoryForm');
  });

  Route::post('/HistoryForm', function(Request $request){
    $data = $request->validate([
      'chief_complaints' => 'max:255|required',
      'patient_history' => 'max:255|required',
      'past_history' => 'max:255|required',
      'allergic_history' => 'max:255|required',
      'road_accident' => 'max:255|required',
      'alleged_roadtrafficaccident' => 'max:255|required',
      'place' => 'max:255|required',
      'time' => 'max:255|required',
      'date' => 'max:255|required',
      'ho_loc' => 'max:255|required',
      'ho_entbleeding' => 'max:255|required',
      'ho_seizures' => 'max:255|required',
      'ho_vomiting' => 'max:255|required',
      'pulse' => 'max:255|required',
      'bp' => 'max:255|required',
      'temp' => 'max:255|required',
      'resp' => 'max:255|required',
      'pain' => 'max:255|required',
      'right_biceps' => 'max:255|required',
      'right_triceps' => 'max:255|required',
      'right_supinator' => 'max:255|required',
      'right_knee' => 'max:255|required',
      'right_ankle' => 'max:255|required',
      'right_hoffmann' => 'max:255|required',
      'right_ff' => 'max:255|required',
      'left_biceps' => 'max:255|required',
      'left_triceps' => 'max:255|required',
      'left_supinator' => 'max:255|required',
      'left_knee' => 'max:255|required',
      'left_ankle' => 'max:255|required',
      'left_hoffmann' => 'max:255|required',
      'left_ff' => 'max:255|required',
      'plantars' => 'max:255|required',
      'romberg' => 'max:255|required',
      'gait' => 'max:255|required',
      'cerebellar' => 'max:255|required',
      'neck_stiffness' => 'max:255|required',
      'diagnosis' => 'max:255|required',

    ]);

    $link = tap(new App\HistoryForm($data))->save();

    return view('Index');
  });




  Route::get('/InvestigationSheet1', function(){
      return view('InvestigationSheet1');
  });

  Route::get('/InvestigationSheet2', function(){
      return view('InvestigationSheet2');
  });

  Route::get('/InfusionTherapyChart', function(){
      return view('InfusionTherapyChart');
  });

  Route::post('/InfusionTherapyChart',function(Request $request){
    $data = $request->validate([
        'patient_name' => 'max:255|required',
        'ipd_no' => 'max:255|required',
        'age' => 'max:255|required',
        'sex' => 'max:255|required',
        'attending_consultant' => 'max:255|required',
        'date_01' => 'max:255|required',
        'name_str_01' => 'max:255|required',
        'volume_01' => 'max:255|required',
        'additions_01' => 'max:255|required',
        'rate_01' => 'max:255|required',
        'timestart_01' => 'max:255|required',
        'timeend_01' => 'max:255|required',
        'date_02' => 'max:255',
        'name_str_02' => 'max:255',
        'volume_02' => 'max:255',
        'additions_02' => 'max:255',
        'rate_02' => 'max:255',
        'timestart_02' => 'max:255',
        'timeend_02' => 'max:255',
        'date_03' => 'max:255',
        'name_str_03' => 'max:255',
        'volume_03' => 'max:255',
        'additions_03' => 'max:255',
        'rate_03' => 'max:255',
        'timestart_03' => 'max:255',
        'timeend_03' => 'max:255',
        'date_04' => 'max:255',
        'name_str_04' => 'max:255',
        'volume_04' => 'max:255',
        'additions_04' => 'max:255',
        'rate_04' => 'max:255',
        'timestart_04' => 'max:255',
        'timeend_04' => 'max:255',
        'date_05' => 'max:255',
        'name_str_05' => 'max:255',
        'volume_05' => 'max:255',
        'additions_05' => 'max:255',
        'rate_05' => 'max:255',
        'timestart_05' => 'max:255',
        'timeend_05' => 'max:255',
        'date_06' => 'max:255',
        'name_str_06' => 'max:255',
        'volume_06' => 'max:255',
        'additions_06' => 'max:255',
        'rate_06' => 'max:255',
        'timestart_06' => 'max:255',
        'timeend_06' => 'max:255'
    ]);

    $link = tap(new App\InfusionTherapyChart($data))->save();

    return view('/Index');
  });

  Route::get('/LabSheet', function(){
      return view('LabSheet');
  });

  Route::post('/LabSheet',function(Request $request){
    $data = $request->validate([
      'room_no' => 'max:255',
      'date' => 'max:255',
      'date_01' => 'max:255',
      'date_02' => 'max:255',
      'date_03' => 'max:255',
      'date_04' => 'max:255',
      'date_05' => 'max:255',
      'date_06' => 'max:255',
      'date_07' => 'max:255',
      'name_01' => 'max:255',
      'name_02' => 'max:255',
      'name_03' => 'max:255',
      'name_04' => 'max:255',
      'name_05' => 'max:255',
      'name_06' => 'max:255',
      'name_07' => 'max:255',
      'investigation_01' => 'max:255',
      'investigation_02' => 'max:255',
      'investigation_03' => 'max:255',
      'investigation_04' => 'max:255',
      'investigation_05' => 'max:255',
      'investigation_06' => 'max:255',
      'investigation_07' => 'max:255',
      'remark_01' => 'max:255',
      'remark_02' => 'max:255',
      'remark_03' => 'max:255',
      'remark_04' => 'max:255',
      'remark_05' => 'max:255',
      'remark_06' => 'max:255',
      'remark_07' => 'max:255',
    ]);

    $link = tap(new App\LabSheet($data))->save();

    return view('/Index');
  });

  Route::get('/MARFlowSheet', function(){
      return view('MARFlowSheet');
  });

  Route::get('/NursingDutyOver', function(){
      return view('NursingDutyOver');
  });

  Route::post('/NursingDutyOver',function(Request $request){
    $data = $request->validate([
      'addressograph' => 'max:255',
      'specific_instruction' => 'max:255',
      'M_nurse_name' => 'required|max:255',
      'E_nurse_name' => 'required|max:255',
      'N_nurse_name' => 'required|max:255',
      'M_incharge_name' => 'required|max:255',
      'E_incharge_name' => 'required|max:255',
      'N_incharge_name' => 'required|max:255',
      'M_eyecare' => 'max:255',
      'E_eyecare' => 'max:255',
      'N_eyecare' => 'max:255',
      'M_mouthcare' => 'max:255',
      'E_mouthcare' => 'max:255',
      'N_mouthcare' => 'max:255',
      'M_skincare' => 'max:255',
      'E_skincare' => 'max:255',
      'N_skincare' => 'max:255',
      'M_bedding' => 'max:255',
      'E_bedding' => 'max:255',
      'N_bedding' => 'max:255',
      'M_cathetercare' => 'max:255',
      'E_cathetercare' => 'max:255',
      'N_cathetercare' => 'max:255',
      'M_physiotherapy' => 'max:255',
      'E_physiotherapy' => 'max:255',
      'N_physiotherapy' => 'max:255',
      'M_spongebath' => 'max:255',
      'E_spongebath' => 'max:255',
      'N_spongebath' => 'max:255',
      'M_other' => 'max:255',
      'E_other' => 'max:255',
      'N_other' => 'max:255',
      'M_investigations' => 'max:255',
      'E_investigations' => 'max:255',
      'N_investigations' => 'max:255',
      'M_pendingreport' => 'max:255',
      'E_pendingreport' => 'max:255',
      'N_pendingreport' => 'max:255',
      'M_replacementdrug' => 'max:255',
      'E_replacementdrug' => 'max:255',
      'N_replacementdrug' => 'max:255',
      'balance_drugs_00' => 'max:255',
      'balance_drugs_01' => 'max:255',
      'balance_drugs_02' => 'max:255',
      'balance_drugs_03' => 'max:255',
      'balance_drugs_04' => 'max:255',
      'balance_drugs_05' => 'max:255',
      'M_time_00' => 'max:255',
      'M_time_01' => 'max:255',
      'M_time_02' => 'max:255',
      'M_time_03' => 'max:255',
      'M_time_04' => 'max:255',
      'M_time_05' => 'max:255',
      'M_balance_00' => 'max:255',
      'M_balance_01' => 'max:255',
      'M_balance_02' => 'max:255',
      'M_balance_03' => 'max:255',
      'M_balance_04' => 'max:255',
      'M_balance_05' => 'max:255',
      'E_time_00' => 'max:255',
      'E_time_01' => 'max:255',
      'E_time_02' => 'max:255',
      'E_time_03' => 'max:255',
      'E_time_04' => 'max:255',
      'E_time_05' => 'max:255',
      'E_balance_00' => 'max:255',
      'E_balance_01' => 'max:255',
      'E_balance_02' => 'max:255',
      'E_balance_03' => 'max:255',
      'E_balance_04' => 'max:255',
      'E_balance_05' => 'max:255',
      'N_time_00' => 'max:255',
      'N_time_01' => 'max:255',
      'N_time_02' => 'max:255',
      'N_time_03' => 'max:255',
      'N_time_04' => 'max:255',
      'N_time_05' => 'max:255',
      'N_balance_00' => 'max:255',
      'N_balance_01' => 'max:255',
      'N_balance_02' => 'max:255',
      'N_balance_03' => 'max:255',
      'N_balance_04' => 'max:255',
      'N_balance_05' => 'max:255',
      'event_m_nurse_name' => 'max:255',
      'event_e_nurse_name' => 'max:255',
      'event_n_nurse_name' => 'max:255',
      'm_date' => 'max:255',
      'e_date' => 'max:255',
      'n_date' => 'max:255',
      'm_time' => 'max:255',
      'e_time' => 'max:255',
      'n_time' => 'max:255',
    ]);

    $link = tap(new App\NursingDutyOver($data))->save();

    return view('/index');
  });

  Route::get('/NutritionalAssessmentForm', function(){
      return view('NutritionalAssessmentForm');
  });

  Route::get('/OperativeDetailSheet', function(){
      return view('OperativeDetailSheet');
  });

  Route::post('/OperativeDetailSheet', function(Request $request){
    $data = $request->validate([
      'ot_no' => 'max:255|required',
      'date' => 'max:255|required',
      'wheel_in' => 'max:255|required',
      'wheel_out' => 'max:255|required',
      'anesthesa_induction_time' => 'max:255|required',
      'reversal_time' => 'max:255|required',
      'antibiotic1' => 'max:255|required',
      'antibiotic1_time' => 'max:255|required',
      'antibiotic2' => 'max:255',
      'antibiotic2_time' => 'max:255',
      'surgical_time_from' => 'max:255|required',
      'surgical_time_to' => 'max:255|required',
      'surgery_type' => 'max:255|required',
      'surgeon1' => 'max:255|required',
      'surgeon2' => 'max:255',
      'surgeon3' => 'max:255',
      'anesthetist1' => 'max:255|required',
      'anesthetist2' => 'max:255',
      'anesthetist3' => 'max:255',
      'iitv' => 'max:255',
      'fentanyl' => 'max:255',
      'drill' => 'max:255',
      'sevoflurane_desflurane' => 'max:255',
      'microscope' => 'max:255',
      'endoscope' => 'max:255',
      'cussa' => 'max:255',
      'implants' => 'max:255',
      'vendor' => 'max:255',
      'diagnosis' => 'max:255|required',
      'operation_performed' => 'max:255|required',
      'mediclaim' => 'max:255|required',
      'name_tpa' => 'max:255|required',
      'company_thirdparty' => 'max:255|required',
      'name_party' => 'max:255|required',
      'amount' => 'max:255|required',
      'surgery_only' => 'max:255|required',
      'package_surgical' => 'max:255|required',
      'package_total' => 'max:255|required',
    ]);

    $link = tap(new App\OperativeDetailSheet($data))->save();

    return view('Index');
  });


  Route::get('/PatientDietRecord', function(){
      return view('PatientDietRecord');
  });

  Route::get('/PatientsDetailForm', function(){
      return view('PatientsDetailForm');
  });

  Route::post('/PatientsDetailForm', function(Request $request){
    $data = $request->validate([
        'date' => 'required|max:255',
        'time' => 'required|max:255',
        'middle_name' => 'required|max:255',
        'last_name' => 'required|max:255',
        'date_of_birth' => 'required|max:255',
        'sex' => 'required|max:255',
        'address' => 'required|max:255',
        'phone_no' => 'required|max:255',
        'mobile_no' => 'required|max:255',
        'reference_dr' => 'required|max:255',
        'consulting_dr' => 'required|max:255',
        'case' => 'required|max:255',
    ]);

    $link = tap(new App\PatientDetailForm($data))->save();

    return view('Index');
  });


  Route::get('/PeripheralLineBundleChecklist', function(){
      return view('PeripheralLineBundleChecklist');
  });

  Route::get('/PlanOfCare', function(){
      return view('PlanOfCare');
  });

  Route::post('/PlanOfCare', function(Request $request){
    $data = $request->validate([
      'diagnosis' => 'max:255|required',
      'needs_goals' => 'max:255|required',
      'treatment_plan' => 'max:255|required',
      'preventive_aspects' => 'max:255|required',
      'progress_00' => 'max:255',
      'date_00' => 'max:255',
      'progress_01' => 'max:255',
      'date_01' => 'max:255',
      'progress_02' => 'max:255',
      'date_02' => 'max:255',
      'progress_03' => 'max:255',
      'date_03' => 'max:255',
      'progress_04' => 'max:255',
      'date_04' => 'max:255',
      'progress_05' => 'max:255',
      'date_05' => 'max:255',
      'progress_06' => 'max:255',
      'date_06' => 'max:255',
      'progress_07' => 'max:255',
      'date_07' => 'max:255',
      'note_discharge' => 'max:255|required',
    ]);

    $link = tap(new App\PlanOfCare($data))->save();

    return view('Index');
  });

  Route::get('/RadiologyRequisition', function(){
    return view('RadiologyRequisition');
  });

  Route::post('/RadiologyRequisition', function(Request $request){
    $data = $request->validate([
      'provisional_diagnosis' => 'max:255|required',
      'brain_plain' => 'max:255',
      'ct_pmns' => 'max:255',
      'brain_plain_contrast' => 'max:255',
      'ct_head_face' => 'max:255',
      'ct_face_plain' => 'max:255',
      'ct_3d' => 'max:255',
      'ct_cv_junction_flex' => 'max:255',
      'ct_cv_junction_ext' => 'max:255',
      'ct_chest_plain' => 'max:255',
      'ct_dorsal_spine' => 'max:255',
      'ct_cervical_spine' => 'max:255',
      'ct_abdomen_plain' => 'max:255',
      'ct_lumbar_spine' => 'max:255',
      'other' => 'max:255',
      'anyother' => 'max:255',
      'xray_fixed' => 'max:255',
      'xray_portable' => 'max:255',
      'other_xray' => 'max:255',
      'xray_other' => 'max:255',
      'date' => 'max:255|required',
      'time' => 'max:255|required',
    ]);

    $link = tap(new App\RadiologyRequisition($data))->save();

    return view('Index');
  });

  Route::get('/PreAngiographyAngioplastyChecklist', function(){
      return view('PreAngiographyAngioplastyChecklist');
  });

  Route::get('/TransferChecklistForNurses', function(){
      return view('TransferChecklistForNurses');
  });

  Route::get('/VentilatorChargeSheet', function(){
      return view('VentilatorChargeSheet');
  });

  Route::get('/WardProcedureRecord', function(){
      return view('WardProcedureRecord');
  });

  Route::get('/submit_doctors_handover', function(){
    return redirect('/index');
  } ) ;

  Route::get('/DoctorsInitialAssessment', function(){
      return view('DoctorsInitialAssessment');
  });

  Route::post('/DoctorsInitialAssessment', function(Request $request){
    $data = $request->validate([
        'history' => 'required|max:255',
        'past_history' => 'required|max:255',
        'allergic_history' => 'required|max:255',
        'name_informant' => 'required|max:255',
        'brought_by' => 'required|max:255',
        'place_of_accident' => 'required|max:255',
        'current_time' => 'required|max:255',
        'current_date' => 'required|max:255',
        'mlc' => 'required|max:255',
        'loc' => 'required|max:255',
        'ent_bleeding' => 'required|max:255',
        'seizures' => 'required|max:255',
        'vomiting' => 'required|max:255',
        'pulse' => 'required|max:255',
        'temp' => 'required|max:255',
        'bp' => 'required|max:255',
        'spo2' => 'required|max:255',
        'rbs' => 'required|max:255',
        'pain' => 'required|max:255',
        'gcs_e' => 'required|max:255',
        'gcs_m' => 'required|max:255',
        'gcs_v' => 'required|max:255',
        'systematic_examination' => 'required|max:255',
        'any_other' => 'required|max:255',
        'treated_on_admission' => 'required|max:255',
        'shifted_to' => 'required|max:255',
    ]);

    $link = tap(new App\DoctorsInitialAssessment($data))->save();

    return view('Index');
  });

  //
  //

  Route::get('/BloodTransfusionForm', function(){
      return view('BloodTransfusionForm');
  });

  Route::post('/BloodTransfusionForm', function(Request $request){
    $data = $request->validate([
      'patient_name'  => 'required|max:255',
      'ipd_no'  => 'required|max:255',
      'age'  => 'required|max:255',
      'sex'  => 'required|max:255',
      'date'  => 'required|max:255',
      'time'  => 'required|max:255',
      'blood_group'  => 'required|max:255',
      'history_bt'  => 'required|max:255',
      'adv'  => 'required|max:255',
      'blood_bag_no'  => 'required|max:255',
      'blood_bag_group'  => 'required|max:255',
      'prod_name'  => 'required|max:255',
      'name_blood_bank'  => 'required|max:255',
      'expiry_date'  => 'required|max:255',
      'checked_by'  => 'required|max:255',
      'unit_nurse'  => 'required|max:255',
      'start_time'  => 'required|max:255',
      'end_time'  => 'required|max:255'
    ]);

    $link2 = tap(new App\BloodTransfusionForm($data))->save();

    return view('Index');
  });

  Route::get('/DoctorsHandover', function(){
      return view('DoctorsHandover');
  });
  Route::post('/DoctorsHandover', function(Request $request){
    $data = $request->validate([
      'day_night' => 'required|max:255',
      'surgical'  => 'max:255',
      'tentative_date_of_surgery'  => 'max:255',
      'date_of_surgery'  => 'max:255',
      'physician_reference'  => 'max:255',
      'other_physician_reference'  => 'max:255',
      'pathological_investigation_done'  => 'max:255',
      'pathological_investigation_collected'  => 'max:255',
      'radiological_investigation_collected'  => 'max:255',
      'other_investigation_done'  => 'max:255',
      'other_investigation_collected'  => 'max:255',
      'echo'  => 'max:255',
      'physiotherapy'  => 'max:255',
      'specific_instruction'  => 'max:255',
      'verified_by_assistant'  => 'max:255',
      'name_given'  => 'required|max:255',
      'date_given'  => 'required|max:255',
      'time_given'  => 'required|max:255',
      'name_taken'  => 'required|max:255',
      'date_taken'  => 'required|max:255',
      'time_taken'  => 'required|max:255',

    ]);
    $link3 = tap(new App\DoctorsHandover($data))->save();

    return view('Index');
  });

});

/*
    $data = $request->validate([
        'title' => 'required|max:255',
        'url' => 'required|url|max:255',
        'description' => 'required|max:255',
    ]);

*/
