@extends('front-end.master')
@section('hd')
<div class="container" style="margin-top:-1.5%">
    <div class="well" style="margin-top:0%">
        <div class="row">
            <!--<div class="col-lg-12" style="margin-left:.5%">
                <div class="btn-group btn-breadcrumb">
                    <a href="../home/" class="btn btn-default"><i class="glyphicon glyphicon-home"></i></a>
                </div>
            </div>  --> 
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        
                   
                    <div class='panel panel-defaul'>
                        <div class='panel-heading' role='tab' id='heading0'>
                            <h4 class='panel-title'>
                                   <a role='button' data-toggle='collapse' data-parent='#accordion' href='#collapse2' aria-expanded='true' aria-controls='collapse0'>
                                    <div class='row'>
                                        <div class='col-lg-2'>
                                           
                                        </div>
                                        <div class='col-lg-8'>
                                            <h3>AMIE Exam Question Papers (New Syllabus)</h3>
                                            <p>
                                                here you will get exam papers...
                                            </p>
                                        </div>
                                         <div class='col-lg-2'>
                                         <h3><img src="{{asset('/')}}/front-end/img/arrow_bottom.png " class='img-responsive' style=''/></h3>
                                         </div>
                                    </div>
                                </a>
                               
                            </h4>
                        </div>
                        <div id='collapse2' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading0'>
                            <div class='panel-body' style='border:none !important'>
                                <div>
                                    <h3>new syllabus</h3>
                                </div>
                              
                               <div class='row'>
                                    <div class='col-lg-3' style='margin-left: 2.6% !important;'>
                                        <a href="{{route('cques')}}">
                                             <img src="{{asset('/')}}/front-end/img/clogo.jpg" class='img-responsive m_4px' style='height:70px; width: 90px; float: left'/>
                                             <span style='float:left; margin-top:6%'>
                                                 Civil Eng<br>
                                                 <i class='fa fa-camera'>&nbsp31</i>
                                             </span>
                                        </a>
                                      
                                    </div>
                                </div>
            
                                   <div class='row'>
                                    <div class='col-lg-3' style='margin-left: 2.6% !important;'>
                                        <a href="{{route('mques')}}">
                                             <img src="{{asset('/')}}/front-end/img/mlogo.jpg" class='img-responsive m_4px' style='height:70px; width: 90px; float: left'/>
                                             <span style='float:left; margin-top:6%'>
                                                 Mechanical Eng<br>
                                                 <i class='fa fa-camera'>&nbsp61</i>
                                             </span>
                                        </a>
                                      
                                    </div>
                                    </div>
                                    <div class='row'>
                                     <div class='col-lg-3' style='margin-left: 2.6% !important;'>
                                         <a href="{{route('eques')}}">
                                              <img src="{{asset('/')}}/front-end/img/elogo.jpg" class='img-responsive m_4px' style='height:70px; width: 90px; float: left'/>
                                              <span style='float:left; margin-top:6%'>
                                                  EEE Eng<br>
                                                  <i class='fa fa-camera'>&nbsp39</i>
                                              </span>
                                         </a>
                                       
                                     </div>
                                     </div>
                                    <div class='row'>
                                     <div class='col-lg-3' style='margin-left: 2.6% !important;'>
                                         <a href="{{route('chques')}}">
                                              <img src="{{asset('/')}}/front-end/img/chlogo.png" class='img-responsive m_4px' style='height:70px; width: 90px; float: left'/>
                                              <span style='float:left; margin-top:6%'>
                                                  Chemical Eng<br>
                                                  <i class='fa fa-camera'>&nbsp84</i>
                                              </span>
                                         </a>
                                       
                                     </div>
                                     </div> 
                                </div>
                            </div>
                        </div>
                     
                    
                    <div class='panel panel-defaul'>
                        <div class='panel-heading' role='tab' id='heading0'>
                            <h4 class='panel-title'>
                                   <a role='button' data-toggle='collapse' data-parent='#accordion' href='#collapse3' aria-expanded='true' aria-controls='collapse0'>
                                    <div class='row'>
                                        <div class='col-lg-2'>
                                            
                                        </div>
                                        <div class='col-lg-8'>
                                            <h3>Solution of Questions (New Syllabus)</h3>
                                            <p>
                                                Our expert team are developing
                                            </p>
                                        </div>
                                         <div class='col-lg-2'>
                                         <h3><img src="{{asset('/')}}/front-end/img/arrow_bottom.png" class='img-responsive' style=''/></h3>
                                         </div>
                                    </div>
                                </a>
                               
                            </h4>
                        </div>
                        <div id='collapse3' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading0'>
                            <div class='panel-body' style='border:none !important'>
                              
                               <div class='row'>
                                    <div class='col-lg-3' style='margin-left: 2.6% !important;'>
                                        <a href="{{route ('csol')}}">
                                             <img src="{{asset('/')}}/front-end/img/clogo.jpg" class='img-responsive m_4px' style='height:70px; width: 90px; float: left'/>
                                             <span style='float:left; margin-top:6%'>
                                                 Civil Eng<br>
                                                 <i class='fa fa-camera'>&nbsp95</i>
                                             </span>
                                        </a>
                                      
                                    </div>
                                </div>
            
                                   <div class='row'>
                                    <div class='col-lg-3' style='margin-left: 2.6% !important;'>
                                        <a href="{{route ('msol')}}">
                                             <img src="{{asset('/')}}/front-end/img/mlogo.jpg" style='height:70px; width: 90px; float: left'/>
                                             <span style='float:left; margin-top:6%'>
                                                 Mechanical Eng<br>
                                                 <i class='fa fa-camera'>&nbsp103</i>
                                             </span>
                                        </a>
                                      
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='col-lg-3' style='margin-left: 2.6% !important;'>
                                        <a href="{{route ('esol')}}">
                                             <img src="{{asset('/')}}/front-end/img/elogo.jpg" style='height:70px; width: 90px; float: left'/>
                                             <span style='float:left; margin-top:6%'>
                                                 EEE Eng<br>
                                                 <i class='fa fa-camera'>&nbsp233</i>
                                             </span>
                                        </a>
                                      
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='col-lg-3' style='margin-left: 2.6% !important;'>
                                        <a href="{{route ('chsol')}}">
                                             <img src="{{asset('/')}}/front-end/img/chlogo.png" class='img-responsive m_4px' style='height:70px; width: 90px; float: left'/>
                                             <span style='float:left; margin-top:6%'>
                                                 Chemical Eng<br>
                                                 <i class='fa fa-camera'>&nbsp105</i>
                                             </span>
                                        </a>
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    <div class='panel panel-defaul'>
                        <div class='panel-heading' role='tab' id='heading1'>
                            <h4 class='panel-title'>
                                   <a class='collapsed' role='button' data-toggle='collapse' data-parent='#accordion' href='#collapse4' aria-expanded='false' aria-controls='collapse'>
                                    <div class='row'>
                                        <div class='col-lg-2'>
                                             
                                        </div>
                                        <div class='col-lg-8'>
                                            <h3>Question and Solution of OLD Syllabus</h3>
                                            <p>
                                                Our Experts teams are developing..
                                            </p>
                                        </div>
                                        <div class='col-lg-2'>
                                         <h3><img src="{{asset('/')}}/front-end/img/arrow_bottom.png" class='img-responsive' style=''/></h3>
                                         </div>
                                    </div>
                                </a>
                               
                            </h4>
                        </div>
                        <div id='collapse4' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading1'>
                            <div class='panel-body' style='border:none !important'>
                                <div class='row'>
                                   
                                </div>
                    
                                <div class='row'>
                                    <div class='col-lg-3' style='margin-left: 2.6% !important;'>
                                        <a href="{{route ('cbook')}}">
                                             <img src="{{asset('/')}}/front-end/img/clogo.jpg" class='img-responsive m_4px' style='height:70px; width: 90px; float: left'/>
                                             <span style='float:left; margin-top:6%'>
                                                 Civil Eng<br>
                                                 <i class='fa fa-camera'></i>
                                             </span>
                                        </a>
                                      
                                    </div>
                                </div>                    
                                <div class='row'>
                                    <div class='col-lg-3' style='margin-left: 2.6% !important;'>
                                        <a href="{{route ('ebook')}}">
                                             <img src="{{asset('/')}}/front-end/img/elogo.jpg" class='img-responsive m_4px' style='height:70px; width: 90px; float: left'/>
                                             <span style='float:left; margin-top:6%'>
                                                 EEE eng<br>
                                                 <i class='fa fa-camera'></i>
                                             </span>
                                        </a>
                                      
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='col-lg-3' style='margin-left: 2.6% !important;'>
                                        <a href="{{route ('mbook')}}">
                                             <img src="{{asset('/')}}/front-end/img/mlogo.jpg" class='img-responsive m_4px' style='height:70px; width: 90px; float: left'/>
                                             <span style='float:left; margin-top:6%'>
                                                 Mech Eng<br>
                                                 <i class='fa fa-camera'></i>
                                             </span>
                                        </a>
                                      
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='col-lg-3' style='margin-left: 2.6% !important;'>
                                        <a href="{{route ('chbook')}}">
                                             <img src="{{asset('/')}}/front-end/img/chlogo.png" class='img-responsive m_4px' style='height:70px; width: 90px; float: left'/>
                                             <span style='float:left; margin-top:6%'>
                                                 Chemical Eng<br>
                                                 <i class='fa fa-camera'></i>
                                             </span>
                                        </a>
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class='panel panel-defaul'>
                        <div class='panel-heading' role='tab' id='heading1'>
                            <h4 class='panel-title'>
                                   <a class='collapsed' role='button' data-toggle='collapse' data-parent='#accordion' href='#collapse5' aria-expanded='false' aria-controls='collapse'>
                                    <div class='row'>
                                        <div class='col-lg-2'>
                                            
                                        </div>
                                        <div class='col-lg-8'>
                                            <a href="{{route('videotut')}}">
                                            <h3>Video of Tutorials for Engineering Students.</h3>
                                            <p>
                                                Our highly qualified expert teachers are...
                                            </p>
                                        </a>
                                        </div>
                                        <div class='col-lg-2'>
                                         <h3></h3>
                                         </div>
                                    </div>
                                </a>
                               
                            </h4>
                        </div>
                       <!-- <div id='collapse5' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading1'>
                            <div class='panel-body' style='border:none !important'>
                    
                                <div class='row'>
                                    <div class='col-lg-3' style='margin-left: 2.6% !important;'>
                                        <a href='chapter_list9819.html?category_id=8&amp;&amp;sub_category_id=16'>
                                             <img src='../public/{{asset('/')}}/front-end/img/jsc.png' class='img-responsive m_4px' style='height:70px; width: 90px; float: left'/>
                                             <span style='float:left; margin-top:6%'>
                                                 JSC<br>
                                                 <i class='fa fa-camera'>&nbsp1</i>
                                             </span>
                                        </a>
                                      
                                    </div>
                                </div>                    
                                <div class='row'>
                                    <div class='col-lg-3' style='margin-left: 2.6% !important;'>
                                        <a href='chapter_list0abb.html?category_id=8&amp;&amp;sub_category_id=17'>
                                             <img src='../public/{{asset('/')}}/front-end/img/ssc.png' class='img-responsive m_4px' style='height:70px; width: 90px; float: left'/>
                                             <span style='float:left; margin-top:6%'>
                                                 SSC<br>
                                                 <i class='fa fa-camera'>&nbsp1</i>
                                             </span>
                                        </a>
                                      
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='col-lg-3' style='margin-left: 2.6% !important;'>
                                        <a href='chapter_list70ca.html?category_id=8&amp;&amp;sub_category_id=18'>
                                             <img src='../public/{{asset('/')}}/front-end/img/hsc.png' class='img-responsive m_4px' style='height:70px; width: 90px; float: left'/>
                                             <span style='float:left; margin-top:6%'>
                                                 HSC<br>
                                                 <i class='fa fa-camera'>&nbsp52</i>
                                             </span>
                                        </a>
                                      
                                    </div>
                                </div>

                            </div>
                        </div>
                    -->
                    </div>
                    
                  



                                </div>
            
       <!-- print_r($data['cat_sub1']['sub_cat_id']);
        <div class='col-lg-3'>
            <div id="f1_container">
                <div id='f1_card'>
                    <div class='front face'>
                        <div class='btn btn-category'>
                            <h2>CATEGORY</h2><hr>
                            <i>TOTAL VIDEO</i>
                        </div>
                    </div>
                    <div class='back face center'>
                        <div class='btn btn-category'>

                        </div>
                    </div>
                </div>
            </div>
        </div>-->
    </div>
    </div>
</div>
@endsection