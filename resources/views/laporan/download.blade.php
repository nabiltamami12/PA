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
                       Nomor SAP
                        </th>
                         <th style="font-weight: bold">
                        nama mateial
                        </th>
                         <th style="font-weight: bold">
                       sat
                        </th>
                         <th style="font-weight: bold">
                  kebutuhan
                        </th>
                         <th style="font-weight: bold">
                       keterangan
                        </th>
                        <th style="font-weight: bold; text-align: center;" colspan="2" >
                          actions
                        </th>
                      </thead>
                      <tbody >
                         <tr>
                            <?php $number=1;?>
                          @foreach($lap as $mat)
                    <td>{{ $number}}</td>
                    <td>{{ $mat->nomor_sap }}</td>
                    <td>{{ $mat->material_cek->nama_material }} <br> ( {{ $mat->komponen_cek->nama_komponen }} )</td>
                    <td>{{ $mat->satuan }}</td>
                    <td>{{ $mat->jumlah }}</td>
                    <td>{{ $mat->keterangan }}</td>
                    <td class="project-actions text-center">

                    <a class="btn btn-info btn-sm pb1" href="{{url('/laporan/edit', $mat->id )}}">
                        <i class="fas fa-pencil-alt"></i>
                        Edit
                    </a>
                  </td>
                  <td>
                    <form action="{{url('/laporan', $mat->id )}}" method="get">
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
                      <?php $number++;?> @endforeach
                    <a href="#" class="btn btn-warning material-icons" data-toggle="modal" data-target="#exampleModal">add
            </a>
            <a href="#" class="btn btn-info material-icons" data-toggle="modal" data-target="#download">download
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




 <div class="modal fade" id="download" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-notify modal-lg modal-right" role="document">
          <div class="modal-content">
            <div class="modal-header alert alert-warning">
              <h5 class="modal-title" id="exampleModalLabel">Tambah Material</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

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
                       Nomor SAP
                        </th>
                         <th style="font-weight: bold">
                        nama mateial
                        </th>
                         <th style="font-weight: bold">
                       sat
                        </th>
                         <th style="font-weight: bold">
                  kebutuhan
                        </th>
                         <th style="font-weight: bold">
                       keterangan
                        </th>
                        <th style="font-weight: bold; text-align: center;" colspan="2" >
                          actions
                        </th>
                      </thead>
                      <tbody >
                         <tr>
                            <?php $number=1;?>
                          @foreach($lap as $mat)
                    <td>{{ $number}}</td>
                    <td>{{ $mat->nomor_sap }}</td>
                    <td>{{ $mat->material_cek->nama_material }} <br> ( {{ $mat->komponen_cek->nama_komponen }} )</td>
                    <td>{{ $mat->satuan }}</td>
                    <td>{{ $mat->jumlah }}</td>
                    <td>{{ $mat->keterangan }}</td>
                    <td class="project-actions text-center">

                    <a class="btn btn-info btn-sm pb1" href="{{url('/laporan/edit', $mat->id )}}">
                        <i class="fas fa-pencil-alt"></i>
                        Download
                    </a>

</tr> <?php $number++;?> @endforeach
 <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
             
            </div>
                      </tbody>
                            
                    </table>
                  </div>
                </div>
              </div>
            </div>
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
              <h5 class="modal-title" id="exampleModalLabel">Tambah Material</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form action="{{url('/laporan/store' )}}" method="POST">
                 @csrf
                 <div class="form-group">
                            <label>nomor sap</label>
                            <input type="text" class="form-control" name="nomor_sap" placeholder="">
                        </div>
                         <div class="form-group">
                            <label>id material</label>
                            <select class="custom-select"  name="id_material">
                              @foreach($ori_mat as $mat)
                              <option value="{{ $mat->id }}">{{ $mat->id_material }} . {{ $mat->nama_material }} </option>
                            @endforeach
                            </select>    
                        </div>
                        <div class="form-group">
                            <label>id komponen</label>
                            <select class="custom-select"  name="id_komponen">
                              @foreach($ori_kom as $mat)
                              <option value="{{ $mat->id }}">{{ $mat->id_komponen }} . {{ $mat->nama_komponen }} </option>
                            @endforeach
                            </select>    
                        </div>
                         <div class="form-group">
                            <label>satuan</label>
                            <select class="custom-select"  name="satuan">
                              @if($mat)
                              @foreach($ori_kom as $mat)
                              <option value="{{ $mat->satuan }}">{{ $mat->satuan }} </option>
                            @endforeach
                            @endif
                            </select>    
                        </div>
                        <div class="form-group">
                            <label>kebutuhan</label>
                            <input type="text" class="form-control" name="jumlah" placeholder="">
                        </div>
                        <div class="form-group">
                            <label>keterangan</label>
                            <input type="text" class="form-control" name="keterangan" placeholder="">
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