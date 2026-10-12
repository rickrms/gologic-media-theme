/**
 * GoLogic Media — chatbot popup widget
 */
(function () {
	document.addEventListener('DOMContentLoaded', function () {
		var btn = document.getElementById('gologic-chat-btn');
		var panel = document.getElementById('gologic-chat-panel');
		var startBtn = document.getElementById('gologic-chat-start');
		var form = document.getElementById('gologic-chat-form');
		var success = document.getElementById('gologic-chat-success');
		if (!btn || !panel) return;

		function setOpen(open) {
			btn.classList.toggle('open', open);
			panel.classList.toggle('open', open);
			btn.setAttribute('aria-expanded', String(open));
		}

		btn.addEventListener('click', function () {
			setOpen(!panel.classList.contains('open'));
		});

		// Close on Escape.
		document.addEventListener('keydown', function (e) {
			if (e.key === 'Escape') setOpen(false);
		});

		if (startBtn && form) {
			startBtn.addEventListener('click', function () {
				form.classList.add('show');
				startBtn.style.display = 'none';
				var first = form.querySelector('input');
				if (first) first.focus();
			});

			form.addEventListener('submit', function (e) {
				e.preventDefault();
				var data = new FormData(form);
				data.append('action', 'gologic_chat_submit');
				data.append('nonce', (typeof gologicChat !== 'undefined' ? gologicChat.nonce : ''));

				var submitBtn = form.querySelector('button[type="submit"]');
				var original = submitBtn.textContent;
				submitBtn.textContent = 'Sending…';
				submitBtn.disabled = true;

				fetch((typeof gologicChat !== 'undefined' ? gologicChat.ajaxUrl : '/wp-admin/admin-ajax.php'), {
					method: 'POST',
					body: data,
					credentials: 'same-origin'
				})
				.then(function (r) { return r.json(); })
				.then(function (res) {
					if (res && res.success) {
						form.classList.remove('show');
						success.classList.add('show');
					} else {
						submitBtn.textContent = original;
						submitBtn.disabled = false;
						alert((res && res.data && res.data.message) || 'Something went wrong. Please call us instead.');
					}
				})
				.catch(function () {
					submitBtn.textContent = original;
					submitBtn.disabled = false;
					alert('Something went wrong. Please call us instead.');
				});
			});
		}
	});
})();
