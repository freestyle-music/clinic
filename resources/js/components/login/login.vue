<template>
    <div id="login">
        <div id="wrap">
            <div id="header"><!-- #header --></div>

            <div id="contents">
                <div class="inner">
                    <!--#contents -->
                    <div class="login-box">
                        <div class="box-contents" style="position: relative;">
                            <h1>
                                <div class="test-photo"
                                    style="  position: relative;height: 172px; background: #b5884d;width: fit-content; left: 35%;">
                                    <div class="logo-ph" style="position: absolute;">
                                        <img alt="healthbook" height="164"
                                            style="width:161px; height: 158px; margin-bottom: 20px;" src="img/logo_ph.png"
                                            width="240">
                                    </div>
                                    <div class="back-pharma" style="position: absolute; top: 30px; left: 28px;">
                                        <img style="height: 86px;" src="img/pharma_photo.png" alt="">
                                    </div>
                                </div>
                            </h1>
                            <div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓"><input
                                    name="authenticity_token" type="hidden"></div>
                            <dl>
                                <dt>
                                    <p style="font-size: 16px;">Username</p>
                                </dt>
                                <dd><input class="beha code text" id="user_name" name="user_name" v-model="user.user_name"
                                        size="20" type="text" tabindex="10000" />
                                </dd>
                                <dt>
                                    <p style="font-size: 16px;">Password</p>
                                </dt>
                                <dd><input class="beha password" id="password" name="password" size="20" type="password"
                                        v-model="user.password" tabindex="10001"></dd>
                            </dl>
                            <div class="buttons" @click="login()">
                                <div style="margin-left: 39%;" class="logo-pharma">
                                    <img style="height: 45px; cursor: pointer;" src="img/login_icon.png" alt="">
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div id="footer">
            <div id="copyright">Copyright (C) healthbook. ALL Right s Researved Edit by Lsky</div>
        </div>

    </div>
</template>
<script>
import Auth from '../../auth/Auth.js';
export default {
    data() {
        return {
            user: {
                user_name: '',
                password: '',
            }
        };
    },
    mounted() {
        if (Auth.check()) {
            this.$router.push('/dashboard');
        }
    },
    methods: {
        login() {
            axios.post('/api/v1/login', this.user)
                .then(({ data }) => {
                    Auth.login(data.token, data.user); //set local storage
                    this.$router.push('/dashboard');
                })
                .catch((error) => {
                    console.log(error);
                });
        }
    }
}
</script>