$(function () {
    Map.options.scrollwheel = false; // Esto desaciva el zoom cuando se hace scroll
	Map.coords = {
		coords: {
		lat: 19.5297168,
		lng: -96.8978049,
	},
	};
	Map.init( $$('#map'), function (map) {
		// Do something here whe your maps its loaded
	});
});