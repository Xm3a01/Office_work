@extends('dashboard.metronic')

@section('title')
    اضافة صاحب عمل
@endsection
@section('content')


   <!-- BEGIN PAGE HEAD-->
   <div class="page-head">
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
            <h1> ادارة اصحاب العمل 
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
            <span class="active">تعديل صاحب العمل   </span>
        </li>
    </ul>
    <!-- END PAGE BREADCRUMB -->
    <!-- BEGIN PAGE BASE CONTENT --> 
<div class="row"> 
<div class="col-md-12 ">
    <!-- BEGIN SAMPLE FORM PORTLET-->
    <div class="portlet light bordered">
            <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-social-dribbble font-green hide"></i>
                        <span class="caption-subject font-dark bold uppercase">تعديل صاحب العمل </span>
                    </div>
                 </div> 
        <div class="portlet-body form">
            <form class="form-horizontal" role="form" method="POST" action="{{route('owners.update' , $owner->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-body">
                        <div class="form-group">
                                <label class="col-md-3 control-label">الاسـم</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="الاســم " name="ar_name" value="{{$owner->ar_name}}">
                                  </div>
                            </div>
                        <div class="form-group">
                                <label class="col-md-3 control-label">البريد اللاكتروني</label>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" placeholder="البريد اللاكتروني " name="email" value="{{$owner->email}}">
                                  </div>
                            </div>
                            <div class="form-group">
                                    <label class="col-md-3 control-label">كلمة السر</label>
                                    <div class="col-md-6">
                                        <input type="password" class="form-control" placeholder="كلمة السر" name="password">
                                      </div>
                                </div>
                                <div class="form-group">
                                        <label class="col-md-3 control-label">الهــاتف</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" placeholder="الهاتف" name="phone" value="{{$owner->phone}}">
                                          </div>
                                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">إسم الشركة</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="ادخل إسم الشركة " name="company_name" value="{{$owner->company_name}}">
                          </div>
                    </div>
                    <div class="form-group">
                            <label class="col-md-3 control-label"> بريد العمل الإلكتروني / عنوان URL</label>
                            <div class="col-md-6">
                                <input type="email" class="form-control" placeholder="ادخل  بريد العمل الإلكتروني / عنوان URL " name="company_email" value="{{$owner->company_email}}">
                              </div>
                        </div>

                    <div class="form-group">
                            <label class="col-md-3 control-label">الدور الوظيفي</label>
                            <div class="col-md-6">
                                <select class="form-control" name="role_id">
                                    <option value="" disabled selected >الــدور الوظيفي</option>
                                    @foreach ($roles as $role)  
                                    <option value="{{$role->id}}" {{($owner->ar_role == $role->ar_name) ? 'selected' : ''}}>{{$role->ar_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div> 
                    <div class="form-group">
                            <label class="col-md-3 control-label">اختر الدولة</label>
                            <div class="col-md-6">
                                <select class="form-control" name="country_id">
                                    <option disabled selected> الدوله</option>
                                    @foreach ($countries as $country)     
                                    <option value="{{$country->id}}" {{($owner->ar_country == $country->ar_name) ? 'selected' : ''}}>{{$country->ar_name}}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">اختر المدينه</label>
                            <div class="col-md-6">
                                <select class="form-control" name="city_id">
                                    <option disabled selected>المدينة</option>
                                    @foreach ($cities as $city)     
                                    <option value="{{$city->id}}" {{($owner->ar_city == $city->ar_name) ? 'selected' : ''}}>{{$city->ar_name}}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">الجنس</label>
                            <div class="col-md-6">
                                <select class="form-control" name="gender">
                                    <option disabled > الجنس</option>    
                                    <option value="Maile" selected>{{$owner->ar_gender}}</option>
                                    <option value="Femaile">انثى</option>
                                </select>
                            </div>
                        </div>
                      
                            <div class="form-group">
                                    <label class="col-md-3 control-label">الوصف الوظيفي</label>
                                    <div class="col-md-6">
                                        <textarea class="form-control" rows="3" name="ar_description">{{$owner->ar_description}}</textarea>
                                    </div>
                                </div>
                    
                                <div class="form-group">
                                        <label for="exampleInputFile" class="col-md-3 control-label">الشعار</label>
                                        <div class="col-md-6">
                                            <input type="file" id="exampleInputFile" name="logo">
                                            <p class="help-block">ملف (اختياري)</p>
                                        </div>
                                        <div class="col-md-3"><img height="30" width="30" src="{{Storage::url($owner->logo)}}" alt=""></div>
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