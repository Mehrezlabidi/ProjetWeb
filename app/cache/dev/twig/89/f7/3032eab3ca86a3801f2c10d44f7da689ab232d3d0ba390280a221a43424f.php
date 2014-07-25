<?php

/* MyAppEspritBundle:Article:showById.html.twig */
class __TwigTemplate_89f73032eab3ca86a3801f2c10d44f7da689ab232d3d0ba390280a221a43424f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'article' => array($this, 'block_article'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
 
 ";
        // line 4
        $this->displayBlock('article', $context, $blocks);
    }

    public function block_article($context, array $blocks = array())
    {
        // line 5
        echo " 
<html>
<head>
</head>
<body>
    
   ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"), "html", null, true);
        echo "
   ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "texte"), "html", null, true);
        echo "
   
   ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "nom"), "html", null, true);
        echo "
    
</body>
</html>
 



 

";
    }

    public function getTemplateName()
    {
        return "MyAppEspritBundle:Article:showById.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  47 => 14,  42 => 12,  30 => 5,  24 => 4,  20 => 2,  45 => 18,  43 => 17,  38 => 11,  29 => 5,);
    }
}
