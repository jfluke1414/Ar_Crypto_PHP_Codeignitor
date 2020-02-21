
function inquiry(){	
	var title = document.getElementById('inquiry_title').value;
	var content = document.getElementById('inquiry_content').value;
	
	if(title == '' || content == ''){
		alert("빈 칸을 채워 주세요.");
		return false;
	}
	return true;
}

function write_news(){	
	var title = document.getElementById('news_title').value;
	var content = document.getElementById('news_content').value;
	
	if(title == '' || content == ''){
		alert("빈 칸을 채워 주세요.");
		return false;
	}
	return true;
}

$(function(){

	var select_id;
		    
	dialog_common = $( "#dialog_common" ).dialog({
	      autoOpen: false,
	      height: 800,
	      width: 820,
	      modal: true,
	      resizable: true,
		  draggable: true,
		});
	
	
	
	 //admin_news_edit
    $( ".admin_rel_edit" ).button().on( "click", function() {
    	
    	var post_id = $(this).attr("rel_id");

		var dataString = 'post_id='+ post_id;
		
        $.ajax({
            type        : "POST",
            url         : "/Manage/admin_edit_news",            
            data        : dataString,  
            dataType    : "json",
            encode      : true,

		    success : function(data){
		    	
		    	if(data.status == "success"){
		    		
		    		dialog_common.dialog( "open" );
		    		$('#edit_rel_id').html(data.id);
		    		$('#edit_rel_title').val(data.title);
		    		$('#edit_rel_content').val(data.content);
		    	}
		    },
		    error : function(results){
//		    	alert("code:"+results.status+"\n"+"message:"+results.responseText+"\n"+"error:"+results);	            
		    	alert("message:"+results.responseText+"\n");
		    }   
        })
      
    });
	

	//admin_rel_delete
	$( ".admin_rel_delete" ).button().on( "click", function() {
		var post_id = $(this).attr("rel_id");
		var dataString = 'post_id='+ post_id;
		
	    $.ajax({
	        type        : "POST",
	        url         : "/Manage/del_rel",
	        data        : dataString,  
	        dataType    : "json",
	        encode      : true,
	
		    success : function(data){
		    	
		    	if(data.status == "success"){
		    		alert(data.message);
		    		window.location.reload();
		    	}
	
		    },
		    error : function(results){
	            alert(results.message);
		    }   
	    })
	});

	
	
	//admin_inquiry_edit
    $( ".admin_inquiry_edit" ).button().on( "click", function() {
    	
    	var post_id = $(this).attr("inquiry_id");

		var dataString = 'post_id='+ post_id;
		
        $.ajax({
            type        : "POST",
            url         : "/Manage/admin_edit_inquiry",
            data        : dataString,  
            dataType    : "json",
            encode      : true,

		    success : function(data){
		    	
		    	if(data.status == "success"){
		    		
		    		dialog_common.dialog( "open" );
		    		$('#edit_inquiry_id').html(data.id);
		    		$('#edit_inquiry_title').val(data.title);
		    		$('#edit_inquiry_content').val(data.content);
		    	}
		    },
		    error : function(results){
//		    	alert("code:"+results.status+"\n"+"message:"+results.responseText+"\n"+"error:"+results);	            
		    	alert("message:"+results.responseText+"\n");
		    }   
        })
      
    });
	

	//admin_inquiry_delete
	$( ".admin_inquiry_delete" ).button().on( "click", function() {
		var post_id = $(this).attr("inquiry_id");
		var dataString = 'post_id='+ post_id;
		
	    $.ajax({
	        type        : "POST",
	        url         : "/Manage/del_inquiry",
	        data        : dataString,  
	        dataType    : "json",
	        encode      : true,
	
		    success : function(data){
		    	
		    	if(data.status == "success"){
		    		alert(data.message);
		    		window.location.reload();
		    	}
	
		    },
		    error : function(results){
	            alert(results.message);
		    }   
	    })
	});


});



$(document).ready(function(){
	var isFist = false;
	
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


    
    
    $('#modify_form').submit(function(event) {
    	
        var title = $("#edit_rel_title").val();
		var content = $("#edit_rel_content").val();
		var id = $("#edit_rel_id").text();
		
		var dataString = 'title='+ title + '&content='+ content + '&id='+ id;
		
        $.ajax({
            type        : "POST",
            url         : "/Manage/save_news_modified",
            data        : dataString,  
            dataType    : "json",
            encode      : true,

		    success : function(results){
		    	alert(results.message);
		    	if(results.status == "success"){
		    		dialog_common.dialog("close");
		    		window.location.reload();
		    	} else {
		    		
		    	}
		    },
		    error : function(results){
	            alert(results.message);
		    }   
        })

      event.preventDefault();
   
    });
    
    
    
    $('#inquiry_modify_form').submit(function(event) {
    	
        var title = $("#edit_inquiry_title").val();
		var content = $("#edit_inquiry_content").val();
		var id = $("#edit_inquiry_id").text();
		
		var dataString = 'title='+ title + '&content='+ content + '&id='+ id;
		
        $.ajax({
            type        : "POST",
            url         : "/Manage/save_inquiry_modified",
            data        : dataString,  
            dataType    : "json",
            encode      : true,

		    success : function(results){
		    	alert(results.message);
		    	if(results.status == "success"){
		    		dialog_common.dialog("close");
		    		window.location.reload();
		    	} else {
		    		
		    	}
		    },
		    error : function(results){
	            alert(results.message);
		    }   
        })

      event.preventDefault();
   
    });

    var menu = $('#menu')
	// bind a click function to the menu-trigger
	$('#menu-trigger').click(function(event){
		event.preventDefault();
		// if the menu is visible slide it up
		if (menu.is(":visible"))
		{
			menu.slideUp(400);
			$(this).removeClass("open");
		}
		// otherwise, slide the menu down
		else
		{
			menu.slideDown(400);
			$(this).addClass("open");
		}
	});
    
});

