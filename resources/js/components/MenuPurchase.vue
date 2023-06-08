<template >
  <div class="wrapper">
    <div class="container-fuild">
      <div id="headTitle">
        <div id="logo"><img alt="Healthbook" height="44" src="img/logo.png" width="70" _mstalt="155922" _msthash="1">
        </div>
        <h1 id="title" _msttexthash="48503" _msthash="2">Purchase</h1>
      </div>
      <Header />
      <ol id="topicPath">
        <li style="margin-left:280px">
          <router-link to="menupurchase">
            <a href="dashboard">
              <font style="vertical-align : inherit">
                <font style="vertical-align : inherit">
                  Purcheses
                </font>
              </font>
            </a>
          </router-link>
        </li>
      </ol>
    </div>
    <div id="contents">
      <div id="menu">
        <ul class="clearfix">
          <li>
            <dl>
              <dt>
                <router-link to="/Purchasview">
                  <img alt="タックシール印刷" height="168" src="img/icon-procheseorder.png" width="168">
                </router-link>
              </dt>
              <dd>
                <span>Purchese Order</span>
              </dd>
            </dl>
          </li>
          <li>
            <dl>
              <dt>
                <router-link to="/viewrecept">
                  <img alt="タックシール印刷" height="168" src="img/tuck_seal.png" width="168">
                </router-link>
              </dt>
              <dd>
                <span>Rescept Order</span>
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
          <li>
            <dl>
              <dt>
                <router-link to="/paymenview">
                  <img alt="タックシール印刷" height="168" src="img/tuck_seal.png" width="168">
                </router-link>
              </dt>
              <dd>
                <span>Payment</span>
              </dd>
            </dl>
          </li>
        </ul>
      </div>
    </div>

  </div>
</template>

<script>
// import Header from '../components/Header.vue'
import Header from './Header.vue'
export default {
  components: {
    Header
  }
}
</script>