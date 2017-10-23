<template>

    <nav class="navbar navbar-fixed-top white  sombra-1 init" role="navigation" >
        <div class="container content-center">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <md-icon class="verde-text">menu</md-icon>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand l_verde" href="/duvidas">eXplicador</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">

                <ul class="nav navbar-nav col-offset-3 white">
                    <form class="form-inline mt-2 mt-md-0 col-xs-offset-3 col-xs-6">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    </form>
                </ul>

                    <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle l_verde" data-toggle="dropdown">Cadastro <span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-lr animated slideInLeft" role="menu">
                            <div class="col-md-12">
                                <div class="text-center"><h5><b>Register</b></h5></div>
                                <form id="ajax-register-form" method="post" role="form" autocomplete="off">
                                    <div class="form-group">
                                        <input type="text" name="username" tabindex="1" class="form-control" placeholder="Username" value="">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" tabindex="2" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-6 col-xs-offset-3">
                                                <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-info" value="Cadastrar">
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" class="hide" name="token" value="7c6f19960d63f53fcd05c3e0cbc434c0">
                                </form>
                            </div>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle l_verde" data-toggle="dropdown">Log In <span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-lr animated slideInRight" role="menu">
                            <div class="col-md-12">
                                <div class="text-center"><h5><b>Log In</b></h5></div>
                                <form id="ajax-login-form" method="post" role="form" autocomplete="off">
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="" autocomplete="off">
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" autocomplete="off">
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-7">
                                                <input type="checkbox" tabindex="3" name="remember" id="remember">
                                                <label for="remember"> Lembra-me</label>
                                            </div>
                                            <div class="col-xs-5 pull-right">
                                                <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-success" value="Log In">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="text-center">
                                                    <a href="" tabindex="5" class="forgot-password">Esqueceu a senha?</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <input type="hidden" class="hide" name="token" id="token" value="a465a2791ae0bae853cf4bf485dbe1b6">
                                </form>
                            </div>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</template>

<style>
    /* Fixed navbar */
    body {
        padding-top: 53px;
        background-color: #f0f0f0 !important;
        font-size: 12px !important;
    }
    /* General sizing */
    ul.dropdown-lr {
        width: 230px;
    }

    /* mobile fix */
    @media (max-width: 768px) {
        .dropdown-lr h5 {
            color: #eee;
        }
        .dropdown-lr label {
            color: #eee;
        }
    }

    nav.init{
        height: 35px;
    }
</style>