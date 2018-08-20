<?php
    include('./_head.php');
    $contact = new ContactLeads();

    $leads= $contact->load_contactleads();
?>

    <!-- Page Content -->
    <div class="container mt-3 mb-3">
        <h1 class="text-center mb-3"><strong>Contact Leads</strong></h1>
        <div class="table-responsive">
            <table class="table table-sm table-bordered">
                <thead class="bg-secondary text-white">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Company</th>
                        <th>Phone</th>
                        <th>Message</th>
                        <th class="text-center">Demo Request?</th>
                        <th class="text-center">Active Lead?</th>
                        <th class="text-center">Time Updated</th>
                        <th class="text-center">Update</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($leads as $lead) : ?>
                        <form class="no-opacity" action="<?= $pages->get('template=post_form')->url; ?>" method="post">
                            <input type="hidden" name="action" value="update-contact">
                            <input type="hidden" name="email" value="<?= $lead->email; ?>">
                            <?php if ($lead->active == 'Y') : ?>
                                <tr class="bg-info text-white">
                            <?php else : ?>
                                <tr>
                            <?php endif; ?>
                                    <td><?= $lead->name; ?></td>
                                    <td><?= $lead->email; ?></td>
                                    <td><?= $lead->company; ?></td>
                                    <td><?= $lead->phone; ?></td>
                                    <td><?= $lead->message; ?></td>
                                <?php if ($lead->requestdemo =='Y' && $lead->active =='Y') : ?>
                                    <td class="text-center bg-success text-white">
                                <?php else : ?>
                                    <td class="text-center">
                                <?php endif; ?>
                                        <?= $lead->requestdemo; ?>
                                    </td>
                                    <td class="text-center">
                                <?php if ($lead->active == 'Y') : ?>
                                        <input type="checkbox" class="form-check-input" name="active" id="exampleCheck1" checked>
                                <?php else : ?>
                                        <input type="checkbox" class="form-check-input" name="active" id="exampleCheck1">
                                <?php endif; ?>
                                    </td>
                                    <td class="text-center"><?= $lead->updated; ?></td>
                                    <td>
                                        <button type="submit" class="btn btn-sm btn-dark">Update</button>
                                    </td>
                                </tr>
                        </form>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /.container -->

<?php include('./_foot.php'); ?>
