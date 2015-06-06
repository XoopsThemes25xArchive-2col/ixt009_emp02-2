<?php
/*
* Qualitative Themes for XOOPS
*
* @license       http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
* @project       IXThemes Project, http://ixthemes.org
* @theme_name    ixt009_emp02
* @theme_demo    http://ixthemes.sourceforge.net/demo/x/index.php?xoops_theme_select=ixt009_emp02
* @theme_author  Alexander Galochkin (algalochkin at users.sourceforge.net)
* @version       $Id: footer_custom_block01.php 1303 2009-09-08 17:19:02Z algalochkin $
*
* Thanks you, that you have left this header untouched!!!
*/
$block = array(
					'id'        => '1001',
					'title'     => 'Custom Footer Block01',
					'content'   => '
					<div>
					Hello!
					<br/>
					This is custom footer block 01.
					<blockquote>
					<p>
					&ldquo;IXThemes - Suit For Your Content&rdquo;
					<br />
					&ldquo;XOOPS - Powered by you!&rdquo;
					</p>
					</blockquote>
					</div>
					',
	);

$this->assign('fblock', $block);

?>