<template>
  <div class="wrapper">
    <div class="container-fuild">
      <div id="headTitle">
        <Logo />
        <h1 id="title" _msttexthash="48503" _msthash="2">Payment-Method</h1>
      </div>
      <Header />
      <ol id="topicPath">
        <li>
          <router-link to="productsetting">
            <a href="dashbaord">
              <font style="vertical-align: inherit">
                <font style="vertical-align: inherit"> Payment-Method </font>
              </font>
            </a>
          </router-link>
        </li>
      </ol>
    </div>
    <div class="search-box">
      <div id="product">
        <div class="search-box mb-4">
          <a class="btn-radius bt-pn btn btn-sm" data-bs-toggle="dropdown" aria-expanded="false"
            style="float: right; color: #f8f5b4">
            <i class="fas fa-plus" style="padding-right: 5px"> </i>
            Menu
          </a>
          <ul class="dropdown-menu">
            <li>
              <a @click="getsuppliyerview()" class="dropdown-item btn btn-primary" data-bs-toggle="modal"
                data-bs-target="#staticboomId" tabindex="10028"><i class="fa fa-print" aria-hidden="true"></i> Print</a>
            </li>
            <li>
              <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#staticBackdropss" tabindex="10028"
                href="#"><i class="fas fa-file-excel"></i> To Excel</a>
            </li>
            <li>
              <a class="dropdown-item btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdropss"
                tabindex="10028"><i class="fas fa-edit"></i> Release</a>
            </li>
          </ul>
          <div class="search-box-title" style="padding-left: 35px">
            <router-link to="Brands">
              <a class="btn-radius btn btn-sm" href="#" style="color: #f8f5b4; margin-top: -2px; color: #dbdee1">
                <i class="fa fa-cog" aria-hidden="true"></i>
                Brand
              </a>
            </router-link>
            <router-link to="Supplies">
              <a class="btn-radius btn btn-sm" href="#" style="color: #f8f5b4; margin-top: -2px; color: #dbdee1">
                <i class="fa fa-cog" aria-hidden="true"></i>
                Suppliyer
              </a>
            </router-link>
            <router-link to="Group">
              <a class="btn-radius btn btn-sm" href="#" style="color: #f8f5b4; margin-top: -2px; color: #dbdee1">
                <i class="fa fa-cog" aria-hidden="true"></i>
                Group
              </a>
            </router-link>
            <router-link to="unitcode">
              <a class="btn-radius btn btn-sm" href="#" style="color: #f8f5b4; margin-top: -2px; color: #dbdee1">
                <i class="fa fa-cog" aria-hidden="true"></i>
                Unitcode
              </a>
            </router-link>
            <router-link to="exchangerate">
              <a class="btn-radius btn btn-sm" href="#" style="color: #f8f5b4; margin-top: -2px; color: #dbdee1">
                <i class="fa fa-cog" aria-hidden="true"></i>
                Exchangerate
              </a>
            </router-link>
            <router-link to="category">
              <a class="btn-radius btn btn-sm" href="#" style="color: #f8f5b4; margin-top: -2px; color: #dbdee1">
                <i class="fa fa-cog" aria-hidden="true"></i>
                Category
              </a>
            </router-link>
            <router-link to="serailcode">
              <a class="btn-radius btn btn-sm" href="#" style="color: #f8f5b4; margin-top: -2px; color: #dbdee1">
                <i class="fa fa-cog" aria-hidden="true"></i>
                SerailCode
              </a>
            </router-link>
            <router-link to="testserviceview">
              <a class="btn-radius btn btn-sm" href="#" style="color: #f8f5b4; margin-top: -2px; color: #dbdee1">
                <i class="fa fa-cog" aria-hidden="true"></i>
                ServiceTest
              </a>
            </router-link>
            <router-link to="company">
              <a class="btn-radius btn btn-sm" href="#" style="color: #f8f5b4; margin-top: -2px; color: #dbdee1">
                <i class="fa fa-cog" aria-hidden="true"></i>
                Company
              </a>
            </router-link>
          </div>
          <input id="search" name="search" type="hidden" value="1" />
          <div class="search-box-content">
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="tbl_search" id="hover-table">
              <tbody>
                <tr>
                  <th width="10%">Paymentmethod</th>
                  <td width="90%">
                    <input style="width: 359px;" class="string_zen_kana clear_text text" id="brand_name_2" maxlength="50" name="paymentmethod"
                      v-model="form.paymentmethod" type="text" tabindex="10001" />
                  </td>
                </tr>
                <tr>
                  <th width="15%">Description</th>
                  <td width="90%">
                    <input style="width: 359px;" class="string_zen_kana clear_text text" id="brand_name_2" maxlength="50" name="description"
                      v-model="form.description" type="text" tabindex="10001" />
                  </td>
                </tr>
                <tr>
                  <th width="10%">Inactived</th>
                  <td width="90%">
                    <div class="selector" id="inactivced">
                      <span>{{ form.inactived }}</span>
                      <select id="inactivced" name="inactivced" v-model="form.inactived" tabindex="10003"
                        style="min-width: 51px; opacity: 0; width: 80px; outline: none">
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                      </select>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
            <div class="search-box-footer">
              <div v-if="btnback == true" @click="btnBack()" class="button type2" id="uniform-undefined">
                <span><i class="fa fa-arrow-left" aria-hidden="true" style="margin-right: 7px"></i>Back</span>
                <input type="button" value="save" class="type2" style="opacity: 0; width: 63px" tabindex="10026" />
              </div>
              <div class="button type2" id="uniform-undefined">
                <span><i class="fa fa-search" aria-hidden="true" style="margin-right: 7px"></i>Search</span>
                <input type="button" value="save" class="type2" style="opacity: 0; width: 63px" tabindex="10026" />
              </div>
              <div class="button type2" id="uniform-undefined" @click="save()">
                <span><i class="fas fa-file-import" style="margin-right: 7px"></i>{{ btncheckEdit }}</span>
                <input type="button" value="clear" class="type2" style="opacity: 0; width: 63px" tabindex="10026" />
              </div>
              <span class="marker"></span>
            </div>
          </div>
        </div>

        <div class="box">
          <table width="100%" border="0" cellpadding="0" cellspacing="0" class="table table-striped br-table">
            <thead>
              <tr class="header-table">
                <th width="3%">No</th>
                <th width="15%">Paymentmethod</th>
                <th width="20%%">Description</th>
                <th width="10%">Inactived</th>
                <th width="20%"></th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="(item, index) in items.data" :key="index">
                <td width="3%">{{ index + 1 }}</td>
                <td width="13%">{{ item.paymentmethod }}</td>
                <td width="13%">{{ item.description }}</td>
                <td width="6%">{{ item.inactived }}</td>
                <td width="20%" class="text-center">
                  <div class="button" id="uniform-undefined">
                    <span><i class="fa fa-edit"></i>Select<input type="button"
                        @click="checkActionForm('Update', 'Update', 'Close', item)" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop" tabindex="10028" style="opacity: 0; width: 76px" /></span>
                  </div>
                  <div class="button" id="uniform-undefined">
                    <span><i class="fa fa-trash"></i>Delete<input type="button" @click="dalete(item.id)" tabindex="10028"
                        style="opacity: 0; width: 76px" /></span>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
          <div class="box-footer-pagination">
            <pagination :data="items" @pagination-change-page="getBrands" />
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
          <h5 class="modal-title in-header" id="staticBackdropLabel">
            <i class="fa fa-print" aria-hidden="true"></i> Print
          </h5>
          <span class="ui-icon ui-icon-closethick" data-bs-dismiss="modal" aria-label="Close"></span>
        </div>
        <div class="ui-dialog-content" id="purchaseorder">
          <div class="card">
            <div class="card-body">
              <div class="mt-3 print-size">
                <div style="padding: 0 50px">
                  <div class="col-md-12">
                    <div class="text-center">
                      <h3 class="title-purchase">PAYMENT METHOD</h3>
                    </div>
                  </div>
                  <div class="col-container">
                    <div class="col1">
                      <p class="p-bg font-size p-pad">COMPANY NAME</p>
                      <p class="p-mg info-pad">Name : {{ company.company_name }}</p>
                      <p class="p-mg info-pad">
                        Phone Number : {{ company.company_Phone }}
                      </p>
                      <p class="p-mg info-pad">
                        Email Address : {{ company.company_Email }}
                      </p>
                      <p class="p-mg info-pad">Address : {{ company.company_Address }}</p>
                    </div>
                    <div class="col2">
                      <p class="text-center p-bg font-size p-pad">DATE</p>
                      <p class="text-center p-mg">{{ dateformart }}</p>
                      <p class="text-center p-bg font-size p-pad">TOTAL BRAND</p>
                      <p class="text-center p-mg">{{ items.total }}</p>
                    </div>
                  </div>
                  <div class="my-2 justify-content-center">
                    <table id="pr-tb">
                      <thead>
                        <tr class="p-bg">
                          <th class="text-center" style="width: 60px">No</th>
                          <th class="text-center">Paymentmethod</th>
                          <th class="text-center">Description</th>
                          <th class="text-center">Inactived</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr v-for="(item, index) in items.data" :key="index">
                          <td>{{ index + 1 + "." }}</td>
                          <td>{{ item.paymentmethod }}</td>
                          <td>{{ item.description }}</td>
                          <td>{{ item.inactived }}</td>
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
          <a v-print="'#purchaseorder'" class="btn-purchase btn-light text-capitalize border-0" data-mdb-ripple-color="dark" ><i
              class="fas fa-print text-primary"></i> Print</a>
        </div>
      </div>
    </div>
  </div>
  <Footer />
</template>
<script>
import Header from "../Header.vue";
import pagination from "laravel-vue-pagination";
import moment from "moment";
import Logo from "../logo.vue"
import axios from "axios";
import print from 'vue3-print-nb'
import Auth from "../../auth/Auth";
import Footer from "../footer.vue";
export default {
  components: { pagination, Header, Footer,Logo },
  directives:{
    print
  },
  data() {
    return {
      issave: "",
      bt1: "",
      bt2: "",
      company: [],
      dateformart: " ",
      items: [],
      links: [],
      products: [],
      perPage: "",
      checktext: false,
      currentPage: 0,
      last_page: 1,
      btnback: false,
      btncheckEdit: "Save",
      form: {
        id: "",
        paymentmethod: "",
        description: "",
        inactived: "",
        created_by: '',
        updated_by: '',
        statue: "",
      },
    };
  },
  mounted() {
    this.getBrands();
    this.getcompany();
  },
  methods: {
    getBrands(page = 1) {
      axios.get("/api/v1/payment/index?page=" + page)
        .then((data) => {
          this.items = data.data;
          console.log("this is get payment method")
          console.log(this.items.data)
        });
    },
    getcompany() {
      axios.get("/api/v1/getSetup/").then((response) => {
        this.company = response.data;
        this.dateformart = moment(new Date()).format("YYYY-MM-DD");
      });
    },
    save() {
      if (this.btncheckEdit == "Save") {
        this.form.created_by = Auth.user.id
        axios.post("/api/v1/payment/create/", this.form).then(() => {
          this.getBrands();
        });
      } else {
        this.form.updated_by = Auth.user.id
        axios.post("/api/v1/payment/update/" + this.form.id, this.form).then((res) => {
          this.btnback = false;
          this.getBrands();
        });
      }
      this.clear();
      this.btncheckEdit = "Save";
    },
    edit(test) {
      this.form = test;
    },
    clear() {
      this.form = [];
    },
    dalete(brand) {
      axios.get("api/v1/payment/destroy/" + brand).then((res) => {
        this.form = res.data;
        this.getBrands(1);
      });
    },
    checkActionForm(checkform, bt1, bt2, brandId) {
      this.checktext = false;
      this.form = [];
      this.btncheckEdit = "Update";
      this.btnback = true;
      // this.btnBack();
      if (checkform == "save") {
        this.bt1 = bt1;
        this.bt2 = bt2;
        this.issave = "save";
      } else {
        this.bt1 = bt1;
        this.bt2 = bt2;
        this.edit(brandId);
        this.issave = brandId;
        this.checktext = true;
      }
    },
    btnBack() {
      this.form = {};
      this.btncheckEdit = "Save";
      this.btnback = false;
      this.isDisabled = true;
    },
    serchdata() {
      axios.post("api/v1/brands/search").then((res) => {
        console.log(res.data);
      });
    },
    print() {
      var printContents = document.getElementById("purchaseorder").innerHTML;
      var mywindow;
      mywindow = window.open("", "mydiv", "height=800,width=1200,scrollbars=yes", "");
      mywindow.document.write("<html><head><title>my div</title>");
      mywindow.document.write('<link rel="stylesheet" href="css/style.css">');
      mywindow.document.write('<link rel="stylesheet" href="css/app.css">');
      mywindow.document.write('<link rel="stylesheet" href="css/pstyle.css">');
      mywindow.document.write("</head><body>");
      mywindow.document.write(printContents);
      mywindow.document.write("</body> </html>");
      setTimeout(() => {
        mywindow.document.close();
        mywindow.focus();
        mywindow.print();
        setTimeout(function () {
          window.close();
        }, 1);
        cb();
      }, 1000);
    },
  },
};
</script>
