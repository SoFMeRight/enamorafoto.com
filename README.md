# EnamoraFoto.com Site

Minimal container that serves the landing page for EnamoraFoto.com.

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

## Installation

```bash
docker run -d --name enamorafoto-site --restart unless-stopped -p 8015:8080 ghcr.io/sofmeright/enamorafoto.com:latest
```

Then open `http://<host>:8015/`. A Compose file is in [`docs/docker/`](docs/docker/docker-compose.yaml).

#### Health & logs
```bash
docker logs -f enamorafoto-site
docker ps
```
