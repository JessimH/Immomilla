@extends('layout')
@section('content')
<div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('https://www.laforet.com/media/cache/storage/media/14003/Achat-revente-en-immobilier.jpg.png?method=max&size=medium')">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-7">
              <h1 class="mb-3">Ivestissez avec ImmoMilla</h1>
              <p>Nous vous proposons un large choix d’appartements neufs ou de maisons neuves correspondant à votre budget et à votre mode de vie. Pour votre projet d’investissement locatif, notre connaissance du marché local vous permet de bénéficier du meilleur accompagnement.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="pt-5 bg-light">
      <div class="container">
      <div class="row justify-content-center  mb-5">
      <div class="col-md-7 text-center">
          <h1>Quel type de bien recherchez vous pour votre investissement ?</h1>
        </div>
      </div>
        <div class="row">
          <div class="col-lg-12" >
          <form action="/investir/resultats" method="POST">
            {{csrf_field()}}
              <div class="form-group row">
                <div class="col-md-12">
                <select class="form-control" name="type" id="type" required>
                   <option>Maison</option>
                   <option>Appartement</option>
                   <option>Studio</option>
                   <option>Local commercial</option>
                </select>
                </div>
                <div class="col-md-12 mb-4 mt-3 mb-lg-0">
                  <input type="number" name="surface" id="surface" class="form-control" placeholder="Surface minimum en m2" required>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-6">
                  <input type="number" id="departement" name="departement" class="form-control" placeholder="département (2 chiffres)" required>
                </div>
                <div class="col-md-6 mb-4 mb-lg-0">
                  <input type="number" id="price" name="price" class="form-control" placeholder="Votre budget maximum" required>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-3 m-auto">
                  <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Rechercher">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    </div>
    <div class="pt-5 bg-light">
      <div class="container">
        <div class="row justify-content-center  mb-5">
          <div class="col-md-7 text-center">
            <h1 class="text-center">Les biens les plus récents du marché:</h1>
          </div>

        </div>
        <div class="row">
          <div class="col-12">

            <div class="nonloop-block-13 owl-carousel d-flex">
            @for ($i = 0; $i < sizeof($biens); $i++)
            <div class="item-1 h m-3" style="min-width:290px; max-width:392px;">
                  <img src="{{url('/files/'.$images_files[$i][0])}}" alt="Image" class="img-fluid">
                  <div class="item-1-contents">
                  <h3><a href="/bien/{{$biens[$i]-> id}}">{{$biens[$i]-> title}}</a></h3>
                    <ul>
                    <li class="d-flex"><h4 style="color: white;"><span class="badge bg-secondary">Éligible Pinel</span></h4></li>
                      <li class="d-flex"><span>Prix</span> <span class="price ml-auto">{{$biens[$i] -> price}}€</span></li>
                      <li class="d-flex"><span >Localisation</span><span class="ml-auto">{{$biens[$i] -> adresse}}</span></li>
                      <li class="d-flex"><span>Promoteur</span><span class="price ml-auto">{{$biens[$i] -> promoteur}}</span></li>
                      <li class="d-flex">
                      <span>Types</span>
                      <div class="d-flex justify-content-end ml-auto">
                      <span class="mr-2">{{$biens[$i] -> type}},</span>
                      <span class="">{{$biens[$i]-> pieces}} pièces, </span>
                      </li>
                      <li class="d-flex">
                        <span>Surface</span>
                        <div class="d-flex justify-content-end ml-auto">
                          <span class="mr-2">{{$biens[$i] -> surface}} m2</span>
                        </div>
                      </li>
                      <li class="d-flex"><span>Date</span><span class="price ml-auto">{{\Carbon\Carbon::parse($biens[$i] -> created_at)->format('d/m/Y')}}</span></li>
                      <li class="d-flex" style="color: green;" ><span>Rentabilité estimé</span><span class="price ml-auto">{{$biens[$i] -> rentabilite}}%</span></li>
                    </ul>
                  </div>
                </div>
           @endfor
            </div>
          </div>
        </div>
        <p class="text-center mt-4 mb-5">
              <a href="#" class="btn btn-primary custom-prev"><i class="fas fa-arrow-left"></i></a>
              <a href="#" class="btn btn-primary custom-next"><i class="fas fa-arrow-right"></i></a>
            </p>
      </div>
@endsection