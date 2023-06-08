<template >
  <div class="wrapper">
    <div class="container-fuild">
      <div id="headTitle">
        <div id="logo"><img alt="Healthbook" height="44" src="img/logo.png" width="70" _mstalt="155922" _msthash="1">
        </div>
        <h1 id="title" _msttexthash="48503" _msthash="2">Products</h1>
      </div>
      <Header />
      <ol id="topicPath">
        <li style="margin-left:280px">
          <router-link to="product">
            <a href="dashbaord">
              <font style="vertical-align : inherit">
                <font style="vertical-align : inherit">
                  Products
                </font>
              </font>
            </a>
          </router-link>
        </li>
      </ol>
    </div>
    <div class="search-box">
      <div id="product">
        <!--#contents -->
        <div class="search-box mb-4">
          <a class="btn-radius bt-pn btn btn-sm" data-bs-toggle="dropdown" aria-expanded="false"
            style="float: right; color: #f8f5b4">
            <i class="fas fa-plus" style="padding-right: 5px"> </i>
            Menu
          </a>
          <ul class="dropdown-menu">
            <li>
              <a @click="showboom()" class="dropdown-item btn btn-primary" data-bs-toggle="modal"
                data-bs-target="#staticBackdropss" tabindex="10028">
                <i class="fa-solid fa-circle-b"></i> Boom Product</a>
            </li>
            <li>
              <a @click="getsuppliyerview()" class="dropdown-item btn btn-primary" data-bs-toggle="modal"
                data-bs-target="#staticboomId" tabindex="10028">
                <i class="fa fa-print" aria-hidden="true"></i> Print</a>
            </li>
          </ul>
          <div class="search-box-title">
            <a class="btn-radius bt-pn btn btn-sm" href="#" data-bs-toggle="dropdown" aria-expanded="false"
              style="float: left; color: #f8f5b4; margin-top: -2px">
              <i class="fas fa-plus" style="padding-right: 5px; margin-top: -2px">
              </i>
              Create New Product
            </a>
            <ul class="dropdown-menu">
              <li>
                <a @click="
                  getMessage(
                    'Message Confirm',
                    'Do you want to create new product?',
                    'crate',
                    code
                  )
                  " class="dropdown-item btn btn-primary" data-bs-toggle="modal"
                  data-bs-target="#staticBackdrop">Default
                  Code</a>
              </li>
            </ul>
            <router-link to="viewproduct"><a class="btn-radius btn btn-sm" href="#"
                style="color: #f8f5b4; margin-top: -2px">
                <i class="fas fa-eye" style="padding-right: 5px"> </i>
                Product view
              </a>
            </router-link>
          </div>
          <!-- Button trigger modal -->
          <!-- Modal -->
          <div class="modal fade ui-modal" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog smallpopup">
              <div class="modal-content ui-dialog">
                <div class="ui-widget-header">
                  <h5 class="modal-title" id="staticBackdropLabel">
                    <span class="ui-dialog-title" id="ui-dialog-title-modal-edit-dialog">{{ this.title }}</span>
                  </h5>
                  <span class="ui-icon ui-icon-closethick btn-cancel" data-bs-dismiss="modal" aria-label="Close">
                  </span>
                </div>
                <div class="ui-dialog-content">
                  <div class="modal-body">
                    {{ this.message }}
                  </div>
                  <div class="modal-footer">
                    <div class="button type2" id="uniform-undefined" data-bs-dismiss="modal">
                      <span>No<input type="button" class="type2" value="No" style="width: 89px; opacity: 0"
                          onclick="edit_cancel()" tabindex="10008" /></span>
                    </div>
                    <div class="button type2" @click="messagegetconfirm(this.confirm)" data-bs-dismiss="modal">
                      <span>Yes</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="search-box-content col-md-8 search-box02 flo02">
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="tbl_search" id="hover-table">
              <tbody>
                <tr>
                  <th width="20%">No</th>
                  <td width="50%">
                    <input :disabled="true" @change="autoUpdateProduct(form)" v-model="form.product_no"
                      class="string_zen_kana clear_text text input_text" style="width: 360px" type="text" />
                  </td>
                </tr>
                <tr>
                  <th width="20%">Brand Name</th>
                  <td width="50%">
                    <div class="dropdown d-flex">
                      <button @click="getunit(form)" @onmouseout="prooductboom()"
                        class="dropdown-toggle string_zen clear_text text select-menu" type="button"
                        id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" size="50">

                        {{ form.brand_code }}
                        <i class="fa fa-chevron-down"></i>
                      </button>
                      <router-link to="/brands" class="btn-addnew">
                        <span class="new">+Create New</span>

                      </router-link>
                      <div class="dropdown-menu each-drop-menu" aria-labelledby="dropdownMenuButton1">
                        <p>
                          <input v-model="txtsearch" @input="searchproduct(txtsearch)"
                            class="string_zen clear_text text search-pro-field" size="50" type="text" />
                        </p>
                        <ul style="list-style: none" class="scrollable-menu">
                          <li v-for="brand in brands" :value="brand.brand_code" @click="getproduct(brand, form, 'brand')">
                            <div class="menu-item">
                              <p>{{ brand.brand_code }}</p>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>

                  </td>
                </tr>
                <tr>
                  <th width="20%">Generic Name</th>
                  <td width="50%">
                    <input @change="autoUpdateProduct(form)" v-model="form.description"
                      class="string_zen clear_text text input_text" style="width: 360px" type="text" />
                  </td>
                </tr>

                <tr>
                  <th width="20%">Name Kh</th>
                  <td width="50%">
                    <input @change="autoUpdateProduct(form)" v-model="form.description_2"
                      class="string_zen clear_text text input_text" style="width: 360px" type="text" />
                  </td>
                </tr>


                <tr>
                  <th width="20%">Unit</th>
                  <td width="50%">

                    <div class="dropdown d-flex">
                      <button @click="getunit(form)" @onmouseout="prooductboom()"
                        class="dropdown-toggle string_zen clear_text text select-menu" type="button"
                        id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" size="50">

                        {{ form.stock_unit_of_measure_code }}
                        <i class="fa fa-chevron-down"></i>
                      </button>
                      <router-link to="/unitcode" class="btn-addnew">
                        <span class="new">+Create New</span>
                      </router-link>
                      <div class="dropdown-menu each-drop-menu" aria-labelledby="dropdownMenuButton1">
                        <p>
                          <input v-model="txtsearch" @input="searchproduct(txtsearch)"
                            class="string_zen clear_text text search-pro-field" size="50" type="text" />
                        </p>
                        <ul style="list-style: none" class="scrollable-menu">
                          <li v-for="unit in uints" :value="unit.unit_code" @click="getproduct(unit, form, 'unitstock')">
                            <div class="menu-item">
                              <p>{{ unit.unit_code }}</p>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th width="20%">Category</th>
                  <td width="50%">
                    <div class="dropdown d-flex">
                      <button @click="getunit(form)" @onmouseout="prooductboom()"
                        class="dropdown-toggle string_zen clear_text text select-menu" type="button"
                        id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" size="50">

                        {{ form.cat_code }}
                        <i class="fa fa-chevron-down"></i>
                      </button>
                      <router-link to="/category" class="btn-addnew">
                        <span class="new">+Create New</span>
                      </router-link>
                      <div class="dropdown-menu each-drop-menu" aria-labelledby="dropdownMenuButton1">
                        <p>
                          <input v-model="txtsearch" @input="searchproduct(txtsearch)"
                            class="string_zen clear_text text search-pro-field" size="50" type="text" />
                        </p>
                        <ul style="list-style: none" class="scrollable-menu">
                          <li v-for="categor in category" :value="categor.cat_code"
                            @click="getproduct(categor, form, 'category')">
                            <div class="menu-item">
                              <p>{{ categor.cat_code }}</p>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>

                  </td>
                </tr>
               
                <tr>
                  <th width="20%">Diangosis</th>
                  <td width="50%">

                    <div class="dropdown d-flex">
                      <button @click="getunit(form)" @onmouseout="prooductboom()"
                        class="dropdown-toggle string_zen clear_text text select-menu" type="button"
                        id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" size="50">

                        {{ form.group_code }}
                        <i class="fa fa-chevron-down"></i>
                      </button>
                      <router-link to="/group" class="btn-addnew">
                        <span class="new">+Create New</span>
                      </router-link>
                      <div class="dropdown-menu each-drop-menu" aria-labelledby="dropdownMenuButton1">
                        <p>
                          <input v-model="txtsearch" @input="searchproduct(txtsearch)"
                            class="string_zen clear_text text search-pro-field" size="50" type="text" />
                        </p>
                        <ul style="list-style: none" class="scrollable-menu">
                          <li v-for="graoup in graoups" :value="graoup.group_code"
                            @click="getproduct(graoup, form, 'groupproduct')">
                            <div class="menu-item">
                              <p>{{ graoup.group_code }}</p>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th width="20%">Unit Price</th>
                  <td width="50%">
                    <input @change="autoUpdateProduct(form)" v-model="form.unit_price"
                      class="string_zen clear_text text input_text" style="width: 360px" type="text" />
                  </td>
                </tr>
                <tr>
                  <th width="20%">Suppliyer</th>
                  <td width="50%">

                    <div class="dropdown d-flex">
                      <button @click="getunit(form)" @onmouseout="prooductboom()"
                        class="dropdown-toggle string_zen clear_text text select-menu" type="button"
                        id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" size="50">

                        {{ form.sup_code }}
                        <i class="fa fa-chevron-down"></i>
                      </button>
                      <router-link to="/supplies" class="btn-addnew">
                        <span class="new">+Create New</span>
                      </router-link>

                      <div class="dropdown-menu each-drop-menu" aria-labelledby="dropdownMenuButton1">
                        <p>
                          <input v-model="txtsearch" @input="searchproduct(txtsearch)"
                            class="string_zen clear_text text search-pro-field" size="50" type="text" />
                        </p>
                        <ul style="list-style: none" class="scrollable-menu">
                          <li v-for="suppliyer in suppliyers" :value="suppliyer.sup_code"
                            @click="getproduct(suppliyer, form, 'suppliyer')">
                            <div class="menu-item">
                              <p>{{ suppliyer.sup_name }}</p>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>

                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div v-if="form.image_url == null" class="col-md-4 search-box02 flo02 outline-input-img" id="flo02">
            <div class="box-img02">
              <img src="img/icon-img_upload.png" alt="Upload Image.." style="width: 170px; height: auto"
                @click="choosePhoto" />
              <p class="text-upload">
                Drop an image or <br /><span style="text-decoration: underline">Upload file</span>
              </p>
              <input ref="choose" name="image" type="file" tabindex="10029" @change="imgUplaodProduct($event)" />
            </div>
          </div>
          <div v-else class="col-md-4 search-box02 flo02 outline-input-img" id="flo02">
            <div class="box-img02">
              <img alt="Upload Image ..." :src="bassUrl + '/img/product/' + form.image_url" @click="choosePhoto"
                style="width: 80% !important" />
              <input ref="choose" name="image" type="file" tabindex="10029" @change="imgUplaodProduct($event)" />
            </div>
          </div>
        </div>
        <div class="box">
          <div class="box-content">
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="tbl_list tbl_stripe" id="myTable">
              <thead>
                <tr>
                  <th width="5%" class="tb-pro-th">Image</th>
                  <th width="10%" class="tb-pro-th">Product No</th>
                  <th width="20%" class="tb-pro-th">Description</th>
                  <th width="10%" class="tb-pro-th">Unit Code</th>
                  <th width="9%" class="tb-pro-th">Quantity</th>
                  <th width="9%" class="tb-pro-th">Price</th>
                  <th width="9%" class="tb-pro-th">Curency</th>
                  <th width="9%" class="tb-pro-th"></th>
                </tr>
                <tr v-for="form_line in form_lines">
                  <th class="bg_img" style="justify-content: center; background-color: white">
                    <img v-if="form_line.image_url == null" src="img/icon-img_upload.png"
                      style="width: 50px; height: auto" @click="choosePhoto" />
                    <img v-else :src="bassUrl + '/img/product/' + form_line.image_url" style="width: 50px; height: 40px"
                      @click="choosePhoto" />
                    <input id="image" ref="choose" name="image" type="file" tabindex="10029"
                      @change="imgUplaod($event, form_line)" />
                  </th>
                  <th>
                    <input :disabled="true" v-model="form_line.product_no" @change="autoUpdate(form_line)"
                      class="string_zen clear_text text" size="50" type="text" style="width: 80% !important" />
                  </th>
                  <th>
                    <input v-model="form_line.description" @change="autoUpdate(form_line)"
                      class="string_zen clear_text text" size="50" type="text" style="width: 80% !important" />
                  </th>
                  <th>


                    <div class="dropdown">
                      <button @click="getunit(form_line.product_no)" @onmouseout="prooductboom(form_line)"
                        class="dropdown-toggle string_zen clear_text text select-menu-button" type="button"
                        id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" size="50"
                        style="height: 19px;">
                        {{ form_line.variant_unit_of_measure_code }}
                      </button>
                      <div class="dropdown-menu each-drop-menu" aria-labelledby="dropdownMenuButton1">
                        <p>
                          <input v-model="txtsearch" @input="searchproduct(txtsearch)"
                            class="string_zen clear_text text search-pro-field" size="50" type="text" />
                        </p>
                        <ul style="list-style: none" class="scrollable-menu">
                          <li v-for="boompro in boomunits" @click="getproduct(boompro, form_line, 'linkunit')">
                            <div class="menu-item">
                              <p>{{ boompro.unit_code }}</p>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>

                  </th>
                  <th>
                    <input v-model="form_line.quantity_per_unit" @change="autoUpdate(form_line)"
                      class="string_zen clear_text text" size="50" type="text" style="width: 80% !important" />
                  </th>
                  <th>
                    <input v-model="form_line.unit_price" @change="autoUpdate(form_line)"
                      class="string_zen clear_text text" size="50" type="text" style="width: 80% !important" />
                  </th>
                  <th>
                    <!-- <input v-model="form_line.curency_code" @change="autoUpdate(form_line)"
                      class="string_zen clear_text text" size="50" type="text" style="width: 80% !important" /> -->
                      <div class="dropdown">
                      <button @click="getunit(form_line.product_no)" @onmouseout="prooductboom(form_line)"
                        class="dropdown-toggle string_zen clear_text text select-menu-button" type="button"
                        id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" size="50"
                        style="height: 19px;">
                        {{ form_line.curency_code }}
                      </button>
                      <div class="dropdown-menu each-drop-menu" aria-labelledby="dropdownMenuButton1">
                        <p>
                          <input v-model="txtsearch" @input="searchproduct(txtsearch)"
                            class="string_zen clear_text text search-pro-field" size="50" type="text" />
                        </p>
                        <ul style="list-style: none" class="scrollable-menu">
                          <li v-for="curr in Currency" @click="getproduct(curr, form_line, 'currency')">
                            <div class="menu-item">
                              <p>{{ curr.curency }}</p>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                    
                  </th>
                  <th class="bnt-02">
                    <div class="button type2" id="uniform-undefined" data-bs-toggle="modal"
                      data-bs-target="#staticBackdrop" @click="
                        getMessage(
                          'Message',
                          'Do yout want to Delete this recode. [' +
                          form_line.id +
                          ']',
                          'delelink',
                          form_line.id
                        )
                        ">
                      <span><input type="button" class="type2" style="opacity: 0; width: 54px" tabindex="10025"
                          value="display" /><i class="fa fa-trash" aria-hidden="true"></i>
                        Delete</span>
                    </div>
                  </th>
                </tr>
              </thead>
              <vue-countdown style="display: none" v-if="counting" :time="60000" @end="onCountdownEnd"
                v-slot="{ totalSeconds }">Fetch again {{ totalSeconds }} seconds later</vue-countdown>
            </table>
          </div>
          <div class="box-footer-pagination" style="text-align: left">
            <div class="pagination">
              <div class="pagination">
                <a @click="myFunction()" class="btn-radius bt-pn btn btn-sm show" href="#" data-bs-toggle="dropdown"
                  aria-expanded="true" style="float: left;
                    color: rgb(248, 245, 180);
                    margin-top: -2px;
                 "><i class="fas fa-plus" style="padding-right: 5px; margin-top: -2px"></i>
                  Generate Code
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade ui-modal" id="staticBackdropss" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropss" aria-hidden="true">
    <div class="modal-dialog" id="nonbackgroundboom">
      <div class="modal-content ui-dialog">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">
            Boom Products : {{ form.product_no }} , {{ form.description }}
          </h5>
          <span class="ui-icon ui-icon-closethick" data-bs-dismiss="modal" aria-label="Close"></span>
        </div>
        <!-- ///////////////////////////////////////////// -->
        <div class="box-content">
          <table width="100%" border="0" cellpadding="0" cellspacing="0" class="tbl_list tbl_stripe" id="myTable">
            <thead>
              <tr>
                <th width="15%">Product Code</th>
                <th width="20%">Description</th>
                <th width="15%">QTY in Unit</th>
                <th width="15%">Quantity</th>
                <th width="15%">Unit Code</th>
                <th width="15%">Inactived</th>
                <th width="15%"></th>
              </tr>
              <tr v-for="form_line in boomproducts">
                <th>
                  <div class="dropdown">
                    <button @onmouseout="prooductboom(form_line)" class="dropdown-toggle string_zen clear_text text"
                      type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" size="50"
                      style="width: 80% !important;
                        padding-left: 11px;
                        padding-right: 19px;
                        border: none;
                      ">
                      {{ form_line.boom_product_id }}
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="
                        max-height: 400px;
                        width: 250px;
                        scroll-behavior: smooth;
                        padding: 5px;
                        margin: 5px;
                        box-shadow: 1px 1px 5px #141417;">
                      <p>
                        <input v-model="txtsearch" @input="searchproduct(txtsearch)" class="string_zen clear_text text"
                          size="50" type="text" style="
                          width: 98% !important;
                            border: 1px teal solid;
                            border-radius: 1px;
                          height: 30px;
                          " />
                      </p>
                      <ul style="list-style: none" class="scrollable-menu">
                        <li v-for="boompro in boompros" @click="getproduct(boompro, form_line, 'boomproducr')">
                          <div class="menu-item">
                            <p style="color: blue">{{ boompro.product_no }}</p>
                            <p>{{ boompro.description }}</p>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </th>
                <th>
                  <input v-model="form_line.description" @change="proboomAutoSave(form_line)"
                    class="string_zen clear_text text" size="50" type="text" style="width: 80% !important" />
                </th>
                <th>
                  <input v-model="form_line.quantity_per_unit" @change="proboomAutoSave(form_line)"
                    class="string_zen clear_text text" size="50" type="text" style="width: 80% !important" />
                </th>
                <th>
                  <input v-model="form_line.quantity" @change="proboomAutoSave(form_line)"
                    class="string_zen clear_text text" size="50" type="text" style="width: 80% !important" />
                </th>
                <th>
                  <div class="dropdown">
                    <button @click="getboomnit(form_line.product_no)" @onmouseout="prooductboom(form_line)"
                      class="dropdown-toggle string_zen clear_text text" type="button" id="dropdownMenuButton1"
                      data-bs-toggle="dropdown" aria-expanded="false" size="50" style="
                        width: 80% !important;
                        padding-left: 11px;
                        padding-right: 19px;
                        border: none;
                        height: 20px;
                      ">
                      {{ form_line.bom_unit_of_measure_code }}
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="
                        max-height: 400px;
                        width: 250px;
                        scroll-behavior: smooth;
                       padding: 5px;
                        margin: 5px;
                        box-shadow: 1px 1px 5px #141417;
                        border: none;
                      ">
                      <p>
                        <input v-model="txtsearch" @input="searchproduct(txtsearch)" class="string_zen clear_text text"
                          size="50" type="text" style="
                            width: 98% !important;
                            border: 1px teal solid;
                            border-radius: 1px;
                            height: 30px;
                          " />
                      </p>
                      <ul style="list-style: none" class="scrollable-menu">
                        <li v-for="boompro in uints" @click="getproduct(boompro, form_line, 'boomunit')">
                          <div class="menu-item">
                            <p>{{ boompro.variant_unit_of_measure_code }}</p>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </th>
                <th>
                  <select v-model="form_line.inactived" @change="proboomAutoSave(form_line)" class="form"
                    style="width: 80%">
                    <option value="No">No</option>
                    <option value="Yes">Yes</option>
                  </select>
                </th>
                <th class="bnt-02">
                  <div class="button type2" id="uniform-undefined" @click="deletboomlink(form_line.id)">
                    <span><input type="button" class="type2" style="opacity: 0; width: 54px" tabindex="10025"
                        value="display" /><i class="fa fa-trash" aria-hidden="true"></i>
                      Delete</span>
                  </div>
                </th>
              </tr>
            </thead>
          </table>
        </div>
        <div class="modal-footer">
          <a @click="boomcratenew()" class="btn-radius bt-pn btn btn-sm show" href="#" data-bs-toggle="dropdown"
            aria-expanded="true" style="float: left; color: rgb(248, 245, 180); margin-top: -2px"><i class="fas fa-plus"
              style="padding-right: 5px; margin-top: -2px"></i>Add New</a>
          <div class="button type2" id="uniform-undefined"></div>
          <div class="button type2" id="uniform-undefined"></div>
        </div>
      </div>
    </div>
  </div>
  <!-- Print part -->
  <div class="modal fade ui-modal" id="staticboomId" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticboomId" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content ui-dialog">
        <div class="ui-widget-header">
          <h5 class="modal-title in-header" id="staticBackdropLabel"><i class="fa fa-print" aria-hidden="true"></i>
            Print : {{ form.product_no }} , {{ form.description }}</h5>
          <span class="ui-icon ui-icon-closethick" data-bs-dismiss="modal" aria-label="Close"></span>
        </div>
        <div class="ui-dialog-content" id="purchaseorder">
          <div class="card">
            <div class="card-body">
              <div class="mt-3 pro-dt-print">

                <div style="padding:0 70px 0 60px">
                  <div class="col-md-12">
                    <div class="text-center">
                      <h3 class="title-purchase">PRODUCT DETIALS</h3>
                    </div>
                  </div>

                  <div class="col-container">
                    <div class="row2-col1 mg-top" style="width: 65%;display: flex;flex-direction: row;">
                      <div class="clientlogo">
                        <img :src="bassUrl + '/img/product/' + form.image_url" alt="Sup" />
                      </div>
                      <div class="p-detial">
                        <p class="p-mg info-pad">Name : {{ form.description }}</p>
                        <p class="p-mg info-pad">Product No. :{{ form.description }}</p>
                        <p class="p-mg info-pad">Barcode : {{ form.brand_code }}</p>
                        <p class="p-mg info-pad">Stock Unit : {{ form.stock_unit_of_measure_code }}</p>
                        <p class="p-mg info-pad">Reorder : {{ form.reorder_point }}</p>
                        <p class="p-mg info-pad">Unit Price : {{ form.unit_price }}</p>
                      </div>
                    </div>
                    <div class="row2-col2 mg-top">
                      <p class="p-mg info-pad">Supplyer Name : {{ getsuppliyerviews.sup_name }}</p>
                      <p class="p-mg info-pad">Email : {{ getsuppliyerviews.email }}</p>
                      <p class="p-mg info-pad">Phone : {{ getsuppliyerviews.phone_no }}/{{
                        getsuppliyerviews.phone_no_2
                      }}</p>
                      <p class="p-mg info-pad">Address : {{ getsuppliyerviews.address }}</p>
                      <p class="p-mg info-pad">Fax Number: {{ getsuppliyerviews.fax_no }}</p>
                      <p class="p-mg info-pad">Contact Name : {{ getsuppliyerviews.contact_name }}</p>
                      <p class="p-mg info-pad">Contact Phone : {{ getsuppliyerviews.contact_phone }}</p>
                    </div>
                  </div>
                  <div class=" my-2  justify-content-center">
                    <table id="pr-tb">
                      <thead>
                        <tr class="p-bg">
                          <th class="text-center" style="width:8em">Img</th>
                          <th class="text-center" style="width:15em">Product No</th>
                          <th class="text-center" style="width:15em">Description</th>
                          <th class="text-center" style="width:15em">Quantity</th>
                          <th class="text-center" style="width:10em">Price</th>
                          <th class="text-center" style="width:10em">Currency</th>

                        </tr>
                      </thead>
                      <tbody>
                        <tr v-for="(form_line, index) in form_lines" :key="index">
                          <td style="text-align: center; padding-left: 0 !important;">
                            <img v-if="form_line.image_url == null" src="img/icon-img_upload.png"
                              style="width: 50px; height: auto" @click="choosePhoto" />
                            <img v-else :src="bassUrl + '/img/product/' + form_line.image_url"
                              style="width: 50px; height: 40px" @click="choosePhoto" />
                          </td>
                          <td>{{ form_line.product_no }}</td>
                          <td>{{ form_line.description }}</td>
                          <td>{{ form_line.quantity_per_unit }}
                            {{ form.stock_unit_of_measure_code }}/
                            {{ form_line.variant_unit_of_measure_code }}
                          </td>
                          <td>{{ form_line.unit_price }}</td>
                          <td>{{ form_line.curency_code }}</td>
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

  <!-- ===================================== -->

  <span class="marker"></span>

  <div id="myModal" class="lskymodal">
    <div class="lskymodal-content">
      <p><i class="fa fa-check" aria-hidden="true"></i> {{ massege }}</p>
    </div>
  </div>
  <Footer />
</template>
<script>
import axios from "axios";
import Header from "../Header.vue";
import Footer from "../footer.vue"
import moment from "moment";
export default {
  components: { Header,Footer },
  data() {
    return {
      brands: [],
      graoups: [],
      group: '',
      category: [],
      bassUrl: '',
      massege: "",
      photo_path: "",
      pending: false,
      img: "",
      dateformart: "",
      code: "",
      confirm: "",
      title: "",
      message: "",
      products: "",
      boomunits: [],
      productcode: "",
      line_pro_id: "",
      line_pro_de: "",
      boomproducts: [],
      txtsearch: "",
      suppliyers: [],
      getsuppliyerviews: [],
      uints: [],
      boompro: [],
      Currency: [],
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
        reorder_point: "",
      },

      form_lines: {
        id: "",
        product_no: "",
        image_url: "",
        description: "",
        variant_unit_of_measure_code: "",
        quantity_per_unit: "",
        unit_price: "",
        varaiant: "",

      },
    };
  },
  async mounted() {
    try {
      if (this.$route.query.id.trim() != "undefined") {
        this.products = this.$route.query.id;
        this.productcode = this.products;
      }
    } catch (error) {
      this.products = "undefined";
    }
    this.getunite();
    this.getdatagroup();
    this.getCatName();
    this.getbrands();
    this.getsuppliyer();
    this.getCurrency()
    this.getEdite();
    this.form_lines = null;
    this.prooductboom();
    this.massege = "save successful.";
    this.getsuppliyerview();
    this.getcompany();
    this.bassUrl = axios.defaults.baseURL;
  },
  methods: {
    btnGenerate_code($status) {
      this.crateNewsProduct();
    },

    myFunction() {
      if (this.products != "undefined") {
        axios
          .post("/api/v1/products/create/" + this.products)
          .then((response) => {
            this.form_lines = response.data;
          });
      }
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
    getsuppliyerview() {
      axios
        .get("/api/v1/products/getProductCAt/" + this.form.product_no)
        .then((response) => {
          this.getsuppliyerviews = response.data;
        });
    },
    crateNewsProduct() {
      axios.post("/api/v1/products/create").then((response) => {
        this.form = response.data;
        this.form.forEach((element) => {
          this.form.product_no = element.product_no;
          this.$router.push({
            name: "Product",
            query: { id: element.product_no },
          });
          this.products = element.product_no;
          this.getEdite();
        });
      });
    },

    selectdataProduct() {
      axios.get("/api/v1/products/create/").then((response) => {
        this.form = response.data;
        this.form.forEach((element) => {
          axios
            .get("/api/v1/products/editlink/" + element.product_no)
            .then((response) => {
              this.form_lines = response.data;
            });
        });
      });
    },
    getEdite() {
      if (this.products.trim() != "undefined") {
        axios
          .get("/api/v1/products/edite/" + this.products)
          .then((response) => {
            this.form = response.data;
          }),
          axios
            .get("/api/v1/products/editlink/" + this.products)
            .then((response) => {
              this.form_lines = response.data;
            });
      }
    },
    deleteUnit(linkId) {
      if (linkId != null) {
        axios.get("/api/v1/products/destLink/" + linkId).then((response) => {
          this.form_lines = response.data;
        });
      }
    },
    deletboomlink(linkId) {
      if (linkId != null) {
        axios.get("/api/v1/boomproduct/destroy/" + linkId).then((response) => {
          this.boomproducts = response.data;
        });
      }
    },
    getMessage(title, messsatetext, confirm, id) {
      this.title = title;
      this.message = messsatetext;
      this.confirm = confirm;
      this.code = id;
    },
    messagegetconfirm(confirm) {
      if (confirm == "crate") {
        this.btnGenerate_code("crate");
      }
      if (confirm == "delelink") {
        this.deleteUnit(this.code);
      }
      if (confirm == "boomlink") {
        this.deletboomlink(this.code);
      }
    },
    created() {
      this.pending = false;
      fetch("https://example-api.com/image")
        .then((data) => (this.img = data.img))
        .finally(() => {
          this.pending = false;
        });
    },
    changeImage(e) {
      const image = e.target.files[0];
      const reader = new FileReader();
      reader.readAsDataURL(image);
      reader.onload = (e) => {
        this.forms.photo = e.target.result;
      };
    },
    autoUpdate(product_link) {
      if (product_link.product_no != "") {
        if (product_link.status == "stock") {
          product_link.stock_unit_of_measure_code =
            product_link.variant_unit_of_measure_code;
          product_link.quantity_per_unit = 1;
        }
        axios
          .post(
            "/api/v1/products/updateProductLinke/" + product_link.id,
            product_link
          )
          .then((response) => {
            if (
              this.form.stock_unit_of_measure_code !=
              product_link.variant_unit_of_measure_code
            ) {
              if (product_link.status == "stock") {
                this.form.stock_unit_of_measure_code =
                  product_link.variant_unit_of_measure_code;
                this.autoUpdateProduct(this.form);
              }
            }
            this.messagebox();
          });
      }
    },
    checkUnitcode() {
      this.form_lines.forEach((element) => {
        if (
          (element.status == "stock") &
          (this.form.stock_unit_of_measure_code !=
            element.stock_unit_of_measure_code)
        ) {
          element.stock_unit_of_measure_code =
            this.form.stock_unit_of_measure_code;
          element.variant_unit_of_measure_code =
            this.form.stock_unit_of_measure_code;
          this.autoUpdate(element);
        }
      });
    },
    autoUpdateProduct(product) {
      if (product.product_no != "") {
        axios
          .post("/api/v1/products/update/" + product.product_no, product)
          .then((response) => {
            this.checkUnitcode();
            this.messagebox();
          });
      }
    },
    getboomproduct(product) {
      axios.post("/api/v1/boomproduct/" + product).then((response) => {
        this.boomproducts = response.data;
      });
    },
    getCurrency() {
      axios.get("/api/v1/curency/getdata/")
        .then((data) => {
          this.Currency = data.data;
          console.log("this Currency")
          console.log(this.Currency)
        })
    },
    showboom() {
      axios
        .get("/api/v1/boomproduct/show/" + this.products)
        .then((response) => {
          this.boomproducts = response.data;
        });
    },

    prooductboom() {
      axios.get("/api/v1/getproductboom/" + this.products).then((response) => {
        this.boompros = response.data;
      });
    },
    getproduct(boom, product, txt) {
      if (txt == "boomproducr") {
        product.boom_product_id = boom.product_no;
        product.description = boom.description;
        this.proboomAutoSave(product);
        this.prooductboom();
      }
      else if(txt == 'currency'){
        // alert(boom.curency)
        boom.curency = product.curency_code
        alert(product.curency_code)
        
      }
      else if (txt == "boomunit") {
        product.bom_unit_of_measure_code = boom.variant_unit_of_measure_code;
        this.proboomAutoSave(product);
        this.prooductboom();
      }
      else if (txt == "linkunit") {
        product.variant_unit_of_measure_code = boom.unit_code;
        this.autoUpdate(product);
      }
      else if (txt == "groupproduct") {
        product.group_code = boom.group_code
        this.autoUpdateProduct(product)
        this.prooductboom()

      }
      else if (txt == 'suppliyer') {
        product.sup_code = boom.sup_code
        this.autoUpdateProduct(product)
        this.prooductboom()
      }
      else if (txt == 'category') {
        product.cat_code = boom.cat_code
        this.autoUpdateProduct(product)
        this.prooductboom()
      }
      else if (txt == 'brand') {
        product.brand_code = boom.brand_code
        this.autoUpdateProduct(product)
        this.prooductboom()
      }
      else if (txt == 'unitstock') {
        product.stock_unit_of_measure_code = boom.unit_code
        this.autoUpdateProduct(product)
        this.prooductboom()
      }

    },
    proboomAutoSave(product) {
      axios
        .put("/api/v1/boomproduct/update/" + product.id, product)
        .then((response) => {
          this.prooductboom();
        });
      this.messagebox();
      this.prooductboom();
    },
    getboomnit(proid) {
      axios.post("/api/v1/products/getboomline/" + proid).then((response) => {
        this.uints = response.data;
        console.log(response.data);
      });
    },
    searchproduct(txt) {
      axios.get("/api/v1/boomproduct/search/" + txt).then((response) => {
        this.boompros = response.data;
      });
    },
    boomcratenew() {
      axios.post("/api/v1/boomcreate/" + this.products).then((response) => {
        this.boomproducts = response.data;
      });
    },
    getunit(proid) {
      axios.post("/api/v1/products/getlinkunit/" + proid).then((response) => {
        this.boomunits = response.data;
      });
    },
    messagebox() {
      var modal = document.getElementById("myModal");
      modal.style.display = "block";
      setTimeout(() => (modal.style.display = "none"), 1500);
    },
    getcompany() {
      axios.get("/api/v1/getSetup/")
        .then((response) => {
          this.company = response.data;
          this.dateformart = moment(new Date()).format('YYYY-MM-DD');
        });
    },
    print() {
      var printContents = document.getElementById("purchaseorder").innerHTML;
      var mywindow;
      mywindow = window.open('', 'mydiv', 'height=800,width=1200,scrollbars=yes', '');
      mywindow.document.write('<html><head><title>my div</title>');
      mywindow.document.write('<link rel="stylesheet" href="css/style.css">');
      mywindow.document.write('<link rel="stylesheet" href="css/app.css">');
      mywindow.document.write('<link rel="stylesheet" href="css/pstyle.css">');
      mywindow.document.write('</head><body>');
      mywindow.document.write(printContents);
      mywindow.document.write('</body> </html>');
      setTimeout(() => { mywindow.document.close(); mywindow.focus(); mywindow.print(); setTimeout(function () { window.close(); }, 1); cb(); }, 1000);
    },
    imgUplaod($event, form_line) {
      const image = $event.target.files[0];
      const reader = new FileReader();
      reader.readAsDataURL(image);
      reader.onload = (event) => {
        this.$router.go(0)
        this.photo_path = "";
        form_line.image_url = event.target.result;
        console.log(form_line.image_url);
        this.autoUpdate(form_line);
      };
      // this.autoUpdateProduct(form_line);
    },
    imgUplaodProduct(e) {
      const image = e.target.files[0];
      const reader = new FileReader();
      reader.readAsDataURL(image);
      reader.onload = (e) => {
        this.$router.go(0)
        this.photo_path = "";
        console.log(this.photo_path);
        this.form.image_url = e.target.result;
        this.autoUpdateProduct(this.form);
      };
    },
    choosePhoto() {
      this.$refs.choose.click();
    },
  },
  startCountdown: function () {
    this.counting = true;
  },
  onCountdownEnd: function () {
    this.counting = false;
  },
};
</script>