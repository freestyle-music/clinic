<template >
  <div class="wrapper" style="overflow: hidden">
    <div class="container-fuild">
      <div id="headTitle">
        <div id="logo"><img alt="Healthbook" height="44" src="img/logo.png" width="70" _mstalt="155922" _msthash="1">
        </div>
        <h1 id="title" _msttexthash="48503" _msthash="2">Beginning Stock</h1>
      </div>
      <Header />
      <ol id="topicPath">
        <li style="margin-left:355px">
          <router-link to="menustock"><a href="dashbaord">
              <font style="vertical-align: inherit">
                <font style="vertical-align: inherit">Beginning Stock</font>
              </font>
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
              <a class="dropdown-item"> <i class="fas fa-save"></i> Booking</a>
            </li>
            <li>
              <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#staticboomId" tabindex="10028" href="#"><i
                  class="fa fa-print" aria-hidden="true"></i> Print</a>
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
              <li class="dropdown-item"  data-bs-toggle="modal" data-bs-target="#deleteconfirm" style="cursor: pointer;">
                Generate
              </li>

            </ul>
            <router-link to="/beginningstock"><a class="btn-radius btn btn-sm" href="#"
                style="color: #f8f5b4; margin-top: -2px">
                <i class="fas fa-eye" style="padding-right: 5px"> </i>
                View
              </a></router-link>
          </div>


          <div class="search-box-content  search-box02">
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="tbl_search">
              <tbody>
                <tr>
                  <th width="10%">Document Number</th>
                  <td width="50%">
                    <input :disabled="true" class="string_zen_kana clear_text text input_text" maxlength="50" size="50" type="text" v-model="form.document_no"/>
                  </td>
                </tr>
                <tr>
                  <th width="10%">Document Type</th>
                  <td width="50%">
                    <input class="string_zen_kana clear_text text input_text" maxlength="50" size="50" type="text" v-model="form.document_type"/>
                  </td>
                </tr>
                <tr>
                  <th width="10%">Description</th>
                  <td width="50%">
                    <input class="string_zen clear_text text input_text" size="50" type="text" v-model="form.description"/>
                  </td>
                </tr>
                <tr>
                  <th width="10%">Total Amount</th>
                  <td width="50%">
                    <input class="string_zen clear_text text input_text" size="50" type="text" v-model="form.total_amount"/>
                  </td>
                </tr>

                <tr>
                  <th width="10%">Curency Code</th>
                  <td width="50%">
                    <input class="string_zen clear_text text input_text" size="50" type="text" v-model="form.curency_code"/>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>

          <div class="search-box-footer">
            <div class="button type2" id="uniform-undefined"><span><input type="button" class="type2" tabindex="10025"
                  value="display" style="opacity: 0; width: 54px;"> Save</span></div>
            <div class="button type2" id="uniform-undefined"><span>Clear <input type="button" value="clear" class="type2"
                  style="opacity:0;width:63px;" tabindex="10026"></span></div>
            <div class="button type2" id="uniform-undefined"><span>CSV <input type="button" value="outputCSV output"
                  class="type2" style="opacity:0;width:76px;" tabindex="10027"></span></div><span class="marker"></span>
          </div>
        </div>

        <!-- =====Box====== -->
        <div class="box mt-4">
          <div class="box-content" id="excell">
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="tbl_list">
              <thead>
                <tr class="excellcolor-trhead">
                  <th class="excellcolor-trhead" style="width: 7%;">Document No</th>
                  <th class="excellcolor-trhead" style="width: 10%;">Document type</th>
                  <th class="excellcolor-trhead" style="width: 7%;">Product No</th>
                  <th class="excellcolor-trhead" style="width: 7%;">Description</th>
                  <th class="excellcolor-trhead" style="width: 7%;">Issu Date</th>
                  <th class="excellcolor-trhead" style="width: 7%;">Expire Date</th>
                  <th class="excellcolor-trhead" style="width: 7%;">Unit</th>
                  <th class="excellcolor-trhead" style="width: 7%;">Price</th>
                  <th class="excellcolor-trhead" style="width: 7%;">Qty</th>
                  <th class="excellcolor-trhead" style="width: 7%;">Amount</th>
                  <th class="excellcolor-trhead" style="width: 10%;">Currency</th>
                  <th class="excellcolor-trhead" style="width: 7%;"></th>
                </tr>
              </thead><!--v-if-->
            </table>
          </div>
        </div>



      </div>
    </div>
  </div>

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
                            <div class="button type2" data-bs-dismiss="modal" @click="CreateNew()"><span>Yes</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

  <Footer />
</template>
<script>
import readXlsxFile from 'read-excel-file';
import * as XLSX from 'xlsx/xlsx.mjs';
import Auth from '../../auth/Auth';
import moment from 'moment';
import Footer from '../footer.vue'
import axios from "axios";
import Header from "../Header.vue";
export default {
  components:
  {
    Header, Footer
  },
  data() {
    return {
      created_by : Auth.user.id,
      id : '',
      form : {
        id: "",
        document_no : '',
        document_type : '',
        description : '',
        total_amount : '',
        curency_code : '',
        inactived  : '',
        statue : '',
        created_by : '',
        updated_by : ''

      },
      BeginningStock : [],
      

    };
  },
  async mounted() {
    try{
      if (this.$route.query.id.trim() != "undefined") {
                this.id = this.$route.query.id;
                // this. = this.id
                this.form.document_no = this.id
            }
    }
    catch(error){
      console.log(error)
    }

    this.getBeginnning();

  },
  methods: {
    CreateNew(){
      this.form.created_by = Auth.user.id
      axios.post('/api/v1/beginingstock/create',this.form)
            .then(res => {
              this.BeginningStock = res.data[0]
              this.$router.push({
                        name: "createbeginnigstock",
                        query: { id: this.BeginningStock.document_no },
                    });

            })
    },
    getBeginnning(){

      if(this.form.document_no != ""){
        this.form.created_by = Auth.user.id
      axios.get('/api/v1/beginingstock/getbyno?document_no='+this.form.document_no+"&created_by="+this.form.created_by)
            .then(res => {
              this.form = res.data[0]
              console.log(this.form)
            })
    }
      },
  

    getcompany() {
      axios.get("/api/v1/getSetup/")
        .then((response) => {
          this.company = response.data;
          this.dateformart = moment(this.form.created_at).format('YYYY-MM-DD');
        });
    },

  }
}
</script>

  <script></script>