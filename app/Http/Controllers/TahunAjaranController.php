<?php

namespace App\Http\Controllers;

use App\Models\SchoolYear;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class TahunAjaranController extends Controller
{
    public function index()
    {
        $tahun_ajaran = SchoolYear::orderBy('school_year', 'desc')->paginate(10);
        return view('admin.Ppdb.new.tahun-ajaran.index', compact('tahun_ajaran'));
    }

    public function create()
    {
        return view('admin.Ppdb.new.tahun-ajaran.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'school_year' => 'required|max:20|unique:school_year,school_year'
        ], [
            'school_year.required' => 'Harap isi Tahun Ajaran',
            'school_year.max' => 'Tahun Ajaran terlalu panjang!',
            'school_year.unique' => 'Tahun Ajaran sudah terdaftar!',
        ]);
        try {
            SchoolYear::insert([
                'school_year' => $request->school_year,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            return $this->backWithSuccess('ppdb.tahun_ajaran.index', 'Tahun Ajaran berhasil ditambahkan!');
        } catch (\Throwable $th) {
            return $this->backWithError('ppdb.tahun_ajaran.index', 'Sepertinya Ada Kesalahan! | Code : 500' . $th);
        }
    }

    public function edit($id)
    {
        $schoolYear = SchoolYear::find($id);
        if ($schoolYear == null) {
            return $this->backWithError('ppdb.tahun_ajaran.index', 'Tahun Ajaran tidak ditemukan!');
        };
        return view('admin.Ppdb.new.tahun-ajaran.edit', compact('schoolYear'));
    }

    public function put(Request $request, $id)
    {
        $schoolYear = SchoolYear::find($id);
        if ($schoolYear == null) {
            return $this->backWithError('ppdb.tahun_ajaran.index', 'Tahun Ajaran tidak ditemukan!');
        };

        $request->validate([
            'school_year' => 'required|max:20',
        ], [
            'school_year.required' => 'Harap isi Tahun Ajaran',
            'school_year.max' => 'Tahun Ajaran terlalu panjang!',
        ]);

        try {
            if ($request->school_year == $schoolYear->school_year) {
                return $this->backWithError('ppdb.tahun_ajaran.index', 'Tidak ada perubahan!');
            }
            SchoolYear::where('id', $id)->update([
                'school_year' => $request->school_year,
                'updated_at' => now(),
            ]);
            return $this->backWithSuccess('ppdb.tahun_ajaran.index', 'Tahun Ajaran berhasil diubah!');
        } catch (\Throwable $th) {
            return $this->backwithError('ppdb.tahun_ajaran.index', 'Sepertinya Ada Kesalahan! | Code : 500');
        }
    }
    public function destroy($id)
    {
        $schoolYear = SchoolYear::find($id);
        if ($schoolYear == null) {
            return $this->backWithError('ppdb.tahun_ajaran.index', 'Tahun Ajaran tidak ditemukan!');
        };
        try {
            SchoolYear::destroy($id);
            return $this->backWithSuccess('ppdb.tahun_ajaran.index', 'Tahun Ajaran Berhasil dihapus!');
        } catch (\Throwable $th) {
            return $this->backWithError('ppdb.tahun_ajaran.index', 'Sepertinya ada kesalahan! | Code : 500');
        }
    }
}
