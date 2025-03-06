$ORIGIN camapum.com.
$TTL 604800

@   IN  SOA ns.camapum.com. root.camapum.com. (
            1       ; Serial
            604800  ; Refresh
            86400   ; Retry
            2419200 ; Expire
            604800 ) ; Negative Cache TTL

@       IN  NS      ns
ns      IN  A       172.19.57.25  
pedro   IN  A       172.19.57.25  
junior  IN  A       172.19.57.25  
