require("./bootstrap");
require("alpinejs");
import Alpine from "alpinejs";
window.Alpine = Alpine;
import { createApp } from "vue";
import router from "./router/router";
import VueSweetalert2 from "vue-sweetalert2";
import "sweetalert2/dist/sweetalert2.min.css";
import axios from "axios";
import App from "./components/App.vue";
import Brands from "./components/Brands/Brands.vue";
import Product from "./components/Product/product.vue";
import Viewproduct from "./components/Product/view-product.vue";
import Category from "./components/Category/Category.vue";
import Supplies from "./components/Supplies/Supplies.vue";
import Group from "./components/Group/Product_group.vue";
import Serailcode from "./components/Serailcode/serailcode.vue";
import Purchase from "./components/Purchase/purchase-order.vue";
import Purchasview from "./components/Purchase/view-puchese.vue";
import MenuProductSetting from "./components/MenuProductsetup.vue";
import MenuPurchase from "./components/MenuPurchase.vue";
import MenuStock from "./components/MenuStock.vue";
import Stockalert from "./components/StockAlert/stockalert.vue";
import MenuClinic from "./components/MenuClinic.vue";
import MenuMedical from "./components/MenuMedical.vue";
import Receptorder from "./components/Recept/Recept-order.vue";
import viewRecept from "./components/Recept/view-Recept.vue";
import unitcode from "./components/unitcode/unitcode.vue";
import StockTransection from "./components/StockTransection/stock-transection.vue";
import Currency from "./components/Currency/currency.vue";
import ExchangeRate from "./components/ExchangeRate/ExchangeRate.vue";
import StockCount from "./components/StockCount/stock-count.vue";
import paymenMethod from "./components/PaymentMethod/paymenMethod.vue";
import paymen from "./components/Payment/paymen.vue";
import paymenview from "./components/Payment/paymen_view.vue";
import prescriptions from "./components/Prescriptions/prescriptions.vue";
import Laboratory from "./components/Laboratory/Laboratory.vue";
import convertoInvoine from "./components/Prescriptions/convertoInvoine.vue";
import test from "./components/Laboratory/Test.vue";
import viewPrescription from "./components/viewPrescription/Viewprescription.vue";
import testserviceview from "./components/Laboratory/TestServiceView.vue";
import viewlaboratory from "./components/Laboratory/Viewlaboratory.vue";
import addTestLabo from "./components/Laboratory/AddTestLabo.vue";
import Employee from "./components/Employee/employee.vue";
import patientRegister from "./components/Register/patientRegister.vue";
import Vue2Filters from "vue2-filters";
import VueHtmlToPaper from "vue-html-to-paper";
import print from 'vue3-print-nb'
import TestInvoice from "./components/TestInvoice/testinvoice.vue";
import detailshif from "./components/Detailcloseshif/detailshif.vue";
import saledetail from "./components/Saledetail/saledetail.vue";
import calendar from "./components/Calendar/calendar.vue";

window.value = "Menu";
const app = createApp({
    components: {
        App,
        Brands,
        Product,
        Viewproduct,
        Category,
        Supplies,
        Group,
        Serailcode,
        Purchase,
        Purchasview,
        MenuProductSetting,
        MenuPurchase,
        MenuStock,
        Stockalert,
        MenuClinic,
        MenuMedical,
        Receptorder,
        viewRecept,
        unitcode,
        StockTransection,
        Currency,
        ExchangeRate,
        StockCount,
        paymenMethod,
        paymen,
        paymenview,
        prescriptions,
        convertoInvoine,
        Laboratory,
        test,
        addTestLabo,
        Employee,
        patientRegister,
        viewPrescription,
        testserviceview,
        TestInvoice,
        viewlaboratory,
        detailshif,
        saledetail,
        calendar,
    },
});
Alpine.start();
app.provide("headingMain", window.value);
app.use(router, axios, Vue2Filters, VueSweetalert2, VueHtmlToPaper,print);
app.mount("#app");
