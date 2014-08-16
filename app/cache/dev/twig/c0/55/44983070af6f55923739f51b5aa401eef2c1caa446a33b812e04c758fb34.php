<?php

/* MyAppEspritBundle:Role:edit.html.twig */
class __TwigTemplate_c05544983070af6f55923739f51b5aa401eef2c1caa446a33b812e04c758fb34 extends Twig_Template
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
      <div style=\"padding: 120px 50px 0 10px;\">
 
<h1>Modify Role</h1>
<form   action=\"\"   method=\"post\" ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
\t <ul>
                  <li>
                 ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                  </li>
                   
       
\t </ul>
                       
        <button type=\"submit\" class=\"action\">Submit</button>
                          
                         
</form>
 
      </div>
 

















 ";
    }

    public function getTemplateName()
    {
        return "MyAppEspritBundle:Role:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 30,  56 => 27,  36 => 10,  32 => 9,  26 => 6,  19 => 1,);
    }
}
