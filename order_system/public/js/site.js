$(document).ready(function(){
  $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
  });

//Start materializecss functions
// the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
$('.modal-trigger').leanModal();

$('select').material_select();

$('.scrollspy').scrollSpy();
//Stop materializecss functions

/*Currently not in use
var searchList = $("\
<li>Hello</li>\
");
$('#searchQuery').keyup(function(){
  var q = $(this).val();
  //remove whitespace in query
  q = q.replace(/\s/g,'');
  var data = {"query": q, };
  if (q.length == 0 || q == " ") {
    return false;
  }
  var url = "customer/search";
  //POST token
  $.post(url, data, function(res){
    console.log(res);
  });
});
*/

//Items currently on order
var orderdata = [];
//Running order total
var orderTotal = 0;
//Grabn items from
$('.additem').click(function(){
  //Take information from DOM and add to variables
  var $id = parseInt($(this).closest('tr').find(".itemid").html());
  var $item = $(this).closest('tr').find(".menuitem").html();
  var $price = $(this).closest('tr').find(".itemprice").html();
  var $price = $price.replace('$', '');
  var $quantity = 1;
  //Bool value is for later checking, this avoids duplicate
  var updated = false;
  //loops through the current order and checks for an item with same ID
  //If found it will update if not it will continue through to next if.
  // for (var i = 0; i < orderdata.length; i++) {
  //   if ($id == orderdata[i].id){
  //     orderdata[i].quantity += 1;
  //     //sets bool for if order has been updated as apposed to new
  //     updated = true;
  //   }
  // }
  updated = addQuantity($id);
  //If the order has not been updated and new it will add the object to the array
  if (!updated){
    //Push data to json array forementioned
    orderdata.push({"id": $id, "item": $item, "quantity": $quantity, "price": $price});
  }
  //return value to false for safe measure
  updated = false;
  //Draw the current order table (function below)
  drawTable(orderdata);
});

//Take item id and add quanity by one increment
function addQuantity(id){
  for (var i = 0; i < orderdata.length; i++) {
    if (id == orderdata[i].id){
      orderdata[i].quantity += 1;
      //sets bool for if order has been updated as apposed to new
      return true;
    };
  };
};

//Take item id and take away by one increment
function minusQuanity(id){
  for (var i = 0; i < orderdata.length; i++) {
    if (id == orderdata[i].id){
      orderdata[i].quantity -= 1;
      drawTable(orderdata);
    }
    if (orderdata[i].quantity < 1) {
      return true;
    }
  };
};

function updateTotalPrice() {

};

//draws the order table !!not in use currently
function drawTable(data) {
  //empty the dom to avoid duplicate entries
  $('#orderContent').empty();
  for (var i = 0; i < data.length; i++) {
    //draw each row based on json data
    drawOrderRow(data[i]);
  };
};

//draws the row for the order
function drawOrderRow(rowData) {
  var row = $("<tr class='itemRow'/>");
  $('#current-order').append(row);
  row.append($("<td class='itemid' style='display: none'>" + rowData.id + "</td>"));
  row.append($("<td>" + rowData.item + "</td>"));
  row.append($("<td><a class='minusItem btn-floating btn-small waves-effect waves-light red'><i class='mdi-content-remove'></i></a>&nbsp;" +
  "<span class='itemQuant'>" + rowData.quantity + "</span>" +
  "&nbsp;<a class='plusItem btn-floating btn-small waves-effect waves-light red'><i class='material-icons'>add</i></a></td>"));
  row.append($("<td class='itemAmt'>" + (rowData.price * rowData.quantity) + " </td>"));
  row.append($("<td><a href='#' class='deleteItem'> <i class='material-icons'>delete</i></a></td>"));
};
//<a class="btn-floating btn-small waves-effect waves-light red"><i class="material-icons">add</i></a>
//Delete menu item from list
$('.deleteItem').click(function(){
  alert('Are you sure you want to remove this item?');
  console.log('Are you sure you want to remove this item?');
});

//Checks minus button on certain items and takes items away from quanity
$('#current-order').on("click", ".minusItem", function(){
  var $id = parseInt($(this).closest('tr').find(".itemid").html());
  var $quanity = parseInt($(this).closest('tr').find(".itemQuant ").html());
  if ($quanity < 1){
    //do nothing
    //will add removal of element later
  } else {
    minusQuanity($id);
  }

    //$(this).closest('tr').remove();

  drawTable(orderdata);
});
//Checks plus button on certain items and adds items to quanity

$('#current-order').on("click", ".plusItem", function(){
  var $id = parseInt($(this).closest('tr').find(".itemid").html());
  addQuantity($id);
  drawTable(orderdata);

});

    var frm = $('#action');
    frm.submit(function (ev) {
        $.ajax({
            type: frm.attr('method'),
            url: frm.attr('action'),
            data: { details: frm.serialize(), order:  /global orderdata / },
            success: function (data) {
                alert('ok');
            }
        });

        ev.preventDefault();
    });
    
});