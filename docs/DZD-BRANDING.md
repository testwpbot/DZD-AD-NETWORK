# DZD Branding Guide — making Revive Adserver "DZD Ad Network"

Revive Adserver is licensed **GPL-2.0-or-later**, so you are free to rebrand and run
it as your own ad network. Keep `revive/LICENSE.txt` and `revive/COPYRIGHT.txt` in
place, and if you ever distribute the modified software to others you must share
your source changes with them under the same license. Running it as *your own
service* for your advertisers/publishers has no extra obligations.

There are 3 levels of branding — start with level 1 (10 minutes, zero code):

---

## Level 1 — Brand it from the admin UI (do this first)

After you complete the installer and log in to the admin panel
(`http://localhost:8080/www/admin/`):

1. **Platform name & logo**
   - Go to **Settings → Configuration → Global Interface Settings**
     (as the *admin* account).
   - Set the product name shown in the UI, e.g. **DZD Ad Network**.
   - Upload your **DZD logo** (the same one your DZD Marketing SMM panel uses
     keeps your branding consistent).
   - Set the footer/timeout/email settings as you like.

2. **Admin account & company details**
   - **My Account → User Properties** — set your name/email.
   - **My Account → Preferences → User Interface** — default language,
     timezone (`Asia/Colombo`), number formats (LKR not required — DZD network
     currency is whatever you choose at install time).

3. **Colors / look & feel** of login screen can be adjusted under
   the same *Global Interface Settings* section.

> ✅ This alone makes the panel say "DZD Ad Network" everywhere your
> advertisers and publishers log in. Nothing to maintain on upgrades.

## Level 2 — Skin / CSS-level rebrand

- Admin templates live in `revive/www/admin/templates/` (Smarty `.html` files).
- Stylesheets live in `revive/www/admin/assets/` (CSS).
- Replace the default logo assets referenced by the login template, or override
  the CSS with your DZD palette.

Commit those changes to this repo so your branding survives upgrades
(upgrades will flag conflicts on modified files — review them).

## Level 3 — Deep rebrand (rename the product in code)

Only do this if you really need it — it makes future upgrades harder:

- Product/brand strings: `revive/lib/max/language/` (per-language PHP files)
- Constants & defaults: `revive/constants.php`, `revive/etc/dist.conf.php`
- Version string shown in UI: `revive/lib/max/Version.php`
- Email templates: `revive/lib/max/language/*.php` (mailer sections)

Search across the codebase: `grep -ri "revive adserver" revive/lib revive/www/admin/templates`

---

## Roadmap ideas for DZD Ad Network

Since you already run **DZD Marketing (SMM panel)**, natural next steps:

1. **Marketplace branding** — Revive has an optional plugin marketplace;
   keep it disabled and market your own direct-sales funnel instead.
2. **Advertiser self-signup flow** — link your SMM panel to the Revive
   admin API (XML-RPC / `www/api/v1/xmlrpc/`) to auto-create advertiser
   accounts & campaigns when someone buys on the SMM panel.
3. **Publisher payment flow** — Zones + invocation codes can be handed to
   website owners; track impressions/clicks per zone and pay out from DZD.
4. **Geo targeting** — enable the bundled `reviveMaxMindGeoIP2` plugin
   (in `revive/plugins_repo/`) so advertisers can target Sri Lanka / regions.
5. **Deployment** — when ready to go live, move the Docker stack to a VPS
   and put Nginx/Caddy with HTTPS in front (or Apache with Let's Encrypt).
