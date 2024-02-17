#/bin/bash
cake="$(ip route get 1 | grep -Po '(?<=dev )(\S+)')"
iptables -t nat -C POSTROUTING -s "10.8.0.0/24" -o eth0 -j MASQUERADE || iptables -t nat -A POSTROUTING -s "10.8.0.0/24" -o eth0 -j MASQUERADE
iptables -C INPUT -i tun0 -j ACCEPT || iptables -A INPUT -i tun0 -j ACCEPT
iptables -C INPUT -i lo -j ACCEPT || iptables -A INPUT -i lo -j ACCEPT
iptables -C INPUT -m conntrack --ctstate ESTABLISHED,RELATED -j ACCEPT || iptables -A INPUT -m conntrack --ctstate ESTABLISHED,RELATED -j ACCEPT