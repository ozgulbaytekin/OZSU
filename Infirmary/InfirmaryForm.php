<form method="POST" id="InfirmaryForm" class="mb-5 ml-auto mr-0 tm-contact-form">
    <div class="form-group row mb-4">
        <label for="Name" class="col-sm-3 col-form-label text-right tm-color-primary">Name</label>
        <div class="col-sm-9">

            <input class="form-control mr-0 ml-auto" name="Name" id="Name" type="search" required>
            <input type="button" class="tm-btn tm-btn-primary tm-btn-small" onclick="InfirmaryGetEmployee();" value="Search">

            <div id="radioButtonsContainer"></div>
        </div>
    </div>

    <!--******************* buradan sonra eye ear skin için checkboxlar eklenmeli-->

    <input type="checkbox" id="Eye" name="Eye" value="T">
    <label for="Eye">Has the employee had an eye test?</label><br>

    <input type="checkbox" id="Ear" name="Ear" value="T">
    <label for="Ear">Has the employee had an ear test?</label><br>

    <input type="checkbox" id="Skin" name="Skin" value="T">
    <label for="Skin">Has the employee had a skin test?</label><br>

    <!-- Container for radio buttons -->

    <input type="hidden" name="EmployeeId" id="EmployeeId" value="">

    <div class="form-group row text-right">
        <div class="col-12">
            <input type="button" class="tm-btn tm-btn-primary tm-btn-small" onclick="SaveInfirmaryRecord();" value="Submit">
        </div>
    </div>
</form>
<script>
    $(document).ready( function (){
        // Add event listener to the radio buttons
        $('input[name="rdoEmployee"]').on('change', function() {
            var selectedInfirmaryId = $(this).val();
            showEmployeeInfoTable(selectedInfirmaryId);
        });
    });

</script>
