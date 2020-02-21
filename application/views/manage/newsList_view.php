<link rel="stylesheet" href="/assets/css/manageNotice02.css" type="text/css">
    <div id="head_img">
    	<div class="head_img_inner">
			<div class="head_text">
				<p class="maintitle">AVDS News List</p>
                <p class="sub_text"></p>
			</div>
        </div>   
    </div>
    
    <div id="container1">
        <div class="container1_inner">
            <div class="title">
                <div class="s_title">News</div>
                <div class="line"></div>
            </div>
        
        
        
        
        	<table width="1020" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td><table width="1020" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td><table width="1020" border="0" cellspacing="0" cellpadding="0">
                        
                        
                        
                        <?php 
					        foreach($results as $list){
					        
					        $id = $list->id;
								        
					    	$content = $list->contents;
							$content = str_replace(array("\r\n", "\r", "\n"), '<br/>', $content); // 엔터
							$content = str_replace(array(" "), '&nbsp;', $content); //스페이스
							$content = auto_link($content, 'url', true); // a link
							
							$content = str_replace(array(";"), '', $content);
							$sub_title = mb_substr($list->title, 0, 80);
						?>
                        
                        
                      <tr>
                          <td height="70" align="center"><table width="940" border="0" cellspacing="0" cellpadding="0">
                            <tr>
								<td height="70" width="900" align="center"><div class="stitle_g4 flip"><?=$sub_title?><a href="#"><img border="0" class="penel_icon" src="<?=($notice_id == $id)?'/assets/images/icon_down.png':'/assets/images/icon_up.png'?>" width="23" height="23" alt="" align="right" style="margin-top:24px;"/></a></div>
							  <div class="scontent_g4 panel" style="<?=($notice_id == $id)?'display:show':'display:none'?>"><?=$content?></div></td>
				              
				              <td align="center" bgcolor="#FFFFFF" class="r03">
				            	<a style="backgrond-color:#fff;" class="r03 admin_rel_edit" rel_id="<?=$id?>" >Edit</a>
				              </td>
				              <td align="center" bgcolor="#FFFFFF" class="bl04">
				             	<a style="backgrond-color:#fff;" class="bl04 admin_rel_delete" rel_id="<?=$id?>">Del</a>
				              </td>
                            </tr>
                          </table></td>
                        </tr>  
                		<?}?>
                        
                        
                    <tr>
                      <td class="line_s"></td>
                    </tr>
                  </table></td>
                </tr>
                
                <tr>
                  <td height="88" align="center">
                      <table width="245" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <?
                			echo $this->pagination->create_links();
                		  ?>
                        </tr>
                      </table>
                  </td>
              </tr>
          </table>
	  </div>
    </div>
    
    
    
<div id="dialog_common" style="padding:.5em .5em;">

<form method="post" action="/Manage/save_news_modified" id="modify_form" name="modify_form">
<table width="800" border="0" cellspacing="0" cellpadding="0">
    
    <tr>
      <td bgcolor="#FFFFFF" align="center"><table width="490" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td align="center" class="popup01">Editing...</td>
          </tr>
      </table></td>
    </tr>
    
    <tr>
      <td height="34" align="center" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
      <td align="center" bgcolor="#FFFFFF"><table width="370" border="0" cellspacing="0" cellpadding="0">
      	  
      	  
      	  <tr>
            <td height="30" class="gr03" align="left" style="display:-webkit-box;"><strong><span>ID :&nbsp;&nbsp;<div id="edit_rel_id"></span></strong> </div></td>
          </tr>
      	  
      	  <tr>
            <td height="30" class="gr03" align="left"><strong><span>Title :</span></strong>   <input type="textarea" id="edit_rel_title" name="edit_rel_title" style="width:730px"></td>
          </tr>
         	           
          <tr>
            <td height="12"></td>
          </tr>
          
          <tr>
            <td height="32" align="left"><strong><span class="bk01">Contents :</span></strong> </td>
          </tr>
          <tr>
            <td>
              <textarea name="edit_rel_content" id="edit_rel_content" cols="45" rows="5" style="width:780px; height:450px; padding-left:15px; padding-top:12px; color:#999999; border: 0px; background-color:#f2f2f2; font-family:arial; font-size:13px;"></textarea>
            </td>
          </tr>
      </table></td>
    </tr>
    <tr>
      <td height="40" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    	
    <tr>
      <td height="18" align="center" bgcolor="#FFFFFF">
      <input type="IMAGE" src="/assets/images/bt_edit.gif" width="90" height="40" name="submit" value="submit">
      </td>
    </tr>
    <tr>
      <td height="20" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    
</table>
</form>
</div>
