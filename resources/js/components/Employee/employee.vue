
<template>
  <div class="wrapper">
    <div class="container-fuild">
      <div id="headTitle">
        <div id="logo"><img alt="Healthbook" height="44" src="img/logo.png" width="70" _mstalt="155922" _msthash="1">
        </div>
        <h1 id="title" _msttexthash="48503" _msthash="2">Employee</h1>
      </div>
    </div>
    <div class="container-fuild">
      <Header />
      <ol id="topicPath">
        <li style="margin-left:290px;">
          <router-link to="productsetting">
            <a href="dashbaord">
              <font style="vertical-align : inherit">
                <font style="vertical-align : inherit">
                  Employee
                </font>
              </font>
            </a>
          </router-link>
        </li>
      </ol>
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
            <i class="fa fa-search" aria-hidden="true"></i>
            Search
          </h2>
          <input id="search" name="search" type="hidden" value="1" />
          <div>
            <div>
            </div>
          </div>
        </div>
        <input id="search" name="search" type="hidden" value="1" />
        <div class="search-box-content">
          <table width="100%" border="0" cellpadding="0" cellspacing="0" class="tbl_form new_table">
            <tbody>

              <tr>
                <th style="color:#f8f5b4">EmployeeID</th>
                <td colspan="3">
                  <input class="string_zen clear_text text" maxlength="50" type="text" tabindex="10017" v-model="form.id"
                    style="width:8%;">
                </td>
              </tr>
              <th style="color:#f8f5b4">Name</th>
              <td colspan="3">
                LastName
                <input class="string_zen clear_text text" maxlength="50" type="text" tabindex="10017"
                  v-model="form.lstname" style="width:15%;">
                FirstName
                <input class="string_zen clear_text text" maxlength="50" type="text" tabindex="10017"
                  v-model="form.firstname" style="width:15%;">
              </td>
              <tr>
                <th style="color:#f8f5b4">BirthDate</th>
                <td colspan="3">
                  <input class="number text" maxlength="10" size="4" type="text" value=""> Year
                  <input class="number text" maxlength="10" size="4" type="text" value=""> Month
                  <input class="number text" maxlength="10" size="4" type="text" value=""> Day
                  <!-- <input class="number text"  maxlength="10"  size="4" type="text" value=""  v-model="form.birstdate"> Day -->
                </td>
              </tr>
              <tr>
                <th width="10%" style="color:#f8f5b4">Sex</th>
                <td width="32%">
                  <div class="radio" id="uniform-search_word_sizai_prt_kbn_0" @click="getsex('male')"><span
                      class="checked"><input checked="checked" id="search_word_sizai_prt_kbn_0"
                        name="search_word[sizai_prt_kbn]" type="radio" value="0" tabindex="10000"
                        style="opacity: 0;"></span></div><label for="search_word_sizai_prt_kbn_0"
                    style="margin-left:6px;">Male</label>
                  <div class="radio" id="uniform-search_word_sizai_prt_kbn_1" @click="getsex('female')"><span
                      class=""><input id="search_word_sizai_prt_kbn_1" name="search_word[sizai_prt_kbn]" type="radio"
                        value="1" tabindex="10001" style="opacity: 0;"></span></div><label
                    for="search_word_sizai_prt_kbn_1" style="margin-left:6px;">Female</label>
                  <div class="radio" id="uniform-search_word_sizai_prt_kbn_9" @click="getsex('other')"><span
                      class=""><input id="search_word_sizai_prt_kbn_9" name="search_word[sizai_prt_kbn]" type="radio"
                        value="9" tabindex="10002" style="opacity: 0;"></span></div><label
                    for="search_word_sizai_prt_kbn_9" style="margin-left:6px;">Other</label>
                </td>
              </tr>
              <tr>
                <th style="color:#f8f5b4">Phone</th>
                <td colspan="3">
                  PhoneNumber
                  <input class="string_zen clear_text text" maxlength="50" type="text" tabindex="10017"
                    v-model="form.phone1" style="width:8%;">
                  HomeNumber
                  <input class="string_zen clear_text text" maxlength="50" type="text" tabindex="10017"
                    v-model="form.phone2" style="width:8%;">
                </td>
              </tr>
              <tr>
                <th style="color:#f8f5b4">Email</th>
                <td colspan="3">
                  <input class="string_zen clear_text text" maxlength="50" type="text" tabindex="10017"
                    v-model="form.email" style="width:20%;">
                </td>
              </tr>
              <tr>
                <th style="color:#f8f5b4">HireDate</th>
                <td colspan="3">
                  <input class="number text" style="text-align: left;" maxlength="2" size="4" type="date"
                    v-model="form.hiredate">

                  <!-- <input class="number text"  style="text-align: left;" maxlength="2"  size="4" type="date" value=""  v-model="form.hiredate"> -->

                </td>
              </tr>
              <tr>
                <th style="color:#f8f5b4">Address</th>
                <td colspan="3">
                  Village
                  <input class="string_zen clear_text text" maxlength="50" type="text" tabindex="10017"
                    v-model="form.village" style="width:8%;">
                  Commune
                  <input class="string_zen clear_text text" maxlength="50" type="text" tabindex="10017"
                    v-model="form.commune" style="width:8%;">
                  District
                  <input class="string_zen clear_text text" maxlength="50" type="text" tabindex="10017"
                    v-model="form.district" style="width:8%;">
                  City
                  <input class="string_zen clear_text text" maxlength="50" type="text" tabindex="10017"
                    v-model="form.pro_city" style="width:8%;">
                  Region
                  <input class="string_zen clear_text text" maxlength="50" type="text" tabindex="10017"
                    v-model="form.region" style="width:8%;">
                  <br>
                  <br>
                  <textarea class="string_zen_kana clear_text text" id="search_word_simei_kana_s"
                    name="search_word[simei_kana_s]" type="text" tabindex="10015" v-model="form.address" rows="1"
                    style="width: 28%; outline: none;"></textarea>
                </td>
              </tr>
              <tr>
                <th style="color:#f8f5b4">Remark</th>
                <td colspan="3">
                  <div class="dropdown d-flex">
                    <button @click="getunit(form)" @onmouseout="prooductboom()"
                      class="dropdown-toggle string_zen clear_text text select-menu select-item" type="button"
                      id="dropdownMenuButton1 " data-bs-toggle="dropdown" aria-expanded="false" size="50">
                      {{ form.remark }} <i class="fa fa-chevron-down"></i>
                    </button>
                    <div class="dropdown-menu each-drop-menu" aria-labelledby="dropdownMenuButton1">
                      <p>
                        <input v-model="txtsearch" @input="searchproduct(txtsearch)"
                          class="string_zen clear_text text search-pro-field" size="50" type="text" />
                      </p>
                      <ul style="list-style: none" class="scrollable-menu">
                        <li @click="getunit(form, 'Doctor')">
                          <div class="menu-item">
                            <p>Doctor</p>
                          </div>
                        </li>
                        <li @click="getunit(form, 'Nurse')">
                          <div class="menu-item">
                            <p>Nurse</p>
                          </div>
                        </li>
                        <li @click="getunit(form, 'Employee')">
                          <div class="menu-item">
                            <p>Employee</p>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <th style="color:#f8f5b4">Inactivced</th>
                <td width="90%">
                  <div class="selector" id="inactivced">
                    <span>{{ form.inactived }}</span>
                    <select id="inactivced" name="inactivced" tabindex="10003" v-model="form.inactived"
                      style="min-width: 51px; opacity: 0; width: 80px">
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                    </select>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="search-box-footer">
          <div v-if="btnback==true" @click="btnBack()" class="button type2" id="uniform-undefined">
            <span><input type="button" value="display" class="type2" style="opacity: 0; width: 54px" tabindex="10025" /><i class="fa fa-arrow-left" style="margin-right: 7px;"></i>
              Back</span>
          </div>
          <div class="button type2" id="uniform-undefined">
            <span><input @click="getid(form.id)" type="button" value="display" class="type2" data-bs-toggle="modal"
                data-bs-target="#delete-form" style="opacity: 0; width: 54px" tabindex="10025" /><i class="fa fa-trash"
                aria-hidden="true"></i>
              Delete</span>
          </div>
          <div class="button type2" id="u  niform-undefined" data-bs-toggle="modal" data-bs-target="#saveconfirm">
            <span tabindex="10028"><input type="button" value="display" class="type2" style="opacity: 0; width: 54px"
                tabindex="10025" /><i class="fas fa-file-import" style="margin-right:8px;"></i>{{ btcheck }}</span>
          </div>
          <span class="marker"></span>
        </div>
        <div class="box" style="margin-top:25px">
          <div class="box-content">
            <table width="100%" border="0" cellpadding="0" cellspacing="0"
              class="table table-striped table-bordered newhover" style="margin-bottom: 0 !important">
              <thead id="table-color">
                <tr>
                  <th width="4%">ID</th>
                  <th width="10%">LastName</th>
                  <th width="10%">FirstName</th>
                  <th width="5%">Sex</th>
                  <th width="10%">PhoneNumber</th>
                  <th width="10%">HomeNumber</th>
                  <th width="15%">Email</th>
                  <th width="15%">Address</th>
                  <th width="7%">Remark</th>
                  <th width="10%">
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="emp in employee">
                  <td>{{ emp.id }}</td>
                  <td>{{ emp.lstname }}</td>
                  <td>{{ emp.firstname }}</td>
                  <td>{{ emp.sex }}</td>
                  <td>{{ emp.phone1 }}</td>
                  <td>{{ emp.phone2 }}</td>
                  <td>{{ emp.email }}</td>
                  <td>
                    {{ emp.village }}
                    {{ emp.commune }}
                    {{ emp.district }}
                    {{ emp.pro_city }}
                    {{ emp.address }}
                  </td>
                  <td>{{ emp.remark }}</td>

                  <td width="3%" class="text-center">
                    <div class="container-btn" style="display: flex; justify-content: center; min-width: 160px;">
                      <div @click="btnEdit(emp)" class="button" id="uniform-undefined">
                        <span><i class="fa fa-edit"></i>Select<input type="button" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop" tabindex="10028" style="opacity: 0; width: 76px" /></span>
                      </div>
                      <div class="button" id="uniform" data-bs-toggle="modal" data-bs-target="#adduser"
                        @click="getUser_view(emp)">
                        <span><i class="fa fa-edit" aria-hidden="true"></i>
                          Create<input type="button" style="opacity: 0; width: 76px" /></span>
                      </div>
                    </div>
                  </td>

                </tr>
                <div class="modal fade ui-modal" id="saveconfirm" data-bs-backdrop="static" data-bs-keyboard="false"
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
                          <div class="button type2" data-bs-dismiss="modal" @click="btnsave()"><span>Yes</span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal fade ui-modal" id="updateconfirm" data-bs-backdrop="static" data-bs-keyboard="false"
                  tabindex="-1" aria-labelledby="clearconfirm" aria-hidden="true">
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
                        <div class="modal-body">Do you want to updated ?</div>
                        <div class="modal-footer">
                          <div class="button type2" id="uniform-undefined" data-bs-dismiss="modal">
                            <span>No<input type="button" class="type2" @click="cancel()" tabindex="10008" value="No"
                                style="width: 89px; opacity: 0;">
                            </span>
                          </div>
                          <div class="button type2" data-bs-dismiss="modal" @click="btcheck()"><span>Yes</span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="modal fade ui-modal" id="delete-form" data-bs-backdrop="static" data-bs-keyboard="false"
                  tabindex="-1" aria-labelledby="clearconfirm" aria-hidden="true">
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
                        <div class="modal-body">Do you want to deleted ?</div>
                        <div class="modal-footer">
                          <div class="button type2" id="uniform-undefined" data-bs-dismiss="modal" @click="cancel()">
                            <span>No<input type="button" class="type2" tabindex="10008" value="No"
                                style="width: 89px; opacity: 0;">
                            </span>
                          </div>
                          <div class="button type2" data-bs-dismiss="modal" @click="btnDelete()"><span>Yes</span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </tbody>
            </table>
          </div>


          <div class="box-footer-pagination">
            <pagination :data="employee" @pagination-change-page="getEmployee" />
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
              <div class="mt-3 print-size">
                <div class="row d-flex align-items-baseline">
                  <div class="col-xl-9">
                  </div>
                  <hr>
                </div>

                <div style="padding:0 50px 0 50px">
                  <div class="col-md-12">
                    <div class="text-center">
                      <h3 class="title-purchase">EMPLOYEE REPORT</h3>
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
                        <tr class="p-bg" style="text-align:center !important;">
                          <th class="text-center">ID</th>
                          <th class=text-center>LastName</th>
                          <th class="text-center">FirstName</th>
                          <th class="text-center">Sex</th>
                          <th class="text-center">PhoneNumber</th>
                          <th class="text-center">HomeNumber</th>
                          <th class="text-center">Email</th>
                          <th class="text-center">Address</th>
                          <th class="text-center">Remark</th>

                        </tr>
                      </thead>
                      <tbody>
                        <tr v-for="emp in employee">
                          <td>{{ emp.id }}</td>
                          <td>{{ emp.lstname }}</td>
                          <td>{{ emp.firstname }}</td>
                          <td>{{ emp.sex }}</td>
                          <td>{{ emp.phone1 }}</td>
                          <td>{{ emp.phone2 }}</td>
                          <td>{{ emp.email }}</td>
                          <td>
                            {{ emp.village }}
                            {{ emp.commune }}
                            {{ emp.district }}
                            {{ emp.pro_city }}
                            {{ emp.address }}
                          </td>
                          <td>{{ emp.remark }}</td>
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

  <div class="modal fade ui-modal" id="adduser" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content ui-dialog" id="formpopup" style="width:50%; margin-left: 300px;">
        <div class="ui-widget-header">
          <h5 class="modal-title in-header" id="staticBackdropLabel"><i class="fa fa-plus" aria-hidden="true"></i>
            Add User</h5>
          <span class="ui-icon ui-icon-closethick" data-bs-dismiss="modal" aria-label="Close"></span>
        </div>
        <div class="ui-dialog-content" id="staticBackdropLabel">
          <div class="card">
            <div class="card-body">
              <div class="mt-3 print-size">
                <div class="row d-flex align-items-baseline">
                  <div class="col-xl-9">
                  </div>
                  <hr>
                </div>
                <div class="form-user">
                  <p class="text-user">USER</p>
                  <label for="code"><b style="font-size: 11px; font-weight: 600;">Code</b></label>
                  <!-- <input type="text" placeholder="Enter Code" name="code" required style="display: flex; width: 100%; height: 7%;" v-model="object.id"> -->
                  <input type="text" placeholder="Enter Code" name="code" required
                    style="display: flex; width: 100%; height: 7%;" v-model="user_form.user_code" :disabled="true">
                  <label for="name"><b style="font-size: 11px;">Name</b></label>
                  <input type="text" placeholder="Enter Name" name="name" required
                    style="display: flex; width: 100%; height: 7%;" v-model="user_form.user_name">
                  <label for="email"><b style="font-size: 11px; font-weight: 600;">Email</b></label>
                  <input type="text" placeholder="Enter Email" name="email" required
                    style="display: flex; width: 100%; height: 7%;" v-model="user_form.email">
                  <label for="password"><b style="font-size: 11px; font-weight: 600;">Password</b></label>
                  <input type="password" placeholder="Enter Password" name="password" required
                    style="display: flex; width: 100%; height: 7%;" v-model="user_form.password">

                  <label for="c_pass"><b style="font-size: 11px; font-weight: 600;">Confirm Password</b></label>
                  <input type="text" placeholder="Enter confirm password" name="c_pass" required
                    style="display: flex; width: 100%; height: 7%;" v-model="confirm_pass">

                  <label for="email"><b style="font-size: 11px; font-weight: 600;">Role</b></label>
                  <div class="dropdown d-flex">
                    <button @click="getuser(user_form)" @onmouseout="prooductboom()"
                      class="dropdown-toggle string_zen clear_text text select-menu select-item popup-drop" type="button"
                      id="dropdownMenuButton1 " data-bs-toggle="dropdown" aria-expanded="false" size="50"
                      style="margin-left: 0px !important;">
                      {{ user_form.role }} <i class="fa fa-chevron-down"></i>
                    </button>
                    <div class="dropdown-menu each-drop-menu" aria-labelledby="dropdownMenuButton1">
                      <p>
                        <input v-model="txtsearch" @input="getrole(txtsearch)"
                          class="string_zen clear_text text search-pro-field" size="50" type="text" />
                      </p>
                      <ul style="list-style: none" class="scrollable-menu">
                        <li @click="getuser(user_form, 'Admin')">
                          <div class="menu-item">
                            <p>Admin</p>
                          </div>
                        </li>
                        <li @click="getuser(user_form, 'Doctor')">
                          <div class="menu-item">
                            <p>Doctor</p>
                          </div>
                        </li>
                        <li @click="getuser(user_form, 'Labo')">
                          <div class="menu-item">
                            <p>Labo</p>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <label for="status"><b style="font-size: 11px; font-weight: 600;">Status</b></label>
                  <input type="text" placeholder="Enter Status" name="role" required
                    style="display: flex; width: 100%; height: 7%;" v-model="user_form.statue">

                  <!-- <button v-if="user_form.password != confirm_pass" type="button" @click="save_update()" class="save-form" data-bs-target="#useragain">{{ save_or_update }}</button> -->
                  <button type="button" @click="save_update()" class="save-form" data-bs-toggle="modal"
                    data-bs-target="#useragain">{{ save_or_update }}</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div id="myModal" class="lskymodal">
    <div class="lskymodal-content">
      <p><i aria-hidden="true"></i> {{ massege }}</p>
    </div>
  </div>
  <div id="footer">
    <div id="copyright">Copyright (C) healthbook. ALL Right s Researved Edit by Lsky</div>
  </div>
</template>

<script>
import axios from "axios";
import pagination from "laravel-vue-pagination";
import moment from "moment";
import Header from "../Header.vue";
import { ref } from "vue";
import print from 'vue3-print-nb';
export default {
  components: { Header, pagination },
  directives:{
    print
  },
  data() {
    return {
      serails: [],
      company: [],
      formatdate: "",
      checkbt: '',
      perPage: "",
      currentPage: 0,
      last_page: 1,
      action_api: "",
      btcheck: 'Save',
      action_api_1: "",
      employee: [],
      deleteid: '',
      user: [],
      error: "",
      massege: "",
      btnback:false,
      object: {
        id: '',
        email: ' ',
        firstname: ''
      },
      confirm_pass: '',
      form: {
        id: "",
        lstname: "",
        firstname: "",
        birstdate: "",
        sex: "Male",
        phone1: "",
        phone2: "",
        email: "",
        hiredate: "",
        address: "",
        address2: "",
        village: "",
        commune: "",
        district: "",
        pro_city: "",
        region: "",
        remark: "",
        status: "",
        created_by: "",
        updete_by: "",
      },
      save_or_update: 'Save',

      user_form: {
        id: "",
        user_code: "",
        user_name: "",
        password: "",
        email: "",
        role: "",
        statue: "",
        created_by: "",
        delete_by: "",
        created_at: "",
        updated_at: "",
      },
      user_view: [],

    };
  },

  mounted() {
    this.getSerail();
    this.getcompany();
    this.checkedActive();
    this.getEmployee()
  },
  methods: {
    btnBack(){
      this.btnback = false
      this.form={}
    },
    getEmployee(page = 1) {
      if (page > 0 && page <= this.last_page) {
        axios
          .get("api/v1/employee/index")
          .then(({ data }) => {
            this.links = data.links;
            this.last_page = data.last_page;
            this.links.forEach((element) => {
              if (element.label == page) {
                this.perPage = "api/v1/employee/index?page=" + page;
                axios.get(this.perPage).then(({ data }) => {
                  this.currentPage = data.current_page;
                  this.employee = data;
                });
              }
            });
          })

          .catch(({ response }) => {
            console.error(response);
          });
      }
    },
    getUser_view(emp) {
      this.save_or_update = "Save"
      this.user_form = {}
      this.user_form.user_code = emp.id
      this.user_form.id = emp.id
      axios.get("/api/v1/getuserview/" + this.user_form.id)
        .then((res) => {
          console.log(res.data)
          this.user_view = res.data
          this.user_form = res.data.lists
          if (this.user_view.status == 1) {
            this.save_or_update = "Update"
          }
          else {
            this.save_or_update = "Save"
          }
        })
        .catch(err => {
          console.log(err)
        })

    },
    save_update() {
      if (this.save_or_update === 'Save') {
        this.save_user()
      }
      if (this.save_or_update === 'Update') {
        axios.post('/api/v1/update/user/' + this.user_form.user_code, this.user_form)
          .then((res) => {
            console.log(res.data)
          })
      }
    },

    getsex(txt) {
      if (txt == 'other') {
        this.form.sex = "Other"
        console.log(this.form.sex)
      }
      else if (txt == 'male') {
        this.form.sex = 'Male'
        console.log(this.form.sex)
      }
      else {
        this.form.sex = 'Female'
        console.log(this.form.sex)
      }
    },
    add_emp() {
      axios.post("/api/v1/employee/create/", this.form)
        .then(emp => {
          console.log(emp)
          this.getEmployee()
          this.form = {}
        })
    },

    getid(id) {
      this.deleteid = id;
      console.log(this.deleteid)
      this.form = {}
    },

    btnDelete() {
      axios.get("/api/v1/employee/delete/" + this.deleteid)
        .then(() => {
          this.getEmployee()
          console.log(emp)

        })

    },
    btnEdit(items) {
      this.btcheck = "Update";
      this.form = items;
      this.deleteid = items.id
      this.btnback = true
      console.log(this.deleteid)
    },
    update() {
      axios.post("/api/v1/employee/update/" + this.form.id, this.form)
        .then(emp => {
          console.log(emp)
          this.btcheck = "Save";
          this.form = {}
        })
    },
    btnsave() {
      if (this.btcheck == "Update") {
        this.update();
        this.form = {}
      }
      else {
        this.add_emp();
      }
    },
    cancel() {
      this.form = {}
    },
    getunit(fom, txt) {
      fom.remark = txt;
    },

    getcreate(user) {
      this.user_form.id = user.id
      // this.object.email = employee.email
      // this.object.firstname = employee.firstname
    },

    save_user() {
      if (this.confirm_pass == this.user_form.password) {
        axios.post("/api/v1/uers/create/", this.user_form)
          .then(us => {
            console.log(us)

          })
          .catch((error) => {
            this.massege = "The user name and password field is required.";
            this.messagebox();
          });
      }
      else {
        this.massege = "Enter wrong confirm password!";
        this.messagebox()
      }
    },
    messagebox() {
      var modal = document.getElementById("myModal");
      modal.style.display = "block";
      setTimeout(() => (modal.style.display = "none"), 1500);
    },

    getuser(us_form, txt) {
      us_form.role = txt;
    },

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
    getcompany() {
      axios.get("/api/v1/getSetup/")
        .then((response) => {
          this.company = response.data;
          this.dateformart = moment(new Date()).format('YYYY-MM-DD');
        });
    },
    checkedActive() {
      var items = document.querySelectorAll(".radio > span")
      console.log(items.length)
      for (let i = 0; i < items.length; i++) {
        items[i].addEventListener('click', function () {
          let currentBtn = document.querySelectorAll('.checked')
          currentBtn[0].className = currentBtn[0].className.replace('checked', '')
          this.className += " checked"
        })
      }
    },
    getEmployee() {
      axios.get("api/v1/employee/index/")
        .then((emp) => {
          this.employee = emp.data
          console.log(this.employee)
        })
    },

    btnClear() {
      this.form = {};
    },
    btnClose() {
      this.form = {};
    },
    btnAdd() {
      this.btcheck = 'create';
      this.form = {};
      this.action_api = "api/v1/units/store";
    },
    btnSave() {
      axios.post("api/v1/units/store", this.form).then((res) => {
        this.getSerail();
        this.form = Object.assign({});
      });
    },
    btnUpdate() {
      axios
        .post("/api/v1/units/update/" + this.form.id, this.form)
        .then((res) => {
          console.log(res);
          this.getSerail();
          this.form = {};
        });
    },
  },
};

</script>

