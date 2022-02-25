@extends('layouts.layout')

@section('content')

<div class="servicespage">
<form action="/deals">
<div class="container">

                    <div class="row">
                      <div class="col-sm-12 overall-tit-serv">
                      
                        <center>
                      <div class="Tit-serv">
                        
                        <h2 class="border-title aligncenter" style="text-align: center;">
                          {{$info['Salon_name']}} Services                 
                        </h2>
                        
                      </div>
                      <div class="line-serv">
                        
                          <img src="/services/heading-bottom.png">
                        
                      </div>
                      </center>
                        
                      </div>
                    </div>  

          <div class="row ser-main">
                    <div class="col-sm-6">
                      <div class="serv-ti-ca">
                         <a class="serv-ti-ca" href="/deals/men_services/{{$info['id']}}"><h3> MEN</h3></a>
                      </div>
                      
                      
                         <div class="dt-sc-one-half first">
                      <div class="dt-sc-service type2 left">                            
                            <figure class="gallery-thumb">
                                <img class="attachment-gallery-with-shape first-img" title="" alt="" src="/services/Men-Hair-cut.png" style="height: 130px">
                                <img class="attachment-gallery-with-shape second-img" title="" alt="" src="/services/Men-Hair-cut.png" style="height: 130px">
                            </figure>      
                            <h3 class="gallery-details"><a href="/deals/men_services/{{$info['id']}}">CUTTING</a></h3>    
                            <p class="dt-sc-price-tag">Start From<span>Rs. 200</span></p>                  
                        </div>
                        <div class="dt-sc-service type2 left">                            
                            <figure class="gallery-thumb">
                                <img class="attachment-gallery-with-shape first-img" title="" alt="" src="/services/Shave-foam.png" style="height: 130px">
                                <img class="attachment-gallery-with-shape second-img" title="" alt="" src="/services/Shave-foam.png" style="height: 130px">
                            </figure>      
                            <h3 class="gallery-details"><a href="/deals/men_services/{{$info['id']}}">BEARD</a></h3>    
                            <p class="dt-sc-price-tag">Start From<span>Rs. 150</span></p>                  
                        </div>
                        <div class="dt-sc-service type2 left">                            
                            <figure class="gallery-thumb">
                                <img class="attachment-gallery-with-shape first-img" title="" alt="" src="/services/Bread-trim.png" style="height: 130px">
                                <img class="attachment-gallery-with-shape second-img" title="" alt="" src="/services/Bread-trim.png" style="height: 130px">
                            </figure>      
                            <h3 class="gallery-details"><a href="/deals/men_services/{{$info['id']}}">Styling</a></h3>    
                            <p class="dt-sc-price-tag">Start From<span>Rs. 400</span></p>                  
                        </div>
                        <a href="/deals/men_services/{{$info['id']}}">
                        <div class="dt-sc-partial-container">
                          <h4 class="dt-sc-partial left">M<br>E<br>N</h4>
                        </div>
                      </a>
                    </div>  


                    </div>  
                    <div class="col-sm-6">
                      <div class="serv-ti-ca">
                        <a href="/deals/women_services/{{$info['id']}}"><h3 > WOMEN</h3></a>
                      </div>
                      
                              <div class="dt-sc-one-half">
                      <div class="dt-sc-service type2 right">                            
                            <figure class="gallery-thumb">
                                <img class="attachment-gallery-with-shape first-img" title="" alt="" src="/services/Spa-and-facials.png" style="height: 130px">
                                <img class="attachment-gallery-with-shape second-img" title="" alt="" src="/services/Spa-and-facials.png" style="height: 130px">
                            </figure>      
                            <h3 class="gallery-details"><a href="/deals/women_services/{{$info['id']}}">Facial</a></h3>    
                            <p class="dt-sc-price-tag">Start From<span>Rs. 200</span></p>                  
                        </div>
                        <div class="dt-sc-service type2 right">                            
                            <figure class="gallery-thumb">
                                <img class="attachment-gallery-with-shape first-img" title="" alt="" src="/services/Hair-care.png" style="height: 130px">
                                <img class="attachment-gallery-with-shape second-img" title="" alt="" src="/services/Hair-care.png" style="height: 130px">
                            </figure>      
                            <h3 class="gallery-details"><a href="/deals/women_services/{{$info['id']}}">Hair</a></h3>    
                            <p class="dt-sc-price-tag">Start From<span>Rs. 150</span></p>                  
                        </div>
                        <div class="dt-sc-service type2 right">                            
                            <figure class="gallery-thumb">
                                <img class="attachment-gallery-with-shape first-img" title="" alt="" src="/services/Bridal-hair.png" style="height: 130px">
                                <img class="attachment-gallery-with-shape second-img" title="" alt="" src="/services/Bridal-hair.png" style="height: 130px">
                            </figure>      
                            <h3 class="gallery-details"><a href="/deals/women_services/{{$info['id']}}">Bridal</a></h3>    
                            <p class="dt-sc-price-tag">Start From<span>Rs. 400</span></p>                  
                        </div>

                        <a href="/deals/women_services/{{$info['id']}}">
                          <div class="dt-sc-partial-container right">
                            <h4 class="dt-sc-partial right">W<br>O<br>M<br>E<br>N</h4>
                          </div>
                        </a>
                    </div>  

                    </div>  
                     </div>

                       <div class="row serv-buon-main">
                      <div class="col-sm-6">
                        <div class="buon">
                          <div class="buon-desc">
                            <CENTER><a href="/deals/men_services/{{$info['id']}}">ALL MEN SERVICES</a></CENTER>
                            
                          </div>
                        </div>
                      </div>

                      <div class="col-sm-6">
                         <div class="buon">
                           <div class="buon-desc">
                            <CENTER> <a href="/deals/women_services/{{$info['id']}}">ALL WOMEN SERVICES</a></CENTER>
                             
                          </div>
                         </div>
                      </div>
                    </div>


















          


                    <br><br>
                    <hr>
                    <br>
                  <div class="row">
                    <div class="col-sm-6">

                  <h2 class="border-title aligncenter animate" data-delay="100" data-animation="animated fadeInDown">
                    Design & Cut Styles we do                         
                    </h2>



                    
                      <p style="color: black;">Salon Today is Pakistan's first online salon booking portal that allows you to book appointments 24/7 at wide range of salons and spas free of charge in just a few simple clicks. You also get to enjoy & experience a lot more through the daily offers, discounts & promotions.</p>
                      <br>
                        <div class="clear-serv">
                          <ul class="dt-sc-fancy-list scissor"> 
                          <li>MEN & WOMEN'S CUTS</li>
                            <li>Hair Color Services</li>
                            <li>Hair Styling Services</li>
                            <li>Facial Treatments</li>
                            <li>Pre-Bridal Package</li>
                            <li>Waxing - WOMEN</li>
                        </ul>
                        </div>
                        
                    </div>
                    <div class="col-sm-6">
                      <img class="dt-sc-border-radius" title="" alt="" src="/HL_M116_07.png" style="">
                    </div>
                

                      </div>
                      <hr>

 

</div>
  </form>
  </div>

  <br><br><br><br>

@endsection