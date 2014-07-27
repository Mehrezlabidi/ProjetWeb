<?php

/* MyAppEspritBundle:Article:lister.html.twig */
class __TwigTemplate_b5f44d90ed8cbaac4915e2758fc41b21f65205757e4d0f8c152aeffbaf459164 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MyAppEspritBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'menu_gauche' => array($this, 'block_menu_gauche'),
            'menu_haut' => array($this, 'block_menu_haut'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MyAppEspritBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "          
";
        // line 7
        $this->env->loadTemplate("MyAppEspritBundle:Article:lister.html.twig")->display(array_merge($context, array("article" => (isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")))));
        // line 8
        $this->env->loadTemplate("MyAppEspritBundle:Article:lister.html.twig")->display(array_merge($context, array("rubrique" => (isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")))));
        // line 9
        echo " ";
        $this->env->loadTemplate("MyAppEspritBundle:Article:lister.html.twig")->display(array_merge($context, array("actualite" => (isset($context["actualite"]) ? $context["actualite"] : $this->getContext($context, "actualite")))));
        // line 10
        $this->env->loadTemplate("MyAppEspritBundle:Article:lister.html.twig")->display(array_merge($context, array("sousrubrique" => (isset($context["sousrubrique"]) ? $context["sousrubrique"] : $this->getContext($context, "sousrubrique")))));
        // line 11
        $this->env->loadTemplate("MyAppEspritBundle:Article:lister.html.twig")->display(array_merge($context, array("menu" => (isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")))));
        // line 12
        $this->env->loadTemplate("MyAppEspritBundle:Article:lister.html.twig")->display(array_merge($context, array("role" => (isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")))));
        // line 13
        echo " 
";
    }

    // line 16
    public function block_menu_gauche($context, array $blocks = array())
    {
        echo " 
             
 ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")));
        foreach ($context['_seq'] as $context["_key"] => $context["rubrique"]) {
            echo " ";
            if (($this->getAttribute($this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "menu"), "id") == 1)) {
                // line 19
                echo "                <li class=\"item1\"><a href=\"#\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "title"), "html", null, true);
                echo " <span>R</span></a>                     
\t\t\t <ul>                 
               ";
                // line 21
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["sousrubrique"]) ? $context["sousrubrique"] : $this->getContext($context, "sousrubrique")));
                foreach ($context['_seq'] as $context["_key"] => $context["sousrubrique"]) {
                    // line 22
                    echo "                         ";
                    // line 23
                    echo "                    ";
                    if (($this->getAttribute($this->getAttribute((isset($context["sousrubrique"]) ? $context["sousrubrique"] : $this->getContext($context, "sousrubrique")), "rubrique"), "id") == $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "id"))) {
                        echo "     
 <li class=\"subitem1\"><a href=\"#\">";
                        // line 24
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sousrubrique"]) ? $context["sousrubrique"] : $this->getContext($context, "sousrubrique")), "title"), "html", null, true);
                        echo " <span>S</span></a></li> 
                    ";
                    }
                    // line 25
                    echo "         
               ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sousrubrique'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                echo " 
               ";
                // line 27
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")));
                foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                    echo " 
                             ";
                    // line 29
                    echo "                      ";
                    if (($this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "rubrique"), "id") == $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "id"))) {
                        echo " 
  <li class=\"subitem1\">
      <a href=\"";
                        // line 31
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_app_esprit_article_voir", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "nom"), "html", null, true);
                        echo " <span>A</span></a>
  </li>
                      ";
                    }
                    // line 33
                    echo "  
               ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 34
                echo "  
\t\t\t</ul>                   
\t\t</li>                
                             ";
            }
            // line 37
            echo "  
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rubrique'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                          
";
    }

    // line 41
    public function block_menu_haut($context, array $blocks = array())
    {
        // line 42
        echo "
";
        // line 43
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")));
        foreach ($context['_seq'] as $context["_key"] => $context["rubrique"]) {
            echo " ";
            if (($this->getAttribute($this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "menu"), "id") == 2)) {
                // line 44
                echo "

        <li class=\"slide p1\"><a href=\"#url\">";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "title"), "html", null, true);
                echo " </a><div><b></b>
\t\t<dl>
                 ";
                // line 48
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["sousrubrique"]) ? $context["sousrubrique"] : $this->getContext($context, "sousrubrique")));
                foreach ($context['_seq'] as $context["_key"] => $context["sousrubrique"]) {
                    // line 49
                    echo "                         ";
                    // line 50
                    echo "                 ";
                    if (($this->getAttribute($this->getAttribute((isset($context["sousrubrique"]) ? $context["sousrubrique"] : $this->getContext($context, "sousrubrique")), "rubrique"), "id") == $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "id"))) {
                        echo " 
\t\t<dt>Sous Rubrique</dt>
\t\t<dd><a href=\"url\">";
                        // line 52
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sousrubrique"]) ? $context["sousrubrique"] : $this->getContext($context, "sousrubrique")), "title"), "html", null, true);
                        echo "</a></dd>
\t\t</dl>
                ";
                    }
                    // line 54
                    echo "         
               ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sousrubrique'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 55
                echo " 
                 ";
                // line 56
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")));
                foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                    echo " 
                             ";
                    // line 58
                    echo "                 ";
                    if (($this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "rubrique"), "id") == $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "id"))) {
                        echo " 
                
\t\t<dl>
\t\t<dt>Article</dt>
\t\t<dd><a href=\"";
                        // line 62
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_app_esprit_article_voir", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "nom"), "html", null, true);
                        echo "</a></dd>
\t\t</dl>
\t\t ";
                    }
                    // line 64
                    echo "  
               ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 65
                echo "  
\t\t 
\t</li>\t 

                     ";
            }
            // line 69
            echo "  
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rubrique'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                          
";
    }

    public function getTemplateName()
    {
        return "MyAppEspritBundle:Article:lister.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 71,  228 => 69,  221 => 65,  214 => 64,  206 => 62,  198 => 58,  192 => 56,  189 => 55,  182 => 54,  176 => 52,  170 => 50,  168 => 49,  164 => 48,  159 => 46,  155 => 44,  149 => 43,  146 => 42,  143 => 41,  138 => 39,  131 => 37,  125 => 34,  118 => 33,  110 => 31,  104 => 29,  98 => 27,  95 => 26,  88 => 25,  83 => 24,  78 => 23,  76 => 22,  72 => 21,  66 => 19,  60 => 18,  54 => 16,  49 => 13,  47 => 12,  45 => 11,  43 => 10,  40 => 9,  38 => 8,  36 => 7,  33 => 6,  30 => 5,);
    }
}
