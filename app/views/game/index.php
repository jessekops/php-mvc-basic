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
                    <button type="submit" name="submit" class="btn btn-primary mt-5">Add to card</button>
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