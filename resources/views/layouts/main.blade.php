<!DOCTYPE html> 
<html lang="en"> 
<head>
 <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">   
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
 <link rel="stylesheet"  href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"></style>
 <script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
 <script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>


 @yield('container')

  <script>
        $(document).ready(function(){
            $('#minhaTabela').dataTable();
        });
  </script>
  <div class="modal fade" id="modalContatos" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Calculated</h4>
            </div>
            <div class="modal-body">
              <div id="pessoas_contato">
       
              </div>
            </div>
          </div>
        </div>
   </div>
       
       <div class="modal fade" id="modalDocs" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Documentation</h4>
            </div>
            <div class="modal-body">
              <div id="documentacao">
       
              </div>
            </div>
          </div>
         </div>
       </div>
       


  <script src="../appfiles/plugins/jQuery/jQuery-2.1.4.min.js"></script>
     <!-- Bootstrap 3.3.5 -->
     <script src="../appfiles/bootstrap/js/bootstrap.min.js"></script>
     <!-- DataTables -->
     <script src="../appfiles/plugins/datatables/jquery.dataTables.min.js"></script>
     <script src="../appfiles/plugins/datatables/dataTables.bootstrap.min.js"></script>
     <!-- SlimScroll -->
     <script src="../appfiles/plugins/slimScroll/jquery.slimscroll.min.js"></script>
     <!-- FastClick -->
     <script src="../appfiles/plugins/fastclick/fastclick.min.js"></script>
     <!-- AdminLTE App -->
     <script src="../appfiles/dist/js/app.min.js"></script>
     <!-- AdminLTE for demo purposes -->
     <script src="../appfiles/dist/js/demo.js"></script>

  </body>
</html>