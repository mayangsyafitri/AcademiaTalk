<?php

namespace App\Controllers;

use App\Models\CategoryModel;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'AcademiaTalk - Home',
            'current_page' => 'home'
        ];
        
        return view('home', $data);
    }
    
    public function about()
    {
        $data = [
            'title' => 'AcademiaTalk - About Us',
            'current_page' => 'about'
        ];
        
        return view('about', $data);
    }
    
    public function classes()
    {
        // Load category model to get categories for the discussion forum
        $categoryModel = new CategoryModel();
        
        $data = [
            'title' => 'AcademiaTalk - Discussion Forum',
            'current_page' => 'classes',
            'categories' => $categoryModel->getCategories()
        ];
        
        return view('classes', $data);
    }
    
    public function contact()
    {
        $data = [
            'title' => 'AcademiaTalk - Contact Us',
            'current_page' => 'contact'
        ];
        
        return view('contact', $data);
    }
    
    public function testimonial()
    {
        $data = [
            'title' => 'AcademiaTalk - Testimonials',
            'current_page' => 'testimonial'
        ];
        
        return view('testimonial', $data);
    }
    
    public function team()
    {
        $data = [
            'title' => 'AcademiaTalk - Popular Teachers',
            'current_page' => 'team'
        ];
        
        return view('team', $data);
    }
    
    public function learning()
    {
        $data = [
            'title' => 'AcademiaTalk - Learning Materials',
            'current_page' => 'learning'
        ];
        
        return view('learning', $data);
    }
}