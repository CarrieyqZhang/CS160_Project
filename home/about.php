<?php
if (session_name() == ""){
    session_start();
}
    
require_once('../repo/categoryRepo.php');
$title = 'About';  
include('../shared_layout/header.php');
?>
<section class="about py-5">
    <!--container-->
    <div class="container about-container ">
        <div class="row">
            <div class="col-9 about-us mx-auto text-center">
                <h1>About Us</h1>
                <p>This is our class CS_160_summer_2021 final project. The team includes Phuoc Le, Uriel Garcia and
                    Carrie Zhang. Our project has rich features, including Boostrap modal, carousel, dropdown button,
                    and so on, which give users better interactive experience. </p>
            </div>
        </div>
        <div class="row justify-content-between m-3">
            <div class="about-card col-lg-3 col-md-12 m-2">
                <div class="about-card-head">
                    <h3>Uriel Garcia</h3>
                </div>
                <div class="about-card-body">
                    <p> CS major student,introduction Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro
                        error delectus, unde
                        architecto officia quis modi quam iure commodi suscipit in eius magnam ab possimus</p>
                </div>

            </div>
            <div class="about-card col-lg-3 col-md-12 m-2 ">
                <div class="about-card-head">
                    <h3>Phuoc Le</h3>
                </div>
                <div class="about-card-body">
                    <p>CS major student,introduction Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro
                        error delectus, unde
                        architecto officia quis modi quam iure commodi suscipit in eius magnam ab possimus </p>
                </div>

            </div>
            <div class="about-card col-lg-3 col-md-12 m-2">
                <div class="about-card-head">
                    <h3> Carrie Zhang</h3>
                </div>
                <div class="about-card-body">
                    <p>CS major student,introduction Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro
                        error delectus, unde
                        architecto officia quis modi quam iure commodi suscipit in eius magnam ab possimus </p>
                </div>

            </div>
        </div>



    </div>

</section>

<?php
    include('../shared_layout/footer.php');
?>