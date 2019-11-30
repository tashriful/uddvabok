@extends('home.layouts.userMaster')

@section('sub_content')

   <div class='container-fluid margin-top-20'>

       <div class="card-body">
          <div class="card-header">
              
              <h3>Reseller Profile</h3>
          </div>
           <br>
           <table border="0">
              
               <tr>
                   <td>Category :</td>
                   <td>{{$user['category']}}</td>
               </tr>
               <tr>
                   <td>Name :</td>
                   <td>{{$user['name']}}</td>
               </tr>
               <tr>
                   <td>Email :</td>
                   <td>{{$user['email']}}</td>
               </tr>
               <tr>
                   <td>Number :</td>
                   <td>{{$user['number']}}</td>
               </tr>

               <tr>
                   <td>Username :</td>
                   <td>{{$user['username']}}</td>
               </tr>
               <tr>
                   <td>Password :</td>
                   <td>
                       {{$user['password']}}
                   </td>
               </tr>
            
           </table>


       </div>

   </div>
   @endsection