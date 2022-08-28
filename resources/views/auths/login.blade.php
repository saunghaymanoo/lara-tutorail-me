@extends('layouts.app')
@section('title') Login @endsection
@section('content')

    <div class="con">
   
    <div class="box">
        <h1>Login Form</h1>
        <!-- <form action="post" class="login-form"> -->
       
        {!! Form::open(['url' => '/login','method'=> 'POST','class' => 'form-control login-form']) !!}
            <input type="email" name="email" placeholder="Enter Email.." class="@error('email') is-invalid @enderror" value="{{old('email')}}"><br>
            @error('email')
            <div class="" style="color:red;font-size:13px;margin:0px;padding:0px">{{$message}}</div>
            @enderror
            <br>
            <input type="Password" name="password" placeholder="Enter Password.." value="{{old('password')}}">
            @error('password')
            <div class="" style="color:red;font-size:13px;margin:0px;padding:0px">{{$message}}</div>
            @enderror
            <br>
            <input type="submit" name="btn" value="Login " class="btn">
            <input type="submit" name="btn" value="SigUp " class="btn">
        {!! Form::close() !!}
 
    
</div>
</div>
    <div class="res">
        <h2>Copyright © <spain>JDkhan</spain></h2>
    </div>
  

@endsection