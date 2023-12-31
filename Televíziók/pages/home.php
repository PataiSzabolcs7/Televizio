<div class="row">
    <?php
    foreach ($db->osszesTv() as $row) {
        $image = null;
        if (file_exists("./tvkepek/" . $row['tv_neve'] . ".jpg")) {
            $image = "./tvkepek/" . $row['tv_neve'] . ".jpg";
        } else if (file_exists("./tvkepek/" . $row['tv_neve'] . ".jpeg")) {
            $image = "./tvkepek/" . $row['tv_neve'] . ".jpeg";
        } else if (file_exists("./tvkepek/" . $row['tv_neve'] . ".png")) {
            $image = "./tvkepek/" . $row['tv_neve'] . ".png";
        } else {
            $image = "./images/noimage.jpg";
        }
        if($_SESSION['login']){
            $card = '<div class="card m-2" style="width: 18rem;">
                    <img src="'.$image.'" class="card-img-top img-thumbnail" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">' . $row['tv_neve'] . '</h5><hr>' .
                
                '<h5 class="card-text">Ár: ' . $row['ar'] . '</h5> <hr>' .
                '<p class="card-text">Márka: ' . $row['marka'].  '</p> <hr>' .
                '<p class="card-text">Képátló: ' . $row['kepatlo'].  'cm <hr></p>' .
                '<p class="card-text">Képfrissítés: ' . $row['hz'] . 'Hz </p><hr>' .
                '<p class="card-text">Felbontás: ' . $row['felbontas'] . '</p><hr>' .
                '<p class="card-text">Kijelző: ' . $row['kijelzo'] . '</p><hr>' .
                '<p class="card-text">' . $row['megjegyzes'] . '</p><hr>' .
                '<a href="index.php?menu=home&id=' . $row['tvid'] . '" class="btn btn-primary d-flex justify-content-center">Vásárlás</a>
                    </div>
                </div>
            ';
        }
        else if(isset($_SESSION['login']) && $_SESSION['login'] && isset($_SESSION['admin']) && $_SESSION['admin']){
            $card = '<div class="card m-2" style="width: 18rem;">
                    <img src="'.$image.'" class="card-img-top img-thumbnail" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">' . $row['tv_neve'] . '</h5><hr>' .
                
                '<h5 class="card-text">Ár: ' . $row['ar'] . '</h5> <hr>' .
                '<p class="card-text">Márka: ' . $row['marka'].  '</p> <hr>' .
                '<p class="card-text">Képátló: ' . $row['kepatlo'].  'cm <hr></p>' .
                '<p class="card-text">Képfrissítés: ' . $row['hz'] . 'Hz </p><hr>' .
                '<p class="card-text">Felbontás: ' . $row['felbontas'] . '</p><hr>' .
                '<p class="card-text">Kijelző: ' . $row['kijelzo'] . '</p><hr>' .
                '<p class="card-text">' . $row['megjegyzes'] . '</p><hr>' .
                '<a href="index.php?menu=home&id=' . $row['tvid'] . '" class="btn btn-primary d-flex justify-content-center">Módosítás</a>
                    </div>
                </div>
            ';
        }
        else{
            $card = '<div class="card m-2" style="width: 18rem;">
                    <img src="'.$image.'" class="card-img-top img-thumbnail" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">' . $row['tv_neve'] . '</h5><hr>' .
                
                '<h5 class="card-text">Ár: ' . $row['ar'] . '</h5><hr>' .
                '<p class="card-text">Márka: ' . $row['marka'].  '</p><hr>' .
                '<p class="card-text">Képátló: ' . $row['kepatlo'].  'cm</p><hr>' .
                '<p class="card-text">Képfrissítés: ' . $row['hz'] . 'Hz</p><hr>' .
                '<p class="card-text">Felbontás: ' . $row['felbontas'] . '</p><hr>' .
                '<p class="card-text">Kijelző: ' . $row['kijelzo'] . '</p><hr>' .
                '<p class="card-text">' . $row['megjegyzes'] . '</p><hr>' .
                '<a href="index.php?menu=login" class="btn btn-primary d-flex justify-content-center">Vásárlás</a>
                    </div>
                </div>
            ';
        }
        echo $card;
    }
    ?>

</div>