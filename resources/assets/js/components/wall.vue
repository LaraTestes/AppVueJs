<template>

    <div>

        <h5 class="verde-text content-center bg p-2">Publique aqui a tua dúvida</h5>

        <duvida></duvida>

        <h5 class="verde-text content-center bg p-2">Dúvidas recentes</h5>


        <md-card class="">
        <md-card md-with-hover>
            <md-card-header>
                <div class="md-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio itaque?</div>
                <div class="md-subhead">POO, Java</div>
            </md-card-header>

            <md-card-content>
               Informática, DMI, UEM
            </md-card-content>

            <md-bottom-bar>
                <md-bottom-bar-item md-icon="favorite" md-active>Gostar</md-bottom-bar-item>
                <md-bottom-bar-item md-icon="visibility">Ver</md-bottom-bar-item>
                <!--<md-bottom-bar-item md-icon="near_me">Enviar</md-bottom-bar-item>-->
            </md-bottom-bar>
        </md-card>
    </md-card>

    </div>
</template>

<script>

    let duvida = require('./duvida.vue');

    export default {

        components: {duvida},

        data() {
            return {
                addActive: '',

            }
        }

    }

</script>


<style>
    .b_rad{
        border-radius: 5px !important;
    }

    md-button{
        font-size: 11px !important;
    }

    h5.bg{
        background-color: #f4f4f0;
    }
</style>