<template >
  <div class="wrapper">
    <div class="container-fuild">
      <div id="headTitle">
        <div id="logo"><img alt="Healthbook" height="44" src="img/logo.png" width="70" _mstalt="155922" _msthash="1">
        </div>
        <h1 id="title" _msttexthash="48503" _msthash="2">Menu-Stock</h1>
      </div>
      <Header />
      <ol id="topicPath">
        <li style="margin-left:305px">
          <router-link to="menustock"><a href="dashbaord">
              <font style="vertical-align: inherit">
                <font style="vertical-align: inherit">Menu-Stock</font>
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
                <router-link to="/viewstockcount">
                  <img alt="タックシール印刷" height="168" src="img/tuck_seal.png" width="168">
                </router-link>
              </dt>
              <dd>
                <span>Stock Count</span>
              </dd>
            </dl>
          </li>
          <li>
            <dl>
              <dt>
                <router-link to="/stocktransection">
                  <img alt="タックシール印刷" height="168" src="img/tuck_seal.png" width="168">
                </router-link>
              </dt>
              <dd>
                <span>Stock Transetion</span>
              </dd>
            </dl>
          </li>
          <li>
            <dl>
              <dt>
                <router-link to="/stockalert">
                  <img alt="タックシール印刷" height="168" src="img/icon-stockalert.png" width="168">
                </router-link>
              </dt>
              <dd>
                <span>Stock Alert</span>
              </dd>
            </dl>
          </li>
          <li>
            <dl>
              <dt>
                <router-link to="/category">
                  <img alt="タックシール印刷" height="168" src="img/tuck_seal.png" width="168">
                </router-link>
              </dt>
              <dd>
                <span>Stock Transfer</span>
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
                <router-link to="/beginningstock">
                  <img alt="タックシール印刷" height="168" src="img/tuck_seal.png" width="168">
                </router-link>
              </dt>
              <dd>
                <span>Beginning Stock</span>
              </dd>
            </dl>
          </li>
          <li>
            <dl>
              <dt>
                <router-link to="/stockonhand">
                  <img alt="タックシール印刷" height="168" src="img/tuck_seal.png" width="168">
                </router-link>
              </dt>
              <dd>
                <span>Stock On Hand</span>
              </dd>
            </dl>
          </li>
        </ul>
      </div>
    </div>

  </div>
</template>

<script>

import Header from "../components/Header.vue";
export default
  {
    components:
    {
      Header
    }
  }
</script>

