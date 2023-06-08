<template >
  <div class="wrapper" style="overflow: hidden">
    <div class="container-fuild">
      <div id="headTitle">
        <div id="logo"><img alt="Healthbook" height="44" src="img/logo.png" width="70" _mstalt="155922" _msthash="1">
        </div>
        <h1 id="title" _msttexthash="48503" _msthash="2">Payment</h1>
      </div>
      <Header />
      <ol id="topicPath">
        <li style="margin-left:280px">
          <router-link to="productsetting">
            <a href="dashbaord">
              <font style="vertical-align : inherit">
                <font style="vertical-align : inherit">
                  Payment
                </font>
              </font>
            </a>
          </router-link>
        </li>
      </ol>
    </div>
    <div class="search-box">
      <div id="purchase">
        <!--#contents -->
        <div class="search-box mb-4">
          <a class="btn-radius bt-pn btn btn-sm" data-bs-toggle="dropdown" aria-expanded="false"
            style="float: right; color: #f8f5b4">
            <i class="fas fa-plus" style="padding-right: 5px"> </i>
            Menu
          </a>
          <ul class="dropdown-menu">
            <li>
              <a class="dropdown-item btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdropss"
                tabindex="10028"><i class="fas fa-save"></i> Save Document</a>
            </li>
            <li>
              <a class="dropdown-item" @click="showform()" tabindex="10028" href="#"> <i class="fa fa-credit-card"
                  aria-hidden="true"></i> PayMent</a>
            </li>
            <li>
              <a @click="print()" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#staticbo;;;;;omId"
                tabindex="10028" href="#"><i class="fa fa-print" aria-hidden="true"></i> Print</a>
            </li>
          </ul>

          <div class="search-box-title">
            <a class="btn-radius bt-pn btn btn-sm" href="#" data-bs-toggle="dropdown" aria-expanded="false"
              style="float: left; color: #f8f5b4; margin-top: -2px">
              <i class="fas fa-plus" style="padding-right: 5px; margin-top: -2px">
              </i>
              Add New
            </a>
            <ul class="dropdown-menu">
              <li>
                <a @click="
                  getMessage(
                    'Message Confirm',
                    'Do you want to create new product.',
                    'crate',
                    code
                  )
                " class="dropdown-item btn btn-primary" data-bs-toggle="modal"
                  data-bs-target="#staticBackdrop">Generate Code</a>
              </li>
            </ul>
            <router-link to="/paymenview"><a class="btn-radius btn btn-sm" href="#"
                style="color: #f8f5b4; margin-top: -2px">
                <i class="fas fa-eye" style="padding-right: 5px"> </i>
                View
              </a></router-link>
            <a @click="gettoRecpt()" class="btn-radius btn btn-sm" href="#" style="color: #f8f5b4; margin-top: -2px">
              <i class="fas fa-edit"></i> Recept: {{ form.document_no }}
            </a>
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
          <div class="search-box-content  search-box02">
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="tbl_search" id="hover-table">
              <tbody>
                <tr>
                  <th width="10%">Document No</th>
                  <td width="50%">
                    <input :disabled="true" @change="autoUpdateProduct(form)" v-model="form.document_no"
                      class="string_zen_kana clear_text text input_text" style="width:380px" type="text" />
                  </td>
                </tr>
                <tr>
                  <th width="10%">Description</th>
                  <td width="50%">
                    <textarea :disabled="isDisabled" @change="autoUpdateProduct(form)" v-model="form.decription"
                      class="string_zen clear_text text input_text" style="width:380px" type="text"></textarea>
                  </td>
                </tr>
                <tr>
                  <th width="10%">Suppliyer</th>
                  <td width="50%">
                    <select :disabled="isDisabled" @change="autoUpdateProduct(form)" v-model="form.sub_code" class="form"
                      style="width:380px">
                      <option value=""></option>
                      <option v-for="suppliye in suppliyer" :value="suppliye.sup_code" :key="suppliye.id">
                        {{ suppliye.sup_name }}
                      </option>
                    </select>

                    <!-- <div class="dropdown">
                      <button @click="getunit(form)" @onmouseout="prooductboom()"
                        class="dropdown-toggle string_zen clear_text text select-menu" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false" size="50" style="width:380px !important">
                       
                       {{ form.sub_code }}
                       <i class="fa fa-chevron-down"></i>
                      </button>
                      <div class="dropdown-menu each-drop-menu" aria-labelledby="dropdownMenuButton1">
                        <p>
                          <input v-model="txtsearch" @input="searchproduct(txtsearch)"
                            class="string_zen clear_text text search-pro-field" size="50" type="text"/>
                        </p>
                        <ul style="list-style: none" class="scrollable-menu">
                          <li v-for="suppliye in suppliyer" :value="suppliye.sup_code" :key="suppliye.id" @click="getproduct(suppliye, form, 'suppliyer')">
                            <div class="menu-item">
                              <p>{{ suppliye.sup_name }}</p>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div> -->

                  </td>
                </tr>
                <tr>
                  <th width="10%">Payment Method</th>
                  <td width="50%">
                    <select :disabled="isDisabled" @change="autoUpdateProduct(form)" v-model="form.paymentMethod"
                      class="form" style="width:380px">
                      <option value=""></option>
                      <option v-for="suppliye in units" :value="suppliye.paymentmethod_code" :key="suppliye.id">
                        {{ suppliye.paymentmethod }}
                      </option>
                    </select>

                    <!-- <div class="dropdown">
                      <button @click="getunit(form)" @onmouseout="prooductboom()"
                        class="dropdown-toggle string_zen clear_text text select-menu" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false" size="50" style="width:380px !important">
                       {{ form.paymentMethod }}
                       <i class="fa fa-chevron-down"></i>
                      </button>
                      <div class="dropdown-menu each-drop-menu" aria-labelledby="dropdownMenuButton1">
                        <p>
                          <input v-model="txtsearch" @input="searchproduct(txtsearch)"
                            class="string_zen clear_text text search-pro-field" size="50" type="text"/>
                        </p>
                        <ul style="list-style: none" class="scrollable-menu">
                          <li v-for="suppliye in units" :value="suppliye.paymentmethod_code" :key="suppliye.id" @click="getproduct(suppliyer, form, 'paymentmethod')">
                            <div class="menu-item">
                              {{ suppliye.paymentmethod }}
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div> -->

                  </td>
                </tr>
                <tr>
                  <th width="10%">Tax(%)</th>
                  <td width="50%">
                    <input :disabled="isDisabled" @change="autoUpdateProduct(form)" v-model="form.tax"
                      class="string_zen clear_text text input_text" style="width : 380px" type="text" />
                  </td>
                </tr>
                <tr>
                  <th width="10%">Discount(%)</th>
                  <td width="50%">
                    <input :disabled="isDisabled" @change="autoUpdateProduct(form)" v-model="form.dicount"
                      class="string_zen clear_text text input_text" style="width : 380px" type="text" />
                  </td>
                </tr>
                <tr>
                  <th width="10%">Curency Code</th>
                  <td width="50%">
                    <input :disabled="isDisabled" @change="autoUpdateProduct(form)" v-model="form.currency_code"
                      class="string_zen clear_text text input_text" style="width : 380px" type="text" />
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="search-box-footer" style=" background: #094e59e0;">
            <div class="button type2" id="uniform-undefined">
              <span data-bs-toggle="modal" data-bs-target="#statiex-import" tabindex="10028" @click="exportSheet()"><input
                  @click="exportSheet()" type="button" value="display" class="type2" style="opacity: 0; width: 54px"
                  tabindex="10025" /><i class='fas fa-file-import'></i> Generate Auto</span>
            </div>
            <div class="button type2" id="uniform-undefined" @click="showform()">
              <span tabindex="10028" @click="exportSheet()"><input
                   type="button" value="display" class="type2" style="opacity: 0; width: 54px"
                  tabindex="10025" /><i class="fa fa-credit-card"></i> Payment</span>
            </div>
            <span class="marker"></span>
          </div>
        </div>

        <div class="box">
          <div class="box-content" id="excell">
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="tbl_list">
              <thead>
                <tr class="excellcolor-trhead">
                  <th class="excellcolor-trhead" style="width: 7%">Payment No</th>
                  <th class="excellcolor-trhead" style="width: 10%">Document</th>
                  <th class="excellcolor-trhead" style="width: 7%">Cradit Amount</th>
                  <th class="excellcolor-trhead" style="width: 7%">Pay Amount</th>
                  <th class="excellcolor-trhead" style="width: 7%">Balence Amount</th>
                  <th class="excellcolor-trhead" style="width: 7%">Discount</th>
                  <th class="excellcolor-trhead" style="width: 7%">Curency Code</th>
                  <th class="excellcolor-trhead" style="width: 7%"></th>
                </tr>
                <tr v-for="purchaseLine in purchases_lines">
                  <th>
                    <div class="dropdown">
                      <button class="dropdown-toggle string_zen clear_text text" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false" size="50">
                        <i class="fa fa-caret-down" aria-hidden="true"></i>{{ purchaseLine.payment_no }}
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1"
                        style="max-height: 400px; width: 250px; scroll-behavior: smooth; padding: 5px;margin: 5px;box-shadow: 1px 1px 5px #141417;">
                        <p><input :disabled="isDisabled" v-model="txtsearch" @input="searchproduct(txtsearch)"
                            class="string_zen clear_text text" size="50" type="text"
                            style="width:98% !important;border: 1px teal solid;border-radius: 1px;height: 30px;"></p>
                        <ul style="list-style:none ;" class="scrollable-menu">
                          <li v-for="boompro in boompros" @click="getproduct(boompro, purchaseLine, 'boomproducr')">
                            <div class="menu-item">
                              <p style="color: blue;">{{ boompro.document_no }}</p>
                              <p>{{ boompro.document }}</p>
                              <p style="color: red;">{{ formartcurrecy(boompro.totale_balanec, boompro.currency_code) }}
                              </p>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </th>
                  <th>
                    <input :disabled="true" v-model="purchaseLine.document" @change="autoUpdatePurline(purchaseLine)"
                      class="clear_text code text" id="jusinsya_code" name="jusinsya_code" type="text" tabindex="10008"
                      style="min-width: 10em; width:95%" />
                  </th>
                  <th>
                    <input :disabled="true" v-model="purchaseLine.totale_balanec"
                      @change="autoUpdatePurline(purchaseLine)" class="clear_text code text" id="jusinsya_code"
                      name="jusinsya_code" type="text" tabindex="10008" style="min-width: 4em; width:90%" />
                  </th>
                  <th>
                    <input v-model="purchaseLine.payment_amount" @change="autoUpdatePurline(purchaseLine)"
                      class="clear_text code text" id="jusinsya_code" name="jusinsya_code" type="text" tabindex="10008"
                      style="min-width: 4em; width:90%" />
                  </th>
                  <th>
                    <input :disabled="true" v-model="purchaseLine.balanceamount" @change="autoUpdatePurline(purchaseLine)"
                      class="clear_text code text" id="jusinsya_code" name="jusinsya_code" type="text" tabindex="10008"
                      style="min-width: 4em; width:90%" />
                  </th>
                  <th>
                    <input v-model="purchaseLine.dicount" @change="autoUpdatePurline(purchaseLine)"
                      class="clear_text code text" id="jusinsya_code" name="jusinsya_code" type="text" tabindex="10008"
                      style="min-width: 4em; width:90%" />
                  </th>
                  <th>
                    <input :disabled="true" v-model="purchaseLine.currency_code" @change="autoUpdatePurline(purchaseLine)"
                      class="clear_text code text" id="jusinsya_code" name="jusinsya_code" type="text" tabindex="10008"
                      style="min-width: 4em; width:90%" />
                  </th>
                  <th style="padding:5px 0px !important">
                    <div class="button type2" id="uniform-undefined" data-bs-toggle="modal"
                      data-bs-target="#staticBackdrop" @click="
                        getMessage(
                          'Message',
                          'Do yout want to Delete this recode. [' +
                          purchaseLine.id +
                          ']',
                          'delelink',
                          purchaseLine.id
                        )
                      ">
                      <span><input type="button" class="type2" style="opacity: 0; width: 54px" tabindex="10025"
                          value="display" /><i class="fa fa-trash" aria-hidden="true"></i> Delete</span>
                    </div>
                  </th>
                </tr>
              </thead>
              <vue-countdown style="display: none" v-if="counting" :time="60000" @end="onCountdownEnd"
                v-slot="{ totalSeconds }">Fetch again {{ totalSeconds }} seconds later</vue-countdown>
            </table>
          </div>
          <div class="box-footer-pagination">
            <div class="pagination" style="padding: 5px; width: 100%">
              <div class="button type2" id="uniform-undefined" v-show="btnGenerate" @click="myFunction()"
                style="float: left">
                <span style="width: 145px"><input type="button" class="type2" tabindex="10025" value="display"
                    style="opacity: 0; width: 54px" /><i class="fas fa-plus"></i> Generate Code</span>
              </div>
              <div style="width: 30%; float: right; background: none; color: #f8f5b4; ">
                <!-- /.card-header -->
                <div id="inspection_call_statusdisplay" class="clearfix mt_0" style="margin=0;">
                  <div class="col main status_tested" style="border: none; width: 100%">
                    <table cellpadding="0" cellspacing="0" border="0">
                      <thead>
                        <tr></tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th>
                            <font style="vertical-align: inherit; color: #f8f5b4" class="pro">Cradit Amount</font>
                          </th>
                          <td>
                            <input :disabled="true" style="vertical-align: inherit; background: none;  border: none;  "
                              v-model="total_amount" />
                          </td>
                        </tr>
                        <tr>
                          <th>
                            <font style="vertical-align: inherit; color: #f8f5b4" class="pro">Total Pay</font>
                          </th>
                          <td>
                            <input :disabled="true" style="vertical-align: inherit; background: none;  border: none;  "
                              v-model="total" />
                          </td>
                        </tr>
                        <tr>
                          <th>
                            <font style="vertical-align: inherit; color: #f8f5b4" class="pro">Cradit Balance</font>
                          </th>
                          <td>
                            <input :disabled="true" style="vertical-align: inherit; background: none;  border: none;  "
                              v-model="cradit_total" />
                          </td>
                        </tr>
                        <tr>
                          <th>
                            <font style="vertical-align: inherit; color: #f8f5b4">Discount(%)</font>
                          </th>
                          <td>
                            <input :disabled="true" style=" vertical-align: inherit;  background: none; border: none; "
                              v-model="form.dicount" />
                          </td>
                        </tr>
                        <tr>
                          <th>
                            <font style="vertical-align: inherit; color: #f8f5b4">Tax(%)</font>
                          </th>
                          <td>
                            <input :disabled="true" style="vertical-align: inherit; background: none;border: none; "
                              v-model="form.tax" />
                          </td>
                        </tr>
                        <tr>
                          <th>
                            <font style="vertical-align: inherit; color:#f8f5b4"> Total Amount</font>
                          </th>
                          <td>
                            <input :disabled="true" style=" vertical-align: inherit;  background: none; border: none; "
                              v-model="form.totale_balanec" />
                          </td>
                        </tr>
                        <tr>
                          <th>
                            <font style="vertical-align: inherit; color: #f8f5b4">Exchange Rate</font>
                          </th>
                          <td>
                            <input :disabled="true" style="vertical-align: inherit; background: none;border: none; "
                              v-model="exchangerate" />
                          </td>
                        </tr>
                        <tr>
                          <th>
                            <font style="vertical-align: inherit; color:#f8f5b4"> Amount</font>
                          </th>
                          <td>
                            <input :disabled="true" style=" vertical-align: inherit;  background: none; border: none; "
                              v-model="amount" />
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade ui-modal" id="printCategory" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
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
              <div class=" mb-5 mt-3 print-payment" style="width:960px; margin-right:auto; margin-left: auto;">

                <div style="padding:6.5em 110px 0 110px">
                  <div class="col-container">
                    <div class="col1">
                      <h3 class="title-purchase">PAYMENT INVOICE</h3>
                    </div>
                    <div class="col2">
                      <p class="text-center p-bg font-size p-pad">CREATE DATE</p>
                      <p class="text-center font-12">{{ dateformart }}</p>
                      <p class="text-center p-bg font-size p-pad">INVOICE NO.</p>
                      <p class="text-center font-12">{{ purchases }}</p>
                    </div>
                  </div>

                  <div class="col-container">
                    <div class="row2-col1 mg-top">
                      <p class=" p-bg font-size p-pad">ORDER</p>
                      <p class="p-mg info-pad font-12">Name : {{ payuser.user_name }}</p>
                      <p class="p-mg info-pad font-12">Phone Number : {{ payuser.tel }}</p>
                      <p class="p-mg info-pad font-12">Gender : {{ payuser.sex }}</p>
                      <p class="p-mg info-pad font-12">Address : {{ payuser.address }}</p>
                      <p class="p-mg info-pad font-12">Exchange Rate : 1{{ currency }} to
                        {{ exchangerate }}{{ form.currency_code }}</p>
                    </div>
                    <div class="row2-col2 mg-top">
                      <p class=" p-bg font-size p-pad">SUPPLYER</p>
                      <p class="p-mg info-pad font-12">Name : {{ paysub.sup_name }}</p>
                      <p class="p-mg info-pad font-12">Phone Number : {{ paysub.phone_no }}</p>
                      <p class="p-mg info-pad font-12">Email Address : {{ paysub.email }}</p>
                      <p class="p-mg info-pad font-12">Address : {{ paysub.address }}</p>
                      <p class="p-mg info-pad font-12">Payment Method : {{ form.paymentMethod }}</p>
                    </div>
                  </div>
                  <div class="my-2 justify-content-center">
                    <table id="pr-tb">
                      <tr class="p-bg">
                        <th class="text-center" style="width:7.5em">Document No</th>
                        <th class="text-center" style="width:7em">Description</th>
                        <th class="text-center" style="width:5em">Dicount</th>
                        <th class="text-center" style="width:7.5em">ExchangeRate</th>
                        <th class="text-center" style="width:7em">Total Balance</th>
                        <th class="text-center" style="width:7em;">Pay Amount</th>
                        <th class="text-center" style="width:8em">Amount</th>
                      </tr>

                      <tr v-for="(purchase, index) in purchases_lines" :key="index">
                        <td>{{ purchase.payment_no }}</td>
                        <td>{{ purchase.decription }}</td>
                        <td>{{ purchase.dicount }}</td>
                        <td>{{
                          purchase.exchane_rate
                        }}</td>
                        <td>{{
                          new Intl.NumberFormat().format(purchase.balanceamount)
                        }}</td>
                        <td>{{
                          new Intl.NumberFormat().format(purchase.payment_amount)
                        }}</td>
                        <td>{{ purchase.total_amount }}</td>
                      </tr>

                    </table>
                    <div class="col-container ">
                      <div class="row2-col1 min-hi">
                        <p class="p-mg info-pad font-12">Remark/Instructions : </p>
                      </div>
                      <div class="col3 ">
                        <table class="p-table-r" style=" width: 333px;">
                          <tr class="p-bg-footer">
                            <th style="width:18em;">Credit Amount {{ currency }}</th>
                            <td style="text-align:left; width: 25em; padding-left: 10px;">{{
                              new Intl.NumberFormat().format(total_amount)
                            }}</td>
                          </tr>
                          <tr class="p-bg-footer">
                            <th style="width:18em;">Total Pay {{ currency }}</th>
                            <td style="text-align:left ; width: 25em;padding-left: 10px;">{{
                              new Intl.NumberFormat().format(total)
                            }}
                            </td>
                          </tr>
                          <tr class="p-bg-footer">
                            <th style="width:18em;">Exchange Rate {{ form.currency_code }}</th>
                            <td style="text-align:left;width: 25em; padding-left: 10px;">{{
                              exchangerate
                            }}</td>
                          </tr>
                          <tr class="p-bg-footer">
                            <th style="width:18em;">Tax(%)</th>
                            <td style="text-align:left; width: 25em; padding-left: 10px;">{{
                              form.tax
                            }}
                            </td>
                          </tr>
                          <tr class="p-bg-footer">
                            <th style="width:18em;">Dscount(%)</th>
                            <td style="text-align:left; width: 25em; padding-left: 10px;">{{
                              form.dicount
                            }}</td>
                          </tr>
                          <tr class="p-bg-footer">
                            <th style="width:18em;">Total Amount {{ form.currency_code }}</th>
                            <td style="text-align:left; width: 25em; padding-left: 10px;">{{
                              new Intl.NumberFormat().format(amount)
                            }}
                            </td>
                          </tr>
                        </table>
                      </div>
                    </div>

                    <div class="col-container" style="margin-top:30px;">
                      <div class="col4">
                        <p style="margin-bottom:2em">ORDER</p>
                        <p>Signature</p>
                      </div>
                      <div class="col5">
                        <p style="margin-bottom:2em">SUPPLYER</p>
                        <p>Signature</p>
                      </div>

                    </div>
                  </div>

                </div>

              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <a class="btn-purchase btn-light text-capitalize border-0" data-mdb-ripple-color="dark" @click="print()"><i
              class="fas fa-print text-primary"></i> Print
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade ui-modal" id="statiex-import" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticboomId" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content ui-dialog">
        <div class="ui-widget-header">
          <h5 class="modal-title in-header" id="staticBackdropLabel"><i class="fa fa-print" aria-hidden="true"></i>Input
            Payment Amount</h5>
          <a href="#" class="ui-dialog-titlebar-close ui-corner-all" role="button" data-bs-dismiss="modal">
            <span class="ui-icon ui-icon-closethick">close</span></a>
        </div>
        <div id="purchaseorder">
          <div class="card">
            <div class="card-body">
              <div class="container mb-5 mt-3">
                <div class="row d-flex align-items-baseline">
                  <div class="col-xl-9">
                  </div>
                  <hr>
                </div>

                <div class="container">
                  <div class="col-md-12">
                    <div class="text-center">
                      <h3 class="title-purchase" id="titlered">Payment Amount{{ form.currency_code }}</h3>
                    </div>
                  </div>
                  <div class="row my-2 mx-1 justify-content-center table-padding-bot customsroll">
                    <table>
                      <tr>
                        <th style="width: 50%"> <input type="number" v-model.number="inputPay"
                            style="vertical-align: inherit;background: none;height: 50px;font-size: 25px;text-align: center;width: 100%;" />
                        </th>
                      </tr>
                    </table>
                  </div>
                  <hr>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <a class="btn-purchase btn-light text-capitalize" @click="getGenerateAuto(inputPay)" data-bs-dismiss="modal"
            data-mdb-ripple-color="dark"><i class="fas fa-save"></i> Generate Docutment</a>
        </div>
      </div>
    </div>
  </div>
  <div id="myModal" class="lskymodal">
    <div class="lskymodal-content">
      <p><i class="fa fa-check" aria-hidden="true"></i> {{ massege }}</p>
    </div>
  </div>
  <div id="myModalauto" class="lsky">
    <div class="lsky-content">
      <p>{{ massege }}</p>
    </div>
  </div>

  <div id="myModal" class="lskymodal">
    <div class="lskymodal-content">
      <p><i class="fa fa-check" aria-hidden="false"></i> {{ massege }}</p>
    </div>
  </div>
<div id="payment-model" class="papayment-model popuppayment" >
    <div class="b-ground">
    <div>
        <div class="text">
          <div style="display: flex; justify-content: space-between; margin: 0 20px;">
            <p class="total-pay">Total Amount</p>
            <span class="ui-icon ui-icon-closethick" @click="closePayment()"></span>
          </div>
          <span v-if="currency=='USD'">$ {{ new Intl.NumberFormat().format(form.totale_balanec) }}</span>
          <span v-else>{{ new Intl.NumberFormat().format(form.totale_balanec) }}{{ currency }}</span>

          <div class="exchange-payment">
          <span> 1.00 {{ currency }} = {{ new Intl.NumberFormat().format(exchangerate) }} {{
          form.currency_code
        }}</span>

        <select v-model="form.currency_code" class="form" style="width: 73px;padding: 2px;"
          @click="getchagevalue(form.currency_code)">
          <option value=""></option>
          <option v-for="brand in brands" :value="brand.curency_no">
            {{ brand.curency_no }}
          </option>
        </select>
      </div>
      </div>
      </div>
      <p class="chos-method">Choose the payment methods below</p>
      <div class="patmentthod">
        <button v-for="(unit, index) in units " :key=index class="btn-form" @click="getclick(unit.paymentmethod_code)"
          style="color:#f7f7f7;">{{ unit.paymentmethod_code }}</button>
      </div>

      <p class="p-input" style="margin-top:20px">Payment Amount</p>
      <div class="payment-input pay-payment">
       
        <input :disabled="true" type="text-form" class="pay-to" v-model="amount" name="Payment to Amount"
          placeholder="Payment Amount">

        <input v-if="paymentmethodselect == 'Cash'" type="number" v-model="inputpayment" class="pay-to"
          @change="getbancePayment(inputpayment)" name="Payment to Amount" placeholder=" Pay Amount">

        <input v-if="paymentmethodselect == 'Cash'" :disabled="true" type="text-form" v-model="paybalecne" class="pay-to"
          name="Payment to Amount" placeholder=" Cash Back">
      </div>
      <button class="btn-pay " style="color:aliceblue;" @click="paymentvouchor()"> <i class="fa fa-credit-card"></i> Pay
        Now</button>
        </div>
  </div>  
</template>
<script>
import readXlsxFile from 'read-excel-file';
import Header from '../Header.vue';
import * as XLSX from 'xlsx/xlsx.mjs';
import axios from "axios";
import moment from "moment";
export default {
  components: { Header },
  data() {
    return {
      massege: '',
      pending: false,
      file: null,
      paymentmethodselect: 'Cash',
      img: "",
      currency: '',
      paybalecne: 0,
      inputpayment: 0,
      brands: [],
      exchangerate: 1,
      code: "",
      confirm: "",
      title: "",
      message: "",
      purchases: '',
      amount: '0',
      inputPay: 0,
      exefile: '',
      purchasesCode: "",
      suppliyer: [],
      purchases_lines: [],
      cradit_total: 0,
      units: [],
      products: [],
      boompros: [],
      boomunits: [],
      btnGenerate: false,
      total: 0,
      item: 0,
      productline: 0,
      form: {
        id: '',
        document_no: '',
        document: '',
        decription: '',
        totale_balanec: '',
        exchane_rate: '',
        currency_code: '',
        paymentMethod: '',
        sub_code: '',
        statue: '',
        created_by: '',
        delete_by: '',
        created_at: '',
        updated_at: ''
      },
      checkexcel: [],
      items: [{
        id: '',
        document_no: '',
        document_type: '',
        product_no: '',
        description: '',
        unit_of_measure_code: '',
        inventory: 0,
        unit_price: 0,
        total_amount: 0,
        curency_code: '',
      }],
      checkarray: 1,
      excel: 'Import',
      head: ["id", "document_no", "document_type", "product_no", "description", "unit_of_measure_code", "inventory", "unit_price", "total_amount", "curency_code"],
      fileName: "PrucheseLine.xlsx",
      saveDate: [],
      dataSv: [],
      dateformart: '',
      paysub: [],
      payuser: [],
    };
  },
  async mounted() {
    try {
      if (this.$route.query.id.trim() != "undefined") {
        this.purchases = this.$route.query.id;
      }
    } catch (error) {
      this.purchases = "undefined";
    }
    this.getPurchaseoOrder();
    this.getechangerage();
    this.getUnit();
    this.getsuppliyer();
    this.getEdite();
    this.getcompany();
    this.paymentsub();
    this.paymentuser();
  },
  methods: {
    gettoRecpt() {
      this.$router.push({ name: "paymen", query: { id: this.purchases }, });
    },
    getPurchaseoOrder() {
      axios.get("api/v1/purchase/" + this.purchases).then((res) => {
        this.form = res.data;
        this.getcompany();
      });
    },
    showform(){
      var show = document.querySelector('.popuppayment')
      show.style.display='block'
    },
    getclick(codeID) {
      this.paymentmethodselect = codeID;
    },
    getGenerateAuto(value) {
      axios.post("/api/v1/paymentvoucher/getPaymentlisk/" + this.form.sub_code).then((res) => {
        this.saveDate = res.data;
        var inputval = parseFloat(value);
        var total = 0;
        this.saveDate.forEach(element => {
          this.dataSv = element;
          total = parseFloat(element.totale_balanec);
          if (inputval > total && inputval > 0) {
            console.log(this.dataSv);
            inputval = inputval - total;
            this.dataSv.payment_amount = total;
            axios.post("api/v1/paymentvoucher/InsertLink/" + this.purchases, this.dataSv)
              .then(() => { });
          } else if (inputval > 0) {
            this.dataSv.payment_amount = inputval;
            console.log(this.dataSv);
            axios.post("api/v1/paymentvoucher/InsertLink/" + this.purchases, this.dataSv)
              .then(() => { });
            inputval = 0;
          }
          this.getEdite();
        });
      })
    },
    getchagevalue(valeu) {
      this.brands.forEach(element => {
        if (element.curency_no == valeu) {
          this.exchangerate = element.exchange_rate;
        }
      });
      var totale_balanec = parseFloat(this.form.totale_balanec.replace(",", ""));
      var exchangerates = parseFloat(this.exchangerate.replace(",", ""));
      var xtotale = totale_balanec * exchangerates;
      this.amount = xtotale;
      if (this.amount == 0) { this.amount = this.total_amount; }
      this.form.exchane_rate = this.exchangerate;
      this.form.exchane_currency = this.currency;
      this.form.ex_totale_balanec = this.amount;
    },
    btnGenerate_code($status) {
      this.isDisabled = false;
      this.btnGenerate = true;
      this.crateNewsProduct();
    },
    getechangerage() {
      axios.get("api/v1/exchangerate/index/").then((res) => {
        var ix = 0;
        this.brands = res.data;
        this.brands.forEach(element => {
          if (element.main_curency_no != null && ix < 1) {
            ix++;
            this.currency = element.main_curency_no;
            this.exchangerate = element.exchange_rate;
          }
        });
      });

    },
    myFunction(val) {
      axios.post("api/v1/paymentvoucher/addrowPaymentline/" + this.purchases)
        .then((response) => {
          this.purchases_lines = response.data;
        });
      let i = this.purchases_lines.findIndex((x) => x.id === val.id);
      if (i != -1) {
        this.purchases_lines[i].document_no += 1;
      } else {
        var plus = this.purchases_lines.document_no;
        this.purchases_lines.push(plus);
      }
    },
    getProduct() {
      axios.get("api/v1/products/getdataPro").then((res) => {
        this.products = res.data;
      });
    },
    formartcurrecy(value, toCurrency) {
      var formatter = new Intl.NumberFormat('en-US', {
        style: 'currency',
        currency: toCurrency
      });
      return formatter.format(parseInt(value));
    },
    getUnit() {
      axios.get("/api/v1/paymentvoucher/getPaymenmethod/").then((response) => {
        this.units = response.data;
      });
    },
    getsuppliyer() {
      axios.get("api/v1/suppliyers/getdatasub").then((response) => {
        this.suppliyer = response.data;
      });
    },
    crateNewsProduct() {
      axios.post("/api/v1/paymentvoucher/create/").then((response) => {
        this.form = response.data;
        this.$router.push({ name: "paymen", query: { id: this.form.document_no }, });
      });
    },
    getEdite() {
      if (this.purchases.trim() != "undefined") {
        axios
          .get("api/v1/paymentvoucher/getdataPayment/" + this.purchases)
          .then((response) => {
            this.form = response.data;
            this.amount = this.form.ex_totale_balanec;
            this.exchangerate = this.form.exchane_rate;
            this.isDisabled = false;
          }),
          axios
            .get("api/v1/paymentvoucher/getdataPaymentlist/" + this.purchases)
            .then((response) => {
              this.purchases_lines = response.data;
              this.sumItem(response.data);
              this.purchases_lines.forEach(purline => {
                try {
                  if (purline.balanceamount != purline.totale_balanec) {
                    purline.balanceamount = parseInt(purline.totale_balanec) - parseInt(purline.payment_amount);
                    var exchangerates = parseFloat(this.form.exchane_rate.replace(",", ""));
                    purline.total_amount = parseFloat(purline.totale_balanec) * parseFloat(exchangerates);
                    purline.total_amount = parseInt(purline.total_amount).toLocaleString()
                  }
                } catch (error) {
                  console.log(error);
                }
              });
              this.btnGenerate = true;
            });
      }
      this.paymentmethodselect == 'ABA';
      this.inputpayment = this.form.totale_balanec;
    },
    sumItem(link) {
      this.total = 0;
      this.total_amount = 0;
      link.forEach(element => {
        this.total += parseFloat(element.payment_amount);
        this.total_amount += parseFloat(element.totale_balanec);
      });
      var exchangerates = parseFloat(this.form.exchane_rate.replace(",", ""));
      this.totalAmung();
      this.amount = parseFloat(this.totalAmung()) * parseFloat(exchangerates);
      this.form.ex_totale_balanec = this.amount.toLocaleString();
      this.cradit_total = this.total_amount - this.total;
      axios.get("api/v1/paymentvoucher/getdataPayment/" + this.purchases).then((response) => { this.form = response.data; })
      if (this.amount == 0 || this.amount == null) this.amount = this.form.totale_balanec.toLocaleString();
    },
    getpayment() {
      if (this.form.statue == "save") {
        var modal = document.getElementById("payment-model");
        modal.style.display = "block";
      } else {
      }
    },
    totalAmung() {
      var x = 0;
      x = parseFloat(this.total) - (parseFloat(this.form.dicount) * parseFloat(this.total) / 100);
      x = x + (parseFloat(this.form.tax) * x / 100);
      this.amount = x;
      return x;
    },
    deleteUnit(linkId) {
      if (linkId != null) {
        axios
          .post("api/v1/purchase/delete/purchaseline/" + linkId)
          .then((response) => {
            this.purchases_lines = response.data;
          });
      }
    },
    getbancePayment(value) {
      if (parseFloat(this.amount) < parseFloat(this.inputpayment)) {
        this.paybalecne = parseFloat(value) - parseFloat(this.amount)
      } else {
        this.inputpayment = this.amount.toLocaleString();;
        this.paybalecne = 0;
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
    },
    autoUpdate(purline) {
      for (var i = 0; i <= 100000; i++) {
        if (i === 100000)
          alert(
            purline.document_no +
            "  " +
            purline.description +
            "  " +
            purline.product_no
          );
      }
    },
    searchproduct(txt) {
      console.log(this.form);
      axios.post('/api/v1/paymentvoucher/search/' + txt, this.form)
        .then((response) => {
          this.boompros = response.data;
        });
      console.log(this.boompros);
    },
    getproduct(boom, product, txt) {
      if (txt == 'boomproducr') {
        product.payment_no = boom.document_no;
        product.decription = this.form.decription;
        product.totale_balanec = boom.totale_balanec;
        product.paymentamount = product.totale_balanec;
        product.balanceamount = 0;
        product.document = boom.document;
        product.exchane_rate = boom.exchane_rate;
        product.currency_code = boom.currency_code;
        this.autoUpdatePurline(product);
      }
      else if (txt == 'boomunit') {
        product.unit_of_measure_code = boom.variant_unit_of_measure_code;
        this.autoUpdatePurline(product);
      }
     else if (txt == 'linkunit') {
        product.unit_of_measure_code = boom.variant_unit_of_measure_code;
        product.unit_price = boom.unit_price;
        product.curency_code = boom.curency_code;
        this.autoUpdatePurline(product);
      }
      else if(txt== "suppliyer"){
        product.document_no = boom.document_no
        product.sup_code = boom.sup_code
       // this.autoUpdatePurline(product);
       this.autoUpdateProduct(product)
      }
    },
    prooductboom() {
      axios.get('/api/v1/getproductboom/' + this.products)
        .then((response) => {
          this.boompros = response.data;
        })
    },

    getcompany() {
      this.dateformart = moment(this.form.created_at).format('YYYY-MM-DD');
    },
    paymentvouchor() {
      axios.post('/api/v1/paymentvoucher/getpaymentvouchor/' + this.purchases, this.form)
        .then((response) => {
          this.boompros = response.data;
        })
    },

    paymentsub() {
      axios.get('/api/v1/paymentvoucher/userpaymentr/' + this.purchases)
        .then((response) => {
          this.payuser = response.data;
        })
    },
    paymentuser() {
      axios.get('/api/v1/paymentvoucher/soppaymentr/' + this.purchases)
        .then((response) => {
          this.paysub = response.data;
        })
    },
    autoUpdatePurline(purline) {
      this.sumItem(this.purchases_lines);
      var exchangerates = parseFloat(this.exchangerate.replace(",", ""));
      var xtotale = this.total_amount * exchangerates;
      this.amount = xtotale;
      if (this.amount == 0) { this.amount = this.total_amount; }
      this.form.exchane_rate = this.exchangerate.toLocaleString();
      this.form.exchane_currency = this.currency;
      this.form.ex_totale_balanec = this.amount.toLocaleString();
      if (purline.balanceamount != purline.totale_balanec) {
        purline.balanceamount = parseFloat(purline.totale_balanec) - parseFloat(purline.payment_amount)
      }
      axios.post("/api/v1/paymentvoucher/updatPaymentlink/" + purline.id, purline)
        .then((res) => {
          purline = res.data;
          this.getEdite();
        });

    },
    autoUpdateProduct(purform) {
      console.log(purform);
      if (purform.document_no != "") {
        axios
          .post(
            "api/v1/paymentvoucher/updatPayment/" + purform.id, purform)
          .then((response) => {
            this.purchases_lines = response.data;
          });
        this.getEdite();
      }
    },
    getboomnit(proid) {
      axios.post('/api/v1/products/getboomline/' + proid)
        .then((response) => {
          this.uints = response.data;
          console.log(response.data);
        })
    },
    closePayment() {
      var modal = document.getElementById("payment-model");
      modal.style.display = "none";
    },
    getunit(proid) {
      axios.post('/api/v1/purchase/delete/getPrulinkUnit/' + proid)
        .then((response) => {
          this.boomunits = response.data;
        })
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
    getExcelData(event) {
      this.exefile = '';
      const titlered = document.getElementById("titlered");
      titlered.style.color = '326c7a';
      this.items = [];
      let xlsxfile = event.target.files ? event.target.files[0] : null;
      readXlsxFile(xlsxfile).then((rows) => {
        var x = 0;
        rows.forEach(element => {
          if (x >= 0) {
            if (x == 0) {
              this.checkexcel = element;
            } else {
              if (this.checkexcel[0] == 'id' && this.checkexcel[1] == 'product_no' && this.checkexcel[2] == 'description' && this.checkexcel[3] == 'unit_of_measure_code' && this.checkexcel[4] == 'inventory' && this.checkexcel[5] == 'unit_price' && this.checkexcel[6] == 'total_amount') {
                this.items.push({
                  id: x,
                  document_no: this.form.document_no,
                  document_type: this.form.document_type,
                  product_no: element[1],
                  description: element[2],
                  unit_of_measure_code: element[3],
                  inventory: element[4],
                  unit_price: element[5],
                  total_amount: element[6],
                  curency_code: this.form.curency_code,
                });
              } else {
                this.exefile = ' fail data ';
                titlered.style.color = 'red';
              }
            }
          }
          x++;
          this.sumTotal(this.items);
        });
      })
      this.exefile = '';
    },
    saveprulink() {
      if (this.items.length > 0) { setTimeout(() => this.savepru(), 500); }
    },
    savepru() {
      axios.post('/api/v1/purchase/PrulinkeSave/', this.items[this.checkarray]).then((response) => {
        this.massege = this.items[this.checkarray - 1].product_no + ' / ' + this.items[this.checkarray - 1].description;
        this.massege += " : " + this.items[this.checkarray].product_no + ' / ' + this.items[this.checkarray].description;
        this.massege += " : " + this.items[this.checkarray + 1].product_no + ' / ' + this.items[this.checkarray + 1].description;
      });
      if (this.checkarray < this.items.length) {
        this.saveprulink();
        this.checkarray++;
        this.meassagechek('open');
      } else {
        this.meassagechek('close');
        this.checkarray = 0;
      }
    },
    save() {
      this.excel = 'Import';
      this.productline = 0;
      this.total = 0;
      this.items = [];
      this.item = 0;
    },
    meassagechek(check) {
      var modal = document.getElementById("myModalauto");
      if (check == 'open') {
        modal.style.display = "block";
      } else {
        axios.post("api/v1/purchase/addrow/purchaseline/" + this.purchases)
          .then((response) => {
            this.purchases_lines = response.data;
            modal.style.display = "none";
          });
      }
    },
    exportSheet() {
      this.items = [];
      this.purchases_lines.forEach(element => {
        console.log(element);
        this.items.push({
          document_no: element.document_no,
          document_type: element.document_type,
          product_no: element.product_no,
          description: element.description,
          unit_of_measure_code: element.unit_of_measure_code,
          inventory: element.inventory,
          unit_price: element.unit_price,
          total_amount: element.total_amount,
          curency_code: element.curency_code,
        })
      });
      this.excel = 'Export';
    },
    exportdataExcel() {
      const invoices = this.items.reduce((ac, element) => {
        ac.push({
          document_no: element.document_no,
          document_type: element.document_type,
          product_no: element.product_no,
          description: element.description,
          unit_of_measure_code: element.unit_of_measure_code,
          inventory: element.inventory,
          unit_price: element.unit_price,
          total_amount: element.total_amount,
          curency_code: element.curency_code,
        });
        return ac;
      }, []);
      var invoicesWS = XLSX.utils.json_to_sheet(invoices)
      var wb = XLSX.utils.book_new()
      XLSX.utils.book_append_sheet(wb, invoicesWS, 'PruchecLink')
      XLSX.writeFile(wb, 'PruchecLink.xlsx')
    }
  },
  startCountdown: function () {
    this.counting = true;
  },
  onCountdownEnd: function () {
    this.counting = false;
  },
};
</script>