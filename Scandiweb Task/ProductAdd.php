
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Add</title>


    <!-- Бутстреп -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Стили -->
    <link rel="stylesheet" href="./styles/styles.css">
    
    <!-- Функции и ввод данных  -->
    <?php
        require ('functions.php'); 
        $product->insertData();
    ?>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm header">
                <h1>Product list</h1>
            </div>
            <div class="col-sm button">
                    <button form="new-product" type="submit" name="save" class="btn btn-dark">Save</button>
                    <a href="index.php"> <button type="button" class="btn btn-dark"> Cancel</button></a>
            </div>
        </div>
        <hr>

        <!-- Базовая форма -->
        <form id="new-product" method="get"> 
                <input type="text" name="sku" placeholder="SKU" required>
                <br>
                <input type="text" name="name" placeholder="Name" required>
                <br>
                <input type="text" name="price" placeholder="Price $" required>
                <br>

            <!-- Опции -->
            <select name="type" id="options" class="custom-select">
                <option selected>Choose one of the options</option>
                <option value="size">Size</option>
                <option value="dimensions">Dimensions</option>
                <option value="weight">Weight</option>
            </select>
            
            <!-- Ввод данных -->
            <div class="size att">
                <h5>Please, provide size</h5>
                <input type="text" name="size" placeholder="Size">
            </div>

            <div class="dimensions att">
                <h5>Please,provide dimensions</h5>
                <input type="text" name="height" placeholder="Height (CM)">
                <br>
                <input type="text" name="width" placeholder="Width (CM)">
                <br>
                <input type="text" name="length" placeholder="Length (CM)">
            </div>

            <div class="weight att">
                <h5>Please, provide weight</h5>
                <input type="text" name="weight" placeholder="Weight (KG)">
            </div>
        </form>
    </div>


    <!-- Скрипты JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="ProductAdd.js"></script>
</body>

</html>