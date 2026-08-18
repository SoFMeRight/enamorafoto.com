# EnamoraFoto.com Site

Minimal container that serves the landing page for EnamoraFoto.com at /index.html.

> ⚠️ Unmodified usage of this container is prohibited unless you are the operator of EnamoraFoto.com, obviously; as that would be fraud.

<!-- sf:project:start -->
<!-- sf:project:end -->
<!-- sf:badges:start -->
<!-- sf:badges:end -->
<!-- sf:image:start -->
<!-- sf:image:end -->

## Image contents

Base:
<!-- sf:contents-base:start -->
<!-- sf:contents-base:end -->

Packages:
<!-- sf:contents-apk:start -->
<!-- sf:contents-apk:end -->

## Quick start (Docker Compose)
```yaml
version: "3.9"

services:
  enamorafoto-site:
    image: prplanit/enamorafoto.com:latest
    container_name: enamorafoto-site
    ports:
      - "8015:80"   # host:container
    restart: unless-stopped
```

#### Bring it up:
```bash
docker compose up -d
```

#### Open a browser and access: `http://<host>:8015/index.html`

> You can change 8015 to any host port you like (e.g., 80:80, 8080:80, etc).

Quick start (docker run)
```bash
docker run -d --name enamorafoto-site \
  -p 8015:80 \
  --restart unless-stopped \
  prplanit/enamorafoto.com:latest
```

### What’s inside
Base: Alpine + NGINX
Static site served by NGINX (no server-side code)
Default doc root baked into the image

#### Security notes
- This is HTTP only. If exposing to the internet, put it behind a TLS reverse proxy (nginx/traefik/Cloudflare Tunnel).
- Prefer running it on an internal VLAN or with firewall rules so only trusted IPs can reach it.
- No persistence/volumes are required.

#### Health & logs
```bash
docker logs -f enamorafoto-site
docker ps
```

#### Troubleshooting
404 on / but /index.html works:
- This image intentionally serves the app at /index.html. Use that path.
- (If you want / to resolve to the app, front it with a tiny NGINX/Traefik proxy that rewrites / → /index.html.)

#### Port conflicts
- Change the left side of ports: in compose (e.g., "8020:80"), then reconnect at http://<host>:8020/index.html.

#### Nothing loads
- Confirm the container is running and reachable from your client network (NAT/Firewall).
