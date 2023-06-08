<template>
    <div class="wrapper">
        <div class="container-fuild">
            <div id="headTitle">
                <Logo />
                <h1 id="title" _msttexthash="48503" _msthash="2">
                    Menu-Medical
                </h1>
            </div>
        </div>
        <div class="container-fuild">
            <Header />
            <ol id="topicPath">
                <li style="margin-left: 325px">
                    <router-link to="">
                        <a href="dashbaord">
                            <font style="vertical-align: inherit"></font>
                            <font style="vertical-align: inherit">
                                Menu-Medical
                            </font>
                        </a>
                    </router-link>
                </li>
            </ol>
        </div>
        <div class="pos-container">
            <div class="pos-content">
                <div class="left-path">
                    <div class="search-part">
                        <div class="d-flex">
                            <input type="text" placeholder="Search for product..." />
                            <button type="submit">Search</button>
                        </div>
                    </div>

                    <div class="cate-part">
                        <ul>
                            <li v-for=" cat in category">
                                <div class="cate-item" @click="getsearch(cat.cat_code)">
                                    <input type="checkbox"/>
                                    <p style="padding: 3px;position: relative; top: 2px;">{{ cat.cat_name_2 }}</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="product-part">
                        <ul>
                            <li v-for="pro in products"  class="list_cat" data-bs-toggle="modal" data-bs-target="#staticBackdropss"
                            @click="getselectProduct(pro.product_no)">
                                <div class="col-12 list_cat-1" @click="getproductName(pro)">
                                    
                                   <div class="list_cat-2">
                                    <img :src="bassUrl + '/img/product/' + pro.image_url"/>
                                    <p class="select">Select</p>
                                   </div>
                                   <div class="list_text">
                                        <p class="pro-name text-center">{{ pro.description }}</p>
                                   </div>
                                </div>
                            </li>
                        </ul>
                    </div> 
                </div>
                <div class="right-path">
                    <div class="menu-path d-flex justify-content-end">

                        <div class="navbar " data-bs-toggle="modal" data-bs-target="#MenuId" tabindex="10028">
                            <div class=" nav-container">

                                <div class="hamburger-lines">
                                    <span class="line line1"></span>
                                    <span class="line line2"></span>
                                    <span class="line line3"></span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="user-box d-flex justify-content-between align-items-center">
                        <div><i class="fa fa-user"></i> Bot</div>
                    </div>
                    <div class="post-table-path">
                        <table class="table list-table">
                            <thead class="post-table-path-thead">
                                <th class="text-left lt-th" style="width:2em">No</th>
                                <th class="text-left lt-th" style="width:126px">Item</th>
                                <th class="text-center lt-th" style="width:140px">Qty</th>
                                <th class="text-left lt-th">Unit</th>
                                <th class="text-left lt-th">Price</th>
                                <th class="text-left lt-th">Total</th>
                                <th></th>
                            </thead>
                            <tbody>
                                <tr class="recept-body" v-for="sel, index in selectProduct">
                                    <td scope="row" class="lt-td">{{ index + 1 }}</td>
                                    <td scope="row" class="lt-td">{{ sel.description }}</td>
                                    <td scope="row" class="text-center lt-td">
                                        <div @click="minus(sel)" class="button" id="uniform-undefined">
                                            <span><i class="fa fa-minus" aria-hidden="true" style="margin-top: 9px;"></i>
                                                <input type="button" tabindex="10028" style="opacity: 0;"></span>
                                        </div>
                                        {{ sel.inventory }}
                                        <div @click="plus(sel)" class="button" id="uniform-undefined">
                                            <span><i class="fa fa-plus" aria-hidden="true" style="margin-top: 9px;"></i>
                                                <input type="button" tabindex="10028" style="opacity: 0;"></span>
                                        </div>
                                    </td>
                                    <td scope="row" class="lt-td">{{ sel.unit_code }}</td>
                                    <td scope="row" class="lt-td">{{ sel.unit_price }}</td>

                                    
                                    <td scope="row" class="lt-td">{{ sel.total_amount }}</td>
                                    <td scope="row" style="width:50px" class="lt-td" >
                                        <div class="button" id="uniform-undefined" @click="deleteDate(sel.id)">
                                            <span><i class="fa fa-trash" aria-hidden="true" style="margin-top: 9px;"></i>
                                                <input type="button" tabindex="10028" style="opacity: 0;"></span>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="right-path-line"></div>
                    <div class="right-path-bottom">
                        <table id="pos-bottom-table">
                            <tr style="background-color: aliceblue">
                                <th>Tax</th>
                                <td>10 %</td>
                            </tr>
                            <tr style="background: rgb(220 238 253)">
                                <th>Discount</th>
                                <td>50 %</td>
                            </tr>
                            <tr style="background-color: aliceblue">
                                <th>Products</th>
                                <td>{{ items }}</td>
                            </tr>
                            <tr style="background: rgb(154 218 223 / 51%)">
                                <th>Total Amount</th>
                                <td>
                                    {{ amount }}
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="d-flex justify-content-between"
                        style="padding: 30px;width: 100%;text-align: center;">
                        <div style="width:45%">
                            <button type="button" class="post-pay-btn" data-bs-toggle="modal" data-bs-target="#clearconfirm">
                                <i class="fas fa-trash"></i>
                                 Clear
                            </button>
                        </div>
                        <div style="width:45%">
                            <button type="button" class="post-pay-btn" data-bs-toggle="modal" data-bs-target="#payconfirm">
                                <i class="fa fa-credit-card"></i> 
                                Pay now
                            </button>
                        </div>

                    </div>   
                    <!-- <button type="button"  data-bs-toggle="modal" data-bs-target="#openshift">open shift</button> -->
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade ui-modal" id="staticBackdropss" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropss" aria-hidden="true">
        <div class="modal-dialog" id="nonbackgroundboom">
            <div class="modal-content ui-dialog">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">
                    Product : {{ productName }}
                    </h5>
                    <span class="ui-icon ui-icon-closethick" data-bs-dismiss="modal" aria-label="Close"></span>
                </div>
                <div class="box-content">
                    <table id="pr-tb">
                        <thead>
                            <tr class="p-bg">
                                <th class="text-center">Product No</th>
                                <th class="text-center">Description</th>
                                <th class="text-center" style="width: 196px;">Quantity</th>
                                <th class="text-center" style="width: 196px;">Price</th>
                                <th class="text-center" style="width:10em">Unit Code</th>
                                <th class="text-center" style="width: 108px;"></th>
                            </tr>
                        </thead>
                        <tbody style="background-color: white;">
                            <tr v-for="(form_line, index) in form_lines" :key="index">

                                <td>{{ form_line.product_no }}</td>
                                <td>{{ form_line.description }}</td>
                                <td><input type="number" v-model="form_line.inventory"> </td>
                                <td><input type="number" v-model="form_line.unit_price"></td>
                                <td>{{ form_line.variant_unit_of_measure_code }}</td>
                                <td>
                                    <div @click="searchProduct(form_line)" class="button type2" id="uniform-undefined"
                                        data-bs-dismiss="modal">
                                        <span><input type="button" value="display" class="type2"
                                                style="opacity: 0; width: 54px" tabindex="10025" /><i
                                                class="fa fa-check-square" aria-hidden="true"></i> Select</span>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <div class="button type2" id="uniform-undefined"></div>
                    <div class="button type2" id="uniform-undefined"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade ui-modal" id="MenuId" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropss" aria-hidden="true">
        <div class="modal-dialog" id="nonbackgroundboom">
            <div class="modal-content ui-dialog">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">
                        POS Menu
                    </h5>
                    <span class="ui-icon ui-icon-closethick" data-bs-dismiss="modal" aria-label="Close"></span>
                </div>
                <div style="background: #fff;">
                    <div>
                        <div id="menu">
                            <ul class="clearfix clf">
                                <li class="shf" data-bs-dismiss="modal" aria-label="Close">
                                    <dl>
                                        <dt>
                                            <img alt="タックシール印刷" height="168" src="img/icon-procheseorder.png"
                                                    width="168" data-bs-toggle="modal" data-bs-target="#openshift">
                                        </dt>
                                        <dd>
                                            <span>Open Shift</span>
                                        </dd>
                                    </dl>
                                </li>
                                <li class="shf" data-bs-dismiss="modal" aria-label="Close">
                                    <dl>
                                        <dt>
                                            <img alt="タックシール印刷" height="168" src="img/tuck_seal.png" width="168"
                                            data-bs-toggle="modal" data-bs-target="#closeshift" >
                                        </dt>
                                        <dd>
                                            <span>Close Shift</span>
                                        </dd>
                                    </dl>
                                </li>
                                <li class="shf" data-bs-dismiss="modal" aria-label="Close">
                                    <dl>
                                        <dt>
                                            <router-link to="detailshif">
                                                <img alt="タックシール印刷" height="168" src="img/icon-procheseorder.png" width="168">
                                            </router-link>
                                        </dt>
                                        <dd>
                                            <span>Close Shift Detail</span>
                                        </dd>
                                    </dl>
                                </li>
                                <li class="shf" data-bs-dismiss="modal" aria-label="Close">
                                    <dl>
                                        <dt>
                                            <router-link to="saledetail">
                                                <img alt="タックシール印刷" height="168" src="img/icon-procheseorder.png" width="168">
                                            </router-link>
                                        </dt>
                                        <dd>
                                            <span>Sale Detail</span>
                                        </dd>
                                    </dl>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="button type2" id="uniform-undefined"></div>
                    <div class="button type2" id="uniform-undefined"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Open shift form -->

    <div class="modal fade ui-modal" id="openshift" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropss" aria-hidden="true">
        <div class="modal-dialog open-form" id="nonbackgroundboom">
            <div class="modal-content ui-dialog">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">
                        OPEN SHIFT
                    </h5>
                    <span class="ui-icon ui-icon-closethick" data-bs-dismiss="modal" aria-label="Close"></span>
                </div>
                <div style="background: #fff; overflow: scroll;">
                    <div>
                        <div id="menu" style="padding:0 40px; margin-bottom: 20px;">
                           <h4 class="text-center open-h4">EMPLOYEE INFORMATION FORM</h4>
                           <div class="right-path-line shift-line"></div>
                           
                           <p class="label-text">Employee ID</p>
                           <input type="text" name="EmpID" class="open-input" placeholder="Enter your id"/>
                           <p class="label-text">Employee Name</p>
                           <input type="text" name="EmpName" class="open-input" placeholder="Enter your name"/>
                           <!-- <p class="label-text">Gender</p>
                           <input type="text" name="EmpGender" class="open-input" placeholder="Enter your gender"/> -->
                            <p class="label-text">Change</p>
                            <div class="d-flex justify-content-between">
                                <div style="width:45%">
                                    <input type="text" name="deposit" class="open-input" placeholder="0.00 USD"/>
                                    <p class="open-cur">USD</p>
                                </div>
                            <div style="width:45%">
                                <input type="text" name="deposit2" class="open-input" placeholder="0.00 Riel"/>
                                <p class="open-cur">REIL</p>
                            </div>
                           </div>
                           <p class="label-text" >Remark</p>
                            <textarea name="description" placeholder="Enter description" class="open-textarea"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="open-button" data-bs-dismiss="modal" @click="openshift()">Open</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Close shift -->

    <div class="modal fade ui-modal" id="closeshift" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropss" aria-hidden="true">
        <div class="modal-dialog open-form" id="nonbackgroundboom">
            <div class="modal-content ui-dialog">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">
                        CLOSE SHIFT
                    </h5>
                    <span class="ui-icon ui-icon-closethick" data-bs-dismiss="modal" aria-label="Close"></span>
                </div>
                <div style="background: #fff; overflow: scroll;">
                    <div>
                        <div id="menu" style="padding:0 40px; margin-bottom: 20px;">
                           <h4 class="text-center open-h4">EMPLOYEE INFORMATION FORM</h4>
                           <div class="right-path-line shift-line"></div>
                           
                           <p class="label-text">Employee ID</p>
                           <input type="text" name="EmpID1" class="open-input" placeholder="Enter your id"/>
                           <p class="label-text">Employee Name</p>
                           <input type="text" name="EmpName1" class="open-input" placeholder="Enter your name"/>
                           <!-- <p class="label-text">Gender</p>
                           <input type="text" name="EmpGender" class="open-input" placeholder="Enter gender"/> -->
                            <p class="label-text">Change</p>
                            <div class="d-flex justify-content-between">
                                <div style="width:45%">
                                    <input type="text" name="deposit" class="open-input" placeholder="0.00 USD"/>
                                    <p class="open-cur">USD</p>
                                </div>
                            <div style="width:45%">
                                <input type="text" name="deposit2" class="open-input" placeholder="0.00 Reil"/>
                                <p class="open-cur">REIL</p>
                            </div>
                           </div>
                           <table id="pr-tb" class="mt-3">
                            <thead>
                                <tr>
                                    <th class="text-center p-2">No</th>
                                    <th class="text-center p-2">Payment Method</th>
                                    <th class="text-center p-2">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="p-2">1</td>
                                    <td class="p-2">ABA</td>
                                    <td class="p-2">300</td>
                                </tr>
                                <tr>
                                    <td class="p-2">2</td>
                                    <td class="p-2">Pay pay</td>
                                    <td class="p-2">1000</td>
                                </tr>
                            </tbody>
                           </table>
                           <div class="close-total">
                            <table id="pr-tb">
                                <tr>
                                    <td class="p-2">Total</td>
                                    <td class="p-2">3000</td>
                                </tr>
                            </table>
                           </div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="open-button" data-bs-dismiss="modal" @click="closeshift(this.shitfs.id)">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- =============== -->

    <div class="modal fade ui-modal" id="clearconfirm" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="clearconfirm" aria-hidden="true">
        <div class="modal-dialog smallpopup" id="nonbackgroundboom">
            <div class="modal-content ui-dialog">
                <div class="ui-widget-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        <span class="ui-dialog-title" id="ui-dialog-title-modal-edit-dialog">Confirm Message</span>
                    </h5>
                    <span class="ui-icon ui-icon-closethick btn-cancel" data-bs-dismiss="modal" aria-label="Close"></span>
                </div>
                <div class="ui-dialog-content" style="background-color: #fff;">
                    <div class="modal-body">Do you want to clear all Items?</div>
                    <div class="modal-footer">
                        <div class="button type2" id="uniform-undefined" data-bs-dismiss="modal">
                            <span>No<input type="button" class="type2" onclick="edit_cancel()" tabindex="10008" value="No" style="width: 89px; opacity: 0;">
                            </span>
                        </div>
                        <div class="button type2" data-bs-dismiss="modal" @click="Clearall()"><span>Yes</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- open shift alert message confirm -->
    <div class="modal fade ui-modal" id="closeconfirm" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="closeconfirm" aria-hidden="true">
        <div class="modal-dialog smallpopup" id="nonbackgroundboom">
            <div class="modal-content ui-dialog">
                <div class="ui-widget-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        <span class="ui-dialog-title" id="ui-dialog-title-modal-edit-dialog">Confirm Message</span>
                    </h5>
                    <span class="ui-icon ui-icon-closethick btn-cancel" data-bs-dismiss="modal" aria-label="Close"></span>
                </div>
                <div class="ui-dialog-content" style="background-color: #fff;">
                    <div class="modal-body">Shift is close. Do you want to open?</div>
                    <div class="modal-footer">
                        <div class="button type2" id="uniform-undefined" data-bs-dismiss="modal">
                            <span>No<input type="button" class="type2" onclick="edit_cancel()" tabindex="10008" value="No" style="width: 89px; opacity: 0;">
                            </span>
                        </div>
                        <div class="button type2" data-bs-toggle="modal" data-bs-target="#openshift"><span>Yes</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div  class="modal fade ui-modal" id="payconfirm" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="payconfirm" aria-hidden="true">
        <div class="modal-dialog smallpopup" id="nonbackgroundboom" style="width:460px !important">
            <div class="modal-content ui-dialog" style="height: auto !important;">
                <div class="ui-widget-header pos-pay-header">
                    <div>
                        <div class="text text-center">
                            <div style="display: flex; justify-content: space-between; margin: 0px 20px;">
                                <p class="total-pay">Total Amount</p>
                                <span class="ui-icon ui-icon-closethick btn-cancel" data-bs-dismiss="modal" aria-label="Close"
                                style="margin-right:-15px !important; margin-top: 0 !important;"></span>
                            </div>
                            <span style="font-size: 50px;">${{ formatPrice(amount, currency) }}</span>
                            <div class="exchange-payment">
                                <span>$1.00 = ៛4,050.00</span>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="ui-dialog-content" style="background-color: #fff;">
                    <p class="chos-method">Choose the payment methods below</p>
                    <div class="patmentthod">
                        <button v-for="(unit, index) in units " :key=index class="btn-form" @click="getclick(unit.paymentmethod_code)"
                            style="color:#f7f7f7;">{{ unit.paymentmethod_code }}
                        </button>
                    </div>
                    <div class="payment-input">
                        <div class="paydiv">
                            <p class="p-input">Currency</p>
                            <div class="pay-input">
                            <p type="text-form" style="width: 41%;" class="pay-to paycash" name="Payment to Amount" placeholder="0.00">
                            <!-- {{formatPrice(amount, currency) }}  -->
                            USD
                            </p>
                            <p v-if="!cur == 'kHR'" type="text-form" style="width: 41%;" class="pay-to paycash" name="Payment to Amount"
                                >
                                {{formatPrice(amount2, form.curency_code) }}
                            </p>
                            <p v-else type="text-form" style="width: 41%;" class="pay-to paycash" name="Payment to Amount">
                            <!-- ៛{{formatPrice(amount2, form.curency_code) }}  -->
                            Riel
                            </p>
                        </div>
                        </div>
                            <div v-if="paymentmethodselect == 'Cash'" class="paydiv">
                                <p class="p-input">Pay amount</p>
                                <div class="pay-input">
                                    <input :disabled="false" type="number" @change="payOne()" style="width: 41%;" class="pay-to" v-model="pay"
                                        name="Payment to Amount" placeholder="USA">
                                    <input :disabled="false" type="number" style="width: 41%;" @change="paytwo()" class="pay-to" v-model="pay2"
                                        name="" placeholder="Riel">
                                </div>
                            </div>
                            <div v-if="paymentmethodselect == 'Cash' || paymentmethodselect == 'CASH'" class="paydiv">
                                <p class="p-input">Change</p>
                                <div class="pay-input">
                                    <p type="text-form" style="width: 41%;" class="pay-to paycash" name="Payment to Amount" placeholder="0.00">
                                        {{formatPrice(cash, currency) }} 
                                    </p>
                                    <p v-if="!cur == 'kHR'" type="text-form" style="width: 41%;" class="pay-to paycash" name="Payment to Amount"
                                        placeholder="0.00">{{formatPrice(cash2, form.curency_code) }} 
                                    </p>
                                    <p v-else type="text-form" style="width: 41%;" class="pay-to paycash" name="Payment to Amount">៛{{ formatPrice(cash2, form.curency_code) }}</p>
                                </div>
                            </div>
                        </div>
                        <button v-if="this.shitfs.statue=='open'" data-bs-dismiss="modal" class="btn-pay" style="color: aliceblue;" @click="paynow()"><i class="fa fa-credit-card"></i> Pay Now</button>
                        <button v-else class="btn-pay" style="color: aliceblue;" data-bs-toggle="modal" data-bs-target="#closeconfirm"><i class="fa fa-credit-card"></i> Pay Now</button>
                        
                </div> 
            </div>
        </div>
    </div>
    <div id="footer">
        <div id="copyright">Copyright (C) healthbook. ALL Right s Researved Edit by Lsky</div>
    </div>
</template>
<script>
import { thisExpression } from "@babel/types";
import Header from "./Header.vue";
import axios from "axios";
import Logo from "./logo.vue"
export default {
    components: { Header,Logo },
    data() {
        return {
            productName:'',
            shitfs: [],
            category: [],
            form_lines: [],
            testw: [],
            amount: 0,
            items: 0,
            products: [],
            selectProduct: [],
            bassUrl: '',
            check: true,
            checkItems: [],
            units: [],
            cur: 'KHR',
            paymentmethodselect: 'Cash',
            amount: 0,
            amount2: 0,
            form: {
            document_no: "",
            document_type: "",
            description: "",
            suppliyer_code: "",
            exchangerate: 0,
            curency_code: "USA",
            inactived: "",
            status:'',
        },
        }
    },
    mounted() {
        this.bassUrl = axios.defaults.baseURL;
        this.getCatName();
        this.getproduct();
        this.getdataPos();
        this.getUnit();
        this.getEmployee();
    },
    methods: {
        formatPrice(value, cur) {
        if (cur == "KHR") cur = "r";
        try {
            var formatter = new Intl.NumberFormat('en-US', {
            style: 'currency',
            currency: cur,
            minimumFractionDigits: 2
            });
            return formatter.format(value);
        } catch (error) {
            var formatter = new Intl.NumberFormat('en-US', {
            minimumFractionDigits: 2
            });
            return formatter.format(value);
        }
    },
        getclick(value) {
        this.paymentmethodselect = value;
        },
        getUnit() {
        axios.get("/api/v1/paymentvoucher/getPaymenmethod/").then((response) => {
            this.units = response.data;
            console.log(this.units)
        });
        },
        getCatName() {
            axios.get("/api/v1/category/getCatName").then((response) => {
                this.category = response.data;
            });
        },
        Clearall(){
            axios.post('/api/v1/pos/clear/')
                .then(() => {
                    this.getdataPos()
                })
        },
        getsearch(catname) {
            alert(catname);
        },
        getproduct() {
            axios.get("/api/v1/products/Productprescriton/").then((response) => {
                this.products = response.data;
            });
        },
        getselectProduct(product) {
            if (this.products != "undefined") {
                axios
                    .get("/api/v1/products/units/" + product)
                    .then((response) => {
                        this.form_lines = response.data;
                        this.form_lines.forEach(element => {
                            element.inventory = 1;
                        });
                    });
            }
        },
        getdataPos() {
            axios.get("/api/v1/pos/getposdata")
                .then((response) => {
                    this.selectProduct = response.data;
                    this.sum(this.selectProduct);
                });

        },
        getproductName(pro){
            this.productName = pro.description
        },
        possave(datapos) {
            axios.post("/api/v1/pos/inpossale/", datapos).then(() => { this.getdataPos(); });
        },
        searchProduct(product) {
            if (this.selectProduct.length > 0) {
                this.check = false;
                this.selectProduct.forEach(element => {
                    if (element.product_no == product.product_no && element.unit_code == product.variant_unit_of_measure_code) {
                        this.check = true;
                        this.checkItems = element;
                    }
                });
                this.submitt(this.check, product, this.checkItems);
            } else if (product.product_no != "" & this.selectProduct == "") {
                this.possave(product)
            } else {
                this.possave(product);
            }
            this.sum(this.selectProduct);
        },
        submitt(check, getPro, SetPro) {
            if (check) {
                SetPro.inventory = parseFloat(SetPro.inventory) + parseFloat(getPro.inventory);
                SetPro.total_amount = parseFloat(SetPro.inventory) * parseFloat(getPro.unit_price);
                this.update(SetPro)
            } else {
                getPro.total_amount = getPro.unit_price;
                this.possave(getPro);
            }
        },
        sum(pro) {
            this.amount = 0;
            this.items = 0;
            pro.forEach(element => {
                this.amount = this.amount + parseFloat(element.total_amount);
                this.items = this.items + 1;
            });
        },
        minus(item) {
            try {
                var vl = parseFloat(item.inventory);
                if (vl > 1) {
                    item.inventory = vl - 1;
                    item.total_amount = parseFloat(item.inventory) * parseFloat(item.unit_price);
                    this.update(item);
                } else {
                    this.deleteDate(item.id);
                }
            } catch (error) {
            }
        },
        plus(item) {
            var vl = parseFloat(item.inventory);
            item.inventory = vl + 1;
            item.total_amount = parseFloat(item.inventory) * parseFloat(item.unit_price);
            this.update(item);
        },
        update(item) {
            axios.post("/api/v1/pos/update/" + item.id, item).then(() => { this.getdataPos(); });
        },
        deleteDate(item) {
            axios.post("/api/v1/pos/delete/" + item).then(() => { this.getdataPos(); });
        }
        ,
        getEmployee(){
            axios.get('/api/v1/closeshift/getcheck/')
                .then((res)=>{
                    this.shitfs = res.data
                    console.log("the object of employee are:")
                    console.log(this.shitfs)
                    console.log(this.shitfs.statue)
                })
        },
        paynow(){
            window.alert("This is your shift so now you can sell product on your shift!!!!!!");
        },
        closeshift(x){
            axios.post('/api/v1/closeshift/update/'+x)
            .then((res)=> {
                this.shitfs = res.data
            })
           
        },
        openshift(){
            axios.post('/api/v1/closeshift/create/')
            .then(()=>{
                this.getEmployee();
            })
        }
    }
};
</script>
