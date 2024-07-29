<?php

namespace App\Controllers;

class AdminController extends BaseController
{
    public function index(): string
    {
        return view('admin/index.php');
    }
    public function formLogin(): string
    {
        return view('admin/login.php');
    }
    public function login(): string
    {
        return view('admin/index.php');
    }
    public function register(): string
    {
        return view('admin/register.php');
    }
    public function pinjam(): string
    {
        return view('admin/pinjam.php');
    }
    public function selesai(): string
    {
        return view('admin/selesai.php');
    }
    public function transaksi(): string
    {
        return view('admin/transaksi.php');
    }
}
