// Call the dataTables jQuery plugin
$(document).ready(function() {
  $("#dataTable").DataTable();
});

//Panjang entries
$("#dataTable").dataTable({
  lengthMenu: [[5, 10, 25, 50, 100, -1], [5, 10, 25, 50, 100, "All"]]
});
