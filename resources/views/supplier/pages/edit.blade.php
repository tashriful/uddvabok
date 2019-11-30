@extends('supplier.layouts.master')
      @section('content')
      
      <div class="main-panel">
          <div class="content-wrapper">
              <div class="card">
                  <div class="card-header">
                      Add User
                  </div>
                  <div class="card-body">
                      <form action="" method="post" >
                        
                        @csrf
                        
                        <div class="form-group">
                            <label for="category">User Category:</label>
                            <select class="form-control"  name="category">
                                <option value="Admin">Admin</option>
                                <option value="Teacher">Teacher</option>
                                <option value="Student">Student</option>
                                <option value="Supplier">Supplier</option>
                            </select>

                        </div>

                        
                         <div class="form-group">
                              <label for="exampleInputName">Name</label>
                              <input type="text" class="form-control" name="name" value="{{$std['name']}}" placeholder="User Name">
                          </div>
                          
                          <div class="form-group">
                              <label for="exampleInputEmail1">Email address</label>
                              <input type="email" class="form-control" name="email" value="{{$std['email']}}" aria-describedby="emailHelp" placeholder="Enter email">
                              
                          </div>
                          
                          <div class="form-group">
                              <label for="exampleInputPhone">Phone</label>
                              <input type="number" class="form-control" name="number" value="{{$std['number']}}" placeholder="Enter Phone Number">
                              
                          </div>
                          
                          <div class="form-group">
                              <label for="exampleInputUsername">Username</label>
                              <input type="text" class="form-control" name="username" value="{{$std['username']}}"  placeholder="Enter Phone Number">
                              
                          </div>
                          <div class="form-group">
                              <label for="exampleInputPassword">Password</label>
                              <input type="password" class="form-control" name="password" value="{{$std['password']}}" placeholder="Enter Password">
                          </div>
                          
                          <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
                      </form>

                  </div>
              </div>


          </div>
      </div>
      <!-- main-panel ends -->


      @endsection