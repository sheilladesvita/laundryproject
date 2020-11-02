// $(function initMap() {
// 	const als = { lat: -7.041314, lng: 107.550075 };

// 	const map = new google.maps.Map(document.getElementById("map"), {
// 		zoom: 4,
// 		center: als,
// 	});

// 	const marker = new google.maps.Marker({
// 		position: als,
// 		map: map,
// 	});
// });

function initMap() {
	// The location of Uluru

	const uluru = { lat: -7.042292, lng: 107.549682 };
	// The map, centered at Uluru
	const map = new google.maps.Map(document.getElementById("map"), {
		zoom: 4,
		center: uluru,
	});
	// The marker, positioned at Uluru
	const marker = new google.maps.Marker({
		position: uluru,
		map: map,
	});
}
