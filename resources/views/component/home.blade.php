@extends('root.main')
@section('main')
<div class="container">
            <div class="row ">
               <div class="col-12 col-lg-6 col-md-12 height d-flex align-items-center text-left">
                  <div class="text d-flex align-items-center">
                     <div class="position-relative">
                        
                        <div class="shape bg-dot primary rellax w-17 h-21" data-rellax-speed="1" style="top: -9rem; left: -2.9rem; transform: translate3d(0px, 133px, 0px);"></div>
                        <div class="row gx-md-5 gy-5">
                           <div class="col-lg-4 mt-0 offset-lg-1 col-md-4 offset-md-1 col-5 align-self-end">
                              <a href="{{route('state_login')}}" class="d-block wow fadeIn animated  animated" data-wow-duration="2s" data-wow-delay="450ms" style="visibility: visible; animation-duration: 2s; animation-delay: 450ms; animation-name: fadeIn;">
                                 <figure class="rounded state">
                                    <img class="shadow-lg" src="http://wbmdfcscholarship.org/new_site/images/state.jpg" alt="">
                                    <h4>State's Area</h4>
                                 </figure>
                              </a>
                           </div>
                           <div class="col-lg-6 col-md-6 mt-0 col-7">
                              <a href="{{route('login')}}" class="d-block  wow fadeIn animated  animated" data-wow-duration="2s" data-wow-delay="250ms" style="visibility: visible; animation-duration: 2s; animation-delay: 250ms; animation-name: fadeIn;">
                                 <figure class="rounded student">
                                    <img class="shadow-lg" src="http://wbmdfcscholarship.org/new_site/images/students.jpg">
                                    <h4>Student's Area</h4>
                                 </figure>
                              </a>
                           </div>
                           <div class="col-lg-4 col-5 align-self-start">
                              <a href="{{route('institute_login')}}" class="d-block wow fadeIn  animated animated" data-wow-duration="2s" data-wow-delay="650ms" style="visibility: visible; animation-duration: 2s; animation-delay: 650ms; animation-name: fadeIn;">
                                 <figure class="rounded institute">
                                    <img class="shadow-lg" src="http://wbmdfcscholarship.org/new_site/images/instiutions.jpg" alt="">
                                    <h4>Institute's Area</h4>
                                 </figure>
                              </a>
                           </div>
                           <!--/column -->
                        </div>
                        <div class="shape rounded-circle bg-line primary rellax w-18 h-18" data-rellax-speed="1" style="bottom: -2rem; right: -1.9rem; transform: translate3d(0px, -4px, 0px);"></div>                   
                     </div>
                  </div>
               </div>
              
            </div>
         </div>
         
      </section>
      
@endsection