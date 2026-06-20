<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PwnedController extends BaseController
{
    public function index()
    {
        return view('pwned_search', ['status' => null]);
    }

    public function check()
    {
        $email = $this->request->getPost('email');

        // Data Simulasi Kebocoran
        $dataBocor = [
            'pwned@gmail.com' => [
                ['sumber' => 'Canva.com', 'tanggal' => '12/02/2024', 'jenis' => 'Email, Password'],
                ['sumber' => 'Adobe.com', 'tanggal' => '28/07/2023', 'jenis' => 'Email'],
                ['sumber' => 'LinkedIn.com', 'tanggal' => '15/06/2023', 'jenis' => 'Email, Phone'],
            ]
        ];

        // Data Statistik
        $statistik = [
            'sumber_aktif' => 48,
            'tingkat_kebocoran' => '65%',
            'total_akun' => '352K',
            'top_sumber' => [
                ['nama' => 'Adobe.com', 'jumlah' => '152K', 'persen' => '100%'],
                ['nama' => 'Canva.com', 'jumlah' => '98K', 'persen' => '64%'],
                ['nama' => 'LinkedIn.com', 'jumlah' => '75K', 'persen' => '49%'],
                ['nama' => 'MySpace.com', 'jumlah' => '27K', 'persen' => '18%'],
                ['nama' => 'Others', 'jumlah' => '12K', 'persen' => '8%'],
            ]
        ];

        if (array_key_exists($email, $dataBocor)) {
            return view('pwned_search', [
                'status'    => 'pwned',
                'email'     => $email,
                'details'   => $dataBocor[$email],
                'statistik' => $statistik
            ]);
        } else {
            return view('pwned_search', [
                'status'    => 'safe',
                'email'     => $email,
                'statistik' => $statistik
            ]);
        }
    }
}