$ORIGIN minhoto.com.
$TTL 604800

@   IN  SOA ns.minhoto.com. root.minhoto.com. (
            1       ; Serial
            604800  ; Refresh
            86400   ; Retry
            2419200 ; Expire
            604800 ) ; Negative Cache TTL

@       IN  NS      ns
ns      IN  A       172.19.57.25  
wellton IN  A       172.19.57.25
gabriel IN  A       172.19.57.25
