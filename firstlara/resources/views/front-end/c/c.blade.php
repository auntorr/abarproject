@extends('front-end.master')
@section('hd')
 <div class="contents-wrapper">
            <!-- Contents starts here -->
            <div class="content">
                <h2>Civil Engineering</h2>
                <br>
                <p>Civil engineuering is a professional engineering discipline that deals with the design, construction, and maintenance of the physical and naturally built environment, including works such as residences, institutional buildings, roads, bridges, canals, dams, airports, sewerage systems, pipelines, and railways.[1][2] Civil engineering is traditionally broken into a number of sub-disciplines. It is considered the second-oldest engineering discipline after military engineering,[3] and it is defined to distinguish non-military engineering from military engineering.[4] Civil engineering takes place in the public sector from municipal through to national governments, and in the private sector from individual homeowners through to international companies</p>
                <br/>
                <a href="{{route('/')}}/front-end/pdf/subjects.pdf"><b>Subjects of Civil Engineering</b></a><br/>
                <a href="{{route('/')}}/front-end/pdf/amie.pdf"><b>Syllabus of Civil Engineering</b></a><br/>
                <a href="{{route('cques')}}"><b>Questions of AMIE EXAM</b></a><br>
                 <a href="{{route('csol')}}"><b>Solution of Question papers</b></a><br>
                 <a href="{{route('videotut')}}"><b>Video Tutorial </b></a>
            </div>
        </div>
@endsection