<template>

    <div>
    <div class="sombra-1 p-2 white mb-4">

        <md-card>
            <md-card-header>
                <md-card-header-text>
                    <div class="md-title">Cláudio Sumburane</div>
                    <div class="md-subhead">Universidade Eduardo Mondlane, DMI</div>
                </md-card-header-text>

                <md-avatar class="md-large">
                    <img src="http://vuematerial.io/assets/avatar-2.jpg" alt="People">
                </md-avatar>
            </md-card-header>

        </md-card>

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

        <h5 class="p-2 sombra-1 verde-text content-center bg">Atualização de Dados</h5>

        <md-card class="mb-3">
            <md-stepper class="white">
                <md-step :md-editable="true" md-label="Email" :md-error="!mailValid" :md-continue="mailValid" :md-message="invalidMessage">
                    <p>Please enter your emailaddress</p>
                    <md-input-container :class="{'md-input-invalid': !mailValid}">
                        <md-input type="email" v-model="mail" required/>
                        <label>Email</label>
                    </md-input-container>
                </md-step>
                <md-step :md-disabled="!mailValid">
                    <p>Yay  is a valid emailadress</p>
                </md-step>
                <md-step :md-disabled="!mailValid">
                    <p>This seems something important I need to fix just right before the last step.</p>
                </md-step>
            </md-stepper>
        </md-card>

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