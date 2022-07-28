@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
        <div class="col-3">
            <img src="/freecodecampLogo.jpeg" alt="another logo" class="rounded-circle">
        </div>

        <div class="col-9">
            <div>
                <h1> {{$user -> username}} </h1>
            </div>
            <div>
                <div class="pt-4 font-weight-bold"> {{$user->profile->title}} </div>
                <div> {{$user->profile->description}} </div>
                <div><a href="#"> {{$user->profile->url}} </a></div>
            </div>
        </div>
   </div>

   <div class="row pt-4">
    <div class="col-4">
        <img src="https://images.unsplash.com/photo-1549407246-5b3d1fe7b9f3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8dGliZXRpYW5mbGFnc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="photo" class="w-100">
    </div>
    <div class="col-4">
        <img src="https://images.unsplash.com/photo-1549407246-5b3d1fe7b9f3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8dGliZXRpYW5mbGFnc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="photo" class="w-100">
    </div>
    <div class="col-4">
        <img src="https://images.unsplash.com/photo-1549407246-5b3d1fe7b9f3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8dGliZXRpYW5mbGFnc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="photo" class="w-100">
    </div>

   </div>
</div>
@endsection
