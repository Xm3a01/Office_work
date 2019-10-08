@extends('dashboard.metronic')
@section('title')
    تواصل معنا
@endsection
@section('content')

 <!-- BEGIN PAGE HEAD-->
 <div class="page-head">
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
            <h1> إتصل بنا
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
            <span class="active">  معلومات الاتصال</span>
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
                                    <span class="caption-subject font-dark bold uppercase">  معلومات الاتصال  </span>
                                </div>
                             </div> 
                    <div class="portlet-body form">
                        <form class="form-horizontal" role="form">
                            <div class="form-body"> 
                                    <div class="form-group">
                                            <label class="col-md-3 control-label">   العنوان</label>
                                            <div class="col-md-6">
                                              <input type="text" class="form-control" placeholder="ادخل  العنوان ">
                                            </div>
                                          </div> 
                                    <div class="form-group">
                                            <label class="col-md-3 control-label"> البريد الالكتروني</label>
                                            <div class="col-md-6">
                                              <input type="text" class="form-control" placeholder="ادخل  البريد الالكتروني    ">
                                            </div>
                                          </div>  
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">   رقم الهاتف</label>
                                                <div class="col-md-6">
                                                  <input type="text" class="form-control" placeholder="ادخل رقم الهاتف    ">
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