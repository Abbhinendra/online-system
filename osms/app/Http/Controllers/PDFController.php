<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\Request as UserRequest;

class PDFController extends Controller
{
    public function generatePDF(Request $request)
    {
        $id=$request->input('pdf_id');
        $userrequest = UserRequest::findOrFail($id);
        $pdf = PDF::loadView('requestPdf',compact('userrequest'));
        return $pdf->download('request.pdf');
    }

    public function generatePDFforTechnician($id){
        $data = UserRequest::findOrFail($id);
        $pdf = PDF::loadView('pdf',compact('data'));
        return $pdf->download('request.pdf');
    }
}
