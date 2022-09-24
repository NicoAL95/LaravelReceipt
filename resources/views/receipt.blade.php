<!-- Nico Abel Laia | 20215520010 | TI MATANA 2021 -->

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Nico Abel Laia - TI Matana 2021</title>
</head>
<body class="bg-mainBlack py-10">

<?php 
    $products = array('Choco Pie', 'Silverqueen', 'Cadburry');
    $prices = array(18000, 12000, 19000);
    $qty = array(5, 3, 1);
    $discount = 0;
    $tax = 0;
    $totalPrices = 0;
?>

  <section class="receiptWrapper">
    <div class="headReceipt">
        <img src="/img/coshop.svg" class="w-auto h-[40px] mb-[20px]" alt="">
        <h1 class="text-[22px] font-[600] font-poppins text-superWhite">Welcome Onboard!</h1>
        <div class="headDesc">
            <h1>Hi <span>Nico Abel Laia</span>,</h1>
            <br>
            <h1>Thankyou for purchasing our products, All prices in IDR. Payments accepted with Credit Cards and PayPal. VAT may apply. All packages come with a 30-day satisfaction guarantee.</h1>
        </div>
    </div>
    <div class="sumWrapper">
        <div class="sumTitle">
            <h1>Order Summary</h1>
        </div>
        <div class="sumOrder">
            <div class="sumCol coLeft">
                <h1 class="colTitle">Product</h1>
                <?php 
                    for ($i=0; $i < count($prices); $i++) { 
                        if ($qty[$i] > 0) {
                            echo "<h1 class='colItem'>" . $products[$i] . "</h1>";
                        }
                    }
                ?>
            </div>
            <div class="sumCol coCenter">
                <h1 class="colTitle">Price</h1>
                <?php 
                    for ($i=0; $i < count($prices); $i++) { 
                        if ($qty[$i] > 0) {
                            echo "<h1 class='colItem'>" . number_format($prices[$i]) . "</h1>";
                        }
                    }
                ?>
            </div>
            <div class="sumCol coCenter">
                <h1 class="colTitle">Qty</h1>
                <?php 
                    for ($i=0; $i < count($qty); $i++) { 
                        if ($qty[$i] > 0) {
                            echo "<h1 class='colItem'>" . $qty[$i] . "</h1>";
                        }
                    }
                ?>
            </div>
            <div class="sumCol coRight">
                <h1 class="colTitle">Total(IDR)</h1>
                <?php 
                    for ($i=0; $i < count($prices); $i++) { 
                        if ($qty[$i] > 0) {
                            echo "<h1 class='colItem'>" . number_format($prices[$i] * $qty[$i]) . "</h1>";
                        }
                        $totalPrices += ($prices[$i] * $qty[$i]);
                    }
                ?>
            </div>
        </div>
        <div class="sumTotal">
            <div class="sumOrder">
                <div class="ordLeft">
                    <h6 class="bilTotal">Subtotal:</h6>
                    <?php
                        if ($totalPrices >= 100000) {
                            echo "<h1 class='bilTotal'>Discount(15%):" . "</h1>";
                        }
                    ?>
                    <h1 class="bilTotal">Tax(11%):</h1>
                    <h1 class="bilTotal text-[#00A286]">Total:</h1>
                </div>
                <div class="ordRight">
                    <?php 
                        echo "<h1 class='bilTotal'>" . number_format($totalPrices) . "</h1>";
                        if ($totalPrices >= 100000) {
                            $discount = ($totalPrices * 15) / 100;
                            $totalPrices -= $discount;
                            echo "<h1 class='bilTotal'>" . number_format($discount) . "</h1>";
                        }
                        $tax = ($totalPrices * 11)/100;
                        echo "<h1 class='bilTotal'>" . number_format($tax) . "</h1>";
                        echo "<h1 class='bilTotal text-[#00A286]'>" . number_format($totalPrices += $tax) . "</h1>";
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="receiptFooter">
        <div class="fooCol">
            <div class="colFoo">
                <h1 class="fooTitle">Billing Addres</h1>
                <p class="fooAdd">
                    Matana University Tower Jl. CBD Barat Kav, RW.1, Curug Sangereng, Kelapa Dua, Tangerang Regency, Banten 15810
                </p>
            </div>
            <div class="colFoo">
                <h1 class="fooTitle">Payment Method</h1>
                <div class="flex space-x-3 items-center">
                    <img src="/img/bca.png" class="bg-white p-2 rounded-md w-[50px] h-auto" alt="">
                    <p class="fooAdd text-[15px]">
                       BCA Virtual Account
                    </p>
                </div>
                <p class="fooAdd text-[16px] mt-[10px] text-white">
                    180402 170293 100502
                </p>
            </div>
        </div>
    </div>
  </section>
</body>
</html>

<!-- Nico Abel Laia | 20215520010 | TI MATANA 2021 -->