<template >
  <div class="wrapper">
    <div class="container-fuild">
      <div id="headTitle">
        <div id="logo">
          <img alt="Healthbook" height="44" src="img/logo.png" wdth="70" _mstalt="155922" _msthash="1">
        </div>
        <h1 id="title" _mttexthash="48503" _msthash="2">Menu-Clinic</h1>
      </div>
    </div>
    <Header />
    <ol id="topicPath">
      <li style="margin-left:310px">
        <router-link to="menuclinic">
          <a href="dashbaord">
            <font style="vertical-align : inherit"></font>
            <font style="vertical-align : inherit">Menu-Clinic</font>
          </a>
        </router-link>
      </li>
    </ol>
    <div id="contents">
      <div id="menu">
        <ul class="clearfix">
          <li>
            <dl>
              <dt>
                <router-link to="/prescriptions">
                  <img alt="タックシール印刷" height="168" src="img/tuck_seal.png" width="168">
                </router-link>
              </dt>
              <dd>
                <span>Prescriptions</span>
              </dd>
            </dl>
          </li>
          <li>
            <dl>
              <dt>
                <router-link to="/patientRegister">
                  <img alt="タックシール印刷" height="168" src="img/tuck_seal.png" width="168">
                </router-link>
              </dt>
              <dd>
                <span>Patient Resgister</span>
              </dd>
            </dl>
          </li>
          <li>
            <dl>
              <dt>
                <router-link to="/serailcode">
                  <img alt="タックシール印刷" height="168" src="img/tuck_seal.png" width="168">
                </router-link>
              </dt>
              <dd>
                <span>Serail Code</span>
              </dd>
            </dl>
          </li>
          
        </ul>
      </div>
    </div>

</div>
</template>
<script type="module">

import Header from "./Header.vue";
export default {
  components: { Header },
}
</script>
