<template>

        <div class="sombra-1 p-2 white mb-4">

            <h5 class="p-2 sombra-1 verde-text content-center bg">Atualização de Dados</h5>

            <md-tabs class="md-transparent">
                <md-tab id="disciplinas" md-label="Disciplinas">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt dolorum quas amet cum vitae, omnis! Illum quas voluptatem, expedita iste, dicta ipsum ea veniam dolore in, quod saepe reiciendis nihil.</p>
                </md-tab>

                <md-tab id="seguindo" md-label="seguidores">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt dolorum quas amet cum vitae, omnis! Illum quas voluptatem, expedita iste, dicta ipsum ea veniam dolore in, quod saepe reiciendis nihil.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt dolorum quas amet cum vitae, omnis! Illum quas voluptatem, expedita iste, dicta ipsum ea veniam dolore in, quod saepe reiciendis nihil.</p>
                </md-tab>

                <md-tab id="duvidas" md-label="Dúvidas">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt dolorum quas.</p>
                </md-tab>
            </md-tabs>

        </div>


</template>


<script>

    export default {
        data: () => ({
            mail: '',
            mailValid: false,
            invalidMessage: 'Invalid mail'
        }),
        watch: {
            mail() {
                var emailRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

                this.mailValid = emailRegex.test(this.mail);
                if (this.mailValid) {
                    this.invalidMessage = 'Valid mail';
                } else {
                    this.invalidMessage = 'Invalid mail';
                }
            }
        }
    };

</script>

<style>
    md-step{
        background-color: #ffffff !important;
    }
</style>