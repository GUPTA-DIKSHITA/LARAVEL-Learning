@extends('layouts.layout')
@section('content')
<form action="{{url('/')}}/form/page7" method="post">
    @csrf
    <div class="container">
       <br><h2 class="text-black-50" >7. LOYALTY</h2> 
       <br><h5>7.1 How likely are you to recommend Eminenture's services to others?</h5>
       <br><h4>RATING<span class="text-danger">*</span><br><br></h4>
       <table class="table">
       <thead>
          <tr>
             <th scope="col"> </th>
             <th scope="col">(5)Very<br>Likely</th>
             <th scope="col">(4.5)<br>Likely</th>
             <th scope="col">(4)Somewhat<br>Likely</th>
             <th scope="col">(3)Neither Likely<br>or Unlikely</th>
             <th scope="col">(2)Somewhat<br>Likely</th>
             <th scope="col">(1)<br>Unlikely</th>
          </tr>
       </thead>
       <tbody>
          <tr>
             <th scope="row">RECOMMENDATION</th>
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
     <br><h5>7.2 How likely are you to consider Eminenture for your new project requirements?</h5>
         <br><h4>RATING<span class="text-danger">*</span><br><br></h4>
         <table class="table">
          <thead>
             <tr>
                <th scope="col"> </th>
                <th scope="col">(5)Very<br>Likely</th>
                <th scope="col">(4.5)<br>Likely</th>
                <th scope="col">(4)Somewhat<br>Likely</th>
                <th scope="col"><br>(3)Neither Likely<br>or Unlikely</th>
                <th scope="col">(2)Somewhat<br>Likely</th>
                <th scope="col">(1)<br>Unlikely</th>
             </tr>
          </thead>
          <tbody>
            <tr>
                <th scope="row">RECOMMENDATION</th>
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
             <label>Others(Please Specify)</label>
                 <input type="text" class="form-control" name="others"/>
         </div>
         <br><button class="btn btn-primary float-right">NEXT</button>
    </div>
 </form>
 @endsection