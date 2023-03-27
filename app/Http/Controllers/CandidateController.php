<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Interfaces\CandidateInterface;
use App\Http\Requests\RegformRequest;

class CandidateController extends Controller
{
    private $candidate;

    public function __construct(CandidateInterface $candidate)
    {
        $this->candidate = $candidate;
    }

    public function registrationform_submit(RegformRequest $request)
    {
        $ticketid = $this->candidate->submit_Candidate_details($request);
        //  dd($ticketid);
        return view('registrationform', compact('ticketid'));
    }

    public function Display_Job_Candidate()
    {
        $Candidates = $this->candidate->Display_Job_Candidates();
        return view('jobrequests', compact('Candidates'));
    }

    public function Delete_Candidate($id)
    {
        $this->candidate->Delete_Candidate($id);
        return back();
    }

    public function show_Candidate($id)
    {
        $details = $this->candidate->show_Candidate($id);
        return view('candidatedetails', compact('details'));
    }

    public function update_status(Request $request, $id)
    {
        $this->candidate->update_status($request, $id);
        $Candidates = $this->candidate->Display_Job_Candidates();
        return view('jobrequests', compact('Candidates'));
    }
    public function search_by_Ticket(Request $request)
    {
        $getUserstatus = $this->candidate->search_by_Ticket($request);
        // dd($GetUserstatus);
        return view('Searchticket', compact('getUserstatus'));
    }
}
