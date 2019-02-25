<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>LUNIVER</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    </head>
    <body>
        <?php include("menu.php"); ?>
        <div id="title_contact">
            <p>une question ? un problème ? <br>contactez - nous.</p>
        </div>
        <form id="msform">
            <fieldset>
                <input type="text" name="email" placeholder="Email"/>
                <textarea type="text" name="message" placeholder="Message" cols="30" rows="5"></textarea>
                <input type="submit" name="submit" class="submit action-button" value="Submit" />
            </fieldset>
        </form>
        <?php include("footer.php"); ?>
    </body>
</html>