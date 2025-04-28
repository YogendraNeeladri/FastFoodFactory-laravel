<div id="contact" class="container-fluid bg-dark text-light border-top wow fadeIn">
    <div class="row">
        <div class="col-md-6 px-0">
            <div id="map" style="width: 100%; height: 100%; min-height: 400px"></div>
        </div>
        <div class="col-md-6 px-5 has-height-lg middle-items">
            <h3>FIND US</h3>
            <p>Visit The Fast Food Factory located in the heart of Srikakulam, offering a delightful range of meals with top-notch service. We're easy to find and always happy to serve you.</p>
            <div class="text-muted">
                <p><span class="ti-location-pin pr-3"></span> The Fast Food Factory, Srikakulam, Andhra Pradesh 532401</p>
                <p><span class="ti-support pr-3"></span> +91 8897082657</p>
                <p><span class="ti-email pr-3"></span> contact@thefastfoodf@gmail.com</p>
            </div>
        </div>
    </div>
</div>

<!-- page footer -->
<div class="container-fluid bg-dark text-light has-height-md middle-items border-top text-center wow fadeIn">
    <div class="row">
        <div class="col-sm-4">
            <h3>EMAIL US</h3>
            <P class="text-muted">thefastfoodf@gmail.com</P>
        </div>
        <div class="col-sm-4">
            <h3>CALL US</h3>
            <P class="text-muted">+91 8897082657</P>
        </div>
        <div class="col-sm-4">
            <h3>FIND US</h3>
            <P class="text-muted">Srikakulam, Andhra Pradesh 532401</P>
        </div>
    </div>
</div>
<div class="bg-dark text-light text-center border-top wow fadeIn">
    <p class="mb-0 py-3 text-muted small">&copy; Copyright <script>document.write(new Date().getFullYear())</script>
        Made with <i class="ti-heart text-danger"></i> by <a href="http://devcrud.com">Yogndra Neeladri</a></p>
</div>

<!-- core  -->
<script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
<script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

<!-- bootstrap affix -->
<script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

<!-- wow.js -->
<script src="assets/vendors/wow/wow.js"></script>

<!-- initialize map -->
<script>
    function initMap() {
        var gkRestaurant = { lat: 18.3021, lng: 84.7945 }; // Approximate coordinates of Ungarada Metta
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            center: gkRestaurant
        });
        var marker = new google.maps.Marker({
            position: gkRestaurant,
            map: map,
            title: 'GK Restaurant, Ungarada Metta'
        });
    }
</script>

<!-- google maps -->
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtme10pzgKSPeJVJrG1O3tjR6lk98o4w8&callback=initMap">
</script>

<!-- FoodHut js -->
<script src="assets/js/foodhut.js"></script>
