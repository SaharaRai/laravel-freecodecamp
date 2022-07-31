@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
        <div class="col-3">
            <img src="/freecodecampLogo.jpeg" alt="another logo" class="rounded-circle">
        </div>

        <div class="col-9">
            <div class="d-flex justify-content-between">
                <h1> {{$user -> username}} </h1>
                <a href="/p/create">Add new post</a>
            </div>
            <div>
                <div class="pt-4 font-weight-bold"> {{$user->profile->title}} </div>
                <div> {{$user->profile->description}} </div>
                <div><a href="#"> {{$user->profile->url}} </a></div>
            </div>
        </div>
   </div>

   <div class="row pt-4">
    @foreach($user-> posts as $post)
    <div class="col-4">
        <img src="/storage/{{$post -> image}}" alt="photo" class="w-100">
    </div>
    @endforeach

   </div>
</div>
@endsection
