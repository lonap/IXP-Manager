password: {$options.rir.ripe_password}

as-set:         AS-LONAP-MLP-V6
descr:          -----------------------------------------------------------------
descr:          :::::: IPv6 Multilateral (route server) participants at LONAP
descr:          - See AS8550 aut-num object for filtering policy.
descr:          -----------------------------------------------------------------
remarks:        See also:
remarks:        AS-LONAP-CONNECTED      - All LONAP Member ASNs
remarks:        AS-SET-LONAP-CONNECTED  - All LONAP Member AS-SETs
remarks:        AS-LONAP-MLP            - IPv4 Route Server Participants
remarks:        -----------------------------------------------------------------
{foreach $customers as $c}
{if $c->isRouteServerClient( 6 )}
members:        AS{$c->getAutsys()}, {$c->resolveAsMacro( 6, 'AS' )}  # {$c->getName()}
{/if}
{/foreach}
remarks:        -----------------------------------------------------------------
remarks:        $ lonap/rir/tmpl/as-lonap-mlp-v6.tpl
tech-c:         AS8330-RIPE
admin-c:        AS8330-RIPE
mnt-by:         AS8330-MNT
mnt-by:         AS8330-AUTO-MNT
changed:        ripedb@lonap.net
source:         RIPE
