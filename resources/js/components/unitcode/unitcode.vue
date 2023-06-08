<template>
  <div class="wrapper">
    <div class="container-fuild">
      <div id="headTitle">
        <div id="logo"><img alt="Healthbook" height="44" src="img/logo.png" width="70" _mstalt="155922" _msthash="1">
        </div>
        <h1 id="title" _msttexthash="48503" _msthash="2">Unit Type</h1>
      </div>
    </div>
    <div class="container-fuild">
      <Header />
      <ol id="topicPath">
        <li style="margin:-32px 0px 0px 280px;">
          <router-link to="productsetting">
            <a href="dashbaord">
              <font style="vertical-align : inherit">
                <font style="vertical-align : inherit">
                  Unit Type
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
            <router-link to="Group">
              <a class="btn-radius btn btn-sm" href="#" style="color: #f8f5b4; margin-top: -2px; color: #dbdee1">
                <i class="fa fa-cog" aria-hidden="true"></i>
                Group
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
                <!-- <tr>
                  <th width="10%">Code</th>
                  <td width="90%">
                    <input class="string_zen_kana clear_text text" v-model="form.code" maxlength="8" size="50"
                      type="text" tabindex="10000" style="width: 359px;">
                  </td>
                </tr> -->
                <tr>
                  <th width="10%">UnitCode</th>
                  <td width="90%">
                    <input class="string_zen_kana clear_text text" name="UnitCode" maxlength="50"
                      v-model="form.unit_code" size="50" type="text" tabindex="10001" style="width: 359px;">
                  </td>
                </tr>

                <tr>
                  <th width="10%">Description</th>
                  <td width="90%">
                    <input class="string_zen_kana clear_text text" maxlength="50" name="Description"
                      v-model="form.unit_of_measure" size="50" type="text" tabindex="10001" style="width: 359px;">
                  </td>
                </tr>

                <tr>
                  <th width="10%">Type</th>
                  <td width="90%">
                    <button class="dropdown-toggle string_zen clear_text text select-menu" type="button"
                      id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" size="50"
                      style="color:#777; width: 359px;">
                      {{ form.type }}
                      <i class="fa fa-chevron-down" style="float: right;"></i>
                    </button>
                    <div class="dropdown-menu each-drop-menu" aria-labelledby="dropdownMenuButton1">
                      <ul style="list-style: none" class="scrollable-menu">
                        <li @click="getproduct('Product')">
                          <div class="menu-item">
                            <p>Product</p>
                          </div>
                        </li>
                        <li @click="getproduct('ServiceTest')">
                          <div class="menu-item">
                            <p>Service test</p>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>

            <div class="search-box-footer">
              <div v-if="btnback == true" class="button type2" id="uniform-undefined" @click="btnBack()">
                <span><i class="fa fa-arrow-left" style="margin-right: 7px;"></i>Back</span>
                <input type="button" value="save" class="type2" @click="save()" style="opacity: 0; width: 63px"
                  tabindex="10026" />
              </div>
              <div class="button type2" id="uniform-undefined">
                <span><i class="fa fa-search" aria-hidden="true" style="margin-right: 7px;"></i>Search</span>
                <input type="button" value="clear" class="type2" @click="clear()" style="opacity: 0; width: 63px"
                  tabindex="10026" />
              </div>
              <div class="button type2" id="uniform-undefined" data-bs-toggle="modal" data-bs-target="#comfirmcreate">
                <span><i class="fas fa-file-import" style="margin-right: 7px;"></i>{{btncheckEdit}}</span>
                <input type="button" value="clear" class="type2" @click="clear()" style="opacity: 0; width: 63px"
                  tabindex="10026" />
              </div>
              <span class="marker"></span>
            </div>
          </div>

          <div class="box" style="margin-top:25px">
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="tbl_list tbl_stripe">
              <thead>
                <tr>
                  <th width="3%">Id</th>
                  <th width="12%">UnitCode</th>
                  <th width="12%">Description</th>
                  <th width="12%">Type</th>
                  <th width="12%"></th>
                </tr>
              </thead>
            </table>
            <!-- change name newhover -->
            <div class="newhover">
              <table width="100%" border="0" cellpadding="0" cellspacing="0" class="table table-striped table-bordered"
                style="margin-bottom: 0 !important;">
                <tbody>
                  <tr v-for="(Serail, index) in serails.data" :key="index">
                    <td width="3%">{{ index + 1 + "." }}</td>
                    <td width="12%">{{ Serail.unit_code }}</td>
                    <td width="12%">{{ Serail.unit_of_measure }}</td>
                    <td width="12%">{{ Serail.type }}</td>
                    <td width="12%" class="text-center">
                      <div class="button" id="uniform-undefined">
                        <span><i class="fa fa-edit"></i> Select<input type="button" @click="btnEdit(Serail)"
                            data-bs-toggle="modal" data-bs-target="#staticBackdrop" tabindex="10028"
                            style="opacity: 0; width: 140px" />
                        </span>
                      </div>
                      <div class="button" id="uniform-undefined">
                        <span><i class="fa fa-trash" aria-hidden="true"></i> Delete<input type="button"
                            @click="btnDelete(Serail.id)" data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                            tabindex="10028" style="opacity: 0; width: 140px" />
                        </span>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="box-footer-pagination">
              <pagination :data="serails" @pagination-change-page="getSerail" />
            </div>
          </div>
          <!-- save comfirm  -->
          <div class="modal fade ui-modal" id="comfirmcreate" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="clearconfirmlabel" aria-hidden="true">
            <div class="modal-dialog smallpopup" id="nonbackgroundboom">
              <div class="modal-content ui-dialog">
                <div class="ui-widget-header">
                  <h5 class="modal-title" id="exampleModalLabel">
                    <span class="ui-dialog-title" id="ui-dialog-title-modal-edit-dialog">Confirm Message</span>
                  </h5>
                  <span class="ui-icon ui-icon-closethick btn-cancel" data-bs-dismiss="modal" aria-label="Close"></span>
                </div>
                <div class="ui-dialog-content" style="background-color: #fff;">
                  <div class="modal-body">Do you want to Save?</div>
                  <div class="modal-footer">
                    <div class="button type2" @click="btnSelect()" data-bs-dismiss="modal">
                      <span>Yes</span>
                    </div>
                    <div class="button type2" id="uniform-undefined" data-bs-dismiss="modal" @click="cancel()">
                      <span>No<input type="button" class="type2" tabindex="10008" value="No"
                          style="width: 89px; opacity: 0;">
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end save comfirm  -->

          <!-- <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog smallpopup" id="sup">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel">
                    UnitCode
                  </h5>
                  <span class="ui-icon ui-icon-closethick" data-bs-dismiss="modal" aria-label="Close"></span>
                </div>
                <div style="margin: 0; padding: 10px; display: inline">
                  <table width="100%" border="0" cellpadding="0" cellspacing="0" class="tbl_search">
                    <tbody>
                      <tr>
                        <th width="30%">Code</th>
                        <td>
                          <input id="serailcode" name="serailcode" v-model="form.code" type="text" class="text"
                            tabindex="10028" />
                        </td>
                      </tr>
                      <tr>
                        <th>UnitCode</th>
                        <td>
                          <input id="prefixcode" name="prefixcode" v-model="form.unit_code" type="text" class="text"
                            tabindex="10029" />
                        </td>
                      </tr>
                      <tr>
                        <th>Description</th>
                        <td>
                          <input id="qtycode" name="qtycode" v-model="form.unit_of_measure" type="text" class="text"
                            tabindex="10029" />
                        </td>
                      </tr>
                      <tr>
                        <th>Type</th>
                        <td>
                          <button class="dropdown-toggle string_zen clear_text text select-menu" type="button"
                            id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" size="50"
                            style="color:#777;">
                            {{ form.type }}
                            <i class="fa fa-chevron-down" style="float: right;"></i>
                          </button>
                          <div class="dropdown-menu each-drop-menu" aria-labelledby="dropdownMenuButton1">
                            <ul style="list-style: none" class="scrollable-menu">
                              <li @click="getproduct('Product')">
                                <div class="menu-item">
                                  <p>Product</p>
                                </div>
                              </li>
                              <li @click="getproduct('ServiceTest')">
                                <div class="menu-item">
                                  <p>Service test</p>
                                </div>
                              </li>
                            </ul>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="modal-footer">
                  <div v-if="checkbt == 'create'" class="button type2" id="uniform-undefined">
                    <span> Save</span>
                    <input type="button" value="save" class="type2" @click="btnSave()" style="opacity: 0; width: 63px"
                      tabindex="10026" data-bs-dismiss="modal" aria-label="Close" />
                  </div>
                  <div v-else class="button type2" id="uniform-undefined">
                    <span> Update</span>
                    <input type="button" value="edit" @click="btnUpdate()" class="type2" style="opacity: 0; width: 63px"
                      tabindex="10026" data-bs-dismiss="modal" />
                  </div>
                  <div class="button type2" id="uniform-undefined">
                    <span>Close</span>
                    <input type="button" value="clear" class="type2" data-bs-dismiss="modal" aria-label="Close"
                      @click="btnClear()" style="opacity: 0; width: 63px" tabindex="10026" />
                  </div>
                </div>
              </div>
            </div>
          </div> -->
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

                <div style="padding:0 50px 0 50px">
                  <div class="col-md-12">
                    <div class="text-center">
                      <h3 class="title-purchase">UNITCODE REPORT</h3>
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
                      <p class="text-center p-bg font-size p-pad">TOTAL UNIT</p>
                      <p class="text-center p-mg">{{ serails.total }}</p>
                    </div>
                  </div>
                  <div class=" my-2  justify-content-center">
                    <table id="pr-tb">
                      <thead>
                        <tr class="p-bg">
                          <th class="text-center" scope="col">No</th>
                          <th class="text-center" scope="col">UnitCode</th>
                          <th class="text-center" scoppe="col">Discription</th>
                          <th class="text-center" scope="col">Type</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr v-for="(Serail, index) in serails.data" :key="index">
                          <td width="3%">{{ index + 1 }}</td>
                          <td width="12%">{{ Serail.unit_code }}</td>
                          <td width="12%">{{ Serail.unit_of_measure }}</td>
                          <td width="12%">{{ Serail.type }}</td>
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
          <a v-print="'#purchaseorder'" class="btn-purchase btn-light text-capitalize border-0"
            data-mdb-ripple-color="dark"><i class="fas fa-print text-primary"></i> Print</a>
        </div>
      </div>
    </div>
  </div>
  <Footer />
</template>


<script>
  import axios from "axios";
  import pagination from "laravel-vue-pagination";
  import Auth from '../../auth/Auth.js';
  import moment from "moment";
  import Header from "../Header.vue";
  import Footer from "../footer.vue";
  import print from 'vue3-print-nb'
  // window.Menu = "Unit-of-Mesoure";
  export default {
    components: { Header, pagination, Footer },
    directives: {
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
        serails: [],
        company: [],
        formatdate: "",
        checkbt: '',
        perPage: "",
        currentPage: 0,
        last_page: 1,
        action_api: "",
        action_api_1: "",
        product: "",
        btncheckEdit: "Save",
        btnback: false,
        form: {
          id: "",
          unit_code: "",
          unit_of_measure: "",
          type: "",
          bom_no: "",
          quantity: "",
          inactived: "",
          is_deleted: "",
          created_by: "",
          updated_by: "",
        },
      };
    },

    mounted() {
      this.loggedUser = Auth.user;
      console.log(this.loggedUser);
      this.getSerail();
      this.getcompany();
    },

    methods: {
      getSerail(page = 1) {
        if (page > 0 && page <= this.last_page) {
          axios
            .get("api/v1/units")
            .then(({ data }) => {
              this.links = data.links;
              this.last_page = data.last_page;
              this.links.forEach((element) => {
                if (element.label == page) {
                  this.perPage = "api/v1/units?page=" + page;
                  axios.get(this.perPage).then(({ data }) => {
                    this.currentPage = data.current_page;
                    this.serails = data;
                  });
                }
              });
            })

            .catch(({ response }) => {
              console.error(response);
            });
        }
      },
      btn_checkEdit(itemss) {
        this.form = itemss;
        this.btncheckEdit = "Update"
      },
      getcompany() {
        axios.get("/api/v1/getSetup/")
          .then((response) => {
            this.company = response.data;
            this.dateformart = moment(new Date()).format('YYYY-MM-DD');
          });
      },
      btnClear() {
        this.form = {};
      },
      btnClose() {
        this.form = {};
      },
      btnAdd() {
        this.checkbt = 'create';
        this.form = {};
        this.action_api = "api/v1/units/store";
      },
      btnSave() {
        this.form.created_by = this.loggedUser.user_code;
        axios.post("api/v1/units/store", this.form).then((res) => {
          this.getSerail();
          this.form = Object.assign({});
        });
      },
      btnSelect() {
        if (this.btncheckEdit == "Update") {
          this.btnUpdate();
        }
        else {
          this.btnSave();
        }
      },
      btnBack() {
        this.form = {}
        this.btncheckEdit = "Save"
        this.btnback = false
      },
      btnEdit(serail) {
        this.btncheckEdit = "Update"
        this.form = serail;
        this.btnback = true
      },
      btnUpdate() {
        this.form.updated_by = this.loggedUser.user_code;
        axios.post("/api/v1/units/update/" + this.form.code, this.form)
          .then((res) => {
            console.log(res);
            this.getSerail();
            this.form = {};
            this.btncheckEdit = "Save";
            this.btnback = false
          });
      },
      btnDelete(id) {
        axios.post("api/v1/units/delete/" + id).then((res) => {
          this.getSerail();
        });
      },
      getproduct(text) {
        this.form.type = text;
      },
    },
  };

</script>