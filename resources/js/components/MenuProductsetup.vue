
import Header from './Header.vue';

<template >
  <div class="wrapper">
    <div class="container-fuild">
      <div id="headTitle">
      <div id="logo"><img alt="Healthbook" height="44" src="img/logo.png" width="70" _mstalt="155922" _msthash="1">
      </div>
      <h1 id="title" _msttexthash="48503" _msthash="2">Products-Setting</h1>
    </div>
    </div>
    <div class="container-fuild">
      <Header />
      <ol id="topicPath">
        <li>
          <router-link to="productsetting">
          <a href="dashbaord">
            <font style="vertical-align : inherit">
              <font style="vertical-align : inherit">
                Products-Setting
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
                <router-link to="/brands">
                  <img alt="タックシール印刷" height="168" src="img/icon-brand.png" width="168">
                </router-link>
              </dt>
              <dd>
                <span>Brand</span>
              </dd>
            </dl>
          </li>
          <li>
            <dl>
              <dt>
                <router-link to="/supplies">
                  <img alt="タックシール印刷" height="168" src="img/icon-supply.png" width="168">
                </router-link>
              </dt>
              <dd>
                <span>Suppliyer</span>
              </dd>
            </dl>
          </li>
          <li>
            <dl>
              <dt>
                <router-link to="/unitcode">
                  <img alt="タックシール印刷" height="168" src="img/tuck_seal.png" width="168">
                </router-link>
              </dt>
              <dd>
                <span>Unit Of Mesoure</span>
              </dd>
            </dl>
          </li>
          <li>
            <dl>
              <dt>
                <router-link to="/group">
                  <img alt="タックシール印刷" height="168" src="img/icon-product.png" width="168">
                </router-link>
              </dt>
              <dd>
                <span>Group Product</span>
              </dd>
            </dl>
          </li>
          <li>
            <dl>
              <dt>
                <router-link to="/category">
                  <img alt="タックシール印刷" height="168" src="img/icon-category.png" width="168">
                </router-link>
              </dt>
              <dd>
                <span>Category</span>
              </dd>
            </dl>
          </li>
          <li>
            <dl>
              <dt>
                <router-link to="/exchangerate">
                  <img alt="タックシール印刷" height="168" src="img/tuck_seal.png" width="168">
                </router-link>
              </dt>
              <dd>
                <span>Exchange Rate</span>
              </dd>
            </dl>
          </li>
          <!-- <li>
            <dl>
              <dt>
                <router-link to="/exchangerate">
                  <img alt="タックシール印刷" height="168" src="img/tuck_seal.png" width="168">
                </router-link>
              </dt>
              <dd>
                <span>Exchange Rate</span>
              </dd>
            </dl>
          </li> -->
          <li>
            <dl>
              <dt>
                <router-link to="/paymenMethod">
                  <img alt="タックシール印刷" height="168" src="img/tuck_seal.png" width="168">
                </router-link>
              </dt>
              <dd>
                <span>Payment Method</span>
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
                <!-- <router-link to="/testitem"> -->
                  <router-link to="/testserviceview">
                  <img alt="タックシール印刷" height="168" src="img/tuck_seal.png" width="168">
                </router-link>
              </dt>
              <dd>
                <span>Service Test</span>
              </dd>
            </dl>
          </li>
          <li>
            <dl>
              <dt>
                <router-link to="/company">
                  <img alt="タックシール印刷" height="168" src="img/tuck_seal.png" width="168">
                </router-link>
              </dt>
              <dd>
                <span>Company Setting</span>
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
