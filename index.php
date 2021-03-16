<?php require_once 'templates/header.php'?>

<section id="section-2">
    <div class="row">
        <div class="col-md-8 mx-auto my-5">
            <form action="inc/register.php" method="POST">
              <input type="hidden" name="csrf" value="<?=$_SESSION['csrf']?>">
              <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" autocomplete="off" placeholder="Name" class="form-control">
              </div>
              <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" autocomplete="off" placeholder="Password" class="form-control">
              </div>
              <div class="form-group">
                <button class="btn btn-primary form-control" type="submit">Login</button>
              </div>
            </form>        
        </div>
    </div>
</section>
<?php //print_r(PDO::getAvailableDrivers());?>
<?php require_once 'templates/footer.php'?>