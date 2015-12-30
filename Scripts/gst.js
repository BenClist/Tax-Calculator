function calculateGST() {
    var amount = parseFloat(document.getElementById("amount").value);
    var including = document.getElementById("inclgst").checked;
    var excluding = document.getElementById("exclgst").checked;
    var gst = document.getElementById("gst");
    var total;

    if (!excluding && !including) {
        alert("Please choose either including or excluding GST")
        return;
    } else if (excluding) {
        total = (amount * 1.15) - amount;
    } else if (including) {
        total = (amount * 3) / 23;
    }

    total = total.toFixed(2);
    gst.value = total;
}
