@extends('front-end.master')
@section('hd')
 <div class="contents-wrapper">
            <!-- Contents starts here -->
            <div class="content">
                <h2>Electrical and Electronic Engineering</h2>
                <br>
                <p>Electrical engineering is a professional engineering discipline that generally deals with the study and application of electricity, electronics, and electromagnetism..</p>
                <br/>
                <a href="{{route('/')}}/front-end/pdf/subjects.pdf"><b>Subjects of EEE Engineering</b></a>

                <br/>
                <a href="{{route('/')}}/front-end/pdf/amie.pdf"><b>Syllabus of EEE Engineering</b></a>

                <br/>
                <a href="{{route('eques')}}"><b>Questions of AMIE EXAM</b></a>
                <br>

                 <a href="{{route('esol')}}"><b>Solution of Question papers</b></a>
                 <br>
                 
                 <a href="{{route('videotut')}}"><b>Video Tutorial </b></a>
            </div>
        </div>
@endsection