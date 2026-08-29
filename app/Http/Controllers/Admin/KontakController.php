<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    // Tampilkan Halaman Admin Pesan Masuk
    public function index(Request $request)
    {
        $query = Kontak::query();

        if ($request->filled('search')) {
            $query->where(function($q) use ($request) {
                $q->where('nama', 'like', '%' . $request->search . '%')
                  ->orWhere('email', 'like', '%' . $request->search . '%')
                  ->orWhere('subjek', 'like', '%' . $request->search . '%');
            });
        }

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        $pesanList = $query->latest()->get();

        return view('admin.kontak', compact('pesanList'));
    }

    // Simpan Pesan dari Form Halaman User (/kontak)
    public function storePublic(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'subjek' => 'required',
            'pesan' => 'required',
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

    // Tandai Pesan Sudah Dibaca
    public function markAsRead($id)
    {
        $pesan = Kontak::findOrFail($id);
        $pesan->update(['status' => 'Sudah Dibaca']);

        return redirect()->back()->with('success', 'Status pesan diperbarui menjadi Sudah Dibaca.');
    }

    // Hapus Pesan Tunggal
    public function destroy($id)
    {
        $pesan = Kontak::findOrFail($id);
        $pesan->delete();

        return redirect()->back()->with('success', 'Pesan berhasil dihapus!');
    }

    // Aksi Masal (Batch Action)
    public function batchAction(Request $request)
    {
        $ids = array_filter(explode(',', $request->ids));
        $action = $request->action;

        if (empty($ids) || !$action) {
            return redirect()->back();
        }

        if ($action === 'read') {
            Kontak::whereIn('id', $ids)->update(['status' => 'Sudah Dibaca']);
            $msg = 'Pesan terpilih ditandai sebagai Sudah Dibaca!';
        } elseif ($action === 'unread') {
            Kontak::whereIn('id', $ids)->update(['status' => 'Belum Dibaca']);
            $msg = 'Pesan terpilih ditandai sebagai Belum Dibaca!';
        } elseif ($action === 'delete') {
            Kontak::whereIn('id', $ids)->delete();
            $msg = 'Pesan terpilih berhasil dihapus!';
        }

        return redirect()->back()->with('success', $msg ?? 'Aksi berhasil!');
    }
}