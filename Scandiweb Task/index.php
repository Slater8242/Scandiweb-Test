<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>

    <!-- Стили -->
    <link rel="stylesheet" href="styles/styles.css">
    <!-- Бутстреп -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Скрипты JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <?php
        require ('functions.php'); 
    ?>
</head>

<body>
    <!-- Самый вверх и кнопки -->
    <div class="topContainer container">
        <div class="row">
            <div class="col-sm header">
                <h1>Product list</h1>
            </div>
            <div class="col-sm button">
                <a href="./ProductAdd.php"><button type="button" class="btn btn-dark">Add</button></a>
                <button type="submit" class="btn btn-dark" name="delete" form="productCard">Mass delete</button>
            </div>
        </div>
        <hr>

        <!-- Получение и удаление данных из ДБ  -->
        <?php
        $product_card=$product->getData();
        $product_delete=$product->deleteData();
        ?>
         <!-- Product form -->
        <form id="productCard" method='get'>
        <div class="products">
            <div class="row">
                <!-- Representation of product  -->
                <?php foreach($product_card as $item){
                    if($item ['type'] == 'size') {
                        $unit = " MB";
                    } elseif ($item ['type'] == "weight") {
                        $unit = " KG";
                    } elseif ($item['type']=="dimensions"){
                        $unit=" CM";
                    }
                ?>

                <div class=" col-3  product">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <!-- Product checkbox  -->
                            <input type="checkbox" id="scales" name="checkbox[]" value='<?php echo $item ['id'] ?>'>
                            <p class="sku"><?php echo $item ['sku']; ?></p>
                            <p class="name"><?php echo $item ['name'];?></p>
                            <p class="price"><?php echo $item ['price'].' $' ; ?></p>
                            <p class="special"><?php echo ucfirst($item ['type']) .': '. $item ['special'] . $unit; ?></p>
                        </div>
                    </div>
                </div>
                <?php } //closing for foreach function ?>
            </div>
        </div>
        </form>
    </div>

</body>

</html>