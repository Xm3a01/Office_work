  
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
            <form id="regForm" action="{{route('users.update', [ app()->getLocale(), $user->id ])}}" class="p-5 bg-white shadow rounded" method="POST">     
                @csrf
                @method('PUT')
                @php
                  $user =  App\User::findOrFail($user->id);
                  $user->visit_count +=1;
                  $user->save();
                @endphp
                <input type="hidden" name="user_id" value="{{$user->id}}">
              <!-- Circles which indicates the steps of the form: -->
              <div class="text-center">
                <span class="step"></span>
                <span class="step"></span> 
              </div>

              <!-- One "tab" for each step in the form: -->
              <div class="tab">
                <div class="row form-group">
                  <h3>{{('Personal Info')}}</h3>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                      <label for="inputEmail4">الإسم الاول</label>
                      <input type="text" class="form-control" value="{{$user->ar_name}}"  name="ar_name"  placeholder="ادخل الاسم الاول">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">الإسم بالغه الانجليزيه</label>
                        <input type="text" class="form-control" name="name" value="{{$user->name}}"   placeholder="">
                      </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6 pr-2">
                        <label for="inputState"
                          style="vertical-align:bottom; display: table; margin-bottom: 0.5rem;">الجنس</label>
                        <div class="form-check form-check-inline">
                          <input {{($user->gender == 'Male') ? 'checked' : '' }}  class="form-check-input" type="radio" name="gender" id="inlineRadio1"
                            value="Male">
                          <label class="form-check-label" for="inlineRadio1">{{__('Male')}}</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input {{($user->gender == 'Female') ? 'checked' : '' }} class="form-check-input" type="radio" name="gender" id="inlineRadio2"
                            value="Female">
                          <label class="form-check-label" for="inlineRadio2">{{__('Female')}}</label>
                        </div>
                      </div>
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">الجنسية</label>
                    <input list="identity" id="inputState" class="form-control" name="identity" autocomplete="off">
                    <datalist id="identity" dir="rtl" >
                        @foreach ($countries as $country)
                        <option selected value="{{(app()->getLocale() == "ar") ? $country->ar_name : $country->country}}">      
                        @endforeach
                      </datalist>
                  </div> 
                </div>  

                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label>{{__('Brith Date')}}</label>
                    <input type="date" id="datepicker" width="276" class="form-control" name="brithDate" />
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">{{__('Brith Place')}}</label>
                    <input list="country" name="brith_country" id="inputState" class="form-control">
                    <datalist id="country" dir="rtl" >
                      @foreach ($countries as $country)    
                      <option value="{{(app()->getLocale() == 'ar') ? $country->ar_name : $country->name}}">
                      @endforeach
                    </datalist>
                  </div>
                </div>

                <div class="form-row">
                  <div class="form-group col-md-12">
                      <label for="inputEmail4">{{__('Country')}}</label>
                      <input list="country" name="country" id="inputState" class="form-control">
                      <datalist id="country" dir="rtl" >
                        @foreach ($countries as $country)    
                        <option value="{{(app()->getLocale() == 'ar') ? $country->ar_name : $country->name}}">
                        @endforeach
                      </datalist>
                    </div>
                </div>

                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputState">{{('Religion')}}</label>
                    <select id="inputState" class="form-control" name="religion">
                      <option value="Muslime">{{__('Muslime')}}</option>
                      <option value="Christian">{{__('Christian')}}</option>
                      <option value="Gushin">{{__('Gushin')}}</option>
                      <option value="Other">{{__('Other')}}</option>
                    </select>
                  </div>

                  <div class="form-group col-md-6">
                    <label for="inputState">الحالة الاجتماعية</label>
                    <select id="inputState" class="form-control" name="social_status">
                      <option value="Married">{{__('Married')}}</option>
                      <option value="Single">{{__('Single')}}</option>
                    </select>
                  </div>

                </div>

                 <div class="form-row">

                   <div class="form-group col-md-6">
                   <label for="inputState">{{__('Passpord No')}}</label> 
                   <input type="text" class="form-control"   placeholder="" name="idint_1" value="{{$user->idint_1}}">
                     </div>
                     <div class="form-group col-md-6">
                       <label for="inputAddress2">{{__('Nationality No')}}</label>
                       <input type="text" class="form-control" id="inputAddress2" placeholder="" name="idint_2" value="{{$user->idint_2}}">
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
                    <input name="phone" type="text" class="form-control" id="inputAddress" value="{{$user->phone}}" placeholder="ادخل الايميل">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputAddress">الايميل</label>
                    <input name="email" type="text" class="form-control" id="inputAddress"  value="{{$user->email}}" placeholder="ادخل الايميل">
                  </div> 
                  <div class="form-group col-md-6">
                      <label for="inputAddress2">السكن الحالي</label>
                      <input  name="city" list="city" id="inputState" class="form-control" autocomplete="off">
                      <datalist id="city">
                        @foreach ($cities as $city)   
                        <option value="{{ (app()->getLocale() == 'ar') ?  $city->ar_name : $city->name}}" >
                        @endforeach
                      </datalist>
                    </div>
  
                    <div class="form-group col-md-6">
                      <label for="inputCity">المدينة</label>
                      <input  name="" list="city" id="inputState" class="form-control">
                      <datalist id="city" >
                        @foreach ($cities as $city)   
                        <option value="{{ (app()->getLocale() == 'ar') ?  $city->ar_name : $city->name}}" >
                        @endforeach
                      </datalist>
                    </div>
                </div>
              </div>

            

              <div style="overflow:auto;">
                <div style="float:right;">
                  <button type="button" class="btn btn-primary" id="prevBtn" onclick=" nextPrev(-1)">السابق</button>
                  <button type="button" class="btn btn-primary" id="nextBtn" onclick=" event.preventDefault(); nextPrev(1)">التالي</button>
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