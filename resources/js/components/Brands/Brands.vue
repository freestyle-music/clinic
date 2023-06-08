<template>
  <div class="wrapper">
    <div class="container-fuild">
      <div id="headTitle">
        <Logo />
        <h1 id="title" _msttexthash="48503" _msthash="2">Brands</h1>
      </div>
    </div>
    <Header />
    <ol id="topicPath">
      <li style="margin-left: 260px;">
        <router-link to="productsetting">
          <a href="dashbaord">
            <font style="vertical-align : inherit">
              <font style="vertical-align : inherit">
                Brands
              </font>
            </font>
          </a>
        </router-link>
      </li>


    </ol>
    <div class="search-box">
      <div id="product">
        <!--#contents -->
        <div class="search-box">
          <MenuBrand />
          <div class="search-box-title">
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
            <router-link to="/serailcode"><a class="btn-radius btn btn-sm" href="#"
                style="color: #f8f5b4; margin-top: -2px">
                <i class="fa fa-cog" aria-hidden="true"></i>
                Serial
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

          </div>

          <!-- <input id="search" name="search" type="hidden" value="1" /> -->
          <div class="search-box-content">
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="tbl_search" id="hover-table">
              <tbody>
                <tr>
                  <th width="10%">Brand Name</th>
                  <td width="50%"><input class="string_zen clear_text text input_text" type="text" style="width: 360px;" v-model="form.brand_name" required>
                  <p v-if="errors.brand_name" style="font-size:10px;color:red">{{ errors.brand_name[0] }}</p>
                  </td>
                </tr>
                <tr>
                  <th width="10%">Brand Name2</th>
                  <td width="50%"><input class="string_zen clear_text text input_text" type="text" style="width: 360px;" v-model="form.brand_name_2">
                  </td>
                </tr>
                <tr>
                  <th>Inactived</th>
                  <td width="90%">
                    <div class="selector" id="inactivced">
                      <span>{{ form.inactived }}</span>
                      <select id="inactivced" name="inactivced" v-model="form.inactived" tabindex="10003" style="
                                    min-width: 51px;
                                    opacity: 0;
                                    width: 80px;">
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                      </select>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
            <div class="search-box-footer">
              <div v-if="is_back== true" class="button type2" id="uniform-undefined" @click="btnCancel()">
                <span><input type="button" class="type2" tabindex="10025"
                    value="display" style="opacity: 0; width: 54px;">
                    <i class="fa fa-arrow-left"></i>
                  Back</span>
              </div>
              <div class="button type2" id="uniform-undefined" @click="btnDeleteSearch()">
                <span><input type="button" class="type2" tabindex="10025"
                    value="display" style="opacity: 0; width: 54px;">
                    <i v-if="delete_search == 'Search'" class="fa fa-search" aria-hidden="true"></i>
                    <i v-else class="fa fa-trash" aria-hidden="true"></i>
                  {{ delete_search }}</span>
              </div>

              <div class="button type2" id="uniform-undefined" @click="btnSave">
                <span><input type="button" class="type2" tabindex="10025"
                    value="display" style="opacity: 0; width: 54px;"><i class="fa fa-save" aria-hidden="true"></i>
                    {{ save_update }}
                </span>
              </div>
              <span class="marker"></span>
            </div>
          </div>
        </div>

        <div class="box mt-4">
          <table width="100%" border="0" cellpadding="0" cellspacing="0" class="table table-striped br-table">
            <thead>
              <tr class="header-table">
                <th width="3%">No</th>
                <th width="14%">Brand Name</th>
                <th width="14%">Brand Name 2</th>
                <th width="11%">Inactived</th>
                <th width="5%">
                </th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="(item, index) in items.data" :key="index">
                <td width="3%">{{ index + 1 }}</td>
                <td width="14%">{{ item.brand_name }}</td>
                <td width="14%">{{ item.brand_name_2 }}</td>
                <td width="11%">{{ item.inactived }}</td>
                <td  width="5%" class="text-center">
                  <div @click="btnEdit(item)" class="button" id="uniform-undefined">
                    <span><i class="fa fa-edit"></i> Select<input type="button" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop" tabindex="10028" style="opacity: 0; width: 76px" /></span>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>

          <div class="box-footer-pagination">
            <pagination :data="items" @pagination-change-page="getBrand" />
          </div>
        </div>
      </div>
    </div>
  </div>
  <Footer />
</template>
<script setup>
import { ref, reactive, watch, computed, onMounted } from "vue";
import useBrand from "../../componentJS/Brand";
import pagination from "laravel-vue-pagination";
import Header from "../Header.vue";
import Logo from "../logo.vue"
import Footer from "../footer.vue";
import MenuBrand from "./Menu_Brand.vue";
import Auth from "../../auth/Auth";
const { errors,form, items, search, getBrand, deleteBrand, saveBrand, updateBrand } =
  useBrand();
  const is_back = ref(false)
const save_update = ref('Save')
const delete_search = ref('Search') 
const disabled = ref(true);
const btnValue1 = ref(false);
const btnValue2 = ref(false);
window.Menu = "Brands";
const btnAdd = async () => { 
  form.brand_name = "";
  form.brand_name_2 = "";
  form.inactived = "Yes";
  form.created_by = Auth.user.id;
  disabled.value = false;
  btnValue1.value = true;
  btnValue2.value = false;

};
const btnEdit = async (item) => {
  form.id = item.id;
  form.brand_name = item.brand_name;
  form.brand_name_2 = item.brand_name_2;
  form.inactived = item.inactived;
  disabled.value = true;
  btnValue2.value = true;
  btnValue1.value = false;
  delete_search.value = "Delete"
  save_update.value = "Update"
  is_back.value = true

};
const btnSave = async () => {
  if(save_update.value == 'Save'){
  form.created_by = Auth.user.id;
  saveBrand(form);
  form.brand_name = "";
  form.brand_name_2 = "";
  form.inactived = "Yes";
    getBrand();
  }
  if(save_update.value == 'Update'){
  form.updated_by = Auth.user.id;
  updateBrand(form.id, form);
  form.brand_name = "";
  form.brand_name_2 = "";
  form.inactived = "Yes";
    getBrand();
    save_update.value = "Save"
    delete_search.value = "Search"
    is_back.value = false;
  }
};
const btnDelete = async (id) => {
  deleteBrand(id);
  getBrand();
};

const btnDeleteSearch = () => {
  deleteBrand(form.id)
  getBrand()
  btnCancel()
}

const btnUpdate = async (x) => {
  updateBrand(x, form);
  getBrand();
};
const btnCancel = () => {
  save_update.value = 'Save'
  delete_search.value = 'Search'
  form.brand_code = "";
  form.brand_name = "";
  form.brand_name_2 = "";
  form.inactived = "";
  is_back.value = false
}
</script>

