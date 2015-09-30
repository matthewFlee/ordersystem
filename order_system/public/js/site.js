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
  var token = document.getElementById('token').value;
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
  /*$.ajax({
    type: "Post",
    url: "/customer/search",
    headers: {'X-CSRF-TOKEN': token},
    data: data,
    dataType: "json",
    //beforeSend: function(data){console.log(data)},
    success: function(res){
      //$("#searchCustomerList").append(searchList);
      console.log(res);
    }
  });*/
});


});
