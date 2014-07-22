<?php

/* MyAppEspritBundle:Rubrique:liste.html.twig */
class __TwigTemplate_46442c2e736d4e0f7fef01fbc827b5d0394c0e50a0e3367b0fe42ab6d2d928d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "

<table>
";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 6
            echo "    <tr>
\t<!--  <td>";
            // line 7
            echo "</td> 
          <td><b>No  </b>";
            // line 10
            echo "          <td><b>access</b></td>
          ";
            // line 12
            echo "          <td><b>denied</b></td>
          ";
            // line 13
            echo " -->
          <td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "title"), "html", null, true);
            echo "</td>
       <!--   <td><b>No  </b>";
            // line 15
            echo "</td>     -->  
";
            // line 17
            echo "   <!--  <tr>
\t<td>Aucun rubrique n'a été trouvé.</td>
    </tr>   -->  
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "MyAppEspritBundle:Rubrique:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 21,  50 => 17,  43 => 14,  40 => 13,  31 => 7,  28 => 6,  19 => 2,  838 => 545,  833 => 103,  828 => 101,  822 => 7,  816 => 17,  812 => 16,  808 => 15,  804 => 14,  800 => 13,  796 => 12,  790 => 9,  784 => 7,  781 => 6,  770 => 547,  768 => 545,  753 => 533,  746 => 529,  716 => 502,  694 => 483,  685 => 477,  676 => 471,  669 => 467,  661 => 462,  653 => 457,  644 => 450,  639 => 449,  637 => 448,  634 => 447,  624 => 440,  614 => 433,  608 => 430,  600 => 425,  586 => 414,  578 => 409,  560 => 394,  550 => 387,  533 => 373,  519 => 362,  509 => 355,  502 => 351,  494 => 346,  486 => 341,  476 => 334,  468 => 329,  453 => 317,  437 => 304,  427 => 297,  421 => 294,  414 => 290,  406 => 285,  398 => 280,  390 => 275,  383 => 271,  372 => 263,  361 => 255,  353 => 250,  337 => 237,  322 => 225,  313 => 219,  306 => 215,  297 => 209,  279 => 194,  271 => 189,  261 => 182,  251 => 175,  244 => 171,  237 => 167,  229 => 162,  167 => 103,  162 => 101,  151 => 93,  145 => 90,  141 => 89,  137 => 88,  128 => 82,  123 => 80,  108 => 68,  104 => 67,  100 => 66,  96 => 65,  92 => 64,  83 => 57,  78 => 54,  63 => 42,  55 => 37,  47 => 15,  32 => 19,  30 => 6,  24 => 5,  37 => 12,  34 => 10,  29 => 3,);
    }
}
