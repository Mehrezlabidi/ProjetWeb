<?php

/* MyAppEspritBundle:Rubrique:liste.html.twig */
class __TwigTemplate_46442c2e736d4e0f7fef01fbc827b5d0394c0e50a0e3367b0fe42ab6d2d928d6 extends Twig_Template
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
        // line 2
        echo "

<table>
";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 6
            echo "    <tr>
\t<!--  <td>";
            // line 7
            echo "</td> 
          <td><b>No  </b>";
            // line 10
            echo "          <td><b>access</b></td>
          ";
            // line 12
            echo "          <td><b>denied</b></td>
          ";
            // line 13
            echo " -->
          <td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "title"), "html", null, true);
            echo "</td>
       <!--   <td><b>No  </b>";
            // line 15
            echo "</td>     -->  
";
            // line 17
            echo "   <!--  <tr>
\t<td>Aucun rubrique n'a été trouvé.</td>
    </tr>   -->  
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "MyAppEspritBundle:Rubrique:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 21,  50 => 17,  47 => 15,  43 => 14,  40 => 13,  37 => 12,  31 => 7,  28 => 6,  24 => 5,  19 => 2,  34 => 10,  29 => 3,);
    }
}
