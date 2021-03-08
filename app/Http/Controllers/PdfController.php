<?php

namespace App\Http\Controllers;

use PDF;
use App\Letter;
use App\Staff;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function Invoiceindex()
    {
        $data = Letter::all();
        return view('pages.letter.print',
        ['data' => $data]);
    }

    public function printInvoice()
    {
        $data = Letter::all();
        $pdf = PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])
                ->loadview('pages.letter.print', ['data' => $data])
                ->setOptions(['defaultFont' => 'sans-serif']);

        // return $pdf->download('invoice.pdf');

        $pdf->save(storage_path() . '\uploads\invoice.pdf');
        return $pdf->stream();
    }

    public function printStaff()
    {
        $data = Staff::all();
        $pdf = PDF::setOptions(['isRemoteEnabled' => true])
            ->loadview('pages.staff.print', ['data' => $data]);

        // dd(asset('public/assets/media/bg/bg-10.jpg'));
        return $pdf->download('invoice.pdf');

    }
}
