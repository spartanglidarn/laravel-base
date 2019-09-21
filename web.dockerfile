FROM nginx:1.16.1

ADD vhost.conf /etc/nginx/conf.d/default.conf