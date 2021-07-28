<div class="banner_area pt-30 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    @foreach ($categories as $category)
                        <div class="col-lg-3 col-md-3 col-6">
                            <div class="single_banner">
                                <div class="banner_thumb">
                                    <a href="{{ route('categories',$category->id) }}"><img src="/storage/images/category_image/{{ $category->category_image ?? ''}}" alt=""></a>
                                    <div class="banner_text">
                                        <a href="{{ route('categories',$category->id) }}">{{ $category->category_name }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div> 
        </div>
    </div>
</div>