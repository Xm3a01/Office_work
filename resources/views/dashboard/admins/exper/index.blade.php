@extends('dashboard.metronic')
@section('title', ' جدول الخبرات')
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
            <h1> جدول الخبرات
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
            <span class="active">جدول الخبرات</span>
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
                            <span class="caption-subject font-dark bold uppercase">جدول الخبرات</span>
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
                                <a data-toggle="modal" href="#add_level"  id="sample_editable_1_new" class="btn green">  أضف مجال جديد
                                    <i class="fa fa-plus"></i>
                                </a>
                            </div>
                        </div>
                        <table id="users-table" class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th>صاحب الخبره</th>
                                <th>الدور الوظيفي</th>
                                <th>التخصص</th>
                                <th>سنيت الخبره</th>
                                <th>المستوى الوظيفي</th>
                                <th>بدية العمل  في الخبره</th>
                                <th>نهايه العمل في الخبر</th>
                                <th>الوصف</th>
                                <th>العمليات</th>
                            </tr>
                        </thead>
                    
                        <tbody>
                            @foreach($experiences as $experience)
                            <tr>
                                <td>{{$experience->id}}</td>
                                <td>{{$experience->ar_name}}</td>
                                <td>{{$experience->ar_role}}</td>
                                <td>{{$experience->ar_sub_special}}</td>
                                <td>{{$experience->expert_years}}</td>
                                <td>{{$experience->ar_level}}</td>
                                <td>{{$experience->start_month .'/'.$experience->start_year }}</td>
                                <td>{{$experience->end_month .'/'.$experience->end_year }}</td>
                                <td>{{ $experience->ar_summary }}</td>
                                <td>
                                <form action="{{route('experiences.destroy', $experience->id)}}" method="POST">
                                    @csrf {{ method_field('DELETE') }}
                                    <a href="{{route('experiences.edit', $experience->id)}}"
                                        class="btn dark btn-sm btn-outline sbold uppercase">
                                        <i class="fa fa-edit"> تعديل </i>
                                    </a>
                                    <button type="submit" class="btn red btn-sm btn-outline sbold uppercase">
                                        <i class="fa fa-edit">حذف</i>
                                    </button>
                                </form>

                                    </td>
                                </tr>
                
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
                        <br><h4 class="text-left m-3">الخبرة </h4><br>
                        <div class="form-group">
                                <label class="col-md-2 control-label">صاحب الخبره</label>
                                <div class="col-md-4">
                                 <select class="form-control" name="user_id">
                                    <option disabled selected>صاحب الخبره</option>
                                    @foreach ($users as $user)     
                                    <option value="{{$user->id}}">{{$user->ar_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
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
