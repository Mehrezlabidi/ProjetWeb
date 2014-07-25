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
        echo "
 ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")));
        foreach ($context['_seq'] as $context["_key"] => $context["rubrique"]) {
            // line 3
            echo "                <li class=\"item1\"><a href=\"#\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "title"), "html", null, true);
            echo " <span>R</span></a>  
                    
\t\t\t <ul>                 
               ";
            // line 6
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sousrubrique"]) ? $context["sousrubrique"] : $this->getContext($context, "sousrubrique")));
            foreach ($context['_seq'] as $context["_key"] => $context["sousrubrique"]) {
                // line 7
                echo "                         ";
                // line 8
                echo "                    ";
                if (($this->getAttribute($this->getAttribute((isset($context["sousrubrique"]) ? $context["sousrubrique"] : $this->getContext($context, "sousrubrique")), "rubrique"), "id") == $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "id"))) {
                    echo "     
 <li class=\"subitem1\"><a href=\"#\">";
                    // line 9
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sousrubrique"]) ? $context["sousrubrique"] : $this->getContext($context, "sousrubrique")), "title"), "html", null, true);
                    echo " <span>S</span></a></li> 
                    ";
                }
                // line 10
                echo "         
               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sousrubrique'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo " 
 
               ";
            // line 13
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                echo " 
                             ";
                // line 15
                echo "                      ";
                if (($this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "rubrique"), "id") == $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "id"))) {
                    echo " 
  <li class=\"subitem1\"><a href=\"#\">";
                    // line 16
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "nom"), "html", null, true);
                    echo " <span>A</span></a></li>
                      ";
                }
                // line 17
                echo "  
               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "  
\t\t\t</ul>
                    
\t\t</li>                
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rubrique'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "  ";
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
        return array (  93 => 22,  83 => 18,  76 => 17,  71 => 16,  66 => 15,  60 => 13,  56 => 11,  49 => 10,  44 => 9,  37 => 7,  22 => 2,  19 => 1,  57 => 15,  52 => 13,  50 => 12,  48 => 11,  46 => 10,  43 => 9,  41 => 8,  39 => 8,  36 => 6,  33 => 6,  28 => 15,  26 => 3,  21 => 2,);
    }
}
