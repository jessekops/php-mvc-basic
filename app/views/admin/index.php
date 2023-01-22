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
                        <input type="text" class="form-control mb-2" id="opponent" name="opponent" value=""required>
                        <label for="inputName">Date: </label>
                        <input type="date" class="form-control mb-2" id="date" name="date" value=""required>
                        <label for="inputName">Kick-Off: </label>
                        <input type="time" class="form-control mb-2" id="time" name="time" value=""required>
                        <label for="inputName">Price: :</label>
                        <input type="double" class="form-control mb-2" id="price" name="price" value=""required>
                        <button type="submit" name="submit" class="btn btn-primary mt-3">Add Game</button>
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
                        <input type="hidden" id="gameId" name="gameId" value=" <?= $game->getId() ?>">
                        <label for="inputName">Opponent: </label>
                        <input type="text" class="form-control mb-2" id="opponent" name="opponent"
                            value=" <?= $game->getOpponent() ?>" required>
                        <label for="inputName">Date: </label>
                        <input type="date" class="form-control mb-2" id="date" name="date" value="<?= $game->getDate() ?>"required>
                        <label for="inputName">Kick-Off: </label>
                        <input type="time" class="form-control mb-2" id="time" name="time" value="<?= $game->getTime() ?>"required>
                        <label for="inputName">Price: :</label>
                        <input type="double" class="form-control mb-2" id="price" name="price"
                            value="<?= $game->getPrice() ?>"required>
                        <button type="edit" name="edit" class="btn btn-success my-2">Edit Game</button>
                    </form>
                    <form action="/admin/deleteOne?id=<? echo $game->getId() ?>" method="post">
                        <button type="delete" name="delete" class="btn btn-danger mb-2 ">Delete Game</button>
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