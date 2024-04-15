@extends('frontend.template')
@section('content')
<section class="banner banner-secondary" id="top" style="background-image: url(img/banner-image-1-1920x300.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="banner-caption">
                    <div class="line-dec"></div>
                    <h2>liste de mes locations</h2>
                </div>
            </div>
        </div>
    </div>
</section><br><br>
    <main>
        <div class="container">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prix Unitaire</th>
                    <th scope="col">Date début</th>
                    <th scope="col">Date fin</th>
                    <th scope="col">Nombre de jours</th>
                    <th scope="col">Prix total</th>
                    <th scope="col">Statut</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($locations as $location)

                    <tr>
                        <th scope="row">{{$i}}</th>
                        <td>{{$location->car()->nom}}</td>
                        <td>{{$location->car()->prixLocation}}</td>
                        <td>{{$location->dateLocation}}</td>
                        <td>{{$location->dateFinLocation}}</td>
                        <td>{{nbreJours($location->Location,$location->dateFinLocation)}}</td>
                        <td>{{nbreJours($location->Location,$location->dateFinLocation)*$location->car()->prixLocation}}</td>
                        <td>@if($location->restorer == 0)
                            <a href="{{route('rendre', ['id'=>$location->id])}}" class="btn btn-danger">Rendre</a>
                        @else
                        <button class="btn btn-success">Rendu</button>
                        @endif
                    </td>
                      </tr>
                      {{$i++}}
                    @endforeach


                </tbody>
              </table>
        </div>


</main>

@endsection
