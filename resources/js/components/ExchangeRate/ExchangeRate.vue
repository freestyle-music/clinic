<template>
  <div class="wrapper">
    <div class="container-fuild">
      <div id="headTitle">
      <div id="logo"><img alt="Healthbook" height="44" src="img/logo.png" width="70" _mstalt="155922" _msthash="1">
      </div>
      <h1 id="title" _msttexthash="48503" _msthash="2">Exchange-Rate</h1>
    </div>
      <Header />
      <ol id="topicPath">
        <li>
          <router-link to="productsetting">
            <a href="dashbaord">
              <font style="vertical-align : inherit">
                <font style="vertical-align : inherit">
                  Exchange-Rate
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
        <div class="search-box">
          <a class="btn-radius bt-pn btn btn-sm" data-bs-toggle="dropdown" aria-expanded="false"
            style="float:right; color: #f8f5b4;">
            <i class="fas fa-plus" style="padding-right:5px;">
            </i>
            Menu
          </a>
             <ul class="dropdown-menu">
            <li>
              <a @click="getsuppliyerview()" class="dropdown-item btn btn-primary" data-bs-toggle="modal"
                data-bs-target="#staticboomId" tabindex="10028"><i class="fa fa-print" aria-hidden="true"></i> Print</a>
            </li>
            <li>
              <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#staticBackdropss" tabindex="10028"
                href="#"><i class="fas fa-file-excel"></i> To Excel</a>
            </li>
            <li>
              <a class="dropdown-item btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdropss"
                tabindex="10028"><i class="fas fa-edit"></i> Release</a>
            </li>
          </ul>
         
          <h2 class="search-box-title">
            Search
            <input name="search" type="search" id="search" class="text" v-model="search"/>
          </h2>
          <input id="search" name="search" type="hidden" value="1" />
             <div>
            <div>
              <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" >
                <div class="modal-dialog smallpopup" id="sup">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="staticBackdropLabel">
                        Exchange Rate : {{ MainCurrency }}
                      </h5>
                      <span class="ui-icon ui-icon-closethick" data-bs-dismiss="modal" aria-label="Close"></span>
                    </div>
                    <div style="margin: 0; padding: 10px; display: inline">
                      <table width="100%" border="0" cellpadding="0" cellspacing="0" class="tbl_search">
                        <tbody>
                          <tr>
                            <th width="40%">Currency code</th>
                            <td width="60%">
                              <select @change="autoUpdateProduct(form)" v-model="form.curency_no" class="form" style="width: 177px" >
                                <option v-for="unit in Currencys" :value="unit.curency_no">
                                  {{ unit.curency_no }}
                                </option>
                              </select>

                              <!-- <div class="dropdown">
                                <button @click="getunit(form)" @onmouseout="prooductboom()"
                                  class="dropdown-toggle string_zen clear_text text select-menu" type="button" id="dropdownMenuButton1"
                                  data-bs-toggle="dropdown" aria-expanded="false" size="50" style="width:177px !important">
                                
                                {{ form.suppliyer_code }}
                                <i class="fa fa-chevron-down"></i>
                                </button>
                                <div class="dropdown-menu each-drop-menu" aria-labelledby="dropdownMenuButton1">
                                  <p>
                                    <input v-model="txtsearch" @input="searchproduct(txtsearch)"
                                      class="string_zen clear_text text search-pro-field" size="50" type="text"/>
                                  </p>
                                  <ul style="list-style: none" class="scrollable-menu">
                                    <li v-for="currency in Currencys" :value="currency.curency_no"  @click="getproduct(unit, form, 'unitstock')">
                                      <div class="menu-item">
                                        <p>{{ currency.curency_no }}</p>
                                      </div>
                                    </li>
                                  </ul>
                                </div>
                                </div> -->


                            </td>
                          </tr>

                          <tr>
                            <th width="40%">Exchange rate</th>
                            <td width="60%">
                              <input class="string_zen_kana clear_text text" id="brand_name_2"
                                maxlength="50" name="brand_name_2" v-model="form.exchange_rate"
                                type="text" tabindex="10001" style="width:177px"/>
                            </td>
                          </tr>

                          <tr>
                            <th width="40%">Inactived</th>
                            <td width="60%">
                              <div class="selector" id="inactivced">
                                <span>{{ form.inactived }}</span>
                                <select  id="inactivced" name="inactivced" v-model="form.inactived" tabindex="10003"
                                  style="min-width: 51px;  opacity: 0;  width: 80px; ">
                                  <option value="Yes">Yes</option>
                                  <option value="No">No</option>
                                </select>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="modal-footer">
                      <div class="button type2" id="uniform-undefined">
                        <span>{{ this.bt1 }}</span>
                        <input type="button" value="save" class="type2" @click="save()"
                          data-bs-dismiss="modal" update style="opacity: 0; width: 63px" tabindex="10026"/>
                      </div>

                      <div class="button type2" id="uniform-undefined">
                        <span>{{ this.bt2 }}</span>
                        <input type="button" value="clear" class="type2" data-bs-dismiss="modal" aria-label="Close"
                          @click="clear()" style="opacity: 0; width: 63px" tabindex="10026"/>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="box">

          <table width="100%" border="0" cellpadding="0" cellspacing="0" class="table table-striped br-table">
            <thead>
              <tr class="header-table">
                <th width="3%">Id</th>
                <th width="20%">Currency Code</th>
                <th width="20%">Exchange Rate</th>
                <th width="20%%">Inactived</th>
                <th width="15%">
                  <div class="button" id="uniform-undefined" @click="checkActionForm('save', 'Save', 'Close')">
                    <span><i class="fa fa-plus" aria-hidden="true"></i>Add New
                      <input type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" tabindex="10028" style="opacity: 0; width: 76px"/>
                    </span>
                  </div>
                </th>
              </tr>
            </thead>
            <tbody>
               <tr v-for="(item, index) in items.data" :key="index">
                                    <td width="3%">{{ index + 1 }}</td>
                                    <td width="20%">{{ item.curency_no }}</td>
                                    <td width="20%">{{item.exchange_rate}}.00{{ item.curency_no }} / 1.00{{item.main_curency_no }}</td>
                                    <td width="15%">{{ item.inactived }}</td>
                    <td width="12%" class="text-center">
                    <div class="button" id="uniform-undefined">
                      <span
                        ><i class="fa fa-edit" aria-hidden="true"></i>Edit ExchangeRate<input
                          type="button"
                          @click="checkActionForm('Update', 'Update', 'Close',item)"
                          data-bs-toggle="modal"
                          data-bs-target="#staticBackdrop"
                          tabindex="10028"
                          style="opacity: 0; width: 140px"
                      /></span>
                    </div>

                    <!-- <div class="button" id="uniform-undefined">
                      <span
                        ><i class="fa fa-trash" aria-hidden="true"></i>Delete<input
                          type="button"
                          @click="dalete(item.curency_no)"
                          tabindex="10028"
                          style="opacity: 0; width: 76px"
                      /></span>
                    </div> -->
                  </td>
               </tr> 
             </tbody>
          </table>
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
              <div class=" mt-3 print-size" >
                <div style="padding:0 100px 0 100px">
                  <div class="col-md-12">
                    <div class="text-center">
                      <h3 class="title-purchase">EXCHANGERATE REPORT</h3>
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
                        <th class="text-center">Id</th>
                        <th class="text-center">Currency Code</th>
                        <th class="text-center">Exchange Rate</th>
                        <th class="text-center">Inactived</th>
                      </tr>
                    </thead>
                    <tbody >
                      <tr v-for="(item, index) in items.data" :key="index" >
                          <td>{{ index + 1 }}</td>
                          <td>{{ item.curency_no }}</td>
                          <td>{{item.exchange_rate}}.00{{ item.curency_no }} / 1.00{{item.main_curency_no }}</td>
                          <td>{{ item.inactived }}</td>
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
import axios from "axios";
import pagination from "laravel-vue-pagination";
import moment from "moment";
import Header from "../Header.vue";
export default {
  components : {pagination},
  components : {Header},
  data() {
    return {
      issave: "",
      bt1: "",
      MainCurrency:"USA",
      company: [],
      formatdate: "",
      bt2: "",
      items: {},
      links: [],
      Currencys: [],
      products: [],
      perPage: "",
      currentPage: 0,
      last_page: 1,
      form: {
        curency_no: "",
        main_curency_no:'',
        exchange_rate: "",
        inactived: "Yes",
      },
      serchform: {
        id: "",
        brand_code: "",
        brand_name: "",
        brand_name_2: "",
        inactived: "",
        is_deleted: "",
      },
    };
  },

  mounted() {
    this.getBrands();
    this.getcurrency();
    this.getcompany();
  },

  methods: {
    getBrands() {
        axios.get("/api/v1/exchangerate/index/")
          .then((data) => {
            this.items = data;
         })
    },
    getcompany(){
          axios.get("/api/v1/getSetup/")
            .then((response) => {
             this.company = response.data;
             this.dateformart = moment(new Date()).format('YYYY-MM-DD');
            });
    },
    getcurrency(){
      axios.get("/api/v1/getcurency").then((data) => this.Currencys = data.data);

    },
    save() {
      if (this.issave == "save") {
        this.isDisabled = false;
        axios.post("/api/v1/exchangerate/create/", this.form).then((res) => {
          this.getBrands();
          this.getcurrency();
        });
      } else {
        this.isDisabled = true;
        axios
          .post("/api/v1/exchangerate/update/" + this.form.id, this.form)
          .then((res) => {
            this.getBrands();
          });
      }
    },
    edit(test) {
      this.form = test;
    },
    dalete(brand) {
      axios.post("api/v1/curency/delete/" + brand).then((res) => {
        this.form = res.data;
        this.getBrands(1);
      });
    },
    checkActionForm(checkform, bt1, bt2, brandId) {
      if (checkform == "save") {
        this.bt1 = bt1;
        this.bt2 = bt2;
        this.issave = "save";
        this.form= {};
      } else {
        this.bt1 = bt1;
        this.bt2 = bt2;
        this.edit(brandId);
        this.issave = brandId;
      }
    },
    serchdata() {
      axios.post("api/v1/brands/search").then((res) => {
        console.log(res.data);
      });
    },
    print() {
       var printContents = document.getElementById("purchaseorder").innerHTML;
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
  },
};
</script>
