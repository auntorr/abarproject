@extends('front-end.master')
@section('hd')


        
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
                                            <a href="#">
                                            <h3>Engineering Mathematics</h3>
                                        
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
                                            <a href="">
                                            <h3>Physics</h3>
                                            <p>
                                                
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
                      

                        </div>
                    
                    
                    <div class='panel panel-defaul'>
                        <div class='panel-heading' role='tab' id='heading0'>
                            <h4 class='panel-title'>
                                   <a role='button' data-toggle='collapse' data-parent='#accordion' href='#collapse3' aria-expanded='true' aria-controls='collapse0'>
                                    <div class='row'>
                                        <div class='col-lg-2'>
                                            
                                        </div>
                                        <div class='col-lg-8'>
                                            <a><h3>Engineering Mechanics</h3>
                                            <p>
                                                
                                            </p></a>
                                        </div>
                                         <div class='col-lg-2'>
                                         <h3></h3>
                                         </div>
                                    </div>
                                </a>
                               
                            </h4>
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
                                            <a><h3>Basic Fluid Mechanics</h3>
                                            <p>
                                                
                                            </p></a>
                                        </div>
                                        <div class='col-lg-2'>
                                         <h3></h3>
                                         </div>
                                    </div>
                                </a>
                               
                            </h4>
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
                                            <a><h3>Engineering Drawing</h3>
                                            <p>
                                                
                                            </p></a>
                                        </div>
                                        <div class='col-lg-2'>
                                         <h3></h3>
                                         </div>
                                    </div>
                                </a>
                               
                            </h4>
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
                                            <a><h3>Properties and Mechanics of Materials</h3>
                                            <p>
                                                
                                            </p></a>
                                        </div>
                                        <div class='col-lg-2'>
                                         <h3></h3>
                                         </div>
                                    </div>
                                </a>
                               
                            </h4>
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
                                            <a><h3>Chemical Engineering Thermodynamics</h3>
                                            <p>
                                                
                                            </p></a>
                                        </div>
                                        <div class='col-lg-2'>
                                         <h3></h3>
                                         </div>
                                    </div>
                                </a>
                               
                            </h4>
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
                                            <a><h3>Unit Operation Practice</h3>
                                            <p>
                                                
                                            </p></a>
                                        </div>
                                        <div class='col-lg-2'>
                                         <h3></h3>
                                         </div>
                                    </div>
                                </a>
                               
                            </h4>
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
                                            <a><h3>Industrial Stoichiornetry</h3>
                                            <p>
                                                
                                            </p></a>
                                        </div>
                                        <div class='col-lg-2'>
                                         <h3></h3>
                                         </div>
                                    </div>
                                </a>
                               
                            </h4>
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
                                            <a><h3>Process Design</h3>
                                            <p>
                                                
                                            </p></a>
                                        </div>
                                        <div class='col-lg-2'>
                                         <h3></h3>
                                         </div>
                                    </div>
                                </a>
                               
                            </h4>
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
                                            <a><h3>Heat and Mass and Momentum Transfer</h3>
                                            <p>
                                                
                                            </p></a>
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
                                            <a href="#">
                                            <h3>Chemical Engineering and Thermodynamics</h3>
                                            
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
                                            <a href="">
                                            <h3>Computer Fundamentals</h3>
                                            <p>
                                                
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
                      

                        </div>
                    
                    
                    <div class='panel panel-defaul'>
                        <div class='panel-heading' role='tab' id='heading0'>
                            <h4 class='panel-title'>
                                   <a role='button' data-toggle='collapse' data-parent='#accordion' href='#collapse3' aria-expanded='true' aria-controls='collapse0'>
                                    <div class='row'>
                                        <div class='col-lg-2'>
                                            
                                        </div>
                                        <div class='col-lg-8'>
                                            <a><h3>Kinetics and Reactor Design</h3>
                                            <p>
                                                
                                            </p></a>
                                        </div>
                                         <div class='col-lg-2'>
                                         <h3></h3>
                                         </div>
                                    </div>
                                </a>
                               
                            </h4>
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
                                            <a><h3>Fuel Technology</h3>
                                            <p>
                                                
                                            </p></a>
                                        </div>
                                        <div class='col-lg-2'>
                                         <h3></h3>
                                         </div>
                                    </div>
                                </a>
                               
                            </h4>
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
                                            <a><h3>Mathematical and Computational Method</h3>
                                            <p>
                                            
                                            </p></a>
                                        </div>
                                        <div class='col-lg-2'>
                                         <h3></h3>
                                         </div>
                                    </div>
                                </a>
                               
                            </h4>
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
                                            <a><h3>corrosion</h3>
                                            <p>
                                                
                                            </p></a>
                                        </div>
                                        <div class='col-lg-2'>
                                         <h3></h3>
                                         </div>
                                    </div>
                                </a>
                               
                            </h4>
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
                                            <a><h3>Chemical Economics and Managements</h3>
                                            <p>
                                                
                                            </p></a>
                                        </div>
                                        <div class='col-lg-2'>
                                         <h3></h3>
                                         </div>
                                    </div>
                                </a>
                               
                            </h4>
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
                                            <a><h3>Fertilizer pulp paper tech</h3>
                                            <p>
                                                
                                            </p></a>
                                        </div>
                                        <div class='col-lg-2'>
                                         <h3></h3>
                                         </div>
                                    </div>
                                </a>
                               
                            </h4>
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
                                            <a><h3>Process Control</h3>
                                            <p>
                                                
                                            </p></a>
                                        </div>
                                        <div class='col-lg-2'>
                                         <h3></h3>
                                         </div>
                                    </div>
                                </a>
                               
                            </h4>
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
                                            <a><h3>Natural gas and refined Technology</h3>
                                            <p>
                                                
                                            </p></a>
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