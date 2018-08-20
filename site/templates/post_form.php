<?php
    include('./_head.php');

	$action = $input->post->text('action');

    switch($action) {
        case 'contact':
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
            break;
        case 'update-contact';
            $email = $input->post->text('email');
            $contact = ContactLeads::load($email);
            echo var_dump($contact->active);
            echo "</br>";
            echo var_dump($contact->updated);

            if ($contact->active == 'N') {
                $contact->set_active();
                echo "<h1>Record changed to active</h1>";
            } elseif ($contact->active == 'Y') {
                $contact->set_inactive();
                echo "<h1>Record changed to inactive</h1>";
            }
            $session->redirect("../../contact-leads/"); // TODO: better way of redirecting back to page
            break;
    }

    include('./_foot.php');
