<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function pelanggan()
    {
        return view('pelanggan.pelanggan', [
            'pelanggan' => pelanggan::latest()->get()
        ]);
    }

    public function add()
    {
        return view('pelanggan.tambahpel');
    }

    public function tambahpel(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'no_telp' => 'required',
            'alamat' => 'required'
        ]);

        pelanggan::create([
            'nama' => $request->nama,
            'no_telp' => $request->no_telp,
            'alamat' => $request->alamat,
        ]);

        return redirect()->route('pelanggan')->with('messagepel', 'Data Berhasil Ditambahkan');
    }

    public function detailpel($id)
    {
        // Mengambil data untuk ID tertentu dan meneruskannya ke tampilan
        $pelanggan = Pelanggan::find($id);

        // Jika pelanggan tidak ditemukan
        if (!$pelanggan) {
            return redirect()->route('pelanggan')->with('messagepel', 'Pelanggan tidak ditemukan.');
        }

        // Menampilkan tampilan detail dengan data pelanggan
        return view('pelanggan.detailpel', compact('pelanggan'));
    }

    public function edit($id)
    {
        $pelanggan = Pelanggan::find($id);

        if (!$pelanggan) {
            return redirect()->route('pelanggan')->with('messagepel', 'Pelanggan tidak ditemukan.');
        }

        return view('pelanggan.editpel', compact('pelanggan'));
    }

    public function editpel(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'no_telp' => 'required',
            'alamat' => 'required',
        ]);

        $pelanggan = Pelanggan::find($id);

        if (!$pelanggan) {
            return redirect()->route('pelanggan')->with('messagepel', 'Pelanggan tidak ditemukan.');
        }

        $pelanggan->update([
            'nama' => $request->nama,
            'no_telp' => $request->no_telp,
            'alamat' => $request->alamat,
        ]);

        return redirect()->route('pelanggan')->with('messagepel', 'Data Berhasil Diperbarui');
    }

    public function destroy($id)
    {
        $pelanggan = Pelanggan::find($id);

        if (!$pelanggan) {
            return redirect()->route('pelanggan')->with('messagepel', 'Pelanggan tidak ditemukan.');
        }

        $pelanggan->delete();

        return redirect()->route('pelanggan')->with('messagepel', 'Data Berhasil Dihapus');
    }
}
