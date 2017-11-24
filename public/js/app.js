var gastoId = 0;


$(".editbtn").find("i").on("click", function(event) {
	event.preventDefault();

	var descricaoGasto = event.target.parentNode.parentNode.parentNode.childNodes[1].textContent;
	var valorGasto = event.target.parentNode.parentNode.parentNode.childNodes[3].textContent;
	var descontoGasto = event.target.parentNode.parentNode.parentNode.childNodes[5].textContent;
	var multaGasto = event.target.parentNode.parentNode.parentNode.childNodes[7].textContent;

	gastoId = event.target.parentNode.parentNode.parentNode.dataset['gastoid'];

	$("#descricao-modal").val(descricaoGasto);
	$("#valor-modal").val(valorGasto);
	$("#desconto-modal").val(descontoGasto);
	$("#multa-modal").val(multaGasto);

	$("#edit-modal").modal();
});

$("#modal-save").on("click", function() {
	$.ajax({
		type: 'POST',
		url: urlEdit,
		data: 
		{
			descricao: $("#descricao-modal").val(),
			valor: $("#valor-modal").val(),
			desconto: $("#desconto-modal").val(),
			multa: $("#multa-modal").val(),
			gastoId: gastoId,
			_token: token
		}
	})
	.done(function(msg) {
		//console.log(JSON.stringify(msg));
	});
});

