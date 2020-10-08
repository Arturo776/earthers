<?php include 'skeleton/header.html.php'; ?>

    <main id="formulary_main">
      <article>
        <section id="formulary_title_container">
          <h2 class="formulary_title">SALVEMOS EL MEDIOAMBIENTE</h2>
        </section>
        <section id="formulary_container">
          <form id="sign_in_formulary" action="sign_in.php" method="post">
            <label class="label" for="email">Email</label>
            <input class="input" type="email" name="email" placeholder="Email">
            <label class="label" for="password">Contrase&ntilde;a</label>
            <input class="input" type="password" name="password" placeholder="Contrase&ntilde;a">
            <?php if (isset($error)): ?>
            <button id="form_button" type="submit" onclick="submit" name="submit">Ups... Int&eacute;ntalo otra vez</button>
            <?php else: ?>
            <button id="form_button" type="submit" onclick="submit" name="submit">Start exploring <i class="fas fa-hiking"></i> <i class="fas fa-tree"></i></button>
            <?php endif; ?>
            <a class="formulary_link" href="#">o reg&iacute;strate aqu&iacute;</a>
          </form>
        </section>
      </article>
    </main>

<?php include 'skeleton/footer.html.php'; ?>
