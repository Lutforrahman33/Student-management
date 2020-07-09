@extends('layouts.app')

@section('content')

  <div class="container">
  	 <div class="row">
  	 	<div class="col-md-8 col-md-offset-2">
          
          @if (Auth::check())
            <div class="alart alart-success">
               from {{  Auth::user()
                }}
            </div>
          @endif

  	 		@foreach($posts as $post)
                <div class="panel panel-default">
                	<div class="panel-body">
                		<h3>{{ $post->title }}</h3>
                		<p> {{ $post->category->name }}</p>
                		<hr>
                		  {{  $post->user->name     }}
                		<hr>
                        <div class="">
                        	{!! $post->description  !!}
                        </div>

                	</div>
                	
                </div>

  	 		@endforeach
  	 		
  	 	</div>
  	 	

  	 </div>




  </div>

@endsection