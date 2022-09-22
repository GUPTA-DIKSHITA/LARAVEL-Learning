@extends('layouts.layout')
@section('content')
<form action="{{url('/')}}/form/page4" method="post">
    @csrf
    <div class="container">
       <br><h2 class="text-black-50" >4. PEOPLE</h2> 
       <br><h5>4.1 Are you satised with accessibility of people at Eminenture when you try to contact them?</h5>
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
             <th scope="row">ACCESSIBILITY</th>
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
                <th scope="row">ACCESSIBILITY</th>
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
         <br><h5>4.2 Are you satised with skills and knowledge that people at Eminenture possess for performing your contracted services?</h5>
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
             <th scope="row">AGENT/ADVISOR</th>
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
            <th scope="row">TEAM LEADER</th>
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
         
         <tr>
            <th scope="row">PROJECT MANAGER</th>
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
            <th scope="row">PROCESS OWNER</th>
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
                <th scope="row">AGENT/ADVISOR</th>
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
                <th scope="row">TEAM LEADER</th>
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

             <tr>
                <th scope="row">PROJECT MANAGER</th>
                <td><input class="form-check" type="radio" id="" value="5" name="buttons9"/></td>
                <td><input class="form-check" type="radio" id="" value="4.5" name="buttons9"/></td>
                <td><input class="form-check" type="radio" id="" value="4" name="buttons9"/></td>
                <td><input class="form-check" type="radio" id="" value="3" name="buttons9"/></td>
                <td><input class="form-check" type="radio" id="" value="2" name="buttons9"/></td>
                <td><input class="form-check" type="radio" id="" value="1" name="buttons9"/></td>
                 <span class="text-danger">
                @error('buttons9')
                    {{$message}}
                @enderror
             </span>
             </tr>

             <tr>
                <th scope="row">PROCESS OWNER</th>
                <td><input class="form-check" type="radio" id="" value="5" name="buttons10"/></td>
                <td><input class="form-check" type="radio" id="" value="4.5" name="buttons10"/></td>
                <td><input class="form-check" type="radio" id="" value="4" name="buttons10"/></td>
                <td><input class="form-check" type="radio" id="" value="3" name="buttons10"/></td>
                <td><input class="form-check" type="radio" id="" value="2" name="buttons10"/></td>
                <td><input class="form-check" type="radio" id="" value="1" name="buttons10"/></td>
                 <span class="text-danger">
                @error('buttons10')
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