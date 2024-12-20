@extends('layout.appAdmin')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
</div>

<div class="row">
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-info">
        <div class="inner">
          <h3>{{ $etudiantsCount }}</h3>

          <p>Etudiants</p>
        </div>
        <a href="#" class="small-box-footer">Voir <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-success">
        <div class="inner">
          <h3>{{ $validFormateursCount }}</h3>

          <p>Formateurs actifs</p>
        </div>
        <a href="{{ route('admin.gestFormateurs')}}" class="small-box-footer">Voir <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-warning">
        <div class="inner">
          <h3>{{ $invalidFormateursCount }}</h3>

          <p>Formateurs en attente</p>
        </div>
        <a href="{{ route('admin.gestFormateurAttente') }}" class="small-box-footer">Voir <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-danger">
        <div class="inner">
          <h3>{{ $formationsCount }}</h3>

          <p>Formations</p>
        </div>
        <a href="#" class="small-box-footer">Voir <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>{{ $categoriesCount }}</h3>
  
            <p>Categories</p>
          </div>
          <a href="{{ route('gestion.categorie') }}" class="small-box-footer">Voir <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
    <!-- ./col -->
  </div>
@endsection