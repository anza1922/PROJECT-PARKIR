<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('landing');
    }

    public function login(): string
    {
        return view('login');
    }

    public function dashboard(): string
    {
        return view('dashboard');
    }
    public function riwayat(): string
    {
        return view('riwayat');
    }

    public function profil(): string
    {
        return view('profil');
    } 

    public function pembayaran(): string
    {
        return view('pembayaran');
    }
}

