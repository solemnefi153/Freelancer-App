<?php 

echo <<<EOD
<span class='alert' id="create_account_status"></span>
<input type="text" class="text_input" id="username" placeholder="Username" name="username">
<input type="password" class="text_input" id="password" placeholder="Password" name="password">
<input type="password" class="text_input" id="password2" placeholder="Confirm Password" name="password2">
<br>
<div>
<span style="font-size:1.25rem;">Account type: </span>
<select id="account_type">
    <option>Admin</option>
</select>
</div>

<br>
<input type="button" class="button seconday_btn" onclick="create_account_attempt()" value="Create Account">
<br><br>
<a onclick="load_log_in()" href='#'> <- Go back to Log In page</a>
EOD;

?> 