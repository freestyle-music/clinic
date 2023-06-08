<template>
    <div class="wrapper">
        <div class="container-fuild">
          <div id="headTitle">
      <div id="logo"><img alt="Healthbook" height="44" src="img/logo.png" width="70" _mstalt="155922" _msthash="1">
      </div>
      <h1 id="title" _msttexthash="48503" _msthash="2">Stock On Hand</h1>
    </div>
            <Header />
            <ol id="topicPath">
          <li style="margin-left:340px">
            <router-link to="menustock"><a href="dashbaord">
              <font style="vertical-align: inherit"
                ><font style="vertical-align: inherit">Stock On Hand</font></font>
            </a>
            </router-link>
          </li>
        </ol>
        </div>
        <div class="search-box">
            <div id="product">
                <!--#contents -->

                <div class="search-box mb-4">
                    <a class="btn-radius bt-pn btn btn-sm" data-bs-toggle="dropdown" aria-expanded="false" style="float: right; color: #f8f5b4">
                        <i class="fas fa-plus" style="padding-right: 5px"></i>
                        Menu
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a @click="getproductboom()" class="dropdown-item btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticboomId" tabindex="10028">
                                <i class="fa-solid fa-circle-b"></i> Boom Product
                            </a>
                        </li>
                        <li>
                            <a @click="getsuppliyerview()" class="dropdown-item btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticboomId" tabindex="10028">
                                <i class="fa fa-print" aria-hidden="true"></i>
                                Print
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#staticBackdropss" tabindex="10028" href="#">
                                <i class="fas fa-file-excel"></i> To Excel
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdropss" tabindex="10028">
                                <i class="fas fa-edit"></i> Release
                            </a>
                        </li>
                    </ul>
                    <div class="search-box-title">
                      <router-link to="/beginningstock"><a class="btn-radius btn btn-sm" href="#"
                  style="color: #f8f5b4; margin-top: -2px">
                  <i class="fas fa-cog"> </i>
                  Beginning Stock
                </a>
              </router-link>
              <router-link to="/viewstockcount"><a class="btn-radius btn btn-sm" href="#"
                  style="color: #f8f5b4; margin-top: -2px">
                  <i class="fas fa-cog"> </i>
                  Stock Count
                </a>
              </router-link>
              <router-link to="/stocktransection"><a class="btn-radius btn btn-sm" href="#"
                  style="color: #f8f5b4; margin-top: -2px">
                  <i class="fas fa-cog"> </i>
                  Stock Transection
                </a>
              </router-link>
              <router-link to="/stockalert"><a class="btn-radius btn btn-sm" href="#"
                  style="color: #f8f5b4; margin-top: -2px">
                  <i class="fas fa-cog"> </i>
                  Stock Alert
                </a>
              </router-link>
              <router-link to="/serailcode"><a class="btn-radius btn btn-sm" href="#"
                  style="color: #f8f5b4; margin-top: -2px">
                  <i class="fas fa-cog"> </i>
                  Serial
                </a>
              </router-link>
            
            </div>
                    <input id="search" name="search" type="hidden" value="1" />
                    <div class="box">
                      <div class="box-footer-pagination"><div class="pagination"><div class="pagination"></div></div></div>
                        <table width="100%" border="0" cellpadding="0" cellspacing="0" class="table table-striped br-table">
                            <thead>
                                <tr class="header-table">
                                    <th width="10%">Document No</th>
                                    <th >Document Type</th>
                                    <th >Product No</th>
                                    <th >Description</th>
                                    <th width="7%">Unit Code</th>
                                    <th >Price</th>
                                    <th >Inventory</th>
                                    <th >Amount</th>
                                    <th >Curency</th>
                                    <th >Remark</th>
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
                            <pagination :data="Categories" @pagination-change-page="getCategorys"/>
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
            <div class="card-body" >
              <div class="mt-3 print-size"  >

                <div style="padding:0 50px 0 50px; background-color: #fff;">
                  <div class="col-md-12">
                    <div class="text-center">
                      <h3 class="title-purchase">STOCK ONHAND REPORT</h3>
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
                    <tbody >
                        <tr v-for="Category in Categories" :key="Category.index">
                            <td>{{Category.document_no}}</td>
                            <td>{{ Category.document_type}}</td>
                            <td>{{Category.product_no }}</td>
                            <td> {{ Category.description }} </td>
                            <td>{{Category.unit_of_measure_code }}</td>
                            <td>{{Category.unit_price}}</td>
                            <td>{{ Category.inventory}}</td>
                            <td>{{Category.total_amount}}</td>
                            <td>{{Category.curency_code}}</td>
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
          <a v-print="'#purchaseorder'" class="btn-purchase btn-light text-capitalize border-0" data-mdb-ripple-color="dark"><i
              class="fas fa-print text-primary"></i> Print</a>
          
        </div>
      </div>
    </div>
  </div>
  <Footer/>
 
</template>

<script>
import axios from "axios";
import { useCurrentTime } from "../../componentJS/date";
import pagination from "laravel-vue-pagination";
import moment from "moment";
import Header from "../Header.vue";
import Footer from "../footer.vue";
import print from 'vue3-print-nb';
export default {
    components: { pagination,Header ,Footer},
    directives:{print},
    setup() {
        const { currentTime } = useCurrentTime();
        return { currentTime };
    },

    data() {
        return {
            Categories: [],
            links: [],
            company: [],
            perPage: "",
            currentPage: 0,
            last_page: 1,
            action_api: "",
            action_api_1: "",
            formatdate:"",
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
        this.getCategorys();
        this.getcompany();
    },

    methods: {
        getCategorys() {
          axios.get("/api/v1/stocktraview").then((res) => {
              this.Categories = res.data;
          });
        },
      getcompany(){
      axios.get("/api/v1/getSetup/")
            .then((response) => {
             this.company = response.data;
             this.dateformart = moment(new Date()).format('YYYY-MM-DD');
            });
    },
    },
};
</script>
