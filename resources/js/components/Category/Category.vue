<template>
  <div class="wrapper">
    <div id="headTitle">
      <div id="logo"><img alt="Healthbook" height="44" src="img/logo.png" width="70" _mstalt="155922" _msthash="1">
      </div>
      <h1 id="title" _msttexthash="48503" _msthash="2">Category</h1>
    </div>
    <Header />
    <ol id="topicPath">
      <li style="margin-left: 280px;">
        <router-link to="productsetting">
          <a href="dashbaord">
            <font style="vertical-align : inherit">
              <font style="vertical-align : inherit">Category</font>
            </font>
          </a>
        </router-link>
      </li>
    </ol>
    <div class="search-box">
      <div id="product">
        <div class="search-box mb-4">
          <a class="btn-radius bt-pn btn btn-sm" data-bs-toggle="dropdown" aria-expanded="false"
            style="float:right; color: #f8f5b4;">
            <i class="fas fa-plus" style="padding-right:5px; ">
            </i>
            Menu
          </a>
          <ul class="dropdown-menu">
            <li>
              <a @click="getproductboom()" class="dropdown-item btn btn-primary" tabindex="10028"><i
                  class="fa-solid fa-circle-b"></i> Boom Product</a>
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
            <router-link to="Group">
              <a class="btn-radius btn btn-sm" href="#" style="color: #f8f5b4; margin-top: -2px; color: #dbdee1">
                <i class="fa fa-cog" aria-hidden="true"></i>
                Group
              </a>
            </router-link>
            <router-link to="unitcode">
              <a class="btn-radius btn btn-sm" href="#" style="color: #f8f5b4; margin-top: -2px; color: #dbdee1">
                <i class="fa fa-cog" aria-hidden="true"></i>
                Unitcode
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
                  <th width="10%">Group Code</th>
                  <td width="90%">
                    <input id="cat_code" name="cat_code" v-model="form.cat_code" type="text"
                    class="text" tabindex="10028" />
                  </td>
                </tr> -->
                <tr>
                  <th width="10%">Category Name</th>
                  <td width="90%">
                    <input id="cat_name" name="cat_name" v-model="form.cat_name" type="text" class="text"
                      tabindex="10029" />
                  </td>
                </tr>
                <tr>
                  <th width="15%">Category Name 2</th>
                  <td width="90%">
                    <input id="cat_name_2" name="cat_name_2" v-model="form.cat_name_2" type="text" class="text"
                      tabindex="10029" />
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
              <!-- <div v-if="btnback == true" @click="btnBack()" class="button type2" id="uniform-undefined">
                <span><i class="fa fa-arrow-left" style="margin-right: 7px;"></i>Back</span>
                <input type="button" value="save" class="type2" style="opacity: 0; width: 63px" tabindex="10026" />
              </div> -->
              <div v-if="btnback == true" @click="btnBack()" class="button type2" id="uniform-undefined">
                <span><i class="fa fa-arrow-left" aria-hidden="true" style="margin-right: 7px;"></i>Back</span>
                <input type="button" value="save" class="type2" style="opacity: 0; width: 63px" tabindex="10026" />
              </div>
              <div class="button type2" id="uniform-undefined">
                <span><i class="fa fa-search" aria-hidden="true" style="margin-right: 7px;"></i>Search</span>
                <input type="button" value="save" class="type2" style="opacity: 0; width: 63px" tabindex="10026" />
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
          <table width="100%" border="0" cellpadding="0" cellspacing="0" class="table table-striped br-table">
            <thead>
              <tr class="header-table">
                <th width="3%">No</th>
                <th width="12%">Category Name</th>
                <th width="12%">Category Name 2</th>
                <th width="12%">Inactivced</th>
                <th width="12%"></th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="(Category, index) in Categories.data" :key="index" class="cate-td">
                <td width="3%">
                  {{ index + 1 + "." }}
                </td>
                <td width="12%">
                  {{ Category.cat_name }}
                </td>
                <td width="12%">
                  {{ Category.cat_name_2 }}
                </td>
                <td width="12%">
                  {{ Category.inactived }}
                </td>
                <td width="12%" class="text-center">
                  <div class="button" id="uniform-undefined">
                    <span><i class="fa fa-edit"></i> Select<input type="button" @click="btnEdit(Category)"
                        style="opacity: 0; width: 76px" /></span>
                  </div>
                  <div class="button" id="uniform-undefined">
                    <span><i class="fa fa-trash"></i> Delete<input type="button" @click="btnDelete(Category.id)"
                        tabindex="10028" style="opacity: 0; width: 76px" /></span>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
          <div class="box-footer-pagination">
            <pagination :data="Categories" @pagination-change-page="getCategory" />
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
                      <h3 class="title-purchase">CATEGORY REPORT</h3>
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
                      <p class="text-center p-mg">{{ newdate }}</p>
                      <p class="text-center p-bg font-size p-pad">TOTAL GROUP</p>
                      <p class="text-center p-mg">{{ Categories.total }}</p> 
                    </div>
                  </div>
                  <div class=" my-2  justify-content-center">
                    <table id="pr-tb">
                      <thead>
                        <tr class="p-bg">
                          <th class="text-center" width="10">No</th>
                          <th class="text-center" width="40">Category Name</th>
                          <th class="text-center" width="20%">Category Name 2</th>
                          <th class="text-center" width="20">Inactived</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr v-for="(category, index) in Categories.data" :key="index">
                          <td>{{ index + 1 + "." }}</td>
                          <td>{{ category.cat_name }}</td>
                          <td>{{ category.cat_name_2 }}</td>
                          <td>{{ category.inactived }}</td>
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
import print from 'vue3-print-nb'
export default {
  directives:{
    print
  },
};

</script>

<script setup>
import Menu from "./Menu_Category.vue";
import Header from "..//Header.vue";
import Footer from "../footer.vue";
import Auth from "../../auth/Auth";
import { ref, reactive, watch, computed, onMounted } from "vue";
import pagination from "laravel-vue-pagination";
import useCategory from "../../componentJS/category";
const btnValue1 = ref(false);
const btnValue2 = ref(false);
const disabled = ref(true);
const btncheckEdit = ref("Save");
const btnback = ref(false);
window.Menu = "Category";
const {
  updateCategory,
  DeleteCategory,
  createCategory,
  getCategory,
  Categories,
  company,
  newdate,
  form,
  search,
} = useCategory();
const btnSave = async () => {
  if (btncheckEdit.value == 'Save') {
    form.created_by = Auth.user.id
    createCategory(form);
    form.cat_name = "";
    form.cat_name_2 = "";
    form.inactived = "";
    getCategory();
  }
  if (btncheckEdit.value == 'Update') {
    form.updated_by = Auth.user.id
    updateCategory(form.cat_code, form);
    form.cat_name = "";
    form.cat_name_2 = "";
    form.inactived = "";
    btncheckEdit.value = "Save";
    btnback.value = false;
    getCategory();
  }
};
const btnBack = async () => {
  btnback.value = false;
  form.cat_name = "";
  form.cat_name_2 = "";
  form.inactived = "";
  btncheckEdit.value = "Save";
};
const btnEdit = async (Category) => {
  form.cat_code = Category.cat_code
  form.cat_name = Category.cat_name;
  form.cat_name_2 = Category.cat_name_2;
  form.inactived = Category.inactived;
  btnValue2.value = true;
  btnValue1.value = false;
  disabled.value = true;
  btnback.value = true;
  btncheckEdit.value = "Update";
};
const btnDelete = async (id) => {
  DeleteCategory(id);
  getCategory();
};
const btnAdd = async () => {
  form.cat_name = "";
  form.cat_name_2 = "";
  form.inactived = "";
  btnValue1.value = true;
  btnValue2.value = false;
  disabled.value = false;
};
</script>
 
