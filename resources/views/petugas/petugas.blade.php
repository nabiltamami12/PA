@extends('layouts.app')
       @section('content')

<?php
$title = ' Menu Akun Petugas';?>
 <title>
   <?php echo $title;?>
  </title>

       <br>
             <input style="text-transform: uppercase;font-weight: 900;font-family:serif;" type="text" value="" disabled readonly="true" class="form-control " placeholder="<?php echo $title; ?>
          ">
       
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-warning">
                  <h4 class="card-title "><?php echo $title;?></h4>
                  <p class="card-category"> </p>
                </div>
                <div class="card-body" >
                  <div class="table-responsive">
                   <table class="table table-hover" >
                      <thead   class=" text-body">
                       <th style="font-weight: bold" >
                          NO
                        </th>
                           <th style="font-weight: bold">
                        tim
                        </th>
                           <th style="font-weight: bold">
                        username 
                        </th>
                           <th style="font-weight: bold">
                      password
                        </th>
                        <th style="font-weight: bold; text-align: center;" colspan="2" >
                          actions
                        </th>
                      </thead>
                      <tbody >
                         <tr>
                          <?php $number=1;?>
                          @foreach($pet as $mat)
                    <td>{{ $number }}</td>
                    <td>{{ $mat->tim }}</td>
                    <td>{{ $mat->username }}</td>
                    <td>{{ $mat->password }}</td>
                    <td class="project-actions text-center">

                    <a class="btn btn-info btn-sm pb1" href="{{url('/akun/edit', $mat->id )}}">
                        <i class="fa fa-pencil"></i>
                        Edit
                    </a>
                  </td>
                  <td>
                    <form action="{{url('/akun', $mat->id )}}" method="get">
                    {{-- @csrf
                    @method('DELETE') --}}
                    {{ csrf_field() }}
                    {{  method_field('DELETE') }}
                    <center> <button class="btn btn-danger btn-sm" type="submit">
                        <i class=" fa fa-trash"></i>
                        Delete
                    </button> </center>
                    </form>
                </td>
</tr>
                     <?php $number++;?>   @endforeach
                    <a href="#" class="btn btn-warning material-icons" data-toggle="modal" data-target="#exampleModal">add
            </a>
          
                      </tbody>
                            
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

        <!-- add -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-notify modal-lg modal-right" role="document">
          <div class="modal-content">
            <div class="modal-header alert alert-warning">
              <h5 class="modal-title" id="exampleModalLabel">Tambah Akun</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form action="{{url('/akun/store' )}}" method="POST">
                 @csrf
   <div class="form-group">
                            <label>Tim</label>
                            <select class="custom-select"  name="tim">
                               @foreach($petugas as $mat)
                              <option value="{{ $mat->tim }}">{{ $mat->tim }} </option>
                         @endforeach
                            </select>    
                        </div>
<div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" value="">
                        </div>
                         <div class="form-group">
                            <label>username</label>
                            <input type="text" class="form-control" name="username" value="">
                        </div>
                         <div class="form-group">
                            <label>password</label>
                            <input type="text" class="form-control" name="password" value="">
                        </div>
                
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-success">Save changes</button>
            </div>
        </form>
          </div>
        </div>
      </div>
      </div>


    
            @endsection