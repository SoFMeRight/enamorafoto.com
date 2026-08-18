FROM docker.io/prplanit/static-site:v0.0.2

# Static marketing site content only — non-root nginx, brotli, security headers,
# readOnlyRootFilesystem support, and the :8080 listener all live in the base image.
COPY www-data/ /usr/share/nginx/html/
