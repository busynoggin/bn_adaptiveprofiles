(function(w, d, config, undefined) {

	function getScreenWidth() {
		return screen.width;
	}

	function setScreenWidthInCookie(screenWidth) {
			document.cookie = 'screenWidth=' + screen.width + '; path=/';
	}

	function apply() {
		var screenWidth = getScreenWidth();
		setScreenWidthInCookie(screenWidth);

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

	apply();

}(this, this.document, BN_ADAPTIVE_PROFILES_CONFIG));

