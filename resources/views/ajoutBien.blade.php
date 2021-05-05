@extends('layouts.app')

@section('content')

    @include('flash-message')

    <div class="site-section bg-light" id="contact-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 mb-5" >
            <form  method="POST" enctype="multipart/form-data" action="/add">
            {{csrf_field()}}
              <div class="form-group row">
                <div class="col-md-6 mb-4 mb-lg-0">
                  <input id="title" type="text" name="title" class="form-control" placeholder="Titre de l'annonce">
                  @error('title')
                      <p class="text-danger">{{$message}}</p>
                  @enderror
                </div>
                <div class="col-md-6">
                  <input id="promoteur" type="text" name="promoteur" class="form-control" placeholder="Nom du promoteur">
                  @error('promoteur')
                      <p class="text-danger">{{$message}}</p>
                  @enderror
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <input id="price" type="number" name="price" class="form-control" placeholder="Prix">
                  @error('price')
                      <p class="text-danger">{{$message}}</p>
                  @enderror
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <select class="form-control" name="type" id="type">
                    <option>Maison</option>
                    <option>Appartement</option>
                    <option>Studio</option>
                    <option>Local commercial</option>
                  </select>
                  @error('type')
                      <p class="text-danger">{{$message}}</p>
                  @enderror
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-3 mb-3 mb-lg-0">
                  <input id="pieces" type="number" name="pieces" class="form-control" placeholder="Nombre de pièces">
                  @error('pieces')
                      <p class="text-danger">{{$message}}</p>
                  @enderror
                </div>
                <div class="col-md-3">
                  <input id="surface" type="number" name="surface" class="form-control" placeholder="Surface m2">
                  @error('surface')
                      <p class="text-danger">{{$message}}</p>
                  @enderror
                </div>
                <div class="col-md-3">
                  <input id="rentabilite" type="number" name="rentabilite" class="form-control" placeholder="Rentabilité estimé (%)">
                  @error('rentabilite')
                      <p class="text-danger">{{$message}}</p>
                  @enderror
                </div>
                <div class="col-md-3">
                  <select class="form-control" name="pinel" id="Pinel">
                    <option>Non éligible Pinel</option>
                    <option>Pinel</option>
                  </select>
                  @error('type')
                      <p class="text-danger">{{$message}}</p>
                  @enderror
                </div>
              </div>
              
              <div class="form-group row">
                <div class="col-md-6 mb-4 mb-lg-0">
                  <input id="adresse" type="text" name="adresse"  class="form-control" placeholder="Localisation du bien (ville)">
                  @error('adresse')
                      <p class="text-danger">{{$message}}</p>
                  @enderror
                </div>
                <div class="col-md-6">
                  <input id="departement" type="text" name="departement" class="form-control" placeholder="Département">
                  @error('departement')
                      <p class="text-danger">{{$message}}</p>
                  @enderror
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                <label class="col-md-12 mr-4" for="filenames">Ajoutez vos photos (min: 2) :</label>
                <input type="file" id="filenames" name="filenames[]" accept="image/png, image/jpeg" multiple>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <textarea name="description" id="description" class="form-control" placeholder="Texte de présentation de bien..." cols="30" rows="10"></textarea>
                  @error('description')
                      <p class="text-danger">{{$message}}</p>
                  @enderror
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-6 mr-auto">
                  <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Ajouter">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

@endsection


