<template >
<div class="wrapper">
        <!-- <div class="container">
      <div id="header">
        <div id="headTitle">
          <div id="logo"><img alt="Healthbook" height="44" src="img/logo.png" width="70" /></div>
          <h1 id="title">メニュー</h1>
        </div>
        <ol id="topicPath">
          <li id="tpHome"><a href="/" title="メニューへ移動する"><img alt="" height="28" src="img/topicPath_home.png" width="28" /></a></li>              
        </ol>
        <div id="headInfo">
          <div id="date-info">
            <span class="icon"></span>
            <p id="todays" title="PM 4:45">2022/08/19</p>
          </div>
          <div id="user-info">
            <span class="icon"></span>
            <p id="userName">システム 
              <a href="/login/logout" id="btnlogout" title="ログアウト">ログアウト</a></p>
          </div>
        </div>
        </div>  
           </div>  -->
           <div class="container-fuild">
   <div id="header">
        <div id="headTitle">
          <div id="logo"><img alt="Healthbook" height="44" src="img/logo.png" width="70"></div>
          <h1 id="title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Patient master</font></font></h1>
        </div>
        <ol id="topicPath">
          <li id="tpHome"><a href="/" title="go to menu"><img alt="" height="28" src="img/topicPath_home.png" width="28"></a></li>              
              <li>
                  <a href="dashbaord"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Master Admin</font></font></a>
              </li>
        </ol>
        <div id="headInfo">
          <div id="date-info">
            <span class="icon"></span>
            <p id="todays" original-title="PM12:13"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022/08/25</font></font></p>
          </div>
          <div id="user-info">
            <span class="icon"></span>
            <p id="userName"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">system 
              </font></font><a href="/login/logout" id="btnlogout" original-title="logout"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">logout</font></font></a></p>
          </div>
        </div>
        <!-- / #header --></div>
    </div>
<div class="search-box">
    <div class="navbars ">
        <input id="all1" type="radio" name="nav-item" checked />
        <label class="nav-item mb-3" for="all1"> <h2 class="search-box-title">
    search</h2></label>
        <input id="selling1" type="radio" name="nav-item" />
        <label class="nav-item mb-3" for="selling1"> <h2 class="search-box-title">
    search</h2></label>
        <input id="sold1" type="radio" name="nav-item" />
        <label class="nav-item mb-3" for="sold1"> <h2 class="search-box-title">
    search</h2></label>
        <input id="like1" type="radio" name="nav-item" />
        <label class="nav-item mb-3" for="like1"> <h2 class="search-box-title">
    search</h2></label>

        <div class="nav-content" id="all-content1">
  <div id="product">
        <!--#contents -->
<div class="search-box mb-4">
<h2 class="search-box-title">search</h2>
<input id="search" name="search" type="hidden" value="1">

<div class="search-box-content">
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="tbl_search">
<tbody>
<tr>
<th width="10%">Product No</th>
<td width="90%">
<input class="code clear_text text" id="search_word_jusinsya_code" maxlength="8" name="search_word[jusinsya_code]" size="9" type="text" value="" tabindex="10000">
</td>
</tr>
<tr>
<th width="10%">Product Barcode</th>
<td width="90%">
<input class="string_zen_kana clear_text text" id="search_word_simei_kana_s" maxlength="50" name="search_word[simei_kana_s]" size="50" type="text" value="" tabindex="10001">　
</td>
</tr>
<tr>
<th width="10%">Code 1</th>
<td width="90%">
<label for="kanji_s">Stock Unit Of Mesure Code</label>
<input class="string_zen clear_text text" id="search_word_simei_s" maxlength="50" name="search_word[simei_s]" size="50" type="text" value="" tabindex="10003">　
<label for="kanji_m">Purche Unit Of Mesure Code</label>
<input class="string_zen clear_text text" id="search_word_simei_m" maxlength="50" name="search_word[simei_m]" size="50" type="text" value="" tabindex="10004">
</td>
</tr>
<tr>
<th width="10%">Code 2 </th>
<td width="90%">
<label for="kanji_s">Sup Code</label>
<input class="string_zen clear_text text" id="search_word_simei_s" maxlength="50" name="search_word[simei_s]" size="50" type="text" value="" tabindex="10003">　
<label for="kanji_m">Varaiant Code</label>
<input class="string_zen clear_text text" id="search_word_simei_m" maxlength="50" name="search_word[simei_m]" size="50" type="text" value="" tabindex="10004">
</td>
</tr>
<tr>
<th width="10%">Description1</th>
<td width="90%">
fffffffffff
</td>
</tr>
<tr>
<th width="10%">Description2</th>
<td width="90%">
    aaaaaaaaa
</td>
</tr>
<tr>
<th width="10%">Bom no</th>
<td width="90%">
wwwwwwwwwwwwwwwwwwwww
</td>
</tr>

<tr>
<th width="10%">Unit Price</th>
<td width="90%">
wwwwwwwwwwwwwwwwwwwww
</td>
</tr>
<tr>
<th width="10%">Isactive</th>
<td width="90%">
wwwwwwwwwwwwwwwwwwwww
</td>
</tr>
<tr>
<th width="10%">Isdelete</th>
<td width="90%">
wwwwwwwwwwwwwwwwwwwww
</td>
</tr>
</tbody>
</table>
<div class="search-box-footer">
<div class="button type2" id="uniform-undefined"><span><input type="button" value="display" class="type2" onclick="submit_first_form('/master/jusinsya/index')" style="opacity: 0; width: 54px;" tabindex="10025"> display</span></div>
<div class="button type2" id="uniform-undefined"><span>clear <input type="button" value="clear" class="type2" onclick="input_clear();" style="opacity: 0; width: 63px;" tabindex="10026"></span></div>
<div class="button type2" id="uniform-undefined"><span>CSV <input type="button" value="outputCSV output" class="type2" onclick="submit_first_form_no_double_check('/master/jusinsya/csv')" style="opacity: 0; width: 76px;" tabindex="10027"></span></div>
<span class="marker"></span>
</div>
</div>

</div>
<div class="box">
<div class="box-footer-pagination">
<div class="pagination">
  <div class="pagination">
    
    
        <span class="page current">
  1
</span>

        <span class="page">
  <a href="/master/jusinsya/index?_birthday_fr_date_input_d=&amp;_birthday_fr_date_input_m=&amp;_birthday_fr_date_input_w=3&amp;_birthday_fr_date_input_y=&amp;_birthday_to_date_input_d=&amp;_birthday_to_date_input_m=&amp;_birthday_to_date_input_w=3&amp;_birthday_to_date_input_y=&amp;_last_jusin_ymd_fr_date_input_d=&amp;_last_jusin_ymd_fr_date_input_m=&amp;_last_jusin_ymd_fr_date_input_w=5&amp;_last_jusin_ymd_fr_date_input_y=&amp;_last_jusin_ymd_to_date_input_d=&amp;_last_jusin_ymd_to_date_input_m=&amp;_last_jusin_ymd_to_date_input_w=5&amp;_last_jusin_ymd_to_date_input_y=&amp;authenticity_token=5bKqOETptb6gG7NKGDACORem61v2%2BgOPKI7C1mNir5k%3D&amp;page=2&amp;search=1&amp;search_word%5Bbirthday_fr%5D=&amp;search_word%5Bbirthday_to%5D=&amp;search_word%5Bjusinsya_code%5D=&amp;search_word%5Blast_jusin_ymd_fr%5D=&amp;search_word%5Blast_jusin_ymd_to%5D=&amp;search_word%5Bsex%5D=0&amp;search_word%5Bshow_deleted%5D=1&amp;search_word%5Bsimei_kana_m%5D=&amp;search_word%5Bsimei_kana_s%5D=&amp;search_word%5Bsimei_m%5D=&amp;search_word%5Bsimei_s%5D=&amp;utf8=%E2%9C%93" rel="next">2</a>
</span>

        <span class="page">
  <a href="/master/jusinsya/index?_birthday_fr_date_input_d=&amp;_birthday_fr_date_input_m=&amp;_birthday_fr_date_input_w=3&amp;_birthday_fr_date_input_y=&amp;_birthday_to_date_input_d=&amp;_birthday_to_date_input_m=&amp;_birthday_to_date_input_w=3&amp;_birthday_to_date_input_y=&amp;_last_jusin_ymd_fr_date_input_d=&amp;_last_jusin_ymd_fr_date_input_m=&amp;_last_jusin_ymd_fr_date_input_w=5&amp;_last_jusin_ymd_fr_date_input_y=&amp;_last_jusin_ymd_to_date_input_d=&amp;_last_jusin_ymd_to_date_input_m=&amp;_last_jusin_ymd_to_date_input_w=5&amp;_last_jusin_ymd_to_date_input_y=&amp;authenticity_token=5bKqOETptb6gG7NKGDACORem61v2%2BgOPKI7C1mNir5k%3D&amp;page=3&amp;search=1&amp;search_word%5Bbirthday_fr%5D=&amp;search_word%5Bbirthday_to%5D=&amp;search_word%5Bjusinsya_code%5D=&amp;search_word%5Blast_jusin_ymd_fr%5D=&amp;search_word%5Blast_jusin_ymd_to%5D=&amp;search_word%5Bsex%5D=0&amp;search_word%5Bshow_deleted%5D=1&amp;search_word%5Bsimei_kana_m%5D=&amp;search_word%5Bsimei_kana_s%5D=&amp;search_word%5Bsimei_m%5D=&amp;search_word%5Bsimei_s%5D=&amp;utf8=%E2%9C%93">3</a>
</span>

    <span class="next">
  <a href="/master/jusinsya/index?_birthday_fr_date_input_d=&amp;_birthday_fr_date_input_m=&amp;_birthday_fr_date_input_w=3&amp;_birthday_fr_date_input_y=&amp;_birthday_to_date_input_d=&amp;_birthday_to_date_input_m=&amp;_birthday_to_date_input_w=3&amp;_birthday_to_date_input_y=&amp;_last_jusin_ymd_fr_date_input_d=&amp;_last_jusin_ymd_fr_date_input_m=&amp;_last_jusin_ymd_fr_date_input_w=5&amp;_last_jusin_ymd_fr_date_input_y=&amp;_last_jusin_ymd_to_date_input_d=&amp;_last_jusin_ymd_to_date_input_m=&amp;_last_jusin_ymd_to_date_input_w=5&amp;_last_jusin_ymd_to_date_input_y=&amp;authenticity_token=5bKqOETptb6gG7NKGDACORem61v2%2BgOPKI7C1mNir5k%3D&amp;page=2&amp;search=1&amp;search_word%5Bbirthday_fr%5D=&amp;search_word%5Bbirthday_to%5D=&amp;search_word%5Bjusinsya_code%5D=&amp;search_word%5Blast_jusin_ymd_fr%5D=&amp;search_word%5Blast_jusin_ymd_to%5D=&amp;search_word%5Bsex%5D=0&amp;search_word%5Bshow_deleted%5D=1&amp;search_word%5Bsimei_kana_m%5D=&amp;search_word%5Bsimei_kana_s%5D=&amp;search_word%5Bsimei_m%5D=&amp;search_word%5Bsimei_s%5D=&amp;utf8=%E2%9C%93" rel="next"><span class="translation_missing">&gt;</span></a>
</span>

    <span class="last">
  <a href="/master/jusinsya/index?_birthday_fr_date_input_d=&amp;_birthday_fr_date_input_m=&amp;_birthday_fr_date_input_w=3&amp;_birthday_fr_date_input_y=&amp;_birthday_to_date_input_d=&amp;_birthday_to_date_input_m=&amp;_birthday_to_date_input_w=3&amp;_birthday_to_date_input_y=&amp;_last_jusin_ymd_fr_date_input_d=&amp;_last_jusin_ymd_fr_date_input_m=&amp;_last_jusin_ymd_fr_date_input_w=5&amp;_last_jusin_ymd_fr_date_input_y=&amp;_last_jusin_ymd_to_date_input_d=&amp;_last_jusin_ymd_to_date_input_m=&amp;_last_jusin_ymd_to_date_input_w=5&amp;_last_jusin_ymd_to_date_input_y=&amp;authenticity_token=5bKqOETptb6gG7NKGDACORem61v2%2BgOPKI7C1mNir5k%3D&amp;page=3&amp;search=1&amp;search_word%5Bbirthday_fr%5D=&amp;search_word%5Bbirthday_to%5D=&amp;search_word%5Bjusinsya_code%5D=&amp;search_word%5Blast_jusin_ymd_fr%5D=&amp;search_word%5Blast_jusin_ymd_to%5D=&amp;search_word%5Bsex%5D=0&amp;search_word%5Bshow_deleted%5D=1&amp;search_word%5Bsimei_kana_m%5D=&amp;search_word%5Bsimei_kana_s%5D=&amp;search_word%5Bsimei_m%5D=&amp;search_word%5Bsimei_s%5D=&amp;utf8=%E2%9C%93"><span class="translation_missing">&gt;&gt;</span></a>
</span>

  </div>

</div>
</div>
<div class="box-content">
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="tbl_list tbl_stripe">
<thead>
<tr>
<th width="7%">Patient code</th>
<th width="13%">Patient name</th>
<th width="13%">kana</th>
<th width="9%">Date of birth</th>
<th width="4%">sex</th>
<th width="19%">address</th>
<th width="9%">Date of last visit</th>
<th width="9%">First visit date</th>
<th width="10%">remarks</th>
<th width="7%">
<div class="button" id="uniform-undefined"><span>New registrationNew <input type="button" value="registration" onclick="move_url('/master/jusinsya/edit')" tabindex="10028" style="opacity: 0; width: 76px;"></span></div>
</th>
</tr>
</thead>
<tbody>
<tr class="">
<td>A0000001</td>
<td>
<div class="list_align_left">
exam taro
</div>
</td>
<td>
<div class="list_align_left">
test tallow
</div>
</td>
<td>January 1, 1975</td>
<td>male</td>
<td>
<div class="list_align_left">



</div>
</td>
<td>November 6, 2019</td>
<td>May 21, 2019</td>
<td></td>
<td>
<div class="button mini" id="uniform-undefined"><span>edit <input type="button" value="edit" class="mini" onclick="move_url('/master/jusinsya/edit?id=1')" style="opacity: 0; width: 50px;" tabindex="10029"></span></div>
<div class="button mini" id="uniform-undefined"><span>login information <input type="button" value="login information" class="mini" onclick="move_url('/master/jusinsya_login/index?jusinsya_id=1')" style="opacity: 0; width: 102px;" tabindex="10030"></span></div>
</td>
</tr>
<tr class="even">
<td>A0000002</td>
<td>
<div class="list_align_left">
Hanako Yamada
</div>
</td>
<td>
<div class="list_align_left">
Hanako Yamada
</div>
</td>
<td>February 1, 1975</td>
<td>Woman</td>
<td>
<div class="list_align_left">
Postal code 700-0001 <br>
Okayama Prefecture <br>
Okayama Kita Ward<br>

</div>
</td>
<td>November 7, 2019</td>
<td>November 6, 2019</td>
<td></td>
<td>
<div class="button mini" id="uniform-undefined"><span>edit <input type="button" value="edit" class="mini" onclick="move_url('/master/jusinsya/edit?id=2')" style="opacity: 0; width: 50px;" tabindex="10031"></span></div>
<div class="button mini" id="uniform-undefined"><span>login information <input type="button" value="login information" class="mini" onclick="move_url('/master/jusinsya_login/index?jusinsya_id=2')" style="opacity: 0; width: 102px;" tabindex="10032"></span></div>
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
  <a href="/master/jusinsya/index?_birthday_fr_date_input_d=&amp;_birthday_fr_date_input_m=&amp;_birthday_fr_date_input_w=3&amp;_birthday_fr_date_input_y=&amp;_birthday_to_date_input_d=&amp;_birthday_to_date_input_m=&amp;_birthday_to_date_input_w=3&amp;_birthday_to_date_input_y=&amp;_last_jusin_ymd_fr_date_input_d=&amp;_last_jusin_ymd_fr_date_input_m=&amp;_last_jusin_ymd_fr_date_input_w=5&amp;_last_jusin_ymd_fr_date_input_y=&amp;_last_jusin_ymd_to_date_input_d=&amp;_last_jusin_ymd_to_date_input_m=&amp;_last_jusin_ymd_to_date_input_w=5&amp;_last_jusin_ymd_to_date_input_y=&amp;authenticity_token=5bKqOETptb6gG7NKGDACORem61v2%2BgOPKI7C1mNir5k%3D&amp;page=2&amp;search=1&amp;search_word%5Bbirthday_fr%5D=&amp;search_word%5Bbirthday_to%5D=&amp;search_word%5Bjusinsya_code%5D=&amp;search_word%5Blast_jusin_ymd_fr%5D=&amp;search_word%5Blast_jusin_ymd_to%5D=&amp;search_word%5Bsex%5D=0&amp;search_word%5Bshow_deleted%5D=1&amp;search_word%5Bsimei_kana_m%5D=&amp;search_word%5Bsimei_kana_s%5D=&amp;search_word%5Bsimei_m%5D=&amp;search_word%5Bsimei_s%5D=&amp;utf8=%E2%9C%93" rel="next">2</a>
</span>

        <span class="page">
  <a href="/master/jusinsya/index?_birthday_fr_date_input_d=&amp;_birthday_fr_date_input_m=&amp;_birthday_fr_date_input_w=3&amp;_birthday_fr_date_input_y=&amp;_birthday_to_date_input_d=&amp;_birthday_to_date_input_m=&amp;_birthday_to_date_input_w=3&amp;_birthday_to_date_input_y=&amp;_last_jusin_ymd_fr_date_input_d=&amp;_last_jusin_ymd_fr_date_input_m=&amp;_last_jusin_ymd_fr_date_input_w=5&amp;_last_jusin_ymd_fr_date_input_y=&amp;_last_jusin_ymd_to_date_input_d=&amp;_last_jusin_ymd_to_date_input_m=&amp;_last_jusin_ymd_to_date_input_w=5&amp;_last_jusin_ymd_to_date_input_y=&amp;authenticity_token=5bKqOETptb6gG7NKGDACORem61v2%2BgOPKI7C1mNir5k%3D&amp;page=3&amp;search=1&amp;search_word%5Bbirthday_fr%5D=&amp;search_word%5Bbirthday_to%5D=&amp;search_word%5Bjusinsya_code%5D=&amp;search_word%5Blast_jusin_ymd_fr%5D=&amp;search_word%5Blast_jusin_ymd_to%5D=&amp;search_word%5Bsex%5D=0&amp;search_word%5Bshow_deleted%5D=1&amp;search_word%5Bsimei_kana_m%5D=&amp;search_word%5Bsimei_kana_s%5D=&amp;search_word%5Bsimei_m%5D=&amp;search_word%5Bsimei_s%5D=&amp;utf8=%E2%9C%93">3</a>
</span>

    <span class="next">
  <a href="/master/jusinsya/index?_birthday_fr_date_input_d=&amp;_birthday_fr_date_input_m=&amp;_birthday_fr_date_input_w=3&amp;_birthday_fr_date_input_y=&amp;_birthday_to_date_input_d=&amp;_birthday_to_date_input_m=&amp;_birthday_to_date_input_w=3&amp;_birthday_to_date_input_y=&amp;_last_jusin_ymd_fr_date_input_d=&amp;_last_jusin_ymd_fr_date_input_m=&amp;_last_jusin_ymd_fr_date_input_w=5&amp;_last_jusin_ymd_fr_date_input_y=&amp;_last_jusin_ymd_to_date_input_d=&amp;_last_jusin_ymd_to_date_input_m=&amp;_last_jusin_ymd_to_date_input_w=5&amp;_last_jusin_ymd_to_date_input_y=&amp;authenticity_token=5bKqOETptb6gG7NKGDACORem61v2%2BgOPKI7C1mNir5k%3D&amp;page=2&amp;search=1&amp;search_word%5Bbirthday_fr%5D=&amp;search_word%5Bbirthday_to%5D=&amp;search_word%5Bjusinsya_code%5D=&amp;search_word%5Blast_jusin_ymd_fr%5D=&amp;search_word%5Blast_jusin_ymd_to%5D=&amp;search_word%5Bsex%5D=0&amp;search_word%5Bshow_deleted%5D=1&amp;search_word%5Bsimei_kana_m%5D=&amp;search_word%5Bsimei_kana_s%5D=&amp;search_word%5Bsimei_m%5D=&amp;search_word%5Bsimei_s%5D=&amp;utf8=%E2%9C%93" rel="next"><span class="translation_missing">&gt;</span></a>
</span>

    <span class="last">
  <a href="/master/jusinsya/index?_birthday_fr_date_input_d=&amp;_birthday_fr_date_input_m=&amp;_birthday_fr_date_input_w=3&amp;_birthday_fr_date_input_y=&amp;_birthday_to_date_input_d=&amp;_birthday_to_date_input_m=&amp;_birthday_to_date_input_w=3&amp;_birthday_to_date_input_y=&amp;_last_jusin_ymd_fr_date_input_d=&amp;_last_jusin_ymd_fr_date_input_m=&amp;_last_jusin_ymd_fr_date_input_w=5&amp;_last_jusin_ymd_fr_date_input_y=&amp;_last_jusin_ymd_to_date_input_d=&amp;_last_jusin_ymd_to_date_input_m=&amp;_last_jusin_ymd_to_date_input_w=5&amp;_last_jusin_ymd_to_date_input_y=&amp;authenticity_token=5bKqOETptb6gG7NKGDACORem61v2%2BgOPKI7C1mNir5k%3D&amp;page=3&amp;search=1&amp;search_word%5Bbirthday_fr%5D=&amp;search_word%5Bbirthday_to%5D=&amp;search_word%5Bjusinsya_code%5D=&amp;search_word%5Blast_jusin_ymd_fr%5D=&amp;search_word%5Blast_jusin_ymd_to%5D=&amp;search_word%5Bsex%5D=0&amp;search_word%5Bshow_deleted%5D=1&amp;search_word%5Bsimei_kana_m%5D=&amp;search_word%5Bsimei_kana_s%5D=&amp;search_word%5Bsimei_m%5D=&amp;search_word%5Bsimei_s%5D=&amp;utf8=%E2%9C%93"><span class="translation_missing">&gt;&gt;</span></a>
</span>

  </div>

</div>
</div>
</div>
        <!-- / #contents -->
      </div>
        </div>
        <div class="nav-content" id="selling-content1">
         <h1>dddd</h1>
        </div>
        <div class="nav-content" id="sold-content1">
            <h1>ssww</h1>
        </div>
        <div class="nav-content" id="like-content1">
             <h1>sdasdw</h1>
        </div>
    </div>
</div>
</div>
</template>
<script>
export default {
    
}
</script>