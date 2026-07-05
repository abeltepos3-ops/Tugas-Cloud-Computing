# Menggunakan base image Nginx versi Alpine yang sangat ringan
FROM nginx:alpine

# Menyalin seluruh file (HTML, CSS, JS) ke dalam folder default Nginx
COPY . /usr/share/nginx/html

# Membuka jalur port 80 di dalam container
EXPOSE 80