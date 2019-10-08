@extends('dashboard.metronic')
@section('content')

 <!-- BEGIN PAGE HEAD-->
 <div class="page-head">
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
            <h1> {{$job->ar_company_name}}
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
            <span class="active">تعديل العمل  </span>
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
                        <span class="caption-subject font-dark bold uppercase">تعديل الوظيفه للشركه : {{$job->ar_company_name}}</span>
                    </div>
                 </div> 
        <div class="portlet-body form">
            <form class="form-horizontal" role="form" method="POST" action="{{route('jobs.update' , $job->id)}}">
                @csrf
                @method('PUT')
                <div class="form-body"> 
                  {{-- <input  type="hidden" name="owner_id" value="{{$owner->id}}"> --}}
                    <div class="form-group">
                            <label class="col-md-3 control-label">الدور الوظيفي</label>
                            <div class="col-md-6">
                                <select class="form-control" name="role_id">
                                    <option selected disabled>الــدور الوظيفي</option>
                                    @foreach ($roles as $role)   
                                    <option value="{{$role->id}}" {{($job->ar_role == $role->ar_name) ? 'selected' : ''}}>{{$role->ar_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                                <label class="col-md-3 control-label">المستوى الوظيفي</label>
                                <div class="col-md-6">
                                    <select class="form-control" name="job_level">
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                        <option>Option 4</option>
                                        <option>Option 5</option>
                                    </select>
                                </div>
                            </div>

                    <div class="form-group">
                            <label class="col-md-3 control-label">اختر الدولة</label>
                            <div class="col-md-6">
                                    <select class="form-control" name="country_id">
                                        <option selected disabled>الــدوله </option>
                                        @foreach ($countries as $country)   
                                        <option value="{{$country->id}}" {{($job->ar_country == $country->ar_name) ? 'selected' : ''}}>{{$country->ar_name}}</option>
                                        @endforeach
                                    </select>
                            </div>
                        </div>

                    <div class="form-group">
                            <label class="col-md-3 control-label">اختر المدينة</label>
                            <div class="col-md-6">
                                <select class="form-control" name="city_id">
                                    <option selected disabled>الـمدينه </option>
                                        @foreach ($cities as $city)   
                                          <option value="{{$city->id}}" {{($job->ar_city == $city->ar_name) ? 'selected' : ''}}>{{$city->ar_name}}</option>
                                        @endforeach
                                    </select>
                            </div>
                        </div>
                    
                      <div class="form-group">
                            <label class="col-md-3 control-label"> سنين الخبرة المطلوبة</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control  " placeholder="مثال: 1 شهر و2 سنة " name="experinse" value="{{$job->yearsOfExper}}">
                             </div>
                        </div>
                    
                        <div class="form-group">
                                <label class="col-md-3 control-label">التخصص الاساسي</label>
                                <div class="col-md-6">
                                    <select class="form-control" name="special_id">
                                        <option selected disabled>التخصص الاساسي </option>
                                        @foreach ($specials as $special)   
                                          <option value="{{$special->id}}" {{($job->ar_special == $special->ar_name) ? 'selected' : ''}}>{{$special->ar_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">التخصص الفرعي</label>
                                <div class="col-md-6">
                                    <select class="form-control" name="sub_special_id">
                                        <option selected disabled>التخصص الفرعي </option>
                                        @foreach ($sub_specials as $sub_special)   
                                          <option value="{{$sub_special->id}}" {{($job->ar_sub_special == $sub_special->ar_name) ? 'selected' : ''}}>{{$sub_special->ar_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        
                        <div class="form-group">
                                <label class="col-md-3 control-label">حالة العمل</label>
                                <div class="col-md-6">
                                    <select class="form-control" name="status">
                                        <option value="" selected disabled>حالة العمل</option>
                                        <option value="Full time">دوام كامل</option>
                                        <option value="Part time">دوام جزئي</option>
                                    </select>
                                </div>
                            </div>
                    
                            <div class="form-group ">
                                    <label class="col-md-3 control-label">الراتب</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control  " placeholder="مثال: 2500 - 5000" name="selary" value="{{$job->selary}}">
                                      </div>
                                </div>

                            <div class="form-group">
                                    <label class="col-md-3 control-label">الوصف الوظيفي</label>
                                    <div class="col-md-6">
                                        <textarea class="form-control" rows="3" name="ar_description">{{$job->ar_description}}</textarea>
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

            <!-- END PAGE BASE CONTENT -->
                         


@endsection