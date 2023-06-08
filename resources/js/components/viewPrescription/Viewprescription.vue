<template>
    <div class="wrapper">
        <div class="container-fuild">
            <div id="headTitle">
                <div id="logo">
                    <img alt="Healthbook" height="44" src="img/logo.png" width="70" mstalt="155922" _msthash="1" />
                </div>
                <h1 id="title" _msttexthash="48503" _msthash="2">
                    ViewPrescription
                </h1>
            </div>
        </div>
        <div class="container-fuild">
            <Header />
            <ol id="topicPath">
                <li style="margin-left: 350px">
                    <router-link to="">
                        <a href="dashbaord">
                            <font style="vertical-align: inherit"></font>
                            <font style="vertical-align: inherit">
                                ViewPrescription
                            </font>
                        </a>
                    </router-link>
                </li>
            </ol>

            <div class="search-box">
                <div id="product">
                    <!--#contents -->
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
                                    data-bs-target="#staticboomId" tabindex="10028"><i class="fa fa-print"
                                        aria-hidden="true"></i> Print</a>
                            </li>
                            <li>
                                <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#staticBackdropss"
                                    tabindex="10028" href="#"><i class="fas fa-file-excel"></i> To Excel</a>
                            </li>
                            <li>
                                <a class="dropdown-item btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdropss" tabindex="10028"><i class="fas fa-edit"></i>
                                    Release</a>
                            </li>
                        </ul>
                        <div class="search-box-title">
                            <router-link to="prescriptions">
                                <a class="btn-radius btn btn-sm" href="#"
                                    style="color: #f8f5b4; margin-top: -1px; color: #dbdee1">
                                    <i class="fa fa-id-card"> </i>
                                    Prescription
                                </a>
                            </router-link>
                            <router-link to="">
                                <a class="btn-radius btn btn-sm" href="#"
                                    style="color: #f8f5b4; margin-top: -1px; color: #dbdee1">
                                    <i class="fa fa-id-card"> </i>
                                    View Prescription
                                </a>
                            </router-link>
                        </div>


                        <input id="search" name="search" type="hidden" value="1" />
                        <input id="search" name="search" type="hidden" value="1" />
                        <div class="search-box-content">
                            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="tbl_search"
                                id="hover-table">
                                <tbody>
                                    <tr>
                                        <th width="15%">Prescription ID</th>
                                        <td width="90%">
                                            <input class="string_zen_kana clear_text text" size="50" type="text"
                                                tabindex="10000" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th width="15%">Patient's ID</th>
                                        <td width="90%" colspan="3">
                                            <input class="string_zen_kana clear_text text" name="PrefixCode" size="20"
                                                type="text" tabindex="10001" />
                                            Patient's Name
                                            <input class="string_zen_kana clear_text text" name="PrefixCode" size="30"
                                                type="text" tabindex="10001" />
                                            Sex
                                            <input class="string_zen_kana clear_text text" name="PrefixCode" size="10"
                                                type="text" tabindex="10001" />
                                            Age
                                            <input class="string_zen_kana clear_text text" name="PrefixCode" size="10"
                                                type="text" tabindex="10001" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th width="15%">Medical history</th>
                                        <td width="90%">
                                            <textarea class="string_zen_kana clear_text text" id="search_word_simei_kana_s"
                                                name="search_word[simei_kana_s]" type="text" tabindex="10015" rows="1"
                                                style="width: 36%; outline: none;"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th width="15%">Allergies</th>
                                        <td width="90%">
                                            <textarea class="string_zen_kana clear_text text" id="search_word_simei_kana_s"
                                                name="search_word[simei_kana_s]" type="text" tabindex="10015" rows="1"
                                                style="width: 36%; outline: none;"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th width="15%">Test Type</th>
                                        <td width="90%">
                                            <div class="dropdown d-flex">
                                                <button @click="getunit(form)" @onmouseout="prooductboom()"
                                                    class="dropdown-toggle string_zen clear_text text select-menu"
                                                    type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                    aria-expanded="false" size="50">

                                                    {{ form.stock_unit_of_measure_code }}
                                                    <i class="fa fa-chevron-down"></i>
                                                </button>
                                                <div class="dropdown-menu each-drop-menu"
                                                    aria-labelledby="dropdownMenuButton1">
                                                    <p>
                                                        <input v-model="txtsearch" @input="searchproduct(txtsearch)"
                                                            class="string_zen clear_text text search-pro-field" size="50"
                                                            type="text" />
                                                    </p>
                                                    <ul style="list-style: none" class="scrollable-menu">
                                                        <li>
                                                            <div class="menu-item">
                                                                <p>Products</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="menu-item">
                                                                <p>Service</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="menu-item">
                                                                <p>Material</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th width="15%">Date</th>
                                        <td width="90%">
                                            <input class="string_zen_kana clear_text text" name="QtyCode" size="50"
                                                type="date" tabindex="10001" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th width="15%">Appointment Date</th>
                                        <td width="90%">
                                            <input class="string_zen_kana clear_text text" name="QtyCode" size="50"
                                                type="date" tabindex="10001" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th width="15%">Remark</th>
                                        <td width="90%">
                                            <textarea class="string_zen_kana clear_text text" id="search_word_simei_kana_s"
                                                name="search_word[simei_kana_s]" type="text" tabindex="10015" rows="1"
                                                style="width: 36%; outline: none;"></textarea>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="search-box-footer">
                                <div class="button type2" id="uniform-undefined">
                                    <span>Submit</span>
                                    <input type="button" value="save" class="type2" @click="save()"
                                        style="opacity: 0; width: 63px" tabindex="10026" />
                                </div>
                                <div class="button type2" id="uniform-undefined">
                                    <span>Clear</span>
                                    <input type="button" value="clear" class="type2" @click="clear()"
                                        style="opacity: 0; width: 63px" tabindex="10026" />
                                </div>
                                <div class="button type2" id="uniform-undefined" data-bs-toggle="modal"
                                    data-bs-target="#staticboomId">
                                    <span>Open</span>
                                    <input type="button" value="clear" class="type2" style="opacity: 0; width: 63px"
                                        tabindex="10026" />
                                </div>
                                <span class="marker"></span>
                            </div>

                        </div>

                        <div class="box" style="margin-top:25px">
                            <div class="box-content">
                                <table width="100%" border="0" cellpadding="0" cellspacing="0"
                                    class="table table-striped br-table">
                                    <thead>
                                        <tr class="header-table">
                                            <th width="10%">Prescription ID</th>
                                            <th width="15%">Prescription Name</th>
                                            <th width="10%">Number Phone</th>
                                            <th width="20%">Address</th>
                                            <th width="12%">Date</th>
                                            <th width="13%">Appointment Date</th>
                                            <th width="15%">Remark</th>
                                            <th width="10%"></th>
                                        </tr>
                                    </thead>
                                    <tbody id="view">
                                        <tr v-for="(reg, index) in getpres" :key="index">
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
                                                {{ reg.phone1 }}
                                            </td>
                                            <td v-else style="border: medium none">
                                                {{ reg.phone1 }}
                                            </td>
                                            <td v-if="index % 2 == 0" style="border: medium none">
                                                {{ reg.address }} {{ reg.village }} {{ reg.commune }} {{ reg.district }} {{
                                                    reg.pro_city }}
                                            </td>
                                            <td v-else style="border: medium none">
                                                {{ reg.address }} {{ reg.village }} {{ reg.commune }} {{ reg.district }} {{
                                                    reg.pro_city }}
                                            </td>
                                            <td v-if="index % 2 == 0" style="border: medium none">
                                                {{  formatdatetime(reg.visit_date) }}
                                            </td>
                                            <td v-else style="border: medium none">
                                                {{ formatdatetime(reg.visit_date) }}
                                            </td>
                                            <td v-if="index % 2 == 0" style="border: medium none">
                                                {{ formatdatetime(reg.appointment_date) }}
                                            </td>
                                            <td v-else style="border: medium none">
                                                {{ formatdatetime(reg.appointment_date) }}
                                            </td>
                                            <td v-if="index % 2 == 0" style="border: medium none">
                                                {{ reg.remark }}
                                            </td>
                                            <td v-else style="border: medium none">
                                                {{ reg.remark }}
                                            </td>
                                            <td v-if="index % 2 == 0" style="border: medium none">
                                                <div class="button type2" @click="createvisit(reg.preid)">
                                                    <span><input type="button" value="display" class="type2"
                                                            style="opacity: 0; width: 54px" tabindex="10025" /><i
                                                            class="fa fa-plus-square" aria-hidden="true"></i>Detail</span>
                                                </div>
                                            </td>
                                            <td v-else style="border: medium none">
                                                <div class="button type2" @click="createvisit(reg.preid)">
                                                    <span><input type="button" value="display" class="type2"
                                                            style="opacity: 0; width: 54px" tabindex="10025" /><i
                                                            class="fa fa-plus-square" aria-hidden="true"></i>Detail</span>
                                                </div>
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
</template>

<script>

import Header from '../Header.vue'
import axios from "axios";
import moment from "moment";
export default {
    name: "prescriptions",
    components: { Header },
    data() {
        return {
            labo: 20,
            pre: "",
            fullname: "",
            Address: "",
            getpres: [],
            form: {
                sex: "",
                preid: "",
                paid: "",
                lstname: "",
                firstname: "",
                Age: "",
                visit_date: "",
                pateinid: "",
                birstdate: "",
                remark: "",
                appointment_date: "",
                age: "",
                allergies: "",
                history_disease: "",
                bp: "",
                pr: "",
                rr: "",
                spo2: "",
                t: "",
                address: "",
                village: "",
                commune: "",
                district: "",
                pro_city: "",
                phone1: "",
            },
        }
    },
    mounted() {
        this.getview()
        // this.createvisit()
    },
    methods: {
        getview() {
            axios.get("/api/v1/prescription/getdatavisit/")
                .then((response) => {
                    this.getpres = response.data;
                    console.log(this.getpres)
                });
        },
        createvisit(preid) {
            this.$router.push({ name: "prescriptions", query: { preId: preid } });
        },
        formatdatetime(dateform) {
           try {
             return this.dateformart = moment(dateform).format('YYYY-MM-DD hh:mm');
           } catch (error) {
             return dateform;
           }
        }
    }
};
</script>