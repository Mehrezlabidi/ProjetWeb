<?php

/* MyAppEspritBundle:Acteur:liste.html.twig */
class __TwigTemplate_9eb42c6b77fd6312bf2dc1fee5453f1acd10b2feeab3bf2a6b48258801a23e88 extends Twig_Template
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
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 6
            echo "    <tr>
        
        
        
\t  <td>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "id"), "html", null, true);
            echo "</td> 
          <td><b>No  </b>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "position"), "html", null, true);
            echo "</td>
          ";
            // line 12
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "state") == 1)) {
                // line 13
                echo "          <td><b>access</b></td>
          ";
            } else {
                // line 15
                echo "          <td><b>denied</b></td>
          ";
            }
            // line 17
            echo "          <td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "title"), "html", null, true);
            echo "</td>
          <td><b>No  </b>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "menu"), "id"), "html", null, true);
            echo "</td>
\t 
        
        
        
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 24
            echo "    <tr>
\t<td>Aucun rubrique n'a été trouvé.</td>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "MyAppEspritBundle:Acteur:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 28,  69 => 24,  58 => 18,  53 => 17,  49 => 15,  45 => 13,  43 => 12,  39 => 11,  35 => 10,  29 => 6,  24 => 5,  19 => 2,);
    }
}
