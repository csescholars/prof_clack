function fill_headers(data) {
	
	var i = 0
	$('.carousel-caption').each(function() {

		$(this).children('h1').html(data[i][0]);
		$(this).children('p').html(data[i][1]);

		if (data[i][2] != undefined) {

			$(this).children('a').html(data[i][2]);
			$(this).children('a').attr('href', data[i][3]);
		}
		else {

			$(this).children('a').hide();
		}
		i++;
	})

	var content = document.getElementById('main_content');
	for (i; i + 1 < parseInt(data.length); i++) {

		var header = document.createElement('h1');
		var header_banner = document.createElement('div');
		var paragraph = document.createElement('p');
		var button = document.createElement('a');
		var end = document.createElement('br');
		
		header.appendChild(document.createTextNode(data[i][0]));
		header_banner.className = "header_banner";
		paragraph.appendChild(document.createTextNode(data[i][1]));


		if (data[i][2] != undefined) {

			button.appendChild(document.createTextNode(data[i][2]));
			button.href = data[i][3];
			button.className = "btn btn-primary";
		
			paragraph.appendChild(document.createElement('br'));
			paragraph.appendChild(document.createElement('br'));
			paragraph.appendChild(button);
		}

		content.appendChild(header);
		content.appendChild(header_banner);
		content.appendChild(paragraph);
		content.appendChild(end);
	}

	$('.main_content h1').addClass('extra_title');
	$('.main_content p').addClass('extra_content');
}