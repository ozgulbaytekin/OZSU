<form method="POST" action="/ozsu/SaveRecord.php" id="SaleForm" class="mb-5 ml-auto mr-0 tm-contact-form">
    <div class="form-group row mb-4">
        <label for="ProductionId" class="col-sm-3 col-form-label text-right tm-color-primary">ProductionId</label>
        <div class="col-sm-9">
            <input class="form-control mr-0 ml-auto" name="ProductionId" id="ProductionId" type="number" required>
        </div>
    </div>
    <div class="form-group row mb-4">
        <label for="SalesAmount" class="col-sm-3 col-form-label text-right tm-color-primary">SalesAmount</label>
        <div class="col-sm-9">
            <input class="form-control mr-0 ml-auto" name="SalesAmount" id="SalesAmount" type="text" required>
        </div>
    </div>

    <div class="form-group row mb-5">
        <label for="SalesPrice" class="col-sm-3 col-form-label text-right tm-color-primary">SalesPrice</label>
        <div class="col-sm-9">
            <textarea class="form-control mr-0 ml-auto" name="SalesPrice" id="SalesPrice" type="text" required></textarea>
        </div>
    </div>

    <div class="form-group row mb-5">
        <label for="SalesEmployeeId" class="col-sm-3 col-form-label text-right tm-color-primary">SalesEmployeeId</label>
        <div class="col-sm-9">
            <input class="form-control mr-0 ml-auto" name="SalesEmployeeId" id="SalesEmployeeId" type="number" required>
        </div>
    </div>


    <input type="checkbox" id="IsPayment" name="IsPayment" value="T">
    <label for="IsPayment"> Is payment done?</label><br>
    <div class="form-group row text-right">
        <div class="col-12">
            <input type="button" class="tm-btn tm-btn-primary tm-btn-small" onclick="SaveSaleRecord();" value="Submit">

        </div>
    </div>
</form>