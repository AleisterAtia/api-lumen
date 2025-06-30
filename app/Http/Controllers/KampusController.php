<?php

namespace App\Http\Controllers;

use App\Models\Kampus;
use App\odel;
use Illuminate\Http\Request;

class KampusController extends Controller
{
    public function index()
    {
        return response()->json(Kampus::all());
    }

    public function show($id)
    {
        $kampus = Kampus::find($id);
        if (!$kampus)
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        return response()->json($kampus);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|unique:kampus_tables',
            'alamat' => 'required',
            'notelp' => 'required',
            'kategori' => 'required',
            'lat' => 'required',
            'lng' => 'required',
            'jurusan' => 'required'
        ]);

        $kampus = Kampus::create($request->all());
        return response()->json($kampus, 201);
    }

    public function update(Request $request, $id)
    {
        $rumahsakit = Kampus::find($id);
        if (!$rumahsakit)
            return response()->json(['message' => 'Data tidak ditemukan'], 404);

        $rumahsakit->update($request->all());
        return response()->json($rumahsakit);
    }

    public function destroy($id)
    {
        $kampus = Kampus::find($id);
        if (!$kampus)
            return response()->json(['message' => 'Data tidak ditemukan'], 404);

        $kampus->delete();
        return response()->json(['message' => 'Data berhasil dihapus']);
    }
}
