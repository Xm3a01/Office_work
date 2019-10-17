@extends('dashboard.metronic')
@section('content')


<div class="page-head">
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
            <h1> جدول المجالات
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
            <span class="active">تعديل المستوى  جديد  </span>
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
                        <span class="caption-subject font-dark bold uppercase">تعديل المستوى جديد</span>
                    </div>
                 </div> 
        <div class="portlet-body form">
            <form class="form-horizontal" role="form" method="POST" action="{{route('experiences.update',$experience->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <br><h4 class="text-left m-3">الخبرة </h4><br>
                        <div class="form-group">
                                <label class="col-md-2 control-label">صاحب الخبره</label>
                                <div class="col-md-4">
                                 <select class="form-control" name="user_id">
                                    <option disabled >صاحب الخبره</option>
                                    @foreach ($users as $user)     
                                    <option value="{{$user->id}}" {{($experience->user_id == $user->id) ? 'selected' : ''}}>{{$user->ar_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">الدور الوظيفي</label>
                            <div class="col-md-4">
                            <select class="form-control" name="role_id">
                                <option disabled >الدور الوظيفي</option>
                                @foreach ($roles as $role)     
                                <option value="{{$role->id}}" {{($experience->a_role == $role->ar_name) ? 'selected' : ''}}>{{$role->ar_name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <label class="col-md-1 control-label">التخصص </label>
                            <div class="col-md-4">
                            <select class="form-control" name="sub_special_id">
                                <option disabled selected>التخصص</option>
                                @foreach ($sub_specials as $sub_special)     
                                <option value="{{$sub_special->id}}" {{($experience->ar_sub_special == $sub_special->ar_name) ? 'selected' : ''}}>{{$sub_special->ar_name}}</option>
                                @endforeach
                            </select>
                            </div>
                        </div>
                      <div class="form-group">
                            <label class="col-md-2 control-label"> سنين الخبرة</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control  " placeholder="مثال: 1 شهر و2 سنة " name ="expert_year" value="{{$experience->expert_year}}">
                             </div>
                        
                            <label class="col-md-1 control-label">المستوي الوظيفي</label>
                            <div class="col-md-4">
                              <select class="form-control" name="level_id">
                                    <option disabled >المستوي الوظيفي</option>
                                    @foreach ($levels as $level)     
                                   <option value="{{$level->id}}" {{($experience->ar_level == $level->ar_name) ? 'selected' : ''}}>{{$level->ar_name}}</option>
                                   @endforeach
                                </select>
                            </div>
                            </div>
                        
                            <div class="form-group">
                                    <label class="col-md-2 control-label"> بداية العمل في الخبرة</label>
                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-md-6">
                                                    <input type="text" class="form-control  " placeholder="الشهر مثلا: 1 " name ="start_month" value="{{$experience->start_month}}">
                                            </div>
                                            <div class="col-md-6">
                                                    <input type="text" class="form-control  " placeholder="السنه مثالا: 2000 " name ="start_year" value="{{$experience->start_year}}">
                                            </div>
                                        </div>
                                        </div>
                                        <label class="col-md-1 control-label">نهاية العمل في الخبرة</label>
                                        <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-md-6">
                                                    <input type="text" class="form-control  " placeholder="الشهر مثلا: 1" name ="end_month" value="{{$experience->end_month}}">
                                            </div>
                                            <div class="col-md-6">
                                                    <input type="text" class="form-control  " placeholder="السنه مثالا: 2000 " name ="end_year" value="{{$experience->end_year}}">
                                            </div>
                                        </div>
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label class="col-md-2 control-label">الشركه التي عملتا بها</label>
                                        <div class="col-md-9">
                                            <input  class="form-control" rows="3" name="last_company" placeholder=" مثال : السودان اليوم " value="{{$experience->last_company}}">
                                        </div>
                                    </div>
                            <div class="form-group">
                                    <label class="col-md-2 control-label">الوصف</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" rows="3" name="ar_description"> {{$experience->ar_summary}} </textarea>
                                    </div>
                                </div>
                    
                                <div class="form-group">
                                            <label for="exampleInputFile" class="col-md-2 control-label">السيرة الذاتية</label>
                                            <div class="col-md-8">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input type="file" id="exampleInputFile" name="expert_pdf">
                                                    <p class="help-block">ملف (اختياري)</p>
                                                </div>
                                                <div class="col-md-6">
                                                    <a class="btn btn-blue" href="{{Storage::url($experience->expert_pdf)}}">Show my CV document</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                            <button type="submit" class="btn green">حفظ</button>
                            
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div> 
</div>
</div>



@endsection