@extends('front-end.master')
@section('hd')
 <div class="contents-wrapper">
            <!-- Contents starts here -->
            <div class="content">
                <h2>Mechanical Engineering</h2>
                <br>
                <p>Mechanical engineering is the discipline that applies engineering, physics, engineering mathematics, and materials science principles to design, analyze, manufacture, and maintain mechanical systems. It is one of the oldest and broadest of the engineering disciplines.</p>
                <br/>
                <a href="{{route('/')}}/front-end/pdf/subjects.pdf"><b>Subjects of ME Engineering</b></a>

                <br/>
                <a href="{{route('/')}}/front-end/pdf/amie.pdf"><b>Syllabus of ME Engineering</b></a>

                <br/>
                <a href="{{route('mques')}}"><b>Questions of AMIE EXAM</b></a>
                <br>

                 <a href="{{route('msol')}}"><b>Solution of Question papers</b></a>
                 <br>
                 
                 <a href="{{route('videotut')}}"><b>Video Tutorial </b></a>
            </div>
        </div>
@endsection