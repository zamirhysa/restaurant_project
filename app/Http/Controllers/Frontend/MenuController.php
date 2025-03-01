<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    public function index(){
        $menus = Menu::all();
        return view ('menus.index',compact('menus'));
    }
    public function show (Menu $menu){
        return view ('menus.show');
    }
}
