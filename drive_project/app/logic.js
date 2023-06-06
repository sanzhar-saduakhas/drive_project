var checkbox = document.getElementById('chkTest');
if (checkbox){
	checkbox.addEventListener('change', function () {
		if (checkbox.checked && checkbox) {
			document.getElementById('price').innerText = "Сумма Недвижимости";
		} else {
			document.getElementById('price').innerText = "Сумма Авто";
		}
	})
} else {
	console.log('Error searching for an element with given ID');
}

$('#button1').click(() => {
	if ($('name').length && $('national_id').length && $('address').length && $('price').length && $('phone').length) {
		document.location = 'processing.html'
	}
})
