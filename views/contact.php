<div id="page-container">
<?php
include 'header.php';
?>
<div class="wrapper" id='page' page='contact'>

    <span class="span">
        <h1>heeft u vragen over uw besteling?</h1>
        <p>neem contact met ons op via het formulier hier beneden!</p>
    </span>

    <div class="contact-grid">
        <div>
            <h1>Waar wij gevestigd zijn.</h1>
            <div class='contact-location'></div>
        </div>
        <div>
            <h1>alle velden met * is verplicht.</h1>
            <div>
                <form>
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
