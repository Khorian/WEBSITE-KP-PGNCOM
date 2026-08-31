<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Layanan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LayananController extends Controller
{
    public function index(Request $request)
    {
        $query = Layanan::query();

        if ($request->filled('search')) {
            $query->where('nama_layanan', 'like', '%' . $request->search . '%');
        }

        if ($request->filled('kategori')) {
            $query->where('kategori', $request->kategori);
        }

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        $layananList = $query->latest()->get();

        return view('admin.layanan', compact('layananList'));
    }

    public function create()
    {
        return view('admin.tambah-layanan');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_layanan' => 'required',
            'kategori' => 'required',
            'deskripsi_singkat' => 'required',
            'ikon' => 'nullable|image|mimes:jpeg,png,jpg,svg,webp|max:2048',
        ]);

        $slug = Str::slug($request->nama_layanan);
        $originalSlug = $slug;
        $count = 1;
        while (Layanan::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $count;
            $count++;
        }

        $iconPath = null;
        if ($request->hasFile('ikon')) {
            $file = $request->file('ikon');
            $iconName = time() . '_' . $slug . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('uploads/layanan');
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0777, true);
            }
            $file->move($destinationPath, $iconName);
            $iconPath = 'uploads/layanan/' . $iconName;
        }

        Layanan::create([
            'nama_layanan' => $request->nama_layanan,
            'slug' => $slug,
            'kategori' => $request->kategori,
            'deskripsi_singkat' => $request->deskripsi_singkat,
            'deskripsi_lengkap' => $request->deskripsi_lengkap,
            'status' => $request->status ?? 'Aktif',
            'ikon' => $iconPath,
        ]);

        return redirect()->route('admin.layanan')->with('success', 'Layanan berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $layanan = Layanan::findOrFail($id);
        return view('admin.layanan_edit', compact('layanan'));
    }

    public function update(Request $request, $id)
    {
        $layanan = Layanan::findOrFail($id);

        $request->validate([
            'nama_layanan' => 'required|string|max:255',
            'kategori' => 'required|string',
            'deskripsi_singkat' => 'required|string',
            'status' => 'required|in:Aktif,Nonaktif',
            'ikon' => 'nullable|image|mimes:jpeg,png,jpg,svg,webp|max:2048',
        ]);

        $slug = Str::slug($request->nama_layanan);
        $originalSlug = $slug;
        $count = 1;
        while (Layanan::where('slug', $slug)->where('id', '!=', $id)->exists()) {
            $slug = $originalSlug . '-' . $count;
            $count++;
        }

        $data = [
            'nama_layanan' => $request->nama_layanan,
            'slug' => $slug,
            'kategori' => $request->kategori,
            'deskripsi_singkat' => $request->deskripsi_singkat,
            'deskripsi_lengkap' => $request->deskripsi_lengkap ?? $layanan->deskripsi_lengkap,
            'status' => $request->status,
        ];

        // Jika ada ikon baru yang diunggah
        if ($request->hasFile('ikon')) {
            // Hapus ikon lama jika ada
            if ($layanan->ikon && file_exists(public_path($layanan->ikon))) {
                unlink(public_path($layanan->ikon));
            }

            $file = $request->file('ikon');
            $iconName = time() . '_' . $slug . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('uploads/layanan');
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0777, true);
            }
            $file->move($destinationPath, $iconName);
            $data['ikon'] = 'uploads/layanan/' . $iconName;
        }

        $layanan->update($data);

        return redirect()->route('admin.layanan')->with('success', 'Layanan berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $layanan = Layanan::findOrFail($id);
        if ($layanan->ikon && file_exists(public_path($layanan->ikon))) {
            unlink(public_path($layanan->ikon));
        }
        $layanan->delete();

        return redirect()->back()->with('success', 'Layanan berhasil dihapus!');
    }

    public function batchAction(Request $request)
    {
        $ids = array_filter(explode(',', $request->ids));
        $action = $request->action;

        if (empty($ids) || !$action) {
            return redirect()->back();
        }

        if ($action === 'aktif') {
            Layanan::whereIn('id', $ids)->update(['status' => 'Aktif']);
            $msg = 'Layanan terpilih berhasil diaktifkan!';
        } elseif ($action === 'nonaktif') {
            Layanan::whereIn('id', $ids)->update(['status' => 'Nonaktif']);
            $msg = 'Layanan terpilih berhasil dinonaktifkan!';
        } elseif ($action === 'delete') {
            $items = Layanan::whereIn('id', $ids)->get();
            foreach ($items as $item) {
                if ($item->ikon && file_exists(public_path($item->ikon))) {
                    unlink(public_path($item->ikon));
                }
                $item->delete();
            }
            $msg = 'Layanan terpilih berhasil dihapus!';
        }

        return redirect()->back()->with('success', $msg);
    }
}