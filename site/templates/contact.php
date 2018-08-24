<?php
    if ($input->requestMethod('POST')) {
        if ($config->ajax) {
            header('Content-Type: application/json');
            $contact = new ContactLeads();
            $contact->set('name', $input->post->text('name'));
            $contact->set('email', $input->post->text('email'));
            $contact->set('company', $input->post->text('company'));
            $contact->set('phone', $input->post->text('phone'));
            $contact->set('message', $input->post->text('message'));
            $contact->set('updated', $input->post->text('updated'));
            $response = array('error'=> false, 'msg' => '', 'icon' => '');

            if (!$contact->does_emailexist()) {
                if ($contact->create()) {
                    $response['msg'] = 'Your message was sent successfully and we will get back to your shortly!';
                } elseif (empty($name)) {
                    $response['error'] = true;
                    $response['msg'] = 'Fields are missing';
                } else {
                    $response['error'] = true;
                    $response['msg'] = 'Fields are missing';
                }
            } else {
                $response['error'] = true;
                $response['msg'] = 'Email already exists';
            }
            echo json_encode($response);
        } else {
            header('Content-Type: application/json');
            $contact = new ContactLeads();
            $contact->set('name', $input->post->text('name'));
            $contact->set('email', $input->post->text('email'));
            $contact->set('company', $input->post->text('company'));
            $contact->set('phone', $input->post->text('phone'));
            $contact->set('message', $input->post->text('message'));
            $contact->set('updated', $input->post->text('updated'));
            $response = array('error'=> false, 'msg' => '', 'icon' => '');

            if (!$contact->does_emailexist()) {
                if ($contact->create()) {
                    $response['msg'] = 'Contact Created successfully';
                } elseif (empty($name)) {
                    $response['error'] = true;
                    $response['msg'] = 'Fields are missing';
                } else {
                    $response['error'] = true;
                    $response['msg'] = 'Fields are missing';
                }
            } else {
                $response['error'] = true;
                $response['msg'] = 'Email already exists';
            }
            echo json_encode($response);
        }


    } else {
        $page->content = $config->paths->content."contact/contact-page.php";
        include ('./_include-page.php');
    }
