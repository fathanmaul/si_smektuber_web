<?php

namespace App\Http\Controllers;

use App\Models\Extracurricular;
use Illuminate\Http\Request;

class EkstrakurikulerController extends Controller
{
    //

    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $extracurricular = Extracurricular::where('extracurricular_name', 'LIKE', '%' . $request->cari . '%')->paginate(10);
            return view('admin.Ekstrakurikuler.new.index', compact('extracurricular'));
            // return $jurusan;
        }
        $extracurricular = Extracurricular::paginate(10);
        return view('admin.Ekstrakurikuler.new.index', compact('extracurricular'));
    }

    public function create()
    {
        return view('admin.Ekstrakurikuler.new.create');
    }

    public function store(Request $request)
    {
        
    }

    public function destroy($id)
    {
        try {
            $ekstrakurikuler = Extracurricular::find($id);
            $ekstrakurikuler->delete();
            return redirect()->route('ekstrakurikuler.index')->with('flash', [
                'type' => 'success',
                'message' => 'Ekstrakurikuler berhasil dihapus!'
            ]);
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->route('ekstrakurikuler.index')->with('flash', [
                'type' => 'danger',
                'message' => 'Ekstrakurikuler gagal dihapus!' . $th->getMessage()
            ]);
        }
    }
}
