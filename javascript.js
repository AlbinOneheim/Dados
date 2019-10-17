function start() {
    /* Gör att knapparna fungerar (Sabbatsbergs Sjukhus, Kungsängens Ålderdomshem och Catering) */
    plats1 = document.querySelector(".plats1"); 
    plats2 = document.querySelector(".plats2"); 
    plats3 = document.querySelector(".plats3");
    kontakt = document.querySelector(".kontakt"); 

    plats1.addEventListener("click", sabbatsberg);
    function sabbatsberg() {
        location.href = "./sabatsberg.php";
    }

    plats2.addEventListener("click", kungsängen);
    function kungsängen() {
        location.href = "./kungsängen.html";
    }

    plats3.addEventListener("click", catering);
    function catering() {
        location.href = "./catering.html";
    }

    kontakt.addEventListener("click", formulär);
    function formulär() {
        location.href = "./kontakt.html";
    }
 
}
start();