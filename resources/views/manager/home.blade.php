@extends('layouts.app')
@section('title') Manager Home @endsection
@section('content')
<h1>Manager Home</h1>
<div class="container">
    <p>{{ getUserName() }}</p>
    <a href="student/download" class="btn btn-success btn-sm" style="padding:5px;text-decoration:none;">Download PDF</a>
    <table class="one">
        <caption><h1>Students List</h1></caption> <!-- added table caption -->
        <tr>
            <th>Name</th>
            <th>City</th>
            <th>Distance</th>
            <th>Moons</th>
            <th>Control</th>
        </tr>
        @foreach($students as $student)
        <tr>
            <td>{{$student->name}}</td>
            <td>{{$student->city}}</td>
            <td>{{$student->distance}}</td>
            <td>{{$student->moons}}</td>
            <td>
                <button 
                 class="" 
                 onclick="studentDelete({{$student->id}})"
                 style="background-color: red;color:white;border-radius:5px;padding:4px 5px;border:1px solid #dedede;"
                 >
                 Del
                </button>
                <button 
                 class="" 
                 onclick="studentEdit({{$student->id}})"
                 style="background-color:yellow;color:red;border-radius:5px;padding:4px 5px;border:1px solid #dedede;"
                 >
                 Edit
                </button>
            </td>
        </tr>
        @endforeach
      
    </table>

</div>
@push('script')
<script>
    function studentDelete(id){
        window.location.href="student/delete/"+id;
    }
    function studentEdit(id){
        window.location.href="student/edit/"+id;
    }
</script>
@endpush
@endsection