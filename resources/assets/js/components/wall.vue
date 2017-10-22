<template>

    <div>

        <h5 class="verde-text content-center bg p-2">Publique aqui a tua dúvida</h5>

        <fduvida></fduvida>

        <h5 class="verde-text content-center bg p-2">Dúvidas recentes</h5>

        <duvida class="mb-2"></duvida>
        <duvida class="mb-2"></duvida>
        <duvida class="mb-2"></duvida>



    </div>
</template>

<script>

    let fduvida = require('./form-duvida.vue');

    let duvida = require('./duvida.vue');

    export default {

        components: {duvida, fduvida},

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