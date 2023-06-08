<template >
    <div class="wrapper">
      <div class="container-fuild">
        <div id="headTitle">
        <div id="logo"><img alt="Healthbook" height="44" src="img/logo.png" width="70" _mstalt="155922" _msthash="1">
        </div>
        <h1 id="title" _msttexthash="48503" _msthash="2">Beginning Stock</h1>
      </div>
        <Header />
        <ol id="topicPath">
            <li style="margin-left:355px">
              <router-link to="menustock"><a href="dashbaord">
                <font style="vertical-align: inherit"
                  ><font style="vertical-align: inherit">Beginning Stock</font></font>
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
              <router-link to="/creatbeginnigstock"><a class="btn-radius btn btn-sm" href="#"
                  style="color: #f8f5b4; margin-top: -2px">
                  <i class="fas fa-plus"> </i>
                  Create
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
              <router-link to="/stockonhand"><a class="btn-radius btn btn-sm" href="#"
                  style="color: #f8f5b4; margin-top: -2px">
                  <i class="fas fa-cog"> </i>
                  Stock On Hand
                </a>
              </router-link>
            </div>
  
          </div>
          <div class="box">
              <div class="box-footer-pagination"><div class="pagination"><div class="pagination"></div></div></div>
              <table width="100%" border="0" cellpadding="0" cellspacing="0" class="table table-striped br-table" style="border-top: 1px solid #6eb3bf">
                <thead>
                  <tr class="header-table">
                    <th style="width:5%">No</th>
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
                  <tr v-for="(item, index) in All_beginningStock.data" :key="index">
                    <td>{{ index+1 }}</td>
                    <td>{{ item.document_no }}</td>
                    <td>{{ item.document_type }}</td>
                    <td>{{ item.description }}</td>
                    <td>{{ item.total_amount }}</td>
                    <td>{{ item.curency_code }}</td>
                    <td>{{ item.statue }}</td>
                    <td class="text-center">
                      <div class="button type2" id="uniform-undefined" @click="edit(item.document_no)">
                        <span >
                          <input type="button" value="clear" class="type2" style="opacity: 0; width: 63px"
                            tabindex="10026" /><i class="fa fa-edit" aria-hidden="true"></i>
                          Edit</span>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            
            <div class="box-footer-pagination">
                <pagination :data="All_beginningStock" @pagination-change-page="getAllBeginningStock" />
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
                        <h3 class="title-purchase">BEGINNING STOCK REPORT</h3>
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
                        <!-- <tr v-for="(purchase, index) in purchases.data" :key="index">
                          <td>{{ index + 1 }}</td>
                          <td>{{ purchase.document_no }}</td>
                          <td>{{ purchase.document_type}}</td>
                          <td>{{ purchase.description }}</td>
                          <td>{{ purchase.total_amount}}</td>
                          <td>{{ purchase.curency_code }}</td>
                          <td>{{ purchase.statue }}</td>
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
    <Footer/>
  </template>
    
  <script>
  import Header from "../Header.vue";
  import axios, { Axios } from "axios";
  import pagination from "laravel-vue-pagination";
  import moment from 'moment';
  import Auth from "../../auth/Auth";
  import Footer from "../footer.vue"
  import print from 'vue3-print-nb';
  export default {
    components:{
      Header, pagination,Footer
    },
    directives:{
      print
    },
    data() {
      return {
        company:[],
        dateformart: "",
        All_beginningStock: [],
        created_by : '',

      };
    },
    mounted() {
      this.getAllBeginningStock()
      this.getcompany();
    },
    methods: {
      getAllBeginningStock(page = 1){
        this.created_by = Auth.user.id
        axios.get("/api/v1/beginingstocks?page="+page+"&created_by="+this.created_by)
              .then((res) => {
                this.All_beginningStock = res.data
                console.log(this.All_beginningStock.data)
              })
              .catch(erro => {
                console.log(error)
              })
      },
     
      getcompany(){
        axios.get("/api/v1/getSetup/")
              .then((response) => {
               this.company = response.data;
               this.dateformart = moment(new Date()).format('YYYY-MM-DD');
              });
      },

      edit(document_no){
        if(document_no != ''){
          this.$router.push({
            name : 'createbeginnigstock',
            query: {id:document_no}
          })
        }
      }
    

    },
  };
  </script>