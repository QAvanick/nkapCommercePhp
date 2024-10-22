<?php
include __DIR__ .'/base/header.admin.php'


?>

<div class="col-md-9">



<h2 class="text-center">Newsletter</h2>
                    <form action="subscribe.php" method="post">
                        <div class="mb-3">
                            <label for="newsletterEmail" class="form-label">Adresse e-mail</label>
                            <input type="email" class="form-control" id="newsletterEmail" name="email"       placeholder="Entrez votre e-mail">
                        </div>
                        <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
                        <button type="submit" class="btn btn-primary btn-md">créer et envoyer une newsletter </button>
                    </form>

















</div>

   
<?php
include __DIR__ .'/base/footer.admin.php'
?>