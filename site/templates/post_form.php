<?php
    $server = "localhost";
    $username = "cptecomm";
    $password = "rghopeless";
    $dbname = "dplus_web";

    $connect = new mysqli($server, $username, $password, $dbname);

    if ($connect->connect_error) {
        die("Connection failed: " . $connect->connect_error);
}
    $sql = "INSERT INTO contact_leads (name, email, company, phone, requestdemo, active, updated)
        VALUES ('$_POST[name]', '$_POST[email]', '$_POST[company]', '$_POST[phone]', '$_POST[requestdemo]', '$_POST[active]', '$_POST[updated]')";

    if ($connect->query($sql) === TRUE) {
        echo "<h1>New record created successfully</h1>";
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }

    $connect->close();
?>
