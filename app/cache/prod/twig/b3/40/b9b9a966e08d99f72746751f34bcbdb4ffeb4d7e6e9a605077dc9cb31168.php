<?php

/* TwigBundle:Exception:logs.html.twig */
class __TwigTemplate_b340b9b9a966e08d99f72746751f34bcbdb4ffeb4d7e6e9a605077dc9cb31168 extends Twig_Template
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
        echo "<ol class=\"traces logs\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
<<<<<<< HEAD
        $context['_seq'] = twig_ensure_traversable((isset($context["logs"]) ? $context["logs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 3
            echo "        <li";
            if (($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "priority") >= 400)) {
                echo " class=\"error\"";
            } elseif (($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "priority") >= 300)) {
=======
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "logs"));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 3
            echo "        <li";
            if (($this->getAttribute($this->getContext($context, "log"), "priority") >= 400)) {
                echo " class=\"error\"";
            } elseif (($this->getAttribute($this->getContext($context, "log"), "priority") >= 300)) {
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
                echo " class=\"warning\"";
            }
            echo ">
            ";
            // line 4
<<<<<<< HEAD
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "priorityName"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "message"), "html", null, true);
=======
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "log"), "priorityName"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "log"), "message"), "html", null, true);
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ol>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
<<<<<<< HEAD
        return array (  26 => 3,  98 => 40,  93 => 9,  88 => 6,  78 => 40,  46 => 7,  27 => 4,  40 => 8,  44 => 9,  35 => 4,  31 => 4,  43 => 8,  41 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 73,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 57,  136 => 56,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  105 => 40,  101 => 39,  91 => 31,  69 => 25,  66 => 24,  62 => 23,  49 => 19,  24 => 2,  32 => 6,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 91,  193 => 73,  189 => 71,  187 => 84,  182 => 68,  176 => 64,  173 => 74,  168 => 72,  164 => 60,  162 => 59,  154 => 54,  149 => 51,  147 => 50,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 38,  122 => 37,  116 => 36,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 30,  95 => 28,  92 => 27,  86 => 28,  82 => 22,  80 => 41,  73 => 19,  64 => 15,  60 => 13,  57 => 12,  54 => 11,  51 => 9,  48 => 9,  45 => 8,  42 => 6,  39 => 16,  36 => 7,  33 => 4,  30 => 3,);
=======
        return array (  35 => 4,  26 => 3,  87 => 20,  55 => 13,  31 => 5,  25 => 4,  21 => 2,  94 => 22,  92 => 21,  89 => 20,  85 => 19,  79 => 18,  75 => 17,  72 => 16,  68 => 14,  64 => 12,  56 => 9,  50 => 8,  41 => 9,  24 => 3,  201 => 92,  199 => 91,  196 => 90,  187 => 84,  183 => 82,  173 => 74,  171 => 73,  168 => 72,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 57,  136 => 56,  133 => 55,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  112 => 42,  105 => 40,  101 => 24,  91 => 31,  86 => 28,  69 => 25,  66 => 15,  62 => 23,  51 => 12,  49 => 19,  39 => 6,  19 => 1,  98 => 40,  93 => 9,  88 => 6,  80 => 19,  78 => 40,  46 => 7,  44 => 10,  36 => 7,  32 => 12,  27 => 4,  22 => 2,  57 => 14,  54 => 21,  43 => 8,  40 => 8,  33 => 5,  30 => 3,);
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
    }
}
