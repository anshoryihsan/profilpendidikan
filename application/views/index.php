<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Book Display</title>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.js"></script>
    </head>
    <body>
    <h1>Book List</h1>
    <table id="book-table">
      <thead>
      <tr><td>Book Title</td><td>Book Price</td><td>Book Author</td><td>Rating</td><td>Publisher</td></tr>
      </thead>
      <tbody>
      </tbody>
    </table>
    <script type="text/javascript">
$(document).ready(function() {
    $('#book-table').DataTable();
});
</script>
    </body>
</html>
