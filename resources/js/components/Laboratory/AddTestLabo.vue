<template>
    <div class="wrapper">
        <div class="container-fuild">
            <div id="headTitle">
                <div id="logo">
                    <img alt="Healthbook" height="44" src="img/logo.png" width="70" mstalt="155922" _msthash="1" />
                </div>
                <h1 id="title" _msttexthash="48503" _msthash="2">
                    Add TestLabo
                </h1>
            </div>
        </div>
        <div class="container-fuild">
            <Header />
            <ol id="topicPath">
                <li style="margin-left: 330px">
                    <router-link to="">
                        <a href="dashbaord">
                            <font style="vertical-align: inherit"></font>
                            <font style="vertical-align: inherit">
                                Add TestLabo
                            </font>
                        </a>
                    </router-link>
                </li>
            </ol>
        </div>
        <div class="p-3">
            <div class="search-box">
                <div class="search-box-title">
                    Form
                </div>
                <div class="search-box-content">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0" class="tbl_search">
                        <tbody>
                            <tr>
                                <th width="10%">Test Code</th>
                                <td width="90%">
                                    <input class="string_zen clear_text text" id="search_word_simei_s" maxlength="50"
                                        name="patient_name" size="50" type="text" tabindex="10003">
                                </td>
                            </tr>
                            <tr>
                                <th width="10%">Test Name</th>
                                <td width="90%">
                                    <input class="string_zen clear_text text" id="search_word_simei_s" maxlength="50"
                                        name="patient_name" size="50" type="text" tabindex="10003">
                                </td>
                            </tr>
                            <tr>
                                <th width="10%">Group</th>
                                <td width="90%">
                                    <div class="dropdown">
                                        <button class="dropdown-toggle string_zen clear_text text select-menu" type="button"
                                            id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"
                                            size="50">

                                            <i class="fa fa-chevron-down"></i>
                                        </button>
                                        <div class="dropdown-menu each-drop-menu" aria-labelledby="dropdownMenuButton1">
                                            <p>
                                                <input v-model="txtsearch"
                                                    class="string_zen clear_text text search-pro-field" size="50"
                                                    type="text" />
                                            </p>
                                            <ul style="list-style: none" class="scrollable-menu">
                                                <li v-for="uint in uints" :value="uint.unit_code">
                                                    <div class="menu-item">
                                                        <p></p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th width="10%">Category</th>
                                <td width="90%">
                                    <div class="dropdown">
                                        <button class="dropdown-toggle string_zen clear_text text select-menu" type="button"
                                            id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"
                                            size="50">

                                            <i class="fa fa-chevron-down"></i>
                                        </button>
                                        <div class="dropdown-menu each-drop-menu" aria-labelledby="dropdownMenuButton1">
                                            <p>
                                                <input v-model="txtsearch"
                                                    class="string_zen clear_text text search-pro-field" size="50"
                                                    type="text" />
                                            </p>
                                            <ul style="list-style: none" class="scrollable-menu">
                                                <li v-for="uint in uints" :value="uint.unit_code">
                                                    <div class="menu-item">
                                                        <p></p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th width="10%">Test Type</th>
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
                                    style="opacity: 0; width: 54px;" tabindex="10025"></span>
                        </div>
                        <div class="button type2" id="uniform-undefined"><span><i class="fa fa-save" aria-hidden="true"></i>
                                Save<input type="button" value="表 示" class="type2" style="opacity: 0; width: 54px;"
                                    tabindex="10025"></span>
                        </div>
                        <span class="marker"></span>
                    </div>
                </div>

                <div class="box mt-4">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0" class="table table-striped br-table">
                        <thead>
                            <tr class="header-table">
                                <td>No</td>
                                <th>Test Code</th>
                                <th>Test Name</th>
                                <th>Test Group</th>
                                <th>Test Category</th>
                                <th>Test Type</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>test001</td>
                                <td>check blood</td>
                                <td>test</td>
                                <td>test</td>
                                <td>test</td>
                                <td class="text-center">
                                    <div class="button type2" id="uniform-undefined"><span><i class="fa fa-edit"
                                                aria-hidden="true"></i> Edit<input type="button" value="表 示" class="type2"
                                                style="opacity: 0; width: 54px;" tabindex="10025"></span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>test002</td>
                                <td>check heart</td>
                                <td>test2</td>
                                <td>test2</td>
                                <td>test2</td>
                                <td class="text-center">
                                    <div class="button type2" id="uniform-undefined"><span><i class="fa fa-edit"
                                                aria-hidden="true"></i> Edit<input type="button" value="表 示" class="type2"
                                                style="opacity: 0; width: 54px;" tabindex="10025"></span>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="box-footer-pagination"><!----></div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

import Header from '../Header.vue'
import axios from "axios";
export default {
    components: { Header },
    data() {
        return {
            form: {
                sex: 'Both'
            },
            labo: 20,
        }
    },
    mounted() {
        this.checkedActive()
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
                console.log(this.form.sex)
            }
            else if (sex == 'male') {
                this.form.sex = 'Male'
                console.log(this.form.sex)
            }
            else {
                this.form.sex = 'Female'
                console.log(this.form.sex)
            }
        }
    }
};
</script>