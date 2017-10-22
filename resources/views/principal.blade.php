@extends('layouts.esqueleto')

@section('content')


<cabecalho></cabecalho>

    <div class="container mt-2 content-center">

        <div class="row">
            <div class="col-md-2 col-2 col-sm-2">

                <left></left>

            </div>

            <div class="col-md-6 col-sm-6 col-7">

                <h5 class="verde-text content-center bg p-2">Publique aqui a tua dúvida</h5>

                <md-divider></md-divider>

                <duvida class="mb-2"></duvida>

                <h5 class="verde-text content-center bg p-2">Dúvidas recentes</h5>

                <md-divider></md-divider>

                <wall class="mb-2"></wall>
                <wall class="mb-2"></wall>
                <wall class="mb-2"></wall>

            </div>

            <div class="col-md-3 col-sm-3 col-3">
                <right></right>

            </div>

        </div>
    </div>




@endsection
