<template >
  <div class="wrapper">
    <div class="container-fuild">
      <div id="headTitle">
        <Logo />
        <h1 id="title" _msttexthash="48503" _msthash="2">Home</h1>
      </div>
    </div>
    <Header />
    <div id="contents">
      <div id="menu">
        <ul class="clearfix">
          <li v-if="Products">
            <dl>
              <dt>
                <router-link to="/viewproduct">
                  <img alt="タックシール印刷" height="168" src="img/icon-product.png" width="168" />
                </router-link>
              </dt>
              <dd>
                <span>Products Stock</span>
              </dd>
            </dl>
          </li>
          <li v-if="Pharmacy">
            <dl>
              <dt>
                <router-link to="/menuclinic">
                  <img alt="タックシール印刷" height="168" src="img/icon-pharmacy.png" width="168" />
                </router-link>
              </dt>
              <dd>
                <span>Pharmacy</span>
              </dd>
            </dl>
          </li>
          <li v-if="pos">
            <dl>
              <dt>
                <router-link to="/menumedical">
                  <img alt="タックシール印刷" height="168" src="img/icon-clinic.png" width="168" />
                </router-link>
              </dt>
              <dd>
                <span>POS</span>
              </dd>
            </dl>
          </li>
          <li v-if="Laboratory">
            <dl>
              <dt>
                <router-link to="/laboratory">
                  <img alt="タックシール印刷" height="168" src="img/icon-clinic.png" width="168" />
                </router-link>
              </dt>
              <dd>
                <span>Laboratory</span>
              </dd>
            </dl>
          </li>
          <li v-if="Company">
            <dl>
              <dt>
                <router-link to="/company">
                  <img alt="タックシール印刷" height="168" src="img/icon-clinic.png" width="168" />
                </router-link>
              </dt>
              <dd>
                <span>Company Setup</span>
              </dd>
            </dl>
          </li>
          <li>
            <dl>
              <dt>
                <router-link to="/employee">
                  <img alt="タックシール印刷" height="168" src="img/tuck_seal.png" width="168">
                </router-link>
              </dt>
              <dd>
                <span>Employee</span>
              </dd>
            </dl>
          </li>
        </ul>
      </div>
    </div>
  </div>
</template>
<script>
import Auth from '../auth/Auth.js';
import Header from "../components/Header.vue";
import Logo from "../components/logo.vue";
export default {
  components: { Header, Logo },
  data() {
    return {
      Menu: window.Menu,
      loggedUser: {
        id: '',
        user_code: '',
        user_name: '',
        email: '',
        role: '',
        statue: ''
      },
      Products: true,
      Pharmacy: true,
      Laboratory: true,
      Company: true,
      pos: true,
    }
  },
  mounted() {
    if (Auth.check()) {
      this.loggedUser = Auth.user;
      console.log(this.loggedUser);
      if (this.loggedUser.role.trim() == 'Admin') {
        this.Products = true;
        this.Pharmacy = true;
        this.Laboratory = true;
        this.Company = true;
        this.pos = true;
      } else if (this.loggedUser.role.trim() == 'Doctor') {
        this.Products = true;
        this.Pharmacy = true;
        this.Laboratory = false;
        this.Company = false;
        this.pos = true;
      } else if (this.loggedUser.role.trim() == 'Labo') {
        this.Products = false;
        this.Pharmacy = false;
        this.Laboratory = true;
        this.Company = false;
        this.pos = false;

      } else {
        this.Products = false;
        this.Pharmacy = false;
        this.Laboratory = false;
        this.Company = false;
        this.pos = false;
      }
    }

  },
  methods: {

  },
};
</script>
