<?php

namespace App\Http\Controllers;
use App\Models\Slide;
use App\Models\Product;
use App\Models\ProductType;
use App\Models\Cart;
use Session;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){
    	$slide = Slide::all();

    	//$new_product = Product::where('new',1)->get();//lay tat ca newproduct bi xau->can phan trang
        $new_product = Product::where('new',1)->paginate(4);
    	//dd($new_product);

        $sanpham_khuyenmai = Product::where('promotion_price','<>',0)->paginate(4);//giakm khac 0 la spkm
        //return view('page.trangchu',['slide'=>$slide]);
    	return view('page.trangchu',compact('slide','new_product','sanpham_khuyenmai'));//cach2
    }

    public function getLoaiSp($type){
        $sp_theoloai = Product::where('id_type',$type)->get();//lay het
        $sp_khac = Product::where('id_type','<>',$type)->paginate(3);
        $loap_sp = ProductType::where('id',$type)->first();//dung first vi chi can lay cai dau tien
    	return view('page.loai_sanpham',compact('sp_theoloai','sp_khac','loap_sp'));
    }

    public function getChitiet(Request $req){//cach2 cua getLoaiSp
        $sanpham = Product::where('id',$req->id)->first();//lay 1 boi vi id la duy nhat
    	return view('page.chitiet_sanpham',compact('sanpham'));
    }

    public function getLienHe(){
    	return view('page.lienhe');
    }

    public function getGioiThieu(){
    	return view('page.gioithieu');
    }

    public function getSearch(Request $req){//name=key trong header.blade.php
        $product = Product::where('name','like','%'.$req->key.'%')->orWhere('unit_price',$req->key)->get();
        return view('page.search',compact('product'));
    }






    //chua hthanh
    public function getAddtoCart(Request $req,$id){
        $product = Product::find($id);//tim sp co id nao k
        $oldCart = Session('cart')?Session::get('cart'):null;//ktra trong session co session cart chua, neu co lay session do gan cho oldcart
        $cart = new Cart($oldCart);//khoi tao gio, gan vao..
        $cart->add($product,$id);//them 1 ptu vao gio
        $req->session()->put('cart',$cart);//put gio vao session cart
        return redirect()->back();//tro ve view ban dau
    }

    
}
