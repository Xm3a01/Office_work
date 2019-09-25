@extends('layouts.defult')
@section('content')
    
<div class="site-section bg-light  " style="padding-top:160px;"> 
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-lg-8 mb-5">  
            <div class="bg-white"> 
                <h3 class="p-3"> نشاط المستخدم</h3> 
                <div class="row px-3">
                  <div class="col-sm-6 col-md-4 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="100">
                    <a href="#" class="h-100 feature-item"> 
                      <h2>دخول المستخدم</h2>
                      <span class="counting px-2">10 </span>
                    </a>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="200">
                    <a href="#" class="h-100 feature-item"> 
                      <h2>الوظائف المُعلنة حاليًّا</h2>
                      <span class="counting px-2">19 </span>
                    </a>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="300">
                    <a href="#" class="h-100 feature-item"> 
                      <h2>وظائف مُعلن عنها</h2>
                      <span class="counting px-2">1 </span>
                    </a>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="400">
                    <a href="#" class="h-100 feature-item"> 
                      <h2>مشاهدات السيرالذاتية</h2>
                      <span class="counting px-2">1 </span>
                    </a>
                  </div> 
                  <div class="col-sm-6 col-md-4 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="800">
                    <a href="#" class="h-100 feature-item"> 
                      <h2>المُتقدمون في الصندوق الوارد</h2>
                      <span class="counting px-2">32 </span>
                    </a>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="800">
                    <a href="#" class="h-100 feature-item"> 
                      <h2>المُتقدمون المختارون</h2>
                      <span class="counting px-2">3  </span>
                    </a>
                  </div>
                </div>
                 </div>
                 <div class="mt-5">
                  <div class="row ">
                    <div class="col-md-6">
                      <div class="m-2 bg-white p-3  ">
                        <strong><h4 class="p-3 text-center">بيانات المتقدمين</h4> </strong>
                        <div class=" d-flex d-md-flex"> 
                                <img src=" {{asset('asset/images/person_1.jpg')}} " alt="Image" class="rounded-circle  img-fluid p-1 w-30" width="25%">
                                <div class="px-3"> 
                                    <p class="m-0 pt-1 font-weight-bold"><a href="">moh</a></p>
                                    <p class="m-0">dev</p> 
                                   </div>
                              </div>
                          <hr class="m-0">
                          <div class=" d-flex d-md-flex"> 
                                <img src=" {{asset('asset/images/person_1.jpg')}} " alt="Image" class="rounded-circle  img-fluid p-1 w-30" width="25%">
                                <div class="px-3"> 
                                    <p class="m-0 pt-1 font-weight-bold"><a href="">moh</a></p>
                                    <p class="m-0">web developer</p> 
                                   </div>
                              </div>
                               <hr class="m-0">
                               <div class=" d-flex d-md-flex"> 
                                    <img src=" {{asset('asset/images/person_1.jpg')}} " alt="Image" class="rounded-circle  img-fluid p-1 w-30" width="25%">
                                    <div class="px-3"> 
                                        <p class="m-0 pt-1 font-weight-bold"><a href="">moh ahmed</a></p>
                                        <p class="m-0">dev</p> 
                                       </div>
                                  </div>
                        </div>
                    </div>
                     
                            <div class="col-md-6">
                                    <div class="m-2 bg-white">
                                    <strong><h4 class="p-4 text-center">الوظائف المعلنة</h4> </strong> 
                                      <div class="px-3"> 
                                              <div class="text-center">
                                                <img src=" {{asset('asset/images/sadIcon.png')}} " alt="Image" class="img-fluid p-5">
                                               <p class="pb-3">
                                                    ما من طلبات جديدة. قم بالإعلان عن وظيفة جديدة وابدأ بتلقي الطلبات. </p>
                                               <div class="pb-3">
                                                  <button class="btn btn-primary " type="button" >اعلن عن وظيفة </button>
                                                </div>
                                            </div> 
                                        </div>
                                      </div>
                                  </div>
                          
                    </div>
                  </div>
                 </div>
             
          
           
          <div class="col-md-4 col-lg-4 mb-5">  
              <form action="#" class="px-3 py-2 bg-white"> 
                      <h5 class="p-2">بحث سريع عن السير الذاتية</h5>
                        <div class="row form-group">
                          <div class="col-md-12">
                            <label class="font-weight-bold" for="email">المسمي الوظيفي</label>
                            <input type="email" id="email" class="form-control" placeholder="مثال: مدير الموارد البشرية">
                          </div> 
                        <div class="form-group col-md-12">
                              <label for="inputState" style="font-weight: 600;">البلد</label>
                              <select id="inputState" class="form-control">
                                <option>الامارات</option>
                                <option>السعودية</option>
                              </select>
                            </div> 
                          </div>
                        <div class="row form-group">
                          <div class="col-md-12">
                            <input type="submit" value="ابحث الان" class="btn btn-primary btn-block px-3">
                          </div>
                        </div> 
                      </form> 
                      
                    <div class=" mt-5 ">
                        <div class="card p-3 text-center" style="border-radius: 5px; background: linear-gradient(124.25deg, #b0f3f7 0%, #01a0c7 100%);">
                            <div class="card-head  py-3">
                              <b>ابدأ بالتوظيف الآن!</b>
                                    </div>
                                    <div class="card-content is-stretched t-inverse">
                                        <i class="icon is-research is-48 t-light"></i>
                                        <h3 class="t-inverse m20y">أسبوعين من البحث عن السير الذاتية</h3>
                                       <h2 class="t-inverse py-3">$675</h2>
                                <form name="process_cart5117" id="checkout-form5117" method="post"   class="p20y">
                                     <button type="submit"  class="btn btn-primary">اضف إلى السلة </button>
                                </form>
                              </div>
                         </div> 
                    </div>
                  </div>  
                </div>
              </div>
            </div> 

@endsection