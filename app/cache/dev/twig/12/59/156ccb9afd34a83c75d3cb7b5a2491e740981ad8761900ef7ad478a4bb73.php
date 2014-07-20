<?php

/* MyAppEspritBundle:Default:index.html.twig */
class __TwigTemplate_1259156ccb9afd34a83c75d3cb7b5a2491e740981ad8761900ef7ad478a4bb73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MyAppEspritBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
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
        echo $this->env->getExtension('actions')->renderUri("MyAppEspritBundle:Rubrique:top", array());
    }

    public function getTemplateName()
    {
        return "MyAppEspritBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 5,);
    }
}
