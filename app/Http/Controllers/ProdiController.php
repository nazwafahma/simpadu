<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = ['nama' => "Awaa", 'foto' => 'avatar2.png'];
        $prodi = Prodi::all();
        return view('prodi.index', compact('data', 'prodi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $data = ['nama' => "Awaa", 'foto' => 'avatar2.png'];
        return view('prodi.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate(
            [
                'nama' => 'required|max:50',
                'kaprodi' => 'required',
                'jurusan' => 'required|max:100',
            ],
            [
                'nama.required' => 'Nama harus diisi',
                'kaprodi.required' => 'Kaprodi harus diisi',
                'jurusan.required' => 'Jurusan harus diisi',
            ]
        );
        Prodi::create($validateData);
        return redirect('/prodi');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data = ['nama' => "Awaa", 'foto' => 'avatar2.png'];
        $prodi = Prodi::find($id);
        return view('prodi.edit', compact('data', 'prodi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validateData = $request->validate(
            [
                'nama' => 'required|max:50',
                'kaprodi' => 'required',
                'jurusan' => 'required|max:100',
            ],
            [
                'nama.required' => 'Nama harus diisi',
                'kaprodi.required' => 'Kaprodi harus diisi',
                'jurusan.required' => 'Jurusan harus diisi',
            ]
        );
        Prodi::where('id', $id)->update($validateData);
        return redirect('/prodi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Prodi::destroy($id);
        return redirect('/prodi');
    }
}
