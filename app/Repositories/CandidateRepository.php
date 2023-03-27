<?php

namespace App\Repositories;

use App\Interfaces\CandidateInterface;
use App\Models\candidatedetails;
use Illuminate\Support\Str;


class CandidateRepository implements CandidateInterface
{
    public function submit_Candidate_details($request)
    {
        $random = Str::random(10);

        if ($request->hasFile('resumefile')) {
            $file = $request->file('resumefile');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/', $filename);
        }
        $candidate = candidatedetails::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'phone' => $request->phone,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'country' => $request->country,
            'postcode' => $request->postcode,
            'dob' => $request->dob,
            'qualification' => $request->qualification,
            'employeetype' => $request->employeetype,
            'expdetails' => $request->expdetails,
            'hobby' => $request->hobby,
            'resumefile' => $filename,
            'status' => $request->status,
            'ticketid' => $random,
        ]);

        return $random;
    }

    public function Display_Job_Candidates()
    {
        return candidatedetails::all();
    }

    public function Delete_Candidate($id)
    {
        $deletecandidate = candidatedetails::find($id);
        $deletecandidate->delete();
    }

    public function show_Candidate($id)
    {
        return candidatedetails::where('id', $id)->get();
    }

    public function update_status($request, $id)
    {
        $candidate = candidatedetails::find($id);
        if ($request->isMethod('post')) {
            $candidate->status = $request->get('status');
            $candidate->update();
        }
    }
    public function search_by_Ticket($request)
    {   
        $Ticketid= $request->get('search');
        return candidatedetails::where('ticketid', $Ticketid)->get();
    }
}
