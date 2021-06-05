<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>CI4 projekt</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <style>
    body {
        background-color: lightblue;
    }
    .container {
      max-width: 600px;
    }
  </style>
</head>

<body>
    <div><br>&nbsp</div>
    <div class="text-center"><h2><u>CodeIgniter 4 - Validation form project</u></h2></div>
  <div class="container  mt-3">
      <div class="jumbotron">
          <div class="text-center"><h4><u>Registrace</u></h4></div>
    <?php $validation = \Config\Services::validation(); ?>

    <form method="post" action="<?php echo base_url('public/home/formValidation') ?>">
      <div class="form-group">
          <label><b>Jméno:</b></label>
        <input type="text" name="jmeno" class="form-control" required="">

        <!-- Error -->
        <?php if($validation->getError('jmeno')) {?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('jmeno'); ?>
            </div>
        <?php }?>
      </div>
        
        <div class="form-group">
            <label><b>Příjmení:</b></label>
        <input type="text" name="prijmeni" class="form-control" required="">

        <!-- Error -->
        <?php if($validation->getError('prijmeni')) {?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('prijmeni'); ?>
            </div>
        <?php }?>
      </div>
        
        <div class="form-group">
            <label><b>Přezdívka:</b></label>
        <input type="text" name="prezdivka" class="form-control" required="">

        <!-- Error -->
        <?php if($validation->getError('prezdivka')) {?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('prezdivka'); ?>
            </div>
        <?php }?>
      </div>
        
        <div class="form-group">
            <label><b>Email:</b></label>
        <input type="text" name="email" class="form-control" required="">

        <!-- Error -->
        <?php if($validation->getError('email')) {?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('email'); ?>
            </div>
        <?php }?>
      </div>

      <div class="form-group">
          <div class="text-center"><button type="submit" class="btn btn-primary btn">Zaregistrovat se</button></div>
      </div>
    </form>
      <div><br>&nbsp</div>
      <div class="text-center"><h6><i>Tento projekt vypracoval Filip Mrkva</i></h6></div>

  </div>
  </div>
</body>

</html>