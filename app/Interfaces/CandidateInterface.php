<?php

namespace App\Interfaces;

interface CandidateInterface
{
     //add candidate details into the table
     public function submit_Candidate_details($request);
     
     // list all candidates
     public function Display_Job_Candidates();

     // delete candidate
     public function Delete_Candidate($id);

     // show all the details of perticular selected candidate
     public function show_Candidate($id);
    
     // update status selected or rejected
     public function update_status($request, $id);
   
     // search by ticket number for getting the status of your job application
     public function search_by_Ticket($request);
}