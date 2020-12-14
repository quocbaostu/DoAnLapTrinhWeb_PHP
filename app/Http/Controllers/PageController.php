<?php

namespace App\Http\Controllers;

use App\Models\book;
use App\Models\category;
use App\Models\publisher;
use App\Models\slide;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PageController extends Controller
{
    public function getIndex(){
        $slide = slide::all();
        $book = book::paginate(8,['*'],'pag');
        return view('page.trangchu', ['slidee'=>$slide],['bookk'=>$book]);
    }

    public function getSanpham($Loai){
        $loai_sach = book::where('cat_id', $Loai)->get();
        $loai_menu = category::all();
        return view('page.trangsanpham', compact('loai_sach', 'loai_menu'));
    }

    public function getChitiet($Chitiet){
        $sach = book::where('book_id', $Chitiet)->first();
        $sach_tuongtu = book::where('cat_id', $sach->cat_id)->paginate(3);
        return view('page.chitietsanpham', ['sachhh'=>$sach], ['sach_tuongtuuu'=>$sach_tuongtu]);
    }

    public function getLienhe(){
        return view('page.lienhe');
    }

    public function getGioithieu(){
        return view('page.gioithieu');
    }

    public function getNhaxuatban($NhaXB){
        $nha_xb = book::where('pub_id', $NhaXB)->get();
        $nha_xb_menu = publisher::all();
        return view('page.trangnhaxb', ['nhaxbbb'=>$nha_xb], ['nha_xb_menuuu'=>$nha_xb_menu]);
    }
}
