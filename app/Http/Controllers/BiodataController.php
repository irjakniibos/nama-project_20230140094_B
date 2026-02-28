<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataController extends Controller
{
    /**
     * Menampilkan halaman biodata / about.
     */
    public function index()
    {
        return view('about');
    }
}
