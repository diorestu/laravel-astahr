<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;
use App\Project;
use App\Letter;
use App\Kwitansi;
use App\Pengumuman;
use App\SuratEksternal;
use App\SuratPeringatan;
use App\SuratKeterangan;
use App\Department;
use App\LogActivity;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $staffs     = Staff::get();
        $projects   = Project::get();
        $invoice    = Letter::whereMonth('created_at', date('m'))->max('nomor');
        // dd($invoice);

        return view('pages.home', [
            'staffs_count' => $staffs->count(),
            'projects_count' => $projects->count(),
            'invoice' => $invoice,
        ]);
    }

    public function myTestAddToLog()
    {
        LogActivity::addToLog('My Testing Add To Log.');
        dd('log insert successfully.');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function logActivity()
    {
        $logs = LogActivity::logActivityLists();
        return view('logActivity', compact('logs'));
    }
}
