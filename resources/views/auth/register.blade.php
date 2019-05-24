
@extends('layouts.app')
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/materialize.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/css/mstepper.min.css') }}">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" >
@endsection
@section('content')

<div class="section grey darken-3">
  <div class="container"> 
    <div class = "row">
      <div class="col-md-8 col-md-offset-2">
            <h2 class="light center-align blue-text">Sign up form</h2>
         <div class="card">
            <div class="card-content">
               <form method="GET" action="?">
                 <ul class="stepper linear">
                  <li class="step active">
                     <div data-step-label="Isikan Alamat Email Kamu!" class="step-title waves-effect waves-dark">Langkah 1</div>
                     <div class="step-content" style="">
                        <div class="row">
       <div class="input-field col s12">
   <input id="linear_email" name="linear_email" type="email" class="validate" required="">
 <label for="linear_email">Email Kamu</label>
                           </div>
                        </div>
                        <div class="step-actions">
 <button class="waves-effect waves-dark btn blue next-step">Lanjut</button>
                        </div>
                     </div>
                  </li>
                  <li class="step">
              <div data-step-label="Isikan Password Kamu!"  class="step-title waves-effect waves-dark">Langkah 2</div>
                     <div class="step-content">
                        <div class="row">
                           <div class="input-field col s12">
                              <input id="linear_password" name="linear_password" type="password" class="validate" required="">
                    <label for="linear_password">Password Kamu</label>
                           </div>
                        </div>
                        <div class="step-actions">
 <button class="waves-effect waves-dark btn blue next-step">Lanjut</button>
 <button class="waves-effect waves-dark btn-flat previous-step">Kembali</button>
                        </div>
                     </div>
                  </li>
                  <li class="step">
      <div class="step-title waves-effect waves-dark">Langkah 3</div>
                     <div class="step-content">
                        Selesai!
                        <div class="step-actions"><button class="waves-effect waves-dark btn blue" type="submit">Daftar</button>
                        </div>
                     </div>
                  </li>
               </ul></form>
            </div>
         </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('js')
<script src="{{ asset('js/materialize.min.js') }}"></script>
<script src="{{ asset('js/mstepper.min.js') }}"></script>
<script>
    function anyThing(destroyFeedback) {
  setTimeout(function(){ destroyFeedback(true); }, 1500);}
    function noThing(destroyFeedback) {
  setTimeout(function(){ destroyFeedback(true); }, 10000);}
    var stepperDiv = document.querySelector('.stepper');
    console.log(stepperDiv);
    var stepper = new MStepper(stepperDiv);
</script>
@endsection
