@extends('tema.master')
@section('title', 'Quest-UTS')
 
@section('intro-header')
  <!-- Header -->
  <header class="intro-header text-black" style="background: url('{{ asset
 
 ('images/uts-bg.jpg') }}') no-repeat top left;">
    <div class="container text-left">
    <br>  
    <h1>UTS</h1>
      <p class="lead">Quest UTS</p>
    </div>
  </header>
  <!-- END : Header -->

 
@section('content')
<!-- Main -->
<body class="intro-body text-white" style="background: url('{{ asset
 
 ('images/uts-bg.jpg') }}') no-repeat top left ;">
  <section class="main">
    <div class="container text-right">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2><br>TUGAS</h2>
          <p class="lead" >1). Membuat 5 View. <br>2). Upload ke github. <br>3). Membuat laporan.</p>
        </div>
      </div>
    </div>
  </section>
@endsection