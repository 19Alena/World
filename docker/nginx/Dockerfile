FROM nginx:1.17.5-alpine

# Copy the public directory
COPY ./ /app/

# Copy the nginx config file
COPY ./docker/nginx/nginx.conf /etc/nginx/conf.d/default.conf
