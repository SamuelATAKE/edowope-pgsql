<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use SimpleSoftwareIO\QrCode\Facades\QrCode;

class HomeController extends Controller
{
    //
    // public function login()
    // {
    //     request()->validate([
    //         'email' => 'required',
    //         'password' => 'required'
    //     ]);

    //     $user =
    // }

    public function qrcode(){
        $qrcode = QrCode::size(400)->generate('cool');

        return view('admin.qrcode', compact('qrcode'));
    }
}
