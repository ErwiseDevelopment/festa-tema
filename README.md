# Festa do Sangue de Jesus — Tema WordPress (refatorado)

Tema portado a partir do projeto **React + Vite + Tailwind** original em `_source/`. Sem dependências de build: PHP + CSS puro + JS vanilla.

## Estrutura

```
festadosanguedejesus/
├── style.css                  ← cabeçalho do tema
├── functions.php              ← setup, enqueue e Customizer (links/contatos)
├── header.php                 ← navbar bicolor (vermelho + teal) com logo, data e CTA dourado
├── footer.php                 ← rodapé #680718 em 4 colunas
├── front-page.php             ← monta as 11 seções da home na ordem do Index.tsx
├── page.php / single.php / index.php / 404.php
├── page-patrocine.php         ← Template Patrocine
├── page-termos.php            ← Template Termos e Condições
├── page-doe.php               ← Redireciona para o link de doação
├── assets/
│   ├── css/main.css           ← todos os estilos do tema
│   ├── js/main.js             ← navbar, mobile menu, smooth scroll, reveal,
│   │                            tickets accordion, FAQ accordion, countdown
│   ├── images/                ← todas as imagens (logo, bg, motivos, convidados, ingressos, mapa)
│   └── videos/hero-video.mov  ← vídeo de fundo do hero
└── template-parts/
    ├── section-hero.php          ← vídeo + atmosphere + frase da cruz
    ├── section-impact.php        ← "Onde o Sangue de Jesus toca…"
    ├── section-about.php         ← "O que é a Festa do Sangue de Jesus?"
    ├── section-motivos.php       ← 6 cards numerados (cream bg)
    ├── section-tickets.php       ← 4 cards (Premium/Highlight/Gota/Vitória) + Ver detalhes
    ├── section-speakers.php      ← 7 convidados, "Presenças Confirmadas"
    ├── section-countdown.php     ← contagem regressiva até 25/07/2026
    ├── section-howto.php         ← Localização + cards + mapa Google
    ├── section-declaration.php   ← citação da Raquel sobre o Sangue
    ├── section-sponsor.php       ← "Patrocinador da Vida"
    └── section-faq.php           ← 9 dúvidas em accordion
```

## Instalação

1. Instale o WordPress completo na raiz do site (`public_html/` no Turbo Cloud).
2. Pasta do tema vai em `wp-content/themes/festadosanguedejesus/`.
3. **Aparência → Temas → Festa do Sangue de Jesus → Ativar**.
4. **Configurações → Leitura → Sua página inicial exibe → Uma página estática**, escolha qualquer página em branco.
5. Crie 3 páginas vazias e nelas selecione o **Template** correspondente:
   - "Patrocine" → template **Patrocine** → slug `patrocine`
   - "Termos" → template **Termos e Condições** → slug `termos`
   - "Doe" → template **Doe** → slug `doe`
6. **Aparência → Personalizar → FSDJ — Links e Contatos**: ajuste todos os links (WhatsApp, Instagram, doação, URLs de ingresso, e-mail, endereço, data).

## Tokens (paleta original do React)

| Token | Cor |
| --- | --- |
| Background base | `hsl(220 20% 4%)` |
| Dourado primário | `#D4AF37` (gradiente `#C6A85A → #F1D27A → #B68C2A`) |
| Vermelho navbar | `#60041B` |
| Vermelho rodapé | `#680718` |
| Teal navbar/seções | `#00354B` / `#00364B` |
| Cream motivos | `#e2be72` |
| Texto dark blue | `#001F2B` |

Tipografias (Google Fonts, carregadas no header):
- **Cinzel** (display)
- **Playfair Display** (citações em itálico)
- **Inter** (corpo)

## Onde editar conteúdo

- **Convidados**: `template-parts/section-speakers.php` → array `$speakers` no topo.
- **Motivos**: `template-parts/section-motivos.php` → array `$cards`.
- **Ingressos**: `template-parts/section-tickets.php` → array `$tickets` (badge, preço, ícones ativos, detalhes, link).
- **FAQ**: `template-parts/section-faq.php` → array `$faqs`.
- **Data do countdown**: `template-parts/section-countdown.php` → `data-target-date="…"`.
- **Links e contatos**: Customizer (`Aparência → Personalizar`).
