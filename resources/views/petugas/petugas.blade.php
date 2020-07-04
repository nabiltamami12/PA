@extends('layouts.app')
       @section('content')

<?php
$title = ' Menu Petugas';?>
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
                       id Petugas
                        </th>
                         <th style="font-weight: bold">
                        nama Petugas
                        </th>
                           <th style="font-weight: bold">
                        kelompok Petugas
                        </th>
                           <th style="font-weight: bold">
                        jadwal 
                        </th>
                           <th style="font-weight: bold">
                        kode trafo
                        </th>
                           <th style="font-weight: bold">
                       lokasi
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
                    <td>{{ $mat->id_petugas }}</td>
                    <td>{{ $mat->nama_petugas }}</td>
                    <td>{{ $mat->kelompok_petugas }}</td>
                    <td>{{ $mat->jadwal_petugas }}</td>
                    <td>{{ $mat->trafo_cek->id }}</td>
                    <td>{{ $mat->trafo_cek->lokasi_trafo }}</td>
                    <td class="project-actions text-center">

                    <a class="btn btn-info btn-sm pb1" href="{{url('/petugas/edit', $mat->id )}}">
                        <i class="fas fa-pencil-alt"></i>
                        Edit
                    </a>
                  </td>
                  <td>
                    <form action="{{url('/petugas', $mat->id )}}" method="get">
                    {{-- @csrf
                    @method('DELETE') --}}
                    {{ csrf_field() }}
                    {{  method_field('DELETE') }}
                    <center> <button class="btn btn-danger btn-sm" type="submit">
                      
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
              <h5 class="modal-title" id="exampleModalLabel">Tambah Petugas</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form action="{{url('/petugas/store' )}}" method="POST">
                 @csrf
                        <div class="form-group">
                            <label>id Petugas</label>
                            <input type="text" class="form-control" name="id_petugas" placeholder="">
                        </div>
                        <div class="form-group">
                            <label>nama Petugas</label>
                            <input type="text" class="form-control" name="nama_petugas" placeholder="">
                        </div>  
                         <div class="form-group">
                            <label>kelompok Petugas</label>
                            <input type="text" class="form-control" name="kelompok_petugas" placeholder="">
                        </div>  
 <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">jadwal</label>
                        </div>
                            <input class="form-control" type="date" name="jadwal_petugas" value="<?php echo date(today());?>" id="example-date-input">
                        </div>


   <div class="form-group">
                            <label>id material</label>
                            <select class="custom-select"  name="kode_trafo">
                               @foreach($tra as $mat)
                              <option value="{{ $mat->id_trafo }}">{{ $mat->id }} . {{ $mat->kode_trafo }} </option>
                         @endforeach
                            </select>    
                        </div>

                         <div class="form-group">
                            <label>lokasi</label>
                           
                            <input type="text" class="form-control" name="lokasi_trafo" value="{{ $mat->lokasi_trafo }} ">
                      
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