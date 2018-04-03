@extends('layout_back')

@section('title')
  <h1>Ajout d'un partenaire</h1>
@stop

@section('content')
<!-- FORMULAIRE DE CREATION D'UN PARTENAIRE -->
{!! Form::open(['route' => "partenaire.store",'files' => true, 'method' => 'post']) !!}
  <div class='form-row'>
    <div class='form-group col-md-6'>
      <label>Dénomination : </label>
      <input class="form-control" placeholder="Denomination partenaire" name="name">
    </div>
    <div class='form-group col-md-6'>
      <label>Description : </label>
      <input class="form-control" placeholder="Description du partenaire" name="description">
    </div>
  </div>

  <div class='form-group col-md-12'>
    <label>Adresse : </label>
    <input class="form-control" placeholder="Adresse postale" name="adresse">
  </div>

  <div class='form-row'>
    <div class='form-group col-md-6'>
      <label>Ville : </label>
      <input class="form-control" placeholder="Ville" name="ville">
    </div>
    <div class='form-group col-md-6'>
      <label>Code postal : </label>
      <input class="form-control" placeholder="Code postal" name="cp">
    </div>
  </div>

  <div class="form-group col-md-12">
    <label>Téléphone : </label>
    <input class="form-control" placeholder="Telephone partenaire" name="tel">
  </div>

  <div class="form-row">
    <div class='form-group col-md-4'>
      <label>Lien du site : </label>
      <input class="form-control" placeholder="Lien du site partenaire" name="site">
    </div>
    <div class='form-group col-md-4'>
      <label>Lien page Facebook : </label>
      <input class="form-control" placeholder="Facebook partenaire" name="fb">
    </div>
    <div class='form-group col-md-4'>
      <label>Lien Twitter : </label>
      <input class="form-control" placeholder="Twitter partenaire" name="twitter">
    </div>
  </div>

  <!-- EL FINDER -->
  <div class="row">
    <label for="elfinder">Feature Image</label>
    <input type="text" id="elfinder" name="elfinder" value="">
    <a href="" class="popup_selector" data-inputid="elfinder">Select Image</a>
  </div>

  <button type="submit" class="btn btn-success">Créer</button>
  <button type="reset" class="btn btn-danger">Effacer le formulaire</button>
{!! Form::close() !!}

@stop
@section('script')
<script>
  $('.popup_selector').click( function (event) {
            event.preventDefault()
            var updateID = $(this).attr('data-inputid')
            var elfinderUrl = '/elfinder/popup/'
            var triggerUrl = elfinderUrl + updateID
            $.colorbox({
                href: triggerUrl,
                fastIframe: true,
                iframe: true,
                width: '70%',
                height: '50%'
            })
          });
</script>
@stop
