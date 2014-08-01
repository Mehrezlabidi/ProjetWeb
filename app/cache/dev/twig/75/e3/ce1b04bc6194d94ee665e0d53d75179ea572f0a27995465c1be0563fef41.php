<?php

/* MyAppEspritBundle:Article:showbyid.html.twig */
class __TwigTemplate_75e3ce1b04bc6194d94ee665e0d53d75179ea572f0a27995465c1be0563fef41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MyAppEspritBundle::layout.html.twig");

        $this->blocks = array(
            'menu_gauche' => array($this, 'block_menu_gauche'),
            'menu_haut' => array($this, 'block_menu_haut'),
            'article' => array($this, 'block_article'),
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
    public function block_menu_gauche($context, array $blocks = array())
    {
        echo "  ";
        $this->displayParentBlock("menu_gauche", $context, $blocks);
        echo " ";
    }

    // line 6
    public function block_menu_haut($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("menu_haut", $context, $blocks);
        echo " ";
    }

    // line 8
    public function block_article($context, array $blocks = array())
    {
        // line 9
        echo "</br>
  <ul>
    <li>&nbsp;&nbsp;&nbsp;";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "nom"), "html", null, true);
        echo "</li></br>  
    <li><center> ";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "date"), "d/m/Y"), "html", null, true);
        echo "</center></li> 
  </ul>
 </br>
  
    &nbsp;&nbsp;&nbsp;
    
  ";
        // line 18
        if ((!(null === $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image")))) {
            // line 19
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image"), "html", null, true);
            echo "\" alt=\"\" width=\"120\" height=\"120\" class=\"img-border\">
  ";
        }
        // line 21
        echo "  ";
        if ((null === $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image"))) {
            // line 22
            echo "        <img src=\"\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image"), "html", null, true);
            echo "\"alt=\"\" width=\"120\" height=\"120\" class=\"img-border\" />
  ";
        }
        // line 23
        echo "  
   
    </br></br>
    &nbsp;&nbsp;&nbsp;";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "texte"), "html", null, true);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "MyAppEspritBundle:Article:showbyid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 26,  83 => 23,  77 => 22,  74 => 21,  68 => 19,  66 => 18,  57 => 12,  53 => 11,  49 => 9,  46 => 8,  38 => 6,  30 => 5,);
    }
}
