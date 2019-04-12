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
                                            <h3>All departments</h3>
                                            <p>
                                                
                                        </div>
                                         <div class='col-lg-2'>
                                         <h3><img src="{{asset('/')}}/front-end/img/arrow_bottom.png" style=''/></h3>
                                         </div>
                                    </div>
                                </a>
                               
                            </h4>
                        </div>
                        <div id='collapse2' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading0'>
                            <div class='panel-body' style='border:none !important'>
                               <div class='row'>
                                    <div class='col-lg-3' style='margin-left: 2.6% !important;'>
                                        <a href="math1.html">
                                             <img src="{{asset('/')}}/front-end/img/blogo.jpg" class='img-responsive m_4px' style='height:70px; width: 90px; float: left'/>
                                             <span style='float:left; margin-top:6%'>
                                                 Math1<br>
                                                 <i class='fa fa-camera'>&nbsp31</i>
                                             </span>
                                        </a>
                                      
                                    </div>
                                </div>
            
                                   <div class='row'>
                                    <div class='col-lg-3' style='margin-left: 2.6% !important;'>
                                        <a href="math1.html">
                                             <img src="{{asset('/')}}/front-end/img/blogo.jpg" class='img-responsive m_4px' style='height:70px; width: 90px; float: left'/>
                                             <span style='float:left; margin-top:6%'>
                                                 Math2<br>
                                                 <i class='fa fa-camera'>&nbsp61</i>
                                             </span>
                                        </a>
                                      
                                    </div>
                                    </div>
                                    <div class='row'>
                                     <div class='col-lg-3' style='margin-left: 2.6% !important;'>
                                         <a href="math1.html">
                                              <img src="{{asset('/')}}/front-end/img/blogo.jpg" class='img-responsive m_4px' style='height:70px; width: 90px; float: left'/>
                                              <span style='float:left; margin-top:6%'>
                                                  Physics<br>
                                                  <i class='fa fa-camera'>&nbsp39</i>
                                              </span>
                                         </a>
                                       
                                     </div>
                                     </div>
                                    <div class='row'>
                                     <div class='col-lg-3' style='margin-left: 2.6% !important;'>
                                         <a href="math1.html">
                                              <img src="{{asset('/')}}/front-end/img/blogo.jpg" class='img-responsive m_4px' style='height:70px; width: 90px; float: left'/>
                                              <span style='float:left; margin-top:6%'>
                                                  Fluid<br>
                                                  <i class='fa fa-camera'>&nbsp84</i>
                                              </span>
                                         </a>
                                       
                                     </div>
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
                                            <h3>Electrical and Electronic Engineering</h3>
                                            <p>
                                                
                                            </p>
                                        </div>
                                        <div class='col-lg-2'>
                                         <h3><img src="{{asset('/')}}/front-end/img/arrow_bottom.png" style=''/></h3>
                                         </div>
                                    </div>
                                </a>
                               
                            </h4>
                        </div>
                        <div id='collapse4' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading1'>
                            <div class='panel-body' style='border:none !important'>
                    
                                <div class='row'>
                                    <div class='col-lg-3' style='margin-left: 2.6% !important;'>
                                        <a href="math1.html">
                                             <img src=" {{asset('/')}}/front-end/img/blogo.jpg" class='img-responsive m_4px' style='height:70px; width: 90px; float: left'/>
                                             <span style='float:left; margin-top:6%'>
                                                 Subject<br>
                                                 <i class='fa fa-camera'></i>
                                             </span>
                                        </a>
                                      
                                    </div>
                                </div>                    
                                <div class='row'>
                                    <div class='col-lg-3' style='margin-left: 2.6% !important;'>
                                        <a href="math1.html">
                                             <img src="{{asset('/')}}/front-end/img/blogo.jpg" class='img-responsive m_4px' style='height:70px; width: 90px; float: left'/>
                                             <span style='float:left; margin-top:6%'>
                                                 Subject<br>
                                                 <i class='fa fa-camera'></i>
                                             </span>
                                        </a>
                                      
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='col-lg-3' style='margin-left: 2.6% !important;'>
                                        <a href=href="math1.html">
                                             <img src="{{asset('/')}}/front-end/img/blogo.jpg" class='img-responsive m_4px' style='height:70px; width: 90px; float: left'/>
                                             <span style='float:left; margin-top:6%'>
                                                 Subject<br>
                                                 <i class='fa fa-camera'></i>
                                             </span>
                                        </a>
                                      
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='col-lg-3' style='margin-left: 2.6% !important;'>
                                        <a href="math1.html">
                                             <img src="{{asset('/')}}/front-end/img/blogo.jpg" class='img-responsive m_4px' style='height:70px; width: 90px; float: left'/>
                                             <span style='float:left; margin-top:6%'>
                                                 Subject<br>
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
                                            <h3>Civil Eng</h3>
                                            <p>
                                               
                                            </p>
                                        </div>
                                        <div class='col-lg-2'>
                                         <h3><img src="{{asset('/')}}/front-end/img/arrow_bottom.png" class='img-responsive' style=''/></h3>
                                         </div>
                                    </div>
                                </a>
                               
                            </h4>
                        </div>
                        <div id='collapse5' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading1'>
                            <div class='panel-body' style='border:none !important'>
                    
                                <div class='row'>
                                    <div class='col-lg-3' style='margin-left: 2.6% !important;'>
                                        <a href="math1.html">
                                             <img src="{{asset('/')}}/front-end/img/blogo.jpg" class='img-responsive m_4px' style='height:70px; width: 90px; float: left'/>
                                             <span style='float:left; margin-top:6%'>
                                                 Subject<br>
                                                 <i class='fa fa-camera'></i>
                                             </span>
                                        </a>
                                      
                                    </div>
                                </div>                    
                                <div class='row'>
                                    <div class='col-lg-3' style='margin-left: 2.6% !important;'>
                                        <a href="math1.html">
                                             <img src="{{asset('/')}}/front-end/img/blogo.jpg" class='img-responsive m_4px' style='height:70px; width: 90px; float: left'/>
                                             <span style='float:left; margin-top:6%'>
                                                 Subject<br>
                                            
                                             </span>
                                        </a>
                                      
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='col-lg-3' style='margin-left: 2.6% !important;'>
                                        <a href="math1.html">
                                             <img src="{{asset('/')}}/front-end/img/blogo.jpg" class='img-responsive m_4px' style='height:70px; width: 90px; float: left'/>
                                             <span style='float:left; margin-top:6%'>
                                                 Subject<br>
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
                                   <a class='collapsed' role='button' data-toggle='collapse' data-parent='#accordion' href='#collapse7' aria-expanded='false' aria-controls='collapse'>
                                    <div class='row'>
                                        <div class='col-lg-2'>
                                           
                                        </div>
                                        <div class='col-lg-8'>
                                            <h3>Mechanical Engineering</h3>
                                            <p>
                                                
                                            </p>
                                        </div>
                                        <div class='col-lg-2'>
                                         <h3><img src="{{asset('/')}}/front-end/img/arrow_bottom.png" class='img-responsive' style=''/></h3>
                                         </div>
                                    </div>
                                </a>
                               
                            </h4>
                        </div>
                        <div id='collapse7' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading1'>
                            <div class='panel-body' style='border:none !important'>

                                <div class='row'>
                                    <div class='col-lg-3' style='margin-left: 2.6% !important;'>
                                        <a href="math1.html">
                                             <img src="{{asset('/')}}/front-end/img/blogo.jpg" class='img-responsive m_4px' style='height:70px; width: 90px; float: left'/>
                                             <span style='float:left; margin-top:6%'>
                                                 Subject<br>
                                                 <i class='fa fa-camera'></i>
                                             </span>
                                        </a>
                                      
                                    </div>
                                </div>  
                                <div class='row'>
                                    <div class='col-lg-3' style='margin-left: 2.6% !important;'>
                                        <a href="math1.html">
                                             <img src="{{asset('/')}}/front-end/img/blogo.jpg" class='img-responsive m_4px' style='height:70px; width: 90px; float: left'/>
                                             <span style='float:left; margin-top:6%'>
                                                 Subject<br>
                                                 <i class='fa fa-camera'></i>
                                             </span>
                                        </a>
                                      
                                    </div>
                                </div>  
                                <div class='row'>
                                    <div class='col-lg-3' style='margin-left: 2.6% !important;'>
                                        <a href="math1.html">
                                             <img src="{{asset('/')}}/front-end/img/blogo.jpg" class='img-responsive m_4px' style='height:70px; width: 90px; float: left'/>
                                             <span style='float:left; margin-top:6%'>
                                                 Subject<br>
                                                 <i class='fa fa-camera'></i>
                                             </span>
                                        </a>
                                      
                                    </div>
                                </div>                                  
                                <div class='row'>
                                    <div class='col-lg-3' style='margin-left: 2.6% !important;'>
                                        <a href="math1.html">
                                             <img src="{{asset('/')}}/front-end/img/blogo.jpg" class='img-responsive m_4px' style='height:70px; width: 90px; float: left'/>
                                             <span style='float:left; margin-top:6%'>
                                                 Subject<br>
                                                 <i class='fa fa-camera'></i>
                                             </span>
                                        </a>
                                      
                                    </div>
                                </div>                    

                            </div>
                        </div>
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

  
@endsection