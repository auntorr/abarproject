
<!DOCTYPE html>
<meta charset="utf-8">

<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <title>AMIE-IEB</title>
    <link rel="icon" type="image/png" href=" {{asset('/')}}/front-end/img/ieb.jpg">
    <link href='https://fonts.googleapis.com/css?family=Oxygen:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}/front-end/css/style.css">
     
    
</head>
@csrf

<body id="home">
<!-- Start Your Body Code From here -->
<div class="wrapper">
    <!-- header starts here -->
    
        <!-- header -->
        <div class="header-wrapper">
            <div class="header-container">
                <div>
                    <div class="logo-name">
                        <div class="logo"><a href="{{ route ('/')}}" title=""><img src="{{asset('/')}}/front-end/img/ieb.jpg"
                                                                             alt="logo"></a></div>
                        <div class="name">
                            <a href="{{ route ('/')}}" title="">
                                <h5>AMIE</h5>
                                <h5 class="primary-color">Associated Membership of Institution Engineers</h5>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-links">
                    <a href="#" data-toggle="popover" title="Address"
                       data-content="Sadar Daftar, 2nd Floor, Beside High Court, Moulana Bhasani Rd, Dhaka 1000"
                       data-placement="bottom"><i class="fa fa-map-marker fa-lg" aria-hidden="true"></i></a>

                    <a href="#" data-toggle="popover" title="Phone No." data-content=""
                       data-placement="bottom"><i class="fa fa-phone fa-lg" aria-hidden="true"></i></a>

                    <a href="#" data-toggle="popover" title="Email" data-content=""
                       data-placement="bottom"><i class="fa fa-envelope fa-lg" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        <header id="header" class="sticky-top" >
        <nav >
            <div class="navbar navbar-inverse navbar-custom  " role="navigation">
                <div class="container">
                    <div class="navbar-header navbar-expand-md">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-collapse">
                                         
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                             <li>
                                <li><a href="{{ route ('/')}}">Home</a></li>
                            </li>
                            <li>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">About AMIE <b
                                        class="caret"></b></a>
                                <ul class="dropdown-menu multi-level">
                                    <li><a href="{{route('about-amie')}}">AMIE Engineering Details </a></li>
                                     <li><a href="{{route('/')}}/front-end/pdf/admission.pdf">AMIE Admission Procedure</a></li>
                                    <li><a href="">Institution Of Engineers</a></li>
                                    

                                </ul>
                            </li>
                            <li>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Departments <b
                                        class="caret"></b></a>
                                <ul class="dropdown-menu multi-level">
                                    <li><a href="{{route('eee')}}">Electrical and Electronic Engineering</a></li>
                                    <li><a href="{{route('mechanical')}}">Mechanical Engineering</a></li>
                                    <li><a href="{{route('civil')}}">Civil Engineering</a></li>
                                    <li><a href="{{route('chemical')}}">Chemical Engineering</a></li> 

                                </ul>
                            </li>
                             <li>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Virtual Classroom <b
                                        class="caret"></b></a>
                                <ul class="dropdown-menu multi-level">
                                    <li><a href="{{route('question')}}">Question</a></li>
                                    <li><a href="{{route('solution')}}">Solution</a></li>
                                    <li><a href="{{route('classnote')}}">Class Notes</a></li>
                                    <li><a href="{{route('videotut')}}">Video Class</a></li>

                                </ul>
                            </li>
                              <li>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Club <b
                                        class="caret"></b></a>
                                <ul class="dropdown-menu multi-level">
                                    <li><a href="{{route('science')}}">Science Club</a></li>
                                    <li><a href="{{route('career')}}">Career Club</a></li>
                                    

                                </ul>
                            </li>
                            
                           <!-- <li>
                                <li><a href="#announcements">Notice </a></li>
                            </li>
                             <li>
                                <li><a href="#announcements">Events</a></li>
                            </li> -->
                             <li>
                                <li><a href="{{route('alumni')}}">Alumni</a></li>
                            </li>
                             <li>
                                <li><a href="{{route('acsu')}}">Acsu</a></li>
                            </li>
                            
                            
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </nav>
    
    </header>
    <!-- /header -->

    <!-- carousel -->
   <!-- 
   <div class="contents-wrapper">
            
            <div class="content">
                <h1>AMIE Engineering</h1>
                <p>AMIE Engineering course is an undergraduate engineering Degree like Bachelor Science in Engineering programs awarded to a student by Institution Of Engineers Bangladesh(IEB)..AMIE is an abbreviation which stands for Associated Membership Of Institution of Engineers.The qualification can be earned by passing Section A, Section B examination  of the IEB. That means, those who pass AMIE examination will get equal opportunities for job as well as higher education in both Govt. and private sectors, just like a B.E or B.Tech holder </p>
               <h1>IEB</h1>
                <p>The Institution of Engineers, Bangladesh (IEB) is the most prestigious National Professional Organization of the country. It is registered under the Societies Registration Act of the country. IEB includes all disciplines of engineering. Currently, it has in its roll more than 41,545 engineers with about 30% in the category of Fellows, 60% Members and the rest as Associate Members.<br/>In addition there are a good number of Student Members or <b>AMIE</b> students. Since its establishments, IEB has been promoting and disseminating knowledge and practice of engineering and science.The Institutions mission has always been to serve the teeming millions through the practice of engineering science and continuously improving the professional standards of its members</p>
               <h1>ACSU</h1>
                <P>ACSU is an organization of AMIE students.and they work for AMIE student</P>
            </div>
        </div>
    -->


 <div class="contents-wrapper">
            <!-- Contents starts here -->
            <div class="content">
                <h1></h1>
                
                
            </div>
        </div>
 <div class="alert alert-warning text-center">
                উদ্ভাবনীমূলক গবেষনা প্রতিযোগীতা "আবিস্কারের নেশা"  অনুষ্ঠানটির আয়োজন করা হবে জুলাই মাসে প্রকৌশলী ও ছাত্রছাত্রীদের এ ব্যাপারে প্রস্তুতি গ্রহনের অনুরোধ করা হচ্ছে। <a class="alert-link" href="{{route('break')}}"> প্রতিযোগিতার জন্য এখানে নিবন্ধন করুন</a>
            </div>



    

  @yield('hd')



































    <!-- Announcements, Events, News -->
    <div class="widgets-wrapper">
        <div class="widgets-container">

            <!-- Edit this section for important announcements.-->
            <div class="alert alert-warning text-center">
                We are trying for cross border <a class="alert-link" href="">AMIE ENGINEERING COURSE</a>
            </div>

            <!-- Announcements -->
            <div class="col-sm-4" id="announcements">
                <div class='announcement-content '>
                    <div class="widgets-title"><h2>Announcements</h2></div>
                    <ul id="announcement-list">
                        <li>
                             AMIE notice  <b>all departments </b><a
                                href="{{route('notice')}}">NOTICE</a>
                        </li>
                        <li>
                            For admissions to <b>AMIE ENGINEERING</b> visit:<br><a
                                href="{{route('/')}}/front-end/pdf/admission.pdf" >Admission</a>
                        </li>
                        <li>
                            For AMIE subjects and syllabus <b>all departments </b><a
                                href="{{route('/')}}/front-end/pdf/amie.pdf" >Course Curriculam</a>
                        </li>
                        <li>
                             RESULT has been published <b>all departments </b><a
                                href="{{route('result')}}" >RESULT</a>
                        </li>
                        <li>
                             ROUTINE has been published <b>all departments </b><a
                                href="{{route('routine')}}" >ROUTINE</a>
                        </li>
                         
                    </ul>
                    <div id="announcement-list-pagination">
                        <a id="announcement-list-previous" href="#">
                            <span><i class="fa fa-chevron-left" aria-hidden="true"></i></span>

                        </a>
                        <a id="announcement-list-next" href="#">
                            <span><i class="fa fa-chevron-right" aria-hidden="true"></i></span>

                        </a>
                    </div>
                </div>
            </div>

            <!-- Events -->
            <div class="col-sm-4" id="events">
                <div class="events-content">
                    <div class="widgets-title"><h2>Events</h2></div>
                    <ul id="events-list">
                        <li>
                            <!-- Events -->
                            <div class="event-container">
                                <!-- Date -->
                                <div class="date">
                                        <span>
                                            <!-- Day -->
                                            <div class="day">9</div>
                                            <!-- Month Short Form (first three letters) -->
                                            <div class="month">Apr</div>
                                        </span>
                                </div>
                                <!-- Event-Description -->
                                <div class="event-text">international mother language day</div>
                            </div>
                        </li>
                        <li>
                            <div class="event-container">
                                <!-- Date -->
                                <div class="date">
                                            <span>
                                                <!-- Day -->
                                                <div class="day">21</div>
                                                <!-- Month Short Form (first three letters) -->
                                                <div class="month">Feb</div>
                                            </span>
                                </div>
                                <!-- Event-Description -->
                                <div class="event-text">Independent Day</div>
                            </div>
                        </li>
                        <li>
                            <div class="event-container">
                                <!-- Date -->
                                <div class="date">
                                            <span>
                                                <!-- Day -->
                                                <div class="day">26</div>
                                                <!-- Month Short Form (first three letters) -->
                                                <div class="month">Mar</div>
                                            </span>
                                </div>
                                <!-- Event-Description -->
                                <div class="event-text">Sports Festival Ventura 2019</div>
                            </div>
                        </li>
                        <li>
                            <div class="event-container">
                                <!-- Date -->
                                <div class="date">
                                            <span>
                                                <!-- Day -->
                                                <div class="day">16</div>
                                                <!-- Month Short Form (first three letters) -->
                                                <div class="month">Dec</div>
                                            </span>
                                </div>
                                <!-- Event-Description -->
                                <div class="event-text">Victory Day</div>
                            </div>
                        </li>
                        <li>
                            <div class="event-container">
                                <!-- Date -->
                                <div class="date">
                                            <span>
                                                <!-- Day -->
                                                <div class="day">16</div>
                                                <!-- Month Short Form (first three letters) -->
                                                <div class="month">nov</div>
                                            </span>
                                </div>
                                <!-- Event-Description -->
                                <div class="event-text">Nabhyaan: A festival of kite</div>
                            </div>
                        </li>

                    </ul>
                    <div id="events-list-pagination">
                        <a id="events-list-previous" href="#">
                            <span><i class="fa fa-chevron-left" aria-hidden="true"></i></span>

                        </a>
                        <a id="events-list-next" href="#">
                            <span><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
                        </a>
                    </div>

                </div>
            </div>
            <div class="col-sm-4" id="news">
                <div class='news-content '>
                    <div class="widgets-title"><h2>News</h2></div>
                    <ul id="news-list">
                        <li>
                            <a href="{{route('dnews')}}" >message from Developer Team</a> 

                        </li>
                    </ul>
                     <ul id="news-list">
                        <li>
                            <a href="{{route('anews')}}" >message from Alumni</a> 

                        </li>
                    </ul>
                     <ul id="news-list">
                        <li>
                            <a href="{{route('acnews')}}" >message from acsu</a> 

                        </li>
                    </ul>
                    <div id="news-list-pagination">
                        <a id="news-list-previous" href="#">
                            <span><i class="fa fa-chevron-left" aria-hidden="true"></i></span>

                        </a>
                        <a id="news-list-next" href="#">
                            <span><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="footer-wrapper">
            <span class="logo"><img src="{{asset('/')}}/front-end/img/ieb.jpg" alt=""></span>
            <div class="row">
                <div class="col-sm-4 address">
                    <strong>Address : </strong>Sadar Daftar, 2nd Floor, Beside High Court, Moulana Bhasani Rd, Dhaka 1000
                </div>
                <div class="col-sm-4 links">
                 
                        <div>
                            <a href="{{ route ('/')}}">Home</a>
                            <i class="seperator"></i>
                            <a href="rti.html"></a>
                            <i class="seperator"></i>
                            <a href="pdf/MOU.pdf"></a>
                        </div>
                        <div>
                            <a href="{{route('/')}}/front-end/pdf/admission.pdf">About</a>
                            <i class="seperator"></i>
                            <a href="{{route('/')}}/front-end/pdf/amie.pdf">subjects and syllabus</a>
                            <i class="seperator"></i>
                            <a href="{{route('/')}}/front-end/pdf/amie.pdf">Exam Rules</a>
                        </div>
                    </div>
                <div class="col-sm-4 footer-social">
                    <a href="#!"><i class="fa fa-facebook" aria-hidden="true" title="Official Facebook Page"></i></a>
                    <a href="https:"><i class="fa fa-github" aria-hidden="true"
                                                          title="Github Group"></i></a>
                    <a href="#!"><i class="fa fa-linkedin" aria-hidden="true" title="LinkedIn Profile"></i></a>
                    <a href="#!" title=""><i class="fa fa-twitter" aria-hidden="true"
                                             title="Official Twitter Account"></i></a>
                </div>
            </div>
        </div>
    </footer>
</div>

<script   src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
<script type="text/javascript" src="{{asset('/')}}js/jquery.paginate.min.js "></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/434d359724.js"></script>
<script src="{{asset('/')}}js/main.js"></script>
<script>
    $(document).ready(function () {
        $('[data-toggle="popover"]').popover();
        $('[data-toggle="popover"]').on('click', function (e) {
            $('[data-toggle="popover"]').not(this).popover('hide');
        });
    });
</script>


<!--
/********************************
**Contributors for this Website**
*********************************

The website has been designed and developed from scratch by the Students of IIIT Vadodara

--Designed by--
Mofid Ansari (ansarimofid@gmail.com)
Pratyush Singh (singh.pratyush96@gmail.com)

--Core Developers--
Mofid Ansari (ansarimofid@gmail.com)
Pratyush Singh (singh.pratyush96@gmail.com)
Saurabh Jain (saurabhjn76@gmail.com)

--Supporting Developers--
RajuKoushik (g.rajukoushik@gmail.com)
Kamal Awasthi (kamalawasthi97@gmail.com)
Avi Aryan (avi.aryan123@gmail.com)

--Contribution through reporting issues--
Harish Krupo (harishkrupo@gmail.com)
Shalinee Singh (shalinee43@gmail.com)
Mayank Maurya (mayankm522@gmail.com)
Navneet Nandan (navneet.nandan8@gmail.com)
Prem Chand Saini (premchandsaini779@gmail.com)
Unni Rajendra (unni332265@gmail.com)
Ravi Kishan Jha (ravikishan77@gmail.com)
Ankit Kumar (ankit.kumar071460@yahoo.com)

-->
</body>

</html>
