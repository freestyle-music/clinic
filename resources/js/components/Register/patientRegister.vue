<template>
  <div class="wrapper">
    <div class="container-fuild">
      <div id="headTitle">
        <div id="logo"><img alt="Healthbook" height="44" src="img/logo.png" width="70" _mstalt="155922" _msthash="1">
        </div>
        <h1 id="title" _msttexthash="48503" _msthash="2">Patient</h1>
      </div>
      <Header />
      <ol id="topicPath">
        <li style="margin-left: 264px;">
          <router-link to="viewproduct"><a href="dashbaord">
              <font style="vertical-align: inherit">
                <font style="vertical-align: inherit">Patient</font>
              </font>
            </a>
          </router-link>
        </li>
      </ol>

    </div>
    <div class="search-box">
      <div id="product">
        <!--#contents -->
        <div class="search-box mb-4" id="mb-4">
          <a class="btn-radius bt-pn btn btn-sm" style="float:right;" data-bs-toggle="modal" aria-expanded="false"
            data-bs-target="#alertbell">
            <i class="fas fa-bell" style="font-size:18px; margin-right: 5px;"></i>
            20
          </a>
          <a class="btn-radius bt-pn btn btn-sm" data-bs-toggle="modal" data-bs-target="#staticboomId" tabindex="10028"
            style="float:right; color: #f8f5b4;">
            <i class="fa fa-print" aria-hidden="true" style="padding-right:5px;"></i>
            Print
          </a>
          <h2 class="search-box-title">
            <i class="fa fa-search" aria-hidden="true"></i>
            Search
          </h2>
          <input id="search" name="search" type="hidden" value="1" />

          <div class="search-box-content">
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="tbl_form">
              <tbody>
                <tr>
                  <th style="color:#f8f5b4">PatientId</th>
                  <td colspan="3">
                    <input class="string_zen clear_text text" id="search_word_simei_s" maxlength="50"
                      name="search_word[simei_s]" type="text" tabindex="10017" v-model="form.pateinid" style="width:15%;">
                  </td>
                </tr>
                <tr>
                  <th style="color:#f8f5b4">Name</th>
                  <td colspan="3">
                    FirstName
                    <input class="string_zen clear_text text" id="search_word_simei_s" maxlength="50"
                      name="search_word[simei_s]" type="text" tabindex="10017" v-model="form.firstname"
                      style="width:15%;">
                    LastName
                    <input class="string_zen clear_text text" id="search_word_simei_s" maxlength="50"
                      name="search_word[simei_s]" type="text" tabindex="10017" v-model="form.lstname" style="width:15%;">
                  </td>
                </tr>
                <tr>
                  <th style="color:#f8f5b4">Age/BirthDate</th>
                  <td colspan="3">
                    Age
                    <input style="width: 8%;" class="string_zen clear_text text" id="search_word_jigyosyo_group_name"
                      maxlength="50" name="search_word[jigyosyo_group_name]" type="number" tabindex="10014"
                      v-model="form.age" @change="getage(form.age)">
                    Birthday
                    <input style="width:15%;" class="string_zen clear_text text" id="search_word_jigyosyo_group_name"
                      name="search_word[jigyosyo_group_name]" type="date" tabindex="10014" v-model="form.birstdate">
                  </td>
                </tr>
                <tr>
                  <th width="3%" style="color:#f8f5b4">Sex</th>
                  <td width="32%">
                    <div class="gender">
                      <div class="radio" id="uniform-search_word_sizai_send_kbn_0" @click="getsex('male')"><span
                          class="checked"><input v-model="form.sex" checked="checked" id="search_word_sizai_send_kbn_0"
                            name="search_word[sizai_send_kbn]" type="radio" value="0" tabindex="10000"
                            style="opacity: 0;"></span></div><label for="search_word_sizai_send_kbn_0">
                        <font style="vertical-align: inherit;">
                          <font style="vertical-align: inherit; margin-left:6px;">Male</font>
                        </font>
                      </label>
                      <div class="radio" id="uniform-search_word_sizai_send_kbn_0" @click="getsex('female')"><span
                          class=""><input v-model="form.sex" checked="checked" id="search_word_sizai_send_kbn_0"
                            name="search_word[sizai_send_kbn]" type="radio" value="0" tabindex="10000"
                            style="opacity: 0;"></span></div><label for="search_word_sizai_send_kbn_0">
                        <font style="vertical-align: inherit;">
                          <font style="vertical-align: inherit; margin-left:6px;">Female</font>
                        </font>
                      </label>
                      <div class="radio" id="uniform-search_word_sizai_send_kbn_0" @click="getsex('other')"><span
                          class=""><input v-model="form.sex" checked="checked" id="search_word_sizai_send_kbn_0"
                            name="search_word[sizai_send_kbn]" type="radio" value="0" tabindex="10000"
                            style="opacity: 0;"></span></div><label for="search_word_sizai_send_kbn_0">
                        <font style="vertical-align: inherit;">
                          <font style="vertical-align: inherit; margin-left:6px;">Other</font>
                        </font>
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th width="3%" style="color:#f8f5b4">Situation</th>
                  <td width="32%">
                    <div class="gender situation">
                      <div class="radio radio-1" id="uniform-search_word_sizai_send_kbn_0" @click="getsex('single')">
                        <span class="checked"><input v-model="form.status" checked="checked"
                            id="search_word_sizai_send_kbn_0" name="search_word[sizai_send_kbn]" type="radio" value="0"
                            tabindex="10000" style="opacity: 0;"></span>
                      </div><label for="search_word_sizai_send_kbn_0">
                        <font style="vertical-align: inherit;">
                          <font style="vertical-align: inherit; margin-left:6px;">Single</font>
                        </font>
                      </label>
                      <div class="radio radio-1" id="uniform-search_word_sizai_send_kbn_0" @click="getsex('married')">
                        <span class=""><input v-model="form.status" checked="checked" id="search_word_sizai_send_kbn_0"
                            name="search_word[sizai_send_kbn]" type="radio" value="0" tabindex="10000"
                            style="opacity: 0;"></span>
                      </div><label for="search_word_sizai_send_kbn_0">
                        <font style="vertical-align: inherit;">
                          <font style="vertical-align: inherit; margin-left:6px;">Married</font>
                        </font>
                      </label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th style="color:#f8f5b4">Phone Number</th>
                  <td colspan="3">
                    PhoneNumber
                    <input class="string_zen clear_text text" id="search_word_simei_s" maxlength="50"
                      name="search_word[simei_s]" type="text" tabindex="10017" v-model="form.phone1" style="width:8%;">
                    HomeNumber
                    <input class="string_zen clear_text text" id="search_word_simei_s" maxlength="50"
                      name="search_word[simei_s]" type="text" tabindex="10017" v-model="form.phone2" style="width:8%;">
                  </td>
                </tr>
                <tr>
                  <th style="color:#f8f5b4">Email</th>
                  <td colspan="3">
                    <input class="string_zen clear_text text" id="search_word_simei_s" maxlength="50"
                      name="search_word[simei_s]" type="text" tabindex="10017" v-model="form.email" style="width:20%;">
                  </td>
                </tr>
                <tr>
                  <th style="color:#f8f5b4">Address</th>
                  <td colspan="3">
                    Village
                    <input class="string_zen clear_text text" id="search_word_simei_s" maxlength="50"
                      name="search_word[simei_s]" type="text" tabindex="10017" v-model="form.village" style="width:8%;">
                    Commune
                    <input class="string_zen clear_text text" id="search_word_simei_s" maxlength="50"
                      name="search_word[simei_s]" type="text" tabindex="10017" v-model="form.commune" style="width:8%;">
                    District
                    <input class="string_zen clear_text text" id="search_word_simei_s" maxlength="50"
                      name="search_word[simei_s]" type="text" tabindex="10017" v-model="form.district" style="width:8%;">
                    City
                    <input class="string_zen clear_text text" id="search_word_simei_s" maxlength="50"
                      name="search_word[simei_s]" type="text" tabindex="10017" v-model="form.pro_city" style="width:8%;">
                    Region
                    <input class="string_zen clear_text text" id="search_word_simei_s" maxlength="50"
                      name="search_word[simei_s]" type="text" tabindex="10017" v-model="form.region" style="width:8%;">
                    <br>
                    <br>
                    <textarea class="string_zen clear_text text" id="search_word_simei_s" cols="1" rows="1"
                      name="search_word[simei_s]" type="text" tabindex="10017" v-model="form.address"
                      style="width:35%; outline: none;">
                    </textarea>
                  </td>
                </tr>
                <tr>
                  <th style="color:#f8f5b4">Allergies</th>
                  <td colspan="3">
                    <textarea cols="1" rows="1" class="string_zen clear_text text" id="search_word_simei_s"
                      name="search_word[simei_s]" type="text" tabindex="10017" v-model="form.allergies"
                      style="width:35%; outline: none;"></textarea>
                  </td>
                </tr>
                <tr>
                  <th style="color:#f8f5b4">History Disease</th>
                  <td colspan="3">
                    <textarea cols="1" rows="1" class="string_zen clear_text text" id="search_word_simei_s"
                      name="search_word[simei_s]" type="text" tabindex="10017" v-model="form.history_disease"
                      style="width:35%; outline: none;">
                      </textarea>
                  </td>
                </tr>
                <tr>
                  <th style="color:#f8f5b4">Remark</th>
                  <td colspan="3">
                    <textarea cols="1" rows="1" class="string_zen clear_text text" id="search_word_simei_s"
                      name="search_word[simei_s]" type="text" tabindex="10017" v-model="form.remark"
                      style="width:35%; outline: none;"></textarea>
                  </td>
                </tr>

              </tbody>
            </table>
            <div class="search-box-footer">
              <div v-if="btnback == true" @click="btnBack()" class="button type2" id="uniform-undefined">
                <span tabindex="10028"><input type="button" value="display" class="type2" style="opacity: 0; width: 54px"
                    tabindex="10025" /><i class="fa fa-arrow-left" aria-hidden="true" style="margin-right: 7px"></i>Back
                </span>
              </div>
              <div v-if="btncheckdelete == 'Delete'" class="button type2" id="uniform-undefined" data-bs-toggle="modal"
                data-bs-target="#comfirmdelete">
                <span><input type="button" value="display" class="type2" style="opacity: 0; width: 54px"
                    tabindex="10025" /><i class="fa fa-trash" aria-hidden="true"></i>
                  {{ btncheckdelete }}</span>
              </div>
              <div v-else class="button type2" id="uniform-undefined">
                <span><input type="button" value="display" class="type2" style="opacity: 0; width: 54px"
                    tabindex="10025" /><i class="fa fa-search" aria-hidden="true"></i>
                  {{ btncheckdelete }}</span>
              </div>
              <div class="button type2" id="uniform-undefined" data-bs-toggle="modal" data-bs-target="#clearconfirm">
                <span tabindex="10028"><input type="button" value="display" class="type2" style="opacity: 0; width: 54px"
                    tabindex="10025" /><i class="fas fa-file-import" style="margin-right: 7px;"></i>{{ btncheckEdit }}
                </span>
              </div>
              <span class="marker"></span>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="box-footer-pagination">
            <div class="pagination">
              <div class="pagination">
                <span class="page current">
                  1
                </span>
                <span class="page">
                  <a href="#" rel="next">2</a>
                </span>
                <span class="page">
                  <a href="#">3</a>
                </span>
                <span class="next">
                  <a href="#" rel="next"><span class="translation_missing">&gt;</span></a>
                </span>
                <span class="last">
                  <a href="#"><span class="translation_missing">&gt;&gt;</span></a>
                </span>
              </div>
            </div>
          </div>
          <div class="box-content">
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="table table-striped br-table">
              <thead>
                <tr class="header-table">
                  <th width="8%">PateinId</th>
                  <th width="12%">Name</th>
                  <th width="6%">Sex</th>
                  <th width="1%">Age</th>
                  <th width="9%">Birthday</th>
                  <th width="8%">PhoneNumber</th>
                  <th width="8%">HomeNumber</th>
                  <th width="15%">Address</th>
                  <th width="12%">Email</th>
                  <th width="14%">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="(reg, index) in register" :key="index">
                  <td v-if="index % 2 == 0" style="border: medium none">
                    {{ reg.pateinid }}
                  </td>
                  <td v-else style="border: medium none">
                    {{ reg.pateinid }}
                  </td>
                  <td v-if="index % 2 == 0" style="border: medium none">
                    {{ reg.firstname }} {{ reg.lstname }}
                  </td>
                  <td v-else style="border: medium none">
                    {{ reg.firstname }} {{ reg.lstname }}
                  </td>
                  <td v-if="index % 2 == 0" style="border: medium none">
                    {{ reg.sex }}
                  </td>
                  <td v-else style="border: medium none">
                    {{ reg.sex }}
                  </td>
                  <td v-if="index % 2 == 0" style="border: medium none">
                    {{ reg.age }}
                  </td>
                  <td v-else style="border: medium none">
                    {{ reg.age }}
                  </td>

                  <td v-if="index % 2 == 0" style="border: medium none">
                    {{ reg.birstdate }}
                  </td>
                  <td v-else style="border: medium none">
                    {{ reg.birstdate }}
                  </td>
                  <td v-if="index % 2 == 0" style="border: medium none">
                    {{ reg.phone1 }}
                  </td>
                  <td v-else style="border: medium none">
                    {{ reg.phone1 }}
                  </td>
                  <td v-if="index % 2 == 0" style="border: medium none">
                    {{ reg.phone2 }}
                  </td>
                  <td v-else style="border: medium none">
                    {{ reg.phone2 }}
                  </td>

                  <td v-if="index % 2 == 0" style="border: medium none">
                    {{ reg.address }} {{ reg.village }} {{ reg.commune }} {{ reg.district }} {{ reg.pro_city }}
                  </td>
                  <td v-else style="border: medium none">
                    {{ reg.address }} {{ reg.village }} {{ reg.commune }} {{ reg.district }} {{ reg.pro_city }}
                  </td>
                  <td v-if="index % 2 == 0" style="border: medium none">
                    {{ reg.email }}
                  </td>
                  <td v-else style="border: medium none">
                    {{ reg.email }}
                  </td>
                  <td v-if="index % 2 == 0" style="border: medium none; text-align: center">
                    <div style="
                          display: flex;
                          flex-direction: row;
                          justify-content: space-around;
                          align-items: center;
                        ">
                      <div @click="btn_checkEdit(reg)" class="button type2">
                        <span><input type="button" value="display" class="type2" style="opacity: 0; width: 54px"
                            tabindex="10025" /><i class="fa fa-edit"></i>Select</span>
                      </div>
                      <div class="button type2" id="uniform-undefined" data-bs-toggle="modal" data-bs-target="#Create"
                        @click="btn_checkEdit(reg)">
                        <span><i class="fa fa-plus-square" aria-hidden="true"></i>Newvisit
                          <input type="button" value="clear" class="type2" style="opacity: 0; width: 63px"
                            tabindex="10026" /></span>
                      </div>
                    </div>
                  </td>
                  <td v-else style="border: medium none; text-align: center">
                    <div style="display: flex;
                          flex-direction: row;
                          justify-content: space-around;
                          align-items: center;
                        ">
                      <div @click="btn_checkEdit(reg)" class="button type2">
                        <span><input type="button" value="display" class="type2" style="opacity: 0; width: 54px"
                            tabindex="10025" /><i class="fa fa-edit"></i>Select</span>
                      </div>
                      <div class="button type2" id="uniform-undefined" to="product" data-bs-toggle="modal"
                        data-bs-target="#Create" @click="btn_checkEdit(reg)">
                        <span><i class="fa fa-plus-square" aria-hidden="true"></i>Newvisit
                          <input type="button" value="clear" class="type2" style="opacity: 0; width: 63px"
                            tabindex="10026" /></span>
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="box-footer-pagination">
            <div class="pagination">
              <div class="pagination">
                <span class="page current">
                  1
                </span>
                <span class="page">
                  <a href="#" rel="next">2</a>
                </span>
                <span class="page">
                  <a href="#">3</a>
                </span>
                <span class="next">
                  <a href="#" rel="next"><span class="translation_missing">&gt;</span></a>
                </span>
                <span class="last">
                  <a href="#"><span class="translation_missing">&gt;&gt;</span></a>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- confirm model  -->
  <div class="modal fade ui-modal" id="clearconfirm" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="clearconfirmlabel" aria-hidden="true">
    <div class="modal-dialog smallpopup" id="nonbackgroundboom">
      <div class="modal-content ui-dialog">
        <div class="ui-widget-header">
          <h5 class="modal-title" id="exampleModalLabel">
            <span class="ui-dialog-title" id="ui-dialog-title-modal-edit-dialog">Confirm Message</span>
          </h5>
          <span class="ui-icon ui-icon-closethick btn-cancel" data-bs-dismiss="modal" aria-label="Close"></span>
        </div>
        <div class="ui-dialog-content" style="background-color: #fff;">
          <div class="modal-body">Do you want to save this Items?</div>
          <div class="modal-footer">
            <div class="button type2" data-bs-dismiss="modal" @click="btnsave()"><span>Yes</span></div>
            <div class="button type2" id="uniform-undefined" data-bs-dismiss="modal" @click="cancel()">
              <span>No<input type="button" class="type2" onclick="edit_cancel()" tabindex="10008" value="No"
                  style="width: 89px; opacity: 0;">
              </span>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end confirm modl -->
  <!-- comfirm delete model  -->
  <div class="modal fade ui-modal" id="comfirmdelete" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="clearconfirmlabel" aria-hidden="true">
    <div class="modal-dialog smallpopup" id="nonbackgroundboom">
      <div class="modal-content ui-dialog">
        <div class="ui-widget-header">
          <h5 class="modal-title" id="exampleModalLabel">
            <span class="ui-dialog-title" id="ui-dialog-title-modal-edit-dialog">Confirm Message</span>
          </h5>
          <span class="ui-icon ui-icon-closethick btn-cancel" data-bs-dismiss="modal" aria-label="Close"></span>
        </div>
        <div class="ui-dialog-content" style="background-color: #fff;">
          <div class="modal-body">Do you want to delete this Items?</div>
          <div class="modal-footer">
            <div class="button type2" data-bs-dismiss="modal" @click="deleteRegister(selectid)"><span>Yes</span></div>
            <div class="button type2" id="uniform-undefined" data-bs-dismiss="modal" @click="cancel()">
              <span>No<input type="button" class="type2" onclick="edit_cancel()" tabindex="10008" value="No"
                  style="width: 89px; opacity: 0;">
              </span>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end comfirm delete model  -->
  <!-- create model  -->
  <div class="modal fade ui-modal" id="Create" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="clearconfirmlabel" aria-hidden="true">
    <div class="modal-dialog smallpopup" id="nonbackgroundboom">
      <div class="modal-content ui-dialog">
        <div class="ui-widget-header">
          <h5 class="modal-title" id="exampleModalLabel">
            <span class="ui-dialog-title" id="ui-dialog-title-modal-edit-dialog">Confirm Message</span>
          </h5>
          <span class="ui-icon ui-icon-closethick btn-cancel" data-bs-dismiss="modal" aria-label="Close"></span>
        </div>
        <div class="ui-dialog-content" style="background-color: #fff;">
          <div class="modal-body">Do you want to Create this Items?</div>
          <div class="modal-footer">
            <div class="button type2" data-bs-dismiss="modal" @click="createvisit()"><span>Yes</span></div>
            <div class="button type2" id="uniform-undefined" data-bs-dismiss="modal" @click="cancel()">
              <span>No<input type="button" class="type2" @click="edit_cancel()" tabindex="10008" value="No"
                  style="width: 89px; opacity: 0;">
              </span>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- end create model  -->
  <!-- Bell alert -->
  <div class="modal fade ui-modal" id="alertbell" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticboomId" aria-hidden="true">
    <div class="modal-dialog " id="recept">
      <div class="modal-content ui-dialog">
        <div class="ui-widget-header">
          <h5 class="modal-title in-header" id="staticBackdropLabel"><i class="fa fa-print" aria-hidden="true"></i>
            View</h5>
          <span class="ui-icon ui-icon-closethick" data-bs-dismiss="modal" aria-label="Close"></span>
        </div>
        <div class="ui-dialog-content" id="purchaseorder">
          <div class="card">
            <div class="card-body">
              <div class="mt-3">

                <div style="padding:0 40px">

                  <div class=" my-2  justify-content-center">
                    <table class="table table-striped br-table">
                      <thead>
                        <tr class="header-table">
                          <th class="text-center">Visit Date</th>
                          <th class="text-center">Patient Code</th>
                          <th class="text-center">Patient Name</th>
                          <th class="text-center">Sex</th>
                          <th class="text-center">Phone</th>
                          <th class="text-center">Date Of Birth</th>
                          <th class="text-center">District</th>
                          <th class="text-center">Province</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>25/04/2022</td>
                          <td>0001</td>
                          <td>Kim srun</td>
                          <td>F</td>
                          <td>09700007</td>
                          <td>10/10/1890</td>
                          <td>Sarng</td>
                          <td>Takao</td>
                          <td class="text-center">
                            <div class="button" id="uniform-undefined">
                              <span><i class="fa fa-plus"></i> Add<input type="button" tabindex="10028"
                                  style="opacity: 0; width: 70px" /></span>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>25/04/2022</td>
                          <td>0001</td>
                          <td>Kim srun</td>
                          <td>F</td>
                          <td>09700007</td>
                          <td>10/10/1890</td>
                          <td>Sarng</td>
                          <td>Takao</td>
                          <td class="text-center">
                            <div class="button" id="uniform-undefined">
                              <span><i class="fa fa-plus"></i> Add<input type="button" tabindex="10028"
                                  style="opacity: 0; width: 70px" /></span>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>25/04/2022</td>
                          <td>0001</td>
                          <td>Kim srun</td>
                          <td>F</td>
                          <td>09700007</td>
                          <td>10/10/1890</td>
                          <td>Sarng</td>
                          <td>Takao</td>
                          <td class="text-center">
                            <div class="button" id="uniform-undefined">
                              <span><i class="fa fa-plus"></i> Add<input type="button" tabindex="10028"
                                  style="opacity: 0; width: 70px" /></span>
                            </div>
                          </td>
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
          <div class="button type2" id="uniform-undefined">
            <span>Close</span>
            <input type="button" value="clear" class="type2" data-bs-dismiss="modal" aria-label="Close"
              style="opacity: 0; width: 63px" tabindex="10026" />
          </div>

        </div>
      </div>
    </div>
  </div>

  <div class="modal fade ui-modal" id="statiex-import" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticboomId" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content ui-dialog">
        <div class="ui-widget-header">
          <h5 class="modal-title in-header" id="staticBackdropLabel">
            <i class="fa fa-print" aria-hidden="true"></i> {{ excel }} to
            Docutment: {{ form.document_no }} , {{ form.description }}
          </h5>
          <a href="#" class="ui-dialog-titlebar-close ui-corner-all" role="button" data-bs-dismiss="modal">
            <span class="ui-icon ui-icon-closethick">close</span></a>
        </div>
        <div id="purchaseorder">
          <div class="card">
            <div class="card-body">
              <div class="container mb-5 mt-3">
                <div class="row d-flex align-items-baseline">
                  <div class="col-xl-9"></div>
                  <hr />
                </div>

                <div class="container">
                  <div class="col-md-12">
                    <div class="text-center">
                      <h3 v-if="excel == 'Import'" class="​title-purchase" id="titlered">
                        {{ excel }} {{ exefile }} from Excel
                      </h3>
                      <h3 v-else class="title-purchase" id="titlered">
                        {{ excel }} To Excel
                      </h3>
                    </div>
                  </div>
                  <div class="
                        row
                        my-2
                        mx-1
                        justify-content-center
                        table-padding-bot
                        customsroll
                      ">
                    <table class="table table-striped table-borderless" id="exceldata">
                      <thead style="background-color: #84b0ca" class="text-white">
                        <tr>
                          <th style="width: 12%">No</th>
                          <th style="width: 12%">Barcode</th>
                          <th style="width: 15%">Description</th>
                          <th style="width: 7%">Prince</th>
                          <th style="width: 7%">R.Point</th>
                          <th style="width: 7%">Supplyer</th>
                          <th style="width: 7%">Brand</th>
                          <th style="width: 7%">Group</th>
                          <th style="width: 12%">Category</th>
                          <th style="width: 7%">unitCode</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr v-for="(purchaseLine, index) in items" :key="items.index">
                          <th v-if="purchaseLine.product_no != ''" style="width: 12%">
                            {{ purchaseLine.product_no }}
                          </th>
                          <th v-if="purchaseLine.product_no != ''" style="width: 12%">
                            {{ purchaseLine.product_barcode }}
                          </th>
                          <th v-if="purchaseLine.product_no != ''" style="width: 15%">
                            {{ purchaseLine.description }}
                          </th>
                          <th v-if="purchaseLine.product_no != ''" style="width: 12%">
                            {{
                              purchaseLine.unit_price
                            }}{{ purchaseLine.curency_code }}
                          </th>
                          <th v-if="purchaseLine.product_no != ''" style="width: 12%">
                            {{ purchaseLine.reorder_point }}
                          </th>
                          <th v-if="purchaseLine.product_no != ''" style="width: 12%">
                            {{ purchaseLine.sup_code }}
                          </th>
                          <th v-if="purchaseLine.product_no != ''" style="width: 12%">
                            {{ purchaseLine.brand_code }}
                          </th>
                          <th v-if="purchaseLine.product_no != ''" style="width: 10%">
                            {{ purchaseLine.group_code }}
                          </th>
                          <th v-if="purchaseLine.product_no != ''" style="width: 12%">
                            {{ purchaseLine.cat_code }}
                          </th>
                          <th v-if="purchaseLine.product_no != ''" style="width: 12%">
                            {{ purchaseLine.stock_unit_of_measure_code }}
                          </th>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <hr />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <a v-if="excel == 'Import'" class="btn-purchase btn-light text-capitalize" data-bs-dismiss="modal"
            data-mdb-ripple-color="dark" @click="saveprulink()"><i class="fas fa-save"></i> Save Date</a>
          <a v-if="excel == 'Import'" class="btn-purchase btn-light text-capitalize" data-mdb-ripple-color="dark"><i
              class="fas fa-file-excel"></i> {{ excel }} Form excel</a>
          <input v-if="excel == 'Import'" type="file" @change="getExcelData" name="select_file" />
          <a v-else class="btn-purchase btn-light text-capitalize" data-bs-dismiss="modal" data-mdb-ripple-color="dark"
            @click="exportdataExcel()"><i class="fas fa-save"></i> Save Date</a>
        </div>
      </div>
    </div>
  </div>

  <div id="myModalauto" class="lsky">
    <div class="lsky-content">
      <p>{{ massege }}</p>
    </div>
  </div>
  <div class="modal fade ui-modal" id="staticboomId" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticboomId" aria-hidden="true">
    <div class="modal-dialog" style="max-width:65% !important;">
      <div class="modal-content ui-dialog">
        <div class="ui-widget-header">
          <h5 class="modal-title in-header" id="staticBackdropLabel"><i class="fa fa-print" aria-hidden="true"></i>
            Print</h5>
          <span class="ui-icon ui-icon-closethick" data-bs-dismiss="modal" aria-label="Close"></span>
        </div>
        <div class="ui-dialog-content" id="printProduct">
          <div class="card">
            <div class="card-body">
              <div class="mt-3 print-size">
                <div style="padding:0 50px 0 50px">
                  <div class="col-md-12">
                    <div class="text-center">
                      <h3 class="title-purchase">PATIENT REPORT</h3>
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
                      <p class="text-center p-bg font-size p-pad">PRODUCT COUNT</p>
                      <p class="text-center p-mg">{{ register.total }}</p>
                    </div>
                  </div>
                  <div class="my-2 justify-content-center">
                    <table id="pr-tb">
                      <thead>
                        <tr class="p-bg">
                          <th class="text-center">Name</th>
                          <th class="text-center">Age/Birthday</th>
                          <th class="text-center">Gender</th>
                          <th class="text-center">Phone1</th>
                          <th class="text-center">Phone2</th>
                          <th class="text-center">Address</th>
                          <th class="text-center">Email</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr v-for="(reg, index) in register" :key="index">
                          <td style="padding-right:5px;width:4em;">{{ reg.firstname }} {{ reg.lstname }}</td>
                          <td style="width:6em">{{ reg.birstdate }}</td>
                          <td style="width:6em">{{ reg.sex }}</td>
                          <td style="width:6em">{{ reg.phone1 }} </td>
                          <td style="width:6em">{{ reg.phone2 }}</td>
                          <td style="width:4em">{{ reg.address }} {{ reg.village }} {{ reg.commune }} {{ reg.district }}
                            {{
                              reg.pro_city }}</td>
                          <td style="width:6em">{{ reg.email }}</td>
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
          <a v-print="'#printProduct'" class="btn-purchase btn-light text-capitalize border-0" data-mdb-ripple-color="dark"><i
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
import Header from "../Header.vue";
import readXlsxFile from "read-excel-file";
import * as XLSX from "xlsx/xlsx.mjs";
import pagination from "laravel-vue-pagination";
import moment from "moment";
import axios from "axios";
import Auth from '../../auth/Auth.js';
import print from 'vue3-print-nb';
import { ref, reactive, watch, computed, onMounted } from "vue";
const btnValue1 = ref(false);
const btnValue2 = ref(false);
const disabled = ref(true);
export default {
  components: { Header, pagination },
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
      date: {
        age: "",
        day: "",
        month: "",
        year: ""
      },
      selectid: '',
      photo_path: "",
      brands: [],
      baseURL: '',
      graoups: [],
      category: [],
      suppliyers: [],
      uints: [],
      btncheckEdit: 'Save',
      btncheckdelete: 'Search',

      register: [],

      group_product: '',
      unit: '',
      supplyer: '',
      single_category: '',
      BrandName: '',
      links: [],
      products: [],
      dateformart: "",
      company: [],
      perPage: "",
      currentPage: 0,
      last_page: 1,
      stockcount: 0,
      btnback: false,
      form: {
        id: "",
        pateinid: "",
        lstname: "",
        firstname: "",
        age: "",
        birstdate: null,
        sex: "Male",
        allergies: "",
        history_disease: "",
        phone1: "",
        phone2: "",
        email: "",
        address: "",
        village: "",
        commune: "",
        district: "",
        pro_city: "",
        region: "",
        remark: "",
        status: "Single",
        created_by: "1",
      },
      checkexcel: [],
      items: [
        {
          product_no: "",
          product_barcode: "",
          description: "",
          description_2: "",
          image_url: "",
          stock_unit_of_measure_code: "",
          purche_unit_of_measure_code: "",
          bom_no: "",
          reorder_point: "",
          sup_code: "",
          brand_code: "",
          group_code: "",
          cat_code: "",
          unit_price: "",
          inactived: "No",
        },
      ],
      iteamLinks: [
        {
          product_no: "",
          description: "",
          description_2: "",
          image_url: "",
          variant_unit_of_measure_code: "",
          stock_unit_of_measure_code: "",
          quantity_per_unit: "",
          unit_price: "",
          curency_code: "",
          status: "",
          inactived: "",
        },
      ],
      checkarray: 1,
      excel: "Import",
      fileName: "PrucheseLine.xlsx",
    };
  },
  mounted() {
    this.loggedUser = Auth.user;
    this.getstockalert();
    this.getproduct();
    this.getunite();
    this.getdatagroup();
    this.getCatName();
    this.getbrands();
    this.getsuppliyer();
    this.getcompany();
    this.baseURL = axios.defaults.baseURL;
    this.checkedActive()
    this.ScheckActive()
    this.getRegister()
  },
  methods: {
    createvisit() {
      this.form.created_by = this.loggedUser.user_code;
      axios.post("/api/v1/prescription/createvisit/", this.form)
        .then(res => {
          this.$router.push({ name: "prescriptions", query: { preId: res.data.preid } });
        });
    },
    btnBack() {
      this.form = {}
      this.btnback = false
      this.btncheckEdit = "Save"
      this.btncheckdelete = "Search"
    },
    cancel() {
      this.getRegister()
      this.btncheckEdit = "Save";
      this.btncheckdelete = "Search";
      this.form = {};
    },
    Addregister() {
      if (this.form.pateinid != "") {
        axios.post("/api/v1/pateint/create/", this.form)
          .then(res => {
            this.getRegister()
            this.checkedActive()
            this.ScheckActive()
            this.form = {}
          })
      }
      else {
        alert("Please input pateint Id");
      }
    },
    getRegister() {
      axios.get("/api/v1/pateint/index/")
        .then((res) => {
          this.register = res.data
          console.log(this.register)
        })
    },
    getage(age) {
      if (age >= 0) {
        var base = new Date();
        var mydate = base.setFullYear(base.getFullYear() - parseInt(age));
        this.form.birstdate = new Date(mydate).toISOString().slice(0, 10);
      }
    },
    deleteRegister(id) {
      axios.get("/api/v1/pateint/delete/" + this.form.id)
        // fast delete
        .then(() => {
          this.getRegister()
          this.form = {}
          this.btncheckEdit = "Save";
          this.btncheckdelete = "Search";
          this.btnback = false
        })
    },
    updateRegister(id) {
      console.log(id)
      axios.post("/api/v1/pateint/update/" + id,)
        .then(() => {
          this.getRegister()
        })
    },
    btn_checkEdit(itemss) {
      this.form = itemss;
      this.btncheckEdit = "Update"
      this.btncheckdelete = "Delete"
      this.btnback = true
    },
    updatebt() {
      axios.post("/api/v1/pateint/update/" + this.form.id, this.form)
        .then(reg => {
          this.form = {}
        });
      this.btncheckEdit = "Save";
      this.btncheckdelete = "Search"
      this.btnback = false
    },
    selectdelect(id) {
      this.selectid = id;
    },
    btnsave() {
      if (this.btncheckEdit == "Update") {
        this.updatebt();
      }
      else {
        this.Addregister();
      }
    },
    getsex(txt) {
      if (txt == 'male') {
        this.form.sex = "Male";
      }
      else if (txt == 'female') {
        this.form.sex = "Female";
      }
      else if (txt == 'other') {
        this.form.sex = "Other";
        console.log(this.form.sex);
      }
      else if (txt == 'single') {
        this.form.status = "Single";
        console.log(this.form.status);
      }
      else {
        this.form.status = "Married";
        console.log(this.form.status);
      }
    },
    checkedActive() {
      var gender = document.querySelector(".gender")
      var items = gender.querySelectorAll(".radio > span")
      console.log(items.length)
      for (let i = 0; i < items.length; i++) {
        items[i].addEventListener('click', function () {
          let currentBtn = document.querySelectorAll('.checked')
          currentBtn[0].className = currentBtn[0].className.replace('checked', '')
          this.className += " checked"
        })
      }
      console.log("form sex " + this.form.sex)
    },
    // active when update
    ScheckActive() {
      var situation = document.querySelector(".situation")
      var situations = situation.querySelectorAll(".radio-1 > span")
      console.log(situations.length)
      for (let i = 0; i < situations.length; i++) {
        situations[i].addEventListener('click', function () {
          let currentBtn = situation.querySelectorAll('.checked')
          currentBtn[0].className = currentBtn[0].className.replace('checked', '')
          this.className += " checked"
        })
      }
    },
    getproduct(page = 1) {
      axios.get("/api/v1/products/viewpro?page=" + page).then(({ data }) => {
        this.products = data;
        this.products.data.forEach((element) => {
          element.inventory = "0.00";
          axios
            .get("/api/v1/stockcout/getStock/" + element.product_no)
            .then((response) => {
              element.inventory = response.data.inventorys;
              if (element.inventory == null) {
                element.inventory = "0.00";
              }
            });
        });
      });
    },
    getproductsetting(boom, txt) {
      if (txt == 'stockunit') {
        this.unit = boom.unit_code;
      }
      else if (txt == 'supplier') {
        this.supplyer = boom.sup_name
      }
      else if (txt == 'groupproduct') {
        this.group_product = boom.group_name
      }
      else if (txt == 'category') {
        this.single_category = boom.cat_name
      }
      else if (txt == 'brand') {
        this.BrandName = boom.brand_name
      }
    },
    getstockalert() {
      axios.get("api/v1/stockcheck/checkOptionstock").then((response) => {
        this.stockcount = response.data.length;
      });
    },
    getunite() {
      axios.get("/api/v1/getunite").then((response) => {
        this.uints = response.data;
      });
    },
    getbrands() {
      axios.get("/api/v1/brands/getdata").then((response) => {
        this.brands = response.data;
      });
    },
    getdatagroup() {
      axios.get("/api/v1/progroups/getdatagroup").then((response) => {
        this.graoups = response.data;
      });
    },
    getCatName() {
      axios.get("/api/v1/category/getCatName").then((response) => {
        this.category = response.data;
      });
    },
    getsuppliyer() {
      axios.get("/api/v1/suppliyers/getdatasub").then((response) => {
        this.suppliyers = response.data;
      });
    },
    getEdit(ProductID) {
      this.$router.push({ name: "Product", query: { id: ProductID } });
    },

    async searchProduct(page = 1) {
      axios
        .get("/api/v1/products/productsearch?page=" + page, {
          form: this.form,
        })
        .then(({ data }) => {
          this.products = data.data;
        });
    },
    getExcelData(event) {
      this.exefile = "";
      const titlered = document.getElementById("titlered");
      titlered.style.color = "326c7a";
      this.items = [];
      let xlsxfile = event.target.files ? event.target.files[0] : null;
      readXlsxFile(xlsxfile).then((rows) => {
        var x = 0;
        rows.forEach((element) => {
          if (x >= 0) {
            if (x == 0) {
              this.checkexcel = element;
              console.log(element);
            } else {
              if (
                this.checkexcel[0] == "product_no" &&
                this.checkexcel[2] == "description" &&
                this.checkexcel[3] == "brand_code" &&
                this.checkexcel[4] == "group_code" &&
                this.checkexcel[5] == "cat_code" &&
                this.checkexcel[6] == "suppliyer_code" &&
                this.checkexcel[7] == "curency_code" &&
                this.checkexcel[8] == "stock_unit_of_measure_code" &&
                this.checkexcel[9] == "stock_unit_price" &&
                this.checkexcel[10] == "reorder_point"
              ) {
                this.items.push({
                  product_no: element[0],
                  product_barcode: element[1],
                  description: element[2],
                  brand_code: element[3],
                  group_code: element[4],
                  cat_code: element[5],
                  suppliyer_code: element[6],
                  curency_code: element[7],
                  stock_unit_of_measure_code: element[8],
                  unit_price: element[9],
                  reorder_point: element[10],
                  inactived: "No",
                });
                this.getLinkProduct(element);
              } else {
                this.exefile = " fail data ";
                titlered.style.color = "red";
              }
            }
          }
          x++;
        });
      });
      this.exefile = "";
    },
    getLinkProduct(element) {
      this.addtolinkProduct(element, element[8], 1, element[9], "stock");
      var y = 11,
        z = 1;
      var xz1 = "quantity_unit" + z;
      var xz2 = "unit_code" + z;
      var xz3 = "unit_price" + z;
      if (element.length >= y) {
        while (y + 3 <= element.length) {
          if (
            this.checkexcel[y] == xz1 &&
            this.checkexcel[y + 1] == xz3 &&
            this.checkexcel[y + 2] == xz2
          ) {
            this.addtolinkProduct(
              element,
              element[y + 2],
              element[y],
              element[y + 1],
              "unit"
            );
            z++;
            xz1 = "quantity_unit" + z;
            xz2 = "unit_code" + z;
            xz3 = "unit_price" + z;
          }
          y = y + 3;
        }
      }
    },
    addtolinkProduct(element, measure_code, quantity, price, statuse) {
      this.iteamLinks.push({
        product_no: element[0],
        product_barcode: element[1],
        description: element[2],
        variant_unit_of_measure_code: measure_code,
        stock_unit_of_measure_code: element[7],
        quantity_per_unit: quantity,
        unit_price: price,
        curency_code: element[7],
        status: statuse,
        inactived: "No",
      });
    },
    saveprulink() {
      if (this.items.length > 0) {
        setTimeout(() => this.savepro(), 2000);
      }
    },
    savepro() {
      this.items.forEach((element) => {
        if (element.product_no != "" && element.description != "") {
          axios
            .post("api/v1/products/saveDataFformexcel/", element)
            .then((response) => {
              this.massege =
                this.items[this.checkarray - 1].product_no +
                " / " +
                this.items[this.checkarray - 1].description;
              this.massege +=
                " : " +
                this.items[this.checkarray].product_no +
                " / " +
                this.items[this.checkarray].description;
              this.massege +=
                " : " +
                this.items[this.checkarray + 1].product_no +
                " / " +
                this.items[this.checkarray + 1].description;
              this.products = response.data;
              this.savedataValincode(element.product_no);
            });
        }
      });
      if (this.checkarray < this.items.length) {
        this.saveprulink();
        this.checkarray++;
        this.meassagechek("open");
      } else {
        this.meassagechek("close");
        this.checkarray = 0;
      }
    },
    meassagechek(check) {
      var modal = document.getElementById("myModalauto");
      if (check == "open") {
        modal.style.display = "block";
      } else {
        modal.style.display = "none";
      }
    },
    savedataValincode(product_no) {
      this.iteamLinks.forEach((element) => {
        if (element.product_no == product_no && element.product_no != "") {
          axios
            .post("api/v1/products/SaveDataLinkexcel/", element)
            .then((response) => { });
        }
      });
    },
    getcompany() {
      axios.get("/api/v1/getSetup/")
        .then((response) => {
          this.company = response.data;
          this.dateformart = moment(new Date()).format('YYYY-MM-DD');
        });
    },
    save() {
      this.excel = "Import";
      this.productline = 0;
      this.total = 0;
      this.items = [];
      this.item = 0;
    },
    exportSheet() {
      this.items = [];
      this.products.forEach((element) => {
        this.items.push({
          product_no: element.product_no,
          product_barcode: element.product_barcode,
          description: element.description,
          brand_code: element.brand_code,
          group_code: element.group_code,
          cat_code: element.cat_code,
          suppliyer_code: element.suppliyer_code,
          curency_code: element.curency_code,
          stock_unit_of_measure_code: element.stock_unit_of_measure_code,
          unit_price: element.unit_price,
          inactived: element.inactived,
          reorder_point: element.reorder_point,
        });
      });
      this.excel = "Export";
    },
    exportdataExcel() {
      const invoices = this.items.reduce((ac, element) => {
        ac.push({
          product_no: element.product_no,
          product_barcode: element.product_barcode,
          description: element.description,
          brand_code: element.brand_code,
          group_code: element.group_code,
          cat_code: element.cat_code,
          suppliyer_code: element.suppliyer_code,
          curency_code: element.curency_code,
          stock_unit_of_measure_code: element.stock_unit_of_measure_code,
          stock_unit_price: element.stock_unit_price,
          inactived: element.inactived,
          reorder_point: element.reorder_point,
        });
        return ac;
      }, []);
      var invoicesWS = XLSX.utils.json_to_sheet(invoices);
      var wb = XLSX.utils.book_new();
      XLSX.utils.book_append_sheet(wb, invoicesWS, "Product");
      XLSX.writeFile(wb, "Products.xlsx");
    },
  },
};
</script>