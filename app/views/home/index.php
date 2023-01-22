<?php
include __DIR__ . '/../header.php';
?>

<body>
    <h5>Welcome to the official Foresters ticketshop</h5>
    <p>On this website you can find the coming home fixtures and buy your tickets for the coming home games</p>
    <div id="games">
        <h5>upcoming matches...</h5>
    </div>
    <script>
        function loadData() {
            fetch('api/game')
                .then(result => result.json().then(games => {

                    var gamesDiv = document.getElementById('games');

                    games.forEach(element => {
                        const card = document.createElement("div");
                        card.className = "card h-100";

                        var date = document.createElement('h5');
                        date.innerText = element.date;

                        var time = document.createElement('p');
                        time.innerText = element.time;

                        var opponent = document.createElement('p');
                        opponent.innerText = element.opponent;

                        

                        gamesDiv.append(date, time, opponent);
                    });
                    console.log(games);
                }))
        }

        loadData();
    </script>
</body>
<?
include __DIR__ . '/../footer.php';
?>