<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class About extends Controller
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
    
    public function callToAction()
    {
        $data['current_page'] = 'callToAction'; // Menetapkan halaman saat ini
        return view('calltoaction', $data); // Mengirim data ke tampilan
    }

    public function cookies()
    {
        return view('cookies'); // Pastikan ada file view cookies.php di app/Views
    }

    public function help()
    {
        return view('help'); // Pastikan ada file view help.php di app/Views
    }

    public function faqs()
    {
        return view('faqs'); // Pastikan ada file view faqs.php di app/Views
    }
}
