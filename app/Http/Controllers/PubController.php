<?php

namespace App\Http\Controllers;

use App\Models\publisher;
use Illuminate\Http\Request;

class PubController extends Controller
{
    public function getListNxb(){
        $nxb = publisher::all();
        return view('admin.publisher.listnxb', compact('nxb'));
    }

    public function getThemNxb(){
        return view('admin.publisher.themnxb');
    }

    public function postThemNxb(Request $request){
        $nxb = new publisher();
        $nxb->pub_id = $request->ma;
        $nxb->pub_name = $request->ten;

        $nxb->save();

        return redirect('admin/nhaxb/listnxb')->with('thanhcong','THÊM THÀNH CÔNG');
    }

    public function getSuaNxb($pub_id){
        $nxb = publisher::find($pub_id);
        return view('admin.publisher.suanxb', compact('nxb'));
    }

    public function postSuaNxb(Request $request, $pub_id){
        $nxb = publisher::find($pub_id);
        $nxb->pub_id = $request->ma;
        $nxb->pub_name = $request->ten;

        $nxb->save();

        return redirect('admin/nhaxb/listnxb');
    }

    public function getXoaNxb($cat_id)
    {
        $nxb = publisher::find($cat_id);
        $nxb->delete();

        return redirect('admin/nhaxb/listnxb');
    }
}
