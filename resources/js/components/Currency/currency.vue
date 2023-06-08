<template>
  <div class="wrapper">
    <div class="container-fuild">
      <div id="headTitle">
        <Logo />
        <h1 id="title" _msttexthash="48503" _msthash="2">Exchange Rate</h1>
      </div>
      <Header />
      <ol id="topicPath">
        <li style="margin-left:335px">
          <router-link to="productsetting">
            <a href="dashbaord">
              <font style="vertical-align : inherit">
                <font style="vertical-align : inherit">
                  Exchange Rate
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

          <div class="search-box-title">
            <router-link to="/brands"><a class="btn-radius btn btn-sm" href="#" style="color: #f8f5b4; margin-top: -2px">
                <i class="fa fa-cog" aria-hidden="true"></i>
                Brand
              </a></router-link>
            <router-link to="/supplies"><a class="btn-radius btn btn-sm" href="#"
                style="color: #f8f5b4; margin-top: -2px">
                <i class="fa fa-cog" aria-hidden="true"></i>
                Suppliers
              </a></router-link>
            <router-link to="/unitcode"><a class="btn-radius btn btn-sm" href="#"
                style="color: #f8f5b4; margin-top: -2px">
                <i class="fa fa-cog" aria-hidden="true"></i>
                UnitCode
              </a></router-link>
              <router-link to="/category"><a class="btn-radius btn btn-sm" href="#"
                style="color: #f8f5b4; margin-top: -2px">
                <i class="fa fa-cog" aria-hidden="true"></i>
                Category
              </a></router-link>
            <router-link to="/group"><a class="btn-radius btn btn-sm" href="#" style="color: #f8f5b4; margin-top: -2px">
                <i class="fa fa-cog" aria-hidden="true"></i>
                Group
              </a></router-link>
            <router-link to="/paymenMethod"><a class="btn-radius btn btn-sm" href="#"
                style="color: #f8f5b4; margin-top: -2px">
                <i class="fa fa-cog" aria-hidden="true"></i>
                Payment
              </a></router-link>
            <router-link to="/serailcode"><a class="btn-radius btn btn-sm" href="#"
                style="color: #f8f5b4; margin-top: -2px">
                <i class="fa fa-cog" aria-hidden="true"></i>
                Serial
              </a></router-link>
            <router-link to="/testserviceview"><a class="btn-radius btn btn-sm" href="#"
                style="color: #f8f5b4; margin-top: -2px">
                <i class="fa fa-cog" aria-hidden="true"></i>
                Service
              </a></router-link>
            <router-link to="/company"><a class="btn-radius btn btn-sm" href="#" style="color: #f8f5b4; margin-top: -2px">
                <i class="fa fa-cog" aria-hidden="true"></i>
                Company
              </a></router-link>

          </div>

          <div class="search-box-content">
            <table border="0" cellpadding="0" cellspacing="0" class="tbl_search" id="hover-table">
              <tbody>
                <tr>
                  <th width="10%" style="padding-top: 10px;">Code</th>
                  <td style="padding-top:10px">
                    <input class="string_zen_kana clear_text text input_text" type="text" style="width: 360px;"
                      v-model="form1.curency_no" maxlength="8" required :disabled="true">

                      <a href="#" class="btn-addnew" data-bs-toggle="modal" style="padding-bottom: 3px;"
                data-bs-target="#alertbell"><span class="new">+Create New</span></a>
                  </td>
                </tr>
                <tr>
                  <th width="10%">Exchange Rate</th>
                  <td><input class="string_zen clear_text text input_text" type="number" style="width: 360px;"
                      v-model="form1.exchange_rate" required>
                  </td>
                </tr>
                <tr>
                  <th>Inactived</th>
                  <td width="90%">
                    <div class="selector" id="inactivced">
                      <span>{{ form1.inactived }}</span>
                      <select id="inactivced" name="inactivced" v-model="form1.inactived" tabindex="10003"
                        style="min-width: 51px;  opacity: 0;  width: 80px; ">
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                      </select>
                    </div>
                  </td>
                </tr>

              </tbody>
            </table>
            <div class="search-box-footer">
              <div v-if="is_back == true" class="button type2" id="uniform-undefined" @click="btnCancel()">
                <span><input type="button" class="type2" tabindex="10025" value="display"
                    style="opacity: 0; width: 54px;">
                  <i class="fa fa-arrow-left"></i>
                  Back</span>
              </div>
              <div class="button type2" id="uniform-undefined" @click="btnDeleteSearch()">
                <span><input type="button" class="type2" tabindex="10025" value="display"
                    style="opacity: 0; width: 54px;">
                  <i v-if="delete_search == 'Search'" class="fa fa-search" aria-hidden="true"></i>
                  <i v-else class="fa fa-trash" aria-hidden="true"></i>
                  {{ delete_search }}</span>
              </div>

              <div class="button type2" id="uniform-undefined" @click="SaveExchange()">
                <span><input type="button" class="type2" tabindex="10025" value="display"
                    style="opacity: 0; width: 54px;"><i class="fa fa-save" aria-hidden="true"></i>
                  {{ save_update }}
                </span>
              </div>
              <span class="marker"></span>
            </div>
          </div>
        </div>

        <div class="box mt-4">

          <table width="100%" border="0" cellpadding="0" cellspacing="0" class="table table-striped br-table">
            <thead>
              <tr class="header-table">
                <th width="3%">Id</th>
                <th width="20%">Code</th>
                <th width="20%">Exchange Rate</th>
                <th width="20%%">Inactived</th>
                <th width="15%">
                </th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="(item, index) in exchange" :key="index">
                <td width="3%">{{ index + 1 }}</td>
                <td width="13%">{{ item.curency_no }}</td>
                <td width="13%">{{ item.exchange_rate }}.00{{ item.curency_no }} / 1.00{{ item.main_curency_no }}</td>
                <td width="6%">{{ item.inactived }}</td>
                <td width="12%" class="text-center">
                  <div class="button" id="uniform-undefined" @click="editExchangeRate(item)">
                    <span> <i class="fa fa-edit"></i> Edit ExchangeRate<input type="button" tabindex="10028"
                        style="opacity: 0; width: 140px" /></span>
                  </div>
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
              <div class="mt-3 print-size">
                <div class="row d-flex align-items-baseline">
                  <div class="col-xl-9">
                  </div>
                  <hr>
                </div>

                <div style="padding:0 50px 0 50px">
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
                        <tr class="p-bg" style="text-align:center !important;">
                          <th class="text-center">Id</th>
                          <th class=text-center>Code</th>
                          <th class="text-center">Exchange Rate</th>
                          <th class="text-center">Inactived</th>

                        </tr>
                      </thead>
                      <tbody>
                        <tr v-for="(item, index) in exchange" :key="index">
                          <td>{{ index + 1 }}</td>
                          <td>{{ item.curency_no }}</td>
                          <td>{{ item.exchange_rate }}.00{{ item.curency_no }} / 1.00{{ item.main_curency_no }}</td>
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
          <button v-print="'#purchaseorder'" class="btn-purchase btn-light text-capitalize border-0">
                    <i class="fa fa-print text-primary"></i> Print
            </button>
        </div>
      </div>
    </div>
  </div>


  <div class="modal fade ui-modal" id="alertbell" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticboomId" aria-hidden="true">
    <div class="modal-dialog ">
      <div class="modal-content ui-dialog">
        <div class="ui-widget-header">
          <h5 class="modal-title in-header" id="staticBackdropLabel"><i class="fa fa-print" aria-hidden="true"></i>
            Add New Currency Main Currency {{ company.main_Currency }}</h5>
          <span class="ui-icon ui-icon-closethick" data-bs-dismiss="modal" aria-label="Close"></span>
        </div>
        <div class="ui-dialog-content " id="purchaseorder1">
          <div>
            <div class="card-body">
              <div class="mt-3">

                <div>

                  <div class=" my-2">

                    <table width="100%" border="0" cellpadding="0" cellspacing="0" class="tbl_search mb-3">
                      <tbody>
                        <tr>
                          <th width="20%">Code</th>

                          <td>
                            <input id="cat_code" :disabled="isDisabled" name="cat_code" v-model="form.curency_no"
                              type="text" class="text" tabindex="10028" />
                          </td>
                        </tr>

                        <tr>
                          <th width="20%">Description</th>

                          <td>
                            <input id="cat_name" name="cat_name" v-model="form.curency" type="text" class="text"
                              tabindex="10029" />
                          </td>
                        </tr>
                        <tr>
                          <th>Inactived</th>
                          <td width="90%">
                            <div class="selector" id="inactivced">
                              <span>{{ form.inactived }}</span>
                              <select id="inactivced" name="inactivced" v-model="form.inactived" tabindex="10003"
                                style="min-width: 51px;  opacity: 0;  width: 80px; ">
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                              </select>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    <table class="table table-striped br-table">
                      <thead>
                        <tr class="header-table">
                          <th class="text-center" style="text-align: center !important;">No</th>
                          <th class="text-center" style="text-align: center !important;">Currency Code</th>
                          <th class="text-center" style="text-align: center !important;">Currency Name</th>
                          <th class="text-center" style="text-align: center !important;">Inactived</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr v-for="(curr, index) in items.data" :key="index">
                          <td>{{ index + 1 }}</td>
                          <td>{{ curr.curency_no }}</td>
                          <td>{{ curr.curency }}</td>
                          <td>{{ curr.inactived }}</td>
                          <td class="text-center" style="width: 19em;">
                            <div class="button" id="uniform-undefined"
                              @click="checkActionForm('Update', 'Update', 'Close', curr)">
                              <span><i class="fa fa-edit"></i> Edit<input type="button" tabindex="10028"
                                  style="opacity: 0; width: 70px" /></span>
                            </div>
                            <div class="button" id="uniform-undefined" @click="createExchange(curr)"
                              data-bs-dismiss="modal" aria-label="Close">
                              <span><i class="fa fa-edit"></i>Add Exchangerate<input type="button" tabindex="10028"
                                  style="opacity: 0; width: 70px" /></span>
                            </div>
                          </td>
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
          <div class="button type2" id="uniform-undefined" @click="Clear()">
            <span><input type="button" class="type2" tabindex="10025" value="display" style="opacity: 0; width: 54px;"><i
                class="fa fa-save" aria-hidden="true"></i> Clear</span>
          </div>
          <div class="button type2" id="uniform-undefined" @click="save()">
            <span><input type="button" class="type2" tabindex="10025" value="display" style="opacity: 0; width: 54px;"><i
                class="fa fa-save" aria-hidden="true"> </i> {{ Save }}</span>
          </div>

        </div>
      </div>
    </div>
  </div>
  <Footer />
</template>
<script>
import axios from "axios";
import pagination from "laravel-vue-pagination";
import Logo from "../logo.vue"
import print from 'vue3-print-nb'
import moment from "moment";
import Auth from "../../auth/Auth";
import Footer from '../footer.vue'
import Header from "../Header.vue";
export default {
  components: { Header, pagination, Footer,Logo },
  directives:{
    print
  },
  data() {
    return {
      save_update: "Save",
      delete_search: 'Search',
      is_back: false,
      Save: "Save",
      bt1: "",
      check : [],
      bt2: "",
      items: {},
      company: [],
      formatdate: "",
      exchange: [],
      links: [],
      products: [],
      perPage: "",
      currentPage: 0,
      last_page: 1,
      form: {
        curency_no: "",
        curency: "",
        inactived: "Yes",
        created_by: '',
        updated_by: ''
      },
      form1: {
        curency_no: "",
        main_curency_no: '',
        exchange_rate: "",
        created_by: '',
        updated_by: '',
        inactived: "",
      }

    };
  },

  mounted() {
    this.getBrands();
    this.getcompany();
    this.getExchangeRate()

  },

  methods: {
    getBrands() {
      axios.get("/api/v1/curency/getdata/")
        .then((data) => {
          this.items = data;
        })
    },
    getcompany() {
      axios.get("/api/v1/getSetup/")
        .then((response) => {
          this.company = response.data;
          console.log("this is company info")
          console.log(this.company)
          this.dateformart = moment(new Date()).format('YYYY-MM-DD');
        });
    },
    save() {
      if (this.Save == "Save") {
        this.isDisabled = false;
        this.form.created_by = Auth.user.id
        if(this.form.curency_no != this.company.main_Currency){
          axios.post("/api/v1/curency/create/" + this.form.curency_no, this.form)
          .then((res) => {
              this.getBrands();
              this.form = {
                curency: "",
                curency_no: "",
                inactived: ""
              }
            });
        } else{
          alert("this already exist")
        }
       
      }
      if (this.Save == "Update") {
        this.form.updated_by = Auth.user.id
        axios.post("/api/v1/curency/update/" + this.form.curency_no, this.form)
          .then(data => {
            this.getBrands()
            this.Save = "Save"
            this.form = {
              curency: "",
              curency_no: "",
              inactived: ""
            }
            this.isDisabled = false
          })
      }

    },
    edit(test) {
      this.form = test;
    },
    dalete(brand) {
      axios.get("api/v1/curency/delete/" + brand).then((res) => {
        this.form = res.data;
        this.getBrands(1);
      });
    },
    checkActionForm(checkform, bt1, bt2, brandId) {
      this.Save = "Update"
      this.isDisabled = true
      if (checkform == "save") {
        this.bt1 = bt1;
        this.bt2 = bt2;
        this.issave = "save";
        this.form = {};
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
    createExchange(curr) {
      this.form1.curency_no = curr.curency_no
      axios.get("/api/v1/exchangerate/find/"+curr.curency_no)
        .then(res => {
          this.check = res.data
        })
    },
    SaveExchange() {
      if (this.save_update == 'Save') {
        if(this.check.status == 0){
          if(this.form1.curency_no != this.company.main_Currency){
            this.form1.created_by = Auth.user.id
            axios.post("/api/v1/exchangerate/create/", this.form1)
                  .then(res => {
                    console.log(res.data)
                    this.getExchangeRate()
                    this.form1 = {
                      curency_no: "",
                      main_curency_no: '',
                      exchange_rate: "",
                      inactived: "",
                    }
                  })
          } if(this.form1.curency_no == this.company.main_Currency){
            alert("Can't create This Main currency")
            this.form1 = {
                      curency_no: "",
                      main_curency_no: '',
                      exchange_rate: "",
                      inactived: "",
                    }
          }
        }else{
          alert("This alread exist")
            this.form1 = {
              curency_no: "",
              main_curency_no: '',
              exchange_rate: "",
              inactived: "",
            }
          }
       
      }
      if (this.save_update == 'Update') {
        this.form1.updated_by = Auth.user.id
        axios.post("/api/v1/exchangerate/update/" + this.form1.id, this.form1)
          .then(res => {
            this.getExchangeRate()
            this.save_update = "Save"
            this.form1 = {
              curency_no: "",
              main_curency_no: '',
              exchange_rate: "",
              inactived: "",
            }
            this.is_back = false
          })
      }
    },

    getExchangeRate() {
      axios.get("/api/v1/exchangerate/index/")
        .then(res => {
          this.exchange = res.data
          console.log(this.exchange)
        })
    },
    editExchangeRate(item) {
      this.form1 = item
      this.save_update = "Update"
      this.is_back = true
    },
    btnCancel() {
      this.form1 = {
        curency_no: "",
        main_curency_no: '',
        exchange_rate: "",
        inactived: "",
      }
      this.save_update = "Save"
      this.delete_search = "Search"
      this.is_back = false
    },
    Clear() {
      this.Save = "Save"
      this.form = {
        curency_no: '',
        curency: '',
        inactived: ''
      }
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
  },
};
</script>
