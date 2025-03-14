<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Home extends Controller
{
    // Metode untuk menampilkan halaman utama
    public function index()
{
    $data['current_page'] = 'home'; // Menetapkan halaman saat ini
    return view('home', $data); // Mengirim data ke tampilan
}

    public function about()
    {
        $data['current_page'] = 'about'; // Menetapkan halaman saat ini
        return view('about', $data); // Mengirim data ke tampilan
    }

    public function classes()
    {
        $data['current_page'] = 'classes'; // Menetapkan halaman saat ini
        return view('classes', $data); // Mengirim data ke tampilan
    }

    public function contact()
    {
        $data['current_page'] = 'contact'; // Menetapkan halaman saat ini
        return view('contact', $data); // Mengirim data ke tampilan
    }
    
    public function CallToAction()
    {
        $data['current_page'] = 'CallToAction'; // Menetapkan halaman saat ini
        return view('CallToAction', $data); // Mengirim data ke tampilan
    }

}