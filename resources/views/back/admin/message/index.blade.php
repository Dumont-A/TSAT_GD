@extends('layout_back')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">                
                <!-- /.box-header -->
                <div class="box-body">     
                    <table class="table table-bordered">
                        <thead class="thead-inverse">
                            <tr>
                                <th>Auteur</th>
                                <th>Intitulé</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($lesMessages as $unMessage)
                            <tr>
                                <td>{{$unMessage->auteur}}</td>
                                <td>{{$unMessage->titre}}</td>
                                <td>{{$unMessage->created_at->format('d/m/Y')}}</td>
                                @if($unMessage->validation == 1)
                                <td>
                                    {!! Form::open(['route' => ["message.show", $unMessage->id], 'method' => 'get']) !!}
                                    <button type="submit" class="btn btn-primary">Déjà Traité</button>
                                    {!! Form::close() !!}</td>
                                @else
                                <td>
                                    {!! Form::open(['route' => ["message.show", $unMessage->id], 'method' => 'get']) !!}
                                    <button type="submit" class="btn btn-success">Répondre</button>
                                    {!! Form::close() !!}
                                </td>
                                @endif
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

