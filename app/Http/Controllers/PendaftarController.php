<?php

namespace App\Http\Controllers;

use App\Models\DetailRegistration;
use Illuminate\Http\Request;

class PendaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $search = $request->input('cari') ;
        // $registrations = DetailRegistration::with('full_name')
        // ->when($search, function ($query, $search) {
        //     $query->whereHas('full_name', function ($query) use ($search) {
        //         $query->where('full_name', 'like', "%$search%");
        //     });
        // })
        $pendaftar = DetailRegistration::when($search, function ($query, $search) {
            $query->where('full_name', 'like', "%$search%")
                  ->orWhere('school_origin', 'like', "%$search%");
        })
        ->orderBy('created_at', 'desc')
        ->paginate(10);
        return view('admin.Ppdb.new.pendaftar.index', compact('pendaftar'));
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
        $registration = DetailRegistration::findOrFail($id);
        // Jika menggunakan Eloquent, gunakan "findOrFail" untuk menemukan pendaftaran berdasarkan ID atau lemparkan pengecualian jika tidak ditemukan
    
        return view('admin.Ppdb.new.pendaftar.edit', compact('registration'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateStatus(Request $request, $id)
    {
        //
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
