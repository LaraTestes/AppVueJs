@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-md-4 ml-4 bg-danger">
                            <p class="m-5 bg-blue">texto</p>
                            <p class="p-3 bg-cyan">texto2</p>
                        </div>
                        <div class="col-md-5">
                            <cabecalho></cabecalho>
                        </div>
                        <div class="col-md-4">

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
