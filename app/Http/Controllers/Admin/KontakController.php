<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kontak;
use App\Models\InfoKontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    // Halaman User Public /kontak
    public function publicIndex()
    {
        $info = InfoKontak::first() ?? $this->getInitialInfo();
        return view('kontak', compact('info'));
    }

    // Halaman Admin /admin/kontak (Tabel Pesan + Form Edit Info Kontak)
    public function index(Request $request)
    {
        $query = Kontak::query();

        if ($request->filled('search')) {
            $query->where('nama', 'like', '%' . $request->search . '%')
                  ->orWhere('email', 'like', '%' . $request->search . '%')
                  ->orWhere('subjek', 'like', '%' . $request->search . '%');
        }

        if ($request->filled('status') && $request->status !== 'semua') {
            $query->where('status', $request->status);
        }

        $pesan = $query->latest()->get();
        $info = InfoKontak::first() ?? $this->getInitialInfo();

        return view('admin.kontak', compact('pesan', 'info'));
    }

    // Kirim Pesan dari User Public
    public function storePublic(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subjek' => 'required|string|max:255',
            'pesan' => 'required|string',
        ]);

        Kontak::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'subjek' => $request->subjek,
            'pesan' => $request->pesan,
            'status' => 'Belum Dibaca',
        ]);

        return redirect()->back()->with('success', 'Pesan Anda berhasil terkirim! Tim kami akan segera menghubungi Anda.');
    }

    // Simpan Perubahan Informasi Kontak dari Admin
    public function updateInfo(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'telepon' => 'required|string',
            'jam_senin_kamis' => 'required|string',
            'jam_jumat' => 'required|string',
            'alamat' => 'required|string',
        ]);

        $info = InfoKontak::first() ?? new InfoKontak();
        $info->fill($request->only(['email', 'telepon', 'jam_senin_kamis', 'jam_jumat', 'alamat']))->save();

        return redirect()->back()->with('success_info', 'Informasi kontak berhasil diperbarui!');
    }

    // Tandai Pesan Dibaca / Hapus Pesan
    public function markAsRead($id)
    {
        $pesan = Kontak::findOrFail($id);
        $pesan->update(['status' => 'Sudah Dibaca']);
        return redirect()->back()->with('success', 'Pesan ditandai sebagai Sudah Dibaca.');
    }

    public function destroy($id)
    {
        $pesan = Kontak::findOrFail($id);
        $pesan->delete();
        return redirect()->back()->with('success', 'Pesan berhasil dihapus.');
    }

    private function getInitialInfo()
    {
        return new InfoKontak([
            'email' => 'sales@pgncom.co.id',
            'telepon' => '(021) 39733645',
            'jam_senin_kamis' => '07.30 – 16.00 WIB',
            'jam_jumat' => '07.30 – 16.30 WIB',
            'alamat' => 'Jln. Sam Ratulangi No. 15 Penengahan Raya, Kedaton Bandar Lampung, 35112.',
        ]);
    }
}