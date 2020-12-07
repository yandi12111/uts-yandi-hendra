@extends("tema.master")
@section('title', 'UTS-YANDI,HENDRA')

@section('intro-header')
  <!-- Header -->
  <header class="intro-header text-black" style="background: url('{{ asset
 
('images/home-bg.jpg') }}') no-repeat top center;">
    <div class="container text-center">
      <h1>Advanced Web Programming</h1>
      <p class="lead">Memahami Tentang Programming</p>
      <br>
    </div>
  </header>

 
@section('content')
    <!-- Main -->
    <body class="intro-header text-white" style="background: url('{{ asset
 
 ('images/home-bg.jpg') }}') no-repeat center center;">
    <section class="main">
      <div class="container text-left">
        <div class="row">
          <div class="col-lg-8">
            <h3><br> Apa itu Programming ? </h3>
            <p class="lead">Programming adalah sebuah proses seseorang menulis, memperbaiki, menguji,
               dan memelihara kode-kode dalam membuat sebuah program komputer. 
               Kode-kode tersebut ditulis dalam bahasa pemrograman yang tidak hanya ada satu macam saja.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- END : Main -->
@endsection
