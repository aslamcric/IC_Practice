<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class DemoController extends Controller
{


    public function index(Request $request)
    {
        $person = [
            'firstName' => 'Aslam',
            'lastName' => 'Ali',
            'email' => 'aslam@gmail.com',
            'address' => [
                'home' => 'Home Address',
                'office' => 'Office Address',
            ],
            'age' => 30
        ];
        return Inertia::render('Home', $person);
    }
}
