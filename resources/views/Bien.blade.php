@extends('layout')
@section('content')
<div class="ftco-blocks-cover-1">
      <div class="ftco-cover-1 innerpage overlay" style="background-image: url('https://i-mcr.unimedias.fr/sites/art-de-vivre/files/styles/large/public/chermand_1.jpg?auto=compress%2Cformat&crop=faces%2Cedges&cs=srgb&fit=crop&h=600&w=900')">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 text-center">
              <span class="d-block mb-3 text-white" data-aos="fade-up">{{\Carbon\Carbon::parse($result -> created_at)->format('d/m/Y')}}<span class="mx-2 text-primary">&bullet;</span>{{$result -> promoteur}}</span>
                <h1 class="mb-4" data-aos="fade-up" data-aos-delay="100">{{$result -> title}}</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div style="display: flex; overflow-x: auto; width: 100%">
    @foreach ($images as $image)
        <img src="{{url('/files/'.$image)}}" alt="Image" class="img-fluid" style="max-width: 50%; height: auto; ">
    @endforeach
    </div>
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-8 blog-content">
            <h1>{{$result -> title}}</h1>
            <p>{{\Carbon\Carbon::parse($result -> created_at)->format('d/m/Y')}}</p>
            <h2>{{$result -> price}} €</h2>
            <p class="lead">{{$result -> description}}</p>
            <div class="pt-5">
            </div>
          </div>
          <div class="col-md-4 sidebar">
            <div class="sidebar-box">
              <div class="categories">
                <h3>Informations: </h3>
                <li><p><i class="fas fa-home mr-2"></i>{{$result -> type}}</p></li>
                <li><p><i class="fas fa-person-booth mr-2"></i>{{$result -> pieces}} pièces</p></li>
                <li><p><i class="fas fa-ruler-combined mr-2"></i> {{$result -> surface}} m2</p></li>
                <li><p><i class="fas fa-map-marker-alt mr-2"></i>{{$result -> adresse}}, {{$result -> departement}}</p></li>
                <li><p><i class="fas fa-hotel mr-2"></i>Promoteur : {{$result -> promoteur}}</p></li>
              </div>
            </div>
            <div class="sidebar-box">
              <a href="/contact" class="btn btn-primary">Contacter l'agence</a>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection