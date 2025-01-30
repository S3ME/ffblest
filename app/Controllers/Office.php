<?php

namespace App\Controllers;

class Office extends BaseController
{
    public function index()
    {
        // Calling Models

        // Populating Data
        $user = auth()->user();

        // Parsing Data to View
        $data                   = $this->data;
        $data['title']          = 'Dashboard';
        $data['description']    = 'Developed By Dismas Banar';
        $data['user']           = $user;

        // Rendering View
        return view('office/dashboard', $data);
    }
}