<link rel="stylesheet" href="/assets/css/notice02.css" type="text/css">
    <div id="head_img">
    	<div class="head_img_inner">
			<div class="head_text">
				<p class="maintitle">공지사항</p>
                <p class="sub_text">AVDS에 관련된 다양한 소식과 정보를 전달 드립니다.</p>
			</div>
        </div>   
    </div>
    
    <div id="container1">
    	<div class="tab">
            <div class="tab_box">
                <div class="normal"><a href="/Notice/Notice_1"><img src="/assets/images/tan_icon01_off.png" alt=""/>이용문의</a></div>
                <div class="select"><img src="/assets/images/tan_icon02_on.png" alt=""/>뉴스</div>
			</div>
		</div>
        
        <div class="container1_inner">
            <div class="title">
                <div class="s_title">뉴스</div>
                <div class="line"></div>
            </div>
        
        	<table width="1020" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td><table width="1020" border="0" cellspacing="0" cellpadding="0">
                    <tr>

                     <?php 
				        foreach($results as $list){
				        
				        $id = $list->id;
							        
				    	$content = $list->contents;
						$content = str_replace(array("\r\n", "\r", "\n"), '<br/>', $content); // 엔터
						$content = str_replace(array(" "), '&nbsp;', $content); //스페이스
						$content = auto_link($content, 'url', true); // a link
						
						$content = str_replace(array(";"), '', $content);
					?>
                    
                      <td><table width="1020" border="0" cellspacing="0" cellpadding="0">
                        
                      <tr>
                          <td height="70" align="center"><table width="940" border="0" cellspacing="0" cellpadding="0">
                            <tr>
								<td height="70" align="center"><div class="stitle_g4 flip"><?=$list->title?><a href="#"><img border="0" class="penel_icon" src="<?=($notice_id == $id)?'/assets/images/icon_down.png':'/assets/images/icon_up.png'?>" width="23" height="23" alt="" align="right" style="margin-top:24px;"/></a></div>
							  <div class="scontent_g4 panel" style="<?=($notice_id == $id)?'display:show':'display:none'?>"><?=$content?></div></td>
                            </tr>
                          </table></td>
                        </tr>  
                    <tr>
                      <td class="line_s"></td>
                    </tr>
                  </table></td>
                </tr>
                 <?}?>           
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
