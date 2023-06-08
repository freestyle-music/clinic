<template >
  <div class="wrapper" style="overflow: hidden">
    <div class="container-fuild">
      <div id="headTitle">
      <div id="logo"><img alt="Healthbook" height="44" src="img/logo.png" width="70" _mstalt="155922" _msthash="1">
      </div>
      <h1 id="title" _msttexthash="48503" _msthash="2">Stock-Count</h1>
    </div>
      <Header />
      <ol id="topicPath">
          <li style="margin-left:310px">
            <router-link to="menustock"><a href="dashbaord">
              <font style="vertical-align: inherit"
                ><font style="vertical-align: inherit">Stock-Count</font></font>
            </a>
            </router-link>
          </li>
        </ol>
    </div>
    <div class="search-box">
      <div id="purchase">
        <!--#contents -->
        <div class="search-box ">
          <a class="btn-radius bt-pn btn btn-sm" data-bs-toggle="dropdown" aria-expanded="false"
            style="float: right; color: #f8f5b4">
            <i class="fas fa-plus" style="padding-right: 5px"> </i>
            Menu
          </a>
          <ul class="dropdown-menu">
            <li>
              <a class="dropdown-item" @click="booking()" > <i class="fas fa-save"></i> Booking</a>
            </li>
            <li>
              <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#staticboomId" tabindex="10028"
                href="#"><i class="fa fa-print" aria-hidden="true"></i> Print</a>
            </li>
          </ul>

          <div class="search-box-title">
            <a class="btn-radius bt-pn btn btn-sm" href="#" data-bs-toggle="dropdown" aria-expanded="false"
              style="float: left; color: #f8f5b4; margin-top: -2px">
              <i class="fas fa-plus" style="padding-right: 5px; margin-top: -2px">
              </i>
              Add New
            </a>
            <ul class="dropdown-menu">
              <li>
                <a @click="
                  getMessage(
                    'Message Confirm',
                    'Do you want to create new product.',
                    'crate',
                    code
                  )
                " class="dropdown-item btn btn-primary" data-bs-toggle="modal"
                  data-bs-target="#staticBackdrop">Generate Code</a>
              </li>
              <li>
                <a class="dropdown-item" href="#"> Code</a>
              </li>
            </ul>
            <router-link to="/viewstockcount"><a class="btn-radius btn btn-sm" href="#"
                style="color: #f8f5b4; margin-top: -2px">
                <i class="fas fa-eye" style="padding-right: 5px"> </i>
                View
              </a></router-link>
          </div>
          <!-- Button trigger modal -->
          <!-- Modal -->
          <div class="modal fade ui-modal" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content ui-dialog">
                <div class="ui-widget-header">
                  <h5 class="modal-title" id="staticBackdropLabel">
                    <span class="ui-dialog-title" id="ui-dialog-title-modal-edit-dialog">{{ this.title }}</span>
                  </h5>
                  <a href="#" class="ui-dialog-titlebar-close ui-corner-all" role="button" data-bs-dismiss="modal"><span
                      class="ui-icon ui-icon-closethick">close</span></a>
                </div>
                <div class="ui-dialog-content">
                  <div class="modal-body">
                    {{ this.message }}
                  </div>
                  <div class="modal-footer">
                    <div class="button type2" id="uniform-undefined" data-bs-dismiss="modal">
                      <span>No<input type="button" class="type2" value="No" style="width: 89px; opacity: 0"
                          onclick="edit_cancel()" tabindex="10008" /></span>
                    </div>
                    <div class="button type2" @click="messagegetconfirm(this.confirm)" data-bs-dismiss="modal">
                      <span>Yes</span>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="search-box-content  search-box02">
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="tbl_search">
              <tbody>
                <tr>
                  <th width="10%">Document Number</th>
                  <td width="50%">
                    <input :disabled="true" @change="autoUpdateProduct(form)" v-model="form.document_no"
                      class="string_zen_kana clear_text text input_text" maxlength="50" size="50" type="text" />
                  </td>
                </tr>
                <tr>
                  <th width="10%">Document Type</th>
                  <td width="50%">
                    <input :disabled="isDisabled" @change="autoUpdateProduct(form)" v-model="form.document_type"
                      class="string_zen_kana clear_text text input_text" maxlength="50" size="50" type="text" />
                  </td>
                </tr>
                <tr>
                  <th width="10%">Description</th>
                  <td width="50%">
                    <input :disabled="isDisabled" @change="autoUpdateProduct(form)" v-model="form.description"
                      class="string_zen clear_text text input_text" size="50" type="text" />
                  </td>
                </tr>
                <tr>
                  <th width="10%">Total Amount</th>
                  <td width="50%">
                    <input :disabled='true' @change="autoUpdateProduct(form)" v-model="form.total_amount"
                      class="string_zen clear_text text input_text" size="50" type="text" />
                  </td>
                </tr>

                <tr>
                  <th width="10%">Curency Code</th>
                  <td width="50%">
                    <input :disabled="isDisabled" @change="autoUpdateProduct(form)" v-model="form.curency_code"
                      class="string_zen clear_text text input_text" size="50" type="text" />
                  </td>
                </tr>
              </tbody>
            </table>
          </div>

          <div class="search-box-footer" style=" background: #094e59e0;">
              <div class="button type2" id="uniform-undefined">
                <span  data-bs-toggle="modal" data-bs-target="#statiex-import" tabindex="10028" @click="save()"><input @click="save()" type="button" value="display" class="type2" style="opacity: 0; width: 54px" tabindex="10025"  /><i class='fas fa-file-import'></i> Import From Excel</span>
              </div>
              <div class="button type2" id="uniform-undefined">
                <span  data-bs-toggle="modal" data-bs-target="#statiex-import" tabindex="10028" @click="exportSheet()"><input @click="exportSheet()" type="button" value="display" class="type2" style="opacity: 0; width: 54px" tabindex="10025"  /><i class='fas fa-file-import'></i> Export To Excel</span>
              </div>
            </div>
        </div>
        
        <div class="box">
          <div class="box-content" id="excell">
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="tbl_list">
              <thead>
                <tr class="excellcolor-trhead">
                  <th class="excellcolor-trhead" style="width: 7%">Product No</th>
                  <th class="excellcolor-trhead" style="width: 10%">Description</th>
                  <th class="excellcolor-trhead" style="width: 7%">Unit Price</th>
                  <th class="excellcolor-trhead" style="width: 7%">Stock Inventory</th>
                  <th class="excellcolor-trhead" style="width: 7%">Stock Count</th>
                  <th class="excellcolor-trhead" style="width: 7%">Unit Code</th>
                  <th class="excellcolor-trhead" style="width: 7%">Credit Balance</th>
                  <th class="excellcolor-trhead" style="width: 7%">Debit Balance</th>
                  <th class="excellcolor-trhead" style="width: 7%">Total Amount</th>
                  <th class="excellcolor-trhead" style="width: 7%">Curency Code</th>
                  <th class="excellcolor-trhead" style="width: 10%">Remark</th>
                  <th class="excellcolor-trhead" style="width: 7%"></th>
                </tr>
                <tr v-for="purchaseLine in purchases_lines" :key="purchaseLine.index">
                  <th >
                    <div class="dropdown">
                      <button :disabled="isDisabled" @onmouseout=""
                        class="dropdown-toggle string_zen clear_text text" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false" size="50">
                        <i class="fa fa-caret-down" aria-hidden="true"></i>{{ purchaseLine.product_no }}
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1"
                        style="max-height: 400px; width: 250px; scroll-behavior: smooth; padding: 5px;margin: 5px;box-shadow: 1px 1px 5px #141417;">
                        <p><input :disabled="isDisabled" v-model="txtsearch" @input="searchproduct(txtsearch)"
                            class="string_zen clear_text text" size="50" type="text"
                            style="width:98% !important;border: 1px teal solid;border-radius: 1px;height: 30px;"></p>
                        <ul style="list-style:none ;" class="scrollable-menu">
                          <li v-for="boompro in boompros" @click="getproduct(boompro, purchaseLine, 'boomproducr')">
                            <div class="menu-item">
                              <p style="color: blue;">{{ boompro.product_no}}</p>
                              <p>{{ boompro.description }}</p>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </th>
                  <th >
                    <input :disabled="true" v-model="purchaseLine.description"
                      @change="autoUpdatePurline(purchaseLine)" class="clear_text code text" id="jusinsya_code"
                      name="jusinsya_code" type="text" tabindex="10008" style="min-width: 10em; width:95%" />
                  </th>
                  <th >
                    <input :disabled="true" v-model="purchaseLine.unit_price"
                      @change="autoUpdatePurline(purchaseLine)" class="clear_text code text" id="jusinsya_code"
                      name="jusinsya_code" type="text" tabindex="10008" style="min-width: 4em; width:90%" />
                  </th>
                  <th >
                    <input :disabled="true" v-model="purchaseLine.inventory" @change="autoUpdatePurline(purchaseLine)"
                      class="clear_text code text" id="jusinsya_code" name="jusinsya_code" type="text" tabindex="10008"
                      style="min-width: 4em; width:90%" />
                  </th>
                  <th >
                    <input :disabled="isDisabled" v-model="purchaseLine.inventory_count" @change="autoUpdatePurline(purchaseLine)"
                      class="clear_text code text" id="jusinsya_code" name="jusinsya_code" type="text" tabindex="10008"
                      style="min-width: 4em; width:90%" />
                  </th>
                  <th >
                    <input :disabled="true" v-model="purchaseLine.unit_of_measure_code" @change="autoUpdatePurline(purchaseLine)"
                      class="clear_text code text" id="jusinsya_code" name="jusinsya_code" type="text" tabindex="10008"
                      style="min-width: 4em; width:90%" />
                  </th>
                  <th >
                    <input :disabled="true" v-model="purchaseLine.credit_balance" @change="autoUpdatePurline(purchaseLine)"
                      class="clear_text code text" id="jusinsya_code" name="jusinsya_code" type="text" tabindex="10008"
                      style="min-width: 4em; width:90%" />
                  </th>
                  <th >
                    <input :disabled="true" v-model="purchaseLine.debit_balance" @change="autoUpdatePurline(purchaseLine)"
                      class="clear_text code text" id="jusinsya_code" name="jusinsya_code" type="text" tabindex="10008"
                      style="min-width: 4em; width:90%" />
                  </th>
                  <th >
                    <input :disabled="true" v-model="purchaseLine.total_amount"
                      @change="autoUpdatePurline(purchaseLine)" class="clear_text code text" id="jusinsya_code"
                      name="jusinsya_code" type="text" tabindex="10008" style="width: 95%; margin-left: 0px !important;" />
                  </th>
                  <th >
                    <input :disabled="true" v-model="purchaseLine.curency_code"
                      @change="autoUpdatePurline(purchaseLine)" class="clear_text code text" id="jusinsya_code"
                      name="jusinsya_code" type="text" tabindex="10008" style="width: 95%" />
                  </th>
                  <th >
                    <input :disabled="isDisabled" v-model="purchaseLine.remark"
                      @change="autoUpdatePurline(purchaseLine)" class="clear_text code text" id="jusinsya_code"
                      name="jusinsya_code" type="text" tabindex="10008" style="width: 95%" />
                  </th>
                  <th v-if="isDisabled ==false" style="padding:5px 0px !important">
                    <div :disabled="isDisabled" class="button type2" id="uniform-undefined" data-bs-toggle="modal"
                      data-bs-target="#staticBackdrop" @click="
                        getMessage(
                          'Message',
                          'Do yout want to Delete this recode. [' +
                          purchaseLine.id +
                          ']',
                          'delelink',
                          purchaseLine.id
                        )
                      ">
                      <span><input type="button" class="type2" style="opacity: 0; width: 54px" tabindex="10025"
                          value="display" /><i class="fa fa-trash" aria-hidden="true"></i> Delete</span>
                    </div>
                    
                  </th>
                  <th v-if="isDisabled ==true" style="padding:5px 0px !important">
                    <div :disabled="isDisabled" class="button type2" id="uniform-undefined"  @click="
                        getMessage(
                          'Message',
                          'Do yout want to Delete this recode. [' +
                          purchaseLine.id +
                          ']',
                          'delelink',
                          purchaseLine.id
                        )
                      ">
                      <span><input type="button" class="type2" style="opacity: 0; width: 54px" tabindex="10025"
                          value="display" /><i class="fa fa-trash" aria-hidden="true"></i> Delete</span>
                    </div>
                    
                  </th>
                </tr>
              </thead>
              <vue-countdown style="display: none" v-if="counting" :time="60000" @end="onCountdownEnd"
                v-slot="{ totalSeconds }">Fetch again {{ totalSeconds }} seconds later</vue-countdown>
            </table>
          </div>
          <div class="box-footer-pagination">
            <div class="pagination" style="padding: 10px; width: 100%">
              <div class="button type2" id="uniform-undefined" v-show="btnGenerate" @click="myFunction()"
                style="float: left">
                <span style="width: 150px"><input type="button" class="type2" tabindex="10025" value="display"
                    style="opacity: 0; width: 54px" /><i class="fas fa-plus"></i> Generate Code</span>
              </div>
              <div style="width: 30%; float: right; background: none; color: #f8f5b4; ">
                <!-- /.card-header -->
                <div id="inspection_call_statusdisplay" class="clearfix mt_0" style="margin=0;">
                  <div class="col main status_tested" style="border: none; width: 100%">
                    <table cellpadding="0" cellspacing="0" border="0">
                      <thead>
                        <tr></tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th>
                            <font style="vertical-align: inherit; color: #f8f5b4">Product</font>
                          </th>
                          <td>
                            <input :disabled="true" style="vertical-align: inherit; background: none;  border: none;  "
                              v-model="productline" />
                          </td>
                        </tr>
                        <tr>
                          <th>
                            <font style="vertical-align: inherit; color: #f8f5b4">Item</font>
                          </th>
                          <td>
                            <input :disabled="true" style=" vertical-align: inherit;  background: none; border: none; "
                              v-model="item" />
                          </td>
                        </tr>
                        <tr>
                          <th>
                            <font style="vertical-align: inherit; color: #f8f5b4">Total</font>
                          </th>
                          <td>
                            <input :disabled="true" style="vertical-align: inherit; background: none;border: none; "
                              v-model="total" />
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
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

                <div style="padding:0 70px 0 60px">
                  <div class="col-md-12">
                    <div class="text-center">
                      <h3 class="title-purchase">STOCK-COUNT REPORT</h3>
                    </div>
                  </div>
                  
                  <div class="col-container">
                    <div class="stock-col1">
                      <p class="p-bg font-size p-pad">DOCUMENT DETIALS</p>
                      <p class="p-mg info-pad">Document No. : {{ form.document_no }} </p>
                      <p class="p-mg info-pad">Document Type : {{ form.document_type }}</p>
                      <p class="p-mg info-pad">Description : {{ form.description }}</p>
                      <p class="p-mg info-pad">Total Amount : {{ form.total_amount }}</p>
                      <p class="p-mg info-pad">Currency : {{ form.curency_code }}</p>

                      
                    </div>
                    <div class=" stock-col2">
                      <p class=" p-bg font-size p-pad">COMPANY NAME</p>
                        <p class="p-mg info-pad">Name : {{ company.company_name }}</p>
                        <p class="p-mg  info-pad">Phone Number : {{ company.company_Phone }}</p>
                        <p class="p-mg info-pad">Email Address : {{ company.company_Email }}</p>
                        <p class="p-mg info-pad">Address : {{ company.company_Address }}</p>
                    </div>
                  </div>
                  <div class=" my-2  justify-content-center">
                    <table id="pr-tb">
                    <thead>
                      <tr class="p-bg" >
                        <th class="text-center">Pro. No</th>
                        <th class="text-center">Product</th>
                        <th class="text-center">Price</th>
                        <th class="text-center">Inventory</th>
                        <th class="text-center">Stock-Count</th>
                        <th class="text-center">Unit</th>
                        <th class="text-center">Credit-Balance</th>
                        <th class="text-center">Debit-Balance</th>
                        <th class="text-center">Total</th>
                        <th class="text-center">Currency</th>
                      </tr>
                    </thead>
                    <tbody >
                      <tr v-for="purchaseLine in purchases_lines" :key="purchaseLine.index">
                        <td>{{ purchaseLine.product_no }}</td>
                        <td>{{ purchaseLine.description }}</td>
                        <td>{{ purchaseLine.unit_price }}</td>
                        <td>{{ purchaseLine.inventory }}</td>
                        <td>{{ purchaseLine.inventory_count }}</td>
                        <td>{{ purchaseLine.unit_of_measure_code }}</td>
                        <td>{{ purchaseLine.credit_balance }}</td>
                        <td>{{ purchaseLine.debit_balance }}</td>
                        <td>{{ purchaseLine.total_amount }}</td>
                        <td>{{ purchaseLine.curency_code }}</td>

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
          <a class="btn-purchase btn-light text-capitalize border-0" data-mdb-ripple-color="dark" @click="print()"><i
              class="fas fa-print text-primary"></i> Print</a>
          
        </div>
      </div>
    </div>
  </div>

    <div class="modal fade ui-modal" id="statiex-import" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticboomId" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content ui-dialog">
                <div class="ui-widget-header">
                  <h5 class="modal-title in-header" id="staticBackdropLabel" ><i class="fa fa-print" aria-hidden="true"></i> {{ excel }} to Docutment: {{ form.document_no }} , {{ form.description }}</h5>
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
                              <h3 v-if="excel=='Import'" class="​title-purchase" id="titlered">{{excel}} {{ exefile }} from Excel</h3>
                              <h3 v-else class="title-purchase" id="titlered">{{excel}} To Excel</h3>
                            </div>
                          </div>
                          <div class="row my-2 mx-1 justify-content-center table-padding-bot customsroll">
                            <table class="table table-striped table-borderless" id="exceldata">
                              <thead style="background-color:#84B0CA ;" class="text-white">
                                <tr>
                                  <th style="width: 5%">No</th>
                                  <th style="width: 10%">Document No</th>
                                  <th style="width: 10%">Document Type</th>
                                  <th style="width: 7%">Product No</th>
                                  <th style="width: 7%">Description</th>
                                  <th style="width: 7%">Unit Price</th>
                                  <th style="width: 7%">Inventory</th>
                                  <th style="width: 7%">Unit Code</th>
                                  <th style="width: 7%">Total</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr v-for="(purchaseLine,index) in items" :key="items.index">
                                  <th v-if="index>=1" style="width: 5%">{{index}}</th>
                                  <th v-if="index>=1" style="width: 10%">{{purchaseLine.document_no}}</th>
                                  <th v-if="index>=1" style="width: 10%">{{purchaseLine.document_type}}</th>
                                  <th v-if="index>=1" style="width: 7%">{{purchaseLine.product_no}}</th>
                                  <th v-if="index>=1" style="width: 10%">{{purchaseLine.description}}</th>
                                  <th v-if="index>=1" style="width: 7%">{{purchaseLine.unit_price}}{{purchaseLine.curency_code}}</th>
                                  <th v-if="index>=1" style="width: 7%">{{purchaseLine.inventory}}</th>
                                  <th v-if="index>=1" style="width: 7%">{{purchaseLine.unit_of_measure_code}}</th>
                                  <th v-if="index>=1" style="width: 7%">{{purchaseLine.total_amount}}{{purchaseLine.curency_code}}</th>
                                </tr>
                              </tbody>

                            </table>
                          </div>
                          <div class="row">
                            <div class="col-xl-8 supplier-padding">
                              <p class="ms-3">Payment Information</p>
                              <ul class="list-unstyled">
                                <li class="text-muted">ABA BANK<span class="text--color">Mr. Master</span></li>
                                <li class="text-muted">Bank Name:<span class="text--color">Mr. Master</span></li>
                                <li class="text-muted">Bank Account Number: <span class="text--color">001 025 025</span></li>
                              </ul>
                            </div>

                            <div class="col-xl-8 supplier-padding">
                              <ul class="list-unstyled">
                                <tr>
                                  <td class="th-font-bold text-right">Products :</td>
                                  <td class="th-font-bold">{{ productline }}</td>
                                </tr>
                                <tr>
                                  <td class="th-font-bold text-right" >Inventory : </td>
                                  <td class="th-font-bold">{{ item }}</td>
                                </tr>
                                <tr>
                                  <td class="th-font-bold table-th-width text-right">Total Amount : </td>
                                  <td class="th-font-bold">{{total}}{{form.curency_code}}</td>
                                </tr>
                              </ul>
                            </div>
                          </div>
                          <hr>
                      

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                     <a v-if="excel=='Import'" class="btn-purchase btn-light text-capitalize" data-bs-dismiss="modal" data-mdb-ripple-color="dark" @click="saveprulink()"><i class="fas fa-save"></i> Save Date</a>
                     <a v-if="excel=='Import'" class="btn-purchase btn-light text-capitalize" data-mdb-ripple-color="dark"><i class="fas fa-file-excel"></i> {{ excel }} Form excel</a>
                     <input v-if="excel=='Import'"  type="file" @change="getExcelData" name="select_file" />
                     <a v-else class="btn-purchase btn-light text-capitalize" data-bs-dismiss="modal" data-mdb-ripple-color="dark" @click="exportdataExcel()"><i class="fas fa-save"></i> Save Date</a>
                     </div>
              </div>
            </div>
    </div>
    <div id="myModal" class="lskymodal">
      <div class="lskymodal-content">
         <p><i class="fa fa-check" aria-hidden="true"></i> {{ massege }}</p>
      </div>
    </div>
    <div id="myModalauto" class="lsky">
      <div class="lsky-content">
         <p>{{ massege }}</p>
      </div>
    </div>
</template>
<script>
import readXlsxFile from 'read-excel-file';
import * as XLSX from 'xlsx/xlsx.mjs';
import moment from 'moment';
import axios from "axios";
import Header from "../Header.vue";
export default {
  components:
  {
    Header
  },
  data() {
    return {
      massege:'',
      pending: false,
      file:null,
      isDisabled:false,
      img: "",
      code: "",
      confirm: "",
      title: "",
      message: "",
      purchases: "",
      exefile:'',
      purchasesCode: "",
      suppliyer: [],
      purchases_lines: [],
      units: [],
      company:[],
      products: [],
      boompros: [],
      boomunits:[],
      btnGenerate: false,
      total: 0,
      item: 0,
      productline: 0,
      form: {
        document_no: "",
        document_type: "",
        description: "",
        suppliyer_code: "",
        curency_code: "",
        inactived: "",
      },
      checkexcel:[],
      items :[{
            id:'',
            document_no:'',
            document_type:'',
            product_no:'',
            description:'',
            unit_of_measure_code:'',
            inventory:0,
            unit_price:0,
            total_amount:0, 
            curency_code:'',
        }],
        checkarray:1,
        excel:'Import',
        head :["id","document_no","document_type","product_no","description","unit_of_measure_code","inventory","unit_price","total_amount", "curency_code"],
        fileName : "PrucheseLine.xlsx",
        dateformart:'',
    };
  },
  async mounted() {
    try {
      if (this.$route.query.id.trim() != "undefined") {
        this.purchases = this.$route.query.id;
      }
    } catch (error) {
      this.purchases = "undefined";
    }
    this.getcompany();
    this.getEdite();
    this.purchases_lines = null;
  },
  methods: {
    sumTotal(totals) {
      this.total = 0;
      this.item = 0;
      this.productline = 0;
      totals.forEach((element) => {
        this.productline += 1;
        this.item += parseFloat(element.inventory);
        this.total += parseFloat(element.total_amount);
      });
    },
    btnGenerate_code($status) {
      this.isDisabled = false;
      this.btnGenerate = true;
      this.crateNewsProduct();
    },
    myFunction(val) {
      if(this.form.statue == "open"){
        axios.post("api/v1/stockcout/addrowstockline/" + this.purchases)
            .then((response) => {
              this.purchases_lines = response.data;
            });
          let i = this.purchases_lines.findIndex((x) => x.id === val.id);
          if (i != -1) {
            this.purchases_lines[i].document_no += 1;
          } else {
            var plus = this.purchases_lines.document_no;
            this.purchases_lines.push(plus);
          }
      }else{

      }
    },

    crateNewsProduct() {
      axios.get("/api/v1/stockcout/create/").then((response) => {
        this.form = response.data;
        this.form.forEach((element) => {
          this.$router.push({
            name: "stockcount",
            query: { id: element.document_no },
          });
          this.form.document_no = element.document_no;
          this.purchases = element.document_no;
          this.getEdite();
          this.dateformart = moment(this.form.created_at).format('YYYY-MM-DD');
        });
      });
    },
    getEdite() {
      if (this.purchases.trim() != "undefined") {
        axios
          .get("api/v1/stockcout/stockview/" + this.purchases)
          .then((response) => {
            this.form = response.data;
            if(this.form.statue =='close'){

              this.isDisabled = true;
              this.btnGenerate = true;

             } else{

               this.isDisabled = false;

            }
          }),
          axios
            axios.get("api/v1/stockcout/editStocklineview/" + this.purchases)
            .then((response) => {
              this.purchases_lines = response.data;
              this.sumTotal(response.data);
              this.btnGenerate = true;
            });
      }
      this.form.created_at = moment(this.form.created_at).format('YYYY-MM-DD');
    },
    getcompany(){
      axios.get("/api/v1/getSetup/")
            .then((response) => {
             this.company = response.data;
             this.dateformart = moment(this.form.created_at).format('YYYY-MM-DD');
            });
    },
    deleteUnit(linkId) {
      if (linkId != null) {
        axios
          .post("api/v1/purchase/delete/purchaseline/" + linkId)
          .then((response) => {
            this.purchases_lines = response.data;
          });
      }
    },
    getMessage(title, messsatetext, confirm, id) {
      this.title = title;
      this.message = messsatetext;
      this.confirm = confirm;
      this.code = id;
    },
    messagegetconfirm(confirm) {
      if (confirm == "crate") {
        this.btnGenerate_code("crate");
      }
      if (confirm == "delelink") {
        if(this.isDisabled == false) this.deleteUnit(this.code);
      }
    },
    autoUpdate(purline) {
      for (var i = 0; i <= 100000; i++) {
        if (i === 100000)
          alert(
            // purline.id +
            //   "  " +
            purline.document_no +
            "  " +
            purline.description +
            "  " +
            purline.product_no
          );
      }
    },
    searchproduct(txt) {
      axios.get('/api/v1/purchase/search/' + txt)
        .then((response) => {
          this.boompros = response.data;
        });
    },
    getproduct(boom, product, txt) {
      if (txt == 'boomproducr') {
        product.product_no = boom.product_no;
        product.description = boom.description;
        product.inventory = 0;
        axios.get('/api/v1/stockcout/getStock/' + product.product_no)
              .then((response) => {
                product.inventory = response.data.inventorys;
             });
        axios.post('/api/v1/stockcout/getValicode/' + product.product_no)
        .then((response) => {
             product.unit_price = response.data.unit_price;
             product.unit_of_measure_code = response.data.variant_unit_of_measure_code;   
             product.curency_code = response.data.curency_code;   
        });
        setTimeout(() => this.autoUpdatePurline(product), 500);
      }
      if (txt == 'boomunit') {
        axios.post('/api/v1/stockcout/getValicode/' + product.product_no)
        this.autoUpdatePurline(product); 
      }
      if (txt == 'linkunit') {
        axios.post('/api/v1/stockcout/getValicode/' + product.product_no)
        .then((response) => {  
             this.autoUpdatePurline(product);  
        });
      }
    },
    autoUpdatePurline(purline) {
      purline.credit_balance = parseFloat(purline.inventory)-parseFloat(purline.inventory_count);
      purline.total_amount = parseFloat(purline.credit_balance)-parseFloat(purline.unit_price);
      if(parseFloat(purline.credit_balance)>=0){
        purline.debit_balance =0;
        purline.document_type ="Cradit balace";
      }else{
        purline.debit_balance = parseFloat(purline.credit_balance)*(-1);
        purline.total_amount =  parseFloat(purline.total_amount)*(-1);
        purline.credit_balance = 0;
        purline.document_type ="Debit balace";
      }
      console.log(purline);
      axios.post( "/api/v1/stockcout/updatestockline/" + purline.id, purline )
        .then((res) => {
          this.purchases_lines = res.data;
          this.sumTotal(this.purchases_lines)
        });
    },
  async  autoUpdateProduct(purform) {
      if (purform.document_no != "") {
        axios.post("/api/v1/stockcout/updatestock/" + purform.id, purform)
          .then((response) => {
            this.purchases_lines = response.data;
          });
      }
      this.form.created_at = moment(this.form.created_at).format('YYYY-MM-DD');
    },
    
     getunit(proid){
      axios.post('/api/v1/purchase/delete/getPrulinkUnit/'+proid)
                  .then((response)=>{        
                     this.boomunits = response.data;
           })
    },
    print() {
       var printContents = document.getElementById("purchaseorder").innerHTML;
       var mywindow;     
        mywindow = window.open('', 'mydiv','height=800,width=1200,scrollbars=yes','');          
        mywindow.document.write('<html><head><title>my div</title>');
        mywindow.document.write('<link rel="stylesheet" href="css/style.css">');      
        mywindow.document.write('<link rel="stylesheet" href="css/app.css">');   
        mywindow.document.write('<link rel="stylesheet" href="css/pstyle.css">');   
        mywindow.document.write('</head><body>');
        mywindow.document.write(printContents);                                    
        mywindow.document.write('</body> </html>');
         setTimeout(() => { mywindow.document.close();mywindow.focus(); mywindow.print(); setTimeout(function () {window.close();}, 1);cb();}, 1000);
    },
    getExcelData(event){
      this.exefile='';
     const titlered = document.getElementById("titlered");
     titlered.style.color = '326c7a';
      this.items = [];
      let xlsxfile = event.target.files ? event.target.files[0] : null;
      readXlsxFile(xlsxfile).then((rows) => {
        var x=0;
        rows.forEach(element => {
            if(x>=0){
                if(x==0){
                  this.checkexcel = element;
                 }else{
                    if(this.checkexcel[0]=='id' && this.checkexcel[1]=='product_no' && this.checkexcel[2]=='description' && this.checkexcel[3]=='unit_of_measure_code' && this.checkexcel[4]=='inventory' && this.checkexcel[5]=='unit_price' && this.checkexcel[6]=='total_amount'){
                      this.items.push({
                            id:x,
                            document_no: this.form.document_no,
                            document_type: this.form.document_type,
                            product_no: element[1],
                            description: element[2],
                            unit_of_measure_code: element[3],
                            inventory: element[4],
                            unit_price: element[5],
                            total_amount: element[6], 
                            curency_code: this.form.curency_code,
                        });
                    }else{ console.log(element);

                      this.exefile=' fail data ';
                      titlered.style.color = 'red';
                    
                    }
                }
            } 
            x++;
            this.sumTotal(this.items);
        });
      })
      this.exefile='';
    },
    saveprulink(){
      if(this.items.length > 0){ setTimeout(() => this.savepru(), 500);}
    },
  savepru(){
            axios.post('/api/v1/purchase/PrulinkeSave/',this.items[this.checkarray]).then((response) => { 
              this.massege = this.items[this.checkarray-1].product_no + ' / '+ this.items[this.checkarray-1].description;
              this.massege +=" : "+ this.items[this.checkarray].product_no + ' / '+ this.items[this.checkarray].description;
              this.massege +=" : "+ this.items[this.checkarray+1].product_no + ' / '+ this.items[this.checkarray+1].description;
             });
        if(this.checkarray < this.items.length ){
              this.saveprulink();
              this.checkarray++;
              this.meassagechek('open');
        }else{
          this.meassagechek('close');
          this.checkarray = 0;
        }
     },
    save(){
      this.excel = 'Import';
      this.productline =0;
      this.total = 0;
      this.items = [];
      this.item = 0;
    },
     meassagechek(check){
      var modal = document.getElementById("myModalauto");
        if(check =='open'){
          modal.style.display = "block";
        }else{
          axios.post("api/v1/purchase/addrow/purchaseline/" + this.purchases)
                  .then((response) => {
                    this.purchases_lines = response.data;
                    modal.style.display = "none";
              });
        }
      },
      booking(){
        if(this.isDisabled == false) axios.post("api/v1/stockcout/bookingcountstock/"+this.purchases).then(() => { });
      },
      exportSheet() { 
          this.items = [];
          this.purchases_lines.forEach(element => {
          this.items.push({
                      document_no: element.document_no,
                      document_type: element.document_type,
                      product_no: element.product_no,
                      description: element.description,
                      unit_of_measure_code: element.unit_of_measure_code,
                      inventory: element.inventory,
                      unit_price: element.unit_price,
                      total_amount: element.total_amount, 
                      curency_code: element.curency_code,
              })
        });
        this.excel = 'Export';
      },
      exportdataExcel(){
              const invoices = this.items.reduce((ac, element) => { 
                    ac.push({ 
                      document_no: element.document_no,
                      document_type: element.document_type,
                      product_no: element.product_no,
                      description: element.description,
                      unit_of_measure_code: element.unit_of_measure_code,
                      inventory: element.inventory,
                      unit_price: element.unit_price,
                      total_amount: element.total_amount, 
                      curency_code: element.curency_code,
                    }); 
                    return ac;
                }, []);
                var invoicesWS = XLSX.utils.json_to_sheet(invoices)
                var wb = XLSX.utils.book_new() 
                XLSX.utils.book_append_sheet(wb, invoicesWS, 'PruchecLink') 
                XLSX.writeFile(wb, 'PruchecLink.xlsx')
      }
  },
  startCountdown: function () {
    this.counting = true;
  },
  onCountdownEnd: function () {
    this.counting = false;
  },
};
</script>