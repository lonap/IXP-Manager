password: {$options.rir.ripe_password}

aut-num:        AS8330
as-name:        LONAP
descr:          LONAP Ltd
remarks:        -----------------------------------------------------------------
remarks:        :::::: LONAP Network AS8330 Policy
remarks:        -----------------------------------------------------------------
remarks:        WARNING! DO NOT use this aut-num object to build your LONAP
remarks:        policy / filters, connected member ASN lists, or similar 
remarks:        automation - IT WILL GO WRONG for you because this is LONAP's
remarks:        own ASN policy! :-)
remarks:        
remarks:        Instead see: AS-LONAP-CONNECTED - All LONAP Members
remarks:                     AS-LONAP-MLP       - IPv4 Route Server Participants
remarks:                     AS-LONAP-MLP-v6    - IPv6 Route Server Participants
remarks:        -----------------------------------------------------------------
remarks:        :::::: Transit Providers
remarks:        -----------------------------------------------------------------
import:         from AS6939 accept any # Hurricane
export:         to   AS6939 announce AS-LONAP
import:         from AS5413 accept any # Daisy
export:         to   AS5413 announce AS-LONAP
import:         from AS39326 accept any # Goscomb
export:         to   AS39326 announce AS-LONAP
remarks:        -----------------------------------------------------------------
remarks:        :::::: Downstream ASNs
remarks:        -----------------------------------------------------------------
import:         from AS33073 accept AS33073:AS-SET  # ISC F-Root Management
export:         to   AS33073 announce any
remarks:        -----------------------------------------------------------------
remarks:        :::::: Peers
remarks:        -----------------------------------------------------------------
{foreach $asns as $asn => $details}
{if $asn != 8330 and $asn != 8550 and $asn != 5413 and $asn != 6939 and $asn != 39326 and $asn != 33073}
import:         from AS{$asn} accept {$details.asmacro} # {$details.name}
export:         to   AS{$asn} announce AS-LONAP
{/if}
{/foreach}
remarks:        -----------------------------------------------------------------
remarks:        $ lonap/rir/tmpl/autnum.tpl
org:            ORG-LL117-RIPE
admin-c:        AS8330-RIPE
tech-c:         AS8330-RIPE
mnt-by:         AS8330-MNT
mnt-by:         AS8330-AUTO-MNT
mnt-by:         RIPE-NCC-END-MNT
changed:        hostmaster@ripe.net 20100929
changed:        hostmaster@ripe.net 20120530
changed:        ripedb@lonap.net
source:         RIPE
