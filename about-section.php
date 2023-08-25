<section class="about-section ">
    <div class="yellow-section">
        <div class="yellow-content side-padding page-width">
            <h1>About Us <img src="./img/white-line.png" alt=""></h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown. </p>
        </div>
    </div>
    <div class="yellow-content-1 side-padding page-width">
        <p>We introduce ourselves as leading name in coach building and fabrication. Our organization is managed by
            expertise in this field who are experienced, degree holders and possesses sound technical knowledge. Our
            fabrication staff comprises of skilled and trained workers possessing perfect knowledge of the work
            inquisition.
            We have established this business in 1990; however we are in this field from last thirty five years. We had
            started this business in small shed and area and now it makes us proud to acknowledge you that we have
            expanded
            thrice.
        </p>
    </div>
    <img class="star" src="./img/Star 9.png" alt="">

    <div class="white-accordian-box">



        <button class="accordion">Company profile</button>
        <div class="panel">
            <p>We introduce ourselves as leading name in coach building and fabrication.</p>
        </div>

        <button class="accordion">Our achievment</button>
        <div class="panel">
            <p>We introduce ourselves as leading name in coach building and fabrication.</p>
        </div>

        <button class="accordion">Technical specification</button>
        <div class="panel">
            <p>We introduce ourselves as leading name in coach building and fabrication.</p>
        </div>

        <button class="accordion">Services</button>
        <div class="panel">
            <p>We introduce ourselves as leading name in coach building and fabrication.</p>
        </div>

        <button class="accordion">Quality policy</button>
        <div class="panel">
            <p>We introduce ourselves as leading name in coach building and fabrication.</p>
        </div>

        <button class="accordion">Key member</button>
        <div class="panel">
            <p>We introduce ourselves as leading name in coach building and fabrication.</p>
        </div>

        <button class="accordion">Vision mission</button>
        <div class="panel">
            <p>We introduce ourselves as leading name in coach building and fabrication.</p>
        </div>







    </div>








</section>

<script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function () {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        });
    }
</script>