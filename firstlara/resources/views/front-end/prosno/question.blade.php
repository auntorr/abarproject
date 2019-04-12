@extends('front-end.master')
@section('hd')

<div class="contents-wrapper">
            <!-- Contents starts here -->
            <div class="content">
                <h2><a href="{{route('eques')}}">Electrical and Electronic Engineering</a></h2><br>
                <h2><a href="{{route('eques2')}}">Electrical and Electronic Engineering(Old Syllabus)</a></h2><br>
                <h2><a href="{{route('mques')}}">Mechanical Engineering</a></h2><br>
                <h2><a href="{{route('mques2')}}">Mechanical Engineering(Old Syllabus)</a></h2><br>
                <h2><a href="{{route('chques')}}">Chemical Engineering</a></h2><br>
                <h2><a href="{{route('chques2')}}">Chemical Engineering(old Syllabus)</a></h2><br>
                <h2><a href="{{route('cques')}}">Civil Engineering</a></h2><br>
                 <h2><a href="{{route('cques2')}}">Civil Engineering(old Syllabus)</a></h2><br>
            </div>
        </div>
@endsection