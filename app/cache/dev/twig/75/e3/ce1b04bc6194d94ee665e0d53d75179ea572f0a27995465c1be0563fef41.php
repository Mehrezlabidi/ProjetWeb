<?php

/* MyAppEspritBundle:Article:showbyid.html.twig */
class __TwigTemplate_75e3ce1b04bc6194d94ee665e0d53d75179ea572f0a27995465c1be0563fef41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MyAppEspritBundle::layout.html.twig");

        $this->blocks = array(
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

    // line 7
    public function block_article($context, array $blocks = array())
    {
        // line 8
        echo "</br>
  <ul>
    <li>&nbsp;&nbsp;&nbsp;";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "nom"), "html", null, true);
        echo "</li></br>  
    <li><center> ";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "date"), "d/m/Y"), "html", null, true);
        echo "</center></li> 
  </ul>
 </br>
  
    &nbsp;&nbsp;&nbsp;
    
  ";
        // line 17
        if ((!(null === $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image")))) {
            // line 18
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image"), "html", null, true);
            echo "\" alt=\"\" width=\"120\" height=\"120\" class=\"img-border\">
  ";
        }
        // line 20
        echo "  ";
        if ((null === $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image"))) {
            // line 21
            echo "        <img src=\"\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image"), "html", null, true);
            echo "\"alt=\"\" width=\"120\" height=\"120\" class=\"img-border\" />
  ";
        }
        // line 22
        echo "  
   
    </br></br>
    &nbsp;&nbsp;&nbsp;";
        // line 25
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
        return array (  70 => 25,  65 => 22,  59 => 21,  56 => 20,  50 => 18,  48 => 17,  39 => 11,  35 => 10,  31 => 8,  28 => 7,);
    }
}
