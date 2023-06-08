<template>
    <div class="wrapper">
        <div id="headTitle">
            <div id="logo"><img alt="Healthbook" height="43" src="img/logo1.png" width="48.5" _mstalt="155922" _msthash="1">
      </div>
      <h1 id="title" _msttexthash="48503" _msthash="2">SerailCode</h1>
    </div>
      <Header />
      <ol id="topicPath">
          <li style="margin-left:300px">
            <router-link to="menupurchase"><a href="dashbaord">
              <font style="vertical-align: inherit"
                ><font style="vertical-align: inherit">SerailCode</font></font>
            </a>
            </router-link>
          </li>
        </ol>
        <div class="container-fuild">
    </div>
        <div class="search-box">
            <div id="product">
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
            <router-link to="/brands"><a class="btn-radius btn btn-sm" href="#"
                style="color: #f8f5b4; margin-top: -2px">
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
            <router-link to="/group"><a class="btn-radius btn btn-sm" href="#" style="color: #f8f5b4; margin-top: -2px">
                <i class="fa fa-cog" aria-hidden="true"></i>
                Group
              </a></router-link>
            <router-link to="/category"><a class="btn-radius btn btn-sm" href="#"
                style="color: #f8f5b4; margin-top: -2px">
                <i class="fa fa-cog" aria-hidden="true"></i>
                Category
              </a></router-link>
            <router-link to="/exchangerate"><a class="btn-radius btn btn-sm" href="#"
                style="color: #f8f5b4; margin-top: -2px">
                <i class="fa fa-cog" aria-hidden="true"></i>
                Exchangerate
              </a></router-link>
            <router-link to="/paymenMethod"><a class="btn-radius btn btn-sm" href="#"
                style="color: #f8f5b4; margin-top: -2px">
                <i class="fa fa-cog" aria-hidden="true"></i>
                Payment
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
        </h2>

          <input id="search" name="search" type="hidden" value="1" />
                    <input id="search" name="search" type="hidden" value="1" />
                    <div class="search-box-content">
                        <table width="100%" border="0" cellpadding="0" cellspacing="0" class="tbl_search" id="hover-table">
                            <tbody>
                                <tr>
                                    <th width="10%">SerailCode</th>
                                    <td width="90%">
                                        <input class="string_zen_kana clear_text text" v-model="form.serail_code"
                                            maxlength="8" size="50" type="text" tabindex="10000"/>
                                    </td>
                                </tr>
                                <tr>
                                    <th width="10%">PrefixCode</th>
                                    <td width="90%">
                                        <input class="string_zen_kana clear_text text" name="PrefixCode" maxlength="50"
                                            v-model="form.prefix_code" size="50" type="text" tabindex="10001"/>
                                    </td>
                                </tr>
                                <tr>
                                    <th width="10%">QtyCode</th>
                                    <td width="90%">
                                        <input class="string_zen_kana clear_text text" maxlength="50" name="QtyCode"
                                            v-model="form.qty_code" size="50" type="text" tabindex="10001"/>
                                    </td>
                                </tr>
                                <tr>
                                    <th width="10%">StartCode</th>
                                    <td width="90%">
                                        <input class="string_zen_kana clear_text text" maxlength="50" name="StartCode"
                                            v-model="form.start_code" size="50" type="text" tabindex="10001"/>
                                    </td>
                                </tr>
                                <tr>
                                    <th width="10%">EndCode</th>
                                    <td width="90%">
                                        <input class="string_zen_kana clear_text text" maxlength="50" name="StartCode" v-model="form.end_code"
                                            size="50" type="text" tabindex="10001"/>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        
                        <div class="search-box-footer">

                            <div v-if="backed == true" class="button type2" id="uniform-undefined" >
                            <span><input @click="back()" type="button" value="display" class="type2"
                                style="opacity: 0; width: 54px" tabindex="10025" /><i class="fa fa-arrow-left" style="margin-right: 3px;"></i>
                                Back</span>
                            </div>
 
                            <div v-if="btn_search_delete == 'Delete'" class="button type2" id="uniform-undefined" data-bs-target="#serialdeteted" data-bs-toggle="modal"  >
                            <span><input  type="button" value="display" class="type2"
                                style="opacity: 0; width: 54px" tabindex="10025" />
                                <i v-if="btn_search_delete == 'Search'" class="fa fa-search" aria-hidden="true"></i>
                                <i v-else class="fa fa-trash"  aria-hidden="true"></i>

                                {{ btn_search_delete }}</span>
                            </div>

                            <div v-else class="button type2" id="uniform-undefined" >
                            <span><input @click="search()" type="button" value="display" class="type2"
                                style="opacity: 0; width: 54px" tabindex="10025" />
                                <i v-if="btn_search_delete == 'Search'" class="fa fa-search" aria-hidden="true"></i>
                                <i v-else class="fa fa-trash"  aria-hidden="true"></i>

                                {{ btn_search_delete }}</span>
                            </div>

                            <div class="button type2" id="uniform-undefined" data-bs-toggle="modal" data-bs-target="#serialsave"> 
                            <span><input type="button" value="display" class="type2"
                                style="opacity: 0; width: 54px" tabindex="10025" /><i class="fas fa-file-import"></i>
                                {{ btn_save_update }}</span>
                            </div>
                            <span class="marker"></span>
                        </div>
                        
                    </div>

                    <div class="box" style="margin-top:25px">
                        <table width="100%" border="0" cellpadding="0" cellspacing="0" class="tbl_list tbl_stripe">
                            <thead>
                                <tr>
                                    <th width="3%">id</th>
                                    <th width="12%">SerailCode</th>
                                    <th width="12%">PrefixCode</th>
                                    <th width="12%">QtyCode</th>
                                    <th width="12%">StartCode</th>
                                    <th width="12%">EndCode</th>
                                    <th width="5%">
                                    </th>
                                </tr>
                            </thead>
                        </table>
                        <div class="box-content">
                            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="table table-striped table-bordered newhover"
                                style="margin-bottom: 0 !important">
                                <tbody>
                                    <tr
                                        v-for="(Serail, index) in serails.data" :key="index" >
                                        <td width="3%">{{ index + 1 + "." }}</td>
                                        <td width="12%">{{ Serail.serail_code }}</td>
                                        <td width="12%">{{ Serail.prefix_code }}</td>
                                        <td width="12%">{{ Serail.qty_code }}</td>
                                        <td width="12%">{{ Serail.start_code }}</td>
                                        <td width="12%">{{ Serail.end_code }}</td>
                                        <td width="5%" class="text-center">
                                            <div class="button" id="uniform-undefined">
                                                <span>
                                                    <i class="fa fa-edit"></i>
                                                    Select
                                                    <input type="button" @click="btnEdit(Serail)" data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                                        tabindex="10028" style="opacity: 0;width: 100%;"/>
                                                </span>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="modal fade ui-modal" id="serialsave" data-bs-backdrop="static" data-bs-keyboard="false"
                            tabindex="-1" aria-labelledby="clearconfirm" aria-hidden="true">btnsave
                            <div class="modal-dialog smallpopup" id="nonbackgroundboom">
                                <div class="modal-content ui-dialog">
                                <div class="ui-widget-header">
                                    <h5 class="modal-title" id="exampleModalLabel">
                                    <span class="ui-dialog-title" id="ui-dialog-title-modal-edit-dialog">Confirm Message</span>
                                    </h5>
                                    <span class="ui-icon ui-icon-closethick btn-cancel" data-bs-dismiss="modal"
                                    aria-label="Close"></span>
                                </div>
                                <div class="ui-dialog-content" style="background-color: #fff;">
                                    <div class="modal-body">Do you want to save ?</div>
                                    <div class="modal-footer">
                                    <div class="button type2" id="uniform-undefined" data-bs-dismiss="modal" @click="cancel()">
                                        <span>No<input type="button" class="type2" tabindex="10008" value="No"
                                            style="width: 89px; opacity: 0;">
                                        </span>
                                    </div>
                                    <div class="button type2" data-bs-dismiss="modal" @click="save()"><span>Yes</span></div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class="modal fade ui-modal" id="serialdeteted" data-bs-backdrop="static" data-bs-keyboard="false"
                            tabindex="-1" aria-labelledby="clearconfirm" aria-hidden="true"> {{ medol_delted }}
                            <div class="modal-dialog smallpopup" id="nonbackgroundboom">
                                <div class="modal-content ui-dialog">
                                <div class="ui-widget-header">
                                    <h5 class="modal-title" id="exampleModalLabel">
                                    <span class="ui-dialog-title" id="ui-dialog-title-modal-edit-dialog">Confirm Message</span>
                                    </h5>
                                    <span class="ui-icon ui-icon-closethick btn-cancel" data-bs-dismiss="modal"
                                    aria-label="Close"></span>
                                </div>
                                <div class="ui-dialog-content" style="background-color: #fff;">
                                    <div  class="modal-body">Do you want to deleted ?</div>
                                    <div class="modal-footer">
                                    <div class="button type2" id="uniform-undefined" data-bs-dismiss="modal" @click="cancel()">
                                        <span>No<input type="button" class="type2" tabindex="10008" value="No"
                                            style="width: 89px; opacity: 0;">
                                        </span>
                                    </div>
                                    <div class="button type2" data-bs-dismiss="modal" @click="search()"><span>Yes</span></div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        <div class="box-footer-pagination">
                            <pagination :data="serails" @pagination-change-page="getSerail" />
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
                <div style="padding:0 50px 0 50px">
                  <div class="col-md-12">
                    <div class="text-center">
                      <h3 class="title-purchase">SERIAL REPORT</h3>
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
                      <p class="text-center p-bg font-size p-pad">TOTAL SERIAL</p>
                      <p class="text-center p-mg">{{ serails.total }}</p>
                    </div>
                  </div>
                  <div class=" my-2  justify-content-center">
                    <table id="pr-tb">
                    <thead>
                      <tr class="p-bg">
                        <th class="text-center">Id</th>
                        <th class=text-center>SerialCode</th>
                        <th class="text-center">PrefixCode</th>
                        <th class=text-center>QtyCode</th>
                        <th class=text-center>StateCode</th>
                        <th class="text-center">EndCode</th>
                      </tr>
                    </thead>
                    <tbody >
                        <tr
                            v-for="(Serail, index) in serails.data" :key="index">
                            <td width="3%">{{ index + 1 + "." }}</td>
                            <td width="12%">{{ Serail.serail_code }}</td>
                            <td width="12%">{{ Serail.prefix_code }}</td>
                            <td width="12%">{{ Serail.qty_code }}</td>
                            <td width="12%">{{ Serail.start_code }}</td>
                            <td width="12%">{{ Serail.end_code }}</td>
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
import { ref, reactive, watch, computed, onMounted } from "vue";
import axios from "axios";
import pagination from "laravel-vue-pagination";
import moment from "moment";
import Auth from "../../auth/Auth";
import Header from "../Header.vue";
import Footer from "../footer.vue";
import print from 'vue3-print-nb';
export default {
    components:{Header,Footer,pagination},
    directives:{
        print
    },  
    data() {
        return {
            serails: "",
            checkbt:'',
            perPage: "",
            currentPage: 0,
            company: [],
            formatdate:"",
            last_page: 1,
            action_api: "",
            btn_save_update: "Save",
            btn_search_delete: "Search",
            action_api_1: "",
            backed: false,

            form: {
                id: "",
                serail_code: "",
                prifix_code: "",
                qty_code: "",
                start_code: "",
                end_code: "",
                created_by: "",
                updated_by: "",
            },
        };
    },
    mounted() {
        this.getSerail();
        this.getcompany();
    },

    methods: {
        getSerail(page = 1) {
            if (page > 0 && page <= this.last_page) {
                axios
                    .get("api/v1/serail")
                    .then(({ data }) => {
                        this.links = data.links;
                        this.last_page = data.last_page;
                        this.links.forEach((element) => {
                            if (element.label == page) {
                                this.perPage = "api/v1/serail?page=" + page;
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
        btnClear() {
            this.form = {};
        },
        btnClose() {
            this.form = {};
        },
        btnAdd() {
            this.checkbt='create';
            this.form = {};
            this.action_api = "api/v1/serail/store";
        },
        btnSave() {
            this.form.created_by = Auth.user.id
            axios.post("api/v1/serail/store", this.form).then((res) => {
                console.log(Serail)
                this.getSerail();
                this.form = Object.assign({});
            });
        },
        btnEdit(serail) {
            this.btn_save_update = 'Update';
            this.btn_search_delete = "Delete";
            this.form = serail;
            console.log(this.form)
            this.backed = true
        },
        getcompany(){
          axios.get("/api/v1/getSetup/")
            .then((response) => {
             this.company = response.data;
             this.dateformart = moment(new Date()).format('YYYY-MM-DD');
            });
        },
        btnUpdate() {
           
            axios
                .post("api/v1/serail/update/" + this.form.serail_code,this.form)
                .then(() => {
                    console.log(Serail)
                    this.getSerail();
                    this.form = {};
                });
        },

        btnsave(){
            if(this.btn_save_update == "Update"){
             
                this.btnUpdate();
                this.form = {}
            }
            else{
                this.btnSave();
            }
        },
        btnDelete(Serail) {
            axios.post("api/v1/serail/delete/" +Serail).then((res) => {
                this.getSerail();
            });
        },
        back(){
            this.form = {}
        },
        save(){
            if(this.btn_save_update == 'Save'){
                this.btnSave()
                this.getSerail()
                this.btn_save_update = 'Save'
                this.form = {}
            }
            if(this.btn_save_update == 'Update'){
                this.form.updated_by = Auth.user.id
                this.btnUpdate()
                this.getSerail()
                this.btn_save_update = 'Save'
                this.btn_search_delete = 'Search'
                this.backed = false
                this.form = {
                id: "",
                serail_code: "",
                prifix_code: "",
                qty_code: "",
                start_code: "",
                end_code: "",
             
            }
            }
        },
        search(){
             
            if(this.btn_search_delete == 'Delete'){
                this.btnDelete(this.form.serail_code)
                this.form = {}
                this.btn_save_update = 'Save'
                this.btn_search_delete = 'Search'

            }
        },
    },
};
</script>
