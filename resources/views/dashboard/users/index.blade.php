
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
            <span class="active"> إدارة الموظفين</span>
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
                            <span class="caption-subject font-dark bold uppercase">جدول الموظفين</span>
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
                                <button id="sample_editable_1_new" class="btn green">  أضف موظف جديد
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
    <table id="table-pagination" data-toggle="table"
        data-url="../assets/global/plugins/bootstrap-table/data/data2.json"
        data-height="299" data-pagination="true" data-search="true">
        <thead>
            <tr>
                <th data-field="state" data-checkbox="true"></th>
                <th data-field="Name" data-align="center" data-sortable="true">الإسم</th>
                <th data-field="age" data-align="center" data-sortable="true">العمر</th>
                <th data-field="email" data-align="center" data-sortable="true">البريد الالكتروني</th>
                <th data-field="nationality" data-sortable="true">الجنسية</th>
                <th data-field="city" data-sortable="true" data-sorter="priceSorter">المدينة</th>
                <th data-field="special" data-align="center" data-sortable="true">التخصص</th>
                <th data-field="yearofx" data-sortable="true" data-align="center" data-sorter="priceSorter">سنوات الخبرة</th> 
                <th data-field="qualification" data-align="center" data-sortable="true">المؤهلات</th>
                <th data-field="salary" data-sortable="true">الراتب</th> 
                <th data-field="sex" data-align="center" data-sortable="true">رقم الهاتف</th>
                <th data-field="more" data-align="center" >التفاصيل</th>
                <th data-field="" data-align="center">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td> alex Norton </td>
                <td> 2822 </td>
                <td> dal@gmail.com </td>
                <td> sudanese </td>
                <td> khartoum </td>
                <td> web developer </td>
                <td> 5000-7000 </td>
                <td>  bachelore </td>
                <td> 5 </td>  
                <td> 012345678 </td>
                <td><a name="" id="" class="btn btn-primary" href="#" role="button">المزيد</a> </td>
                <td> 
                    <a class="edit" href="javascript:;"> edit </a>
                </td>
            </tr>
            <tr>
                    <td></td>
                    <td> alex Norton </td>
                    <td> 22 </td>
                    <td> dal@gmail.com </td>
                    <td> sudanese </td>
                    <td> khartoum </td>
                    <td> web developer </td>
                    <td> 5000-7000 </td>
                    <td>  bachelore </td>
                    <td> 5 </td>  
                    <td> 012345678 </td>
                    <td><a name="" id="" class="btn btn-primary" href="#" role="button">المزيد</a> </td>
                    <td> 
                        <a class="edit" href="javascript:;"> edit </a>
                    </td>
                </tr>
                
                <tr>
                        <td></td>
                        <td> alex Norton </td>
                        <td> 22 </td>
                        <td> dal@gmail.com </td>
                        <td> sudanese </td>
                        <td> khartoum </td>
                        <td> web developer </td>
                        <td> 5000-7000 </td>
                        <td>  bachelore </td>
                        <td> 5 </td>  
                        <td> 012345678 </td>
                        <td><a name="" id="" class="btn btn-primary" href="#" role="button">المزيد</a> </td>
                        <td> 
                            <a class="edit" href="javascript:;"> edit </a>
                        </td>
                    </tr>
                    <tr>
                            <td></td>
                            <td> alex Norton </td>
                            <td> 22 </td>
                            <td> dal@gmail.com </td>
                            <td> sudanese </td>
                            <td> khartoum </td>
                            <td> web developer </td>
                            <td> 5000-7000 </td>
                            <td>  bachelore </td>
                            <td> 5 </td>  
                            <td> 012345678 </td>
                            <td><a name="" id="" class="btn btn-primary" href="#" role="button">المزيد</a> </td>
                            <td> 
                                <a class="edit" href="javascript:;"> edit </a>
                            </td>
                        </tr>
        </tbody>
    
    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END PAGE BASE CONTENT -->



@endsection