<?php

namespace App\Http\Controllers;

use App\Model\studentList;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class pdfController extends Controller
{
    public function previewPdf(Request $request)
    {
        $pdf = PDF::loadView('Backend.pages.pdf');
        return $pdf->stream();
    }

    public function downloadAdmitCard(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'mobileNumber'=>'required',
            'position'=>'required',
            'bankName'=>'required'
        ]);
        if($studentData=studentList::where(['email'=>$request->email,'mobileNo'=>$request->mobileNumber,'position'=>$request->position,'bankName'=>$request->bankName])->first()){
           $pdf=PDF::loadView('Backend.pages.pdf',compact('studentData'));
           return $pdf->stream();
        }
        return redirect()->back()->with('fail','Need valid credentials');
    }
}
