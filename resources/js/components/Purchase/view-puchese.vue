<template >
  <div class="wrapper"> 
    <div id="headTitle">
      <div id="logo"><img alt="Healthbook" height="44" src="img/logo.png" width="70" _mstalt="155922" _msthash="1">
      </div>
      <h1 id="title" _msttexthash="48503" _msthash="2">Purchase-Order</h1>
    </div>
    <Header />
    <ol id="topicPath">
          <li >
            <router-link to="menupurchase"><a href="dashbaord">
              <font style="vertical-align: inherit"
                ><font style="vertical-align: inherit">Purchese-Order</font></font>
            </a>
            </router-link>
          </li>
        </ol>
   
    <div class="search-box">
      <div id="product">
        <!--#contents -->
        <div class="search-box mb-4">
          <a class="btn-radius bt-pn btn btn-sm" data-bs-toggle="dropdown" aria-expanded="false"
            style="float: right; color: #f8f5b4">
            <i class="fas fa-plus" style="padding-right: 5px"> </i>
            Menu
          </a>
          <ul class="dropdown-menu">
            <li>
              <a class="dropdown-item" @click="booking()" > <i class="fas fa-save"></i> Booking</a>
            </li>
            <li>
              <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#staticboomId" tabindex="10028"
                href="#"><i class="fa fa-print" aria-hidden="true"></i> Print</a>
            </li>
          </ul>
          <div class="search-box-title">
            <router-link to="purchase"><a class="btn-radius btn btn-sm" href="#"
                style="color: #f8f5b4; margin-top: -2px">
                <i class="fas fa-plus" style="padding-right: 5px"> </i>
                Add Purchase
              </a></router-link>
          </div>
          
          <div class="search-box-content">
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="tbl_search" id="hover-table">
              <tbody>
                <tr>
                  <th width="10%">Document Number</th>
                  <td width="50%">
                    <input v-model="form.document_no" class="string_zen_kana clear_text text input_text" maxlength="50"
                      size="50" type="text" />
                  </td>
                </tr>
                <tr>
                  <th width="10%">Document Type</th>
                  <td width="50%">
                    <input v-model="form.document_type" class="string_zen_kana clear_text text input_text"
                      maxlength="50" size="50" type="text" />
                  </td>
                </tr>
                <tr>
                  <th width="10%">Description</th>
                  <td width="50%">
                    <input v-model="form.description" class="string_zen clear_text text input_text" size="50"
                      type="text" />
                  </td>
                </tr>
                <tr>
                  <th width="10%">Suppliyer</th>
                  <td width="50%">
                    <input v-model="form.suppliyer_code" class="string_zen clear_text text input_text" size="50"
                      type="text" />
                  </td>
                </tr>
                <tr>
                  <th width="10%">Curency Code</th>
                  <td width="50%">
                    <input v-model="form.curency_code" class="string_zen clear_text text input_text" size="50"
                      type="text" />
                  </td>
                </tr>
                <tr>
                    <th width="10%">Inactived</th>
                        <td width="50%">
                         <div class="selector" id="inactivced"><span>{{form.inactived}}</span>
                             <select id="inactivced" name="inactivced" v-model="form.inactived" tabindex="10003" style="min-width: 51px; opacity: 0; width: 80px;">
                              <option value="Yes" >Yes</option>
                                  <option value="No">No</option>
                              </select>
                         </div>
                      </td>
                </tr>
              </tbody>
            </table>
            <div class="search-box-footer">
              <div class="button type2" id="uniform-undefined">
                <span><input @click="save()" type="button" value="display" class="type2" style="opacity: 0; width: 54px"
                    tabindex="10025" />
                  Save</span>
              </div>
              <div class="button type2" id="uniform-undefined">
                <span>clear
                  <input type="button" value="clear" class="type2" style="opacity: 0; width: 63px"
                    tabindex="10026" /></span>
              </div>
              <div class="button type2" id="uniform-undefined">
                <span>CSV
                  <input type="button" value="outputCSV output" class="type2" style="opacity: 0; width: 76px"
                    tabindex="10027" /></span>
              </div>
              <span class="marker"></span>
            </div>
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
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="table table-striped br-table">
              <thead>
                <tr class="header-table">
                  <!-- <th width="5%">Image</th> -->
                  <th width="10%">Document No.</th>
                  <th width="10%">Document Type</th>
                  <th width="20%">Description</th>
                  <th width="10%">Suppliyer</th>
                  <th width="10%">Curency Code</th>
                  <th width="7%">Inactived</th>
                  <th width="11%"></th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="(purchase, index) in purchases.data" :key="index">
             
                  <td v-if="index % 2 == 0" style="
                      background-color: #f1f1f10f;
                      border: medium none;">
                    {{ purchase.document_no }}
                  </td>
                  <td v-else style="border: medium none;">
                    {{ purchase.document_no }}
                  </td>
                  <td v-if="index % 2 == 0" style="
                      background-color: #f1f1f10f;
                      border: medium none;
                    ">
                    {{ purchase.document_type }}
                  </td>
                  <td v-else style="border: medium none; ">
                    {{ purchase.document_type }}
                  </td>
                  <td v-if="index % 2 == 0" style="
                      background-color: #f1f1f10f;
                      border: medium none;
                     ;
                    ">
                    {{ purchase.description }}
                  </td>
                  <td v-else style="border: medium none; ">
                    {{ purchase.description }}
                  </td>
                  <td v-if="index % 2 == 0" style="
                      background-color: #f1f1f10f;
                      border: medium none;
                     
                    ">
                    {{ purchase.suppliyer_code }}
                  </td>
                  <td v-else style="border: medium none; ">
                    {{ purchase.suppliyer_code }}
                  </td>
                  <td v-if="index % 2 == 0" style="
                     background-color: #f1f1f10f;
                      border: medium none;
                
                    ">
                    {{ purchase.curency_code }}
                  </td>
                  <td v-else style="border: medium none; ">
                    {{ purchase.curency_code }}
                  </td>
                  <td v-if="index % 2 == 0" style="
                      background-color: #f1f1f10f;
                      border: medium none;
                      
                    ">
                    {{ purchase.inactived }}
                  </td>
                  <td v-else style="border: medium none; ">
                    {{ purchase.inactived }}
                  </td>
                  <td v-if="index % 2 == 0" style="
                      background-color: #f1f1f10f;
                      border: medium none; text-align: center;
                    ">
                    <div class="d-flex justify-content-center">
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
                <div class="row d-flex align-items-baseline">
                  <div class="col-xl-9">
                  </div>
                  <hr>
                </div>

                <div style="padding:0 100px 0 100px">
                  <div class="col-md-12">
                    <div class="text-center">
                      <h3 class="title-purchase">ALL PURCHASES REPORT</h3>
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
                      <p class="text-center p-bg font-size p-pad">TOTAL PURCHASE</p>
                      <p class="text-center p-mg">{{ purchases.total }}</p>
                    </div>
                  </div>
                  <div class=" my-2  justify-content-center">
                    <table id="pr-tb">
                    <thead>
                      <tr class="p-bg">
                        <th class="text-center">Document No</th>
                        <th class="text-center">Document Type</th>
                        <th class="text-center">Discription</th>
                        <th class="text-center">Suppliyer</th>
                        <th class="text-center">Curency</th>
                        <th class="text-center">Inactived</th>
                      </tr>
                    </thead>
                    <tbody >
                        <tr v-for="(purchase, index) in purchases.data" :key="index">
                          <td>{{ purchase.document_no }}</td>
                          <td>{{ purchase.document_type }}</td>
                          <td>{{ purchase.description }}</td>
                          <td>{{ purchase.suppliyer_code }}</td>
                          <td>{{ purchase.curency_code }}</td>
                          <td>{{ purchase.inactived }}</td>
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
import moment from "moment";
import pagination from "laravel-vue-pagination";
import Header from "../Header.vue";
export default {
  components:{Header, pagination},
  data() {
    return {
      links: [],
      purchases: [],
      company: [],
      dateformat: "",
      perPage: "",
      currentPage: 0,
      last_page: 1,
      form: {
        id: "",
        document_no: "",
        document_type: "",
        description: "",
        suppliyer_code: "",
        curency_code: "",
        inactived: "",
      },
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
          .get("api/v1/purchase/purchaseorder/view")
          .then(({ data }) => {
            this.links = data.links;
            this.last_page = data.last_page;
            this.links.forEach((element) => {
              if (element.label == page) {
                this.perPage = "api/v1/purchase/purchaseorder/view?page=" + page;
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
    getEdit(id) {
      if (id != "") {
        this.$router.push({
          name: "Purchase",
          query: { id: id },
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
    btnDelete(id) {
      axios.post("api/v1/purchase/delete/purchaseorder/" + id).then((res) => {
        this.getPurchase();
      });
    },
  },
};
</script>