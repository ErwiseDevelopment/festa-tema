(function () {
	'use strict';

	document.addEventListener('DOMContentLoaded', function () {
		setupNavScroll();
		setupMobileMenu();
		setupSmoothAnchors();
		setupReveal();
		setupParallax();
		setupTickets();
		setupSponsors();
		setupFaq();
		setupCountdown();
	});

	// ---- Navbar shadow on scroll ---------------------------------------
	function setupNavScroll() {
		var nav = document.getElementById('site-nav');
		if (!nav) return;
		var update = function () {
			if (window.scrollY > 80) nav.classList.add('is-scrolled');
			else nav.classList.remove('is-scrolled');
		};
		window.addEventListener('scroll', update, { passive: true });
		update();
	}

	// ---- Mobile menu toggle -------------------------------------------
	function setupMobileMenu() {
		var btn = document.getElementById('nav-toggle');
		var menu = document.getElementById('nav-mobile');
		if (!btn || !menu) return;
		btn.addEventListener('click', function () {
			var open = menu.classList.toggle('is-open');
			btn.setAttribute('aria-expanded', String(open));
			menu.setAttribute('aria-hidden', String(!open));
		});
		menu.querySelectorAll('a').forEach(function (a) {
			a.addEventListener('click', function () {
				menu.classList.remove('is-open');
				btn.setAttribute('aria-expanded', 'false');
				menu.setAttribute('aria-hidden', 'true');
			});
		});
	}

	// ---- Smooth scroll with offset for fixed nav ----------------------
	function setupSmoothAnchors() {
		document.querySelectorAll('a[href^="#"]').forEach(function (a) {
			a.addEventListener('click', function (e) {
				var href = a.getAttribute('href');
				if (!href || href === '#') return;
				var target = document.querySelector(href);
				if (!target) return;
				e.preventDefault();
				var y = target.getBoundingClientRect().top + window.pageYOffset - 100;
				window.scrollTo({ top: y, behavior: 'smooth' });
			});
		});
	}

	// ---- Reveal on scroll ---------------------------------------------
	function setupReveal() {
		// Distribui o índice CSS (--i) automaticamente em containers staggered.
		document.querySelectorAll('[data-stagger]').forEach(function (parent) {
			var children = parent.querySelectorAll(':scope > .reveal, :scope .reveal[data-stagger-child]');
			Array.prototype.forEach.call(children, function (child, idx) {
				if (!child.style.getPropertyValue('--i')) {
					child.style.setProperty('--i', idx);
				}
			});
		});

		var els = document.querySelectorAll('.reveal');
		if (!els.length) return;
		if (!('IntersectionObserver' in window)) {
			els.forEach(function (el) { el.classList.add('is-visible'); });
			return;
		}
		var io = new IntersectionObserver(function (entries) {
			entries.forEach(function (en) {
				if (en.isIntersecting) {
					en.target.classList.add('is-visible');
					io.unobserve(en.target);
				}
			});
		}, { rootMargin: '0px 0px -60px 0px', threshold: 0.05 });
		els.forEach(function (el) { io.observe(el); });
	}

	// ---- Background parallax para .parallax-bg ------------------------
	function setupParallax() {
		var nodes = document.querySelectorAll('.parallax-bg');
		if (!nodes.length) return;
		if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;

		var rafId = null;
		var update = function () {
			rafId = null;
			nodes.forEach(function (el) {
				var rect = el.getBoundingClientRect();
				var vh = window.innerHeight;
				if (rect.bottom < 0 || rect.top > vh) return;
				var speed = parseFloat(el.dataset.parallax || '0.25');
				var center = rect.top + rect.height / 2;
				var distance = center - vh / 2;
				el.style.setProperty('--py', (-distance * speed).toFixed(1) + 'px');
			});
		};
		var onScroll = function () {
			if (rafId === null) rafId = window.requestAnimationFrame(update);
		};
		window.addEventListener('scroll', onScroll, { passive: true });
		window.addEventListener('resize', onScroll);
		update();
	}

	// ---- Tickets: ver detalhes ----------------------------------------
	function setupTickets() {
		document.querySelectorAll('.tk-wrap').forEach(function (wrap) {
			var btn = wrap.querySelector('[data-toggle-details]');
			var label = wrap.querySelector('.tk-detail-toggle__label');
			if (!btn) return;
			btn.addEventListener('click', function (e) {
				e.stopPropagation();
				var open = wrap.getAttribute('data-open') === 'true';
				// fecha os outros (acordeão)
				document.querySelectorAll('.tk-wrap').forEach(function (w) {
					if (w !== wrap) {
						w.setAttribute('data-open', 'false');
						var l = w.querySelector('.tk-detail-toggle__label');
						if (l) l.textContent = 'Ver detalhes';
						var b = w.querySelector('[data-toggle-details]');
						if (b) b.setAttribute('aria-expanded', 'false');
					}
				});
				wrap.setAttribute('data-open', open ? 'false' : 'true');
				btn.setAttribute('aria-expanded', open ? 'false' : 'true');
				if (label) label.textContent = open ? 'Ver detalhes' : 'Fechar detalhes';
			});
		});
	}

	// ---- Sponsor cards: ver detalhes (página /patrocine) --------------
	function setupSponsors() {
		document.querySelectorAll('.sp-wrap').forEach(function (wrap) {
			var btn = wrap.querySelector('[data-toggle-sp]');
			var label = wrap.querySelector('.sp-detail-toggle__label');
			if (!btn) return;
			btn.addEventListener('click', function (e) {
				e.stopPropagation();
				var open = wrap.getAttribute('data-open') === 'true';
				// fecha as outras (acordeão)
				document.querySelectorAll('.sp-wrap').forEach(function (w) {
					if (w !== wrap) {
						w.setAttribute('data-open', 'false');
						var l = w.querySelector('.sp-detail-toggle__label');
						if (l) l.textContent = 'Ver detalhes';
						var b = w.querySelector('[data-toggle-sp]');
						if (b) b.setAttribute('aria-expanded', 'false');
					}
				});
				wrap.setAttribute('data-open', open ? 'false' : 'true');
				btn.setAttribute('aria-expanded', open ? 'false' : 'true');
				if (label) label.textContent = open ? 'Ver detalhes' : 'Fechar detalhes';
			});
		});
	}

	// ---- FAQ accordion -------------------------------------------------
	function setupFaq() {
		document.querySelectorAll('.faq-item').forEach(function (item) {
			var btn = item.querySelector('.faq-item__btn');
			if (!btn) return;
			btn.addEventListener('click', function () {
				var isOpen = item.getAttribute('data-open') === 'true';
				// fecha os outros
				document.querySelectorAll('.faq-item').forEach(function (other) {
					if (other !== item) {
						other.setAttribute('data-open', 'false');
						var ob = other.querySelector('.faq-item__btn');
						if (ob) ob.setAttribute('aria-expanded', 'false');
					}
				});
				item.setAttribute('data-open', isOpen ? 'false' : 'true');
				btn.setAttribute('aria-expanded', isOpen ? 'false' : 'true');
			});
		});
	}

	// ---- Countdown -----------------------------------------------------
	function setupCountdown() {
		var section = document.getElementById('countdown');
		if (!section) return;
		var iso = section.getAttribute('data-target-date') || '2026-07-25T00:00:00-03:00';
		var target = new Date(iso).getTime();

		var d = section.querySelector('[data-cu="days"]');
		var h = section.querySelector('[data-cu="hours"]');
		var m = section.querySelector('[data-cu="minutes"]');
		var s = section.querySelector('[data-cu="seconds"]');
		if (!d || !h || !m || !s) return;

		var pad = function (n) { return String(n).padStart(2, '0'); };
		var tick = function () {
			var diff = Math.max(0, target - Date.now());
			d.textContent = pad(Math.floor(diff / 86400000));
			h.textContent = pad(Math.floor((diff / 3600000) % 24));
			m.textContent = pad(Math.floor((diff / 60000) % 60));
			s.textContent = pad(Math.floor((diff / 1000) % 60));
		};
		tick();
		setInterval(tick, 1000);
	}
})();
