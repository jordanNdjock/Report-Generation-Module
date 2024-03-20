
$(document).ready(function () {
    $('#inputPeriod').change(function () {
        var period = $(this).val();
        var numbers = [];

        switch (period) {
            case 'Trimestriel':
                numbers = [...Array(4).keys()].map(x => x + 1);
                break;
            case 'Semestriel':
                numbers = [...Array(2).keys()].map(x => x + 1);
                break;
            case 'Annuel':
                numbers = [...Array(9).keys()].map(x => x + 1);
                numbers.push('10+');
                break;
        }
        numbers.unshift('Entrer le ' + (period === 'Trimestriel' ? 'numero de trimestre' : period === 'Semestriel' ? 'numero de semestre' : ' nombre d\'année'));

        $('#inputNumber').empty();
        $.each(numbers, function (key, value) {
            $('#inputNumber').append($('<option>').text(value).val(value));
        });
    });
});