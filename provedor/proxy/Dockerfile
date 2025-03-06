FROM nginx:latest
COPY nginx.conf /etc/nginx/nginx.conf
COPY default.conf /etc/nginx/conf.d/
COPY ssl-cert/nginx-selfsigned.crt /etc/nginx/ssl/nginx-selfsigned.crt
COPY ssl-cert/nginx-selfsigned.key /etc/nginx/ssl/nginx-selfsigned.key
CMD ["nginx", "-g", "daemon off;"]
