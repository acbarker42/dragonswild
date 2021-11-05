<?php
/**
 *------
 * BGA framework: © Gregory Isabelli <gisabelli@boardgamearena.com> & Emmanuel Colin <ecolin@boardgamearena.com>
 * DragonsWild implementation : © Autumn Barker <autumn.c.barker@gmail.com>
 * 
 * This code has been produced on the BGA studio platform for use on http://boardgamearena.com.
 * See http://en.boardgamearena.com/#!doc/Studio for more information.
 * -----
 *
 * material.inc.php
 *
 * DragonsWild game material description
 *
 * Here, you can describe the material of your game with PHP variables.
 *   
 * This file is loaded in your game logic class constructor, ie these variables
 * are available everywhere in your game logic code.
 *
 */

$this->colors = array(
    1 => array( 'name' => clienttranslate('yellow'),
                'nametr' => self::_('yellow') ),
    2 => array( 'name' => clienttranslate('red'),
                'nametr' => self::_('red') ),
    3 => array( 'name' => clienttranslate('green'),
                'nametr' => self::_('green') ),
    4 => array( 'name' => clienttranslate('pink'),
                'nametr' => self::_('pink') ),
    5 => array( 'name' => clienttranslate('teal'),
                'nametr' => self::_('teal') ),
    6 => array( 'name' => clienttranslate('orange'),
                'nametr' => self::_('orange') ),
    7 => array( 'name' => clienttranslate('purple'),
                'nametr' => self::_('purple') ),
    8 => array( 'name' => clienttranslate('blue'),
                'nametr' => self::_('blue') )
);

$this->values_label = array(
    1 => '1',
    2 => '2',
    3 => '3',
    4 => '4',
    5 => '5',
    6 => '6',
    7 => '7',
    8 => '8',
    9 => clienttranslate('W'),
);
/*

Example:

$this->card_types = array(
    1 => array( "card_name" => ...,
                ...
              )
);

*/




