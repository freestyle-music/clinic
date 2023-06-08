<template>
    <div class="wrapper">
        <div class="container-fuild">
            <div id="headTitle">
                <div id="logo">
                    <img alt="Healthbook" height="44" src="img/logo.png" width="70" mstalt="155922" _msthash="1" />
                </div>
                <h1 id="title" _msttexthash="48503" _msthash="2">
                    Test Labo
                </h1>
            </div>
        </div>
        <div class="container-fuild">
            <Header />
            <ol id="topicPath">
                <li style="margin-left: 285px">
                    <router-link to="">
                        <a href="dashbaord">
                            <font style="vertical-align: inherit"></font>
                            <font style="vertical-align: inherit">
                                Test Labo
                            </font>
                        </a>
                    </router-link>
                </li>
            </ol>
        </div>
        <div class="p-3">
            <div class="search-box">
                <div class="search-box-title">
                    <a class="btn-radius bt-pn btn btn-sm" href="#" data-bs-toggle="modal" data-bs-target="#deleteconfirm"
                        aria-expanded="false" style="float: left; color: #f8f5b4; margin-top: -2px">
                        <i class="fas fa-plus" style="padding-right: 5px; margin-top: -2px">
                        </i>
                        Create New
                    </a>
                    <a class="btn-radius bt-pn btn btn-sm" data-bs-toggle="dropdown" aria-expanded="false"
                        style="float: right; color: #f8f5b4; margin-top: 0 !important;">
                        <i class="fas fa-plus" style="padding-right: 5px"> </i>
                        Menu
                    </a>

                    <ul class="dropdown-menu">
                        <li>

                            <a @click="showboom()" class="dropdown-item btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#boomstaticboomId" tabindex="10028">
                                <i class="fa fa-circle-b"></i>Boom Metarial</a>
                        </li>
                        <li>
                            <a @click="showboom()" class="dropdown-item btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#importexcell" tabindex="10028">
                                <i class="fas fa-file-excel"></i> Import From Excel</a>
                        </li>
                        <li>

                            <a @click="showboom()" class="dropdown-item btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#" tabindex="10028">
                                <i class="fas fa-file-excel"></i> Export To Excel</a>
                        </li>
                    </ul>

                    <router-link to="/testserviceview"><a class="btn-radius btn btn-sm" href="#"
                            style="color: #f8f5b4; margin-top: -2px; color: #dbdee1">
                            <i class="fas fa-cog"> </i>
                            View
                        </a>
                    </router-link>

                    <router-link to="/Brands"><a class="btn-radius btn btn-sm" href="#"
                            style="color: #f8f5b4; margin-top: -2px">
                            <i class="fa fa-cog" aria-hidden="true"></i>
                            Brands
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
                    <table width="100%" border="0" cellpadding="0" cellspacing="0" class="tbl_search">
                        <tbody>
                            <tr>
                                <th width="10%">Test ID</th>
                                <td width="90%">
                                    <input :disabled="true" class="string_zen clear_text text" id="search_word_simei_s"
                                        maxlength="50" name="patient_name" size="50" type="text" tabindex="10003"
                                        :value="Tests.product_no">
                                </td>
                            </tr>
                            <tr>
                                <th width="10%">Test Name</th>
                                <td width="90%">
                                    <input class="string_zen clear_text text" id="search_word_simei_s" maxlength="50"
                                        @change="UpdateProduct(form)" name="patient_name" size="50" type="text"
                                        tabindex="10003" v-model="form.description">
                                </td>
                            </tr>

                            <tr>
                                <th width="10%">Group</th>
                                <td width="90%">
                                    <div class="dropdown">
                                        <button class="dropdown-toggle string_zen clear_text text select-menu" type="button"
                                            id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"
                                            size="50">
                                            {{ form.group_code }}
                                            <i class="fa fa-chevron-down"></i>
                                        </button>
                                        <div class="dropdown-menu each-drop-menu" aria-labelledby="dropdownMenuButton1">
                                            <p>
                                                <input class="string_zen clear_text text search-pro-field" size="50"
                                                    type="text" />
                                            </p>
                                            <ul style="list-style: none" class="scrollable-menu">
                                                <li v-for="(group, index) in groups" :key="index"
                                                    @click="getGroupcode(group)">
                                                    <div class="menu-item">
                                                        <p>{{ group.group_code }}</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th width="10%">Measource</th>
                                <td>
                                    <div class="dropdown">
                                        <button class="dropdown-toggle string_zen clear_text text select-menu" type="button"
                                            id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"
                                            size="50">
                                            {{ form.stock_unit_of_measure_code }}
                                            <i class="fa fa-chevron-down"></i>
                                        </button>
                                        <div class="dropdown-menu each-drop-menu" aria-labelledby="dropdownMenuButton1">
                                            <p>
                                                <input class="string_zen clear_text text search-pro-field" size="50"
                                                    type="text" />
                                            </p>
                                            <ul style="list-style: none" class="scrollable-menu">
                                                <li v-for="(unit, index) in units" :key="index" @click="getunitcode(unit)">
                                                    <div class="menu-item">
                                                        <p>{{ unit.code }}</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <th width="10%">Currency Code</th>
                                <td width="90%">
                                    <input class="string_zen clear_text text" id="search_word_simei_s" maxlength="50"
                                        name="patient_age" size="20" type="text" tabindex="10003" :value="currency_code">
                                </td>
                            </tr>
                            <tr>
                                <th width="10%">Price</th>
                                <td width="90%">
                                    <input class="string_zen clear_text text" id="search_word_simei_s" maxlength="50"
                                        @change="UpdateProduct(form)" name="patient_age" size="20" type="text"
                                        tabindex="10003" v-model="form.unit_price">
                                </td>
                            </tr>

                        </tbody>
                    </table>
                    <div class="search-box-footer">
                        <div class="button type2" id="uniform-undefined"><span><i class="fa fa-search"
                                    aria-hidden="true"></i> Search<input type="button" value="表 示" class="type2"
                                    onclick="submit_first_form('/master/jusinsya/index')" style="opacity: 0; width: 54px;"
                                    tabindex="10025"></span></div>

                        <div v-if="btn_save == true" class="button type2" id="uniform-undefined">
                            <span><i class="fa fa-save" aria-hidden="true"></i> Save<input type="button" value="表 示"
                                    class="type2" onclick="submit_first_form('/master/jusinsya/index')"
                                    style="opacity: 0; width: 54px;" tabindex="10025">
                            </span>
                        </div>
                        <div v-else class="button type2" id="uniform-undefined" style="display: none;">
                            <span><i class="fa fa-save" aria-hidden="true"></i> Save<input type="button" value="表 示"
                                    class="type2" onclick="submit_first_form('/master/jusinsya/index')"
                                    style="opacity: 0; width: 54px;" tabindex="10025">
                            </span>
                        </div>
                        <span class="marker"></span>
                    </div>


                </div>
                <div class="box mt-4">
                    <div class="box-content">
                        <table width="100%" border="0" cellpadding="0" cellspacing="0" class="tbl_list tbl_stripe"
                            id="myTable">
                            <thead>
                                <tr>
                                    <th width="20%" class="tb-pro-th">Test ID</th>
                                    <th width="22%" class="tb-pro-th">Test Name</th>
                                    <th width="23%" class="tb-pro-th">Group Gender</th>
                                    <th width="25%" class="tb-pro-th">Normal Value</th>
                                    <th width="10%" class="tb-pro-th"></th>
                                </tr>
                                <tr v-for="(test, index) in allTest" :key="index">
                                    <th>
                                        <input :disabled="true" class="string_zen clear_text text" size="50" type="text"
                                            style="width: 80% !important" :value="test.product_no" />
                                    </th>
                                    <th>
                                        <input @change="UpdateSingRow(test.id, test)" class="string_zen clear_text text"
                                            size="50" type="text" style="width: 80% !important"
                                            v-model="test.description" />
                                    </th>
                                    <th>
                                        <input :disabled="true" class="string_zen clear_text text" size="50" type="text"
                                            style="width: 80% !important" :value="test.test_type" />
                                    </th>
                                    <th>
                                        <input @change="UpdateSingRow(test.id, test)" class="string_zen clear_text text"
                                            size="50" type="text" style="width: 80% !important"
                                            v-model="test.normal_value" />
                                    </th>
                                    <th class="bnt-02">
                                        <div class="button type2" id="uniform-undefined"
                                            @click="deletetest(test.product_no)">
                                            <span><input type="button" class="type2" style="opacity: 0; width: 54px"
                                                    tabindex="10025" value="display" /><i class="fa fa-trash"
                                                    aria-hidden="true"></i>
                                                Delete</span>
                                        </div>
                                    </th>
                                </tr>

                            </thead>
                        </table>
                    </div>
                </div>

            </div>
        </div>

        <!-- view modal  -->

        <div class="modal fade ui-modal" id="boomstaticboomId" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropss" aria-hidden="true">
            <div class="modal-dialog" id="nonbackgroundboom">
                <div class="modal-content ui-dialog">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">
                            Boom Products : {{ form.product_no }} , {{ form.description }}
                        </h5>
                        <span class="ui-icon ui-icon-closethick" data-bs-dismiss="modal" aria-label="Close"></span>
                    </div>
                    <!-- ///////////////////////////////////////////// -->
                    <div class="box-content">
                        <table width="100%" border="0" cellpadding="0" cellspacing="0" class="tbl_list tbl_stripe"
                            id="myTable">
                            <thead>
                                <tr>
                                    <th width="15%">Product Code</th>
                                    <th width="20%">Description</th>
                                    <th width="15%">QTY in Unit</th>
                                    <th width="15%">Quantity</th>
                                    <th width="15%">Unit Code</th>
                                    <th width="15%">Inactived</th>
                                    <th width="15%"></th>
                                </tr>
                                <tr v-for="form_line in boomproducts">
                                    <th>
                                        <div class="dropdown">
                                            <button @onmouseout="prooductboom(form_line)"
                                                class="dropdown-toggle string_zen clear_text text" type="button"
                                                id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"
                                                size="50" style="width: 80% !important;
                        padding-left: 11px;
                        padding-right: 19px;
                        border: none;
                      ">
                                                {{ form_line.boom_product_id }}
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="
                        max-height: 400px;
                        width: 250px;
                        scroll-behavior: smooth;
                        padding: 5px;
                        margin: 5px;
                        box-shadow: 1px 1px 5px #141417;">
                                                <p>
                                                    <input v-model="txtsearch" @input="searchproduct(txtsearch)"
                                                        class="string_zen clear_text text" size="50" type="text" style="
                          width: 98% !important;
                            border: 1px teal solid;
                            border-radius: 1px;
                          height: 30px;
                          " />
                                                </p>
                                                <ul style="list-style: none" class="scrollable-menu">
                                                    <li v-for="boompro in boompros"
                                                        @click="getproduct(boompro, form_line, 'boomproducr')">
                                                        <div class="menu-item">
                                                            <p style="color: blue">{{ boompro.product_no }}</p>
                                                            <p>{{ boompro.description }}</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <input v-model="form_line.description" @change="proboomAutoSave(form_line)"
                                            class="string_zen clear_text text" size="50" type="text"
                                            style="width: 80% !important" />
                                    </th>
                                    <th>
                                        <input v-model="form_line.quantity_per_unit" @change="proboomAutoSave(form_line)"
                                            class="string_zen clear_text text" size="50" type="text"
                                            style="width: 80% !important" />
                                    </th>
                                    <th>
                                        <input v-model="form_line.quantity" @change="proboomAutoSave(form_line)"
                                            class="string_zen clear_text text" size="50" type="text"
                                            style="width: 80% !important" />
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button @click="getboomnit(form_line.product_no)"
                                                @onmouseout="prooductboom(form_line)"
                                                class="dropdown-toggle string_zen clear_text text" type="button"
                                                id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"
                                                size="50" style="
                        width: 80% !important;
                        padding-left: 11px;
                        padding-right: 19px;
                        border: none;
                        height: 18px;
                      ">
                                                {{ form_line.bom_unit_of_measure_code }}
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="
                        max-height: 400px;
                        width: 250px;
                        scroll-behavior: smooth;
                       padding: 5px;
                        margin: 5px;
                        box-shadow: 1px 1px 5px #141417;
                        border: none;
                      ">
                                                <p>
                                                    <input v-model="txtsearch" @input="searchproduct(txtsearch)"
                                                        class="string_zen clear_text text" size="50" type="text" style="
                            width: 98% !important;
                            border: 1px teal solid;
                            border-radius: 1px;
                            height: 30px;
                          " />
                                                </p>
                                                <ul style="list-style: none" class="scrollable-menu">
                                                    <li v-for="unit in units" @click="getupdateunit(unit, form_line)">
                                                        <div class="menu-item">
                                                            <p>{{ unit.unit_code }}</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <select v-model="form_line.inactived" @change="proboomAutoSave(form_line)"
                                            class="form" style="width: 80%">
                                            <option value="No">No</option>
                                            <option value="Yes">Yes</option>
                                        </select>
                                    </th>
                                    <th class="bnt-02">
                                        <div class="button type2" id="uniform-undefined" @click="deleteboom(form_line.id)">
                                            <span><input type="button" class="type2" style="opacity: 0; width: 54px"
                                                    tabindex="10025" value="display" /><i class="fa fa-trash"
                                                    aria-hidden="true"></i>
                                                Delete</span>
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <a @click="boomcratenew()" class="btn-radius bt-pn btn btn-sm show" href="#"
                            data-bs-toggle="dropdown" aria-expanded="true"
                            style="float: left; color: rgb(248, 245, 180); margin-top: -2px"><i class="fas fa-plus"
                                style="padding-right: 5px; margin-top: -2px"></i>Add New</a>
                        <div class="button type2" id="uniform-undefined"></div>
                        <div class="button type2" id="uniform-undefined"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bell alert -->
        <div class="modal fade ui-modal" id="importexcell" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticboomId" aria-hidden="true">
            <div class="modal-dialog " id="recept">
                <div class="modal-content ui-dialog">
                    <div class="ui-widget-header">
                        <h5 class="modal-title in-header" id="staticBackdropLabel"><i class="fa fa-print"
                                aria-hidden="true"></i>
                            Import from Excel</h5>
                        <span class="ui-icon ui-icon-closethick" data-bs-dismiss="modal" aria-label="Close"></span>
                    </div>
                    <div class="ui-dialog-content" id="purchaseorder">
                        <div class="card">
                            <div class="card-body">
                                <div class="mt-3">
                                    <div>
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
                                                                <span><i class="fa fa-plus"></i> Add<input type="button"
                                                                        tabindex="10028"
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
                                                                <span><i class="fa fa-plus"></i> Add<input type="button"
                                                                        tabindex="10028"
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
                                                                <span><i class="fa fa-plus"></i> Add<input type="button"
                                                                        tabindex="10028"
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

        <!-- confirm add new modal -->
        <div class="modal fade ui-modal" id="deleteconfirm" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="clearconfirm" aria-hidden="true">
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
                        <div class="modal-body">Do you want to create?</div>
                        <div class="modal-footer">
                            <div class="button type2" id="uniform-undefined" data-bs-dismiss="modal" @click="cancel()">
                                <span>No<input type="button" class="type2" tabindex="10008" value="No"
                                        style="width: 89px; opacity: 0;">
                                </span>
                            </div>
                            <div class="button type2" data-bs-dismiss="modal" @click="createTest()"><span>Yes</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="myModal" class="lskymodal">
            <div class="lskymodal-content">
                <p><i class="fa fa-check" aria-hidden="true"></i> {{ message }}</p>
            </div>
        </div>

    </div>
</template>
<script>

import Header from '../Header.vue'
import axios from "axios";
export default {
    name: "test",
    components: { Header },
    data() {
        return {
            currency_code: '',
            btn_save: false,
            form: {
                id: '',
                product_no: '',
                product_barcode: '',
                description: '',
                description_2: '',
                image_url: '',
                stock_unit_of_measure_code: '',
                purche_unit_of_measure_code: '',
                bom_no: '',
                reorder_point: '',
                sup_code: '',
                brand_code: '',
                group_code: '',
                cat_code: '',
                variant_code: '',
                unit_price: '',
                inactived: '',
                is_deleted: '',
                type: ''
            },
            eachform: {
                id: '',
                product_no: '',
                product_type: '',
                description: '',
                test_type: '',
                normal_value: '',
                status: '',
                remark: '',
                created_by: '',
                delete_by: '',

            },
            units: [],
            boomproducts: [],
            message: '',
            groups: [],
            Tests: [],
            allTest: [],
            TestID: "",
            getid: "",
        }
    },
    async mounted() {

        try {
            if (this.$route.query.id.trim() != "undefined") {
                this.TestID = this.$route.query.id;
                this.Tests.product_no = this.TestID
            }
        } catch (error) {
        }
        this.getproduct()
        this.getAllTest()
        this.showboom()
        this.getunit()
        this.getCurrency()
        this.getdatagroup()
    },
    methods: {
        show_saveBtn() {
            this.btn_save = true;
        },


        createTest() {
            axios.post("/api/v1/testservice/create/")
                .then(res => {
                    this.Tests = res.data[0]
                    this.form = res.data[0]
                    this.$router.push({
                        name: "test",
                        query: { id: this.Tests.product_no },
                    });
                    this.show_saveBtn()
                    this.getAllTest()
                })
        },
        getCurrency() {
            axios.get("/api/v1/getSetup/")
                .then((res) => {

                    this.currency_code = res.data.main_Currency
                })
                .catch()
        },
        getdatagroup() {
            axios.get("/api/v1/progroups/getdatagroup").then((response) => {
                this.groups = response.data;
            });
        },
        deletetest(id) {
            axios.get("api/v1/testservice/destroy/" + id)
                .then(res => {
                    this.getAllTest()
                    this.Tests = res.data
                })
        },
        UpdateSingRow(id, form) {
            this.eachform = form;
            axios.post("/api/v1/testservice/update/" + id, this.eachform)
                .then((res) => {
                    this.message = "save successful."
                    form = res.data;
                    this.messagebox()
                })
        },
        messagebox() {
            var modal = document.getElementById("myModal");
            modal.style.display = "block";
            setTimeout(() => (modal.style.display = "none"), 1500);
        },
        getproduct() {
            axios.get("/api/v1/products/edite/" + this.Tests.product_no)
                .then(res => {
                    this.form = res.data
                })
        },
        UpdateProduct(form) {
            axios.post("/api/v1/products/update/" + this.Tests.product_no, form)
                .then(res => {
                    this.form = res.data[0]
                    this.message = "Save successful"
                    this.messagebox()
                    this.getAllTest()
                })
        },
        getGroupcode(group) {
            this.form.group_code = group.group_code
            this.UpdateProduct(this.form)
        },
        getunitcode(unit) {
            this.form.stock_unit_of_measure_code = unit.code
            this.UpdateProduct(this.form)
        },
        showboom() {
            axios
                .get("/api/v1/boomproduct/show/" + this.Tests.product_no)
                .then((response) => {
                    this.boomproducts = response.data;
                });
        },
        boomcratenew() {
            axios.post("/api/v1/boomcreate/" + this.Tests.product_no).then((response) => {
                this.boomproducts = response.data;
            });
        },
        deleteboom(id) {
            axios.get("/api/v1/boomproduct/destroy/" + id)
                .then(res => {
                    this.boomproducts = res.data
                })
        },
        proboomAutoSave(product) {
            axios
                .put("/api/v1/boomproduct/update/" + product.id, product)
                .then((response) => {
                    this.boomproducts = response.data
                    this.message = "save successful."
                    this.messagebox();
                    this.showboom()
                });
        },
        getunit() {
            axios.get("/api/v1/getunite")
                .then(res => {
                    this.units = res.data
                })
        },
        getupdateunit(unit, product) {
            product.bom_unit_of_measure_code = unit.unit_code
            this.proboomAutoSave(product)
        },

        async getAllTest() {
            await axios.get("/api/v1/testservice/gettestservice/" + this.Tests.product_no)
                .then(res => {
                    this.allTest = res.data
                    this.allTest.forEach(element => {
                        element.description = this.form.description;
                        this.getupdateTest(element.id, element);
                    });
                })
        },
        getupdateTest(id, form) {
            this.eachform = form;
            axios.post("/api/v1/testservice/update/" + id, this.eachform)
                .then((res) => {
                    this.message = "save successful."
                    this.getAllTest()
                })
        },
    }
};
</script>