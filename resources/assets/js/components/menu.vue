<template>

    <!--<md-card>-->
    <div class="b_rad">

        <p class="bg p-2">
            <a class="l_verde" href="#explicador">
                <md-icon>perm_identity</md-icon>
                <span>eXplicador</span>
            </a>
        </p>

        <p class="bg p-2">
            <a class="l_verde" href="#duvidas">
                <md-icon>question_answer</md-icon>
                <span>Dúvidas</span>
            </a>
        </p>

        <p class="bg p-2">
            <a class="l_verde" href="#mensagens">
                <md-icon>question_answer</md-icon>
                <span>Mensagens</span>
            </a>
        </p>

        <p class="bg p-2">
            <a class="l_verde" href="#artigos">
                <md-icon>book</md-icon>
                <span>Artigos</span>
            </a>
        </p>


    </div>

    <!--</md-card>-->



</template>

<script>

    export default {
        data(){
            return{
                opcaoClicada : '',

                lists:{},
            }
        },

        metodos:{
            teste(opcao){
                alert(opcao);
            },

            test: function (message) {
                alert(message)
            },
        }

    };

</script>

<style>

    .b_rad{
        border-radius: 8px !important;
    }

    p.bg{
        background-color: #f4f4f4;
    }

</style>
