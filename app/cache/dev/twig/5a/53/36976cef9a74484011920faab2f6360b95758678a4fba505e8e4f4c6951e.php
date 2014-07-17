<?php

/* MyAppEspritBundle:Role:send.html.twig */
class __TwigTemplate_5a5336976cef9a74484011920faab2f6360b95758678a4fba505e8e4f4c6951e extends Twig_Template
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
        echo " 
<!DOCTYPE html>
<html lang=\"en\">
<head>
<meta charset=\"utf-8\">
<link rel=\"icon\" sizes=\"16x16\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
<title>Forms</title>
 
<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/css/style.css"), "html", null, true);
        echo "\"/> 
<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://fonts.googleapis.com/css?family=Engagement"), "html", null, true);
        echo "\"/> 
 
<!--[if IE]>
  <script src=\"http://html5shiv.googlecode.com/svn/trunk/html5.js\"></script>
<![endif]-->
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js\" type=\"text/javascript\" charset=\"utf-8\"></script>
    <script src=\"js/jquery.uniform.min.js\" type=\"text/javascript\" charset=\"utf-8\"></script>
    <script type=\"text/javascript\" charset=\"utf-8\">
      \$(function(){
        \$(\"input:checkbox, input:radio, input:file, select\").uniform();
      });
    </script>
</head>
<body>
<article>
    <div style=\"padding: 80px 50px 0 10px;\">
<h1>Nouveau Role</h1>
<form role=\"form\" method=\"post\" action='";
        // line 27
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_role_new");
        echo "'>
\t<ul>
        <li>
        \t<label for=\"name\">Permission:</label>
                  ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "permission"), 'widget');
        echo "
        </li>
      
        <li>\t  <input type=\"hidden\" name=\"name\" value=\"submit\">
                        ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo "
         
                       ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
       </li>
\t</ul>
    <p>
        <button type=\"submit\" class=\"action\">Submit</button>
        <button type=\"reset\" class=\"right\">Reset</button>
    </p>
</form>
    </div>
</article>
<footer>
<p> </p>
</footer>
















 ";
    }

    public function getTemplateName()
    {
        return "MyAppEspritBundle:Role:send.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 37,  70 => 35,  63 => 31,  56 => 27,  36 => 10,  32 => 9,  26 => 6,  19 => 1,);
    }
}
