<link rel="stylesheet" href="/assets/css/function.css" type="text/css">

    <div id="head_img">
    	<div class="head_img_inner">
			<div class="head_text">

			</div>
        </div>  
    </div>
    
    <div id="container1">
    	<div class="container1_inner">
            <div class="s_title">Check Cryptocurrency investment 
			<!-- <form method="post" action="Functions/get_data_selected" name="Select_form" id="Select_form"> -->
			
			<!--<a style="backgrond-color:#fff;" class="r03 admin_faq_edit" faq_id="<?=$faq_id?>" faq_category="<?=$faq_category?>" faq_title="<?=$faq_title?>" faq_content="<?=$faq_content?>" faq_date="<?=$faq_date?>">Edit</a>-->
			<?php 
			
			if(!$this->session->userdata('user_id')){
			?>
			<a style="backgrond-color:#fff;" class="coin_select">Select coin</a>
			<?php }?>
			
			
			<tr></tr>

			<?php 
			
			//var_dump($subtracted_list);
			$btc_value = $subtracted_list['sum_btc'];
			$eth_value = $subtracted_list['sum_eth'];
			$xrp_value = $subtracted_list['sum_xrp'];
			$ltc_value = $subtracted_list['sum_ltc'];
			$bch_value = $subtracted_list['sum_bch'];
			$dash_value = $subtracted_list['sum_dash'];
			$pib_value = $subtracted_list['sum_pib'];
			$qtum_value = $subtracted_list['sum_qtum'];
			$snt_value = $subtracted_list['sum_snt'];
			
			$btc_cy = $subtracted_list['currency_btc'];
			$eth_cy = $subtracted_list['currency_eth'];
			$xrp_cy = $subtracted_list['currency_xrp'];
			$ltc_cy = $subtracted_list['currency_ltc'];
			$bch_cy = $subtracted_list['currency_bch'];
			$dash_cy = $subtracted_list['currency_dash'];
			$pib_cy = $subtracted_list['currency_pib'];
			$qtum_cy = $subtracted_list['currency_qtum'];
			$snt_cy = $subtracted_list['currency_snt'];
			
			$btc_count = $subtracted_list['btc_count'];
			$eth_count = $subtracted_list['eth_count'];
			$xrp_count = $subtracted_list['xrp_count'];
			$ltc_count = $subtracted_list['ltc_count'];
			$dash_count = $subtracted_list['dash_count'];
			$bch_count = $subtracted_list['bch_count'];
			$dash_count = $subtracted_list['dash_count'];
			$pib_count = $subtracted_list['pib_count'];
			$qtum_count = $subtracted_list['qtum_count'];
			$snt_count = $subtracted_list['snt_count'];
			
			$btc_rate = $subtracted_list['btc_rate'];
			$eth_rate = $subtracted_list['eth_rate'];
			$xrp_rate = $subtracted_list['xrp_rate'];
			$ltc_rate = $subtracted_list['ltc_rate'];
			$dash_rate = $subtracted_list['dash_rate'];
			$bch_rate = $subtracted_list['bch_rate'];
			$dash_rate = $subtracted_list['dash_rate'];
			$pib_rate = $subtracted_list['pib_rate'];
			$qtum_rate = $subtracted_list['qtum_rate'];
			$snt_rate = $subtracted_list['snt_rate'];

			$total = $btc_value + $eth_value + $xrp_value + $ltc_value + $bch_value + $dash_value + $pib_value + $qtum_value + $snt_value;
			
			if($this->session->userdata('user_id')){
			?>
			
			<div id="container3" class="container3"><div class="container3_inner" style="width:1200px;">
    		<div id="container10" style="display:inline-flex;float:left;">	
			<table id="coinone_tbl" width="300" border="0" cellspacing="1" cellpadding="0" >
    		
    			<div id="title">
					<tr><td height="30" width="30" align="center" bgcolor="#FFFFFF" class="func_td_text">COIN</td>
						<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="func_td_text">AMOUNT</td>
						<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="func_td_text">QTY</td>
						<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="func_td_text">RATE</td>
					</tr>
				</div>	
    		
				<div id="btc_value">
					<tr><td height="30" width="30" align="center" bgcolor="#FFFFFF" class="func_td_text">BTC : </td>
						<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="func_td_text"><?=$btc_value?></td>
						<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="func_td_text"><?=$btc_count?></td>
						<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="func_td_text"><?=$btc_rate?></td>
					</tr>
				</div>				
				<input type="hidden" id="hi_btc_value" name="hi_btc_value" value=<?=$btc_value?> />
				
				
				<div id="eth_value">
					<tr><td height="30" width="30" align="center" bgcolor="#FFFFFF" class="func_td_text">ETH : </td>
						<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="func_td_text"><?=$eth_value?></td>
						<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="func_td_text"><?=$eth_count?></td>
						<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="func_td_text"><?=$eth_rate?></td>
					</tr>
				</div>
				<input type="hidden" id="hi_eth_value" name="hi_eth_value" value=<?=$eth_value?> />
				
				<div id="xrp_value">
					<tr><td height="30" width="30" align="center" bgcolor="#FFFFFF" class="func_td_text">XRP : </td>
						<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="func_td_text"><?=$xrp_value?></td>
						<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="func_td_text"><?=$xrp_count?></td>
						<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="func_td_text"><?=$xrp_rate?></td>
					</tr>
				</div>
				<input type="hidden" id="hi_xrp_value" name="hi_xrp_value" value=<?=$xrp_value?> />
				
				<div id="ltc_value">
    				<tr><td height="30" width="30" align="center" bgcolor="#FFFFFF" class="func_td_text">LTC : </td>
    				<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="func_td_text"><?=$ltc_value?></td>
    				<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="func_td_text"><?=$ltc_count?></td>
    				<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="func_td_text"><?=$ltc_rate?></td>
    				</tr>
				</div>
				<input type="hidden" id="hi_ltc_value" name="hi_ltc_value" value=<?=$ltc_value?> />
				
				<div id="bch_value">
    				<tr><td height="30" width="30" align="center" bgcolor="#FFFFFF" class="func_td_text">BCH : </td>
    					<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="func_td_text"><?=$bch_value?></td>
    					<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="func_td_text"><?=$bch_count?></td>
    					<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="func_td_text"><?=$bch_rate?></td>
    				</tr>
				</div>
				<input type="hidden" id="hi_bch_value" name="hi_bch_value" value=<?=$bch_value?> />
				
				<div id="dash_value">
    				<tr><td height="30" width="30" align="center" bgcolor="#FFFFFF" class="func_td_text">DASH : </td>
    					<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="func_td_text"><?=$dash_value?></td>
    					<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="func_td_text"><?=$dash_count?></td>
    					<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="func_td_text"><?=$dash_rate?></td>
    				</tr>
				</div>
				<input type="hidden" id="hi_dash_value" name="hi_dash_value" value=<?=$dash_value?> />
				
				<div id="pib_value">
    				<tr><td height="30" width="30" align="center" bgcolor="#FFFFFF" class="func_td_text">PIB : </td>
    					<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="func_td_text"><?=$pib_value?></td>
    					<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="func_td_text"><?=$pib_count?></td>
    					<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="func_td_text"><?=$pib_rate?></td>
    				</tr>
				</div>
				<input type="hidden" id="hi_pib_value" name="hi_pib_value" value=<?=$pib_value?> />
				
				<div id="qtum_value">
    				<tr><td height="30" width="30" align="center" bgcolor="#FFFFFF" class="func_td_text">QTUM : </td>
    					<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="func_td_text"><?=$qtum_value?></td>
    					<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="func_td_text"><?=$qtum_count?></td>
    					<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="func_td_text"><?=$qtum_rate?></td>
    				</tr>
				</div>
				<input type="hidden" id="hi_qtum_value" name="hi_qtum_value" value=<?=$qtum_value?> />
				
				<div id="snt_value">
    				<tr><td height="30" width="30" align="center" bgcolor="#FFFFFF" class="func_td_text">SNT : </td>
    					<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="func_td_text"><?=$snt_value?></td>
    					<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="func_td_text"><?=$snt_count?></td>
    					<td height="30" width="30" align="center" bgcolor="#FFFFFF" class="func_td_text"><?=$snt_rate?></td>
    				</tr>
				</div>
    			<input type="hidden" id="hi_snt_value" name="hi_snt_value" value=<?=$snt_value?> />
    			
				<br><div id="total_value">
    				<tr><td height="30" width="30" align="center" bgcolor="#FFFFFF" class="func_td_text">total : </td>
    					<td height="30" width="30" align="center" bgcolor="#FFFFFF" style="color: #FF0000;" class="func_td_text"><?=$total?></td>
    				</tr>
				</div>		    		
    			</table>
    			
    			
    			
            </div>
            
            
            <div style="width:400px; display:block; float:left; margin-left:170px;">
				<canvas id="setting_total_pie"></canvas>			
			</div>
			<div style="width:600px; display:inline-flex; margin-top:120px; float:left;">
				<canvas id="setting_total_bar"></canvas>
			</div>
            
    		</div>
    		
			
			<?php }	?>			
			
			
			
			<script>
			var btc_value = document.getElementById('hi_btc_value').value;
			var eth_value = document.getElementById('hi_eth_value').value;
			var xrp_value = document.getElementById('hi_xrp_value').value;
			var ltc_value = document.getElementById('hi_ltc_value').value;
			var bch_value = document.getElementById('hi_bch_value').value;
			var dash_value = document.getElementById('hi_dash_value').value;
			var pib_value = document.getElementById('hi_pib_value').value;
			var qtum_value = document.getElementById('hi_qtum_value').value;
			var snt_value = document.getElementById('hi_snt_value').value;
			       			
    		var setting_total_bar = document.getElementById("setting_total_bar");

    		var setting_total_bar = new Chart(setting_total_bar, {
    		    type: 'bar',
    		    data: {
    		        labels: ['BTC', 'ETH', 'XRP', 'LTC', 'BCH', 'DASH', 'PIB', 'QTUM', 'SNT'],
    		        datasets: [{
    		            label: 'Total',
    		            type : 'bar',
    		            data: [btc_value, eth_value, xrp_value, ltc_value, bch_value, dash_value, pib_value, qtum_value, snt_value],
    		            backgroundColor: [
    		            	'rgba(255, 99, 132, 0.2)',
    		                'rgba(54, 162, 235, 0.2)',
    		                'rgba(255, 206, 86, 0.2)',
    		                'rgba(75, 192, 192, 0.2)',
    		                'rgba(153, 102, 255, 0.2)',
    		                'rgba(255, 159, 64, 0.2)',
    		                'rgba(255, 159, 64, 0.2)',
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
    		                'rgba(255, 159, 64, 1)',
    		                'rgba(255, 159, 64, 1)',
    		                'rgba(255, 159, 164, 1)'
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


    		var setting_total_pie = document.getElementById("setting_total_pie");

    		var setting_total_pie = new Chart(setting_total_pie, {
    		    type: 'pie',
    		    data: {
    		    	labels: ['BTC', 'ETH', 'XRP', 'LTC', 'BCH', 'DASH', 'PIB', 'QTUM', 'SNT'],
    		        datasets: [{
    		            label: 'Total',
    		            type : 'pie',
    		            data: [btc_value, eth_value, xrp_value, ltc_value, bch_value, dash_value, pib_value, qtum_value, snt_value],
    		            backgroundColor: [
    		                'rgba(255, 99, 132, 0.2)',
    		                'rgba(54, 162, 235, 0.2)',
    		                'rgba(2, 14, 14, 0.2)',
    		                'rgba(75, 192, 192, 0.2)',
    		                'rgba(153, 102, 255, 0.2)',
    		                'rgba(255, 55, 98, 0.2)',
    		                'rgba(249, 4, 20, 0.2)',
    		                'rgba(94, 215, 57, 0.2)',
    		                'rgba(240, 210, 15, 0.2)',
    		            ],
    		            borderColor: [
    		                'rgba(255,99,132,1)',
    		                'rgba(54, 162, 235, 1)',
    		                'rgba(2, 14, 14, 1)',
    		                'rgba(75, 192, 192, 1)',
    		                'rgba(153, 102, 255, 1)',
    		                'rgba(255, 55, 98, 1)',
    		                'rgba(249, 4, 20, 1)',
    		                'rgba(94, 215, 57, 1)',
    		                'rgba(240, 210, 15, 1)',
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
			
			
						
			
			
			<div style="width:400px;">
				<canvas id="func_total_pie"></canvas>			
			
    		<!-- <canvas id="func_line"></canvas>
    		<canvas id="func_bar"></canvas>
    		<canvas id="func_hb"></canvas> -->
			</div>
			
			
			<div style="width:500px;">
				<canvas id="func_total_bar"></canvas>
			</div>
			
			
			
			
			<div id='summary'></div>
			
			
			</div>
            <div class="text1">It will show you investment by number and chart<br>
            JFLUKE <span class="text1_p">JFLUKE</span><br>
            
            <span class="text1_p">JFLUKE</span>
            </div>
            <div class="line"></div>
            <div class="point_box">
            	<img class="point_icon" src="/assets/images/function_icon01.png" alt="" align="middle"/>
                <div class="text_box">
                    <p class="text2"> JFLUKE</p>
                    <p class="text3">
                    
                    </p>
				</div>
                <div class="line_s"></div>
			</div>
            
    	</div>
    </div>
    

<div id="dialog_functioni_coin_check">
    
<!-- <form method="post" action="Functions/get_data_selected_submit" name="coin_count_form" id="coin_count_form"> -->
    <table width="490" border="0" cellspacing="0" cellpadding="0">
        
        <tr>
          <td><!-- <img src="/assets/imgage/ui/ui-icons_8c291d_256x240.png" width="490" height="10" alt=""/> --></td>
        </tr>
        <tr>
          <td height="34" align="center" bgcolor="#FFFFFF">&nbsp;</td>
        </tr>
        
        <div class="widget">
      
          <h2>Select Coins</h2>
          <fieldset>
            <legend></legend>
            
            
            <label for="btc">BTC</label>
            <input type="checkbox" name="coin_list" id="btc" value="btc">            
            
            <label for="eth">ETH</label>
            <input type="checkbox" name="coin_list" id="eth" value="eth">
            
            <label for="xrp">XRP</label>
            <input type="checkbox" name="coin_list" id="xrp" value="xrp">
            
            <label for="ltc">LTC</label>
            <input type="checkbox" name="coin_list" id="ltc" value="ltc">
            
            <label for="bch">BCH</label>
            <input type="checkbox" name="coin_list" id="bch" value="bch">
            
            <label for="dash">DASH</label>
            <input type="checkbox" name="coin_list" id="dash" value="dash">
            
            <label for="pib">PIB</label>
            <input type="checkbox" name="coin_list" id="pib" value="pib">
            
            <label for="qtum">QTUM</label>
            <input type="checkbox" name="coin_list" id="qtum" value="qtum">
            
            <label for="snt">SNT</label>
            <input type="checkbox" name="coin_list" id="snt" value="snt">
          </fieldset>
     		
     		<!-- <a style="backgrond-color:#fff;" class="r03 fucntion_select_coin">Edit</a> -->
     
    	</div>
        
          <td height="40" bgcolor="#FFFFFF">&nbsp;</td>
        </tr>
        
        <div id="text_list"></div>
        
        
        	<!-- <input type="hidden" id="hid_edit_faq_id" name="hid_edit_faq_id"> -->
        <tr>
        
          <td height="18" align="center" bgcolor="#FFFFFF">
          
          
          <!-- <input type="IMAGE" src="" width="90" height="40" name="submit" value="submit"> -->
          <div id="request_link"><a style="backgrond-color:#fff;" class="r03 fucntion_select_coin">Done selection</a>
          <a style="backgrond-color:#fff;" class="r03 fucntion_get_coin">Request total amount</a>
          </div>
          
          
          <!-- <input type="IMAGE" src="" width="90" height="40" name="submit" value="submit"> -->

          </td>
        </tr>
        <tr>
          <td height="20" bgcolor="#FFFFFF">&nbsp;</td>
        </tr>
        <tr>
          <td><img src="/assets/img/popup_img04.png" width="490" height="10" alt=""/></td>
        </tr>
	</table>
	<!-- </form> -->	
</div>