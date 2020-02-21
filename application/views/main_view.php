<link rel="stylesheet" href="/assets/css/main.css" type="text/css">


<!-- slide div -->
<!-- 	<ul class="imagebox">
	  <li>
		<div class="head_text">
			<p class="maintitle">占쎈쐻占쎈윪�뙴�굾LUKE<br>
			JFLUKE<br>
			JFLUKE?占쎈쐻占쎈짗占쎌굲</p>
			<p class="subtitle">JFLUKE<br>
			JFLUKEJFLUKEJFLUKEJFLUKEJFLUKEJFLUKEJFLUKEJFLUKEJFLUKE<br>
			JFLUKEJFLUKEJFLUKE</p>
		</div>	        	
	  </li>
	  
	  
	  <li>
		<div class="head_text" style="width:500px;margin-left:50px;">
		</div>
			<p class="maintitle" >占쎈쐻占쎈윪�뙴�굾LUKEJFLUKE<br>
			JFLUKEJFLUKEJFLUKEJFLUKE占쎈쐻占쎈짗占쎌굲</p>
			<p class="subtitle">JFLUKEJFLUKEJFLUKEJFLUKEJFLUKEJFLUKEJFLUKE<br>
			JFLUKEJFLUKEJFLUKE</p>
	  </li>
	
	  <li>
		<div class="head_img3">
	        <div class="head_img3_inner">
				<div class="head_text3">
					<p class="maintitle3">占쎈쐻占쎈윪�뙴�굾LUKEJFLUKE<br>
					JFLUKEJFLUKEJFLUKEJFLUKE</p>
					<p class="subtitle3">JFLUKEJFLUKEJFLUKEJFLUKEJFLUKEJFLUKE<br>
					JFLUKEJFLUKEJFLUKEJFLUKE</p>
				</div>	        	
	        </div>
	    </div>
	  </li>
	 
	</ul>
	 -->





  	<?php
			
			foreach($exchange as $list){
				if($list->currency == "usd_krw"){
					$usdkrw = $list->rate;
				}
				if($list->currency == "cad_krw"){
					$cadkrw = $list->rate;
				}
			};

  			foreach($coinone as $list){

				$coinone_exchange = strtoupper($list->exchange_name);

  				if($list->currency == 'btc'){
  				    $coinone_date = $list->date;
  					$coinone_btc_currency = strtoupper($list->currency);
  					$coinone_btc_last_ori = $list->price;
  					$coinone_btc_last = number_format($list->price, 2, '.', ',');
  				}
  				if($list->currency == 'eth'){
  					$coinone_eth_currency = strtoupper($list->currency);
  					$coinone_eth_last_ori = $list->price;
  					$coinone_eth_last = number_format($list->price, 2, '.', ',');
  				}
  				if($list->currency == 'ltc'){
  					$coinone_ltc_currency = strtoupper($list->currency);
					$coinone_ltc_last_ori = $list->price;
  					$coinone_ltc_last = number_format($list->price, 2, '.', ',');
  				}
  				if($list->currency == 'xrp'){
  					$coinone_xrp_currency = strtoupper($list->currency);
					$coinone_xrp_last_ori = $list->price;
  					$coinone_xrp_last = number_format($list->price, 2, '.', ',');
  				}
  				if($list->currency == 'bch'){
  					$coinone_bch_currency = strtoupper($list->currency);
  					$coinone_bch_last = number_format($list->price, 2, '.', ',');
  				}
  				if($list->currency == 'pib'){
  					$coinone_pib_currency = strtoupper($list->currency);
  					$coinone_pib_last = number_format($list->price, 2, '.', ',');
  				}
  				
  			};


			foreach($coinfield as $list){

				$coinfield_exchange = strtoupper($list->exchange_name);

  				if($list->currency == 'btc'){
  				    $coinfield_date = $list->date;
  					$coinfield_btc_currency = strtoupper($list->currency);
					$coinfield_btc_last_ori = $list->price * $cadkrw;
  					$coinfield_btc_last = number_format($list->price * $cadkrw, 2, '.', ',');

  				}
  				if($list->currency == 'eth'){
  					$coinfield_eth_currency = strtoupper($list->currency);
					$coinfield_eth_last_ori = $list->price * $cadkrw;
  					$coinfield_eth_last = number_format($list->price * $cadkrw, 2, '.', ',');
  				}
  				if($list->currency == 'ltc'){
  					$coinfield_ltc_currency = strtoupper($list->currency);
  					$coinfield_ltc_last = number_format($list->price * $cadkrw, 2, '.', ',');
  				}
  				if($list->currency == 'xrp'){
  					$coinfield_xrp_currency = strtoupper($list->currency);
					$coinfield_xrp_last_ori = $list->price * $cadkrw;
  					$coinfield_xrp_last = number_format($list->price * $cadkrw, 2, '.', ',');
  				}
  				if($list->currency == 'bch'){
  					$coinfield_bch_currency = strtoupper($list->currency);
  					$coinfield_bch_last = number_format($list->price * $cadkrw, 2, '.', ',');
  				}
  				if($list->currency == 'dash'){
  					$coinfield_dash_currency = strtoupper($list->currency);
  					$coinfield_dash_last = number_format($list->price * $cadkrw, 2, '.', ',');
  				}
  				
  			};
  			
			foreach($huobi as $list){

				$huobi_exchange = strtoupper($list->exchange_name);

  				if($list->currency == 'btc'){
  				    $huobi_date = $list->date;
  					$huobi_btc_currency = strtoupper($list->currency);
					$huobi_btc_last_ori = $list->price * $usdkrw;
  					$huobi_btc_last = number_format($list->price * $usdkrw, 2, '.', ',');  					
  				}
  				if($list->currency == 'eth'){
  					$huobi_eth_currency = strtoupper($list->currency);
					$huobi_eth_last_ori = $list->price * $usdkrw;
  					$huobi_eth_last = number_format($list->price * $usdkrw, 2, '.', ',');
  				}
  				if($list->currency == 'ltc'){
  					$huobi_ltc_currency = strtoupper($list->currency);
  					$huobi_ltc_last = number_format($list->price * $usdkrw, 2, '.', ',');
  				}
  				if($list->currency == 'xrp'){
  					$huobi_xrp_currency = strtoupper($list->currency);
					$huobi_xrp_last_ori = $list->price * $usdkrw;
  					$huobi_xrp_last = number_format($list->price * $usdkrw, 2, '.', ',');
  				}
  				if($list->currency == 'bch'){
  					$huobi_bch_currency = strtoupper($list->currency);
  					$huobi_bch_last = number_format($list->price * $usdkrw, 2, '.', ',');
  				}
  				if($list->currency == 'dash'){
  					$huobi_dash_currency = strtoupper($list->currency);
  					$huobi_dash_last = number_format($list->price * $usdkrw, 2, '.', ',');
  				}
  				
  			};

  			
  			foreach($upbit as $list){
  			    
  			    $upbit_exchange = strtoupper($list->exchange_name);
  			    
  			    if($list->currency == 'btc'){
  			        $upbit_date = $list->date;
  			        $upbit_btc_currency = strtoupper($list->currency);
  			        $upbit_btc_last_ori = $list->price;
  			        $upbit_btc_last = number_format($list->price, 2, '.', ',');
  			    }
  			    if($list->currency == 'eth'){
  			        $upbit_eth_currency = strtoupper($list->currency);
  			        $upbit_eth_last_ori = $list->price;
  			        $upbit_eth_last = number_format($list->price, 2, '.', ',');
  			    }
  			    if($list->currency == 'xrp'){
  			        $upbit_xrp_currency = strtoupper($list->currency);
  			        $upbit_xrp_last_ori = $list->price;
  			        $upbit_xrp_last = number_format($list->price, 2, '.', ',');
  			    }
  			    if($list->currency == 'qtum'){
  			        $upbit_qtum_currency = strtoupper($list->currency);
  			        $upbit_qtum_last = number_format($list->price, 2, '.', ',');
  			    }
  			    if($list->currency == 'snt'){
  			        $upbit_snt_currency = strtoupper($list->currency);
  			        $upbit_snt_last = number_format($list->price, 2, '.', ',');
  			    }
  			};
  			
  			
			foreach($bithumb as $list){

				$bithumb_exchange = strtoupper($list->exchange_name);

  				if($list->currency == 'btc'){
  				    $bithumb_date = $list->date;
  					$bithumb_btc_currency = strtoupper($list->currency);
					$bithumb_btc_last_ori = $list->price;
  					$bithumb_btc_last = number_format($list->price, 2, '.', ',');  					
  				}
  				if($list->currency == 'eth'){
  					$bithumb_eth_currency = strtoupper($list->currency);
					$bithumb_eth_last_ori = $list->price;
  					$bithumb_eth_last = number_format($list->price, 2, '.', ',');
  				}
  				if($list->currency == 'ltc'){
  					$bithumb_ltc_currency = strtoupper($list->currency);
  					$bithumb_ltc_last = number_format($list->price, 2, '.', ',');
  				}
  				if($list->currency == 'xrp'){
  					$bithumb_xrp_currency = strtoupper($list->currency);
					$bithumb_xrp_last_ori = $list->price;
  					$bithumb_xrp_last = number_format($list->price, 2, '.', ',');
  				}
  				if($list->currency == 'bch'){
  					$bithumb_bch_currency = strtoupper($list->currency);
  					$bithumb_bch_last = number_format($list->price, 2, '.', ',');
  				}
  				if($list->currency == 'dash'){
  					$bithumb_dash_currency = strtoupper($list->currency);
  					$bithumb_dash_last = number_format($list->price, 2, '.', ',');
  				}
  			};
  			
  			
  			foreach($bittrex as $list){
  			    
  			    $bittrex_exchange = strtoupper($list->exchange_name);
  			    
  			    if($list->currency == 'btc'){
  			        $bittrex_date = $list->date;
  			        $bittrex_btc_currency = strtoupper($list->currency);
  			        $bittrex_btc_last_ori = $list->price * $usdkrw;
  			        $bittrex_btc_last = number_format($list->price * $usdkrw, 2, '.', ',');
  			    }
  			    if($list->currency == 'eth'){
  			        $bittrex_eth_currency = strtoupper($list->currency);
  			        $bittrex_eth_last_ori = $list->price * $usdkrw;
  			        $bittrex_eth_last = number_format($list->price * $usdkrw, 2, '.', ',');
  			    }
  			    if($list->currency == 'xrp'){
  			        $bittrex_xrp_currency = strtoupper($list->currency);
  			        $bittrex_xrp_last_ori = $list->price * $usdkrw;
  			        $bittrex_xrp_last = number_format($list->price * $usdkrw, 2, '.', ',');
  			    }
  			};
  			
  			foreach($poloniex as $list){
  			    
  			    $poloniex_exchange = strtoupper($list->exchange_name);
  			    
  			    if($list->currency == 'btc'){
  			        $poloniex_date = $list->date;
  			        $poloniex_btc_currency = strtoupper($list->currency);
  			        $poloniex_btc_last_ori = $list->price * $usdkrw;
  			        $poloniex_btc_last = number_format($list->price * $usdkrw, 2, '.', ',');
  			    }
  			    if($list->currency == 'eth'){
  			        $poloniex_eth_currency = strtoupper($list->currency);
  			        $poloniex_eth_last_ori = $list->price * $usdkrw;
  			        $poloniex_eth_last = number_format($list->price * $usdkrw, 2, '.', ',');
  			    }
  			    if($list->currency == 'xrp'){
  			        $poloniex_xrp_currency = strtoupper($list->currency);
  			        $poloniex_xrp_last_ori = $list->price * $usdkrw;
  			        $poloniex_xrp_last = number_format($list->price * $usdkrw, 2, '.', ',');
  			    }
  			};
  			
  			
  			$btc_max = max($coinone_btc_last_ori, $coinfield_btc_last_ori, $huobi_btc_last_ori, $bithumb_btc_last_ori, $bittrex_btc_last_ori, $poloniex_btc_last_ori, $upbit_btc_last_ori);
  			$eth_max = max($coinone_eth_last_ori, $coinfield_eth_last_ori, $huobi_eth_last_ori, $bithumb_eth_last_ori, $bittrex_eth_last_ori, $poloniex_eth_last_ori, $upbit_eth_last_ori);
  			$xrp_max = max($coinone_xrp_last_ori, $coinfield_xrp_last_ori, $huobi_xrp_last_ori, $bithumb_xrp_last_ori, $bittrex_xrp_last_ori, $poloniex_xrp_last_ori, $upbit_xrp_last_ori);
  			
  			
  			$sub_btc_coinone = $coinone_btc_last_ori-$btc_max;
  			$percent_btc_coinone = round(($sub_btc_coinone/$btc_max) * 100, 2);
  			$sub_btc_coinfield = $coinfield_btc_last_ori-$btc_max;
  			$percent_btc_coinfield = round(($sub_btc_coinfield/$btc_max) * 100, 2);
  			$sub_btc_huobi = $huobi_btc_last_ori-$btc_max;
  			$percent_btc_huobi = round(($sub_btc_huobi/$btc_max) * 100, 2);
  			$sub_btc_bithumb = $bithumb_btc_last_ori-$btc_max;
  			$percent_btc_bithumb = round(($sub_btc_bithumb/$btc_max) * 100, 2);
  			$sub_btc_bittrex = $bittrex_btc_last_ori-$btc_max;
  			$percent_btc_bittrex = round(($sub_btc_bittrex/$btc_max) * 100, 2);
  			$sub_btc_poloniex = $poloniex_btc_last_ori-$btc_max;
  			$percent_btc_poloniex = round(($sub_btc_poloniex/$btc_max) * 100, 2);
  			$sub_btc_upbit = $upbit_btc_last_ori-$btc_max;
  			$percent_btc_upbit = round(($sub_btc_upbit/$btc_max) * 100, 2);
  			
  			$sub_eth_coinone = $coinone_eth_last_ori-$eth_max;
  			$percent_eth_coinone = round(($sub_eth_coinone/$eth_max) * 100, 2);
  			$sub_eth_coinfield = $coinfield_eth_last_ori-$eth_max;
  			$percent_eth_coinfield = round(($sub_eth_coinfield/$eth_max) * 100, 2);
  			$sub_eth_huobi = $huobi_eth_last_ori-$eth_max;
  			$percent_eth_huobi = round(($sub_eth_huobi/$eth_max) * 100, 2);
  			$sub_eth_bithumb = $bithumb_eth_last_ori-$eth_max;
  			$percent_eth_bithumb = round(($sub_eth_bithumb/$eth_max) * 100, 2);
  			$sub_eth_bittrex = $bittrex_eth_last_ori-$eth_max;
  			$percent_eth_bittrex = round(($sub_eth_bittrex/$eth_max) * 100, 2);
  			$sub_eth_poloniex = $poloniex_eth_last_ori-$eth_max;
  			$percent_eth_poloniex = round(($sub_eth_poloniex/$eth_max) * 100, 2);
  			$sub_eth_upbit = $upbit_eth_last_ori-$eth_max;
  			$percent_eth_upbit = round(($sub_eth_upbit/$eth_max) * 100, 2);
  			
  			$sub_xrp_coinone = $coinone_xrp_last_ori-$xrp_max;
  			$percent_xrp_coinone = round(($sub_xrp_coinone/$xrp_max) * 100, 2);
  			$sub_xrp_coinfield = $coinfield_xrp_last_ori-$xrp_max;
  			$percent_xrp_coinfield = round(($sub_xrp_coinfield/$xrp_max) * 100, 2);
  			$sub_xrp_huobi = $huobi_xrp_last_ori-$xrp_max;
  			$percent_xrp_huobi = round(($sub_xrp_huobi/$xrp_max) * 100, 2);
  			$sub_xrp_bithumb = $bithumb_xrp_last_ori-$xrp_max;
  			$percent_xrp_bithumb = round(($sub_xrp_bithumb/$xrp_max) * 100, 2);
  			$sub_xrp_bittrex = $bittrex_xrp_last_ori-$xrp_max;
  			$percent_xrp_bittrex = round(($sub_xrp_bittrex/$xrp_max) * 100, 2);
  			$sub_xrp_poloniex = $poloniex_xrp_last_ori-$xrp_max;
  			$percent_xrp_poloniex = round(($sub_xrp_poloniex/$xrp_max) * 100, 2);
  			$sub_xrp_upbit = $upbit_xrp_last_ori-$xrp_max;
  			$percent_xrp_upbit = round(($sub_xrp_upbit/$xrp_max) * 100, 2);

 	?> 


			<script>
//   			    var main_btc_line = document.getElementById("main_btc_line");
  			    
//   			    var main_btc_line_Chart = new Chart(main_btc_line, {
//   			        type: 'bar',
//   			        data: {
//   			            labels: [$ex_cone_name, $ex_cfield_name, $ex_huobi_name, $ex_bithumb_name, $ex_upbit_name, $ex_bittrex_name, $ex_poloniex_name],
//   			            datasets: [{
//   			                label: 'BTC',
//   			                type : 'bar',
//   			                data: [],
//   			                backgroundColor: [
//   			                    'rgba(255, 99, 132, 0.2)',
//   			                    'rgba(54, 162, 235, 0.2)',
//   			                    'rgba(255, 206, 86, 0.2)',
//   			                    'rgba(75, 192, 192, 0.2)',
//   			                    'rgba(153, 102, 255, 0.2)',
//   			                    'rgba(255, 159, 64, 0.2)',
//   			                    'rgba(255, 159, 64, 0.2)'
//   			                ],
//   			                borderColor: [
//   			                    'rgba(255,99,132,1)',
//   			                    'rgba(54, 162, 235, 1)',
//   			                    'rgba(255, 206, 86, 1)',
//   			                    'rgba(75, 192, 192, 1)',
//   			                    'rgba(153, 102, 255, 1)',
//   			                    'rgba(255, 159, 64, 1)',
//   			                    'rgba(255, 159, 64, 1)'
//   			                ],
//   			                borderWidth: 1
//   			            }]
//   			        },
//   			        options: {
//   			            maintainAspectRatio: true,
//   			            scales: {
//   			                yAxes: [{
//   			                    ticks: {
//   			                        beginAtZero:true
//   			                    }
//   			                }]
//   			            }
//   			        }
//   			    });
  			        </script>






<div id="head_img">
        <div class="RollDiv">  
          <div>  
			<p><font size="2"><strong>BTC Max<br><?=number_format($btc_max, 2, '.', ',')?></strong></font></p>
            <p><font size="2"><strong>ETH Max<br><?=number_format($eth_max, 2, '.', ',')?></strong></font></p>
            <p><font size="2"><strong>XRP Max<br><?=number_format($xrp_max, 2, '.', ',')?></strong></font></p>
            <p><font size="2" bold><strong><?=$coinone_btc_currency?><br><?=$coinone_btc_last?></strong></font></p>
            <p><font size="2" bold><strong><?=$coinone_eth_currency?><br><?=$coinone_eth_last?></strong></font></p>
            <p><font size="2" bold><strong><?=$coinone_xrp_currency?><br><?=$coinone_xrp_last?></strong></font></p>
            <p><font size="2" bold><strong><?=$coinone_ltc_currency?><br><?=$coinone_ltc_last?></strong></font></p>
            <p><font size="2" bold><strong><?=$coinone_bch_currency?><br><?=$coinone_bch_last?></strong></font></p>
            <p><font size="2" bold><strong><?=$coinfield_dash_currency?><br><?=$coinfield_dash_last?></strong></font></p>
            <p><font size="2" bold><strong><?=$coinone_pib_currency?><br><?=$coinone_pib_last?></strong></font></p>
            <p><font size="2" bold><strong><?=$upbit_qtum_currency?><br><?=$upbit_qtum_last?></strong></font></p>
            <p><font size="2" bold><strong><?=$upbit_snt_currency?><br><?=$upbit_snt_last?></strong></font></p>
            
  
          </div>  
        </div>
    </div>
<!-- rolling banner div -->
<!-- <div class="nav">
<button onClick="moveType=0;">Left</button>  
<button onClick="moveType=1;">Right</button>  
<button onClick="movePause=true;">Pause</button>  
<button onClick="goMove();">Move</button>  
</div> -->


<div style="width:33%; float:left;" >
	<canvas id="max_btc_bar"></canvas>
</div>

<div style="width:33%; float:left;">
	<canvas id="max_eth_bar"></canvas>
</div>

<div style="width:33%; float:left;">
	<canvas id="max_xrp_bar"></canvas>
</div>

			


<!-- 
 <div id="container3">
    	<div class="container3_inner" style="width:1200px;">

		<div style="display:inline;width:250px;float:left;">
			<table id="compare_btc_tbl" width="300" border="0" cellspacing="1" cellpadding="0" >

					<tr>
						<td align="center" bgcolor="#fbfbfb" class="td_title" colspan="2">BTC</td>
					</tr>
						<td height="30" width="30"  width="30" align="center" class="td_title">COIN</td>
						<td height="30" width="30"  align="center" class="td_title">PRICE(MAX)</td>
					<tr>
						<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text">BTC</td>
						<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=$btc_max?></td>
					</tr>

					<tr>
						<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text">ETH</td>
						<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=$bithumb_eth_last?></td>
					</tr>

					<tr>
						<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text">XRP</td>
						<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=$bithumb_xrp_last?></td>
					</tr>


			</table>
			 </div>
		</div>
 </div>
  -->
 



  <div id="container3">
    	<div class="container3_inner" style="width:1200px;">

		<div style="display:inline;width:33%;float:left;">
			<table id="compare_btc_tbl" width="350" border="0" cellspacing="1" cellpadding="0" >

					<tr>
						<td align="center" bgcolor="#fbfbfb" class="td_title" colspan="3">BTC</td>
					</tr>
						<td height="30" width="30"  width="30" align="center" class="td_title">EXCHANGE</td>
						<td height="30" width="30"  width="30" align="center" class="td_title">PRICE</td>
						<td height="30" width="150"  align="center" class="td_title">+/-(%)</td>
					<tr>
						<td height="30" width="30" align="center" bgcolor="#FFFFFF" style="color: #FF0000;" class="main_td_text">MAX PRICE</td>
						<td height="30" width="30" align="center" bgcolor="#FFFFFF" style="color: #FF0000;" class="main_td_text">\<?=number_format($btc_max, 2, '.', ',')?></td>
						<td height="30" width="150" align="center" bgcolor="#FFFFFF" style="color: #FF0000;" class="main_td_text">--</td>
					</tr>

					<tr>
						<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text"><?=$coinone_exchange?></td>
						<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=$coinone_btc_last?></td>
						<td height="30" width="150" align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=number_format($sub_btc_coinone)?>(<?=$percent_btc_coinone?>%)</td>
					</tr>

					<tr>
						<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text"><?=$coinfield_exchange?></td>
						<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=$coinfield_btc_last?></td>
						<td height="30" width="150" align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=number_format($sub_btc_coinfield)?>(<?=$percent_btc_coinfield?>%)</td>
					</tr>

					<tr>
						<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text"><?=$huobi_exchange?></td>
						<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=$huobi_btc_last?></td>
						<td height="30" width="150" align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=number_format($sub_btc_huobi)?>(<?=$percent_btc_huobi?>%)</td>
					</tr>

					<tr>
						<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text"><?=$bithumb_exchange?></td>
						<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=$bithumb_btc_last?></td>
						<td height="30" width="150" align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=number_format($sub_btc_bithumb)?>(<?=$percent_btc_bithumb?>%)</td>
					</tr>
					
					<tr>
						<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text"><?=$bittrex_exchange?></td>
						<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=$bittrex_btc_last?></td>
						<td height="30" width="150" align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=number_format($sub_btc_bittrex)?>(<?=$percent_btc_bittrex?>%)</td>
					</tr>
					
					<tr>
						<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text"><?=$poloniex_exchange?></td>
						<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=$poloniex_btc_last?></td>
						<td height="30" width="150" align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=number_format($sub_btc_poloniex)?>(<?=$percent_btc_poloniex?>%)</td>
					</tr>
					
					<tr>
						<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text"><?=$upbit_exchange?></td>
						<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=$upbit_btc_last?></td>
						<td height="30" width="150" align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=number_format($sub_btc_upbit)?>(<?=$percent_btc_upbit?>%)</td>
					</tr>


			</table>
			
			<input type="hidden" id="hi_cone_ex" name="hi_cone_ex" value="<?=$coinone_exchange?>"/>
            <input type="hidden" id="hi_cfield_ex" name="hi_cfield_ex" value="<?=$coinfield_exchange?>"/>
            <input type="hidden" id="hi_huobi_ex" name="hi_huobi_ex" value="<?=$huobi_exchange?>"/>
            <input type="hidden" id="hi_bithumb_ex" name="hi_bithumb_ex" value="<?=$bithumb_exchange?>"/>
            <input type="hidden" id="hi_upbit_ex" name="hi_upbit_ex" value="<?=$upbit_exchange?>"/>
            <input type="hidden" id="hi_bittrex_ex" name="hi_bittrex_ex" value="<?=$bittrex_exchange?>"/>
            <input type="hidden" id="hi_poloniex_ex" name="hi_poloniex_ex" value="<?=$poloniex_exchange?>"/>
            

            <input type="hidden" id="hi_cone_btc_last" name="hi_cone_btc_last" value="<?=$coinone_btc_last_ori?>"/>
            <input type="hidden" id="hi_cfield_btc_last" name="hi_cfield_btc_last" value="<?=$coinfield_btc_last_ori?>"/>
            <input type="hidden" id="hi_huobi_btc_last" name="hi_huobi_btc_last" value="<?=$huobi_btc_last_ori?>"/>
            <input type="hidden" id="hi_bithumb_btc_last" name="hi_bithumb_btc_last" value="<?=$bithumb_btc_last_ori?>"/>
            <input type="hidden" id="hi_upbit_btc_last" name="hi_upbit_btc_last" value="<?=$upbit_btc_last_ori?>"/>
            <input type="hidden" id="hi_bittrex_btc_last" name="hi_bittex_btc_last" value="<?=$bittrex_btc_last_ori?>"/>
            <input type="hidden" id="hi_poloniex_btc_last" name="hi_poloniex_btc_last" value="<?=$poloniex_btc_last_ori?>"/>
            
		</div>
		
		
<script>
	var max_btc_bar = document.getElementById("max_btc_bar");

	    $ex_cone_name = $('#hi_cone_ex').val();
	    $ex_cfield_name = $('#hi_cfield_ex').val();
	    $ex_huobi_name = $('#hi_huobi_ex').val();
	    $ex_bithumb_name = $('#hi_bithumb_ex').val();
	    $ex_upbit_name = $('#hi_upbit_ex').val();
	    $ex_bittrex_name = $('#hi_bittrex_ex').val();
	    $ex_poloniex_name = $('#hi_poloniex_ex').val();
	    
		$cone_btc_last = parseInt($('#hi_cone_btc_last').val());
		$cfield_btc_last = parseInt($('#hi_cfield_btc_last').val());
		$huobi_btc_last = parseInt($('#hi_huobi_btc_last').val());
		$bithumb_btc_last = parseInt($('#hi_bithumb_btc_last').val());
		$upbit_btc_last = parseInt($('#hi_upbit_btc_last').val());
		$bittrex_btc_last = parseInt($('#hi_bittrex_btc_last').val());
		$poloniex_btc_last = parseInt($('#hi_poloniex_btc_last').val());

//	alert($conn_btc_last);
//	alert($cfield_btc_last);
//  alert($bithumb_btc_last);
		
		var max_btc_bar_Chart = new Chart(max_btc_bar, {
		    type: 'bar',
		    data: {
		        labels: [$ex_cone_name, $ex_cfield_name, $ex_huobi_name, $ex_bithumb_name, $ex_upbit_name, $ex_bittrex_name, $ex_poloniex_name],
		        datasets: [{
		            label: 'BTC',
		            type : 'bar',
		            data: [$cone_btc_last, $cfield_btc_last, $huobi_btc_last, $bithumb_btc_last, $upbit_btc_last, $bittrex_btc_last, $poloniex_btc_last],
		            backgroundColor: [
		                'rgba(255, 99, 132, 0.2)',
		                'rgba(54, 162, 235, 0.2)',
		                'rgba(255, 206, 86, 0.2)',
		                'rgba(75, 192, 192, 0.2)',
		                'rgba(153, 102, 255, 0.2)',
		                'rgba(255, 159, 64, 0.2)',
		                'rgba(255, 159, 64, 0.2)'
		            ],
		            borderColor: [
		                'rgba(255,99,132,1)',
		                'rgba(54, 162, 235, 1)',
		                'rgba(255, 206, 86, 1)',
		                'rgba(75, 192, 192, 1)',
		                'rgba(153, 102, 255, 1)',
		                'rgba(255, 159, 64, 1)',
		                'rgba(255, 159, 64, 1)'
		            ],
		            borderWidth: 1
		        }]
		    },
		    options: {
		        maintainAspectRatio: true,
		        scales: {
		            yAxes: [{
		                ticks: {
		                    beginAtZero:true
		                }
		            }]
		        }
		    }
		});
</script>




		<div style="display:inline;width:33%;float:left;">
			<table id="compare_btc_tbl" width="350" border="0" cellspacing="1" cellpadding="0" >

					<tr>
						<td align="center" bgcolor="#fbfbfb" class="td_title" colspan="3">ETH</td>
					</tr>
						<td height="30" width="30"  width="30" align="center" class="td_title">EXCHANGE</td>
						<td height="30" width="30"  width="30" align="center" class="td_title">PRICE</td>
						<td height="30" width="150"  align="center" class="td_title">+/-(%)</td>
					<tr>
						<td height="30" width="30" align="center" bgcolor="#FFFFFF" style="color: #FF0000;" class="main_td_text">MAX PRICE</td>
						<td height="30" width="30" align="center" bgcolor="#FFFFFF" style="color: #FF0000;" class="main_td_text">\<?=number_format($eth_max, 2, '.', ',')?></td>
						<td height="30" width="150" align="center" bgcolor="#FFFFFF" style="color: #FF0000;" class="main_td_text">--</td>

					</tr>

					<tr>
						<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text"><?=$coinone_exchange?></td>
						<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=$coinone_eth_last?></td>
						<td height="30" width="150" align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=number_format($sub_eth_coinone)?>(<?=$percent_eth_coinone?>%)</td>
					</tr>

					<tr>
						<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text"><?=$coinfield_exchange?></td>
						<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=$coinfield_eth_last?></td>
						<td height="30" width="150" align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=number_format($sub_eth_coinfield)?>(<?=$percent_eth_coinfield?>%)</td>
					</tr>

					<tr>
						<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text"><?=$huobi_exchange?></td>
						<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=$huobi_eth_last?></td>
						<td height="30" width="150" align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=number_format($sub_eth_huobi)?>(<?=$percent_eth_huobi?>%)</td>
					</tr>

					<tr>
						<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text"><?=$bithumb_exchange?></td>
						<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=$bithumb_eth_last?></td>
						<td height="30" width="150" align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=number_format($sub_eth_bithumb)?>(<?=$percent_eth_bithumb?>%)</td>
					</tr>
					
					<tr>
						<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text"><?=$bittrex_exchange?></td>
						<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=$bittrex_eth_last?></td>
						<td height="30" width="150" align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=number_format($sub_eth_bittrex)?>(<?=$percent_eth_bittrex?>%)</td>
					</tr>
					
					<tr>
						<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text"><?=$poloniex_exchange?></td>
						<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=$poloniex_eth_last?></td>
						<td height="30" width="150" align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=number_format($sub_eth_bittrex)?>(<?=$percent_eth_poloniex?>%)</td>
					</tr>
					
					<tr>
						<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text"><?=$upbit_exchange?></td>
						<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=$upbit_eth_last?></td>
						<td height="30" width="150" align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=number_format($sub_eth_upbit)?>(<?=$percent_eth_upbit?>%)</td>
					</tr>


			</table>
			

            <input type="hidden" id="hi_cone_eth_last" name="hi_cone_eth_last" value="<?=$coinone_eth_last_ori?>"/>
            <input type="hidden" id="hi_cfield_eth_last" name="hi_cfield_eth_last" value="<?=$coinfield_eth_last_ori?>"/>
            <input type="hidden" id="hi_huobi_eth_last" name="hi_huobi_eth_last" value="<?=$huobi_eth_last_ori?>"/>
            <input type="hidden" id="hi_bithumb_eth_last" name="hi_bithumb_eth_last" value="<?=$bithumb_eth_last_ori?>"/>
            <input type="hidden" id="hi_upbit_eth_last" name="hi_upbit_btc_last" value="<?=$upbit_eth_last_ori?>"/>
            <input type="hidden" id="hi_bittrex_eth_last" name="hi_bittex_btc_last" value="<?=$bittrex_eth_last_ori?>"/>
            <input type="hidden" id="hi_poloniex_eth_last" name="hi_poloniex_btc_last" value="<?=$poloniex_eth_last_ori?>"/>
			
			
			
		</div>

<script>
	var max_eth_bar = document.getElementById("max_eth_bar");

	    $ex_cone_name = $('#hi_cone_ex').val();
	    $ex_cfield_name = $('#hi_cfield_ex').val();
	    $ex_huobi_name = $('#hi_huobi_ex').val();
	    $ex_bithumb_name = $('#hi_bithumb_ex').val();
	    $ex_upbit_name = $('#hi_upbit_ex').val();
	    $ex_bittrex_name = $('#hi_bittrex_ex').val();
	    $ex_poloniex_name = $('#hi_poloniex_ex').val();
	    

		$cone_eth_last = parseInt($('#hi_cone_eth_last').val());
		$cfield_eth_last = parseInt($('#hi_cfield_eth_last').val());
		$huobi_eth_last = parseInt($('#hi_huobi_eth_last').val());
		$bithumb_eth_last = parseInt($('#hi_bithumb_eth_last').val());
		$upbit_eth_last = parseInt($('#hi_upbit_eth_last').val());
		$bittrex_eth_last = parseInt($('#hi_bittrex_eth_last').val());
		$poloniex_eth_last = parseInt($('#hi_poloniex_eth_last').val());
		


		var max_eth_bar = new Chart(max_eth_bar, {
		    type: 'bar',
		    data: {
		    	labels: [$ex_cone_name, $ex_cfield_name, $ex_huobi_name, $ex_bithumb_name, $ex_upbit_name, $ex_bittrex_name, $ex_poloniex_name],
		        datasets: [{
		            label: 'ETH',
		            type : 'bar',
		            data: [$cone_eth_last, $cfield_eth_last, $huobi_eth_last, $bithumb_eth_last, $upbit_eth_last, $bittrex_eth_last, $poloniex_eth_last],
		            backgroundColor: [
		                'rgba(255, 99, 132, 0.2)',
		                'rgba(54, 162, 235, 0.2)',
		                'rgba(255, 206, 86, 0.2)',
		                'rgba(75, 192, 192, 0.2)',
		                'rgba(153, 102, 255, 0.2)',
		                'rgba(255, 159, 64, 0.2)',
		                'rgba(255, 159, 64, 0.2)'
		            ],
		            borderColor: [
		                'rgba(255,99,132,1)',
		                'rgba(54, 162, 235, 1)',
		                'rgba(255, 206, 86, 1)',
		                'rgba(75, 192, 192, 1)',
		                'rgba(153, 102, 255, 1)',
		                'rgba(255, 159, 64, 1)',
		                'rgba(255, 159, 64, 1)'
		            ],
		            borderWidth: 1
		        }]
		    },
		    options: {
		        maintainAspectRatio: true,
		        scales: {
		            yAxes: [{
		                ticks: {
		                    beginAtZero:true
		                }
		            }]
		        }
		    }
		});
</script>


		<div style="display:inline;width:33%;float:left;">
			<table id="compare_btc_tbl" width="350" border="0" cellspacing="1" cellpadding="0" >

					<tr>
						<td align="center" bgcolor="#fbfbfb" class="td_title" colspan="3">XRP</td>
					</tr>
						<td height="30" width="30"  width="30" align="center" class="td_title">EXCHANGE</td>
						<td height="30" width="30"  width="30" align="center" class="td_title">PRICE</td>
						<td height="30" width="150"  align="center" class="td_title">+/-(%)</td>
					<tr>
						<td height="30" width="30" align="center" bgcolor="#FFFFFF" style="color: #FF0000;" class="main_td_text">MAX PRICE</td>
						<td height="30" width="30" align="center" bgcolor="#FFFFFF" style="color: #FF0000;" class="main_td_text">\<?=number_format($xrp_max, 2, '.', ',')?></td>
						<td height="30" width="150" align="center" bgcolor="#FFFFFF" style="color: #FF0000;" class="main_td_text">--</td>

					</tr>

					<tr>
						<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text"><?=$coinone_exchange?></td>
						<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=$coinone_xrp_last?></td>
						<td height="30" width="150" align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=number_format($sub_xrp_coinone)?>(<?=$percent_xrp_coinone?>%)</td>
					</tr>

					<tr>
						<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text"><?=$coinfield_exchange?></td>
						<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=$coinfield_xrp_last?></td>
						<td height="30" width="150" align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=number_format($sub_xrp_coinfield)?>(<?=$percent_xrp_coinfield?>%)</td>
					</tr>

					<tr>
						<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text"><?=$huobi_exchange?></td>
						<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=$huobi_xrp_last?></td>
						<td height="30" width="150" align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=number_format($sub_xrp_huobi)?>(<?=$percent_xrp_huobi?>%)</td>
					</tr>

					<tr>
						<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text"><?=$bithumb_exchange?></td>
						<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=$bithumb_xrp_last?></td>
						<td height="30" width="150" align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=number_format($sub_xrp_bithumb)?>(<?=$percent_xrp_bithumb?>%)</td>
					</tr>
					
					<tr>
						<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text"><?=$bittrex_exchange?></td>
						<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=$bittrex_xrp_last?></td>
						<td height="30" width="150" align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=number_format($sub_xrp_bittrex)?>(<?=$percent_xrp_bittrex?>%)</td>
					</tr>
					
					<tr>
						<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text"><?=$poloniex_exchange?></td>
						<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=$poloniex_xrp_last?></td>
						<td height="30" width="150" align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=number_format($sub_xrp_poloniex)?>(<?=$percent_xrp_poloniex?>%)</td>
					</tr>
					
					<tr>
						<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text"><?=$upbit_exchange?></td>
						<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=$upbit_xrp_last?></td>
						<td height="30" width="150" align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=number_format($sub_xrp_upbit)?>(<?=$percent_xrp_upbit?>%)</td>
					</tr>

        			<input type="hidden" id="hi_cone_xrp_last" name="hi_cone_xrp_last" value="<?=$coinone_xrp_last_ori?>"/>
                    <input type="hidden" id="hi_cfield_xrp_last" name="hi_cfield_xrp_last" value="<?=$coinfield_xrp_last_ori?>"/>
                    <input type="hidden" id="hi_huobi_xrp_last" name="hi_huobi_xrp_last" value="<?=$huobi_xrp_last_ori?>"/>
                    <input type="hidden" id="hi_bithumb_xrp_last" name="hi_bithumb_xrp_last" value="<?=$bithumb_xrp_last_ori?>"/>
                    <input type="hidden" id="hi_upbit_xrp_last" name="hi_upbit_btc_last" value="<?=$upbit_xrp_last_ori?>"/>
                    <input type="hidden" id="hi_bittrex_xrp_last" name="hi_bittex_btc_last" value="<?=$bittrex_xrp_last_ori?>"/>
                    <input type="hidden" id="hi_poloniex_xrp_last" name="hi_poloniex_btc_last" value="<?=$poloniex_xrp_last_ori?>"/>
                    
			</table>
		</div>

<script>
	var max_xrp_bar = document.getElementById("max_xrp_bar");

	    $ex_cone_name = $('#hi_cone_ex').val();
	    $ex_cfield_name = $('#hi_cfield_ex').val();
	    $ex_huobi_name = $('#hi_huobi_ex').val();
	    $ex_bithumb_name = $('#hi_bithumb_ex').val();
	    $ex_upbit_name = $('#hi_upbit_ex').val();
	    $ex_bittrex_name = $('#hi_bittrex_ex').val();
	    $ex_poloniex_name = $('#hi_poloniex_ex').val();
	    
		$cone_xrp_last = parseInt($('#hi_cone_xrp_last').val());
		$cfield_xrp_last = parseInt($('#hi_cfield_xrp_last').val());
		$huobi_xrp_last = parseInt($('#hi_huobi_xrp_last').val());
		$bithumb_xrp_last = parseInt($('#hi_bithumb_xrp_last').val());
		$upbit_xrp_last = parseInt($('#hi_upbit_xrp_last').val());
		$bittrex_xrp_last = parseInt($('#hi_bittrex_xrp_last').val());
		$poloniex_xrp_last = parseInt($('#hi_poloniex_xrp_last').val());


		var max_xrp_bar = new Chart(max_xrp_bar, {
		    type: 'bar',
		    data: {
		    	labels: [$ex_cone_name, $ex_cfield_name, $ex_huobi_name, $ex_bithumb_name, $ex_upbit_name, $ex_bittrex_name, $ex_poloniex_name],
		        datasets: [{
		            label: 'XRP',
		            type : 'bar',
		            data: [$cone_xrp_last, $cfield_xrp_last, $huobi_xrp_last, $bithumb_xrp_last, $upbit_xrp_last, $bittrex_xrp_last, $poloniex_xrp_last],
		            backgroundColor: [
		                'rgba(255, 99, 132, 0.2)',
		                'rgba(54, 162, 235, 0.2)',
		                'rgba(255, 206, 86, 0.2)',
		                'rgba(75, 192, 192, 0.2)',
		                'rgba(153, 102, 255, 0.2)',
		                'rgba(255, 159, 64, 0.2)',
		                'rgba(255, 159, 64, 0.2)'
		            ],
		            borderColor: [
		                'rgba(255,99,132,1)',
		                'rgba(54, 162, 235, 1)',
		                'rgba(255, 206, 86, 1)',
		                'rgba(75, 192, 192, 1)',
		                'rgba(153, 102, 255, 1)',
		                'rgba(255, 159, 64, 1)',
		                'rgba(255, 159, 64, 1)'
		            ],
		            borderWidth: 1
		        }]
		    },
		    options: {
		        maintainAspectRatio: true,
		        scales: {
		            yAxes: [{
		                ticks: {
		                    beginAtZero:true
		                }
		            }]
		        }
		    }
		});
</script>




<div style="width:33%; float:left;" >
	<canvas id="main_btc_line"></canvas>
</div>

<div style="width:33%; float:left;">
	<canvas id="main_eth_line"></canvas>
</div>

<div style="width:33%; float:left;">
	<canvas id="main_xrp_line"></canvas>
</div>









<div id="container3">
    	<div class="container3_inner" style="width:1200px;">
   
    <div style="display:inline;float:left;">
    <table id="coinone_tbl" width="300" border="0" cellspacing="1" cellpadding="0" >
			<tr>
                <td align="center" bgcolor="#fbfbfb" class="td_title" colspan="1">COINONE(KOREA) </td>
                <td align="center" bgcolor="#fbfbfb" class="td_date" colspan="1"> <?=$coinone_date?></td>
                
				
			</tr>
			<tr>
				<td height="30" width="30"  width="30" align="center" class="td_title">NAME</td>
                <td height="30" width="30"  align="center" class="td_title">PRICE</td>
			</tr>

			<tr>
                <td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text"><?=$coinone_btc_currency?></td>
                <td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=$coinone_btc_last?></td>
			</tr>

			<tr>
				<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text"><?=$coinone_eth_currency?></td>
                <td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=$coinone_eth_last?></td>
			</tr>

			<tr>
				<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text"><?=$coinone_xrp_currency?></td>
                <td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=$coinone_xrp_last?></td>
			</tr>

			<tr>
				<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text"><?=$coinone_ltc_currency?></td>
                <td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=$coinone_ltc_last?></td>
			</tr>

			<tr>
				<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text"><?=$coinone_bch_currency?></td>
                <td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=$coinone_bch_last?></td>
			</tr>

			<tr>
				<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text"><?=$coinone_pib_currency?></td>
                <td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=$coinone_pib_last?></td>
			</tr>

			</table>

	 </div>



	 <div style="display:inline;float:left;">
    <table id="coinfield_tbl" width="300" border="0" cellspacing="1" cellpadding="0" >

			<tr>
                <td align="center" bgcolor="#fbfbfb" class="td_title" colspan="1">COINFIELD(CANADA)</td>
                <td align="center" bgcolor="#fbfbfb" class="td_date" colspan="1"> <?=$coinfield_date?></td>
			</tr>

			<tr>
				<td height="30" width="30"  width="30" align="center" class="td_title">NAME</td>
                <td height="30" width="30"  align="center" class="td_title">PRICE</td>
			</tr>

			<tr>
				<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text"><?=$coinfield_btc_currency?></td>
                <td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=$coinfield_btc_last?></td>
			</tr>


			<tr>
				<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text"><?=$coinfield_eth_currency?></td>
                <td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=$coinfield_eth_last?></td>
			</tr>

			<tr>
				<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text"><?=$coinfield_xrp_currency?></td>
                <td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=$coinfield_xrp_last?></td>
			</tr>

			<tr>
				<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text"><?=$coinfield_ltc_currency?></td>
                <td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=$coinfield_ltc_last?></td>
			</tr>

			<tr>
				 <td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text"><?=$coinfield_bch_currency?></td>
                 <td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=$coinfield_bch_last?></td>
			</tr>

			<tr>
				<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text"><?=$coinfield_dash_currency?></td>
                <td align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=$coinfield_dash_last?></td>
			</tr>
	</table>
     </div> 


	 <div style="display:inline;float:left;">
    <table id="huobi_tbl" width="300" border="0" cellspacing="1" cellpadding="0" >		

			<tr>
                <td align="center" bgcolor="#fbfbfb" class="td_title" colspan="1">HUOBI(HONG KONG)</td>
                <td align="center" bgcolor="#fbfbfb" class="td_date" colspan="1"> <?=$huobi_date?></td>
			</tr>
				<td height="30" width="30"  width="30" align="center" class="td_title">NAME</td>
                <td height="30" width="30"  align="center" class="td_title">PRICE</td>
			<tr>

			</tr>
				<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text"><?=$huobi_btc_currency?></td>
                <td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=$huobi_btc_last?></td>
			<tr>
				<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text"><?=$huobi_eth_currency?></td>
                <td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=$huobi_eth_last?></td>
			</tr>

			<tr>
				<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text"><?=$huobi_xrp_currency?></td>
                <td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=$huobi_xrp_last?></td>
			</tr>

			<tr>
				<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text"><?=$huobi_bch_currency?></td>
                <td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=$huobi_bch_last?></td>
			</tr>

			<tr>
				<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text"><?=$huobi_dash_currency?></td>
                <td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=$huobi_dash_last?></td>
			</tr>
	</table>
	 </div> 


	 <div style="display:inline;float:left;">
    <table id="bithumb_tbl" width="300" border="0" cellspacing="1" cellpadding="0" >		

			<tr>
                <td align="center" bgcolor="#fbfbfb" class="td_title" colspan="1">BITHUMB(KOREA)</td>
                <td align="center" bgcolor="#fbfbfb" class="td_date" colspan="1"> <?=$bithumb_date?></td>
			</tr>
				<td height="30" width="30"  width="30" align="center" class="td_title">NAME</td>
                <td height="30" width="30"  align="center" class="td_title">PRICE</td>
			<tr>
				<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text"><?=$bithumb_btc_currency?></td>
                <td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=$bithumb_btc_last?></td>
			</tr>

			<tr>
				<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text"><?=$bithumb_eth_currency?></td>
                <td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=$bithumb_eth_last?></td>
			</tr>

			<tr>
				<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text"><?=$bithumb_xrp_currency?></td>
                <td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=$bithumb_xrp_last?></td>
			</tr>


	</table>
     </div> 
      
	</div>
 </div>
 

<!-- SECOND LINE -->

 <div id="container3">
    <div class="container3_inner" style="width:1200px;">
 
        <div style="display:inline;float:left;">
            <table id="upbit_tbl" width="300" border="0" cellspacing="1" cellpadding="0" >
        
        			<tr>
                        <td align="center" bgcolor="#fbfbfb" class="td_title" colspan="1">UPBIT(KOREA)</td>
                        <td align="center" bgcolor="#fbfbfb" class="td_date" colspan="1"> <?=$upbit_date?></td>
        			</tr>
        
        			<tr>
        				<td height="30" width="30"  width="30" align="center" class="td_title">NAME</td>
                        <td height="30" width="30"  align="center" class="td_title">PRICE</td>
        			</tr>
        
        			<tr>
        				<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text"><?=$upbit_btc_currency?></td>
                        <td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=$upbit_btc_last?></td>
        			</tr>
        
        
        			<tr>
        				<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text"><?=$upbit_eth_currency?></td>
                        <td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=$upbit_eth_last?></td>
        			</tr>
        
        			<tr>
        				<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text"><?=$upbit_xrp_currency?></td>
                        <td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=$upbit_xrp_last?></td>
        			</tr>
        
        			<tr>
        				 <td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text"><?=$upbit_qtum_currency?></td>
                         <td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=$upbit_qtum_last?></td>
        			</tr>
        
        			<tr>
        				<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text"><?=$upbit_snt_currency?></td>
                        <td align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=$upbit_snt_last?></td>
        			</tr>
        	</table>
             </div>  
 
 
 
         <div style="display:inline;float:left;">
            <table id="huobi_tbl" width="300" border="0" cellspacing="1" cellpadding="0" >		
        
        			<tr>
                        <td align="center" bgcolor="#fbfbfb" class="td_title" colspan="1">BITTREX(USA)</td>
                        <td align="center" bgcolor="#fbfbfb" class="td_date" colspan="1"> <?=$bittrex_date?></td>
        			</tr>
        				<td height="30" width="30"  width="30" align="center" class="td_title">NAME</td>
                        <td height="30" width="30"  align="center" class="td_title">PRICE</td>
        			<tr>
        
        			</tr>
        				<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text"><?=$bittrex_btc_currency?></td>
                        <td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=$bittrex_btc_last?></td>
        			<tr>
        				<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text"><?=$bittrex_eth_currency?></td>
                        <td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=$bittrex_eth_last?></td>
        			</tr>
        
        			<tr>
        				<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text"><?=$bittrex_xrp_currency?></td>
                        <td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=$bittrex_xrp_last?></td>
        			</tr>
        	</table>
        	 </div>
        	 
        	<div style="display:inline;float:left;">
            <table id="huobi_tbl" width="300" border="0" cellspacing="1" cellpadding="0" >		
        
        			<tr>
                        <td align="center" bgcolor="#fbfbfb" class="td_title" colspan="1">POLONIEX(USA)</td>
                        <td align="center" bgcolor="#fbfbfb" class="td_date" colspan="1"> <?=$poloniex_date?></td>
        			</tr>
        				<td height="30" width="30"  width="30" align="center" class="td_title">NAME</td>
                        <td height="30" width="30"  align="center" class="td_title">PRICE</td>
        			<tr>
        
        			</tr>
        				<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text"><?=$poloniex_btc_currency?></td>
                        <td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=$poloniex_btc_last?></td>
        			<tr>
        				<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text"><?=$poloniex_eth_currency?></td>
                        <td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=$poloniex_eth_last?></td>
        			</tr>
        
        			<tr>
        				<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text"><?=$poloniex_xrp_currency?></td>
                        <td height="30" width="30" align="center" bgcolor="#FFFFFF" class="main_td_text">\<?=$poloniex_xrp_last?></td>
        			</tr>
        	</table>
        	 </div>  
 
 
 	</div>
 </div>
 
 
 






		</div>
 </div>
<!--font-weight: 500;-->
	
     <div id="container4">
    	<div class="container4_inner">
            <div class="title">CRYPTOCURRUNCY PRICE CHECK TEST SITE BY Aaron Yeo FOR PORTFOLIIO</div>
            <div class="sub_text">All data are from the different sites in the world which has different prices by market.<br></div>
            <div class="sub_text">For keeping track of price, It will make you easy to compare price to price.<br></div>
            <div class="sub_text2">This site is for web developing practice and Portfolio. </div>
            <div class="inquiry"><a href="/Support"><!-- <img src="/assets/images/bt_inquiry.png" alt="" align="middle"/> --></a></div>
    	</div>
    </div>
    
    
<script>

//moveType (0:left / 1:right) 
var moveType = 0;

var moveSpeed = 3000; 
 
var moveWork = false; 
 
var movePause = false;

function imgMove(){ 
    if(moveWork==false){ 
  
      if(moveType==0){
  
         var aWidth = $(".RollDiv > div > p:first").width(); 
  
         $(".RollDiv > div").append("<p href=\""+$(".RollDiv > div > p:first").attr("href")+"\">" + $(".RollDiv > div > p:first").html()+ "</p>"); 
          
         $(".RollDiv > div > p:first").animate({marginLeft:-aWidth},{duration:moveSpeed,step:function(){ 
          
         if(movePause==true){
          
            $(this).stop();
         }
         },complete:function(){ 
          
         $(this).remove();
          
         imgMove();
      }});
      }else{ 
 
       var aWidth = $(".RollDiv > div > p:last").width(); 
 
       $("<p href=\"" + $(".RollDiv > div > p:last").attr("href")+ "\" style=\"margin-left:-" + aWidth + "px\">" + $(".RollDiv > div > p:last").html()+ "</p>").insertBefore(".RollDiv > div > p:first") 
 
      $(".RollDiv > div > p:first").animate({marginLeft:0},{duration:moveSpeed,step:function(){ 
 
       if(movePause==true){ 
 
          $(this).stop(); 
       } 
       },complete:function(){ 
 
       $(".RollDiv > div > p:last").remove(); 
 
       imgMove(); 
    }}); 
 } 
 } 
 } 
 function goMove(){ 
 
    movePause=false;
     
    if(moveType==0){ 
       imgMove(); 
       }else{ 
       $(".RollDiv > div > a:first").animate({marginLeft:0},{duration:moveSpeed,step:function(){ 
 
       if(movePause==true){ 
 
          $(this).stop(); 
      } 
       },complete:function(){ 
 
      //$(".RollDiv > div > a:last").remove(); 
 
      imgMove(); 
   }}); 
}
   
}
imgMove(); 

</script>    
