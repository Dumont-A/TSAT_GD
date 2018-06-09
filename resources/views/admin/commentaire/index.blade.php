@extends('layout_back')

@section('title')
<h1>
    Administration des news
    <small>- Rechercher, Modifier et supprimer des news</small>
</h1>
@stop

@section('content')


<!-- Main content -->
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                {!! Form::open(['route' => "news.create", 'method' => 'get']) !!}
                <button type="submit" class="btn btn-success btn-lg btn-block">Ajouter</button>
                {!! Form::close() !!}
                <!-- /.box-header -->
                <div class="box-body">

                    <!-- search form (Optional) -->
                    <form action="#" method="get">
                        <div class="input-group margin">
                            <input type="text" name="q" class="form-control" placeholder="Rechercher . . .">
                            <span class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn btn-info btn-flat"><i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>

                    <table class="table table-bordered">
                        <thead class="thead-inverse">
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>News</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($tab_news as $uneNews)
                            <tr id="row{{$uneNews->id}}">
                                <td class="col-md-1">
                                    {{ $uneNews["id"] }}
                                </td>
                                <td class="col-md-10" id="td{{ $uneNews["id"] }}">
                                    <a href="..." style="display:block;width:100%;height:100%;">
                                    {{ $uneNews["titre"] }}
                                    </a>
                                </td>
                                <td class="col-md-1">
                                    <div class="row">
                                        <div class="col-md-6">
                                            {!! Form::open(['route' => ["news.edit", $uneNews->id], 'method' => 'get']) !!}
                                            <button type="submit" class="btn btn-primary btn-circle"><i class="fa fa-list"></i></button>
                                            {!! Form::close() !!}
                                        </div>
                                        <div class="col-md-6">
                                            {!! Form::open(['route' => ["news.destroy", $uneNews->id], 'method' => 'delete', 'id' => "form".$uneNews->id]) !!}
                                            <button type="button" id="{{ $uneNews->id }}" class="btn btn-danger btn-circle jsDeleteButton" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-times"></i></button>
                                            {{-- <button id="btnDestroy" class="btn btn-default btn-app" type="button" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i></button> --}}
                                            {!! Form::close() !!}

                                        </div>
                                    </div>
                                </td>
                            </tr>
                          @empty
                          @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
