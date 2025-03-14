<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class About extends Controller
{
    // Metode untuk menampilkan halaman utama
    public function index()
    {
        // Mengirim data ke view
        return view('home'); // Pastikan view 'home.php' ada di folder Views
    }

    // Metode untuk menampilkan halaman About Us
    public function about()
    {
        return view('about'); // Pastikan view 'about.php' ada di folder Views
    }

    // Metode untuk menampilkan halaman Classes
    public function classes()
    {
        return view('classes'); // Pastikan view 'classes.php' ada di folder Views
    }

    // Metode untuk menampilkan halaman Contact Us
    public function contact()
    {
        return view('contact'); // Pastikan view 'contact.php' ada di folder Views
    }

    // Metode untuk menampilkan halaman Testimonials
    public function testimonial()
    {
        return view('testimonial'); // Pastikan view 'testimonial.php' ada di folder Views
    }

    // Metode untuk menampilkan halaman School Facilities
    public function facility()
    {
        return view('facility'); // Pastikan view 'facility.php' ada di folder Views
    }

    // Metode untuk menampilkan halaman Popular Teachers
    public function team()
    {
        return view('team'); // Pastikan view 'team.php' ada di folder Views
    }

    // Metode untuk menampilkan halaman Become A Teacher
    public function callToAction()
    {
        return view('call-to-action'); // Pastikan view 'call-to-action.php' ada di folder Views
    }

    // Metode untuk menampilkan halaman Make Appointment
    public function appointment()
    {
        return view('appointment'); // Pastikan view 'appointment.php' ada di folder Views
    }
}
