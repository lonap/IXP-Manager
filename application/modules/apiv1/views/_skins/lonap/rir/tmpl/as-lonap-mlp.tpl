password: {$options.rir.ripe_password}

as-set:         AS-LONAP-MLP
descr:          -----------------------------------------------------------------
descr:          :::::: IPv4 Multilateral (route server) participants at LONAP
descr:          - See AS8550 aut-num object for filtering policy.
descr:          -----------------------------------------------------------------
remarks:        See also:
remarks:        AS-LONAP-CONNECTED      - All LONAP Member ASNs
remarks:        AS-SET-LONAP-CONNECTED  - All LONAP Member AS-SETs
remarks:        AS-LONAP-MLP-v6         - IPv6 Route Server Participants
remarks:        -----------------------------------------------------------------
{foreach $customers as $c}
{if $c->isRouteServerClient( 4 )}
members:        AS{$c->getAutsys()} # {$c->getName()}
{/if}
{/foreach}
remarks:        -----------------------------------------------------------------
remarks:        $ lonap/rir/tmpl/as-lonap-mlp.tpl
tech-c:         AS8330-RIPE
admin-c:        AS8330-RIPE
mnt-by:         AS8330-MNT
mnt-by:         AS8330-AUTO-MNT
changed:        ripedb@lonap.net
source:         RIPE
