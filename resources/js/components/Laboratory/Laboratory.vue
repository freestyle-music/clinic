<template>
  <div class="wrapper">
    <div class="container-fuild">
      <div id="headTitle">
        <div id="logo">
          <img alt="Healthbook" height="44" src="img/logo.png" width="70" mstalt="155922" _msthash="1" />
        </div>
        <h1 id="title" _msttexthash="48503" _msthash="2">
          Laboratory
        </h1>
      </div>
    </div>
    <div class="container-fuild">
      <Header />
      <ol id="topicPath">
        <li style="margin-left: 300px">
          <router-link to="">
            <a href="dashbaord">
              <font style="vertical-align: inherit"></font>
              <font style="vertical-align: inherit">
                Laboratory
              </font>
            </a>
          </router-link>
        </li>
      </ol>
    </div>
    <div class="p-3">
      <div class="search-box">
        <div class="search-box-title">
          <router-link to="/Laboratory">
            <a class="btn-radius btn btn-sm" href="#" style="color: #f8f5b4; margin-top: -2px; color: #dbdee1">
              <i class="fas fa-cog" style="padding-right: 5px"> </i>
              Labo
            </a>
          </router-link>
          <router-link to="/Viewlaboratory">
            <a class="btn-radius btn btn-sm" href="#" style="color: #f8f5b4; margin-top: -2px; color: #dbdee1">
              <i class="fas fa-eye" style="padding-right: 5px"> </i>
              View
            </a>
          </router-link>
          <a class="btn-radius bt-pn btn btn-sm" data-bs-toggle="dropdown" aria-expanded="false"
            style="float: right; color: #f8f5b4; margin-top:-2px;">
            <i class="fas fa-plus" style="padding-right: 5px"> </i>
            Menu
          </a>
          <ul class="dropdown-menu">
            <li>
              <a class="dropdown-item" @click="booking()"> <i class="fas fa-save"></i> Booking</a>
            </li>
            <li>
              <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#staticboomId" tabindex="10028"
                href="#"><i class="fa fa-print" aria-hidden="true"></i> Print</a>
            </li>
          </ul>
          <a @click="test()" class="btn-radius bt-pn btn btn-sm d-flex just align-items-center" data-bs-toggle="modal"
            aria-expanded="false" data-bs-target="#alertbell"
            style="float: right; color: #f8f5b4 !important; margin-top: -2px">
            <i class="fas fa-bell" style="font-size:18px; margin-right: 5px;"></i>
            {{ labo }}
          </a>
        </div>
        <input id="search" name="search" type="hidden" value="1">
        <div class="search-box-content">
          <table width="100%" border="0" cellpadding="0" cellspacing="0" class="tbl_search">
            <tbody>
              <tr>
                <th width="10%">Patient's Code</th>
                <td width="90%">
                  <input class="string_zen clear_text text" id="search_word_simei_s" maxlength="50" name="patient_name"
                    size="50" type="text" tabindex="10003">
                </td>
              </tr>
              <tr>
                <th width="10%">Patient's Name</th>
                <td width="90%">
                  <input class="string_zen clear_text text" id="search_word_simei_s" maxlength="50" name="patient_name"
                    size="50" type="text" tabindex="10003">
                </td>
              </tr>
              <tr>
                <th width="10%">Patient's Age</th>
                <td width="90%">
                  <input class="string_zen clear_text text" id="search_word_simei_s" maxlength="50" name="patient_age"
                    size="50" type="text" tabindex="10003">
                </td>
              </tr>
              <tr>
                <th width="10%">Sex</th>
                <td width="90%">

                  <div class="radio " id="uniform-search_word_sex_1" @click="getsex('male')">
                    <span class="checked">
                      <input id="search_word_sex_1" name="" type="radio" value="1" tabindex="10014" style="opacity: 0;">
                    </span>
                  </div>
                  <label style="font-weight: 500 !important;">Male</label>
                  <div class="radio " id="uniform-search_word_sex_2" style="margin-left:10px" @click="getsex('female')">
                    <span>
                      <input id="search_word_sex_2" name="search_word[sex]" type="radio" value="2" tabindex="10015"
                        style="opacity: 0;">
                    </span>
                  </div>
                  <label style="font-weight: 500 !important">Female</label>
                  <div class="radio" id="uniform-search_word_sex_0" @click="getsex('both')" style="margin-left:10px">
                    <span>
                      <input checked="checked" id="search_word_sex_0" name="" type="radio" value="0" tabindex="10013"
                        style="opacity: 0;">
                    </span>
                  </div>
                  <label style="font-weight: 500 !important;">Other</label>
                </td>
              </tr>
              <tr>
                <th width="10%">Date Of Birth</th>
                <td width="90%">
                  <input class="string_zen clear_text text" id="search_word_simei_s" maxlength="50" name="patient_phone"
                    size="50" type="date" tabindex="10003">
                </td>
              </tr>
              <tr>
                <th width="10%">Phone</th>
                <td width="90%">
                  <input class="string_zen clear_text text" id="search_word_simei_s" maxlength="50" name="patient_phone"
                    size="50" type="text" tabindex="10003">
                </td>
              </tr>
            </tbody>
          </table>
          <div class="search-box-footer">
            <div class="button type2" id="uniform-undefined"><span><i class="fa fa-search" aria-hidden="true"></i>
                Search<input type="button" value="表 示" class="type2"
                  onclick="submit_first_form('/master/jusinsya/index')" style="opacity: 0; width: 54px;"
                  tabindex="10025"></span></div>
            <span class="marker"></span>
          </div>
        </div>
        <div class="box-footer-pagination"></div>
      </div>
    </div>


    <div class="box">
      <div class="box-content">
        <table width="100%" border="0" cellpadding="0" cellspacing="0" class="tbl_list">
          <thead>
            <tr>
              <th style="width: 7%">Product No.</th>
              <th style="width: 7%">Product Type</th>
              <th style="width: 7%">Description</th>
              <th style="width: 7%">Test Type</th>
              <th style="width: 7%">Normal Value</th>
              <th style="width: 7%">Value</th>
              <th style="width: 7%">Remark</th>
            </tr>
            <tr>
              <th style="padding: 10px;"><input class="clear_text code text" id="jusinsya_code" name="jusinsya_code"
                  type="text" tabindex="10008" style="width: 100%;"></th>
              <th style="padding: 10px;"><input class="clear_text code text" id="jusinsya_code" name="jusinsya_code"
                  type="text" tabindex="10008" style="width: 100%;"></th>
              <th style="padding: 10px;"><input class="clear_text code text" id="jusinsya_code" name="jusinsya_code"
                  type="text" tabindex="10008" style="width: 100%;"></th>
              <th style="padding: 10px;"><input class="clear_text code text" id="jusinsya_code" name="jusinsya_code"
                  type="text" tabindex="10008" style="width: 100%;"></th>
              <th style="padding: 10px;"><input class="clear_text code text" id="jusinsya_code" name="jusinsya_code"
                  type="text" tabindex="10008" style="width: 100%;"></th>
              <th style="padding: 10px;"><input class="clear_text code text" id="jusinsya_code" name="jusinsya_code"
                  type="text" tabindex="10008" style="width: 100%;"></th>
              <th style="padding: 10px;"><textarea class="clear_text code text" id="jusinsya_code" name="jusinsya_code"
                  type="text" tabindex="10008" style="width: 100%; height: 21px;"></textarea></th>
            </tr>
            <tr>
              <th style="padding: 10px;"><input class="clear_text code text" id="jusinsya_code" name="jusinsya_code"
                  type="text" tabindex="10008" style="width: 100%;"></th>
              <th style="padding: 10px;"><input class="clear_text code text" id="jusinsya_code" name="jusinsya_code"
                  type="text" tabindex="10008" style="width: 100%;"></th>
              <th style="padding: 10px;"><input class="clear_text code text" id="jusinsya_code" name="jusinsya_code"
                  type="text" tabindex="10008" style="width: 100%;"></th>
              <th style="padding: 10px;"><input class="clear_text code text" id="jusinsya_code" name="jusinsya_code"
                  type="text" tabindex="10008" style="width: 100%;"></th>
              <th style="padding: 10px;"><input class="clear_text code text" id="jusinsya_code" name="jusinsya_code"
                  type="text" tabindex="10008" style="width: 100%;"></th>
              <th style="padding: 10px;"><input class="clear_text code text" id="jusinsya_code" name="jusinsya_code"
                  type="text" tabindex="10008" style="width: 100%;"></th>
              <th style="padding: 10px;"><textarea class="clear_text code text" id="jusinsya_code" name="jusinsya_code"
                  type="text" tabindex="10008" style="width: 100%; height: 21px;"></textarea></th>
            </tr>
            <tr>
              <th style="padding: 10px;"><input class="clear_text code text" id="jusinsya_code" name="jusinsya_code"
                  type="text" tabindex="10008" style="width: 100%;"></th>
              <th style="padding: 10px;"><input class="clear_text code text" id="jusinsya_code" name="jusinsya_code"
                  type="text" tabindex="10008" style="width: 100%;"></th>
              <th style="padding: 10px;"><input class="clear_text code text" id="jusinsya_code" name="jusinsya_code"
                  type="text" tabindex="10008" style="width: 100%;"></th>
              <th style="padding: 10px;"><input class="clear_text code text" id="jusinsya_code" name="jusinsya_code"
                  type="text" tabindex="10008" style="width: 100%;"></th>
              <th style="padding: 10px;"><input class="clear_text code text" id="jusinsya_code" name="jusinsya_code"
                  type="text" tabindex="10008" style="width: 100%;"></th>
              <th style="padding: 10px;"><input class="clear_text code text" id="jusinsya_code" name="jusinsya_code"
                  type="text" tabindex="10008" style="width: 100%;"></th>
              <th style="padding: 10px;"><textarea class="clear_text code text" id="jusinsya_code" name="jusinsya_code"
                  type="text" tabindex="10008" style="width: 100%; height: 21px;"></textarea></th>
            </tr>

            <tr v-for="purchaseLine in purchases_lines" :key="purchaseLine.index">
              <th style="padding: 10px">
                <input :disabled="true" v-model="purchaseLine.document_no" @change="autoUpdatePurline(purchaseLine)"
                  class="clear_text code text" id="jusinsya_code" name="jusinsya_code" type="text" tabindex="10008"
                  style="width: 100%" />
              </th>
              <th style="padding: 10px">
                <input :disabled="true" v-model="purchaseLine.description" @change="autoUpdatePurline(purchaseLine)"
                  class="clear_text code text" id="jusinsya_code" name="jusinsya_code" type="text" tabindex="10008"
                  style="width: 100%" />
              </th>
              <th style="padding: 10px">
                <input :disabled="true" v-model="purchaseLine.inventory_order" @change="autoUpdatePurline(purchaseLine)"
                  class="clear_text code text" id="jusinsya_code" name="jusinsya_code" type="text" tabindex="10008"
                  style="width: 100%" />
              </th>
              <th style="padding: 10px">
                <input v-model="purchaseLine.inventory_recetive" @change="autoUpdatePurline(purchaseLine)"
                  class="clear_text code text" id="jusinsya_code" name="jusinsya_code" type="text" tabindex="10008"
                  style="width: 100%" />
              </th>
              <th style="padding: 10px">
                <div class="dropdown">
                  <button @click="getunit(purchaseLine.product_no)" @onmouseout="prooductboom(purchaseLine)"
                    class="dropdown-toggle string_zen clear_text text" type="button" id="dropdownMenuButton1"
                    style="width: 100%" data-bs-toggle="dropdown" aria-expanded="false" size="50"> {{
                    purchaseLine.unit_of_measure_code }}
                  </button>
                </div>
              </th>
              <th style="padding: 10px">
                <input :disabled="false" v-model="purchaseLine.unit_price" @change="autoUpdatePurline(purchaseLine)"
                  class="clear_text code text" id="jusinsya_code" name="jusinsya_code" type="text" tabindex="10008"
                  style="width: 100%" />
              </th>

              <th style="padding: 10px">
                <input :disabled="true" v-model="purchaseLine.curency_code" @change="autoUpdatePurline(purchaseLine)"
                  class="clear_text code text" id="jusinsya_code" name="jusinsya_code" type="text" tabindex="10008"
                  style="width: 100%" />
              </th>
              <th style="padding: 10px">
                <input :disabled="true" v-model="purchaseLine.qty_balance" @change="autoUpdatePurline(purchaseLine)"
                  class="clear_text code text" id="jusinsya_code" name="jusinsya_code" type="text" tabindex="10008"
                  style="width: 100%" />
              </th>
              <th style="padding: 10px">
                <input :disabled="true" v-model="purchaseLine.total_amount" @change="autoUpdatePurline(purchaseLine)"
                  class="clear_text code text" id="jusinsya_code" name="jusinsya_code" type="text" tabindex="10008"
                  style="width: 100%" />
              </th>
              <th style="padding: 10px">
                <input :disabled="false" type="date" v-model="(purchaseLine.issu_date)"
                  @change="autoUpdatePurline(purchaseLine)" class="clear_text code text" id="jusinsya_code"
                  name="jusinsya_code" tabindex="10008" />
              </th>
              <th style="padding: 10px">
                <input :disabled="false" type="date" v-model="purchaseLine.exprit_date"
                  @change="autoUpdatePurline(purchaseLine)" class="clear_text code text" id="jusinsya_code"
                  name="jusinsya_code" tabindex="10008" />
              </th>

            </tr>
          </thead>
          <vue-countdown style="display: none" v-if="counting" :time="60000" @end="onCountdownEnd"
            v-slot="{ totalSeconds }">Fetch again {{ totalSeconds }} seconds later</vue-countdown>
        </table>
      </div>
    </div>


    <!-- view modal  -->
    <div class="modal fade" id="viewstaticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
      aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog smallpopup" id="sup">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">
              Currency
            </h5>
            <span class="ui-icon ui-icon-closethick" data-bs-dismiss="modal" aria-label="Close"></span>
          </div>
          <div style="margin: 0; padding: 10px; display: inline">
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="tbl_search">
              <tbody>
                <tr>
                  <th width="30%">Currency No</th>
                  <td width="70%">
                    <input class="string_zen_kana clear_text text" id="brand_name" maxlength="50" name="brand_name"
                      type="text" tabindex="10001" />
                  </td>
                </tr>

                <tr>
                  <th width="30%">Currency</th>
                  <td width="70%">
                    <input class="string_zen_kana clear_text text" id="brand_name_2" maxlength="50" name="brand_name_2"
                      type="text" tabindex="10001" />
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="modal-footer">

            <div class="button type2" id="uniform-undefined">
              <span>Close</span>
              <input type="button" value="clear" class="type2" data-bs-dismiss="modal" aria-label="Close"
                @click="clear()" style="opacity: 0; width: 63px" tabindex="10026" />
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade ui-modal" id="alertbell" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
      aria-labelledby="staticboomId" aria-hidden="true">
      <div class="modal-dialog " id="recept">
        <div class="modal-content ui-dialog">
          <div class="ui-widget-header">
            <h5 class="modal-title in-header" id="staticBackdropLabel"><i class="fa fa-print" aria-hidden="true"></i>
              View</h5>
            <span class="ui-icon ui-icon-closethick" data-bs-dismiss="modal" aria-label="Close"></span>
          </div>
          <div class="ui-dialog-content " id="purchaseorder1">
            <div class="card">
              <div class="card-body">
                <div class="mt-3">

                  <div style="padding:0 40px">

                    <div class=" my-2  justify-content-center">
                      <table class="table table-striped br-table">
                        <thead>
                          <tr class="header-table">
                            <th class="text-center" style="text-align: center !important;">Visit Date</th>
                            <th class="text-center" style="text-align: center !important;">Patient Code</th>
                            <th class="text-center" style="text-align: center !important;">Patient Name</th>
                            <th class="text-center" style="text-align: center !important;">Sex</th>
                            <th class="text-center" style="text-align: center !important;">Phone</th>
                            <th class="text-center" style="text-align: center !important;">Date Of Birth</th>
                            <th class="text-center" style="text-align: center !important;">District</th>
                            <th class="text-center" style="text-align: center !important;">Province</th>
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
                                <span><i class="fa fa-edit"></i> Detail<input type="button" tabindex="10028"
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
                                <span><i class="fa fa-edit"></i> Detail<input type="button" tabindex="10028"
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
                                <span><i class="fa fa-edit"></i> Detail<input type="button" tabindex="10028"
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
                @click="clear()" style="opacity: 0; width: 63px" tabindex="10026" />
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- print -->
  <div class="modal fade ui-modal" id="staticboomId" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticboomId" aria-hidden="true">
    <div class="modal-dialog" style="max-width: 85% !important;">
      <div class="modal-content ui-dialog">
        <div class="ui-widget-header">
          <h5 class="modal-title in-header" id="staticBackdropLabel"><i class="fa fa-print" aria-hidden="true"></i>
            Print</h5>
          <span class="ui-icon ui-icon-closethick" data-bs-dismiss="modal" aria-label="Close"></span>
        </div>
        <div class="ui-dialog-content" id="purchaseorder">
          <div class="card">
            <div class="card-body card-body-1"
              style="width:100%; margin-left:auto; margin-right:auto;  padding: 2.5rem;">
              <div class="hd-pro">
                <div class="hd-pro-1">
                  <img alt="Healthbook" src="img/text.png" mstalt="155922" _msthash="1" />
                </div>
                <div class="hd-pro-2">
                  <h1>គ្លីនិករ៉ាក់សាខាកំពត</h1>
                </div>
              </div>
              <div class="rule"></div>
              <div class="viDate">
                <div class="viDate-1">
                  <ul>
                    <li>
                      Visit Date:<span>26-05-2023</span>
                    </li>
                  </ul>
                </div>
                <div class="viDate-1">
                  <ul>
                    <li>
                      Client Name:<span id="bold">SORN SOKHA</span>
                    </li>
                  </ul>
                </div>
                <div class="viDate-1">
                  <ul>
                    <li>
                      Sex:<span>Female</span>
                    </li>
                  </ul>
                </div>
                <div class="viDate-1">
                  <ul>
                    <li>
                      Age:<span>35</span>
                    </li>
                  </ul>
                </div>
                <div class="viDate-1">
                  <ul>
                    <li>
                      Client's ID:<span>210060376</span>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="viDate">
                <div class="viDate-1">
                  <ul>
                    <li id="sim">Laboratory Code:<span>KPT-303060</span>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="viDate">
                <div class="viDate-1">
                  <ul>
                    <li id="sim">Specimen:
                      <span>[X]Blood</span>
                      <span>[X]Urine</span>
                      <span>[]Stool</span>
                      <span>[]Sperm</span>
                      <span>[X]Pus/secretion</span>
                      <span>[X]Tissue</span>
                      <span>[X]Other</span>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="hema">
                <p id="mic">microbiology</p>
              </div>
              <div class="viDate" id="visdate">
                <div class="viDate-1">
                  <ul>
                    <li id="sim">Requested by:<span>Sok Botum</span>
                    </li>
                  </ul>
                </div>
                <div class="viDate-1">
                  <ul>
                    <li id="sim">Requested
                    </li>
                  </ul>
                </div>
                <div class="viDate-1">
                  <ul>
                    <li id="sim">Collected by:<span>Lun</span>
                    </li>
                  </ul>
                </div>
                <div class="viDate-1">
                  <ul>
                    <li id="sim">Collection
                    </li>
                  </ul>
                </div>
              </div>
              <div class="viDate" id="visdate">
                <div class="viDate-1">
                  <ul>
                    <li id="sim"></li>
                  </ul>
                </div>
                <div class="viDate-1">
                  <ul>
                    <li id="sim">Time:<span>26-05-2023</span>
                    </li>
                  </ul>
                </div>
                <div class="viDate-1">
                  <ul>
                    <li id="sim">Chanarun<span>Lun</span>
                    </li>
                  </ul>
                </div>
                <div class="viDate-1">
                  <ul>
                    <li id="sim">Time:<span>26-05-2023</span>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="viDate" id="visdate">
                <div class="viDate-1">
                  <ul>
                    <li id="sim"></li>
                  </ul>
                </div>
                <div class="viDate-1">
                  <ul>
                    <li id="sim">11:34:58
                    </li>
                  </ul>
                </div>
                <div class="viDate-1">
                  <ul>
                    <li id="sim"></li>
                  </ul>
                </div>
                <div class="viDate-1">
                  <ul>
                    <li id="sim">11:51:51</li>
                  </ul>
                </div>
              </div>
              <div class="viDate" id="visdate">
                <div class="viDate-1">
                  <ul>
                    <li>Test</li>
                  </ul>
                </div>
                <div class="viDate-1">
                  <ul>
                    <li>Result</li>
                  </ul>
                </div>
                <div class="viDate-1">
                  <ul>
                    <li>Normal Value</li>
                  </ul>
                </div>
                <div class="viDate-1">
                  <ul>
                    <li>Comment</li>
                  </ul>
                </div>
              </div>
              <div class="viDate" id="visdate">
                <div class="viDate-1">
                  <ul>
                    <li>Complete blood count</li>
                  </ul>
                </div>
              </div>
              <div class="viDate" id="visdate">
                <div class="viDate-1">
                  <ul>
                    <li id="sim">WBC Count</li>
                  </ul>
                </div>
                <div class="viDate-1">
                  <ul>
                    <li>10.7 103/mm3</li>
                  </ul>
                </div>
                <div class="viDate-1">
                  <ul>
                    <li>(F=4.0-10.0;M=4.0-10.0)</li>
                  </ul>
                </div>
              </div>
              <div class="viDate" id="visdate">
                <div class="viDate-1">
                  <ul>
                    <li id="sim">RBC Count</li>
                  </ul>
                </div>
                <div class="viDate-1">
                  <ul>
                    <li id="sim"> 4.34 106/mm3</li>
                  </ul>
                </div>
                <div class="viDate-1">
                  <ul>
                    <li id="sim">(F=3.8-5.6, M=4.0-6.0)</li>
                  </ul>
                </div>
              </div>
              <div class="viDate" id="visdate">
                <div class="viDate-1">
                  <ul>
                    <li id="sim">Hemoglobin (Hb)</li>
                  </ul>
                </div>
                <div class="viDate-1">
                  <ul>
                    <li id="sim">12.1 g/dL</li>
                  </ul>
                </div>
                <div class="viDate-1">
                  <ul>
                    <li id="sim">(F=11.5-16.0,M=13.0-18.0)</li>
                  </ul>
                </div>
              </div>
              <div class="viDate" id="visdate">
                <div class="viDate-1">
                  <ul>
                    <li id="sim">Hematocrit</li>
                  </ul>
                </div>
                <div class="viDate-1">
                  <ul>
                    <li>34.2 %</li>
                  </ul>
                </div>
                <div class="viDate-1">
                  <ul>
                    <li>(F=37-43, M=40-50)</li>
                  </ul>
                </div>
              </div>
              <div class="viDate" id="visdate">
                <div class="viDate-1">
                  <ul>
                    <li id="sim">MCV</li>
                  </ul>
                </div>
                <div class="viDate-1">
                  <ul>
                    <li>78.8 fL</li>
                  </ul>
                </div>
                <div class="viDate-1">
                  <ul>
                    <li>(F=80-98, M=80-98)</li>
                  </ul>
                </div>
              </div>
              <div class="viDate" id="visdate">
                <div class="viDate-1">
                  <ul>
                    <li id="sim">MCH</li>
                  </ul>
                </div>
                <div class="viDate-1">
                  <ul>
                    <li id="sim">27.8 pg</li>
                  </ul>
                </div>
                <div class="viDate-1">
                  <ul>
                    <li id="sim">(F=27-34, M=27-34)</li>
                  </ul>
                </div>
              </div>
              <div class="viDate" id="visdate">
                <div class="viDate-1">
                  <ul>
                    <li id="sim">MCHC</li>
                  </ul>
                </div>
                <div class="viDate-1">
                  <ul>
                    <li id="sim">35.3 g/dL</li>
                  </ul>
                </div>
                <div class="viDate-1">
                  <ul>
                    <li id="sim">(F=30-36, M=30-36)</li>
                  </ul>
                </div>
              </div>
              <div class="viDate" id="visdate">
                <div class="viDate-1">
                  <ul>
                    <li id="sim">Platelet count</li>
                  </ul>
                </div>
                <div class="viDate-1">
                  <ul>
                    <li id="sim">223 103/mm3</li>
                  </ul>
                </div>
                <div class="viDate-1">
                  <ul>
                    <li id="sim">(F=150-450,M=150-450)</li>
                  </ul>
                </div>
              </div>
              <div class="viDate" id="visdate">
                <div class="viDate-1">
                  <ul>
                    <li id="sim">Neutrophil</li>
                  </ul>
                </div>
                <div class="viDate-1">
                  <ul>
                    <li id="sim">63 %</li>
                  </ul>
                </div>
                <div class="viDate-1">
                  <ul>
                    <li id="sim">(55-65)</li>
                  </ul>
                </div>
              </div>
              <div class="viDate" id="visdate">
                <div class="viDate-1">
                  <ul>
                    <li id="sim">Lymphocytes</li>
                  </ul>
                </div>
                <div class="viDate-1">
                  <ul>
                    <li id="sim">29 %</li>
                  </ul>
                </div>
                <div class="viDate-1">
                  <ul>
                    <li id="sim">(25-35)</li>
                  </ul>
                </div>
              </div>
              <div class="viDate" id="visdate">
                <div class="viDate-1">
                  <ul>
                    <li id="sim">Monocytes</li>
                  </ul>
                </div>
                <div class="viDate-1">
                  <ul>
                    <li id="sim">05 %</li>
                  </ul>
                </div>
                <div class="viDate-1">
                  <ul>
                    <li id="sim">(3-6)</li>
                  </ul>
                </div>
              </div>
              <div class="viDate" id="visdate">
                <div class="viDate-1">
                  <ul>
                    <li id="sim">Eosinophils</li>
                  </ul>
                </div>
                <div class="viDate-1">
                  <ul>
                    <li id="sim">03 %</li>
                  </ul>
                </div>
                <div class="viDate-1">
                  <ul>
                    <li id="sim">(2-4)</li>
                  </ul>
                </div>
              </div>
              <div class="viDate" id="visdate">
                <div class="viDate-1">
                  <ul>
                    <li id="sim">Basophils</li>
                  </ul>
                </div>
                <div class="viDate-1">
                  <ul>
                    <li id="sim">00 %</li>
                  </ul>
                </div>
                <div class="viDate-1">
                  <ul>
                    <li id="sim">(0-1)</li>
                  </ul>
                </div>
              </div>
              <div class="viDate" id="visdate">
                <div class="viDate-1">
                  <ul>
                    <li></li>
                  </ul>
                </div>
                <div class="viDate-1">
                  <ul>
                    <li></li>
                  </ul>
                </div>
                <div class="viDate-1">
                  <ul>
                    <li>Performed by:<span id="bold">Lun Chanarun</span>
                    </li>
                  </ul>
                </div>
                <div class="viDate-1">
                  <ul>
                    <li>Date and Time:<span>:26-05-2023</span><span>11:51:51</span>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="hema">
                <p id="mic">MICROBIOLOGY</p>
              </div>
              <div class="viDate" id="visdate">
                <div class="viDate-1">
                  <ul>
                    <li id="sim">Requested by:<span>Sok Botum</span>
                    </li>
                  </ul>
                </div>
                <div class="viDate-1">
                  <ul>
                    <li id="sim">Requested
                    </li>
                  </ul>
                </div>
                <div class="viDate-1">
                  <ul>
                    <li id="sim">Collected by:<span>Lun</span>
                    </li>
                  </ul>
                </div>
                <div class="viDate-1">
                  <ul>
                    <li id="sim">Collection
                    </li>
                  </ul>
                </div>
              </div>
              <div class="viDate" id="visdate">
                <div class="viDate-1">
                  <ul>
                    <li id="sim"></li>
                  </ul>
                </div>
                <div class="viDate-1">
                  <ul>
                    <li id="sim">Time:<span>26-05-2023</span>
                    </li>
                  </ul>
                </div>
                <div class="viDate-1">
                  <ul>
                    <li id="sim">Chanarun<span>Lun</span>
                    </li>
                  </ul>
                </div>
                <div class="viDate-1">
                  <ul>
                    <li id="sim">Time:<span>26-05-2023</span>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="viDate" id="visdate">
                <div class="viDate-1">
                  <ul>
                    <li id="sim"></li>
                  </ul>
                </div>
                <div class="viDate-1">
                  <ul>
                    <li id="sim">11:34:58
                    </li>
                  </ul>
                </div>
                <div class="viDate-1">
                  <ul>
                    <li id="sim"></li>
                  </ul>
                </div>
                <div class="viDate-1">
                  <ul>
                    <li id="sim">11:51:51</li>
                  </ul>
                </div>
              </div>
              <div class="viDate" id="visdate">
                <div class="viDate-1">
                  <ul>
                    <li>Test</li>
                  </ul>
                </div>
                <div class="viDate-1">
                  <ul>
                    <li>Result</li>
                  </ul>
                </div>
                <div class="viDate-1">
                  <ul>
                    <li>Normal Value</li>
                  </ul>
                </div>
                <div class="viDate-1">
                  <ul>
                    <li>Comment</li>
                  </ul>
                </div>
              </div>
              <div class="viDate" id="visdate">
                <div class="viDate-1">
                  <ul>
                    <li>Wet smear</li>
                  </ul>
                </div>
              </div>
              <div class="viDate" id="visdate">
                <div class="viDate-1">
                  <ul>
                    <li id="sim">pH</li>
                  </ul>
                </div>
                <div class="viDate-1">
                  <ul>
                    <li id="sim">6</li>
                  </ul>
                </div>
              </div>
              <div class="viDate" id="visdate">
                <div class="viDate-1">
                  <ul>
                    <li id="sim">KOH</li>
                  </ul>
                </div>
                <div class="viDate-1">
                  <ul>
                    <li id="sim">NEGATIVE</li>
                  </ul>
                </div>
              </div>
              <div class="viDate" id="visdate">
                <div class="viDate-1">
                  <ul>
                    <li id="sim">WBC (HPF)</li>
                  </ul>
                </div>
                <div class="viDate-1">
                  <ul>
                    <li id="sim">11-25</li>
                  </ul>
                </div>
              </div>
              <div class="viDate" id="visdate">
                <div class="viDate-1">
                  <ul>
                    <li id="sim">RBC</li>
                  </ul>
                </div>
                <div class="viDate-1">
                  <ul>
                    <li id="sim">Absence</li>
                  </ul>
                </div>
              </div>
              <div class="viDate" id="visdate">
                <div class="viDate-1">
                  <ul>
                    <li id="sim">EPITHLIAL CELLs</li>
                  </ul>
                </div>
                <div class="viDate-1">
                  <ul>
                    <li id="sim">2+</li>
                  </ul>
                </div>
              </div>
              <div class="viDate" id="visdate">
                <div class="viDate-1">
                  <ul>
                    <li id="sim">BACTERIA</li>
                  </ul>
                </div>
                <div class="viDate-1">
                  <ul>
                    <li id="sim">3+</li>
                  </ul>
                </div>
              </div>
              <div class="viDate" id="visdate">
                <div class="viDate-1">
                  <ul>
                    <li id="sim">CLUE CELLS</li>
                  </ul>
                </div>
                <div class="viDate-1">
                  <ul>
                    <li id="sim">Negative</li>
                  </ul>
                </div>
              </div>
              <div class="rule"></div>
              <p class="foot_date">
                No: , Street: National Road 03, Village <span id="bold-1">kampong KRAENG</span>, Sangkat: <span id="bold-1">KAMPONG KRAENG</span>, Khan: <span id="bold-1">TUEK CHHOU</span>,
                City: <span id="bold-1">KAMPOT</span> Tel:033 932 768/085
                777 459 Email:rhackpt.clinic.rc@gmail.com <span id="bold-1">WEBSITE</span>:http://www.rhac.org.kh
              </p>
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
  <div id="footer">
    <div id="copyright">Copyright (C) healthbook. ALL Right s Researved Edit by Lsky</div>
  </div>
</template>

<script>
  import print from 'vue3-print-nb';
  import Header from '../Header.vue'
  import axios from "axios";
  export default {
    name: "Laboratory",
    components: { Header },
    directives:{
      print
    },
    data() {
      return {
        form: {
          sex: 'Both'
        },
        labo: 20,

      }
    },
    mounted() {
      this.checkedActive()
    },
    methods: {
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

      getsex(sex) {
        if (sex == 'both') {
          this.form.sex = "Both"
          console.log(this.form.sex)
        }
        else if (sex == 'male') {
          this.form.sex = 'Male'
          console.log(this.form.sex)
        }
        else {
          this.form.sex = 'Female'
          console.log(this.form.sex)
        }
      },
    },
  };
</script>