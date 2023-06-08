<?php

namespace App\Http\Controllers;

use App\Models\jusins;
use App\Models\jusinsyas;
use Illuminate\Http\Request;

class jusinsController extends Controller
{
    public function searchjusin(Request $request)
    {
        $search=$request->search;
        
       if($request->jusin_kbn=='1'){ 
            $curency = jusins::orderBy('id', 'desc')
                ->Where('jusin_ymd','>=',$request->jusin_ymdfrom)
                ->Where('jusin_ymd','<=',$request->jusin_ymdto)
                ->Where('jusin_kbn','=',1)
                ->Where('simei_s','LIKE','%'.$search.'%')
                ->orWhere('simei_m','LIKE','%'.$search.'%')
                ->orWhere('simei_roma_s','LIKE','%'.$search.'%')
                ->orWhere('simei_roma_m','LIKE','%'.$search.'%')
                ->get();
                return $curency;
            
        }elseif($request->jusin_kbn=='2'){
            
            $curency = jusins::orderBy('id', 'desc')
                ->Where('jusin_ymd','>=',$request->jusin_ymdfrom)
                ->Where('jusin_ymd','<=',$request->jusin_ymdto)
                ->Where('jusin_kbn','=',2)
                ->Where('simei_s','LIKE','%'.$search.'%')
                ->orWhere('simei_m','LIKE','%'.$search.'%')
                ->orWhere('simei_roma_s','LIKE','%'.$search.'%')
                ->orWhere('simei_roma_m','LIKE','%'.$search.'%')
                ->get();
                return $curency;
                
        }else{
            
            $curency = jusins::orderBy('id', 'desc')
                ->Where('jusin_ymd','>=',$request->jusin_ymdfrom)
                ->Where('jusin_ymd','<=',$request->jusin_ymdto)
                ->Where('simei_s','LIKE','%'.$search.'%')
                ->orWhere('simei_m','LIKE','%'.$search.'%')
                ->orWhere('simei_roma_s','LIKE','%'.$search.'%')
                ->orWhere('simei_roma_m','LIKE','%'.$search.'%')
                ->get();
                return $curency;   
                
        }

        //  【初期表示】																			
        // 	受診日のfromとtoはシステム日付をセットする。																		
        // 	外来・入院は両方を選択状態にする。																		
                                                                                    
        // 	ページングで定数で指定された件数だけ表示する																		
        // 	■テーブル																		
        // 		jusins																	
        // 		jusinsyas					on jusins.jusinsya_id = jsuinsyas.id												
        // 	■条件																		
        // 		jusins.del_flg = 0																	
        // 	■順序																		
        // 		id desc																	
                                                                                    
        // 	区分																		
        // 		jusins.jusin_kbn																	
        // 	日付																		
        // 		jusins.jusin_ymd																	
        // 	住所																		
        // 		jtk1_pref																	
        // 		jtk1_addr1																	
        // 		jtk1_addr2			                                                              
        // 【検索】																			
        // 	初期表示と同じように検索をする。																		
        // 	受診者名に値がある場合、条件を追加																		
        // 		simei_s + simei_m like %画面.薬剤名% OR simei_roma_s + simei_roma_m like %画面.薬剤名% 																	
                                                                                    
        // 	受診日from																		
        // 		jusins.jusin_ymd >= 受診日from																	
                                                                                    
        // 	受診日to																		
        // 		jusins.jusin_ymd <= 受診日to																	
                                                                                    
        // 	外来・入院　=　外来																		
        // 		jusins.jusin_kbn = 1																	
        // 	外来・入院　=　入院																		
        // 		jusins.jusin_kbn = 2																	

    }

    public function index(Request $request)
    {
        $curency = jusins::orderBy('id', 'desc')->get();
        return  $curency;
    }
    
    public function index入院(Request $request)
    {
      
    }
}