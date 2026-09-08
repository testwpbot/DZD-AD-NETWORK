# How DZD Ad Network (Revive) actually works

New admins often ask *"where's the public site?"* — Revive doesn't have one,
because it is an **ad-serving engine**, not a public website. It has 3 faces:

## The 3 faces of your ad server

```
┌────────────────────────┐         ┌──────────────────────────────┐
│  ADMIN PANEL (private) │         │  DELIVERY ENGINE (public)    │
│  /www/admin/           │         │  /www/delivery/              │
│                        │         │                              │
│  You + staff manage:   │  serves │  NOT a page humans visit.    │
│  • advertisers         │ ──────► │  Machines/browsers hit it:   │
│  • campaigns & banners │  tags   │  • avw.php  → shows a banner │
│  • publisher zones     │         │  • ck.php   → counts a click │
│  • statistics          │         │  • ajs.php  → JS ad tag code │
└────────────────────────┘         └──────────────────────────────┘
         ▲                                     ▲
         │ advertisers & publishers log in     │ publisher websites
         │ here too (restricted accounts)      │ paste this tag in:
         └── you create users for them ────────┘  <script src="https://
                                                  ads.dzd.lk/www/delivery/
                                                  spcjs.php?id=ZONE_ID">
                                                  </script>
```

1. **Admin panel** (`/www/admin/`) — *private*. Your staff traffic the ads.
   Advertisers and publishers ALSO log in here (same URL) — but you create
   restricted accounts for them so they only see their own campaigns/sites.
2. **Delivery engine** (`/www/delivery/`) — *public, but invisible*. There is
   no homepage to visit; browsers and publisher websites hit its URLs to get
   ads, and every hit is counted as an impression/click/conversion.
3. **Publisher websites** — *where ads actually appear*. A website owner
   (your client) copies an **invocation code** from the zone you created and
   pastes it into their site. Visitors see the ad → money flows.

## Your first ad in 5 minutes (do this now)

1. **Inventory → Advertisers** → *Add advertiser* (e.g. "Test Advertiser")
2. Open the advertiser → **Add campaign** (leave dates open, set a high
   impression limit or "unlimited")
3. Open the campaign → **Add banner** → *Upload an image banner* (any test
   image)
4. **Inventory → Websites** → *Add website* (e.g. `test.dzd.lk`)
5. Open the website → **Add zone** → type: *Banner, 468x60* (match your image)
6. Open the zone → **Invocation code** tab → copy the tag code
7. **Link the banner to the zone**: open the campaign → *Zone linking* (or
   from the zone side: *Linked banners*) so the banner can serve into it
8. Paste the invocation code into a blank `test.html` file and open it in
   your browser → **your ad appears** 🎉
9. Click the ad a couple of times, then check the admin **Dashboard** —
   impressions & clicks are being tracked live.

## Making it feel like a "public dashboard"

Since you want advertisers/publishers to have their own view:

- **Built-in:** add them as users — open an advertiser → *User access* tab →
  add their email. They log in at the same `/www/admin/` URL and see only
  their own campaigns + reports. Same for publishers on a website record.
- **Custom (later):** the storefront/signup/payment experience is what the
  planned Laravel layer or your DZD Marketing SMM panel would provide,
  talking to Revive's API — that's your true "public dashboard".
