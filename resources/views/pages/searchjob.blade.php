@extends('layouts.defult')
@section('stylesheet')
<link rel="stylesheet" href=" {{asset('asset/css/style1.css')}} ">
@endsection
@section('content')

<div class="unit-5 overlay" style="background-image: url('images/hero_1.jpg');">
    <div class="container text-center">
        <h2 class="h4mb-0"> </h2>
        <p class="mb-0 unit-6 p-3"><a href="index.html">الرئيسية</a> <span class="sep">></span> <span>البحث عن
                السيرة الذاتية</span></p>
    </div>
</div>

<section class="mb-5"> 
<div class="container-fluid">
<div class="row">
    <div class="col-md-3 border-right">
            <div class="site-section ok">
                <div class="container-fluid"> 
                        <div class="search_widget_job">
                            <div class="field_w_search">
                                 <input type="text" placeholder="Search Keywords">
                                <i class="la la-search"></i>
                             </div> 
                        </div>
                    <div class="row justify-content-center" data-aos="fade" data-aos-delay="10">
                    <div class="col-md-12">
                        <div class="accordion unit-8" id="accordion">
                        <div class="accordion-item">
                        <h3 class="mb-0 heading">
                            <a class="btn-block" data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="true" aria-controls="collapseOne"><h5 class="sb-title open">Job Type</h5><span class="icon"></span></a>
                        </h3>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="widget"> 
                                        <div class="type_widget" style="display: block;">
                                            <p class="flchek"><input type="checkbox" name="choosetype" id="33r"><label for="33r">Freelance</label></p>
                                            <p class="ftchek"><input type="checkbox" name="choosetype" id="dsf"><label for="dsf">Full Time</label></p>
                                            <p class="ischek"><input type="checkbox" name="choosetype" id="sdd"><label for="sdd">Internship</label></p>
                                            <p class="ptchek"><input type="checkbox" name="choosetype" id="sadd"><label for="sadd">Part Time</label></p>
                                            <p class="tpchek"><input type="checkbox" name="choosetype" id="assa"><label for="assa">Temporary</label></p>
                                            <p class="vtchek"><input type="checkbox" name="choosetype" id="ghgf"><label for="ghgf">Volunteer</label></p>
                                        </div>
                                    </div>
                        </div>
                        </div> <!-- .accordion-item -->
                        
                        <div class="accordion-item">
                        <h3 class="mb-0 heading">
                            <a class="btn-block" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="true" aria-controls="collapseTwo">  <h5 class="sb-title open">Date Posted</h5><span class="icon"></span></a>
                        </h3>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="widget"> 
                                        <div class="posted_widget">
                                            <input type="radio" name="choose" id="232"><label for="232">Last Hour</label><br>
                                            <input type="radio" name="choose" id="wwqe"><label for="wwqe">Last 24 hours</label><br>
                                            <input type="radio" name="choose" id="erewr"><label for="erewr">Last 7 days</label><br>
                                            <input type="radio" name="choose" id="qwe"><label for="qwe">Last 14 days</label><br>
                                            <input type="radio" name="choose" id="wqe"><label for="wqe">Last 30 days</label><br>
                                            <input type="radio" name="choose" id="qweqw"><label class="nm" for="qweqw">All</label><br>
                                        </div>
                                    </div>
                        </div>
                        </div> <!-- .accordion-item -->
            
                        <div class="accordion-item">
                        <h3 class="mb-0 heading">
                            <a class="btn-block" data-toggle="collapse" href="#collapseThree" role="button" aria-expanded="true" aria-controls="collapseThree"><h5>Career Level</h5> <span class="icon"></span></a>
                        </h3>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="body-text">
                            
                        <h3>hello world</h3>
                    </div>
                        </div>
                        </div> <!-- .accordion-item -->
                     </div>
                 </div>
               </div>
              </div>
            </div>
          </div>

<div class="col-md-9">
<div class="modrn-joblist">
        <div class="tags-bar">
            <span>Full Time<i class="close-tag">x</i></span>
            <span>UX/UI Design<i class="close-tag">x</i></span>
            <span>Sudan<i class="close-tag">x</i></span>
            <div class="action-tags">
                <a href="#" title=""><i class="la la-cloud-download"></i> بحث</a>
                <a href="#" title=""><i class="la la-trash-o"></i> إلغاء</a>
            </div>
        </div>
 <!-- Tags Bar -->
    <div class="filterbar">
        <span class="emlthis"><a href="mailto:example.com" class="btn btn-primary text-white  font-weight-bold"><img src=" {{asset('asset/images/mail.png')}} " class="pl-1" alt="">بريد وظائف مشابهة</a></span>
            <h5 class="pt-2">نتائج البحث   23 مقدم</h5>
        </div> 
    </div>  
    

    <div class="rounded jobs-wrap">   
                  <a href="job-single.html" class="job-item d-block d-md-flex align-items-center  border-bottom fulltime">
                        <div class="company-logo blank-logo text-center text-md-left pl-3">
                          <img src="images/3.png" alt="Image" class="img-fluid mx-auto">
                        </div>
                        <div class="job-details h-100">
                          <div class="p-3 align-self-center">
                           <h3>web developer</h3>
                           <div class="d-block d-lg-flex">
                            <p class="m-0">دعم لتطوير المشاريع-الخرطوم</p>
                             <span class="mr-3">26Aug</span> 
                               </div>
                            <div class="d-block d-lg-flex"> 
                              <div ><span class="icon-suitcase mr-1 ml-2"></span>متوسط الخبرة</div>
                              <div class="mr-3" >3000USD-5000USD<span class="icon-money mr-1"></span></div>
                            </div>
                            <p class="m-0 text-primary">• Create workflow designs and coordinate with developer’s team for its HTML/CSS integration.• Create print media material • Create…• Create workflow designs and coordinate with developer’s team for its HTML/CSS integration.• Create print business statistics</p>
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
                              <img src="images/2.png" alt="Image" class="img-fluid mx-auto">
                            </div>
                            <div class="job-details h-100">
                              <div class="p-3 align-self-center">
                               <h3>web developer</h3>
                               <div class="d-block d-lg-flex">
                                <p class="m-0">دعم لتطوير المشاريع-الخرطوم</p>
                                 <span class="mr-3">26Aug</span> 
                                   </div>
                                <div class="d-block d-lg-flex"> 
                                  <div ><span class="icon-suitcase mr-1 ml-2"></span>متوسط الخبرة</div>
                                  <div class="mr-3" >3000USD-5000USD<span class="icon-money mr-1"></span></div>
                                </div>
                                <p class="m-0 text-primary">• Create workflow designs and coordinate with developer’s team for its HTML/CSS integration.• Create print media material • Create…• Create workflow designs and coordinate with developer’s team for its HTML/CSS integration.• Create print business statistics</p>
                              </div>
                            </div>
                            <div class="job-category align-self-center">
                                    <div class="p-3">
                                      <span class="text-warning p-2 rounded border border-warning">Freelance</span>
                                    </div>
                                  </div>
                          </a> 

              <div class="text-center pt-5" data-aos="fade-up" data-aos-delay="50"><a class="btn"
                href="new-post.html">المزيد</a>
            </div>
     
            </div> 
       
</div> 


</div> 
</div>
</section>



@endsection