@extends('layout')
@section('content')
<div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('https://images.prismic.io/emerige-2018/2601a352da9070d6e969cd845f9c2af73406e464_levallois-danton-residence-web-min.jpg?auto=compress,format')">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-7">
              <h1 class="mb-3">{{sizeof($results)}} résultats</h1>
              <p>{{$search['type']}} neuf, {{$search['surface']}} m2 minimum avec un budget maximum de {{$search['price']}}€</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="pt-5 bg-light">
      <div class="container">
        <div class="row justify-content-center  mb-5">
          <div class="col-md-7 text-center">
            <div class="pt-5 bg-light">
              <div class="container">
                <div class="row justify-content-center  mb-5">
                  <div class="col-md-12 text-center">
                      <h1>Effectuer une nouvelle recherche</h1>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12" >
                    <form action="/habiter/resultats" method="POST">
                      {{csrf_field()}}
                        <div class="form-group row">
                          <div class="col-md-12">
                            <select class="form-control" id="type" name="type" required>
                              <option>Maison</option>
                              <option>Appartement</option> 
                              <option>Studio</option>
                              <option>Local commercial</option>
                            </select>
                          </div>
                          <div class="col-md-12 mb-4 mt-3 mb-lg-0">
                            <input type="number" id="surface" name="surface" class="form-control" placeholder="Surface minimum en m2" required>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-md-6">
                            <input type="number" id="departement" name="departement" class="form-control" placeholder="département (2 chiffres)" required>
                          </div>
                          <div class="col-md-6 mb-4 mb-lg-0">
                            <input type="number" name="price" id="price" class="form-control" placeholder="Votre budget" required>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-md-3 m-auto">
                            <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="ok">
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="d-flex flex-wrap justify-content-center">

            @for ($i = 0; $i < sizeof($results); $i++)
            <div class="item-1 h m-3" style="min-width:290px; max-width:392px;">
                  <img src="{{url('/files/'.$images_files[$i][0])}}" alt="Image" class="img-fluid">
                  <div class="item-1-contents">
                  <h3><a href="/bien/{{$results[$i]-> id}}">{{$results[$i]-> title}}</a></h3>
                    <ul>
                    <li class="d-flex"><h4 style="color: white;"><span class="badge bg-secondary">Éligible Pinel</span></h4></li>
                      <li class="d-flex"><span>Prix</span> <span class="price ml-auto">{{$results[$i] -> price}}€</span></li>
                      <li class="d-flex"><span >Localisation</span><span class="ml-auto">{{$results[$i] -> adresse}}</span></li>
                      <li class="d-flex"><span>Promoteur</span><span class="price ml-auto">{{$results[$i] -> promoteur}}</span></li>
                      <li class="d-flex">
                      <span>Types</span>
                      <div class="d-flex justify-content-end ml-auto">
                      <span class="mr-2">{{$results[$i] -> type}},</span>
                      <span class="">{{$results[$i]-> pieces}} pièces, </span>
                      </li>
                      <li class="d-flex">
                        <span>Surface</span>
                        <div class="d-flex justify-content-end ml-auto">
                          <span class="mr-2">{{$results[$i] -> surface}} m2</span>
                        </div>
                      </li>
                      <li class="d-flex"><span>Date</span><span class="price ml-auto">{{\Carbon\Carbon::parse($results[$i] -> created_at)->format('d/m/Y')}}</span></li>
                      <li class="d-flex" style="color: green;" ><span>Rentabilité estimé</span><span class="price ml-auto">{{$results[$i] -> rentabilite}}%</span></li>
                    </ul>
                  </div>
                </div>
           @endfor
            </div>
          </div>
        </div>
      </div>
          <div class="col-12 mt-5 text-center pb-5 d-flex justify-content-center">
          </div>
        </div>
      </div>
    </div>

@endsection