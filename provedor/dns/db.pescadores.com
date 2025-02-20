$ORIGIN pescadores.com.
$TTL 604800

@   IN  SOA ns.pescadores.com. root.pescadores.com. (
            1       ; Serial
            604800  ; Refresh
            86400   ; Retry
            2419200 ; Expire
            604800 ) ; Negative Cache TTL

@       IN  NS      ns
@       IN  MX 10   mail.
ns      IN  A       127.0.0.1  
mail    IN  A       127.0.0.1
webmail IN  A       127.0.0.1     
www     IN  CNAME   @
proxy   IN  CNAME   www