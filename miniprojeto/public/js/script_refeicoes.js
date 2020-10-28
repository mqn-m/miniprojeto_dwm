document.getElementById("pratos").addEventListener("change", function () {
    getSelectedOptions();
});

function getSelectedOptions() {
    var total_cals = 0;
    var options = [];
    var option;
    var pratos = document.getElementById("pratos");
    var calorias = document.getElementById("total_cal");

    console.clear();
    for (var i = 0; i < pratos.options.length; i++) {
        option = pratos.options[i];
        if (option.selected) {
            options.push(option);
            total_cals += Number(option.getAttribute("data-cals"));
            console.log(total_cals);
            calorias.value = total_cals;
            calorias.min = total_cals;
        }
    }
    console.log("Total " + total_cals);
}
