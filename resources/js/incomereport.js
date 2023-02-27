
$(document).ready(function () {
    filterIncome();
});

const filterIncome = () => {

    $('#select_year').change(function () {
        $(this).find(":selected").each(function () {
            console.log($(this).val());
            filter_income($(this).val());
        });
    });
}

const filter_income = (year) => {
    console.log("El anio es: " + year)
    $.ajax({
        type: "POST",
        url: '/income/filter',
        data: year,
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        dataType: "json",
        success: function(results){
            console.log(results)
        }

    });
}