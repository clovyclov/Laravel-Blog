<?php
//
// namespace App\Http\Controllers;
//
// class PagesController extends Controller {
//
//     public function getIndex() {
//       return view('pages.welcome');
//     }
//
//     public function getAbout() {
//       $first = "Clovis";
//       $last = "Shropshire";
//       $fullname = $first . " " . $last;
//       $data = [];
//       $data['email'] = "$email;"
//       return view('pages.about')->withFullname($fullname);
//     }
//
//     public function getContact() {
//       return view('pages.contact');
//     }
//
// }

namespace App\Http\Controllers;

class PagesController extends Controller {

  public function getWelcome() {
    return view('welcome');
  }

}
