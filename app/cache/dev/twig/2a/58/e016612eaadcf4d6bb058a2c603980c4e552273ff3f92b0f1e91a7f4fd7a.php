<?php

/* MyAppEspritBundle:Article:liste.html.twig */
class __TwigTemplate_2a58e016612eaadcf4d6bb058a2c603980c4e552273ff3f92b0f1e91a7f4fd7a extends Twig_Template
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
        // line 1
        echo "<table>
";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4
        echo " 
        
 ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")));
        foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
            echo "\t 
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "   
    
    
 ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actualite"]) ? $context["actualite"] : $this->getContext($context, "actualite")));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo " 
        
 ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sousrubrique"]) ? $context["sousrubrique"] : $this->getContext($context, "sousrubrique")));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            echo "\t 
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo " 
    
";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo " 
        
 ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            echo "\t 
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo " 
    
</table>";
    }

    public function getTemplateName()
    {
        return "MyAppEspritBundle:Article:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 22,  87 => 21,  83 => 19,  75 => 17,  71 => 15,  61 => 14,  34 => 6,  19 => 1,  881 => 553,  876 => 459,  870 => 17,  866 => 16,  862 => 15,  858 => 14,  854 => 13,  850 => 12,  844 => 9,  840 => 7,  837 => 6,  826 => 555,  824 => 553,  809 => 541,  802 => 537,  772 => 510,  750 => 491,  741 => 485,  732 => 479,  725 => 475,  717 => 470,  709 => 465,  702 => 460,  700 => 459,  697 => 458,  688 => 453,  686 => 452,  683 => 451,  673 => 444,  663 => 437,  657 => 434,  649 => 429,  635 => 418,  627 => 413,  609 => 398,  599 => 391,  582 => 377,  568 => 366,  558 => 359,  551 => 355,  543 => 350,  535 => 345,  525 => 338,  517 => 333,  502 => 321,  486 => 308,  476 => 301,  470 => 298,  463 => 294,  455 => 289,  447 => 284,  439 => 279,  432 => 275,  421 => 267,  410 => 259,  402 => 254,  386 => 241,  371 => 229,  362 => 223,  355 => 219,  346 => 213,  328 => 198,  320 => 193,  310 => 186,  300 => 179,  293 => 175,  286 => 171,  278 => 166,  238 => 128,  226 => 122,  219 => 121,  214 => 120,  209 => 119,  203 => 117,  199 => 115,  192 => 114,  187 => 113,  182 => 112,  180 => 111,  176 => 110,  169 => 107,  165 => 106,  153 => 97,  147 => 94,  143 => 93,  139 => 92,  130 => 86,  125 => 84,  110 => 72,  106 => 71,  102 => 70,  98 => 69,  94 => 68,  85 => 61,  80 => 58,  65 => 46,  57 => 12,  49 => 10,  30 => 4,  28 => 6,  22 => 2,  58 => 18,  56 => 17,  53 => 16,  48 => 13,  46 => 12,  44 => 7,  42 => 10,  39 => 9,  37 => 8,  35 => 7,  32 => 6,  29 => 5,);
    }
}
