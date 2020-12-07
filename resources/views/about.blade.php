@extends('tema.master')
@section('title', 'About Us')
 
@section('intro-header')
  <!-- Header -->
  <header class="intro-header text-black" style="background: url('{{ asset
 
('images/about-bg.jpg') }}') no-repeat top left;">
    <div class="container text-center">
      <h1>About Us</h1>
      <p class="lead">Mahasiswa Universitas Muhammadyah Kalimantan Timur</p>
      <br>
    </div>
  </header>
  <!-- END : Header -->

@section('content')
  <!-- Main -->
  <body class="intro-header text-black" style="background: url('{{ asset
 
 ('images/about-bg.jpg') }}') no-repeat center left;">
  <section class="main">
    <div class="container text-left">
      <div class="row">
        <div class="col-lg-6">
          <h1><br> Kami</h1>
          <p class=>Adalah 2 orang mahasiswa UMKT prodi Teknik Informatika yang sedang 
            membuat suatu projek uts advanced web programming,
            bertentang FRAMEWORK LARAVEL DAN BOOTSTRAP.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- END : Main -->
@endsection