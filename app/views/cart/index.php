<?php
include __DIR__ . '/../header.php';
?>
<div class="cart">
        <h1 class="cart-header">Shopping cart:</h1>
        <table class="cart-table">
            <thead class="cart-thead">
                <tr>
                    <th>Opponent</th>
                </tr>
            </thead>
            <tbody class="cart-tbody">
            <?
                foreach ($_SESSION["cart"] as $game) { ?>
                    <tr>
                    <td><?  Print_r ($_SESSION['cart']) ?></td>
                    </tr>
                <?}?>
<?php
include __DIR__ . '/../footer.php';
?>