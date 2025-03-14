<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Router\RouteCollection;

$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT can override it.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

// Define your routes here
$routes->get('/', 'Home::index'); // Halaman utama
$routes->get('about', 'Home::about'); // Halaman About Us
$routes->get('classes', 'Home::classes'); // Halaman Classes
$routes->get('contact', 'Home::contact'); // Halaman Contact Us
$routes->get('testimonial', 'Home::testimonial'); // Halaman Testimonials
$routes->get('facility', 'Home::facility'); // Halaman School Facilities
$routes->get('team', 'Home::team'); // Halaman Popular Teachers
$routes->get('call-to-action', 'Home::callToAction'); // Halaman Become A Teacher
$routes->get('appointment', 'Home::appointment'); // Halaman Make Appointment