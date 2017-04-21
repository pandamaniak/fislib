<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class SistemController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        return view('input');
    }

    public function tsukamoto(Request $request)
    {

        $x_min = $request->input('x_min');
        $x_max = $request->input('x_max');
        $y_min = $request->input('y_min');
        $y_max = $request->input('y_max');
        $z_min = $request->input('z_min');
        $z_max = $request->input('z_max');
        $x = $request->input('x');
        $y = $request->input('y');


        //Pembentukan Himpunan Fuzzy (Fuzzyfication)
        $ux_turun=($x_max-$x)/($x_max-$x_min);
        $ux_naik=($x-$x_min)/($x_max-$x_min);

        $uy_sedikit=($y_max-$y)/($y_max-$y_min);
        $uy_banyak=($y-$y_min)/($y_max-$y_min);

        //Penerapan Fungsi Implikasi
        $a_pred1=min($ux_turun,$uy_banyak);
        $z1=$z_max-$a_pred1*($z_max-$z_min);

        $a_pred2=min($ux_turun,$uy_sedikit);
        $z2=$z_max-$a_pred2*($z_max-$z_min);

        $a_pred3=min($ux_naik,$uy_banyak);
        $z3=$a_pred3*($z_max-$z_min)-$z_min;

        $a_pred4=min($ux_naik,$uy_sedikit);
        $z4=$a_pred4*($z_max-$z_min)-$z_min;

        //Defuzzyfication
        $n=$a_pred1*$z1+$a_pred2*$z2+$a_pred3*$z3+$a_pred4*$z4;
        $d=$a_pred1+$a_pred2+$a_pred3+$a_pred4;
        $z=$n/$d;
        return $z;
    }

}
