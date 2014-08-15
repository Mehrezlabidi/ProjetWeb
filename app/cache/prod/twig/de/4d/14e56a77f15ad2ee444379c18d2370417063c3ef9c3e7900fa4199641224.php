<?php

/* SonataAdminBundle:CRUD:base_list.html.twig */
class __TwigTemplate_de4d14e56a77f15ad2ee444379c18d2370417063c3ef9c3e7900fa4199641224 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'list_table' => array($this, 'block_list_table'),
            'table_header' => array($this, 'block_table_header'),
            'table_body' => array($this, 'block_table_body'),
            'table_footer' => array($this, 'block_table_footer'),
            'batch' => array($this, 'block_batch'),
            'batch_javascript' => array($this, 'block_batch_javascript'),
            'batch_actions' => array($this, 'block_batch_actions'),
            'pager_results' => array($this, 'block_pager_results'),
            'pager_links' => array($this, 'block_pager_links'),
            'list_filters' => array($this, 'block_list_filters'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((isset($context["base_template"]) ? $context["base_template"] : null));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"sonata-actions btn-group\">
        ";
        // line 16
        $this->env->loadTemplate("SonataAdminBundle:Core:create_button.html.twig")->display($context);
        // line 17
        echo "    </div>
";
    }

    // line 20
    public function block_side_menu($context, array $blocks = array())
    {
        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : null)), "method"), array("currentClass" => "active"), "list");
    }

    // line 22
    public function block_list_table($context, array $blocks = array())
    {
        // line 23
        echo "    ";
        $context["batchactions"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "batchactions");
        // line 24
        echo "    ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "results")) > 0)) {
            // line 25
            echo "        ";
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => "batch"), "method")) {
                // line 26
                echo "        <form action=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "batch", 1 => array("filter" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "filterParameters"))), "method"), "html", null, true);
                echo "\" method=\"POST\" >
            <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
                // line 27
                echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
                echo "\" />
        ";
            }
            // line 29
            echo "            <table class=\"table table-bordered table-striped\">
                ";
            // line 30
            $this->displayBlock('table_header', $context, $blocks);
            // line 64
            echo "
                ";
            // line 65
            $this->displayBlock('table_body', $context, $blocks);
            // line 74
            echo "
                ";
            // line 75
            $this->displayBlock('table_footer', $context, $blocks);
            // line 138
            echo "            </table>
        ";
            // line 139
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => "batch"), "method")) {
                // line 140
                echo "        </form>
        ";
            }
            // line 142
            echo "    ";
        } else {
            // line 143
            echo "        <p class=\"notice\">
            ";
            // line 144
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_result", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        </p>
    ";
        }
    }

    // line 30
    public function block_table_header($context, array $blocks = array())
    {
        // line 31
        echo "                    <thead>
                        <tr class=\"sonata-ba-list-field-header\">
                            ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "list"), "elements"));
        foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
            // line 34
            echo "                                ";
            if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => "batch"), "method") && ($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "getOption", array(0 => "code"), "method") == "_batch")) && (twig_length_filter($this->env, (isset($context["batchactions"]) ? $context["batchactions"] : null)) > 0))) {
                // line 35
                echo "                                    <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-batch\">
                                      <input type=\"checkbox\" id=\"list_batch_checkbox\" />
                                    </th>
                                ";
            } elseif (($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "getOption", array(0 => "code"), "method") == "_select")) {
                // line 39
                echo "                                    <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-select\"></th>
                                ";
            } elseif ((($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "name") == "_action") && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "isXmlHttpRequest"))) {
                // line 41
                echo "                                        ";
                // line 42
                echo "                                ";
            } else {
                // line 43
                echo "                                    ";
                $context["sortable"] = false;
                // line 44
                echo "                                    ";
                if (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "sortable", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options"), "sortable"))) {
                    // line 45
                    echo "                                        ";
                    $context["sortable"] = true;
                    // line 46
                    echo "                                        ";
                    $context["sort_parameters"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "modelmanager"), "sortparameters", array(0 => (isset($context["field_description"]) ? $context["field_description"] : null), 1 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid")), "method");
                    // line 47
                    echo "                                        ";
                    $context["current"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "values"), "_sort_by") == (isset($context["field_description"]) ? $context["field_description"] : null)) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "values"), "_sort_by"), "fieldName") == $this->getAttribute($this->getAttribute((isset($context["sort_parameters"]) ? $context["sort_parameters"] : null), "filter"), "_sort_by")));
                    // line 48
                    echo "                                        ";
                    $context["sort_active_class"] = (((isset($context["current"]) ? $context["current"] : null)) ? ("sonata-ba-list-field-order-active") : (""));
                    // line 49
                    echo "                                        ";
                    $context["sort_by"] = (((isset($context["current"]) ? $context["current"] : null)) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "values"), "_sort_order")) : ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options"), "_sort_order")));
                    // line 50
                    echo "                                    ";
                }
                // line 51
                echo "
                                    ";
                // line 52
                ob_start();
                // line 53
                echo "                                        <th class=\"sonata-ba-list-field-header-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "type"), "html", null, true);
                echo " ";
                if ((isset($context["sortable"]) ? $context["sortable"] : null)) {
                    echo " sonata-ba-list-field-header-order-";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["sort_by"]) ? $context["sort_by"] : null)), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["sort_active_class"]) ? $context["sort_active_class"] : null), "html", null, true);
                }
                echo "\">
                                            ";
                // line 54
                if ((isset($context["sortable"]) ? $context["sortable"] : null)) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "list", 1 => (isset($context["sort_parameters"]) ? $context["sort_parameters"] : null)), "method"), "html", null, true);
                    echo "\">";
                }
                // line 55
                echo "                                            ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "trans", array(0 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "label"), 1 => array(), 2 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "translationDomain")), "method"), "html", null, true);
                echo "
                                            ";
                // line 56
                if ((isset($context["sortable"]) ? $context["sortable"] : null)) {
                    echo "</a>";
                }
                // line 57
                echo "                                        </th>
                                    ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 59
                echo "                                ";
            }
            // line 60
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                        </tr>
                    </thead>
                ";
    }

    // line 65
    public function block_table_body($context, array $blocks = array())
    {
        // line 66
        echo "                    <tbody>
                        ";
        // line 67
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "results"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["object"]) {
            // line 68
            echo "                            <tr>
                                ";
            // line 69
            $template = $this->env->resolveTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getTemplate", array(0 => "inner_list_row"), "method"));
            $template->display($context);
            // line 70
            echo "                            </tr>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['object'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                    </tbody>
                ";
    }

    // line 75
    public function block_table_footer($context, array $blocks = array())
    {
        // line 76
        echo "                    <tr>
                        <th colspan=\"";
        // line 77
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "list"), "elements")) - (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "isXmlHttpRequest")) ? (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "list"), "has", array(0 => "_action"), "method") + $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "list"), "has", array(0 => "batch"), "method"))) : (0))), "html", null, true);
        echo "\">
                            <div class=\"form-inline\">
                                ";
        // line 79
        if ((!$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "isXmlHttpRequest"))) {
            // line 80
            echo "                                    ";
            if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => "batch"), "method") && (twig_length_filter($this->env, (isset($context["batchactions"]) ? $context["batchactions"] : null)) > 0))) {
                // line 81
                echo "                                        ";
                $this->displayBlock('batch', $context, $blocks);
                // line 108
                echo "
                                        <input type=\"submit\" class=\"btn btn-small btn-primary\" value=\"";
                // line 109
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_batch", array(), "SonataAdminBundle"), "html", null, true);
                echo "\"/>
                                    ";
            }
            // line 111
            echo "
                                    <div class=\"pull-right\">
                                        ";
            // line 113
            if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => "export"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => "EXPORT"), "method")) && twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getExportFormats", array(), "method")))) {
                // line 114
                echo "                                            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_export_download", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                                            ";
                // line 115
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getExportFormats", array(), "method"));
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
                foreach ($context['_seq'] as $context["_key"] => $context["format"]) {
                    // line 116
                    echo "                                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "export", 1 => ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), 1 => 0), "method") + array("format" => (isset($context["format"]) ? $context["format"] : null)))), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (isset($context["format"]) ? $context["format"] : null), "html", null, true);
                    echo "</a>";
                    if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last"))) {
                        echo ",";
                    }
                    // line 117
                    echo "                                            ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['format'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 118
                echo "
                                            &nbsp;-&nbsp;
                                        ";
            }
            // line 121
            echo "
                                        ";
            // line 122
            $this->displayBlock('pager_results', $context, $blocks);
            // line 125
            echo "                                    </div>
                                ";
        }
        // line 127
        echo "                            </div>
                        </th>
                    </tr>

                    ";
        // line 131
        $this->displayBlock('pager_links', $context, $blocks);
        // line 136
        echo "
                ";
    }

    // line 81
    public function block_batch($context, array $blocks = array())
    {
        // line 82
        echo "                                            <script type=\"text/javascript\">
                                                ";
        // line 83
        $this->displayBlock('batch_javascript', $context, $blocks);
        // line 93
        echo "                                            </script>

                                            ";
        // line 95
        $this->displayBlock('batch_actions', $context, $blocks);
        // line 107
        echo "                                        ";
    }

    // line 83
    public function block_batch_javascript($context, array $blocks = array())
    {
        // line 84
        echo "                                                    jQuery(document).ready(function (\$) {
                                                        \$('#list_batch_checkbox').click(function () {
                                                            \$(this).closest('table').find(\"td input[type='checkbox']\").attr('checked', \$(this).is(':checked')).parent().parent().toggleClass('sonata-ba-list-row-selected', \$(this).is(':checked'));
                                                        });
                                                        \$(\"td.sonata-ba-list-field-batch input[type='checkbox']\").change(function () {
                                                            \$(this).parent().parent().toggleClass('sonata-ba-list-row-selected', \$(this).is(':checked'));
                                                        });
                                                    });
                                                ";
    }

    // line 95
    public function block_batch_actions($context, array $blocks = array())
    {
        // line 96
        echo "                                                <label class=\"checkbox\" for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "uniqid"), "html", null, true);
        echo "_all_elements\">
                                                    <input type=\"checkbox\" name=\"all_elements\" id=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "uniqid"), "html", null, true);
        echo "_all_elements\"/>
                                                    ";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("all_elements", array(), "SonataAdminBundle"), "html", null, true);
        echo "
                                                </label>

                                                <select name=\"action\" style=\"width: auto; height: auto\">
                                                    ";
        // line 102
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["batchactions"]) ? $context["batchactions"] : null));
        foreach ($context['_seq'] as $context["action"] => $context["options"]) {
            // line 103
            echo "                                                        <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "label"), "html", null, true);
            echo "</option>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['action'], $context['options'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "                                                </select>
                                            ";
    }

    // line 122
    public function block_pager_results($context, array $blocks = array())
    {
        // line 123
        echo "                                            ";
        $template = $this->env->resolveTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getTemplate", array(0 => "pager_results"), "method"));
        $template->display($context);
        // line 124
        echo "                                        ";
    }

    // line 131
    public function block_pager_links($context, array $blocks = array())
    {
        // line 132
        echo "                        ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "haveToPaginate", array(), "method")) {
            // line 133
            echo "                            ";
            $template = $this->env->resolveTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getTemplate", array(0 => "pager_links"), "method"));
            $template->display($context);
            // line 134
            echo "                        ";
        }
        // line 135
        echo "                    ";
    }

    // line 149
    public function block_list_filters($context, array $blocks = array())
    {
        // line 150
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "filters")) {
            // line 151
            echo "        <form class=\"sonata-filter-form ";
            echo ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isChild") && (1 == twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "filters"))))) ? ("hide") : (""));
            echo "\" action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\" method=\"GET\">
            ";
            // line 152
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
            echo "
            <fieldset class=\"filter_legend\">
                <legend class=\"filter_legend ";
            // line 154
            echo (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "hasActiveFilters")) ? ("active") : ("inactive"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_filters", array(), "SonataAdminBundle"), "html", null, true);
            echo "</legend>

                <div class=\"filter_container ";
            // line 156
            echo (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "hasActiveFilters")) ? ("active") : ("inactive"));
            echo "\">
                    <div>
                        ";
            // line 158
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "filters"));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 159
                echo "                            <div class=\"clearfix\">
                                <label for=\"";
                // line 160
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children"), $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "formName"), array(), "array"), "children"), "value", array(), "array"), "vars"), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "trans", array(0 => $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "label"), 1 => array(), 2 => $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "translationDomain")), "method"), "html", null, true);
                echo "</label>
                                ";
                // line 161
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children"), $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "formName"), array(), "array"), "children"), "type", array(), "array"), 'widget', array("attr" => array("class" => "span8 sonata-filter-option")));
                echo "
                                ";
                // line 162
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children"), $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "formName"), array(), "array"), "children"), "value", array(), "array"), 'widget', array("attr" => array("class" => "span8")));
                echo "
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 165
            echo "                    </div>

                    <input type=\"hidden\" name=\"filter[_page]\" id=\"filter__page\" value=\"1\" />

                    ";
            // line 169
            $context["foo"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children"), "_page", array(), "array"), "setRendered", array(), "method");
            // line 170
            echo "                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
            echo "

                    <input type=\"submit\" class=\"btn btn-primary\" value=\"";
            // line 172
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "\" />

                    <a class=\"btn\" href=\"";
            // line 174
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "list", 1 => array("filters" => "reset")), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_reset_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
                </div>

                ";
            // line 177
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "persistentParameters"));
            foreach ($context['_seq'] as $context["paramKey"] => $context["paramValue"]) {
                // line 178
                echo "                    <input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, (isset($context["paramKey"]) ? $context["paramKey"] : null), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["paramValue"]) ? $context["paramValue"] : null), "html", null, true);
                echo "\" />
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['paramKey'], $context['paramValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 180
            echo "            </fieldset>
        </form>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  572 => 180,  561 => 178,  557 => 177,  549 => 174,  544 => 172,  538 => 170,  536 => 169,  521 => 162,  517 => 161,  511 => 160,  508 => 159,  499 => 156,  492 => 154,  487 => 152,  477 => 150,  467 => 134,  463 => 133,  460 => 132,  449 => 123,  441 => 105,  415 => 97,  410 => 96,  395 => 84,  392 => 83,  388 => 107,  386 => 95,  382 => 93,  380 => 83,  369 => 136,  324 => 116,  300 => 113,  288 => 108,  275 => 77,  272 => 76,  226 => 67,  186 => 54,  367 => 131,  352 => 121,  340 => 90,  332 => 88,  320 => 84,  313 => 82,  310 => 81,  304 => 79,  302 => 114,  296 => 111,  287 => 72,  280 => 79,  249 => 70,  223 => 66,  216 => 25,  23 => 1,  12 => 34,  145 => 43,  110 => 36,  96 => 139,  358 => 139,  351 => 135,  347 => 118,  343 => 91,  338 => 130,  327 => 86,  319 => 124,  315 => 83,  301 => 117,  289 => 112,  277 => 68,  271 => 66,  265 => 64,  251 => 101,  248 => 100,  239 => 97,  228 => 88,  213 => 82,  211 => 81,  148 => 44,  233 => 81,  202 => 77,  198 => 66,  180 => 104,  175 => 53,  172 => 52,  165 => 64,  137 => 47,  34 => 16,  52 => 24,  212 => 74,  124 => 43,  83 => 64,  215 => 160,  184 => 132,  113 => 39,  74 => 19,  210 => 73,  126 => 55,  20 => 1,  470 => 135,  426 => 102,  419 => 98,  405 => 325,  401 => 324,  394 => 320,  377 => 82,  370 => 100,  357 => 125,  346 => 92,  333 => 117,  329 => 279,  286 => 242,  270 => 4,  70 => 23,  65 => 25,  152 => 63,  118 => 46,  76 => 32,  293 => 75,  262 => 63,  205 => 59,  174 => 53,  157 => 47,  127 => 34,  829 => 529,  823 => 433,  818 => 182,  812 => 106,  806 => 71,  800 => 18,  796 => 17,  791 => 15,  787 => 14,  783 => 13,  779 => 12,  775 => 11,  771 => 10,  767 => 9,  761 => 6,  757 => 4,  754 => 3,  740 => 530,  738 => 529,  723 => 517,  716 => 513,  686 => 486,  664 => 467,  655 => 461,  646 => 455,  639 => 451,  631 => 446,  623 => 441,  614 => 434,  610 => 433,  607 => 432,  604 => 431,  594 => 424,  584 => 417,  578 => 414,  570 => 409,  556 => 398,  548 => 393,  530 => 165,  520 => 371,  503 => 357,  489 => 346,  479 => 339,  472 => 335,  464 => 330,  456 => 325,  446 => 122,  397 => 281,  391 => 278,  376 => 269,  353 => 294,  342 => 247,  331 => 239,  323 => 125,  307 => 115,  292 => 209,  276 => 199,  255 => 183,  253 => 1,  242 => 170,  207 => 151,  200 => 147,  155 => 103,  114 => 71,  58 => 22,  299 => 116,  291 => 109,  284 => 100,  281 => 110,  274 => 236,  267 => 193,  260 => 62,  257 => 61,  250 => 84,  236 => 81,  234 => 169,  225 => 87,  197 => 56,  192 => 55,  188 => 21,  185 => 20,  181 => 63,  167 => 48,  160 => 48,  153 => 48,  146 => 47,  129 => 42,  97 => 31,  84 => 28,  37 => 14,  150 => 58,  139 => 59,  104 => 42,  90 => 20,  81 => 30,  77 => 20,  591 => 407,  586 => 406,  581 => 405,  576 => 404,  571 => 403,  566 => 402,  522 => 408,  519 => 407,  516 => 406,  513 => 405,  510 => 404,  507 => 403,  504 => 158,  488 => 388,  478 => 381,  438 => 313,  434 => 343,  389 => 313,  385 => 312,  378 => 308,  361 => 127,  354 => 293,  330 => 87,  290 => 244,  282 => 80,  222 => 76,  206 => 71,  190 => 131,  161 => 106,  134 => 56,  120 => 48,  100 => 36,  53 => 16,  480 => 151,  474 => 149,  469 => 158,  461 => 155,  457 => 131,  453 => 124,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 103,  427 => 339,  423 => 301,  413 => 328,  409 => 327,  407 => 95,  402 => 323,  398 => 129,  393 => 126,  387 => 122,  384 => 274,  381 => 310,  379 => 119,  374 => 81,  368 => 264,  365 => 141,  362 => 110,  360 => 259,  355 => 122,  341 => 131,  337 => 282,  322 => 275,  314 => 99,  312 => 98,  309 => 120,  305 => 119,  298 => 91,  294 => 245,  285 => 81,  283 => 70,  278 => 238,  268 => 107,  264 => 72,  258 => 81,  252 => 80,  247 => 179,  241 => 31,  229 => 73,  220 => 65,  214 => 61,  177 => 54,  169 => 51,  140 => 41,  132 => 44,  128 => 44,  111 => 41,  107 => 40,  61 => 28,  273 => 96,  269 => 75,  254 => 60,  246 => 69,  243 => 68,  240 => 176,  238 => 206,  235 => 74,  230 => 82,  227 => 79,  224 => 162,  221 => 79,  219 => 84,  217 => 75,  208 => 60,  204 => 78,  179 => 72,  159 => 49,  143 => 48,  135 => 48,  131 => 45,  119 => 31,  108 => 144,  102 => 142,  71 => 32,  67 => 31,  63 => 16,  59 => 23,  47 => 14,  38 => 14,  94 => 39,  89 => 37,  85 => 28,  79 => 33,  75 => 25,  68 => 26,  56 => 22,  50 => 20,  29 => 2,  87 => 29,  72 => 19,  55 => 24,  21 => 11,  26 => 14,  98 => 140,  93 => 138,  88 => 74,  78 => 29,  46 => 9,  27 => 14,  40 => 15,  44 => 20,  35 => 17,  31 => 23,  43 => 16,  41 => 19,  28 => 22,  201 => 57,  196 => 65,  183 => 82,  171 => 116,  166 => 50,  163 => 49,  158 => 62,  156 => 41,  151 => 45,  142 => 42,  138 => 57,  136 => 39,  123 => 33,  121 => 42,  117 => 50,  115 => 40,  105 => 143,  101 => 37,  91 => 75,  69 => 32,  66 => 17,  62 => 24,  49 => 28,  24 => 13,  32 => 3,  25 => 12,  22 => 11,  19 => 11,  209 => 24,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 60,  182 => 69,  176 => 102,  173 => 71,  168 => 113,  164 => 54,  162 => 59,  154 => 46,  149 => 62,  147 => 46,  144 => 45,  141 => 48,  133 => 51,  130 => 35,  125 => 40,  122 => 74,  116 => 30,  112 => 47,  109 => 45,  106 => 35,  103 => 41,  99 => 31,  95 => 37,  92 => 28,  86 => 65,  82 => 23,  80 => 37,  73 => 27,  64 => 28,  60 => 15,  57 => 14,  54 => 26,  51 => 29,  48 => 15,  45 => 17,  42 => 19,  39 => 25,  36 => 17,  33 => 16,  30 => 15,);
    }
}
