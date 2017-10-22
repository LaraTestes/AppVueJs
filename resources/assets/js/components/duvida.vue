<template>

    <md-card class=" p-3">

        <h5 class="verde-text">Publique aqui a tua dúvida</h5>
        <form action="">

            <md-input-container>
                <label></label>
                <md-textarea></md-textarea>
            </md-input-container>

            <md-input-container>
                <label>Pode adicionar imagem também</label>
                <md-file v-model="onlyImages" accept="image/*"></md-file>
            </md-input-container>

            <md-button class="md-fab md-primary md-mini">
                <md-icon>near_me</md-icon>
            </md-button>
        </form>
    </md-card>

</template>