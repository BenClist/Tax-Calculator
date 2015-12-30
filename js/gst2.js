$(document).ready(function () {
    $('#submit').click(function() {
        calculateGST();
    });

    function calculateGST() {
        var amount = parseFloat($('#amount').val());
        var including = $('#inclgst');
        var excluding = $('#exclgst');
        var gst = $('#gst');
        var total;

        if (including.is(":checked")) {
            total = '$' + ((amount * 3) / 23).toFixed(2);
        } else if (excluding.is(":checked")) {
            total = '$' + ((amount * 1.15) - amount).toFixed(2);
        } else {
            alert("Please select either including or excluding GST");
        }

        $('#GSTValue #GSTSpan').text(total);

    };
});
