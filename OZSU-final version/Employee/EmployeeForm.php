<form method="POST" id="EmployeeForm" class="mb-5 ml-auto mr-0 tm-contact-form">
    <div class="form-group row mb-4">
        <label for="TC" class="col-sm-3 col-form-label text-right tm-color-primary">TC</label>
        <div class="col-sm-9">
            <input class="form-control mr-0 ml-auto" name="TC" id="Name" type="text" required>
        </div>
    </div>
    <div class="form-group row mb-4">
        <label for="Name" class="col-sm-3 col-form-label text-right tm-color-primary">Name</label>
        <div class="col-sm-9">
            <input class="form-control mr-0 ml-auto" name="Name" id="Name" type="text" required>
        </div>
    </div>
    <div class="form-group row mb-4">
        <label for="UserName" class="col-sm-3 col-form-label text-right tm-color-primary">UserName</label>
        <div class="col-sm-9">
            <input class="form-control mr-0 ml-auto" name="UserName" id="UserName" type="text" required>
        </div>
    </div>


    <div class="form-group row text-right">
        <div class="col-12">
            <input type="button" class="tm-btn tm-btn-primary tm-btn-small" onclick="SaveEmployeeRecord();" value="Submit">

        </div>
    </div>
</form>
