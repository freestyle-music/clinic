<template >
  <div class="wrapper" style="overflow: hidden">
    <div class="container-fuild">
      <div id="headTitle">
        <div id="logo"><img alt="Healthbook" height="44" src="img/logo.png" width="70" _mstalt="155922" _msthash="1">
        </div>
        <h1 id="title" _msttexthash="48503" _msthash="2">Payment View</h1>
      </div>
    <Header/>
    <ol id="topicPath">
        <li style="margin-left: 330px;">
          <router-link to="productsetting">
            <a href="dashbaord">
              <font style="vertical-align : inherit">
                <font style="vertical-align : inherit">
                  Payment View
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
              <a v-if="this.form.statue == 'open'" class="dropdown-item btn btn-primary" data-bs-toggle="modal"
                data-bs-target="#staticBackdropss" tabindex="10028"><i class="fas fa-edit"></i> Release</a>
            </li>
            <li>
              <a v-if="this.form.statue == 'open'" class="dropdown-item" data-bs-toggle="modal"
                data-bs-target="#staticBackdropss" tabindex="10028" href="#"> <i class="fas fa-save"></i> Booking</a>
            </li>
            <li>
              <a @click="print()" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#staticbo;;;;;omId"
                tabindex="10028" href="#"><i class="fa fa-print" aria-hidden="true"></i> Print</a>
            </li>
            <li>
              <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#staticBackdropss" tabindex="10028"
                href="#"><i class="fas fa-file-excel"></i> To Excel</a>
            </li>
          </ul>

          <div class="search-box-title">
            <router-link to="/Purchasview"><a class="btn-radius btn btn-sm" href="#"
                style="color: #f8f5b4; margin-top: -2px">
                <i class="fas fa-eye" style="padding-right: 5px"> </i>
                Payment
              </a></router-link>
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
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="tbl_search">
              <tbody>
                <tr>
                  <th width="10%">Document Number</th>
                  <td width="50%">
                    <input :disabled="true" @change="autoUpdateProduct(form)" v-model="form.document_no"
                      class="string_zen_kana clear_text text input_text" style="width:380px" type="text" />
                  </td>
                </tr>
                <tr>
                  <th width="10%">Document Type</th>
                  <td width="50%">
                    <input :disabled="isDisabled" @change="autoUpdateProduct(form)" v-model="form.document_type"
                      class="string_zen_kana clear_text text input_text" style="width:380px" type="text" />
                  </td>
                </tr>
                <tr>
                  <th width="10%">Description</th>
                  <td width="50%">
                    <input :disabled="isDisabled" @change="autoUpdateProduct(form)" v-model="form.description"
                      class="string_zen clear_text text input_text" style="width:380px" type="text" />
                  </td>
                </tr>
                <tr>
                  <th width="10%">Suppliyer</th>
                  <td width="50%">
                    <!-- <select :disabled="isDisabled" @change="autoUpdateProduct(form)" v-model="form.suppliyer_code"
                      class="form" style="width:380px">

                      <option value="">Selete Suppliyer</option>
                      <option v-for="suppliye in suppliyer" :value="suppliye.sup_code" :key="suppliye.id">
                        {{ suppliye.sup_name }}
                      </option>
                    </select> -->

                    <div class="dropdown">
                      <button
                        class="dropdown-toggle string_zen clear_text text select-menu" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false" size="50" style="width:380px !important">
                       
                       {{ supply_name }}
                       <i class="fa fa-chevron-down"></i>
                      </button>
                      <div class="dropdown-menu each-drop-menu" aria-labelledby="dropdownMenuButton1">
                        <p>
                          <input v-model="txtsearch" @input="searchproduct(txtsearch)"
                            class="string_zen clear_text text search-pro-field" size="50" type="text"/>
                        </p>
                        <ul style="list-style: none" class="scrollable-menu">
                          <li v-for="supply in suppliyer" :value="supply.sup_code" :key="supply.id" @click="getproduct(supply)">
                            <div class="menu-item">
                              {{ supply.sup_name }}
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>

                  </td>
                </tr>

                <tr>
                  <th width="10%">Curency Code</th>
                  <td width="50%">
                    <input :disabled="isDisabled" @change="autoUpdateProduct(form)" v-model="form.curency_code"
                      class="string_zen clear_text text input_text" style="width : 380px" type="text" />
                  </td>
                </tr>

                <tr>
                  <th width="10%">Inactived</th>
                  <td width="50%">
                    <div class="selector" id="inactivced"><span>{{ form.inactived }}</span>
                      <select id="inactivced" name="inactivced" v-model="form.inactived" tabindex="10003"
                        style="min-width: 51px; opacity: 0; width: 80px;">
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                      </select>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
            <div class="search-box-footer" style=" background: #094e59e0; border: 0px #e6e1e16e solid;">
          <div v-if="this.form.statue == 'open'" class="button type2" id="uniform-undefined">
            <span data-bs-toggle="modal" data-bs-target="#statiex-import" tabindex="10028"><input type="button"
                value="display" class="type2" style="opacity: 0; width: 54px" tabindex="10025" /><i
                class='fas fa-file-import'></i> Import From Excel</span>
          </div>
          <div class="button type2" id="uniform-undefined">
            <span data-bs-toggle="modal" data-bs-target="#statiex-import" tabindex="10028" @click="exportSheet()"><input
                @click="exportSheet()" type="button" value="display" class="type2" style="opacity: 0; width: 54px"
                tabindex="10025" /><i class='fas fa-file-import'></i> Export To Excel</span>
          </div>
          <span class="marker"></span>
        </div>
          </div>
        </div>
       
        <div class="box">
          <div class="box-content">
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="table table-striped br-table">
              <thead>
                <tr class="header-table">
                  <th class="excellcolor-trhead" style="width: 7%">Document_no</th>
                  <th class="excellcolor-trhead" style="width: 10%">Description</th>
                  <th class="excellcolor-trhead" style="width: 7%">PaymentMethod</th>
                  <th class="excellcolor-trhead" style="width: 7%">Totale Balance</th>
                  <th class="excellcolor-trhead" style="width: 7%">Exchane Rate</th>
                  <th class="excellcolor-trhead" style="width: 10%">Tax</th>
                  <th class="excellcolor-trhead" style="width: 10%">Discount</th>
                  <th class="excellcolor-trhead" style="width: 7%"></th>
                </tr>
                </thead>
              <tbody>
                <tr v-for="(purchaseLine, index) in purchases_lines" :key="index">
                  <th v-if="index % 2 == 0" style=" background-color:#f1f1f10f">{{ purchaseLine.document_no }}</th>
                  <th v-else="index % 2 == 0" style=" border: medium none">{{ purchaseLine.document_no }}</th>
                  <th v-if="index % 2 == 0" style=" background-color:#f1f1f10f">{{ purchaseLine.description }}</th>
                  <th v-else="index % 2 == 0" style="  border: medium none">{{ purchaseLine.description }}</th>
                  <th v-if="index % 2 == 0" style=" background-color:#f1f1f10f">{{ purchaseLine.paymentMethod }}</th>
                  <th v-else="index % 2 == 0" style="  border: medium none">{{ purchaseLine.paymentMethod }}</th>
                  <th v-if="index % 2 == 0" style=" background-color:#f1f1f10f">
                    {{ purchaseLine.totale_balanec }}{{ purchaseLine.currency_code }}</th>
                  <th v-else="index % 2 == 0" style="  border: medium none">
                    {{ purchaseLine.totale_balanec }}{{ purchaseLine.currency_code }}</th>
                  <th v-if="index % 2 == 0" style=" background-color:#f1f1f10f">{{ purchaseLine.exchane_rate }}</th>
                  <th v-else="index % 2 == 0" style=" border: medium none">{{ purchaseLine.exchane_rate }}</th>
                  <th v-if="index % 2 == 0" style=" background-color:#f1f1f10f">{{ purchaseLine.tax }}</th>
                  <th v-else="index % 2 == 0" style=" border: medium none">{{ purchaseLine.tax }}</th>
                  <th v-if="index % 2 == 0" style=" background-color:#f1f1f10f">{{ purchaseLine.dicount }}</th>
                  <th v-else="index % 2 == 0" style=" border: medium none">{{ purchaseLine.dicount }}</th>
                  <th v-if="purchaseLine.statue == 'open'" style=" background-color:#f1f1f10f">
                    <div class="button type2" id="uniform-undefined" data-bs-toggle="modal"
                      data-bs-target="#staticBackdrop" @click="
                        getMessage(
                          'Message',
                          'Do you want to Pay this document.[' + purchaseLine.document_no +']',
                          'delelink',
                          purchaseLine
                        )
                      ">
                      <span><input :disabled="false"  type="button" class="type2" style="opacity: 0; width: 54px" tabindex="10025"
                          value="display" /><i class="fa fa-credit-card" aria-hidden="true"></i> Pay</span>
                    </div>
                  </th>
                  <th v-else style="padding:5px 0px !important;color: red;">
                    <div class="button type2" id="uniform-undefined" data-bs-toggle="modal"
                      data-bs-target="#staticBackdrop" @click="
                        getMessage(
                          'Message',
                          'Do you want to Pay this document.[' +
                          purchaseLine.document_no + ']',
                          'delelink',
                           purchaseLine
                        )
                      ">
                      <span><input type="button" class="type2" style="opacity: 0; width: 54px" tabindex="10025"
                          value="display" /><i class="fa fa-credit-card" aria-hidden="true"></i> Pay</span>
                    </div>
                  </th>
                </tr>
              <!-- </thead> -->
              </tbody>
              <vue-countdown style="display: none" v-if="counting" :time="60000" @end="onCountdownEnd"
                v-slot="{ totalSeconds }">Fetch again {{ totalSeconds }} seconds later</vue-countdown>
            </table>
          </div>
          <div class="box-footer-pagination">
            <div class="pagination" style="padding: 5px; width: 100%">
              <div class="button type2" id="uniform-undefined" v-show="btnGenerate" @click="myFunction()"
                style="float: left">
                <span v-if="this.form.statue == 'open'" style="width: 145px"><input type="button" class="type2"
                    tabindex="10025" value="display" style="opacity: 0; width: 54px" /><i class="fas fa-plus"></i>
                  Generate Code</span>
              </div>
              <div style="width: 30%; float: right; background: none; color: #f8f5b4; ">
                <!-- /.card-header -->
              </div>
            </div>
          </div>
        </div>
      </div>
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
        <div class="ui-dialog-content" id="purchaseorder">
          <div class="card">
            <div class="card-body">
              <div class="container mb-5 mt-3 print-size">

                <div style="padding:0 40px; background-color: #fff" >
                  <div class="col-md-12">
                    <div class="text-center">
                      <h3 class="title-purchase">PAYMENT VIEW</h3>
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
                    </div>
                  </div>

                  <div class=" my-2  justify-content-center">
                    <table id="pr-tb">
                      <thead>
                        <tr class="p-bg">
                          <th class="text-center">Document No</th>
                          <th class="text-center">Description</th>
                          <th class="text-center">PaymentMethod</th>
                          <th class="text-center">Total Balance</th>
                          <th class="text-center">Exchan-Rate</th>
                          <th class="text-center" style="width:80px">Tax</th>
                          <th class="text-center">Discount</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr v-for="(purchase, index) in purchases_lines" :key="index">
                          <!-- <td>{{ index + 1 + "." }}</td> -->
                          <td>{{ purchase.document_no }}</td>
                          <td>{{ purchase.description }} </td>
                          <td>{{ purchase.paymentMethod }}</td>
                          <td>{{ purchase.totale_balanec }}{{ purchase.currency_code }}</td>
                          <!-- <td>{{ purchase.unit_price }}{{ purchase.curency_code }}</td> -->
                          <td>{{ purchase.exchane_rate }}</td>
                          <!-- <td>{{ purchase.total_amount }}{{
                            purchase.curency_code
                          }}</td> -->
                          <td>{{ purchase.tax }}</td>
                          <td>{{ purchase.dicount }}</td>
                        </tr>
                      </tbody>
                    </table>

                    <div class="col-container ">
                      <div class="row2-col1 min-hi">
                        <p class="p-mg">Remark/Instructions : </p>
                      </div>
                      <div class="col3 ">
                        <table class="p-table-r">
                          <tr class="p-bg-footer">
                            <th>Total</th>
                            <td style="text-align:center; width: 112px;">{{ total }}{{ currency }}</td>
                          </tr>
                          <tr class="p-bg-footer">
                            <th>Tax</th>
                            <td style="text-align:center; width: 112px;">0{{ currency }}</td>
                          </tr>
                          <tr class="p-bg-footer">
                            <th>Total Amount</th>
                            <td style="text-align:center; width: 112px;">{{ total }}{{ currency }}</td>
                          </tr>
                        </table>

                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xl-8 supplier-padding">
                      <p class="ms-3">Payment Information</p>
                      <ul class="list-unstyled">
                        <li>ABA BANK:<span class="text--color">Mr. Master</span></li>
                        <li>Bank Name:<span class="text--color">Mr. Master</span></li>
                        <li>Bank Account Number: <span class="text--color">001 025 025</span></li>
                      </ul>

                    </div>
                  </div>
                  <hr>


                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <!-- <a class="btn-purchase btn-light text-capitalize" data-mdb-ripple-color="dark"><i
              class="far fa fa-times-circle text-danger"></i> Close</a> -->
          <a class="btn-purchase btn-light text-capitalize border-0" data-mdb-ripple-color="dark" @click="print()"><i
              class="fas fa-print text-primary"></i> Print</a>
          <!-- <div class="button type2" id="uniform-undefined" data-bs-dismiss="modal"><span>No<input  type="button" class="type2" value="No" style="width: 89px; opacity: 0;" onclick="edit_cancel()" tabindex="10008"></span></div>
                    <div class="button type2" @click="print()" :value="G_code" data-bs-dismiss="modal"><span>Yes</span></div> -->
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade ui-modal" id="statiex-import" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticboomId" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content ui-dialog">
        <div class="ui-widget-header">
          <h5 class="modal-title in-header" id="staticBackdropLabel"><i class="fa fa-print" aria-hidden="true"></i> {{
            excel
          }} to Docutment: {{ form.document_no }} , {{ form.description }}</h5>
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
                      <h3 v-if="excel == 'Import'" class="​title-purchase" id="titlered">{{ excel }} {{ exefile }} from
                        Excel</h3>
                      <h3 v-else class="title-purchase" id="titlered">{{ excel }} To Excel</h3>
                    </div>
                  </div>
                  <div class="row my-2 mx-1 justify-content-center table-padding-bot customsroll">
                    <table class="table table-striped table-borderless" id="exceldata">
                      <thead style="background-color:#84B0CA ;" class="text-white">
                        <tr>
                          <th style="width: 5%">No</th>
                          <th style="width: 10%">Document No</th>
                          <th style="width: 10%">Document Type</th>
                          <th style="width: 7%">Product No</th>
                          <th style="width: 7%">Description</th>
                          <th style="width: 7%">Unit Price</th>
                          <th style="width: 7%">Inventory</th>
                          <th style="width: 7%">Unit Code</th>
                          <th style="width: 7%">Total</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr v-for="(purchaseLine, index) in items" :key="items.index">
                          <th v-if="index >= 1" style="width: 5%">{{ index }}</th>
                          <th v-if="index >= 1" style="width: 10%">{{ purchaseLine.document_no }}</th>
                          <th v-if="index >= 1" style="width: 10%">{{ purchaseLine.document_type }}</th>
                          <th v-if="index >= 1" style="width: 7%">{{ purchaseLine.product_no }}</th>
                          <th v-if="index >= 1" style="width: 10%">{{ purchaseLine.description }}</th>
                          <th v-if="index >= 1" style="width: 7%">{{ purchaseLine.unit_price }}{{
                            purchaseLine.curency_code
                          }}
                          </th>
                          <th v-if="index >= 1" style="width: 7%">{{ purchaseLine.inventory }}</th>
                          <th v-if="index >= 1" style="width: 7%">{{ purchaseLine.unit_of_measure_code }}</th>
                          <th v-if="index >= 1" style="width: 7%">
                            {{ purchaseLine.total_amount }}{{ purchaseLine.curency_code }}</th>
                        </tr>
                      </tbody>

                    </table>
                  </div>
                  <div class="row">
                    <div class="col-xl-8 supplier-padding">
                      <p class="ms-3">Payment Information</p>
                      <ul class="list-unstyled">
                        <li class="text-muted">ABA BANK<span class="text--color">Mr. Master</span></li>
                        <li class="text-muted">Bank Name:<span class="text--color">Mr. Master</span></li>
                        <li class="text-muted">Bank Account Number: <span class="text--color">001 025 025</span></li>
                      </ul>
                    </div>
                    <div class="col-xl-8 supplier-padding">
                      <ul class="list-unstyled">
                        <tr>
                          <td class="th-font-bold text-right">Products :</td>
                          <td class="th-font-bold">{{ productline }}</td>
                        </tr>
                        <tr>
                          <td class="th-font-bold text-right">Inventory : </td>
                          <td class="th-font-bold">{{ item }}</td>
                        </tr>
                        <tr>
                          <td class="th-font-bold table-th-width text-right">Total Amount : </td>
                          <td class="th-font-bold">{{ total }}{{ currency }}</td>
                        </tr>
                      </ul>
                    </div>
                  </div>
                  <hr>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <a v-if="excel == 'Import'" class="btn-purchase btn-light text-capitalize" data-bs-dismiss="modal"
            data-mdb-ripple-color="dark" @click="saveprulink()"><i class="fas fa-save"></i> Save Date</a>
          <a v-if="excel == 'Import'" class="btn-purchase btn-light text-capitalize" data-mdb-ripple-color="dark"><i
              class="fas fa-file-excel"></i> {{ excel }} Form excel</a>
          <input v-if="excel == 'Import'" type="file" @change="getExcelData" name="select_file" />
          <a v-else class="btn-purchase btn-light text-capitalize" data-bs-dismiss="modal" data-mdb-ripple-color="dark"
            @click="exportdataExcel()"><i class="fas fa-save"></i> Save Date</a>
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
  <div id="footer">
    <div id="copyright">Copyright (C) healthbook. ALL Right s Researved Edit by Lsky</div>
  </div>
</template>
<script>
import readXlsxFile from 'read-excel-file';
import Header from '../Header.vue'
import moment from "moment";
import * as XLSX from 'xlsx/xlsx.mjs';
import axios from "axios";
export default {
  components: {Header},
  data() {
    return {
      supply_name: "Select Supplyer",
      massege: '',
      pending: false,
      file: null,
      img: "",
      currency: '',
      code: "",
      company: [],
      dateformart: '',
      confirm: "",
      title: "",
      message: "",
      purchases: "",
      exefile: '',
      purchasesCode: "",
      suppliyer: [],
      purchases_lines: [],
      units: [],
      products: [],
      boompros: [],
      boomunits: [],
      btnGenerate: false,
      total: 0,
      item: 0,
      productline: 0,
      form: {
        document_no: "",
        document_type: "",
        description: "",
        suppliyer_code: "",
        curency_code: "",
        inactived: "",
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

    };
  },
  async mounted() {
    this.getPurchaseoOrder();
    this.getcompany();
    this.getsupplyer()
  },
  methods: {
    getPurchaseoOrder() {
      axios.get("/api/v1/paymentvoucher/paymentget/").then((res) => {
        this.purchases_lines = res.data;
      });
    },
    getcompany(){
          axios.get("/api/v1/getSetup/")
            .then((response) => {
             this.company = response.data;
             this.dateformart = moment(new Date()).format('YYYY-MM-DD');
            });
    },
    getsupplyer(){
      axios.get("/api/v1/suppliyers/getdatasub")
            .then((res) => {
              this.suppliyer = res.data;
            })
    },
    getproduct(supplier){
      // window.alert(supplier.sup_name)
      this.supply_name = supplier.sup_name
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
                console.log(element);
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
    }, getMessage(title, messsatetext, confirm, id) {
      this.title = title;
      this.message = messsatetext;
      this.confirm = confirm;
      this.code = id.document_no;
    },
    messagegetconfirm(confirm) {
      if (confirm == "crate") {
        this.btnGenerate_code("crate");
      }
      if (confirm == "delelink") {
        this.$router.push({ name: "paymen", query: { id: this.code }, });
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
    },
  },
  startCountdown: function () {
    this.counting = true;
  },
  onCountdownEnd: function () {
    this.counting = false;
  }
};
</script>