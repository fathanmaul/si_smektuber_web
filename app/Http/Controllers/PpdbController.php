<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use App\Models\SchoolYear;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PpdbController extends Controller
{
    public function index(Request $request)
    {
        // return view('admin.Ppdb.new.daftar-ppdb.index');
        $search = $request->query('cari');

        $registrations = Registration::with('schoolYear')
        ->when($search, function ($query, $search) {
            $query->whereHas('schoolYear', function ($query) use ($search) {
                $query->where('school_year', 'like', "%$search%");
            });
        })
        ->orderBy('created_at', 'desc')
        ->paginate(10);
        return view('admin.Ppdb.new.daftar-ppdb.index', compact('registrations'));
    }
    public function create(){
        $schoolYears = SchoolYear::all();
        return view('admin.Ppdb.new.daftar-ppdb.create', compact('schoolYears'));
    }
    public function store(Request $request){
        // return $this->backWithSuccess('')
        $request->validate([
            'school_year' => 'required|exists:school_year,id',
            'description' => 'required|string',
            'poster' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'date_start' => 'required|date',
            'date_end' => 'required|date|after_or_equal:date_start',
        ]);

        $registration = new Registration();
        $registration->school_year = $request->school_year;
        $registration->description = $request->description;
        $registration->date_start = $request->date_start;
        $registration->date_end = $request->date_end;

        if ($request->hasFile('poster')) {
            $posterPath = $request->file('poster')->store('posters', 'public');
            $registration->poster = $posterPath;
        }   

        // $registration->save();

        // return redirect()->route('ppdb.daftar.index')->with('success', 'Informasi PPDB berhasil ditambahkan.');
        if ($registration->save()) {
            return $this->backWithSuccess_1('Informasi PPDB berhasil diperbarui.');
        } else {
            return $this->backWithError_1('Gagal memperbarui informasi PPDB.');
        }
        
    }
    public function edit($id)
    {
        $registration = Registration::findOrFail($id);
        $schoolYears = SchoolYear::all();

        return view('admin.Ppdb.new.daftar-ppdb.edit', compact('registration', 'schoolYears'));
    }
    public function put(Request $request, $id)
    {
        $request->validate([
            'school_year' => 'required|exists:school_year,id',
            'description' => 'required|string',
            'poster' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'date_start' => 'required|date',
            'date_end' => 'required|date|after_or_equal:date_start',
        ]);

        $registration = Registration::findOrFail($id);
        $registration->school_year = $request->school_year;
        $registration->description = $request->description;
        $registration->date_start = $request->date_start;
        $registration->date_end = $request->date_end;

        if ($request->hasFile('poster')) {
            // Delete old poster
            if ($registration->poster) {
                Storage::disk('public')->delete($registration->poster);
            }

            $posterPath = $request->file('poster')->store('posters', 'public');
            $registration->poster = $posterPath;
        }

        // $registration->save();

        // return redirect()->route('ppdb.daftar.index')->with('success', 'Informasi PPDB berhasil diperbarui.');
        if ($registration->save()) {
            return $this->backWithSuccess_1('Informasi PPDB berhasil diperbarui.');
        } else {
            return $this->backWithError_1('Gagal memperbarui informasi PPDB.');
        }
    }
    public function destroy($id){
        $registration = Registration::findOrFail($id);
        $registration->delete();

        return redirect()->route('ppdb.daftar.index')->with('success', 'Informasi PPDB berhasil dihapus.');
    }

    private function backWithSuccess_1($message)
    {
        return redirect()->route('ppdb.daftar.index')->with('flash', [
            'type' => 'success',
            'message' => $message
        ]);
    }
    private function backWithError_1($message){
        return redirect()->route('ppdb.daftar.index')->with('flash', [
                    'type' => 'danger',
                    'message' => $message
                ]);
    }
}
