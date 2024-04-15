@extends('admin.templateAdmin')
@section('content')
<section id="main-content">
    <section class="wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa fa-bars"></i> Ajouter une nouvel admin</h3>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="{{route('index')}}">Home</a></li>
            <li><i class="fa fa-bars"></i>Pages</li>
            <li><i class="fa fa-square-o"></i>Ajouter une nouvel admin</li>
          </ol>
        </div>
      </div>
      <!-- page start-->
      @if (session()->has('statut'))
<p style="text-align: center; color:blue">{{session()->get('statut')}}</p>
@endif
<div class="panel-body" style="margin:0 auto; width:60%">
    <form class="form-validate form-horizontal" id="feedback_form" method="post" action="{{ route('ajoutAdminPost')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group ">
          <label for="cname" class="control-label col-lg-3">Nom<span class="required">*</span></label>
          <div class="col-lg-9">
            <input class="form-control" id="cname" name="nom" minlength="5" type="text" required />
          </div>
        </div>
        <div class="form-group ">
          <label for="cmarque" class="control-label col-lg-3">Prénom<span class="required">*</span></label>
          <div class="col-lg-9">
            <input class="form-control " id="cmarque" type="text" name="prenom" required />
          </div>
        </div>
        <div class="form-group ">
            <label for="cimage" class="control-label col-lg-3">Adresse<span class="required">*</span></label>
            <div class="col-lg-9">
              <input class="form-control " id="cimage" type="text" name="adresse" required />
            </div>
          </div>
        <div class="form-group ">
          <label for="cdescription" class="control-label col-lg-3">Email</label>
          <div class="col-lg-9">
            <input class="form-control " id="cdescription" name="mail" required/>
          </div>
        </div>
        <div class="form-group ">
          <label for="cprix" class="control-label col-lg-3">Password<span class="required">*</span></label>
          <div class="col-lg-9">
            <input class="form-control" id="cprix" name="prix" type="password" required />
          </div>
        </div>

        <div class="form-group">
          <div class="col-lg-offset-3 col-lg-19">
            <button class="btn btn-primary" type="submit">Ajouter</button>
            <button class="btn btn-default" type="button">Annuler</button>
          </div>
        </div>
      </form>

  </div>

    </section>
  </section>

  @endsection
