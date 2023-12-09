<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\Pelanggan;
use App\Models\Kategori;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function pesanan()
    {
        return view('pesanan.pesanan', [
            'pesanan' => pesanan::latest()->get()
        ]);
    }

    public function add()
    {
        // Mendapatkan data pelanggan dan kategori
        $pelanggan = Pelanggan::all();
        $kategori = Kategori::all();
        return view('pesanan.tambahpes', compact('pelanggan', 'kategori'));
    }

    public function tambahpes(Request $request)
    {
        $request->validate([
            'pelanggan_id' => 'required|exists:pelanggans,id',
            'kategori_paket_id' => 'required|exists:kategoris,id',
            'nama' => 'required',
            'jenis_cucian' => 'required',
            'tanggal_pesan' => 'required|date',
            'jumlah' => 'required|integer|min:1',
            'total_harga' => 'required|numeric|min:0',
        ]);

        pesanan::create([
            'pelanggan_id' => $request->input('pelanggan_id'),
            'kategori_paket_id' => $request->input('kategori_paket_id'),
            'nama' => $request->input('nama'),
            'jenis_cucian' => $request->input('jenis_cucian'),
            'tanggal_pesan' => $request->input('tanggal_pesan'),
            'jumlah' => $request->input('jumlah'),
            'total_harga' => $request->input('total_harga'),
        ]);

        return redirect()->route('pesanan')->with('messagepes', 'Data Berhasil Ditambahkan');
    }
    
    public function edit($id)
    {
        $pesanan = Pesanan::find($id);
        $pelanggan = Pelanggan::all();
        $kategori = Kategori::all();

        return view('pesanan.editpes', compact('pesanan', 'pelanggan', 'kategori'));
    }

    public function editpes(Request $request, $id)
    {
        $request->validate([
            'pelanggan_id' => 'required|exists:pelanggans,id',
            'kategori_paket_id' => 'required|exists:kategoris,id',
            'nama' => 'required|string|max:255',
            'jenis_cucian' => 'required|string|max:255',
            'tanggal_pesan' => 'required|date',
            'jumlah' => 'required|integer|min:1',
            'total_harga' => 'required|numeric|min:0',
        ]);

        $pesanan = Pesanan::find($id);

        if (!$pesanan) {
            return redirect()->route('pesanan')->with('messagepes', 'Pesanan tidak ditemukan.');
        }

        $pesanan->update($request->all());

        return redirect()->route('pesanan')->with('messagepes', 'Pesanan berhasil diupdate.');
    }

    public function detailpes($id)
    {
        // Mengambil data untuk ID tertentu dan meneruskannya ke tampilan
        $pesanan = Pesanan::find($id);

        // Jika pelanggan tidak ditemukan
        if (!$pesanan) {
            return redirect()->route('pesanan')->with('messagepes', 'Pesanan tidak ditemukan.');
        }

        // Menampilkan tampilan detail dengan data pelanggan
        return view('pesanan.detailpes', compact('pesanan'));
    }

    public function destroy($id)
    {
        $pesanan = Pesanan::find($id);

        if (!$pesanan) {
            return redirect()->route('pesanan')->with('messagepes', 'Pesanan tidak ditemukan.');
        }

        $pesanan->delete();

        return redirect()->route('pesanan')->with('messagepes', 'Data Berhasil Dihapus');
    }
}
