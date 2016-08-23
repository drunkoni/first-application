<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function getIndex()
    {
       return view('pages.welcome');
    }

    public function getAbout()
    {
        $first="John";
        $last="Doe";
        $full= $first."".$last;
        $email="John@doe.com";
        $data=array('first'=>$first,'last'=>$last,'email'=>$email);
        return view('pages.about')->withData($data);
    }

    public function getContact()
    {
       return view('pages.contact');
    }


}
