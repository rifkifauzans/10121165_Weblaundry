<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\View\View;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function kategori() : View
    {
        return view('kategori.kategori', [
            'kategori' => kategori::latest()->get()
        ]);
    }

    public function add()
    {
        return view('kategori.tambahkat');
    }

    public function tambahkat(Request $request)
    {
        $request->validate([
            'jenis_cucian' => 'required',
            'waktu_kerja' => 'required',
            'harga' => 'required'
        ]);

        kategori::create([
            'jenis_cucian' => $request->jenis_cucian,
            'waktu_kerja' => $request->waktu_kerja,
            'harga' => $request->harga,
        ]);

        return redirect()->route('kategori')->with('messagekat', 'Data Berhasil Ditambahkan');
    }

    public function detailkat($id)
    {
        // Mencari kategori berdasarkan ID
        $kategori = Kategori::find($id);

        // Jika kategori tidak ditemukan
        if (!$kategori) {
            return redirect()->route('kategori')->with('messagekat', 'Kategori tidak ditemukan.');
        }

        // Menampilkan tampilan detail dengan data kategori
        return view('kategori.detailkat', compact('kategori'));
    }

    public function edit($id)
    {
        $kategori = Kategori::find($id);

        if (!$kategori) {
            return redirect()->route('kategori')->with('messagekat', 'Pelanggan tidak ditemukan.');
        }

        return view('kategori.editkat', compact('kategori'));
    }

    public function editkat(Request $request, $id)
    {
        $request->validate([
            'jenis_cucian' => 'required',
            'waktu_kerja' => 'required',
            'harga' => 'required',
        ]);

        $kategori = Kategori::find($id);

        if (!$kategori) {
            return redirect()->route('kategori')->with('messagekat', 'Pelanggan tidak ditemukan.');
        }

        $kategori->update([
            'jenis_cucian' => $request->jenis_cucian,
            'waktu_kerja' => $request->waktu_kerja,
            'harga' => $request->harga,
        ]);

        return redirect()->route('kategori')->with('messagekat', 'Data Berhasil Diperbarui');
    }

    public function destroy($id)
    {
        $kategori = Kategori::find($id);

        if (!$kategori) {
            return redirect()->route('kategori')->with('messagekat', 'Pelanggan tidak ditemukan.');
        }

        $kategori->delete();

        return redirect()->route('kategori')->with('messagekat', 'Data Berhasil Dihapus');
    }
}
