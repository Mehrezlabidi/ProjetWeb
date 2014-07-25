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
            'menu' => array($this, 'block_menu'),
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
    public function block_menu($context, array $blocks = array())
    {
        // line 17
        echo " ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")));
        foreach ($context['_seq'] as $context["_key"] => $context["rubrique"]) {
            // line 18
            echo "                <li class=\"item1\"><a href=\"#\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "title"), "html", null, true);
            echo " <span>R</span></a>                     
\t\t\t <ul>                 
               ";
            // line 20
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sousrubrique"]) ? $context["sousrubrique"] : $this->getContext($context, "sousrubrique")));
            foreach ($context['_seq'] as $context["_key"] => $context["sousrubrique"]) {
                // line 21
                echo "                         ";
                // line 22
                echo "                    ";
                if (($this->getAttribute($this->getAttribute((isset($context["sousrubrique"]) ? $context["sousrubrique"] : $this->getContext($context, "sousrubrique")), "rubrique"), "id") == $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "id"))) {
                    echo "     
 <li class=\"subitem1\"><a href=\"#\">";
                    // line 23
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sousrubrique"]) ? $context["sousrubrique"] : $this->getContext($context, "sousrubrique")), "title"), "html", null, true);
                    echo " <span>S</span></a></li> 
                    ";
                }
                // line 24
                echo "         
               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sousrubrique'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo " 
               ";
            // line 26
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                echo " 
                             ";
                // line 28
                echo "                      ";
                if (($this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "rubrique"), "id") == $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "id"))) {
                    echo " 
  <li class=\"subitem1\">
      <a href=\"";
                    // line 30
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_app_esprit_article_voir", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "nom"), "html", null, true);
                    echo " <span>A</span></a>
  </li>
                      ";
                }
                // line 32
                echo "  
               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "  
\t\t\t</ul>                   
\t\t</li>                
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rubrique'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
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
        return array (  120 => 33,  113 => 32,  105 => 30,  99 => 28,  93 => 26,  90 => 25,  83 => 24,  78 => 23,  73 => 22,  71 => 21,  67 => 20,  61 => 18,  56 => 17,  53 => 16,  48 => 13,  46 => 12,  44 => 11,  42 => 10,  39 => 9,  37 => 8,  35 => 7,  32 => 6,  29 => 5,);
    }
}
