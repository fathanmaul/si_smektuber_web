<?php

namespace App\Http\Controllers;

use App\Models\Extracurricular;
use Illuminate\Http\Request;

class EkstrakurikulerController extends Controller
{
    //

    public function index()
    {
        $data = Extracurricular::paginate(10);
        return view('Ekstrakurikuler.index', ['extracurricular' => $data]);
    }

    public function create()
    {
        return view('Ekstrakurikuler.create');
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
