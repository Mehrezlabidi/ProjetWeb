<?php

/* MyAppEspritBundle:Article:liste.html.twig */
class __TwigTemplate_2a58e016612eaadcf4d6bb058a2c603980c4e552273ff3f92b0f1e91a7f4fd7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<table>
";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 3
            echo "    <tr>
\t<td>";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "nom"), "html", null, true);
            echo "</td>
 
 
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "</table>";
    }

    public function getTemplateName()
    {
        return "MyAppEspritBundle:Article:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 8,  29 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
