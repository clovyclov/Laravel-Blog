<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

  public function getContact() {
    return view('pages/contact');
  }

  public function getAbout() {
    return view('pages/about');
  }

  public view('pages/welcome');

}
