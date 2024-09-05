<form method="POST"  id="ProductionForm" class="mb-5 ml-auto mr-0 tm-contact-form">
    <div class="form-group row mb-4">
        <label for="StockId" class="col-sm-3 col-form-label text-right tm-color-primary">ProductName</label>
        <div class="col-sm-9">

            <input class="form-control mr-0 ml-auto" name="ProductName" id="ProductName" type="search" required>
            <input type="button" class="tm-btn tm-btn-primary tm-btn-small" onclick="ProductionGetStockRecords();" value="Search">

            <div id="radioButtonsContainer"></div>
        </div>
    </div>
    <div class="form-group row mb-4">
        <label for="Amount" class="col-sm-3 col-form-label text-right tm-color-primary">Amount</label>
        <div class="col-sm-9">
            <input class="form-control mr-0 ml-auto" name="Amount" id="Amount" type="text" required>
        </div>
    </div>

    <div class="form-group row mb-5">
        <label for="Cost" class="col-sm-3 col-form-label text-right tm-color-primary">Cost</label>
        <div class="col-sm-9">
            <input type="number" required name="Cost" min="0" value="0" step=".01">
        </div>
    </div>

    <div class="form-group row mb-5">
        <label for="CreatorEmployeeId" class="col-sm-3 col-form-label text-right tm-color-primary">CreatorEmployeeName</label>
        <div class="col-sm-9">
            <input class="form-control mr-0 ml-auto" name="Name" id="z" type="search" required>
            <input type="button" class="tm-btn tm-btn-primary tm-btn-small" onclick="ProductionGetEmployee();" value="Search">
            <div id="radioButtonsContainer2"></div>

        </div>
    </div>

    <div class="form-group row text-right">
        <div class="col-12">
            <input type="button" class="tm-btn tm-btn-primary tm-btn-small" onclick="SaveProductionRecord();" value="Submit">

        </div>
    </div>
</form>
<script>
    $(document).ready( function (){
        // Add event listener to the radio buttons
        $('input[name="rdoStock"]').on('change', function() {
            var selectedStockId = $(this).val();
            showStockInfoTable(selectedStockId);
        });
    });

</script>
