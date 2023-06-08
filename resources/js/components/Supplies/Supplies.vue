<template>
  <div class="wrapper">
    <div id="headTitle">
      <div id="logo"><img alt="Healthbook" height="44" src="img/logo.png" width="70" _mstalt="155922" _msthash="1">
      </div>
      <h1 id="title" _msttexthash="48503" _msthash="2">Suppliyer</h1>
    </div>
    <Header />
    <ol id="topicPath">
      <li style="margin-left: 285px;">
        <router-link to="productsetting">
          <a href="dashbaord">
            <font style="vertical-align : inherit">
              <font style="vertical-align : inherit">
                Suppliyer
              </font>
            </font>
          </a>
        </router-link>
      </li>
    </ol>
    <div class="search-box">
      <div id="product">
        <MenuSup />
        <div class="search-box-title">
          <router-link to="/brands"><a class="btn-radius btn btn-sm" href="#" style="color: #f8f5b4; margin-top: -2px">
              <i class="fa fa-cog" aria-hidden="true"></i>
              Brand
            </a></router-link>
          <router-link to="/unitcode"><a class="btn-radius btn btn-sm" href="#" style="color: #f8f5b4; margin-top: -2px">
              <i class="fa fa-cog" aria-hidden="true"></i>
              UnitCode
            </a></router-link>
          <router-link to="/group"><a class="btn-radius btn btn-sm" href="#" style="color: #f8f5b4; margin-top: -2px">
              <i class="fa fa-cog" aria-hidden="true"></i>
              Group
            </a></router-link>
          <router-link to="/category"><a class="btn-radius btn btn-sm" href="#" style="color: #f8f5b4; margin-top: -2px">
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
        <div class="search-box-content">
          <table width="100%" border="0" cellpadding="0" cellspacing="0" class="tbl_search" id="hover-table">
            <tbody>
              <tr>
                <th width="10%" style="padding-top: 10px;">Suppliyer Code</th>
                <td width="50%" style="padding-top: 10px;">
                  <input class="string_zen_kana clear_text text input_text" type="text" style="width: 360px;"
                    v-model="form.sup_code" maxlength="8" required>
                </td>
              </tr>
              <tr>
                <th width="10%">Suppliyer Name</th>
                <td width="50%"><input class="string_zen clear_text text input_text" type="text" style="width: 360px;"
                    v-model="form.sup_name" required>
                </td>
              </tr>
              <tr>
                <th width="10%">Suppliyer Name 2</th>
                <td width="50%"><input class="string_zen clear_text text input_text" type="text" style="width: 360px;"
                    v-model="form.sup_name_2">
                </td>
              </tr>
              <tr>
                <th width="10%">Image</th>
                <td width="50%">
                  <input type="file" id="myfile" name="myfile" @change="imgUplaod($event)" />
                </td>
              </tr>
              <tr>
                <th width="10%">Addresss</th>
                <td width="50%">
                  <input class="string_zen clear_text text input_text" type="text" style="width: 360px;"
                    v-model="form.address" />
                </td>
              </tr>
              <tr>
                <th width="10%">Phone Number</th>
                <td width="50%">
                  <input class="string_zen clear_text text input_text" type="text" style="width: 360px;"
                    v-model="form.phone_no">
                </td>
              </tr>
              <tr>
                <th width="10%">Phone Number 2</th>
                <td width="50%"><input class="string_zen clear_text text input_text" type="text" style="width: 360px;"
                    v-model="form.phone_no_2">
                </td>
              </tr>
              <tr>
                <th width="10%">Fax Number</th>
                <td width="50%"><input class="string_zen clear_text text input_text" type="text" style="width: 360px;"
                    v-model="form.fax_no">
                </td>
              </tr>
              <tr>
                <th width="10%">Gmail</th>
                <td width="50%"><input class="string_zen clear_text text input_text" type="text" style="width: 360px;"
                    v-model="form.email">
                </td>
              </tr>
              <tr>
                <th width="10%">Contact Name</th>
                <td width="50%"><input class="string_zen clear_text text input_text" type="text" style="width: 360px;"
                    v-model="form.contact_name">
                </td>
              </tr>
              <tr>
                <th width="10%">Contack Phone</th>
                <td width="50%"><input class="string_zen clear_text text input_text" type="text" style="width: 360px;"
                    v-model="form.contact_phone">
                </td>
              </tr>
              <tr>
                <th width="10%">Status</th>
                <td width="50%"><input class="string_zen clear_text text input_text" type="text" style="width: 360px;"
                    v-model="form.status">
                </td>
              </tr>
              <tr>
                <th>Inactived</th>
                <td width="90%">
                  <div class="selector" id="inactivced">
                    <span>{{ form.inactived }}</span>
                    <select id="inactivced" name="inactivced" v-model="form.inactived" tabindex="10003"
                      style="min-width: 51px; opacity: 0; width: 80px">
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                    </select>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
          <div class="search-box-footer">
            <div v-if="is_back == true" class="button type2" id="uniform-undefined" @click="btnCancel()">
              <span><input type="button" class="type2" tabindex="10025" value="display" style="opacity: 0; width: 54px;">
                <i class="fa fa-arrow-left"></i>
                Back</span>
            </div>
            <div class="button type2" id="uniform-undefined" @click="btnDeleteSearch()">
              <span><input type="button" class="type2" tabindex="10025" value="display" style="opacity: 0; width: 54px;">
                <i v-if="delete_search == 'Search'" class="fa fa-search" aria-hidden="true"></i>
                <i v-else class="fa fa-trash" aria-hidden="true"></i>
                {{ delete_search }}</span>
            </div>

            <div class="button type2" id="uniform-undefined" @click="btnSave">
              <span><input type="button" class="type2" tabindex="10025" value="display"
                  style="opacity: 0; width: 54px;"><i class="fa fa-save" aria-hidden="true"></i>
                {{ save_update }}
              </span>
            </div>
            <span class="marker"></span>
          </div>
        </div>

        <div class="box mt-4">
          <div class="">
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="table table-striped br-table">
              <thead>
                <tr class="header-table">
                  <th>Image</th>
                  <th>Suppliyer Name</th>
                  <th>Addresss</th>
                  <th>Phone Number</th>
                  <th>Fax Number</th>
                  <th>Email</th>
                  <th>Contact Name</th>
                  <th>Contact Phone</th>
                  <!-- <th>Inactived</th> -->

                  <th>
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="(suppliyer, index) in suppliyers.data" :key="index">
                  <td>
                    <img class="direct-chat-img" :src="'/img/suppliyer/' + suppliyer.image_url" />
                  </td>
                  <td>{{ suppliyer.sup_name }}</td>
                  <td>{{ suppliyer.address }}</td>
                  <td>{{ suppliyer.phone_no }}</td>
                  <td>{{ suppliyer.fax_no }}</td>
                  <td>{{ suppliyer.email }}</td>
                  <td>{{ suppliyer.contact_name }}</td>
                  <td>{{ suppliyer.contact_phone }}</td>
                  <!-- <td width="6%">{{ suppliyer.inactived }}</td> -->
                  <td class="text-center">
                    <div @click="btnEdit(suppliyer)" class="button" id="uniform-undefined">
                      <span><i class="fa fa-edit"></i> Select<input type="button" data-bs-toggle="modal"
                          data-bs-target="#staticBackdrop" tabindex="10028" style="opacity: 0; width: 40px" /></span>
                    </div>

                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="box-footer-pagination">
            <pagination :data="suppliyers" @pagination-change-page="getSuppliyer" />
          </div>
        </div>
      </div>
    </div>

    <!-- Message Modal -->
    <div id="myModal" class="lskymodal">
      <div class="lskymodal-content">
        <p>
          <strong>{{ message }}</strong>{{ msg }}
        </p>
      </div>
    </div>
  </div>
  <Footer />
</template>
    
<script setup>
import axios from "axios";
import Header from "../Header.vue";
import Footer from "../footer.vue";
import pagination from "laravel-vue-pagination";
import useSuppliyer from "../../componentJS/Suppliyer";
import MenuSup from "./Menu_Sup.vue";
import { ref } from "vue";
import Auth from "../../auth/Auth";
const disabled = ref(true);
const btnValue1 = ref(false);
const btnValue2 = ref(false);
window.Menu = "Suppliyer";
const {
  deleteSup,
  supImage,
  updateSup,
  saveSup,
  getSuppliyer,
  suppliyers,
  form,
  search,
  photo_path,
  msg,
  message,
} = useSuppliyer();

const delete_search = ref('Search')
const save_update = ref('Save')
const is_back = ref(false)

const btnAdd = async () => {
  form.sup_code = "";
  form.sup_name = "";
  form.sup_name_2 = "";
  form.image_url = "";
  form.address = "";
  form.phone_no = "";
  form.phone_no_2 = "";
  form.fax_no = "";
  form.email = "";
  form.contact_name = "";
  form.contact_phone = "";
  form.status = "";
  form.inactived = "Yes";
  disabled.value = false;
  btnValue1.value = true;
  btnValue2.value = false;
};
const btnEdit = async (sup) => {
  form.id = sup.id;
  form.sup_code = sup.sup_code;
  form.sup_name = sup.sup_name;
  form.sup_name_2 = sup.sup_name_2;
  form.image_url = sup.image_url;
  form.address = sup.address;
  form.phone_no = sup.phone_no;
  form.phone_no_2 = sup.phone_no_2;
  form.fax_no = sup.fax_no;
  form.email = sup.email;
  form.contact_name = sup.contact_name;
  form.contact_phone = sup.contact_phone;
  form.status = sup.status;
  form.inactived = sup.inactived;
  disabled.value = true;
  btnValue2.value = true;
  btnValue1.value = false;
  is_back.value = true
  save_update.value = 'Update'
  delete_search.value = 'Delete'


};
const btnSave = async () => {
  if (save_update.value == 'Save') {
    form.created_by = Auth.user.id;
    saveSup(form);
    getSuppliyer();
  }
  if (save_update.value == 'Update') {
    form.updated_by = Auth.user.id;
    btnUpdate(form.id)
    save_update.value = 'Save'
    delete_search.value = 'Search'
  }
  form.sup_code = "";
  form.sup_name = "";
  form.sup_name_2 = "";
  form.image_url = "";
  form.address = "";
  form.phone_no = "";
  form.phone_no_2 = "";
  form.fax_no = "";
  form.email = "";
  form.contact_name = "";
  form.contact_phone = "";
  form.status = "";
  form.inactived = "Yes";

};
const btnUpdate = async (x) => {
  updateSup(x, form);
  getSuppliyer();
};
const imgUplaod = async (e) => {
  supImage(e);
};
const btnDelete = async (id) => {
  deleteSup(id);
  getSuppliyer();
};
const btnCancel = () => {
  save_update.value = 'Save'
  delete_search.value = 'Search'
  is_back.value = false
  form.sup_code = "";
  form.sup_name = "";
  form.sup_name_2 = "";
  form.image_url = "";
  form.address = "";
  form.phone_no = "";
  form.phone_no_2 = "";
  form.fax_no = "";
  form.email = "";
  form.contact_name = "";
  form.contact_phone = "";
  form.status = "";
  form.inactived = "Yes";
}
const btnDeleteSearch = () => {
  if (delete_search.value == 'Delete') {
    btnDelete(form.id)
    btnCancel()
  }
  if (delete_search.value == 'Search') {

  }

}

</script>
    