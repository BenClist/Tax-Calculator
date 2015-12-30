<html>

<head>
    <title>GST Calculator</title>
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <script src="Scripts/gst.js"></script>
</head>

<body>
    <h1>Simple GST Calculator</h1>
    <form action="" id="gstcalc" onsubmit="return false;">
        <fieldset>
            <legend>Calculate GST</legend>
            <label>Enter the amount and choose either excluding GST or including GST to calculate the GST value</label>
            <br>
            <br>
            <label>Amount:</label>
            <br>
            <input type="number" min="0.01" step="0.01" id="amount">
            <br>
            <br>
            <labeL>Including or Excluding GST?:</labeL>
            <br>
            <br>
            <input type="radio" value="Including GST" name="inclOrExcl" id="inclgst"> Including
            <br>
            <input type="radio" value="Excluding GST" name="inclOrExcl" id="exclgst"> Excluding
            <br>
            <br>
            <input type="submit" value="Calculate" onclick="calculateGST()">
            <br>
            <br> GST Value:
            <br>
            <input type="number" min="0.01" step="0.01" id="gst">
        </fieldset>
    </form>
</body>

</html>
