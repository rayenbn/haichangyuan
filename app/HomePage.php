<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class HomePage extends Model
{
    protected $fillable = [
            'sec1_img1',
            'sec1_title1',
            'sec1_desc1',
            'sec1_img2',
            'sec1_title2',
            'sec1_desc2',
            'sec1_img3',
            'sec1_title3',
            'sec1_desc3',
            'sec1_img4',
            'sec1_title4',
            'sec1_desc4',
            'sec2_image1',
            'sec2_image2',
            'sec2_image3',
            'sec2_title',
            'sec2_desc',
            'sec2_subtitle',
            'sec2_link',
            'sec3_title1',
            'sec2_subtitle1',
            'sec3_desc1',
            'sec3_title2',
            'sec2_subtitle2',
            'sec3_desc2',
            'sec3_title3',
            'sec2_subtitle3',
            'sec3_desc3',
            'sec4_title',
            'sec5_image1',
            'sec5_title1',
            'sec5_desc1',
            'sec5_text_one1',
            'sec5_text_two1',
            'sec5_text_three1',
            'sec5_link1',
            'sec5_image2',
            'sec5_title2',
            'sec5_desc2',
            'sec5_text_one2',
            'sec5_text_two2',
            'sec5_text_three2',
            'sec5_link2'
    ];

    public function getSec2TimeAttribute($value)
    {
        return Carbon::parse($value)->format('Y/m/d');  
    }

    public function products()
    {
    	return $this->belongsToMany('App\Product', 'home_page_products')->orderBy('created_at','DESC')->withTimestamps();//->paginate(12);
    }
}
