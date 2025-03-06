$ORIGIN rosado.com.
$TTL	604800

@   IN  SOA ns.rosado.com. root.rosado.com. (
			      1		; Serial
			 604800		; Refresh
			  86400		; Retry
			2419200		; Expire
			 604800 )	; Negative Cache TTL
;
@	IN	NS	ns
@	IN	MX	10	mail.
@	IN	A	172.19.57.25
ns      IN  A   172.19.57.25
webmail IN  A   172.19.57.25
www     IN  A   172.19.57.25
proxy   IN  CNAME www