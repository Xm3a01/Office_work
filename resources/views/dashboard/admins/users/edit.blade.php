@extends('dashboard.metronic')
@section('content')


 <!-- BEGIN PAGE HEAD-->
 <div class="page-head">
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
            <h1> جدول الموظفين
            </h1>
        </div> 
    </div>
    <!-- END PAGE HEAD-->
    <!-- BEGIN PAGE BREADCRUMB -->
    <ul class="page-breadcrumb breadcrumb">
        <li>
            <a href="index.html">الرئيسية</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span class="active">إضافة موظف جديد</span>
        </li>
    </ul>
    <!-- END PAGE BREADCRUMB -->
    <!-- BEGIN PAGE BASE CONTENT --> 
    <div class="row"> 
<div class="col-md-12">
    <!-- BEGIN SAMPLE FORM PORTLET-->
    <div class="portlet light bordered">
            <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-social-dribbble font-green hide"></i>
                        <span class="caption-subject font-dark bold uppercase">إضافة سيرة ذاتية جديدة</span>
                    </div>
                 </div>
        <div class="portlet-body form">
             <form class="form-horizontal" id="user-form" role="form" method="POST" action="{{route('users.update' , $user->id)}}">
                @csrf
                @method('PUT')
                <div class="form-body">
                    <h4 class="text-left m-3">البيانات الشخصية</h4><br>
                    <div class="form-group">
                        <label class="col-md-2 control-label">الإسم  </label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" placeholder="ادخل إسم رباعي " name="ar_name" value="{{$user->ar_name}}">
                          </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"> الاسم باللغه لانجليزيه </label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" placeholder="ادخل إسم رباعي " name="name" value="{{$user->name}}">
                        </div>      
                    </div>
                    <div class="form-group">
                            <label class="col-md-2 control-label">البريد الاكتروني</label>
                            <div class="col-md-4">
                                <input type="email" name="email" class="form-control  " placeholder=" ادخل البريد الاكتروني" value="{{$user->email}}">
                            </div>
                            <label class="col-md-1 control-label">كلمة المرور</label>
                            <div class="col-md-4">
                                    <input type="password" name="password" class="form-control  " placeholder="كلمة المرور">
                             </div> 
                        </div>
                    
                    <div class="form-group">
                            <label class="col-md-2 control-label">الجنسية  </label>
                            <div class="col-md-4">
                                    <select class="form-control" name="country_id">
                                        <option  disabled>اختر بلدك</option>
                                        @foreach ($countries as $country)
                                        <option value="{{$country->id}}" {{($user->ar_country == $country->ar_name) ? 'selected' : ''}}>{{$country->ar_name}}</option>
                                            
                                        @endforeach
                                    </select>
                                </div> 

                              <label class="col-md-1 control-label">العنوان</label>
                              <div class="col-md-4">
                                    <select class="form-control" name="birth_id">
                                        <option disabled >اختر مكان الميلاد </option>
                                        @foreach ($cities as $city) 
                                        <option value="{{$city->id}}" {{($user->ar_city == $city->ar_name) ? 'selected' : ''}}>{{$city->ar_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                        </div>

                        <div class="form-group">
                                <label class="col-md-2 control-label">مكان الميلاد</label>
                                <div class="col-md-4">
                                      <select class="form-control" name="city_id">
                                          <option disabled >اختر مكان الميلاد </option>
                                          @foreach ($cities as $city) 
                                          <option value="{{$city->id}}" {{($user->ar_city == $city->ar_name) ? 'selected' : ''}}>{{$city->ar_name}}</option>
                                          @endforeach
                                          
                                      </select>
                                  </div>

                              <label class="col-md-1 control-label">تاريخ الميلاد</label>
                              <div class="col-md-4">
                                    <input type="date" class="form-control" name="birthdate" id="" value="{{$user->birthdate}}">
                                </div>
                        </div>

                        <div class="form-group">
                                <label class="col-md-2 control-label"> الديانة  </label>
                                <div class="col-md-4">
                                      <select class="form-control" name="religion">
                                          <option disabled>اختر الديانة  </option>
                                          <option value="{{$user->religion}}" selected>{{$user->ar_religion}}</option>
                                          <option value="Muslime">مسلم</option>
                                          <option value="Christian">مسيحي</option>
                                          <option value="Gushin">يهودي </option>
                                          <option value="Other">اخرى</option>
                                      </select>
                                  </div>

                              <label class="col-md-1 control-label">الحالة الاجتماعية</label>
                              <div class="col-md-4">
                                    <select class="form-control" name="social_status">
                                        <option disabled >اختر الحالة الاجتماعية  </option>
                                        <option value="{{$user->social_status}}" selected>{{$user->ar_social_status}}</option>
                                        <option value="Married">متزوج</option>
                                        <option value="Single">اعزب </option>
                                    </select>
                                </div>
                        </div>

                        <div class="form-group">
                                <label class="col-md-2 control-label">رقم الجواز</label>
                                <div class="col-md-4">
                                    <input type="text" name="idint_1" class="form-control" id="" placeholder="مثلا 233456765"  value="{{$user->idint_1}}">
                                </div>
                                  <label class="col-md-1 control-label">الرقم الوطني</label>
                                  <div class="col-md-4">
                                        <input type="text" name="idint_2" class="form-control  " placeholder="مثلا 188-15-34-567-45" value="{{$user->idint_2}}">
                                    </div>
                            </div>

                            <br><h4 class="text-left m-3">بيانات الاتصال</h4><br>
                            <div class="form-group">
                                    <label class="col-md-2 control-label">رقم الهاتف</label>
                                    <div class="col-md-4">
                                            <input type="text" name="phone" class="form-control  " placeholder=" ادخل رقم الهاتف" value="{{$user->phone}}">
                                     </div> 
                                </div>

                                <br><h4 class="text-left m-3"> معلومات التعليم</h4><br>
                                <div class="form-group">
                                        <label class="col-md-2 control-label" >المؤهلات</label>
                                        <div class="col-md-4">
                                            <select class="form-control" name="qualification">
                                                    <option  disabled>اختر المؤهل</option>
                                                    <option value="{{$user->qualification}}" selected> {{$user->ar_qualification}}</option>
                                                    <option value="Diploma ">دبلوم</option>
                                                    <option value="Bachelor">بكالريوس</option>
                                                    <option value="Master">ماجستير</option>
                                                    <option value="PH">دكتوراه</option>
                                                    </select>
                                            </div>

                                      <label class="col-md-1 control-label">الجامعة</label>
                                      <div class="col-md-4">
                                            <input type="text" class="form-control" name="university" placeholder="مثال: جامعة الجزيرة" id="" value="{{$user->ar_university}}">
                                    </div>
                                </div>

                                <div class="form-group">
                                     <label class="col-md-2 control-label">التخصص</label>
                                        <div class="col-md-4">
                                            <select class="form-control" name="special_id">
                                                    <option disabled >اختر التخصص</option>
                                                    @foreach ($sub_specials as $sub)
                                                    <option value="{{$sub->id}}" {{($user->ar_sub_special == $sub->ar_name) ? 'selected' : ''}}>{{$sub->ar_name}}</option>
                                                    @endforeach
                                                    </select>
                                            </div>

                                      <label class="col-md-1 control-label">تاريخ التخرج</label>
                                      <div class="col-md-4">
                                            <input type="date" class="form-control" name="grade_date" id="" value="">
                                          </div>
                                        </div>

                                <div class="form-group">
                                        <label class="col-md-2 control-label">المعدل</label>
                                        <div class="col-md-4">
                                                <input type="text" class="form-control" name="grade" placeholder="مثال: 3.00 من 4.00" id="" value="{{$user->grade}}">
                                              </div>
                                             </div>

                            <br><h4 class="text-left m-3">اللغات </h4><br>
                            <div class="form-group">
                                    <label class="col-md-2 control-label">اختر اللغة</label>
                                    <div class="col-md-4">
                                        <select class="form-control" name="language">
                                                <option disabled >اللغه</option>
                                                <option  selected value="{{$user->language}}" >{{$user->ar_language}}</option>
                                                <option value="Arabic">العربية</option>
                                                <option value="English">الانجليزية</option>
                                                </select>
                                        </div>

                                        <label class="col-md-1 control-label" >اختر المستوي</label>
                                        <div class="col-md-4">
                                            <select class="form-control" name="language_level">
                                                    <option disabled >مستوى اللغه</option>
                                                    <option value="{{$user->language_level}}" selected>{{$user->ar_language_level}}</option>
                                                    <option value="Beginner">مبتدئي</option>
                                                    <option value="Intermediate">متوسط</option>
                                                    <option value="Mother tounge">اللغه الاساسيه</option>
                                                    </select>
                                            </div>
                                     </div>
                                         <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-offset-3 col-md-9">
                                                    <button type="submit" class="btn green">حفظ</button>
                                                    <button type="button" class="btn default">إلغاء</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div> 
                        </div>
                    </div>



@endsection