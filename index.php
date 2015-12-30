<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Simple GST Calculator</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Simple GST Calculator</h1>
                <h3>Enter the amount and choose either excluding GST or including GST to calculate the GST value</h3>
                <form id="gstcalc" onsubmit="return false;">
                    <div class="form-group">
                        <label for="amount">Amount:</label>
                        <div class="input-group">
                            <span class="input-group-addon">$</span>
                            <input class="form-control" type="number" min="0.01" step="0.01" id="amount" aria-label="Amount">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inclOrExcl">Including or Excluding GST?:</label>
                        <label class="radio-inline">
                            <input type="radio" value="incl" name="inclOrExcl" id="inclgst"> Including
                        </label>
                        <label class="radio-inline">
                            <input type="radio" value="excl" name="inclOrExcl" id="exclgst"> Excluding
                        </label>
                    </div>
                    <input class="btn btn-success" type="submit" value="Calculate" id="submit">
                    <br>
                    <br>
                </form>
                <div id="GSTValue">
                    <h3>GST Value is <span id="GSTSpan">$0.00</span></h3>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/gst2.js"></script>
</body>

</html>
