@extends('layouts.app')
       @section('content')

<?php
$title = ' Menu Padam';?>
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
                      Tanggal
                        </th>
                         <th style="font-weight: bold">
                        Waktu
                        </th>
                         <th style="font-weight: bold">
                       penyulang
                        </th>
                         <th style="font-weight: bold">
                        Wilayah Padam
                        </th>
                         <th style="font-weight: bold">
                        Tim
                        </th>
                         <th style="font-weight: bold">
                        Pekerjaan
                        </th>
                         <th style="font-weight: bold">
                        Unit Kerja
                        </th>
                        <th style="font-weight: bold; text-align: center;" colspan="2" >
                          actions
                        </th>
                      </thead>
                      <tbody >
                         <tr>
                            <?php $number=1;?>
                             @if(Auth::user()->role=='admin')
                          @foreach($padamAdmin as $mat)
                    <td>{{ $number }}</td>
                    <td>{{ $mat->jadwal_padam }}</td>
                    <td>{{ $mat->awal_padam }} - {{ $mat->akhir_padam }}</td>
                   <td>{{ $mat->penyulang }}</td>
                   <td>{{ $mat->trafo_cek->kode_trafo }} - {{ $mat->trafo_cek->alamat }}</td>
                   <td>{{ $mat->tim }}</td>
                    <td>{{ $mat->deskripsi_pekerjaan }}</td>
                    <td>{{ $mat->unit_kerja }}</td>


                    <td class="project-actions text-center">

                    <a class="btn btn-info btn-sm pb1" href="{{url('/padam/edit', $mat->id )}}">
                        <i class="fas fa-pencil-alt"></i>
                        Edit
                    </a>
                  </td>
                  <td>
                    <form action="{{url('/padam', $mat->id )}}" method="get">
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

                       <?php $number++;?>@endforeach
                      
                    <a href="#" class="btn btn-warning material-icons" data-toggle="modal" data-target="#exampleModal">add
            </a>
            @else
                               @foreach($padam as $mat)
                    <td>{{ $number }}</td>
                    <td>{{ $mat->jadwal_padam }}</td>
                    <td>{{ $mat->awal_padam }} - {{ $mat->akhir_padam }}</td>
                   <td>{{ $mat->penyulang }}</td>
                   <td>{{ $mat->trafo_cek->kode_trafo }} - {{ $mat->trafo_cek->alamat }}</td>
                   <td>{{ $mat->tim }}</td>
                    <td>{{ $mat->deskripsi_pekerjaan }}</td>
                    <td>{{ $mat->unit_kerja }}</td>


                    <td class="project-actions text-center">

                    <a class="btn btn-info btn-sm pb1" href="{{url('/padam/edit', $mat->id )}}">
                        <i class="fas fa-pencil-alt"></i>
                        Edit
                    </a>
                  </td>
                  <td>
                   
                </td>
                
</tr>    

                       <?php $number++;?>@endforeach
                      
                  
            @endif
                      </tbody>
                            
                    </table>
  <!--  -->


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
              <h5 class="modal-title" id="exampleModalLabel">Jadwal Pemadaman</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form action="{{url('/padam/store' )}}" method="POST">
                 @csrf

                            <div class="form-group row">
                            <label for="example-date-input" class="col-3 col-form-label">Tanggal</label>
                            <div class="col-10">
                                <input class="form-control" type="date" name="jadwal_padam" value="-" id="example-date-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-time-input" class="col-3 col-form-label">Mulai Padam</label>
                            <div class="col-10">
                                <input class="form-control" type="time" name="awal_padam" value="-" id="example-time-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-time-input" class="col-3 col-form-label">Selesai Padam</label>
                            <div class="col-10">
                                <input class="form-control" type="time" name="akhir_padam" value="-" id="example-time-input">
                            </div>
                        </div>
                        
                         <div class="form-group">
                            <label class="form-check-label">Penyulang</label>
                            <select class="custom-select"  name="penyulang">
                            
                              <option value="kesilir">kesilir </option>
                              <option value="dasri"> dasri</option>
                              <option value="purwoharjo"> purwoharjo</option>
                              <option value="jajag">jajag </option>
                              <option value="bsi1">bsi 1 </option>
                              <option value="bsi2">bsi 2 </option>
                              <option value="blokagung"> blokagung</option>
                    
                            </select>    
                        </div>
                          <div class="form-group">
                            <label class="form-check-label">Wilayah Padam</label>
                            <select class="custom-select"  name="id_trafo">
                              @foreach($tra as $mat)
                              <option value="{{$mat->id}}">{{ $mat->kode_trafo }} - {{ $mat->alamat }} </option>
                             @endforeach
                            </select>  
                        </div>
                <div class="form-group">
                            <label>Tim</label>
                            <select class="custom-select"  name="tim">
                            
                              <option value="prefentif11">prefentif 11 </option>
                              <option value="prefentif12"> prefentif 12</option>
                              <option value="jajag6"> jajag 6</option>
                              <option value="jajag7">jajag 7 </option>
                              <option value="inspeksi1">inspeksi 1 </option>
                              <option value="inspeksi2">inspeksi 2 </option>
                              <option value="kesilir6"> kesilir 6</option>
                    
                            </select>    
                        </div>
                          <div class="form-group">
                            <label>Pekerjaan</label>
                            <input type="text" class="form-control" name="deskripsi_pekerjaan" placeholder="">
                        </div>
<!--                           <div class="form-group">
                            <label>Unit Kerja</label>
                            <input type="text" class="form-control" disabled="true" name="unit_kerja" placeholder="pln ulp jajag">
                        </div> -->
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