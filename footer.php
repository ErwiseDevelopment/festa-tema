<?php if ( ! defined( 'ABSPATH' ) ) { exit; } ?>
</main>

<footer class="site-footer">
	<div class="footer__row">

		<!-- Coluna 1 — Logo -->
		<div class="footer__logo">
			<img src="<?php echo fsdj_img( 'logo-oficial.png' ); ?>" alt="Sangue de Jesus">
		</div>

		<!-- Coluna 2 — Redes sociais -->
		<div>
			<p class="footer__social-title">Siga nossas redes</p>
			<ul class="footer__list">
				<li><a href="<?php echo esc_url( fsdj_cfg( 'instagram_festa' ) ); ?>" target="_blank" rel="noopener">
					<svg viewBox="0 0 24 24"><rect x="2" y="2" width="20" height="20" rx="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
					@festadosanguedejesus
				</a></li>
				<li><a href="<?php echo esc_url( fsdj_cfg( 'instagram_comunidade' ) ); ?>" target="_blank" rel="noopener">
					<svg viewBox="0 0 24 24"><rect x="2" y="2" width="20" height="20" rx="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
					@comaguaviva
				</a></li>
				<li><a href="<?php echo esc_url( fsdj_cfg( 'instagram_raquel' ) ); ?>" target="_blank" rel="noopener">
					<svg viewBox="0 0 24 24"><rect x="2" y="2" width="20" height="20" rx="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
					@raquelaguaviva
				</a></li>
				<li><a href="https://www.instagram.com/centro.saorafael/" target="_blank" rel="noopener">
					<svg viewBox="0 0 24 24"><rect x="2" y="2" width="20" height="20" rx="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
					@centro.saorafael
				</a></li>
				<li><a href="https://www.youtube.com/@comaguaviva" target="_blank" rel="noopener">
					<svg viewBox="0 0 24 24"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z"/><polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"/></svg>
					@comaguaviva
				</a></li>
				<li><a href="<?php echo esc_url( fsdj_cfg( 'site_comunidade' ) ); ?>" target="_blank" rel="noopener">
					<svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
					comunidadeaguaviva.com
				</a></li>
			</ul>
		</div>

		<!-- Coluna 3 — Contato -->
		<div>
			<ul class="footer__list">
				<li><a href="<?php echo esc_url( fsdj_cfg( 'whatsapp' ) ); ?>" target="_blank" rel="noopener">
					<svg viewBox="0 0 24 24"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/></svg>
					Fale conosco
				</a></li>
				<li><a href="<?php echo esc_url( home_url( '/termos/' ) ); ?>">Termos e Condições</a></li>
			</ul>
		</div>

		<!-- Coluna 4 — Botão Patrocine -->
		<div class="footer__cta">
			<a href="<?php echo esc_url( home_url( '/patrocine/' ) ); ?>" class="gold-btn" style="color: var(--c-red-deep);">Patrocine</a>
		</div>
	</div>

	<div class="footer__divider"><div></div></div>

	<div class="footer__bottom">
		<p>@<?php echo esc_html( date( 'Y' ) ); ?> Copyright | todos os direitos reservados</p>
		<p class="footer__sig">
			<span>O site do jeito que você</span>
			<img src="<?php echo fsdj_img( 'mask-group.svg' ); ?>" alt="">
		</p>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
