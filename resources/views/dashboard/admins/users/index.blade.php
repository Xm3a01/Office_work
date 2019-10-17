@extends('dashboard.metronic')
@section('title', ' جدول المستخدمين')
<!-- BEGIN CSS -->
@section('stylesheets')
<link rel="stylesheet" href="{{ asset('vendor/plugins/datatables/datatables.min.css') }}">
<link rel="stylesheet" href="{{asset('vendor/plugins/datatables/plugins/bootstrap/datatables.bootstrap-rtl.css')}}">
@endsection
<!-- END CSS -->
@section('content')
<!-- BEGIN PAGE-BAR -->
<div class="page-head">
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
            <h1> جدول المستخدمين
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
            <span class="active">جدول المستخدمين</span>
        </li>
    </ul>
    <!-- END PAGE BREADCRUMB -->
    <!-- BEGIN PAGE BASE CONTENT -->
    <div class="mt-bootstrap-tables">
        <div class="row">
            <div class="col-md-12">
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-social-dribbble font-green hide"></i>
                            <span class="caption-subject font-dark bold uppercase">جدول المستخدمين</span>
                        </div>
                        <div class="actions">
                            <div class="btn-group pull-left">
                                <button class="btn green btn-outline dropdown-toggle"
                                    data-toggle="dropdown">الادوات
                                    <i class="fa fa-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu pull-right" style="font-family: hacen">
                                    <li>
                                        <a href="javascript:;"> طباعة </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;"> طباعة ملف PDF </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;"> تصدير إلي إكسل </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="table-toolbar pull-left">
                            <div class="btn-group">
                                <a data-toggle="modal" href="#add_user"  id="sample_editable_1_new" class="btn green">  أضف مجال جديد
                                    <i class="fa fa-plus"></i>
                                </a>
                            </div>
                        </div>
                        <table id="users-table" class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th> # </th>
                                        <th>الأسم</th>
                                        <th>Name</th>
                                        <th>البريد</th>
                                        <th>تلفون</th>
                                        <th>الديانه</th>
                                        <th>رقم الهويه</th>
                                        <th>الحاله الاجتماعيه</th>
                                        <th>الدور الوظيفي</th>
                                        <th>العمليات</th>
                                    </tr>
                                </thead>
                         
                                    <tbody>
                                        @foreach($users as $user)
                                        <tr>
                                            <td>{{$user->id}}</td>
                                            <td>{{$user->ar_name}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->phone}}</td>
                                            <td>{{$user->ar_religion}}</td>
                                            <td>{{$user->idint_1 .' - '.$user->idint_2}}</td>
                                            <td>{{$user->ar_social_status}}</td>
                                            <td>{{$user->ar_role}}</td>
                                            <td style="width:auto">
                                                <form action="{{route('cv.destroy', $user->id)}}" method="POST">
                                                    @csrf {{ method_field('DELETE') }}

                                                    <div class="action" >
                                                    <div class="btn-group pull-left">
                                                        <button class="btn green btn-outline dropdown-toggle"
                                                            data-toggle="dropdown">الادوات
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu pull-right" style="font-family: hacen">
                                                            <li>
                                                                    <a data-toggle="modal" href="#add_level"  id="sample_editable_1_new" class="btn blue btn-sm btn-outline sbold uppercase">اضف خبره
                                                                            <i class="fa fa-plus"></i>
                                                                     </a>
                                                            </li>
                                                            <li>
                                                                    <a data-toggle="modal" href="#education"  id="sample_editable_1_new" class="btn blue btn-sm btn-outline sbold uppercase">اضف تعليم
                                                                            <i class="fa fa-plus"></i>
                                                                     </a>
                                                            </li>
                                                            <li>
                                                                    <a data-toggle="modal" href="#lang"  id="sample_editable_1_new" class="btn blue btn-sm btn-outline sbold uppercase">اضف اللغه
                                                                            <i class="fa fa-plus"></i>
                                                                         </a>
                                                            </li>
                                                            <li>
                                                                    <a href="{{route('cv.edit', $user->id)}}"
                                                                            class="btn dark btn-sm btn-outline sbold uppercase">
                                                                            <i class="fa fa-edit"> تعديل </i>
                                                                        </a>
                                                            </li>
                                                            <li>
                                                                    <button type="submit" class="btn red">
                                                                            <i class="fa fa-edit">حذف</i>
                                                                    </button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                </form>
                                            </td>
                                        </tr>


                                        <div class="modal fade" id="add_level" tabindex="-1" role="basic" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> <img src=" {{asset('vendor/img/remove-icon-small.png')}} " alt="" srcset=""> </button>
                                                        <h4 class="modal-title">إضافة خبره جديد</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                                    <!-- BEGIN PAGE BASE CONTENT --> 
                                                <div class="row"> 
                                                    <div class="col-md-12 ">
                                                        <!-- BEGIN SAMPLE FORM PORTLET-->
                                                <div class="p-3"> 
                                                <div class="portlet-body form">
                                                <form class="form-horizontal" id="expert-form" role="form" method="POST" action="{{route('experiences.store')}}" enctype="multipart/form-data">
                                                        @csrf
                                                    <input type="hidden" name="user_id" value="{{$user->id}}">
                                                    <br><h4 class="text-left m-3">الخبرة </h4><br>
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">الدور الوظيفي</label>
                                                        <div class="col-md-4">
                                                        <select class="form-control" name="role_id">
                                                            <option disabled selected>الدور الوظيفي</option>
                                                            @foreach ($roles as $role)     
                                                            <option value="{{$role->id}}">{{$role->ar_name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                    
                                                    <label class="col-md-1 control-label">التخصص </label>
                                                        <div class="col-md-4">
                                                        <select class="form-control" name="sub_special_id">
                                                            <option disabled selected>التخصص</option>
                                                            @foreach ($sub_specials as $sub_special)     
                                                            <option value="{{$sub_special->id}}">{{$sub_special->ar_name}}</option>
                                                            @endforeach
                                                        </select>
                                                        </div>
                                                    </div>
                                                  <div class="form-group">
                                                        <label class="col-md-2 control-label"> سنين الخبرة</label>
                                                        <div class="col-md-4">
                                                            <input type="text" class="form-control  " placeholder="مثال: 1 شهر و2 سنة " name ="expert_year">
                                                         </div>
                                                    
                                                        <label class="col-md-1 control-label">المستوي الوظيفي</label>
                                                        <div class="col-md-4">
                                                          <select class="form-control" name="level_id">
                                                                <option disabled selected>المستوي الوظيفي</option>
                                                                @foreach ($levels as $level)     
                                                               <option value="{{$level->id}}">{{$level->ar_name}}</option>
                                                               @endforeach
                                                            </select>
                                                        </div>
                                                        </div>
                                                    
                                                        <div class="form-group">
                                                                <label class="col-md-2 control-label"> بداية العمل في الخبرة</label>
                                                                <div class="col-md-4">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <input type="text" class="form-control  " placeholder="الشهر مثلا: 1 " name ="start_month">
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <input type="text" class="form-control  " placeholder="السنه مثالا: 2000 " name ="start_year">
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                    <label class="col-md-1 control-label">نهاية العمل في الخبرة</label>
                                                                    <div class="col-md-4">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                                <input type="text" class="form-control  " placeholder="الشهر مثلا: 1" name ="end_month">
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                                <input type="text" class="form-control  " placeholder="السنه مثالا: 2000 " name ="end_year">
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                            </div>

                                                            <div class="form-group">
                                                                    <label class="col-md-2 control-label">الشركه التي عملتا بها</label>
                                                                    <div class="col-md-9">
                                                                        <input  class="form-control" rows="3" name="last_company" placeholder=" مثال : السودان اليوم ">
                                                                    </div>
                                                                </div>
                                                        <div class="form-group">
                                                                <label class="col-md-2 control-label">الوصف</label>
                                                                <div class="col-md-9">
                                                                    <textarea class="form-control" rows="3" name="ar_description"></textarea>
                                                                </div>
                                                            </div>
                                                
                                                            <div class="form-group">
                                                                    <label for="exampleInputFile" class="col-md-2 control-label">السيرة الذاتية</label>
                                                                    <div class="col-md-8">
                                                                        <input type="file" id="exampleInputFile" name="expert_pdf">
                                                                        <p class="help-block">ملف (اختياري)</p>
                                                                    </div>
                                                                </div> 
                                                                        
                                                                </form>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                    </div>
                                    
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn dark btn-outline" data-dismiss="modal">إلغاء</button>
                                                <button type="button" class="btn green" onclick="event.preventDefault();
                                                 document.getElementById('expert-form').submit();">حفظ</button>
                                            </div>
                                            </div>
                                            <!-- /.modal-content -->
                                            </div>
                                        <!-- /.modal-dialog -->
                                        </div>
                                            <!-- /.modal-dialog -->
                                      </div>
                                        

                                     <div class="modal fade" id="lang" tabindex="-1" role="basic" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> <img src=" {{asset('vendor/img/remove-icon-small.png')}} " alt="" srcset=""> </button>
                                                            <h4 class="modal-title">معلومات اللغات</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                                        <!-- BEGIN PAGE BASE CONTENT --> 
                                                    <div class="row"> 
                                                        <div class="col-md-12 ">
                                                            <!-- BEGIN SAMPLE FORM PORTLET-->
                                                    <div class="p-3"> 
                                                    <div class="portlet-body form">
                                                    <form class="form-horizontal" id="user-form-lang" role="form" method="POST" action="{{route('cv.store')}}">
                                                        @csrf
                                                        <input type="hidden" name="select" value="lang" >
                                                        <input type="hidden" name="select_form" value="{{$user->id}}" >
                                                        <div class="form-body">
                                                        <br><h4 class="text-left m-3">اللغات </h4><br>
                                                        <div class="form-group">
                                                                <label class="col-md-2 control-label">اختر اللغة</label>
                                                                <div class="col-md-4">
                                                                    <select class="form-control" name="language">
                                                                            <option disabled selected>اللغه</option>
                                                                            <option value="Arabic">العربية</option>
                                                                            <option value="English">الانجليزية</option>
                                                                            </select>
                                                                    </div>
                            
                                                                    <label class="col-md-1 control-label" >اختر المستوي</label>
                                                                    <div class="col-md-4">
                                                                        <select class="form-control" name="language_level">
                                                                                <option disabled selected>مستوى اللغه</option>
                                                                                <option value="Beginner">مبتدئي</option>
                                                                                <option value="Intermediate">متوسط</option>
                                                                                <option value="Mother tounge">اللغه الاساسيه</option>
                                                                                </select>
                                                                        </div>
                                                               </div>
                                                            
                                                                </form>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                    </div>
                                        
                                                    </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn dark btn-outline" data-dismiss="modal">إلغاء</button>
                                                        <button type="button" class="btn green" onclick="event.preventDefault(); document.getElementById('user-form-lang').submit();">حفظ</button>
                                                </div>
                                                </div>
                                                <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                                </div>
                                                    <!-- /.modal-dialog -->
                                     </div>
            </div>

             <div class="modal fade" id="education" tabindex="-1" role="basic" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> <img src=" {{asset('vendor/img/remove-icon-small.png')}} " alt="" srcset=""> </button>
                                <h4 class="modal-title">إضافة مستخدم جديد</h4>
                            </div>
                            <div class="modal-body">
                                            <!-- BEGIN PAGE BASE CONTENT --> 
                        <div class="row"> 
                       <div class="col-md-12 ">
                                <!-- BEGIN SAMPLE FORM PORTLET-->
                        <div class="p-3"> 
                        <div class="portlet-body form">
                         <form class="form-horizontal" id="edu-form-add" role="form" method="POST" action="{{route('cv.store')}}">
                            @csrf
                            <input type="hidden" name="select" value="edu" >
                            <input type="hidden" name="select_form" value="{{$user->id}}" >
                            <div class="form-body">
                                    <br><h4 class="text-left m-3"> معلومات التعليم</h4><br>
                                    <div class="form-group">
                                            <label class="col-md-2 control-label" >المؤهلات</label>
                                            <div class="col-md-4">
                                                <select class="form-control" name="qualification">
                                                        <option selected disabled>اختر المؤهل</option>
                                                        <option value="Diploma ">دبلوم</option>
                                                        <option value="Bachelor">بكالريوس</option>
                                                        <option value="Master">ماجستير</option>
                                                        <option value="PH">دكتوراه</option>
                                                        </select>
                                                </div>
            
                                        <label class="col-md-1 control-label">الجامعة</label>
                                        <div class="col-md-4">
                                                <input type="text" class="form-control" name="university" placeholder="مثال: جامعة الجزيرة" id="">
                                        </div>
                                    </div>
            
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">التخصص</label>
                                            <div class="col-md-4">
                                                <select class="form-control" name="special_id">
                                                        <option disabled selected>اختر التخصص</option>
                                                        @foreach ($sub_specials as $sub)
                                                        <option value="{{$sub->id}}">{{$sub->ar_name}}</option>
                                                        @endforeach
                                                        </select>
                                                </div>
            
                                        <label class="col-md-1 control-label">تاريخ التخرج</label>
                                        <div class="col-md-4">
                                                <input type="date" class="form-control" name="grade_date" id="">
                                            </div>
                                            </div>
            
                                    <div class="form-group">
                                <label class="col-md-2 control-label">المعدل</label>
                                <div class="col-md-4">
                                        <input type="text" class="form-control" name="grade" placeholder="مثال: 3.00 من 4.00" id="">
                                        </div>
                                        </div> 
                                     </div>    
                                    </form>
                                </div>
                            </div> 
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn dark btn-outline" data-dismiss="modal">إلغاء</button>
                            <button type="button" class="btn green" onclick="event.preventDefault(); document.getElementById('edu-form-add').submit();">حفظ</button>
                    </div>
                    </div>
                    <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                    </div>
                        <!-- /.modal-dialog -->
             </div>
            <!-- BEGIN ADD_company MODEL -->

                                                    
                                     @endforeach
                                 </tbody>
                          </table>
                    </div>
                </div>
            </div>
            </div>
            </div>
            <!-- END DATATABLE -->

<!-- BEGIN ADD_company MODEL -->
    <div class="modal fade" id="add_user" tabindex="-1" role="basic" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> <img src=" {{asset('vendor/img/remove-icon-small.png')}} " alt="" srcset=""> </button>
                    <h4 class="modal-title">إضافة مستخدم جديد</h4>
                </div>
                <div class="modal-body">
                                <!-- BEGIN PAGE BASE CONTENT --> 
            <div class="row"> 
                <div class="col-md-12 ">
                    <!-- BEGIN SAMPLE FORM PORTLET-->
            <div class="p-3"> 
            <div class="portlet-body form">
             <form class="form-horizontal" id="user-form-add" role="form" method="POST" action="{{route('cv.store')}}">
                @csrf
                <input type="hidden" name="select_user" value="user">
                <div class="form-body">
                    <h4 class="text-left m-3">البيانات الشخصية</h4><br>
                    <div class="form-group">
                        <label class="col-md-2 control-label"> الاسم الاول</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="ادخل إسم رباعي " name="ar_name">
                          </div>  

                          <label class="col-md-1 control-label">الاسم الاخير</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="ادخل إسم رباعي " name="ar_last_name">
                          </div>  
                    </div>
                    <div class="form-group">
                            <label class="col-md-2 control-label">البريد الاكتروني</label>
                            <div class="col-md-4">
                                <input type="email" name="email" class="form-control  " placeholder=" ادخل البريد الاكتروني">
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
                                        <option selected disabled>اختر بلدك</option>
                                        @foreach ($countries as $country)
                                        <option value="{{$country->id}}">{{$country->ar_name}}</option>
                                            
                                        @endforeach
                                    </select>
                                </div> 

                              <label class="col-md-1 control-label">العنوان</label>
                              <div class="col-md-4">
                                    <select class="form-control" name="birth_id">
                                        <option disabled selected>اختر مكان الميلاد </option>
                                        @foreach ($cities as $city) 
                                        <option value="{{$city->id}}">{{$city->ar_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                        </div>

                        <div class="form-group">
                                <label class="col-md-2 control-label">مكان الميلاد</label>
                                <div class="col-md-4">
                                      <select class="form-control" name="city_id">
                                          <option disabled selected>اختر مكان الميلاد </option>
                                          @foreach ($cities as $city) 
                                          <option value="{{$city->id}}">{{$city->ar_name}}</option>
                                          @endforeach
                                          
                                      </select>
                                  </div>

                              <label class="col-md-1 control-label">تاريخ الميلاد</label>
                              <div class="col-md-4">
                                    <input type="date" class="form-control" name="birthdate" id="">
                                </div>
                        </div>

                        <div class="form-group">
                                <label class="col-md-2 control-label"> الديانة  </label>
                                <div class="col-md-4">
                                      <select class="form-control" name="religion">
                                          <option disabled selected>اختر الديانة  </option>
                                          <option value="Muslime">مسلم</option>
                                          <option value="Christian">مسيحي</option>
                                          <option value="Gushin">يهودي </option>
                                          <option value="Other">اخرى</option>
                                      </select>
                                  </div>

                              <label class="col-md-1 control-label">الحالة الاجتماعية</label>
                              <div class="col-md-4">
                                    <select class="form-control" name="social_status">
                                        <option disabled selected>اختر الحالة الاجتماعية  </option>
                                        <option value="Married">متزوج</option>
                                        <option value="Single">اعزب </option>
                                    </select>
                                </div>
                        </div>

                        <div class="form-group">
                                <label class="col-md-2 control-label">رقم الجواز</label>
                                <div class="col-md-4">
                                    <input type="text" name="idint_1" class="form-control" id="" placeholder="مثلا 233456765">
                                </div>
                                  <label class="col-md-1 control-label">الرقم الوطني</label>
                                  <div class="col-md-4">
                                        <input type="text" name="idint_2" class="form-control  " placeholder="مثلا 188-15-34-567-45">
                                    </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-2 control-label">التخصص</label>
                                <div class="col-md-4">
                                    <select class="form-control" name="special_id">
                                            <option selected disabled >اختر التخصص</option>
                                            @foreach ($sub_specials as $sub)
                                             <option value="{{$sub->id}}">{{$sub->ar_name}}</option>
                                            @endforeach
                                            </select>
                                    </div>

                                <label class="col-md-1 control-label">الدور الوظيفي</label>
                                <div class="col-md-4">
                                    <select class="form-control" name="role_id">
                                            <option selected disabled >الدور الوظيفي</option>
                                            @foreach ($roles as $role)
                                             <option value="{{$role->id}}">{{$role->ar_name}}</option>
                                            @endforeach
                                            </select>
                                    </div>
                            </div>

                            <br><h4 class="text-left m-3">بيانات الاتصال</h4><br>
                            <div class="form-group">
                                    <label class="col-md-2 control-label">رقم الهاتف</label>
                                    <div class="col-md-4">
                                            <input type="text" name="phone" class="form-control  " placeholder=" ادخل رقم الهاتف">
                                     </div> 
                                </div> 
                         </div>    
                        </form>
                    </div>
                </div> 
            </div>
            </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn dark btn-outline" data-dismiss="modal">إلغاء</button>
                <button type="button" class="btn green" onclick="event.preventDefault(); document.getElementById('user-form-add').submit();">حفظ</button>
        </div>
        </div>
        <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
        </div>
            <!-- /.modal-dialog -->
    </div>
<!-- BEGIN ADD_company MODEL -->

@endsection

<!-- BEGIN SCRIPTS -->
@section('scripts')
<script src="{{ asset('vendor/js/datatable.js') }}"></script>
<script src="{{ asset('vendor/plugins/datatables/datatables.min.js') }}"></script>
<script src="{{ asset('vendor/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') }}"></script>
<script>
    //Datatable
    $(document).ready(function () {
        $('#users-table').DataTable();
    });

</script>
@endsection
<!-- END SCRIPTS -->
