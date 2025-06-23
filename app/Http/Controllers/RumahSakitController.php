<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RumahSakitModel;

class RumahSakitController extends Controller
{
    public function index()
    {
        return response()->json(RumahSakitModel::all());
    }

    public function show($id)
    {
        $dosen = RumahSakitModel::find($id);
        if (!$dosen)
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        return response()->json($dosen);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_rs' => 'required|unique:data_rumahsakit',
            'alamat' => 'required',
            'no_telp' => 'required',
            'tipe_rs' => 'required',
            'lat' => 'required',
            'lng' => 'required'
        ]);

        $dosen = RumahSakitModel::create($request->all());
        return response()->json($dosen, 201);
    }

    public function update(Request $request, $id)
    {
        $rumahsakit = RumahSakitModel::find($id);
        if (!$rumahsakit)
            return response()->json(['message' => 'Data tidak ditemukan'], 404);

        $rumahsakit->update($request->all());
        return response()->json($rumahsakit);
    }

    public function destroy($id)
    {
        $dosen = RumahSakitModel::find($id);
        if (!$dosen)
            return response()->json(['message' => 'Data tidak ditemukan'], 404);

        $dosen->delete();
        return response()->json(['message' => 'Data berhasil dihapus']);
    }
}
