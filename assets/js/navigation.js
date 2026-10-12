/**
 * GoLogic Media — mobile navigation toggle
 */
(function () {
	document.addEventListener('DOMContentLoaded', function () {
		var toggle = document.querySelector('.gologic-menu-toggle');
		var nav = document.querySelector('.gologic-nav');
		if (!toggle || !nav) return;

		toggle.addEventListener('click', function () {
			var expanded = toggle.getAttribute('aria-expanded') === 'true';
			toggle.setAttribute('aria-expanded', String(!expanded));
			nav.classList.toggle('toggled');
		});

		// Close the menu when a link is tapped.
		nav.querySelectorAll('a').forEach(function (link) {
			link.addEventListener('click', function () {
				nav.classList.remove('toggled');
				toggle.setAttribute('aria-expanded', 'false');
			});
		});
	});
})();
