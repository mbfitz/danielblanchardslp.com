<?php
    $currentPage = 'services';
    require($DOCUMENT_ROOT . "partials/header.html"); 
?>

<div class="hero">
    <div class="container copy">
        <h1>
            Services
        </h1>
        <p>
            Daniel Blanchard assesses and treats overall communication from minor articulation difficulties to more advanced linguistic challenges and hearing loss. He offers a full ranges of services to increase the communication skills of bilingual children from birth to age 21.
        </p> 
    </div>
</div>

<div class="torso services">
    <main>
        <section>
            <div class="container">
                <div class="tiles col-2">
                    <div>
                        <h3>Assessment</h3>
                        <p>
                            Daniel administers testing protocol to assess receptive and expressive language skills, 
                            pragmatic language skills, articulation language skills, phonological disorders, and 
                            fluency disorders. 
                        </p>
                        <h3>Intervention</h3>
                        <p>
                           Daniel then creates linguistic articulation goals according to age-appropriate 
                           developmental norms and formulates a comprehensive, individualized treatment plan 
                           for each client. At the heart of each child’s treatment plan are creative 
                           interventions that help the child acquire the specific language skills they need.
                        </p>
                    </div>
                    <div class="assets">
                        <img src="img/6-daniel-blanchard-slp-catch.jpg" alt="Daniel and student playing catch">
                    </div>
                </div>
            </div>
        </section>
        <section class="cta">
            <div class="container">
                <h3>Does my child need speech therapy?</h3>
                <p>
                    Research shows that speech therapy interventions can play a significant role in improving 
                    the life of children with autism and developmental delays. Early intervention can increase 
                    conversational competence, pragmatic functioning, social communication, and classroom 
                    learning skills (Adams et al., 2012).<sup>[1]</sup>
                </p>
                <a class="button alt" href="contact.php">
                    Contact Daniel today to begin improving your child’s life
                </a>
            </div>
        </section>
        <section>
            <p class="note">
                1. Adams, C., Lockton, E., Freed, J., Gaile, J., Earl, G., McBean, K., . . . Law, J. (2012). 
                The Social Communication Intervention Project: A randomized controlled trial of the effectiveness 
                of speech and language therapy for school-age children who have pragmatic and social communication 
                problems with or without autism spectrum disorder. International Journal of Language &amp; 
                Communication Disorders, 47, 233-244. doi:10.1111/j.1460-6984.2011.00146.x
            </p>
        </section>
    </main>
</div>

<?php require($DOCUMENT_ROOT . "partials/footer.html"); ?>