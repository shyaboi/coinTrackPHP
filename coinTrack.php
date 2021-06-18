<!DOCTYPE html>
<html lang="en">
<?php
function timedGet($url)
{
    $json = file_get_contents($url);
    $obj = json_decode($json);
    echo  +$obj->USD;
} ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="undefined" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="undefined" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="undefined" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.esm.min.js" integrity="undefined" crossorigin="anonymous"></script>
</head>

<body>
    <div class="jumbotron text-center">
        <h1>Crypto Price Tracker</h1>
        <p>It does the thing</p>
    </div>

    <div class="container">
        <div class="row text-center">
            <div class="col">
                <img src="https://lh3.googleusercontent.com/proxy/1PzqZCpBLPxqQKhD4JusGzxnUCzX1xHQ5VUArYnSeY_VMNH0K30qDdc0rsm3MdMZ98IBwfDzxHK_nvqBtzkJEyOXV_QH86CrFX9sVW28EJylRjFrEhdJ4GmFTMBB" height="150" class="rounded-circle" alt="Cinque Terre">
                <p>1 Bitcoin = <?php
                                timedGet('https://min-api.cryptocompare.com/data/price?fsym=BTC&tsyms=USD');
                                ?>
                    USD</p>
            </div>
            <div class="col">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6f/Ethereum-icon-purple.svg/1200px-Ethereum-icon-purple.svg.png" height="150" class="rounded-circle" alt="Cinque Terre">
                <p>1 Etherum = <?php
                                timedGet('https://min-api.cryptocompare.com/data/price?fsym=ETH&tsyms=USD');
                                ?>
                    USD</p>
            </div>
            <div class="col">
                <img src="https://cryptologos.cc/logos/cardano-ada-logo.png" height="150" class="rounded-circle z-depth-2" alt="Cinque Terre">
                <p>1 Cardano = <?php
                                timedGet('https://min-api.cryptocompare.com/data/price?fsym=ADA&tsyms=USD');
                                ?>
                    USD</p>
            </div>
            <div class="col">
                <img src="https://www.cnet.com/a/img/naqtECxGKnGGw7_LPThxRoSbjco=/940x0/2013/12/27/2905f9b4-8533-11e3-bc97-14feb5ca9861/dogecoin.jpg" height="150" class="rounded-circle z-depth-2" alt="Cinque Terre">
                <p>1 Doge = <?php
                            timedGet('https://min-api.cryptocompare.com/data/price?fsym=DOGE&tsyms=USD');
                            ?>
                    USD</p>
            </div>
            <div class="col">
                <img src="https://cdn.worldvectorlogo.com/logos/monero.svg" height="150" class="rounded-circle z-depth-2" alt="Cinque Terre">
                <p>1 Monero = <?php
                                timedGet('https://min-api.cryptocompare.com/data/price?fsym=XMR&tsyms=USD');
                                ?>
                    USD</p>
            </div>
        </div>
    </div>

</body>

</html>