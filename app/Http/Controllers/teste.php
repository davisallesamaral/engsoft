<!DOCTYPE html>
<html lang="en">
<head>
<title>Example Modal Events</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function(){
        $("#btn").click(function(){
            $.post("processar.php", //Required URL of the page on server
               { // Os dados de envio com o pedido   }, 
         function(response,status){ // Required Callback Function
             $("#bingo").html(response);//"response" receives - whatever written in echo of above PHP script.
             $("#form")[0].reset();
          });
         });

         $("#btn2").click(function(){
            $.post("processar2.php", //Required URL of the page on server
               { // // Os dados de envio com o pedido
               },
         function(response,status){ // Required Callback Function
             $("#bingo").html(response);//"response" receives - whatever written in echo of above PHP script.
             $("#form")[0].reset();
          });
         });
   });
</script>
<style type="text/css">
    .bs-example{
            margin: 20px;
    }
</style>
</head>
<body> 
<button type="button" id="btn" class="btn btn-info" data-toggle="modal" data-target="#myModal">Send Data</button>
<button type="button" id="btn2" class="btn btn-info" data-toggle="modal" data-target="#myModal">Send Data2</button>
<div class="modal fade" id="myModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">MyModal</h4>
      </div>
      <div class="modal-body">
        <div id="bingo"></div>
      </div>
    </div>
   </div>
</div>
</body>
</html>