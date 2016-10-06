<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
  </head>
  <body>
    <div class="container">
      <h1>Usuarios</h1>
      <table class="table" id="users">
        <thead>
          <tr>
            <td>ID</td>
            <td>Nome</td>
            <td>Email</td>
          </tr>
        </thead>
        <tbody>
          @foreach($users as $user)
          <tr>
            <td>{{ $user->id }}<td>
            <td>{{ $user->name }}<td>
            <td>{{ $user->email }}<td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.js" charset="utf-8"></script>
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js" charset="utf-8"></script>
    <script type="text/javascript">
    $(document).ready(function(){
      $('#users').DataTable();
    });
    </script>
  </body>
</html>
