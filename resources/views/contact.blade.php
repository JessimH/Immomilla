@extends('layout')
@section('content')
<div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('https://media.lesechos.com/api/v1/images/view/5d1473758fe56f63c2439d98/1280x720/2202973-immobilier-faut-il-acheter-aujourdhui-web-tete-0302190155223.jpg')">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-7">
              <h1 class="mb-3">Contactez nous !</h1>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light" id="contact-section">
      <div class="container">
        <div class="row justify-content-center text-center">
        <div class="col-7 text-center mb-5">
          <h2>Contactez nous pour tout projet d'achat ou d'investissement dans la pierre</h2>
        </div>
      </div>
      @include('flash-message')
        <div class="row">
          <div class="col-lg-8 mb-5" >
            <form action="/contact" method="POST">
            @csrf
              <div class="form-group row">
                <div class="col-md-6 mb-4 mb-lg-0">
                  <input type="text" id="firstName" name="firstName" class="form-control" placeholder="Prénom">
                </div>
                <div class="col-md-6">
                  <input type="text" id="name" name="name"  class="form-control" placeholder="Nom">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" id="email" name="email"  class="form-control" placeholder="Email">
                  @error('email')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                  @enderror
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" id="subject" name="subject"  class="form-control" placeholder="Sujet">
                  @error('subject')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                  @enderror
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <textarea name="message" id="message" class="form-control" placeholder="Ecrivez votre message" cols="30" rows="10"></textarea>
                  @error('message')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                  @enderror
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-6 mr-auto">
                  <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Envoyer">
                </div>
              </div>
            </form>
          </div>
          <div class="col-lg-4 ml-auto">
            <div class="bg-white p-3 p-md-5">
              <h3 class="text-black mb-4">Informations</h3>
              <ul class="list-unstyled footer-link">
                <li class="d-block mb-3">
                  <span class="d-block text-black">Addresse:</span>
                  <span>45 avenue du parc des sports</span></li>
                <li class="d-block mb-3"><span class="d-block text-black">Téléphone:</span><span>06 52 40 53 99</span></li>
                <li class="d-block mb-3"><span class="d-block text-black">Email:</span><span>info@yourdomain.com</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection


