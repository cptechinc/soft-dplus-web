<?php
    include('./_head.php');

    $contact = new ContactLeads();

    $contact->set('name', $input->post->text('name'));
    $contact->set('email', $input->post->text('email'));
    $contact->set('company', $input->post->text('company'));
    $contact->set('phone', $input->post->text('phone'));
    $contact->set('message', $input->post->text('message'));
    $contact->set('requestdemo', $input->post->text('requestdemo'));
    $contact->set('active', $input->post->text('active'));
    $contact->set('updated', $input->post->text('updated'));

    if (!$contact->does_emailexist()) {
        if ($contact->create()) {
            echo "<h1>New record created successfully</h1>";
        } elseif (empty($name)) {
            echo "<h1>Your fields are empty.</h1>";
        } else {
            echo "Error: " . $sql . "<br>" . $connect->error;
        }
    } else {
        echo "<h1>Email already exists.</h1>";
    }

    include('./_foot.php');
