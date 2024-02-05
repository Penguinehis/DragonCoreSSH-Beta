system=$(cat /etc/os-release | grep -q 'NAME="Debian GNU/Linux"' && echo debian || echo ubuntu)
if [ "$system" = "debian" ]; then
apt-get install sudo
sudo apt update
sudo apt install -y lsb-release ca-certificates apt-transport-https software-properties-common gnupg curl wget
repos2=$(find /etc/apt/ -name *.list | xargs cat | grep  ^[[:space:]]*deb | grep -q "packages.sury.org/php" && echo 1 || echo 0)
if [ "$repos2" = "1" ]; then
echo "OK"   
else
echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" | sudo tee /etc/apt/sources.list.d/sury-php.list
curl -fsSL  https://packages.sury.org/php/apt.gpg| sudo gpg --dearmor -o /etc/apt/trusted.gpg.d/sury-keyring.gpg
apt update
fi
else
reposi=$(find /etc/apt/ -name *.list | xargs cat | grep  ^[[:space:]]*deb | grep -q "/ondrej/php" && echo 1 || echo 0)
if [ "$reposi" = "1" ]; then
echo "OK"   
else
    apt install lsb-release ca-certificates apt-transport-https software-properties-common -y
    add-apt-repository ppa:ondrej/php
    apt update
fi
fi
php_version2="$(command php --version 2>'/dev/null' \
| command head -n 1 \
| command cut --characters=5-7)"
if [ "$php_version2" != "8.1" ]; then
apt update
apt purge php-cli php-curl php-sqlite3 -y
apt purge php8.2-cli php8.2-curl php8.2-sqlite3 git -y
apt autoremove -y
apt install php8.1-cli php8.1-curl php8.1-sqlite3 php8.1-pgsql git -y
else
apt update
apt install php8.1-cli php8.1-curl php8.1-sqlite3 php8.1-pgsql git -y
fi
PREFERENCES_FILE="/etc/apt/preferences.d/php-pin-8.1.pref"
if [ -f "$PREFERENCES_FILE" ]; then
    echo "Preferences file already exists. Exiting."
fi
tee "$PREFERENCES_FILE" <<EOF
Package: php*
Pin: version 8.1*
Pin-Priority: 1001
EOF
apt update
apt upgrade -y
apt install screen htop nload lsof curl -y
update-alternatives --set php /usr/bin/php8.1
cake=$(uname -m)
if [ "$cake" = "x86_64" ]; then
curl -O https://downloads.ioncube.com/loader_downloads/ioncube_loaders_lin_x86-64.tar.gz
tar -xvzf ioncube_loaders_lin_x86-64.tar.gz
rm ioncube_loaders_lin_x86-64.tar.gz
else
curl -O https://downloads.ioncube.com/loader_downloads/ioncube_loaders_lin_aarch64.tar.gz
tar -xvzf ioncube_loaders_lin_aarch64.tar.gz
rm ioncube_loaders_lin_aarch64.tar.gz
fi
cd ioncube
php_ext_dir="$(command php -i | grep extension_dir 2>'/dev/null' \
| command head -n 1 \
| command cut --characters=31-38)"
php_version="$(command php --version 2>'/dev/null' \
| command head -n 1 \
| command cut --characters=5-7)"
cp ioncube_loader_lin_${php_version}.so /usr/lib/php/${php_ext_dir}
cd ..
rm -rf ioncube
cat > /etc/php/${php_version}/cli/conf.d/00-ioncube-loader.ini << EOF
zend_extension=ioncube_loader_lin_${php_version}.so
EOF

cd /opt/
rm -rf DragonCore
cd $HOME
git clone https://github.com/Penguinehis/DragonCoreSSH-Beta.git /opt/DragonCore
rm -rf /opt/DragonCore/aarch64
rm -rf /opt/DragonCore/x86_64
rm -rf /opt/DragonCore/install.sh
curl -s -L -o /opt/DragonCore/menu https://raw.githubusercontent.com/Penguinehis/DragonCoreSSH-Beta/main/$(uname -m)/menu
curl -s -L -o /opt/DragonCore/proxy https://raw.githubusercontent.com/Penguinehis/DragonCoreSSH-Beta/main/$(uname -m)/proxy
curl -s -L -o /opt/DragonCore/napster https://raw.githubusercontent.com/Penguinehis/DragonCoreSSH-Beta/main/$(uname -m)/napster
curl -s -L -o /opt/DragonCore/badvpn-udpgw https://raw.githubusercontent.com/Penguinehis/DragonCoreSSH-Beta/main/$(uname -m)/badvpn-udpgw
cd /opt/DragonCore
chmod +x *
cd $HOME
echo -n "/opt/DragonCore/menu" > /bin/menu
chmod +x /bin/menu
existing_cron=$(crontab -l 2>/dev/null | grep -F "*/5 * * * * find /run/user -maxdepth 1 -mindepth 1 -type d -exec mount -o remount,size=1M {} \;")
if [ -z "$existing_cron" ]; then
(crontab -l 2>/dev/null; echo "*/5 * * * * find /run/user -maxdepth 1 -mindepth 1 -type d -exec mount -o remount,size=1M {} \;") | crontab -
fi
existing_crono=$(crontab -l 2>/dev/null | grep -F "@reboot sleep 30 && /usr/bin/php /opt/DragonCore/menu.php autostart")
if [ -z "$existing_crono" ]; then
(crontab -l 2>/dev/null; echo "@reboot sleep 30 && /usr/bin/php /opt/DragonCore/menu.php autostart") | crontab -
fi
existing_lima=$(crontab -l 2>/dev/null | grep -F '@reboot sleep 30 && find /etc/DragonTeste -name "*.sh" -exec {} \;')
if [ -z "$existing_lima" ]; then
    (crontab -l 2>/dev/null; echo '@reboot sleep 30 && find /etc/DragonTeste -name "*.sh" -exec {} \;') | crontab -
fi
if dpkg -s libssl1.1 &>/dev/null; then
echo "libssl1.1 is already installed."
else
echo "deb http://security.ubuntu.com/ubuntu focal-security main" |  tee /etc/apt/sources.list.d/focal-security.list
 apt-get update &&  apt-get install -y libssl1.1
fi
bash <(php /opt/DragonCore/postinstall.php installpostgre)
php /opt/DragonCore/dbconvert.php convertdba
php /opt/DragonCore/dbconvert.php finishdba
 sed -i '/# HostKeyAlgorithms/ a\HostKeyAlgorithms +ssh-rsa' /etc/ssh/sshd_config
 sed -i '/# PubkeyAcceptedKeyTypes/ a\PubkeyAcceptedKeyTypes +ssh-rsa' /etc/ssh/sshd_config