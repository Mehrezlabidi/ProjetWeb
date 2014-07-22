<?php

/* MyAppEspritBundle:Sousrubrique:lister.html.twig */
class __TwigTemplate_c0822850c83008a0eeb6aec0176ae4cbd4bd67a9b2a1d6588d89f3b4cf70f8da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MyAppEspritBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'Sousrubrique' => array($this, 'block_Sousrubrique'),
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
    public function block_Sousrubrique($context, array $blocks = array())
    {
        // line 5
        $this->env->loadTemplate("MyAppEspritBundle:Sousrubrique:liste.html.twig")->display(array_merge($context, array("sousrubrique" => (isset($context["sousrubrique"]) ? $context["sousrubrique"] : $this->getContext($context, "sousrubrique")))));
    }

    public function getTemplateName()
    {
        return "MyAppEspritBundle:Sousrubrique:lister.html.twig";
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
