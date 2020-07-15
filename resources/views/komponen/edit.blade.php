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
       
                <form action="{{url('/komponen/update' , $komp->id )}}" method="POST">
                 @csrf

                          <div class="form-group">
                            <label>id material</label>
                            <select class="custom-select"  name="id_material">
                              @foreach($mat_to_kom as $mat)
                             <option value="{{ $mat->id }}">{{ $mat->id_material }} . {{ $mat->nama_material }} </option>
                            @endforeach
                            </select>    
                        </div>
                        <div class="form-group">
                            <label>id komponen</label>
                            <input type="text" class="form-control" name="id_komponen" placeholder="" value="{{ $komp->id_komponen}}">
                        </div>
                        <div class="form-group">
                            <label>nama komponen</label>
                            <input type="text" class="form-control" name="nama_komponen" placeholder="" value="{{ $komp->nama_komponen}}">
                        </div>
                         <div class="form-group">
                            <label>satuan</label>
                            <input type="text" class="form-control" name="satuan" placeholder="" value="{{ $komp->satuan}}">
                        </div>
                       
            <div class="modal-footer">
            <a href="{{ url('komponen') }}">  <button   type="button" class="btn btn-danger" data-dismiss="modal">Close</button></a>
              <button type="submit" class="btn btn-success">Save changes</button>
            </div>
        </form>
          </div>
        </div>
      </div>
      </div>
    <!-- </div> -->

            @endsection