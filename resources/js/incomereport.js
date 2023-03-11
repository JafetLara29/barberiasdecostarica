
$(document).ready(function () {
    filterIncome();
});

const filterIncome = () => {

    $('#select_year').change(function () {
        $(this).find(":selected").each(function () {
            //console.log($(this).val());
            filter_income($(this).val());
        });
    });
}

const filter_income = (year) => {
    $.ajax({
        type: "POST",
        url: '/incomes/filter',
        data: { year: year },
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        dataType: "json",
        success: function (results) {
            $.each(results, function (index, result) {
                let incomesByMonths = {
                    "Enero": result.Ene == 0 || result.Ene == null ? '0' : result.Ene,
                    "Febrero": result.Feb == 0 || result.Feb == null ? '0' : result.Feb,
                    "Marzo": result.Mar == 0 || result.Mar == null ? '0' : result.Mar,
                    "Abril": result.Abr == 0 || result.Abr == null ? '0' : result.Abr,
                    "Mayo": result.May == 0 || result.May == null ? '0' : result.May,
                    "Junio": result.Jun == 0 || result.Jun == null ? '0' : result.Jun,
                    "Julio": result.Jul == 0 || result.Jul == null ? '0' : result.Jul,
                    "Agosto": result.Ago == 0 || result.Ago == null ? '0' : result.Ago,
                    "Setiembre": result.Sep == 0 || result.Sep == null ? '0' : result.Sep,
                    "Octubre": result.Oct == 0 || result.Oct == null ? '0' : result.Oct,
                    "Noviembre": result.Nov == 0 || result.Nov == null ? '0' : result.Nov,
                    "Diciembre": result.Dic == 0 || result.Dic == null ? '0' : result.Dic

                };
                shows(incomesByMonths);
                // TODO: console.log(`Mes = ${result.Dic}`) // devuele 0 o null
            });
        }
    });
}

const shows = (incomesByMonths) => {
    var cards = '';
    for (var income in incomesByMonths) {

        //console.log(`Mes #${income} ingreso = ${incomesByMonths[income]}`)
        cards += `
        
        <div class="col-xl-3 col-md-6">
                                <div class="card bg-c-green text-white">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <p class="m-b-5">${income}</p>
                                                <h4 class="m-b-0">$${incomesByMonths[income]}</h4>
                                            </div>
                                            <div class="col col-auto text-end">
                                                <i class="feather icon-credit-card f-50 text-c-green"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
        
        `

    }
    $('#filter-incomes').html(cards);
}