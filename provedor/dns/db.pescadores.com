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
ns      IN  A       192.168.1.10  
mail    IN  A       192.168.1.10
webmail IN  A       192.168.1.10     
www     IN  CNAME   @
proxy   IN  CNAME   www