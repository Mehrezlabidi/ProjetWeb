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

    // line 4
    public function block_article($context, array $blocks = array())
    {
        // line 5
        echo "</br>
<ul>
    <li>&nbsp;&nbsp;&nbsp;";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "nom"), "html", null, true);
        echo "  </li></br> 
    <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        // line 8
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "date"), "d/m/Y"), "html", null, true);
        echo " </li></br>
    
</ul>
 
</br>
  
    &nbsp;&nbsp;&nbsp;<img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image"), "html", null, true);
        echo "\" alt=\"\" width=\"100\" height=\"100\" class=\"img-border\"> </br></br>
     &nbsp;&nbsp;&nbsp;";
        // line 15
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
        return array (  52 => 15,  48 => 14,  39 => 8,  35 => 7,  31 => 5,  28 => 4,);
    }
}
