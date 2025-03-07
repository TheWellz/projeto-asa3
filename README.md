# Projeto ASA

O projeto está dividido em três partes:

- **Provedor:**  
  Contém os serviços de DNS, Proxy, Mail, Webmail e SSH, configurados para gerenciar domínios e e-mails. 🌐📧
- **Cliente 1:**  
  Hospeda sites WordPress para os usuários *wellton* e *gabriel*, além de fornecer acesso SSH. 🌟🔐
- **Cliente 2:**  
  Hospeda sites WordPress para os usuários *pedro* e *junior*, também com acesso via SSH. 🎯🔒

## Configurações Principais ⚙️

- **Persistência de Dados:**  
  Todas as configurações e dados dos usuários são armazenados por meio de volumes Docker, garantindo que sejam preservados mesmo após reinicializações dos containers. 💾🔄

- **Rede:**  
  Todos os serviços se comunicam através da rede Docker denominada `rede-litoral`. 🌐🔗

- **DNS:**  
  Foram configuradas zonas específicas para o provedor e para cada cliente, com registros dos tipos A, NS, MX e CNAME. 📡📝

- **Proxy Reverso com HTTPS:**  
  Utiliza o Nginx para redirecionar requisições HTTP para HTTPS, empregando certificados autoassinados, e encaminha o tráfego para os servidores de conteúdo (Webmail, WordPress, etc). 🔒➡️🌍

- **Web (WordPress):**  
  Os sites são hospedados utilizando a imagem oficial do WordPress. 📝🌐

- **Webmail:**  
  Implementado com Roundcube, o serviço webmail está posicionado atrás do proxy e configurado para acessar os serviços de e-mail via IMAP/SMTP. 📧💻

- **SSH:**  
  O acesso remoto via SSH é configurado com usuários e senhas específicas, sem permitir o login do usuário root. 🔐🚫

---

### 🏰 **Estrutura do Projeto**

```
projeto-asa3/
│── provedor/
│   ├── compose.yaml
│   ├── dns/
│   ├── proxy/
│   ├── mail/
│   ├── webmail/
│   ├── ssh/
│── cliente 1/
│   ├── compose.yaml
│   ├── proxy/
│   ├── ssh/
│── cliente 2/
│   ├── compose.yaml
│   ├── proxy/
│   ├── ssh/
```

---

## 🚀 **Execução**

### 🔹 **1. Subindo os Serviços do Provedor**

```bash
cd provedor
docker compose up -d --build
```

### 🔹 **2. Subindo os Serviços do Cliente 1**

```bash
cd cliente 1
docker compose up -d --build
```

### 🔹 **3. Subindo os Serviços do Cliente 2**

```bash
cd cliente 2
docker compose up -d --build
```

---

## 📝 **Acesso ao Serviços**

### 🔹 **Acesso ao Webmail do Provedor**

1. Abra o navegador e acesse: [https://proxy.rosado.com](https://proxy.rosado.com)
2. Caso o navegador exiba um aviso de certificado (certificado autoassinado), aceite-o para prosseguir.
3. Faça login utilizando uma das contas abaixo para acessar o Webmail.

## Usuário: wellton
- **Login:** wellton (ou wellton@rosado.com)
- **Senha:** redes

## Usuário: gabriel
- **Login:** gabriel (ou gabriel@rosado.com)
- **Senha:** redes

---

### 🔹 **Acesso ao WordPress do Cliente 1**

- Acesse `http://wellton.minhoto.com` 
- Acesse `http://gabriel.minhoto.com` 

### 🔹 **Acesso ao WordPress do Cliente 2**

- Acesse `http://pedro.camapum.com` 
- Acesse `http://junior.camapum.com` 

### 🔹 **Acesso ao SSH do Provedor**

```bash
ssh rosado1@localhost -p 22
senha: redes
```

```bash
ssh rosado2@localhost -p 22
senha: redes
```

### 🔹 **Acesso ao SSH do Cliente 1**

```bash
ssh wellton@localhost -p 2222
senha: redes
```

```bash
ssh gabriel@localhost -p 2222
senha: redes
```
### 🔹 **Acesso ao SSH do Cliente 2**

```bash
ssh pedro@localhost -p 2223
senha: redes
```

```bash
ssh junior@localhost -p 2223
senha: redes
```

---

## ⚠️ **Observação**

Lembre-se de alterar o endereço IP do servidor DNS para o IPv4 da sua máquina. Isso pode ser feito editando os arquivos `db.rosado.com`, `db.minhoto.com`, `db.camapum.com` dentro da pasta `dns`.
