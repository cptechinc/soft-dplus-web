<?php
    include('./_head.php');
    $contact = new ContactLeads();

    $leads= $contact->load();
?>

    <!-- Page Content -->
    <div class="container mt-3">
        <h1 class="text-center mb-3"><strong>Contact Leads</strong></h1>
        <div class="table-responsive">
            <table class="table table-sm table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Company</th>
                        <th>Phone</th>
                        <th class="text-center">Demo Request?</th>
                        <th class="text-center">Active Lead?</th>
                        <th class="text-center">Updated</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($leads as $lead) : ?>
                        <?php if ($lead->active =='Y') : ?>
                            <tr class="bg-success text-white">
                        <?php else : ?>
                            <tr>
                        <?php endif; ?>
                                <td><?= $lead->name; ?></td>
                                <td><?= $lead->email; ?></td>
                                <td><?= $lead->company; ?></td>
                                <td><?= $lead->phone; ?></td>
                                <td class="text-center"><?= $lead->requestdemo; ?></td>
                                <td class="text-center"><?= $lead->active; ?></td>
                                <td class="text-center"><?= $lead->updated; ?></td>
                            </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /.container -->

<?php include('./_foot.php'); ?>
