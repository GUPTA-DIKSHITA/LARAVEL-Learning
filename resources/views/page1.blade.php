@extends('layouts.layout')
@section('content')
<form action="{{url('/')}}/form/page1" method="post">
   @csrf
   <div class="container">
      <br><h2 class="text-black-50" >1. ACCURACY AND PERFORMANCE</h2> 
      <br><h5>1.1 Are you satisfied with Eminenture's performance against targets specified in service level agreement?</h5>
      <br><h4>IMPORTANCE RATING<span class="text-danger">*</span><br><br></h4>
      <table class="table">
      <thead>
         <tr>
            <th scope="col"> </th>
            <th scope="col">(5)Highly<br>Important</th>
            <th scope="col">(4.5)Very<br>Important</th>
            <th scope="col">(4)<br>Important</th>
            <th scope="col">(3)Somewhat<br>Important</th>
            <th scope="col">(2)Not Very<br>Important</th>
            <th scope="col">(1)Not<br>Important</th>
         </tr>
      </thead>
      <tbody>
         <tr>
            <th scope="row">ONTIME</th>
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
         <tr>
            <th scope="row">QUALITY</th>
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

        <br><h4>SATISFACTION RATING<span class="text-danger">*</span><br><br></h4>
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
               <th scope="row">ONTIME</th>
               <td><input class="form-check" type="radio" id="" value="5" name="buttons3"/></td>
               <td><input class="form-check" type="radio" id="" value="4.5" name="buttons3"/></td>
               <td><input class="form-check" type="radio" id="" value="4" name="buttons3"/></td>
               <td><input class="form-check" type="radio" id="" value="3" name="buttons3"/></td>
               <td><input class="form-check" type="radio" id="" value="2" name="buttons3"/></td>
               <td><input class="form-check" type="radio" id="" value="1" name="buttons3"/></td>
                <span class="text-danger">
               @error('buttons3')
                   {{$message}}
               @enderror
            </span>
            </tr>
            <tr>
               <th scope="row">QUALITY</th>
               <td><input class="form-check" type="radio" id="" value="5" name="buttons4"/></td>
               <td><input class="form-check" type="radio" id="" value="4.5" name="buttons4"/></td>
               <td><input class="form-check" type="radio" id="" value="4" name="buttons4"/></td>
               <td><input class="form-check" type="radio" id="" value="3" name="buttons4"/></td>
               <td><input class="form-check" type="radio" id="" value="2" name="buttons4"/></td>
               <td><input class="form-check" type="radio" id="" value="1" name="buttons4"/></td>
                <span class="text-danger">
               @error('buttons4')
                   {{$message}}
               @enderror
            </span>
            </tr>
         </tbody>
        </table>
        <br><h5>1.2 Are you satised with Eminenture's consistency and accuracy in reporting process performance?</h5>
        <br><h4>IMPORTANCE RATING<span class="text-danger">*</span><br><br>
      </h4>
        
        <table class="table">
         <thead>
            <tr>
               <th scope="col"> </th>
               <th scope="col">(5)Highly<br>Important</th>
               <th scope="col">(4.5)Very<br>Important</th>
               <th scope="col">(4)<br>Important</th>
               <th scope="col">(3)Somewhat<br>Important</th>
               <th scope="col">(2)Not Very<br>Important</th>
               <th scope="col">(1)Not<br>Important</th>
            </tr>
         </thead>
         <tbody>
            <tr>
               <th scope="row">OPERATIONAL<br>REPORTS</th>
               <td><input class="form-check" type="radio" id="" value="5" name="buttons5"/></td>
               <td><input class="form-check" type="radio" id="" value="4.5" name="buttons5"/></td>
               <td><input class="form-check" type="radio" id="" value="4" name="buttons5"/></td>
               <td><input class="form-check" type="radio" id="" value="3" name="buttons5"/></td>
               <td><input class="form-check" type="radio" id="" value="2" name="buttons5"/></td>
               <td><input class="form-check" type="radio" id="" value="1" name="buttons5"/></td>
                <span class="text-danger">
               @error('buttons5')
                   {{$message}}
               @enderror
            </span>
            </tr>
            <tr>
               <th scope="row">INVOICING<br>ACCURACY</th>
               <td><input class="form-check" type="radio" id="" value="5" name="buttons6"/></td>
               <td><input class="form-check" type="radio" id="" value="4.5" name="buttons6"/></td>
               <td><input class="form-check" type="radio" id="" value="4" name="buttons6"/></td>
               <td><input class="form-check" type="radio" id="" value="3" name="buttons6"/></td>
               <td><input class="form-check" type="radio" id="" value="2" name="buttons6"/></td>
               <td><input class="form-check" type="radio" id="" value="1" name="buttons6"/></td>
                <span class="text-danger">
               @error('buttons6')
                   {{$message}}
               @enderror
            </span>
            </tr>
         </tbody>
        </table>

        <br><h4>SATISFACTION RATING<span class="text-danger">*</span><br><br>
      </h4>
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
               <th scope="row">OPERATIONAL<br>REPORTS</th>
               <td><input class="form-check" type="radio" id="" value="5" name="buttons7"/></td>
               <td><input class="form-check" type="radio" id="" value="4.5" name="buttons7"/></td>
               <td><input class="form-check" type="radio" id="" value="4" name="buttons7"/></td>
               <td><input class="form-check" type="radio" id="" value="3" name="buttons7"/></td>
               <td><input class="form-check" type="radio" id="" value="2" name="buttons7"/></td>
               <td><input class="form-check" type="radio" id="" value="1" name="buttons7"/></td>
                <span class="text-danger">
               @error('buttons7')
                   {{$message}}
               @enderror
            </span>
            </tr>
            <tr>
               <th scope="row">INVOICING<br>ACCURACY</th>
               <td><input class="form-check" type="radio" id="" value="5" name="buttons8"/></td>
               <td><input class="form-check" type="radio" id="" value="4.5" name="buttons8"/></td>
               <td><input class="form-check" type="radio" id="" value="4" name="buttons8"/></td>
               <td><input class="form-check" type="radio" id="" value="3" name="buttons8"/></td>
               <td><input class="form-check" type="radio" id="" value="2" name="buttons8"/></td>
               <td><input class="form-check" type="radio" id="" value="1" name="buttons8"/></td>
                <span class="text-danger">
               @error('buttons8')
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