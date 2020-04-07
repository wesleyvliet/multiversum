<?php
include 'header.php';

if(empty($h1)) {
    $html = "<div class='wrapper' id='page' page='nieuwProduct'>";
    $html .= '<span class="span">';
    $html .= '<h1 id="title">upload nieuwe producten</h1>';
    $html .= '<p>alle gegevens zijn verijst om ingevuld te worden behalve de actie label en de display.</p>';
    $html .= '</span>';
} else {
    $html = "<div class='wrapper' id='page' page='nieuwProduct'>";
    $html .= '<span class="span">';
    $html .= '<h1 id="title">' . $h1 . '</h1>';
    $html .= '<p>' . $p . '</p>';
    $html .= '</span>';
}
echo $html;
if(empty($product)) {
    $html = '<button class="exit-button"><a href="home">X</a></button>';
    $html = "<form method='POST' action='?op=create' enctype='multipart/form-data' style='padding-top: 50px; padding-bottom: 50px;'>";
    $html .= "<input style='display: none;' name='op' placeholder='Naam:' value='create'>";
    $html .= "<div class='product-addForm'>";
    $html .= 	"<div>";
    $html .= 	   '<table class="detail-table">';
    $html .=	       "<tr><th style='background: var(--grey);'>Naam product</th></tr>";
    $html .= 	       "<tr><td><input name='title' placeholder='Naam:' required></td></tr>";
    $html .=	   "</table>";
    $html .= 	   '<table class="detail-table">';
    $html .=	       "<tr><th style='background: var(--grey);'>Profile foto</th></tr>";
    $html .= 	       "<tr><td><input name='upload' id='fileToUpload' type='file'></td></tr>";
    $html .=	   "</table>";
    $html .= 	   '<table class="detail-table">';
    $html .=	       "<tr><th style='background: var(--grey);'>Platform (VR-brillen)</th></tr>";
    $html .= 	       "<tr><td><div id='check-box'>";
    $html .=           "<div>";
    $html .=           "<p>Pc</p><p>Telefoon</p><p>Ps4</p><p>Standalone</p>";
    $html .=           "</div><div>";
    $html .=           "<input type='checkbox' name='platform[]' value='Pc'>";
    $html .=           "<input type='checkbox' name='platform[]' value='Telefoon'>";
    $html .=           "<input type='checkbox' name='platform[]' value='Ps4'>";
    $html .=           "<input type='checkbox' name='platform[]' value='Standalone'>";
    $html .=           "</div>";
    $html .=           "</div></td></tr>";
    $html .=	   "</table>";
    $html .= 	   '<table class="detail-table">';
    $html .=	       "<tr><th style='background: var(--grey);'>Eigen display</th></tr>";
    $html .= 	       "<tr><td><select id='actie-select' name='eigenDisplay' style='width: 100%; border: none; font-size: 18px;'><option value='0'>✘: Is niet inbegrepen</option><option value='1'>✔: Is inbegrepen</option></select></td></tr>";
    $html .=	   "</table>";
    $html .= 	   '<table class="detail-table">';
    $html .=	       "<tr><th style='background: var(--grey);'>Resolutie:</th></tr>";
    $html .= 	       "<tr><td><input name='resulatie' placeholder='Resolutie:' required></td></tr>";
    $html .=	   "</table>";
    $html .= 	   '<table class="detail-table">';
    $html .=	       "<tr><th style='background: var(--grey);'>Functies (VR-bril)</th></tr>";
    $html .= 	       "<tr><td><input name='functies' placeholder='Functies (VR-bril):' required></td></tr>";
    $html .=	   "</table>";
    $html .= 	   '<table class="detail-table">';
    $html .=	       "<tr><th style='background: var(--grey);'>Aansluitingen VR-bril</th></tr>";
    $html .= 	       "<tr><td><input name='aansluitingen' placeholder='Aansluitingen VR-bril:' required></td></tr>";
    $html .=	   "</table>";
    $html .= 	   '<table class="detail-table">';
    $html .=	       "<tr><th style='background: var(--grey);'>Refresh rate</th></tr>";
    $html .= 	       "<tr><td><input name='refreshRate' placeholder='Refresh rate:' required></td></tr>";
    $html .=	   "</table>";
    $html .= 	   '<table class="detail-table">';
    $html .=	       "<tr><th style='background: var(--grey);'>Prijs</th></tr>";
    $html .= 	       "<tr><td><input name='prijs' placeholder='prijs:' required></td></tr>";
    $html .=	   "</table>";
    $html .=    "</div>";

    $html .= 	"<div>";
    $html .= 	   '<table class="detail-table">';
    $html .=	       "<tr><th style='background: var(--grey);'>Garantie</th></tr>";
    $html .= 	       "<tr><td><input name='garantie' placeholder='Fabrieksgarantie:' required></td></tr>";
    $html .=	   "</table>";
    $html .= 	   '<table class="detail-table">';
    $html .=	       "<tr><th style='background: var(--grey);'>Accu en accessories</th></tr>";
    $html .= 	       "<tr><td><input name='accessoires' placeholder='Meegeleverde VR-bril accessoires:' required></td></tr>";
    $html .=	   "</table>";
    $html .= 	   '<table class="detail-table">';
    $html .=	       "<tr><th style='background: var(--grey);'>Extra informatie Product</th></tr>";
    $html .= 	       "<tr><td><input name='infoProduct' placeholder='informatie Product:' required></td></tr>";
    $html .=	   "</table>";
    $html .= 	   '<table class="detail-table">';
    $html .=	       "<tr><th style='background: var(--grey);'>Extra informatie Merk</th></tr>";
    $html .= 	       "<tr><td><input name='infoMerk' placeholder='Merk:' required></td></tr>";
    $html .=	   "</table>";
    $html .= 	   '<table class="detail-table">';
    $html .=	       "<tr><th style='background: var(--grey);'>Extra informatie Tweakers ID</th></tr>";
    $html .= 	       "<tr><td><input name='infoTweakers' placeholder='Tweakers ID:' required></td></tr>";
    $html .=	   "</table>";
    $html .= 	   '<table class="detail-table">';
    $html .=	       "<tr><th style='background: var(--grey);'>Extra informatie EAN</th></tr>";
    $html .= 	       "<tr><td><input name='infoEAN' placeholder='EAN:' required></td></tr>";
    $html .=	   "</table>";
    $html .= 	   '<table class="detail-table">';
    $html .=	       "<tr><th style='background: var(--grey);'>Extra informatie SKU</th></tr>";
    $html .= 	       "<tr><td><input name='infoSKU' placeholder='SKU:' required></td></tr>";
    $html .=	   "</table>";
    $html .= 	   '<table class="detail-table">';
    $html .=	       "<tr><th style='background: var(--grey);'>Actie</th></tr>";
    $html .= 	       "<tr><td style='padding: 0px;'>" . "<select id='actie-select' name='actie'><option value='0'>Nee</option><option value='1'>Ja</option></select>";
    $html .=           "<input id='actie-korting' name='korting' placeholder='prijs:'>";
    $html .=           "</td></tr>";
    $html .=	   "</table>";
    $html .=        '<div class="addform-buttons">';
    $html .= 	      "<button type='submit' id='add-product'>Voeg product toe</button>";
    $html .=        '</div>';
    $html .=	"</div>";
    $html .= "</div>";
    $html .= "</form>";
    $html .= '<button class="exit-button" style="bottom: 3.6%;"><a href="home">X</a></button>';
    $html .= "</div>";
} else {
    if($product[0]['eigenDisplay'] == 1) {
        $options = "<option value='0'>✘: Is niet inbegrepen</option><option value='1' selected>✔: Is inbegrepen</option>";
    } else {
        $options = "<option value='0' selected>✘: Is niet inbegrepen</option><option value='1'>✔: Is inbegrepen</option>";
    }

    if(strpos($product[0]['platform'], 'Pc') !== false){
        $input1 = "<input type='checkbox' name='platform[]' value='Pc' checked>";
    } else {
        $input1 = "<input type='checkbox' name='platform[]' value='Pc'>";
    }

    if(strpos($product[0]['platform'], 'Telefoon') !== false){
        $input2 = "<input type='checkbox' name='platform[]' value='Telefoon' checked>";
    } else {
        $input2 = "<input type='checkbox' name='platform[]' value='Telefoon'>";
    }

    if(strpos($product[0]['platform'], 'Ps4') !== false){
        $input3 = "<input type='checkbox' name='platform[]' value='Ps4' checked>";
    } else {
        $input3 = "<input type='checkbox' name='platform[]' value='Ps4'>";
    }

    if(strpos($product[0]['platform'], 'Standalone') !== false){
        $input4 = "<input type='checkbox' name='platform[]' value='Standalone' checked>";
    } else {
        $input4 = "<input type='checkbox' name='platform[]' value='Standalone'>";
    }

    $html = '<button class="exit-button"><a href="home">X</a></button>';
    $html = "<form method='POST'  action='?op=updateProduct&id=" . $product[0]['id'] . "' enctype='multipart/form-data' style='padding-top: 50px; padding-bottom: 50px;'>";
    $html .= "<input style='display: none;' name='op' placeholder='Naam:' value='updateProduct'>";
    $html .= "<div class='product-addForm'>";
    $html .= 	"<div>";
    $html .= 	   '<table class="detail-table">';
    $html .=	       "<tr><th style='background: var(--grey);'>Naam product</th></tr>";
    $html .= 	       "<tr><td><input name='title' value=" . $product[0]['title'] . " required></td></tr>";
    $html .=	   "</table>";
    $html .= 	   '<table class="detail-table">';
    $html .=	       "<tr><th style='background: var(--grey);'>Profile foto</th></tr>";
    $html .=           "<tr><td style='text-align: center;'><img style='width: 50%;margin: auto;' src='views/img/products/" . $product[0]['id'] . "'></td></tr>";
    $html .= 	       "<tr><td><input name='upload' id='fileToUpload' type='file'></td></tr>";
    $html .=	   "</table>";
    $html .= 	   '<table class="detail-table">';
    $html .=	       "<tr><th style='background: var(--grey);'>Platform (VR-brillen)</th></tr>";
    $html .= 	       "<tr><td><div id='check-box'>";
    $html .=           "<div>";
    $html .=           "<p>Pc</p><p>Telefoon</p><p>Ps4</p><p>Standalone</p>";
    $html .=           "</div><div>";
    $html .=           $input1;
    $html .=           $input2;
    $html .=           $input3;
    $html .=           $input4;
    $html .=           "</div>";
    $html .=           "</div></td></tr>";
    $html .=	   "</table>";
    $html .= 	   '<table class="detail-table">';
    $html .=	       "<tr><th style='background: var(--grey);'>Eigen display</th></tr>";
    $html .= 	       "<tr><td><select id='actie-select' name='eigenDisplay' style='width: 100%; border: none; font-size: 18px;'>" . $options . "</select></td></tr>";
    $html .=	   "</table>";
    $html .= 	   '<table class="detail-table">';
    $html .=	       "<tr><th style='background: var(--grey);'>Resolutie:</th></tr>";
    $html .= 	       "<tr><td><input name='resulatie' value=" . $product[0]['resulatie'] . " required></td></tr>";
    $html .=	   "</table>";
    $html .= 	   '<table class="detail-table">';
    $html .=	       "<tr><th style='background: var(--grey);'>Functies (VR-bril)</th></tr>";
    $html .= 	       "<tr><td><input name='functies' value=" . $product[0]['functies'] . " required></td></tr>";
    $html .=	   "</table>";
    $html .= 	   '<table class="detail-table">';
    $html .=	       "<tr><th style='background: var(--grey);'>Aansluitingen VR-bril</th></tr>";
    $html .= 	       "<tr><td><input name='aansluitingen' value=" . $product[0]['aansluitingen'] . " required></td></tr>";
    $html .=	   "</table>";
    $html .= 	   '<table class="detail-table">';
    $html .=	       "<tr><th style='background: var(--grey);'>Refresh rate</th></tr>";
    $html .= 	       "<tr><td><input name='refreshRate' value=" . $product[0]['refreshRate'] . " required></td></tr>";
    $html .=	   "</table>";
    $html .= 	   '<table class="detail-table">';
    $html .=	       "<tr><th style='background: var(--grey);'>Prijs</th></tr>";
    $html .= 	       "<tr><td><input name='prijs' value=" . $product[0]['prijs'] . " required></td></tr>";
    $html .=	   "</table>";
    $html .=    "</div>";

    $html .= 	"<div>";
    $html .= 	   '<table class="detail-table">';
    $html .=	       "<tr><th style='background: var(--grey);'>Garantie</th></tr>";
    $html .= 	       "<tr><td><input name='garantie' value=" . $product[0]['garantie'] . " required></td></tr>";
    $html .=	   "</table>";
    $html .= 	   '<table class="detail-table">';
    $html .=	       "<tr><th style='background: var(--grey);'>Accu en accessories</th></tr>";
    $html .= 	       "<tr><td><input name='accessoires' value=" . $product[0]['accessoires'] . " required></td></tr>";
    $html .=	   "</table>";
    $html .= 	   '<table class="detail-table">';
    $html .=	       "<tr><th style='background: var(--grey);'>Extra informatie Product</th></tr>";
    $html .= 	       "<tr><td><input name='infoProduct' value=" . $product[0]['infoProduct'] . " required></td></tr>";
    $html .=	   "</table>";
    $html .= 	   '<table class="detail-table">';
    $html .=	       "<tr><th style='background: var(--grey);'>Extra informatie Merk</th></tr>";
    $html .= 	       "<tr><td><input name='infoMerk' value=" . $product[0]['infoMerk'] . " required></td></tr>";
    $html .=	   "</table>";
    $html .= 	   '<table class="detail-table">';
    $html .=	       "<tr><th style='background: var(--grey);'>Extra informatie Tweakers ID</th></tr>";
    $html .= 	       "<tr><td><input name='infoTweakers' value=" . $product[0]['infoTweakers'] . " required></td></tr>";
    $html .=	   "</table>";
    $html .= 	   '<table class="detail-table">';
    $html .=	       "<tr><th style='background: var(--grey);'>Extra informatie EAN</th></tr>";
    $html .= 	       "<tr><td><input name='infoEAN' value=" . $product[0]['infoEAN'] . " required></td></tr>";
    $html .=	   "</table>";
    $html .= 	   '<table class="detail-table">';
    $html .=	       "<tr><th style='background: var(--grey);'>Extra informatie SKU</th></tr>";
    $html .= 	       "<tr><td><input name='infoSKU' value=" . $product[0]['infoSKU'] . " required></td></tr>";
    $html .=	   "</table>";
    $html .= 	   '<table class="detail-table">';
    $html .=	       "<tr><th style='background: var(--grey);'>Actie</th></tr>";
    $html .= 	       "<tr><td style='padding: 0px;'>" . "<select id='actie-select' name='actie'><option value='0' selected>Nee</option><option value='1'>Ja</option></select>";
    $html .=           "<input id='actie-korting' name='korting' placeholder='prijs:'>";
    $html .=           "</td></tr>";
    $html .=	   "</table>";
    $html .=        '<div class="addform-buttons">';
    $html .= 	      "<button type='submit' id='add-product'>Update product</button>";
    $html .=        '</div>';
    $html .=	"</div>";
    $html .= "</div>";
    $html .= "</form>";
    $html .= '<button class="exit-button" style="bottom: 3.6%;"><a href="home">X</a></button>';
    $html .= "</div>";
}
echo $html;

//include 'footer.php';
?>
