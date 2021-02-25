@extends('master')
@section('content')
<section class="w3l-testimonials" id="testimonials" style="margin-top: 50px">
    <!-- main-slider -->
    <div class="testimonials pt-2 pb-5">
        <div class="container pb-lg-5">
            <div class="owl-testimonial owl-carousel owl-theme mb-md-0 mb-sm-5 mb-4">
                @foreach ($dataSliders as $dataSlider)
                <div class="item">
                    <div class="row slider-info">
                        <div class="col-lg-8 message-info align-self">
                            <span class="label-blue mb-sm-4 mb-3">{{$dataSlider->published_date}}</span>
                            <a href="/article/{{$dataSlider->id}}">
                                <h3 class="title-big mb-4">{{$dataSlider->title}}</h3>
                            </a>
                            <p class="message">{{substr($dataSlider->body, 0, 100)}}</p>
                        </div>
                        <div class="col-lg-4 col-md-8 img-circle mt-lg-0 mt-4">
                            <img src="{{$dataSlider->photo}}" class="img-fluid radius-image-full" alt="client image">
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- /main-slider -->
</section>
<div class="w3l-homeblock2 py-5">
    <div class="container py-lg-5 py-md-4">
        <!-- block -->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="section-title-left mb-4"> Article </h3>
                <div class="row">
                    @foreach ($listArticle as $list)
                    @if ($loop->index % 2)
                    <div class="col-lg-6 col-md-6 item" style="margin-bottom: 50px">
                        <div class="card">
                            <div class="card-header p-0 position-relative">
                                <a href="/article/{{$list->id}}">
                                    <img class="card-img-bottom d-block radius-image-full"
                                    src="{{$list->photo}}" alt="Card image cap" height="400px">
                                </a>
                            </div>
                            <div class="card-body blog-details">
                                <span class="label-blue">view: {{$list->page_view}}</span>
                                <a href="/article/{{$list->id}}" class="blog-desc">{{$list->title}}</a>
                                <p>{{substr($list->body, 0, 100)}}</p>
                                <div class="author align-items-center mt-3 mb-1">
                                    <img src="https://cdn2.iconfinder.com/data/icons/ios-7-icons/50/user_male2-512.png" alt="" class="img-fluid rounded-circle" />
                                    <ul class="blog-meta">
                                        <li>
                                            <a href="author.html">{{$list->name}}</a> </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="col-lg-6 col-md-6 item" style="margin-bottom: 50px">
                        <div class="card">
                            <div class="card-header p-0 position-relative">
                                <a href="/article/{{$list->id}}">
                                    <img class="card-img-bottom d-block radius-image-full"
                                        src="{{$list->photo}}" alt="Card image cap" height="400px">
                                </a>
                            </div>
                            <div class="card-body blog-details">
                                <span class="label-blue">view: {{$list->page_view}}</span>
                                <a href="/article/{{$list->id}}" class="blog-desc">{{$list->title}}</a>
                                <p>{{substr($list->body, 0, 100)}}</p>
                                <div class="author align-items-center mt-3 mb-1">
                                    <img src="https://cdn2.iconfinder.com/data/icons/ios-7-icons/50/user_male2-512.png" alt="" class="img-fluid rounded-circle" />
                                    <ul class="blog-meta">
                                        <li>
                                            <a href="author.html">{{$list->name}}</a> </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
