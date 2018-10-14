<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function home() {

        $tasks = [
            'task1',
            'task2',
            'task3'
        ];

        return view('welcome', [
            'tasks' => $tasks
        ]);

    }

    public function about() {
        return view('about');
    }

    public function contact() {
        return view('contact');
    }

}
