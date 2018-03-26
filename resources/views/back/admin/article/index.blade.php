@extends('layout_back')

@section('title')
<h1>
    Administration des articles
    <small>- Rechercher, Modifier et supprimer des articles</small>
</h1>
@stop

@section('content')


<!-- Main content -->
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                {!! Form::open(['route' => "article.create", 'method' => 'get']) !!}
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
                                <th>Article</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tab_articles as $unArticle)
                            <tr>
                                <td class="col-md-1">
                                    {{ $unArticle["id"] }}
                                </td>
                                <td class="col-md-10" id="td{{ $unArticle["id"] }}">
                                    <a href="..." style="display:block;width:100%;height:100%;">
                                    {{ $unArticle["titre"] }}
                                    </a>
                                </td>
                                <td class="col-md-1">
                                    <div class="row">
                                        <div class="col-md-6">
                                            {!! Form::open(['route' => ["article.edit", $unArticle->id], 'method' => 'get']) !!}
                                            <button type="submit" class="btn btn-primary btn-circle"><i class="fa fa-list"></i></button>
                                            {!! Form::close() !!}
                                        </div>
                                        <div class="col-md-6">
                                            {!! Form::open(['route' => ["article.destroy", $unArticle->id], 'method' => 'delete', 'id' => "form".$unArticle->id]) !!}
                                            <button type="submit" id="{{ $unArticle->id }}" class="btn btn-danger btn-circle jsDeleteButton"><i class="fa fa-times"></i></button>
                                            {!! Form::close() !!}
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody> 
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@stop

