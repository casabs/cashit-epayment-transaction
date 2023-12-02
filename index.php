<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<title>CashIT</title>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="main.css">
		<link
			rel="stylesheet"
			href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
			integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
			crossorigin="anonymous"
		/>
		<script
			defer
			src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"
			integrity="sha384-0pzryjIRos8mFBWMzSSZApWtPl/5++eIfzYmTgBBmXYdhvxPc+XcFEk+zJwDgWbP"
			crossorigin="anonymous"
		></script>
	</head>

<body>
    <nav class="navbar navbar-dark bg-info">
        <span class="navbar-brand mb-0 h1">CashIT</span>
    </nav>
    <div class="container-fluid bg-light" style="min-height: 100vh">
        <div class="container">
            <div class="jumbotron mt-4">
				<h1> EWallet: Merchant Transaction Book</h1><br>
                <div class="row">
                    <div class="col-md-4" id="headerIncome">Total Income:</div>
                    <div class="col-md-4" id="headerExpense">Total Expense:</div>
                    <div class="col-md-4" id="headerItem">Total Balance:</div>
                </div>
            </div>
            <div class="jumbotron mt-4">
                <form name="mainForm" id="mainForm">
                    <div class="input-group mb-3">
                        Select Partner Banks: 
                        <div class="options">&nbsp;
                            <input type="checkbox" id="Gcash"
                            name="sourceType" value="Gcash" checked>
                            <label for="Gcash">Gcash</label>&nbsp;&nbsp;
                        </div> 
                        <div class="options">
                            <input type="checkbox" id="Maya"
                            name="sourceType" value="Maya">
                            <label for="Maya">Maya</label>&nbsp;&nbsp;
                        </div>
                        <div class="options">&nbsp;
                            <input type="checkbox" id="GrabPay"
                            name="sourceType" value="GrabPay" checked>
                            <label for="GrabPay">GrabPay</label>&nbsp;&nbsp;
                        </div> 
                        <div class="options">
                            <input type="checkbox" id="Cliqqpay"
                            name="sourceType" value="CLIQQ Pay">
                            <label for="Cliqqpay">CLIQQ Pay</label>&nbsp;&nbsp;
                        </div>					
                    </div>
                    <div class="input-group mb-3">
                        <input
                            type="text"
                            class="form-control"
                            id="inputAmount"
                            placeholder="Enter Amount"
                            aria-label="Enter Amount"
                            aria-describedby="spent in peso"
                            required="required"
                        />
                        <div class="input-group-append">
                            <span class="input-group-text"
                            id="spent in peso">₱</span>
                        </div>
                        <div class="invalid-tooltip">
                            Please check the input
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"
                            id="spent at">@</span>
                        </div>
                        <input
                            type="text"
                            class="form-control"
                            id="inputDescp"
                            placeholder="Reference Number"
                            aria-label="Reference Number"
                            aria-describedby="spent at"
                            required="required"
                        />
                        <div class="input-group-append">
                            <button class="btn btn-outline-primary" type="submit" id="btnSelector">Add</button>
                        </div>
                        <div class="invalid-tooltip">
                            Please check the input
                        </div>
                    </div>
                </form>
            </div>
            <div>
        <ul class="list-group" id="tableItem"></ul>
        </div>
    </div>
</div>
        <!-- <input id="inputDescp" type="text">
        <input id="inputAmount" type="text">
        <div id="tableItem"></div>
        <h4 id="headerItem">0</h4>
        <button id="btnSelector">+</button> -->
    <script src="budget.js"></script>

<?php
$first_num = isset($_POST['first_num']) ? $_POST['first_num'] : '';
$second_num = isset($_POST['second_num']) ? $_POST['second_num'] : '';
$operator = isset($_POST['operator']) ? $_POST['operator'] : '';
$result = '';

if (is_numeric($first_num) && is_numeric($second_num)) {
    switch ($operator) {
        case "Add":
            $result = $first_num + $second_num;
            break;
        case "Subtract":
            $result = $first_num - $second_num;
            break;
        case "Multiply":
            $result = $first_num * $second_num;
            break;
        case "Divide":
            $result = $first_num / $second_num;
            break;
    }
}
?>
<br>
<h1> CASHculator</h1>

    <div id="page-wrap">
	  <form action="" method="post" id="quiz-form">
            <p>
                <input type="number" name="first_num" id="first_num" required="required" value="<?php echo $first_num; ?>" /> <b>First Number</b>
            </p>
            <p>
                <input type="number" name="second_num" id="second_num" required="required" value="<?php echo $second_num; ?>" /> <b>Second Number</b>
            </p>
            <p>
                <input readonly="readonly" name="result" value="<?php echo $result; ?>"> <b>Result</b>
            </p>
            <input type="submit" name="operator" value="Add" />
            <input type="submit" name="operator" value="Subtract" />
            <input type="submit" name="operator" value="Multiply" />
            <input type="submit" name="operator" value="Divide" />
	  </form>
    </div>
    <br>


</body>
</html>