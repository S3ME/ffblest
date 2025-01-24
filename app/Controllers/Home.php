<?php

namespace App\Controllers;
use App\Models\KegiatanModel;

class Home extends BaseController
{
    public function index()
    {
        // Calling Models
        $KegiatanModel          = new KegiatanModel();

        // Populating Data
        $newses                 = $KegiatanModel->where('highlight', 1)->orderBy('created_at', 'DESC')->limit(4)->find();
        // $newses                 = $KegiatanModel->orderBy('created_at', 'DESC')->limit(4)->find();

        // Parsing Data to View
        $data                   = $this->data;
        $data['title']          = 'Yayasan Flora dan Fauna Bumi Lestari';
        $data['description']    = 'Developed By Dismas Banar';
        $data['newses']         = $newses;

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
