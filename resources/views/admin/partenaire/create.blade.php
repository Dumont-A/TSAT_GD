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

  <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <h2>Standalone Button</h2>
        <div class="input-group">
          <span class="input-group-btn">
            <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary" ">
              <i class="fa fa-picture-o"></i> Choose
            </a>
          </span>
          <input id="thumbnail" class="form-control" type="text" name="filepath">
        </div>
        <img id="holder" style="margin-top:15px;max-height:100px;">
      </div>
    </div>

  <button type="submit" class="btn btn-success">Créer</button>
  <button type="reset" class="btn btn-danger">Effacer le formulaire</button>
{!! Form::close() !!}

@stop
@section('script')
  <script>
   var route_prefix = "{{ url(config('lfm.prefix')) }}";
  </script>
  <script>
    {!! \File::get(base_path('vendor/unisharp/laravel-filemanager/public/js/lfm.js')) !!}
  </script>
<script>
    $('#lfm').filemanager('image', {prefix: route_prefix});
</script>
@stop