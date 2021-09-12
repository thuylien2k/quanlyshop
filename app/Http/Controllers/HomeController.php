<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view("home");
    }
    public function loginFrom()
    {
        return view("login");
    }
    public function login(Request $request)
    {
        return $request->sdt1;
    }
    public function registerFrom()
    {
        return view("register");
    }
    public function register(Request $request)
    {
        return $request->name1;
    }
    public function quan()
    {
        return view("quan");
    }
    public function ao()
    {
        return view("ao");
    }
    public function vay()
    {
        return view("vay");
    }
    public function dam()
    {
        return view("dam");
    }
    public function set()
    {
        return view("set");
    }
    public function chitietsp1()
    {
        return view("chitietsp1");
    }
    public function chitietsp2()
    {
        return view("chitietsp2");
    }
    public function qltaikhoan()
    {
        return view("qltaikhoan");
    }
    public function taotaikhoan()
    {
        return view("taotaikhoan");
    }
    public function quanlydanhmuc()
    {
        return view("quanlydanhmuc");
    }
    public function taodanhmuc()
    {
        return view("taodanhmuc");
    }
    public function quanlysp()
    {
        return view("quanlysp");
    }
    public function taosp()
    {
        return view("taosp");
    }
}
