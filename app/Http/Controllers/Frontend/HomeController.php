<?php

namespace App\Http\Controllers\Frontend;

use App\Category_products;
use App\Gallery;
use App\HomePage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\ProductPage;
use App\Slider;
use App\Warranty;
use Illuminate\Support\Facades\DB as FacadesDB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $home_page = HomePage::first();
        $slider = Slider::first();
        // $products = Product::where('display_in_home', '==', 1)->take(4);
        $products = Product::take(4)->get();
        $gallery = Gallery::OrderBy('created_at', 'desc')->take(15)->get();
        // $categories = Category_products::all();

        // $section_one_cat = Category_products::where('id', $home_page->sec1_cat_id)->first();
        // $section_one = $section_one_cat->products();
        // $section_three_cat = Category_products::where('id', $home_page->sec3_cat_id)->first();
        // $section_three = $section_three_cat->products();
        // $section_four_cat = Category_products::where('id', $home_page->sec4_cat_id)->first();
        // $section_four = $section_four_cat->products();

        // return view('frontend.index', compact('products','home_page','section_one','section_three', 'section_four','slider', 'categories'));
        return view('frontend.index', compact('home_page', 'slider', 'gallery', 'products'));
    }

   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function warranty()
    {
        $warranty = Warranty::first();
        return view('frontend.warranty', compact('warranty'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function search(Request $request)
    {
      $products = Product::where('name', 'LIKE', "%{$request->product_name}%")
        ->where('deleted_at', null)
        ->paginate(12);
        // dd($products);
        $categories = Category_products::all();
        return view('frontend.products', compact('products', 'categories'));
    }

}
