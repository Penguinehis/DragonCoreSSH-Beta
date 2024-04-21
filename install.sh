#!/bin/bash
if grep -q 'NAME="Debian GNU/Linux"' /etc/os-release; then
    system="debian"
else
    system="ubuntu"
fi

if [ "$system" = "debian" ]; then
    apt-get install -y sudo
fi

sudo apt update
sudo apt install -y lsb-release ca-certificates apt-transport-https software-properties-common gnupg curl wget

if [ "$system" = "debian" ]; then
    repos=$(find /etc/apt/ -name '*.list' -exec cat {} + | grep  ^[[:space:]]*deb | grep -q "packages.sury.org/php" && echo 1 || echo 0)
    if [ "$repos" = "0" ]; then
        echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" | sudo tee /etc/apt/sources.list.d/sury-php.list
        curl -fsSL  https://packages.sury.org/php/apt.gpg | sudo gpg --dearmor -o /etc/apt/trusted.gpg.d/sury-keyring.gpg
        sudo apt update
    fi
else
    repos=$(find /etc/apt/ -name '*.list' -exec cat {} + | grep  ^[[:space:]]*deb | grep -q "/ondrej/php" && echo 1 || echo 0)
    if [ "$repos" = "0" ]; then
        sudo apt install lsb-release ca-certificates apt-transport-https software-properties-common -y
        sudo add-apt-repository ppa:ondrej/php
        sudo apt update
    fi
fi

php_version="$(command php --version 2>'/dev/null' \
| command head -n 1 \
| command cut --characters=5-7)"
if [ "$system" = "ubuntu" ] && [ "$(lsb_release -rs)" = "18.04" ]; then
    sudo apt install php7.2-cli php7.2-curl php7.2-sqlite3 php7.2-pgsql git -y
    cake=$(uname -m)
if [ "$cake" = "x86_64" ]; then
    wget --user-agent "Mozilla" http://www.sourceguardian.com/loaders/download/loaders.linux-x86_64.tar.gz
    tar -xvzf loaders.linux-x86_64.tar.gz
    rm loaders.linux-x86_64.tar.gz
    else
    wget --user-agent "Mozilla" https://www.sourceguardian.com/loaders/download/loaders.linux-aarch64.tar.gz
    tar -xvzf loaders.linux-aarch64.tar.gz
    rm loaders.linux-aarch64.tar.gz
    fi
    sudo mv ixed.7.2.lin $(php -i | grep extension_dir | awk '{print $3}' | head -n 1)
    
elif [ "$php_version" != "8.1" ]; then
    sudo apt purge php-cli php-curl php-sqlite3 php-pgsql -y
    sudo apt purge php8.2-cli php8.2-curl php8.2-sqlite3 git -y
    sudo apt autoremove -y
    sudo apt install php8.1-cli php8.1-curl php8.1-sqlite3 php8.1-pgsql git -y
    sudo update-alternatives --set php /usr/bin/php8.1

    PREFERENCES_FILE="/etc/apt/preferences.d/php-pin-8.1.pref"
    if [ ! -f "$PREFERENCES_FILE" ]; then
        sudo tee "$PREFERENCES_FILE" <<EOF
Package: php*
Pin: version 8.1*
Pin-Priority: 1001
EOF
        sudo apt update
        sudo apt upgrade -y
    fi
    php_version="$(command php --version 2>'/dev/null' \
| command head -n 1 \
| command cut --characters=5-7)"
cake=$(uname -m)
    if [ "$cake" = "x86_64" ]; then
    wget --user-agent "Mozilla" http://www.sourceguardian.com/loaders/download/loaders.linux-x86_64.tar.gz
    tar -xvzf loaders.linux-x86_64.tar.gz
    rm loaders.linux-x86_64.tar.gz
    else
    wget --user-agent "Mozilla" https://www.sourceguardian.com/loaders/download/loaders.linux-aarch64.tar.gz
    tar -xvzf loaders.linux-aarch64.tar.gz
    rm loaders.linux-aarch64.tar.gz
    fi
    sudo mv ixed.${php_version}.lin $(php -i | grep extension_dir | awk '{print $3}' | head -n 1)
else

    sudo apt install php8.1-cli php8.1-curl php8.1-sqlite3 php8.1-pgsql git -y
    sudo update-alternatives --set php /usr/bin/php8.1

    PREFERENCES_FILE="/etc/apt/preferences.d/php-pin-8.1.pref"
    if [ ! -f "$PREFERENCES_FILE" ]; then
        sudo tee "$PREFERENCES_FILE" <<EOF
Package: php*
Pin: version 8.1*
Pin-Priority: 1001
EOF
        sudo apt update
        sudo apt upgrade -y
    fi
    php_version="$(command php --version 2>'/dev/null' \
| command head -n 1 \
| command cut --characters=5-7)"
cake=$(uname -m)
if [ "$cake" = "x86_64" ]; then
    wget --user-agent "Mozilla" http://www.sourceguardian.com/loaders/download/loaders.linux-x86_64.tar.gz
    tar -xvzf loaders.linux-x86_64.tar.gz
    rm loaders.linux-x86_64.tar.gz
    else
    wget --user-agent "Mozilla" https://www.sourceguardian.com/loaders/download/loaders.linux-aarch64.tar.gz
    tar -xvzf loaders.linux-aarch64.tar.gz
    rm loaders.linux-aarch64.tar.gz
    fi
    sudo mv ixed.${php_version}.lin $(php -i | grep extension_dir | awk '{print $3}' | head -n 1)
fi
php_version2="$(command php --version 2>'/dev/null' \
| command head -n 1 \
| command cut --characters=5-7)"
cat > /etc/php/${php_version2}/cli/conf.d/sourceguardian.ini << EOF
zend_extension=ixed.${php_version2}.lin
EOF
rm ixed.*
rm README
rm "SourceGuardian Loader License.pdf"
rm version

if [ ! -e "/bin/php" ]; then
    sudo ln -s "$(command -v php)" /bin/php
fi

cd /opt/
rm -rf DragonCore
cd $HOME
git clone https://github.com/Penguinehis/DragonCoreSSH-Beta.git /opt/DragonCore
rm -rf /opt/DragonCore/aarch64
rm -rf /opt/DragonCore/x86_64
rm -rf /opt/DragonCore/install.sh
curl -s -L -o /opt/DragonCore/menu https://raw.githubusercontent.com/Penguinehis/DragonCoreSSH-Beta/main/$(uname -m)/menu
curl -s -L -o /opt/DragonCore/dragon_go https://raw.githubusercontent.com/Penguinehis/DragonCoreSSH-Beta/main/$(uname -m)/dragon_go
curl -s -L -o /opt/DragonCore/badvpn-udpgw https://raw.githubusercontent.com/Penguinehis/DragonCoreSSH-Beta/main/$(uname -m)/badvpn-udpgw
curl -s -L -o /opt/DragonCore/libcrypto.so.3 https://raw.githubusercontent.com/Penguinehis/DragonCoreSSH-Beta/main/$(uname -m)/libcrypto.so.3
curl -s -L -o /opt/DragonCore/libssl.so.3 https://raw.githubusercontent.com/Penguinehis/DragonCoreSSH-Beta/main/$(uname -m)/libssl.so.3
curl -s -L -o /opt/DragonCore/ProxyDragon https://raw.githubusercontent.com/Penguinehis/DragonCoreSSH-Beta/main/$(uname -m)/ProxyDragon
curl -s -L -o /opt/DragonCore/ulekbot https://raw.githubusercontent.com/Penguinehis/DragonCoreSSH-Beta/main/$(uname -m)/ulekbot
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
#Gerar DBS:
php /opt/DragonCore/menu.php createautostart
php /opt/DragonCore/menu.php createTable
php /opt/DragonCore/menu.php createdbdragon
php /opt/DragonCore/menu.php createv2table
php /opt/DragonCore/dbconvert.php convertdba
php /opt/DragonCore/dbconvert.php finishdba
php /opt/DragonCore/menu.php deletecone ws 
 sed -i '/# HostKeyAlgorithms/ a\HostKeyAlgorithms +ssh-rsa' /etc/ssh/sshd_config
 sed -i '/# PubkeyAcceptedKeyTypes/ a\PubkeyAcceptedKeyTypes +ssh-rsa' /etc/ssh/sshd_config
reposi2=$(find /etc/apt/ -name *.list | xargs cat | grep  ^[[:space:]]*deb | grep -q "ookla" && echo 1 || echo 0)
if [ "$reposi2" = "1" ]; then
echo "OK"   
else
    curl -s https://packagecloud.io/install/repositories/ookla/speedtest-cli/script.deb.sh | bash
    apt install speedtest
fi
install_netstat() {
    GREEN='\033[0;32m'
    RED='\033[0;31m'
    NC='\033[0m'
    if command -v netstat &> /dev/null; then
        echo "${GREEN}Netstat is already installed.${NC}"
    else
        echo "Netstat is not installed. Trying to install..."
        if [ -x "$(command -v apt)" ]; then
             apt update
             apt install -y net-tools
            echo -e "${GREEN}Netstat installation complete.${NC}"
        else
            echo -e "${RED}Unsupported system. Please install netstat manually.${NC}"
        fi
    fi
}
install_netstat
#continua o script
screen -X -S proxydragon quit
screen -X -S openvpn quit
screen -X -S badvpn quit
screen -X -S checkuser quit
screen -X -S napster quit
screen -X -S limiter quit
screen -X -S botulek quit
php /opt/DragonCore/menu.php autostart
echo ""
echo ""
echo ""
echo "Script instalado use o comando menu"