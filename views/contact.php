<div id="page-container">
<?php
include 'header.php';
$html = "<div class='wrapper' id='page' page='contact'>";

$html .= "<span style='margin-top: 3%!important;' class='span'>";
    $html .= "<h1>" . $content[0]['title'] . "</h1>";
    $html .= "<p>" . $content[0]['text'] . "</p>";
$html .= "</span>";

echo $html;
?>
    <div class="contact-grid">
        <div>
            <h1>Waar wij gevestigd zijn.</h1>
            <div class='contact-location'><a href="https://www.google.nl/maps/place/Jan+Pieterszoon+Coenstraat,+Utrecht/@52.0912708,5.0973306,17z/data=!4m5!3m4!1s0x47c66f65451cd7b3:0xa52fd8e5ccf60705!8m2!3d52.0910488!4d5.0975124" target="_blank">link</a></div>
        </div>
        <div>
            <h1>alle velden met * is verplicht.</h1>
            <div>
                <form ?op=email>
                    <input name='name' placeholder="Uw naam">
                    <input name='email' placeholder="Uw email">
                    <textarea rows="4" cols="30" placeholder="type uw bericht..."></textarea>
                    <input type="submit" id="knop" value="Verzenden">
                </form>
            </div>
        </div>
    </div>

</div>

<?php
include 'footer.php';
?>
</div>
