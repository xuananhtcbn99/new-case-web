<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomehomeController extends Controller
{
    //
    public function index()
    {
        $cate_product = DB::table('tbl_category_product')->where('category_status','=','0')->orderBy('category_id', 'desc')->get();
        $brand_product = DB::table('tbl_brand_product')->where('brand_status','=','0')->orderBy('brand_id', 'desc')->get();

//        $all_product = DB::table('tbl_product')
//            ->join('tbl_category_product','tbl_category_product.category_id', '=', 'tbl_product.category_id')
//            ->join('tbl_brand_product','tbl_brand_product.brand_id', '=', 'tbl_product.brand_id')
//            ->orderBy('tbl_product.product_id', 'desc')->get();
        $all_product = DB::table('tbl_product')->where('product_status','=','0')->orderBy('product_id', 'desc')->limit(6)->get();


        return view('pages.home')
            ->with('category',$cate_product)
            ->with('brand',$brand_product)
            ->with('all_product',$all_product);
    }

    public function search(Request $request){

        $keywords = $request->keywords_submit;

        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand_product')->where('brand_status','0')->orderby('brand_id','desc')->get();

        $search_product = DB::table('tbl_product')->where('product_name','like','%'.$keywords.'%')->get();


        return view('pages.product.search')->with('category',$cate_product)->with('brand',$brand_product)->with('search_product',$search_product);

    }
}
