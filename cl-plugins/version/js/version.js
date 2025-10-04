
function getLatestVersion() {

	console.log("[INFO] [PLUGIN VERSION] Getting list of versions of Cloudsuo.");

	$.ajax({
		url: "https://version.cloudsuo.com",
		method: "GET",
		dataType: 'json',
		success: function(json) {
			console.log("[INFO] [PLUGIN VERSION] Request completed.");

			// Constant CLOUDSUO_BUILD is defined on variables.js
			if (json.stable.build > CLOUDSUO_BUILD) {
				$(".current-version").hide();
				$(".new-version").show();
			}
		},
		error: function(json) {
			console.log("[WARN] [PLUGIN VERSION] There is some issue to get the version status.");
		}
	});
}

getLatestVersion();