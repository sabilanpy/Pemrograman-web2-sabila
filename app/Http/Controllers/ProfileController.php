<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function show()
    {
        // Ambil data profil pertama sebagai contoh
        $profile = Profile::first();
        return view('show', compact('profile'));
    }
}
