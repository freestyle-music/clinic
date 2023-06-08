<template>
  <div class="wrapper">
    <div class="container-fuild">
      <div id="headTitle">
        <Logo />
        <h1 id="title" _msttexthash="48503" _msthash="2">Detail Shift</h1>
      </div>
      <Header />
      <ol id="topicPath">
        <li style="margin-left:300px">
          <router-link to="menustock"><a href="dashbaord">
              <font style="vertical-align: inherit">
                <font style="vertical-align: inherit">Detail Shift</font>
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
          <!-- <a class="btn-radius bt-pn btn btn-sm" data-bs-toggle="dropdown" aria-expanded="false"
            style="float: right; color: #f8f5b4">
            <i class="fas fa-plus" style="padding-right: 5px"></i>
            Menu
          </a> -->
          <ul class="dropdown-menu">
            <li>
              <a @click="getproductboom()" class="dropdown-item btn btn-primary" data-bs-toggle="modal"
                data-bs-target="#staticboomId" tabindex="10028">
                <i class="fa-solid fa-circle-b"></i> Boom Product
              </a>
            </li>
            <li>
              <a @click="getsuppliyerview()" class="dropdown-item btn btn-primary" data-bs-toggle="modal"
                data-bs-target="#staticboomId" tabindex="10028">
                <i class="fa fa-print" aria-hidden="true"></i>
                Print
              </a>
            </li>
            <li>
              <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#staticBackdropss" tabindex="10028"
                href="#">
                <i class="fas fa-file-excel"></i> To Excel
              </a>
            </li>
            <li>
              <a class="dropdown-item btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdropss"
                tabindex="10028">
                <i class="fas fa-edit"></i> Release
              </a>
            </li>
          </ul>
          <!-- <h2 class="search-box-title">
            Search
            <input name="search" type="search" id="search" class="text" v-model="search" />
            Day
            <input style="width: 17%;" name="search" type="date" id="search" class="text">
            Month
            <input style="width: 17%;" name="search" type="month" id="search" class="text">
            Year
            <input style="width: 17%;" type="number" placeholder="YYYY" id="search" class="text year" min="1999" max="5020" @click="formatyear()">
          </h2> -->
          <div class="search-title" style="padding-left:2rem">
            <span style="margin-right: 10px;">Search</span>
            
            <input name="search" type="search" id="search" class="text" v-model="search" />
            <span style="margin-left: 40px; margin-right: 10px;">From</span>
            <input style="width: 17%;" name="search" type="date" id="search" v-model="selectdate" class="text">
            <span style="margin-left: 40px;margin-right: 10px;">To</span>
            
            <input style="width: 17%;" name="search" type="date" placeholder="mm-yyyy" v-model="selectmoth" id="search"
              class="text">
            <div class="button type2" id="uniform-undefined"><span><input type="button" class="type2" tabindex="10025"
                  value="display" style="opacity: 0; width: 54px;"><i class="fa fa-search" aria-hidden="true"></i>Search</span>
            </div>
            <!-- Year
            <input style="width: 17%;" type="number" placeholder="yyyy" id="search" v-model="selectyear" class="text year"
              min="1999" max="5020" @click="formatyear()"> -->
            <a id="menu-1" class="btn-radius bt-pn btn btn-sm" data-bs-toggle="dropdown" aria-expanded="false"
              style="float: right; color: #f8f5b4; margin-top: 0;margin-right: 0; margin-left: auto;">
              <i class="fas fa-plus"></i>
              Menu
            </a>
            <ul class="dropdown-menu">
              <li>
                <a @click="getproductboom()" class="dropdown-item btn btn-primary" data-bs-toggle="modal"
                  data-bs-target="#staticboomId" tabindex="10028">
                  <i class="fa-solid fa-circle-b"></i> Boom Product
                </a>
              </li>
              <li>
                <a @click="getsuppliyerview()" class="dropdown-item btn btn-primary" data-bs-toggle="modal"
                  data-bs-target="#staticboomId" tabindex="10028">
                  <i class="fa fa-print" aria-hidden="true"></i>
                  Print
                </a>
              </li>
              <li>
                <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#staticBackdropss" tabindex="10028"
                  href="#">
                  <i class="fas fa-file-excel"></i> To Excel
                </a>
              </li>
              <li>
                <a class="dropdown-item btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdropss"
                  tabindex="10028">
                  <i class="fas fa-edit"></i> Release
                </a>
              </li>
            </ul>

          </div>
          <input id="search" name="search" type="hidden" value="1" />
          <div class="box">
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="table table-striped br-table">
              <thead>
                <tr class="header-table">
                  <th width="10%">Document No</th>
                  <th>Document Type</th>
                  <th>Product No</th>
                  <th>Description</th>
                  <th width="7%">Unit Code</th>
                  <th>Price</th>
                  <th>Inventory</th>
                  <th>Amount</th>
                  <th>Curency</th>
                  <th>Remark</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="transtock in Categories">
                  <td width="8%">{{ transtock.document_no }}</td>
                  <td width="12%">{{ transtock.document_type }}</td>
                  <td width="8%">{{ transtock.product_no }}</td>
                  <td width="10%">{{ transtock.description }}</td>
                  <td width="5%">{{ transtock.unit_of_measure_code }}</td>
                  <td width="5%">{{ transtock.unit_price }}</td>
                  <td width="6%">{{ transtock.inventory }}</td>
                  <td width="10%">{{ transtock.total_amount }}</td>
                  <td width="5%">{{ transtock.curency_code }}</td>
                  <td width="10%">{{ transtock.remark }}</td>
                </tr>
              </tbody>
            </table>

            <div class="box-footer-pagination">
              <pagination :data="Categories" @pagination-change-page="getCategorys" />
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
              <div class="mt-3 print-size">

                <div style="padding:0 70px 0 60px; background-color: #fff;">
                  <div class="col-md-12">
                    <div class="text-center">
                      <h3 class="title-purchase">STOCK TRANSECTION REPORT</h3>
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
                    <table id="pr-tb">
                      <thead>
                        <tr class="p-bg">
                          <th class="text-center">Doc. No</th>
                          <th class="text-center">Doc. Type</th>
                          <th class="text-center">Pro. No</th>
                          <th class="text-center">Product</th>
                          <th class="text-center">Unit</th>
                          <th class="text-center">Price</th>
                          <th class="text-center">QTY</th>
                          <th class="text-center">Total</th>
                          <th class="text-center">Curency</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr v-for="Category in Categories" :key="Category.index">
                          <td>{{ Category.document_no }}</td>
                          <td>{{ Category.document_type }}</td>
                          <td>{{ Category.product_no }}</td>
                          <td> {{ Category.description }} </td>
                          <td>{{ Category.unit_of_measure_code }}</td>
                          <td>{{ Category.unit_price }}</td>
                          <td>{{ Category.inventory }}</td>
                          <td>{{ Category.total_amount }}</td>
                          <td>{{ Category.curency_code }}</td>
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
  <Footer />
</template>

<script>
import axios from "axios";
import { useCurrentTime } from "../../componentJS/date";
import pagination from "laravel-vue-pagination";
import moment from "moment";
import Footer from "../footer.vue"
import Logo from "../logo.vue"
import print from 'vue3-print-nb'
import Header from "../Header.vue";
export default {
  components:
  {
    Header,Logo,pagination,Footer
  },
  setup() {
    const { currentTime } = useCurrentTime();
    return { currentTime };
  },
  directives:{
    print
  },
  data() {
    return {
      Categories: [],
      selectdate: '',
      selectmoth: '',
      selectyear: '',
      links: [],
      company: [],
      perPage: "",
      currentPage: 0,
      last_page: 1,
      action_api: "",
      action_api_1: "",
      formatdate: "",
      isDisabled: false,
      form: {
        id: "",
        cat_code: "",
        cat_name: "",
        cat_name_2: "",
        inactived: "",
        created_by: "",
        updete_by: "",
      },
      forms_clear: {
        id: "",
        cat_code: "",
        cat_name: "",
        cat_name_2: "",
        inactived: "",
        created_by: "",
        updete_by: "",
      },
    };
  },

  mounted() {
    this.selectdate = moment(new Date()).format('YYYY-MM-DD');
    this.selectmoth = moment(new Date()).format('YYYY-MM');
    this.selectyear = moment(new Date()).format('YYYY');
    this.getCategorys();
    this.getcompany();
  },

  methods: {
    formatyear() {
      document.querySelector("input[type=number]")
        .oninput = e => console.log(e.target.valueAsNumber)
    },
    getCategorys() {
      axios.get("/api/v1/stocktraview").then((res) => {
        this.Categories = res.data;
      });
    },
    getcompany() {
      axios.get("/api/v1/getSetup/")
        .then((response) => {
          this.company = response.data;
          this.dateformart = moment(new Date()).format('YYYY-MM-DD');
        });
    },
  },
};
</script>