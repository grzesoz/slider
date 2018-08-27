addUserField();

function field(numberOfPlayers) {

    for (var i = 1; i <= numberOfPlayers; i++) {
        $('#playersName').append('Podaj imie zawodnika nr ' + i + ': <input type="text" name="player' + i + '" id="player' + i + '"><br/>');
    };
    $('#playersName').append('<button type="submit">Wyślij</button>');
};

function addUserField() {
    $('#players').on('keydown keyup', function () {
        $('#playersName').html('');

        var numberOfPlayers = $("#players").val();

        if (numberOfPlayers < 4) {
            $('#playersName').html('Liczba graczy jest mniejsza niż 4, a powinna być większa');
        } else if ($.isNumeric(numberOfPlayers)) {
            field(numberOfPlayers);
        } else {
            $('#playersName').html('Podaj liczbę a nie cokolwiek');
        }
    });
}

