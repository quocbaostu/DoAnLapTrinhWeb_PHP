<?php

namespace App\Http\Controllers;

use App\Models\book;
use App\Models\category;
use App\Models\publisher;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function getListSach(){
        $sach = book::all();
        return view('admin.sach.listsach',compact('sach'));
    }

    public function getThemSach(){
        $maloai = category::all();
        $manxb = publisher::all();
        return view('admin.sach.themsach', compact('maloai', 'manxb'));
    }

    public function postThemSach(Request $request){



        $sach = new book;
        $sach->book_id = $request->ma;
        $sach->book_name = $request->ten;
        $sach->description = $request->mota;
        $sach->price = $request->gia;
        $sach->img = $request->hinh;
        $sach->cat_id = $request->maloai;
        $sach->pub_id = $request->manxb;
        $sach->save();

        return redirect('admin/sach/themsach');
    }

    public function getSuaSach($book_id){
        $book = book::find($book_id);
        $maloai = category::all();
        $manxb = publisher::all();
        return view('admin.sach.suasach', compact('book', 'maloai', 'manxb'));
    }

    public function postSuaSach(Request $request, $book_id){


        $sach = book::find($book_id);
        $sach->book_id = $request->ma;
        $sach->book_name = $request->ten;
        $sach->description = $request->mota;
        $sach->price = $request->gia;
        $sach->img = $request->hinh;
        $sach->cat_id = $request->maloai;
        $sach->pub_id = $request->manxb;
        $sach->save();

        return back();
    }

    public function getXoaSach($book_id)
    {
        $sach = book::find($book_id);
        $sach->delete();

        return redirect('admin/sach/listsach');
    }
}
