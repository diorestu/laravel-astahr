<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SuratEksternal;

use App\Http\Requests\LetterRequest;
use Yajra\DataTables\Facades\DataTables;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;

class SuratEksternalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = SuratEksternal::with(['user']);

            return Datatables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <div class="btn-group">
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle mr-1 mb-1" 
                                    type="button" id="action' .  $item->id . '"
                                        data-toggle="dropdown" 
                                        aria-haspopup="true"
                                        aria-expanded="false">
                                        Aksi
                                </button>
                                <div class="dropdown-menu" aria-labelledby="action' .  $item->id . '">
                                    <a class="dropdown-item" href="' . route('eksternal.edit', $item->id) . '">
                                        Sunting
                                    </a>
                                    <form action="' . route('eksternal.destroy', $item->id) . '" method="POST">
                                        ' . method_field('delete') . csrf_field() . '
                                        <button type="submit" class="dropdown-item text-danger">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </div>
                         </div>
                        ';
                })
                ->rawColumns(['action'])
                ->make();
        }

        // Alert::alert('Halo', 'Testing', 'Type')->autoClose(2000);
        return view('pages.eksternal.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // karna array dimulai dari 0 maka kita tambah di awal data kosong
        // bisa juga mulai dari "1"=>"I"
        $noAkhir = SuratEksternal::whereMonth('created_at', date('m'))->max('urut');
        // $noAkhir = (int) Str::substr(Letter::max('nomor'), 0, 3);
        $noUrutAkhir = $noAkhir;
        $no = 1;
        if ($noUrutAkhir) {
            $nomorSurat = sprintf("%03s", abs($noAkhir + 1));
            //  . '/' . $company . '/' . $bulanRomawi[date('n')] . '/' . date('Y') . $now;
        } else {
            $nomorSurat = sprintf("%03s", $no);
        }

        return view('pages.eksternal.create', [
            'nomorSurat' => $nomorSurat,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // karna array dimulai dari 0 maka kita tambah di awal data kosong
        // bisa juga mulai dari "1"=>"I"
        $noAkhir = SuratEksternal::whereMonth('created_at', date('m'))->max('urut');
        $noUrutAkhir = $noAkhir;
        $no = 1;
        if ($noUrutAkhir) {
            $nomorSurat = sprintf("%03s", abs($noAkhir + 1));
        } else {
            $nomorSurat = sprintf("%03s", $no);
        }

        $month = date('m');
        $year = date('Y');
        $data = $request->all();
        $data['users_id'] = Auth::user()->id;
        $data['nomor'] = $nomorSurat;
        $data['kategori'] = "2.3$nomorSurat/ASTA/EKS/$month/$year";


        Letter::create($data);

        // Alert::alert('Berhasil', 'Menambahkan data invoice', 'Success');
        Alert::alert('Berhasil', 'Tambah Surat Berhasil', 'success')->autoClose(2000);
        return redirect()->route('eksternal.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
