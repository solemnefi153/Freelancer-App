<?php include "session.php"; ?>

<?php include "test_input.php"; ?>

<?php
    #Query from the database the organization information
    $organization = test_input($_GET["organization"]);
    $client_id = 001;
    $has_account = "true";
    $first_name = "Nefi";
    $last_name = "Aguilar";
    $phone_number = 4352510430;
    $email_address = "aguil26@byui.edu";
    $notes = "I just learned somthing really awesome!";

    echo <<<GFG
        <div id="Client Info">
            <label>Client ID:</label>
            <br>
            <input type="text" id="client_id" value="{$client_id}">
            <br>
            <label>Organization:</label>
            <br>
            <input type="text" id="organization" value="{$organization}">
            <br>
            <label>Has Account:</label>
            <br>
            <input type="text" id="has_account" value="{$has_account}">
            <br>
            <label>First Name:</label>
            <br>
            <input type="text" id="first_name" value="{$first_name}">
            <br>
            <label>Last Name:</label>
            <br>
            <input type="text" id="last_name" value="{$last_name}">
            <br>
            <label>Phone Number:</label>
            <br>
            <input type="text" id="phone_number" value="{$phone_number}">
            <br>
            <label>Email Address:</label>
            <br>
            <input type="text" id="email_address" value="{$email_address}">
            <br>
            <label>Notes:</label>
            <br>
            <textarea id="notes" >{$notes}</textarea>
            <br>
            <button>Update</button>
        </div> 
GFG;
?>