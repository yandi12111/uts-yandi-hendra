@extends('tema.master')
@section('title', 'Contact')
 
@section('intro-header')
  <!-- Header -->
  <header class="intro-header text-white" style="background: url('{{ asset
 
('images/contact-bg.jpg') }}') no-repeat top left;">
    <div class="container text-center">
      <h1>CONTACT</h1>
      <p class="lead">Silahkan Hubungi Kontak Kami</p>
      <br>
    </div>
  </header>
  <!-- END : Header -->

 
@section('content')
  <!-- Main -->
  <body class="intro-header text-black" style="background: url('{{ asset
 
 ('images/contact-bg.jpg') }}') no-repeat center right  ;">
  <section class="main">
    <div class="container text-right">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2><br>Contact Us</h2>
          <p class="lead">Muhammad Azhar Riyandi : <br> WA - 0878 1555 4470 <br> IG - @fxckynd </p>
          <p class="lead">Hendra Wiranata : <br> WA - 0856 5192 27776 <br> IG -  </p>
        </div>
      </div>
    </div>
  </section>
  <!-- END : Main -->
@endsection