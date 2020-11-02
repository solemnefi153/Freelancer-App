<?php 

echo <<<EOD
<span class='alert' id="login_status"></span>
<input type="text" class="text_input" id="username" placeholder="Username" name="username">
<input type="password" class="text_input" id="password" placeholder="Password" name="password">
<br>
<input type="button" class="button main_btn" onclick="login_attempt()" value="Sing In">
<br>
<span>or</span>
<br>
<input type="button" class="button seconday_btn" onclick="load_create_account()" value="Sign Up">
EOD;


?> 