### 🏗 **Estrutura do Projeto**

```
projeto-asa3/
│── provedor/
│   ├── compose.yaml
│   ├── dns/
│   │   ├── Dockerfile
│   │   ├── named.conf.local
│   │   ├── db.pescadores.com
│── cliente 1/
│   ├── compose.yaml
│   ├── proxy/
│   │   ├── Dockerfile
│   │   ├── default.conf
│   │   ├── nginx.conf
│   ├── ssh/
│   │   ├── Dockerfile
```

---

## 🚀 **Execução**

### 🔹 **1. Subindo o Servidor DNS**

```bash
cd provedor
docker compose up -d --build
```

### 🔹 **2. Subindo os Serviços do Cliente**

```bash
cd cliente 1
docker compose up -d --build
```

---

## 📜 **Testes e Validação**

### 🔹 **1. Testar WordPress**

- Acesse `http://localhost:8081` (Wellton)
- Acesse `http://localhost:8082` (Gabriel)
- Acesse `http://wellton.pescadores.com` (Wellton pelo DNS)
- Acesse `http://gabriel.pescadores.com` (Gabriel pelo DNS)

### 🔹 **2. Testar SSH**

```bash
ssh wellton@localhost -p 2222
senha: redes
```

---

## ⚠️ **Observação**

Lembre-se de alterar o endereço IP do servidor DNS para o IPv4 da sua máquina. Isso pode ser feito editando o arquivo `db.pescadores.com` dentro da pasta `dns`, substituindo `127.0.0.1` pelo IP correto.
