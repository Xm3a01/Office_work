@extends('dashboard.metronic')
@section('content')


 <!-- BEGIN PAGE HEAD-->
 <div class="page-head">
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
            <h1> جدول الوظائف
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
            <span class="active">جدول الوظائف</span>
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
                            <span class="caption-subject font-dark bold uppercase">جدول الوظائف</span>
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
            <table id="table-pagination" data-toggle="table"
                data-url="../assets/global/plugins/bootstrap-table/data/data2.json"
                data-height="299" data-pagination="true" data-search="true">
            <thead>
            <tr>
                <th data-field="state" data-checkbox="true"></th>
                <th data-field="coName" data-align="center" data-sortable="true">إسم الشركة</th>
                <th data-field="city" data-sortable="true" data-sorter="priceSorter">المدينه</th>
                <th data-field="jobname" data-align="center" data-sortable="true">المسمي الوظيفي</th>
                <th data-field="jobtype" data-sortable="true" data-sorter="priceSorter">نوع العمل</th>
                <th data-field="salary" data-sortable="true">المرتب</th>
                <th data-field="Number" data-align="center" data-sortable="true">سنوات الخبرة</th>
                <th data-field="date" data-align="center" data-sortable="true">التاريخ</th>
                <th data-field="logo" data-align="center" data-sortable="true">الشعار</th>
                <th data-field="" data-align="center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jobs as $job)     
            <tr>
                <td> </td>
                <td> {{$job->ar_company_name}}</td>
                <td> {{$job->ar_city}} </td>
                <td> {{$job->ar_role}} </td>
                <td> {{$job->ar_status}}</td>
                <td> {{$job->selary}} </td>
                <td> {{$job->yearsOfExper}}</td>
                <td class="center"> {{$job->created_at}}</td>
                <td>  logo </td>
                <td> 
                    <div class="row">
                        <a class="col-md-3" href="{{route('jobs.edit', $job->id)}}"> <i class="fa fa-edit"></i></a>
                        <a class="col-md-3"
                            onclick="event.preventDefault();
                               document.getElementById('job-delete').submit();">
                                <i class="fa fa-trash"></i>
                        </a>   
                    </div>
                    <form action="{{route('jobs.destroy' , $job->id)}}" id="job-delete" method="post">
                     @csrf @method('delete')
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
    <!-- END PAGE BASE CONTENT -->


@endsection