# design.md — Design System Reference

> Referensi desain siap pakai untuk development. Ambil style ini sebagai starting point ke proyekmu — tinggal sesuaikan brand/nama.

---

## 1. Design Tokens (CSS Variables)

```css
:root {
  /* Colors */
  --color-bg: #030303;
  --color-bg-elevated: #0d0d0d;
  --color-accent: #ccff00;
  --color-accent-dim: #a8d400;
  --color-text-primary: #f5f5f5;
  --color-text-secondary: #a3a3a3;
  --color-border: #1f1f1f;

  /* Typography */
  --font-display: 'Space Grotesk', 'General Sans', sans-serif;
  --font-body: 'Inter', sans-serif;
  --font-mono: 'JetBrains Mono', monospace;

  --fs-display-xl: clamp(3rem, 8vw, 7.5rem);   /* hero headline */
  --fs-display-lg: clamp(2rem, 5vw, 4rem);     /* section title */
  --fs-heading: clamp(1.25rem, 2vw, 1.75rem);
  --fs-body: 1rem;
  --fs-small: 0.8125rem;

  --lh-tight: 1.05;
  --lh-normal: 1.5;
  --lh-loose: 1.7;

  --tracking-tight: -0.02em;
  --tracking-wide: 0.12em;   /* untuk label uppercase */

  /* Spacing scale (8px base) */
  --space-1: 0.5rem;
  --space-2: 1rem;
  --space-3: 1.5rem;
  --space-4: 2rem;
  --space-6: 3rem;
  --space-8: 4rem;
  --space-12: 6rem;
  --space-16: 8rem;

  /* Radius & motion */
  --radius-sm: 4px;
  --radius-md: 8px;
  --ease-out: cubic-bezier(0.16, 1, 0.3, 1);
  --duration-fast: 200ms;
  --duration-base: 400ms;
  --duration-slow: 800ms;
}
```

---

## 2. Typography Rules

| Elemen | Font | Size token | Weight | Case |
|---|---|---|---|---|
| Hero headline | `--font-display` | `--fs-display-xl` | 600–700 | Normal/UPPERCASE |
| Section title | `--font-display` | `--fs-display-lg` | 600 | Normal |
| Body text | `--font-body` | `--fs-body` | 400 | Normal |
| Label/eyebrow (mis. "01 — WORK") | `--font-mono` | `--fs-small` | 500 | UPPERCASE, `tracking-wide` |
| CTA button | `--font-body` | `--fs-body` | 600 | UPPERCASE |

Aturan umum:
- Heading pakai `letter-spacing: var(--tracking-tight)` agar terasa rapat & bold.
- Body text pakai `line-height: var(--lh-loose)` di atas background gelap agar tetap terbaca.
- Warna aksen (`--color-accent`) dipakai secukupnya — untuk 1 kata kunci di headline, underline, atau CTA. Jangan dominan di seluruh teks.

---

## 3. Layout & Grid

```css
.container {
  max-width: 1440px;
  margin-inline: auto;
  padding-inline: var(--space-4);
}

.section {
  padding-block: var(--space-16);
}

.grid-work {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
  gap: var(--space-4);
}
```

- Desktop: container lebar penuh dengan margin besar, whitespace generous antar-section (`--space-16`).
- Mobile: single column, padding diperkecil ke `--space-3`.

---

## 4. Komponen Dasar

### Button (CTA)
```css
.btn {
  display: inline-flex;
  align-items: center;
  gap: var(--space-1);
  padding: var(--space-2) var(--space-4);
  background: var(--color-accent);
  color: var(--color-bg);
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: var(--tracking-wide);
  border-radius: var(--radius-sm);
  transition: transform var(--duration-fast) var(--ease-out);
}
.btn:hover {
  transform: translateY(-2px);
}
```

### Card proyek (grid work)
```css
.card {
  background: var(--color-bg-elevated);
  border: 1px solid var(--color-border);
  border-radius: var(--radius-md);
  overflow: hidden;
  transition: border-color var(--duration-base) var(--ease-out);
}
.card:hover {
  border-color: var(--color-accent);
}
```

### Label / eyebrow
```css
.label {
  font-family: var(--font-mono);
  font-size: var(--fs-small);
  text-transform: uppercase;
  letter-spacing: var(--tracking-wide);
  color: var(--color-accent);
}
```

---

## 5. Motion Guidelines

- Scroll-reveal: fade + translateY(20px→0), durasi `--duration-base`, easing `--ease-out`.
- Hover state: transform ringan (translateY/scale), jangan lebih dari 300ms.
- Hero/canvas 3D (jika pakai WebGL/Three.js): idle animation halus, jangan mengganggu keterbacaan teks di atasnya.
- Hindari animasi berlebihan yang menghambat performa di mobile — prioritaskan CSS transform/opacity dibanding properti yang trigger reflow.

---

## 6. Struktur Halaman Rekomendasi (Single Page)

1. Hero — headline besar + tagline + CTA/scroll indicator
2. About/Intro — 1 paragraf singkat, positioning jelas
3. Work/Selected Projects — grid card, tiap card ke detail proyek
4. Services (opsional, kalau sisi agency ditonjolkan)
5. Contact/CTA — ajakan kontak + social links
6. Footer — copyright, link sosial, credit

---

## 7. Checklist Implementasi

- [ ] Set CSS variables di `:root`
- [ ] Import font display + body + mono
- [ ] Bangun komponen Button, Card, Label sesuai token di atas
- [ ] Terapkan grid responsif untuk section Work
- [ ] Tambahkan scroll-reveal animation dasar
- [ ] Uji kontras teks di atas background gelap (WCAG AA minimum)
- [ ] Test responsif mobile (padding, ukuran font clamp)

---

*File ini bisa langsung disalin ke root proyek sebagai `design.md` / referensi implementasi tim development.*
