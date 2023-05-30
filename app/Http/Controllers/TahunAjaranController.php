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
            // 'school_year' => [
            //     'required', 
            //     'max:20', 
            //     'regex:/^\d{4}\/\d{4}$/',
            //     'unique:school_year,school_year'
            // ]
            'year-picker-1' => 'required|max:4|regex:/^\d{4}$/',
            'year-picker-2' => 'required|max:4|regex:/^\d{4}$/',
        ], [
            'year-picker-1.required' => 'Harap isi Tahun ini',
            'year-picker-1.max' => 'Tahun ini terlalu panjang!',
            'year-picker-1.regex' => 'Format Tahun ini tidak sesuai!',
            'year-picker-2.required' => 'Harap isi Tahun ini',
            'year-picker-2.max' => 'Tahun ini terlalu panjang!',
            'year-picker-2.regex' => 'Format Tahun ini tidak sesuai!',
        ]);
        $year_1 = $request->input('year-picker-1');
        $year_2 = $request->input('year-picker-2');
        $year_2_accepted = $year_1 + 1;
        if ($year_2 != $year_2_accepted) {
            return redirect()->route('ppdb.tahun_ajaran.create')->with('flash', [
                'type' => 'danger',
                'message' => 'Tahun Ajaran tidak sesuai! Mungkin maksud anda adalah ' . $year_1 . '/' . $year_2_accepted . ' ?'
            ])->onlyInput('year-picker-1', 'year-picker-2');
        }
        if (SchoolYear::where('school_year', $year_1 . '/' . $year_2)->first()) {
            return redirect()->route('ppdb.tahun_ajaran.create')->with('flash', [
                'type' => 'danger',
                'message' => 'Tahun Ajaran ' . $year_1 . '/' . $year_2 . ' sudah terdaftar!'
            ])->onlyInput('year-picker-1', 'year-picker-2');
        }
        try {
            SchoolYear::insert([
                'school_year' => $year_1 . '/' . $year_2,
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
        $year = explode('/', $schoolYear->school_year);
        $year_id = $schoolYear->id;
        // return $year;
        return view('admin.Ppdb.new.tahun-ajaran.edit', compact('year', 'year_id'));
    }

    public function put(Request $request, $id)
    {
        $schoolYear = SchoolYear::find($id);
        if ($schoolYear == null) {
            return $this->backWithError('ppdb.tahun_ajaran.index', 'Tahun Ajaran tidak ditemukan!');
        };

        // $request->validate([
        //     'school_year' => 'required|max:20|regex:/^\d{4}\/\d{4}$/|unique:school_year,school_year,' . $id,
        // ], [
        //     'school_year.required' => 'Harap isi Tahun Ajaran',
        //     'school_year.max' => 'Tahun Ajaran terlalu panjang!',
        //     'school_year.regex' => 'Format Tahun Ajaran tidak sesuai!'
        // ]);
        $request->validate([
            // 'school_year' => [
            //     'required', 
            //     'max:20', 
            //     'regex:/^\d{4}\/\d{4}$/',
            //     'unique:school_year,school_year'
            // ]
            'year-picker-1' => 'required|max:4|regex:/^\d{4}$/',
            'year-picker-2' => 'required|max:4|regex:/^\d{4}$/',
        ], [
            'year-picker-1.required' => 'Harap isi Tahun ini',
            'year-picker-1.max' => 'Tahun ini terlalu panjang!',
            'year-picker-1.regex' => 'Format Tahun ini tidak sesuai!',
            'year-picker-2.required' => 'Harap isi Tahun ini',
            'year-picker-2.max' => 'Tahun ini terlalu panjang!',
            'year-picker-2.regex' => 'Format Tahun ini tidak sesuai!',
        ]);
        $year_1 = $request->input('year-picker-1');
        $year_2 = $request->input('year-picker-2');
        $year_2_accepted = $year_1 + 1;
        if ($year_2 != $year_2_accepted) {
            return redirect()->route('ppdb.tahun_ajaran.edit', $schoolYear->id)->with('flash', [
                'type' => 'danger',
                'message' => 'Tahun Ajaran tidak sesuai! Mungkin maksud anda adalah ' . $year_1 . '/' . $year_2_accepted . ' ?'
            ])->onlyInput('year-picker-1', 'year-picker-2');
        }
        // if (SchoolYear::where('school_year', $year_1 . '/' . $year_2)->first()) {
        //     return redirect()->route('ppdb.tahun_ajaran.edit', $schoolYear->id)->with('flash', [
        //         'type' => 'danger',
        //         'message' => 'Tahun Ajaran ' . $year_1 . '/' . $year_2 . ' sudah terdaftar ada!'
        //     ])->onlyInput('year-picker-1', 'year-picker-2');
        // }
        if (SchoolYear::where('school_year', $year_1 . '/' . $year_2)->first()) {
            return $this->backWithSuccess('ppdb.tahun_ajaran.index', 'Tahun Ajaran tidak ada perubahan!');
        }
        try {
            SchoolYear::where('id', $id)->update([
                'school_year' => $year_1 . '/' . $year_2,
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
