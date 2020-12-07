@extends('tema.master')
@section('title', 'Form')
 
@section('intro-header')
  <!-- Header -->
  <header class="intro-header text-black" style="background: url('{{ asset
 
('images/form-bg.jpg') }}') no-repeat top center;">
    <div class="container text-left">
    <h1>Form</h1>
      <p class="lead">isi lah Form ini</p>
      <br>
    </div>
  </header>
  <!-- END : Header -->

 
@section('content')
<body class="intro-header text-white" style="background: url('{{ asset
 
 ('images/form-bg.jpg') }}') no-repeat center center;">
  <section class="main">
    <div class="container text-left">
      <div class="row">
        <div class="col-lg-6 ">
    <br>
    <form>
      <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <small id="emailHelp" class="form-text text-m uted">We'll never share your email with anyone else.</small>
          </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
        </div>
      </div>
    </div>
  </section>
@endsection