@extends('layout')
@section('content')
<div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('https://www.eiffage-immobilier.fr/files/live/sites/eiffage-immo/files/contributed/categories/habiter.jpg')">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-7">
              <h1 class="mb-3">Trouvez le bien de vos rêves</h1>
              <p>Nous vous accompagnons à chaque étape de votre projet immobilier. Nous sommes à vos côtés dans le cadre de votre recherche d’appartement neuf ou d’acquisition d’une maison neuve.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="pt-5 bg-light">
      <div class="container">
      <div class="row justify-content-center  mb-5">
      <div class="col-md-7 text-center">
          <h1>Rechercher directement un bien selon VOS critères</h1>
        </div>
      </div>
        <div class="row">
          <div class="col-lg-12" >
            <form action="#" method="post">
              <div class="form-group row">
                <div class="col-md-12">
                <select class="form-control" id="exampleFormControlSelect1">
                   <option>Maison</option>
                   <option>Appartement</option>
                   <option>Studio</option>
                   <option>Local commercial</option>
                </select>
                </div>
                <div class="col-md-12 mb-4 mt-3 mb-lg-0">
                  <input type="number" class="form-control" placeholder="Surface minimum en m2">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-6">
                  <input type="number" class="form-control" placeholder="département">
                </div>
                <div class="col-md-6 mb-4 mb-lg-0">
                  <input type="number" class="form-control" placeholder="Votre budget">
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
            <h1 class="text-center">Les biens les plus récents:</h1>
          </div>

        </div>
        <div class="row">
          <div class="col-12">

            <div class="nonloop-block-13 owl-carousel d-flex">
              
              <div class="item-1 h">
                <img src="https://i-mcr.unimedias.fr/sites/art-de-vivre/files/styles/large/public/chermand_1.jpg?auto=compress%2Cformat&crop=faces%2Cedges&cs=srgb&fit=crop&h=600&w=900" alt="Image" class="img-fluid">
                <div class="item-1-contents">
                  <h3>Programme Immobilier neuf à Paris 16ème</h3>
                  <ul>
                    <li class="d-flex"><span>Prix</span> <span class="price ml-auto">120000€</span></li>
                    <li class="d-flex"><span >Localisation</span><span class="ml-auto">adresse du bien</span></li>
                    <li class="d-flex"><span>Promoteur</span><span class="price ml-auto"><img src="https://upload.wikimedia.org/wikipedia/fr/thumb/4/4c/Logo_Vinci.svg/1280px-Logo_Vinci.svg.png"></span></li>
                    <li class="d-flex">
                    <span>Types</span>
                    <div class="d-flex justify-content-end ml-auto">
                    <span class="mr-2">Appartement</span>
                    <span class="">3 pièces</span>
                    </div>
                    </li>
                    <li class="d-flex"><span>date</span><span class="price ml-auto">12/12/2021</span></li>
                  </ul>
                </div>
              </div>
              <div class="item-1 h">
                <img src="https://i-mcr.unimedias.fr/sites/art-de-vivre/files/styles/large/public/chermand_1.jpg?auto=compress%2Cformat&crop=faces%2Cedges&cs=srgb&fit=crop&h=600&w=900" alt="Image" class="img-fluid">
                <div class="item-1-contents">
                  <h3>Programme Immobilier neuf à Paris 16ème</h3>
                  <ul>
                    <li class="d-flex"><span>Prix</span> <span class="price ml-auto">120000€</span></li>
                    <li class="d-flex"><span >Localisation</span><span class="ml-auto">adresse du bien</span></li>
                    <li class="d-flex"><span>Promoteur</span><span class="price ml-auto"><img src="https://upload.wikimedia.org/wikipedia/fr/thumb/4/4c/Logo_Vinci.svg/1280px-Logo_Vinci.svg.png"></span></li>
                    <li class="d-flex">
                    <span>Types</span>
                    <div class="d-flex justify-content-end ml-auto">
                    <span class="mr-2">Appartement</span>
                    <span class="">3 pièces</span>
                    </div>
                    </li>
                    <li class="d-flex"><span>date</span><span class="price ml-auto">12/12/2021</span></li>
                  </ul>
                </div>
              </div>
              <div class="item-1 h">
                <img src="https://i-mcr.unimedias.fr/sites/art-de-vivre/files/styles/large/public/chermand_1.jpg?auto=compress%2Cformat&crop=faces%2Cedges&cs=srgb&fit=crop&h=600&w=900" alt="Image" class="img-fluid">
                <div class="item-1-contents">
                  <h3>Programme Immobilier neuf à Paris 16ème</h3>
                  <ul>
                    <li class="d-flex"><span>Prix</span> <span class="price ml-auto">120000€</span></li>
                    <li class="d-flex"><span >Localisation</span><span class="ml-auto">adresse du bien</span></li>
                    <li class="d-flex"><span>Promoteur</span><span class="price ml-auto"><img src="https://upload.wikimedia.org/wikipedia/fr/thumb/4/4c/Logo_Vinci.svg/1280px-Logo_Vinci.svg.png"></span></li>
                    <li class="d-flex">
                    <span>Types</span>
                    <div class="d-flex justify-content-end ml-auto">
                    <span class="mr-2">Appartement</span>
                    <span class="">3 pièces</span>
                    </div>
                    </li>
                    <li class="d-flex"><span>Date</span><span class="price ml-auto">12/12/2021</span></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <p class="text-center mt-4 mb-5">
              <a href="#" class="btn btn-primary custom-prev"><i class="fas fa-arrow-left"></i></a>
              <a href="#" class="btn btn-primary custom-next"><i class="fas fa-arrow-right"></i></a>
            </p>
      </div>
@endsection