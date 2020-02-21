<!-- Login Form -->  
<form method="post" action="/user/login_end" name="login_form" id="login_form" onsubmit="return login_form_Function()">
    <div class="content">
    	<div class="title">
            <h2>Sign in</h2>
      		
		   	<div class="hr"></div>
        </div>
        <div class="content_inner">
        	<table width="978" border="0" cellspacing="0" cellpadding="0">
        		<tr>
					<td height="170" align="center" style="padding-top:50px;"><img src="/assets/images/login_icon.png" width="110" height="110" alt=""/></td>
				</tr>
				<tr>
				  <td class="login_text">Please, Fill in the blank<br>
					<span class="login_text_s">Email and Password</span></td>
				</tr>
				<tr>
					<td align="center"><input name="login_user_id" type="text" class="input" id="login_user_id" value="E-mail" /></td>
				</tr>
				<tr>
					<td align="center"><input name="user_pw" class="input" id="user_pw" onfocus="this.type='password'" value="password" /></td>
				</tr>
				<tr>
					<td class="checkbox"><input type="checkbox" name="remember_id_chx" id="remember_id_chx">Save ID</td>
				</tr>
				<tr>
					<td height="88" align="center">
					<input TYPE="IMAGE" src="/assets/images/bt_login.png" width="419" height="61" name="submit" value="submit">					
					</td>
				</tr>
				<tr>
					<td class="login_text_t1"><a href="/user/find_idpw">Find ID or PW</a> | <a href="/user/add_user">Sign up</a></td>
			  </tr>
			  
			</table>
		</div>
    </div>
</form>