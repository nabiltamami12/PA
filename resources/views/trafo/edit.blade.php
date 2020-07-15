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
              <h5 class="modal-title" id="exampleModalLabel">Edit Trafo</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
       
                <form action="{{url('/trafo/update' , $trafo->id )}}" method="POST" enctype="multipart/form-data">
                 @csrf

                    <div class="form-group">
                            <label>id trafo</label>
                            <input type="text" class="form-control" name="kode_trafo" value="{{ $trafo->kode_trafo }}">
                        </div>
                        <div class="form-group">
                            <label>Wilayah</label>
                            <input type="text" class="form-control" name="alamat" value="{{ $trafo->alamat }}">
                     </div> 
                       <div class="form-group">
                            <label>sektor</label>
                            <input type="text" class="form-control" name="seksen" value="{{ $trafo->seksen }}">
                     </div>
                      <div class="form-group">
                            <label>Deskripsi</label>
                            <input type="text" class="form-control" name="deskripsi" value="{{ $trafo->deskripsi }}">
                     </div>  
                     <div >

<label>rancangan trafo</label>
                    <input type="file" name="image" >

                </div>

  <div class="form-group">
                            <label>latitude</label>
                            <input type="text" class="form-control" name="x" value="{{ $trafo->x }}">
                     </div> 
                       <div class="form-group">
                            <label>longitude</label>
                            <input type="text" class="form-control" name="y" value="{{ $trafo->y }}">
                     </div> 
                       
            <div class="modal-footer">
            <a href="{{ url('trafo') }}">  <button   type="button" class="btn btn-danger" data-dismiss="modal">Close</button></a>
              <button type="submit" class="btn btn-success">Save changes</button>
            </div>
        </form>
          </div>
        </div>
      </div>
      </div>
    <!-- </div> -->

            @endsection