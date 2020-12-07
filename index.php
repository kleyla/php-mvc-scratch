<?php
$titulo = "HI";
include_once 'views/layouts/header.inc.php';
include_once 'views/layouts/navbar.inc.php';
?>

<div class="container">
    <div class="jumbotron">
        <h1>Blog de Karen</h1>
        <p>Blog dedicado a la programacion.</p>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include_once 'views/layouts/footer.inc.php';
?>