@extends('layouts.defult')
@section('content')
    
    
<div class="unit-5 overlay" style="background-image: url(' {{asset('asset/images/hero_1.jpg')}} ');">
    <div class="container text-center">
      <h2 class="mb-0">عن الشركة</h2>
      <p class="mb-0 unit-6"><a href="index.html">الرئيسية</a> <span class="sep">></span> <span>عنا</span></p>
    </div>
  </div>

  
  <div class="site-section" data-aos="fade">
    <div class="container">
      <div class="row align-items-center">
            <div class="col-md-6 ml-auto">
                    <div class="text-left mb-5 section-heading">
                      <h2>عن الشركة</h2>
                    </div> 
                    <p class="mb-4 h5 font-italic lineheight1-5">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, nisi Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit nobis magni eaque velit eum, id rem eveniet dolor possimus voluptas..&rdquo;</p>
                    <p>&mdash; <strong class="text-black font-weight-bold">John Holmes</strong>, Marketing Strategist</p>
                    <p><a href="https://vimeo.com/28959265" class="popup-vimeo text-uppercase">شاهد الفيديو  <span class="icon-arrow-left small"></span></a></p>
                  </div>
        <div class="col-md-6 mb-5 mb-md-0"> 
            <div class="img-border">
              <a href="https://vimeo.com/28959265" class="popup-vimeo image-play">
                <span class="icon-wrap">
                  <span class="icon icon-play"></span>
                </span>
                <img src=" {{asset('asset/images/hero_1.jpg')}} " alt="Image" class="img-fluid rounded">
              </a>
            </div> 
        </div>
       
      </div>
    </div>
  </div>
  

  <div class="site-section bg-light mt-5">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <!-- <div class="col-md-7 text-center"> -->
          <div class="col-md-6 text-center mb-2 section-heading">
            <h2 class="mb-5">فريق العمل</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum magnam illum maiores adipisci pariatur, eveniet.</p>
          </div>
          
        <!-- </div> -->
      </div>
      <div class="row team pb-5"">
        <div class="col-lg-2 col-md-4 col-sm-6 col-12" data-aos="fade" data-aos-delay="100">
          <a href="#" class="person">
            <img src=" {{asset('asset/images/person_1.jpg')}} " alt="Image placeholder">
            <h2>Michelle Megan</h2>
            <p>CEO, Co-founder</p>
          </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-12" data-aos="fade" data-aos-delay="200">
          <a href="#" class="person">
            <img src=" {{asset('asset/images/hero_1.jpg')}} " alt="Image placeholder">
            <h2>Mike Stellar</h2>
            <p>CTO Co-founder</p>
          </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-12" data-aos="fade" data-aos-delay="300">
          <a href="#" class="person">
            <img src="images/person_3.jpg" alt="Image placeholder">
            <h2>Gregg White</h2>
            <p>VP Producer</p>
          </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-12" data-aos="fade" data-aos-delay="400">
          <a href="#" class="person">
            <img src="{{asset('asset/images/person_2.jpg')}}" alt="Image placeholder">
            <h2>Rogie Knitt</h2>
            <p>Project Manager</p>
          </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-12" data-aos="fade" data-aos-delay="500">
          <a href="#" class="person">
            <img src="images/person_1.jpg" alt="Image placeholder">
            <h2>Ben Koh</h2>
            <p>Project Manager</p>
          </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-12" data-aos="fade" data-aos-delay="600">
          <a href="#" class="person">
            <img src="{{asset('asset/images/person_3.jpg')}}" alt="Image placeholder">
            <h2>Chris Stanworth</h2>
            <p>Product Designer</p>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- END section -->


@endsection