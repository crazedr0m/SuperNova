<?php

/*
#############################################################################
#  Filename: notes.mo
#  Project: SuperNova.WS
#  Website: http://www.supernova.ws
#  Description: Massive Multiplayer Online Browser Space Startegy Game
#
#  Copyright © 2009-2012 Gorlum for Project "SuperNova.WS"
#############################################################################
*/

/**
*
* @package language
* @system [Russian]
* @version 35a12.4
*
*/

/**
* DO NOT CHANGE
*/

if (!defined('INSIDE')) die();

$lang = array_merge($lang, array(
  'note_page_header' => 'Заметки',
  'note_date' => 'Дата',
  'note_priority' => 'Важность',
  'note_note' => 'Заметка',
//  'note_title' => 'Заголовок',
//  'note_text' => 'Текст',
  'note_priorities' => array(
    0 => 'Совсем не важная',
    1 => 'Не важная',
    2 => 'Обычная',
    3 => 'Важная',
    4 => 'Очень важная',
  ),
  'note_new_title' => 'Заголовок новой заметки',
  'note_new_text' => 'Текст новой заметки',

  'note_err_none_added' => 'Заметка успешно добавлена',
  'note_err_none_changed' => 'Заметка успешно изменена',
  'note_err_note_not_found' => 'Заметка с таким ID не найдена. Возможно, её удалили в соседнем окне',
  'note_err_owner_wrong' => 'Вы не являетесь владельцем этой заметки',
  'note_err_note_empty' => 'Вы ничего не написали в заметке - она не будет добавлена',

  'note_delete' => 'Удалить заметки',
  'note_range_select' => '-- ВЫБЕРИТЕ ДИАПАЗОН --',
  'note_range_marked' => 'Отмеченные заметки',
  'note_range_marked_not' => 'Неотмеченые заметки',
  'note_range_all' => 'Все заметки',

  'note_warn_no_range' => 'Вы не выбрали диапазон. Нечего удалять',
  'note_err_none_selected' => 'Не выбрано ни одной заметки - удаление не производится. Для удаления всех заметок выберите диапазон "Все заметки"',

));

?>
