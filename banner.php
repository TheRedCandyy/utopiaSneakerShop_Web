<banner>
    <div class="slideshow-container">
        <div class="mySlides fade">
            <a href="all.php"><img src="images/banner_1.jpg" style="width:100%"></a>
        </div>
        <div class="mySlides fade">
            <a href="all.php"><img src="images/banner_2.jpg" style="width:100%"></a>
        </div>
        <div class="mySlides fade">
            <a href="all.php"><img src="images/banner_3.jpg" style="width:100%"></a>
        </div>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
    </div>
</banner>
<script>
    var slideIndex = 1;
    showSlides(slideIndex);
    // Next/previous controls
    function plusSlides(n) {
    showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
    showSlides(slideIndex = n);
    }
    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slides[slideIndex-1].style.display = "block";
    }
</script>