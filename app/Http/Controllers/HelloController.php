<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    //
   public function index()
   {
       # code...
       $thongtin = [
           'name' => 'Phùng Minh Hải',
           'diachi' => 'Hùng Tiến - Mỹ Đức - Hà Nội',
           'sdt' => '0123456789',
           'email' => 'haipmph05501@fpt.edu.vn'
       ];
       return view('hello',[
        'hienthi' => $thongtin
       ]);
   }
}
