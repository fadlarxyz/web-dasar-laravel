<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $descriptions = array(
            [
                "des" => "Sekolah Tinggi Manajemen Informatika dan Komputer (STMIK) IKMI Cirebon berdiri berdasarkan SK Mendiknas
                RI Nomor 120/D/O/2001 yang telah diperbaharui dengan SK Menristekdikti RI Nomor 1/KPT/I/2015. Saat ini
                memiliki 5 (lima) Program Studi yang terdiri dari 3 (tiga) Program Studi Sarjana dan 2 (dua) Program
                Studi Diploma."
            ],
            [
                "des" => "Program Studi Sarjana adalah Prodi Teknik Informatika (S1), Prodi Rekayasa Perangkat Lunak (S1), Prodi
                Sistem Informasi (S1) dan Program Studi Diploma adalah Prodi Manajemen Informatika (D3) dan Prodi
                Komputerisasi Akuntansi (D3)."
            ],
            [
                "des" => "STMIK IKMI Cirebon berkedudukan di Jl. Perjuangan No. 10 B Majasem Kota Cirebon, berdiri diatas lahan
                seluas 5.700 m2 , dengan memiliki 1 (satu) gedung perkuliahan 3 lantai yang terdiri 14 ruang kelas, 5
                ruang lab komputer , 1 ruang server, 1 ruang front office, 1 ruang rapat dan Ruang BEM. Selain gedung
                perkuliahan memiliki 1 gedung untuk sekretariat yang terdiri dari Ruang Pimpinan, Ruang Senat, Ruang
                Dosen, Ruang Pengelola Prodi, Ruang Penjaminan Mutu, Ruang Seminar, 4 Ruang Studio, Ruang Perpustakaan"
            ]
        );
        $yt = 'KFpbWrPyBoQ';
        $source = 'ikmi.ac.id';
        $author = "Fadlan Abdul Rojak";
        return view('profile', compact('descriptions', 'yt', 'source', 'author'));
    }
}
