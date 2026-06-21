<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // 1. Siapkan data default pembungkus awal agar tidak undefined variable
        $data = [
            'status'    => null,
            'email'     => '',
            'details'   => [],
            'statistik' => [
                'sumber_aktif'      => '48',
                'tingkat_kebocoran' => 'Kritis',
                'total_akun'        => '352K+'
            ]
        ];

        // 2. TARUH DI SINI (Di baris paling akhir sebelum tutup kurung kurawal)
        return view('pwned_search', $data);
    }

    // Fungsi upgrade ditaruh di bawahnya (mengarah ke file v_upgrade)
    public function upgrade()
    {
        return view('v_upgrade');
    }
}