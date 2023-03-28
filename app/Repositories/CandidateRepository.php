<?php

namespace App\Repositories;

use App\Interfaces\CandidateInterface;
use App\Models\candidatedetails;
use App\Models\candidateDetail;
use Illuminate\Support\Str;


class CandidateRepository implements CandidateInterface
{
    // This function stores the date of the job registration form in the database and saves the PDF file which is in the storage and after saving the data gives a ticket number to the user.
    public function submitCandidatedetails($request)
    {
        $random = Str::random(10);

        if ($request->hasFile('resumefile')) {
            $file = $request->file('resumefile');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/', $filename);
        }
        $candidate = candidateDetail::create([
            'name'          => $request->name,
            'email'         => $request->email,
            'password'      => $request->password,
            'phone'         => $request->phone,
            'address'       => $request->address,
            'city'          => $request->city,
            'state'         => $request->state,
            'country'       => $request->country,
            'postcode'      => $request->postcode,
            'dob'           => $request->dob,
            'qualification' => $request->qualification,
            'employeetype'  => $request->employeetype,
            'expdetails'    => $request->expdetails,
            'hobby'         => $request->hobby,
            'resumefile'    => $filename,
            'status'        => $request->status,
            'ticketid'      => $random,
        ]);

        return $random;
    }

    // this function display all the job requests to the admin
    public function displayJobcandidates()
    {
        return candidateDetail::all();
    }

    // This function deletes the details of the candidate
    public function deleteCandidate($id)
    {
        $deletecandidate = candidateDetail::find($id);
        $deletecandidate->delete();
    }

    // This function is used to show the details of the particular candidate to the admin
    public function showCandidate($id)
    {
        return candidateDetail::where('id', $id)->get();
    }

    // This function updates the job status whether the user is selected or rejected
    public function updateStatus($request, $id)
    {
        $candidate = candidateDetail::find($id);
        if ($request->isMethod('post')) {
            $candidate->status = $request->get('status');
            $candidate->update();
        }
    }

    // This function shows the status of the searched ticket id whether the user is selected, rejected, or under review.
    public function searchByticket($request)
    {
        $Ticketid = $request->get('search');
        return candidateDetail::where('ticketid', $Ticketid)->get();
    }
}
