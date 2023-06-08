<template>
  <div class="wrapper">
    <div class="container-fuild">
      <div id="headTitle">
        <div id="logo"><img alt="Healthbook" height="44" src="img/logo.png" width="70" _mstalt="155922" _msthash="1">
        </div>
        <h1 id="title" _msttexthash="48503" _msthash="2">Group-Product</h1>
      </div>
      <Header />
      <ol id="topicPath">
        <li>
          <router-link to="productsetting">
            <a href="dashbaord">
              <font style="vertical-align : inherit">
                <font style="vertical-align : inherit">
                  Group-Product
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
        <div class="search-box mb-4">
          <a class="btn-radius bt-pn btn btn-sm" data-bs-toggle="dropdown" aria-expanded="false"
            style="float:right; color: #f8f5b4;">
            <i class="fas fa-plus" style="padding-right:5px; ">
            </i>
            Menu
          </a>
          <ul class="dropdown-menu">
            <li>
              <a @click="getproductboom()" class="dropdown-item btn btn-primary" data-bs-toggle="modal"
                data-bs-target="#staticboomId" tabindex="10028"><i class="fa-solid fa-circle-b"></i> Boom Product</a>
            </li>
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
          <div class="search-box-title" style="padding-left: 35px;">
            <router-link to="Brands">
              <a class="btn-radius btn btn-sm" href="#" style="color: #f8f5b4; margin-top: -2px; color: #dbdee1">
                <i class="fa fa-cog" aria-hidden="true"></i>
                Brand
              </a>
            </router-link>
            <router-link to="Supplies">
              <a class="btn-radius btn btn-sm" href="#" style="color: #f8f5b4; margin-top: -2px; color: #dbdee1">
                <i class="fa fa-cog" aria-hidden="true"></i>
                Suppliyer
              </a>
            </router-link>
            <router-link to="unitcode">
              <a class="btn-radius btn btn-sm" href="#" style="color: #f8f5b4; margin-top: -2px; color: #dbdee1">
                <i class="fa fa-cog" aria-hidden="true"></i>
                Unitcode
              </a>
            </router-link>
            <router-link to="Category">
              <a class="btn-radius btn btn-sm" href="#" style="color: #f8f5b4; margin-top: -2px; color: #dbdee1">
                <i class="fa fa-cog" aria-hidden="true"></i>
                Category
              </a>
            </router-link>
            <router-link to="exchangerate">
              <a class="btn-radius btn btn-sm" href="#" style="color: #f8f5b4; margin-top: -2px; color: #dbdee1">
                <i class="fa fa-cog" aria-hidden="true"></i>
                Exchangerate
              </a>
            </router-link>
            <router-link to="paymenMethod">
              <a class="btn-radius btn btn-sm" href="#" style="color: #f8f5b4; margin-top: -2px; color: #dbdee1">
                <i class="fa fa-cog" aria-hidden="true"></i>
                Payment
              </a>
            </router-link>
            <router-link to="serailcode">
              <a class="btn-radius btn btn-sm" href="#" style="color: #f8f5b4; margin-top: -2px; color: #dbdee1">
                <i class="fa fa-cog" aria-hidden="true"></i>
                SerailCode
              </a>
            </router-link>
            <router-link to="testserviceview">
              <a class="btn-radius btn btn-sm" href="#" style="color: #f8f5b4; margin-top: -2px; color: #dbdee1">
                <i class="fa fa-cog" aria-hidden="true"></i>
                ServiceTest
              </a>
            </router-link>
            <router-link to="company">
              <a class="btn-radius btn btn-sm" href="#" style="color: #f8f5b4; margin-top: -2px; color: #dbdee1">
                <i class="fa fa-cog" aria-hidden="true"></i>
                Company
              </a>
            </router-link>
          </div>
          <input id="search" name="search" type="hidden" value="1" />
          <div class="search-box-content">
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="tbl_search" id="hover-table">
              <tbody>
                <tr>
                  <th width="10%">Group Name</th>
                  <td width="90%">
                    <input id="group_name" name="group_name" type="text" class="text" v-model="form.group_name"
                      tabindex="10028" style="width:359px">
                  </td>
                </tr>
                <tr>
                  <th width="10%">Group Name 2</th>
                  <td width="90%">
                    <input id="group_name_2" name="group_name_2" type="text" class="text" v-model="form.group_name_2"
                      tabindex="10029" style="width:359px">
                  </td>
                </tr>
                <tr>
                  <th width="10%">Brand Code</th>
                  <td width="90%">
                    <select :disabled="isDisabled" @change="autoUpdateProduct(form)" v-model="form.brand_code"
                      class="form form-2" style="width: 359px;">
                      <option v-for="brand in brands" :value='brand.brand_code'>{{ brand.brand_name }}</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <th width="12%">Category Code</th>
                  <td width="90%">
                    <select :disabled="isDisabled" @change="autoUpdateProduct(form)" v-model="form.cat_code"
                      class="form form-2" style="width: 359px;">
                      <option v-for="Cat in Cats" :value='Cat.cat_code'>{{ Cat.cat_name }}</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <th width="10%">Inactived</th>
                  <td width="90%">
                    <div class="selector" id="inactivced"><span>{{ form.inactived }}</span>
                      <select id="inactivced" name="inactivced" v-model="form.inactived" tabindex="10003"
                        style="min-width: 51px; opacity: 0; width: 80px; outline: none;">
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                      </select>
                    </div>
                  </td>
                </tr>

              </tbody>
            </table>

            <div class="search-box-footer">
              <div v-if="btnback == true" @click="btnBack()" class="button type2" id="uniform-undefined">
                <span><i class="fa fa-arrow-left" style="margin-right: 7px;"></i>Back</span>
                <input type="button" value="save" class="type2" @click="save()" style="opacity: 0; width: 63px"
                  tabindex="10026" />
              </div>
              <div class="button type2" id="uniform-undefined">
                <span><i class="fa fa-search" aria-hidden="true" style="margin-right: 7px;"></i>Search</span>
                <input type="button" value="save" class="type2" @click="save()" style="opacity: 0; width: 63px"
                  tabindex="10026" />
              </div>
              <div class="button type2" id="uniform-undefined" @click="btnSave()">
                <span><i class="fas fa-file-import" style="margin-right: 7px;"></i>{{ btncheckEdit }}</span>
                <input type="button" value="clear" class="type2" style="opacity: 0; width: 63px" tabindex="10026" />
              </div>
              <span class="marker"></span>
            </div>
          </div>
        </div>
        <div class="box">
          <table width="100%" border="0" cellpadding="0" cellspacing="0" class="table table-striped br-table newhover">
            <thead>
              <tr class="header-table">
                <th>No</th>
                <th>Group Name</th>
                <th>Group Name 2</th>
                <th>Brand Code</th>
                <th>Cat Code</th>
                <th>Inactived</th>
                <th>Create By</th>
                <th>Update By</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="item, index in items.data" :key="index">
                <td>{{ index + 1 }}</td>
                <td>{{ item.group_name }}</td>
                <td>{{ item.group_name_2 }}</td>
                <td>{{ item.brand_code }}</td>
                <td>{{ item.cat_code }}</td>
                <td>{{ item.inactived }}</td>
                <td>{{ item.created_by }}</td>
                <td>{{ item.updete_by }}</td>
                <td>
                  <div style="display:flex; flex-direction:row; justify-content:center; align-items: center">
                    <div class="button" @click="checkActionForm('update', 'Update', 'Close', item)">
                      <span><i class="fa fa-edit" aria-hidden="true"></i> Select<input type="button"
                          data-bs-toggle="modal" data-bs-target="#staticBackdrop" tabindex="10028"
                          style="opacity: 0; width: 76px;"></span>
                    </div>
                    <div class="button" @click="deleteData(item.group_code)" id="uniform">
                      <span><i class="fa fa-trash" aria-hidden="true"></i> Delete<input type="button"
                          style="opacity: 0; width: 76px;"></span>
                    </div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
          <div class="box-footer-pagination">
            <pagination :data="items" @pagination-change-page="showdata" />
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
              <div class=" mt-3 print-size">
                <div class="row d-flex align-items-baseline">
                  <div class="col-xl-9">
                  </div>
                  <hr>
                </div>

                <div style="padding:0 50px 0 50px">
                  <div class="col-md-12">
                    <div class="text-center">
                      <h3 class="title-purchase">PRODUCT-GROUP REPORT</h3>
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
                      <p class="text-center p-bg font-size p-pad">TOTAL GROUP</p>
                      <p class="text-center p-mg">{{ items.total }}</p>

                    </div>
                  </div>
                  <div class=" my-2  justify-content-center">
                    <table id="pr-tb">
                      <thead>
                        <tr class="p-bg">
                          <th class="text-center" width="10">No</th>
                          <th class="text-center" width="40">Group Name</th>
                          <!-- <th class="text-center">Brand Name</th> -->
                          <th class="text-center" width="20%">Brand Code</th>
                          <th class="text-center" width="20">Cat Code</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr v-for="item, index in items.data" :key="index">
                          <td>{{ index + 1 }}</td>
                          <td>{{ item.group_name }}</td>
                          <td>{{ item.brand_code }}</td>
                          <td>{{ item.cat_code }}</td>
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
  <Footer />
</template>

<script>
import axios from "axios";
import { exportDefaultSpecifier } from '@babel/types';
import Auth from '../../auth/Auth.js';
import moment from "moment";
import Header from "../Header.vue";
import Footer from "../footer.vue";
import pagination from "laravel-vue-pagination";
window.Menu = "Group-Product";
import print from 'vue3-print-nb'
export default {
  components: { Header, pagination, Footer },
  directives:{
    print
  },
  data() {
    return {
      loggedUser: {
        id: '',
        user_code: '',
        user_name: '',
        email: '',
        role: '',
        statue: ''
      },
      issave: 'save',
      bt1: 'Save',
      bt2: 'Close',
      items: {},
      company: [],
      dateformart: '',
      links: [],
      brands: [],
      Cats: [],
      products: [],
      perPage: '',
      currentPage: 0,
      last_page: 1,
      imagePreviewURL: [],
      btnback: false,
      btncheckEdit: "Save",
      form: {
        id: "",
        group_name: "",
        image_url: "",
        group_name_2: "",
        brand_code: "",
        cat_code: "",
        inactived: "Yes",
        created_by: "",
        updated_by: "",
      },
      forms: {
        id: "",
        group_code: "",
        group_name: "",
        image_url: "",
        group_name_2: "",
        brand_code: "",
        cat_code: "",
        inactived: "",
        created_by: "",
        updated_by: "",
      },
    };
  },
  mounted() {
    this.loggedUser = Auth.user;
    console.log(this.loggedUser);
    this.showdata()
    this.getBrand()
    this.getCat()
    this.getcompany();
  },
  methods: {
    getProductGroup() {
      axios.get('api/v1/productgroup').then(res => {
        this.items = res
      });
    },
    btnSave() {
      if (this.btncheckEdit == 'Save') {
        this.form.created_by = this.loggedUser.user_code;
        axios.post('api/v1/progroups/create', this.form)
          .then(res => {
            this.form = {}
            this.showdata()
          })
      }
      else {
        this.btnUpdate()
        this.form = {}
      }
    },
    btnUpdate() {
      this.form.updated_by = this.loggedUser.user_code;
      axios.post('api/v1/progroups/updete/' + this.issave, this.form)
        .then(res => {
          this.showdata()
          this.btncheckEdit = "Save"
          this.btnback = false
        })
    },
    btnBack() {
      this.form = {}
      this.btnback = false
      this.btncheckEdit = "Save"
    },
    getcompany() {
      axios.get("/api/v1/getSetup/")
        .then((response) => {
          this.company = response.data;
          this.dateformart = moment(new Date()).format('YYYY-MM-DD');
        });
    },
    onFileChange(payload) {
      file = payload
      if (file) {
        this.imagePreviewURL = URL.createObjectURL(file),
          URL.revokeObjectURL(file);
      } else {

        this.imagePreviewURL = null
      }
    },
    checkActionForm(checkform, bt1, bt2, brandId) {
      this.form = {}
      this.bt1 = bt1
      this.bt2 = bt2

      if (checkform == "save") {
        this.issave = 'save'
      }
      else {
        this.form = brandId
        this.issave = brandId.id
      }
      this.btncheckEdit = 'Update'
      this.btnback = true
    },
    showdata(page = 1) {
      if (page > 0 && page <= this.last_page) {
        axios.get('/api/v1/progroups').then(({ data }) => {
          this.links = data.links
          this.last_page = data.last_page
          this.links.forEach(element => {
            if (element.label == page) {
              this.perPage = "api/v1/progroups?page=" + page
              axios.get(this.perPage).then(({ data }) => {
                this.currentPage = data.current_page
                this.items = data
              })
            }
          });

        }).catch(({ response }) => {
          console.error(response)
        })
      }
    },
    deleteData(id) {
      axios.get('/api/v1/progroups/delete/' + id).then(res => {
        this.showdata()
      })
    },
    getBrand() {
      axios.get('api/v1/brands/getdata').then(res => {
        this.brands = res.data
      })
    },
    getCat() {
      axios.get('api/v1/category/getCatName').then(res => {
        this.Cats = res.data
      })
    },
  },
};

</script>