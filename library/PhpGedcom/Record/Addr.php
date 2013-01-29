<?php
/**
 * php-gedcom
 *
 * php-gedcom is a library for parsing, manipulating, importing and exporting
 * GEDCOM 5.5 files in PHP 5.3+.
 *
 * @author          Kristopher Wilson <kristopherwilson@gmail.com>
 * @copyright       Copyright (c) 2010-2013, Kristopher Wilson
 * @package         php-gedcom 
 * @license         GPL-3.0
 * @link            http://github.com/mrkrstphr/php-gedcom
 */

namespace PhpGedcom\Record;

/**
 *
 */
class Addr extends \PhpGedcom\Record
{
    protected $_addr = null;
    protected $_adr1 = null;
    protected $_adr2 = null;
    protected $_city = null;
    protected $_stae = null;
    protected $_post = null;
    protected $_ctry = null;
    
}
