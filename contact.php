<?php
    $currentPage = 'contact';
    require($DOCUMENT_ROOT . "partials/header.html"); 
?>

<div class="hero contact">
    <div class="container">
        <h2>
            Contact Daniel today to begin improving your child’s communication skills!
        </h2>
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
                    If your child struggles with communication
                </h2>
                <div class="tiles">
                    <div>
                      <a href="about.php">
                        <h3>
                          learn more about Daniel’s background
                        </h3>
                      </a>
                      <i class="fa fa-id-card-o" aria-hidden="true"></i>
                    </div>
                    <div>
                      <a href="services.php">
                        <h3>
                          read about his services
                        </h3>
                      </a>
                      <i class="fa fa-comment" aria-hidden="true"></i>
                    </div>
                    <div>
                      <a href="testimonials.php">
                        <h3>
                          see what other parents have to say about him
                        </h3>
                      </a>
                      <i class="fa fa-quote-right" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>

<?php require($DOCUMENT_ROOT . "partials/footer.html"); ?>

