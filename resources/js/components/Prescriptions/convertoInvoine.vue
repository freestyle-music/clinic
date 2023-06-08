<template >
  <div class="wrapper" style="overflow: hidden">
    <div class="container-fuild">
      <div id="header">
        <div id="headTitle">
          <div id="logo"><img alt="Healthbook" height="44" src="img/logo.png" width="70" _mstalt="155922" _msthash="1">
          </div>
          <h1 id="title" _msttexthash="48503" _msthash="2">ConvertIntoInvoice</h1>
        </div>
        <Header />
        <ol id="topicPath">
          <li style="margin-left:380px">
            <router-link to="menupurchase"><a href="dashbaord">
                <font style="vertical-align: inherit">
                  <font style="vertical-align: inherit">ConvertIntoInvoice</font>
                </font>
              </a>
            </router-link>
          </li>
        </ol>
        <!-- / #header -->
      </div>
    </div>
    <div class="search-box">
      <div id="purchase">
        <!--#contents -->
        <div class="search-box mb-4">
          <div class="search-box-title">
            <a class="btn-radius btn btn-sm" data-bs-toggle="modal" data-bs-target="#staticboomId" tabindex="10028"
              href="#" style="margin-top: -2px; position: absolute; right:30px">
              <i class="fa fa-print"></i>
              Print
            </a>
            <a v-if="this.form.statue == 'open'" @click="gettoRecpt()" class="btn-radius btn btn-sm" href="#"
              style="color: #f8f5b4; margin-top: -2px">
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
                  <th width="10%">Prescription ID</th>
                  <td width="50%">
                    <p :disabled="true" class="string_zen clear_text text input_text p-lable" style="width:380px"
                      type="text">{{ form.jusinsya_id }} </p>
                  </td>
                </tr>
                <tr>
                  <th width="10%">Patient ID</th>
                  <td width="50%">
                    <p :disabled="true" class="string_zen clear_text text input_text p-lable" style="width:380px"
                      type="text">{{ form.id }} </p>
                  </td>
                </tr>
                <tr>
                  <th width="10%">Patient Name</th>
                  <td width="50%">
                    <p :disabled="true" class="string_zen clear_text text input_text p-lable" style="width:380px"
                      type="text">{{ form.simei_s }} {{ form.simei_m }}</p>
                  </td>
                </tr>
                <tr>
                  <th width="10%">Patient Name (Eng)</th>
                  <td width="50%">
                    <p :disabled="true" class="string_zen clear_text text input_text p-lable" style="width:380px"
                      type="text">{{ form.simei_roma_s }} {{ form.simei_roma_m }}</p>
                  </td>
                </tr>

                <tr>
                  <th width="10%">Tax (%)</th>
                  <td width="50%">
                    <input @change="autoUpdateProduct(form)" v-model="form.tax"
                      class="string_zen clear_text text input_text" style="width : 380px" type="number" />
                  </td>
                </tr>
                <tr>
                  <th width="10%">Discount (%)</th>
                  <td width="50%">
                    <input @change="autoUpdateProduct(form)" v-model="form.discount"
                      class="string_zen clear_text text input_text" style="width : 380px" type="number" />
                  </td>
                </tr>
                <tr>
                  <th width="10%">Date of Issue</th>
                  <td width="50%">
                    <p :disabled="true" class="string_zen clear_text text input_text p-lable" style="width:380px"
                      type="text">{{ form.publish_ymd }}</p>

                  </td>
                </tr>
                <tr>
                  <th width="10%">Status</th>
                  <td width="50%">
                    <p :disabled="true" class="string_zen clear_text text input_text p-lable" style="width:380px"
                      type="text">{{ form.status }}</p>
                  </td>
                </tr>
                <tr>
                  <th width="10%">Currency</th>
                  <td width="50%">
                    <p :disabled="true" class="string_zen clear_text text input_text p-lable" style="width:380px"
                      type="text">{{ company.main_Currency }}</p>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="search-box-footer" style=" background: #094e59e0; ">
            <div @click="gotback()" class="button type2 routebg" id="uniform-undefined" >
              <span data-bs-toggle="modal" data-bs-target="#statiex-import" tabindex="10028"><input type="button"
                  value="display" class="type2" style="opacity: 0; width: 54px" tabindex="10025" /><i
                  class="fa fa-arrow-left" aria-hidden="true"></i> Back</span>
              </div>
            <div v-if="form.status !='close'" class="button type2" id="uniform-undefined">
              <span @click="getpayment()" tabindex="10028"><input type="button" value="display" class="type2"
                  style="opacity: 0; width: 54px" tabindex="10025" /><i class="fa fa-credit-card"></i> Pay</span>
            </div>
            <span class="marker"></span>
          </div>
        </div>

        <div class="box">
          <div class="box-content" id="excell">
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="tbl_list">
              <thead>
                <tr class="excellcolor-trhead">
                  <th class="excellcolor-trhead" style="width: 7%">Product No</th>
                  <th class="excellcolor-trhead" style="width: 10%">Description</th>
                  <th class="excellcolor-trhead" style="width: 7%">Unit Price</th>
                  <th class="excellcolor-trhead" style="width: 7%">Inventory</th>
                  <th class="excellcolor-trhead" style="width: 7%">Unit Code</th>
                  <th class="excellcolor-trhead" style="width: 7%">Total Amount</th>
                  <th class="excellcolor-trhead" style="width: 7%">Curency Code</th>
                </tr>
                <tr v-for="purchaseLine in purchases_lines" :key="purchaseLine.index">
                  <th>
                    <input :disabled="true" v-model="purchaseLine.product_no" @change="autoUpdatePurline(purchaseLine)"
                      class="clear_text code text" id="jusinsya_code" name="jusinsya_code" type="text" tabindex="10008"
                      style="min-width: 10em; width:95%" />

                  </th>
                  <th>
                    <input :disabled="true" v-model="purchaseLine.description" @change="autoUpdatePurline(purchaseLine)"
                      class="clear_text code text" id="jusinsya_code" name="jusinsya_code" type="text" tabindex="10008"
                      style="min-width: 10em; width:95%" />
                  </th>
                  <th>
                    <input :disabled="true" v-model="purchaseLine.unit_price" @change="autoUpdatePurline(purchaseLine)"
                      class="clear_text code text" id="jusinsya_code" name="jusinsya_code" type="text" tabindex="10008"
                      style="min-width: 4em; width:90%" />
                  </th>
                  <th>
                    <input :disabled="true" v-model="purchaseLine.amount" @change="autoUpdatePurline(purchaseLine)"
                      class="clear_text code text" id="jusinsya_code" name="jusinsya_code" type="text" tabindex="10008"
                      style="min-width: 4em; width:90%" />
                  </th>
                  <th>
                    <input :disabled="true" v-model="purchaseLine.unit_code" @change="autoUpdatePurline(purchaseLine)"
                      class="clear_text code text" id="jusinsya_code" name="jusinsya_code" type="text" tabindex="10008"
                      style="min-width: 10em; width:95%" />

                  </th>
                  <th>
                    <input :disabled="true" v-model="purchaseLine.total_amount" @change="autoUpdatePurline(purchaseLine)"
                      class="clear_text code text" id="jusinsya_code" name="jusinsya_code" type="text" tabindex="10008"
                      style="width: 95%; margin-left: 0px !important;" />
                  </th>

                  <th>
                    <input :disabled="isDisabled" v-model="purchaseLine.curency_code"
                      @change="autoUpdatePurline(purchaseLine)" class="clear_text code text" id="jusinsya_code"
                      name="jusinsya_code" type="text" tabindex="10008" style="width: 95%" />
                  </th>
                </tr>
              </thead>
              <vue-countdown style="display: none" v-if="counting" :time="60000" @end="onCountdownEnd"
                v-slot="{ totalSeconds }">Fetch again {{ totalSeconds }} seconds later</vue-countdown>
            </table>
          </div>
          <div class="box-footer-pagination">
            <div class="pagination" style="padding: 5px; width: 100%">
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
                            <font style="vertical-align: inherit; color: #f8f5b4" class="pro">Product</font>
                          </th>
                          <td>
                            <p style=" vertical-align: inherit;  background: none; border: none; ">{{
                              formatPrice(productline, 'currency') }}</p>
                          </td>
                        </tr>
                        <tr>
                          <th>
                            <font style="vertical-align: inherit; color: #f8f5b4">Item</font>
                          </th>
                          <td>
                            <p style=" vertical-align: inherit;  background: none; border: none; ">{{
                              formatPrice(item, 'currency') }}</p>
                          </td>
                        </tr>
                        <tr>
                          <th>
                            <font style="vertical-align: inherit; color: #f8f5b4">Total</font>
                          </th>
                          <td>
                            <p style=" vertical-align: inherit;  background: none; border: none; ">{{
                              formatPrice(total, currency) }}</p>
                          </td>
                        </tr>
                        <tr>
                          <th>
                            <font style="vertical-align: inherit; color: #f8f5b4">Tax</font>
                          </th>
                          <td>
                            <p style=" vertical-align: inherit;  background: none; border: none; ">{{
                              formatPrice(form.tax, 'o') }}</p>

                          </td>
                        </tr>
                        <tr>
                          <th>
                            <font style="vertical-align: inherit; color: #f8f5b4">Discount</font>
                          </th>
                          <td>
                            <p style=" vertical-align: inherit;  background: none; border: none; ">{{
                              formatPrice(form.discount, 'currency') }}</p>
                          </td>
                        </tr>
                        <tr>
                          <th>
                            <font style="vertical-align: inherit; color:#f8f5b4"> Total Amount</font>
                          </th>
                          <td>
                            <p style=" vertical-align: inherit;  background: none; border: none; ">{{
                              formatPrice(total, currency) }}</p>
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
            <div class="card-body" style="margin-left:auto; margin-right:auto">
              <div class="mb-5 mt-3 print-size">
                <div style="padding: 0 80px">
                  <div class="col-md-12">
                    <div class="text-center">
                      <h3 class="title-purchase">PRESCRIPTION INVOICE</h3>
                    </div>
                  </div>

                  <div class="col-container">
                    <div class="col1">
                      <p class=" p-bg font-size p-pad">COMPANY NAME</p>
                      <p class="p-mg info-pad">Name : {{ company.company_name }}</p>
                      <p class="p-mg  info-pad">Phone Number : {{ company.company_Phone }}</p>
                      <p class="p-mg info-pad">Email Address : {{ company.company_Email }}</p>
                      <p class="p-mg info-pad">Address : {{ company.company_Address }}</p>
                      <p class=" p-bg font-size p-pad">PATIENT'S NAME</p>
                      <p class="p-mg info-pad">名前 :{{ form.simei_s }} {{ form.simei_m }}</p>
                    </div>
                    <div class="col2">
                      <p class="text-center p-bg font-size p-pad">DATE</p>
                      <p class="text-center p-mg">{{ dateformart }}</p>
                      <p class="text-center p-bg font-size p-pad">INVOICE NO.</p>
                      <p class="text-center p-mg">{{ purchases }}</p>
                      <p class="text-center p-bg font-size p-pad">CUSTOMER NO.</p>
                      <p class="text-center p-mg">{{ form.jusinsya_id }}</p>
                      <p class="text-center p-bg font-size p-pad">PUBLISH DATE</p>
                      <p class="text-center p-mg">{{ form.publish_ymd }}</p>
                    </div>
                  </div>



                  <div class=" my-2  justify-content-center">
                    <table id="pr-tb">
                      <thead>
                        <tr class="p-bg">
                          <th class="text-center" style="width:45px">No</th>
                          <th class="text-center" style="width:155px">Product No</th>
                          <th class="text-center" style="width:165px">Description</th>
                          <th class="text-center" style="width:60px">Qty</th>
                          <th class="text-center" style="width:80px">Unit</th>
                          <th class="text-center" style="width:10em;">Unit Price</th>
                          <th class="text-center" style="width:9.15em">Amount</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr v-for="(purchase, index) in purchases_lines" :key="index">
                          <td>{{ index + 1 + "." }}</td>
                          <td>{{ purchase.product_no }}</td>
                          <td>{{ purchase.description }}</td>
                          <td>{{ purchase.amount }}</td>
                          <td>{{ purchase.unit_code }}</td>
                          <td>{{ formatPrice(purchase.unit_price, currency) }}</td>
                          <td>{{ formatPrice(purchase.total_amount, currency) }}</td>
                        </tr>
                      </tbody>
                    </table>

                    <div class="col-container">
                      <div class="row2-col1 min-hi">

                      </div>
                      <div class="col3 ">
                        <table class="p-table-r">
                          <tr class="p-bg-footer">
                            <th>Total</th>
                            <td style="padding-left:5px;width:128px ">{{ formatPrice(total, currency) }}</td>
                          </tr>
                          <tr class="p-bg-footer">
                            <th>Tax</th>
                            <td style="padding-left:5px ;width:128px">{{ formatPrice(0, currency) }}</td>
                          </tr>
                          <tr class="p-bg-footer">
                            <th>Total Amount</th>
                            <td style="padding-left:5px; width:128px">{{ formatPrice(total, currency) }}</td>
                          </tr>
                        </table>

                      </div>
                    </div>

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

  <div id="payment-model" class="papayment-model" v-if="form.status !='close'">
    
    <div class="b-ground">
      <div>
        <div class="text">
          <div style="display: flex; justify-content: space-between; margin: 0 20px;">
            <p class="total-pay">Total Amount</p>
            <!-- <button @click="closePayment()" class="btn-close">X</button> -->
            <span class="ui-icon ui-icon-closethick" @click="closePayment()"></span>
          </div>
          <span v-if="currency =='USA' ">$ {{ formatPrice(total) }}</span>
          <span v-else>{{ formatPrice(total, currency) }}</span>
          <div class="exchange-payment">
          <span v-if="!cur == 'KHR'">1.00{{ currency }} = {{ formatPrice(raterail, form.curency_code)}}</span>
          <span v-else>{{ formatPrice(1, currency) }} = ៛{{ formatPrice(raterail, form.curency_code) }}</span>
        </div>
      </div>
      </div>

      <!-- <div class="exchange-payment">
        <span v-if="!cur == 'KHR'">Exchange Rate 1.00{{ currency }} = {{ formatPrice(raterail, form.curency_code)
        }}</span>
        <span v-else>Exchange Rate {{ formatPrice(1, currency) }} = ៛{{ formatPrice(raterail, form.curency_code) }}</span>
      </div> -->
      <!-- <div class="exchange">
        <span>Total Amount </span><span>{{ formatPrice(total, currency) }}</span>
      </div> -->
      <p class="chos-method">Choose the payment methods below</p>
      <div class="patmentthod">
        <button v-for="(unit, index) in units " :key=index class="btn-form" @click="getclick(unit.paymentmethod_code)"
          style="color:#f7f7f7;">{{ unit.paymentmethod_code }}</button>
      </div>
      <div class="payment-input">
        <div class="paydiv">
            <p class="p-input">Currency</p>
            <div class="pay-input">
            <p type="text-form" style="width: 41%;" class="pay-to paycash" name="Payment to Amount" placeholder="0.00">{{
                formatPrice(amount, currency) }} 
            </p>
            <p v-if="!cur == 'kHR'" type="text-form" style="width: 41%;" class="pay-to paycash" name="Payment to Amount"
                placeholder="0.00">{{formatPrice(amount2, form.curency_code) }}
            </p>
            <p v-else type="text-form" style="width: 41%;" class="pay-to paycash" name="Payment to Amount">៛{{
                formatPrice(amount2, form.curency_code) }} 
            </p>
          </div>
        </div>

        <div v-if="paymentmethodselect == 'Cash'" class="paydiv">
          <p class="p-input">Pay amount</p>
          <div class="pay-input">
            <input :disabled="false" type="number" @change="payOne()" style="width: 41%;" class="pay-to" v-model="pay"
                name="Payment to Amount" placeholder="USA">
            <input :disabled="false" type="number" style="width: 41%;" @change="paytwo()" class="pay-to" v-model="pay2"
                name="" placeholder="Riel">
          </div>
        </div>
        <div v-if="paymentmethodselect == 'Cash'" class="paydiv">
          <p class="p-input">Change</p>
          <div class="pay-input">
          <p type="text-form" style="width: 41%;" class="pay-to paycash" name="Payment to Amount" placeholder="0.00">
              {{formatPrice(cash, currency) }} 
          </p>
          <p v-if="!cur == 'kHR'" type="text-form" style="width: 41%;" class="pay-to paycash" name="Payment to Amount"
              placeholder="0.00">{{formatPrice(cash2, form.curency_code) }} 
          </p>
          <p v-else type="text-form" style="width: 41%;" class="pay-to paycash" name="Payment to Amount">៛{{ formatPrice(cash2, form.curency_code) }}</p>
        </div>
        </div>
      </div>
      <button class="btn-pay " style="color:aliceblue;" @click="paymentvouchor()"> <i class="fa fa-credit-card"></i> Pay
        Now</button>
    </div>
    
  </div>
</template>
<script>






import readXlsxFile from 'read-excel-file';
import * as XLSX from 'xlsx/xlsx.mjs';
import moment from "moment";
import axios from "axios";
import Header from '../Header.vue'
export default {
  components: { Header },
  data() {
    return {
      cur: 'KHR',
      pending: false,
      file: null,
      paymentmethodselect: 'Cash',
      img: "",
      amount: 0,
      amount2: 0,
      pay: 0,
      pay2: 0,
      cash: 0,
      cash2: 0,
      currency: 'USD',
      company: [],
      brands: [],
      payment: {
        document_no :'',
        totale_balanec :'',
        exchane_rate :'',
        currency_code :'',
        paymentMethod :'ABA',
        exchane_currency :'',
        tax:0,
        dicount: 0,
        sub_code:'',
      },
      dateformart: "",
      raterail: 0,
      code: "",
      confirm: "",
      title: "",
      message: "",
      purchases: "",
      exefile: '',
      purchasesCode: "",
      suppliyer: [],
      getsuppliyerviews: [],
      purchases_lines: [],
      user: [],
      units: [],
      products: [],
      units: [],
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
        exchangerate: 0,
        curency_code: "USA",
        inactived: "",
        status:'',
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
    try {
      if (this.$route.query.id.trim() != "undefined") {
        this.purchases = this.$route.query.id;
      }
    } catch (error) {
      this.purchases = "undefined";
    }
    this.getUnit();
    this.getsuppliyer();
    this.getProduct();
    this.purchases_lines = null;
    this.getcompany();
    this.getechangerage();
  },
  methods: {
    sumTotal(totals) {
      this.total = 0;
      this.item = 0;
      this.productline = 0;
      totals.forEach((element) => {
        this.productline += 1;
        this.item += parseFloat(element.amount);
        this.total += parseFloat(element.total_amount);
        this.currency = element.curency_code;
      });

    },
    getechangerage() {
      axios.get("api/v1/exchangerate/index/").then((res) => {
        var ix = 0;
        this.brands = res.data;
        this.brands.forEach(element => {
          if (element.main_curency_no != null && ix < 1) {
            ix++;
            this.currency = element.main_curency_no;
          }
        });
      });

    },
    getbancePayment(valeu) {
      alert(valeu)
    },
    getcompany() {
      axios.get("/api/v1/getSetup/")
        .then((response) => {
          this.company = response.data;
          this.dateformart = moment(new Date()).format('YYYY-MM-DD');
        });
    },
    gettoRecpt() {
      this.$router.push({
        name: "recept",
        query: { id: this.purchases },
      });
    },
    getPurchaseoOrder() {
      axios.get("api/v1/purchase/" + this.purchases).then((res) => {
        this.form = res.data;
        console.log(res.data);
      });
    },
    btnGenerate_code($status) {
      this.isDisabled = false;
      this.btnGenerate = true;
      this.crateNewsProduct();
    },
    myFunction(val) {
      axios
        .post("api/v1/purchase/addrow/purchaseline/" + this.purchases)
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
      axios.get("api/v1/prescription/preselectData/" + this.purchases).then((res) => {
        this.form = res.data;
        axios.get("/api/v1/prescription/getprescriptionDetail/" + this.purchases).then((res) => {
          this.purchases_lines = res.data;
          this.purchases_lines.forEach(element => {
            element.total_amount = parseFloat(element.unit_price) * parseFloat(element.amount);
            element.curency_code = this.company.main_Currency;
          });
          this.sumTotal(this.purchases_lines)
        });
        this.form.tax = 0;
        this.form.discount = 0;
      });
    },
    getclick(value) {
      this.paymentmethodselect = value;
    },
    getUnit() {
      axios.get("/api/v1/unitcode/getData").then((response) => {
        this.units = response.data;
      });
    },
    getsuppliyer() {
      axios.get("api/v1/suppliyers/getdatasub").then((response) => {
        this.suppliyer = response.data;
      });
    },
    getsuppliyerview() {
      axios.get("/api/v1/purchase/purchesesup/" + this.purchases)
        .then((response) => {
          this.getsuppliyerviews = response.data[0];
          console.log(this.getsuppliyerviews);
        });
    },
    getuser() {
      axios.get("/api/v1/purchase/purcheseuser/" + this.purchases)
        .then((response) => {
          this.user = response.data[0];
          console.log(this.user);
        });
    },
    prooductboom() {
      axios.get('/api/v1/getproductboom/' + this.products)
        .then((response) => {
          this.boompros = response.data;
        })
    },
    crateNewsProduct() {
      axios.post("/api/v1/purchase/store/").then((response) => {
        this.form = response.data;
        this.form.forEach((element) => {
          this.form.document_no = element.document_no;
          this.purchases = element.document_no;
          this.getEdite();
        });
      });
    },
    getEdite() {
      if (this.purchases.trim() != "undefined") {
        axios
          .get("api/v1/purchase/edit/purchaseorder/" + this.purchases)
          .then((response) => {
            this.form = response.data;
            this.isDisabled = false;
          }),
          axios
            .get("api/v1/purchase/edit/purchaseline/" + this.purchases)
            .then((response) => {
              this.purchases_lines = response.data;
              // this.sumItem(response.data);
              this.sumTotal(response.data);
              this.btnGenerate = true;
            });
      }
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
      axios.get('/api/v1/purchase/search/' + txt)
        .then((response) => {
          this.boompros = response.data;
        });
    },
    getproduct(boom, product, txt) {
      if (txt == 'boomproducr') {
        product.product_no = boom.product_no;
        product.description = boom.description;
        this.autoUpdatePurline(product);
      }
      if (txt == 'boomunit') {
        product.unit_of_measure_code = boom.variant_unit_of_measure_code;
        this.autoUpdatePurline(product);
      }
      if (txt == 'linkunit') {
        product.unit_of_measure_code = boom.variant_unit_of_measure_code;
        product.unit_price = boom.unit_price;
        product.curency_code = boom.curency_code;
        this.autoUpdatePurline(product);
      }
    },
    prooductboom() {
      axios.get('/api/v1/getproductboom/' + this.products)
        .then((response) => {
          this.boompros = response.data;
        })
    },
    autoUpdatePurline(purline) {
      purline.total_amount = parseFloat(purline.inventory) * parseFloat(purline.unit_price);
      axios.post("/api/v1/purchase/update/purchaseline/" + purline.document_no, purline)
        .then((res) => {
          this.sumTotal(res.data);
          this.purchases_lines = res.data;
          this.inventory = 0;
        });
    },
    autoUpdateProduct(purform) {
      if (purform.document_no != "") {
        axios
          .post(
            "api/v1/purchase/update/purchaseorder/" + purform.document_no,
            purform
          )
          .then((response) => {
            this.purchases_lines = response.data;
          });
      }
    },
    getboomnit(proid) {
      axios.post('/api/v1/products/getboomline/' + proid)
        .then((response) => {
          this.uints = response.data;
          console.log(response.data);
        })
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
    },

    getpayment() {
      var modal = document.getElementById("payment-model");
      modal.style.display = "block";
      this.amount = this.total;
      this.brands.forEach(element => {
        if (element.status == "two") {
          this.raterail = element.exchange_rate.replace(",", "");
          this.form.curency_code = element.curency_no;
          this.cur = element.curency_no.trim();
        }
        this.amount2 = this.amount * parseFloat(this.raterail);
      });
      this.cur = 'KHR';
    },
    payOne() {
      var x = 0;
      x = this.amount - this.pay;
      this.pay2 = x * parseFloat(this.raterail);
      if ((this.pay) > this.amount) {
        this.pay2 = 0;
        this.cash = (this.pay) - this.amount;
        this.cash2 = this.cash * parseFloat(this.raterail);
      } else {
        this.cash = this.cash2 = 0;
      }
    },
    paytwo() {
      var x = 0;
      if ((this.pay + this.pay2 / this.raterail) > this.amount) {
        if (this.pay2 / this.raterail > this.amount) {
          x = (this.pay2 / this.raterail) - this.amount;
          this.pay = 0;
        } else {
          x = (this.pay + this.pay2 / this.raterail) - this.amount;
        }

      } else {
        this.pay = this.amount - (this.pay2 / this.raterail);
        x = 0;
      }
      this.cash = x;
      this.cash2 = x * this.raterail;
    },
    closePayment() {
      var modal = document.getElementById("payment-model");
      modal.style.display = "none";
    },
    getUnit() {
      axios.get("/api/v1/paymentvoucher/getPaymenmethod/").then((response) => {
        this.units = response.data;
      });
    },
    getchagevalue(valeu) {
      // this.brands.forEach(element => {
      //   if (element.curency_no == valeu) {
      //     this.exchangerate = element.exchange_rate;
      //         var xtotale = 0;
      //     try {
      //       xtotale = this.total * parseFloat(this.exchangerate.replace(",", ""));
      //     } catch (error) {
      //       xtotale = this.total * parseFloat(this.exchangerate);
      //     }
      //     alert(this.exchangerate)
      //     this.amount = xtotale;
      //     if (this.amount == 0) { this.amount = this.total_amount; }
      //     this.form.exchane_currency = this.currency;
      //     this.form.ex_totale_balanec = this.amount;
      //   }
      // });
      this.brands.forEach(element => {
        if (element.curency_no == valeu) {
          this.exchangerate = element.exchange_rate;
        }
      });

    },
    formatPrice(value, cur) {
      if (cur == "KHR") cur = "r";
      try {
        var formatter = new Intl.NumberFormat('en-US', {
          style: 'currency',
          currency: cur,
          minimumFractionDigits: 2
        });
        return formatter.format(value);
      } catch (error) {
        var formatter = new Intl.NumberFormat('en-US', {
          minimumFractionDigits: 2
        });
        return formatter.format(value);
      }
    },
    paymentvouchor() {
      this.payment.document_no = this.form.id;
      this.payment.totale_balanec = this.total;
      this.payment.exchane_rate = this.raterail;
      this.payment.currency_code = this.currency;
      this.payment.paymentMethod = this.paymentmethodselect;
      this.payment.exchane_currency = this.cur;
      this.payment.tax = 0;
      this.payment.dicount = 0;
      this.payment.sub_code = '';
      axios.post('/api/v1/prescription/paymentVocher/' + this.form.id, this.payment)
        .then((response) => {
          console.log(response.da);
          location.reload();
        })
    },
    gotback(){
      this.$router.push({ name: "prescriptions"});
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