# DZD AD NETWORK 🚀

**DZD Ad Network** — your own branded ad-serving platform, built on
[Revive Adserver v6.0.8](https://www.revive-adserver.com/) (open source,
GPL-2.0-or-later), the world's most popular open-source ad server.

Manage advertisers, campaigns, banners, publisher zones, targeting and
impression/click statistics — under your **DZD** brand, alongside your
DZD Marketing SMM panel.

---

## What's in this repo

| Path | What it is |
|---|---|
| `revive/` | Revive Adserver **6.0.8** application (official release layout, cleaned of dev-only files) |
| `docker/` | Docker image (PHP 8.2 + Apache + all required extensions + composer) |
| `docker-compose.yml` | One-command local stack: web app + MariaDB |
| `setup.sh` | Native Ubuntu setup helper (no Docker needed) |
| `docs/DZD-BRANDING.md` | How to make it fully DZD-branded |
| `.vscode/` | VS Code settings + recommended extensions + Xdebug config |

> Revive's PHP dependencies (`revive/lib/vendor/`) are **not committed** —
> they are installed automatically by either method below (exactly like the
> official release process). `revive/composer.lock` pins the exact versions.

---

## Requirements

- **Option A (recommended):** Docker Engine + Docker Compose plugin
  ```bash
  # Ubuntu
  sudo apt-get install -y docker.io docker-compose-v2
  sudo usermod -aG docker $USER   # log out & back in after this
  ```
- **Option B:** Ubuntu 22.04/24.04 with PHP **≥ 8.1** (script below installs it)

---

## Option A — Run with Docker (easiest)

```bash
# 1. Clone the repo
git clone https://github.com/testwpbot/DZD-AD-NETWORK.git
cd DZD-AD-NETWORK

# 2. Start the stack (first run takes a few minutes: composer install inside)
docker compose up -d

# 3. Follow the first-run logs if you like
docker compose logs -f app
```

Then open **http://localhost:8080** → the Revive installer starts.

**In the installer, use these database settings:**

| Field | Value |
|---|---|
| Database host | `db`  ← not localhost! |
| Database name | `dzd_adserver` |
| Database user | `dzd` |
| Database password | `dzd_pass_2026` |
| Tables type | InnoDB |
| Port | `3306` |

After the installer finishes, your panel lives at:
**http://localhost:8080/www/admin/**

Useful commands:

```bash
docker compose stop          # stop (keeps DB data)
docker compose start         # start again
docker compose down          # stop + remove containers (DB data survives in volume)
docker compose down -v       # ⚠️ full reset including the database
docker compose logs -f app   # watch logs
```

Because `./revive` is bind-mounted into the container, you can edit files in
VS Code and just refresh the browser.

---

## Option B — Native Ubuntu (Apache / PHP built-in server)

```bash
# 1. Clone
git clone https://github.com/testwpbot/DZD-AD-NETWORK.git
cd DZD-AD-NETWORK

# 2. Run the setup script
#    - checks/installs PHP 8.x + required extensions
#    - installs composer (locally if missing)
#    - installs Revive's PHP dependencies
chmod +x setup.sh
./setup.sh
```

### Quick test with PHP's built-in server

```bash
cd revive
php -S 0.0.0.0:8080
```
Open **http://localhost:8080** → installer starts.
(Create the database first — see below.)

### Or with Apache (closer to production)

```bash
# MySQL/MariaDB
sudo apt install -y apache2 mariadb-server libapache2-mod-php
sudo mysql -e "CREATE DATABASE dzd_adserver CHARACTER SET utf8mb4; \
  CREATE USER 'dzd'@'localhost' IDENTIFIED BY 'dzd_pass_2026'; \
  GRANT ALL PRIVILEGES ON dzd_adserver.* TO 'dzd'@'localhost'; \
  FLUSH PRIVILEGES;"

# Serve the app
sudo ln -s "$PWD/revive" /var/www/html/dzd
sudo chown -R www-data:www-data "$PWD/revive/var" "$PWD/revive/www/images"
```
Open **http://localhost/dzd/** → installer → DB host `localhost`,
user `dzd`, db `dzd_adserver`.

Admin panel after install: **http://localhost:8080/www/admin/**
(or `http://localhost/dzd/www/admin/` with Apache).

---

## The installer wizard (what to expect)

1. **Welcome / terms** → continue
2. **System check** → all items should pass (the stack above satisfies them)
3. **Database** → values from the table above
4. **Configuration** → set your admin username/password, timezone
   (`Asia/Colombo`), locale
5. **Finish** → it creates the tables and your admin account → log in

## After install — make it DZD 🎨

Log in at `/www/admin/` then follow **`docs/DZD-BRANDING.md`**:
set the platform name to **DZD Ad Network**, upload your logo, and go from
there. The guide also covers deeper rebranding and ideas for hooking it up
to your DZD Marketing SMM panel.

---

## Opening it in VS Code 🧑‍💻

```bash
cd DZD-AD-NETWORK
code .
```
- Accept the recommended extensions (PHP Intelephense → code completion,
  PHP Debug → Xdebug).
- With the Docker stack running, set breakpoints in `revive/` and press
  **F5** ("DZD: Listen for Xdebug") — path mappings are preconfigured.

## Updating Revive later

Revive releases move fast with security fixes. To upgrade:
backup the DB, download the new official release zip from
https://www.revive-adserver.com/download/, and follow
https://www.revive-adserver.com/how-to/update/ — the web updater migrates
the database automatically.

## License notes

- Revive Adserver code in `revive/` is GPL-2.0-or-later — keep
  `revive/LICENSE.txt` and `revive/COPYRIGHT.txt`.
- Your own changes/branding can be commercial, but if you *distribute* the
  modified software, the GPL requires you to share the modified source.
