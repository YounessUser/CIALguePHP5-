
<?php require_once('../../../private/initialize.php'); ?> 

<?php
// $id = isset($_GET['id']) ? $_GET['id'] : '1';
$id = '11';

$subject = find_subject_by_id($id);
?>

<?php include(SHARED_PATH . '/Header.php'); ?>

<div class="section">
    <div class="pageContent">

        <div class="presentation">
            <h1 class="presentationTitle"><b><?php echo $subject['ar_title']; ?></b></h1>
        </div>

        <div class="row" style="display: flex;flex-wrap: wrap;">
            <div class="col-sm-4 " style="display: flex">
                <div class="card" >
                    <img class="card-img-top" src="../../stylesheets/img/Ben_Youseff_Madressa.jpg" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">Ben Youseff Madressa</h4>
                        <p class="card-text"> This is the Ben Youseff Madressa in Marrakech, Morocco. It was one of the largest theological colleges in North Africa and the biggest in Morocco. It was pretty much like a modern day dormitory, housing over 900 students to study at the allied Ben Youseff Mosque.</p>
                        <a href="https://fr.wikipedia.org/wiki/Marrakech#Moyen_.C3.82ge" class="btn btn-primary">See More</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4" style="display: flex">
                  <div class="card" >
                      <img class="card-img-top" src="../../stylesheets/img/Jardins_de_la_Ménara.jpg" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">Menara gardens pavillion</h4>
                        <p class="card-text">The Menara gardens (Arabic: حدائق المنارة‎‎) are botanical gardens located to the west of Marrakech, Morocco, near the Atlas Mountains. They were established in the 12th century (c. 1130) by the Almohad Caliphate ruler Abd al-Mu'min.</p>
                        <a href="https://commons.wikimedia.org/wiki/File:Jardins_de_la_M%C3%A9nara.jpg?uselang=en" class="btn btn-primary">See More</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4" style="display: flex">
                  <div class="card" >
                      <img class="card-img-top" src="../../stylesheets/img/Djemaa_el_Fna.jpg" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">Jemaa el-Fna</h4>
                        <p class="card-text">La place Jemaa el-Fna (en arabe : جامع الفنا, « place des trépassés ») est une célèbre place publique au sud-ouest de la médina de Marrakech au Maroc. Ce haut-lieu traditionnel, populaire et animé notamment la nuit attire plus d'un million de visiteurs chaque année.</p>
                        <a href="https://commons.wikimedia.org/wiki/File:Djemaa_el_Fna.jpg?uselang=en" class="btn btn-primary">See More</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- copyright -->
<div class="footer-w3layouts">
    <!--<div class="container">-->
    <div class="agile-copy">
        <p>© 2017 Travel Adventure. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
    </div>

    <div class="clearfix"></div>
    <!--</div>-->
</div>
<!-- copyright -->
<script type="text/javascript" src="<?php echo url_for('stylesheets/js/jquery-2.1.4.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo url_for('stylesheets/js/bootstrap.js');?>"></script>
</body>

</html>
