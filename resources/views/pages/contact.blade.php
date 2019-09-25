@extends('layouts.defult')
@section('content')
    
   
<div class="unit-5 overlay" style="background-image: url('{{asset('asset/images/hero_1.jpg')}}');">
    <div class="container text-center">
      <h2 class="mb-0">اتصل بنا</h2>
      <p class="mb-0 unit-6"><a href="index.html">الرئيسية</a> <span class="sep">></span> <span>عنا</span></p>
    </div>
  </div> 
 
  <div class="site-section bg-light">
    <h3 class="pb-5 text-center">إتصل بنا</h3>
    <div class="container">
      <div class="row">
     
        <div class="col-md-12 col-lg-8 mb-5"> 
        
          <form action="#" class="p-5 bg-white">

            <div class="row form-group">
              <div class="col-md-12 mb-3 mb-md-0">
                <label class="font-weight-bold" for="fullname">الإسم رباعي</label>
                <input type="text" id="fullname" class="form-control" placeholder="الاسم رباعي">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-md-12">
                <label class="font-weight-bold" for="email">البريد الإلكتروني</label>
                <input type="email" id="email" class="form-control" placeholder="ادخل البريد الإلكتروني">
              </div>
            </div>


            <div class="row form-group">
              <div class="col-md-12 mb-3 mb-md-0">
                <label class="font-weight-bold" for="phone">الهاتف</label>
                <input type="text" id="phone" class="form-control" placeholder="رقم الهاتف">
              </div>
            </div>

            <div class="row form-group">
              <div class="col-md-12">
                <label class="font-weight-bold" for="message">التعليق</label> 
                <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="اترك تعليق مناسب"></textarea>
              </div>
            </div>

            <div class="row form-group">
              <div class="col-md-12">
                <input type="submit" value="إرسال التعليق" class="btn btn-primary pill px-3">
              </div>
            </div>


          </form>
        </div>

        <div class="col-lg-4">
          <div class="p-4 mb-3 bg-white">
            <h3 class="h5 text-black mb-3">معلومات الإتصال</h3>
            <p class="mb-0 font-weight-bold">العنوان</p>
            <p class="mb-4">203 Fake St. Mountain View, San Francisco, California, USA</p>

            <p class="mb-0 font-weight-bold">الهاتف</p>
            <p class="mb-4"><a href="#">+1 232 3235 324</a></p>

            <p class="mb-0 font-weight-bold">البريد الإلكتروني</p>
            <p class="mb-0"><a href="#">youremail@domain.com</a></p>

          </div>
          
          <div class="p-4 mb-3 bg-white">
            <h3 class="h5 text-black mb-3">المزيـد</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa ad iure porro mollitia architecto hic consequuntur. Distinctio nisi perferendis dolore, ipsa consectetur? Fugiat quaerat eos qui, libero neque sed nulla.</p>
            <p><a href="#" class="btn btn-primary px-3 text-white pill">قراءة المزيد</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="py-5 quick-contact-info">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div>
            <h2 class="h4"><span class="icon-room"></span> الموقع </h2>
            <p class="mb-0">New York - 2398 <br>  10 Hadson Carl Street</p>
          </div>
        </div>
        <div class="col-md-4">
          <div>
            <h2 class="h4"><span class="icon-clock-o"></span> مواعيد العمل</h2>
            <p class="mb-0">Wednesdays at 6:30PM - 7:30PM <br>
            Fridays at Sunset - 7:30PM <br>
            Saturdays at 8:00AM - Sunset</p>
          </div>
        </div>
        <div class="col-md-4">
          <h2 class="h4"><span class="icon-comments" ></span> كن علي اتصال </h2>
          <p class="mb-0">Email: info@yoursite.com <br>
          Phone: (123) 3240-345-9348 </p>
        </div>
      </div>
    </div>
  </div>


   

@endsection