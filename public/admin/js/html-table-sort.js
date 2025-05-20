

$(function() {
$('.sortTableIcon').html('<i class="fas fa-caret-up up-arrow tbl-col-active"></i><i class="fas fa-caret-down down-arrow tbl-col-deactive"></i>');
 $("#table_sort th i").attr('style', 'color:#c1b9b9 !important');
 });



function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("table_sort");
  switching = true;
  //Set the sorting direction to ascending:
  dir = "asc";

  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      /*check if the two rows should switch place,
      based on the direction, asc or desc:*/
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch= true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      //Each time a switch is done, increase this count by 1:
      switchcount ++;
    } else {
      /*If no switching has been done AND the direction is "asc",
      set the direction to "desc" and run the while loop again.*/
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}

   $('#table_sort th').click(function(){
     $(this).next('ul').slideToggle('500');
     //$(this).find('i').toggleClass('fa-caret-up fa-caret-down');
     $("#table_sort th i").attr('style', 'color:#c1b9b9 !important');
     $(this).find('.up-arrow').toggleClass('tbl-col-active tbl-col-deactive');
     $(this).find('.down-arrow').toggleClass('tbl-col-deactive tbl-col-active');
     $(this).find('.tbl-col-active').removeAttr( 'style' );

   });