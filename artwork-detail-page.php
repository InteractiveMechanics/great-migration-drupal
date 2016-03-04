<?php include('inc/header.html'); ?>

<main>
    <section class="container-fluid">
        <div class="artwork-hero-inner">                
            <div class="artwork-hero-image border">
                <img src="http://placehold.it/720x600" alt="#" class="in">
                <img src="http://placehold.it/710x610" alt="#">
                <img src="http://placehold.it/700x590" alt="#">
                <img src="http://placehold.it/720x600" alt="#">
                <img src="http://placehold.it/720x600" alt="#">
            </div>
            <div class="artwork-hero-details-container">
                <div class="artwork-hero-details">
                    <h3>Artist Installation</h3>
                    <h1>Salisbury</h1>
                    <p>A short experimental film about the choice of migration and the choice of remaining. It is shot in Salisbury, North Carolina by Kevin Jerome Everson.</p>
                    <a href="#" class="btn btn-default btn-lg btn-inverted"><span class="glyphicon glyphicon-picture"></span> View the Gallery</a><br/>
                    <a href="#" class="btn btn-default btn-lg btn-inverted"><span class="glyphicon glyphicon-facetime-video"></span> Watch the Artist Statement</a>
                </div>
            </div>
        </div>
    </section>
    <section id="02" class="page">
        <div class="content-container">
            <div class="content content-left">
                <h3>About the location</h3>
                <p>Morbi dapibus sed magna in auctor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam et lorem id magna sollicitudin condimentum eu vitae quam. Fusce pellentesque, ipsum in ultrices commodo, turpis leo faucibus lorem, non efficitur leo lacus maximus lacus. Mauris rhoncus felis sit amet sem aliquet sagittis. Donec odio est, interdum id placerat eu, lacinia vestibulum mi. Etiam id libero in massa tincidunt pellentesque. Quisque non aliquet enim. Mauris vehicula, risus nec sollicitudin commodo, tortor augue facilisis arcu, sed maximus orci risus quis felis. Integer euismod lacus quis massa efficitur, a bibendum magna sollicitudin. In hendrerit, tellus eget mollis tristique, ipsum diam sagittis nulla, in aliquam tellus justo sit amet nibh.</p>
            </div>
            <div class="images images-right">
                
            </div>
        </div>
        <div id="map" class="full-map"></div>
        <script>
            // Let's make a pretty map!
            // Tossing this here, since we need to manipulate it on the fly
            // based on what gets returned by the page
            L.mapbox.accessToken = 'pk.eyJ1IjoiaW50ZXJhY3RpdmVtZWNoIiwiYSI6InJlcUtqSk0ifQ.RUwHuEkBbXoJ6SgOnXmYFg';
            var map = L.mapbox.map('map', 'mapbox.streets');
            map.setView([40, -74.50], 10);
            map.scrollWheelZoom.disable();
        </script>
    </section>
    <section id="03" class="page">
        <div class="content-container">
            <div class="images images-left">
                
            </div>            
            <div class="content content-right">
                <h3>About the project</h3>
                <p>Morbi dapibus sed magna in auctor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam et lorem id magna sollicitudin condimentum eu vitae quam. Fusce pellentesque, ipsum in ultrices commodo, turpis leo faucibus lorem, non efficitur leo lacus maximus lacus. Mauris rhoncus felis sit amet sem aliquet sagittis. Donec odio est, interdum id placerat eu, lacinia vestibulum mi. Etiam id libero in massa tincidunt pellentesque. Quisque non aliquet enim. Mauris vehicula, risus nec sollicitudin commodo, tortor augue facilisis arcu, sed maximus orci risus quis felis. Integer euismod lacus quis massa efficitur, a bibendum magna sollicitudin. In hendrerit, tellus eget mollis tristique, ipsum diam sagittis nulla, in aliquam tellus justo sit amet nibh.</p>
            </div>
        </div>
    </section>
    <section id="04">
        <div class="media-container">
            <div class="container">
                <h2 class="text-center">Other media and resources</h2>
                <div class="row">
                    <div class="col-sm-4 col-md-3">
                        <div class="media">
                            <div class="media-image">
                                <img src="http://placehold.it/300x200" alt="#">
                            </div>
                            <div class="media-content">
                                <h5>Oral History</h5>
                                <h3>Hughsey Child</h3>
                                <h6>goinnorth.org</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="05">
        <div class="container-fluid">
            <div class="artist"></div>
        </div>
    </section>

    <div id="artwork-scrollspy" class="border">
        <ol class="nav nav-pills nav-stacked">
            <li class="active"><a href="#">Introduction</a></li>
            <li><a href="#02">About the location</a></li>
            <li><a href="#03">About the project</a></li>
            <li><a href="#04">Media & Resources</a></li>
            <li><a href="#05">Artist information</a></li>
        </ol>
    </div>
</main>

<?php include('inc/footer.html'); ?>