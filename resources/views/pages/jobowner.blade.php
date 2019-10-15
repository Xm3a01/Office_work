@extends('layouts.defultowner')
@section('content')
    

<div class="unit-5 overlay  " style="background-image: url(' {{asset('asset/images/hero_1.jpg')}} ');">
    <div class="container">
       <div class="row align-items-center">
           <div class="col-12" data-aos="fade">
               <div class="pb-4">
                   <h1 class="h3 text-center text-white pt-2">
                       وظّف الباحثين عن عمل بسرعة  
                       ابحث من بين {{$jobs->count()}} سيرة ذاتية</h1>
                   </div>
               <form action="#">
                   <div class="row mb-3">
                       <div class="col-md-9">
                           <div class="row">
                               <div class="col-md-6 mb-3 mb-md-0">
                                   <div class="input-wrap">
                                       <span class="icon icon-keyboard"></span>
                                       <input type="text" class=" form-control border-0 px-3"
                                           placeholder="المسمى الوظيفي أو المهارة  ">
                                   </div>
                               </div>
                               <div class="col-md-6 mb-3 mb-md-0">
                                   <div class="input-wrap">
                                       <span class="icon icon-room"></span>
                                       <input type="text" class="form-control border-0 px-3" id="autocomplete"
                                           placeholder="المدينة أو المقاطعة أو المنطقة" onFocus="geolocate()">
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-md-3">
                           <input type="submit" class="btn btn-search  btn-block" style="    background-color: transparent!important;
                           border: 2px solid #fff;
                           border-radius: 5px;
                           color: #fff;
                           font-size: 20px;"
                               value="ابحث السيرة الذاتية" data-toggle="modal" data-target="#exampleModal">
                       </div>
                   </div>
               </form>
           </div>
       </div>
   </div>
</div>


<!--start feature-->
<div class="features text-center">
       <div class="container">
           <div class="row">
               <div class="col-sm-6 col-md-4">  <img src="{{asset('asset/images/ideaicon2.png')}}" alt="">
                   <h3>Great idea</h3>
                   <p>Lorem ipsum dolor sit amet consect adipisicing elit Aperiam dolore repellendus veniam vero numquam	dolor autem reiciendis sapiente.</p>
               </div>
               <div class="col-sm-6 col-md-4"> <img src="{{asset('asset/images/ideaicon.png')}}">
                   <h3>Great idea</h3>
                   <p>Lorem ipsum dolor sit amet consect adipisicing elit Aperiam dolore repellendus veniam vero numquam dolor autem reiciendis sapiente.</p>
               </div>
               <div class="col-sm-6 col-md-4"> <img src="{{asset('asset/images/light-bulb.png')}}" width="6%" alt="">
                   <h3>Great idea</h3>
                   <p>Lorem ipsum dolor sit amet consect adipisicing elit Aperiam dolore repellendus veniam vero numquam dolor autem reiciendis sapiente.</p>
               </div> 
           </div>
        </div>
   </div>
<!--ends feature-->

<!--start pricing-->
<div class="pricing text-center">
<div class="container">
   <h1>Pricing Table</h1>
       <div class="section"><p>Lorem ipsum dolor sit amet consect elit Aperiam dolore repellendus dolor autem Lorem ipsum dolor sit amet consect elit Aperiam dolore repellendus veniam lorem ipsum dolor sit amet consect elit Aperiam dolore repellendus dolor autem Lorem</p>
       </div>	<div class="row">
               <div class=" col-md-4 col-sm-6">
                <div class="card">
                    <div class="card-body">
                           <h4 class="card-title">Small Business</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Lorem ipsum</h6>
                            <p class="card-text">299$/<span>Year</span> </p>
                            <ul class="list-group list-group-flush">
                               <li class="list-group-item">Cras justo odio</li>
                               <li class="list-group-item">Dapibus ac facilisis in</li>
                               <li class="list-group-item">Vestibulum at eros</li>
                               <li class="list-group-item">Cras justo odio</li>
                               <li class="list-group-item">Dapibus ac facilisis in</li>
                           </ul>
                               <a href="#" class="card-link">Read more</a>
                       </div>
                   </div>
               </div>
               <div class="col-md-4 col-sm-6">
                <div class="card corp">
                    <div class="card-body ">
                           <h4 class="card-title ">Corporate</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Lorem ipsum</h6>
                                <p class="card-text">199$/ <span>Year</span> </p>
                                <ul class="list-group list-group-flush">
                               <li class="list-group-item">Cras justo odio</li>
                               <li class="list-group-item">Dapibus ac facilisis in</li>
                               <li class="list-group-item">Vestibulum at eros</li>
                                   <li class="list-group-item">Cras justo odio</li>
                                   <li class="list-group-item">Dapibus ac facilisis in</li>
                             </ul>
                                <a href="#" class="card-link">Read more</a>
                       </div>
                   </div>
               </div>
               <div class="col-md-4 col-sm-12">
                <div class="card">
                         <div class="card-body">
                           <h4 class="card-title">Enterprise</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Lorem ipsum</h6>
                            <p class="card-text">99$/ <span>Year</span> </p>
                            <ul class="list-group list-group-flush">
                               <li class="list-group-item">Cras justo odio</li>
                               <li class="list-group-item">Dapibus ac facilisis in</li>
                               <li class="list-group-item">Vestibulum at eros</li>
                               <li class="list-group-item">Cras justo odio</li>
                               <li class="list-group-item">Dapibus ac facilisis in</li>
                           </ul>
                               <a href="#" class="card-link">Read more</a>
                       </div>
                   </div>
               </div>
           </div>
       </div>
</div>


@endsection