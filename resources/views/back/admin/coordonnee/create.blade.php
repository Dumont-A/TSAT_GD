@extends('layout_back')

@section('title')
<h1>
    Liste des différents statuts
</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="box">
                <div class="box-header with-border">                
                    <!-- /.box-header -->
                    <div class="box-body">                    
                        @foreach ($leComite as $unStatut)
                        <table class="table table-bordered">
                            <tr>
                                <td class="col-md-6">{{$unStatut->fonction}}</td>
                                <td class="col-md-6">
                                    {!! Form::open(['route' => ["deleteStatut", $unStatut->id], 'method' => 'delete']) !!}
                                    <button type="submit" class="btn btn-danger btn-circle btn-xs"><i class="fa fa-times"></i></button>
                                    {!! Form::close() !!}  
                                </td>
                            </tr>
                            @endforeach
                            <tr>
                                {!! Form::open(['route' => "coordonnee.store", 'method' => 'post']) !!}
                                <td class="col-md-6"><input id="statut" type="text" class="form-control" name="statut" required autofocus></td>
                                <td class="col-md-6">
                                    <button type="submit" class="btn btn-success">Ajouter</button>
                                </td>
                                {!! Form::close() !!}  
                            </tr>
                        </table>
                        {!! Form::open(['route' => "coordonnee.index", 'method' => 'get']) !!}
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Remplir les status</button>
                        {!! Form::close() !!}
                    </div>                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('script')
@endsection