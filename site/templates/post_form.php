<?php
    $contact = new ContactLeads();

    $name = "$_POST[name]";
    $email = "$_POST[email]";
    $company = "$_POST[company]";
    $phone = "$_POST[phone]";
    $requestdemo = "$_POST[requestdemo]";
    $active = "$_POST[active]";
    $updated = "$_POST[updated]";

    if (!$contact->email_exist($email, $debug = false)) {
        if ($contact->create($name, $email, $company, $phone, $requestdemo, $active, $updated, $debug = false)) {
            echo "<h1>New record created successfully</h1>";
        } else {
            echo "Error: " . $sql . "<br>" . $connect->error;
        }
    } else {
        echo "<h1>Email already exists.</h1>";
    }
