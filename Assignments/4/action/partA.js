function myFunction() {
    // declare variables
    var user_input;
    var hourly_rate = 15;
    var overtime_rate = hourly_rate * 1.5;
    var worked_hours = [];
    var salary = []
    var weekly_standard = 40;
    var new_entry = true;

    while (new_entry) {
        user_input = prompt(" Enters the (integer) number of hours worked in the week for each employee: ");
        if (user_input == -1) {
            new_entry = false;
        } else {
            worked_hours.push(user_input);
            if (user_input <= 40) {
                salary.push(hourly_rate * user_input);
            } else {
                salary.push(overtime_rate * (user_input - weekly_standard) + hourly_rate * weekly_standard);
            }
        }
    }

    var table = document.getElementById("report");


    var i;

    for (i = 1; i <= worked_hours.length; i++) {
        var row = table.insertRow(i);
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
        var cell3 = row.insertCell(2);
        cell1.innerHTML = i;
        cell2.innerHTML = worked_hours[i - 1];
        cell3.innerHTML = salary[i - 1];
    }


}