<template >
  <div class="wrapper" style="overflow: hidden">
    <div id="header">
      <div id="headTitle">
        <div id="logo"><img alt="Healthbook" height="44" src="img/logo.png" width="70" _mstalt="155922" _msthash="1">
        </div>
        <h1 id="title" _msttexthash="48503" _msthash="2">Rescept-Order</h1>
      </div>
      <Header />
      <ol id="topicPath">
        <li style="margin-left:335px">
          <router-link to="menupurchase"><a href="dashbaord">
              <font style="vertical-align: inherit">
                <font style="vertical-align: inherit">Recept-Order</font>
              </font>
            </a>
          </router-link>
        </li>
      </ol>
      <!-- / #header -->
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
              <button class="dropdown-item btn btn-primary" tabindex="10028" @click="saverecept()"><i
                  class="fas fa-edit"></i> Save Recept</button>
            </li>
            <li>
              <!-- <a class="dropdown-item" tabindex="10028"
                href="#"> <i class="fas fa-save"></i> Booking</a> -->

                <button class="dropdown-item btn btn-primary" tabindex="10028" @click=""><i
                  class="fas fa-edit"></i> Booking</button>

            </li>
            <li>
              <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#staticboomId" tabindex="10028" href="#"><i
                  class="fa fa-print" aria-hidden="true"></i> Print</a>
            </li>
          </ul>

          <div class="search-box-title">
            <a class="btn-radius bt-pn btn btn-sm" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdropss"
              tabindex="10028" style="float: left; color: #f8f5b4; margin-top: -2px">
              <i class="fas fa-plus" style="padding-right: 5px; margin-top: -2px">
              </i>
              Add New
            </a>
            <router-link to="/viewrecept"><a class="btn-radius btn btn-sm" href="#"
                style="color: #f8f5b4; margin-top: -2px">
                <i class="fas fa-eye" style="padding-right: 5px"> </i>
                View
              </a></router-link>
          </div>
          <div class="modal fade ui-modal" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog ">
              <div class="modal-content ui-dialog">
                <div class="ui-widget-header">
                  <h5 class="modal-title" id="staticBackdropLabel">
                    <span class="ui-dialog-title" id="ui-dialog-title-modal-edit-dialog">{{ this.title }}</span>
                  </h5>
                  <span class="ui-icon ui-icon-closethick" data-bs-dismiss="modal" aria-label="Close"></span>
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
                  <th width="20%">Document Number</th>
                  <td width="80%">
                    <input :disabled="true" @change="autoUpdateProduct(form)" v-model="form.document_no"
                      class="string_zen_kana clear_text text input_text" style="width:380px" type="text" />
                  </td>
                </tr>
                <tr>
                  <th width="20%">Document Type</th>
                  <td width="80%">
                    <input :disabled="isDisabled" @change="autoUpdateProduct(form)" v-model="form.document_type"
                      class="string_zen_kana clear_text text input_text" style="width:380px" type="text" />
                  </td>
                </tr>
                <tr>
                  <th width="20%">Description</th>
                  <td width="80%">
                    <input :disabled="isDisabled" @change="autoUpdateProduct(form)" v-model="form.description"
                      class="string_zen clear_text text input_text" style="width:380px" type="text" />
                  </td>
                </tr>
                <tr>
                  <th width="20%">Suppliyer</th>
                  <td width="80%">
                    <select :disabled="isDisabled" @change="autoUpdateProduct(form)" v-model="form.suppliyer_code"
                      class="form" style="width: 380px">
                      <option value="">Selete Suppliyer</option>
                      <option v-for="suppliye in suppliyer" :value="suppliye.sup_code" :key="suppliye.id">
                        {{ suppliye.sup_name }}
                      </option>
                    </select>


                    <!-- <div class="dropdown">
                      <button @click="getunit(form)" @onmouseout="prooductboom()"
                        class="dropdown-toggle string_zen clear_text text select-menu" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false" size="50" style="width:380px !important">
                       
                       {{ form.suppliyer_code }}
                       <i class="fa fa-chevron-down"></i>
                      </button>
                      <div class="dropdown-menu each-drop-menu" aria-labelledby="dropdownMenuButton1">
                        <p>
                          <input v-model="txtsearch" @input="searchproduct(txtsearch)"
                            class="string_zen clear_text text search-pro-field" size="50" type="text"/>
                        </p>
                        <ul style="list-style: none" class="scrollable-menu">
                          <li v-for="supply in suppliyer" :value="supply.sup_code" :key="supply.id" @click="getproduct(unit, form, 'unitstock')">
                            <div class="menu-item">
                              <p>{{ supply.sup_name }}</p>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div> -->


                  </td>
                </tr>

                <tr>
                  <th width="20%">Curency Code</th>
                  <td width="80%">
                    <input :disabled="isDisabled" @change="autoUpdateProduct(form)" v-model="form.curency_code"
                      class="string_zen clear_text text input_text" style="width:380px" type="text" />
                  </td>
                </tr>

                <tr>
                  <th width="20%">Inactived</th>
                  <td width="80%">
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
          </div>

        </div>
        <div class="box">
          <div class="box-content">
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="tbl_list">
              <thead>
                <tr>
                  <th style="width: 7%">Product No</th>
                  <th style="width: 10%">Description</th>
                  <th style="width: 7%">Qty Order</th>
                  <th style="width: 7%">Qty Recept</th>
                  <th style="width: 7%">Unit Code</th>
                  <th style="width: 7%">Unit Price</th>
                  <th style="width: 7%">Curency Code</th>
                  <th style="width: 7%">Qty Balance</th>
                  <th style="width: 7%">Total Amount</th>
                  <th style="width: 7%">Issu Date</th>
                  <th style="width: 7%">Expire date</th>
                </tr>
                <tr v-for="purchaseLine in purchases_lines" :key="purchaseLine.index">
                  <th style="padding: 10px">
                    <input :disabled="true" v-model="purchaseLine.document_no" @change="autoUpdatePurline(purchaseLine)"
                      class="clear_text code text" id="jusinsya_code" name="jusinsya_code" type="text" tabindex="10008"
                      style="width: 100%" />
                  </th>
                  <th style="padding: 10px">
                    <input :disabled="true" v-model="purchaseLine.description" @change="autoUpdatePurline(purchaseLine)"
                      class="clear_text code text" id="jusinsya_code" name="jusinsya_code" type="text" tabindex="10008"
                      style="width: 100%" />
                  </th>
                  <th style="padding: 10px">
                    <input :disabled="true" v-model="purchaseLine.inventory_order"
                      @change="autoUpdatePurline(purchaseLine)" class="clear_text code text" id="jusinsya_code"
                      name="jusinsya_code" type="text" tabindex="10008" style="width: 100%" />
                  </th>
                  <th style="padding: 10px">
                    <input v-model="purchaseLine.inventory_recetive" @change="autoUpdatePurline(purchaseLine)"
                      class="clear_text code text" id="jusinsya_code" name="jusinsya_code" type="text" tabindex="10008"
                      style="width: 100%" />
                  </th>
                  <th style="padding: 10px">
                    <div class="dropdown">
                      <button @click="getunit(purchaseLine.product_no)" @onmouseout="prooductboom(purchaseLine)"
                        class="dropdown-toggle string_zen clear_text text" type="button" id="dropdownMenuButton1"
                        style="width: 100%" data-bs-toggle="dropdown" aria-expanded="false" size="50"> {{
                          purchaseLine.unit_of_measure_code }}
                      </button>
                    </div>
                  </th>
                  <th style="padding: 10px">
                    <input :disabled="false" v-model="purchaseLine.unit_price" @change="autoUpdatePurline(purchaseLine)"
                      class="clear_text code text" id="jusinsya_code" name="jusinsya_code" type="text" tabindex="10008"
                      style="width: 100%" />
                  </th>

                  <th style="padding: 10px">
                    <input :disabled="true" v-model="purchaseLine.curency_code" @change="autoUpdatePurline(purchaseLine)"
                      class="clear_text code text" id="jusinsya_code" name="jusinsya_code" type="text" tabindex="10008"
                      style="width: 100%" />
                  </th>
                  <th style="padding: 10px">
                    <input :disabled="true" v-model="purchaseLine.qty_balance" @change="autoUpdatePurline(purchaseLine)"
                      class="clear_text code text" id="jusinsya_code" name="jusinsya_code" type="text" tabindex="10008"
                      style="width: 100%" />
                  </th>
                  <th style="padding: 10px">
                    <input :disabled="true" v-model="purchaseLine.total_amount" @change="autoUpdatePurline(purchaseLine)"
                      class="clear_text code text" id="jusinsya_code" name="jusinsya_code" type="text" tabindex="10008"
                      style="width: 100%" />
                  </th>
                  <th style="padding: 10px">
                    <input :disabled="false" type="date" v-model="(purchaseLine.issu_date)"
                      @change="autoUpdatePurline(purchaseLine)" class="clear_text code text" id="jusinsya_code"
                      name="jusinsya_code" tabindex="10008" />
                  </th>
                  <th style="padding: 10px">
                    <input :disabled="false" type="date" v-model="purchaseLine.exprit_date"
                      @change="autoUpdatePurline(purchaseLine)" class="clear_text code text" id="jusinsya_code"
                      name="jusinsya_code" tabindex="10008" />
                  </th>

                </tr>
              </thead>
              <vue-countdown style="display: none" v-if="counting" :time="60000" @end="onCountdownEnd"
                v-slot="{ totalSeconds }">Fetch again {{ totalSeconds }} seconds later</vue-countdown>
            </table>
          </div>
          <div class="box-footer-pagination">
            <div class="pagination" style="padding: 10px; width: 100%">
              <div class="button type2" id="uniform-undefined" v-show="btnGenerate" @click="myFunction()"
                style="float: left">
                <span style="width: 150px"><input type="button" class="type2" tabindex="10025" value="display"
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
                            <font style="vertical-align: inherit; color: #f8f5b4">Product</font>
                          </th>
                          <td>
                            <input :disabled="true" style="vertical-align: inherit; background: none;  border: none;  "
                              v-model="productline" />
                          </td>
                        </tr>
                        <tr>
                          <th>
                            <font style="vertical-align: inherit; color: #f8f5b4">Item</font>
                          </th>
                          <td>
                            <input :disabled="true" style=" vertical-align: inherit;  background: none; border: none; "
                              v-model="item" />
                          </td>
                        </tr>
                        <tr>
                          <th>
                            <font style="vertical-align: inherit; color: #f8f5b4">Total</font>
                          </th>
                          <td>
                            <input :disabled="true" style="vertical-align: inherit; background: none;border: none; "
                              v-model="this.form.total_amount" />
                          </td>
                        </tr>


                        <tr>
                          <th>
                            <font style="vertical-align: inherit; color: #f8f5b4">Total Amount</font>
                          </th>
                          <td>
                            <input :disabled="true" style="vertical-align: inherit; background: none;border: none; "
                              v-model="this.form.total_amount" />
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
  <div class="modal fade ui-modal " id="staticBackdropss" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropss" style="padding-right: 1px;" aria-modal="true" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content ui-dialog">
        <div class="ui-widget-header add-new-header">
          <h5 class="modal-title" id="staticBackdropLabel">Boom Products : {{ form.product_no }} , {{ form.description }}
          </h5>
          <input :disabled="isDisabled" @change="autoUpdateProduct(form)" v-model="form.description"
            class="string_zen clear_text text input_text" size="50" type="text" />
        </div>
        <div class="box-content" style="padding: 40px 30px ;">
          <table id="pr-tb" style="border: none !important;">
            <thead>
              <tr class="p-bg" id="recept">
                <th class="text-center">Document Num</th>
                <th class="text-center">Document Type</th>
                <th class="text-center" style="width: 196px;">Description</th>
                <th class="text-center" style="width: 196px;">Suppliyer</th>
                <th class="text-center" style="width: 10em;">Curency</th>
                <th class="text-center" style="width: 108px;"></th>
              </tr>
            </thead>
            <tbody >
              <tr class="recept-body" v-for="(purchase, index) in purchases" :key="index">
                <td>{{ purchase.document_no }}</td>
                <td>{{ purchase.document_type }}</td>
                <td>{{ purchase.description }}</td>
                <td>{{ purchase.suppliyer_code }}</td>
                <td>{{ purchase.curency_code }}</td>
                <td>    
                  <div>
                      <div class="button type2" id="uniform-undefined">
                        <span><input @click="getEdit(purchase.document_no)" type="button" value="display"
                              class="type2" style="opacity: 0; width: 54px" tabindex="10025" data-bs-dismiss="modal"
                              aria-label="Close" /><i class="fa fa-edit"></i>Recpt</span>
                      </div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
          <div class="button type2" id="uniform-undefined"><span>Close</span><input type="button" class="type2"
              data-bs-dismiss="modal" aria-label="Close" tabindex="10026" value="clear" style="opacity: 0; width: 63px;">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade ui-modal" id="staticboomId" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticboomId" aria-hidden="true">
    <div class="modal-dialog " id="recept">
      <div class="modal-content ui-dialog">
        <div class="ui-widget-header">
          <h5 class="modal-title in-header" id="staticBackdropLabel"><i class="fa fa-print" aria-hidden="true"></i>
            Print</h5>
          <span class="ui-icon ui-icon-closethick" data-bs-dismiss="modal" aria-label="Close"></span>
        </div>
        <div class="ui-dialog-content" id="purchaseorder">
          <div class="card">
            <div class="card-body">
              <div class="mt-3 print-size">

                <div style="padding:0 40px">
                  <div class="col-md-12">
                    <div class="text-center">
                      <h3 class="title-purchase">RECEPT-ORDER REPORT</h3>
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
                          <th class="text-center">Pro. No</th>
                          <th class="text-center">Product</th>
                          <th class="text-center">Qty-Order</th>
                          <th class="text-center">Qty-Recept</th>
                          <th class="text-center">Unit</th>
                          <th class="text-center">Price</th>
                          <th class="text-center">Currency</th>
                          <th class="text-center">Balance</th>
                          <th class="text-center">Total</th>
                          <th class="text-center">Issu-Date</th>
                          <th class="text-center">Expire-Date</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr v-for="purchaseLine in purchases_lines" :key="purchaseLine.index">
                          <td>{{ purchaseLine.document_no }}</td>
                          <td>{{ purchaseLine.description }}</td>
                          <td>{{ purchaseLine.inventory_order }}</td>
                          <td>{{ purchaseLine.inventory_recetive }}</td>
                          <td>{{ purchaseLine.unit_of_measure_code }}</td>
                          <td>{{ purchaseLine.unit_price }}</td>
                          <td>{{ purchaseLine.curency_code }}</td>
                          <td>{{ purchaseLine.qty_balance }}</td>
                          <td>{{ purchaseLine.total_amount }}</td>
                          <td>{{ purchaseLine.issu_date }}</td>
                          <td>{{ purchaseLine.exprit_date }}</td>
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
  <div id="footer">
    <div id="copyright">Copyright (C) healthbook. ALL Right s Researved Edit by Lsky</div>
  </div>
</template>

<script>
import axios, { Axios } from "axios";
import Header from '../Header.vue'
import moment from "moment";
export default {
  components: { Header },
  data() {
    return {
      total: 0,
      item: 0,
      productline: 0,
      links: [],
      company: [],
      dateformart: '',
      purchases: [],
      purchases_lines: [
        {
          id: "",
          document_no: "",
          document_type: "",
          product_no: "",
          description: "",
          issu_date: "",
          exprit_date: "",
          unit_of_measure_code: "",
          unit_price: "",
          inventory_order: "",
          inventory_recetive: "",
          line_no: "",
          inventory: "",
          total_amount: 0,
          qty_balance: 0,
          amount_balance: 0,
          curency_code: "",
          remark: "",
          created_by: "",
          delete_by: "",
          created_at: "",
          updated_at: "",
        }
      ],
      perPage: "",
      currentPage: 0,
      last_page: 1,
      form: {
        document_no: "",
        document_type: "",
        description: "",
        suppliyer_code: "",
        curency_code: "",
        inactived: "",
        total_amount: 0,
        created_by: "",
        statue: "",
        delete_by: "",
      },
      purchases: '',
      datetime: new Date(),
    };
  },
  mounted() {
    try {
      if (this.$route.query.id.trim() != "undefined") {
        this.purchases = this.$route.query.id;
      }
    } catch (error) {
      this.purchases = "undefined";
    }
    this.getEdit(this.purchases);
    this.getPurchase();
    this.getsuppliyer();
    this.getcompany();
  },
  methods: {
    getPurchase() {
      axios.get("api/v1/receive/getpurchea").then((response) => {
        this.purchases = response.data;
      });
    },
    getcompany() {
      axios.get("/api/v1/getSetup/")
        .then((response) => {
          this.company = response.data;
          this.dateformart = moment(new Date()).format('YYYY-MM-DD');
        });
    },
    getsuppliyer() {
      axios.get("/api/v1/suppliyers/getdatasub").then((response) => {
        this.suppliyer = response.data;
      });
    },
    getEdit(id) {
      if (this.id != "undefined") {
        axios
          .get("api/v1/purchase/edit/purchaseorder/" + id)
          .then((response) => {
            this.form = response.data;
          }),
          axios
            .get("api/v1/purchase/edit/purchaseline/" + id)
            .then((response) => {
              this.purchases_lines = response.data;
              this.purchases_lines.forEach(element => {
                element.inventory = element.inventory;
                element.unit_price = element.unit_price;
                element.inventory_order = element.inventory_order;
                element.total_amount = element.total_amount;
                element.inventory_recetive = element.inventory_order;
              });
              this.sumtotal();
            })
      }
      this.$router.push({ name: "recept", id: this.form.document_no });
    },
    btnDelete(id) {
      axios.post("api/v1/purchase/delete/purchaseorder/" + id).then((res) => {
        this.getPurchase();
      });
    },
    saverecept() {
      axios.post('api/v1/receive/recept/', this.form).then((res) => {
        if (res.data.statue == "successful") {
          this.purchases_lines.forEach(element => {
            axios.post('api/v1/receive/receptlink', element).then((res) => {
              console.log(res.data);
            });
          });
        }

      });
      this.$router.push({ name: "recept" });
    },
    formart2f(number) {
      return new Intl.NumberFormat('en-IN', { maximumSignificantDigits: 2 }).format(number);
    },
    autoUpdatePurline(ProLink) {
      if (parseInt(ProLink.inventory_order) < parseInt(ProLink.inventory_recetive)) {
        if (confirm("Preasse Insert Your Recept valuse Small then Order Valuse \n Product Id : " + ProLink.product_no + " Order :" + ProLink.inventory_order + ">= Recept: " + ProLink.inventory_recetive)) {
          ProLink.inventory_recetive = ProLink.inventory_order;
        } else {
          ProLink.inventory_recetive = ProLink.inventory_order;
        }
      } else {
        try {
          ProLink.qty_balance = 0;
          ProLink.amount_balance = 0;
          ProLink.qty_balance = parseFloat(ProLink.inventory_order) - parseFloat(ProLink.inventory_recetive);
          ProLink.total_amount = parseFloat(ProLink.unit_price) * parseFloat(ProLink.inventory_recetive);
          ProLink.amount_balance = parseFloat(ProLink.unit_price) * parseFloat(ProLink.qty_balance);
          ProLink.total_amount = formart2f(ProLink.total_amount);
          ProLink.amount_balance = formart2f(ProLink.amount_balance);
          ProLink.unit_price = formart2f(ProLink.unit_price);
        } catch (error) {
          console.log(error);
        }
        this.sumtotal();
      }
    },
    sumtotal() {
      this.productline = 0; this.item = 0; this.form.total_amount = 0;
      this.purchases_lines.forEach(element => {
        try {
          this.productline += 1;
          this.item += parseFloat(element.inventory_recetive);
          this.form.total_amount += parseFloat(element.total_amount);
        } catch (error) {

        }
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
  }
}
</script>