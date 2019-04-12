@extends('front-end.master')
@section('hd')

<div class="contents-wrapper">
            <!-- Contents starts here -->
            <div class="content">
                <h2><a href="{{route('esol')}}">Electrical and Electronic Engineering</a></h2><br>
                <h2><a href="{{route('esol2')}}">Electrical and Electronic Engineering(Old Syllabus)</a></h2><br>
                <h2><a href="{{route('msol')}}">Mechanical Engineering</a></h2><br>
                <h2><a href="{{route('msol2')}}">Mechanical Engineering(Old Syllabus)</a></h2><br>
                <h2><a href="{{route('chsol')}}">Chemical Engineering</a></h2><br>
                <h2><a href="{{route('chsol2')}}">Chemical Engineering(old Syllabus)</a></h2><br>
                <h2><a href="{{route('csol')}}">Civil Engineering</a></h2><br>
                 <h2><a href="{{route('csol2')}}">Civil Engineering(old Syllabus)</a></h2><br>
            </div>
        </div>
@endsection