<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemenuhanController extends Controller
{
    public function manajemenPerubahan()
    {
        return view('pages.pemenuhan.manajemen-perubahan');
    }

    public function penataanTatalaksana()
    {
        return view('pages.pemenuhan.penataan-tatalaksana');
    }

    public function penataanSdm()
    {
        return view('pages.pemenuhan.penataan-sdm');
    }

    public function penguatanAkuntabilitas()
    {
        return view('pages.pemenuhan.penguatan-akuntabilitas');
    }

    public function penguatanPengawasan()
    {
        return view('pages.pemenuhan.penguatan-pengawasan');
    }

    public function peningkatanPelayanan()
    {
        return view('pages.pemenuhan.peningkatan-pelayanan');
    }
}
