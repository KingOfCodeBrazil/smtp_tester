<template>
    <div>
        <div class="panel">
            <div class="panel-heading"><h4>SMTP & E-mail Data</h4></div>
            <div class="panel-body">
                <form action="">
                    <div class="form-group col-sm-10">
                        <label for="">Host</label>
                        <input type="text" v-model="smtpData.host" class="form-control">
                    </div>
                    <div class="form-group col-sm-2">
                        <label for="">Port</label>
                        <input type="text" v-model="smtpData.port" class="form-control">
                    </div>
                    <div class="checkbox col-sm-12">
                        <label for=""><input type="checkbox" v-model="smtpData.secured"> Needs Secured Connection?</label>
                    </div>
                    <div class="form-group col-sm-12" v-show="smtpData.secured">
                        <label for="">Security Type</label>
                        <select v-model="smtpData.securityType" class="form-control">
                            <option value="">---</option>
                            <option value="SSL">SSL</option>
                            <option value="TLS">TLS</option>
                        </select>
                    </div>
                    <div class="checkbox col-sm-12">
                        <label for=""><input type="checkbox" v-model="smtpData.authentication"> Requires Authentication?</label>
                    </div>
                    <template v-show="smtpData.authentication">
                        <div class="form-group col-sm-12">
                            <label for="">Login</label>
                            <input type="text" v-model="smtpData.login" class="form-control">
                        </div>
                        <div class="form-group col-sm-12">
                            <label for="">Password</label>
                            <input type="password" v-model="smtpData.password" class="form-control">
                        </div>
                    </template>
                    <div class="form-group col-sm-12">
                        <label for="">From E-mail</label>
                        <input type="email" v-model="smtpData.from" class="form-control">
                    </div>
                    <div class="form-group col-sm-12">
                        <label for="">To E-mail</label>
                        <input type="email" v-model="smtpData.to" class="form-control">
                    </div>
                </form>
            </div>
            <div class="panel-footer">
                <button class="btn btn-success">Send Test E-mail</button>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                smtpData: {
                    host: '',
                    port: 25,
                    secured: false,
                    securityType: '',
                    authentication: true,
                    login: '',
                    password: '',
                    from: 'contato@kingofcode.com.br',
                    to: ''
                }
            }
        },

        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
