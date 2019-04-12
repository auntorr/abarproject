@extends('front-end.master')
@section('hd')
<div class="contents-wrapper">
            <div class="content">
                <h1>Books for Engineering Student</h1>
            </div>
</div>
<div class="container" style="margin-top:-1.5%">
    <div class="well" style="margin-top:0%">
        
        <div class="row">

              <div class="col-lg-12" style="margin-left:18px; margin-bottom:3px">
                <!--<div class="btn-group btn-breadcrumb">
                    <a href="index.html" class="btn btn-default"><i class="glyphicon glyphicon-home"></i></a>
                    <a href="allcategory.html" class="btn btn-default">Class</a>
                    <a href="allcategory.html" class="btn btn-default">HSC 2nd Year</a>
                     <a href="#" class="btn btn-primary">Biology 2nd Paper</a>

                </div>-->

            </div>
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        
                    <div class='panel panel-defaul'>
                        <div class='panel-heading' role='tab' id='heading0'>
                            <h4 class='panel-title'>
                                   <a role='button' data-toggle='collapse' data-parent='#accordion' href="#collapse1" aria-expanded='true' aria-controls='collapse0'>
                                    <div class='row'>
                                        <div class='col-lg-2'>
                                           
                                        </div>
                                        <div class='col-lg-8'>
                                            <a href="{{route('chques2')}}">
                                            <h3>Question papers of previous years</h3>
                                            
                                        </a>
                                        </div>
                                         <div class='col-lg-2'>
                                         <h3></h3>
                                         </div>
                                    </div>
                                </a>
                               
                            </h4>
                        </div>
                    </div>
                       <!-- <div id='collapse1' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading0'>
                            <div class='panel-body' style='border:none !important'>
                               <div class='row'>
                                    <div class='col-lg-3' style='margin-left: 2.6% !important;'>
                                        <a href="{% url 'hello:demo' %}">
                                             <img src='../public/img/physics.png' class='img-responsive m_4px' style='height:70px; width: 90px; float: left'/>
                                             <span style='float:left; margin-top:6%'>
                                                 Science<br>
                                                 <i class='fa fa-camera'>&nbsp78</i>
                                             </span>
                                        </a>
                                      
                                    </div>
                                </div>
           
                            </div>
                        </div>
                    </div> -->
                    
                    <div class='panel panel-defaul'>
                        <div class='panel-heading' role='tab' id='heading0'>
                            <h4 class='panel-title'>
                                   <a role='button' data-toggle='collapse' data-parent='#accordion' href='#collapse2' aria-expanded='true' aria-controls='collapse0'>
                                    <div class='row'>
                                        <div class='col-lg-2'>
                                          
                                        </div>
                                        <div class='col-lg-8'>
                                            <a href="{{route('chsol2')}}">
                                             <h3>Solution of Question papers</h3>
                                            
                                        </a>
                                        </div>
                                         <div class='col-lg-2'>
                                         <h3></h3>
                                         </div>
                                    </div>
                                </a>
                               
                            </h4>
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
</div>




@endsection