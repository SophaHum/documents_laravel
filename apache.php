https://www.cyberciti.biz/faq/how-do-i-stop-apache-from-starting-on-linux/
sudo systemctl status httpd
sudo systemctl is-enabled httpd
sudo systemctl disable httpd
sudo systemctl stop httpd
sudo systemctl status httpd

sudo systemctl status apache2
sudo systemctl is-enabled apache2
sudo systemctl disable apache2
sudo systemctl stop apache2
sudo systemctl mask apache2

sudo apt remove apache2

systemctl --help
