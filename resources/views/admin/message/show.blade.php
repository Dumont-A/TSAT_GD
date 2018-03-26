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
                                <th>Adresse email</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$unMessage->auteur}}</td>
                                <td>{{$unMessage->titre}}</td>
                                <td>{{$unMessage->email}}</td>
                                <td>{{$unMessage->created_at->format('d/m/Y')}}</td>
                            </tr>
                        </tbody>                        
                    </table>
                    <hr>
                    <table class="table table-bordered">
                        <thead class="thead-inverse">
                            <tr>
                                <th style="text-align: center">Contenu du message</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{!!$unMessage->contenu!!}</td>
                            </tr>
                        </tbody>                        
                    </table>
                    <br>
                    {!! Form::open(['route' => ["message.update", $unMessage->id], 'method' => 'put']) !!}
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="15" class="form-control" id="contenu"  name="contenu" required data-validation-required-message="Renseignez votre message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary">Envoyer Message</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

