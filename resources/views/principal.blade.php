@extends('layouts.esqueleto')

@section('content')


<cabecalho></cabecalho>

    <div class="container mt-2">

        <div class="row">
            <div class="col-md-2">

                <left></left>

            </div>

            <div class="col-md-6">

                <div class="row mb-3">
                    <div class="col-md-6">
                        <wall></wall>
                    </div>

                    <div class="col-md-6">
                        <wall></wall>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <wall></wall>
                    </div>

                    <div class="col-md-6">
                        <wall></wall>
                    </div>
                </div>



            </div>

            <div class="col-md-3">



            </div>

        </div>
    </div>




@endsection
