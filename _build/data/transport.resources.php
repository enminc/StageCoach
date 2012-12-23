<?php
/**
 * resources transport file for StageCoach extra
 *
 * Copyright 2012 by Bob Ray <http://bobsguides.com>
 * Created on 12-22-2012
 *
 * @package stagecoach
 * @subpackage build
 */

if (! function_exists('stripPhpTags')) {
    function stripPhpTags($filename) {
        $o = file_get_contents($filename);
        $o = str_replace('<' . '?' . 'php', '', $o);
        $o = str_replace('?>', '', $o);
        $o = trim($o);
        return $o;
    }
}
/* @var $modx modX */
/* @var $sources array */
/* @var xPDOObject[] $resources */


$resources = array();

$resources[1] = $modx->newObject('modResource');
$resources[1]->fromArray(array(
    'id' => '1',
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Staged Resources',
    'longtitle' => '',
    'description' => '',
    'alias' => 'staged-resources',
    'link_attributes' => '',
    'published' => '',
    'isfolder' => '1',
    'introtext' => '',
    'richtext' => '',
    'template' => 'default',
    'menuindex' => '53',
    'searchable' => '1',
    'cacheable' => '1',
    'createdby' => '1',
    'editedby' => '1',
    'deleted' => '',
    'deletedon' => '0',
    'deletedby' => '0',
    'menutitle' => '',
    'donthit' => '',
    'privateweb' => '',
    'privatemgr' => '',
    'content_dispo' => '0',
    'hidemenu' => '1',
    'class_key' => 'modDocument',
    'context_key' => 'web',
    'content_type' => '1',
    'hide_children_in_tree' => '0',
    'show_in_tree' => '1',
    'properties' => '',
), '', true, true);
$resources[1]->setContent(file_get_contents($sources['data'].'resources/staged_resources.content.html'));

$resources[2] = $modx->newObject('modResource');
$resources[2]->fromArray(array(
    'id' => '2',
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'StageCoach Archive',
    'longtitle' => '',
    'description' => '',
    'alias' => 'stagecoach-archive',
    'link_attributes' => '',
    'published' => '',
    'isfolder' => '',
    'introtext' => '',
    'richtext' => '',
    'template' => 'default',
    'menuindex' => '54',
    'searchable' => '1',
    'cacheable' => '1',
    'createdby' => '1',
    'editedby' => '1',
    'deleted' => '',
    'deletedon' => '0',
    'deletedby' => '0',
    'menutitle' => '',
    'donthit' => '',
    'privateweb' => '',
    'privatemgr' => '',
    'content_dispo' => '0',
    'hidemenu' => '',
    'class_key' => 'modDocument',
    'context_key' => 'web',
    'content_type' => '1',
    'hide_children_in_tree' => '0',
    'show_in_tree' => '1',
    'properties' => '',
), '', true, true);
$resources[2]->setContent(file_get_contents($sources['data'].'resources/stagecoach_archive.content.html'));

return $resources;