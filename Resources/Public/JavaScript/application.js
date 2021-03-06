var BN_ADAPTIVE_PROFILES = BN_ADAPTIVE_PROFILES || {};

(function(w, d, config, undefined) {

	function debounce(func, wait, immediate) {
		var timeout;
		return function() {
			var context = this;
			var args = arguments;
			var later = function() {
				timeout = null;
				if (!immediate) {
					func.apply(context, args);
				}
			};
			var callNow = immediate && !timeout;
			clearTimeout(timeout);
			timeout = setTimeout(later, wait);
			if (callNow) {
				func.apply(context, args);
			}
		};
	}

	function calculateScreenWidth() {
		var width;
		// If the device cannot be rotated, lets assume desktop and use full screen width
		if (typeof window.orientation === "undefined") {
			if (config.sizingMode === 'window') {
				width = w.innerWidth || d.documentElement.clientWidth || d.body.clientWidth || 0;
				window.onresize = debounce(function() {
					width = w.innerWidth || d.documentElement.clientWidth || d.body.clientWidth || 0;
					setScreenWidthInCookie(width);
				}, 250);
			} else {
				width = w.screen.width || 0;
			}
		} else {
			// If the device can be rotated, lets assume mobile/tablet and a browser that always operates full width.
			// Using browser width takes orientation into account so it is more accurate
			width = w.innerWidth || d.documentElement.clientWidth || d.body.clientWidth || 0;

			// When the device orientation changes, reload page if necessary
			window.onorientationchange = function() {
				window.setTimeout(function() {
					apply();
				}, 500);
			};
		}

		return width;
	}

	function getCookie(name) {
		var nameEQ = name + "=";
		var ca = document.cookie.split(';');
		for(var i=0;i < ca.length;i++) {
			var c = ca[i];
			while (c.charAt(0)==' ') c = c.substring(1,c.length);
			if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length,c.length);
		}

		return null;
	}

	function setScreenWidthInCookie(screenWidth) {
		document.cookie = 'screenWidth=' + screenWidth + '; path=/';
	}

	function apply() {
		var forcedProfile = getCookie('forcedProfile');
		if (!forcedProfile) {
			var screenWidth = calculateScreenWidth();
			var storedScreenWidth = parseInt(getCookie('screenWidth'), 10);

			// If the screen width has not changed, there is no chance of reloading.
			if (screenWidth !== storedScreenWidth) {
				setScreenWidthInCookie(screenWidth);

				// If there is not a stored screen width, cookies are disabled and we should probably give up.
				storedScreenWidth = parseInt(getCookie('screenWidth'), 10);
				if (!storedScreenWidth) {
					return;
				}


				// Loop over each profile until screen width matches
				for (var i=0; i<config.profiles.length; i++) {
					var profile = config.profiles[i];
					if ((profile.minimumWidth < screenWidth) && (screenWidth <= profile.maximumWidth)) {
						if (!profile.isCurrentProfile) {
							location.reload(true);
						}

						// We've found the target profile. No need to continue
						break;
					}
				}
			}
		}
	}

	apply();

}(this, this.document, BN_ADAPTIVE_PROFILES.config));

BN_ADAPTIVE_PROFILES.reloadWithCalculatedProfile = function() {
	document.cookie = 'forcedProfile=; path=/';
	location.reload(true);
};

BN_ADAPTIVE_PROFILES.reloadWithForcedProfile = function(profile) {
	document.cookie = 'forcedProfile=' + profile + '; path=/';
	location.reload(true);
};