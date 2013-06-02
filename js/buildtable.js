function build_table(table_data)
{
	var the_table = document.createElement('table');

	the_table.className = "table";
	
	// Note, don't forget the var keyword!
	var tr, td, th;

	//Set table column headers
	tr = document.createElement('tr');
	for (var i = 0; i < parseInt(table_data[0].length); i++) {
	    th = document.createElement('th');
	    th.appendChild(document.createTextNode(table_data[0][i]));
	    tr.appendChild(th);
	}
    the_table.appendChild(tr);

    //Set table data
	for (var j = 1; j < parseInt(table_data.length); j++)
	{
	    tr = document.createElement('tr');
		for (var i = 0; i < parseInt(table_data[j].length); i++) {
		    td = document.createElement('td');
		    td.appendChild(document.createTextNode(table_data[j][i]));
    	    tr.appendChild(td);
		}
	    the_table.appendChild(tr);
	}
	
	document.getElementById('member_table').appendChild(the_table);

	//Sort table
    $('#member_table').sortTable({
          onCol: 1,
          keepRelationships: true
    });

    $('#member_table th').each(function() {

    	$(this).click(function() {

    		//Get column number
    		var col = $(this).prevAll('th').size() + 1;

    		//Sort table
		    $('#member_table').sortTable({
		        onCol: col,
	            keepRelationships: true
		    });
    	});
    });
}