@extends('layouts.defaultclient')
@section('content')
  
      
    <div class="site-section bg-light">
      <div class="container">
        <div class="row  pt-5 px-2 mt-4 justify-content-center"> 
          <div class="col-lg-8 col-md-8 col-sm-12 ">
            <div class="">
              <!--comlete your cv-->
              <div class="mb-3 text-center bg-white d-block d-md-flex rounded border-right border-danger">
                  </div>
                  <div class="alert alert-primary p-4"  role="alert">
                        ملاحظة هامة: عندما تقوم بأي تعديل على البيانات الشخصية, سوف تظهر التغييرات على جميع السير الذاتية التي تحتفظ بها على الموقع وكذلك فان التغييرات التي تجريها سوف تنعكس على بيانات السير الذاتية المرفقة سابقا بأي وظيفة تقدمت اليها.
                </div>
    <div class="bg-white mb-3 rounded">
       <div class="card">
          <div class="card-header  d-flex justify-content-between">
            <h5>معلوماتي  </h5>
            <a href="" data-toggle="modal" data-target="#my_info" ><img src=" {{asset('asset/images/edit.png')}} " alt=""  class="p-1 align-left float-left   cursor-pointer"></a> 
          </div>
            <div class="card-body">
                <table class="table table-borderless">
                <tr>
                  <th scope="col"> الاسم الاول</th> 
                  <td>ahmedd</td>
                </tr> 
                <tr>
                  <th scope="col">   الاسم الاخير</th> 
                  <td>moh</td>
                </tr> 
                <tr>
                  <th scope="row">البريد الالكتروني</th>
                  <td>d@gmail.com</td> 
                </tr> 
                <tr>
                        <th scope="col">المجال</th> 
                        <td>IT</td>
                      </tr> 
                </table>
            </div>
        </div>
    </div>

    <div class="bg-white mb-3 rounded">
            <div class="card">
                <div class="card-header  d-flex justify-content-between">
                  <h5>كلمة السر</h5>
                  <a href="" data-toggle="modal" data-target="#password" ><img src=" {{asset('asset/images/edit.png')}} " alt=""  class="p-1 align-left float-left   cursor-pointer"></a> 
                </div>
                  <div class="card-body ">
                      <table class="table table-borderless">
                      <tr class="py-2">
                        <th scope="col"> تغيير كلمة السر الخاصة بحسابك</th> 
                       </tr>  
                      </table>
                  </div>
              </div>
          </div>
      
    
 
 
         </div>
       </div>
     </div>
   </div>
 </div>
</div>
  
 
<!-- edit personal data model -->
<div class="modal fade" id="my_info" style="padding-right: 0;" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-full" role="document">
        <div class="modal-content fill-cont">
            <div class="modal-header">
                <h5 class="modal-title">تعديل البيانات الشخصية </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body p-4" id="result"> 
                <div class="row justify-content-center">
                    <div class="form-row col-md-6">
                        <div class="form-group col-md-6">
                            <label for="inputAddress">الاسم الاول</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="الاسم الاول">
                          </div>
                          <div class="form-group col-md-6">
                                <label for="inputAddress">الاسم الاخير</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="الاسم الاول">
                              </div>
                          <div class="form-group col-md-6">
                            <label for="inputAddress">الايميل</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="ادخل الايميل">
                          </div> 
                          <div class="form-group col-md-6">
                                <label for="inputEmail4">المجال</label>
                                <select id="inputState" class="form-control">
                                  <option>اختر المجال</option>
                                  <option>السودان</option>
                                </select>
                              </div>
                       
                    <div class="form-groub col-md-12">
                    <div class="text-center py-5">
                        <a href="#" class="btn btn-primary px-3 "> حفظ </a> 
                          </div>
                      </div>

                  </div>
                </div>
            </div>
        </div> 
    </div>
</div>
<!-- end personal data model -->

<!-- change password model -->
<div class="modal fade" id="password" style="padding-right: 0;" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-full" role="document">
            <div class="modal-content fill-cont">
                <div class="modal-header">
                    <h5 class="modal-title">تغيير كلمة السر</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body p-4" id="result"> 
                    <div class="row justify-content-center">
                        <div class="form-row col-md-8">
                            <div class="form-group col-md-4">
                                <label for="inputAddress">كلمة السر السابقة</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="ادخل كلمة السر  ">
                              </div>
                              <div class="form-group col-md-4">
                                <label for="inputAddress">كلمة السر الجديدة</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="ادخل كلمة السر  ">
                              </div> 
                              <div class="form-group col-md-4">
                                    <label for="inputAddress">تأكيد كلمة السر  </label>
                                    <input type="text" class="form-control" id="inputAddress" placeholder="ادخل كلمة السر ">
                                  </div> 
                           
                        <div class="form-groub col-md-12">
                        <div class="text-center py-5">
                            <a href="#" class="btn btn-primary px-3 "> حفظ </a> 
                              </div>
                          </div>
    
                      </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
    <!-- end change password model -->
  
    @endsection