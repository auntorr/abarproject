@extends('front-end.master')
@section('hd')
 <div class="contents-wrapper">
            <!-- Contents starts here -->
            <div class="content">
                <h2>Chemical Engineering</h2>
                <br>
                <p>Chemical engineering is a branch of engineering that uses principles of chemistry, physics, mathematics, biology, and economics to efficiently use, produce, transform, and transport chemicals, materials, and energy..</p>
                <br/>
                <a href="{{route('/')}}/front-end/pdf/subjects.pdf"><b>Subjects of Civil Engineering</b></a>

                <br/>
                <a href="{{route('/')}}/front-end/pdf/amie.pdf"><b>Syllabus of Civil Engineering</b></a>

                <br/>
                <a href="{{route('chques')}}"><b>Questions of AMIE EXAM</b></a>
                <br>

                 <a href="{{route('chsol')}}"><b>Solution of Question papers</b></a>
                 <br>
                 
                 <a href="{{route('videotut')}}"><b>Video Tutorial </b></a>
            </div>
        </div>
@endsection