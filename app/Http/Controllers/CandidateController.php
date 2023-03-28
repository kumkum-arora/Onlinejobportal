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
        $ticketid = $this->candidate->submitCandidatedetails($request);
        return view('registrationform', compact('ticketid'));
    }

    public function displayJobcandidate()
    {
        $Candidates = $this->candidate->displayJobcandidates();
        return view('jobrequests', compact('Candidates'));
    }

    public function deleteCandidate($id)
    {
        $this->candidate->deleteCandidate($id);
        return redirect('showjobrequests');
    }

    public function showCandidate($id)
    {
        $details = $this->candidate->showCandidate($id);
        return view('candidatedetails', compact('details'));
    }

    public function updateStatus(Request $request, $id)
    {
        $this->candidate->updateStatus($request, $id);
        return redirect('showjobrequests');
    }
    public function searchByticket(Request $request)
    {
        $getUserstatus = $this->candidate->searchByticket($request);
        return view('Searchticket', compact('getUserstatus'));
    }
}
