<?php
/**
 * 
 *
 * All rights reserved.
 * 
 * @author Falaleev Maxim
 * @email max@studio107.ru
 * @version 1.0
 * @company Studio107
 * @site http://studio107.ru
 * @date 28/10/14.10.2014 13:15
 */

namespace Modules\Cart\Interfaces;

interface ICartItem
{
    /**
     * @return mixed unique product identification
     */
    public function getUniqueId();

    /**
     * @return int|float
     */
    public function getPrice();
}
