<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pathology</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Pathology</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

  </div>
</nav>

<section class="sectionfordata">
<table class="table table-striped" id="myTable">
  <thead>
    <tr>
      <th scope="col">Bill NO</th>
      <th scope="col">Merge Bill Number</th>
      <th scope="col">HIS Number</th>
      <th scope="col">Reporting Date</th>
      <th scope="col">Tests</th>
      <th scope="col">Patient Name</th>
      <th scope="col">Billed By</th>
      <th scope="col">Refrence Doctor</th>
      <th scope="col">Is Printed</th>
    </tr>
  </thead>
  <tbody>
  <?php  if(!empty($result)) { foreach ($result as $value) { ?>
    <tr>
        <td><?= $value->id; ?></td>
        <td><?= $value->merge_bill_id; ?></td>
        <td><?= $value->case_reference_id; ?></td>
        <td><?= $value->date; ?></td>
        <td><?= $value->id; ?></td>
        <td><?= $value->patient_name; ?></td>
        <td><?= $value->billed_by_name; ?></td>
        <td><?= $value->doctor_name; ?></td>
        <td><button class="btn btn-success" style="padding-left: 8px;padding-right: 8px;padding-bottom: 4px;padding-top: 4px;font-size: 15px;">Entry</button> <i class="fa fa-bars"></i></td>
    </tr>
<?php } }?>

  </tbody>
</table>
</section>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable({
                searching: true,
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>