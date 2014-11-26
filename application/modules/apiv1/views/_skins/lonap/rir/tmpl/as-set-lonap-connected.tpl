password: {$options.rir.ripe_password}

as-set:         AS-SET-LONAP-CONNECTED
descr:          LONAP Internet Exchange - AS SETs
remarks:        -----------------------------------------------------------------
remarks:        :::::: All LONAP Member AS SETs
remarks:        -----------------------------------------------------------------
remarks:        See also:
remarks:        AS-LONAP-CONNECTED - All LONAP Member ASNs
remarks:        AS-LONAP-MLP       - IPv4 Route Server Participants
remarks:        AS-LONAP-MLP-v6    - IPv6 Route Server Participants
remarks:        -----------------------------------------------------------------
{foreach $asns as $asn => $details}
{if $asn != 8330 and $asn != 8550}
members:        {$details.asmacro}, AS{$asn}  # {$details.name}
{/if}
{/foreach}
remarks:        -----------------------------------------------------------------
remarks:        $ lonap/rir/tmpl/as-set-lonap-connected.tpl
tech-c:         AS8330-RIPE
admin-c:        AS8330-RIPE
mnt-by:         AS8330-MNT
mnt-by:         AS8330-AUTO-MNT
changed:        ripedb@lonap.net
source:         RIPE
