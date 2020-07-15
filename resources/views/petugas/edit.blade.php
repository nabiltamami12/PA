@extends('layouts.app')
       @section('content')
 <!--       <a href="#"  class="btn btn-warning material-icons" data-toggle="modal" data-target="#exampleModaledit">add
            </a> -->
     <script type="text/javascript">
       

         function showOverlay() {
  $('.overlay').show()
}
setTimeout(showOverlay, 2000)
     </script>      

<div class="overlay">
<!-- <div class="modal fade" id="exampleModaledit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"> -->
        <div class="modal-dialog modal-notify modal-lg modal-right" role="document">
          <div class="modal-content">
            <div class="modal-header alert alert-warning">
              <h5 class="modal-title" id="exampleModalLabel">Edit Material</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
       
                <form action="{{url('/petugas/update' , $pet->id )}}" method="POST">
                 @csrf

                           <div class="form-group">
                            <label>id Petugas</label>
                            <input type="text" class="form-control" name="id_petugas" value="{{ $pet->id_petugas }}">
                        </div>
                        <div class="form-group">
                            <label>nama Petugas</label>
                            <input type="text" class="form-control" name="nama_petugas" value="{{ $pet->nama_petugas }}">
                        </div>  
                         <div class="form-group">
                            <label>kelompok Petugas</label>
                            <input type="text" class="form-control" name="kelompok_petugas" value="{{ $pet->kelompok_petugas }}">
                        </div>  
 <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">jadwal</label>
                        </div>
                            <input class="form-control" type="date" name="jadwal_petugas" value="{{ $pet->jadwal_petugas }}" id="example-date-input">
                        </div>


   <div class="form-group">
                            <label>Kode Trafo</label>
                            <select class="custom-select"  name="kode_trafo">
                               @foreach($tra as $mat)
                              <option value="{{ $mat->id }}">{{ $mat->id }} . {{ $mat->kode_trafo }} </option>
                         @endforeach
                            </select>    
                        </div>

                         <div class="form-group">
                            <label>lokasi</label>
                            <input type="text" class="form-control" name="lokasi_trafo" value="{{ $pet->lokasi_trafo }}">
                        </div>
                       
            <div class="modal-footer">
            <a href="{{ url('petugas') }}">  <button   type="button" class="btn btn-danger" data-dismiss="modal">Close</button></a>
              <button type="submit" class="btn btn-success">Save changes</button>
            </div>
        </form>
          </div>
        </div>
      </div>
      </div>
    <!-- </div> -->

            @endsection