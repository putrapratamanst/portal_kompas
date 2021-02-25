@extends('master')
@section('content')
<section class="text-11 py-5">
    <div class="text11 py-lg-5 py-md-4">
        <div class="container">
            <div class="blog-title px-md-5">
                <h3 class="title-big">{{$detailArticle->title}}
                </h3><br>
                <p> Posted on <strong>{{$detailArticle->published_date}}</strong></p>
                <p> By <a href="#author"><strong>{{$detailArticle->name}}</strong></a></p>
                <br>
                <div class="image mb-sm-5 mb-4">
                    <img src="{{$detailArticle->photo}}" alt="" class="img-fluid radius-image-full">
                </div>
        
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="text11-content">
                        {{$detailArticle->body}}
                    </div>
                    <br>
                    <div class="new-posts clearfix">
                        <a class="prev-post pull-left" href="{{$detailArticle->id - 1}}"><span class="fa fa-arrow-left" aria-hidden="true"></span>
                            Previous Post</a>
                        <a class="next-post pull-right" href="{{$detailArticle->id + 1}}">Next Post <span class="fa fa-arrow-right" aria-hidden="true"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
