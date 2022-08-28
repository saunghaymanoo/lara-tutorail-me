@extends('layouts.app')
@section('title') Edit @endsection
@section('content')

    <div class="con">
   
    <div class="box">
        <h1>Edit Student</h1>
        <!-- <form action="post" class="login-form"> -->
       
        {!! Form::open(['url' => 'manager/student/update','method'=> 'POST','class' => 'form-control login-form']) !!}
            <input type="hidden" name="id" value="{{$student->id}}">
            <input type="text" name="name" class="@error('name') is-invalid @enderror" value="{{old('name',$student->name)}}"><br>
            @error('name')
            <div class="" style="color:red;font-size:13px;margin:0px;padding:0px">{{$message}}</div>
            @enderror
            <br>

            <input type="text" name="city" class="@error('city') is-invalid @enderror" value="{{old('city',$student->city)}}"><br>
            @error('city')
            <div class="" style="color:red;font-size:13px;margin:0px;padding:0px">{{$message}}</div>
            @enderror
            <br>

            <input type="text" name="distance" value="{{old('distance',$student->distance)}}">
            @error('distance')
            <div class="" style="color:red;font-size:13px;margin:0px;padding:0px">{{$message}}</div>
            @enderror
            <input type="text" name="moons" value="{{old('moons',$student->moons)}}">
            @error('moons')
            <div class="" style="color:red;font-size:13px;margin:0px;padding:0px">{{$message}}</div>
            @enderror
            <br>

            <input type="submit" name="btn" value="Edit " class="btn">
            
        {!! Form::close() !!}
 
    
</div>
</div>
    <div class="res">
        <h2>Copyright © <spain>JDkhan</spain></h2>
    </div>
  

@endsection