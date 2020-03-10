function gomain(){
    var answer = confirm("Would you like to refresh this page?");
    if(answer)
	return true;
    else
	return false;
}

function wating_notice(){
    alert('Sorry, coming soon');
    return false;
}

//Login
function login_form_Function(){
    var special_pattern = /[`~!@#$%^&*|\\\'\";:\/?^=^+_()<>]/gi;

    if($("#remember_id_chx").prop("checked")) {
        $.cookie('login_user_id', $("#login_user_id").val());    
    } else {
        $.removeCookie("login_user_id");
    }
	
    var id = document.getElementById('login_user_id').value;
    var pw = document.getElementById('user_pw').value;
	
    if( special_pattern.test(id) == true || special_pattern.test(pw) == true){
        alert('Please fill in the blank with E-mail format');
        return false;
    }	
    if(id == '' || pw == ''){
    	alert('Please fill in the ID & PW');
	return false;
    }
    if(id == ''){		
	alert('Please fill in the ID');
	return false;
    }
    if(pw == ''){
	alert('Please fill in the PW');
	return false;
    }	
	return true;
}

function ckeck_logout_Function(){	
    var answer = confirm('Are you sure log-out?');
	if(answer)
	    return true;
	else
	    return false;
}

$(function() {
	$(".imagebox").bxSlider({
    	auto: true,
    	autoControls: true,
    	mode: 'horizontal' //horizontal, fade  	
	});
	var select_id;
    
	dialog_functioni_coin_check = $( "#dialog_functioni_coin_check" ).dialog({
	      autoOpen: false,
	      height: 800,
	      width: 525,
	      modal: true,
	      resizable: true,
	      draggable: true,
	});	  
	  
	user_signin_dialog = $( "#user_signin_dialog" ).dialog({
	      autoOpen: false,
	      height: 440,
	      width: 590,
	      modal: true,
	      resizable: false,
	      draggable: true,
	});
	    
	user_signup_dialog = $( "#user_signup_dialog" ).dialog({
	      autoOpen: false,
	      height: 400,
	      width: 590,
	      modal: true,
	      resizable: false,
	      draggable: true,
	});
	
	user_coin_setting = $( "#user_coin_setting" ).dialog({
	      autoOpen: false,
	      height: 800,
	      width: 525,
	      modal: true,
	      resizable: true,
	      draggable: true,			  
	});
		
    $( ".coin_select" ).button().on( "click", function() {
	dialog_functioni_coin_check.dialog( "open" );
    });	

    $(".user_signin").button().on("click", function(){
	user_signin_dialog.dialog("open");
    });

    $(".user_signup").button().on("click", function(){
	user_signup_dialog.dialog("open");
    });

    $(".user_setting").button().on("click", function(){
	var dataString = null;
	$.ajax({
	    type        : "POST",
	    url         : "User/get_user_setting",
	    data        : dataString,  
	    dataType    : "json",
	    encode      : true,
	    success : function(data){
			var i;
			var ar = data.coin_kind;	    	          	
			var ex_ar = new Array();
			ex_ar = data.ex_kind;
				for(var a=0;a<ex_ar.length;a++){
				for(var q=0;q<ex_ar[a].length;q++){
				}
			}
			for(i=0;i<ar.length;i++){
				$('#select_coin_'+ar[i]+'').remove();
				if(ar.length == i+1){
					float = '';
				} else {
					float = 'left';
				}
					$('#coin_setting').append('<div id="select_coin_'+ar[i]+'" style="float:'+float+';width:90px;"><table width="490" border="0" cellspacing="0" cellpadding="0">'
					+'<label for="btc" style="width:50px;margin-right:1px;">'+ar[i].toUpperCase()+'</label><input type="checkbox" style="margin-right:5px;" name="coin_list" id="setting_'+ar[i]+'_chk" value="'+ar[i]+'">'
					+'</div></div><div id="setting_coin_chk_'+ar[i]+'" style="float:right;padding-right:100px;"></div>');
			}
				  user_coin_setting.dialog("open");
		    },
		    error : function(data){
		    alert(data.message);
		    }   
	})
    });

    $(".user_logout").button().on("click", function() {
	if(window.location.pathname.indexOf("index.php") < 0){	    		
		urls = "index.php/User/logout_ajax";
	} else {	    		
		urls = "User/logout_ajax";
	}
	var dataString = null;
	$.ajax({
	    type        : "POST",
	    url         : urls,
	    data        : dataString,  
	    dataType    : "json",
	    encode      : true,
	    success : function(data){
			alert(data.message);
			window.location.reload();
		    },
		    error : function(data){
		    alert(data.message);
		    }   
	})

    });

    $(".user_signup_ok").button().on("click", function() {
	var mailformat = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	var user_id = $("#signup_user_id").val();
	var user_pw = $("#signup_user_pw").val();
	var user_name = $("#signup_user_name").val();
	if(user_id == '' || user_pw == '' || user_name == ''){
		alert('Please fill up the blank');
		return false;
	}
	if(!user_id.match(mailformat)){  
		alert("ID should be email format");
		return false;  
	}
	var dataString = 'user_id='+user_id+'&user_pw='+user_pw+'&user_name='+user_name;
	$.ajax({
	    type        : "POST",
	    url         : "User/save_userInfo",
	    data        : dataString,  
	    dataType    : "json",
	    encode      : true,
	    success : function(data){			    	
			if(data.status == "success"){
				alert(data.message);
			}
			if(data.status == "fail"){
				alert(data.message);
			}
		    },
		    error : function(data){
		    alert(data.message);
		    }   
	})
    });

    $(".user_signin_ok").button().on("click", function() {
	var urls = null;
	var mailformat = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	var user_id = $("#login_user_id").val();
	var user_pw = $("#login_user_pw").val();

	if(user_id == '' || user_pw == ''){
		alert('Please fill up the blank');
		return false;
	}
	if(!user_id.match(mailformat)){  
		alert("ID should be email format");
		return false;
	}

	if(window.location.pathname.indexOf("index.php")<0){
		urls = "index.php/User/login_end";
	} else {	    		
		urls = "User/login_end";
	}
	var dataString = "user_id="+user_id+"&user_pw="+user_pw;
	$.ajax({
	    type        : "POST",
	    url         : urls,
	    data        : dataString,
	    dataType    : "json",
	    encode      : true,
	    success : function(data){
			if(data.status == "success"){			    		
				if(data.data == false){
					alert('No result, Please check ID or PW');
				} else {
					alert('Loged  on');
					user_signin_dialog.dialog("close");
					window.location.reload();
				}
			}
		    },
		    error : function(data){
		    alert(data.message);
		    }   
	})
    });

    $( ".fucntion_save_coin" ).button().on( "click", function() {
	var btc_count = $('#btc_count').val();
	var eth_count = $('#eth_count').val();
	var xrp_count = $('#xrp_count').val();
	var ltc_count = $('#ltc_count').val();
	var bch_count = $('#bch_count').val();
	var dash_count = $('#dash_count').val();
	var pib_count = $('#pib_count').val();
	var qtum_count = $('#qtum_count').val();
	var snt_count = $('#snt_count').val();

	if(btc_count == null){
		btc_count=0;
	}
	if(eth_count == null){
		eth_count=0;
	}
	if(xrp_count == null){
		xrp_count=0;
	}
	if(ltc_count == null){
		ltc_count=0;
	}
	if(bch_count == null){
		bch_count=0;
	}
	if(dash_count == null){
		dash_count=0;
	}
	if(pib_count == null){
		pib_count=0;
	}
	if(qtum_count == null){
		qtum_count=0;
	}
	if(snt_count == null){
		snt_count=0;
	}
		var dataString = 'btc_count='+ btc_count +'&eth_count='+ eth_count + '&xrp_count='+ xrp_count+'&ltc_count='+ltc_count+
		'&bch_count='+ bch_count +'&dash_count='+ dash_count +'&pib_count='+pib_count+'&qtum_count='+qtum_count+
		'&snt_count='+snt_count;
	$.ajax({
	    type        : "POST",
	    url         : "User/save_data_selected_ajax",
	    data        : dataString,  
	    dataType    : "json",
	    encode      : true,
	    success : function(data){
			alert(data.message);
			user_coin_setting.dialog("close");
			window.location.reload();
		    },
		    error : function(results){
		    alert(results.message);
		    }   
	})
    });

    //fucntion_get_coin
    $( ".fucntion_get_coin" ).button().on( "click", function() {
	$('#container3').remove();
	$('#container3_inner').remove();
	$('#container10').remove();
	$('#coinone_tbl').remove();
	$('#tr_div1').remove();
	$('#tr_div2').remove();

	$('#btc_value').remove();
	$('#eth_value').remove();
	$('#xrp_value').remove();
	$('#ltc_value').remove();
	$('#bch_value').remove();
	$('#dash_value').remove();
	$('#pib_value').remove();
	$('#qtum_value').remove();
	$('#snt_value').remove();
	$('#total_value').remove();

	var btc_count = $('#btc_count').val();
	var eth_count = $('#eth_count').val();
	var xrp_count = $('#xrp_count').val();
	var ltc_count = $('#ltc_count').val();
	var bch_count = $('#bch_count').val();
	var dash_count = $('#dash_count').val();
	var pib_count = $('#pib_count').val();
	var qtum_count = $('#qtum_count').val();
	var snt_count = $('#qtum_count').val();

	if(btc_count == null){
		btc_count=0;
	}
	if(eth_count == null){
		eth_count=0;
	}
	if(xrp_count == null){
		xrp_count=0;
	}
	if(ltc_count == null){
		ltc_count=0;
	}
	if(bch_count == null){
		bch_count=0;
	}
	if(dash_count == null){
		dash_count=0;
	}
	if(pib_count == null){
		pib_count=0;
	}
	if(qtum_count == null){
		qtum_count=0;
	}
	if(snt_count == null){
		snt_count=0;
	}
		var dataString = 'btc_count='+ btc_count +'&eth_count='+ eth_count + '&xrp_count='+ xrp_count+'&ltc_count='+ltc_count+
		'&bch_count='+ bch_count +'&dash_count='+ dash_count +'&pib_count='+pib_count+'&qtum_count='+qtum_count+
		'&snt_count='+snt_count;

	$.ajax({
	    type        : "POST",
	    url         : "Functions/get_data_selected_ajax",
	    data        : dataString,  
	    dataType    : "json",
	    encode      : true,
	    success : function(data){
			if(data.status == "success"){
				var btc_value = parseInt(0);
				var eth_value = parseInt(0);
				var xrp_value = parseInt(0);
				var ltc_value = parseInt(0);
				var bch_value = parseInt(0);
				var dash_value = parseInt(0);
				var pib_value = parseInt(0);
				var qtum_value = parseInt(0);
				var snt_value = parseInt(0);

				var btc_cy = null;
				var eth_cy = null;
				var xrp_cy = null;
				var ltc_cy = null;
				var bch_cy = null;
				var dash_cy = null;
				var pib_cy = null;
				var qtum_cy = null;
				var snt_cy = null;

				$('#summary').append('<div id="container3" class="container3"><div class="container3_inner" style="width:1200px;">');
				$('#summary').append('<div id="container10" style="display:inline;float:left;">');	
				$('#summary').append('<table id="coinone_tbl" width="300" border="0" cellspacing="1" cellpadding="0" >');

				$.each( data.data, function( key, value ) {
					if(key == 'sum_btc'){
						btc_value = parseInt(value);
						btc_cy = 'BTC';
						$('#summary').append('<div id="btc_value"><tr><td height="30" width="30" align="center" bgcolor="#FFFFFF" class="td_text">BTC : </td><td height="30" width="30" align="center" bgcolor="#FFFFFF" class="td_text">'+value+'</td></tr></div>');
						$('#summary').append('<input type="hidden" id="hi_btc_value" name="hi_btc_value" value="'+value+'">');
					}
					if(key == 'sum_eth'){
						eth_value = parseInt(value);
						eth_cy = 'ETH';
						$('#summary').append('<div id="eth_value"><tr><td height="30" width="30" align="center" bgcolor="#FFFFFF" class="td_text">ETH : </td><td height="30" width="30" align="center" bgcolor="#FFFFFF" class="td_text">'+value+'</td></tr></div>');
						$('#summary').append('<input type="hidden" id="hi_eth_value" name="hi_eth_value" value="'+value+'">');
					}
					if(key == 'sum_xrp'){
						xrp_value = parseInt(value);
						xrp_cy = 'XRP';
						$('#summary').append('<div id="xrp_value"><tr><td height="30" width="30" align="center" bgcolor="#FFFFFF" class="td_text">XRP : </td><td height="30" width="30" align="center" bgcolor="#FFFFFF" class="td_text">'+value+'</td></tr></div>');
						$('#summary').append('<input type="hidden" id="hi_xrp_value" name="hi_xrp_value" value="'+value+'">');
					}
					if(key == 'sum_ltc'){
						ltc_value = parseInt(value);
						ltc_cy = 'LTC';
						$('#summary').append('<div id="ltc_value"><tr><td height="30" width="30" align="center" bgcolor="#FFFFFF" class="td_text">LTC : </td><td height="30" width="30" align="center" bgcolor="#FFFFFF" class="td_text">'+value+'</td></tr></div>');
						$('#summary').append('<input type="hidden" id="hi_ltc_value" name="hi_ltc_value" value="'+value+'">');
					}
					if(key == 'sum_bch'){
						bch_value = parseInt(value);
						bch_cy = 'BCH';
						$('#summary').append('<div id="bch_value"><tr><td height="30" width="30" align="center" bgcolor="#FFFFFF" class="td_text">BCH : </td><td height="30" width="30" align="center" bgcolor="#FFFFFF" class="td_text">'+value+'</td></tr></div>');
						$('#summary').append('<input type="hidden" id="hi_bch_value" name="hi_bch_value" value="'+value+'">');
					}
					if(key == 'sum_dash'){
						dash_value = parseInt(value);
						dash_cy = 'DASH';
						$('#summary').append('<div id="dash_value"><tr><td height="30" width="30" align="center" bgcolor="#FFFFFF" class="td_text">DASH : </td><td height="30" width="30" align="center" bgcolor="#FFFFFF" class="td_text">'+value+'</td></tr></div>');
						$('#summary').append('<input type="hidden" id="hi_dash_value" name="hi_dash_value" value="'+value+'">');
					}
					if(key == 'sum_pib'){
						pib_value = parseInt(value);
						pib_cy = 'PIB';
						$('#summary').append('<div id="pib_value"><tr><td height="30" width="30" align="center" bgcolor="#FFFFFF" class="td_text">PIB : </td><td height="30" width="30" align="center" bgcolor="#FFFFFF" class="td_text">'+value+'</td></tr></div>');
						$('#summary').append('<input type="hidden" id="hi_pib_value" name="hi_pib_value" value="'+value+'">');
					}
					if(key == 'sum_qtum'){
						qtum_value = parseInt(value);
						qtum_cy = 'QTUM';
						$('#summary').append('<div id="qtum_value"><tr><td height="30" width="30" align="center" bgcolor="#FFFFFF" class="td_text">PIB : </td><td height="30" width="30" align="center" bgcolor="#FFFFFF" class="td_text">'+value+'</td></tr></div>');
						$('#summary').append('<input type="hidden" id="hi_qtum_value" name="hi_qtum_value" value="'+value+'">');
					}
					if(key == 'sum_snt'){
						snt_value = parseInt(value);
						snt_cy = 'PIB';
						$('#summary').append('<div id="snt_value"><tr><td height="30" width="30" align="center" bgcolor="#FFFFFF" class="td_text">PIB : </td><td height="30" width="30" align="center" bgcolor="#FFFFFF" class="td_text">'+value+'</td></tr></div>');
						$('#summary').append('<input type="hidden" id="hi_snt_value" name="hi_snt_value" value="'+value+'">');
					}
				});

				var total = btc_value + eth_value + xrp_value + ltc_value + bch_value + dash_value + pib_value; 
				$('#summary').append('<br><div id="total_value"><tr><td height="30" width="30" align="center" bgcolor="#FFFFFF" class="td_text">total : </td><td height="30" width="30" align="center" bgcolor="#FFFFFF" class="td_text">'+total+'</td></tr></div>');			    		
				$('#summary').append('</table></div></div>');

				dialog_functioni_coin_check.dialog("close");

				var func_total_pie = document.getElementById("func_total_pie");
				var func_total_pie = new Chart(func_total_pie, {
				    type: 'pie',
				    data: {
					labels: [btc_cy, eth_cy, xrp_cy, ltc_cy, bch_cy, dash_cy, pib_cy, qtum_cy, snt_cy],
					datasets: [{
					    label: 'Total',
					    type : 'pie',
					    data: [btc_value, eth_value, xrp_value, ltc_value, bch_value, dash_value, pib_value, qtum_value, snt_value],
					    backgroundColor: [
						'rgba(255, 99, 132, 0.2)',
						'rgba(54, 162, 235, 0.2)',
						'rgba(255, 206, 86, 0.2)',
						'rgba(75, 192, 192, 0.2)'
					    ],
					    borderColor: [
						'rgba(255,99,132,1)',
						'rgba(54, 162, 235, 1)',
						'rgba(255, 206, 86, 1)',
						'rgba(75, 192, 192, 1)'
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

				var func_total_bar = document.getElementById("func_total_bar");
				var func_total_bar = new Chart(func_total_bar, {
				    type: 'bar',
				    data: {
					labels: [btc_cy, eth_cy, xrp_cy, ltc_cy, bch_cy, dash_cy, pib_cy, qtum_cy, snt_cy],
					datasets: [{
					    label: 'Total',
					    type : 'bar',
					    data: [btc_value, eth_value, xrp_value, ltc_value, bch_value, dash_value, pib_value, qtum_value, snt_value],
					    backgroundColor: [
						'rgba(255, 99, 132, 0.2)',
						'rgba(54, 162, 235, 0.2)',
						'rgba(255, 206, 86, 0.2)',
						'rgba(75, 192, 192, 0.2)'
					    ],
					    borderColor: [
						'rgba(255,99,132,1)',
						'rgba(54, 162, 235, 1)',
						'rgba(255, 206, 86, 1)',
						'rgba(75, 192, 192, 1)'
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
			   }
		    },
		    error : function(results){
		    alert(results.message);
		    }   
	})

    });

    $( ".fucntion_select_coin" ).button().on( "click", function() {
	$("#btc_text").remove();
	$("#eth_text").remove();
	$("#xrp_text").remove();
	$("#ltc_text").remove();
	$("#bch_text").remove();
	$("#dash_text").remove();
	$("#pib_text").remove();
	$("#qtum_text").remove();
	$("#snt_text").remove();

	var btc = $('input:checkbox[id="btc"]').is(":checked");
	var eth = $('input:checkbox[id="eth"]').is(":checked");
	var xrp = $('input:checkbox[id="xrp"]').is(":checked");
	var ltc = $('input:checkbox[id="ltc"]').is(":checked");
	var bch = $('input:checkbox[id="bch"]').is(":checked");
	var dash = $('input:checkbox[id="dash"]').is(":checked");
	var pib = $('input:checkbox[id="pib"]').is(":checked");
	var qtum = $('input:checkbox[id="qtum"]').is(":checked");
	var snt = $('input:checkbox[id="snt"]').is(":checked");

	if(btc == true){
		$("#text_list").append('<div id="btc_text"><p>BTC</p> <input type="number" id="btc_count" name="btc_count" width="50" height="10" min="0" max="1000" style="width:200px"></div>');
	}
	if(eth == true){
		$("#text_list").append('<div id="eth_text"><p>ETH</p> <input type="number" id="eth_count" name="eth_count" min="0" max="1000" style="width:200px"></div>');
	}
	if(xrp == true){
		$("#text_list").append('<div id="xrp_text"><p>XRP</p> <input type="number" id="xrp_count" name="xrp_count" min="0" max="1000" style="width:200px"></div>');
	}
	if(ltc == true){
		$("#text_list").append('<div id="ltc_text"><p>LTC</p> <input type="number" id="ltc_count" name="ltc_count" min="0" max="1000" style="width:200px"></div>');
	}
	if(bch == true){
		$("#text_list").append('<div id="bch_text"><p>BCH</p> <input type="number" id="bch_count" name="bch_count" min="0" max="1000" style="width:200px"></div>');
	}
	if(dash == true){
		$("#text_list").append('<div id="dash_text"><p>DASH</p> <input type="number" id="dash_count" name="dash_count" min="0" max="1000" style="width:200px"></div>');
	}
	if(pib == true){
		$("#text_list").append('<div id="pib_text"><p>PIB</p> <input type="number" id="pib_count" name="pib_count" min="0" max="100000000" style="width:200px"></div>');
	}
	if(qtum == true){
		$("#text_list").append('<div id="qtum_text"><p>QTUM</p> <input type="number" id="qtum_count" name="qtum_count" min="0" max="100000000" style="width:200px"></div>');
	}
	if(snt == true){
		$("#text_list").append('<div id="snt_text"><p>SNT</p> <input type="number" id="snt_count" name="snt_count" min="0" max="100000000" style="width:200px"></div>');
	}
    });

    $( ".fucntion_setting_coin" ).button().on( "click", function() {

	var btc = $('input:checkbox[id="setting_btc_chk"]').is(":checked");
	var eth = $('input:checkbox[id="setting_eth_chk"]').is(":checked");
	var xrp = $('input:checkbox[id="setting_xrp_chk"]').is(":checked");
	var ltc = $('input:checkbox[id="setting_ltc_chk"]').is(":checked");
	var bch = $('input:checkbox[id="setting_bch_chk"]').is(":checked");
	var dash = $('input:checkbox[id="setting_dash_chk"]').is(":checked");
	var pib = $('input:checkbox[id="setting_pib_chk"]').is(":checked");
	var qtum = $('input:checkbox[id="setting_qtum_chk"]').is(":checked");
	var snt = $('input:checkbox[id="setting_snt_chk"]').is(":checked");
	var dataString = null;

	$.ajax({
	    type        : "POST",
	    url         : "User/get_user_setting",
	    data        : dataString,  
	    dataType    : "json",
	    encode      : true,
	    success : function(data){
			var i;
			var ar = data.coin_kind;	    	          	
			var ex_ar = new Array();
			ex_ar = data.ex_kind;

			console.log(data.coin_kind.length);
			console.log(ex_ar);
				for(var a=0;a<ex_ar.length;a++){
					alert('a');
				for(var q=0;q<ex_ar[a].length;q++){
					alert(ex_ar[a][q]);
				}
			}
			$('#select_coin_btc_checked').remove();
			$('#select_coin_eth_checked').remove();
			$('#select_coin_xrp_checked').remove();
			$('#select_coin_ltc_checked').remove();
			$('#select_coin_bch_checked').remove();
			$('#select_coin_dash_checked').remove();
			$('#select_coin_pib_checked').remove();
			$('#select_coin_qtum_checked').remove();
			$('#select_coin_snt_checked').remove();
			if(btc == true){
				for(i=0;i<ar.length;i++){
					if(ar[i] == 'btc'){
						$('#coin_setting').append('<div id="select_coin_'+ar[i]+'_checked"><table width="490" border="0" cellspacing="0" cellpadding="0">'
						+'<fieldset><legend></legend><label for="'+ar[i]+'" style="width:55px;margin-right:10px;">'+ar[i].toUpperCase()+'</label>'

						+'<select name="ex_'+ar[i]+'" id="ex_'+ar[i]+'">'
						+'<option>coinone</option>'
						+'<option>coinfield</option>'
						+'<option>huobi</option>'
						+'<option>bithumb</option>'
						+'<option>upbit</option>'
						+'</select><div id="setting_'+ar[i]+'_text"><input type="number" id="setting_'+ar[i]+'_count" name="setting_'+ar[i]+'_count" width="50" height="10" min="0" max="1000" style="width:200px"></div></fieldset></div></div>');	
					}
				}

				$("#setting_coin_chk_btc").append('');
			}
			if(eth == true){
				for(i=0;i<ar.length;i++){
					if(ar[i] == 'eth'){
						$('#coin_setting').append('<div id="select_coin_'+ar[i]+'_checked"><table width="490" border="0" cellspacing="0" cellpadding="0">'
						+'<fieldset><legend></legend><label for="'+ar[i]+'" style="width:55px;margin-right:10px;">'+ar[i].toUpperCase()+'</label>'

						+'<select name="ex_'+ar[i]+'" id="ex_'+ar[i]+'">'
						+'<option>coinone</option>'
						+'<option>coinfield</option>'
						+'<option>huobi</option>'
						+'<option>bithumb</option>'
						+'<option>upbit</option>'
						+'</select><div id="setting_'+ar[i]+'_text"><input type="number" id="setting_'+ar[i]+'_count" name="setting_'+ar[i]+'_count" width="50" height="10" min="0" max="1000" style="width:200px"></div></fieldset></div></div>');	
					}
				}
				$("#setting_coin_chk_eth").append('');
			}
			if(xrp == true){
				for(i=0;i<ar.length;i++){
					if(ar[i] == 'xrp'){
						$('#coin_setting').append('<div id="select_coin_'+ar[i]+'_checked"><table width="490" border="0" cellspacing="0" cellpadding="0">'
						+'<fieldset><legend></legend><label for="'+ar[i]+'" style="width:55px;margin-right:10px;">'+ar[i].toUpperCase()+'</label>'

						+'<select name="ex_'+ar[i]+'" id="ex_'+ar[i]+'">'
						+'<option>coinone</option>'
						+'<option>coinfield</option>'
						+'<option>huobi</option>'
						+'<option>bithumb</option>'
						+'<option>upbit</option>'
						+'</select><div id="setting_'+ar[i]+'_text"><input type="number" id="setting_'+ar[i]+'_count" name="setting_'+ar[i]+'_count" width="50" height="10" min="0" max="1000" style="width:200px"></div></fieldset></div></div>');	
					}
				}	
			}
			if(ltc == true){
				for(i=0;i<ar.length;i++){
					if(ar[i] == 'ltc'){
						$('#coin_setting').append('<div id="select_coin_'+ar[i]+'_checked"><table width="490" border="0" cellspacing="0" cellpadding="0">'
						+'<fieldset><legend></legend><label for="'+ar[i]+'" style="width:55px;margin-right:10px;">'+ar[i].toUpperCase()+'</label>'

						+'<select name="ex_'+ar[i]+'" id="ex_'+ar[i]+'">'
						+'<option>coinone</option>'
						+'<option>coinfield</option>'
						+'<option>huobi</option>'
						+'<option>bithumb</option>'
						+'<option>upbit</option>'
						+'</select><div id="setting_'+ar[i]+'_text"><input type="number" id="setting_'+ar[i]+'_count" name="setting_'+ar[i]+'_count" width="50" height="10" min="0" max="1000" style="width:200px"></div></fieldset></div></div>');	
					}
				}
			}
			if(bch == true){
				for(i=0;i<ar.length;i++){
					if(ar[i] == 'bch'){
						$('#coin_setting').append('<div id="select_coin_'+ar[i]+'_checked"><table width="490" border="0" cellspacing="0" cellpadding="0">'
						+'<fieldset><legend></legend><label for="'+ar[i]+'" style="width:55px;margin-right:10px;">'+ar[i].toUpperCase()+'</label>'

						+'<select name="ex_'+ar[i]+'" id="ex_'+ar[i]+'">'
						+'<option>coinone</option>'
						+'<option>coinfield</option>'
						+'<option>huobi</option>'
						+'<option>bithumb</option>'
						+'<option>upbit</option>'
						+'</select><div id="setting_'+ar[i]+'_text"><input type="number" id="setting_'+ar[i]+'_count" name="setting_'+ar[i]+'_count" width="50" height="10" min="0" max="1000" style="width:200px"></div></fieldset></div></div>');	
					}
				}
			}
			if(dash == true){
				for(i=0;i<ar.length;i++){
					if(ar[i] == 'dash'){
						$('#coin_setting').append('<div id="select_coin_'+ar[i]+'_checked"><table width="490" border="0" cellspacing="0" cellpadding="0">'
						+'<fieldset><legend></legend><label for="'+ar[i]+'" style="width:55px;margin-right:10px;">'+ar[i].toUpperCase()+'</label>'

						+'<select name="ex_'+ar[i]+'" id="ex_'+ar[i]+'">'
						+'<option>coinone</option>'
						+'<option>coinfield</option>'
						+'<option>huobi</option>'
						+'<option>bithumb</option>'
						+'<option>upbit</option>'
						+'</select><div id="setting_'+ar[i]+'_text"><input type="number" id="setting_'+ar[i]+'_count" name="setting_'+ar[i]+'_count" width="50" height="10" min="0" max="1000" style="width:200px"></div></fieldset></div></div>');	
					}
				}
			}
			if(pib == true){
				for(i=0;i<ar.length;i++){
					if(ar[i] == 'pib'){
						$('#coin_setting').append('<div id="select_coin_'+ar[i]+'_checked"><table width="490" border="0" cellspacing="0" cellpadding="0">'
						+'<fieldset><legend></legend><label for="'+ar[i]+'" style="width:55px;margin-right:10px;">'+ar[i].toUpperCase()+'</label>'

						+'<select name="ex_'+ar[i]+'" id="ex_'+ar[i]+'">'
						+'<option>coinone</option>'
						+'<option>coinfield</option>'
						+'<option>huobi</option>'
						+'<option>bithumb</option>'
						+'<option>upbit</option>'
						+'</select><div id="setting_'+ar[i]+'_text"><input type="number" id="setting_'+ar[i]+'_count" name="setting_'+ar[i]+'_count" width="50" height="10" min="0" max="1000" style="width:200px"></div></fieldset></div></div>');	
					}
				}
			}
			if(qtum == true){
				for(i=0;i<ar.length;i++){
					if(ar[i] == 'qtum'){
						$('#coin_setting').append('<div id="select_coin_'+ar[i]+'_checked"><table width="490" border="0" cellspacing="0" cellpadding="0">'
						+'<fieldset><legend></legend><label for="'+ar[i]+'" style="width:55px;margin-right:10px;">'+ar[i].toUpperCase()+'</label>'

						+'<select name="ex_'+ar[i]+'" id="ex_'+ar[i]+'">'
						+'<option>coinone</option>'
						+'<option>coinfield</option>'
						+'<option>huobi</option>'
						+'<option>bithumb</option>'
						+'<option>upbit</option>'
						+'</select><div id="setting_'+ar[i]+'_text"><input type="number" id="setting_'+ar[i]+'_count" name="setting_'+ar[i]+'_count" width="50" height="10" min="0" max="1000" style="width:200px"></div></fieldset></div></div>');	
					}
				}
			}
			if(snt == true){
				for(i=0;i<ar.length;i++){
					if(ar[i] == 'snt'){
						$('#coin_setting').append('<div id="select_coin_'+ar[i]+'_checked"><table width="490" border="0" cellspacing="0" cellpadding="0">'
						+'<fieldset><legend></legend><label for="'+ar[i]+'" style="width:55px;margin-right:10px;">'+ar[i].toUpperCase()+'</label>'

						+'<select name="ex_'+ar[i]+'" id="ex_'+ar[i]+'">'
						+'<option>coinone</option>'
						+'<option>coinfield</option>'
						+'<option>huobi</option>'
						+'<option>bithumb</option>'
						+'<option>upbit</option>'
						+'</select><div id="setting_'+ar[i]+'_text"><input type="number" id="setting_'+ar[i]+'_count" name="setting_'+ar[i]+'_count" width="50" height="10" min="0" max="1000" style="width:200px"></div></fieldset></div></div>');	
					}
				}
			}
		    user_coin_setting.dialog("open");
		    },
	        error : function(data){
	        alert(data.message);
	        }   
          })
    });

    $( ".fucntion_setting_save_coin" ).button().on( "click", function() {
	var btc_count = $('#setting_btc_count').val();
	var eth_count = $('#setting_eth_count').val();
	var xrp_count = $('#setting_xrp_count').val();
	var ltc_count = $('#setting_ltc_count').val();
	var bch_count = $('#setting_bch_count').val();
	var dash_count = $('#setting_dash_count').val();
	var pib_count = $('#setting_pib_count').val();
	var qtum_count = $('#setting_qtum_count').val();
	var snt_count = $('#setting_snt_count').val();

	if(btc_count == null){
		btc_count=0;
	}
	if(eth_count == null){
		eth_count=0;
	}
	if(xrp_count == null){
		xrp_count=0;
	}
	if(ltc_count == null){
		ltc_count=0;
	}
	if(bch_count == null){
		bch_count=0;
	}
	if(dash_count == null){
		dash_count=0;
	}
	if(pib_count == null){
		pib_count=0;
	}
	if(qtum_count == null){
		qtum_count=0;
	}
	if(snt_count == null){
		snt_count=0;
	}

	var dataString = 'btc_count='+ btc_count +'&eth_count='+ eth_count + '&xrp_count='+ xrp_count+'&ltc_count='+ltc_count+
	'&bch_count='+ bch_count +'&dash_count='+ dash_count +'&pib_count='+pib_count+'&qtum_count='+qtum_count+
	'&snt_count='+snt_count;

	$.ajax({
	    type        : "POST",
	    url         : "User/save_data_selected_ajax",
	    data        : dataString,  
	    dataType    : "json",
	    encode      : true,
	    success : function(data){
			alert(data.message);
			user_coin_setting.dialog("close");
			window.location.reload();
		    },
		    error : function(results){
		    alert(results.message);
		    }   
	    })
     });

$(document).ready(function() {
    $('#Select_form').submit(function(event) {
	alert('a');
	var btc = $('input:checkbox[id="btc"]').is(":checked");
	var eth = $('input:checkbox[id="eth"]').is(":checked");
	var xrp = $('input:checkbox[id="xrp"]').is(":checked");
	var ltc = $('input:checkbox[id="ltc"]').is(":checked");
	var bch = $('input:checkbox[id="bch"]').is(":checked");
	var dash = $('input:checkbox[id="dash"]').is(":checked");
	var pib = $('input:checkbox[id="pib"]').is(":checked");
	var qtum = $('input:checkbox[id="qtum"]').is(":checked");
	var snt = $('input:checkbox[id="snt"]').is(":checked");

	if(btc == true){
		alert('aa');
		$("#text_list").append('<input type="text">');
	}
    });

});


//Menu
$(document).ready(function() {
	$('.myMenu > li').bind('mouseover', openSubMenu);
	$('.myMenu > li').bind('mouseout', closeSubMenu);
	
	function openSubMenu() {
		$(this).find('ul').css('visibility', 'visible');
	};

	function closeSubMenu() {
		$(this).find('ul').css('visibility', 'hidden');	
	};

	$(".flip").click(function(){
	$(this).next().slideToggle("slow");

	if(isFist == false){
		var src = ($(this).find('.penel_icon').attr("src") === "/assets/images/icon_down.png") ? "/assets/images/icon_up.png" : "/assets/images/icon_down.png";
		$(this).find('.penel_icon').attr("src", src);
		isFirst = true;
	} else {
		var src = ($(this).find('.penel_icon').attr("src") === "/assets/images/icon_up.png") ? "/assets/images/icon_down.png" : "/assets/images/icon_up.png";
		$(this).find('.penel_icon').attr("src", src); 	
	}
    });
});

});


