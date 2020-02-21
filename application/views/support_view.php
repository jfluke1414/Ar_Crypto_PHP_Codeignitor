<link rel="stylesheet" href="/assets/css/surpport.css" type="text/css">
    <div id="head_img">
    	<div class="head_img_inner">
			<div class="head_text">
				<p class="maintitle">Contact Us</p>
                <p class="sub_text">지란지교는 고객을 위한 최상의 서비스를 제공하기 위해 노력하겠습니다.<br>
                편하신 방법으로 문의 주시기 바랍니다.
                </p>
			</div>
        </div>
    </div>
    
    <div id="container1">
    	<div class="container1_inner">
            <div class="s_title">고객 지원</div>
            <div class="text1">AVDS 제품 및 서비스에 대한 자세한 상담을 원하신다면 아래의 정보를 입력하여 주시기 바랍니다.<br>
            담당자가 확인 후, 빠르게 회신 드리겠습니다.<br>
            (09:00 ~ 18:00 / 토, 일, 공휴일 휴무)
            </div>
            <div class="line"></div>
            <div class="support_box">
            	<img class="support_icon" src="/assets/images/support_icon01.png" alt="" align="middle"/>
                <div class="text_box">
                    <p class="text2">02-6051-1041</p>
				</div>
                <img class="support_icon" src="/assets/images/support_icon02.png" alt="" align="middle"/>
                <div class="text_box">
                    <p class="text2"><a href="mailto:avds@jiran.com">avds@jiran.com</a></p>
				</div>
                <div class="line_s"></div>
			</div>
    	</div>
    </div>
    <form method="post" action="/Support/request" name="support_form" id="support_form" onsubmit="return request()">    
    <div id="container2">
    	<div class="container2_inner">
        	<div class="s_title">제품 상담, 데모 신청 및 파트너 문의</div>
            <div>
            <table width="1020" border="1" cellspacing="0" cellpadding="0" bordercolor="#e4e4e4">
				<tr>
					<td width="158" height="60" class="text1"><span class="text1_r">*</span> 회사명</td>
					<td width="350" class="text2"><input name="company" type="text" class="input1" id="company" /></td>
					<td width="158" class="text1"><span class="text1_r">*</span> 부서명</td>
					<td class="text2"><input name="part" type="text" class="input1" id="part" /></td>
				</tr>
				<tr>
					<td height="60" class="text1"><span class="text1_r">*</span> 성함</td>
					<td class="text2"><input name="name" type="text" class="input1" id="name" /></td>
					<td align="center" class="text1"><span class="text1_r">*</span> 직급</td>
					<td class="text2"><input name="grade" type="text" class="input1" id="grade" /></td>
				</tr>
				<tr>
					<td height="60" class="text1"><span class="text1_r">*</span> 연락처</td>
					<td class="text2"><input name="phone" type="text" class="input1" id="phone" /></td>
					<td class="text1"><span class="text1_r">*</span> 이메일</td>
					<td class="text2"><input name="email" type="text" class="input1" id="email" /></td>
				</tr>
				<tr>
					<td height="60" class="text1">질문영역</td>
					<td colspan="3" class="text2"><input type="checkbox" name="consult_chx" id="consult_chx"> 제품 상담 &nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="demo_chx" id="demo_chx"> 데모 신청 &nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="partner_chx" id="partner_chx"> 파트너 문의</td>
				</tr>
				
				<tr>
					<td height="80" class="text1">보안 문자</td>
					<td colspan="3" class="text2"><div id="captcha_image" style="display:inline-block; margin-top:10px;"><?=$captcha['image']?></div>
					<a id="ajax_remake_captcha" style="margin-top:-31px;"><img src="/assets/images/icon_refresh.png"></a>
					<br/>
					<input type="text" class="input1" id="captcha_txt" name="captcha_txt" style="width:412px; padding-left:3px; color:#989898; margin-top:10px; margin-bottom:10px" onfocus="this.value='';" value=" 보안문자를 입력해 주세요."/>
					<br/>
					</td>
					
				</tr>
				
				<tr>
					<td height="210" class="text1"><span class="text1_r">*</span> 문의사항</td>
					<td colspan="3" class="text3"><textarea name="content" id="content" class="textarea" cols="40" rows="5" onfocus="this" onclick="if(this.value=='문의 및 요청 내용을 입력 해주시면 담당자 확인 즉시 연락 드리겠습니다.'){this.value=''}">문의 및 요청 내용을 입력 해주시면 담당자 확인 즉시 연락 드리겠습니다.</textarea></td>
				</tr>
            </table>
            </div>
            
            <div class="text4">* 표시는 필수 입력 사항입니다.</div>
            
            <div class="s_title2">개인정보 수집 동의</div>
            <div><textarea name="textarea2" id="textarea2" class="textarea2" cols="40" rows="5">개인정보 취급 방침

'주식회사 지란지교'(이하 '회사'라 합니다)는 이용자의 개인정보를 중요시하며, "정보통신망 이용촉진 및 정보보호 등에 관한 법률"을 준수하고 있습니다.
회사는 개인정보취급방침을 통하여 이용자께서 제공하시는 개인정보가 어떠한 용도와 방식으로 이용되고 있으며, 개인정보보호를 위해 어떠한 조치가 취해지고 있는지 알려 드립니다.
회사는 개인정보취급방침을 개정하는 경우 ㈜지란지교 웹사이트(www.jiran.com) 공지사항(또는 개별통지)을 통하여 공지할 것입니다.

이 개인정보취급방침의 순서는 다음과 같습니다.

1. 개인정보의 수집에 대한 동의
2. 수집하는 개인정보의 항목 
3. 개인정보의 수집 및 이용목적
4. 개인정보의 보유 및 이용기간
5. 개인정보의 파기 및 절차, 방법
6. 개인정보의 제 3자에 대한 제공 및 공유
7. 수집한 개인정보의 위탁
8. 이용자 및 법정 대리인의 권리와 그 행사방법
9. 개인정보 자동수집 장치의 설치?운영 및 그 거부에 관한 사항
10. 개인정보에 관한 민원서비스

1. 개인정보의 수집에 대한 동의
회사는 이용자의 개인정보 수집과 관련하여 회사의 개인정보보호정책 또는 이용약관의 내용에 대해 <동의> 여부를 선택할 수 있는 절차를 마련하여 이용자가 <동의> 체크박스를 선택한 후 문의 신청 시 개인정보 수집에 동의한 것으로 간주하여 개인정보를 수집합니다.

2. 수집하는 개인정보의 항목 
회사는 문의 및 자료 신청, 마케팅 활동 등을 위해 아래와 같이 개인정보를 수집하고 있습니다.

가. 수집항목
 - 회사명, 이름, 직책, 연락처, 이메일
 
나. 개인정보 수집방법
 - 홈페이지 (고객지원 제품문의, 데모 신청 및 파트너 문의을 통한 수집)
 
3. 개인정보의 수집 및 이용목적
회사는 AVDS 웹사이트를 통하여 다음과 같이 최적의 맞춤화된 서비스를 제공해드리기 위해 개인정보를 수집하고 있습니다. 

가. 상담 : 제품 및 기술, 데모 문의
나. 자료 : 제품 브로슈어 및 소개서 신청
다. 마케팅활동: 자사 마케팅 행사 안내(세미나, 컨퍼런스, DM, eDM 등)

4. 개인정보의 보유 및 이용기간
회사는 온라인 서비스 신청을 위한 문의 신청일로부터 서비스를 제공하는 기간 동안에 한하여 이용자의 개인정보를 보유 및 이용하게 됩니다.
다만, 이용자가 자신의 개인정보 삭제를 요청한 경우 이용자의 개인정보는 재생할 수 없는 방법에 의하여 디스크에서 완전히 삭제하며 출력된 경우에는 분쇄기로 분쇄하는 방법으로 추후 열람이나 이용이 불가능한 상태로 처리됩니다. 
단, 다음의 정보에 대해서는 아래의 이유로 명시한 기간 동안 보존합니다.

가. 회사 내부 방침에 의한 정보보유 사유

 - 보존근거 : 불량 이용자의 재이용 및 문의 방지, 명예훼손 등 권리침해 분쟁 및 수사협조
 - 보존기간 : 개인정보 삭제 요청 후 1년
 
나. 관련법령에 의한 정보보유 사유

1) 계약 또는 청약철회 등에 관한 기록
 - 보존 이유 : 전자상거래 등에서의 소비자보호에 관한 법률
 - 보존 기간 : 5년 
 
2) 대금결제 및 재화 등의 공급에 관한 기록- 보존 이유 : 전자상거래 등에서의 소비자보호에 관한 법률
 - 보존 기간 : 5년
 
3) 소비자의 불만 또는 분쟁처리에 관한 기록- 보존 이유 : 전자상거래 등에서의 소비자보호에 관한 법률
 - 보존 기간 : 3년

4) 본인확인에 관한 기록- 보존 이유 : 정보통신망 이용촉진 및 정보보호 등에 관한 법률
 - 보존 기간: 6개월 
 
5) 방문에 관한 기록- 보존 이유 : 정보통신망 이용촉진 및 정보보호 등에 관한 법률
 - 보존 기간 : 3개월
 
5. 개인정보의 파기절차 및 방법
회사는 원칙적으로 개인정보 수집 및 이용목적이 달성된 후에는 해당 정보를 지체없이 파기합니다. 파기절차 및 방법은 다음과 같습니다.

가. 파기절차
회사는 개인정보 수집 및 이용목적이 달성된 후 별도의 DB로 옮겨져 (종이의 경우, 별도의 서류함) 내부 방침 및 기타 관련 법령에 의한 정보보호 사유에 따라 (보유 및 이용기간 참조) 일정 기간 저장된 후 파기됩니다.  
별도 DB로 옮겨진 개인정보는 벌률에 의한 경우가 아니고서는 보유되는 이외의 다른 목적으로 이용되지 않습니다.

나. 파기방법
전자적 파일 형태로 저장된 개인정보는 기록을 재생할 수 없는 기술적 방법을 사용하여 삭제합니다. 

6. 개인정보의 제 3자에 대한 제공 및 공유
회사는 이용자의 동의가 있거나 관련법령의 규정에 의한 경우를 제외하고는 어떠한 경우에도 「개인정보의 수집에 대한 동의」, 「개인정보의 수집목적 및 이용」, 「수집하는 개인정보 항목 및 수집방법」에서 고지한 범위를 넘어 이용자의 개인정보를 이용하거나 제3자에게 제공하지 않습니다. 이용자의 개인정보를 제공하거나 공유하는 경우에는 사전에 이용자에게 제공받거나 공유하는 자가 누구이며 주된 사업이 무엇인지, 제공 또는 공유되는 개인정보항목이 무엇인지 등에 대한 개별적으로 전자우편 또는 홈페이지 공지를 통해 고지한 후 이에 대한 동의를 구합니다.

다만, 아래의 경우는 예외로 합니다. 

 - 이용자들이 사전에 동의한 경우
 - 통신비밀보호법, 구세기본법, 정보통신망 이용촉진 및 정보보호에 관한 법률, 금융 실명거래 및 비밀보장에 관한 법률, 신용정보의 이용 및 보호에 관한 법률, 전기통신기본법, 전기통신사업법, 지방세법, 소비자보호법, 형사소송법 등 특별한 규정이 있는 경우
 
7. 수집한 개인정보의 위탁
회사는 서비스 이행을 위해 전문업체에 위탁하여 운영하고 있지 않습니다.

8. 이용자 및 법정 대리인의 권리와 그 행사방법
개인정보관리책임자에게 서면, 전화 또는 이메일로 연락하시면 지체없이 조치하겠습니다.
귀하가 개인정보의 오류에 대한 정정을 요청하신 경우에는 정정을 완료하기 전까지 당해 개인정보를 이용 또는 제공하지 않습니다. 
또한, 잘못된 개인정보를 제3자에게 이미 제공한 경우에는 정정 처리결과를 제3자에게 지체없이 통지하여 정정이 이루어지도록 하겠습니다.
회사는 이용자의 요청에 의해 해지 또는 삭제된 개인정보는 "회사가 수집하는 개인정보의 보유 및 이용기간"에 명시된 바에 따라 처리하고 그 외의 용도로 열람 또는 이용할 수 없도록 처리하고 있습니다.

9. 개인정보 자동수집 장치의 설치?운영 및 그 거부에 관한 사항
회사는 귀하의 정보를 수시로 저장하고 찾아내는 '쿠키(cookie)' 등을 운용합니다. 쿠키란 웹사이트를 운영하는데 이용되는 서버가 귀하의 브라우저에 보내는 아주 작은 텍스트 파일로서 귀하의 컴퓨터 하드디스크에 저장됩니다. 
회사는 다음과 같은 목적을 위해 쿠키를 사용합니다.

가. 쿠키 등 사용 목적
1) 회원과 비회원의 접속 빈도나 방문 시간 등을 분석, 이용자의 취향과 관심분야를 파악 및 자취 추적, 각종 이벤트 참여 정도 및 방문 회수 파악 등을 통한 타겟 마케팅 및 개인 맞춤 서비스 제공
2) 귀하는 쿠키 설치에 대한 선택권을 가지고 있습니다. 따라서, 귀하는 웹브라우저에서 옵션을 설정함으로써 모든 쿠키를 허용하거나, 쿠키가 저장될 때마다 확인을 거치거나, 아니면 모든 쿠키의 저장을 거부할 수도 있습니다.

나. 쿠키 설정 거부 방법
1) 쿠키 설정을 거부하는 방법으로는 회원님이 사용하시는 웹 브라우저의 옵션을 선택함으로써 모든 쿠키를 허용하거나 쿠키를 저장할 때마다 확인을 거치거나, 모든 쿠키의 저장을 거부할 수 있습니다.
2) 설정방법 예(인터넷 익스플로어의 경우) : 웹 브라우저 상단의 도구 > 인터넷 옵션 > 개인정보
3) 단, 귀하께서 쿠키 설치를 거부하였을 경우 서비스 제공에 어려움이 있을 수 있습니다.

10. 개인정보에 관한 민원서비스

가. 개인정보 관리 책임자 성명 : 유재룡 부장

나. 개인정보 관리 담당자 성명: 차형건 부장

소속부서 : 해외사업본부 > SafeBiz팀
전화: 02-6051-1042
이메일: wolfeyes@jiran.com

귀하께서는 회사의 서비스를 이용하시며 발생하는 모든 개인정보보호 관련 민원을 개인정보관리책임자 혹은 담당부서로 신고하실 수 있습니다.
회사는 이용자들의 신고사항에 대해 신속하게 충분한 답변을 드릴 것입니다.

기타 개인정보침해에 대한 신고나 상담이 필요하신 경우에는 아래 기관에 문의하시기 바랍니다.

개인분쟁조정위원회 (www.1336.or.kr/1336)
정보보호마크인증위원회 (www.eprivacy.or.kr/02-580-0533~4)
대검찰청 인터넷범죄수사센터 (http://icic.sppo.go.kr/02-3480-3600)
경찰청 사이버테러대응센터 (www.ctrc.go.kr/02-392-0330)</textarea></div>

		<div class="text5"><input type="checkbox" name="individual_chx" id="individual_chx"> 개인정보 수집 동의 &nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="news_chx" id="news_chx"> 지란지교 / AVDS 뉴스레터 수신에 동의 합니다.(선택)</div>
		<div class="bt_ok"><input TYPE="IMAGE" src="/assets/images/bt_ok.png" width="96" height="49" align="middle" name="submit" value="submit"></div>
        <!--<div class="bt_ok"><a href="#"><img src="/assets/images/bt_ok.png" alt="" align="middle"/></a></div>-->
		</div>
    </div>
    </form>