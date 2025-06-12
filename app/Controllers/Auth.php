<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Auth extends Controller
{
    /**
     * Menampilkan halaman form login.
     */
    public function index()
    {
        // helper 'form' dibutuhkan untuk csrf_field()
        helper('form');
        
        // Cukup tampilkan view-nya
        return view('login_page');
    }

    /**
     * Memproses data yang dikirim dari form login.
     */
    public function login()
    {
        helper(['form', 'url']);

        // Data login yang benar (untuk simulasi)
        $correct_email = 'admin@ebdesk.com';
        $correct_password = 'password123';

        // Ambil data dari POST request
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // Validasi sederhana
        if ($email === $correct_email && $password === $correct_password) {
            // Jika login berhasil
            $data['success'] = 'Login Berhasil! Selamat datang.';
        } else {
            // Jika login gagal
            $data['error'] = 'Email atau Password yang Anda masukkan salah.';
        }
        
        // Kembali ke halaman login dengan membawa pesan error/sukses
        return view('login_page', $data);
    }
}
