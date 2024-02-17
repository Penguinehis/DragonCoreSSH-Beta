Para instalar use o comando abaixo:

```sh
bash <(wget -qO- https://raw.githubusercontent.com/Penguinehis/DragonCoreSSH-Beta/main/install.sh)
```

Documentação para integração:

Criar usuario:

Validade deve estar em Dias
Usuario não pode ser invalido para o sistema linux
Senha precisa ser valido para o sistema linux
Limite precisa ser um numero valido como 1~99999999

```sh
php /opt/DragonCore/menu.php criaruser $validade $usuario $senha $limite
```

Gerar teste:

Validade deve estar em minutos!

```sh
php /opt/DragonCore/menu.php gerarteste $validade
```

Deletar usuario:S

Usuario deve ser valido!

```sh
php /opt/DragonCore/menu.php deluser $usuario
```

Alterar validade:

Validade deve estar em dias!
Usuario deve ser valido!

```sh
php /opt/DragonCore/menu.php alterardata $usuario $validade
```

Alterar limite:

Usuario deve ser valido!
Limite precisa ser um numero valido como 1~99999999

```sh
php /opt/DragonCore/menu.php uplimit $usuario $limite
```

Verificar limite do usuario:

Usuario deve ser valido!

```sh
php /opt/DragonCore/menu.php printlim2 $usuario
```

Alterar senha:

Usuario deve ser valido!
Senha precisa ser valido para o sistema linux

```sh
php /opt/DragonCore/menu.php uppass $usuario $senha
```

Remover expirados:

```sh
php /opt/DragonCore/menu.php removeexpired
```


Para suporte: https://t.me/dragoncoresshgp