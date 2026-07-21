---
name: Kinetic Heritage
colors:
  surface: '#fcfaed'
  surface-dim: '#dcdace'
  surface-bright: '#fcfaed'
  surface-container-lowest: '#ffffff'
  surface-container-low: '#f6f4e7'
  surface-container: '#f0eee1'
  surface-container-high: '#eae9dc'
  surface-container-highest: '#e5e3d6'
  on-surface: '#1b1c14'
  on-surface-variant: '#424845'
  inverse-surface: '#303128'
  inverse-on-surface: '#f3f1e4'
  outline: '#727975'
  outline-variant: '#c1c8c4'
  surface-tint: '#49645a'
  primary: '#183129'
  on-primary: '#ffffff'
  primary-container: '#2e483f'
  on-primary-container: '#99b6aa'
  inverse-primary: '#b0cdc1'
  secondary: '#006d35'
  on-secondary: '#ffffff'
  secondary-container: '#8df9a8'
  on-secondary-container: '#007439'
  tertiary: '#00350e'
  on-tertiary: '#ffffff'
  tertiary-container: '#004e19'
  on-tertiary-container: '#21c952'
  error: '#ba1a1a'
  on-error: '#ffffff'
  error-container: '#ffdad6'
  on-error-container: '#93000a'
  primary-fixed: '#cbe9dd'
  primary-fixed-dim: '#b0cdc1'
  on-primary-fixed: '#052018'
  on-primary-fixed-variant: '#324c43'
  secondary-fixed: '#8df9a8'
  secondary-fixed-dim: '#71dc8e'
  on-secondary-fixed: '#00210c'
  on-secondary-fixed-variant: '#005226'
  tertiary-fixed: '#6cff82'
  tertiary-fixed-dim: '#46e267'
  on-tertiary-fixed: '#002106'
  on-tertiary-fixed-variant: '#00531b'
  background: '#fcfaed'
  on-background: '#1b1c14'
  surface-variant: '#e5e3d6'
typography:
  display:
    fontFamily: Lexend
    fontSize: 72px
    fontWeight: '800'
    lineHeight: '1.1'
    letterSpacing: -0.04em
  headline-lg:
    fontFamily: Lexend
    fontSize: 48px
    fontWeight: '700'
    lineHeight: '1.2'
    letterSpacing: -0.02em
  headline-lg-mobile:
    fontFamily: Lexend
    fontSize: 32px
    fontWeight: '700'
    lineHeight: '1.2'
  headline-md:
    fontFamily: Lexend
    fontSize: 32px
    fontWeight: '600'
    lineHeight: '1.3'
  body-lg:
    fontFamily: Archivo Narrow
    fontSize: 20px
    fontWeight: '400'
    lineHeight: '1.6'
  body-md:
    fontFamily: Archivo Narrow
    fontSize: 16px
    fontWeight: '400'
    lineHeight: '1.6'
  label-bold:
    fontFamily: JetBrains Mono
    fontSize: 14px
    fontWeight: '700'
    lineHeight: '1.0'
  label-sm:
    fontFamily: JetBrains Mono
    fontSize: 12px
    fontWeight: '500'
    lineHeight: '1.0'
rounded:
  sm: 0.25rem
  DEFAULT: 0.5rem
  md: 0.75rem
  lg: 1rem
  xl: 1.5rem
  full: 9999px
spacing:
  base: 8px
  gutter: 24px
  margin-mobile: 20px
  margin-desktop: 64px
  grid-columns: '12'
  border-width: 4px
---

## Brand & Style
This design system establishes a **Premium Neo-Brutalist** aesthetic that balances high-impact structural elements with a sophisticated, organic palette. The target audience values both architectural stability and creative disruption. 

The visual style is characterized by a "heavy-weight" tactile feel. It uses deliberate, thick strokes and hard shadows to create a physical sense of depth without relying on gradients or blurs. The juxtaposition of a refined cream background with aggressive forest and neon greens creates a "Nature-Tech" fusion—grounded yet vibrantly digital. The emotional response should be one of confidence, reliability, and unapologetic presence.

## Colors
The palette is rooted in a high-contrast relationship between deep botanical tones and high-visibility synthetic greens.

- **Background (#FAF8EB):** Use as the base canvas for all pages to provide a premium, paper-like warmth that softens the brutalist edges.
- **Primary / Border (#2E483F):** This is the structural anchor. Use it for all borders, primary text, and deep-state backgrounds.
- **Secondary (#008542):** Use for active states and secondary UI elements to maintain a professional "Forest" theme.
- **Accent (#1AC64F):** Use sparingly for high-attention calls to action, success states, and decorative geometric flourishes.
- **Contrast Rule:** Elements must maintain a minimum 4px border in the Primary color to ensure the Neo-Brutalist structure is preserved.

## Typography
The typography system uses a mix of geometric warmth and utilitarian precision. 

- **Headlines:** Lexend provides a bold, wide-character footprint that feels modern and approachable. Headlines should often be set in "Extra Bold" for hero sections to anchor the page.
- **Body:** Archivo Narrow is used for its efficiency and verticality, providing a clean contrast to the wide headlines. 
- **Labels/Technical:** JetBrains Mono is used for labels, buttons, and micro-copy to lean into the "Tech" side of the brand, emphasizing the structured, digital nature of the platform.

## Layout & Spacing
The layout philosophy is built on an **Asymmetrical Grid**. While based on a 12-column system, elements should frequently "break" the grid or be offset to create visual tension.

- **Rhythm:** Use an 8px base unit for all padding and margins.
- **Gutters:** Maintain wide 24px gutters to allow the heavy 4px borders of components to breathe.
- **Asymmetry:** For desktop views, offset primary content blocks by 1-2 columns from the center to evoke a more editorial, brutalist feel.
- **Mobile:** Transition to a single-column fluid layout with 20px side margins, maintaining the 4px border width for all containers.

## Elevation & Depth
In this design system, depth is **Hard and Directional**. We reject soft ambient shadows in favor of "Hard Shadows" that mimic physical layers of cut material.

- **Shadow Style:** Use 100% opacity shadows with no blur. The default offset is `6px 6px 0px` using the Primary color (#2E483F).
- **Interactive Depth:** When an element is hovered, it should "lift" by increasing the shadow offset to `10px 10px 0px`.
- **Active Depth:** On click, the shadow should disappear (`0px 0px 0px`) and the element should translate `6px 6px` to simulate being pressed into the page surface.
- **Layering:** Background elements use the base Neutral color. Foreground cards use the Neutral color but are defined by their 4px Primary border and hard shadow.

## Shapes
The shape language is a core differentiator. While Neo-Brutalism often uses sharp corners, this system uses **Exaggerated Rounding** to create a premium, friendly feel.

- **Base Radius:** 16px for small components (inputs, tags).
- **Container Radius:** 24px for standard cards and buttons.
- **Hero Radius:** 32px for large layout sections or image containers.
- **Geometric Accents:** Use perfect circles and 45-degree triangles as background decorative elements in the Accent color to emphasize the playful geometry.

## Components
- **Buttons:** All buttons feature a 4px Primary border and the standard `6px` hard shadow. The "Primary Button" uses the Accent green background with Primary color text. Use "JetBrains Mono" for button labels in all caps.
- **Cards:** Cards must have a 24px corner radius and a 4px Primary border. Internal padding should be generous (min 32px).
- **Input Fields:** Use the Neutral background with a 4px Primary border. On focus, the border color remains Primary, but the background shifts to a very light tint of the Accent green.
- **Chips/Tags:** Small pill-shaped or 16px rounded rectangles with a 2px border (thinner than standard) to denote secondary importance.
- **Lists:** Use heavy Primary-colored horizontal dividers (4px) between list items, with `label-bold` for metadata.
- **Interactive State:** Any interactive component should utilize the "Lift-on-Hover" and "Sink-on-Press" hard shadow mechanics defined in the Elevation section.