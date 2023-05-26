<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: tahoma, sans-serif;
        }

        body {
            width: 960px;
            margin: 20px auto;
        }

        .product {
            float: left;
            width: 160px;
        }

        .imgs {

            text-align: center;
        }

        .imgs img {
            width: 100%;
        }

        .row {
            padding: 10px;
            border: 1px solid #333;
            margin-left: 10px;
        }

        .row h2 {
            font-size: 16px;
            margin: 10px 0 15px 0;
        }

        form {
            margin-bottom: 20px;
        }

        form input {
            width: 250px;
            height: 30px;
            border-radius: 20px;
            border: 1px solid #333;
            outline: none;
            padding-left: 20px;
        }

        form button {
            padding: 8px;
            border-radius: 20px;
            border: none;
            outline: none;
            background-color: orange;
        }
        p {
            clear: both;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <form action="lab3.4.php" method="post">
        <input type="text" name="timKiem">
        <button type="submit" name="btn">Tìm kiếm</button>
    </form>


    <div>
        <?php
        if (isset($_POST['btn'])) {

            function tim_kiem()
            {
                $timKiem = $_POST['timKiem'];

                $products = [
                    ['masp' => 1, 'tensp' => "Iphone 13", 'gia' => 819, 'anh' => 'https://cdn.hoanghamobile.com/i/preview/Uploads/2021/09/15/image-removebg-preview-11.png'],
                    ['masp' => 2, 'tensp' => "Iphone 13 Pro", 'gia' => 999, 'anh' => '  https://cdn.hoanghamobile.com/i/preview/Uploads/2021/09/15/image-removebg-preview-17.png'],
                    ['masp' => 3, 'tensp' => "Samsung Galaxy S22", 'gia' => 799, 'anh' => 'https://cdn.hoanghamobile.com/i/preview/Uploads/2022/02/09/image-removebg-preview-7.png'],
                    ['masp' => 4, 'tensp' => "Samsung Galaxy S22 ultra", 'gia' => 999, 'anh' => 'https://cdn.hoanghamobile.com/i/preview/Uploads/2022/02/09/image-removebg-preview-6_637800452287772364.png'],
                    ['masp' => 5, 'tensp' => "Oppo Reno 7", 'gia' => 289, 'anh' => 'https://cdn.hoanghamobile.com/i/preview/Uploads/2020/12/29/suong-lam.png'],
                    ['masp' => 6, 'tensp' => "Xiaomi S12 Pro", 'gia' => 569, 'anh' => 'https://cdn.hoanghamobile.com/i/preview/Uploads/2022/03/17/image-removebg-preview-5.png'],
                ];
                $tensp = array_column($products, 'tensp');
                for ($i = 0; $i < count($products); $i++) {
                    if ($timKiem == $tensp[$i]) {
                        echo "<p>tìm thấy sp $timKiem</p>";
                        break;
                    } else {
                        echo "<p>ko tìm thấy sp! $timKiem</p>";
                        break;
                    }
                }

                //    print_r($tensp); 

            }
            tim_kiem();
        }



        $products = [
            ['masp' => 1, 'tensp' => "Iphone 13", 'gia' => 819, 'anh' => 'https://cdn.hoanghamobile.com/i/preview/Uploads/2021/09/15/image-removebg-preview-11.png'],
            ['masp' => 2, 'tensp' => "Iphone 13 Pro", 'gia' => 999, 'anh' => '  https://cdn.hoanghamobile.com/i/preview/Uploads/2021/09/15/image-removebg-preview-17.png'],
            ['masp' => 3, 'tensp' => "Samsung Galaxy S22", 'gia' => 799, 'anh' => 'https://cdn.hoanghamobile.com/i/preview/Uploads/2022/02/09/image-removebg-preview-7.png'],
            ['masp' => 4, 'tensp' => "Samsung Galaxy S22 ultra", 'gia' => 999, 'anh' => 'https://cdn.hoanghamobile.com/i/preview/Uploads/2022/02/09/image-removebg-preview-6_637800452287772364.png'],
            ['masp' => 5, 'tensp' => "Oppo Reno 7", 'gia' => 289, 'anh' => 'https://cdn.hoanghamobile.com/i/preview/Uploads/2020/12/29/suong-lam.png'],
            ['masp' => 6, 'tensp' => "Xiaomi S12 Pro", 'gia' => 569, 'anh' => 'https://cdn.hoanghamobile.com/i/preview/Uploads/2022/03/17/image-removebg-preview-5.png'],
        ];

        ?>
        <?php foreach ($products as $product) : ?>
            <div class="product">
                <div class="row">
                    <div class="imgs">
                        <img src="<?= $product['anh'] ?>" alt="">
                    </div>
                    <h2><?= $product['tensp'] ?></h2>
                    <p>Giá : <?= $product['gia'] ?></p>
                </div>

            </div>

        <?php endforeach ?>

    </div>
</body>

</html>