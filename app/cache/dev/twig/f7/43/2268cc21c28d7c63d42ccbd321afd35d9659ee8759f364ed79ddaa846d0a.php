<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_f7432268cc21c28d7c63d42ccbd321afd35d9659ee8759f364ed79ddaa846d0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
 

<!doctype html>

<head>

\t<!-- Basics -->
\t
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
\t
\t<title>Login</title>

\t<!-- CSS -->
\t
 <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/css/stylesheet.css"), "html", null, true);
        echo "\"/> 
      <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/css/reset.css"), "html", null, true);
        echo "\"/> 
        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/css/animate.css"), "html", null, true);
        echo "\"/> 
       <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/css/styles.css"), "html", null, true);
        echo "\"/>  
      
\t
</head>

\t<!-- Main HTML -->
\t
<body>
\t
\t<!-- Begin Page Content -->
\t
\t<div id=\"container\">
\t\t  ";
        // line 32
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 34
        echo "\t</div>
\t
\t
\t<!-- End Page Content -->
\t
</body>

</html>
\t
\t
\t
\t
\t
\t\t
\t";
    }

    // line 32
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 33
        echo "                  ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 33,  85 => 32,  67 => 34,  65 => 32,  50 => 20,  46 => 19,  42 => 18,  38 => 17,  20 => 1,  70 => 27,  54 => 14,  47 => 10,  43 => 9,  39 => 7,  33 => 5,  31 => 4,  28 => 3,);
    }
}
