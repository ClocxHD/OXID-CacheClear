[{$smarty.block.parent}]
[{oxscript include=$oViewConf->getModuleUrl('OXIDCacheClear','out/admin/src/js/OXIDCacheClear.js')}]
<li class="sep">
    <a onclick="ft_cachebtnclear([{$oViewConf->getSelfLink()}]&cl=navigation&amp;fnc=OXIDCacheClear_btn)" id="ft_tmp_clear" class="rc"><b>[{oxmultilang ident="OXIDCacheClear_btn"}]</b></a>
</li>