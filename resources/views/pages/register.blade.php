@extends('layouts.defult')
@section('content')

<div class="bg-light modeltop " id="login" >
    <div class="container  justify-content-center mb-3" role="document">
        <div class=" row bg-white justify-content-center mb-5">
          <div class="col-md-6 ">
            <div class="">
                <strong> <h5 class="text-center pt-5 pb-3" id="exampleModalLabel">  أنشئ حسابك الآن</h5></strong>
            </div>
            <div class="pt-2">  
               <form action="#" class="p-2 ">
                <div class="form-row">
                        <div class="form-group col-md-6 mb-1">
                                <label for="inputEmail4">الاسم الاول</label>
                                <input type="text" class="form-control" id="" placeholder="">
                              </div>
                              <div class="form-group col-md-6 mb-1">
                                  <label for="inputEmail4">الاسم الاخير</label>
                                  <input type="text" class="form-control" id="" placeholder="">
                                </div>
                                <div class="form-group col-md-12 mb-1">
                                  <label for="inputEmail4">البريد اللإلكتروني</label>
                                  <input type="text" class="form-control" id="" placeholder="">
                                </div>
                                <div class="form-group col-md-12 mb-1">
                                  <label for="inputEmail4">المجال</label>
                                  <select id="inputState" class="form-control">
                                    <option>الطب والرعاية الصحية</option>
                                    <option>الهندسة</option>
                                    <option>تقانة المعلومات</option> 
                                  </select>
                                </div>
                                <div class="form-group col-md-12 mb-1">
                                        <label for="inputEmail4">كلمة السر</label>
                                        <input type="password" class="form-control" id="" placeholder="">
                                      </div> 
                                    
                                    <div class="form-group col-md-12 mb-1">
                                      <label for="inputEmail4">اعادة كلمة السر</label>
                                      <input type="password" class="form-control" id="" placeholder="">
                                    </div> 
                    </div>
            </form>  
            <div class="p-3"> 
                 <button type="button" class="btn btn-primary btn-block">تسجيل</button>
                  </div>
                  <p class="text-center p-5"> <u><a href="#" class="text-center">لديك حساب؟ سجل دخولك الان</a></u></p>
            </div>
          </div>
        </div>
      </div>

@endsection
    