<style>
.message.error {
    color: #eb3b5a;
}
.message.success {
    color: #20bf6b;
}
</style>

<template>
    <div>
        <div class="panel">
            <div class="panel-heading"><h4>SMTP & E-mail Data</h4></div>
            <form @submit.prevent="sendEmail()">
                <div class="panel-body">
                    <div class="form-group col-sm-10">
                        <label for="">Host *</label>
                        <input type="text" v-model="smtpData.host" class="form-control" required="required" placeholder="The SMTP Host Address (required)">
                    </div>
                    <div class="form-group col-sm-2">
                        <label for="">Port *</label>
                        <input type="text" v-model="smtpData.port" class="form-control" placeholder="The SMTP Port (required)">
                    </div>
                    <div class="checkbox col-sm-12">
                        <label for=""><input type="checkbox" v-model="smtpData.secured" @change="updateSecurityData()"> Needs Secured Connection?</label>
                    </div>
                    <div class="form-group col-sm-12" v-if="smtpData.secured">
                        <label for="">Security Type</label>
                        <select v-model="smtpData.encryption" class="form-control">
                            <option value="">---</option>
                            <option value="ssl">SSL</option>
                            <option value="tls">TLS</option>
                        </select>
                    </div>
                    <div class="checkbox col-sm-12">
                        <label for=""><input type="checkbox" v-model="smtpData.authentication" @change="updateAuthenticationData()"> Requires Authentication?</label>
                    </div>
                    <template v-if="smtpData.authentication">
                        <div class="form-group col-sm-6">
                            <label for="">Login</label>
                            <input type="text" v-model="smtpData.login" class="form-control" placeholder="The authentication login (required if requires authentication)">
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="">Password</label>
                            <input type="password" v-model="smtpData.password" class="form-control" placeholder="The authentication password (required if requires authentication)">
                        </div>
                    </template>
                    <div class="form-group col-sm-6">
                        <label for="">From E-mail *</label>
                        <input type="email" v-model="smtpData.from" class="form-control" placeholder="The Email that will appear as sender on the inbox (required)">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="">To E-mail *</label>
                        <input type="email" v-model="smtpData.to" class="form-control" placeholder="The Email that receives the test (required)">
                    </div>
                </div>
                <div class="panel-footer">
                    <button type="submit" class="btn btn-success" :disabled="!sendButtonEnabled">Send Test E-mail</button>
                </div>
            </form>
        </div>

        <div class="panel">
            <div class="panel-heading">
                <h4>Messages</h4>
            </div>
            <div class="panel-body">
                <div class="message" :class="message.type" v-for="message in messages">
                    {{ message.datetime + ' - ' + message.content }}
                </div>
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
                    port: 587,
                    secured: false,
                    encryption: '',
                    authentication: true,
                    login: '',
                    password: '',
                    from: 'contato@kingofcode.com.br',
                    to: ''
                },
                messages: []
            }
        },

        mounted() {
            console.log('Component mounted.')
        },

        computed: {
            sendButtonEnabled: function() {
                return this.smtpDataIsValid();
            }
        },

        methods: {
            sendEmail: function() {
                AxiosWrapper.post('/send', this.smtpData, success => {
                    this.addMessage(success.message, 'success');
                }, error => {
                    this.addMessage(error.message, 'error');
                });
            },

            smtpDataIsValid: function() {
                if(!this.smtpData.host) return false;
                if(!this.smtpData.port) return false;

                if(this.smtpData.secured) {
                    if(!this.smtpData.encryption) return false;                    
                }

                if(this.smtpData.authentication) {
                    if(!this.smtpData.login) return false;                    
                    if(!this.smtpData.password) return false;                    
                }

                if(!this.smtpData.from) return false;
                if(!this.smtpData.to) return false;

                return true;
            },

            addMessage: function(content, type) {
                let newMessage = {
                    content: content,
                    datetime: moment().format('YYYY-MM-DD HH:mm:ss'),
                    type: type
                };

                this.messages.unshift(newMessage);
            },

            updateSecurityData: function() {
                if(!this.smtpData.secured) {
                    this.smtpData.encryption = '';                    
                }
            },

            updateAuthenticationData: function() {
                if(!this.smtpData.authentication) {
                    this.smtpData.login = '';                    
                    this.smtpData.password = '';                    
                }
            }
        }
    }
</script>
