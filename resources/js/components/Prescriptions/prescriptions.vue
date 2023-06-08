<template>
    <div class="wrapper">
        <div class="container-fuild">
            <div id="headTitle">
                <div id="logo">
                    <img alt="Healthbook" height="44" src="img/logo.png" width="70" mstalt="155922" _msthash="1" />
                </div>
                <h1 id="title" _msttexthash="48503" _msthash="2">
                    Prescription
                </h1>
            </div>
        </div>
        <div class="container-fuild">
            <Header />
            <ol id="topicPath">
                <li style="margin-left: 315px">
                    <router-link to="">
                        <a href="dashbaord">
                            <font style="vertical-align: inherit"></font>
                            <font style="vertical-align: inherit">
                                Prescription
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
                        <a class="btn-radius bt-pn btn btn-sm" style="float:right;color: #ffbf00 !important;"
                            data-bs-toggle="modal" aria-expanded="false" data-bs-target="#alertbell">
                            <i class="fas fa-bell" style="font-size:18px; margin-right: 5px;"></i>
                            {{ labo }}
                        </a>
                        <a class="btn-radius bt-pn btn btn-sm" style="float:right;color: #ffbf00 !important;"
                            data-bs-toggle="modal" aria-expanded="false" data-bs-target="#Appointment">
                            <i class="fas fa-bell" style="font-size:18px; margin-right: 5px;"></i>
                            Appointment
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a @click="getsuppliyerview()" class="dropdown-item btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#prolabo" tabindex="10028"><i class="fa fa-print"
                                        aria-hidden="true"></i> Print</a>
                            </li>
                            <li>
                                <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#staticBackdropss"
                                    tabindex="10028" href="#"><i class="fas fa-file-excel"></i> To Excel</a>
                            </li>
                            <li>
                                <a class="dropdown-item btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#staticboomId" tabindex="10028"><i class="fas fa-edit"></i>
                                    To Labo</a>
                                <a class="dropdown-item btn btn-primary" data-bs-toggle="modal" data-bs-target="#prolabo"
                                    tabindex="10028"><i class="fas fa-edit"></i>
                                    Pro Labo</a>
                            </li>
                        </ul>
                        <div class="search-box-title">
                            <router-link to="patientRegister">
                                <a class="btn-radius btn btn-sm" href="#"
                                    style="color: #f8f5b4; margin-top: -3px; color: #dbdee1">
                                    <i class="fa fa-id-card"> </i>
                                    Register Patient
                                </a>
                            </router-link>
                            <router-link to="Viewprescription">
                                <a class="btn-radius btn btn-sm" href="#"
                                    style="color: #f8f5b4; margin-top: -3px; color: #dbdee1">
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
                                                :disabled="true" tabindex="10000" v-model="form.preid">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th width="15%">Patient's ID</th>
                                        <td width="90%" colspan="3">
                                            <input class="string_zen_kana clear_text text" name="PrefixCode" size="20"
                                                :disabled="true" type="text" tabindex="10001" v-model="form.pateinid">
                                            Patient's Name
                                            <input :disabled="true" class="string_zen_kana clear_text text"
                                                name="PrefixCode" size="30" type="text" tabindex="10001" v-model="fullname">
                                            Sex
                                            <input :disabled="true" class="string_zen_kana clear_text text"
                                                name="PrefixCode" size="10" type="text" tabindex="10001" v-model="form.sex">
                                            Age
                                            <input :disabled="true" class="string_zen_kana clear_text text"
                                                name="PrefixCode" size="10" type="text" tabindex="10001" v-model="form.age">
                                            BirthDate
                                            <input :disabled="true" class="string_zen_kana clear_text text" name="QtyCode"
                                                size="50" type="date" tabindex="10001" v-model="form.birstdate">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th width="15%">Medical history</th>
                                        <td width="90%">
                                            <textarea class="string_zen_kana clear_text text" type="text" tabindex="10015"
                                                rows="1" style="width: 36%; outline: none;color: #777;"
                                                v-model="form.history_disease" @change="updateRegister()"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th width="15%">Allergies</th>
                                        <td width="90%">
                                            <textarea class="string_zen_kana clear_text text" type="text" tabindex="10015"
                                                rows="1" style="width: 36%; outline: none;color: #777;"
                                                v-model="form.allergies" @change="updateRegister()"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th width="15%">Visit Date</th>
                                        <td width="90%">
                                            <input class="string_zen_kana clear_text text" name="QtyCode" size="50"
                                                type="datetime-local" tabindex="10001" v-model="form.visit_date"
                                                @change="updatePrescription()">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th width="15%">Test Type</th>
                                        <td width="90%">
                                            <div class="dropdown d-flex">
                                                <button :disabled="true" @click="getunit(form)" @onmouseout="prooductboom()"
                                                    class="dropdown-toggle string_zen clear_text text select-menu"
                                                    type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                    aria-expanded="false" size="50" style="color:#777;">
                                                    {{ gen }}
                                                    <i class="fa fa-chevron-down"></i>
                                                </button>
                                                <div :disabled="true" class="dropdown-menu each-drop-menu"
                                                    aria-labelledby="dropdownMenuButton1">
                                                    <ul style="list-style: none" class="scrollable-menu">
                                                        <li @click="getsex('man')" @change="updatePrescription()">
                                                            <div class="menu-item">
                                                                <p>Man</p>
                                                            </div>
                                                        </li>
                                                        <li @click="getsex('woman')" @change="updatePrescription()">
                                                            <div class="menu-item">
                                                                <p>Woman</p>
                                                            </div>
                                                        </li>
                                                        <li @click="getsex('children')" @change="updatePrescription()">
                                                            <div class="menu-item">
                                                                <p>Children</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th width="10%">Vital sign</th>
                                        <td width="90%">
                                            Width
                                            <input style="width: 7%;" class="string_zen_kana clear_text text" name="QtyCode"
                                                size="20" type="number" tabindex="10001" v-model="form.width"
                                                @change="updatePrescription()">
                                            Height
                                            <input style="width: 7%;" class="string_zen_kana clear_text text" name="QtyCode"
                                                size="20" type="number" tabindex="10001" v-model="form.height"
                                                @change="updatePrescription()">
                                            Bp
                                            <input style="width: 7%;" class="string_zen_kana clear_text text" name="QtyCode"
                                                size="20" type="number" tabindex="10001" v-model="form.bp"
                                                @change="updatePrescription()">
                                            Pr
                                            <input style="width: 7%;" class="string_zen_kana clear_text text" name="QtyCode"
                                                size="20" type="number" tabindex="10001" v-model="form.pr"
                                                @change="updatePrescription()">
                                            RR
                                            <input style="width: 7%;" class="string_zen_kana clear_text text" name="QtyCode"
                                                size="20" type="number" tabindex="10001" v-model="form.rr"
                                                @change="updatePrescription()">
                                            Spo2
                                            <input style="width: 7%;" class="string_zen_kana clear_text text" name="QtyCode"
                                                size="20" type="number" tabindex="10001" v-model="form.spo2"
                                                @change="updatePrescription()">
                                            T
                                            <input style="width: 7%;" class="string_zen_kana clear_text text" name="QtyCode"
                                                size="20" type="number" tabindex="10001" v-model="form.t"
                                                @change="updatePrescription()">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th width="15%">Appointment Date</th>
                                        <td width="90%">
                                            <input class="string_zen_kana clear_text text" name="QtyCode" size="50"
                                                type="datetime-local" tabindex="10001" v-model="form.appointment_date"
                                                @change="updatePrescription()">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th width="15%">Remark</th>
                                        <td width="90%">
                                            <textarea class="string_zen_kana clear_text text" type="text" tabindex="10015"
                                                rows="1" style="width: 36%; outline: none; color: #777;"
                                                v-model="form.remark" @change="updatePrescription()"></textarea>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="search-box-footer">
                                <div class="button type2" id="uniform-undefined">
                                    <span>Submit to labo</span>
                                    <input type="button" value="save" class="type2" @click="save()"
                                        style="opacity: 0; width: 63px" tabindex="10026" />
                                </div>
                                <div class="button type2" id="uniform-undefined" data-bs-toggle="modal"
                                    data-bs-target="#payment">
                                    <span>Payment</span>
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
                            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="tbl_list tbl_stripe">
                                <thead>
                                    <tr>
                                        <th>Rescription ID</th>
                                        <th>Product No</th>
                                        <th>Number Phone</th>
                                        <th>Product Type</th>
                                        <th>Description</th>
                                        <th>Price</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th style="padding: 10px;"><input class="clear_text code text" id="jusinsya_code"
                                                name="jusinsya_code" type="text" tabindex="10008" style="width: 100%;"></th>
                                        <th style="padding: 10px;"><input class="clear_text code text" id="jusinsya_code"
                                                name="jusinsya_code" type="text" tabindex="10008" style="width: 100%;"></th>
                                        <th style="padding: 10px;"><input class="clear_text code text" id="jusinsya_code"
                                                name="jusinsya_code" type="text" tabindex="10008" style="width: 100%;"></th>
                                        <th style="padding: 10px;"><input class="clear_text code text" id="jusinsya_code"
                                                name="jusinsya_code" type="text" tabindex="10008" style="width: 100%;"></th>
                                        <th style="padding: 10px;"><input class="clear_text code text" id="jusinsya_code"
                                                name="jusinsya_code" type="text" tabindex="10008" style="width: 100%;"></th>
                                        <th style="padding: 10px;"><input class="clear_text code text" id="jusinsya_code"
                                                name="jusinsya_code" type="text" tabindex="10008" style="width: 100%;"></th>
                                        <th style="padding: 10px; display: flex; justify-content: center;">
                                            <div @click="btn_checkEdit(reg)" class="button type2"
                                                style="display: flex; justify-content: center;">
                                                <span><input type="button" value="display" class="type2"
                                                        style="opacity: 0; width: 54px" tabindex="10025" /><i
                                                        class="fa fa-trash" aria-hidden="true"></i>Delete</span>
                                            </div>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th style="padding: 10px;"><input class="clear_text code text" id="jusinsya_code"
                                                name="jusinsya_code" type="text" tabindex="10008" style="width: 100%;"></th>
                                        <th style="padding: 10px;"><input class="clear_text code text" id="jusinsya_code"
                                                name="jusinsya_code" type="text" tabindex="10008" style="width: 100%;"></th>
                                        <th style="padding: 10px;"><input class="clear_text code text" id="jusinsya_code"
                                                name="jusinsya_code" type="text" tabindex="10008" style="width: 100%;"></th>
                                        <th style="padding: 10px;"><input class="clear_text code text" id="jusinsya_code"
                                                name="jusinsya_code" type="text" tabindex="10008" style="width: 100%;"></th>
                                        <th style="padding: 10px;"><input class="clear_text code text" id="jusinsya_code"
                                                name="jusinsya_code" type="text" tabindex="10008" style="width: 100%;"></th>
                                        <th style="padding: 10px;"><input class="clear_text code text" id="jusinsya_code"
                                                name="jusinsya_code" type="text" tabindex="10008" style="width: 100%;"></th>
                                        <th style="padding: 10px; display: flex; justify-content: center;">
                                            <div @click="btn_checkEdit(reg)" class="button type2"
                                                style="display: flex; justify-content: center;">
                                                <span><input type="button" value="display" class="type2"
                                                        style="opacity: 0; width: 54px" tabindex="10025" /><i
                                                        class="fa fa-trash" aria-hidden="true"></i>Delete</span>
                                            </div>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th style="padding: 10px;"><input class="clear_text code text" id="jusinsya_code"
                                                name="jusinsya_code" type="text" tabindex="10008" style="width: 100%;"></th>
                                        <th style="padding: 10px;"><input class="clear_text code text" id="jusinsya_code"
                                                name="jusinsya_code" type="text" tabindex="10008" style="width: 100%;"></th>
                                        <th style="padding: 10px;"><input class="clear_text code text" id="jusinsya_code"
                                                name="jusinsya_code" type="text" tabindex="10008" style="width: 100%;"></th>
                                        <th style="padding: 10px;"><input class="clear_text code text" id="jusinsya_code"
                                                name="jusinsya_code" type="text" tabindex="10008" style="width: 100%;"></th>
                                        <th style="padding: 10px;"><input class="clear_text code text" id="jusinsya_code"
                                                name="jusinsya_code" type="text" tabindex="10008" style="width: 100%;"></th>
                                        <th style="padding: 10px;"><input class="clear_text code text" id="jusinsya_code"
                                                name="jusinsya_code" type="text" tabindex="10008" style="width: 100%;"></th>
                                        <th style="padding: 10px; display: flex; justify-content: center;">
                                            <div @click="btn_checkEdit(reg)" class="button type2"
                                                style="display: flex; justify-content: center;">
                                                <span><input type="button" value="display" class="type2"
                                                        style="opacity: 0; width: 54px" tabindex="10025" /><i
                                                        class="fa fa-trash" aria-hidden="true"></i>Delete</span>
                                            </div>
                                        </th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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
    <!-- Modal -->
    <div class="modal fade ui-modal" id="staticboomId" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticboomId" aria-hidden="true">
        <div class="modal-dialog " style="max-width: 200vh !important;">
            <div class="modal-content ui-dialog">
                <div class="ui-widget-header">
                    <p style="font-size: 20px;">Service Test</p>
                    <span class="ui-icon ui-icon-closethick" data-bs-dismiss="modal" aria-label="Close"></span>
                </div>
                <div class="serH">
                    <ul style="display: flex;">
                        <li>
                            <p class="rep">Repid test(lab Basic)</p>
                        </li>
                        <li>
                            <input class="string_zen clear_text text" id="search_word_simei_s ser-2"
                                name="search_word[simei_s]" type="text" tabindex="10017"
                                style="margin-left: 0 !important; margin-right: 0;">
                        </li>
                        <li>
                            <p class="rep">Laboratory Advance</p>
                        </li>
                        <li>
                            <input class="string_zen clear_text text" id="search_word_simei_s ser-2"
                                name="search_word[simei_s]" type="text" tabindex="10017"
                                style="margin-left: 0 !important; margin-right: 0;">
                        </li>
                    </ul>
                </div>
                <div class="ui-dialog-content" id="ser">
                    <div class="col-4 ser-1">
                        <div class="ser-2">
                            <ul>
                                <li class="form">
                                <li id="rol" class="role" style="border-bottom:0.5px solid #ccc; margin-right: 10px; ">
                                    <input type="checkbox" name="show1" id="show1" @click="checkBox(1)">
                                    <label for="show1" class="label">Chlamydia female repid card (AG)
                                        reyerdfgdshrj</label>
                                </li>
                                <li id="rol" class="select-box">
                                    <select name="" id="" style="width: 100%;">
                                        <option value="0"></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                    <div class="role-1">
                                        <input class="string_zen clear_text text" id="search_word_simei_s ser-2"
                                            name="search_word[simei_s]" type="text" tabindex="10017" :disabled="true"
                                            style="width:45%;margin-left: 0 !important; margin-right: 0;">
                                        <input class="string_zen clear_text text" id="search_word_simei_s ser-2"
                                            name="search_word[simei_s]" type="text" tabindex="10017" :disabled="true"
                                            style="width:55%;margin-left: 0 !important; margin-right: 0;">
                                    </div>
                                </li>
                                </li>
                                <li class="form form-1">
                                    <p style="width: 30%;" id="name1">Koe kalianny</p>
                                </li>
                            </ul>
                            <ul>
                                <li class="form">
                                <li id="rol" class="role" style="border-bottom:0.5px solid #ccc; margin-right: 10px;">
                                    <input type="checkbox" name="show2" id="show2" @click="checkBox(2)">
                                    <label for="show2" class="label">Chlamydia male repid card (AG)
                                        tiogdgdvvssfsgd</label>
                                </li>
                                <li id="rol" class="select-box">
                                    <select name="" id="" style="width: 100%;">
                                        <option value="0"></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                    <div class="role-1">
                                        <input class="string_zen clear_text text" id="search_word_simei_s ser-2"
                                            name="search_word[simei_s]" type="text" tabindex="10017" :disabled="true"
                                            style="width:45%;margin-left: 0 !important; margin-right: 0;">
                                        <input class="string_zen clear_text text" id="search_word_simei_s ser-2"
                                            name="search_word[simei_s]" type="text" tabindex="10017" :disabled="true"
                                            style="width:55%;margin-left: 0 !important; margin-right: 0;">
                                    </div>
                                </li>
                                </li>
                                <li class="form form-1">
                                    <p style="width: 30%;" id="name2">Orn Chamrong1</p>
                                </li>
                            </ul>
                            <ul>
                                <li class="form">
                                <li id="rol" class="role" style="border-bottom:0.5px solid #ccc; margin-right: 10px;">
                                    <input type="checkbox" name="show3" id="show3" @click="checkBox(3)">
                                    <label for="show3" class="label">COVID-19 Antigen</label>
                                </li>
                                <li id="rol" class="select-box">
                                    <select name="" id="" style="width: 100%;">
                                        <option value="0"></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                    <div class="role-1">
                                        <input class="string_zen clear_text text" id="search_word_simei_s ser-2"
                                            name="search_word[simei_s]" type="text" tabindex="10017" :disabled="true"
                                            style="width:45%;margin-left: 0 !important; margin-right: 0;">
                                        <input class="string_zen clear_text text" id="search_word_simei_s ser-2"
                                            name="search_word[simei_s]" type="text" tabindex="10017" :disabled="true"
                                            style="width:55%;margin-left: 0 !important; margin-right: 0;">
                                    </div>
                                </li>
                                </li>
                                <li class="form form-1">
                                    <p style="width: 30%;" id="name3">Orn Chamrong2</p>
                                </li>
                            </ul>
                            <ul>
                                <li class="form">
                                <li id="rol" class="role" style="border-bottom:0.5px solid #ccc; margin-right: 10px;">
                                    <input type="checkbox" name="show4" id="show4" @click="checkBox(4)">
                                    <label for="show4" class="label">Fasting blood sugar</label>
                                </li>
                                <li id="rol" class="select-box">
                                    <select name="" id="" style="width: 100%;">
                                        <option value="0"></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                    <div class="role-1">
                                        <input class="string_zen clear_text text" id="search_word_simei_s ser-2"
                                            name="search_word[simei_s]" type="text" tabindex="10017" :disabled="true"
                                            style="width:45%;margin-left: 0 !important; margin-right: 0;">
                                        <input class="string_zen clear_text text" id="search_word_simei_s ser-2"
                                            name="search_word[simei_s]" type="text" tabindex="10017" :disabled="true"
                                            style="width:55%;margin-left: 0 !important; margin-right: 0;">
                                    </div>
                                </li>
                                </li>
                                <li class="form form-1">
                                    <p style="width: 30%;" id="name4">Orn Chamrong3</p>
                                </li>
                            </ul>
                            <ul>
                                <li class="form">
                                <li id="rol" class="role" style="border-bottom:0.5px solid #ccc; margin-right: 10px;">
                                    <input type="checkbox" name="show5" id="show5" @click="checkBox(5)">
                                    <label for="show5" class="label">Glucose test (random)</label>
                                </li>
                                <li id="rol" class="select-box">
                                    <select name="" id="" style="width: 100%;">
                                        <option value="0"></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                    <div class="role-1">
                                        <input class="string_zen clear_text text" id="search_word_simei_s ser-2"
                                            name="search_word[simei_s]" type="text" tabindex="10017" :disabled="true"
                                            style="width:45%;margin-left: 0 !important; margin-right: 0;">
                                        <input class="string_zen clear_text text" id="search_word_simei_s ser-2"
                                            name="search_word[simei_s]" type="text" tabindex="10017" :disabled="true"
                                            style="width:55%;margin-left: 0 !important; margin-right: 0;">
                                    </div>
                                </li>
                                </li>
                                <li class="form form-1">
                                    <p style="width: 30%;" id="name5">Orn Chamrong4</p>
                                </li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-4 ser-1">
                        <div class="ser-2 ">
                            <div class="group">
                                <h2>Hematology</h2>
                                <ul>
                                    <li class="form">
                                    <li id="rol" class="role" style="border-bottom:0.5px solid #ccc; margin-right: 10px;">
                                        <input type="checkbox" name="show6" id="show6" @click="checkBox(6)">
                                        <label for="show6" class="label">Blood group</label>
                                    </li>
                                    <li id="rol" class="select-box">
                                        <select name="" id="" style="width: 100%;">
                                            <option value="0"></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                        <div class="role-1">
                                            <input class="string_zen clear_text text" id="search_word_simei_s ser-2"
                                                name="search_word[simei_s]" type="text" tabindex="10017" :disabled="true"
                                                style="width:45%;margin-left: 0 !important; margin-right: 0;">
                                            <input class="string_zen clear_text text" id="search_word_simei_s ser-2"
                                                name="search_word[simei_s]" type="text" tabindex="10017" :disabled="true"
                                                style="width:55%;margin-left: 0 !important; margin-right: 0;">
                                        </div>
                                    </li>
                                    </li>
                                    <li class="form form-1">
                                        <p style="width: 30%;" id="name6">Orn Chamrong5</p>
                                    </li>
                                </ul>
                                <ul>
                                    <li class="form">
                                    <li id="rol" class="role" style="border-bottom:0.5px solid #ccc; margin-right: 10px;">
                                        <input type="checkbox" name="show7" id="show7" @click="checkBox(7)">
                                        <label for="show7" class="label">BT-CT</label>
                                    </li>
                                    <li id="rol" class="select-box">
                                        <select name="" id="" style="width: 100%;">
                                            <option value="0"></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                        <div class="role-1">
                                            <input class="string_zen clear_text text" id="search_word_simei_s ser-2"
                                                name="search_word[simei_s]" type="text" tabindex="10017" :disabled="true"
                                                style="width:45%;margin-left: 0 !important; margin-right: 0;">
                                            <input class="string_zen clear_text text" id="search_word_simei_s ser-2"
                                                name="search_word[simei_s]" type="text" tabindex="10017" :disabled="true"
                                                style="width:55%;margin-left: 0 !important; margin-right: 0;">
                                        </div>
                                    </li>
                                    </li>
                                    <li class="form form-1">
                                        <p style="width: 30%;" id="name7">Orn Chamrong6</p>
                                    </li>
                                </ul>
                                <ul>
                                    <li class="form">
                                    <li id="rol" class="role" style="border-bottom:0.5px solid #ccc; margin-right: 10px;">
                                        <input type="checkbox" name="show8" id="show8" @click="checkBox(8)">
                                        <label for="show8" class="label">Complete blood count</label>
                                    </li>
                                    <li id="rol" class="select-box">
                                        <select name="" id="" style="width: 100%;">
                                            <option value="0"></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                        <div class="role-1">
                                            <input class="string_zen clear_text text" id="search_word_simei_s ser-2"
                                                name="search_word[simei_s]" type="text" tabindex="10017" :disabled="true"
                                                style="width:45%;margin-left: 0 !important; margin-right: 0;">
                                            <input class="string_zen clear_text text" id="search_word_simei_s ser-2"
                                                name="search_word[simei_s]" type="text" tabindex="10017" :disabled="true"
                                                style="width:55%;margin-left: 0 !important; margin-right: 0;">
                                        </div>
                                    </li>
                                    </li>
                                    <li class="form form-1">
                                        <p style="width: 30%;" id="name8">Orn Chamrong7</p>
                                    </li>
                                </ul>
                                <ul>
                                    <li class="form">
                                    <li id="rol" class="role" style="border-bottom:0.5px solid #ccc; margin-right: 10px;">
                                        <input type="checkbox" name="show9" id="show9" @click="checkBox(9)">
                                        <label for="show9" class="label">Erythrocyte Sedimentation Rate (ESR)</label>
                                    </li>
                                    <li id="rol" class="select-box">
                                        <select name="" id="" style="width: 100%;">
                                            <option value="0"></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                        <div class="role-1">
                                            <input class="string_zen clear_text text" id="search_word_simei_s ser-2"
                                                name="search_word[simei_s]" type="text" tabindex="10017" :disabled="true"
                                                style="width:45%;margin-left: 0 !important; margin-right: 0;">
                                            <input class="string_zen clear_text text" id="search_word_simei_s ser-2"
                                                name="search_word[simei_s]" type="text" tabindex="10017" :disabled="true"
                                                style="width:55%;margin-left: 0 !important; margin-right: 0;">
                                        </div>
                                    </li>
                                    </li>
                                    <li class="form form-1">
                                        <p style="width: 30%;" id="name9">Orn Chamrong8</p>
                                    </li>
                                </ul>
                                <ul>
                                    <li class="form">
                                    <li id="rol" class="role" style="border-bottom:0.5px solid #ccc; margin-right: 10px;">
                                        <input type="checkbox" name="show10" id="show10" @click="checkBox(10)">
                                        <label for="show10" class="label">Hemoglobine</label>
                                    </li>
                                    <li id="rol" class="select-box">
                                        <select name="" id="" style="width: 100%;">
                                            <option value="0"></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                        <div class="role-1">
                                            <input class="string_zen clear_text text" id="search_word_simei_s ser-2"
                                                name="search_word[simei_s]" type="text" tabindex="10017" :disabled="true"
                                                style="width:45%;margin-left: 0 !important; margin-right: 0;">
                                            <input class="string_zen clear_text text" id="search_word_simei_s ser-2"
                                                name="search_word[simei_s]" type="text" tabindex="10017" :disabled="true"
                                                style="width:55%;margin-left: 0 !important; margin-right: 0;">
                                        </div>
                                    </li>
                                    </li>
                                    <li class="form form-1">
                                        <p style="width: 30%;" id="name10">Orn Chamrong9</p>
                                    </li>
                                </ul>
                                <ul>
                                    <li class="form">
                                    <li id="rol" class="role" style="border-bottom:0.5px solid #ccc; margin-right: 10px;">
                                        <input type="checkbox" name="show11" id="show11" @click="checkBox(11)">
                                        <label for="show11" class="label">Malaria</label>
                                    </li>
                                    <li id="rol" class="select-box">
                                        <select name="" id="" style="width: 100%;">
                                            <option value="0"></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                        <div class="role-1">
                                            <input class="string_zen clear_text text" id="search_word_simei_s ser-2"
                                                name="search_word[simei_s]" type="text" tabindex="10017" :disabled="true"
                                                style="width:45%;margin-left: 0 !important; margin-right: 0;">
                                            <input class="string_zen clear_text text" id="search_word_simei_s ser-2"
                                                name="search_word[simei_s]" type="text" tabindex="10017" :disabled="true"
                                                style="width:55%;margin-left: 0 !important; margin-right: 0;">
                                        </div>
                                    </li>
                                    </li>
                                    <li class="form form-1">
                                        <p style="width: 30%;" id="name11">Orn Chamrong10</p>
                                    </li>
                                </ul>
                                <ul>
                                    <li class="form">
                                    <li id="rol" class="role" style="border-bottom:0.5px solid #ccc; margin-right: 10px;">
                                        <input type="checkbox" name="show12" id="show12" @click="checkBox(12)">
                                        <label for="show12" class="label">Platelet</label>
                                    </li>
                                    <li id="rol" class="select-box">
                                        <select name="" id="" style="width: 100%;">
                                            <option value="0"></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                        <div class="role-1">
                                            <input class="string_zen clear_text text" id="search_word_simei_s ser-2"
                                                name="search_word[simei_s]" type="text" tabindex="10017" :disabled="true"
                                                style="width:45%;margin-left: 0 !important; margin-right: 0;">
                                            <input class="string_zen clear_text text" id="search_word_simei_s ser-2"
                                                name="search_word[simei_s]" type="text" tabindex="10017" :disabled="true"
                                                style="width:55%;margin-left: 0 !important; margin-right: 0;">
                                        </div>
                                    </li>
                                    </li>
                                    <li class="form form-1">
                                        <p style="width: 30%;" id="name12">Orn Chamrong11</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="group">
                                <h2>Micro-biology</h2>
                                <ul>
                                    <li class="form">
                                    <li id="rol" class="role" style="border-bottom:0.5px solid #ccc; margin-right: 10px;">
                                        <input type="checkbox" name="show13" id="show13" @click="checkBox(13)">
                                        <label for="show13" class="label">Cervical gram stain</label>
                                    </li>
                                    <li id="rol" class="select-box">
                                        <select name="" id="" style="width: 100%;">
                                            <option value="0"></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                        <div class="role-1">
                                            <input class="string_zen clear_text text" id="search_word_simei_s ser-2"
                                                name="search_word[simei_s]" type="text" tabindex="10017" :disabled="true"
                                                style="width:45%;margin-left: 0 !important; margin-right: 0;">
                                            <input class="string_zen clear_text text" id="search_word_simei_s ser-2"
                                                name="search_word[simei_s]" type="text" tabindex="10017" :disabled="true"
                                                style="width:55%;margin-left: 0 !important; margin-right: 0;">
                                        </div>
                                    </li>
                                    </li>
                                    <li class="form form-1">
                                        <p style="width: 30%;" id="name13">Orn Chamrong12</p>
                                    </li>
                                </ul>
                                <ul>
                                    <li class="form">
                                    <li id="rol" class="role" style="border-bottom:0.5px solid #ccc; margin-right: 10px;">
                                        <input type="checkbox" name="show14" id="show14" @click="checkBox(14)">
                                        <label for="show14" class="label">HPV test</label>
                                    </li>
                                    <li id="rol" class="select-box">
                                        <select name="" id="" style="width: 100%;">
                                            <option value="0"></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                        <div class="role-1">
                                            <input class="string_zen clear_text text" id="search_word_simei_s ser-2"
                                                name="search_word[simei_s]" type="text" tabindex="10017" :disabled="true"
                                                style="width:45%;margin-left: 0 !important; margin-right: 0;">
                                            <input class="string_zen clear_text text" id="search_word_simei_s ser-2"
                                                name="search_word[simei_s]" type="text" tabindex="10017" :disabled="true"
                                                style="width:55%;margin-left: 0 !important; margin-right: 0;">
                                        </div>
                                    </li>
                                    </li>
                                    <li class="form form-1">
                                        <p style="width: 30%;" id="name14">Orn Chamrong13</p>
                                    </li>
                                </ul>
                                <ul>
                                    <li class="form">
                                    <li id="rol" class="role" style="border-bottom:0.5px solid #ccc; margin-right: 10px;">
                                        <input type="checkbox" name="show15" id="show15" @click="checkBox(15)">
                                        <label for="show15" class="label">Other gram stain</label>
                                    </li>
                                    <li id="rol" class="select-box">
                                        <select name="" id="" style="width: 100%;">
                                            <option value="0"></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                        <div class="role-1">
                                            <input class="string_zen clear_text text" id="search_word_simei_s ser-2"
                                                name="search_word[simei_s]" type="text" tabindex="10017" :disabled="true"
                                                style="width:45%;margin-left: 0 !important; margin-right: 0;">
                                            <input class="string_zen clear_text text" id="search_word_simei_s ser-2"
                                                name="search_word[simei_s]" type="text" tabindex="10017" :disabled="true"
                                                style="width:55%;margin-left: 0 !important; margin-right: 0;">
                                        </div>
                                    </li>
                                    </li>
                                    <li class="form form-1">
                                        <p style="width: 30%;" id="name15">Orn Chamrong14</p>
                                    </li>
                                </ul>
                                <ul>
                                    <li class="form">
                                    <li id="rol" class="role" style="border-bottom:0.5px solid #ccc; margin-right: 10px;">
                                        <input type="checkbox" name="show16" id="show16" @click="checkBox(16)">
                                        <label for="show16" class="label">Urethral gram stain</label>
                                    </li>
                                    <li id="rol" class="select-box">
                                        <select name="" id="" style="width: 100%;">
                                            <option value="0"></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                        <div class="role-1">
                                            <input class="string_zen clear_text text" id="search_word_simei_s ser-2"
                                                name="search_word[simei_s]" type="text" tabindex="10017" :disabled="true"
                                                style="width:45%;margin-left: 0 !important; margin-right: 0;">
                                            <input class="string_zen clear_text text" id="search_word_simei_s ser-2"
                                                name="search_word[simei_s]" type="text" tabindex="10017" :disabled="true"
                                                style="width:55%;margin-left: 0 !important; margin-right: 0;">
                                        </div>
                                    </li>
                                    </li>
                                    <li class="form form-1">
                                        <p style="width: 30%;" id="name16">Orn Chamrong15</p>
                                    </li>
                                </ul>
                                <ul>
                                    <li class="form">
                                    <li id="rol" class="role" style="border-bottom:0.5px solid #ccc; margin-right: 10px;">
                                        <input type="checkbox" name="show17" id="show17" @click="checkBox(17)">
                                        <label for="show17" class="label">Vaginal gram stain</label>
                                    </li>
                                    <li id="rol" class="select-box">
                                        <select name="" id="" style="width: 100%;">
                                            <option value="0"></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                        <div class="role-1">
                                            <input class="string_zen clear_text text" id="search_word_simei_s ser-2"
                                                name="search_word[simei_s]" type="text" tabindex="10017" :disabled="true"
                                                style="width:45%;margin-left: 0 !important; margin-right: 0;">
                                            <input class="string_zen clear_text text" id="search_word_simei_s ser-2"
                                                name="search_word[simei_s]" type="text" tabindex="10017" :disabled="true"
                                                style="width:55%;margin-left: 0 !important; margin-right: 0;">
                                        </div>
                                    </li>
                                    </li>
                                    <li class="form form-1">
                                        <p style="width: 30%;" id="name17">Orn Chamrong16</p>
                                    </li>
                                </ul>
                                <ul>
                                    <li class="form">
                                    <li id="rol" class="role" style="border-bottom:0.5px solid #ccc; margin-right: 10px;">
                                        <input type="checkbox" name="show18" id="show18" @click="checkBox(18)">
                                        <label for="show18" class="label">Wet smear</label>
                                    </li>
                                    <li id="rol" class="select-box">
                                        <select name="" id="" style="width: 100%;">
                                            <option value="0"></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                        <div class="role-1">
                                            <input class="string_zen clear_text text" id="search_word_simei_s ser-2"
                                                name="search_word[simei_s]" type="text" tabindex="10017" :disabled="true"
                                                style="width:45%;margin-left: 0 !important; margin-right: 0;">
                                            <input class="string_zen clear_text text" id="search_word_simei_s ser-2"
                                                name="search_word[simei_s]" type="text" tabindex="10017" :disabled="true"
                                                style="width:55%;margin-left: 0 !important; margin-right: 0;">
                                        </div>
                                    </li>
                                    </li>
                                    <li class="form form-1">
                                        <p style="width: 30%;" id="name18">Orn Chamrong17</p>
                                    </li>
                                </ul>
                                <ul class="f-search">
                                    <li>
                                        <h2 style="color:white; font-size: 14.5px; margin-top: 0; padding-left: 0;">
                                            Histology</h2>
                                    </li>
                                    <li>
                                        <input class="string_zen clear_text text" id="search_word_simei_s ser-2"
                                            name="search_word[simei_s]" type="text" tabindex="10017" style="width:100%;">
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-4 ser-1">
                        <div class="ser-2">
                            <div class="group">
                                <h2>Blood Biochemistry</h2>
                                <ul>
                                    <li class="form">
                                    <li id="rol" class="role" style="border-bottom:0.5px solid #ccc; margin-right: 10px;">
                                        <input type="checkbox" name="show6" id="show6" @click="checkBox(6)">
                                        <label for="show6" class="label">Blood group</label>
                                    </li>
                                    <li id="rol" class="select-box">
                                        <select name="" id="" style="width: 100%;">
                                            <option value="0"></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                        <div class="role-1">
                                            <input class="string_zen clear_text text" id="search_word_simei_s ser-2"
                                                name="search_word[simei_s]" type="text" tabindex="10017" :disabled="true"
                                                style="width:45%;margin-left: 0 !important; margin-right: 0;">
                                            <input class="string_zen clear_text text" id="search_word_simei_s ser-2"
                                                name="search_word[simei_s]" type="text" tabindex="10017" :disabled="true"
                                                style="width:55%;margin-left: 0 !important; margin-right: 0;">
                                        </div>
                                    </li>
                                    </li>
                                    <li class="form form-1">
                                        <p style="width: 30%;" id="name6">Orn Chamrong5</p>
                                    </li>
                                </ul>
                                <ul>
                                    <li class="form">
                                    <li id="rol" class="role" style="border-bottom:0.5px solid #ccc; margin-right: 10px;">
                                        <input type="checkbox" name="show7" id="show7" @click="checkBox(7)">
                                        <label for="show7" class="label">BT-CT</label>
                                    </li>
                                    <li id="rol" class="select-box">
                                        <select name="" id="" style="width: 100%;">
                                            <option value="0"></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                        <div class="role-1">
                                            <input class="string_zen clear_text text" id="search_word_simei_s ser-2"
                                                name="search_word[simei_s]" type="text" tabindex="10017" :disabled="true"
                                                style="width:45%;margin-left: 0 !important; margin-right: 0;">
                                            <input class="string_zen clear_text text" id="search_word_simei_s ser-2"
                                                name="search_word[simei_s]" type="text" tabindex="10017" :disabled="true"
                                                style="width:55%;margin-left: 0 !important; margin-right: 0;">
                                        </div>
                                    </li>
                                    </li>
                                    <li class="form form-1">
                                        <p style="width: 30%;" id="name7">Orn Chamrong6</p>
                                    </li>
                                </ul>
                                <ul>
                                    <li class="form">
                                    <li id="rol" class="role" style="border-bottom:0.5px solid #ccc; margin-right: 10px;">
                                        <input type="checkbox" name="show8" id="show8" @click="checkBox(8)">
                                        <label for="show8" class="label">Complete blood count</label>
                                    </li>
                                    <li id="rol" class="select-box">
                                        <select name="" id="" style="width: 100%;">
                                            <option value="0"></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                        <div class="role-1">
                                            <input class="string_zen clear_text text" id="search_word_simei_s ser-2"
                                                name="search_word[simei_s]" type="text" tabindex="10017" :disabled="true"
                                                style="width:45%;margin-left: 0 !important; margin-right: 0;">
                                            <input class="string_zen clear_text text" id="search_word_simei_s ser-2"
                                                name="search_word[simei_s]" type="text" tabindex="10017" :disabled="true"
                                                style="width:55%;margin-left: 0 !important; margin-right: 0;">
                                        </div>
                                    </li>
                                    </li>
                                    <li class="form form-1">
                                        <p style="width: 30%;" id="name8">Orn Chamrong7</p>
                                    </li>
                                </ul>
                                <ul>
                                    <li class="form">
                                    <li id="rol" class="role" style="border-bottom:0.5px solid #ccc; margin-right: 10px;">
                                        <input type="checkbox" name="show9" id="show9" @click="checkBox(9)">
                                        <label for="show9" class="label">Erythrocyte Sedimentation Rate (ESR)</label>
                                    </li>
                                    <li id="rol" class="select-box">
                                        <select name="" id="" style="width: 100%;">
                                            <option value="0"></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                        <div class="role-1">
                                            <input class="string_zen clear_text text" id="search_word_simei_s ser-2"
                                                name="search_word[simei_s]" type="text" tabindex="10017" :disabled="true"
                                                style="width:45%;margin-left: 0 !important; margin-right: 0;">
                                            <input class="string_zen clear_text text" id="search_word_simei_s ser-2"
                                                name="search_word[simei_s]" type="text" tabindex="10017" :disabled="true"
                                                style="width:55%;margin-left: 0 !important; margin-right: 0;">
                                        </div>
                                    </li>
                                    </li>
                                    <li class="form form-1">
                                        <p style="width: 30%;" id="name9">Orn Chamrong8</p>
                                    </li>
                                </ul>
                                <ul>
                                    <li class="form">
                                    <li id="rol" class="role" style="border-bottom:0.5px solid #ccc; margin-right: 10px;">
                                        <input type="checkbox" name="show10" id="show10" @click="checkBox(10)">
                                        <label for="show10" class="label">Hemoglobine</label>
                                    </li>
                                    <li id="rol" class="select-box">
                                        <select name="" id="" style="width: 100%;">
                                            <option value="0"></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                        <div class="role-1">
                                            <input class="string_zen clear_text text" id="search_word_simei_s ser-2"
                                                name="search_word[simei_s]" type="text" tabindex="10017" :disabled="true"
                                                style="width:45%;margin-left: 0 !important; margin-right: 0;">
                                            <input class="string_zen clear_text text" id="search_word_simei_s ser-2"
                                                name="search_word[simei_s]" type="text" tabindex="10017" :disabled="true"
                                                style="width:55%;margin-left: 0 !important; margin-right: 0;">
                                        </div>
                                    </li>
                                    </li>
                                    <li class="form form-1">
                                        <p style="width: 30%;" id="name10">Orn Chamrong9</p>
                                    </li>
                                </ul>
                                <ul>
                                    <li class="form">
                                    <li id="rol" class="role" style="border-bottom:0.5px solid #ccc; margin-right: 10px;">
                                        <input type="checkbox" name="show11" id="show11" @click="checkBox(11)">
                                        <label for="show11" class="label">Malaria</label>
                                    </li>
                                    <li id="rol" class="select-box">
                                        <select name="" id="" style="width: 100%;">
                                            <option value="0"></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                        <div class="role-1">
                                            <input class="string_zen clear_text text" id="search_word_simei_s ser-2"
                                                name="search_word[simei_s]" type="text" tabindex="10017" :disabled="true"
                                                style="width:45%;margin-left: 0 !important; margin-right: 0;">
                                            <input class="string_zen clear_text text" id="search_word_simei_s ser-2"
                                                name="search_word[simei_s]" type="text" tabindex="10017" :disabled="true"
                                                style="width:55%;margin-left: 0 !important; margin-right: 0;">
                                        </div>
                                    </li>
                                    </li>
                                    <li class="form form-1">
                                        <p style="width: 30%;" id="name11">Orn Chamrong10</p>
                                    </li>
                                </ul>
                                <ul>
                                    <li class="form">
                                    <li id="rol" class="role" style="border-bottom:0.5px solid #ccc; margin-right: 10px;">
                                        <input type="checkbox" name="show12" id="show12" @click="checkBox(12)">
                                        <label for="show12" class="label">Platelet</label>
                                    </li>
                                    <li id="rol" class="select-box">
                                        <select name="" id="" style="width: 100%;">
                                            <option value="0"></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                        <div class="role-1">
                                            <input class="string_zen clear_text text" id="search_word_simei_s ser-2"
                                                name="search_word[simei_s]" type="text" tabindex="10017" :disabled="true"
                                                style="width:45%;margin-left: 0 !important; margin-right: 0;">
                                            <input class="string_zen clear_text text" id="search_word_simei_s ser-2"
                                                name="search_word[simei_s]" type="text" tabindex="10017" :disabled="true"
                                                style="width:55%;margin-left: 0 !important; margin-right: 0;">
                                        </div>
                                    </li>
                                    </li>
                                    <li class="form form-1">
                                        <p style="width: 30%;" id="name12">Orn Chamrong11</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
    <!-- payment -->
    <div class="modal fade ui-modal" id="payment" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="payment" aria-hidden="true">
        <div class="modal-dialog " style="max-width: 200vh !important;">
            <div class="modal-content ui-dialog">
                <div class="ui-widget-header">
                    <p>Payment</p>
                    <span class="ui-icon ui-icon-closethick" data-bs-dismiss="modal" aria-label="Close"></span>
                </div>
                <!-- <div class="ui-dialog-content" id="ser"> -->
                <div class="ui-dialog-content" id="purchaseorder1">
                    <div class="card">
                        <div class="card-body" style="width:960px; margin-left:auto; margin-right:auto">
                            <div class="mb-5 mt-3 print-size">
                                <div style="padding: 0 80px">
                                    <div class="col-md-12">
                                        <div class="text-center">
                                            <h3 class="title-purchase">INVOICE</h3>
                                        </div>
                                    </div>
                                    <div class="col-container">
                                        <div class="col1">
                                            <p class=" p-bg font-size p-pad">HOSPITAL NAME</p>
                                            <p class="p-mg info-pad">Name : LskyCombo Co.,LTD</p>
                                            <p class="p-mg  info-pad">Phone Number : (+855)12 885 885</p>
                                            <p class="p-mg info-pad">Email Address : lskycom@gmail.com</p>
                                            <p class="p-mg info-pad">Address : #6666666666</p>
                                        </div>
                                        <div class="col2">
                                            <p class="text-center p-bg font-size p-pad">DATE</p>
                                            <p class="text-center p-mg">2023-05-11</p>
                                            <p class="text-center p-bg font-size p-pad">INVOICE NO.</p>
                                            <p class="text-center p-mg">{{ }}</p>
                                            <div style="height:30px"></div>
                                            <p class="text-center p-bg font-size p-pad">CUSTOMER NO.</p>
                                            <div style="height:30px"></div>
                                        </div>
                                    </div>
                                    <div class="col-container">
                                        <div class="row2-col1 mg-top">
                                            <p class=" p-bg font-size p-pad">ORDER PERSON</p>
                                            <p class="p-mg info-pad">Name :</p>
                                            <p class="p-mg info-pad">Phone Number :</p>
                                            <p class="p-mg info-pad">Address : </p>
                                        </div>
                                        <div class="row2-col2 mg-top">
                                            <p class=" p-bg font-size p-pad">SUPPLYER</p>
                                            <p class="p-mg info-pad">Name :</p>
                                            <p class="p-mg info-pad">Phone Number :</p>
                                            <p class="p-mg info-pad">Email Address : </p>
                                            <p class="p-mg info-pad">Address :</p>
                                        </div>
                                    </div>
                                    <div class=" my-2  justify-content-center">
                                        <table id="pr-tb">
                                            <thead>
                                                <tr class="p-bg">
                                                    <th class="text-center" style="width:45px">Patient's ID</th>
                                                    <th class="text-center" style="width:155px">Service</th>
                                                    <th class="text-center" style="width:165px">Description</th>
                                                    <th class="text-center" style="width:60px">Quantity</th>
                                                    <th class="text-center" style="width:80px">Price</th>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Testing</td>
                                                    <td>Testing</td>
                                                    <td>10</td>
                                                    <td>1900</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Testing</td>
                                                    <td>Testing</td>
                                                    <td>10</td>
                                                    <td>1900</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Testing</td>
                                                    <td>Testing</td>
                                                    <td>10</td>
                                                    <td>1900</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr v-for="(purchase, index) in purchases_lines" :key="index">
                                                    <td>{{ index + 1 + "." }}</td>
                                                    <td>{{ purchase.document_no }}</td>
                                                    <td>{{ purchase.description }}</td>
                                                    <td>{{ purchase.inventory }}</td>
                                                    <td>{{ purchase.unit_of_measure_code }}</td>
                                                    <td>{{ purchase.unit_price }}</td>
                                                    <td>{{ purchase.total_amount }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="col-container">
                                            <div class="row2-col1 min-hi">
                                            </div>
                                            <div class="col3 printer">
                                                <table class="p-table-r">
                                                    <tr class="p-bg-footer">
                                                        <th>Total</th>
                                                        <td style="padding-left:5px;width:129px ">100$</td>
                                                    </tr>
                                                    <tr class="p-bg-footer">
                                                        <th>Tax</th>
                                                        <td style="padding-left:5px ;width:129px">5$</td>
                                                    </tr>
                                                    <tr class="p-bg-footer">
                                                        <th>Total Amount</th>
                                                        <td style="padding-left:5px; width:129px">100$</td>
                                                    </tr>
                                                    <tr class="p-bg-footer">
                                                        <th>Cash Back</th>
                                                        <td style="padding-left:5px; width:129px">1$</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- </div> -->
                <div class="modal-footer">
                    <a class="btn-purchase btn-light text-capitalize border-0" data-mdb-ripple-color="dark"
                        @click="print()"><i class="fas fa-print text-primary"></i> Print</a>
                </div>
            </div>
        </div>
    </div>
    <!-- end payment -->
    <!-- Bell alert -->
    <div class="modal fade ui-modal" id="alertbell" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticboomId" aria-hidden="true">
        <div class="modal-dialog " id="recept">
            <div class="modal-content ui-dialog">
                <div class="ui-widget-header">
                    <h5 class="modal-title in-header" id="staticBackdropLabel"><i class="fas fa-bell"
                            aria-hidden="true"></i>
                        Prescription</h5>
                    <span class="ui-icon ui-icon-closethick" data-bs-dismiss="modal" aria-label="Close"></span>
                </div>
                <div class="ui-dialog-content" id="purchaseorder2">
                    <div class="card">
                        <div class="card-body">
                            <div class="mt-3">

                                <div style="padding:0px">

                                    <div class=" my-2  justify-content-center">
                                        <table class="table table-striped br-table">
                                            <thead>
                                                <tr class="header-table">
                                                    <th class="text-center" width="12%">Patient ID</th>
                                                    <th class="text-center">Patient Name</th>
                                                    <th class="text-center">Sex</th>
                                                    <th class="text-center">Phone</th>
                                                    <th class="text-center">BirthDay</th>
                                                    <th class="text-center">Visit Date</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr v-for="(reg, index) in view" :key="index">
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
                                                        {{ reg.sex }}
                                                    </td>
                                                    <td v-else style="border: medium none">
                                                        {{ reg.sex }}
                                                    </td>
                                                    <td v-if="index % 2 == 0" style="border: medium none">
                                                        {{ reg.phone1 }}
                                                    </td>
                                                    <td v-else style="border: medium none">
                                                        {{ reg.phone1 }}
                                                    </td>
                                                    <td v-if="index % 2 == 0" style="border: medium none">
                                                        {{ reg.birstdate }}
                                                    </td>
                                                    <td v-else style="border: medium none">
                                                        {{ reg.birstdate }}
                                                    </td>
                                                    <td v-if="index % 2 == 0" style="border: medium none">
                                                        {{ formatdatetime(reg.visit_date) }}
                                                    </td>
                                                    <td v-else style="border: medium none">
                                                        {{ formatdatetime(reg.visit_date) }}
                                                    </td>
                                                    <td v-if="index % 2 == 0" style="border: medium none"
                                                        class="text-center">
                                                        <div class="button" id="uniform-undefined"
                                                            @click="createvisit(reg.preid)" data-bs-dismiss="modal"
                                                            aria-label="Close">
                                                            <span><i class="fa fa-plus"></i> Select<input type="button"
                                                                    tabindex="10028"
                                                                    style="opacity: 0; width: 70px" /></span>
                                                        </div>
                                                    </td>
                                                    <td v-else style="border: medium none" class="text-center">
                                                        <div class="button" id="uniform-undefined"
                                                            @click="createvisit(reg.preid)" data-bs-dismiss="modal"
                                                            aria-label="Close">
                                                            <span><i class="fa fa-plus"></i> Select<input type="button"
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
                    <div class="button type2" id="uniform-undefined" data-bs-dismiss="modal" aria-label="Close">
                        <span>Close</span>
                        <input type="button" value="clear" class="type2" style="opacity: 0; width: 63px" tabindex="10026" />
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Appointment -->
    <div class="modal fade ui-modal" id="Appointment" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticboomId" aria-hidden="true">
        <div class="modal-dialog " id="recept">
            <div class="modal-content ui-dialog">
                <div class="ui-widget-header">
                    <h5 class="modal-title in-header" id="staticBackdropLabel"><i class="fas fa-bell"
                            aria-hidden="true"></i>
                        Appointment</h5>
                    <span class="ui-icon ui-icon-closethick" data-bs-dismiss="modal" aria-label="Close"></span>
                </div>
                <div class="ui-dialog-content" id="purchaseorder2">
                    <div class="card">
                        <div class="card-body">
                            <div class="mt-3">

                                <div style="padding:0px">

                                    <div class=" my-2  justify-content-center">
                                        <table class="table table-striped br-table">
                                            <thead>
                                                <tr class="header-table">
                                                    <th class="text-center" width="12%">Patient ID</th>
                                                    <th class="text-center">Patient Name</th>
                                                    <th class="text-center">Sex</th>
                                                    <th class="text-center">Phone</th>
                                                    <th class="text-center">BirthDay</th>
                                                    <th class="text-center">Appointment Date</th>
                                                    <th class="text-center" width="30%">Remark</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr v-for="(reg, index) in view" :key="index">
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
                                                        {{ reg.sex }}
                                                    </td>
                                                    <td v-else style="border: medium none">
                                                        {{ reg.sex }}
                                                    </td>
                                                    <td v-if="index % 2 == 0" style="border: medium none">
                                                        {{ reg.phone1 }}
                                                    </td>
                                                    <td v-else style="border: medium none">
                                                        {{ reg.phone1 }}
                                                    </td>
                                                    <td v-if="index % 2 == 0" style="border: medium none">
                                                        {{ reg.birstdate }}
                                                    </td>
                                                    <td v-else style="border: medium none">
                                                        {{ reg.birstdate }}
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
                                                    <td v-if="index % 2 == 0" style="border: medium none"
                                                        class="text-center">
                                                        <div class="button" id="uniform-undefined" data-bs-toggle="modal"
                                                            data-bs-target="#comfirmcreate">
                                                            <span><i class="fa fa-plus"></i> Select<input type="button"
                                                                    tabindex="10028"
                                                                    style="opacity: 0; width: 70px" /></span>
                                                        </div>
                                                    </td>
                                                    <td v-else style="border: medium none" class="text-center">
                                                        <div class="button" id="uniform-undefined" data-bs-toggle="modal"
                                                            data-bs-target="#comfirmcreate">
                                                            <span><i class="fa fa-plus"></i> Select<input type="button"
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
                    <div class="button type2" id="uniform-undefined" data-bs-dismiss="modal" aria-label="Close">
                        <span>Close</span>
                        <input type="button" value="clear" class="type2" style="opacity: 0; width: 63px" tabindex="10026" />
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- end Appointment -->
    <!-- comfirm  -->
    <div class="modal fade ui-modal" id="comfirmcreate" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="clearconfirmlabel" aria-hidden="true">
        <div class="modal-dialog smallpopup" id="nonbackgroundboom">
            <div class="modal-content ui-dialog">
                <div class="ui-widget-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        <span class="ui-dialog-title" id="ui-dialog-title-modal-edit-dialog">Confirm Message</span>
                    </h5>
                    <span class="ui-icon ui-icon-closethick btn-cancel" data-bs-dismiss="modal" aria-label="Close"></span>
                </div>
                <div class="ui-dialog-content" style="background-color: #fff;">
                    <div class="modal-body">Do you want to Comfirm?</div>
                    <div class="modal-footer">
                        <div class="button type2" @click="createvisit(reg.preid)" data-bs-dismiss="modal">
                            <span>Yes</span>
                        </div>
                        <div class="button type2" id="uniform-undefined" data-bs-dismiss="modal" @click="cancel()">
                            <span>No<input type="button" class="type2" onclick="edit_cancel()" tabindex="10008" value="No"
                                    style="width: 89px; opacity: 0;">
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end comfirm  -->
    <!-- pro labo -->
    <div class="modal fade ui-modal" id="prolabo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="payment" aria-hidden="true">
        <div class="modal-dialog " style="max-width: 160vh !important;">
            <div class="modal-content ui-dialog" style="overflow-y: scroll !important; height: 92vh;">
                <div class="ui-widget-header">
                    <p>Pro-Labo</p>
                    <span class="ui-icon ui-icon-closethick" data-bs-dismiss="modal" aria-label="Close"></span>
                </div>
                <div class="ui-dialog-content" id="purchaseorder">
                    <div class="Hcard">
                        <div id="hcard">
                            <div class="Hcard-1">
                                <img alt="Healthbook" height="44" src="img/logo.png" width="70" mstalt="155922"
                                    _msthash="1" />
                                <span>Pro-Labo</span>
                            </div>
                            <div class="Hcard-1 text-center">
                                <h1>
                                    pro-labo
                                </h1>
                                <h2>
                                    Professional Clinical Laboratory
                                </h2>
                                <p>
                                    #534,Street TrasakPheam(63),S/K Boeung Raing, Khan Daun Penh
                                </p>
                                <p>
                                    Tel: 023 224 191, Fax: 023 224 181
                                </p>
                                <p>
                                    Email: prolabo.info@gmail.com
                                </p>
                            </div>
                            <div class="Hcard-1">
                                <img alt="Healthbook" height="44" src="img/logo.png" width="70" mstalt="155922"
                                    _msthash="1" />
                                <span style="text-transform: uppercase;">clinic rhac</span>
                            </div>
                        </div>
                    </div>
                    <div class="cdata">
                        <div class="cdata-1">
                            <tr>
                                <td>Lab Number</td>
                                <th>: L1104110</th>
                            </tr>
                            <tr>
                                <td>Patient Name</td>
                                <th>: L1104110</th>
                            </tr>
                            <tr>
                                <td>Physician Name</td>
                                <th>: L1104110</th>
                            </tr>
                            <tr>
                                <td>Clinic</td>
                                <th>: L1104110</th>
                            </tr>
                            <tr>
                                <td>Specimen</td>
                                <th>: L1104110</th>
                            </tr>
                        </div>
                        <div class="cdata-1">
                            <tr>
                                <td>Patient ID</td>
                                <th>: L1104110</th>
                            </tr>
                            <tr>
                                <td>Age</td>
                                <th>: 20</th>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <th>: male</th>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <th>: Phnom Penh</th>
                            </tr>
                            <tr>
                                <td>Requested Date</td>
                                <th>: 04/12/2019</th>
                            </tr>
                            <tr>
                                <td>Analysis</td>
                                <th>: 04/12/2019</th>
                            </tr>
                        </div>
                    </div>
                    <div class="text-center">
                        <h1 style="text-transform:uppercase; font-size:17px; color:#777; text-decoration: underline;">
                            electrolyte
                        </h1>
                    </div>
                    <div class="result">
                        <table id="hd">
                            <tr style="height: 20px;">
                                <th width="65%"></th>
                                <th width="10%">Result</th>
                                <th width="10%">Units</th>
                                <th width="15%">Reference</th>
                            </tr>
                            <tr style="height: 30px;">
                                <td>potassium (K)..........................:</td>
                                <td>4.6</td>
                                <td>mmol/l</td>
                                <td>(N:3.5-5.5)</td>
                            </tr>
                            <tr style="height: 30px;">
                                <td>sodium(Na).............................:</td>
                                <td>4.6</td>
                                <td>mmol/l</td>
                                <td>(N:3.5-5.5)</td>
                            </tr>
                            <tr style="height: 30px;">
                                <td>chloride(cr)...........................:</td>
                                <td>4.6</td>
                                <td>mmol/l</td>
                                <td>(N:3.5-5.5)</td>
                            </tr>
                            <tr style="height: 30px;">
                                <td>ical...................................:</td>
                                <td>4.6</td>
                                <td>mmol/l</td>
                                <td>(N:3.5-5.5)</td>
                            </tr>
                            <tr style="height: 30px;">
                                <td>ph.....................................:</td>
                                <td>4.6</td>
                                <td>mmol/l</td>
                                <td>(N:3.5-5.5)</td>
                            </tr>
                        </table>
                    </div>
                    <div class="sinh">
                        <div class="sinh-1" style="display: grid;">
                            <img alt="Healthbook" height="44" src="img/logo.png" width="70" mstalt="155922" _msthash="1" />
                            <span>Lim Bunsiang</span>
                            <p>Pro-labo Group,Phom Penh,Cambodia</p>
                        </div>
                        <div class="sinh-1">
                            <p>Peng Vitou</p>
                        </div>
                        <div class="sinh-1">
                            <p>Srorn Kimpo</p>
                        </div>
                        <div class="sinh-1" style="display: grid;">
                            <p style="margin-top: 18px;">Vong Lina</p>
                            <p>11/5/2022 2:35 PM</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a v-print="'#purchaseorder'" class="btn-purchase btn-light text-capitalize border-0" data-mdb-ripple-color="dark"
                    ><i class="fas fa-print text-primary"></i> Print</a>
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
import moment from "moment";
import Auth from '../../auth/Auth.js';
import print from 'vue3-print-nb';
export default {
    name: "prescriptions",
    components: { Header },
    directives:{
        print
    },
    data() {
        return {
            loggedUser: {
                id: '',
                user_code: '',
                user_name: '',
                email: '',
                role: '',
                statue: ''
            },
            pre: "",
            fullname: "",
            message: "",
            labo: 0,
            gen: "",
            view: [],
            form: {
                id: '',
                sex: "",
                preid: "",
                paid: "",
                lstname: "",
                firstname: "",
                Age: "",
                visit_date: '',
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
                phone1: "",
                village: "",
                commune: "",
                district: "",
                pro_city: "",
                width: "",
                height: "",
                created_by: "",
                updated_by: "",
            },
        }
    },
    async mounted() {
        this.loggedUser = Auth.user;
        console.log(this.loggedUser);
        try {
            if (this.$route.query.preId.trim() != "undefined") {
                this.pre = this.$route.query.preId;
            }
        } catch (error) {
        }
        this.checkedActive()
        this.getid()
        this.getbell();
        this.checkBox();

    },
    methods: {
        checkBox(noid) {
            try {
                const show = "show" + noid;
                const name = "name" + noid;
                const checkbox = document.getElementById(show);
                const box = document.getElementById(name);
                box.style.display = 'block';
                checkbox.addEventListener('click', function handleClick() {
                    if (checkbox.checked) {
                        box.style.display = 'block';
                    } else {
                        box.style.display = 'none';
                    }
                })
            } catch (error) {

            }
        },
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
        getid() {
            axios.get("/api/v1/prescription/getprecriptoin/" + this.pre)
                .then((response) => {
                    this.form = response.data;
                    this.fullname = this.form.firstname + ' ' + this.form.lstname;
                    this.getsex(this.form);
                });
        },
        getbell() {
            axios.get("/api/v1/prescription/getdatavisit/")
                .then((response) => {
                    this.view = response.data;
                    this.labo = this.view.length;

                });
        },
        updateRegister() {
            axios.post("/api/v1/pateint/update/" + this.form.paId, this.form)
                .then(() => {
                    this.message = "save successful.";
                    this.messagebox()
                    this.getRegister()
                })
        },
        updatePrescription() {
            console.log(this.form);
            this.form.updated_by = this.loggedUser.user_code;
            axios.post("/api/v1/prescription/updatPrescription/", this.form)
                .then(() => {
                    this.message = "save successful.";
                    this.messagebox()
                    this.getbell()
                })
        },
        messagebox() {
            var modal = document.getElementById("myModal");
            modal.style.display = "block";
            setTimeout(() => (modal.style.display = "none"), 2000);
        },
        createvisit(preid) {
            this.$router.push({ name: "prescriptions", query: { preId: preid } });
            this.pre = preid;
            this.getid()
        },
        getsex(form) {
            if (parseInt(form.age) > 12) {
                if (form.sex == 'Male') {
                    this.gen = "Man"
                    this.updatePrescription()
                } else {
                    this.gen = "Woman"
                    this.updatePrescription()
                }

            }
            else if (parseInt(this.form.age) <= 12) {
                this.gen = "Children"
                this.updatePrescription()
            }
        },
        formatdatetime(dateform) {
            try {
                return this.dateformart = moment(dateform).format('YYYY-MM-DD hh:mm');
            } catch (error) {
                return dateform;
            }
        },
    }
};
</script>