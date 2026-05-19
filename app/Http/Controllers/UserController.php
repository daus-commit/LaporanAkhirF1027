<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function home() {
        return view('home');
    }

    public function ringkasan() {
        return view('ringkasan');
    }

    public function pengenalan() {
        return view('pengenalan');
    }

    public function latarbelakang() {
        return view('latarbelakang');
    }

    public function aktiviti() {
        return view('aktiviti');
    }

    public function laporan() {
        return view('laporan');
    }

    public function Kesimpulan() {
        return view('Kesimpulan');
    }

    public function rujukan() {
        return view('rujukan');
    }

    public function hire() {
        return view('hire');
    }

    //controller ringkasan aktiviti mingguan minggu 1 - 20
    public function minggu1() {
        return view('aktiviti.minggu1');
    }

    public function minggu2() {
        return view('aktiviti.minggu2');
    }

    public function minggu3() {
        return view('aktiviti.minggu3');
    }

    public function minggu4() {
        return view('aktiviti.minggu4');
    }

    public function minggu5() {
        return view('aktiviti.minggu5');
    }

    public function minggu6() {
        return view('aktiviti.minggu6');
    }

    public function minggu7() {
        return view('aktiviti.minggu7');
    }

    public function minggu8() {
        return view('aktiviti.minggu8');
    }

    public function minggu9() {
        return view('aktiviti.minggu9');
    }

    public function minggu10() {
        return view('aktiviti.minggu10');
    }

    public function minggu11() {
        return view('aktiviti.minggu11');
    }

    public function minggu12() {
        return view('aktiviti.minggu12');
    }

    public function minggu13() {
        return view('aktiviti.minggu13');
    }

    public function minggu14() {
        return view('aktiviti.minggu14');
    }

    public function minggu15() {
        return view('aktiviti.minggu15');
    }

    public function minggu16() {
        return view('aktiviti.minggu16');
    }

    public function minggu17() {
        return view('aktiviti.minggu17');
    }

    public function minggu18() {
        return view('aktiviti.minggu18');
    }

    public function minggu19() {
        return view('aktiviti.minggu19');
    }

    public function minggu20() {
        return view('aktiviti.minggu20');
    }
}
