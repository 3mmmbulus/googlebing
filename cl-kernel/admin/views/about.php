<?php

echo Bootstrap::pageTitle(array('title'=>$L->g('About'), 'icon'=>'info-circle'));

echo '
<table class="table table-striped mt-3">
	<tbody>
';

echo '<tr>';
echo '<td>Cloudsuo Edition</td>';
if (defined('CLOUDSUO_PRO')) {
	echo '<td>PRO - '.$L->g('Thanks for supporting Cloudsuo').' <span class="fa fa-heart" style="color: #ffc107"></span></td>';
} else {
	echo '<td>Standard - <a target="_blank" href="https://pro.cloudsuo.com">'.$L->g('Upgrade to Cloudsuo PRO').'</a></td>';
}
echo '</tr>';

echo '<tr>';
echo '<td>Cloudsuo Version</td>';
echo '<td>'.CLOUDSUO_VERSION.'</td>';
echo '</tr>';

echo '<tr>';
echo '<td>Cloudsuo Codename</td>';
echo '<td>'.CLOUDSUO_CODENAME.'</td>';
echo '</tr>';

echo '<tr>';
echo '<td>Cloudsuo Build Number</td>';
echo '<td>'.CLOUDSUO_BUILD.'</td>';
echo '</tr>';

echo '<tr>';
echo '<td>Disk usage</td>';
echo '<td>'.Filesystem::bytesToHumanFileSize(Filesystem::getSize(PATH_ROOT)).'</td>';
echo '</tr>';

echo '<tr>';
echo '<td><a href="'.HTML_PATH_ADMIN_ROOT.'developers'.'">Cloudsuo Developers</a></td>';
echo '<td></td>';
echo '</tr>';

echo '
	</tbody>
</table>
';
