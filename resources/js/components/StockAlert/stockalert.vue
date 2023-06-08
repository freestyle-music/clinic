<template>
    <div class="wrapper">
        <div class="container-fuild">
          <div id="headTitle">
      <div id="logo"><img alt="Healthbook" height="44" src="img/logo.png" width="70" _mstalt="155922" _msthash="1">
      </div>
      <h1 id="title" _msttexthash="48503" _msthash="2">Stock-Alert</h1>
    </div>
          <Header />
          <ol id="topicPath">
            <li style="margin-left: 300px;">
                <router-link to="menustock">
                  <a href="dashbaord">
                    <font style="vertical-align : inherit">
                      <font style="vertical-align : inherit">Stock-Alert</font>
                    </font>
                  </a>
                </router-link>
            </li>
          </ol>
    </div>
        <div class="search-box">
            <div id="product">
                <!--#contents -->
                <div class="search-box ">
                    <a class="btn-radius bt-pn btn btn-sm" data-bs-toggle="dropdown" aria-expanded="false" style="float: right; color: #f8f5b4">
                        <i class="fas fa-plus" style="padding-right: 5px"></i>
                        Menu
                    </a>
                    <a v-if="item > 0" class="btn-radius bt-pn btn btn-sm" data-bs-toggle="modal" data-bs-target="#statiex-import" tabindex="10028" style="float: right; color: #f8f5b4">
                        <span style="width: 14px;height: 14px; adding: 2px;color: white; font-weight: bold;">{{ item }}</span> To Purchese
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a @click="getsuppliyerview()"  class="dropdown-item btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticboomId"
                                tabindex="10028">
                                <i class="fa fa-print" aria-hidden="true"></i>
                                Print
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#staticBackdropss" tabindex="10028"
                                href="#">
                                <i class="fas fa-file-excel"></i> To Excel</a>
                        </li>
                        <li>
                            <a class="dropdown-item btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdropss" tabindex="10028">
                                <i class="fas fa-edit"></i> Release</a>
                        </li>
                    </ul>
                    <router-link to=""><h2 class="search-box-title">Search</h2></router-link>
                    <input id="search" name="search" type="hidden" value="1"/>
                </div>
                <div class="box">
                    <div class="box-footer-pagination">
                        <div class="pagination">
                            <div class="pagination">
                            </div>
                        </div>
                    </div>

                    <table width="100%" border="0" cellpadding="0" cellspacing="0" class="table table-striped br-table">
                        <thead>
                            <tr class="header-table">
                                <th width="3%">No</th>
                                <th width="13%">Product Code</th>
                                <th width="13%">Product Name</th>
                                <th width="13%">Re-Order</th>
                                <th width="9%">Inventory</th>
                                <th width="6%">Unit</th>
                                <th width="14%">Price</th>
                                <th width="7%"></th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr v-for="(item,index ) in items" :key="index" >
                                    <td width="3%">{{index+1}}</td>
                                    <td width="13%">{{item.product_no}}</td>
                                    <td width="13%">{{item.description}}</td>
                                    <td width="13%">{{item.reorder_point}}</td>
                                    <td width="13%">{{item.inventorys}}</td>
                                    <td width="6%">{{item.unit_of_measure_code}}</td>
                                    <td width="14%">{{item.unit_price}}</td>
                                    <td width="7%" class="text-center">
                                        <div class="checker" id="uniform-selkensatask9">
                                        <span v-if="item.checkbutton == '1'" class="checked" >
                                          <input  type="checkbox" value="display" id="selkensatask9" @click="getEdit(item)" tabindex="10008" style="opacity: 0">
                                        </span>    
                                        <span v-else >
                                           <input  type="checkbox" value="display" id="selkensatask9" @click="getEdit(item)" tabindex="10008" style="opacity: 0">
                                        </span>                                      
                                      </div>
                                    </td>
                                </tr>
                            </tbody>
                    </table>
                    <div class="box-footer-pagination">
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
                      <h3 class="title-purchase">STOCKALERT REPORT</h3>
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
                        <th class="text-center">No</th>
                        <th class="text-center">Product Code</th>
                        <th class="text-center">Product Name</th>
                        <th class="text-center">Re-Order</th>
                        <th class="text-center">Inventory</th>
                        <th class="text-center">Unit</th>
                        <th class="text-center">Price</th>
                      </tr>
                    </thead>
                    <tbody >
                      <tr v-for="(item, index) in items" :key="index">
                        <td>{{ index + 1 }}</td>
                        <td>{{ item.product_no }}</td>
                        <td>{{ item.description }}</td>
                        <td>{{ item.reorder_point }}</td>
                        <td>{{ item.inventorys }}</td>
                        <td >{{ item.unit_of_measure_code }}</td>
                        <td >{{ item.unit_price }}</td>
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

    <div class="modal fade ui-modal" id="statiex-import" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticboomId" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content ui-dialog">
                <div class="ui-widget-header">
                  <h5 class="modal-title in-header" id="staticBackdropLabel" ><i class="fa-solid fa-file"></i> Create Product Order: {{ purche.length-1 }}items</h5>
                  <a href="#" class="ui-dialog-titlebar-close ui-corner-all" role="button" data-bs-dismiss="modal">
                    <span class="ui-icon ui-icon-closethick">close</span></a>
                </div>
                <div id="purchaseorder">
                  <div class="card">
                    <div class="card-body">
                      <div class="container mb-5 mt-3">
                        <div class="row d-flex align-items-baseline">
                          <div class="col-xl-9">
                          </div>
                            <hr>
                        </div>

                        <div class="container">
                          <div class="col-md-12">
                            <div class="text-center">
                              <h3  class="title-purchase" id="titlered">Add Product Purchese</h3>
                            </div>
                          </div>
                          <div class="row my-2 mx-1 justify-content-center table-padding-bot customsroll">
                            <table class="table table-striped table-borderless" id="exceldata">
                              <thead style="background-color:#84B0CA ;" class="text-white">
                                <tr>
                                  <th style="width: 5%">No</th>
                                  <th style="width: 7%">Product No</th>
                                  <th style="width: 7%">Description</th>
                                  <th style="width: 10%">Unit Price</th>
                                  <th style="width: 7%">Inventory</th>
                                  <th style="width: 10%">Unit Code</th>
                                  <th style="width: 7%">Unit Code</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr v-for="(purchaseLine,index) in purche" :key="items.index">
                                  <th v-if="index>=1" style="width: 5%">{{index}}</th>
                                  <th v-if="index>=1" style="width: 7%">{{purchaseLine.product_no}}</th>
                                  <th v-if="index>=1" style="width: 10%">{{purchaseLine.description}}</th>
                                  <th v-if="index>=1" style="width: 7%">{{purchaseLine.unit_price}}</th>
                                  <th v-if="index>=1" style="width: 7%">{{purchaseLine.inventorys}}</th>
                                  <th v-if="index>=1" style="width: 7%">{{purchaseLine.stock_unit_of_measure_code}}</th>
                                  <th v-if="index>=1" style="width: 7%">
                                    <div class="button type2" id="uniform-undefined">
                                      <span><input @click="RemoveItem(purchaseLine.product_no)" type="button" value="display" class="type2" style="opacity: 0; width: 54px" tabindex="10025" /><i class="fa fa-edit"></i> Remove</span>
                                    </div>
                                  </th>
                                </tr>
                              </tbody>

                            </table>
                          </div>
                          <div class="row">
                          </div>
                          <hr>
                      

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                     <input v-if="excel=='Import'"  type="file" @change="getExcelData" name="select_file" /> 
                      <a v-else class="btn-purchase btn-light text-capitalize" data-bs-dismiss="modal" data-mdb-ripple-color="dark" @click="exportdataExcel()"><i class="fas fa-save"></i> Add Purchese Order</a> 
                     </div>
              </div>
            </div>
    </div>
    <div id="footer">
    <div id="copyright">Copyright (C) healthbook. ALL Right s Researved Edit by Lsky</div>
  </div>
</template>

<script>
import { tsImportEqualsDeclaration } from "@babel/types";
import axios from "axios";
import moment from "moment";
import Header from "../Header.vue";
import print from 'vue3-print-nb';
export default {
  components:{
    Header
  },
  directives:{
    print
  },
    data() {
        return {
            issave:'',
            bt1:'',
            bt2:'',
            company: [],
            items:{},
            links:[],
            products:[],
            purche:[{}],
            perPage: '',
            currentPage: 0,
            last_page: 1,
            item:'0',
            datasave:[{}],
            form:null,
            getProduct:[],
            docId:'',
            datass:[],
            dateformat:"",
        };
    },

    mounted() {
        this.getBrands();
        this.getcompany();
    },
    
    methods: {
        getBrands() {
        axios.get("/api/v1/stockcheck/checkOptionstock/")
          .then(( data ) => {
             this.items = data.data;
             this.datass = [];
             this.items.forEach(element => {
              element.checkbutton = '0';
              this.datass.push(element);
             });
              this.items = this.datass;
          })
    }, 
    getEdit(Product){
           if(this.purche.length == 0){
            this.purche = Product;
            Product.checkbutton = '1';
           }else{
            var check = false;
            this.purche.forEach(element => {
                if(Product == element){
                this.RemoveItem(element.product_no);
                Product.checkbutton = '0';
                   check = true;
                }
            });
            if(!check){
              Product.checkbutton = '1';
                this.purche.push(Product);
            }
           } 
           this.item = this.purche.length-1;
    },
    getcompany(){
      axios.get("/api/v1/getSetup/")
            .then((response) => {
             this.company = response.data;
             this.dateformart = moment(new Date()).format('YYYY-MM-DD');
            });
    },
    createPurches(){
        axios.post("/api/v1/purchase/store/").then((response) => {
      });
    },
    RemoveItem(id){
      var newArray  = [];
      this.purche.forEach(element => {
        if(element.product_no !=id){
          newArray.push(element);
        }else{
          element.checkbutton = '0';
        }
      });
      this.purche = newArray;
      this.item = this.purche.length-1;
      if(this.item < 0) this.item = 0;
    },
    save() {
      if(this.issave =="save"){
            this.isDisabled = false;
           axios.post('api/v1/brands/create',this.form).then(res => {
                    this.getBrands(1);
                })
            }
     else{
         this.isDisabled = true;
         axios.post('api/v1/brands/update/'+this.issave,this.form).then(res => {
            this.getBrands(1);   
              });
            }
        },
     dalete(brand){  
      axios.get('api/v1/brands/delete/'+brand).then(res => {
                this.getBrands(1);
        })
      },
    checkActionForm(checkform,bt1,bt2,brandId){
        if(checkform =="save"){         
            this.bt1 = bt1
            this.bt2 = bt2   
            this.issave ="save"
        }
         else{
            this.bt1 = bt1
            this.bt2 = bt2
            this.edit(brandId)
            this.issave = brandId
        }
     },
    serchdata(){
        axios.post('api/v1/brands/search').then(res => {     
        })
     },
   exportdataExcel(){
      if(this.item > 0){
      axios.post("/api/v1/purchase/store/").then((response) => {
        var x =1000;
        var i = 1;
        this.form = response.data;
        this.purche.forEach(element => {
          if(element.product_no != null){
            this.form.forEach(elementdata => {
                element.document_no = elementdata.document_no;
                element.document_type = elementdata.document_type;
              });
              setTimeout(() => this.get(element), x);
              i++;
            } 
         });
         setTimeout(() => this.getRoud(this.form[0].document_no), x*i);
      });
      }else{

      }
    },
    get(Product){
      axios.post("api/v1/purchase/update/Purchaselinealert/" + Product.document_no)
            .then((res) => {
                this.getProduct = res.data[0];
                this.getProduct.description = Product.description;
                this.getProduct.product_no = Product.product_no;
                this.getProduct.unit_of_measure_code = Product.stock_unit_of_measure_code;
                Product = this.getProduct;
                if(Product.document_no != ""){this.docId = Product.document_no;} 
                axios.post("/api/v1/purchase/update/purchaseline/"+ Product.document_no,Product).then((res) => { }); 
         });
    },    
    getRoud(id) {
      console.log(id);
      if (id != "") {
        this.$router.push({
          name: "Purchase",
          query: { id: id },
        });
      }
    },
  }
};

</script>
