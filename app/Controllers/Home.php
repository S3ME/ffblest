<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // Calling Models
        // $BlogModel = new BlogModel();

        // Populating Data
        // $blogs = $BlogModel->orderBy('created_at', 'DESC')->limit(4)->find();

        // Parsing Data to View
        $data                   = $this->data;
        $data['title']          = 'Yayasan Flora dan Fauna Bumi Lestari';
        $data['description']    = 'Developed By Dismas Banar';
        // $data['blogs']          = $blogs;

        // Rendering View
        return view('home', $data);
    }

    public function profile()
    {
        // Calling Models
        // $ClientModel = new ClientModel();

        // Populating Data
        // $clients = $ClientModel->findAll();

        // Parsing Data to View
        $data                   = $this->data;
        $data['title']          = 'Profil F2BLEST';
        $data['description']    = 'Developed By Dismas Banar';
        // $data['clients']        = $clients;

        // Rendering View
        return view('profile', $data);
    }
}
