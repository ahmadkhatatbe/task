@extends('layouts.navbar')
@section('content')
@foreach ($articles as $article )
  

  <div class="site-cover site-cover-sm same-height overlay single-page" style="background-image: url({{url($article->image)}});">
    <div class="container">
      <div class="row same-height justify-content-center">
        <div class="col-md-6">
          <div class="post-entry text-center">
            <h1 class="mb-4">{{$article->title}}</h1>
            <div class="post-meta align-items-center text-center">
              <figure class="author-figure mb-0 me-3 d-inline-block"><img src="{{url('images/person_1.jpg')}}" alt="Image" class="img-fluid"></figure>
              <span class="d-inline-block mt-1">By {{$article->user->name}}</span>
              <span>&nbsp;-&nbsp; {{$article->current_date_time}}</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="section" style="text-align:center">
    <div class="container" >

      <div class="row">

        <div class="col-12">

          <div class="col-12 post-content-body " >
            <div style="text-align:center">
           <p >{{$article->description}}</p>
            </div>
            
          </div>


          


          
            <!-- END comment-list -->

            
          </div>

        </div>

        <!-- END main-content -->

         

      </div>
    </div>
  </section>


  @endforeach
  <!-- End posts-entry -->
@endsection