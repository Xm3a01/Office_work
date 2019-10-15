@extends('layouts.defult')
@section('content')
    


<div class="unit-5 overlay" style="background-image: url('images/hero_2.jpg');">
    <div class="container text-center">
      <h2 class="mb-0">{{$job->role}}</h2>
      <p class="mb-0 unit-6"><a href="index.html">Home</a> <span class="sep">></span> <span>Job Item</span></p>
    </div>
  </div> 

  <div class="site-section bg-light">
    <div class="container">
      <div class="row">
     
        <div class="col-md-12 col-lg-8 mb-5">
        
          
        
          <div class="p-5 bg-white">

            <div class="mb-4 mb-md-5 mr-5">
             <div class="job-post-item-header d-flex align-items-center">
               <h2 class="mr-3 text-black h4">{{$job->role}}</h2>
               <div class="badge-wrap">
                <span class="border border-warning text-warning py-2 px-2 rounded">{{$job->status}}</span>
               </div>
             </div>
             <div class="job-post-item-body d-block d-md-flex">
               <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#">{{$job->owner->company_name}}</a></div>
               <div><span class="fl-bigmug-line-big104"></span> <span>{{$job->city.' , '.$job->counrty}}</span></div>
             </div>
            </div>


          
            <div class="img-border mb-5">
              <a href="https://vimeo.com/28959265" class="popup-vimeo image-play">
                <span class="icon-wrap">
                  <span class="icon icon-play"></span>
                </span>
                <img src=" {{Storage::url($job->owner->logo)}} " alt="Image" class="img-fluid rounded">
              </a>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          
          
          <div class="p-4 mb-3 bg-white">
            <h3 class="h5 text-black mb-3">المزيد</h3>
            <p> {{$job->description}} </p>
            <p><a href="#" class="btn btn-primary  py-2 px-2" data-toggle="modal" data-target="#exampleModal">Apply Job</a></p>
          </div>
        </div>
      </div>
    </div>
  </div> 



@endsection