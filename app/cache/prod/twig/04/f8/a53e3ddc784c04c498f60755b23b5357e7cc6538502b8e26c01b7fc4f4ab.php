<?php

/* SonataAdminBundle::standard_layout.html.twig */
class __TwigTemplate_04f8a53e3ddc784c04c498f60755b23b5357e7cc6538502b8e26c01b7fc4f4ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html_attributes' => array($this, 'block_html_attributes'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body_attributes' => array($this, 'block_body_attributes'),
            'logo' => array($this, 'block_logo'),
            'sonata_nav_menu_before' => array($this, 'block_sonata_nav_menu_before'),
            'sonata_nav_menu' => array($this, 'block_sonata_nav_menu'),
            'top_bar_before_nav' => array($this, 'block_top_bar_before_nav'),
            'sonata_top_bar_nav' => array($this, 'block_sonata_top_bar_nav'),
            'top_bar_after_nav' => array($this, 'block_top_bar_after_nav'),
            'sonata_top_bar_search' => array($this, 'block_sonata_top_bar_search'),
            'sonata_nav_menu_after' => array($this, 'block_sonata_nav_menu_after'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
            'notice' => array($this, 'block_notice'),
            'sonata_admin_content' => array($this, 'block_sonata_admin_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        $context["_preview"] = $this->renderBlock("preview", $context, $blocks);
        // line 12
        $context["_form"] = $this->renderBlock("form", $context, $blocks);
        // line 13
        $context["_show"] = $this->renderBlock("show", $context, $blocks);
        // line 14
        $context["_list_table"] = $this->renderBlock("list_table", $context, $blocks);
        // line 15
        $context["_list_filters"] = $this->renderBlock("list_filters", $context, $blocks);
        // line 16
        $context["_side_menu"] = $this->renderBlock("side_menu", $context, $blocks);
        // line 17
        $context["_content"] = $this->renderBlock("content", $context, $blocks);
        // line 18
        $context["_title"] = $this->renderBlock("title", $context, $blocks);
        // line 19
        $context["_breadcrumb"] = $this->renderBlock("breadcrumb", $context, $blocks);
        // line 20
        $context["_actions"] = $this->renderBlock("actions", $context, $blocks);
        // line 21
        echo "<!DOCTYPE html>
<html ";
        // line 22
        $this->displayBlock('html_attributes', $context, $blocks);
        echo ">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />

        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

        ";
        // line 28
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 53
        echo "
        ";
        // line 54
        $this->displayBlock('javascripts', $context, $blocks);
        // line 78
        echo "
        <title>
            ";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Admin", array(), "SonataAdminBundle"), "html", null, true);
        echo "

            ";
        // line 82
        if ((!twig_test_empty((isset($context["_title"]) ? $context["_title"] : null)))) {
            // line 83
            echo "                ";
            echo (isset($context["_title"]) ? $context["_title"] : null);
            echo "
            ";
        } else {
            // line 85
            echo "                ";
            if (array_key_exists("action", $context)) {
                // line 86
                echo "                    -
                    ";
                // line 87
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "breadcrumbs", array(0 => (isset($context["action"]) ? $context["action"] : null)), "method"));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                    // line 88
                    echo "                        ";
                    if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first"))) {
                        // line 89
                        echo "                            &gt;
                        ";
                    }
                    // line 91
                    echo "                        ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "label"), "html", null, true);
                    echo "
                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 93
                echo "                ";
            }
            // line 94
            echo "            ";
        }
        // line 95
        echo "        </title>
    </head>
    <body ";
        // line 97
        $this->displayBlock('body_attributes', $context, $blocks);
        echo ">
        ";
        // line 99
        echo "
        <div class=\"navbar navbar-fixed-top\">
            <div class=\"navbar-inner\">
                <div class=\"container-fluid\">
                    <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </a>

                    ";
        // line 109
        if (array_key_exists("admin_pool", $context)) {
            // line 110
            echo "                        <div class=\"navbar-text pull-right\">";
            $template = $this->env->resolveTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getTemplate", array(0 => "user_block"), "method"));
            $template->display($context);
            echo "</div>

                        ";
            // line 112
            $this->displayBlock('logo', $context, $blocks);
            // line 118
            echo "
                        ";
            // line 119
            $this->displayBlock('sonata_nav_menu_before', $context, $blocks);
            // line 120
            echo "
                        ";
            // line 121
            $this->displayBlock('sonata_nav_menu', $context, $blocks);
            // line 173
            echo "                        
                        ";
            // line 174
            $this->displayBlock('sonata_nav_menu_after', $context, $blocks);
            // line 175
            echo "                        
                    ";
        }
        // line 177
        echo "                </div>
            </div>
        </div>

        <div class=\"container-fluid\">
            ";
        // line 182
        $this->displayBlock('sonata_page_content', $context, $blocks);
        // line 278
        echo "        </div>
    </body>
</html>
";
    }

    // line 22
    public function block_html_attributes($context, array $blocks = array())
    {
        echo "class=\"no-js\"";
    }

    // line 28
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 29
        echo "            <!-- jQuery code -->
            <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/themes/flick/jquery-ui-1.8.16.custom.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />

            <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"  />
            <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />

            ";
        // line 35
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getOption", array(0 => "use_select2"), "method"))) {
            // line 36
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/select2/select2.css"), "html", null, true);
            echo "\" type=\"text/css\" media=\"all\" />
                <style>
                    div.select2-container {
                        margin-left: 0px !important;
                    }

                    div.select2-drop ul {
                        margin: 0px !important;
                    }
                </style>
            ";
        }
        // line 47
        echo "
            <!-- base application asset -->
            <link rel=\"stylesheet\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/css/layout.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
            <link rel=\"stylesheet\" href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/css/colors.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />

        ";
    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        // line 55
        echo "            <script type=\"text/javascript\">
                window.SONATA_CONFIG = {
                    CONFIRM_EXIT: ";
        // line 57
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getOption", array(0 => "confirm_exit"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    USE_SELECT2: ";
        // line 58
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getOption", array(0 => "use_select2"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        // line 59
        echo "                };
                window.SONATA_TRANSLATIONS = {
                    CONFIRM_EXIT:  '";
        // line 61
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("confirm_exit", array(), "SonataAdminBundle"), "js"), "html", null, true);
        echo "'
               };
            </script>
            <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/jquery-1.8.3.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/jquery-ui-1.8.23.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/jquery-ui-i18n.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

            <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

            ";
        // line 70
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getOption", array(0 => "use_select2"), "method"))) {
            // line 71
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/select2/select2.min.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
            ";
        }
        // line 73
        echo "
            <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/jquery/jquery.form.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            ";
        // line 75
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getOption", array(0 => "confirm_exit"), "method"))) {
            echo "<script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/jquery/jquery.confirmExit.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>";
        }
        // line 76
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/base.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        ";
    }

    // line 97
    public function block_body_attributes($context, array $blocks = array())
    {
        echo "class=\"sonata-bc ";
        if (twig_test_empty((isset($context["_side_menu"]) ? $context["_side_menu"] : null))) {
            echo "sonata-ba-no-side-menu";
        }
        echo "\"";
    }

    // line 112
    public function block_logo($context, array $blocks = array())
    {
        // line 113
        echo "                            <a href=\"";
        echo $this->env->getExtension('routing')->getUrl("sonata_admin_dashboard");
        echo "\" class=\"brand\">
                                <img src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "titlelogo")), "html", null, true);
        echo "\"  alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "title"), "html", null, true);
        echo "\" />
                                ";
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "title"), "html", null, true);
        echo "
                            </a>
                        ";
    }

    // line 119
    public function block_sonata_nav_menu_before($context, array $blocks = array())
    {
    }

    // line 121
    public function block_sonata_nav_menu($context, array $blocks = array())
    {
        // line 122
        echo "                            <div class=\"nav-collapse\">
                                <ul class=\"nav\">
                                    ";
        // line 124
        $this->displayBlock('top_bar_before_nav', $context, $blocks);
        // line 125
        echo "                                    ";
        $this->displayBlock('sonata_top_bar_nav', $context, $blocks);
        // line 158
        echo "                                    ";
        $this->displayBlock('top_bar_after_nav', $context, $blocks);
        // line 159
        echo "                                </ul>

                                ";
        // line 161
        $this->displayBlock('sonata_top_bar_search', $context, $blocks);
        // line 170
        echo "
                            </div>
                        ";
    }

    // line 124
    public function block_top_bar_before_nav($context, array $blocks = array())
    {
        echo " ";
    }

    // line 125
    public function block_sonata_top_bar_nav($context, array $blocks = array())
    {
        // line 126
        echo "                                        ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "security"), "token") && $this->env->getExtension('security')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 127
            echo "                                            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "dashboardgroups"));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 128
                echo "                                                ";
                $context["display"] = (twig_test_empty($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "roles")) || $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"));
                // line 129
                echo "                                                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "roles"));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    if ((!(isset($context["display"]) ? $context["display"] : null))) {
                        // line 130
                        echo "                                                    ";
                        $context["display"] = $this->env->getExtension('security')->isGranted((isset($context["role"]) ? $context["role"] : null));
                        // line 131
                        echo "                                                ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 132
                echo "
                                                ";
                // line 134
                echo "                                                ";
                $context["item_count"] = 0;
                // line 135
                echo "                                                ";
                if ((isset($context["display"]) ? $context["display"] : null)) {
                    // line 136
                    echo "                                                    ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "items"));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        if (((isset($context["item_count"]) ? $context["item_count"] : null) == 0)) {
                            // line 137
                            echo "                                                        ";
                            if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => "LIST"), "method"))) {
                                // line 138
                                echo "                                                            ";
                                $context["item_count"] = ((isset($context["item_count"]) ? $context["item_count"] : null) + 1);
                                // line 139
                                echo "                                                        ";
                            }
                            // line 140
                            echo "                                                    ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 141
                    echo "                                                ";
                }
                // line 142
                echo "
                                                ";
                // line 143
                if (((isset($context["display"]) ? $context["display"] : null) && ((isset($context["item_count"]) ? $context["item_count"] : null) > 0))) {
                    // line 144
                    echo "                                                <li class=\"dropdown\">
                                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                    // line 145
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "label"), array(), $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "label_catalogue")), "html", null, true);
                    echo " <span class=\"caret\"></span></a>
                                                    <ul class=\"dropdown-menu\">
                                                        ";
                    // line 147
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "items"));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 148
                        echo "                                                            ";
                        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => "LIST"), "method"))) {
                            // line 149
                            echo "                                                                <li><a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "list"), "method"), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "label"), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "translationdomain")), "html", null, true);
                            echo "</a></li>
                                                            ";
                        }
                        // line 151
                        echo "                                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 152
                    echo "                                                    </ul>
                                                </li>
                                                ";
                }
                // line 155
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 156
            echo "                                        ";
        }
        // line 157
        echo "                                    ";
    }

    // line 158
    public function block_top_bar_after_nav($context, array $blocks = array())
    {
        echo " ";
    }

    // line 161
    public function block_sonata_top_bar_search($context, array $blocks = array())
    {
        // line 162
        echo "                                    ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "security"), "token") && $this->env->getExtension('security')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 163
            echo "                                        <form action=\"";
            echo $this->env->getExtension('routing')->getUrl("sonata_admin_search");
            echo "\" method=\"GET\"  class=\"navbar-search\">
                                            <div class=\"input-append\">
                                                <input type=\"text\" name=\"q\" value=\"";
            // line 165
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "get", array(0 => "q"), "method"), "html", null, true);
            echo "\" class=\"input-large search-query\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("search_placeholder", array(), "SonataAdminBundle"), "html", null, true);
            echo "\"/>
                                            </div>
                                        </form>
                                    ";
        }
        // line 169
        echo "                                ";
    }

    // line 174
    public function block_sonata_nav_menu_after($context, array $blocks = array())
    {
    }

    // line 182
    public function block_sonata_page_content($context, array $blocks = array())
    {
        // line 183
        echo "                ";
        $this->displayBlock('notice', $context, $blocks);
        // line 193
        echo "
                <div class=\"row-fluid\">
                    ";
        // line 195
        if (((!twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : null))) || array_key_exists("action", $context))) {
            // line 196
            echo "                        <div class=\"span6\">
                            <ul class=\"breadcrumb\">
                                ";
            // line 198
            if (twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : null))) {
                // line 199
                echo "                                    ";
                if (array_key_exists("action", $context)) {
                    // line 200
                    echo "                                        ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "breadcrumbs", array(0 => (isset($context["action"]) ? $context["action"] : null)), "method"));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                        // line 201
                        echo "                                            ";
                        if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last"))) {
                            // line 202
                            echo "                                                <li>
                                                    ";
                            // line 203
                            if ((!twig_test_empty($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "uri")))) {
                                // line 204
                                echo "                                                        <a href=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "uri"), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "label"), "html", null, true);
                                echo "</a>
                                                    ";
                            } else {
                                // line 206
                                echo "                                                        ";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "label"), "html", null, true);
                                echo "
                                                    ";
                            }
                            // line 208
                            echo "                                                    <span class=\"divider\">/</span>
                                                </li>
                                            ";
                        } else {
                            // line 211
                            echo "                                                <li class=\"active\">";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "label"), "html", null, true);
                            echo "</li>
                                            ";
                        }
                        // line 213
                        echo "                                        ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 214
                    echo "                                    ";
                }
                // line 215
                echo "                                ";
            } else {
                // line 216
                echo "                                    ";
                echo (isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : null);
                echo "
                                ";
            }
            // line 218
            echo "                            </ul>
                        </div>
                    ";
        }
        // line 221
        echo "
                    ";
        // line 222
        if ((!twig_test_empty((isset($context["_actions"]) ? $context["_actions"] : null)))) {
            // line 223
            echo "                        <div class=\"span4 offset2\">
                            ";
            // line 224
            echo (isset($context["_actions"]) ? $context["_actions"] : null);
            echo "
                        </div>
                    ";
        }
        // line 227
        echo "                </div>

                <div class=\"row-fluid\">
                    ";
        // line 230
        if ((!twig_test_empty((isset($context["_side_menu"]) ? $context["_side_menu"] : null)))) {
            // line 231
            echo "                        <div class=\"sidebar span2\">
                            <div class=\"well sonata-ba-side-menu\" style=\"padding: 8px 0;\">";
            // line 232
            echo (isset($context["_side_menu"]) ? $context["_side_menu"] : null);
            echo "</div>
                        </div>
                    ";
        }
        // line 235
        echo "
                    <div class=\"content ";
        // line 236
        echo (((!twig_test_empty((isset($context["_side_menu"]) ? $context["_side_menu"] : null)))) ? (" span10") : ("span12"));
        echo "\">
                        ";
        // line 237
        $this->displayBlock('sonata_admin_content', $context, $blocks);
        // line 267
        echo "                    </div>
                </div>

                ";
        // line 270
        $this->displayBlock('footer', $context, $blocks);
        // line 277
        echo "            ";
    }

    // line 183
    public function block_notice($context, array $blocks = array())
    {
        // line 184
        echo "                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "success", 1 => "error", 2 => "info", 3 => "warning"));
        foreach ($context['_seq'] as $context["_key"] => $context["notice_level"]) {
            // line 185
            echo "                        ";
            $context["session_var"] = ("sonata_flash_" . (isset($context["notice_level"]) ? $context["notice_level"] : null));
            // line 186
            echo "                        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashbag"), "get", array(0 => (isset($context["session_var"]) ? $context["session_var"] : null)), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 187
                echo "                            <div class=\"alert ";
                echo twig_escape_filter($this->env, ("alert-" . (isset($context["notice_level"]) ? $context["notice_level"] : null)), "html", null, true);
                echo "\">
                                ";
                // line 188
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["flash"]) ? $context["flash"] : null), array(), "SonataAdminBundle"), "html", null, true);
                echo "
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 191
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notice_level'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 192
        echo "                ";
    }

    // line 237
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        // line 238
        echo "
                            ";
        // line 239
        if ((!twig_test_empty((isset($context["_preview"]) ? $context["_preview"] : null)))) {
            // line 240
            echo "                                <div class=\"sonata-ba-preview\">";
            echo (isset($context["_preview"]) ? $context["_preview"] : null);
            echo "</div>
                            ";
        }
        // line 242
        echo "
                            ";
        // line 243
        if ((!twig_test_empty((isset($context["_content"]) ? $context["_content"] : null)))) {
            // line 244
            echo "                                <div class=\"sonata-ba-content\">";
            echo (isset($context["_content"]) ? $context["_content"] : null);
            echo "</div>
                            ";
        }
        // line 246
        echo "
                            ";
        // line 247
        if ((!twig_test_empty((isset($context["_show"]) ? $context["_show"] : null)))) {
            // line 248
            echo "                                <div class=\"sonata-ba-show\">";
            echo (isset($context["_show"]) ? $context["_show"] : null);
            echo "</div>
                            ";
        }
        // line 250
        echo "
                            ";
        // line 251
        if ((!twig_test_empty((isset($context["_form"]) ? $context["_form"] : null)))) {
            // line 252
            echo "                                <div class=\"sonata-ba-form\">";
            echo (isset($context["_form"]) ? $context["_form"] : null);
            echo "</div>
                            ";
        }
        // line 254
        echo "
                            ";
        // line 255
        if (((!twig_test_empty((isset($context["_list_table"]) ? $context["_list_table"] : null))) || (!twig_test_empty((isset($context["_list_filters"]) ? $context["_list_filters"] : null))))) {
            // line 256
            echo "                                <div class=\"row-fluid\">
                                    <div class=\"sonata-ba-list span10\">
                                        ";
            // line 258
            echo (isset($context["_list_table"]) ? $context["_list_table"] : null);
            echo "
                                    </div>
                                    <div class=\"sonata-ba-filter span2\">
                                        ";
            // line 261
            echo (isset($context["_list_filters"]) ? $context["_list_filters"] : null);
            echo "
                                    </div>
                                </div>
                            ";
        }
        // line 265
        echo "
                        ";
    }

    // line 270
    public function block_footer($context, array $blocks = array())
    {
        // line 271
        echo "                    <div class=\"row-fluid\">
                        <div class=\"span2 offset10 pull-right\">
                            <span class=\"label\"><a href=\"http://sonata-project.org\" rel=\"noreferrer\" style=\"text-decoration: none; color: black\">Sonata Project</a></span>
                        </div>
                    </div>
                ";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  836 => 271,  833 => 270,  828 => 265,  821 => 261,  815 => 258,  811 => 256,  809 => 255,  798 => 251,  795 => 250,  789 => 248,  784 => 246,  778 => 244,  776 => 243,  773 => 242,  765 => 239,  762 => 238,  759 => 237,  755 => 192,  749 => 191,  735 => 187,  730 => 186,  727 => 185,  722 => 184,  719 => 183,  715 => 277,  708 => 267,  706 => 237,  699 => 235,  693 => 232,  690 => 231,  688 => 230,  683 => 227,  677 => 224,  674 => 223,  672 => 222,  658 => 216,  638 => 213,  632 => 211,  627 => 208,  621 => 206,  611 => 203,  587 => 200,  582 => 198,  569 => 183,  526 => 157,  523 => 156,  506 => 151,  495 => 148,  491 => 147,  481 => 143,  475 => 141,  468 => 140,  459 => 137,  450 => 135,  447 => 134,  420 => 127,  417 => 126,  408 => 124,  396 => 159,  390 => 125,  363 => 114,  345 => 97,  328 => 74,  325 => 73,  317 => 70,  303 => 65,  261 => 50,  231 => 33,  194 => 177,  713 => 270,  707 => 211,  704 => 210,  702 => 236,  696 => 206,  681 => 203,  669 => 221,  666 => 200,  663 => 199,  652 => 214,  635 => 191,  618 => 190,  613 => 204,  608 => 202,  605 => 201,  602 => 185,  596 => 181,  592 => 179,  590 => 178,  585 => 177,  568 => 175,  551 => 174,  547 => 173,  542 => 163,  539 => 162,  533 => 169,  528 => 167,  525 => 166,  512 => 152,  505 => 156,  502 => 155,  498 => 149,  486 => 145,  483 => 144,  473 => 150,  465 => 139,  462 => 138,  451 => 141,  428 => 129,  425 => 128,  414 => 125,  403 => 121,  400 => 161,  371 => 113,  349 => 103,  339 => 100,  336 => 99,  326 => 93,  311 => 89,  297 => 84,  263 => 71,  191 => 50,  344 => 97,  335 => 93,  321 => 91,  295 => 88,  259 => 70,  178 => 119,  572 => 193,  561 => 174,  557 => 169,  549 => 174,  544 => 172,  538 => 170,  536 => 161,  521 => 162,  517 => 155,  511 => 160,  508 => 159,  499 => 156,  492 => 132,  487 => 152,  477 => 150,  467 => 148,  463 => 133,  460 => 132,  449 => 123,  441 => 105,  415 => 97,  410 => 96,  395 => 84,  392 => 83,  388 => 124,  386 => 95,  382 => 93,  380 => 83,  369 => 115,  324 => 92,  300 => 113,  288 => 85,  275 => 57,  272 => 76,  226 => 67,  186 => 54,  367 => 131,  352 => 121,  340 => 95,  332 => 75,  320 => 84,  313 => 82,  310 => 81,  304 => 79,  302 => 114,  296 => 111,  287 => 72,  280 => 82,  249 => 67,  223 => 58,  216 => 28,  23 => 13,  12 => 34,  145 => 53,  110 => 25,  96 => 40,  358 => 113,  351 => 135,  347 => 102,  343 => 91,  338 => 76,  327 => 86,  319 => 71,  315 => 90,  301 => 117,  289 => 59,  277 => 78,  271 => 55,  265 => 64,  251 => 101,  248 => 100,  239 => 97,  228 => 59,  213 => 82,  211 => 81,  148 => 97,  233 => 62,  202 => 77,  198 => 66,  180 => 120,  175 => 118,  172 => 52,  165 => 64,  137 => 27,  34 => 53,  52 => 17,  212 => 74,  124 => 23,  83 => 82,  215 => 54,  184 => 47,  113 => 46,  74 => 78,  210 => 22,  126 => 55,  20 => 11,  470 => 135,  426 => 102,  419 => 98,  405 => 325,  401 => 324,  394 => 118,  377 => 115,  370 => 100,  357 => 125,  346 => 92,  333 => 117,  329 => 95,  286 => 80,  270 => 4,  70 => 23,  65 => 5,  152 => 99,  118 => 28,  76 => 13,  293 => 61,  262 => 63,  205 => 59,  174 => 53,  157 => 41,  127 => 34,  829 => 529,  823 => 433,  818 => 182,  812 => 106,  806 => 254,  800 => 252,  796 => 17,  791 => 15,  787 => 247,  783 => 13,  779 => 12,  775 => 11,  771 => 10,  767 => 240,  761 => 6,  757 => 4,  754 => 3,  740 => 188,  738 => 529,  723 => 517,  716 => 513,  686 => 205,  664 => 218,  655 => 215,  646 => 455,  639 => 451,  631 => 446,  623 => 441,  614 => 434,  610 => 433,  607 => 432,  604 => 431,  594 => 424,  584 => 199,  578 => 196,  570 => 409,  556 => 398,  548 => 165,  530 => 158,  520 => 371,  503 => 357,  489 => 346,  479 => 339,  472 => 335,  464 => 330,  456 => 143,  446 => 139,  397 => 281,  391 => 278,  376 => 119,  353 => 294,  342 => 101,  331 => 239,  323 => 125,  307 => 66,  292 => 87,  276 => 199,  255 => 183,  253 => 47,  242 => 170,  207 => 151,  200 => 55,  155 => 103,  114 => 88,  58 => 22,  299 => 64,  291 => 82,  284 => 100,  281 => 110,  274 => 77,  267 => 193,  260 => 62,  257 => 49,  250 => 67,  236 => 35,  234 => 169,  225 => 87,  197 => 54,  192 => 55,  188 => 174,  185 => 173,  181 => 47,  167 => 48,  160 => 48,  153 => 35,  146 => 34,  129 => 24,  97 => 87,  84 => 16,  37 => 12,  150 => 58,  139 => 31,  104 => 23,  90 => 27,  81 => 26,  77 => 25,  591 => 407,  586 => 406,  581 => 405,  576 => 195,  571 => 403,  566 => 182,  522 => 408,  519 => 407,  516 => 161,  513 => 405,  510 => 158,  507 => 157,  504 => 158,  488 => 388,  478 => 142,  438 => 313,  434 => 130,  389 => 313,  385 => 312,  378 => 308,  361 => 107,  354 => 293,  330 => 87,  290 => 244,  282 => 79,  222 => 30,  206 => 71,  190 => 175,  161 => 38,  134 => 56,  120 => 46,  100 => 43,  53 => 20,  480 => 128,  474 => 149,  469 => 158,  461 => 155,  457 => 131,  453 => 136,  444 => 132,  440 => 148,  437 => 131,  435 => 146,  430 => 137,  427 => 339,  423 => 128,  413 => 328,  409 => 124,  407 => 95,  402 => 170,  398 => 119,  393 => 158,  387 => 122,  384 => 122,  381 => 121,  379 => 119,  374 => 114,  368 => 264,  365 => 141,  362 => 110,  360 => 259,  355 => 112,  341 => 131,  337 => 282,  322 => 275,  314 => 99,  312 => 68,  309 => 120,  305 => 119,  298 => 91,  294 => 245,  285 => 84,  283 => 58,  278 => 238,  268 => 54,  264 => 72,  258 => 81,  252 => 68,  247 => 66,  241 => 31,  229 => 73,  220 => 56,  214 => 61,  177 => 54,  169 => 51,  140 => 28,  132 => 57,  128 => 47,  111 => 40,  107 => 24,  61 => 26,  273 => 96,  269 => 75,  254 => 68,  246 => 69,  243 => 65,  240 => 176,  238 => 36,  235 => 74,  230 => 82,  227 => 32,  224 => 162,  221 => 79,  219 => 29,  217 => 75,  208 => 57,  204 => 78,  179 => 72,  159 => 49,  143 => 29,  135 => 48,  131 => 25,  119 => 44,  108 => 45,  102 => 17,  71 => 29,  67 => 28,  63 => 22,  59 => 165,  47 => 17,  38 => 7,  94 => 86,  89 => 34,  85 => 83,  79 => 31,  75 => 31,  68 => 6,  56 => 81,  50 => 78,  29 => 16,  87 => 17,  72 => 54,  55 => 21,  21 => 11,  26 => 14,  98 => 36,  93 => 39,  88 => 33,  78 => 80,  46 => 19,  27 => 16,  40 => 44,  44 => 21,  35 => 11,  31 => 17,  43 => 15,  41 => 14,  28 => 14,  201 => 182,  196 => 52,  183 => 121,  171 => 116,  166 => 110,  163 => 49,  158 => 37,  156 => 36,  151 => 45,  142 => 42,  138 => 93,  136 => 39,  123 => 30,  121 => 91,  117 => 89,  115 => 27,  105 => 44,  101 => 37,  91 => 85,  69 => 53,  66 => 23,  62 => 166,  49 => 18,  24 => 3,  32 => 21,  25 => 12,  22 => 11,  19 => 11,  209 => 24,  203 => 278,  199 => 53,  193 => 51,  189 => 71,  187 => 49,  182 => 69,  176 => 45,  173 => 112,  168 => 113,  164 => 109,  162 => 59,  154 => 46,  149 => 36,  147 => 46,  144 => 95,  141 => 94,  133 => 49,  130 => 35,  125 => 46,  122 => 45,  116 => 43,  112 => 26,  109 => 45,  106 => 35,  103 => 38,  99 => 30,  95 => 20,  92 => 19,  86 => 33,  82 => 10,  80 => 9,  73 => 24,  64 => 184,  60 => 26,  57 => 155,  54 => 154,  51 => 19,  48 => 67,  45 => 16,  42 => 13,  39 => 13,  36 => 17,  33 => 16,  30 => 17,);
    }
}
