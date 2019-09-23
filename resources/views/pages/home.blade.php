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



@endsection