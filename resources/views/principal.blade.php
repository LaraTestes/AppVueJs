@extends('layouts.esqueleto')

@section('content')


<cabecalho></cabecalho>

    <div class="container mt-2 content-center">

        <div class="row">
            <div class="col-md-3 col-2 col-sm-3">

                <left></left>

            </div>

            <div class="col-md-6 col-sm-6 col-7">

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
