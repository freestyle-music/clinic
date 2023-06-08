<template >
  <div>
    <div id="wrap">
      <!-- <div id="header">
        <div id="headTitle">
          <div id="logo"><img alt="Healthbook" height="44" src="img/logo.png" width="70"></div>
          <h1 id="title">受診選択画面</h1>
        </div>
        <ol id="topicPath">
          <li id="tpHome"><a href="/menu/index" title="メニューへ移動する"><img alt="" height="28" src="img/topicPath_home.png"
                width="28"></a></li>
          <li>
            <a href="http://133.167.113.185/yoyaku/yoyaku_list_month/index">予約</a>
          </li>
          <li>
            <span>
              受診選択画面
            </span>
          </li>
        </ol>
        <div id="headInfo">
          <div id="date-info">
            <span class="icon"></span>
            <p id="todays" title="PM 5:10">2023/02/03</p>
          </div>
          <div id="user-info">
            <span class="icon"></span>
            <p id="userName">システム
              <a href="/login/logout" id="btnlogout" title="ログアウト">ログアウト</a>
            </p>
          </div>
        </div>
      </div> -->
    <div class="container-fuild">
      <div id="headTitle">
        <div id="logo">
          <img alt="Healthbook" height="44" src="img/logo.png" width="70" _mstalt="155922" _msthash="1">
        </div>
        <h1 id="title" _msttexthash="48503" _msthash="2">受診選択画面</h1>
      </div>
    </div>
    <Header />
    <ol id="topicPath">
      <li>
        <router-link to="menuclinic">
          <a href="dashbaord">
            <font style="vertical-align : inherit"></font>
            <font style="vertical-align : inherit">Consultaion</font>
          </a>
          </router-link>
      </li>
    </ol>


      <div id="contents">
        <!--#contents -->

        <form accept-charset="UTF-8" action="/yoyaku/jusin_rireki/index" method="post">
          <div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓"><input
              name="authenticity_token" type="hidden" value="xVS99dA+a9ta+zq3RPbI3Ufh2LDmXkPkXsgtSWcTmcs="></div>
          <div class="search-box">
            <h2 class="search-box-title">検索</h2>
            <input id="search" name="search" type="hidden" value="1">
            <div class="search-box-content">
              <table width="100%" border="0" cellpadding="0" cellspacing="0" class="tbl_search">
                <tbody>
                  <tr>
                    <th width="10%">受診者名</th>
                    <td width="90%">
                      <input class="code clear_text text" id="search_word_jusinsya_code" maxlength="8"
                        name="search_word[jusinsya_code]" v-model="Jussisearch.search" size="9" type="text"
                        tabindex="10000" style="width: 264px;">
                    </td>
                  </tr>
                  <tr>
                    <th width="10%">生年月日</th>
                    <td width="90%">
                      <input class="code clear_text text" id="search_word_jusinsya_code" maxlength="8"
                        name="search_word[jusinsya_code]" @change="changeDate()" v-model="Jussisearch.jusin_ymdto"
                        size="9" type="date" tabindex="10000"><span> ～
                      </span><input class="code clear_text text" v-model="Jussisearch.jusin_ymdfrom"
                        id="search_word_jusinsya_code" @change="changeDate()" maxlength="8"
                        name="search_word[jusinsya_code]" size="9" type="date" tabindex="10000">
                    </td>
                  </tr>
                  <tr>
                    <th width="10%">外来・入院</th>
                    <td width="90%">
                      <div v-if="Jussisearch.jusin_kbn != 1 && Jussisearch.jusin_kbn != 2" class="radio"
                        id="uniform-search_word_sex_0"><span class="checked">
                          <input @click="checkboxserch(0)" checked="checked" id="search_word_sex_0"
                            name="search_word[sex]" type="radio" value="0" tabindex="10013" style="opacity: 0;"></span>
                      </div>
                      <div v-else class="radio" id="uniform-search_word_sex_0"><span>
                          <input @click="checkboxserch(0)" id="search_word_sex_0" name="search_word[sex]" type="radio"
                            value="0" tabindex="10013" style="opacity: 0;"></span>
                      </div>
                      <label for="jusinsya_sex_0">両方</label>
                      <div v-if="Jussisearch.jusin_kbn == 1" class="radio" id="uniform-search_word_sex_1"><span
                          class="checked">
                          <input @click="checkboxserch(1)" checked="checked" id="search_word_sex_1"
                            name="search_word[sex]" type="radio" value="1" tabindex="10014" style="opacity: 0;"></span>
                      </div>
                      <div v-else class="radio" id="uniform-search_word_sex_1"><span>
                          <input @click="checkboxserch(1)" id="search_word_sex_1" name="search_word[sex]" type="radio"
                            value="1" tabindex="10014" style="opacity: 0;"></span>
                      </div>
                      <label for="jusinsya_sex_1">外来</label>
                      <div v-if="Jussisearch.jusin_kbn == 2" class="radio" id="uniform-search_word_sex_2"><span
                          class="checked">
                          <input @click="checkboxserch(2)" checked="checked" id="search_word_sex_2"
                            name="search_word[sex]" type="radio" value="2" tabindex="10015" style="opacity: 0;"></span>
                      </div>
                      <div v-else class="radio" id="uniform-search_word_sex_2"><span>
                          <input @click="checkboxserch(2)" id="search_word_sex_2" name="search_word[sex]" type="radio"
                            value="2" tabindex="10015" style="opacity: 0;"></span>
                      </div>
                      <label for="jusinsya_sex_2">入院</label>
                    </td>
                  </tr>
                </tbody>
              </table>
              <div class="search-box-footer" style="margin: 0;">
                <div class="button type2" id="uniform-undefined"><span>検索<input type="button" value="表 示" class="type2"
                      @click="searchbtn()" style="opacity: 0; width: 54px;" tabindex="10035"></span></div>
              </div>
            </div>
          </div>
        </form>
        <div class="box">
          <div class="box-footer-pagination">
            <div class="pagination">
              <div class="pagination">


                <span class="page current">
                  1
                </span>

                <span class="page">
                  <a href="/yoyaku/jusin_rireki/index?authenticity_token=xVS99dA%2Ba9ta%2Bzq3RPbI3Ufh2LDmXkPkXsgtSWcTmcs%3D&amp;page=2&amp;paging=1&amp;utf8=%E2%9C%93&amp;yoyaku_search_month%5Bhozon_search_date%5D=2023-02-03&amp;yoyaku_search_month%5Bsearch_date_date_input_d%5D=1&amp;yoyaku_search_month%5Bsearch_date_date_input_m%5D=2&amp;yoyaku_search_month%5Bsearch_date_date_input_v%5D=1&amp;yoyaku_search_month%5Bsearch_date_date_input_y%5D=2023"
                    rel="next">2</a>
                </span>

                <span class="page">
                  <a
                    href="/yoyaku/jusin_rireki/index?authenticity_token=xVS99dA%2Ba9ta%2Bzq3RPbI3Ufh2LDmXkPkXsgtSWcTmcs%3D&amp;page=3&amp;paging=1&amp;utf8=%E2%9C%93&amp;yoyaku_search_month%5Bhozon_search_date%5D=2023-02-03&amp;yoyaku_search_month%5Bsearch_date_date_input_d%5D=1&amp;yoyaku_search_month%5Bsearch_date_date_input_m%5D=2&amp;yoyaku_search_month%5Bsearch_date_date_input_v%5D=1&amp;yoyaku_search_month%5Bsearch_date_date_input_y%5D=2023">3</a>
                </span>

                <span class="next">
                  <a href="/yoyaku/jusin_rireki/index?authenticity_token=xVS99dA%2Ba9ta%2Bzq3RPbI3Ufh2LDmXkPkXsgtSWcTmcs%3D&amp;page=2&amp;paging=1&amp;utf8=%E2%9C%93&amp;yoyaku_search_month%5Bhozon_search_date%5D=2023-02-03&amp;yoyaku_search_month%5Bsearch_date_date_input_d%5D=1&amp;yoyaku_search_month%5Bsearch_date_date_input_m%5D=2&amp;yoyaku_search_month%5Bsearch_date_date_input_v%5D=1&amp;yoyaku_search_month%5Bsearch_date_date_input_y%5D=2023"
                    rel="next"><span class="translation_missing">&gt;</span></a>
                </span>

                <span class="last">
                  <a
                    href="/yoyaku/jusin_rireki/index?authenticity_token=xVS99dA%2Ba9ta%2Bzq3RPbI3Ufh2LDmXkPkXsgtSWcTmcs%3D&amp;page=3&amp;paging=1&amp;utf8=%E2%9C%93&amp;yoyaku_search_month%5Bhozon_search_date%5D=2023-02-03&amp;yoyaku_search_month%5Bsearch_date_date_input_d%5D=1&amp;yoyaku_search_month%5Bsearch_date_date_input_m%5D=2&amp;yoyaku_search_month%5Bsearch_date_date_input_v%5D=1&amp;yoyaku_search_month%5Bsearch_date_date_input_y%5D=2023"><span
                      class="translation_missing">&gt;&gt;</span></a>
                </span>

              </div>

            </div>
          </div>
          <div class="box-content">
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="tbl_list tbl_stripe">
              <thead>
                <tr>
                  <th width="7%">受診者コード</th>
                  <th width="12%">区分</th>
                  <th width="12%">名前</th>
                  <th width="15%">氏名</th>
                  <th width="15%">名前（英語）</th>
                  <th width="15%">氏名（英語）</th>
                  <th width="15%">日付</th>
                  <th width="6%"></th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="jusu in Jusines">
                  <td>{{ jusu.id }}</td>
                  <td>
                    <div v-if="jusu.jusin_kbn == 1" class="list_align_left">外来</div>
                    <div v-else class="list_align_left">入院 </div>
                  </td>
                  <td>{{ jusu.simei_s }}</td>
                  <td>{{ jusu.simei_m }}</td>
                  <td>{{ jusu.simei_roma_s }} </td>
                  <td>{{ jusu.simei_roma_m }} </td>
                  <td>{{ jusu.jusin_ymd }}</td>
                  <td width="9%">
                    <div class="button mini" data-bs-toggle="modal" data-bs-target="#formJsineEdite"
                      id="uniform-undefined"><span>選択<input type="button" value="詳細" class="mini"
                          @click="getEdite(jusu)" style="opacity: 0; width: 50px;" tabindex="10037"></span></div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="box-footer-pagination">
            <div class="pagination">
              <div class="pagination">


                <span class="page current">
                  1
                </span>

                <span class="page">
                  <a href="/yoyaku/jusin_rireki/index?authenticity_token=xVS99dA%2Ba9ta%2Bzq3RPbI3Ufh2LDmXkPkXsgtSWcTmcs%3D&amp;page=2&amp;paging=1&amp;utf8=%E2%9C%93&amp;yoyaku_search_month%5Bhozon_search_date%5D=2023-02-03&amp;yoyaku_search_month%5Bsearch_date_date_input_d%5D=1&amp;yoyaku_search_month%5Bsearch_date_date_input_m%5D=2&amp;yoyaku_search_month%5Bsearch_date_date_input_v%5D=1&amp;yoyaku_search_month%5Bsearch_date_date_input_y%5D=2023"
                    rel="next">2</a>
                </span>

                <span class="page">
                  <a
                    href="/yoyaku/jusin_rireki/index?authenticity_token=xVS99dA%2Ba9ta%2Bzq3RPbI3Ufh2LDmXkPkXsgtSWcTmcs%3D&amp;page=3&amp;paging=1&amp;utf8=%E2%9C%93&amp;yoyaku_search_month%5Bhozon_search_date%5D=2023-02-03&amp;yoyaku_search_month%5Bsearch_date_date_input_d%5D=1&amp;yoyaku_search_month%5Bsearch_date_date_input_m%5D=2&amp;yoyaku_search_month%5Bsearch_date_date_input_v%5D=1&amp;yoyaku_search_month%5Bsearch_date_date_input_y%5D=2023">3</a>
                </span>

                <span class="next">
                  <a href="/yoyaku/jusin_rireki/index?authenticity_token=xVS99dA%2Ba9ta%2Bzq3RPbI3Ufh2LDmXkPkXsgtSWcTmcs%3D&amp;page=2&amp;paging=1&amp;utf8=%E2%9C%93&amp;yoyaku_search_month%5Bhozon_search_date%5D=2023-02-03&amp;yoyaku_search_month%5Bsearch_date_date_input_d%5D=1&amp;yoyaku_search_month%5Bsearch_date_date_input_m%5D=2&amp;yoyaku_search_month%5Bsearch_date_date_input_v%5D=1&amp;yoyaku_search_month%5Bsearch_date_date_input_y%5D=2023"
                    rel="next"><span class="translation_missing">&gt;</span></a>
                </span>

                <span class="last">
                  <a
                    href="/yoyaku/jusin_rireki/index?authenticity_token=xVS99dA%2Ba9ta%2Bzq3RPbI3Ufh2LDmXkPkXsgtSWcTmcs%3D&amp;page=3&amp;paging=1&amp;utf8=%E2%9C%93&amp;yoyaku_search_month%5Bhozon_search_date%5D=2023-02-03&amp;yoyaku_search_month%5Bsearch_date_date_input_d%5D=1&amp;yoyaku_search_month%5Bsearch_date_date_input_m%5D=2&amp;yoyaku_search_month%5Bsearch_date_date_input_v%5D=1&amp;yoyaku_search_month%5Bsearch_date_date_input_y%5D=2023"><span
                      class="translation_missing">&gt;&gt;</span></a>
                </span>

              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="footer">
      <div id="copyright">Copyright (C) healthbook. ALL Right s Researved</div>
    </div>

    <!-- 検索ダイアログ用 -->
    <div id="dialog-modal" title="kennsaku" style="display:none">
      <div id="dialog-modal-content"></div>
    </div>
    <div id="ajax-error"></div>

    <!-- 検索ダイアログ用 -->
    <div id="dialog-modal2" title="kennsaku2" style="display:none">
      <div id="dialog-modal-content2"></div>
    </div>
    <div id="ajax-error2"></div>

    <!-- 検索ダイアログ用 -->
    <div id="dialog-modal3" title="kennsaku3" style="display:none">
      <div id="dialog-modal-content3"></div>
    </div>
    <div id="ajax-error3"></div>
  </div>
  <div class="modal fade ui-modal" id="formJsineEdite" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="formJsineEdite" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content ui-dialog">
        <div class="ui-widget-header" style="padding: 0;">
          <a href="#" class="ui-dialog-titlebar-close ui-corner-all" role="button" data-bs-dismiss="modal"
            style=" z-index: 1; padding: 0;top: 34px;"> <span class="ui-icon ui-icon-closethick"
              style="z-index: 999999999; background-color: crimson;top: 30px; color: aliceblue;">close</span></a>
        </div>
        <div class="ui-dialog-content" id="purchaseorder">
          <div class="form-box box-w-middle">
            <h2 class="box-title">受診選択画面</h2>
            <input id="jigyosyo_group_jigyosyo_id" name="jigyosyo_group[jigyosyo_id]" type="hidden" value="3">
            <input id="jigyosyo_group_id" name="jigyosyo_group[id]" type="hidden" value="3">
            <input id="copy_source_zip_cd1" name="copy_source_zip_cd1" type="hidden" value="700">
            <input id="copy_source_zip_cd2" name="copy_source_zip_cd2" type="hidden" value="0001">
            <input id="copy_source_pref" name="copy_source_pref" type="hidden" value="岡山県">
            <input id="copy_source_addr1" name="copy_source_addr1" type="hidden" value="岡山市北区">
            <input id="copy_source_addr2" name="copy_source_addr2" type="hidden" value="">
            <input id="copy_source_addr3" name="copy_source_addr3" type="hidden" value="">
            <input id="copy_source_tel1" name="copy_source_tel1" type="hidden">
            <input id="copy_source_tel2" name="copy_source_tel2" type="hidden">
            <input id="copy_source_tel3" name="copy_source_tel3" type="hidden">
            <input id="copy_source_fax1" name="copy_source_fax1" type="hidden">
            <input id="copy_source_fax2" name="copy_source_fax2" type="hidden">
            <input id="copy_source_fax3" name="copy_source_fax3" type="hidden">

            <div class="box-content">
              <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tbl_form_readonly">
                <tbody>
                  <tr>
                    <th width="18%">事業所番号</th>
                    <td width="13%">
                      {{ jusine.id }}
                    </td>
                    <th width="18%">事業所名</th>
                    <td width="51%">
                      {{ jusine.simei_s }} {{ jusine.simei_m }}
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>

            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tbl_form">
              <tbody>
                <tr class="line-dashed">
                  <th width="18%">所属番号</th>
                  <td width="82%">
                    <div>
                      <input class="code text" id="jigyosyo_group_jigyosyo_group_code" maxlength="5"
                        name="jigyosyo_group[jigyosyo_group_code]" size="6" type="text" value="1" tabindex="10000">
                    </div>
                  </td>
                </tr>
                <tr class="line-dashed">
                  <th width="18%">グループ名</th>
                  <td width="82%">
                    <div>
                      <input class="string_zen text" id="jigyosyo_group_jigyosyo_group_name" maxlength="50"
                        name="jigyosyo_group[jigyosyo_group_name]" size="50" type="text" value="" tabindex="10001">
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>

            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tbl_form">
              <tbody>
                <tr class="line-dashed">
                  <th rowspan="7" width="18%">資材送付先</th>
                  <th width="18%">郵便番号</th>
                  <td width="64%">
                    <div>
                      <input class="number text" id="jigyosyo_group_sizai_zip_cd1" maxlength="3"
                        name="jigyosyo_group[sizai_zip_cd1]" size="3" type="text" value="700" tabindex="10002">-
                      <input class="number text" id="jigyosyo_group_sizai_zip_cd2" maxlength="4"
                        name="jigyosyo_group[sizai_zip_cd2]" size="4" type="text" value="0001" tabindex="10003">
                      <div class="button mini" id="uniform-jyusyo_kensaku"><span>住所検索<button id="jyusyo_kensaku"
                            type="button" class="mini"
                            onclick="AjaxZip2.zip2addr('jigyosyo_group_sizai_zip_cd1','jigyosyo_group_sizai_pref','jigyosyo_group_sizai_addr1','jigyosyo_group_sizai_zip_cd2');"
                            style="opacity: 0; width: 76px;" tabindex="10004">住所検索</button></span></div>
                      <div class="button mini" id="uniform-jyusyo_copy"><span>所在地をコピー<button id="jyusyo_copy"
                            type="button" class="mini" onclick="jyusyo_copy_script('sizai');"
                            style="opacity: 0; width: 115px;" tabindex="10005">所在地をコピー</button></span></div>
                    </div>
                  </td>
                </tr>
                <tr class="line-dashed">
                  <th width="18%">都道府県</th>
                  <td width="64%">
                    <div>
                      <div class="selector" id="uniform-jigyosyo_group_sizai_pref"><span>岡山県</span><select
                          id="jigyosyo_group_sizai_pref" name="jigyosyo_group[sizai_pref]" tabindex="10006"
                          style="min-width: 78px; opacity: 0; width: 93px;">
                          <option value=""></option>
                          <option value="岡山県" selected="selected">岡山県</option>
                          <option value="鳥取県">鳥取県</option>
                          <option value="島根県">島根県</option>
                          <option value="広島県">広島県</option>
                          <option value="山口県">山口県</option>
                          <option value="北海道">北海道</option>
                          <option value="青森県">青森県</option>
                          <option value="岩手県">岩手県</option>
                          <option value="宮城県">宮城県</option>
                          <option value="秋田県">秋田県</option>
                          <option value="山形県">山形県</option>
                          <option value="福島県">福島県</option>
                          <option value="茨城県">茨城県</option>
                          <option value="栃木県">栃木県</option>
                          <option value="群馬県">群馬県</option>
                          <option value="埼玉県">埼玉県</option>
                          <option value="千葉県">千葉県</option>
                          <option value="東京都">東京都</option>
                          <option value="神奈川県">神奈川県</option>
                          <option value="新潟県">新潟県</option>
                          <option value="富山県">富山県</option>
                          <option value="石川県">石川県</option>
                          <option value="福井県">福井県</option>
                          <option value="山梨県">山梨県</option>
                          <option value="長野県">長野県</option>
                          <option value="岐阜県">岐阜県</option>
                          <option value="静岡県">静岡県</option>
                          <option value="愛知県">愛知県</option>
                          <option value="三重県">三重県</option>
                          <option value="滋賀県">滋賀県</option>
                          <option value="京都府">京都府</option>
                          <option value="大阪府">大阪府</option>
                          <option value="兵庫県">兵庫県</option>
                          <option value="奈良県">奈良県</option>
                          <option value="和歌山県">和歌山県</option>
                          <option value="徳島県">徳島県</option>
                          <option value="香川県">香川県</option>
                          <option value="愛媛県">愛媛県</option>
                          <option value="高知県">高知県</option>
                          <option value="福岡県">福岡県</option>
                          <option value="佐賀県">佐賀県</option>
                          <option value="長崎県">長崎県</option>
                          <option value="熊本県">熊本県</option>
                          <option value="大分県">大分県</option>
                          <option value="宮崎県">宮崎県</option>
                          <option value="鹿児島県">鹿児島県</option>
                          <option value="沖縄県">沖縄県</option>
                        </select></div>
                    </div>
                  </td>
                </tr>
                <tr class="line-dashed">
                  <th width="18%">住所１</th>
                  <td width="82%">
                    <div>
                      <input class="string_zen text" id="jigyosyo_group_sizai_addr1" maxlength="100"
                        name="jigyosyo_group[sizai_addr1]" size="50" type="text" value="岡山市北区" tabindex="10007">
                    </div>
                  </td>
                </tr>
                <tr class="line-dashed">
                  <th width="18%">住所２</th>
                  <td width="82%">
                    <div>
                      <input class="string_zen text" id="jigyosyo_group_sizai_addr2" maxlength="100"
                        name="jigyosyo_group[sizai_addr2]" size="50" type="text" value="" tabindex="10008">
                    </div>
                  </td>
                </tr>
                <tr class="line-dashed">
                  <th width="18%">住所３</th>
                  <td width="82%">
                    <div>
                      <input class="string_zen text" id="jigyosyo_group_sizai_addr3" maxlength="100"
                        name="jigyosyo_group[sizai_addr3]" size="50" type="text" value="" tabindex="10009">
                    </div>
                  </td>
                </tr>
                <tr class="line-dashed">
                  <th width="18%">電話番号</th>
                  <td width="82%">
                    <div>
                      <input class="number text" id="jigyosyo_group_sizai_tel1" maxlength="5"
                        name="jigyosyo_group[sizai_tel1]" size="6" type="text" tabindex="10010">-
                      <input class="number text" id="jigyosyo_group_sizai_tel2" maxlength="5"
                        name="jigyosyo_group[sizai_tel2]" size="6" type="text" tabindex="10011">-
                      <input class="number text" id="jigyosyo_group_sizai_tel3" maxlength="5"
                        name="jigyosyo_group[sizai_tel3]" size="6" type="text" tabindex="10012">
                    </div>
                  </td>
                </tr>
                <tr class="line-dashed">
                  <th width="18%">ＦＡＸ</th>
                  <td width="82%">
                    <div>
                      <input class="number text" id="jigyosyo_group_sizai_fax1" maxlength="5"
                        name="jigyosyo_group[sizai_fax1]" size="6" type="text" tabindex="10013">-
                      <input class="number text" id="jigyosyo_group_sizai_fax2" maxlength="5"
                        name="jigyosyo_group[sizai_fax2]" size="6" type="text" tabindex="10014">-
                      <input class="number text" id="jigyosyo_group_sizai_fax3" maxlength="5"
                        name="jigyosyo_group[sizai_fax3]" size="6" type="text" tabindex="10015">
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>

            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tbl_form">
              <tbody>
                <tr class="line-dashed">
                  <th rowspan="7" width="18%">結果送付先</th>
                  <th width="18%">郵便番号</th>
                  <td width="64%">
                    <div>
                      <input class="number text" id="jigyosyo_group_report_zip_cd1" maxlength="3"
                        name="jigyosyo_group[report_zip_cd1]" size="3" type="text" value="700" tabindex="10016">-
                      <input class="number text" id="jigyosyo_group_report_zip_cd2" maxlength="4"
                        name="jigyosyo_group[report_zip_cd2]" size="4" type="text" value="0001" tabindex="10017">
                      <div class="button mini" id="uniform-jyusyo_kensaku"><span>住所検索<button id="jyusyo_kensaku"
                            type="button" class="mini"
                            onclick="AjaxZip2.zip2addr('jigyosyo_group_report_zip_cd1','jigyosyo_group_report_pref','jigyosyo_group_report_addr1','jigyosyo_group_report_zip_cd2');"
                            style="opacity: 0; width: 76px;" tabindex="10018">住所検索</button></span></div>
                      <div class="button mini" id="uniform-jyusyo_copy"><span>所在地をコピー<button id="jyusyo_copy"
                            type="button" class="mini" onclick="jyusyo_copy_script('report');"
                            style="opacity: 0; width: 115px;" tabindex="10019">所在地をコピー</button></span></div>
                    </div>
                  </td>
                </tr>
                <tr class="line-dashed">
                  <th width="18%">都道府県</th>
                  <td width="64%">
                    <div>
                      <div class="selector" id="uniform-jigyosyo_group_report_pref"><span>岡山県</span><select
                          id="jigyosyo_group_report_pref" name="jigyosyo_group[report_pref]" tabindex="10020"
                          style="min-width: 78px; opacity: 0; width: 93px;">
                          <option value=""></option>
                          <option value="岡山県" selected="selected">岡山県</option>
                          <option value="鳥取県">鳥取県</option>
                          <option value="島根県">島根県</option>
                          <option value="広島県">広島県</option>
                          <option value="山口県">山口県</option>
                          <option value="北海道">北海道</option>
                          <option value="青森県">青森県</option>
                          <option value="岩手県">岩手県</option>
                          <option value="宮城県">宮城県</option>
                          <option value="秋田県">秋田県</option>
                          <option value="山形県">山形県</option>
                          <option value="福島県">福島県</option>
                          <option value="茨城県">茨城県</option>
                          <option value="栃木県">栃木県</option>
                          <option value="群馬県">群馬県</option>
                          <option value="埼玉県">埼玉県</option>
                          <option value="千葉県">千葉県</option>
                          <option value="東京都">東京都</option>
                          <option value="神奈川県">神奈川県</option>
                          <option value="新潟県">新潟県</option>
                          <option value="富山県">富山県</option>
                          <option value="石川県">石川県</option>
                          <option value="福井県">福井県</option>
                          <option value="山梨県">山梨県</option>
                          <option value="長野県">長野県</option>
                          <option value="岐阜県">岐阜県</option>
                          <option value="静岡県">静岡県</option>
                          <option value="愛知県">愛知県</option>
                          <option value="三重県">三重県</option>
                          <option value="滋賀県">滋賀県</option>
                          <option value="京都府">京都府</option>
                          <option value="大阪府">大阪府</option>
                          <option value="兵庫県">兵庫県</option>
                          <option value="奈良県">奈良県</option>
                          <option value="和歌山県">和歌山県</option>
                          <option value="徳島県">徳島県</option>
                          <option value="香川県">香川県</option>
                          <option value="愛媛県">愛媛県</option>
                          <option value="高知県">高知県</option>
                          <option value="福岡県">福岡県</option>
                          <option value="佐賀県">佐賀県</option>
                          <option value="長崎県">長崎県</option>
                          <option value="熊本県">熊本県</option>
                          <option value="大分県">大分県</option>
                          <option value="宮崎県">宮崎県</option>
                          <option value="鹿児島県">鹿児島県</option>
                          <option value="沖縄県">沖縄県</option>
                        </select></div>
                    </div>
                  </td>
                </tr>
                <tr class="line-dashed">
                  <th width="18%">住所１</th>
                  <td width="82%">
                    <div>
                      <input class="string_zen text" id="jigyosyo_group_report_addr1" maxlength="100"
                        name="jigyosyo_group[report_addr1]" size="50" type="text" value="岡山市北区" tabindex="10021">
                    </div>
                  </td>
                </tr>
                <tr class="line-dashed">
                  <th width="18%">住所２</th>
                  <td width="82%">
                    <div>
                      <input class="string_zen text" id="jigyosyo_group_report_addr2" maxlength="100"
                        name="jigyosyo_group[report_addr2]" size="50" type="text" value="" tabindex="10022">
                    </div>
                  </td>
                </tr>
                <tr class="line-dashed">
                  <th width="18%">住所３</th>
                  <td width="82%">
                    <div>
                      <input class="string_zen text" id="jigyosyo_group_report_addr3" maxlength="100"
                        name="jigyosyo_group[report_addr3]" size="50" type="text" value="" tabindex="10023">
                    </div>
                  </td>
                </tr>
                <tr class="line-dashed">
                  <th width="18%">電話番号</th>
                  <td width="82%">
                    <div>
                      <input class="number text" id="jigyosyo_group_report_tel1" maxlength="5"
                        name="jigyosyo_group[report_tel1]" size="6" type="text" tabindex="10024">-
                      <input class="number text" id="jigyosyo_group_report_tel2" maxlength="5"
                        name="jigyosyo_group[report_tel2]" size="6" type="text" tabindex="10025">-
                      <input class="number text" id="jigyosyo_group_report_tel3" maxlength="5"
                        name="jigyosyo_group[report_tel3]" size="6" type="text" tabindex="10026">
                    </div>
                  </td>
                </tr>
                <tr class="line-dashed">
                  <th width="18%">ＦＡＸ</th>
                  <td width="82%">
                    <div>
                      <input class="number text" id="jigyosyo_group_report_fax1" maxlength="5"
                        name="jigyosyo_group[report_fax1]" size="6" type="text" tabindex="10027">-
                      <input class="number text" id="jigyosyo_group_report_fax2" maxlength="5"
                        name="jigyosyo_group[report_fax2]" size="6" type="text" tabindex="10028">-
                      <input class="number text" id="jigyosyo_group_report_fax3" maxlength="5"
                        name="jigyosyo_group[report_fax3]" size="6" type="text" tabindex="10029">
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>

            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tbl_form">
              <tbody>
                <tr class="line-dashed">
                  <th width="18%">備考</th>
                  <td width="82%">
                    <div>
                      <textarea cols="50" id="jigyosyo_group_biko" name="jigyosyo_group[biko]" rows="5" class="uniform"
                        tabindex="10030"></textarea>
                    </div>
                  </td>
                </tr>
                <tr class="line-dashed">
                  <th width="18%">削除</th>
                  <td width="82%">
                    <div>
                      <input name="jigyosyo_group[del_flg]" type="hidden" value="0">
                      <div class="checker" id="uniform-jigyosyo_group_del_flg"><span><input id="jigyosyo_group_del_flg"
                            name="jigyosyo_group[del_flg]" type="checkbox" value="1" tabindex="10031"
                            style="opacity: 0;"></span>
                      </div><label for="jigyosyo_group_del_flg">削除</label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>

            <div class="box-footer-default">
              <div class="button type2" id="uniform-undefined"><span>確 認<input type="button" class="type2" value="確 認"
                    onclick="submit_first_form('/master/jigyosyo_group/check')" style="opacity: 0; width: 54px;"
                    tabindex="10032"></span></div>
              <div class="button type2" id="uniform-undefined"><span>戻 る<input type="button" class="type2" value="戻 る"
                    onclick="move_url('/master/jigyosyo/detail?id=3')" style="opacity: 0; width: 54px;"
                    tabindex="10033"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import axios from "axios";
import Header from "../Header.vue";
import moment from "moment";
export default {
  components: { Header },
  data() {
    return {
      Jusines: [],
      jusine: [],
      Jussisearch: {
        jusin_ymdfrom: null,
        jusin_ymdto: null,
        search: '',
        jusin_kbn: 0,
      }
    }
  },
  mounted() {
    this.getJusine();
    this.Jussisearch.jusin_ymdto = moment(new Date()).format('YYYY-MM-DD');
    this.Jussisearch.jusin_ymdfrom = moment(new Date()).format('YYYY-MM-DD');
  },
  methods: {
    getJusine() {
      axios.get("/api/v1/jusinsController/index/").then((response) => {
        this.Jusines = response.data;
        console.log(this.Jusines);
      });
    },
    checkboxserch(x) {
      this.Jussisearch.jusin_kbn = x;
    },
    changeDate() {
      if (this.Jussisearch.jusin_ymdto > this.Jussisearch.jusin_ymdfrom) {
        this.Jussisearch.jusin_ymdto = this.Jussisearch.jusin_ymdfrom = moment(new Date()).format('YYYY-MM-DD');
      }
    },
    searchbtn() {
      console.log(this.Jussisearch);
    },
    getEdite(ex) {
      this.jusine = ex
    }
  }
};
</script>