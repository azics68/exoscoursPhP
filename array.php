var tableColumn = resultArray.length;

   for (var i = 1; i < tableColumn; i++) {

 var tableRow = tableColumn.cells;

   for (var j = 1 ; j < tableRow.length; j++){
       if ( j % 2 == 1 ){
            tableRow[j].style.backgroundcolor = "blue";
                        }

          }
 }
