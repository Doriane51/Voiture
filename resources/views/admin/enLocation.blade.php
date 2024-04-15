@extends('admin.templateAdmin')
@section('content')
<section id="main-content">
    <section class="wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa fa-bars"></i> Liste des voitures en cours de location</h3>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="{{route('index')}}">Home</a></li>
            <li><i class="fa fa-bars"></i>Pages</li>
            <li><i class="fa fa-square-o"></i>Liste des voitures en cours de location</li>
          </ol>
        </div>
      </div>
      <div class="col-lg-12">
        <section class="panel">
          <table class="table table-striped table-advance table-hover">
            <tbody>
              <tr>
                <th> Nom</th>
                <th> Marque</th>
                <th> Description</th>
                <th>Quantité disponible</th>
                <th> Prix de location</th>

              </tr>
              @foreach ($lists as $list)
              <tr>
                <td>{{$list->nom}}</td>
                <td>{{$list->marque}}</td>
                <td>{{$list->description}}</td>
                <td>{{$list->quantiteDispo}}</td>
                <td>{{$list->prixLocation}}</td>

              </tr>
                @endforeach



            </tbody>
          </table>
        </section>
      </div>
    </div>
    </section>
  </section>
@endsection
