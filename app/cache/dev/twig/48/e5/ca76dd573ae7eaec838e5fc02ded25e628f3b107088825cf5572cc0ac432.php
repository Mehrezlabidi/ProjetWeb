<?php

/* MyAppEspritBundle:Rubrique:lister.html.twig */
class __TwigTemplate_48e5ca76dd573ae7eaec838e5fc02ded25e628f3b107088825cf5572cc0ac432 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MyAppEspritBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'Rubrique' => array($this, 'block_Rubrique'),
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
    }

    // line 4
    public function block_Rubrique($context, array $blocks = array())
    {
        // line 5
        $this->env->loadTemplate("MyAppEspritBundle:Rubrique:liste.html.twig")->display(array_merge($context, array("rubrique" => (isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")))));
    }

    public function getTemplateName()
    {
        return "MyAppEspritBundle:Rubrique:lister.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 5,  34 => 4,  29 => 3,);
    }
}
