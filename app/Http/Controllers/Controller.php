<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Category_products;
use App\Contactus;
use App\Footer;
use App\GlobalSetting;
use App\Partner;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public static function categories()
    {
        $categories = Category_products::all();
        return $categories;
    }

    public static function partners()
    {
        $partners = Partner::all();
        return $partners;
    }

    public static function footer()
    {
        $footer = Footer::first();
        return $footer;
    }

    public static function contact()
    {
        $contact = Contactus::select('email1', 'phone')->first();
        return $contact;
    }
    // public static function getin_touch()
    // {
    //     $getin_touch = Footer::select('getin_touch_title', 'getin_touch_desc')->first();
    //     return $getin_touch;
    // }

    public static function global_settings()
    {
        $global_settings = GlobalSetting::select('logo','footer_logo','logo_title', 'meta_title')->first();
        return $global_settings;
    }
}
