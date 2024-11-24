@extends('layout.appFormateur')
@section('content')

        <ol class="breadcrumb breadcrumb-chevron bg-body-tertiary rounded-3 mb-2">
            <li class="breadcrumb-item fs-5"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item fs-5 active">Mon profil</li>
        </ol>
        <div class="card mb-2">
                    
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card shadow-lg border-0 rounded-lg mt-2">
                        <div class="card-header"><h2 class=" fs-4 my-2">Mon profil</h2></div>
                        <div class="card-body">

                            <div class="d-flex justify-content-center">
                              <img class="img-profile rounded-circle text-align-center" width="100" src="{{ auth()->guard('formateur')->user()->image ? asset('storage/' . auth()->guard('formateur')->user()->image) : asset('img/user-removebg-preview.png') }}" data-bs-toggle="modal" data-bs-target="#imageModal">
                            </div>

                            <div class="form-group row">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-2 col-form-label">Nom</label>
                                        <div class="col-sm-10">
                                          <input type="text" readonly class="form-control" id="monInput" value=" {{ auth()->guard('formateur')->user()->nom }}" name="nom">
                                        </div>
                                      </div>
                            </div>
                                  <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Prenom</label>
                                    <div class="col-sm-10">
                                      <input type="text" readonly class="form-control" id="monInput" value=" {{ auth()->guard('formateur')->user()->prenom }}" name="prenom">
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-2 col-form-label">Telephone</label>
                                        <div class="col-sm-10">
                                          <input type="text" readonly class="form-control" id="monInput" value=" {{ auth()->guard('formateur')->user()->telephone }}" name="telephone">
                                        </div>
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                      <input type="text" readonly class="form-control" id="monInput" value="{{ auth()->guard('formateur')->user()->email }}" name="email">
                                    </div>
                                  </div>
    
                                  <div class="form-group row">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-2 col-form-label">Biographie</label>
                                        <div class="col-sm-10">
                                          <input type="text" readonly class="form-control" id="monInput" value=" {{ auth()->guard('formateur')->user()->bio }}" name="bio">
                                        </div>
                                      </div>
                                  </div>
                                
                                  <div class="d-flex align-items-center justify-content-end  mt-4 mb-0">
                                    <a href="{{ route('monprofil.edit' , auth()->guard('formateur')->user()->id )}}" class="btn btn-primary">Modifier mon profil</a>
                                </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
{{-- modal aggrandissement image --}}
            <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">Ma photo de profil</div>
                        <div class="modal-body">
                            <img src="{{ auth()->guard('formateur')->user()->image ? asset('storage/' . auth()->guard('formateur')->user()->image) : asset('img/user-removebg-preview.png') }}" 
                                alt="Image agrandie de la catégorie" 
                                class="img-fluid">
                            </div>
                        </div>
                    </div>
            </div>
        </div>
            <br>
    
@endsection