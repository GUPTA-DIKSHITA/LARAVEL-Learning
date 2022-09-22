@extends('layouts.layout')
@section('content')
<form action="{{url('/')}}/form/page8" method="post">
    @csrf
    <div class="container">
       <br><h2 class="text-black-50" >8. OVERALL SATISFACTION LEVEL</h2> 
       <br><h5>8.1 Now thinking of all aspects of Eminenture, please rate your
        OVERALL SATISFACTION (For the last quarter) using the satisfaction
        rating scale as given?</h5>
       <br><h4>RATING<span class="text-danger">*</span><br><br></h4>
       <table class="table">
       <thead>
          <tr>
             <th scope="col"> </th>
             <th scope="col">(5)<br>Delightful</th>
             <th scope="col">(4.5)Very<br>Satisfied</th>
             <th scope="col">(4)<br>Satisfied</th>
             <th scope="col">(3)Somewhat<br>Satisfied</th>
             <th scope="col">(2)Not Very<br>Satisfied</th>
             <th scope="col">(1)<br>Dissatisfied</th>
          </tr>
       </thead>
       <tbody>
          <tr>
             <th scope="row">CLIENT<br>SATISFACTION</th>
             <td><input class="form-check" type="radio" id="" value="5" name="buttons1"/></td>
             <td><input class="form-check" type="radio" id="" value="4.5" name="buttons1"/></td>
             <td><input class="form-check" type="radio" id="" value="4" name="buttons1"/></td>
             <td><input class="form-check" type="radio" id="" value="3" name="buttons1"/></td>
             <td><input class="form-check" type="radio" id="" value="2" name="buttons1"/></td>
             <td><input class="form-check" type="radio" id="" value="1" name="buttons1"/></td>
             <span class="text-danger">
                @error('buttons1')
                    {{$message}}
                @enderror
             </span>
          </tr> 
       </tbody>
     </table>
     <br><h5>8.2 How do you rate Eminenture with respect to competition? Please do
        specify the competitor's name (if rating is 3 or below 3) in remarks box
        for the position.</h5>
         <br><h4>RATING<span class="text-danger">*</span><br><br></h4>
         <table class="table">
          <thead>
             <tr>
                <th scope="col"> </th>
                <th scope="col">(5)<br>Extraordinary</th>
                <th scope="col">(4.5)<br>Excellent</th>
                <th scope="col">(4)<br>Better</th>
                <th scope="col">(3)<br>Satisfactory</th>
                <th scope="col">(2)<br>Average</th>
                <th scope="col">(1)Below<br>Average</th>
             </tr>
          </thead>
          <tbody>
            <tr>
                <th scope="row">CLIENT<br>SATISFACTION</th>
                <td><input class="form-check" type="radio" id="" value="5" name="buttons2"/></td>
                <td><input class="form-check" type="radio" id="" value="4.5" name="buttons2"/></td>
                <td><input class="form-check" type="radio" id="" value="4" name="buttons2"/></td>
                <td><input class="form-check" type="radio" id="" value="3" name="buttons2"/></td>
                <td><input class="form-check" type="radio" id="" value="2" name="buttons2"/></td>
                <td><input class="form-check" type="radio" id="" value="1" name="buttons2"/></td>
                <span class="text-danger">
                   @error('buttons2')
                       {{$message}}
                   @enderror
                </span>
             </tr> 
          </tbody>
         </table>
         <br>
         <div class="form-group">
             <h5>8.3 Is there any specic area of our service that you would like us to improve?</h5>
               <br><br><label for="service3">DESCRIPTION</label>
                 <input type="text" class="form-control" name="service3"/>
         </div>
         <br>
         <div class="form-group">
             <h5>8.4 Can you recollect any incidence with Eminenture that has delighted you?</h5>
               <br><br><label for="service4">DESCRIPTION</label>
                 <input type="text" class="form-control" name="service4"/>
         </div>
         <br>
         <div class="form-group">
             <label>Others(Please Specify)</label>
                 <input type="text" class="form-control" name="others"/>
         </div>
         <br><button class="btn btn-primary float-right">NEXT</button>
    </div>
 </form>
 @endsection