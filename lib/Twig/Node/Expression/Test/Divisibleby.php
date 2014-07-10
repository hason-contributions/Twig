<?php

/*
 * This file is part of Twig.
 *
 * (c) 2011 Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Checks if a variable is divisible by a number.
 *
 * <pre>
 *  {% if loop.index is divisible by(3) %}
 * </pre>
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Twig_Node_Expression_Test_Divisibleby extends Twig_Node_Expression_Test
{
    public function compile(Twig_Compiler $compiler)
    {
        $arguments = $this->getNode('arguments');
        $compiler
            ->raw('(0 == twig_modulo(')
            ->subcompile($this->getNode('node'))
            ->raw(', ')
            ->subcompile($arguments->getNode(0))
        ;

        if ($arguments->hasNode(1)) {
            $compiler
                ->raw(', ')
                ->subcompile($arguments->getNode(1))
            ;
        }

        $compiler->raw('))');
    }
}
