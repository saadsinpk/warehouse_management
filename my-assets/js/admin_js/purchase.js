// Add input field for new Invoice 
//var count = 2;
//var limits = 500;
// function addPurchaseInputField(divName){
//     //var param = "$(this).attr(name)";
//      if (count == limits)  {
//           alert("You have reached the limit of adding " + count + " inputs");
//      }
//      else {
//           var newdiv = document.createElement('tr');
//           var tabin="product_name_"+count;
//           newdiv.innerHTML ="<td><select name='product_id[]' onkeypress='purchase_productList(" + count + ");' required class='form-control product_id_" + count + "' placeholder='Type product name' id='product_name_" + count + "' ></select></td><td><input type='text' id='' class='form-control text-right stock_ctn_" + count + "' placeholder='Stock' readonly/></td><td class='text-right'><input type='text' name='cartoon[]' onkeyup='quantity_calculate(" + count + ");' onchange='quantity_calculate(" + count + ");' required  id='qty_item_" + count + "' class='form-control text-right' placeholder='0.00' value='' min='0'/></td><td class='text-right'><input type='text' name='cartoon_item[]' value='' readonly='readonly' id='ctnqntt_" + count + "' class='form-control ctnqntt" + count + " text-right' placeholder='Item/Cartoon'/></td><td class='text-right'><input type='text' name='product_quantity[]' readonly='readonly' id='dueAmmount" + count + "' class='form-control text-right' placeholder='0.00' /></td><td><input type='text' name='product_rate[]' onkeyup='quantity_calculate(" + count + ");' onchange='quantity_calculate(" + count + ");' id='price_item_" + count + "' class='form-control price_item" + count + " text-right' placeholder='0.00' value='' min='0'/></td><td class='text-right'><input class='form-control total_price text-right' type='text' name='total_price[]' id='total_price_" + count + "' value='0.00' tabindex='-1' readonly='readonly' /></td><td><button style='text-align: right;' class='btn btn-danger red' type='button' value='Delete' onclick='deleteRow(this)' >Delete</button></td>";
//           document.getElementById(divName).appendChild(newdiv);
//           document.getElementById(tabin).focus();
//           count++;
//      }
// }
function addPurchaseInputField(divName) {
    var row = $("#purchaseTable tbody tr").length;
    var count = row + 1;
//    alert(divName);
    var limits = 500;
    if (count == limits) {
        alert("You have reached the limit of adding " + count + " inputs");
    } else {
        productLoad(count);
        var newdiv = document.createElement('tr');
        var tabin = "product_name_" + count;
        newdiv.innerHTML = "<td class='span3 supplier_load_" + count + "'></td>\n\
                            <td><input type='text' id='' class='form-control text-right stock_ctn_" + count + "' placeholder='Stock' readonly/></td>\n\
                            <td class='text-right'><input type='text' name='cartoon[]' onkeyup='quantity_calculate(" + count + ");' onchange='quantity_calculate(" + count + ");' required  id='qty_item_" + count + "' class='form-control text-right' placeholder='0.00' value='' min='0'/></td>\n\
                            <td class='text-right'><input type='text' name='cartoon_item[]' value='' readonly='readonly' id='ctnqntt_" + count + "' class='form-control ctnqntt" + count + " text-right' placeholder='Item/Cartoon'/></td>\n\
                            <td class='text-right'><input type='text' name='product_quantity[]' readonly='readonly' id='total_qntt_" + count + "' class='form-control text-right' placeholder='0.00' /></td>\n\
                            <td><input type='text' name='product_rate[]' onkeyup='quantity_calculate(" + count + ");' onchange='quantity_calculate(" + count + ");' id='price_item_" + count + "' class='form-control price_item" + count + " text-right' placeholder='0.00' value='' min='0'/></td>\n\
                            <td class='text-right'><input class='form-control total_price text-right' type='text' name='total_price[]' id='total_price_" + count + "' value='0.00' tabindex='-1' readonly='readonly' /></td>\n\
                            <td><button style='text-align: right;' class='btn btn-danger red' type='button' value='Delete' onclick='deleteRow(this)' >Delete</button></td>";
        document.getElementById(divName).appendChild(newdiv);
        document.getElementById(tabin);
        count++;
    }
}
//function addPurchaseInputField(e) {    
//    var t = $("tbody#addPurchaseItem tr:first-child").html();
//    count == limits ? alert("You have reached the limit of adding " + count + " inputs") : $("tbody#addPurchaseItem").append("<tr>" + t + "</tr>")
//}

//Calcucate Invoice Add Items

function quantity_calculate(item)
{
    var qnty = $("#qty_item_" + item).val();
    //stockLimit(item,qnty);
    var cnt = $(".ctnqntt" + item).val();
    var rate = $("#price_item_" + item).val();

    var total_qnty = qnty * cnt;

    $("#total_qntt_" + item).val(total_qnty);
    var total_amnt = total_qnty * rate;
    $("#total_price_" + item).val(total_amnt);
    //alert(qnty);
    calculateSum();
}

function claculateItemPrice(item){
    var price_per_item = $('#item_price_' + item).val();
    var rate = $("#price_item_" + item).val();
    var per_carton = $("#total_qntt_" + item).val();

    var total_item_price = price_per_item * rate * per_carton;
    $("#total_price_" + item).val(total_item_price);
    

    // $("#grandTotal").val(gTotal)
    calculateSum();
    invoice_paidamount();
}


function calculateSum() {
    var e = 0;
    $(".total_price").each(function () {
        isNaN(this.value) || 0 == this.value.length || (e += parseFloat(this.value))
    }),
            $("#grandTotal").val(e.toFixed(2))
}

function deleteRow(e) {
    var t = $("#purchaseTable > tbody > tr").length;
    if (1 == t)
        alert("There only one row you can't delete.");
    else {
        var a = e.parentNode.parentNode;
        a.parentNode.removeChild(a)
    }
    calculateSum()
}

$("body").on("keyup change", ".qty_calculate", function () {
    var cartoon = $(this).val();
    var item = $(this).parent().next().children().val();
    
    // set quantity
    $(this).parent().next().next().children().val(cartoon * item);

    var rate = $(this).parent().next().next().next().children().val();
    //set total
    $(this).parent().next().next().next().next().children().val(rate * cartoon * item);
    calculateSum();
});


