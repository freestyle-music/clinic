<template>
  <div class="wrapper">
    <div class="container-fuild">
      <div id="headTitle">
        <div id="logo"><img alt="Healthbook" height="44" src="img/logo.png" width="70" _mstalt="155922" _msthash="1">
        </div>
        <h1 id="title" _msttexthash="48503" _msthash="2">Company Setting</h1>
      </div>
      <Header />
      <ol id="topicPath">
        <li style="margin-left: 360px;">
          <router-link to="viewproduct"><a href="dashbaord">
              <font style="vertical-align: inherit">
                <font style="vertical-align: inherit">Company Setting</font>
              </font>
            </a>
          </router-link>
        </li>
      </ol>
    </div>
    <div class="search-box">
      <div id="product">
        <!--#contents -->
        <div class="search-box mb-4" id="mb-4">
          <a class="btn-radius bt-pn btn btn-sm" style="float:right;" data-bs-toggle="modal" aria-expanded="false"
            data-bs-target="#alertbell">
            <i class="fas fa-bell" style="font-size:18px; margin-right: 5px;"></i>
            20
          </a>
          <a class="btn-radius bt-pn btn btn-sm" data-bs-toggle="modal" data-bs-target="#staticboomId" tabindex="10028"
            style="float:right; color: #f8f5b4;">
            <i class="fa fa-print" aria-hidden="true" style="padding-right:5px;"></i>
            Print
          </a>
          <h2 class="search-box-title">
            <router-link to="/brands"><a class="btn-radius btn btn-sm" href="#" style="color: #f8f5b4; margin-top: -2px">
                <i class="fa fa-cog" aria-hidden="true"></i>
                Brand
              </a></router-link>
            <router-link to="/unitcode"><a class="btn-radius btn btn-sm" href="#"
                style="color: #f8f5b4; margin-top: -2px">
                <i class="fa fa-cog" aria-hidden="true"></i>
                UnitCode
              </a></router-link>
            <router-link to="/group"><a class="btn-radius btn btn-sm" href="#" style="color: #f8f5b4; margin-top: -2px">
                <i class="fa fa-cog" aria-hidden="true"></i>
                Group Product
              </a></router-link>
            <router-link to="/category"><a class="btn-radius btn btn-sm" href="#"
                style="color: #f8f5b4; margin-top: -2px">
                <i class="fa fa-cog" aria-hidden="true"></i>
                Category
              </a></router-link>
            <router-link to="/currency"><a class="btn-radius btn btn-sm" href="#"
                style="color: #f8f5b4; margin-top: -2px">
                <i class="fa fa-cog" aria-hidden="true"></i>
                Currency
              </a></router-link>
            <router-link to="/paymenMethod"><a class="btn-radius btn btn-sm" href="#"
                style="color: #f8f5b4; margin-top: -2px">
                <i class="fa fa-cog" aria-hidden="true"></i>
                Payment Method
              </a></router-link>
            <router-link to="/serailcode"><a class="btn-radius btn btn-sm" href="#"
                style="color: #f8f5b4; margin-top: -2px">
                <i class="fa fa-cog" aria-hidden="true"></i>
                Serial Code
              </a></router-link>
            <router-link to="/testserviceview"><a class="btn-radius btn btn-sm" href="#"
                style="color: #f8f5b4; margin-top: -2px">
                <i class="fa fa-cog" aria-hidden="true"></i>
                Service Test
              </a></router-link>
            <router-link to="/company"><a class="btn-radius btn btn-sm" href="#" style="color: #f8f5b4; margin-top: -2px">
                <i class="fa fa-cog" aria-hidden="true"></i>
                Company Setup
              </a></router-link>
          </h2>
          <input id="search" name="search" type="hidden" value="1" />
          <div class="search-box-content">
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="tbl_form">
              <tbody>
                <tr>
                  <th style="color:#f8f5b4">Name</th>
                  <td colspan="3">
                    <input class="string_zen clear_text text" id="search_word_simei_s" maxlength="50"
                      name="search_word[simei_s]" type="text" tabindex="10017" style="width:35%;"
                      v-model="form.company_name">
                  </td>
                </tr>
                <tr>
                  <th style="color:#f8f5b4; width: 15%;">Address</th>
                  <td colspan="3">
                    <textarea class="string_zen clear_text text" id="search_word_simei_s" cols="1" rows="1"
                      name="search_word[simei_s]" type="text" tabindex="10017" v-model="form.company_Address"
                      style="width:35%; outline: none;color: #777; border-color:#aaa; border-radius: 3px;">
                        </textarea>
                  </td>
                </tr>
                <tr>
                  <th style="color:#f8f5b4">Phone</th>
                  <td colspan="3">
                    <input style="width: 35%;" class="string_zen clear_text text" id="search_word_jigyosyo_group_name"
                      maxlength="50" name="search_word[jigyosyo_group_name]" type="text" tabindex="10014"
                      v-model="form.company_Phone">
                  </td>
                </tr>
                <tr>
                  <th style="color:#f8f5b4">Email</th>
                  <td colspan="3">
                    <input style="width: 35%;" class="string_zen clear_text text" id="search_word_jigyosyo_group_name"
                      maxlength="50" name="search_word[jigyosyo_group_name]" type="text" tabindex="10014"
                      v-model="form.company_Email">
                  </td>
                </tr>
                <tr>
                  <th width="10%" style="color: rgb(248, 245, 180);">Image</th>
                  <td width="50%">
                    <input type="file" id="myfile" name="myfile" @change="imgUplaod($event)" />
                  </td>
                </tr>
                <tr>
                  <th width="10%" style="color:#f8f5b4">Main Currency</th>
                  <td width="50%">
                    <div class="dropdown d-flex">
                      <button style="width: 35% !important;"
                        class="dropdown-toggle string_zen clear_text text select-menu" type="button"
                        id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" size="50">
                        {{ form.main_Currency }}
                        <i class="fa fa-chevron-down"></i>
                      </button>
                      <div class="dropdown-menu each-drop-menu" aria-labelledby="dropdownMenuButton1">
                        <ul style="list-style: none" class="scrollable-menu">
                          <li v-for="cur in curs" :value="cur" @click="getproductsetting(cur, 'cur')">
                            <div class="menu-item">
                              <p>{{ cur.curency }}</p>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th style="color:#f8f5b4">Product Check</th>
                  <td colspan="3">
                    <input class="string_zen clear_text text" :disabled="true" id="search_word_simei_s" maxlength="50"
                      name="search_word[simei_s]" type="text" tabindex="10017" v-model="form.product_check"
                      style="width:35%;">
                  </td>
                </tr>
              </tbody>
            </table>
            <div class="search-box-footer">
              <div class="button type2" id="uniform-undefined" @click="selectUpdate(form.id)">
                <span><input type="button" value="display" class="type2" style="opacity: 0; width: 54px"
                    tabindex="10025" /><i class="fas fa-file-import"></i>
                  Update</span>
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
                  <th width="5%">Image</th>
                  <th width="10%">Name</th>
                  <th width="10%">Phone</th>
                  <th width="10%">Email</th>
                  <th width="10%">Main Currency</th>
                  <th width="9%">Check</th>
                  <th width="8%">Address</th>
                  <th width="10%"></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="border: medium none">
                    {{ }}
                  </td>
                  <td style="border: medium none">
                    {{ register.company_name }}
                  </td>
                  <td style="border: medium none">
                    {{ register.company_Phone }}
                  </td>
                  <td style="border: medium none">
                    {{ register.company_Email }}
                  </td>
                  <td style="border: medium none">
                    {{ register.main_Currency }}
                  </td>
                  <td style="border: medium none">
                    {{ register.product_check }}
                  </td>
                  <td style="border: medium none">
                    {{ register.company_Address }}
                  </td>
                  <td style="border: medium none; text-align: center">
                    <div style="display: flex;
                            flex-direction: row;
                            justify-content: space-around;
                            align-items: center;
                          ">
                      <div @click="btn_checkEdit(register)" class="button type2">
                        <span><input type="button" value="display" class="type2" style="opacity: 0; width: 54px"
                            tabindex="10025" /><i class="fa fa-edit"></i>Select</span>
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="footer">
    <div id="copyright">Copyright (C) healthbook. ALL Right s Researved Edit by Lsky</div>
  </div>
  <div id="myModal" class="lskymodal">
    <div class="lskymodal-content">
      <p><i class="fa fa-check" aria-hidden="true"></i> {{ message }}</p>
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
              <div class=" mt-3 print-size">
                <div class="row d-flex align-items-baseline">
                  <div class="col-xl-9">
                  </div>
                  <hr>
                </div>
                <div style="padding:0 50px 0 50px">
                  <div class="col-md-12">
                    <div class="text-center">
                      <h3 class="title-purchase">COMPANY REPORT</h3>
                    </div>
                  </div>

                  <div class="col-container">
                    <div class="col1">
                      <p class=" p-bg font-size p-pad">COMPANY NAME</p>
                      <p class="p-mg info-pad">Name :{{ company.company_name }}</p>
                      <p class="p-mg  info-pad">Phone Number :{{ company.company_Phone }}</p>
                      <p class="p-mg info-pad">Email Address :{{ company.company_Email }}</p>
                      <p class="p-mg info-pad">Address :{{ company.company_Address }}</p>
                    </div>
                    <div class="col2">
                      <p class="text-center p-bg font-size p-pad">DATE</p>
                      <p class="text-center p-mg">{{ dateformart }}</p>
                      <p class="text-center p-bg font-size p-pad">TOTAL GROUP</p>
                      <p class="text-center p-mg">{{ register.length }}</p>
                    </div>
                  </div>
                  <div class=" my-2  justify-content-center">
                    <table id="pr-tb">
                      <thead>
                        <tr class="p-bg">
                          <th class="text-center" width="10">No</th>
                          <th class="text-center" width="40">Company Name</th>
                          <th class="text-center" width="20%">Address</th>
                          <th class="text-center" width="20">Phone</th>
                        </tr>
                      </thead>
                      <tbody>
                        <!-- <tr v-for="(category, index) in Categories.data" :key="index"> -->
                          <!-- <td>{{ index + 1 + "." }}</td>
                          <td>{{ category.cat_name }}</td>
                          <td>{{ category.cat_name_2 }}</td>
                          <td>{{ item.inactived }}</td> -->
                        <!-- </tr> -->
                        <!-- <tr v-for="(category,index) in Categories.data" :key="index">
                          <td>{{index + 1 + "."}}</td>
                          <td>{{category.company_name}}</td>
                            <td>{{category.company_Address}}</td>
                            <td>{{category.company_Phone}}</td>
                        </tr> -->
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
          <a v-print="'#purchaseorder'" class="btn-purchase btn-light text-capitalize border-0" data-mdb-ripple-color="dark"><i
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
import print from 'vue3-print-nb';
import { ref, reactive, watch, computed, onMounted } from "vue";
const btnValue1 = ref(false);
const btnValue2 = ref(false);
const disabled = ref(true);
export default {
  components: { Header, pagination },
  directives:{
    print
  },
  data() {
    return {
      curs: [],
      curss: "",
      company:[],
      date: {
        age: "",
        day: "",
        month: "",
        year: ""
      },
      items:[],
      selectid: '',
      photo_path: "",
      brands: [],
      baseURL: '',
      graoups: [],
      category: [],
      suppliyers: [],
      uints: [],
      product: "",
      register: [],

      group_product: '',
      unit: '',
      supplyer: '',
      single_category: '',
      BrandName: '',

      links: [],
      products: [],
      dateformart: "",
      company: [],
      perPage: "",
      currentPage: 0,
      last_page: 1,
      stockcount: 0,
      form: {
        id: "",
        company_name: "",
        company_Address: "",
        company_Phone: "",
        company_Email: "",
        main_Currency: "",
        product_check: "",
        created_by: "",
        delete_by: "",
        updated_at: "",
        created_by: "1",
      },
      checkexcel: [],
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
    this.getunite();
    this.getdatagroup();
    this.getCatName();
    this.getbrands();
    this.getsuppliyer();
    this.getcompany();
    this.getcurn();
    this.baseURL = axios.defaults.baseURL;
    this.getRegister();
    this.selectSetup();
  },
  methods: {
    Addregister() {
      if (this.form.pateinid != "") {
        axios.post("/api/v1/pateint/create/", this.form)
          .then(res => {
            this.getRegister()
            this.checkedActive()
            this.form = {}
          })
      }
      else {
        alert("Please input pateint Id");
      }
    },
    getRegister() {
      axios.get("/api/v1/pateint/index/")
        .then((res) => {
          this.register = res.data
          console.log(this.register)
        })
    },
    getcurn() {
      axios.get("api/v1/curency/getdata")
        .then((res) => {
          this.curs = res.data;
          // this.selectUpdate();
        })
    },
    deleteRegister(id) {
      axios.get("/api/v1/pateint/delete/" + this.form.id)
        // fast delete
        .then(() => {
          this.getRegister()
          this.form = {}
          this.btncheckEdit = "Save";
          this.btncheckdelete = "Search";
        })
    },
    updateRegister(id) {
      console.log(id)
      axios.post("/api/v1/pateint/update/" + id,)
        .then(() => {
          this.getRegister()
        })
    },
    btn_checkEdit(itemss) {
      this.form = itemss;
      this.btncheckEdit = "Update"
      this.btncheckdelete = "Delete"
    },
    updatebt() {
      axios.post("/api/v1/pateint/update/" + this.form.id, this.form)
        .then(reg => {
          this.form = {}
        });
      this.btncheckEdit = "Save";
      this.btncheckdelete = "Search"
    },
    selectdelect(id) {
      this.selectid = id;
    },
    btnsave() {
      if (this.btncheckEdit == "Update") {
        this.updatebt();
      }
      else {
        this.Addregister();
      }
    },
    selectSetup() {
      axios.get("/api/v1/setup/selectsetup/")
        .then((res) => {
          this.register = res.data
        })
    },
    btn_checkEdit(itemss) {
      console.log(this.form.main_Currency),
        this.form = itemss;
      this.getCurrency()
    },
    selectUpdate(id) {
      console.log(this.form.main_Currency),
        axios.post("/api/v1/setup/updatesetup/" + this.form.id, this.form)
          .then(res => {
            this.form = {}
            this.message = "save successful.";
            this.messagebox();
          })
    },
    messagebox() {
      var modal = document.getElementById("myModal");
      modal.style.display = "block";
      setTimeout(() => (modal.style.display = "none"), 2000);
    },
    // active when update
    getproduct(page = 1) {
      axios.get("/api/v1/products/viewpro?page=" + page).then(({ data }) => {
        this.products = data;
        this.products.data.forEach((element) => {
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
    },
    getproductsetting(boom, txt) {
      if (txt == 'stockunit') {
        this.unit = boom.unit_code;
      }
      else if (txt == 'supplier') {
        this.supplyer = boom.sup_name
      }
      else if (txt == 'groupproduct') {
        this.group_product = boom.group_name
      }
      else if (txt == 'category') {
        this.single_category = boom.cat_name
      }
      else if (txt == 'brand') {
        this.BrandName = boom.brand_name
      } else if (txt == 'cur') {
        this.curss = boom.curency
        this.form.main_Currency = this.curss
      }
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
            .then((response) => { });
        }
      });
    },
    getcompany() {
      axios.get("/api/v1/getSetup/")
        .then((response) => {
          this.company = response.data;
          this.dateformart = moment(new Date()).format('YYYY-MM-DD');
        });
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