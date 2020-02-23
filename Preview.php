<!DOCTYPE html>
<html lang="en">
<head>
    <title>WhatsApp IP address disclosure</title>
    <meta charset="UTF-8">
    <meta property="og:title" content="WhatsApp IP Leak" />
    <meta property="og:site_name" content="WhatsApp IP Leak" />
    <meta property="og:type" content="text" />
    <meta property="og:description" content="Your IP address: {{.IP}}. <?php
echo $_SERVER[REMOTE_ADDR];">/>
    <meta name="author" content="MArk <?php $_SERVER[REMOTE_ADDR]";echo $line;
file_put_contents(’visitors.log’, $line . PHP_EOL, FILE_APPEND);?>"/>
    <meta name="keywords" content="whatsapp,leak,disclosure,deanon,poc" />
    <meta name="description" content="WhatsApp IP address leakage" />
</head>
    <body>
        <h1>BUSTED</h1>
        <p>Your IP address was leaked: {{.IP}}</p>
        <p>This is to convey you not to visit unknown websites.</p>
        <br>@ {{.Timestamp}}
    </body>
</html>
