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
          <div class="logo">
           <center><img src="{{ asset('/material-dashboard-master/assets/img/Logo-PLN-Terbaru.jpg') }}" style="max-height: 5rem;"></center>
          </div>
      </div>
    <!-- </div> -->

            @endsection