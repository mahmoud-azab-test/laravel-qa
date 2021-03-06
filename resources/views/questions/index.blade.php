@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">All Questions</div>

                <div class="card-body">
                   @foreach ($questions as $question)
                       <div class="form-group">
                           <div class="form-group-item">
                           <h3 class="mt-0"><a href="{{$question->url}}">{{$question->title}}</a></h3>
                           <p class="lead">
                                Aske By
                                <a href="{{$question->user->url}}">{{$question->user->name}}</a>
                                <small class="text-muted">{{$question->created_date}}</small>
                            </p>
                           <br>
                           {{Str::limit( $question->body, 250)}}
                           </div>
                       </div>
                   @endforeach
                   <div>
                    {{$questions->links()}}
                   </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
