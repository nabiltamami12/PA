@extends('layouts.app')
       @section('content')

<?php
$title = ' Menu Laporan';?>
 <title>
   <?php echo $title;?>
  </title>

       <br>
             <input style="text-transform: uppercase;font-weight: 900;font-family:serif;" type="text" value="" disabled readonly="true" class="form-control " placeholder="<?php echo $title; ?>
          ">
       
<div id="default" class="content">
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
                       tanggal
                        </th>
                         <th style="font-weight: bold"  colspan="2">
                       alamat
                        </th>
                         <th style="font-weight: bold">
                       kode trafo
                        </th>
                        <!--  <th style="font-weight: bold">
                  jumlah padam
                        </th> -->
                        <!--  <th style="font-weight: bold">
                       keterangan
                        </th> -->
                        <th style="font-weight: bold; text-align: center;" colspan="2" >
                          actions
                        </th>
                      </thead>
                      <tbody >
                         <tr>
                            <?php $number=1;?>
                          @foreach($padamAdmin as $mat)
                    <td>{{ $number}}</td>
                    <td>{{ $mat->jadwal_padam }}</td>
                    <td>{{ $mat->trafo_cek->alamat }} </td>
                    <td></td>
                    <td>{{ $mat->trafo_cek->kode_trafo }}</td>
                    <!-- <td>{{ count((array)$mat->trafo_cek->alamat) }}</td> -->
                    <!-- <td>{{ $mat->keterangan }}</td> -->
                    <td class="project-actions text-center">

                   
                  </td>
                  <td>
                    <form action="{{url('/laporan', $mat->id )}}" method="get">
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
                      <?php $number++;?> @endforeach
                   <!--  <a href="#" class="btn btn-warning material-icons" data-toggle="modal" data-target="#exampleModal">add</a>
                    <a href="#download" class="btn btn-info material-icons" data-toggle="modal" data-target="#download" >download</a> -->
         
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
   


     
            @endsection