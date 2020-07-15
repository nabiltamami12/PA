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
       
                <form action="{{url('/akun/update' , $pet->id )}}" method="POST">
                 @csrf

                     
                         <div class="form-group">
                            <label>Tim</label>
                            <select class="custom-select"  name="tim" value="{{$pet->tim}}">
                            
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
                            <label>username</label>
                            <input type="text" class="form-control" name="username" value="{{$pet->username}}">
                        </div>
                         <div class="form-group">
                            <label>password</label>
                            <input type="text" class="form-control" name="password" value="{{$pet->password}}">
                        </div>
                       
            <div class="modal-footer">
            <a href="{{ url('akun') }}">  <button   type="button" class="btn btn-danger" data-dismiss="modal">Close</button></a>
              <button type="submit" class="btn btn-success">Save changes</button>
            </div>
        </form>
          </div>
        </div>
      </div>
      </div>
    <!-- </div> -->

            @endsection