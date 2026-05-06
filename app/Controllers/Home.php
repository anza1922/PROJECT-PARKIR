<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return redirect()->to('/dashboard');
    }

    public function dashboard(): string
    {
        return view('dashboard');
    }
    public function pembayaran(): string
    {
        return view('pembayaran');
    }
}

