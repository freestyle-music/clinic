<template >
  <div class="wrapper">
    <div class="container-fuild">
      <Header/>
      <ol id="topicPath">
          <li >
            <router-link to="viewproduct"><a href="dashbaord">
              <font style="vertical-align: inherit"
                ><font style="vertical-align: inherit">Products-Stock</font></font>
            </a>
            </router-link>
          </li>
        </ol>
      <!-- <div id="header">
        <div id="headTitle">
          <div id="logo">
            <img alt="Healthbook" height="44" src="img/logo.png" width="70" />
          </div>
          <h1 id="title">
            <font style="vertical-align: inherit">
              <font style="vertical-align: inherit">Patient master</font>
            </font>
          </h1>
        </div>
        <ol id="topicPath">
          <li id="tpHome">
            <a href="/" title="go to menu"
              ><img alt="" height="28" src="img/topicPath_home.png" width="28"
            /></a>
          </li>
          <li>
            <span>
              <font style="vertical-align: inherit">
                <font style="vertical-align: inherit"> View-Product </font>
              </font>
            </span>
          </li>
        </ol>
        <div id="headInfo">
          <div id="date-info">
            <span class="icon"></span>
            <p id="todays" original-title="PM12:13">
              <font style="vertical-align: inherit">
                <font style="vertical-align: inherit">2022/08/25</font>
              </font>
            </p>
          </div>
          <div id="user-info">
            <span class="icon"></span>
            <p id="userName">
              <font style="vertical-align: inherit">
                <font style="vertical-align: inherit">system </font> </font
              ><a href="/login/logout" id="btnlogout" original-title="logout">
                <font style="vertical-align: inherit">
                  <font style="vertical-align: inherit">logout</font>
                </font>
              </a>
            </p>
          </div>
        </div>
      </div> -->
    </div>

    <div class="search-box">
      <div id="product">
        <!--#contents -->
        <div class="search-box mb-4">
          <a
            class="btn-radius bt-pn btn btn-sm"
            data-bs-toggle="dropdown"
            aria-expanded="false"
            style="float: right; color: #f8f5b4"
          >
            <i class="fas fa-plus" style="padding-right: 5px"> </i>
            Menu
          </a>
          <ul class="dropdown-menu">
            <li>
              <a
                @click="showboom()"
                class="dropdown-item btn btn-primary"
                data-bs-toggle="modal"
                data-bs-target="#staticBackdropss"
                tabindex="10028"
                ><i class="fa-solid fa-circle-b"></i> Boom Product</a
              >
            </li>
            <li>
              <a
                @click="getsuppliyerview()"
                class="dropdown-item btn btn-primary"
                data-bs-toggle="modal"
                data-bs-target="#staticboomId"
                tabindex="10028"
                ><i class="fa fa-print" aria-hidden="true"></i> Print</a
              >
            </li>
          </ul>
          <div class="search-box-title">
            <router-link to="product"
              ><a
                class="btn-radius btn btn-sm"
                href="#"
                style="color: #f8f5b4; margin-top: -2px; color: #dbdee1"
              >
                <i class="fas fa-plus" style="padding-right: 5px"> </i>
                Add Product
              </a></router-link
            >
            <router-link to="productsetting"
              ><a
                class="btn-radius btn btn-sm"
                href="#"
                style="color: #f8f5b4; margin-top: -2px"
              >
                <i class="fa fa-cog" aria-hidden="true"></i>
                Product Setting
              </a></router-link
            >
            <router-link to="menupurchase"
              ><a
                class="btn-radius btn btn-sm"
                href="#"
                style="color: #f8f5b4; margin-top: -2px"
              >
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                Purchase Order
              </a></router-link
            >
            <router-link to="menustock"
              ><a
                class="btn-radius btn btn-sm"
                href="#"
                style="color: #f8f5b4; margin-top: -2px"
              >
                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                Stock
              </a></router-link
            >
            <router-link to="stockalert"
              ><a
                class="btn-radius btn btn-sm"
                href="#"
                style="color: #f8f5b4; margin-top: -2px"
              >
                <i class="fas fa-bell"></i>
                Products stock alert
                <span
                  style="
                    background-color: red;
                    border-radius: 5px;
                    padding: 3px;
                    box-shadow: 1px 1px;
                  "
                  >{{ stockcount }} item</span
                >
              </a></router-link
            >
          </div>
      
          <div class="search-box-content">
            <table
              width="100%"
              border="0"
              cellpadding="0"
              cellspacing="0"
              class="tbl_search"
              id="hover-table"
            >
              <tbody>
                <tr>
                  <th width="10%">Barcode</th>
                  <td width="50%">
                    <input
                      :disabled="isDisabled"
                      v-model="form.product_barcode"
                      class="string_zen_kana clear_text text input_text"
                      style="width: 360px"
                      type="text"
                    />
                  </td>
                </tr>
                <tr>
                  <th width="10%">Description.1</th>
                  <td width="50%">
                    <input
                      :disabled="isDisabled"
                      v-model="form.description"
                      class="string_zen clear_text text input_text"
                      style="width: 360px"
                      type="text"
                    />
                  </td>
                </tr>
                <tr>
                  <th width="10%">Description.2</th>
                  <td width="50%">
                    <input
                      :disabled="isDisabled"
                      v-model="form.description_2"
                      class="string_zen clear_text text input_text"
                      type="text"
                      style="width: 360px"
                    />
                  </td>
                </tr>
                <tr>
                  <th width="10%">Stock Unit</th>
                  <td width="50%">
                    <select
                      :disabled="isDisabled"
                      v-model="form.stock_unit_of_measure_code"
                      class="form"
                      style="width: 360px"
                    >
                      <option value=""></option>
                      <option v-for="uint in uints" :value="uint.unit_code">
                        {{ uint.unit_of_measure }}
                      </option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <th width="10%">ReOrder Point</th>
                  <td width="50%">
                    <input
                      :disabled="isDisabled"
                      v-model="form.reorder_point"
                      class="string_zen clear_text text input_text"
                      style="width: 360px"
                      type="text"
                    />
                  </td>
                </tr>
                <tr>
                  <th width="10%">Suppliyer</th>
                  <td width="50%">
                    <select
                      :disabled="isDisabled"
                      v-model="form.sup_code"
                      class="form"
                      style="width: 360px"
                    >
                      <option value=""></option>
                      <option
                        v-for="suppliyer in suppliyers"
                        :value="suppliyer.sup_code"
                      >
                        {{ suppliyer.sup_name }}
                      </option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <th width="10%">Group Product</th>
                  <td width="50%">
                    <select
                      :disabled="isDisabled"
                      v-model="form.group_code"
                      class="form"
                      style="width: 360px"
                    >
                      <option value=""></option>
                      <option
                        v-for="graoup in graoups"
                        :value="graoup.group_code"
                      >
                        {{ graoup.group_name }}
                      </option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <th width="10%">Category</th>
                  <td width="50%">
                    <select
                      :disabled="isDisabled"
                      v-model="form.cat_code"
                      class="form"
                      style="width: 360px"
                    >
                      <option value=""></option>
                      <option
                        v-for="categor in category"
                        :value="categor.cat_code"
                      >
                        {{ categor.cat_name }}
                      </option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <th width="10%">Brand Name</th>
                  <td width="50%">
                    <select
                      :disabled="isDisabled"
                      v-model="form.brand_code"
                      class="form"
                      style="width: 360px"
                    >
                      <option value=""></option>
                      <option v-for="brand in brands" :value="brand.brand_code">
                        {{ brand.brand_name }}
                      </option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <th width="10%">Unit Price</th>
                  <td width="50%">
                    <input
                      :disabled="isDisabled"
                      v-model="form.unit_price"
                      class="string_zen clear_text text input_text"
                      type="text"
                      style="width: 360px"
                    />
                  </td>
                </tr>
                <tr>
                  <th>inventory</th>
                  <td width="90%">
                    <div class="selector" id="inactivced">
                      <span>{{ form.inactived }}</span>
                      <select
                        id="inactivced"
                        name="inactivced"
                        tabindex="10003"
                        v-model="form.inactived"
                        style="min-width: 51px; opacity: 0; width: 80px"
                      >
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                      </select>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
            <div class="search-box-footer">
              <div class="button type2" id="uniform-undefined">
                <span
                  ><input
                    @click="searchProduct()"
                    type="button"
                    value="display"
                    class="type2"
                    style="opacity: 0; width: 54px"
                    tabindex="10025"
                  /><i class="fa fa-search" aria-hidden="true"></i> Search</span
                >
              </div>
              <div class="button type2" id="uniform-undefined">
                <span
                  data-bs-toggle="modal"
                  data-bs-target="#statiex-import"
                  tabindex="10028"
                  @click="save()"
                  ><input
                    @click="save()"
                    type="button"
                    value="display"
                    class="type2"
                    style="opacity: 0; width: 54px"
                    tabindex="10025"
                  /><i class="fas fa-file-import"></i> Import From Excel</span
                >
              </div>
              <div class="button type2" id="uniform-undefined">
                <span
                  data-bs-toggle="modal"
                  data-bs-target="#statiex-import"
                  tabindex="10028"
                  @click="exportSheet()"
                  ><input
                    @click="exportSheet()"
                    type="button"
                    value="display"
                    class="type2"
                    style="opacity: 0; width: 54px"
                    tabindex="10025"
                  /><i class="fas fa-file-import"></i> Export To Excel</span
                >
              </div>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="box-content">
            <table
              width="100%"
              border="0"
              cellpadding="0"
              cellspacing="0"
              class="table table-striped br-table"
            >
              <thead>
                <tr class="header-table">
                  <th width="5%">Image</th>
                  <th width="9%">Product No</th>
                  <th width="9%">Barcode</th>
                  <th width="13%">Description</th>
                  <th width="13%">Description2</th>
                  <th width="9%">Group</th>
                  <th width="9%">Categrory</th>
                  <th width="9%">Brand</th>
                  <th width="9%">Stock Unit</th>
                  <th width="9%">Purche Unit</th>
                  <th width="9%">Inventory</th>
                  <th width="9%"></th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="(product, index) in products.data" :key="index">
                  <td v-if="index % 2 == 0" style="border: medium none">
                    <img
                      alt=""
                      height="40"
                      :src="'img/product/' + product.image_url"
                      width="40"
                    />
                  </td>
                  <td v-else style="border: medium none">
                    <img
                      alt=""
                      height="40"
                      :src="'img/product/' + product.image_url"
                      width="40"
                    />
                  </td>
                  <td v-if="index % 2 == 0" style="border: medium none">
                    {{ product.product_no }}
                  </td>
                  <td v-else style="border: medium none">
                    {{ product.product_no }}
                  </td>
                  <td v-if="index % 2 == 0" style="border: medium none">
                    {{ product.product_barcode }}
                  </td>
                  <td v-else style="border: medium none">
                    {{ product.product_barcode }}
                  </td>
                  <td v-if="index % 2 == 0" style="border: medium none">
                    {{ product.description }}
                  </td>
                  <td v-else style="border: medium none">
                    {{ product.description }}
                  </td>
                  <td v-if="index % 2 == 0" style="border: medium none">
                    {{ product.description_2 }}
                  </td>
                  <td v-else style="border: medium none">
                    {{ product.description_2 }}
                  </td>

                  <td v-if="index % 2 == 0" style="border: medium none">
                    {{ product.group_code }}
                  </td>
                  <td v-else style="border: medium none">
                    {{ product.group_code }}
                  </td>
                  <td v-if="index % 2 == 0" style="border: medium none">
                    {{ product.cat_code }}
                  </td>
                  <td v-else style="border: medium none">
                    {{ product.cat_code }}
                  </td>
                  <td v-if="index % 2 == 0" style="border: medium none">
                    {{ product.brand_code }}
                  </td>
                  <td v-else style="border: medium none">
                    {{ product.brand_code }}
                  </td>

                  <td v-if="index % 2 == 0" style="border: medium none">
                    {{ product.stock_unit_of_measure_code }}
                  </td>
                  <td v-else style="border: medium none">
                    {{ product.stock_unit_of_measure_code }}
                  </td>
                  <td v-if="index % 2 == 0" style="border: medium none">
                    {{ product.purche_unit_of_measure_code }}
                  </td>
                  <td v-else style="border: medium none">
                    {{ product.purche_unit_of_measure_code }}
                  </td>
                  <td v-if="index % 2 == 0" style="border: medium none">
                    {{ product.inventory }}
                  </td>
                  <td v-else style="border: medium none">
                    {{ product.inventory }}
                  </td>
                  <td
                    v-if="index % 2 == 0"
                    style="border: medium none; text-align: center"
                  >
                    <div
                      style="
                        display: flex;
                        flex-direction: row;
                        justify-content: space-around;
                        align-items: center;
                      "
                    >
                      <div class="button type2" id="uniform-undefined">
                        <span
                          ><input
                            @click="getEdit(product.product_no)"
                            type="button"
                            value="display"
                            class="type2"
                            style="opacity: 0; width: 54px"
                            tabindex="10025"
                          /><i class="fa fa-edit"></i>Update</span
                        >
                      </div>
                      <div class="button type2" id="uniform-undefined">
                        <span
                          ><i class="fa fa-trash" aria-hidden="true"></i>Delete
                          <input
                            type="button"
                            value="clear"
                            class="type2"
                            style="opacity: 0; width: 63px"
                            tabindex="10026"
                        /></span>
                      </div>
                    </div>
                  </td>
                  <td v-else style="border: medium none; text-align: center">
                    <div
                      style="
                        display: flex;
                        flex-direction: row;
                        justify-content: space-around;
                        align-items: center;
                      "
                    >
                      <div class="button type2" id="uniform-undefined">
                        <span
                          ><input
                            @click="getEdit(product.product_no)"
                            type="button"
                            value="display"
                            class="type2"
                            style="opacity: 0; width: 54px"
                            tabindex="10025"
                          /><i class="fa fa-edit"></i>Update</span
                        >
                      </div>
                      <div
                        class="button type2"
                        id="uniform-undefined"
                        to="product"
                      >
                        <span
                          ><i class="fa fa-trash" aria-hidden="true"></i>Delete
                          <input
                            type="button"
                            value="clear"
                            class="type2"
                            style="opacity: 0; width: 63px"
                            tabindex="10026"
                        /></span>
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="box-footer-pagination">
            <pagination :data="products" @pagination-change-page="getproduct" />
          </div>
        </div>
      </div>
    </div>
  </div>

  <div
    class="modal fade ui-modal"
    id="statiex-import"
    data-bs-backdrop="static"
    data-bs-keyboard="false"
    tabindex="-1"
    aria-labelledby="staticboomId"
    aria-hidden="true"
  >
    <div class="modal-dialog">
      <div class="modal-content ui-dialog">
        <div class="ui-widget-header">
          <h5 class="modal-title in-header" id="staticBackdropLabel">
            <i class="fa fa-print" aria-hidden="true"></i> {{ excel }} to
            Docutment: {{ form.document_no }} , {{ form.description }}
          </h5>
          <a
            href="#"
            class="ui-dialog-titlebar-close ui-corner-all"
            role="button"
            data-bs-dismiss="modal"
          >
            <span class="ui-icon ui-icon-closethick">close</span></a
          >
        </div>
        <div id="purchaseorder">
          <div class="card">
            <div class="card-body">
              <div class="container mb-5 mt-3">
                <div class="row d-flex align-items-baseline">
                  <div class="col-xl-9"></div>
                  <hr />
                </div>

                <div class="container">
                  <div class="col-md-12">
                    <div class="text-center">
                      <h3
                        v-if="excel == 'Import'"
                        class="​title-purchase"
                        id="titlered"
                      >
                        {{ excel }} {{ exefile }} from Excel
                      </h3>
                      <h3 v-else class="title-purchase" id="titlered">
                        {{ excel }} To Excel
                      </h3>
                    </div>
                  </div>
                  <div
                    class="
                      row
                      my-2
                      mx-1
                      justify-content-center
                      table-padding-bot
                      customsroll
                    "
                  >
                    <table
                      class="table table-striped table-borderless"
                      id="exceldata"
                    >
                      <thead
                        style="background-color: #84b0ca"
                        class="text-white"
                      >
                        <tr>
                          <th style="width: 12%">No</th>
                          <th style="width: 12%">Barcode</th>
                          <th style="width: 15%">Description</th>
                          <th style="width: 7%">Prince</th>
                          <th style="width: 7%">R.Point</th>
                          <th style="width: 7%">Supplyer</th>
                          <th style="width: 7%">Brand</th>
                          <th style="width: 7%">Group</th>
                          <th style="width: 12%">Category</th>
                          <th style="width: 7%">unitCode</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr
                          v-for="(purchaseLine, index) in items"
                          :key="items.index"
                        >
                          <th
                            v-if="purchaseLine.product_no != ''"
                            style="width: 12%"
                          >
                            {{ purchaseLine.product_no }}
                          </th>
                          <th
                            v-if="purchaseLine.product_no != ''"
                            style="width: 12%"
                          >
                            {{ purchaseLine.product_barcode }}
                          </th>
                          <th
                            v-if="purchaseLine.product_no != ''"
                            style="width: 15%"
                          >
                            {{ purchaseLine.description }}
                          </th>
                          <th
                            v-if="purchaseLine.product_no != ''"
                            style="width: 12%"
                          >
                            {{ purchaseLine.unit_price
                            }}{{ purchaseLine.curency_code }}
                          </th>
                          <th
                            v-if="purchaseLine.product_no != ''"
                            style="width: 12%"
                          >
                            {{ purchaseLine.reorder_point }}
                          </th>
                          <th
                            v-if="purchaseLine.product_no != ''"
                            style="width: 12%"
                          >
                            {{ purchaseLine.sup_code }}
                          </th>
                          <th
                            v-if="purchaseLine.product_no != ''"
                            style="width: 12%"
                          >
                            {{ purchaseLine.brand_code }}
                          </th>
                          <th
                            v-if="purchaseLine.product_no != ''"
                            style="width: 10%"
                          >
                            {{ purchaseLine.group_code }}
                          </th>
                          <th
                            v-if="purchaseLine.product_no != ''"
                            style="width: 12%"
                          >
                            {{ purchaseLine.cat_code }}
                          </th>
                          <th
                            v-if="purchaseLine.product_no != ''"
                            style="width: 12%"
                          >
                            {{ purchaseLine.stock_unit_of_measure_code }}
                          </th>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <hr />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <a
            v-if="excel == 'Import'"
            class="btn-purchase btn-light text-capitalize"
            data-bs-dismiss="modal"
            data-mdb-ripple-color="dark"
            @click="saveprulink()"
            ><i class="fas fa-save"></i> Save Date</a
          >
          <a
            v-if="excel == 'Import'"
            class="btn-purchase btn-light text-capitalize"
            data-mdb-ripple-color="dark"
            ><i class="fas fa-file-excel"></i> {{ excel }} Form excel</a
          >
          <input
            v-if="excel == 'Import'"
            type="file"
            @change="getExcelData"
            name="select_file"
          />
          <a
            v-else
            class="btn-purchase btn-light text-capitalize"
            data-bs-dismiss="modal"
            data-mdb-ripple-color="dark"
            @click="exportdataExcel()"
            ><i class="fas fa-save"></i> Save Date</a
          >
        </div>
      </div>
    </div>
  </div>

  <div id="myModalauto" class="lsky">
    <div class="lsky-content">
      <p>{{ massege }}</p>
    </div>
  </div>
  <div class="modal fade ui-modal" id="staticboomId" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticboomId" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content ui-dialog">
        <div class="ui-widget-header">
          <h5 class="modal-title in-header" id="staticBackdropLabel"><i class="fa fa-print" aria-hidden="true"></i>
            Print</h5>
          <span class="ui-icon ui-icon-closethick" data-bs-dismiss="modal" aria-label="Close"></span>
        </div>
        <div class="ui-dialog-content" id="printProduct">
          <div class="card">
            <div class="card-body" >
              <div class="container mt-3 print-size"  >
                <div class="row d-flex align-items-baseline">
                  <div class="col-xl-9">
                  </div>
                  <hr>
                </div>

                <div class="container" style="padding:0 60px 0 50px">
                  <div class="col-md-12">
                    <div class="text-center">
                      <h3 class="title-purchase">PRODUCTS REPORT</h3>
                    </div>
                  </div>
                  
                  <div class="col-container">
                    <div class="col1">
                      <p class=" p-bg font-size p-pad">COMPANY NAME</p>
                        <p class="p-mg info-pad">Name : {{ company.company_name }}</p>
                        <p class="p-mg  info-pad">Phone Number : {{ company.company_Phone }}</p>
                        <p class="p-mg info-pad">Email Address : {{ company.company_Email }}</p>
                        <p class="p-mg info-pad">Address : {{ company.company_Address }}</p>
                    </div>
                    <div class="col2">
                      <p class="text-center p-bg font-size p-pad">DATE</p>
                      <p class="text-center p-mg">{{ dateformart }}</p>
                      <p class="text-center p-bg font-size p-pad">REPORT NO.</p>
                      <p class="text-center p-mg"></p>
                    </div>
                  </div>
                  <div class=" my-2  justify-content-center">
                    <table class="p-table">
                    <thead>
                      <tr class="p-bg" style="text-align:center !important;">
                        <th scope="col">Image</th>
                        <th scope="col">Product</th>
                        <th scoppe="col">BarCode</th>
                        <th scope="col">Description</th>
                        <th scope="col">Stock-Unit</th>
                        <th scope="col" style="width:8em">Price</th>
                        <th scope="col" >Inventory</th>
                      </tr>
                    </thead>
                    <tbody >
                      <tr v-for="(product, index) in products.data" :key="index" class="p-table-tr">
                        <td class="p-table-tbody-td" scope="col" style="padding-right:5px">
                          <img alt="" height="40" :src="'img/product/' + product.image_url" style="position:relative; left:9px"/>
                        </td>
                        <td class="p-table-tbody-td" scope="col">{{ product.product_no }}</td>
                        <td class="p-table-tbody-td" scope="col">{{ product.product_barcode }}</td>
                        <td class="p-table-tbody-td" scope="col">{{ product.description }}</td>
                        <td class="p-table-tbody-td" scope="col">{{ product.stock_unit_of_measure_code }}</td>
                        <td class="p-table-tbody-td" scope="col">{{ product.purche_unit_of_measure_code }}</td>
                        <td class="p-table-tbody-td" scope="col">{{ product.inventory }}</td>
                      </tr>
                    </tbody>
                  </table>
                  </div>

                  <hr>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <a class="btn-purchase btn-light text-capitalize border-0" data-mdb-ripple-color="dark" @click="print()"><i
              class="fas fa-print text-primary"></i> Print</a>
          
        </div>
      </div>
    </div>
  </div>

</template>

<script>
import Header from "../Header.vue";
import readXlsxFile from "read-excel-file";
import * as XLSX from "xlsx/xlsx.mjs";
import pagination from "laravel-vue-pagination";
import moment from "moment";
import axios from "axios";
export default {
  components: { pagination },
  components: {Header},
  data() {
    return {
      photo_path: "",
      brands: [],
      graoups: [],
      category: [],
      suppliyers: [],
      uints: [],
      links: [],
      products: [],
      dateformart: "",
      company: [],
      perPage: "",
      currentPage: 0,
      last_page: 1,
      stockcount: 0,
      form: {
        product_no: "",
        product_barcode: "",
        description: "",
        description_2: "",
        image_url: "",
        stock_unit_of_measure_code: "",
        purche_unit_of_measure_code: "",
        brand_code: "",
        group_code: "",
        cat_code: "",
        sup_code: "",
        unit_price: "",
        inactived: "",
      },
      checkexcel: [],
      items: [
        {
          product_no: "",
          product_barcode: "",
          description: "",
          description_2: "",
          image_url: "",
          stock_unit_of_measure_code: "",
          purche_unit_of_measure_code: "",
          bom_no: "",
          reorder_point: "",
          sup_code: "",
          brand_code: "",
          group_code: "",
          cat_code: "",
          unit_price: "",
          inactived: "No",
        },
      ],
      iteamLinks: [
        {
          product_no: "",
          description: "",
          description_2: "",
          image_url: "",
          variant_unit_of_measure_code: "",
          stock_unit_of_measure_code: "",
          quantity_per_unit: "",
          unit_price: "",
          curency_code: "",
          status: "",
          inactived: "",
        },
      ],
      checkarray: 1,
      excel: "Import",
      fileName: "PrucheseLine.xlsx",
    };
  },
  mounted() {
    this.getstockalert();
    this.getproduct();
    this.getunite();
    this.getdatagroup();
    this.getCatName();
    this.getbrands();
    this.getsuppliyer();
    this.getcompany();
  },
  methods: {
    getproduct(page = 1) {
      axios.get("/api/v1/products/viewpro?page=" + page).then(({ data }) => {
        this.products = data;
        this.products.forEach((element) => {
          element.inventory = "0.00";
          axios
            .get("/api/v1/stockcout/getStock/" + element.product_no)
            .then((response) => {
              element.inventory = response.data.inventorys;
              if (element.inventory == null) {
                element.inventory = "0.00";
              }
            });
        });
      });
      // if (page > 0 && page <= this.last_page) {
      //   axios
      //     .get("/api/v1/products/viewpro")
      //     .then(({ data }) => {
      //       this.links = data.links;
      //       this.last_page = data.last_page;
      //       console.log(data.data);
      //       this.links.forEach((element) => {
      //         if (element.label == page) {
      //           this.perPage = "/api/v1/products/viewpro?page=" + page;
      //           axios.get(this.perPage).then(({ data }) => {
      //             this.currentPage = data.current_page;
      //             console.log(data);
      //             this.products = data.data;
      //             this.products.forEach((element) => {
      //               element.inventory = "0.00";
      //               axios
      //                 .get("/api/v1/stockcout/getStock/" + element.product_no)
      //                 .then((response) => {
      //                   element.inventory = response.data.inventorys;
      //                   if (element.inventory == null) {
      //                     element.inventory = "0.00";
      //                   }
      //                 });
      //             });
      //           });
      //         }
      //       });
      //     })
      //     .catch(({ response }) => {
      //       console.error(response);
      //     });
      // }
    },
    getstockalert() {
      axios.get("api/v1/stockcheck/checkOptionstock").then((response) => {
        this.stockcount = response.data.length;
      });
    },
    getunite() {
      axios.get("/api/v1/getunite").then((response) => {
        this.uints = response.data;
      });
    },
    getbrands() {
      axios.get("/api/v1/brands/getdata").then((response) => {
        this.brands = response.data;
      });
    },
    getdatagroup() {
      axios.get("/api/v1/progroups/getdatagroup").then((response) => {
        this.graoups = response.data;
      });
    },
    getCatName() {
      axios.get("/api/v1/category/getCatName").then((response) => {
        this.category = response.data;
      });
    },
    getsuppliyer() {
      axios.get("/api/v1/suppliyers/getdatasub").then((response) => {
        this.suppliyers = response.data;
      });
    },

    getEdit(ProductID) {
      this.$router.push({ name: "Product", query: { id: ProductID } });
    },

    async searchProduct(page = 1) {
      axios
        .get("/api/v1/products/productsearch?page=" + page, {
          form: this.form,
        })
        .then(({ data }) => {
          this.products = data.data;
        });

      // if (page > 0 && page <= this.last_page) {
      //   axios
      //     .get("/api/v1/products/productsearch/", this.form)
      //     .then(({ data }) => {
      //       console.log(data.links);
      //       this.links = data.links;
      //       this.last_page = data.last_page;
      //       this.links.forEach((element) => {
      //         if (element.label == page) {
      //           this.perPage = "/api/v1/products/productsearch?page=" + page;
      //           axios
      //             .get(this.perPage, { form: this.form })
      //             .then(({ data }) => {
      //               this.products = data;
      //               this.currentPage = data.current_page;
      //             });
      //         }
      //       });
      //     })
      //     .catch(({ response }) => {
      //       console.error(response);
      //     });
      // }
    },
    getExcelData(event) {
      this.exefile = "";
      const titlered = document.getElementById("titlered");
      titlered.style.color = "326c7a";
      this.items = [];
      let xlsxfile = event.target.files ? event.target.files[0] : null;
      readXlsxFile(xlsxfile).then((rows) => {
        var x = 0;
        rows.forEach((element) => {
          if (x >= 0) {
            if (x == 0) {
              this.checkexcel = element;
              console.log(element);
            } else {
              if (
                this.checkexcel[0] == "product_no" &&
                this.checkexcel[2] == "description" &&
                this.checkexcel[3] == "brand_code" &&
                this.checkexcel[4] == "group_code" &&
                this.checkexcel[5] == "cat_code" &&
                this.checkexcel[6] == "suppliyer_code" &&
                this.checkexcel[7] == "curency_code" &&
                this.checkexcel[8] == "stock_unit_of_measure_code" &&
                this.checkexcel[9] == "stock_unit_price" &&
                this.checkexcel[10] == "reorder_point"
              ) {
                this.items.push({
                  product_no: element[0],
                  product_barcode: element[1],
                  description: element[2],
                  brand_code: element[3],
                  group_code: element[4],
                  cat_code: element[5],
                  suppliyer_code: element[6],
                  curency_code: element[7],
                  stock_unit_of_measure_code: element[8],
                  unit_price: element[9],
                  reorder_point: element[10],
                  inactived: "No",
                });
                this.getLinkProduct(element);
              } else {
                this.exefile = " fail data ";
                titlered.style.color = "red";
              }
            }
          }
          x++;
        });
      });
      this.exefile = "";
    },
    getLinkProduct(element) {
      this.addtolinkProduct(element, element[8], 1, element[9], "stock");
      var y = 11,
        z = 1;
      var xz1 = "quantity_unit" + z;
      var xz2 = "unit_code" + z;
      var xz3 = "unit_price" + z;
      if (element.length >= y) {
        while (y + 3 <= element.length) {
          if (
            this.checkexcel[y] == xz1 &&
            this.checkexcel[y + 1] == xz3 &&
            this.checkexcel[y + 2] == xz2
          ) {
            this.addtolinkProduct(
              element,
              element[y + 2],
              element[y],
              element[y + 1],
              "unit"
            );
            z++;
            xz1 = "quantity_unit" + z;
            xz2 = "unit_code" + z;
            xz3 = "unit_price" + z;
          }
          y = y + 3;
        }
      }
    },
    addtolinkProduct(element, measure_code, quantity, price, statuse) {
      this.iteamLinks.push({
        product_no: element[0],
        product_barcode: element[1],
        description: element[2],
        variant_unit_of_measure_code: measure_code,
        stock_unit_of_measure_code: element[7],
        quantity_per_unit: quantity,
        unit_price: price,
        curency_code: element[7],
        status: statuse,
        inactived: "No",
      });
    },
    saveprulink() {
      if (this.items.length > 0) {
        setTimeout(() => this.savepro(), 2000);
      }
    },
    savepro() {
      this.items.forEach((element) => {
        if (element.product_no != "" && element.description != "") {
          axios
            .post("api/v1/products/saveDataFformexcel/", element)
            .then((response) => {
              this.massege =
                this.items[this.checkarray - 1].product_no +
                " / " +
                this.items[this.checkarray - 1].description;
              this.massege +=
                " : " +
                this.items[this.checkarray].product_no +
                " / " +
                this.items[this.checkarray].description;
              this.massege +=
                " : " +
                this.items[this.checkarray + 1].product_no +
                " / " +
                this.items[this.checkarray + 1].description;
              this.products = response.data;
              this.savedataValincode(element.product_no);
            });
        }
      });
      if (this.checkarray < this.items.length) {
        this.saveprulink();
        this.checkarray++;
        this.meassagechek("open");
      } else {
        this.meassagechek("close");
        this.checkarray = 0;
      }
    },
    meassagechek(check) {
      var modal = document.getElementById("myModalauto");
      if (check == "open") {
        modal.style.display = "block";
      } else {
        modal.style.display = "none";
      }
    },
    savedataValincode(product_no) {
      this.iteamLinks.forEach((element) => {
        if (element.product_no == product_no && element.product_no != "") {
          axios
            .post("api/v1/products/SaveDataLinkexcel/", element)
            .then((response) => {});
        }
      });
    },
    getcompany(){
          axios.get("/api/v1/getSetup/")
            .then((response) => {
             this.company = response.data;
             this.dateformart = moment(new Date()).format('YYYY-MM-DD');
            });
    },
    print() {
       var printContents = document.getElementById("printProduct").innerHTML;
       var mywindow;     
        mywindow = window.open('', 'mydiv','height=800,width=1200,scrollbars=yes','');          
        mywindow.document.write('<html><head><title>my div</title>');
        mywindow.document.write('<link rel="stylesheet" href="css/style.css">');      
        mywindow.document.write('<link rel="stylesheet" href="css/app.css">');   
        mywindow.document.write('<link rel="stylesheet" href="css/pstyle.css">');   
        mywindow.document.write('</head><body>');
        mywindow.document.write(printContents);                                    
        mywindow.document.write('</body> </html>');
         setTimeout(() => { mywindow.document.close();mywindow.focus(); mywindow.print(); setTimeout(function () {window.close();}, 1);cb();}, 1000);
    },
    save() {
      this.excel = "Import";
      this.productline = 0;
      this.total = 0;
      this.items = [];
      this.item = 0;
    },
    exportSheet() {
      this.items = [];
      this.products.forEach((element) => {
        this.items.push({
          product_no: element.product_no,
          product_barcode: element.product_barcode,
          description: element.description,
          brand_code: element.brand_code,
          group_code: element.group_code,
          cat_code: element.cat_code,
          suppliyer_code: element.suppliyer_code,
          curency_code: element.curency_code,
          stock_unit_of_measure_code: element.stock_unit_of_measure_code,
          unit_price: element.unit_price,
          inactived: element.inactived,
          reorder_point: element.reorder_point,
        });
      });
      this.excel = "Export";
    },
    exportdataExcel() {
      const invoices = this.items.reduce((ac, element) => {
        ac.push({
          product_no: element.product_no,
          product_barcode: element.product_barcode,
          description: element.description,
          brand_code: element.brand_code,
          group_code: element.group_code,
          cat_code: element.cat_code,
          suppliyer_code: element.suppliyer_code,
          curency_code: element.curency_code,
          stock_unit_of_measure_code: element.stock_unit_of_measure_code,
          stock_unit_price: element.stock_unit_price,
          inactived: element.inactived,
          reorder_point: element.reorder_point,
        });
        return ac;
      }, []);
      var invoicesWS = XLSX.utils.json_to_sheet(invoices);
      var wb = XLSX.utils.book_new();
      XLSX.utils.book_append_sheet(wb, invoicesWS, "Product");
      XLSX.writeFile(wb, "Products.xlsx");
    },
  },
};
</script>