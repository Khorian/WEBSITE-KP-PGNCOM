<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProfilPerusahaan;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    // Halaman User Public /profil
    public function publicIndex()
    {
        $profil = ProfilPerusahaan::first() ?? $this->getInitialData();
        return view('profil', compact('profil'));
    }

    // Halaman Admin /admin/profil
    public function adminIndex()
    {
        $profil = ProfilPerusahaan::first() ?? $this->getInitialData();
        return view('admin.profil', compact('profil'));
    }

    // Simpan Perubahan dari Admin
    public function update(Request $request)
    {
        $profil = ProfilPerusahaan::first() ?? new ProfilPerusahaan();

        $data = [
            'judul_sejarah' => $request->judul_sejarah,
            'sejarah_p1' => $request->sejarah_p1,
            'sejarah_p2' => $request->sejarah_p2,
            'visi' => $request->visi,
            'misi' => array_filter($request->misi ?? []),
            'manager_nama' => $request->manager_nama,
            'tim_tanggap' => $request->tim_tanggap ?? [],
            'nilai_perusahaan' => $request->nilai_perusahaan ?? [],
        ];

        if ($request->hasFile('gambar_sejarah')) {
            $file = $request->file('gambar_sejarah');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/profil'), $fileName);
            $data['gambar_sejarah'] = 'uploads/profil/' . $fileName;
        }

        $profil->fill($data)->save();

        return redirect()->back()->with('success', 'Profil perusahaan berhasil diperbarui!');
    }

    // Data Awal (Fallback jika DB masih kosong)
    private function getInitialData()
    {
        return new ProfilPerusahaan([
            'judul_sejarah' => 'Perjalanan PGNCOM di Lampung',
            'sejarah_p1' => 'Sebagai anak perusahaan PT PGAS Telekomunikasi Nusantara (PGNCOM) bernaung di bawah korporasi utamanya, PT Perusahaan Gas Negara, Tbk (PGN), yang mengawali langkah melalui koridor optik fiber optik strategis di sepanjang jalur pipa gas bumi di seluruh wilayah Sumatra pada tahun 2007.',
            'sejarah_p2' => 'Seiring berkembangnya jaringan ekosistem, PGNCOM terus merintis untuk mengintegrasikan koridor strategis dari Jakarta, wilayah Sumatra, hingga merintis titik point of presence (landing point) leased line yang terkoneksi ke Singapura. Dalam memantapkan eksistensi operasional sekaligus mengakselerasi infrastruktur konektivitas digital, didirikanlah Regional Office (RO) Lampung yang berpusat di Bandar Lampung.',
            'visi' => 'Menjadi perusahaan solusi ICT terdepan dan terpercaya yang mendorong pertumbuhan ekonomi digital di Provinsi Lampung pada tahun 2030.',
            'misi' => [
                'Menyediakan infrastruktur telekomunikasi berkualitas tinggi yang menjangkau seluruh wilayah Lampung.',
                'Mengembangkan solusi ICT korporasi guna mendukung transformasi digital korporasi pelanggan.',
                'Membangun SDM yang kompeten, profesional, dan berorientasi pada kepuasan pelanggan.',
                'Memperkuat komitmen strategis yang saling menguntungkan dengan seluruh pemangku kepentingan.',
                'Mendukung tata kelola perusahaan yang baik dan mewujudkan program GCG yang berkelanjutan.'
            ],
            'manager_nama' => 'Ade Irawan',
            'tim_tanggap' => [
                'pemadam' => ['Sapparudin', 'Nurwanto', 'A. Taufik Prabowo'],
                'evakuasi' => ['Erlita D', 'Agus Ardiyan', 'Ariyanto Wibowo'],
                'document' => ['Silmiliyan', 'Dedy Narendra', 'Cahyoni Maimanah'],
                'huru_hara' => ['Gandi Rismawan', 'Ahmad Buchori', 'Kartika Chandra W.'],
                'p3k' => ['Rizal', 'Yopi Marzuki', 'Rendy Oktavianus'],
            ],
            'nilai_perusahaan' => [
                ['judul' => 'Inovasi', 'deskripsi' => 'Selalu menghadirkan solusi digital terdepan dan kreatif.'],
                ['judul' => 'Integritas', 'deskripsi' => 'Menjunjung tinggi kejujuran dan transparansi dalam setiap aspek pekerjaan.'],
                ['judul' => 'Keandalan', 'deskripsi' => 'Memastikan kestabilan layanan internet yang fasilitas dan dapat diandalkan.'],
                ['judul' => 'Kolaborasi', 'deskripsi' => 'Bekerja sama secara sinergi demi seluruh kemajuan bersama.'],
                ['judul' => 'Profesionalisme', 'deskripsi' => 'Memberikan layanan terbaik dengan standar kualitas yang tinggi.'],
                ['judul' => 'Keberlanjutan', 'deskripsi' => 'Berkomitmen peduli dalam bisnis bagi seluruh kepedulian dan lingkungan.'],
            ]
        ]);
    }
}