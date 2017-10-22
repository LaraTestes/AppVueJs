<template>

    <!--<md-card>-->
    <div class="b_rad is-active">

        <p class="bg p-2">
            <router-link to="/explicadores" class="l_verde">
                <md-icon>perm_identity</md-icon>
                explicador
            </router-link>
        </p>

        <p class="bg p-2">
            <router-link to="/duvidas" class="l_verde">
                <md-icon>question_answer</md-icon>
                duvidas
            </router-link>
        </p>

        <p class="bg p-2">
            <router-link to="/disciplinas" class="l_verde">
                <md-icon>book</md-icon>
                disciplinas
            </router-link>
        </p>

        <p class="bg p-2">
            <router-link to="/messagens" class="l_verde">
                <md-icon>question_answer</md-icon>
                mensagens
            </router-link>
        </p>

        <p class="bg p-2">
            <router-link to="/artigos" class="l_verde">
                <md-icon>book</md-icon>
                artigos
            </router-link>
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
