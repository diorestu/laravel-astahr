<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

use App\Staff;
use Carbon\Carbon;
use Yajra\DataTables\Facades\DataTables;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            
            $query = Staff::with(['project', 'department', 'position']);

            return Datatables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <div class="dropdown dropdown-inline dropright">
                            <button type="button" class="btn btn-light-primary btn-icon btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ki ki-bold-more-hor"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="' . route('staff.edit', $item->id) . '">Sunting</a>
                                <div class="dropdown-divider"></div>
                                <form action="' . route('staff.destroy', $item->id) . '" method="POST">
                                    ' . method_field('delete') . csrf_field() . '
                                    <button type="submit" class="dropdown-item text-danger">
                                        Hapus
                                    </button>
                                </form>
                            </div>
                        </div>
                        ';
                })
                ->addColumn('umur', function($item){
                    $now = Carbon::now();
                    $b_day = Carbon::parse($item->lahir);
                    $age = $b_day->diffInYears($now);
                    return $age;
                })
                ->rawColumns(['umur', 'action'])
                ->addIndexColumn()
                ->make(true);
        }

        return view('pages.staff.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.staff.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        Staff::create($data);

        // Alert::alert('Berhasil', 'Menambahkan data invoice', 'Success');
        Alert::alert('Berhasil', 'Tambah Invoice Berhasil', 'success')->autoClose(2000);
        return redirect()->route('letter.index');
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
        $item = Staff::findorFail($id);
        $item->delete();
        Alert::alert('Berhasil', 'Hapus Personil Berhasil', 'success')->autoClose(3000);
        return redirect()->route('staff.index');
    }
}
