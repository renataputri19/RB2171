<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReformController extends Controller
{
    public function manajemenPerubahan()
    {
        return view('pages.reform.manajemen-perubahan');
    }

    public function penataanTatalaksana()
    {
        return view('pages.reform.penataan-tatalaksana');
    }

    public function penataanSdm()
    {
        return view('pages.reform.penataan-sdm');
    }

    public function penguatanAkuntabilitas()
    {
        return view('pages.reform.penguatan-akuntabilitas');
    }

    public function penguatanPengawasan()
    {
        return view('pages.reform.penguatan-pengawasan');
    }

    public function peningkatanPelayanan()
    {
        return view('pages.reform.peningkatan-pelayanan');
    }
}
