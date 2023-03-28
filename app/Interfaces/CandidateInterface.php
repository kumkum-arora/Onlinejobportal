<?php

namespace App\Interfaces;

interface CandidateInterface
{
     //add candidate details into the table
     public function submitCandidatedetails($request);
     
     // list all candidates
     public function displayJobcandidates();

     // delete candidate
     public function deleteCandidate($id);

     // show all the details of perticular selected candidate
     public function showCandidate($id);
    
     // update status selected or rejected
     public function updateStatus($request, $id);
   
     // search by ticket number for getting the status of your job application
     public function searchByticket($request);
}