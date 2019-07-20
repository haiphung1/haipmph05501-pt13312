<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SumController extends Controller
{
    public function sumView()
    {
        # code...
        return view('sum-view');
    }
    public function sum(Request $request)
    {
        # code...
        $data = $request->all();
        $soa = $data['n1'];
        $sob = $data['n2'];
        $soc = $data['n3'];

        $x1='';
        $x2='';
        $x3='';
        $denta = $sob*$sob - 4*($soa*$sob);

        if($soa == 0){
            $x1 = - $sob/$soa;
            return view('output',['ketqua'=> $x1]);
        }else {
            if($denta <0 ){
                $x1 = 'vo nghiem';
                return view('output',['ketqua'=> $x1]);
            }else if($denta == 0){
                $x1 = - $sob/(2*$soa);
                return view('output',['ketqua'=> $x1]);
            }else{
                $x2 = (- $sob + sqrt($denta))/ 2*$soa;
                $x3 = (- $sob - sqrt($denta))/ 2*$soa;
                return view('output',[
                    'ketqua1'=> $x2,
                    'ketqua2'=> $x3,
                ]);
            }
        }

        
    }
}
