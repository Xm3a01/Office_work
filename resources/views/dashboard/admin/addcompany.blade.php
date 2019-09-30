@extends('layouts.defult')
@section('content')

<div class="container-fluid bg-light pt-5">
    <div class="row  justify-content-center pt-5"> 
       <div class="col-sm-6 col-md-6 col-md-offset-1 mt-4">   
        <div class="entry-content pb-1  px-3 bg-white my-3 shadow"> 
            <form action="/classic/post-a-job/" method="post" id="submit-job-form" class=" " enctype="multipart/form-data">
          <!-- Company Information Fields -->
                    <h3 class="text-center pt-3 pb-3">بيانات الشركة</h3>
                    <label for="company_name">اسم الشركة</label>
                    <div class="field required-field">
                         <input type="text" class="input-text" name="company_name" id="company_name" placeholder="أدخل اسم الشركة" value="" maxlength="" required="">
                    </div>
                    <label for="job_location">الموقع <small>(اختياري)</small></label>
                    <div class="field ">
                        <input type="text" class="input-text" name="job_location" id="job_location" placeholder="e.g. &quot;London&quot;" value="" maxlength="">
                     </div> 
                     
                    <label for="application">بريد العمل الإلكتروني / عنوان URL</label>
                    <div class="field required-field">
                        <input type="text" class="input-text" name="application" id="application" placeholder="Enter an email address or website URL" value="" maxlength="" required="">
                    </div>
                        
                    
                    <label for="inputEmail4">المجال</label>
                    <select id="inputState" class="form-control">
                      <option>طب ورعاية صحية</option>
                      <option>هندسة</option>
                    </select>   
            
                    <label for="job_description">الوصف</label> 
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            
                  
                    <label for="company_website">عنوان الموقع الالكتروني <small>(اختياري)</small></label>
                    <div class="field ">
                        <input type="text" class="input-text" name="company_website" id="company_website" placeholder="http://" value="" maxlength="">
                    </div> 
                            
                                
                    <label for="company_logo" class="file-field-label">الشعار</label>  <small class="description file-field-description">
                            Maximum file size: 2 MB.	</small>
                    <input type="file" class="input-text listify-file-upload" data-file_types="jpg|jpeg|gif|png" name="company_logo" id="company_logo" placeholder="">
                  
                                    
                            <button type="button" class="btn btn-primary btn-block mb-3"><a href="cv.html" class="text-white">تسجيل 
                            </a></button>
                    </form> 
             </div> 
           </div>
           <div class="col-md-4">
                <div class="mt-4 ml-3  bg-white p-3 shadow">
                <h3 class=" ">البحث عن السير الذاتية </h3>
                <ul class="steps">
                    <li class="step-active">ابحث ضمن أكثر من <b>  37 مليون </b> سيرة ذاتية في أي وقت.</li>
                    <li class="step-active"><b>7 ملايين زيارة شهرية</b> مما يسمح للإعلانات عن الوظائف الخاصة بك بالظهور أكثر.</li>
                    <li class="step-active">دعم سريع ومحلي من خلال 12 مكتب إقليمي.</li>
                    <li class="step-active">نحن نتكلم العربية والإنجليزية والفرنسية.</li>
                    <li class="step-active">حلول لكافة الميزانيات وبعضها مجاني!</li>
                </ul> 
              
                  <h3 class=" "> إعلانات الوظائف</h3>
                  <ul class="steps">
                      <li class="step-active">ابحث ضمن أكثر من <b>  37 مليون </b> سيرة ذاتية في أي وقت.</li>
                      <li class="step-active"><b>7 ملايين زيارة شهرية</b> مما يسمح للإعلانات عن الوظائف الخاصة بك بالظهور أكثر.</li>
                      <li class="step-active">دعم سريع ومحلي من خلال 12 مكتب إقليمي.</li>
                      <li class="step-active">نحن نتكلم العربية والإنجليزية والفرنسية.</li>
                      <li class="step-active">حلول لكافة الميزانيات وبعضها مجاني!</li>
                  </ul>
                  <div class="py-5 text-center">
                      <button class="btn btn-primary " href="mycv.html" type="button" >إتصل بنا الأن </button>
                    </div>
                </div>
        
            </div>
         </div>
    </div>
 
    
@endsection