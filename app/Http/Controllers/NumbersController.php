<?php

namespace App\Http\Controllers;

class NumbersController extends Controller
{
    /**
     * Fungsi untuk mengambil bilangan fibonacci ke $n
     *
     * Contoh
     *   - n = 4, Fb(4) = 3
     */
    public function fibonacci($n = 5)
    {
        $fibos = [];
        for ($i = 0; $i <= $n; $i++) {
            if ($i == 0) {
                $fibos[$i] = 0;
            } elseif ($i == 1) {
                $fibos[$i] = 1;
            } else {
                $fibos[$i] = $fibos[$i-1] + $fibos[$i-2];
            }
        }

        return [
            'result' => $fibos[$n],
        ];
    }

    /**
     * buatlah fungsi penjumlahan 2 bilangan dari deret fibonacci
     *
     * - ambil bilangan fibonacci ke $n1
     * - ambil bilangan fibonacci ke $n2
     * - jumlahkan bilangan tersebut
     * - kembalikan hasilnya
     * - contoh
     *     - n1 = 1, Fb(1) = 1
     *     - n2 = 4, Fb(4) = 3
     *     - Fb(1) + Fb(4) = 4
     */
    public function fibonacciProduct($n1, $n2)
    {
        // $n=1;
        // $is_worth = false;
        
        // if($n1 === $n2){
        //     $is_worth = true;
        //     $n = $n1;
        // }else{
        //     if($n1 > $n2){
        //         $n = $n1;
        //     }else {
        //         $n = $n2;
        //     }
        // }

        // $result = 0;
        // $fibos = [];
        // for ($i = 0; $i <= $n; $i++) {
        //     if ($i == 0) {
        //         $fibos[$i] = 0;
        //     } elseif ($i == 1) {
        //         $fibos[$i] = 1;
        //     } else {
        //         $fibos[$i] = $fibos[$i-1] + $fibos[$i-2];
        //     }

        //     if($n1 == $i || $n2 == $i){
        //         $result = $result + $fibos[$i];
        //     }
        // }

        // if($is_worth === true){
        //     $result = $result * 2;
        // }
        
        $data1 = (object) $this->fibonacci($n1);
        $data2 = (object) $this->fibonacci($n2);
        $result = $data1->result + $data2->result;
            
        return['data' => $result];

    }
}
