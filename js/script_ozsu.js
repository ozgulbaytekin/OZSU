console.log("Script loaded");
let selectedEmployeeId = null;


$(document).ready(function() {
    console.log("Document ready");

    EmployeeForm();
    InfirmaryForm();
    ProductionForm();
    SaleForm();
    StockForm();
    ReportForm();
});


/*************************** employees **********************/
function EmployeeForm() {
    $.ajax({
        url: '/ozsu/Employee/EmployeeForm.php',
        success: function(result) {
            $("#EmployeeFormDiv").html(result);
        },
        complete: function (){
            EmployeeTable();
        }
    });
}
function EmployeeTable() {
    $.ajax({
        url: '/ozsu/Employee/EmployeeTable.php',
        success: function(result) {
            $("#EmployeeTableDiv").html(result);
        }
    });
}
function SaveEmployeeRecord() {//bu fonksiyon forma eklenecek
    console.log($("#EmployeeForm").serialize());
    event.preventDefault();

    $.ajax({
        url: 'SaveRecord.php',
        type: 'POST',
        data: $("#EmployeeForm").serialize(),//bu kısmı değiştir
        success: function(result) {
            $("#resultofSave").html(result);

            EmployeeForm();
        },
        error: function(hata) {
            console.log("Save error");
            console.log(hata);
        }
    });
}
function DeleteEmployeeRecord(EmployeeId) {//bu fonksiyon table'a eklenecek, Id isimleri farklı olduğu için problem oluyormuş tek tek yaz
    var tmpResult = confirm("Emin misin_?");

    if( tmpResult ) {
        $.ajax({
            url: 'DeleteRecord.php',
            type: 'POST',
            data: "EmployeeId=" + EmployeeId,
            success: function (result) {
                $("#resultofSave").html(result);

                EmployeeTable();
            }
        });
    }
    else
        alert("Hayırdır bro!");
}
/*************************** employees **********************/
/*************************** infirmaries **********************/

function InfirmaryForm() {
    $.ajax({
        url: '/ozsu/Infirmary/InfirmaryForm.php',
        success: function (result) {
            $("#InfirmaryFormDiv").html(result);
        },
        complete: function () {
            InfirmaryTable(selectedEmployeeId);
        }
    });
}

function InfirmaryTable(EmployeeId) {
    $.ajax({
        url: '/ozsu/Infirmary/InfirmaryTable.php',
        type: 'GET',
        data: { EmployeeId: EmployeeId },
        success: function (result) {
            $("#InfirmaryTableDiv").html(result);
        }
    });
}



function SaveInfirmaryRecord() {
    $.ajax({
        url: 'SaveRecord.php',
        type: 'POST',
        data: $("#InfirmaryForm").serialize(),
        success: function(result) {
            $("#resultofSave").html(result);
            InfirmaryForm();
        },
        error: function(hata) {
            console.log(hata);
        }
    });
}

function DeleteInfirmaryRecord(InfirmaryId) {
    var tmpResult = confirm("Emin misin_?");
    console.log("Delete called");
    if( tmpResult ) {
        $.ajax({
            url: 'DeleteRecord.php',
            type: 'POST',
            data: "InfirmaryId=" + InfirmaryId,
            success: function (result) {
                $("#resultofSave").html(result);

                InfirmaryTable();
            }
        });
    }
    else
        alert("Hayırdır bro!");
}




function GetEmployee() {
    $.ajax({
        url: '/ozsu/get_employee_records.php',
        type: 'POST',
        data: $("#ReportForm").serialize(),
        success: function(result) {
            $("#radioButtonsContainer").html(result);
        },
        error: function(hata) {
            console.log("Failed to post EmployeeId.");
            console.log(hata);
        }
    });
}
function InfirmaryGetEmployee() {
    $.ajax({
        url: '/ozsu/get_employee_records.php',
        type: 'POST',
        data: $("#InfirmaryForm").serialize(),
        success: function(result) {
            $("#radioButtonsContainer").html(result);
        },
        error: function(hata) {
            console.log("Failed to post EmployeeId.");
            console.log(hata);
        }
    });
}
function showEmployeeInfoTable(selectedEmployeeId) {
    $.ajax({
        url: '/ozsu/Report/EmployeeInfoTable.php',
        type: 'GET',
        data: "EmployeeId=" + selectedEmployeeId,
        success: function(result) {
            $("#EmployeeInfoTableDiv").html(result);
        },
        error: function(error) {
            console.log("Error fetching employee information.");
            console.log(error);
        }
    });
}
function showStockInfoTable(selectedEmployeeId) {
    $.ajax({
        url: '/ozsu/Stock/StockInfoTable.php',
        type: 'GET',
        data: "EmployeeId=" + selectedEmployeeId,
        success: function(result) {
            $("#StockInfoTableDiv").html(result);
        },
        error: function(error) {
            console.log("Error fetching employee information.");
            console.log(error);
        }
    });
}



/*************************** infirmaries **********************/
/*************************** productions **********************/
function ProductionTable() {
    $.ajax({
        url: '/ozsu/Production/ProductionTable.php',
        success: function(result) {
            $("#ProductionTableDiv").html(result);
        }
    });
}
function ProductionForm() {
    $.ajax({
        url: '/ozsu/Production/ProductionForm.php',
        success: function(result) {
            $("#ProductionFormDiv").html(result);
        },
        complete: function (){
            ProductionTable();
        }
    });
}
function ProductionGetEmployee() {
    $.ajax({
        url: '/ozsu/get_employee_records.php',
        type: 'POST',
        data: $("#ProductionForm").serialize(),
        success: function(result) {
            $("#radioButtonsContainer2").html(result);
        },
        error: function(hata) {
            console.log("Failed to post EmployeeId.");
            console.log(hata);
        }
    });
}

function SaveProductionRecord() {//bu fonksiyon forma eklenecek
    console.log($("#ProductionForm").serialize());
    event.preventDefault();

    $.ajax({
        url: 'SaveRecord.php',
        type: 'POST',
        data: $("#ProductionForm").serialize(),//bu kısmı değiştir
        success: function(result) {
            console.log("Save success");
            ProductionForm()

        },
        error: function(hata) {
            console.log("Save error");
            console.log(hata);
        }
    });
}
function DeleteProductionRecord(ProductionId) {
    var tmpResult = confirm("Emin misin_?");
    console.log("Delete called");
    if( tmpResult ) {
        $.ajax({
            url: 'DeleteRecord.php',
            type: 'POST',
            data: "ProductionId=" + ProductionId,
            success: function (result) {
                $("#resultofSave").html(result);

                ProductionTable();
            }
        });
    }
    else
        alert("Hayırdır bro!");
}

function ProductionGetStockRecords() {
    $.ajax({
        url: '/ozsu/get_stock_records.php',
        type: 'POST',
        data: $("#ProductionForm").serialize(),
        success: function(result) {
            $("#radioButtonsContainer").html(result);
        },
        error: function(hata) {
            console.log("Failed to post StockId.");
            console.log(hata);
        }
    });
}
/*************************** productions **********************/
/*************************** sales **********************/
function SaleTable() {
    $.ajax({
        url: '/ozsu/Sale/SaleTable.php',
        success: function(result) {
            $("#SaleTableDiv").html(result);
        }
    });
}
function SaleForm() {
    $.ajax({
        url: '/ozsu/Sale/SaleForm.php',
        success: function(result) {
            $("#SaleFormDiv").html(result);
        },
        complete: function (){
            SaleTable();
        }
    });
}

function SaveSaleRecord() {//bu fonksiyon forma eklenecek
    console.log($("#SaleForm").serialize());
    event.preventDefault();

    $.ajax({
        url: 'SaveRecord.php',
        type: 'POST',
        data: $("#SaleForm").serialize(),//bu kısmı değiştir
        success: function(result) {
            console.log("Save success");
            SaleForm()

        },
        error: function(hata) {
            console.log("Save error");
            console.log(hata);
        }
    });
}
function DeleteSale(SaleId) {
    var tmpResult = confirm("Emin misin_?");
    console.log("Delete called");
    if( tmpResult ) {
        $.ajax({
            url: 'DeleteRecord.php',
            type: 'POST',
            data: "SaleId=" + SaleId,
            success: function (result) {
                $("#resultofSave").html(result);

                SaleTable();
            }
        });
    }
    else
        alert("Hayırdır bro!");
}


/*************************** sales **********************/
/*************************** stocks **********************/
function StockTable() {
    $.ajax({
        url: '/ozsu/Stock/StockTable.php',
        success: function(result) {
            $("#StockTableDiv").html(result);
        }
    });
}
function StockForm() {
    $.ajax({
        url: '/ozsu/Stock/StockForm.php',
        success: function(result) {
            $("#StockFormDiv").html(result);
        },
        complete: function (){
            StockTable();
        }
    });
}

function SaveStockRecord() {
    $.ajax({
        url: 'SaveRecord.php',
        type: 'POST',
        data: $("#StockForm").serialize(),
        success: function(result) {
            $("#resultofSave").html(result);
            StockForm();
        },
        error: function(hata) {
            console.log(hata);
        }
    });
}
function DeleteStock(StockId) {
    var tmpResult = confirm("Emin misin_?");
    console.log("Delete called");
    if( tmpResult ) {
        $.ajax({
            url: 'DeleteRecord.php',
            type: 'POST',
            data: "StockId=" + StockId,
            success: function (result) {
                $("#resultofSave").html(result);

                StockTable();
            }
        });
    }
    else
        alert("Hayırdır bro!");
}
function GetEmployees() {
    $.ajax({
        url: '/ozsu/get_employee_records.php',
        type: 'POST',
        data: $("#StockForm").serialize(),
        success: function(result) {
            $("#radioButtonsContainer").html(result);
        },
        error: function(hata) {
            console.log("Failed to post StockId.");
            console.log(hata);
        }
    });
}


/*************************** stocks **********************/
/*************************** report **********************/


function ReportForm() {
    $.ajax({
        url: '/ozsu/Report/ReportForm.php',
        success: function (result) {
            $("#ReportFormDiv").html(result);
        },
        complete: function () {
            EmployeeInfoTable(selectedEmployeeId);
        }
    });
}
function EmployeeInfoTable(EmployeeId) {
    $.ajax({
        url: '/ozsu/Report/EmployeeInfoTable.php',
        type: 'GET',
        data: { EmployeeId: EmployeeId },
        success: function (result) {
            $("#EmployeeInfoTableDiv").html(result);
        }
    });
}
function InfirmaryInfoTable(EmployeeId) {
    $.ajax({
        url: '/ozsu/Report/InfirmaryInfoTable.php',
        type: 'GET',
        data: { EmployeeId: EmployeeId },
        success: function (result) {
            $("#InfirmaryInfoTableDiv").html(result);
        }
    });
}
/*************************** report **********************/

/*************************** department selection **********************/
function checkDepartment() {
    var departmentSelect = document.getElementById("departmentSelect");
    var selectedValue = departmentSelect.options[departmentSelect.selectedIndex].value;

    if (selectedValue === "Admin") {
        document.getElementById("registerForm").action = "index1.php";
    }
}