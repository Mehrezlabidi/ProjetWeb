<?php

/* MyAppEspritBundle:Article:voir.html.twig */
class __TwigTemplate_e4c55c1c4f08eb8ac651462e98d2e6113031986998820fb4e0a48325fe6ecd90 extends Twig_Template
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
        echo "<h2>A</h2>

 
 
 
 
 
 
";
    }

    public function getTemplateName()
    {
        return "MyAppEspritBundle:Article:voir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  28 => 4,);
    }
}
