$ORIGIN minhoto.com.
$TTL 604800

@   IN  SOA ns.minhoto.com. root.minhoto.com. (
            1       ; Serial
            604800  ; Refresh
            86400   ; Retry
            2419200 ; Expire
            604800 ) ; Negative Cache TTL

@       IN  NS      ns
@       IN  MX 10   mail.
ns      IN  A       10.25.1.200  
mail    IN  A       10.25.1.200
webmail IN  A       10.25.1.200
wellton IN  A       10.25.1.200
gabriel IN  A       10.25.1.200
www     IN  CNAME   @
proxy   IN  CNAME   www
