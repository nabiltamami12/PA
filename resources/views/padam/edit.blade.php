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
              <h5 class="modal-title" id="exampleModalLabel">Edit Komponen</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
       
                <form action="{{url('/padam/update' , $padamAdmin->id )}}" method="POST">
                 @csrf

                                            <div class="form-group row">
                            <label for="example-date-input" class="col-3 col-form-label">Tanggal</label>
                            <div class="col-10">
                                <input class="form-control" type="date" name="jadwal_padam" value="{{$padamAdmin->jadwal_padam}}" id="example-date-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-time-input" class="col-3 col-form-label">Mulai Padam</label>
                            <div class="col-10">
                                <input class="form-control" type="time" name="awal_padam" value="{{$padamAdmin->awal_padam}}" id="example-time-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-time-input" class="col-3 col-form-label">Selesai Padam</label>
                            <div class="col-10">
                                <input class="form-control" type="time" name="akhir_padam" value="{{$padamAdmin->akhir_padam}}" id="example-time-input">
                            </div>
                        </div>
                        
                         <div class="form-group">
                            <label class="form-check-label">Penyulang</label>
                            <select class="custom-select" value="{{$padamAdmin->penyulang}}" name="penyulang">
                            
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
                            <input type="text" class="form-control" name="wilayah_padam" placeholder="" value="{{$padamAdmin->wilayah_padam}}">
                        </div>
                <div class="form-group">
                            <label>Tim</label>
                            <select class="custom-select" value="{{$padamAdmin->tim}}"  name="tim">
                            
                              <option value="prefentif11">prefentif 11 </option>
                              <option value="prefentif12"> prefentif 12</option>
                              <option value="jajag6"> jajag 6</option>
                              <option value="jajag7">jajag 7 </option>
                              <option value="inspeksi1">inspeksi 1 </option>
                              <option value="inspeksi2">inspeksi 2 </option>
                              <option value="kesilir6"> kesilir 6</option>
                    
                            </select>    
                        </div>
                       
            <div class="modal-footer">
            <a href="{{ url('padam') }}">  <button   type="button" class="btn btn-danger" data-dismiss="modal">Close</button></a>
              <button type="submit" class="btn btn-success">Save changes</button>
            </div>
        </form>
          </div>
        </div>
      </div>
      </div>
    <!-- </div> -->

            @endsection