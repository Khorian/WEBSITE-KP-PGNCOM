<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    // Tampilkan Halaman Tabel Berita (dengan Filter & Search)
    public function index(Request $request)
    {
        $query = Berita::query();

        // Pencarian Judul / Penulis
        if ($request->filled('search')) {
            $query->where(function($q) use ($request) {
                $q->where('judul', 'like', '%' . $request->search . '%')
                  ->orWhere('penulis', 'like', '%' . $request->search . '%');
            });
        }

        // Filter Kategori
        if ($request->filled('kategori')) {
            $query->where('kategori', $request->kategori);
        }

        // Filter Status
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        // Filter Tanggal
        if ($request->filled('tanggal')) {
            $query->whereDate('created_at', $request->tanggal);
        }

        $beritaList = $query->latest()->get();

        return view('admin.berita', compact('beritaList'));
    }

    // Tampilkan Form Tambah Berita
    public function create()
    {
        return view('admin.tambah-berita');
    }

    // Simpan Berita Baru
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'kategori' => 'required',
            'konten' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $imageName = time() . '_' . Str::slug($request->judul) . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('uploads/berita');
            
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0777, true);
            }
            
            $file->move($destinationPath, $imageName);
            $imagePath = 'uploads/berita/' . $imageName;
        }

        Berita::create([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'kategori' => $request->kategori,
            'penulis' => $request->penulis ?? 'Admin PGAS',
            'konten' => $request->konten,
            'status' => $request->status ?? 'Publikasi',
            'gambar' => $imagePath,
        ]);

        return redirect()->route('admin.berita')->with('success', 'Berita berhasil ditambahkan!');
    }

    // Hapus Berita Tunggal
    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);
        if ($berita->gambar && file_exists(public_path($berita->gambar))) {
            unlink(public_path($berita->gambar));
        }
        $berita->delete();

        return redirect()->back()->with('success', 'Berita berhasil dihapus!');
    }

    // Fungsi Aksi Masal (Batch Action)
    public function batchAction(Request $request)
    {
        $ids = array_filter(explode(',', $request->ids));
        $action = $request->action;

        if (empty($ids) || !$action) {
            return redirect()->back();
        }

        if ($action === 'publish') {
            Berita::whereIn('id', $ids)->update(['status' => 'Publikasi']);
            $msg = 'Artikel terpilih berhasil dipublikasikan!';
        } elseif ($action === 'unpublish') {
            Berita::whereIn('id', $ids)->update(['status' => 'Draf']);
            $msg = 'Artikel terpilih berhasil diubah menjadi Draf!';
        } elseif ($action === 'archive') {
            Berita::whereIn('id', $ids)->update(['status' => 'Arsip']);
            $msg = 'Artikel terpilih berhasil diarsipkan!';
        } elseif ($action === 'delete') {
            $items = Berita::whereIn('id', $ids)->get();
            foreach ($items as $item) {
                if ($item->gambar && file_exists(public_path($item->gambar))) {
                    unlink(public_path($item->gambar));
                }
                $item->delete();
            }
            $msg = 'Artikel terpilih berhasil dihapus!';
        } else {
            $msg = 'Aksi tidak dikenali!';
        }

        return redirect()->back()->with('success', $msg);
    }
}