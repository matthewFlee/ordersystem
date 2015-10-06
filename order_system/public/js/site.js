$(document).ready(function(){
  $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
  });
// the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
$('.modal-trigger').leanModal();

$('select').material_select();

$('.scrollspy').scrollSpy();

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

//Items currently on order
var orderdata = [];
//Running order total
var orderTotal = 0;
//Grabn items from
$('.additem').click(function(){
  var $id = $(this).closest('tr').find(".itemid").html();
  var $item = $(this).closest('tr').find(".menuitem").html();
  var $price = $(this).closest('tr').find(".itemprice").html();
  var $price = $price.replace('$', '');
  var $quantity = 1;
  console.log($id);
  console.log($item);
  console.log($price);
  //Push data to json array forementioned
  orderdata.push({"id": $id, "item": $item, "quantity": $quantity, "price": $price});
  console.log(orderdata);
  drawOrderRow({"id": $id, "item": $item, "quantity": $quantity, "price": $price});
});


//draws the order table !!not in use currently
function drawTable(data) {
  for (var i = 0; i < data.length; i++) {
    drawOrderRow(data[i]);
  };
};

//draws the row for the order
function drawOrderRow(rowData) {
  var row = $("<tr />");
  $('#current-order').append(row);
  row.append($("<td style='display: none'>" + rowData.id + "</td>"));
  row.append($("<td>" + rowData.item + "</td>"));
  row.append($("<td> <input placeholder='Quantity' id='item' type='text' class='validate' value='" + rowData.quantity +"'></td>"));
  row.append($("<td>" + rowData.price + "</td>"));
  row.append($("<td><a href='#' class='deleteItem'> <i class='material-icons'>delete</i></a></td>"));
};

//Delete menu item from list
$('.deleteItem').click(function(){
  alert('Are you sure you want to remove this item?');
  console.log('Are you sure you want to remove this item?');
});

});
