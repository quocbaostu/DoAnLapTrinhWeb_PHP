<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CatController extends Controller
{
    public function getListLoai(){
        $loai = category::all();
        return view('admin.category.listloai', compact('loai'));
    }

    public function getThemLoai(){
        return view('admin.category.themloai');
    }

    public function postThemLoai(Request $request){
        $sach = new category();
        $sach->cat_id = $request->ma;
        $sach->cat_name = $request->ten;

        $sach->save();

        return redirect('admin/loai/themloai')->with('thanhcong','THÊM THÀNH CÔNG');
    }

    public function getSuaLoai($cat_id){
        $loai = category::find($cat_id);
        return view('admin.category.sualoai', compact('loai'));
    }

    public function postSuaLoai(Request $request, $cat_id){
        $loai = category::find($cat_id);
        $loai->cat_id = $request->ma;
        $loai->cat_name = $request->ten;

        $loai->save();

        return redirect('admin/loai/listloai');
    }

    public function getXoaLoai($cat_id)
    {
        $loai = category::find($cat_id);
        $loai->delete();

        return redirect('admin/loai/listloai');
    }
}
