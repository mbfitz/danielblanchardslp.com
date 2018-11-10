<?php
    $currentPage = 'contacto';
    require($DOCUMENT_ROOT . "partials/header.html"); 
?>

<div class="hero contact">
    <div class="container">
        <h3>
            ¡Contacte a Daniel hoy para empezar a mejorar las habilidades de comunicación de su hijo! 
        </h3>
    </div>
</div>

<div class="torso contact">
    <main>
        <section>
            <div class="tiles col-2 center">
            <div>
              <p>
                <span>
                <i class="fa fa-phone" aria-hidden="true"></i> 413-218-9837
                </span>
                <span>
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    <script type="text/javascript">
                        var string1 = "blanchardd3";
                        var string2 = "@";
                        var string3 = "gmail.com";
                        var string4 = string1 + string2 + string3;
                        document.write("<a href=" + "mail" + "to:" + string1 + string2 + string3 + ">" + string4 + "</a>");
                    </script>
                </span>
              </p>
            </div>
            <div>
                <img src="img/daniel-blanchard.jpg" alt="Daniel">
            </div>
          </div>
        </section>
        <section class="cta">
            <div class="container">
                <h2>
                    Si su hijo tiene dificultades en comunicarse
                </h2>
                <div class="tiles">
                    <div>
                        <a href="servicios.php">
                            <h3>
                                aprende más sobre la experiencia de Daniel, lee sobre sus servicios
                            </h3>
                        </a>
                        <i class="fa fa-comment" aria-hidden="true"></i>
                    </div>
                    <div>
                        <a href="testimonios.php">
                          <h3>
                            conoce lo que otros padres han dicho de 
                          </h3>
                        </a>
                        <i class="fa fa-quote-right" aria-hidden="true"></i>
                    </div>
                    <div>
                        <a href="contacto.php">
                            <h3>
                                contacte a Daniel hoy para comenzar el  mejoramiento de la vida de su hijo
                                <span>555-555-5555</span>
                            </h3>
                        </a>
                        <i class="fa fa-id-card-o" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>

<?php require($DOCUMENT_ROOT . "partials/footer.html"); ?>

