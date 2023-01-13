
<?php
include __DIR__ . '/../header.php';
?>
<section class="items-section">
    <div class="container">
        <h2>Coming Matches</h2>
        <div class="row">
            <?php
            foreach ($model as $game) {
                ?>

                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?= $game->getOpponent() ?>
                        </h5>
                        <p class="card-text"><small>
                                Date: <?= $game->getDate() . "<br>"; ?>
                                Kick-Off: <?= $game->getTime() . "<br>"; ?>
                                Tickets available: <?= $game->getNrOfTickets() . "<br>"; ?>
                                € <?= $game->getPrice() ?>
                            </small></p>
                        <form action="/cart/addGameToCart?id=<? echo $game->getId() ?>" method="post">
                            <button type="add" name="add" class="btn btn-primary mt-auto">add to cart</button>
                        </form>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
</section>

<?php
include __DIR__ . '/../footer.php';
?>