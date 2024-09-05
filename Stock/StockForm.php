<form method="POST"  id="StockForm" class="mb-5 ml-auto mr-0 tm-contact-form">
    <div class="form-group row mb-4">
        <label for="ProductName" class="col-sm-3 col-form-label text-right tm-color-primary">ProductName</label>
        <div class="col-sm-9">
            <input class="form-control mr-0 ml-auto" name="ProductName" id="ProductName" type="text" required>
        </div>
    </div>
    <div class="form-group row mb-4">
        <label for="StocksAmount" class="col-sm-3 col-form-label text-right tm-color-primary">StocksAmount</label>
        <div class="col-sm-9">
            <input class="form-control mr-0 ml-auto" name="StocksAmount" id="StocksAmount" type="text" required>
        </div>
    </div>

    <div class="form-group row mb-5">
        <label for="UnitPrice" class="col-sm-3 col-form-label text-right tm-color-primary">UnitPrice</label>
        <div class="col-sm-9">
            <input class="form-control mr-0 ml-auto" name="UnitPrice" id="UnitPrice" type="number" required>
        </div>
    </div>

    <div class="form-group row mb-5">
        <label for="Name" class="col-sm-3 col-form-label text-right tm-color-primary">Name</label>
        <div class="col-sm-9">

            <input class="form-control mr-0 ml-auto" name="Name" id="Name" type="search" required>
            <input type="button" class="tm-btn tm-btn-primary tm-btn-small" onclick="GetEmployees();" value="Search">

            <div id="radioButtonsContainer"></div>
        </div>
    </div>

    <div class="form-group row text-right">
        <div class="col-12">
            <input type="button" class="tm-btn tm-btn-primary tm-btn-small" onclick="SaveStockRecord();" value="Submit">

        </div>
    </div>
</form>
<script>
    $(document).ready( function (){
        // Add event listener to the radio buttons
        $('input[name="rdoEmployee"]').on('change', function() {
            var selectedEmployeeId = $(this).val();
            showStockInfoTable(selectedEmployeeId);
        });
    });

</script>
