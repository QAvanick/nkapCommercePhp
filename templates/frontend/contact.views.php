



<div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="form-container mt-1 mt-md-0" style="background: #fff; margin-top: -200px; padding: 50px; border-radius: 10px; box-shadow: 0 0 150px rgba(0, 0, 0, 0.1); width: 100%; max-width: 400px; border-left: 5px solid green;">
        <h2 class="text-center text-success"><i class="fa-regular fa-id-card"></i></h2>
        <h2 class="text-center">Contactez-nous</h2>
        <form action="./contact.php" method="post">
            <div class="mb-3">
                <label for="name">Nom</label>
                <input type="text" class="form-control" name="name" placeholder="Entrez votre nom" aria-label="Nom">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com" aria-label="Email">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3" aria-label="Message"></textarea>
            </div>
            <button type="submit" value="envoyer" class="btn btn-outline-success btn-lg">Envoyer</button>
        </form>
    </div>
</div>