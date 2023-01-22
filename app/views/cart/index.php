<?php
include __DIR__ . '/../header.php';
?>
<h1>Shopping cart:</h1>
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $total = 0;
            foreach ($model ?? [] as $game): ?>
                <tr>
                    <td><?php echo $game['opponent'] ?></td>
                    <td>€<?php echo $game['price'] ?></td>
                    <td>
                        <?php echo $_SESSION['cart'][$game['id']] ?>
                    </td>
                    <td><a class="btn btn-danger" href="/cart/deleteOneFromSession?id=<?php echo $game['id'] ?>"
                            role="button">Remove</a></td>
                </tr>
                <?php
                $price = $game['price'];
                $totalPrice = $_SESSION['cart'][$game['id']] * $price;
                $total += $totalPrice;
                ?>
            <?php endforeach; ?>
            <tr>
                <th>Subtotal:</th>
                <th>€<?php echo $total; ?></th>
                <td></td>
                <td><a class="btn btn-primary" href="/checkout?total=<?php echo $total;?>" role="button">Checkout</a></td>
            </tr>
        </tbody>
    </table>
</div>
<?php
include __DIR__ . '/../footer.php';
?>