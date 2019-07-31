@extends('dashboard.layout.admin_layout')
@section('page_title')
Search
@endsection
@section('style')
{!!Html::style('css/singleJob.css')!!}
@endsection
@section('script')
{{--asset('js/managejob.js')--}}
{!!Html::script('js/managejob.js')!!}
@endsection
@section('content')


    <style>
        .remove
        {
            border: 1px solid #7889ff;
        color: #7889ff;

        }
        .btn-profile {
            
                font-size:10px !important;
            }
            .btn
            {
                font-size:12px !important;
            }
            
            
    @media (min-width: 768px) {
        .aconntmenu
        {
            margin-left:-7%;
        }
        .container
        {
        /* width: 1600px !important;*/
        }
    .accondlondon
    {
        margin: -5% 0 15px 0;
        color:gray;
    }
    .leftcont
    {
        color:gray;
    }
    .current
    {
        color:#7889ff;
        
    }

    .current  .col-md-10
        {
            font-weight:bold;
            color:black;
        }
        .content
        {
            margin-left:-7%;border-right: thin solid lightgray;
        }

        .row {
        margin-bottom: 0px; 
        }
    }
        
    }
    </style>
    <section style="">
        <div style="margin-top:2%;    " class="container">
        <div class="row">   
        <div class="col-md-2">
              
        </div>

        
    
        
        
        <div style="" class="col-md-7" >
        <h1 class="Posthed">Job Details</h1>
        
            <div class="row">
        <div class="col-md-1"></div>
                <div class="col-md-8">
        <div class="col-md-7"  >
        Birth Date
            </div>
            <div class="col-md-5">
            {{$jobprofile->jobseeker_dob}}
        </div>
            
    
        <div class="col-md-7"  >
            Gender
            </div>
            <div class="col-md-5">
            {{$jobprofile->jobseeker_gender}}

            </div>
            
            
            <div class="col-md-7"  >
    Marital Status
            </div>
            <div class="col-md-5">
        {{$jobprofile->jobseeker_maritalstatus}}

                
            
            </div>
                    
                    
                    <div class="col-md-7">
    Current Location
            </div>
            <div class="col-md-5">
            {{$jobprofile->jobseeker_current_location}}

                
            
            </div>
            <div class="col-md-7">
            Nationality
            </div>
            <div class="col-md-5">
            {{$jobprofile->jobseeker_nationality}}


                
            
            </div>
            <div class="col-md-7">
            Visa Type
            </div>
            <div class="col-md-5">
            {{$jobprofile->VISA_status}}

                
            
            </div>
            <div class="col-md-7">
            Driving Lisence Issued From
            </div>
            <div class="col-md-5">
            {{$jobprofile->Driving_Licence}}

                
            
            </div>
            <div class="col-md-7">
    NOC
            </div>
            <div class="col-md-5">
            {{$jobprofile->NOC}}

                
            
            </div>
        
            </div>
            

    
            </div>
<hr>
             <h1 class="Posthed">Contact Info</h1>
        
        <div class="row">
    <div class="col-md-1"></div>
            <div class="col-md-8">
    <div class="col-md-7"  >
    Email Address
        </div>
        <div class="col-md-5">
        {{$jobprofile->jobseeker_email}}
    </div>
        

    <div class="col-md-7"  >
    Mobile Phone
        </div>
        <div class="col-md-5">
        {{$jobprofile->jobseeker_phone1}}


        </div>
        
        <!--
        <div class="col-md-7"  >
        Website
        </div>
        <div class="col-md-5">
    Single

            
        
        </div>
                -->
                
             
    
    
        </div>
        
<hr>
<h1 class="Posthed">Preferred Job</h1>
        
        <div class="row">
    <div class="col-md-1"></div>
            <div class="col-md-11">
    <div class="col-md-5"  >
    Target Job Title
        </div>
        <div class="col-md-7">
        {{$jobprofile->target_title}}
            </div>
        

    <div class="col-md-5"  >
    Job Role
        </div>
        <div class="col-md-7">
        {{$jobprofile->target_tags}}
        </div>
        
        
        <div class="col-md-5"  >
        Career Level
        </div>
        <div class="col-md-7">
        {{$jobprofile->target_career_level}}


            
        
        </div>
                
                
                <div class="col-md-5">
                Target Job Location
        </div>
        <div class="col-md-7">
        {{$jobprofile->name}}

            
        
        </div>
        <div class="col-md-5">
        Career Objective
        </div>
        <div class="col-md-7">
        {{$jobprofile->target_objective}}

            ''
        
        </div>
        <div class="col-md-5">
        Target Industry
        </div>
        <div class="col-md-7">
        {{$jobprofile->industrytypename}}

            
        
        </div>
        <div class="col-md-5">
        Employment Type
        </div>
        <div class="col-md-7">
        {{$jobprofile->target_employment_type}}

            
        
        </div>
        <div class="col-md-5">
        Expected Salary
        </div>
        <div class="col-md-7">
        {{$jobprofile->target_salary}}

            
        
        </div>

           <div class="col-md-5">
           Notice Period 
        </div>
        <div class="col-md-7">
        {{$jobprofile->target_notice_period}}

            
        
        </div>
    
        </div>
        
<hr>


        </div>

         <h1 class="Posthed">Education</h1>
        
        <div class="row">
    <div class="col-md-1"></div>
            <div class="col-md-11">
     @foreach($edu->details as $details) 
<div class="col-md-6">{{$details->stream}}</div>
<div class="col-md-1" style="font-weight:bold">{{$details->score}}</div>
<div class="col-md-5" style="font-weight:bold;text-align:right;    border-right: 2px solid #A6B1BE;;">{{$details->companyname}} {{$details->city}}
{{$details->sdate}} - {{$details->edate}}</div>
<div class="col-md-12">
<small>{{$details->description}}</small>


</div>
@endforeach
<h4>
@foreach($edu->degree as $degree)
<button class="remove btn-profile" ><a href="/{{$degree->path}}">{{$degree->name}}</a></button>

@endforeach
</h4>
        </div>
   <br>     
<hr>
 

        </div>

         <h1 class="Posthed">Experience</h1>
        
        <div class="row">
    <div class="col-md-1"></div>
            <div class="col-md-11">
    <div class="col-md-12"  >
 @foreach($exp->experience as $e)
   <h5 style="font-weight:bold">
{{$e->location}}
   </h5>
   <h6>
{{$e->sdate}} - {{$e->edate}}
   </h6>
   <hr>

   <h5>
{{$e->description}}
   </h5>
<br><br>
@endforeach
  
    </div>
        </div>
        
<hr>
<h1 class="Posthed">Skills</h1>
        
<div class="row">
    <div class="col-md-1"></div>
            <div class="col-md-11">
    <div class="col-md-12"  >
   
   <h6>
   Language/Markup
   </h6>


   <h5>
   @foreach(explode(',', $exp->skills) as $skill) 
    <button class="remove btn-profile" >{{$skill}}</button>

    @endforeach

   </h5>

    </div>
        </div>
        
<hr>


        </div>

         <h1 class="Posthed">Resume Attachments</h1>
        
         <div class="row">
    <div class="col-md-1"></div>
            <div class="col-md-11">
    <div class="col-md-12"  >
   


   <h5>
@foreach($jobprofile->cv as $cv)
<a href="/{{$cv->path}}" style="color:white">  <button  type="file" id="exampleFormControlFile1" class=" form-control-file " >{{$cv->name}}</a></button>

   @endforeach
   </h5>

    </div>
        </div>
        



        </div>

        </div>

        </div>
       <p style="margin-top:10%;color: #E86850;"> Please note: Any information you change in "My Account" will also be changed in your Resume. </p>
            </div>
  


            
    



        <div class="col-md-2">

   
    </div>


    </section>



@endsection