Completed :
-Doctors Initial Assessment
-Doctors Handover
-Infusion Therapy Chart
-Drug Requisition
-Code Blue Evaluation Form
-Plan Of Care
-Operative Detail Sheet
-Radiology Requisition
-NutritionalAssessmentForm
-History Form [ error section remaining ]


//code snippets

DB Read :
<?php
  $users = DB::table('users')->get();
 ?>
 <?php foreach ($users as $key): ?>
   <p>Name : "{{ $key->name }}" & Email : "{{ $key->email }}"</p>
 <?php endforeach; ?>

please check why its still showing errors in transferchecklistfor nurse.
