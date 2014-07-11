<?php

/*
 * This file is part of Twig.
 *
 * (c) 2009 Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Twig_NodeVisitor_Escaper implements output escaping.
 *
 * @author Martin Hasoň <martin.hason@gmail.com>
 */
class Macro implements Twig_NodeVisitorInterface
{
    /**
     * {@inheritdoc}
     */
    public function enterNode(Twig_NodeInterface $node, Twig_Environment $env)
    {
        if ($node instanceof Twig_Node_Module) {
        } elseif ($node instanceof Twig_Node_Block) {
        } elseif ($node instanceof Twig_Node_Set) {
            $node->getNode('names');
        } elseif ($node instanceof Twig_Node_F) {

        } elseif ($node instanceof Twig_Node_Import) {

        } elseif ($node instanceof Twig_Node_Expression_MethodCall) {
            $node->getNode('node')->getAttribute('name');
        }
    }

    /**
     * {@inheritdoc}
     */
    public function leaveNode(Twig_NodeInterface $node, Twig_Environment $env)
    {
        if ($node instanceof Twig_Node_Block) {
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getPriority()
    {
        // TODO: Implement getPriority() method.
    }

}
