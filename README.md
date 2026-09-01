# EnamoraFoto.com Site

Minimal container that serves the landing page for EnamoraFoto.com.

> ⚠️ Unmodified usage of this container is prohibited unless you are the operator of EnamoraFoto.com, obviously; as that would be fraud.

<!-- sf:project:start -->
[![GitHub](https://img.shields.io/badge/GitHub-mirror-181717?logo=github)](https://github.com/SoFMeRight/enamorafoto.com) [![GitLab](https://img.shields.io/badge/GitLab-source-FC6D26?logo=gitlab)](https://gitlab.prplanit.com/SoFMeRight/enamorafoto.com) [![license](https://raw.githubusercontent.com/SoFMeRight/enamorafoto.com/main/.stagefreight/scribe/license.svg)](https://github.com/SoFMeRight/enamorafoto.com/blob/main/LICENSE) [![Open Issues](https://img.shields.io/github/issues/SoFMeRight/enamorafoto.com)](https://github.com/SoFMeRight/enamorafoto.com/issues) [![Open PRs](https://img.shields.io/github/issues-pr/SoFMeRight/enamorafoto.com)](https://github.com/SoFMeRight/enamorafoto.com/pulls) [![Contributors](https://img.shields.io/github/contributors/SoFMeRight/enamorafoto.com)](https://github.com/SoFMeRight/enamorafoto.com/graphs/contributors) [![donate](https://img.shields.io/badge/donate-FF5E5B?logo=ko-fi&logoColor=white)](https://ko-fi.com/T6T41IT163) [![sponsor](https://img.shields.io/badge/sponsor-EA4AAA?logo=githubsponsors&logoColor=white)](https://github.com/sponsors/SoFMeRight)
<!-- sf:project:end -->
<!-- sf:badges:start -->
[![release](https://raw.githubusercontent.com/SoFMeRight/enamorafoto.com/main/.stagefreight/scribe/release.svg)](https://github.com/SoFMeRight/enamorafoto.com/releases) [![build](https://raw.githubusercontent.com/SoFMeRight/enamorafoto.com/main/.stagefreight/scribe/build.svg)](https://gitlab.prplanit.com/SoFMeRight/enamorafoto.com/-/pipelines) [![Last Commit](https://img.shields.io/github/last-commit/SoFMeRight/enamorafoto.com)](https://github.com/SoFMeRight/enamorafoto.com/commits) [![StageFreight](https://img.shields.io/badge/StageFreight-0.10.0--dev+e3ee67e-310937?logo=readthedocs&logoColor=white)](https://stagefreight.prplanit.com)
<!-- sf:badges:end -->
<!-- sf:image:start -->
[![GHCR](https://img.shields.io/badge/GHCR-sofmeright%2Fenamorafoto.com-181717?logo=github&logoColor=white)](https://github.com/SoFMeRight/enamorafoto.com/pkgs/container/enamorafoto.com) [![Harbor](https://img.shields.io/badge/Harbor-sofmeright%2Fenamorafoto.com-60b932)](https://cr.pcfae.com/harbor/projects)

[![latest](https://raw.githubusercontent.com/SoFMeRight/enamorafoto.com/main/.stagefreight/scribe/release-latest.svg)](https://github.com/SoFMeRight/enamorafoto.com/pkgs/container/enamorafoto.com) ![updated](https://raw.githubusercontent.com/SoFMeRight/enamorafoto.com/main/.stagefreight/scribe/release-updated.svg) [![size](https://raw.githubusercontent.com/SoFMeRight/enamorafoto.com/main/.stagefreight/scribe/release-size.svg)](https://github.com/SoFMeRight/enamorafoto.com/pkgs/container/enamorafoto.com) [![latest-dev](https://raw.githubusercontent.com/SoFMeRight/enamorafoto.com/main/.stagefreight/scribe/dev-latest.svg)](https://github.com/SoFMeRight/enamorafoto.com/pkgs/container/enamorafoto.com) ![updated](https://raw.githubusercontent.com/SoFMeRight/enamorafoto.com/main/.stagefreight/scribe/dev-updated.svg) [![size](https://raw.githubusercontent.com/SoFMeRight/enamorafoto.com/main/.stagefreight/scribe/dev-size.svg)](https://github.com/SoFMeRight/enamorafoto.com/pkgs/container/enamorafoto.com)
<!-- sf:image:end -->

## Image contents

Base:
<!-- sf:contents-base:start -->
[![static-site v0.0.2](https://img.shields.io/badge/static--site-v0.0.2-0078D4?style=flat)](https://hub.docker.com/r/prplanit/static-site)
<!-- sf:contents-base:end -->

Packages:
<!-- sf:contents-apk:start -->
*No items*
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
