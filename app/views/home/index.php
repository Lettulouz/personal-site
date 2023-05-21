<?php include "header.php"; ?>
<?php include "navbar.php"; ?>

<div class="container" style="margin-top: 125px">
    <div class="card text-white bg-secondary add-shadow rounded" id="mainCardStudent">
        <div class="card-header headers-color">
            <div class="d-flex align-items-center justify-content-between">
                <h2 class="card-title my-2">Projekty na studia</h2>
                <div class="arrow ml-2"></div>
            </div>  
        </div>
    </div>
    <div class="mx-2">
        <?php include "student/phpShop.php"; ?>
        <?php include "student/quizazu.php"; ?>
        <?php include "student/starsMagnet.php"; ?>
        <?php include "student/airHubMaster.php"; ?>        
    </div>
    
    <hr class="divider mt-5 mb-5">

    <div class="card text-white bg-secondary" id="mainCardBuisness">
        <div class="card-header headers-color">
            <div class="d-flex align-items-center justify-content-between">
                <h2 class="card-title my-2">Projekty komercyjne</h2>
                <div class="arrow ml-2"></div>
            </div>
        </div>
    </div>
    <div class="mx-2">
        <?php include "buisness/recon-energy.php"; ?>    
    </div>


    <hr class="divider mt-5 mb-5">
    <div class="row mb-5">
        <h4>Legenda:</h4>

            
        <div class="d-flex align-items-center mt-2">
            <div class="circle-background1 circle-background-universal"></div>
            <div class="circle-text ms-2">Projekt zawieszony</div>
        </div>
        <div class="d-flex align-items-center mt-2">
            <div class="circle-background2 circle-background-universal"></div>
            <div class="circle-text ms-2">Tylko najważniejsze poprawki</div>
        </div>
        <div class="d-flex align-items-center mt-2">
            <div class="circle-background3 circle-background-universal"></div>
            <div class="circle-text ms-2">Projekt aktywny, niski priorytet</div>
        </div>
        <div class="d-flex align-items-center mt-2">
            <div class="circle-background4 circle-background-universal"></div>
            <div class="circle-text ms-2">Projekt aktywny, wysoki priorytet</div>
        </div>
        <div class="d-flex align-items-center mt-2">
            <div class="circle-background5 circle-background-universal"></div>
            <div class="circle-text ms-2">Projekt aktywny, najwyższy priorytet</div>
        </div>
        <div class="d-flex align-items-center mt-2">
            <i class="bi bi-people-fill icons-size"></i>
            <div class="circle-text ms-2">Projekt realizowany grupowo</div>
        </div>
        <div class="d-flex align-items-center mt-2">
            <i class="bi bi-person-fill icons-size"></i>
            <div class="circle-text ms-2">Projekt realizowany indywidualnie</div>
        </div>
        <div class="d-flex align-items-center mt-2">
            <i class="bi bi-pencil-fill icons-size"></i>
            <div class="circle-text ms-2">Software Developer</div>
        </div>
        <div class="d-flex align-items-center mt-2">
            <i class="bi bi-star-fill text-warning icons-size"></i>
            <div class="circle-text ms-2">Leader</div>
        </div>
    </div>


</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>

<script>

const mainCard = document.getElementById("mainCardStudent");
const card1m = document.getElementById("projectS1");
const card2m = document.getElementById("projectS2");
const card3m = document.getElementById("projectS3");
const card4m = document.getElementById("projectS4");
const card1 = card1m.getElementsByClassName("card-header")[0];
const card2 = card2m.getElementsByClassName("card-header")[0];
const card3 = card3m.getElementsByClassName("card-header")[0];
const card4 = card4m.getElementsByClassName("card-header")[0];

const mainCardBuisness = document.getElementById("mainCardBuisness");
const card1Cm = document.getElementById("projectC1");
const card1C = card1Cm.getElementsByClassName("card-header")[0];

mainCardBuisness.addEventListener('mouseover', function() {
    const arrow = mainCard.querySelector(".arrow");
    arrow.classList.add('hover');
});

mainCardBuisness.addEventListener('mouseout', function() {
    const arrow = mainCard.querySelector(".arrow");
    arrow.classList.remove('hover');
});

mainCardBuisness.addEventListener("click", function(event) {
    const arrow = mainCardBuisness.querySelector(".arrow");
    
    
    arrow.classList.toggle('reverse');

    const isExpanded = mainCardBuisness.classList.contains("expanded");

    if (isExpanded) {
        card1Cm.style.display = "none";
        mainCardBuisness.classList.remove("expanded");
    }
    else {
        card1Cm.style.display = "block";
        mainCardBuisness.classList.add("expanded");
    }
    
});


//-------

const card1Cbody = card1Cm.querySelector(".card-body");

card1C.addEventListener('mouseover', function() {
    const arrow = card1C.querySelector(".arrow");
    arrow.classList.add('hover');
});

card1C.addEventListener('mouseout', function() {
    const arrow = card1C.querySelector(".arrow");
    arrow.classList.remove('hover');
});


card1C.addEventListener("click", function(event) {
    const arrow = card1C.querySelector(".arrow");
    
    
    arrow.classList.toggle('reverse');

    const isExpanded = card1C.classList.contains("expanded");

    if (isExpanded) {
        card1Cbody.style.display = "none";
        card1C.classList.remove("expanded");
    }
    else {
        card1Cbody.style.display = "block";
        card1C.classList.add("expanded");
    }
    
});

//---



mainCard.addEventListener('mouseover', function() {
    const arrow = mainCard.querySelector(".arrow");
    arrow.classList.add('hover');
});

mainCard.addEventListener('mouseout', function() {
    const arrow = mainCard.querySelector(".arrow");
    arrow.classList.remove('hover');
});


mainCard.addEventListener("click", function(event) {
    const arrow = mainCard.querySelector(".arrow");
    
    
    arrow.classList.toggle('reverse');

    const isExpanded = mainCard.classList.contains("expanded");

    if (isExpanded) {
        card1m.style.display = "none";
        card2m.style.display = "none";
        card3m.style.display = "none";
        card4m.style.display = "none";
        mainCard.classList.remove("expanded");
    }
    else {
        card1m.style.display = "block";
        card2m.style.display = "block";
        card3m.style.display = "block";
        card4m.style.display = "block";
        mainCard.classList.add("expanded");
    }
    
});


//-------

const card1body = card1m.querySelector(".card-body");

card1.addEventListener('mouseover', function() {
    const arrow = card1.querySelector(".arrow");
    arrow.classList.add('hover');
});

card1.addEventListener('mouseout', function() {
    const arrow = card1.querySelector(".arrow");
    arrow.classList.remove('hover');
});


card1.addEventListener("click", function(event) {
    const arrow = card1.querySelector(".arrow");
    
    
    arrow.classList.toggle('reverse');

    const isExpanded = card1.classList.contains("expanded");

    if (isExpanded) {
        card1body.style.display = "none";
        card1.classList.remove("expanded");
    }
    else {
        card1body.style.display = "block";
        card1.classList.add("expanded");
    }
    
});


//-------

const card2body = card2m.querySelector(".card-body");

card2.addEventListener('mouseover', function() {
    const arrow = card2.querySelector(".arrow");
    arrow.classList.add('hover');
});

card2.addEventListener('mouseout', function() {
    const arrow = card2.querySelector(".arrow");
    arrow.classList.remove('hover');
});


card2.addEventListener("click", function(event) {
    const arrow = card2.querySelector(".arrow");
    
    
    arrow.classList.toggle('reverse');

    const isExpanded = card2.classList.contains("expanded");

    if (isExpanded) {
        card2body.style.display = "none";
        card2.classList.remove("expanded");
    }
    else {
        card2body.style.display = "block";
        card2.classList.add("expanded");
    }
    
});

//-------

const card3body = card3m.querySelector(".card-body");

card3.addEventListener('mouseover', function() {
    const arrow = card3.querySelector(".arrow");
    arrow.classList.add('hover');
});

card3.addEventListener('mouseout', function() {
    const arrow = card3.querySelector(".arrow");
    arrow.classList.remove('hover');
});


card3.addEventListener("click", function(event) {
    const arrow = card3.querySelector(".arrow");
    
    
    arrow.classList.toggle('reverse');

    const isExpanded = card3.classList.contains("expanded");

    if (isExpanded) {
        card3body.style.display = "none";
        card3.classList.remove("expanded");
    }
    else {
        card3body.style.display = "block";
        card3.classList.add("expanded");
    }
    
});

//-------

const card4body = card4m.querySelector(".card-body");

card4.addEventListener('mouseover', function() {
    const arrow = card4.querySelector(".arrow");
    arrow.classList.add('hover');
});

card4.addEventListener('mouseout', function() {
    const arrow = card4.querySelector(".arrow");
    arrow.classList.remove('hover');
});


card4.addEventListener("click", function(event) {
    const arrow = card4.querySelector(".arrow");
    
    
    arrow.classList.toggle('reverse');

    const isExpanded = card4.classList.contains("expanded");

    if (isExpanded) {
        card4body.style.display = "none";
        card4.classList.remove("expanded");
    }
    else {
        card4body.style.display = "block";
        card4.classList.add("expanded");
    }
    
});

</script>

<section class="page-section" id="footer">
<?php include "footer.php"; ?>
</section>