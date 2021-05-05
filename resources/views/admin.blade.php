@extends('layout')

@section('content')
<div class="ftco-blocks-cover-1">

<div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('https://www.titanhq.fr/wp-content/uploads/2019/04/choses-administrateur-systeme-ne-doit-jamais-faire-interdits-securite-reseau-1080x675.jpeg')">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-7">
              <h1 class="mb-3">Page Administrateur</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="site-section" style="padding: 30px;">
      <div class="admin">
              <h2 style="margin-bottom: 20px;">Liste des biens</h2>
              @include('flash-message')
              <a href="/add" class="btn btn-primary">Ajouter un bien</a>
          <table class="table" style="margin-top: 20px;">
              <thead>
                  <tr>
                      <th scope="col">Titre</th>
                      <th scope="col">Date</th>
                      <th scope="col">Prix</th>
                      <th scope="col">Promoteur</th>
                      <th scope="col">Type</th>
                      <th scope="col">Action</th>
                  </tr>
              </thead>
              <tbody>
              @foreach ($biens as $bien)
                  <tr>
                      <td> <a href="/bien/{{$bien-> id}}">{{$bien -> title}}</a></td>
                      <td>{{\Carbon\Carbon::parse($bien -> created_at)->format('d/m/Y')}}</td>
                      <td>{{$bien -> price}}</td>
                      <td>{{$bien -> promoteur}}</td>
                      <td>{{$bien -> type}}, {{$bien -> pieces}} pièce, {{$bien -> surface}} m2</td>
                      <td><a href="/biens/suppression/{{$bien -> id}}">Supprimer</a></td>
                  </tr>
              @endforeach
              </tbody>
          </table>
          </div>
    </div>
</div>
@endsection