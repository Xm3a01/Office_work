  
 @extends('layouts.defaultclient')
 @section('content')
 
    
    <div class="unit-5 overlay" style="background-image: url(' {{asset('asset/images/hero_1.jpg')}} ');">
      <div class="container text-center">
        <h2 class="mb-0 h3">  إضافة السيرة الذاتية</h2>
        <p class="mb-0 unit-6 p-3"><a href="index.html">الرئيسية</a> <span class="sep">></span> <span>أضف تخصصك</span>
        </p>
      </div>
    </div>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8 mb-5">
            <form id="regForm" action="" class="p-5 bg-white shadow rounded"">

              <!-- Circles which indicates the steps of the form: -->
              <div class="text-center">
                <span class="step"></span>
                <span class="step"></span> 
              </div>

              <!-- One "tab" for each step in the form: -->
              <div class="tab">
                <div class="row form-group">
                  <h3>البيانات الشخصية</h3>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">الجنسية</label>
                    <select id="inputState" class="form-control">
                      <option>اختر بلدك</option>
                      <option>السودان</option>
                    </select>
                  </div>
                  
                  <div class="form-group col-md-6">
                    <label>تاريخ الميلاد</label>
                    <input id="datepicker" width="276" class="form-control" />
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputEmail4">مكان الميلاد</label>
                    <select id="inputState" class="form-control">
                      <option>اختر البلد</option>
                      <option>السودان</option>
                    </select>
                  </div>

                  <div class="form-group col-md-4">
                    <label for="inputState">الديانة</label>
                    <select id="inputState" class="form-control">
                      <option>مسلم</option>
                      <option>مسيحي</option>
                      <option>اخرى</option>
                    </select>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputState">الحالة الاجتماعية</label>
                    <select id="inputState" class="form-control">
                      <option>ممتزوج</option>
                      <option>عازب</option>
                      <option>اخرى</option>
                    </select>
                  </div>
                  <div class="form-group col-md-4 pr-2">
                    <label for="inputState"
                      style="vertical-align:bottom; display: table; margin-bottom: 0.5rem;">الجنس</label>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                        value="option1">
                      <label class="form-check-label" for="inlineRadio1">ذكر</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                        value="option2">
                      <label class="form-check-label" for="inlineRadio2">انثي</label>
                    </div>
                  </div>
                </div>
                <hr class="py-2">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputAddress2">الرقم الوطني</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="ادخل الرقم الوطني">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputAddress2">رقم الجواز</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="ادخل رقم الجواز">
                  </div>
                  
                </div>
              </div>

              <div class="tab">
                <div class="row form-group">
                  <h3>معلومات الاتصال</h3>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputAddress">رقم الهاتف</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="ادخل الايميل">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputAddress">الايميل</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="ادخل الايميل">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputAddress2">السكن الحالي</label>
                    <select id="inputState" class="form-control">
                      <option selected>اختار الدولة...</option>
                      <option>الخرطوم</option>
                      <option>الجزيرة</option>
                      <option>بورتسودان</option>
                    </select>
                  </div>

                  <div class="form-group col-md-6">
                    <label for="inputCity">المدينة</label>
                    <select id="inputState" class="form-control">
                      <option>الخرطوم</option>
                      <option>الجزيرة</option>
                      <option>بورتسودان</option>
                    </select>
                  </div>

                </div>
              </div>

            

              <div style="overflow:auto;">
                <div style="float:right;">
                  <button type="button" class="btn btn-primary" id="prevBtn" onclick="nextPrev(-1)">السابق</button>
                  <button type="button" class="btn btn-primary" id="nextBtn" onclick="nextPrev(1)">التالي</button>
                </div>
              </div>
            </form>
          </div>


          <div class="col-lg-4">
            <div class="p-4 mb-3 bg-white shadow rounded">
              <h3 class="h5 text-black mb-3">معلومات الإتصال</h3>
              <p class="mb-0 font-weight-bold">العنوان</p>
              <p class="mb-4">203 Fake St. Mountain View, San Francisco, California, USA</p>

              <p class="mb-0 font-weight-bold">الهاتف</p>
              <p class="mb-4"><a href="#">+1 232 3235 324</a></p>

              <p class="mb-0 font-weight-bold">البريد الإلكتروني</p>
              <p class="mb-0"><a href="#">youremail@domain.com</a></p>

            </div>

            <div class="p-4 mb-3 bg-white shadow rounded">
              <h3 class="h5 text-black mb-3">المزيـد</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa ad iure porro mollitia architecto hic
                consequuntur. Distinctio nisi perferendis dolore, ipsa consectetur Fugiat quaerat eos qui, libero neque
                sed nulla.</p>
              <p><a href="#" class="btn btn-primary px-3 text-white pill">قراءة المزيد</a></p>
            </div>

          </div>

        </div>
      </div>
    </div>


 @endsection