<template >
  <div class="wrapper">
    <div class="container-fuild">
      <div id="headTitle">
      <div id="logo"><img alt="Healthbook" height="44" src="img/logo.png" width="70" _mstalt="155922" _msthash="1">
      </div>
      <h1 id="title" _msttexthash="48503" _msthash="2">Stock-Count</h1>
    </div>
      <Header />
      <ol id="topicPath">
          <li style="margin-left:310px">
            <router-link to="menustock"><a href="dashbaord">
              <font style="vertical-align: inherit"
                ><font style="vertical-align: inherit">Stock-Count</font></font>
            </a>
            </router-link>
          </li>
        </ol>
    </div>

    <div class="search-box">
      <div id="product">
        <!--#contents -->
        <div class="search-box ">
          <a class="btn-radius bt-pn btn btn-sm" data-bs-toggle="dropdown" aria-expanded="false"
            style="float: right; color: #f8f5b4">
            <i class="fas fa-plus" style="padding-right: 5px"> </i>
            Menu
          </a>
          <ul class="dropdown-menu">
            <li>
              <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#staticboomId" tabindex="10028"
                href="#"><i class="fa fa-print" aria-hidden="true"></i> Print</a>
            </li>
          </ul>

          <div class="search-box-title">
            <router-link to="stockcount"><a class="btn-radius btn btn-sm" href="#"
                style="color: #f8f5b4; margin-top: -2px">
                <i class="fas fa-plus" style="padding-right: 5px"> </i>
                Create Stock Count
              </a>
            </router-link>
          </div>

        </div>
        <div class="box">
          <div class="box-footer-pagination">
            <div class="pagination">
              <div class="pagination">
                <div class="overflow-auto"></div>
              </div>
            </div>
          </div>
          <div class="box-content">
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="tbl_list tbl_stripe">
              <thead>
                <tr>
                  <th width="10%">Document No</th>
                  <th width="10%">Document Type</th>
                  <th width="20%">Description</th>
                  <th width="10%">Total Amount</th>
                  <th width="10%">Curency Code</th>
                  <th width="7%">Status</th>
                  <th width="11%"></th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="(purchase, index) in purchases.data" :key="index">

                  <td v-if="index % 2 == 0" style=" background-color: #dbdee1; border: medium none; ">
                    {{ purchase.document_no }}
                  </td>
                  <td v-else style="border: medium none;">
                    {{ purchase.document_no }}
                  </td>
                  <td v-if="index % 2 == 0" style="background-color: #dbdee1;border: medium none;">
                    {{ purchase.document_type }}
                  </td>
                  <td v-else style="border: medium none;">
                    {{ purchase.document_type }}
                  </td>
                  <td v-if="index % 2 == 0" style="
                      background-color: #dbdee1;
                      border: medium none;
                      ">
                    {{ purchase.description }}
                  </td>
                  <td v-else style="border: medium none">
                    {{ purchase.description }}
                  </td>
                  <td v-if="index % 2 == 0" style=" background-color: #dbdee1;border: medium none;
                    ">
                    {{ purchase.total_amount }}
                  </td>
                  <td v-else style="border: medium none">
                    {{ purchase.total_amount }}
                  </td>
                  <td v-if="index % 2 == 0" style="  background-color: #dbdee1; border: medium none;
                  ;
                    ">
                    {{ purchase.curency_code }}
                  </td>
                  <td v-else style="border: medium none; ">
                    {{ purchase.curency_code }}
                  </td>
                  <td v-if="index % 2 == 0" style=" background-color: #dbdee1; border: medium none;
                      ;
                    ">
                    {{ purchase.statue }}
                  </td>
                  <td v-else style="border: medium none; ">
                    {{ purchase.statue }}
                  </td>
                  <td v-if="index % 2 == 0" style=" text-align: center;
                      background-color: #dbdee1;
                      border: medium none;
                      ;
                    ">
                    <div class="">
                      <div class="button type2" id="uniform-undefined">
                        <span><input @click="getEdit(purchase.document_no)" type="button" value="display" class="type2"
                            style="opacity: 0; width: 54px" tabindex="10025" /><i class="fa fa-edit"></i> Update</span>
                      </div>
                      <div class="button type2" id="uniform-undefined">
                        <span @click="btnDelete(purchase.id)">
                          <input type="button" value="clear" class="type2" style="opacity: 0; width: 63px"
                            tabindex="10026" /><i class="fa fa-trash" aria-hidden="true"></i>
                          Delete</span>
                      </div>
                    </div>
                  </td>
                  <td v-else style="border: medium none; text-align: center">
                    <div class="">
                      <div class="button type2" id="uniform-undefined">
                        <span><input @click="getEdit(purchase.document_no)" type="button" value="display" class="type2"
                            style="opacity: 0; width: 54px" tabindex="10025" /><i class="fa fa-edit"></i> Update</span>
                      </div>
                      <div class="button type2" id="uniform-undefined" to="product">
                        <span @click="btnDelete(purchase.document_no)">
                          <input type="button" value="clear" class="type2" style="opacity: 0; width: 63px"
                            tabindex="10026" /><i class="fa fa-trash" aria-hidden="true"></i>
                          Delete</span>
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="box-footer-pagination">
              <pagination :data="purchases" @pagination-change-page="getPurchase" />
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

                <div style="padding:0 50px 0 50px">
                  <div class="col-md-12">
                    <div class="text-center">
                      <h3 class="title-purchase">ALL-STOCK REPORT</h3>
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
                      <p class="text-center p-bg font-size p-pad">TOTAL STOCK</p>
                      <p class="text-center p-mg">{{ purchases.total }}</p>
                    
                    </div>
                  </div>
                  <div class=" my-2  justify-content-center">
                    <table id="pr-tb">
                    <thead>
                      <tr class="p-bg" >
                        <th class="text-center">No</th>
                        <th class="text-center">Document No</th>
                        <th class="text-center">Document type</th>
                        <th class="text-center">Description</th>
                        <th class="text-center">Total Amount</th>
                        <th class="text-center">Currency</th>
                        <th class="text-center">Status</th>                       
                      </tr>
                    </thead>
                    <tbody >
                      <tr v-for="(purchase, index) in purchases.data" :key="index">
                        <td>{{ index + 1 }}</td>
                        <td>{{ purchase.document_no }}</td>
                        <td>{{ purchase.document_type}}</td>
                        <td>{{ purchase.description }}</td>
                        <td>{{ purchase.total_amount}}</td>
                        <td>{{ purchase.curency_code }}</td>
                        <td>{{ purchase.statue }}</td>
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
  <div id="footer">
    <div id="copyright">Copyright (C) healthbook. ALL Right s Researved Edit by Lsky</div>
  </div>
</template>
  
<script>
import Header from "../Header.vue";
import axios, { Axios } from "axios";
import pagination from "laravel-vue-pagination";
import moment from 'moment';
import print from 'vue3-print-nb';
export default {
  components:{
    Header, pagination
  },
  directives:{
    print
  },  
  data() {
    return {
      links: [],
      purchases: [],
      company:[],
      perPage: "",
      currentPage: 0,
      last_page: 1,
      dateformart: "",
    };
  },
  mounted() {
    this.getPurchase();
    this.getcompany();
  },
  methods: {
    getPurchase(page = 1) {
      if (page > 0 && page <= this.last_page) {
        axios
          .get("api/v1/stockcout/getviewscockcount")
          .then(({ data }) => {
            this.links = data.links;
            this.last_page = data.last_page;
            this.links.forEach((element) => {
              if (element.label == page) {
                this.perPage = "api/v1/stockcout/getviewscockcount/?page=" + page;
                axios.get(this.perPage).then(({ data }) => {
                  this.currentPage = data.current_page;
                  this.purchases =data;
                });
              }
            });
          })
          .catch(({ response }) => {
            console.error(response);
          });
      }
    },
    getcompany(){
      axios.get("/api/v1/getSetup/")
            .then((response) => {
             this.company = response.data;
             this.dateformart = moment(new Date()).format('YYYY-MM-DD');
            });
    },
    getEdit(id) {
      if (id != "") {
        this.$router.push({
          name: "stockcount",
          query: { id: id },
        });
      }
    },
    btnDelete(id) {
      axios.post("api/v1/purchase/delete/purchaseorder/" + id).then((res) => {
        this.getPurchase();
      });
    },
  },
};
</script>