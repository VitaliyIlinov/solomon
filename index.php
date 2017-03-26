<?php
require_once "classes/product.php";
require_once "product/data.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
    <style type="text/css">
        .product {
            font-size: 120%;
            font-family: Verdana, Arial, Helvetica, sans-serif;
            color: #336;
            padding:10px;
            border: 1px solid grey;
            margin: 5px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
                <p>Сортировка</p>
                <select id="sort">
                    <option value="sortByName">по алфавіту</option>
                    <option value="sortByPrice">спочатку дешевші</option>
                    <option value="sortByNew">спочатку нові</option>
                </select>
        </div>
        <?php foreach ($product as $item=>$value): ?>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="product">
            <p>Имя : <?=$value['name'];?></p>
            <p>Дата : <?=$value['date'];?></p>
            <p>Цена : <?=$value['price'];?></p>
            <button class="btn btn-primary btn-lg" type="submit">Купить</button>
            </div>
        </div>
        <?php endforeach;?>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</body>
</html>