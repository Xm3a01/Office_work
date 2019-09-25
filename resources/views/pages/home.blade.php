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
        <form action="#">
          <div class="row mb-3">
            <div class="col-md-9">
              <div class="row">
                <div class="col-md-6 mb-3 mb-md-0">
                  <div class="input-wrap">
                    <span class="icon icon-keyboard"></span>
                    <input type="text" class=" form-control border-0 px-3"
                      placeholder="المسمى الوظيفي أو اسم الشركة">
                  </div>
                </div>
                <div class="col-md-6 mb-3 mb-md-0">
                  <div class="input-wrap">
                    <span class="icon icon-room"></span>
                    <input type="text" class="form-control border-0 px-3" id="autocomplete"
                      placeholder="المدينة أو المقاطعة أو المنطقة" onFocus="geolocate()">
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
  <div class="scroll-to">
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
            <div class="col-sm-6 col-md-4 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="50">
              <a href="#" class="h-100 feature-item">
                <span class="d-block icon flaticon-calculator mb-3"></span>
                <h2>المحاسبة / المالية</h2>
                <p>123</p>
              </a>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="200">
              <a href="#" class="h-100 feature-item">
                <span class="d-block icon flaticon-wrench mb-3"></span>
                <h2>وظائف السيارات</h2>
                <p>219</p>
              </a>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="300">
              <a href="#" class="h-100 feature-item">
                <span class="d-block icon flaticon-worker mb-3"></span>
                <h2>البناء / المرافق</h2>
                <p>1,021</p>
              </a>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="400">
              <a href="#" class="h-100 feature-item">
                <span class="d-block icon flaticon-telecommunications mb-3"></span>
                <h2>الاتصالات</h2>
                <p>1,219</p>
              </a>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="500">
              <a href="#" class="h-100 feature-item">
                <span class="d-block icon flaticon-stethoscope mb-3"></span>
                <h2>الرعاية الصحية</h2>
                <p>148</p>
              </a>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="600">
              <a href="#" class="h-100 feature-item">
                <span class="d-block icon flaticon-computer-graphic mb-3"></span>
                <h2>التصميم والفن / الوسائط المتعددة</h2>
                <p>482</p>
              </a>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="700">
              <a href="#" class="h-100 feature-item">
                <span class="d-block icon flaticon-trolley mb-3 "></span>
                <h2>النقل / الخدمات اللوجستية</h2>
                <p>109</p>
              </a>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="800">
              <a href="#" class="h-100 feature-item">
                <span class="d-block icon flaticon-restaurant mb-3 "></span>
                <h2>المطاعم / الخدمات الغذائية</h2>
                <p>319</p>
              </a>
            </div>
          </div>
          <div class="text-center pt-5" data-aos="fade-up" data-aos-delay="50"><a class="btn"
              href="new-post.html">مزيد من التصنيفات</a>
          </div>
        </div>
        <div class="col-md-3  mb-5 pl-0 section-heading overflow-auto">
          <h3 class="mb-4">آخر الأخبار</h3>
          <div class="overflow-auto mt-4" data-aos="fade-up" data-aos-delay="50" >
           
            <a href="job-single.html" class="job-item d-block d-md-flex align-items-center  border-bottom fulltime">
              <div class="company-logo blank-logo text-center text-md-left">
                <img src=" {{asset('asset/images/person_2.jpg')}} " alt="Image" class="img-fluid mx-auto" width="200px" height="100px">
              </div>
              <div class="job-details pr-2"> 
                  <div class="d-block d-lg-flex">
                    <p>لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أليايت,سيت دو أيوسمود</p>
                  </div>
                </div>  
            </a>

            <a href="job-single.html" class="job-item d-block d-md-flex align-items-center  border-bottom fulltime">
              <div class="company-logo blank-logo text-center text-md-left">
                <img src=" {{asset('asset/images/person_3.jpg')}} " alt="Image" class="img-fluid mx-auto" width="200px"
                  height="100px">
              </div>
              <div class="job-details pr-1"> 
                  <div class="d-block d-lg-flex">
                    <p>لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أليايت,سيت دو أيوسمود</p>
                  </div>
                </div> 
            </a>

            <a href="job-single.html" class="job-item d-block d-md-flex align-items-center  border-bottom fulltime">
              <div class="company-logo blank-logo text-center text-md-left">
                <img src=" {{asset('asset/images/company_logo_blank.png')}} " alt="Image" class="img-fluid mx-auto" width="200px"
                  height="100px">
              </div>
              <div class="job-details pr-1"> 
                  <div class="d-block d-lg-flex">
                    <p>لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أليايت,سيت دو أيوسمود</p>
                  </div>
                </div> 
            </a>

            <a href="job-single.html" class="job-item d-block d-md-flex align-items-center  border-bottom fulltime">
              <div class="company-logo blank-logo text-center text-md-left">
                <img src=" {{asset('asset/images/company_logo_blank.png')}}" alt="Image" class="img-fluid mx-auto" width="200px"
                  height="100px">
              </div>
              <div class="job-details pr-1"> 
                  <div class="d-block d-lg-flex">
                    <p>لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أليايت,سيت دو أيوسمود</p>
                  </div>
                </div> 
            </a>

            <a href="job-single.html" class="job-item d-block d-md-flex align-items-center  border-bottom fulltime">
                <div class="company-logo blank-logo text-center text-md-left">
                  <img src="{{asset('asset/images/person_3.jpg')}}" alt="Image" class="img-fluid mx-auto" width="200px" height="100px">
                </div>
                <div class="job-details pr-2"> 
                    <div class="d-block d-lg-flex">
                      <p>لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أليايت,سيت دو أيوسمود</p>
                    </div>
                  </div>  
              </a>

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
          <h3 class="mb-5">وظائف جديدة</h3>
          <div class="rounded border jobs-wrap">
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

          <div class="col-md-12 text-center mt-5" data-aos="fade-up" data-aos-delay="50">
            <a href="#" class="btn rounded p-3 mb-5"><span class="icon-plus-circle"></span>عرض المزيد من الوظائف</a>
          </div>
        </div>
        <div class="col-md-4 block-16" data-aos="fade-up" data-aos-delay="200">
          <div class="d-flex mb-0">
            <h2 class="mb-5 h3 mb-0">وظائف مميزة</h2>
            <div class="ml-auto mt-1"><a href="#" class="owl-custom-prev">قبل</a> / <a href="#"
                class="owl-custom-next">بعد</a></div>
          </div>

          <div class="nonloop-block-16 owl-carousel">
            <div class="border rounded p-4 bg-white">
              <h2 class="h5">طاقم مطعم</h2>
              <p><span class="border border-warning rounded p-1 px-2 text-warning">Freelance</span></p>
              <p>
                <span class="d-block"><span class="icon-suitcase"></span>Luxury Restaurant</span>
                <span class="d-block"><span class="icon-room"></span> khartoum</span>
                <span class="d-block"><span class="icon-money mr-1"></span> $55000 &mdash; 70000</span>
              </p>
              <p class="mb-0">لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد

                أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات ,سيونت ان كيولبا

                كيو أوفيسيا ديسيريونتموليت انيم أيدي ايست لابوريوم.</p>
            </div>

            <div class="border rounded p-4 bg-white">
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

            <div class="border rounded p-4 bg-white">
              <h2 class="h5">Assistant Brooker, Real Estate</h2>
              <p><span class="border border-warning rounded p-1 px-2 text-warning">Freelance</span></p>
              <p>
                <span class="d-block"><span class="icon-suitcase"></span> Resto Bar</span>
                <span class="d-block"><span class="icon-room"></span> Florida</span>
                <span class="d-block"><span class="icon-money mr-1"></span> $55000 &mdash; 70000</span>
              </p>
              <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus esse, quam
                consectetur ipsum quibusdam ullam ab nesciunt, doloribus voluptatum neque iure perspiciatis vel vero
                illo consequatur facilis, fuga nobis corporis.</p>
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
    <div class="container">
      <div class="text-center">
        <h3 class="pt-5 pb-1">شركاءنا في النجاح</h3>
        <p class="pb-3">انضم لأصحاب العمل المعينين حاليًا</p>
      </div>
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
             <div class="carousel-item  ">
                <div class="row">
                    <div class="col-md-2">
                      <img class="d-block w-50" src="images/11.png" alt="First slide"> 
                    </div>
                    <div class="col-md-2">
                        <img class="d-block w-50" src="images/22.png" alt="First slide"> 
                      </div>
                      <div class="col-md-2">
                          <img class="d-block w-50" src="images/33.png" alt="First slide"> 
                        </div>
                        <div class="col-md-2">
                            <img class="d-block w-50" src="images/44.png" alt="First slide"> 
                          </div>
                          <div class="col-md-2">
                              <img class="d-block w-50" src="images/11.png" alt="First slide"> 
                            </div>
                            <div class="col-md-2">
                                <img class="d-block w-50" src="images/11.png" alt="First slide"> 
                              </div>
                  </div>
            </div>
            <div class="carousel-item active">
                <div class="row">
                    <div class="col-md-2">
                      <img class="d-block w-50" src="images/11.png" alt="First slide"> 
                    </div>
                    <div class="col-md-2">
                        <img class="d-block w-50" src="images/22.png" alt="First slide"> 
                      </div>
                      <div class="col-md-2">
                          <img class="d-block w-50" src="images/33.png" alt="First slide"> 
                        </div>
                        <div class="col-md-2">
                            <img class="d-block w-50" src="images/44.png" alt="First slide"> 
                          </div>
                          <div class="col-md-2">
                              <img class="d-block w-50" src="images/11.png" alt="First slide"> 
                            </div>
                            <div class="col-md-2">
                                <img class="d-block w-50" src="images/11.png" alt="First slide"> 
                              </div>
                  </div>
            </div>
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