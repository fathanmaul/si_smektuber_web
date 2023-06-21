<?php

namespace App\Http\Controllers;

use App\Models\DetailRegistration;
use App\Models\Major;
use App\Models\Registration;
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
        $tahun_ajaran = Registration::join('school_year', 'school_year.id', '=', 'registration.school_year')
            ->get(['school_year.school_year as school_year', 'school_year.id as id']);
        // return Response::json($tahun_ajaran);
        $keyword = $request->keyword;
        $tahun = $request->tahun_ajaran;

        if ($keyword) {
            $pendaftar->where('full_name', 'LIKE', '%' . $keyword . '%')
                ->orWhere('school_origin', 'LIKE', '%' . $keyword . '%')
                ->orWhere('nisn', 'LIKE', '%' . $keyword . '%');
        }
        $pendaftar->join('registration', 'registration.id', '=', 'detail_registration.registration_id');
        $pendaftar->join('school_year', 'school_year.id', '=', 'registration.school_year');
        if ($tahun) {
            $pendaftar->where('registration.school_year', $tahun);
        }
        $pendaftar->select(['detail_registration.*', 'registration.school_year as school_year_id', 'school_year.school_year as school_year_name']);
        $pendaftar = $pendaftar->orderBy('full_name', 'asc')->paginate(10);
        $pendaftar->appends(['keyword' => $keyword, 'tahun_ajaran' => $tahun]);
        // return Response::json($pendaftar);
        // return Response::json($pendaftar);
        return view('admin.Ppdb.new.pendaftar.index', compact('pendaftar', 'tahun_ajaran'));
        // $pendaftar = DetailRegistration::when($search, function ($query, $search) {
        //     $query->where('full_name', 'like', "%$search%")
        //           ->orWhere('school_origin', 'like', "%$search%");
        // })
        // ->orderBy('created_at', 'desc')
        // ->paginate(10);
    }

    public function show($id)
    {
        $pendaftar = DetailRegistration::where('detail_registration.id', $id)->join('major', 'major.id', '=', 'detail_registration.major_id_1')
            ->join('major as major2', 'major2.id', '=', 'detail_registration.major_id_2')
            ->get(['detail_registration.*', 'major.major_name as major_name', 'major2.major_name as major_name2'])
            ->first();
            if(!$pendaftar){
                return $this->backWithError('ppdb.pendaftar.index', 'Siswa tidak ditemukan.');
            }
        $user = User::findOrFail($pendaftar->user_id);
        $major_1 = Major::where('id', $pendaftar->major_id_1)->first();
        $major_2 = Major::where('id', $pendaftar->major_id_2)->first();

        return view('admin.Ppdb.new.pendaftar.show', compact('pendaftar', 'user', 'major_1', 'major_2'));
    }
    public function updateStatus(Request $request, $id)
    {
        $registration = DetailRegistration::findOrFail($id);
        $registration->user_registration_status = $request->status;
        $registration->save();
        return redirect()->route('ppdb.pendaftar.index')->with('success', 'Status pendaftar berhasil diperbarui.');
    }

    public function acceptStatus(Request $request, $id)
    {
        $pendaftar = DetailRegistration::findOrFail($id);
        $request->validate([
            'major_accepted' => 'required'
        ],[
            'major_accepted.required' => 'Harap pilih salah satu jurusan yang tersedia!'
        ]);
        // if ($request->major_accepted == null) {
        //     return back()->with('flash', [
        //         'type' => 'danger',
        //         'message' => 'Harap pilih salah satu jurusan yang tersedia!'
        //     ]);
        // }
        try {
            DetailRegistration::where('id', $id)->update([
                'user_registration_status' => '1',
                'major_accepted' => $request->major_accepted
            ]);

            $user = User::findOrFail($pendaftar->user_id);
            $user->role_id = 3;
            $user->save();

            return back()->with('flash', [
                'type' => 'success',
                'message' => 'Siswa berhasil diterima'
            ]);
        } catch (\Throwable $th) {
            return $this->backWithError('ppdb.pendaftar.index', 'Status pendaftar gagal diperbarui.');
        }
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
