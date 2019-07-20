<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Mail\ConfirmacionRegistro;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function inicio() {
        return view('welcome');
    }


    public function hagamoslo(){
        Mail::to("clferreri94@gmail.com")->send(new ConfirmacionRegistro());
    }
}
