@extends('layouts.defult')
@section('content')


<div style="height: 90px;"></div>

 
<div class="site-blocks-cover overlay" style="background-image: url('{{asset('asset/images/hero_1.jpg')}}');" data-aos="fade"
  data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12" data-aos="fade">
        <div class="pb-5">
          <h1 class="h3 text-center">الطريقة الأفضل للحصول على وظيفتك الجديدة</h1>
          <h3 class="h5 text-center">أعثر علي وظائف، موظفين، وفرص عمل</h3>
        </div>
        <form action="#" id="app" {{route('test')}}>
          <div class="row mb-3">
            <div class="col-md-9">
              <div class="row">
                <div class="col-md-6 mb-3 mb-md-0">
                  <div class="input-wrap">
                    <span class="icon icon-keyboard"></span>
                    <input v-model="special" list="special" type="text" class=" form-control border-0 px-3" placeholder="المسمى الوظيفي أو اسم الشركة">
                    <datalist id="special" v-if="special">
                      @foreach ($sub_specials as $sub)   
                       @if(app()->getLocale() == 'en')
                         <option  value="{{$sub->name}} ">
                          @else
                         <option value="{{$sub->ar_name}} ">
                       @endif
                        @endforeach
                        @foreach ($owners as $owner)   
                          <option  value="{{$owner->company_name}} ">
                        @endforeach
                     </datalist>
                  </div>
                </div>
                <div class="col-md-6 mb-3 mb-md-0">
                  <div class="input-wrap">
                    <span class="icon icon-room"></span>
                    <input  v-model = "country" list="country" type="text" class="form-control border-0 px-3"  placeholder="المدينة أو المقاطعة أو المنطقة">
                    <datalist id="country" v-if="country">
                        @foreach ($countries as $county)
                          @foreach ($county->cities as $city)
                           @if(app()->getLocale() == 'ar')
                           <option value="{{$county->ar_name.'-'.$city->ar_name}} ">
                              @else
                           <option value="{{$county->name.'-'.$city->name}} ">
                          @endif
                          @endforeach
                          @if(app()->getLocale() == 'ar')
                            <option value="{{$county->ar_name}} ">
                           @else
                           <option value="{{$county->name}} ">
                          @endif
                           
                        @endforeach
                  </datalist> 
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <input type="submit" class="btn btn-search btn-primary btn-block" value="ابحث عن وظيفة" href="jobsearch.html">
            </div> 
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="search-category">
                <p><b>الفئات الأعلي</b> <a href="javascript:void(0);">#تصميم داخلي</a> | <a href="javascript:void(0);">#تقانة المعلومات</a> | <a href="javascript:void(0);">#رعاية صحية</a>
                </p>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="scroll-to align-content-center">
    <a href="#scroll-here" title=""><img src=" {{asset('asset/images/down-arrow (1).png')}} " alt=""></a>
  </div>
</div>

{{-- categories --}}
<div class="site-section">
    <div class="container-fluid p-0">
      <div class="row m-0" style="width: 100%">
        <div class="col-md-9 text-left mb-5 px-3 section-heading">
          <h3 class="mb-4">التصنيفات الأشهر</h3>
          <div class="row">

            @foreach ($roles as $role)   
            <div class="col-sm-6 col-md-4 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="50">
              <a href="#" class="h-100 feature-item">
                <span class="d-block icon flaticon-calculator mb-3"></span>
                <h2>{{$role->name}}</h2>
                <p>{{$role->specials->count()}}</p>
              </a>
            </div>
            @endforeach

          </div>
          <div class="text-center pt-5" data-aos="fade-up" data-aos-delay="50"><a class="btn"
              href="new-post.html">مزيد من التصنيفات</a>
          </div>
        </div>
        <div class="col-md-3  mb-5 pl-0 section-heading overflow-auto">
            <div class=" m-3  ">
                <div class="card p-3 text-center" style="border-radius: 5px; background: linear-gradient(124.25deg, #b8efef 0%, #ecfafe 100%);">
                    <div class="card-head h4  py-3">
                        طلب العلاج بالخارج 
                            </div>
                            <div class="card-content is-stretched t-inverse">
                                <i class="icon is-research is-48 t-light"></i>
                                <h6 class="t-inverse m20y">تنظيم عملية واجراءات العلاج بالخارج وفقا للوائح والقرارات والأحكام المنظمة لذلك .

                                    اتخاذ الترتيبات المتعلقة بسفر المرضى للعلاج في الخارج ومرافقيهم.</h6>
                               <h5 class="t-inverse py-3 m-4">تخفيضات وعروض جديدة في الانتظار</h5>
                               <p class="text-left m-4">-طلب اعتماد الاجازات المرضية .
<br>
                                  -طلبات الضمان الاجتماعي .
                                  <br>
                                  -طلب تحديد نسب العجز الناتج عن اصابات العمل .
                                  <br>
                                  -طلبات الصلاحية في العمل . 
                                  </p>
                        <form name="process_cart5117" id="checkout-form5117" method="post"   class="py-3">
                             <button type="submit"  class="btn btn-primary text-white">اتصل بنا </button>
                        </form>
                      </div>
                 </div> 
            </div>
          </div>
      </div>
    </div>
  </div>



  {{-- new jops --}}
  <div class="site-section bg-light" id="scroll-here">
    <div class="container">
      <div class="row">
        <div class="col-md-8 mb-5 mb-md-0" data-aos="fade-up" data-aos-delay="100">
          <h3 class="my-4">وظائف جديدة</h3>
          <div class="rounded border jobs-wrap">
          @foreach ($jobs as $job)
             
            <a href="" onclick="event.preventDefault(); document.getElementById('single-form').submit()" class="job-item d-block d-md-flex align-items-center  border-bottom fulltime">
             <div class="company-logo blank-logo text-center text-md-left pl-3">
               <img src="{{Storage::url($job->owner->logo)}}" alt="Image" class="img-fluid mx-auto">
             </div>
             <div class="job-details h-100">
               <div class="p-3 align-self-center">
                 <h3>{{(app()->getLocale() == 'ar') ? $job->ar_role : $job->role }}</h3>
                 <div class="d-block d-lg-flex">
                   <div class="mr-3"><span class="icon-suitcase mr-1"></span> {{(app()->getLocale() == 'ar') ? $job->owner->ar_company_name : $job->owner->company_name }}</div>
                   <div class="mr-3"><span class="icon-room mr-1"></span> {{(app()->getLocale() == 'ar') ? $job->ar_country.' - '.$job->ar_city : $job->country.' - '.$job->city }}</div>
                   <div><span class="icon-money mr-1"></span> {{$job->selary}}</div>
                 </div>
               </div>
             </div>
             <div class="job-category align-self-center">
               <div class="p-3">
                 <span class="text-info p-2 rounded border border-info">{{(app()->getLocale() == 'ar') ? $job->ar_status :$job->status }}</span>
               </div>
             </div>
           </a>

            <form style="display:none" action="{{route('single.job',app()->getLocale())}}" method="get" id="single-form">
              
              <input type="hidden" name="single" value="{{$job->id}}">
            </form>
            @endforeach

            <a href="job-single.html" class="job-item d-block d-md-flex align-items-center freelance">
              <div class="company-logo blank-logo text-center text-md-left pl-3">
                <img src="images/logo_1.png" alt="Image" class="img-fluid mx-auto">
              </div>
              <div class="job-details h-100">
                <div class="p-3 align-self-center">
                  <h3>JavaScript Fullstack Developer</h3>
                  <div class="d-block d-lg-flex">
                    <div class="mr-3"><span class="icon-suitcase mr-1"></span> Cooper</div>
                    <div class="mr-3"><span class="icon-room mr-1"></span> Anywhere</div>
                    <div><span class="icon-money mr-1"></span> $55000 &mdash; 70000</div>
                  </div>
                </div>
              </div>
              <div class="job-category align-self-center">
                <div class="p-3">
                  <span class="text-warning p-2 rounded border border-warning">Freelance</span>
                </div>
              </div>
            </a>
            <a href="job-single.html" class="job-item d-block d-md-flex align-items-center  border-bottom fulltime">
              <div class="company-logo blank-logo text-center text-md-left pl-3">
                <img src="images/company_logo_blank.png" alt="Image" class="img-fluid mx-auto">
              </div>
              <div class="job-details h-100">
                <div class="p-3 align-self-center">
                  <h3>Restaurant Crew</h3>
                  <div class="d-block d-lg-flex">
                    <div class="mr-3"><span class="icon-suitcase mr-1"></span> Resto Bar</div>
                    <div class="mr-3"><span class="icon-room mr-1"></span> Florida</div>
                    <div><span class="icon-money mr-1"></span> $55000 &mdash; 70000</div>
                  </div>
                </div>
              </div>
              <div class="job-category align-self-center">
                <div class="p-3">
                  <span class="text-info p-2 rounded border border-info">Full Time</span>
                </div>
              </div>
            </a>

            <a href="job-single.html" class="job-item d-block d-md-flex align-items-center freelance">
              <div class="company-logo blank-logo text-center text-md-left pl-3">
                <img src="images/logo_1.png" alt="Image" class="img-fluid mx-auto">
              </div>
              <div class="job-details h-100">
                <div class="p-3 align-self-center">
                  <h3>JavaScript Fullstack Developer</h3>
                  <div class="d-block d-lg-flex">
                    <div class="mr-3"><span class="icon-suitcase mr-1"></span> Cooper</div>
                    <div class="mr-3"><span class="icon-room mr-1"></span> Anywhere</div>
                    <div><span class="icon-money mr-1"></span> $55000 &mdash; 70000</div>
                  </div>
                </div>
              </div>
              <div class="job-category align-self-center">
                <div class="p-3">
                  <span class="text-warning p-2 rounded border border-warning">Freelance</span>
                </div>
              </div>
            </a>

            <a href="job-single.html" class="job-item d-block d-md-flex align-items-center partime">
              <div class="company-logo blank-logo text-center text-md-left pl-3">
                <img src="images/logo_2.png" alt="Image" class="img-fluid mx-auto">
              </div>
              <div class="job-details h-100">
                <div class="p-3 align-self-center">
                  <h3>Telecommunication Manager</h3>
                  <div class="d-block d-lg-flex">
                    <div class="mr-3"><span class="icon-suitcase mr-1"></span> Think</div>
                    <div class="mr-3"><span class="icon-room mr-1"></span> London</div>
                  </div>
                </div>
              </div>
              <div class="job-category align-self-center">
                <div class="p-3">
                  <span class="text-danger p-2 rounded border border-danger">Par Time</span>
                </div>
              </div>
            </a>


          </div>

          <div class="col-md-12 text-center p-4" data-aos="fade-up" data-aos-delay="50">
            <a href="#" class="btn rounded p-2 mb-1"><span class="icon-plus-circle"></span>عرض المزيد من الوظائف</a>
          </div>
        </div>
        <div class="col-md-4 block-16" data-aos="fade-up" data-aos-delay="200">
          <div class="d-flex">
            <h2 class="mb-5 h3">وظائف مميزة</h2>
            </div>
          <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner pb-3">

                <div class="carousel-item active">
                    <div class="border rounded p-4 bg-white" style="height:28rem">
                        <h2 class="h5">Javascript Fullstack Developer</h2>
                        <p><span class="border border-warning rounded p-1 px-2 text-warning">Freelance</span></p>
                        <p>
                          <span class="d-block"><span class="icon-suitcase"></span> Resto Bar</span>
                          <span class="d-block"><span class="icon-room"></span> Florida</span>
                          <span class="d-block"><span class="icon-money mr-1"></span> $55000 &mdash; 70000</span>
                        </p>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus accusamus
                          necessitatibus praesentium voluptate natus excepturi rerum, autem. Magnam laboriosam, quam sapiente
                          laudantium iure sit ea! Tenetur, quasi, praesentium. Architecto, eum.</p>
                      </div>
                </div> 
                
                <div class="carousel-item">
                    <div class="border rounded p-4 bg-white" style="height:28rem">
                        <h2 class="h5">طاقم مطعم</h2>
                        <p><span class="border border-warning rounded p-1 px-2 text-warning">Freelance</span></p>
                        <p>
                          <span class="d-block"><span class="icon-suitcase"></span>Luxury Restaurant</span>
                          <span class="d-block"><span class="icon-room"></span> khartoum</span>
                          <span class="d-block"><span class="icon-money mr-1"></span> $55000 &mdash; 70000</span>
                        </p>
                        <p class="mb-0 align-right">لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود
                          تيمبور
                          أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                          كيو أوفيسيا ديسيريونتموليت انيم أيدي ايست لابوريوم كيو أوفيسيا ديسيريونتموليت انيم أيدي ايست لابوريوم.
                        </p>
                    </div>
                </div> 
              </div> 
            </div> 
        </div>
      </div>
    </div>
  </div>



  {{-- dream job --}}
<div class="site-blocks-cover overlay inner-page" style="background-image: url('{{asset('asset/images/hero_1.jpg')}}');"
  data-aos="fade" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-md-6 text-center" data-aos="fade">
        <h1 class="h3 mb-0">وظيفة احلامك هنا</h1>
        <p class="h3 text-white mb-5">لاتدع الفرصة تفوتك</p>
        <p><a href="#" class="btn btn-outline-info p-3">Find Jobs</a> <a href="#" class="btn btn-info p-3">Apply For
            A Job</a></p>

      </div>
    </div>
  </div>
</div>



{{-- why choose us --}}
<div class="site-section site-block-feature bg-light">
    <div class="container">

      <div class="text-center mb-5 section-heading">
        <h2>لماذا نحن؟</h2>
      </div>

      <div class="d-block d-md-flex">
        <div class="text-center p-4 item " data-aos="fade">
          <span class="flaticon-worker display-3 mb-3 d-block text-primary"></span>
          <h2 class="h4">More Jobs Every Day</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati reprehenderit explicabo quos fugit
            vitae dolorum.</p>
          <p><a href="#">Read More <span class="icon-arrow-right small"></span></a></p>
        </div>
        <div class="text-center p-4 item" data-aos="fade">
          <span class="flaticon-wrench display-3 mb-3 d-block text-primary"></span>
          <h2 class="h4">Creative Jobs</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati reprehenderit explicabo quos fugit
            vitae dolorum.</p>
          <p><a href="#">Read More <span class="icon-arrow-right small"></span></a></p>
        </div>
      </div>
      <div class="d-block d-md-flex">
        <div class="text-center p-4 item" data-aos="fade">
          <span class="flaticon-stethoscope display-3 mb-3 d-block text-primary"></span>
          <h2 class="h4">Healthcare</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati reprehenderit explicabo quos fugit
            vitae dolorum.</p>
          <p><a href="#">Read More <span class="icon-arrow-right small"></span></a></p>
        </div>
        <div class="text-center p-4 item" data-aos="fade">
          <span class="flaticon-calculator display-3 mb-3 d-block text-primary"></span>
          <h2 class="h4">Finance &amp; Accounting</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati reprehenderit explicabo quos fugit
            vitae dolorum.</p>
          <p><a href="#">Read More <span class="icon-arrow-right small"></span></a></p>
        </div>
      </div>
    </div>
  </div>


  <!-- our clients -->
  <div class="site-slide pb-5 ">
    <div class="container-fluid">
      <div class="text-center">
        <h3 class="pt-5 pb-1">شركاءنا في النجاح</h3>
        <p class="pb-3">انضم لأصحاب العمل المعينين حاليًا</p>
      </div>
      <div class="carousel-wrap">
        <div class="owl-carousel">
          <div class="item"><img src="http://placehold.it/150x150"></div>
          <div class="item"><img src="http://placehold.it/150x150"></div>
          <div class="item"><img src="http://placehold.it/150x150"></div>
          <div class="item"><img src="http://placehold.it/150x150"></div>
          <div class="item"><img src="http://placehold.it/150x150"></div>
          <div class="item"><img src="http://placehold.it/150x150"></div>
          <div class="item"><img src="http://placehold.it/150x150"></div>
          <div class="item"><img src="http://placehold.it/150x150"></div>
          <div class="item"><img src="http://placehold.it/150x150"></div>
          <div class="item"><img src="http://placehold.it/150x150"></div>
          <div class="item"><img src="http://placehold.it/150x150"></div>
          <div class="item"><img src="http://placehold.it/150x150"></div>
        </div>
      </div>
    </div>
  </div>



  <div class="site-section block-15 pb-5 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center mb-5 section-heading ">
          <h2>المدونة</h2>
        </div>
      </div> 
      <div class="nonloop-block-15 owl-carousel"> 
        <div class="media-with-text">
          <div class="img-border-sm mb-4">
            <a href="#" class="image-play">
              <img src=" {{asset('asset/images/img_1.jpg')}} " alt="" class="img-fluid">
            </a>
          </div>
          <h2 class="heading mb-0 h5"><a href="#">Jobs are made easy</a></h2>
          <span class="mb-3 d-block post-date">January 20, 2018 &bullet; By <a href="#">Josh Holmes</a></span>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores culpa qui aliquam placeat nobis
            veritatis tempora natus rerum obcaecati.</p>
        </div>

        <div class="media-with-text">
          <div class="img-border-sm mb-4">
            <a href="#" class="image-play">
              <img src=" {{asset('asset/images/img_1.jpg')}} " alt="" class="img-fluid">
            </a>
          </div>
          <h2 class="heading mb-0 h5"><a href="#">Jobs are made easy</a></h2>
          <span class="mb-3 d-block post-date">January 20, 2018 &bullet; By <a href="#">Josh Holmes</a></span>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores culpa qui aliquam placeat nobis
            veritatis tempora natus rerum obcaecati.</p>
        </div>

        <div class="media-with-text">
          <div class="img-border-sm mb-4">
            <a href="#" class="image-play">
              <img src=" {{asset('asset/images/img_1.jpg')}} " alt="" class="img-fluid">
            </a>
          </div>
          <h2 class="heading mb-0 h5"><a href="#">Jobs are made easy</a></h2>
          <span class="mb-3 d-block post-date">January 20, 2018 &bullet; By <a href="#">Josh Holmes</a></span>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores culpa qui aliquam placeat nobis
            veritatis tempora natus rerum obcaecati.</p>
        </div>

        <div class="media-with-text">
          <div class="img-border-sm mb-4">
            <a href="#" class="image-play">
              <img src=" {{asset('asset/images/img_1.jpg')}} " alt="" class="img-fluid">
            </a>
          </div>
          <h2 class="heading mb-0 h5"><a href="#">Jobs are made easy</a></h2>
          <span class="mb-3 d-block post-date">January 20, 2018 &bullet; By <a href="#">Josh Holmes</a></span>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores culpa qui aliquam placeat nobis
            veritatis tempora natus rerum obcaecati.</p>
        </div>

        <div class="media-with-text">
          <div class="img-border-sm mb-4">
            <a href="#" class="image-play">
              <img src="images/img_2.jpg" alt="" class="img-fluid">
            </a>
          </div>
          <h2 class="heading mb-0 h5"><a href="#">Jobs are made easy</a></h2>
          <span class="mb-3 d-block post-date">January 20, 2018 &bullet; By <a href="#">Josh Holmes</a></span>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores culpa qui aliquam placeat nobis
            veritatis tempora natus rerum obcaecati.</p>
        </div>

        <div class="media-with-text">
          <div class="img-border-sm mb-4">
            <a href="#" class="image-play">
              <img src="{{asset('asset/images/img_3.jpg')}}" alt="" class="img-fluid">
            </a>
          </div>
          <h2 class="heading mb-0 h5"><a href="#">Jobs are made easy</a></h2>
          <span class="mb-3 d-block post-date">January 20, 2018 &bullet; By <a href="#">Josh Holmes</a></span>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores culpa qui aliquam placeat nobis
            veritatis tempora natus rerum obcaecati.</p>
        </div>

        <div class="media-with-text">
          <div class="img-border-sm mb-4">
            <a href="#" class="image-play">
              <img src="{{asset('asset/images/img_3.jpg')}}" alt="" class="img-fluid">
            </a>
          </div>
          <h2 class="heading mb-0 h5"><a href="#">Jobs are made easy</a></h2>
          <span class="mb-3 d-block post-date">January 20, 2018 &bullet; By <a href="#">Josh Holmes</a></span>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores culpa qui aliquam placeat nobis
            veritatis tempora natus rerum obcaecati.</p>
        </div>

        <div class="media-with-text">
          <div class="img-border-sm mb-4">
            <a href="#" class="image-play">
              <img src="{{asset('asset/images/img_3.jpg')}}" alt="" class="img-fluid">
            </a>
          </div>
          <h2 class="heading mb-0 h5"><a href="#">Jobs are made easy</a></h2>
          <span class="mb-3 d-block post-date">January 20, 2018 &bullet; By <a href="#">Josh Holmes</a></span>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores culpa qui aliquam placeat nobis
            veritatis tempora natus rerum obcaecati.</p>
        </div>

        <div class="media-with-text">
          <div class="img-border-sm mb-4">
            <a href="#" class="image-play">
              <img src=" {{asset('asset/images/img_3.jpg')}} " alt="" class="img-fluid">
            </a>
          </div>
          <h2 class="heading mb-0 h5"><a href="#">Jobs are made easy</a></h2>
          <span class="mb-3 d-block post-date">January 20, 2018 &bullet; By <a href="#">Josh Holmes</a></span>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores culpa qui aliquam placeat nobis
            veritatis tempora natus rerum obcaecati.</p>
        </div>
      </div>

      <div class="row">

      </div>
    </div>
  </div> 





@endsection

@section('scripts')
<script src ="{{asset('js/app.js')}}"></script>
<script>
  const app = new Vue({
    el: '#app',
  
    data: {
  
        country: '',
        special: ''
    }
  });
</script>
@endsection