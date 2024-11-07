





<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
<ol class="breadcrumb" style="display: flex; justify-content: center;">
  <li class="breadcrumb-item" style="margin: 0 5px;"><a href="#">Home</a></li>
  <li class="breadcrumb-item active" aria-current="page" style="margin: 0 5px;">Contact</li>
</ol>

</nav>








<div class="row justify-content-center mt-4">
                <div class="col-12 col-md-10">
                    <div class="card p-4"  style="background-color: rgba(255, 255, 255, 0.5);"style="border-radius: 10px; box-shadow: 0 0 150px rgba(0, 0, 0, 0.1);">
                        <div class="row">
                            <div class="col-md-4 text-center" >
                                <i class="fas fa-map-marker-alt fa-2x text-primary"></i>
                                <h4 class="mt-2">Adresse</h4>
                                <p class="text-primary">Yaoundé
                                Cameroun.</p>
                            </div>
                            <div class="col-md-4 text-center">
                                <i class="fas fa-envelope fa-2x text-primary"></i>
                                <h4 class="mt-2">Email</h4>
                                <p><a href="mailto:vanicknjoum@gmail.com">vanicknjoum@gmail.com</a></p>
                               
                            </div>
                            <div class="col-md-4 text-center">
                                <i class="fas fa-phone fa-2x text-primary"></i>
                                <h4 class="mt-2">Téléphone</h4>
                                <p><a href="tel:+237656947951">(+237) 656947951</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container background-image" style="margin-bottom: 50px;">
    <div class="row justify-content-center align-items-center" style="height: 100vh;">
        <div class="col-md-10">
            <div class="card" style="border-radius: 10px; box-shadow: 0 0 150px rgba(0, 0, 0, 0.1);">
                <div class="row g-0" style="background: #fff; border-radius: 10px; box-shadow: 0 0 150px rgba(0, 0, 0, 0.1); border-left: 5px solid black;">
                    <div class="col-md-6">
                        <div class="card-body">
                            <h2 class="text-center text-primary"><i class="fa-regular fa-id-card"></i></h2>
                            <h2 class="text-center"><?php echo $lang['CONTACT_TITLE']; ?></h2>
                            <form action="./contact.php" method="post">
                                <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">
                                <div class="mb-3">
                                    <label for="name"><?php echo $lang['NOM']; ?></label>
                                    <input type="text" class="form-control" name="name" placeholder="<?php echo $lang['PLACEHOLDER_NOM']; ?>" aria-label="Nom">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label"><?php echo $lang['EMAIL_LABEL']; ?></label>
                                    <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="<?php echo $lang['PLACEHOLDER_EMAIL']; ?>" aria-label="Email">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label"><?php echo $lang['MESSAGE_LABEL']; ?></label>
                                    <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3" aria-label="Message" placeholder="<?php echo $lang['PLACEHOLDER_MESSAGE']; ?>"></textarea>
                                </div>
                                <button type="submit" value="envoyer" class="btn btn-outline-primary btn-lg"><?php echo $lang['ENVOYER']; ?></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="https://www.shutterstock.com/image-photo/businessman-email-icon-on-virtual-600nw-2325396425.jpg" alt="<?php echo $lang['ALT_IMAGE']; ?>" class="img-fluid" style="height: 100%; width: 100%; object-fit: cover; border-radius: 0 10px 10px 0;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-4">
        <div class="col-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3980.7978358740884!2d11.512100273102329!3d3.853522148423011!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x108bcfe0bfae9eb3%3A0x21f997c7d75a9615!2sNKAP%20Sarl!5e0!3m2!1sfr!2scm!4v1729676591105!5m2!1sfr!2scm" width="1200" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>

<script>
    grecaptcha.ready(function() {
        grecaptcha.execute('6Ldy73AqAAAAAHsBKUR7xxUqds7LzV0_czfEDrNz', {action: 'submit'}).then(function(token) {
            document.getElementById('g-recaptcha-response').value = token;
        });
    });
</script>
