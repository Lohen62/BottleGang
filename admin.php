<?php session_start(); require './inc/dbconnect.php' ; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="stylesheet" href="./css/admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.5.3/dist/css/foundation.min.css" integrity="sha256-xpOKVlYXzQ3P03j397+jWFZLMBXLES3IiryeClgU5og= sha384-gP4DhqyoT9b1vaikoHi9XQ8If7UNLO73JFOOlQV1RATrA7D0O7TjJZifac6NwPps sha512-AKwIib1E+xDeXe0tCgbc9uSvPwVYl6Awj7xl0FoaPFostZHOuDQ1abnDNCYtxL/HWEnVOMrFyf91TDgLPi9pNg==" crossorigin="anonymous">
</head>
<body>

        <h2 class="ajoutitle">Ajouter des articles</h2>
        
        <form action="./checkvins.php" method="post">

        <div class="field">
            <label class="label">Nom</label>
            <div class="control has-icons-left has-icons-right">
                <input class="input" name="name" type="text" placeholder="Login" value="" required>
            </div>
        </div>

        <div class="field">
            <label class="label">Année</label>
            <div class="control has-icons-left has-icons-right">
                <input class="input" name="year" type="number" placeholder="année" value="" required>

            </div>
        </div>

        <div class="field">
            <label class="label">Image URL</label>
            <div class="control has-icons-left has-icons-right">
                <input class="input" name="img" type="text" placeholder="url image" value="" required>
            </div>
        </div>

        <div class="field">
            <label class="label">Description du produit</label>
            <div class="control has-icons-left has-icons-right">
                <textarea class="input" name="desc" type="text" placeholder="description" value="" required></textarea>
            </div>
        </div>

        <div class="field">
            <label class="label">Prix</label>
            <div class="control has-icons-left has-icons-right">
                <input class="input" name="price" type="number" placeholder="prix" value="" required>

            </div>
        </div>

        <label class="label">Couleur</label>
            <select name="color">
                <option value="Rouge">Rouge</option>
                <option value="Blanc">Blanc</option>
                <option value="Rose">Rosé</option>
                <option value="Champagne">Champagne</option>
            </select>


        <div class="field is-grouped">
            <div class="control">
                <button class="button is-link">Submit</button>
            </div>
        </div>     
        </form>

        <script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.5.3/dist/js/foundation.min.js" integrity="sha256-/PFxCnsMh+nTuM0k3VJCRch1gwnCfKjaP8rJNq5SoBg= sha384-9ksAFjQjZnpqt6VtpjMjlp2S0qrGbcwF/rvrLUg2vciMhwc1UJJeAAOLuJ96w+Nj sha512-UMSn6RHqqJeJcIfV1eS2tPKCjzaHkU/KqgAnQ7Nzn0mLicFxaVhm9vq7zG5+0LALt15j1ljlg8Fp9PT1VGNmDw==" crossorigin="anonymous"></script>
</body>
</html>