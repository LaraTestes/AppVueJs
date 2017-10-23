@extends('layouts.esqueleto')

@section('content')


<cabecalho></cabecalho>

    <div class="container mt-2 content-center">

        <div class="row">
            <div class="col-md-2 col-2 col-sm-2">

                <left></left>

            </div>

            <div class="col-md-7 col-sm-7 col-7" id="container">

                {{--<wall></wall>--}}

                {{--<content></content>--}}

                <router-view></router-view>

            </div>

            <div class="col-md-3 col-sm-3 col-3">

                <right></right>
                <router-view></router-view>


            </div>

        </div>


    </div>




@endsection
