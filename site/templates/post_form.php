<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?= $page->title; ?></title>
    <meta name="description" content="<?= $page->summary; ?>" />
    <link href='//fonts.googleapis.com/css?family=Lusitana:400,700|Quattrocento:400,700' rel='stylesheet' type='text/css' />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= $config->urls->templates?>styles/bootstrap-grid.min.css" />
    <link rel="stylesheet" type="text/css" href="<?= $config->urls->templates?>styles/bootstrap-reboot.min.css" />
    <link rel="stylesheet" type="text/css" href="<?= $config->urls->templates?>styles/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?= $config->urls->templates?>styles/modern-business.css" />
    <link rel="stylesheet" type="text/css" href="<?= $config->urls->templates?>styles/main.css" />
</head>

<?php
	$action = $input->post->text('action');

    switch($action) {
        case 'request-demo':
            $contact = new ContactLeads();
            $contact->set('name', $input->post->text('name'));
            $contact->set('email', $input->post->text('email'));
            $contact->set('company', $input->post->text('company'));
            $contact->set('phone', $input->post->text('phone'));
            $contact->set('requestdemo', 'Y');
            $contact->set('updated', $input->post->text('updated'));

            if (!$contact->does_emailexist()) {
                if ($contact->create()) {
                    echo "<body class='bg-info'>";
                        echo "<div class='container-fluid'>";
                            echo "<div class='text-center' style='margin-top: 15%;'>";
                            echo "<i class='fa fa-thumbs-o-up fa-5x text-white' aria-hidden='true'></i>";
                                echo "<h4 class='text-white font-weight-bold mt-4'>Thanks so much for contacting us.</br>We'll get back to you shortly!</h4>";
                            echo "</div>";
                        echo "</div>";
                    echo "</body>";
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

?>

<!-- Bootstrap core JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="<?php echo $config->urls->templates?>scripts/main.js"></script>
<script src="<?php echo $config->urls->templates?>scripts/bootstrap.min.js"></script>
<script src="<?php echo $config->urls->templates?>scripts/bootstrap.bundle.min.js"></script>
<script src="<?php echo $config->urls->templates?>scripts/contact_me.js"></script>
<script src="<?php echo $config->urls->templates?>scripts/jqBootstrapValidation.js"></script>

</body>

</html>
