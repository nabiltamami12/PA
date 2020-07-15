@extends('layouts.app')
       @section('content')
 <!--       <a href="#"  class="btn btn-warning material-icons" data-toggle="modal" data-target="#exampleModaledit">add
            </a> -->

<?php
$title = ' Menu Material';?>
 <title>
   <?php echo $title;?>
  </title>

       <br>
             <input style="text-transform: uppercase;font-weight: 900;font-family:serif;" type="text" value="" disabled readonly="true" class="form-control " placeholder="<?php echo $title; ?>
          ">
           <!--  ---------------Popup Modal--------------- -->
     <script type="text/javascript">
         function showOverlay() {
  $('.overlay').show()
}
setTimeout(showOverlay, 2000)
     </script>      

           <!--  ---------------Popup Modal--------------- -->
           <!--  ---------------Show Checkbox--------------- -->
<script >
   function valueChanged() {
      if (document.getElementById('cekmaterial1').checked) {
          document.getElementById("cekkomponen10").style.display = 'block';
           document.getElementById("cekkomponen11").style.display = 'block';
            document.getElementById("cekkomponen12").style.display = 'block';
             document.getElementById("cekkomponen13").style.display = 'block';
              document.getElementById("cekkomponen14").style.display = 'block';

      } else {
        document.getElementById("cekkomponen10").style.display = 'none';
           document.getElementById("cekkomponen11").style.display = 'none';
           document.getElementById("cekkomponen12").style.display = 'none';
            document.getElementById("cekkomponen13").style.display = 'none';
             document.getElementById("cekkomponen14").style.display = 'none';
      }
      if (document.getElementById('cekmaterial2').checked) {
          document.getElementById("cekkomponen20").style.display = 'block';
           document.getElementById("cekkomponen21").style.display = 'block';
            document.getElementById("cekkomponen22").style.display = 'block';
             document.getElementById("cekkomponen23").style.display = 'block';
        
      } else {
        document.getElementById("cekkomponen20").style.display = 'none';
           document.getElementById("cekkomponen21").style.display = 'none';
            document.getElementById("cekkomponen22").style.display = 'none';
             document.getElementById("cekkomponen23").style.display = 'none';
    

      }
      if (document.getElementById('cekmaterial3').checked) {
          document.getElementById("cekkomponen30").style.display = 'block';
           document.getElementById("cekkomponen31").style.display = 'block';
            document.getElementById("cekkomponen32").style.display = 'block';
             document.getElementById("cekkomponen33").style.display = 'block';
              document.getElementById("cekkomponen34").style.display = 'block';
              document.getElementById("cekkomponen35").style.display = 'block';
              document.getElementById("cekkomponen36").style.display = 'block';
              document.getElementById("cekkomponen37").style.display = 'block';
              document.getElementById("cekkomponen38").style.display = 'block';
              document.getElementById("cekkomponen39").style.display = 'block';
      } else {
        document.getElementById("cekkomponen31").style.display = 'none';
           document.getElementById("cekkomponen30").style.display = 'none';
           document.getElementById("cekkomponen32").style.display = 'none';
            document.getElementById("cekkomponen33").style.display = 'none';
             document.getElementById("cekkomponen34").style.display = 'none';
              document.getElementById("cekkomponen35").style.display = 'none';
               document.getElementById("cekkomponen36").style.display = 'none';
              document.getElementById("cekkomponen37").style.display = 'none';
              document.getElementById("cekkomponen38").style.display = 'none';
              document.getElementById("cekkomponen39").style.display = 'none';
      }
      if (document.getElementById('cekmaterial4').checked) {
          document.getElementById("cekkomponen40").style.display = 'block';
           document.getElementById("cekkomponen41").style.display = 'block';
            document.getElementById("cekkomponen42").style.display = 'block';
             document.getElementById("cekkomponen43").style.display = 'block';
              document.getElementById("cekkomponen44").style.display = 'block';
      } else {
        document.getElementById("cekkomponen41").style.display = 'none';
           document.getElementById("cekkomponen40").style.display = 'none';
           document.getElementById("cekkomponen42").style.display = 'none';
            document.getElementById("cekkomponen43").style.display = 'none';
             document.getElementById("cekkomponen44").style.display = 'none';
      }
      if (document.getElementById('cekmaterial5').checked) {
          document.getElementById("cekkomponen50").style.display = 'block';
           document.getElementById("cekkomponen51").style.display = 'block';
            document.getElementById("cekkomponen52").style.display = 'block';
             
      } else {
        document.getElementById("cekkomponen50").style.display = 'none';
           document.getElementById("cekkomponen51").style.display = 'none';
           document.getElementById("cekkomponen52").style.display = 'none';
           
      }
          if (document.getElementById('cekmaterial6').checked) {
          document.getElementById("cekkomponen60").style.display = 'block';
           document.getElementById("cekkomponen61").style.display = 'block';
            document.getElementById("cekkomponen62").style.display = 'block';
             
      } else {
        document.getElementById("cekkomponen60").style.display = 'none';
           document.getElementById("cekkomponen61").style.display = 'none';
           document.getElementById("cekkomponen62").style.display = 'none';
           
      }
    }
</script>
           <!--  ---------------Show Checkbox--------------- -->
           <script>

function showDiv(select){
   if(select.value=='1-2'){
    document.getElementById('1-2').style.display = "block";
    document.getElementById('1-3').style.display = "block";
    document.getElementById('1-4').style.display = "block";
    document.getElementById('1-5').style.display = "block";
    document.getElementById('1-6').style.display = "block";
    document.getElementById('1-7').style.display = "block";
   } 
      else{
    document.getElementById('1-2').style.display = "none";
    document.getElementById('1-3').style.display = "none";
    document.getElementById('1-4').style.display = "none";
    document.getElementById('1-5').style.display = "none";
    document.getElementById('1-6').style.display = "none";
    document.getElementById('1-7').style.display = "none";
    
   }


} 

           </script>


           <script>
function setFocusToTextBox(){
    document.getElementById("0").focus();
}
</script>

<div class="overlay">
<!-- <div class="modal fade" id="exampleModaledit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"> -->
        <div class="modal-dialog modal-notify modal-lg modal-right" role="document">
          <div class="modal-content">
            <div class="modal-header alert alert-warning">
              <h5 class="modal-title" id="exampleModalLabel">Ceklis  Pemadaman</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

              <div class="form-group">
                            <label>Tipe Trafo</label>
                            <select class="custom-select" style="
  font-size: 14px;
  line-height: 1.42857;
  color: #000;
  font-weight: 900;
  font-family:serif;
                            " name="form_select" onchange="showDiv(this)">
                               <option id="0" value="0" autofocus>No</option>
                               <option value="1-2">KONTRUKSI TRAFO 1 TIANG 2 JURUSAN (<160 kVA)</option> 
                               <option value="2-4">KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)</option> 
                               <option value="2-1">KONTRUKSI TRAFO 2 PORTAL - PEMASARAN</option>

                            </select>    
                        </div>
                

                <!-- KONTRUKSI TRAFO 1 TIANG 2 JURUSAN (<160 kVA) -->

                <form action="{{url('/ceklis/store' )}}" method="POST">
                 @csrf
                     <div class="form-check" id="1-2" style="display: none; text-transform: uppercase;font-weight: 900;font-family:serif;">
                      <label class="form-check-label" for="defaultCheck1">
                        <input  type="checkbox" value="10" id="cekmaterial1" 
onchange="valueChanged()"  name="material[]" value="1"  >
                        DUDUKAN CUT OUT SWITCH
                      </label>
                    </div>
                    <div id="cekkomponen10"  class="form-check" style="display:none;">
                       <label class="form-check-label" for="defaultCheck1">
                        CROSS ARM TYPE 2.000 U-NP 10 T = 5MM
                        <input  type="radio" value="baik" name="a1[]" >
                        baik
                        <input  type="radio" value="buruk" name="a1[]" >
                        buruk
                      </label>
                    </div>
                       <div id="cekkomponen11"  class="form-check" style="display:none;">
                      <label class="form-check-label" for="defaultCheck1">
                        Double Arm Band "8 + 2 baut
                        <input  type="radio" value="baik" name="a2[]" >
                        baik
                        <input  type="radio" value="buruk" name="a2[]" >
                        buruk
                      </label>
                    </div>
                       <div id="cekkomponen12"  class="form-check" style="display:none;">
                      <label class="form-check-label" for="defaultCheck1">
                        Double Arm Bolt & Nut M. 16 x 400
                        <input  type="radio" value="baik" name="a3[]" >
                        baik
                        <input  type="radio" value="buruk" name="a3[]" >
                        buruk
                      </label>
                    </div>
                       <div id="cekkomponen13"  class="form-check" style="display:none;">
                      <label class="form-check-label" for="defaultCheck1">
                        Arm Tie type 750 - pipe 3/4"
                        <input  type="radio" value="baik" name="a4[]" >
                        baik
                        <input  type="radio" value="buruk" name="a4[]" >
                        buruk
                      </label>
                    </div>
                       <div id="cekkomponen14"  class="form-check" style="display:none;">
                      <label class="form-check-label" for="defaultCheck1">
                        Arm Tie Band
                        <input  type="radio" value="baik" name="a5[]" >
                        baik
                        <input  type="radio" value="buruk" name="a5[]" >
                        buruk
                      </label>
                    </div>
                  <!--     <div id="cekkomponen15"  class="form-check" style="display:none;">
                       <label class="form-check-label" for="defaultCheck1">
                        CROSS ARM TYPE 2.000 U-NP 10 T = 5MM
                        <input  type="radio" value="baik" name="b6[]" >
                        baik
                        <input  type="radio" value="buruk" name="b6[]" >
                        buruk
                      </label>
                    </div> -->
                    <br>
                     <div class="form-check" id="1-3" style="display: none;">
                      <label class="form-check-label" for="defaultCheck1">
                        <input  type="checkbox" value="10" id="cekmaterial2" 
onchange="valueChanged()"  name="material[]" value="2">
                        Dudukan Lightning Arrester
                      </label>
                    </div>
                    <div id="cekkomponen20"  class="form-check" style="display:none;">
                       <label class="form-check-label" for="defaultCheck1">
                        Single Arm Band "6 + baut
                        <input  type="radio" value="baik" name="a6[]" >
                        baik
                        <input  type="radio" value="buruk" name="a6[]" >
                        buruk
                      </label>
                    </div>
                       <div id="cekkomponen21"  class="form-check" style="display:none;">
                       <label class="form-check-label" for="defaultCheck1">
                        Cross Arm type 2.000 U-NP 8 t = 3,2 mm
                        <input  type="radio" value="baik" name="a7[]" >
                        baik
                        <input  type="radio" value="buruk" name="a7[]" >
                        buruk
                      </label>
                    </div>
                       <div id="cekkomponen22"  class="form-check" style="display:none;">
                       <label class="form-check-label" for="defaultCheck1">
                        Bolt & Nut M 16 x 50
                        <input  type="radio" value="baik" name="a8[]" >
                        baik
                        <input  type="radio" value="buruk" name="a8[]" >
                        buruk
                      </label>
                    </div>
                       <div id="cekkomponen23"  class="form-check" style="display:none;">
                      <label class="form-check-label" for="defaultCheck1">
                        Arm Tie type 750 - pipe 3/4"
                        <input  type="radio" value="baik" name="a9[]" >
                        baik
                        <input  type="radio" value="buruk" name="a9[]" >
                        buruk
                      </label>
                    </div>

                    <br>
                     <div class="form-check" id="1-4" style="display: none;">
                      <label class="form-check-label" for="defaultCheck1">
                        <input  type="checkbox" value="10" id="cekmaterial3" 
onchange="valueChanged()"  name="material[]" value="3">
                        Dudukan Transformator
                      </label>
                    </div>
                    <div id="cekkomponen30"  class="form-check" style="display:none;">
                       <label class="form-check-label" for="defaultCheck1">
                        Cross Arm type 1.500 U-NP 10 t = 5 mm
                        <input  type="radio" value="baik" name="a10[]" >
                        baik
                        <input  type="radio" value="buruk" name="a10[]" >
                        buruk
                      </label>
                    </div>
                       <div id="cekkomponen31"  class="form-check" style="display:none;">
                      <label class="form-check-label" for="defaultCheck1">
                        Cross Arm type 750 NP  8 t = 3,2 mm
                        <input  type="radio" value="baik" name="a11[]" >
                        baik
                        <input  type="radio" value="buruk" name="a11[]" >
                        buruk
                      </label>
                    </div>
                       <div id="cekkomponen32"  class="form-check" style="display:none;">
                      <label class="form-check-label" for="defaultCheck1">
                        Double Arm Band "9 + baut
                        <input  type="radio" value="baik" name="a12[]" >
                        baik
                        <input  type="radio" value="buruk" name="a12[]" >
                        buruk
                      </label>
                    </div>
                       <div id="cekkomponen33"  class="form-check" style="display:none;">
                       <label class="form-check-label" for="defaultCheck1">
                        Double Arm Bolt & Nut M. 16 x 400
                        <input  type="radio" value="baik" name="a13[]" >
                        baik
                        <input  type="radio" value="buruk" name="a13[]" >
                        buruk
                      </label>
                    </div>
                       <div id="cekkomponen34" class="form-check"  style="display:none;">
                       <label class="form-check-label" for="defaultCheck1">
                        Bolt & Nut M 16 x 50
                        <input  type="radio" value="baik" name="a14[]" >
                        baik
                        <input  type="radio" value="buruk" name="a14[]" >
                        buruk
                      </label>
                    </div>
                      <div id="cekkomponen35"  class="form-check" style="display:none;">
                      <label class="form-check-label" for="defaultCheck1">
                        Cross Arm type 1.200 U-NP 6,5 t = 2,5 mm
                        <input  type="radio" value="baik" name="a15[]" >
                        baik
                        <input  type="radio" value="buruk" name="a15[]" >
                        buruk
                      </label>
                    </div>
<div id="cekkomponen36"  class="form-check" style="display:none;">
                      <label class="form-check-label" for="defaultCheck1">
                        Cross Arm type 1.000 U-NP 6,5 t = 2,5 mm
                        <input  type="radio" value="baik" name="a16[]" >
                        baik
                        <input  type="radio" value="buruk" name="a16[]" >
                        buruk
                      </label>
                    </div>
                    <div id="cekkomponen37"  class="form-check" style="display:none;">
                      <label class="form-check-label" for="defaultCheck1">
                        Cross Arm type 900 U-NP 8 t = 3,2 mm
                        <input  type="radio" value="baik" name="a17[]" >
                        baik
                        <input  type="radio" value="buruk" name="a17[]" >
                        buruk
                      </label>
                    </div>
                    <div id="cekkomponen38"  class="form-check" style="display:none;">
                      <label class="form-check-label" for="defaultCheck1">
                        Arm Tie Band
                        <input  type="radio" value="baik" name="a18[]" >
                        baik
                        <input  type="radio" value="buruk" name="a18[]" >
                        buruk
                      </label>
                    </div>
                    <div id="cekkomponen39"  class="form-check" style="display:none;">
                      <label class="form-check-label" for="defaultCheck1">
                        Bolt & Nut M 16 x 75
                        <input  type="radio" value="baik" name="a19[]" >
                        baik
                        <input  type="radio" value="buruk" name="a19[]" >
                        buruk
                      </label>
                    </div>
                    <br>

                     <div class="form-check" id="1-5" style="display: none;">
                      <label class="form-check-label" for="defaultCheck1">
                        <input  type="checkbox" value="10" id="cekmaterial4" 
onchange="valueChanged()"  name="material[]" value="4" >
                        Dudukan LV Panel & Pipa
                      </label>
                    </div>
                    <div id="cekkomponen40"  class="form-check" style="display:none;">
                       <label class="form-check-label" for="defaultCheck1">
                         Dudukan Pipa
                       </label>
                    <br>
                       <label class="form-check-label" for="defaultCheck1">
                        Cross Arm type 500 U-NP 8 t = 3,2 mm
                        <input  type="radio" value="baik" name="a20[]" >
                        baik
                        <input  type="radio" value="buruk" name="a20[]" >
                        buruk
                      </label>
                    </div>
                       <div id="cekkomponen41"  class="form-check" style="display:none;">
                      <label class="form-check-label" for="defaultCheck1">
                        Klem Begel U 10" ( 6 x 38 ) t = 4,5 mm
                        <input  type="radio" value="baik" name="a21[]" >
                        baik
                        <input  type="radio" value="buruk" name="a21[]" >
                        buruk
                      </label>
                    </div>
                       <div id="cekkomponen42" class="form-check"  style="display:none;">
                      <label class="form-check-label" for="defaultCheck1">
                        Klem Begel U 3" ( 6 x 38 ) t = 3 mm
                        <input  type="radio" value="baik" name="a22[]" >
                        baik
                        <input  type="radio" value="buruk" name="a22[]" >
                        buruk
                      </label>
                    </div>
                       <div id="cekkomponen43"  class="form-check" style="display:none;">
                      <label class="form-check-label" for="defaultCheck1">
                        Klem Begel U 2" ( 6 x 38 ) t = 3 mm
                        <input  type="radio" value="baik" name="a23[]" >
                        baik
                        <input  type="radio" value="buruk" name="a23[]" >
                        buruk
                      </label>
                    </div>
                       <div id="cekkomponen44"  class="form-check" style="display:none;">
                      <label class="form-check-label" for="defaultCheck1">
                        Bolt & Nut M 16 x 50
                        <input  type="radio" value="baik" name="a24[]" >
                        baik
                        <input  type="radio" value="buruk" name="a24[]" >
                        buruk
                      </label>
                    </div>
                  
                    <br>
                     <div class="form-check" id="1-6" style="display: none;">
                      <label class="form-check-label" for="defaultCheck1">
                        <input  type="checkbox" value="10" id="cekmaterial5" 
onchange="valueChanged()"  name="material[]" value="5" >
                        Dudukan LV Panel
                      </label>
                    </div>
                    <div id="cekkomponen50"  class="form-check" style="display:none;">
                      <label class="form-check-label" for="defaultCheck1">
                        Cross Arm type 900 U-NP 8 t = 3,2 mm
                        <input  type="radio" value="baik" name="a25[]" >
                        baik
                        <input  type="radio" value="buruk" name="a25[]" >
                        buruk
                      </label>
                    </div>
                       <div id="cekkomponen51"  class="form-check" style="display:none;">
                     <label class="form-check-label" for="defaultCheck1">
                        Klem Begel U 11" ( 6 x 38 ) t = 4,5 mm
                        <input  type="radio" value="baik" name="a26[]" >
                        baik
                        <input  type="radio" value="buruk" name="a26[]" >
                        buruk
                      </label>
                    </div>
                       <div id="cekkomponen52"  class="form-check" style="display:none;">
                       <label class="form-check-label" for="defaultCheck1">
                        Bolt & Nut M 16 x 50
                        <input  type="radio" value="baik" name="a27[]" >
                        baik
                        <input  type="radio" value="buruk" name="a27[]" >
                        buruk
                      </label>
                    </div>

                     <!--   <div id="cekkomponen53"  class="form-check" style="display:none;">
                       <label class="form-check-label" for="defaultCheck1">
                        CROSS ARM TYPE 2.000 U-NP 10 T = 5MM
                        <input  type="radio" value="baik" name="f4[]" >
                        baik
                        <input  type="radio" value="buruk" name="f4[]" >
                        buruk
                      </label>
                    </div>
                       <div id="cekkomponen54"  class="form-check" style="display:none;">
                      <label class="form-check-label" for="defaultCheck1">
                        CROSS ARM TYPE 2.000 U-NP 10 T = 5MM
                        <input  type="radio" value="baik" name="f5[]" >
                        baik
                        <input  type="radio" value="buruk" name="f5[]" >
                        buruk
                      </label>
                    </div>
                      <div id="cekkomponen55"  class="form-check" style="display:none;">
                      <label class="form-check-label" for="defaultCheck1">
                        CROSS ARM TYPE 2.000 U-NP 10 T = 5MM
                        <input  type="radio" value="baik" name="f6[]" >
                        baik
                        <input  type="radio" value="buruk" name="f6[]" >
                        buruk
                      </label>
                    </div> -->
          
    <br>
                     <div class="form-check" id="1-7" style="display: none;">
                      <label class="form-check-label" for="defaultCheck1">
                        <input  type="checkbox" value="10" id="cekmaterial6" 
onchange="valueChanged()"  name="material[]" value="6">
                        Tanda Bahaya
                      </label>
                    </div>
                    <div id="cekkomponen60"  class="form-check" style="display:none;">
                      <label class="form-check-label" for="defaultCheck1">
                        Stainless Steel Strip
                        <input  type="radio" value="baik" name="a28[]" >
                        baik
                        <input  type="radio" value="buruk" name="a28[]" >
                        buruk
                      </label>
                    </div>
                       <div id="cekkomponen61"  class="form-check" style="display:none;">
                     <label class="form-check-label" for="defaultCheck1">
                        Klem Begel U 11" ( 6 x 38 ) t = 4,5 mm
                        <input  type="radio" value="baik" name="a29[]" >
                        baik
                        <input  type="radio" value="buruk" name="a29[]" >
                        buruk
                      </label>
                    </div>
                       <div id="cekkomponen62"  class="form-check" style="display:none;">
                       <label class="form-check-label" for="defaultCheck1">
                        Bolt & Nut M 16 x 50
                        <input  type="radio" value="baik" name="a30[]" >
                        baik
                        <input  type="radio" value="buruk" name="a30[]" >
                        buruk
                      </label>
                    </div>

            <div class="modal-footer">
            <a href="{{ url('ceklis') }}">  <button   type="button" class="btn btn-danger" data-dismiss="modal">Close</button></a>
              <button type="submit" class="btn btn-success">Save changes</button>
            </div>
        </form>
           <!-- KONTRUKSI TRAFO 1 TIANG 2 JURUSAN (<160 kVA) -->
          </div>
        </div>
      </div>
      </div>
    <!-- </div> -->

            @endsection