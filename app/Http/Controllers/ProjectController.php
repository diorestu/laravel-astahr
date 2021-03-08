<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;
use Carbon\Carbon;
use Yajra\DataTables\Facades\DataTables;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            
            $query = Project::all();

            return Datatables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <div class="dropdown dropdown-inline dropright">
                            <button type="button" class="btn btn-light-primary btn-icon btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ki ki-bold-more-hor"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="' . route('project.edit', $item->id) . '">Sunting</a>
                                <div class="dropdown-divider"></div>
                                <form action="' . route('project.destroy', $item->id) . '" method="POST">
                                    ' . method_field('delete') . csrf_field() . '
                                    <button type="submit" class="dropdown-item text-danger">
                                        Hapus
                                    </button>
                                </form>
                            </div>
                        </div>
                        ';
                })
                ->addColumn('nilaiKontrak', function ($item) {
                    return 'Rp. '. number_format($item->nilai);
                })
                ->addColumn('kontrakTahun', function ($item) {
                    return $item->kontrak . ' Tahun';
                })
                ->rawColumns(['kontrakTahun','nilaiKontrak','action'])
                ->addIndexColumn()
                ->make(true);
        }

        $projects = Project::all();
        return view('pages.project.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $item = Project::findOrFail($id);

        return view('pages.project.edit', [
            'item' => $item,
        ]);
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
        $data = $request->all();
        $item = Project::findOrFail($id);
        $item->update($data);

        Alert::alert('Berhasil', 'Ubah Project Berhasil', 'success')->autoClose(2000);
        return redirect()->route('project.index');
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
