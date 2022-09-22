@extends('layouts.layout')
@section('content')
    <form action="{{url('/')}}/form" method="post">
        @csrf
        <div class="container">
          <br><h2 class="text-center"> EMINENTURE C-SAT SURVEY</h2>
           <h5 class="text-center"> We would love to hear your thoughts on how we can improve our performance</h5><br>
           <h2 class="text-black-50"> CUSTOMER FEEDBACK </h2>
           <p> Please take few moments to complete the Customer Satisfaction Survey form.<br>Based on your experience with EMINENTURE PRIVATE LIMITED, please mark the response on the scale as in the drop down 
               menu that best describes your views on the following questions. </p>
           <p>Each question or its sub-parts are to be responded for two ratings - Importance Rating and Satisfaction Rating. Importance Rating
              signies the degree of your importance attach to a particular parameter and satisfaction rating signies your
              degree of satisfaction with that parameter. Both these ratings are essential for us to develop our action plan.
              If any satisfaction Rating response is 3 or below 3, please qualify with comments or highlight specic
              instances wherever possible, in the space provided below each section.</p><br>
            <h2 class="text-black-50"> CUSTOMER INFORMATION </h2><br>
           <div class="form-group">
               <label for="">ORGANIZATION<span class="text-danger">*</span></label>
               <input type="text" name="organization" class="form-control" aria-describeddby="helpId"/>
               <span class="text-danger">
                @error('organization')
                {{$message}}
                @enderror
              </span>
            </div>
            <div class="form-group">
               <label for="">PROJECT NAME<span class="text-danger">*</span></label>
                <input type="text" name="projectname" class="form-control" aria-describeddby="helpId"/>
                <span class="text-danger">
                @error('projectname')
                {{$message}}
                @enderror
              </span>
            </div>
            <div class="form-group">
               <label for="">PERSON NAME<span class="text-danger">*</span></label>
                <input type="text" name="personname" class="form-control" aria-describeddby="helpId"/>
                <span class="text-danger">
                @error('personname')
                {{$message}}
                @enderror
              </span>
            </div>
           <div class="form-group">
               <label for="">Email<span class="text-danger">*</span></label>
                <input type="email" name="email" class="form-control" aria-describeddby="helpId"/>
              <span class="text-danger">
                @error('email')
                {{$message}}
                @enderror
              </span>
            </div>
            <div class="form-group">
               <label for="">Phone Number<span class="text-danger">*</span></label>
               <input type="number" name="MobileNumber" class="form-control" aria-describeddby="helpId"/>
               <span class="text-danger">
                @error('MobileNumber')
                {{$message}}
                @enderror
              </span>
            </div>
            <a href="/form/page1">
              <button class="btn btn-primary">
                NEXT
             </button>
            </a>
        </div>
    </form>
@endsection