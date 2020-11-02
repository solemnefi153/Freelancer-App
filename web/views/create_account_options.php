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
    <option value="1001">Admin</option>
</select>
</div>
<br>
<input type="text" class="text_input" id="organization" placeholder="Organization" name="organization">
<input type="text" class="text_input" id="first_name" placeholder="First Name" name="first_name">
<input type="text" class="text_input" id="last_name" placeholder="Last Name" name="last_name">
<input type="tel" class="text_input" id="phone_number" placeholder="Phone number" name="phone_number">
<input type="email" class="text_input" id="email" placeholder="Email" name="email">
<br>
<input type="button" class="button seconday_btn" onclick="create_account_attempt()" value="Create Account">
<br><br>
<span onclick="load_log_in()" class="navegation_link"> <- Go back to Log In page</span>
EOD;

?> 