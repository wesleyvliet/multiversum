<html>
<body>
    <span>
        <h1>Toevoegen</h1>
    </span>
    <span class="addForm">
        <div class="addForm">
            <form class="addForm" action="./controllers/Controller.php" method="post">
                <label for="productName">Product naam</label> <br>
                <input type="text" name="productName" value=""><br>
                <label for="brand">product merk</label><br>
                <input type="text" name="brand" value=""><br>
                <label for="productPlatform">Product platform</label> <br>
                <input type="text" name="productPlatform" value=""><br>
                <label for="productResolution">Product resolutie</label><br>
                <input type="text" name="productResolution" value=""><br>
                <label for="productRefreshRate">Product refresh rate</label><br>
                <input type="text" name="productRefreshRate" value=""><br>
                <label for="productAccessories">Product accessoires</label><br>
                <input type="text" name="productAccessories" value=""><br>
                <input type="file" name="file" id="file"><br>
                <label for="file">Product foto</label><br>
                <input type="submit" name="submit" value="Toevoegen">
            </form>
        </div>
    </span>
    <footer>
        <p>© 1999-2020 multiversum.com b.v.</p>
    </footer>
</body>

</html>
