<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Models\File;
use App\Models\Intership;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\File as RulesFile;

class ApplicantsController extends Controller
{
    public function index()
    {
        $applicants = Applicant::with(['files', 'interships'])->get();
        //dd($applicants);
        return view('applicants.index', ['applicants' => $applicants]);
    }

    public function create()
    {
        return view('applicants.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'education' => 'required',
            'file' => 'required',
            'company_name' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);
        $applicant = new Applicant();

        $applicant->fname = $request->fname;
        $applicant->lname = $request->lname;
        $applicant->date_of_birth = $request->date;
        $applicant->email = $request->email;
        $applicant->education = $request->education;
        $applicant->save();
        foreach ($request->file as $key => $value) {

            $path = $value->store('attachments');

            $file = new File();
            $file->filename = $path;
            $file->applicant_id = $applicant->id;
            $file->save();
        }

        if (count($request->company_name) == count($request->start_date) ) {
            $size = count($request->company_name);
            for ($i = 0; $i<$size; $i++) {
                $internship = new Intership([
                    'company_name' => $request->company_name[$i],
                    'start_date' => $request->start_date[$i],
                    'end_date' => $request->end_date[$i],
                    'applicant_id' => $applicant->getAttribute("id")
                ]);

                $internship->save();
            }

        }


        return redirect()->route('applicants.index')->with('message', 'Dziekujemy za dodanie kandydata do bazy');
    }
}
