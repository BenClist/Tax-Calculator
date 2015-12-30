function calculateGST() {
    "use strict";
    var amount = parseFloat(document.getElementById("amount").value),
        including = document.getElementById("inclgst").checked,
        excluding = document.getElementById("exclgst").checked,
        gst = document.getElementById("gst"),
        total;

    if (!excluding && !including) {
        alert("Please choose either including or excluding GST");
        return;
    } else if (excluding) {
        total = (amount * 1.15) - amount;
    } else if (including) {
        total = (amount * 3) / 23;
    }

    total = total.toFixed(2);
    gst.value = total;
}
