<?php
/**
 * $Id: xoops_version.php v 1.6 20 November 2003 Catwolf Exp $
 * Module: WF-Channel
 * Version: v1.0.3
 * Release Date: 17 November 2003
 * Author: Catzwolf
 * Licence: GNU
 */

$modversion['name'] = _MI_WFS_CHANNEL;
$modversion['version'] = 1.03;
$modversion['description'] = _MI_WFS_CHANNELDESC;
$modversion['author'] = "Catzwolf";
$modversion['credits'] = "Catzwolf";

$modversion['help'] = "wfchannel.html";
$modversion['license'] = "GPL see LICENSE";
$modversion['official'] = 0;
$modversion['image'] = "images/wfs_channel_slogo.png";
$modversion['dirname'] = "jdocs";
// Sql file (must contain sql generated by phpMyAdmin or phpPgAdmin)
// All tables should not have any prefix!
$modversion['sqlfile']['mysql'] = "sql/wfschannel.sql";
// Tables created by sql file (without prefix!)
$modversion['tables'][1] = "wfschannel";
$modversion['tables'][2] = "wfslinktous";
$modversion['tables'][3] = "wfsrefer";
// Admin things
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = "admin/index.php";
$modversion['adminmenu'] = "admin/menu.php";
// Blocks
// Menu
$modversion['hasMain'] = 1;

global $xoopsDB, $xoopsUser, $xoopsConfig, $myts, $xoopsModule;

if ( is_object( $xoopsModule ) )
{
    $modhandler = & xoops_gethandler( 'module' );
    $config_handler = & xoops_gethandler( 'config' );
    $xoopsModuleConfig = & $config_handler -> getConfigsByCat( 0, $xoopsModule -> getVar( 'mid' ) );
    $module_id = $xoopsModule -> getVar( 'mid' );
    $gperm_handler = & xoops_gethandler( 'groupperm' );
} 

$groups = is_object( $xoopsUser ) ? $xoopsUser -> getGroups() : XOOPS_GROUP_ANONYMOUS;

$result2 = $xoopsDB -> query( "SELECT CID, pagetitle, defaultpage FROM " . $xoopsDB -> prefix( "wfschannel" ) . " WHERE defaultpage = '0' AND submenu = 1 ORDER BY weight" );
$i = 1;

if ( is_object( $xoopsModule ) )
{
    while ( list( $CID, $pagetitle ) = $xoopsDB -> fetchRow( $result2 ) )
    {
        if ( $gperm_handler -> checkRight( 'Channel Permissions', $CID, $groups, $xoopsModule -> getVar( 'mid' ) ) )
        {
            $modversion['sub'][$i]['name'] = $pagetitle;
            $modversion['sub'][$i]['url'] = "index.php?pagenum=" . $CID . "";
        } 
        $i++;
    } 

    $result = $xoopsDB -> query( "SELECT submenuitem, titlelink FROM " . $xoopsDB -> prefix( "wfslinktous" ) . "" );
    list( $submenuitem, $titlelink ) = $xoopsDB -> fetchrow( $result );

    if ( $submenuitem )
    {
        if ( is_object( $xoopsUser ) )
        {
            $modversion['sub'][$i]['name'] = $titlelink;
            $modversion['sub'][$i]['url'] = "index.php?op=link";
        } 
        else
        {
            if ( $xoopsModuleConfig['anonlink'] )
            {
                $modversion['sub'][$i]['name'] = $titlelink;
                $modversion['sub'][$i]['url'] = "index.php?op=link";
            } 
        } 
    } 
    $i++;
    $result2 = $xoopsDB -> query( "SELECT submenuitem , titlerefer FROM " . $xoopsDB -> prefix( "wfsrefer" ) . "" );
    list( $subitem, $refertitle ) = $xoopsDB -> fetchrow( $result2 );

    if ( $subitem )
    {
        if ( is_object( $xoopsUser ) )
        {
                $modversion['sub'][$i]['name'] = $refertitle;
                $modversion['sub'][$i]['url'] = "index.php?op=refer";
        } 
        else
        {
            if ( $xoopsModuleConfig['anonrefer'] )
            {
                $modversion['sub'][$i]['name'] = $refertitle;
                $modversion['sub'][$i]['url'] = "index.php?op=refer";
            } 
        } 
    } 
}
    // Search
    $modversion['hasSearch'] = 1;
    $modversion['search']['file'] = "include/search.inc.php";
    $modversion['search']['func'] = "wfchannel_search";
    // Comments
    $modversion['hasComments'] = 1;
    $modversion['comments']['pageName'] = 'index.php';
    $modversion['comments']['itemName'] = 'pagenum';
    // Comment callback functions
    $modversion['comments']['callbackFile'] = 'include/comment_functions.php';
    $modversion['comments']['callback']['approve'] = 'wfchannel_com_approve';
    $modversion['comments']['callback']['update'] = 'wfchannel_com_update';
    // Templates
    $modversion['templates'][1]['file'] = 'wfchannel_index.html';
    $modversion['templates'][1]['description'] = 'Display index';
    $modversion['templates'][2]['file'] = 'wfchannel_linktous.html';
    $modversion['templates'][2]['description'] = 'Display Link to Us page';
    $modversion['templates'][3]['file'] = 'wfchannel_refer.html';
    $modversion['templates'][3]['description'] = 'Display refer page';

    $modversion['config'][1]['name'] = 'htmluploaddir';
    $modversion['config'][1]['title'] = '_MI_CHAN_HTMLUPLOADDIR';
    $modversion['config'][1]['description'] = '_MI_CHAN_HTMLUPLOADDIRDSC';
    $modversion['config'][1]['formtype'] = 'textbox';
    $modversion['config'][1]['valuetype'] = 'text';
    $modversion['config'][1]['default'] = 'modules/jdocs/html';

    $modversion['config'][2]['name'] = 'uploaddir';
    $modversion['config'][2]['title'] = '_MI_CHAN_UPLOADDIR';
    $modversion['config'][2]['description'] = '_MI_CHAN_UPLOADDIRDSC';
    $modversion['config'][2]['formtype'] = 'textbox';
    $modversion['config'][2]['valuetype'] = 'text';
    $modversion['config'][2]['default'] = 'modules/jdocs/images';

    $modversion['config'][3]['name'] = 'linkimages';
    $modversion['config'][3]['title'] = '_MI_CHAN_LINKIMAGES';
    $modversion['config'][3]['description'] = '_MI_CHAN_UPLOADDIRDSC';
    $modversion['config'][3]['formtype'] = 'textbox';
    $modversion['config'][3]['valuetype'] = 'text';
    $modversion['config'][3]['default'] = 'modules/jdocs/images/linkimages';

    $modversion['config'][4]['name'] = 'maxfilesize';
    $modversion['config'][4]['title'] = '_MI_CHAN_MAXFILESIZE';
    $modversion['config'][4]['description'] = '_MI_CHAN_MAXFILESIZEDSC';
    $modversion['config'][4]['formtype'] = 'textbox';
    $modversion['config'][4]['valuetype'] = 'int';
    $modversion['config'][4]['default'] = 50000;

    $modversion['config'][5]['name'] = 'maximgwidth';
    $modversion['config'][5]['title'] = '_MI_CHAN_IMGWIDTH';
    $modversion['config'][5]['description'] = '_MI_CHAN_IMGWIDTHDSC';
    $modversion['config'][5]['formtype'] = 'textbox';
    $modversion['config'][5]['valuetype'] = 'int';
    $modversion['config'][5]['default'] = 600;

    $modversion['config'][6]['name'] = 'maximgheight';
    $modversion['config'][6]['title'] = '_MI_CHAN_IMGHEIGHT';
    $modversion['config'][6]['description'] = '_MI_CHAN_IMGHEIGHTDSC';
    $modversion['config'][6]['formtype'] = 'textbox';
    $modversion['config'][6]['valuetype'] = 'int';
    $modversion['config'][6]['default'] = 600;

    $modversion['config'][7]['name'] = 'perpage';
    $modversion['config'][7]['title'] = '_MI_CHAN_PERPAGE';
    $modversion['config'][7]['description'] = '_MI_MYDOWNLOADS_PERPAGEDSC';
    $modversion['config'][7]['formtype'] = 'select';
    $modversion['config'][7]['valuetype'] = 'int';
    $modversion['config'][7]['default'] = 10;
    $modversion['config'][7]['options'] = array( '5' => 5, '10' => 10, '15' => 15, '20' => 20, '25' => 25, '30' => 30, '50' => 50 );

    $modversion['config'][8]['name'] = 'anonlink';
    $modversion['config'][8]['title'] = '_MI_CHAN_LINK';
    $modversion['config'][8]['description'] = '';
    $modversion['config'][8]['formtype'] = 'yesno';
    $modversion['config'][8]['valuetype'] = 'int';
    $modversion['config'][8]['default'] = 1;

    $modversion['config'][9]['name'] = 'anonrefer';
    $modversion['config'][9]['title'] = '_MI_CHAN_ANONREFER';
    $modversion['config'][9]['description'] = '';
    $modversion['config'][9]['formtype'] = 'yesno';
    $modversion['config'][9]['valuetype'] = 'int';
    $modversion['config'][9]['default'] = 1;

    ?>
