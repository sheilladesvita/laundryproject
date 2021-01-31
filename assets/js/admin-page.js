$(document).ready(function () {
	var $addServiceBtn = $("#add-service");
	var $addPromoBtn = $("#add-promo");
	var $serviceForm = $("#service-form");
	var $promoForm = $("#promo-form");

	$addServiceBtn.bind("click", function (event) {
		event.preventDefault();

		if ($addPromoBtn.attr("aria-expanded") == "true") {
			$addPromoBtn.attr("aria-expanded", "false");
			$promoForm.removeClass("show");
		}
	});

	$addPromoBtn.bind("click", function (event) {
		event.preventDefault();

		if ($addServiceBtn.attr("aria-expanded") == "true") {
			$addServiceBtn.attr("aria-expanded", "false");
			$serviceForm.removeClass("show");
		}
	});

	// Initialize datatable
	$("#service-table").DataTable({
		paging: false,
		columnDefs: [{ orderable: false, targets: 3 }],
		// bLengthChange: false,
		bInfo: false,
	});
	$("#promo-table").DataTable({
		paging: false,
		columnDefs: [{ orderable: false, targets: 3 }],
		// bLengthChange: false,
		bInfo: false,
	});
	$('#serviceUpdateModal').on('show.bs.modal', function (e) {
		var id = $(e.relatedTarget).data('id');
		var nama = $(e.relatedTarget).data('nama');
		var harga = $(e.relatedTarget).data('harga');
		var kategori = $(e.relatedTarget).data('kategori');

		$(e.currentTarget).find('input[name="id_serviceitem"]').val(id);
		$(e.currentTarget).find('input[name="nama_serviceitem"]').val(nama);
		$(e.currentTarget).find('input[name="harga"]').val(harga);
		$(e.currentTarget).find('select[name="service"]').val(kategori);
	});
	$('#promoDetailModal').on('show.bs.modal', function (e) {
		var kode = $(e.relatedTarget).data('kode');
		var gambar = $(e.relatedTarget).data('gambar');
		var desc = $(e.relatedTarget).data('desc');

		$(this).find("#kode_promo").text("#"+kode);
		$(this).find("#gambar").attr('src',gambar);
		$(this).find("#desc").text(desc);
	});
	$('.orderDetail').click(function(){
		var order = $(this).attr('data-id');
		var customer = $(this).attr('data-customer');

		$.ajax({
			url: "admin/detail_order",
			method: "POST",
			data: {
				order:order,
				customer:customer
			},
			success: function(data){
				$('#detail_result').html(data);
				$('#orderDetailModal').modal('show');
			}
		});
	});
});

function onlyNumberKey(evt) {
	var ASCIICode = evt.which ? evt.which : evt.keyCode;
	if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57)) return false;
	return true;
}

function deleteConfirm(url){
	$('#btn-delete').attr('href', url);
	$('#deleteModal').modal();
}
