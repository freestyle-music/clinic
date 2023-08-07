import { createRouter, createWebHistory } from "vue-router";
import App from "../components/App.vue";
import Brands from "../components/Brands/Brands.vue";
import Product from "../components/Product/product.vue";
import Viewproduct from "../components/Product/view-product.vue";
import Category from "../components/Category/Category.vue";
import Supplies from "../components/Supplies/Supplies.vue";
import Group from "../components/Group/Product_group.vue";
import Serailcode from "../components/Serailcode/serailcode.vue";
import Purchase from "../components/Purchase/purchase-order.vue";
import Purchasview from "../components/Purchase/view-puchese.vue";
import MenuProductSetting from "../components/MenuProductsetup.vue";
import MenuPurchase from "../components/MenuPurchase.vue";
import MenuStock from "../components/MenuStock.vue";
import Stockalert from "../components/StockAlert/stockalert.vue";
import MenuClinic from "../components/MenuClinic.vue";
import MenuMedical from "../components/MenuMedical.vue";
import Receptorder from "../components/Recept/Recept-order.vue";
import viewRecept from "../components/Recept/view-Recept.vue";
import unitcode from "../components/unitcode/unitcode.vue";
import StockTransection from "../components/StockTransection/stock-transection.vue";
import Currency from "../components/Currency/currency.vue";
import ExchangeRate from "../components/ExchangeRate/ExchangeRate.vue";
import StockCount from "../components/StockCount/stock-count.vue";
import Viewstockcount from "../components/StockCount/view-stock-count.vue";
import paymenMethod from "../components/PaymentMethod/paymenMethod.vue";
import paymenview from "../components/Payment/paymen_view.vue";
import paymen from "../components/Payment/paymen.vue";
import login from "../components/login/login.vue";
import prescriptions from "../components/Prescriptions/prescriptions.vue";
import Consultation from "../components/Consultation/consultation.vue";
import convertoInvoine from "../components/Prescriptions/convertoInvoine.vue";
import Laboratory from "../components/Laboratory/Laboratory.vue";
import test from '../components/Laboratory/Test.vue';
import addTestLabo from "../components/Laboratory/AddTestLabo.vue";
import patientRegister from '../components/Register/patientRegister.vue';
import testserviceview from '../components/Laboratory/TestServiceView.vue'
import TestInvoice from '../components/TestInvoice/testinvoice.vue';
import viewlaboratory from "../components/Laboratory/Viewlaboratory.vue";
import Employee from "../components/Employee/employee.vue"
import viewPrescription from  '../components/viewPrescription/Viewprescription.vue';
import detailshif from '../components/Detailcloseshif/detailshif.vue';
import saledetail from '../components/Saledetail/saledetail.vue';
import company from "../components/Company/company.vue";
import BeginningStock from "../components/StockBeginnig/BeginningStock.vue"
import StockOnHand from "../components/StockOnHand/StockOnHand.vue"
import createbeginingstock from "../components/StockBeginnig/CreateBeginningStock.vue";
import calendar from "../components/Calendar/calendar";
import calendarView from "../components/Calendar/calendarView.vue";

const routes = [
    { path: "/dashboard", component: App, name: "App" },
    { path: "/brands", component: Brands },
    { path: "/Product", component: Product, name: "Product" },
    { path: "/viewproduct", component: Viewproduct },
    { path: "/category", component: Category },
    { path: "/supplies", component: Supplies },
    { path: "/group", component: Group },
    { path: "/serailcode", component: Serailcode },
    { path: "/purchase", component: Purchase, name: "Purchase" },
    { path: "/Purchasview", component: Purchasview },
    { path: "/productsetting", component: MenuProductSetting },
    { path: "/menupurchase", component: MenuPurchase },
    { path: "/menustock", component: MenuStock },
    { path: "/stockalert", component: Stockalert },
    { path: "/menuclinic", component: MenuClinic },
    { path: "/menumedical", component: MenuMedical },
    { path: "/receptorder", component: Receptorder, name: "recept" },
    { path: "/viewrecept", component: viewRecept },
    { path: "/unitcode", component: unitcode },
    { path: "/stocktransection", component: StockTransection },
    { path: "/exchangerate", component: Currency },
    { path: "/stockcount", component: StockCount, name: "stockcount" },
    { path: "/viewstockcount", component: Viewstockcount },
    { path: "/paymenMethod", component: paymenMethod },
    { path: "/paymen", component: paymen, name: "paymen" },
    { path: "/paymenview", component: paymenview },
    { path: "/", component: login, name: "login" },
    { path: "/consultation", component: Consultation, name: "consultation" },
    { path: "/prescriptions", component: prescriptions, name: "prescriptions" },
    {
        path: "/convertoinvoine",
        component: convertoInvoine,
        name: "convertoinvoine",
    },
    { path: "/laboratory", component: Laboratory, name: "laboratory" },
    { path: "/testitem", component: test, name: "test" },
    { path: "/addtestlabo", component: addTestLabo, name: "addtestlabo" },
    { path: "/employee", component: Employee, name: "employee" },
    {
        path: "/patientRegister",
        component: patientRegister,
        name: "patientRegister",
    },
    {
        path: "/viewPrescription",
        component: viewPrescription,
        name: "Viewprescription",
    },
    {
        path: "/testserviceview",
        component: testserviceview,
        name: "Testserviceview",
    },
    { path: "/testinvoice", component: TestInvoice, name: "testinvoice" },
    {
        path: "/viewlaboratory",
        component: viewlaboratory,
        name: "Viewlaboratory",
    },
    { path: "/detailshif", component: detailshif, name: "detailshif" },
    { path: "/saledetail", component: saledetail, name: "saledetail" },
    { path: "/company", component: company, name: "company" },
    {path: '/beginningstock', component : BeginningStock, name : 'beginningstock'},
    {path: '/stockonhand', component: StockOnHand, name : 'stockonhand'},
    {path: "/creatbeginnigstock", component: createbeginingstock, name: 'createbeginnigstock'},
    {path: "/calendar", component: calendar, name: 'calendar'},
    {path: "/calendarView", component: calendarView, name: 'calendarView'},
    {path: "/calendarView/:dayDate/:month", component: calendarView, name: 'calendarView'},
    
];
export default createRouter({
    mode: "history",
    history: createWebHistory(),
    routes: routes,
});