<?php

namespace App\Http\Controllers;

use App\Models\DetailRegistration;
use App\Models\Major;
use App\Models\SchoolYear;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class PendaftarController extends Controller
{
    public function index(Request $request)
    {
        $pendaftar = DetailRegistration::query();
        $keyword = $request->keyword;
        if($keyword){
            $pendaftar->where('full_name', 'LIKE', '%' . $keyword . '%')
                      ->orWhere('school_origin', 'LIKE', '%' . $keyword . '%')
                      ->orWhere('nisn', 'LIKE', '%' . $keyword . '%');
        }
        $pendaftar = $pendaftar->orderBy('full_name', 'asc')->paginate(10);
        $pendaftar->appends(['keyword' => $keyword]);
        return view('admin.Ppdb.new.pendaftar.index', compact('pendaftar'));
        // $pendaftar = DetailRegistration::when($search, function ($query, $search) {
        //     $query->where('full_name', 'like', "%$search%")
        //           ->orWhere('school_origin', 'like', "%$search%");
        // })
        // ->orderBy('created_at', 'desc')
        // ->paginate(10);
    }
    // public function show($id)
    // {
    //     if ($id == null || $id == "") {
    //         return $this->backWithError('ppdb.pendaftar.index', 'Siswa tidak ditemukan.');
    //     }
    //     //
    //     $pendaftar = DetailRegistration::where('id', $id);
    //     return Response::json($pendaftar);
    //     $major_1 = Major::where('id',$pendaftar->major_id_1);
    //     $major_2 = Major::where('id',$pendaftar->major_id_2);
    //     // dd($major);
    //     // Jika menggunakan Eloquent, gunakan "findOrFail" untuk menemukan pendaftaran berdasarkan ID atau lemparkan pengecualian jika tidak ditemukan
        
    //     return view('admin.Ppdb.new.pendaftar.show', compact('pendaftar', 'major_1', 'major_2'));
        
    // }

    public function show($id)
    {
        $pendaftar = DetailRegistration::findOrFail($id)->join('major', 'major.id', '=', 'detail_registration.major_id_1')
                  ->join('major as major2', 'major2.id', '=', 'detail_registration.major_id_2')
                  ->get(['detail_registration.*', 'major.major_name as major_name', 'major2.major_name as major_name2'])
                  ->first();
                //   return Response::json($pendaftar);
        $user = User::findOrFail($pendaftar->user_id);
        $major_1 = Major::where('id',$pendaftar->major_id_1)->first();
        $major_2 = Major::where('id',$pendaftar->major_id_2)->first();
        
        return view('admin.Ppdb.new.pendaftar.show', compact('pendaftar', 'user', 'major_1', 'major_2'));
    }
    public function updateStatus(Request $request, $id)
    {
        $registration = DetailRegistration::findOrFail($id);
        $registration->user_registration_status = $request->status;
        $registration->save();
        return redirect()->route('ppdb.pendaftar.index')->with('success', 'Status pendaftar berhasil diperbarui.');
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
