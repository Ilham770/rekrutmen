<?php

namespace App\Controllers;

class Page extends BaseController
{

    //CONTROLER UNTUK BAGIAN LANDING PAGE
    public function index()
    {

        $data = [
            'title' => 'Sistem Penerimaan Daily Worker'
        ];

        return view('index', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Us'
        ];

        return view('about', $data);
    }

    public function job_vacancies()
    {
        $data = [
            'title' => 'Job Vacancies'
        ];

        return view('jobVacancies', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us'
        ];

        return view('contact', $data);
    }

    public function faq()
    {
        $data = [
            'title' => 'Frequently Asked Question'
        ];

        return view('faq', $data);
    }
}
