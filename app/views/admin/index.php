<?php
include __DIR__ . '/../header.php';
?>
<h2>Coming Matches</h2>
<div class="container">

    <div class="row">

        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Add game</h5>
                <form action="/admin/insert" method="post">
                    <p class="card-text">
                        <label for="inputName">Opponent: </label>
                        <input type="text" class="form-control mb-2" id="opponent" name="opponent" value="">
                        <label for="inputName">Date: </label>
                        <input type="date" class="form-control mb-2" id="date" name="date" value="">
                        <label for="inputName">Kick-Off: </label>
                        <input type="time" class="form-control mb-2" id="time" name="time" value="">

                        <label for="inputName">Available tickets: </label>
                        <input type="int" class="form-control mb-2" id="nrOfTickets" name="nrOfTickets" value="">
                        <label for="inputName">Price: :</label>
                        <input type="double" class="form-control mb-2" id="price" name="price" value="">
                        <button type="submit" name="submit" class="btn btn-primary mt-5">Add Game</button>
                    </p>
            </div>
            </form>
        </div>
        <?php
        foreach ($model as $game) {
        ?>
        
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Edit/Delete game</h5>
                    <p class="card-text">
                    <form action="/admin/updateOne" method="post">
                        <input type="hidden" id="gameId" name="gameId" 
                            value=" <?= $game->getId() ?>">
                        <label for="inputName">Opponent: </label>
                        <input type="text" class="form-control mb-2" id="opponent" name="opponent"
                            value=" <?= $game->getOpponent() ?>">
                        <label for="inputName">Date: </label>
                        <input type="date" class="form-control mb-2" id="date" name="date"
                            value="<?= $game->getDate() ?>">
                        <label for="inputName">Kick-Off: </label>
                        <input type="time" class="form-control mb-2" id="time" name="time"
                            value="<?= $game->getTime() ?>">
                        <label for="inputName">Available tickets: </label>
                        <input type="int" class="form-control mb-2" id="nrOfTickets" name="nrOfTickets"
                            value="<?= $game->getNrOfTickets() ?>">
                        <label for="inputName">Price: :</label>
                        <input type="double" class="form-control mb-2" id="price" name="price"
                            value="<?= $game->getPrice() ?>">
                        <button type="edit" name="edit" class="btn btn-success mt-5">Edit Game</button>
                    </form>
                        <form action="/admin/deleteOne?id=<? echo $game->getId() ?>" method="post">
                        <button type="delete" name="delete" class="btn btn-danger mt-5">Delete Game</button>
                        </form>
                    </p>
    </div>

</div>
<?php
        }
        ?>
</div>
<?php

    include __DIR__ . '/../footer.php';
    ?>