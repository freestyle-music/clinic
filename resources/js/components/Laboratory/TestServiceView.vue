<template>
    <div class="wrapper">
        <div class="container-fuild">
            <div id="headTitle">
                <div id="logo">
                    <img alt="Healthbook" height="44" src="img/logo.png" width="70" mstalt="155922" _msthash="1" />
                </div>
                <h1 id="title" _msttexthash="48503" _msthash="2">
                    View Test
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
                                View Test
                            </font>
                        </a>
                    </router-link>
                </li>
            </ol>
        </div>
        <div class="p-3">
            <div class="search-box">
                <div class="search-box-title">

                    <a class="btn-radius bt-pn btn btn-sm" data-bs-toggle="dropdown" aria-expanded="false"
                        style="float: right; color: #f8f5b4; margin-top: -3px !important;">
                        <i class="fas fa-plus" style="padding-right: 5px"> </i>
                        Menu
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a @click="getsuppliyerview()" class="dropdown-item btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#printpart" tabindex="10028"><i class="fa fa-print" aria-hidden="true"></i>
                                Print</a>
                        </li>
                        <li>
                            <a @click="getsuppliyerview()" class="dropdown-item btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#alertbell" tabindex="10028"><i class="fa fa-print" aria-hidden="true"></i>
                                Import From Excel</a>
                        </li>
                        <li>
                            <a @click="getsuppliyerview()" class="dropdown-item btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exportToExcel" tabindex="10028"><i class="fa fa-print"
                                    aria-hidden="true"></i> Export To Excel</a>
                        </li>
                    </ul>

                    <router-link to="/testitem"><a class="btn-radius btn btn-sm" href="#"
                            style="color: #f8f5b4; margin-top: -3px; color: #dbdee1">
                            <i class="fas fa-plus"></i>
                            Add New
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
                <input id="search" name="search" type="hidden" value="1">

                <div class="search-box-content">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0" class="tbl_search">
                        <tbody>
                            <tr>
                                <th width="10%">Patient's Code</th>
                                <td width="90%">
                                    <input class="string_zen clear_text text" id="search_word_simei_s" maxlength="50"
                                        name="patient_name" size="50" type="text" tabindex="10003">
                                </td>
                            </tr>
                            <tr>
                                <th width="10%">Patient's Name</th>
                                <td width="90%">
                                    <input class="string_zen clear_text text" id="search_word_simei_s" maxlength="50"
                                        name="patient_name" size="50" type="text" tabindex="10003">
                                </td>
                            </tr>
                            <tr>
                                <th width="10%">Patient's Age</th>
                                <td width="90%">
                                    <input class="string_zen clear_text text" id="search_word_simei_s" maxlength="50"
                                        name="patient_age" size="50" type="text" tabindex="10003">
                                </td>
                            </tr>
                            <tr>
                                <th width="10%">Sex</th>
                                <td width="90%">

                                    <div class="radio " id="uniform-search_word_sex_1" @click="getsex('male')">
                                        <span class="checked">
                                            <input id="search_word_sex_1" name="" type="radio" value="1" tabindex="10014"
                                                style="opacity: 0;">
                                        </span>
                                    </div>
                                    <label style="font-weight: 500 !important;">Male</label>
                                    <div class="radio " id="uniform-search_word_sex_2" style="margin-left:10px"
                                        @click="getsex('female')">
                                        <span>
                                            <input id="search_word_sex_2" name="search_word[sex]" type="radio" value="2"
                                                tabindex="10015" style="opacity: 0;">
                                        </span>
                                    </div>
                                    <label style="font-weight: 500 !important">Female</label>
                                    <div class="radio" id="uniform-search_word_sex_0" @click="getsex('both')"
                                        style="margin-left:10px">
                                        <span>
                                            <input checked="checked" id="search_word_sex_0" name="" type="radio" value="0"
                                                tabindex="10013" style="opacity: 0;">
                                        </span>
                                    </div>
                                    <label style="font-weight: 500 !important;">Other</label>
                                </td>
                            </tr>
                            <tr>
                                <th width="10%">Date Of Birth</th>
                                <td width="90%">
                                    <input class="string_zen clear_text text" id="search_word_simei_s" maxlength="50"
                                        name="patient_phone" size="50" type="date" tabindex="10003">
                                </td>
                            </tr>
                            <tr>
                                <th width="10%">Phone</th>
                                <td width="90%">
                                    <input class="string_zen clear_text text" id="search_word_simei_s" maxlength="50"
                                        name="patient_phone" size="50" type="text" tabindex="10003">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="search-box-footer">
                        <div class="button type2" id="uniform-undefined"><span><i class="fa fa-search"
                                    aria-hidden="true"></i> Search<input type="button" value="表 示" class="type2"
                                    onclick="submit_first_form('/master/jusinsya/index')" style="opacity: 0; width: 54px;"
                                    tabindex="10025"></span></div>
                        <span class="marker"></span>
                    </div>
                </div>
                <div class="box mt-4">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0" class="table table-striped br-table">
                        <thead>
                            <tr class="header-table">
                                <th>Product No</th>
                                <th>Description</th>
                                <th>Type</th>
                                <th>Group Service</th>
                                <th>Cate Servive</th>
                                <th>Inactived</th>
                                <th>Unit Price</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(service, index) in ProductServiceTests.data" :key="index">
                                <td>{{ service.product_no }}</td>
                                <td>{{ service.description }}</td>
                                <td>{{ service.type }}</td>
                                <td>{{ service.group_code }}</td>
                                <td>{{ service.cate_code }}</td>
                                <td>{{ service.inactived }}</td>
                                <td>{{ service.unit_price }}</td>
                                <td class="text-center">
                                    <div class="button type2" id="uniform-undefined" @click="GotoEdit(service)">
                                        <span><input type="button" value="display" class="type2"
                                                style="opacity: 0; width: 54px" tabindex="10025" /><i
                                                class="fa fa-edit"></i> Edit</span>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="box-footer-pagination">
                        <pagination :data="ProductServiceTests" @pagination-change-page="getProductServiceTests" />
                    </div>
                </div>
            </div>
        </div>

        <!-- Print -->
        <div class="modal fade ui-modal" id="printpart" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticboomId" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content ui-dialog">
                    <div class="ui-widget-header">
                        <h5 class="modal-title in-header" id="staticBackdropLabel"><i class="fa fa-print"
                                aria-hidden="true"></i>
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
                                                <h3 class="title-purchase">TEST SERVICES</h3>
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
                                                <p class="text-center p-mg">{{ ProductServiceTests.total }}</p>
                                            </div>
                                        </div>
                                        
                                        <div class="" v-for="(service, index) in getobject" :key="index">
                                            <ul class="d-flex test-ul">
                                                <li style="width:20%">Test No : <span class="li-span">{{ service.product_no
                                                }}</span></li>
                                                <li style="width:40%">Description : <span class="li-span">{{
                                                    service.description }}</span> </li>
                                                <li style="width:25%">Type : <span class="li-span">{{ service.test_type
                                                }}</span> </li>
                                                <li style="width:15%">Price : <span class="li-span">{{ service.unit_price
                                                }}</span></li>
                                            </ul>
                                            <table>
                                                <thead>
                                                    <tr class="test-table">
                                                        <th style="width:10%">ID</th>
                                                        <th style="width:25%;">Product No</th>
                                                        <th style="width:25%">Description</th>
                                                        <th style="width:25%">Test Type</th>
                                                        <th style="width:15%">Normal Value</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr v-for="(item, id) in service.testobject" class="test-table-tr">
                                                        <td style="width:10%">{{ id + 1 }}</td>
                                                        <td style="width:25%;">{{ item.product_no }}</td>
                                                        <td style="width:25%;">{{ item.description }}</td>
                                                        <td style="width:25%;">{{ item.test_type }}</td>
                                                        <td style="width:15%;">{{ item.normal_value }}</td>
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
                        <a v-print="'#printProduct'" class="btn-purchase btn-light text-capitalize border-0" data-mdb-ripple-color="dark"><i class="fas fa-print text-primary"></i> Print</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bell alert -->
        <div class="modal fade ui-modal" id="alertbell" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticboomId" aria-hidden="true">
            <div class="modal-dialog " id="recept">
                <div class="modal-content ui-dialog">
                    <div class="ui-widget-header">
                        <h5 class="modal-title in-header" id="staticBackdropLabel"><i class="fa fa-print"
                                aria-hidden="true"></i>
                            Import From Excel</h5>
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

        <div class="modal fade ui-modal" id="exportToExcel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticboomId" aria-hidden="true">
            <div class="modal-dialog " id="recept">
                <div class="modal-content ui-dialog">
                    <div class="ui-widget-header">
                        <h5 class="modal-title in-header" id="staticBackdropLabel"><i class="fa fa-print"
                                aria-hidden="true"></i>
                            Export To Excel</h5>
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
    </div>
    <div id="footer">
        <div id="copyright">Copyright (C) healthbook. ALL Right s Researved Edit by Lsky</div>
    </div>
</template>

<script>

import Header from '../Header.vue'
import axios from "axios";
import pagination from "laravel-vue-pagination";
import moment from "moment";
import print from 'vue3-print-nb';
export default {
    name: "testserviceview",
    components: { Header, pagination },
    directives:{
        print
    },
    data() {
        return {
            form: {
                sex: 'Both'
            },
            ProductServiceTests: [],
            last_page: 1,
            perPage: '',
            currentPage: 0,
            company: [],
            dateformart: "",
            getobject: [],
        }
    },
    mounted() {
        this.checkedActive()
        this.getProductServiceTests()
        this.getcompany()
        this.getServiceTests()
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
            }
            else if (sex == 'male') {
                this.form.sex = 'Male'
            }
            else {
                this.form.sex = 'Female'
            }
        },
        getProductServiceTests(page = 1) {
            axios.get('api/v1/productservicetest?page=' + page)
                .then(({ data }) => {
                    this.ProductServiceTests = data
                })
        },
        getProductServiceTests(page = 1) {
            axios.get('api/v1/productservicetest?page=' + page)
                .then(({ data }) => {
                    this.ProductServiceTests = data
                })
        },
        getServiceTests() {
            axios.get('api/v1/getallviewproduct/')
                .then((data) => {
                    this.getobject = data.data
                    this.getobject.forEach(element => {
                        axios.get("/api/v1/testservice/gettestservice/" + element.product_no)
                            .then(res => {
                                element.testobject = res.data;
                            })
                    });
                })
        },
        GotoEdit(service) {
            this.$router.push({
                name: 'test',
                query: { id: service.product_no }
            })
        },
        getcompany() {
            axios.get("/api/v1/getSetup/")
                .then((response) => {
                    this.company = response.data;
                    this.dateformart = moment(new Date()).format('YYYY-MM-DD');
                });
        },
    },


};
</script>