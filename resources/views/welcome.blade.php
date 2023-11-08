@extends('layouts.navbar')

@section('content')


	

    @foreach ($articles as $article)
	
<section class="section">
    <div class="container">
        <div class="row mb-4">
            <div class="col-sm-6">
                <h2 class="posts-entry-title">{{$article->title}}</h2>
            </div>
        </div>

        <div class="row">
           
           
    <div class="col-lg-4 mb-4">
        <div class="post-entry-alt">
            <a href="{{route('single',$article->id)}}" class="img-link"><img src="{{$article->image}}" alt="Image" class="img-fluid"></a>
            <div class="excerpt">
                <h2><a href="{{route('single',$article->id)}}">{{$article->title}}</a></h2>
                <div class="post-meta align-items-center text-left clearfix">
                    <figure class="author-figure mb-0 me-3 float-start"><img src="{{url('images/person_1.jpg')}}" alt="Image" class="img-fluid"></figure>
                    
				
                        
                            <span class="d-inline-block mt-1">By <a href="{{route('single',$article->id)}}">{{$article->user->name}}</a><span>&nbsp;-&nbsp;{{$article->current_date_time}}</span></span>
                    
                 
                    
                </div>
<div class="description" style=" display: -webkit-box;
    -webkit-line-clamp: 2; 
    -webkit-box-orient: vertical;
    overflow: hidden;">
                <p >{{ $article->description}}</p>
</div>
                <p><a href="{{route('single',$article->id)}}" class="read-more">Continue Reading</a></p>
            </div>
        </div>
    </div>
@endforeach

           
        </div>
    </div>
</section>



@endsection