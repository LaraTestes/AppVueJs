<template>

    <md-card class=" p-3">

        <!--<h5 class="verde-text">Publique aqui a tua dúvida</h5>-->

        <form action="">

            <md-input-container>
                <label></label>
                <md-textarea></md-textarea>
            </md-input-container>

            <md-input-container>
                <label>Clique aqui para adicionar imagem também</label>
                <md-file v-model="onlyImages" accept="image/*"></md-file>
            </md-input-container>


            <md-card-actions class="p-1">
                <md-button class="md-raised md-primary verde"><span>Enviar</span></md-button>
            </md-card-actions>

        </form>
    </md-card>

</template>

<style>

    md-button{
        font-size:8px !important;
    }

</style>