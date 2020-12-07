@extends('tema.master')
@section('title', 'Email')
 
@section('intro-header')
  <!-- Header -->
  <header class="intro-header text-black" style="background: url('{{ asset
 
 ('images/email-bg.jpg') }}') no-repeat top right;">
    <div class="container text-center">
      <h1>Email</h1>
      <p class="lead">Email yang sering kami gunakan</p>
      <br>
    </div>
  </header>
  <!-- END : Header -->

 
@section('content')
<body class="intro-header text-black" style="background: url('{{ asset
 
 ('images/email-bg.jpg') }}') no-repeat center center;">
  <section class="main">
    <div class="container text-left">
      <div class="row">
        <div class="col-lg-8 ">
          <h2><br>Email Us</h2>
          <p class="lead">Muhammad Azhar Riyandi : <br> ynd.yoooo@gmail.com </p>
          <p class="lead">Hendra Wiranata : <br> hendrawiranata@gmail.com </p>
        </div>
      </div>
    </div>
  </section>
@endsection