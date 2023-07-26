<template>
    <div class="wrapper">
        <div class="container-fuild">
            <div id="headTitle">
                <div id="logo">
                    <img alt="Healthbook" height="44" src="img/logo.png" width="70" mstalt="155922" _msthash="1" />
                </div>
                <h1 id="title" _msttexthash="48503" _msthash="2">
                    calender
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
                                calender
                            </font>
                        </a>
                    </router-link>
                </li>
            </ol>
        </div>
        <div class="p-3">
            <div class="calender-box">
                <div class="search-box-title">
                    <router-link to="/Laboratory"><a class="btn-radius btn btn-sm" href="#"
                        style="color: #f8f5b4; margin-top: -2px; color: #dbdee1">
                        <i class="fas fa-cog" style="padding-right: 5px"> </i>
                        Labo
                        </a>
                    </router-link>
                    <a class="btn-radius bt-pn btn btn-sm d-flex just align-items-center" data-bs-toggle="modal" aria-expanded="false" 
                    data-bs-target="#alertbell"

                    style="float: right; color: #f8f5b4 !important; margin-top: 0 !important;">
                    <i class="fas fa-bell" style="font-size:18px; margin-right: 5px;"></i>
                    {{ labo }}
                </a>
            </div>

                <div class="search-box-content">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0" class="tbl_search">
                        
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
                                <th style="width: 5%">Lab ID</th>
                                <th style="width: 5%">Patein ID</th>
                                <th style="width: 5%">No.</th>
                                <th style="width: 10%">Name</th>
                                <th style="width: 5%">Sex</th>
                                <th style="width: 10%">Date</th>
                                <th style="width: 10%">Address</th>
                                <th style="width: 10%">Remark</th>
                                <th style="width: 5%"></th>
                             </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>10111</td>
                                <td>8890</td>
                                <td>30</td>
                                <td>Chan Visal</td>
                                <td>Male</td>
                                <td>10/01/2023</td>
                                <td>Phnom Penh</td>
                                <td>Thanks</td>
                                <td class="text-center" style="min-width:100px;">
                                    <div class="button" id="uniform-undefined">
                                        <span><i class="fa fa-edit"></i> Detail<input type="button"
                                                tabindex="10028"
                                                style="opacity: 0; width: 70px" /></span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>10111</td>
                                <td>8890</td>
                                <td>30</td>
                                <td>Chan Visal</td>
                                <td>Male</td>
                                <td>10/01/2023</td>
                                <td>Phnom Penh</td>
                                <td>Thanks</td>
                                <td class="text-center" style="min-width:100px;">
                                    <div class="button" id="uniform-undefined">
                                        <span><i class="fa fa-edit"></i> Detail<input type="button"
                                                tabindex="10028"
                                                style="opacity: 0; width: 70px" /></span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>10111</td>
                                <td>8890</td>
                                <td>30</td>
                                <td>Chan Visal</td>
                                <td>Male</td>
                                <td>10/01/2023</td>
                                <td>Phnom Penh</td>
                                <td>Thanks</td>
                                <td class="text-center" style="min-width:100px;">
                                    <div class="button" id="uniform-undefined">
                                        <span><i class="fa fa-edit"></i> Detail<input type="button"
                                                tabindex="10028"
                                                style="opacity: 0; width: 70px" /></span>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="box-footer-pagination"><!----></div>
                </div>
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
                                        <input class="string_zen_kana clear_text text" id="brand_name" maxlength="50"
                                            name="brand_name" type="text" tabindex="10001" />
                                    </td>
                                </tr>

                                <tr>
                                    <th width="30%">Currency</th>
                                    <td width="70%">
                                        <input class="string_zen_kana clear_text text" id="brand_name_2" maxlength="50"
                                            name="brand_name_2" type="text" tabindex="10001" />
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

        <div class="modal fade ui-modal" id="staticboomId" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticboomId" aria-hidden="true">
            <div class="modal-dialog " id="recept">
                <div class="modal-content ui-dialog">
                    <div class="ui-widget-header">
                        <h5 class="modal-title in-header" id="staticBackdropLabel"><i class="fa fa-print"
                                aria-hidden="true"></i>
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
                                                                <span><i class="fa fa-edit"></i> Detail<input type="button"
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
                                                                <span><i class="fa fa-edit"></i> Detail<input type="button"
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
                                                                <span><i class="fa fa-edit"></i> Detail<input type="button"
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
                                @click="clear()" style="opacity: 0; width: 63px" tabindex="10026" />
                        </div>

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
                            View</h5>
                        <span class="ui-icon ui-icon-closethick" data-bs-dismiss="modal" aria-label="Close"></span>
                    </div>
                    <div class="ui-dialog-content" id="purchaseorder">
                        <div class="card">
                            <div class="card-body">
                                <div class="mt-3">

                                    <div style="padding:0 40px">

                                        <div class=" my-2  justify-content-center">
                                            <table  class="table table-striped br-table">
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
</template>

<script>
import axios from "axios";
import pagination from "laravel-vue-pagination";
import moment from "moment";
import Header from "../Header.vue";
import { ref } from "vue";
// import print from 'vue3-print-nb';
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
}}
// export default {
//     name: "calender",
//     components: { calender },
//     data() {
//         return {
//             form: {
//                 sex: 'Both'
//             },
//             labo : 20,

//         }
//     },
//     mounted() {
//         this.checkedActive()
//     },
//     methods: {
//         checkedActive() {
//             var items = document.querySelectorAll(".radio > span")
//             console.log(items.length)
//             for (let i = 0; i < items.length; i++) {
//                 items[i].addEventListener('click', function () {
//                     let currentBtn = document.querySelectorAll('.checked')
//                     currentBtn[0].className = currentBtn[0].className.replace('checked', '')
//                     this.className += " checked"
//                 })
//             }
//         },
//         getsex(sex) {
//             if (sex == 'both') {
//                 this.form.sex = "Both"
//                 console.log(this.form.sex)
//             }
//             else if (sex == 'male') {
//                 this.form.sex = 'Male'
//                 console.log(this.form.sex)
//             }
//             else {
//                 this.form.sex = 'Female'
//                 console.log(this.form.sex)
//             }
//         }
//     }
// };
</script>