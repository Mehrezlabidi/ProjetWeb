<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig */
class __TwigTemplate_9037269c42e384d21266ecf7e0c49a2851b4308cfac464c03149fdef2daa6ac9 extends Twig_Template
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
        // line 11
        if ((!$this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "hasassociationadmin"))) {
            // line 12
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 13
                echo "        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["element"]) ? $context["element"] : null), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description")), "html", null, true);
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 16
            echo "
    <div id=\"field_container_";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" class=\"field-container\">
        <span id=\"field_widget_";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" >
            ";
            // line 19
            if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "edit") == "inline")) {
                // line 20
                echo "                ";
                if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "inline") == "table")) {
                    // line 21
                    echo "                    ";
                    if ((twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children")) > 0)) {
                        // line 22
                        echo "                        <table class=\"table table-bordered\">
                            <thead>
                                <tr>
                                    ";
                        // line 25
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children"), 0, array(), "array"), "children"));
                        foreach ($context['_seq'] as $context["field_name"] => $context["nested_field"]) {
                            // line 26
                            echo "                                        ";
                            if (((isset($context["field_name"]) ? $context["field_name"] : null) == "_delete")) {
                                // line 27
                                echo "                                            <th>";
                                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action_delete", array(), "SonataAdminBundle"), "html", null, true);
                                echo "</th>
                                        ";
                            } else {
                                // line 29
                                echo "                                            <th ";
                                echo (($this->getAttribute($this->getAttribute((isset($context["nested_field"]) ? $context["nested_field"] : null), "vars"), "required", array(), "array")) ? ("class=\"required\"") : (""));
                                if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["nested_field"]) ? $context["nested_field"] : null), "vars", array(), "any", false, true), "attr", array(), "array", false, true), "hidden", array(), "array", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["nested_field"]) ? $context["nested_field"] : null), "vars"), "attr", array(), "array"), "hidden", array(), "array"))) {
                                    echo " style=\"display:none;\"";
                                }
                                echo ">
                                                ";
                                // line 30
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["nested_field"]) ? $context["nested_field"] : null), "vars"), "sonata_admin", array(), "array"), "admin"), "trans", array(0 => $this->getAttribute($this->getAttribute((isset($context["nested_field"]) ? $context["nested_field"] : null), "vars"), "label")), "method"), "html", null, true);
                                echo "
                                            </th>
                                        ";
                            }
                            // line 33
                            echo "                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['nested_field'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 34
                        echo "                                </tr>
                            </thead>
                            <tbody class=\"sonata-ba-tbody\">
                                ";
                        // line 37
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children"));
                        foreach ($context['_seq'] as $context["nested_group_field_name"] => $context["nested_group_field"]) {
                            // line 38
                            echo "                                    <tr>
                                        ";
                            // line 39
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["nested_group_field"]) ? $context["nested_group_field"] : null), "children"));
                            foreach ($context['_seq'] as $context["field_name"] => $context["nested_field"]) {
                                // line 40
                                echo "                                            <td class=\"sonata-ba-td-";
                                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                                echo "-";
                                echo twig_escape_filter($this->env, (isset($context["field_name"]) ? $context["field_name"] : null), "html", null, true);
                                echo " control-group";
                                if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["nested_field"]) ? $context["nested_field"] : null), "vars"), "errors")) > 0)) {
                                    echo " error";
                                }
                                echo "\"";
                                if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["nested_field"]) ? $context["nested_field"] : null), "vars", array(), "any", false, true), "attr", array(), "array", false, true), "hidden", array(), "array", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["nested_field"]) ? $context["nested_field"] : null), "vars"), "attr", array(), "array"), "hidden", array(), "array"))) {
                                    echo " style=\"display:none;\"";
                                }
                                echo ">
                                                ";
                                // line 41
                                if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "associationadmin", array(), "any", false, true), "formfielddescriptions", array(), "any", false, true), (isset($context["field_name"]) ? $context["field_name"] : null), array(), "array", true, true)) {
                                    // line 42
                                    echo "                                                    ";
                                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["nested_field"]) ? $context["nested_field"] : null), 'widget');
                                    echo "

                                                    ";
                                    // line 44
                                    $context["dummy"] = $this->getAttribute((isset($context["nested_group_field"]) ? $context["nested_group_field"] : null), "setrendered");
                                    // line 45
                                    echo "                                                ";
                                } else {
                                    // line 46
                                    echo "                                                    ";
                                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["nested_field"]) ? $context["nested_field"] : null), 'widget');
                                    echo "
                                                ";
                                }
                                // line 48
                                echo "                                                ";
                                if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["nested_field"]) ? $context["nested_field"] : null), "vars"), "errors")) > 0)) {
                                    // line 49
                                    echo "                                                    <div class=\"help-inline sonata-ba-field-error-messages\">
                                                        ";
                                    // line 50
                                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["nested_field"]) ? $context["nested_field"] : null), 'errors');
                                    echo "
                                                    </div>
                                                ";
                                }
                                // line 53
                                echo "                                            </td>
                                        ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['nested_field'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 55
                            echo "                                    </tr>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['nested_group_field_name'], $context['nested_group_field'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 57
                        echo "                            </tbody>
                        </table>
                    ";
                    }
                    // line 60
                    echo "                ";
                } elseif ((twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children")) > 0)) {
                    // line 61
                    echo "                    <div>
                        ";
                    // line 62
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children"));
                    foreach ($context['_seq'] as $context["nested_group_field_name"] => $context["nested_group_field"]) {
                        // line 63
                        echo "                            ";
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["nested_group_field"]) ? $context["nested_group_field"] : null), "children"));
                        foreach ($context['_seq'] as $context["field_name"] => $context["nested_field"]) {
                            // line 64
                            echo "                                ";
                            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "associationadmin", array(), "any", false, true), "formfielddescriptions", array(), "any", false, true), (isset($context["field_name"]) ? $context["field_name"] : null), array(), "array", true, true)) {
                                // line 65
                                echo "                                    ";
                                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["nested_field"]) ? $context["nested_field"] : null), 'row', array("inline" => "natural", "edit" => "inline"));
                                // line 68
                                echo "
                                    ";
                                // line 69
                                $context["dummy"] = $this->getAttribute((isset($context["nested_group_field"]) ? $context["nested_group_field"] : null), "setrendered");
                                // line 70
                                echo "                                ";
                            } else {
                                // line 71
                                echo "                                    ";
                                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["nested_field"]) ? $context["nested_field"] : null), 'row');
                                echo "
                                ";
                            }
                            // line 73
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['nested_field'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 74
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['nested_group_field_name'], $context['nested_group_field'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 75
                    echo "                    </div>
                ";
                }
                // line 77
                echo "            ";
            } else {
                // line 78
                echo "                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
                echo "
            ";
            }
            // line 80
            echo "
        </span>

        ";
            // line 83
            if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "edit") == "inline")) {
                // line 84
                echo "
            ";
                // line 85
                if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "associationadmin"), "hasroute", array(0 => "create"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "associationadmin"), "isGranted", array(0 => "CREATE"), "method")) && (isset($context["btn_add"]) ? $context["btn_add"] : null))) {
                    // line 86
                    echo "                <span id=\"field_actions_";
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo "\" >
                    <a
                        href=\"";
                    // line 88
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "associationadmin"), "generateUrl", array(0 => "create", 1 => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "getOption", array(0 => "link_parameters", 1 => array()), "method")), "method"), "html", null, true);
                    echo "\"
                        onclick=\"return start_field_retrieve_";
                    // line 89
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo "(this);\"
                        class=\"btn sonata-ba-action\"
                        title=\"";
                    // line 91
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_add"]) ? $context["btn_add"] : null), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : null)), "html", null, true);
                    echo "\"
                        >
                        <i class=\"icon-plus\"></i>
                        ";
                    // line 94
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_add"]) ? $context["btn_add"] : null), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : null)), "html", null, true);
                    echo "
                    </a>
                </span>
            ";
                }
                // line 98
                echo "
            ";
                // line 100
                echo "            ";
                if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "sortable", array(), "any", true, true)) {
                    // line 101
                    echo "                <script type=\"text/javascript\">
                    jQuery('div#field_container_";
                    // line 102
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo " tbody.sonata-ba-tbody').sortable({
                        axis: 'y',
                        opacity: 0.6,
                        items: 'tr',
                        stop: apply_position_value_";
                    // line 106
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo "
                    });

                    function apply_position_value_";
                    // line 109
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo "() {
                        // update the input value position
                        jQuery('div#field_container_";
                    // line 111
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo " tbody.sonata-ba-tbody td.sonata-ba-td-";
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "options"), "sortable"), "html", null, true);
                    echo "').each(function(index, element) {
                            // remove the sortable handler and put it back
                            jQuery('span.sonata-ba-sortable-handler', element).remove();
                            jQuery(element).append('<span class=\"sonata-ba-sortable-handler ui-icon ui-icon-grip-solid-horizontal\"></span>');
                            jQuery('input', element).hide();
                        });

                        jQuery('div#field_container_";
                    // line 118
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo " tbody.sonata-ba-tbody td.sonata-ba-td-";
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "options"), "sortable"), "html", null, true);
                    echo " input').each(function(index, value) {
                            jQuery(value).val(index + 1);
                        });
                    }

                    // refresh the sortable option when a new element is added
                    jQuery('#sonata-ba-field-container-";
                    // line 124
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo "').bind('sonata.add_element', function() {
                        apply_position_value_";
                    // line 125
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo "();
                        jQuery('div#field_container_";
                    // line 126
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo " tbody.sonata-ba-tbody').sortable('refresh');
                    });

                    apply_position_value_";
                    // line 129
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo "();

                </script>
            ";
                }
                // line 133
                echo "
            ";
                // line 135
                echo "            ";
                $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_association_script.html.twig")->display($context);
                // line 136
                echo "
        ";
            } else {
                // line 138
                echo "            <span id=\"field_actions_";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "\" >
                ";
                // line 139
                if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "associationadmin"), "hasroute", array(0 => "create"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "associationadmin"), "isGranted", array(0 => "CREATE"), "method")) && (isset($context["btn_add"]) ? $context["btn_add"] : null))) {
                    // line 140
                    echo "                    <a
                        href=\"";
                    // line 141
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "associationadmin"), "generateUrl", array(0 => "create", 1 => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "getOption", array(0 => "link_parameters", 1 => array()), "method")), "method"), "html", null, true);
                    echo "\"
                        onclick=\"return start_field_dialog_form_add_";
                    // line 142
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo "(this);\"
                        class=\"btn sonata-ba-action\"
                        title=\"";
                    // line 144
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_add"]) ? $context["btn_add"] : null), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : null)), "html", null, true);
                    echo "\"
                        >
                        <i class=\"icon-plus\"></i>
                        ";
                    // line 147
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_add"]) ? $context["btn_add"] : null), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : null)), "html", null, true);
                    echo "
                    </a>
                ";
                }
                // line 150
                echo "            </span>

            <div style=\"display: none\" id=\"field_dialog_";
                // line 152
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "\">

            </div>

            ";
                // line 156
                $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig")->display($context);
                // line 157
                echo "        ";
            }
            // line 158
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  406 => 158,  373 => 142,  364 => 139,  359 => 138,  244 => 85,  195 => 68,  318 => 122,  316 => 121,  279 => 104,  256 => 89,  237 => 86,  694 => 412,  685 => 406,  680 => 403,  678 => 398,  668 => 395,  654 => 389,  647 => 382,  643 => 381,  637 => 378,  633 => 377,  617 => 367,  609 => 362,  599 => 355,  579 => 342,  577 => 341,  567 => 337,  550 => 326,  531 => 312,  518 => 307,  514 => 306,  509 => 304,  466 => 280,  452 => 272,  445 => 267,  443 => 261,  439 => 260,  429 => 255,  424 => 254,  422 => 250,  383 => 224,  366 => 140,  232 => 84,  836 => 271,  833 => 270,  828 => 265,  821 => 261,  815 => 258,  811 => 256,  809 => 255,  798 => 251,  795 => 250,  789 => 248,  784 => 246,  778 => 244,  776 => 243,  773 => 242,  765 => 239,  762 => 238,  759 => 237,  755 => 192,  749 => 191,  735 => 187,  730 => 186,  727 => 185,  722 => 184,  719 => 183,  715 => 277,  708 => 267,  706 => 237,  699 => 235,  693 => 232,  690 => 231,  688 => 230,  683 => 227,  677 => 224,  674 => 223,  672 => 222,  658 => 391,  638 => 213,  632 => 211,  627 => 374,  621 => 206,  611 => 203,  587 => 200,  582 => 198,  569 => 183,  526 => 310,  523 => 156,  506 => 151,  495 => 148,  491 => 147,  481 => 290,  475 => 141,  468 => 140,  459 => 137,  450 => 135,  447 => 134,  420 => 249,  417 => 126,  408 => 124,  396 => 234,  390 => 150,  363 => 114,  345 => 97,  328 => 124,  325 => 73,  317 => 70,  303 => 65,  261 => 91,  231 => 33,  194 => 88,  713 => 270,  707 => 211,  704 => 210,  702 => 236,  696 => 206,  681 => 203,  669 => 221,  666 => 200,  663 => 393,  652 => 214,  635 => 191,  618 => 190,  613 => 204,  608 => 202,  605 => 201,  602 => 185,  596 => 181,  592 => 351,  590 => 178,  585 => 347,  568 => 175,  551 => 174,  547 => 173,  542 => 321,  539 => 162,  533 => 169,  528 => 167,  525 => 166,  512 => 152,  505 => 156,  502 => 155,  498 => 149,  486 => 292,  483 => 144,  473 => 150,  465 => 139,  462 => 138,  451 => 141,  428 => 129,  425 => 128,  414 => 125,  403 => 157,  400 => 161,  371 => 113,  349 => 133,  339 => 100,  336 => 126,  326 => 185,  311 => 89,  297 => 84,  263 => 71,  191 => 69,  344 => 97,  335 => 188,  321 => 123,  295 => 88,  259 => 70,  178 => 119,  572 => 193,  561 => 174,  557 => 330,  549 => 174,  544 => 172,  538 => 319,  536 => 161,  521 => 162,  517 => 155,  511 => 160,  508 => 159,  499 => 156,  492 => 295,  487 => 152,  477 => 150,  467 => 148,  463 => 133,  460 => 132,  449 => 123,  441 => 105,  415 => 247,  410 => 96,  395 => 84,  392 => 83,  388 => 124,  386 => 95,  382 => 93,  380 => 83,  369 => 141,  324 => 92,  300 => 113,  288 => 107,  275 => 103,  272 => 158,  226 => 67,  186 => 83,  367 => 131,  352 => 135,  340 => 95,  332 => 125,  320 => 84,  313 => 82,  310 => 81,  304 => 174,  302 => 114,  296 => 109,  287 => 72,  280 => 101,  249 => 67,  223 => 58,  216 => 28,  23 => 18,  12 => 34,  145 => 52,  110 => 77,  96 => 40,  358 => 113,  351 => 135,  347 => 102,  343 => 91,  338 => 76,  327 => 86,  319 => 71,  315 => 118,  301 => 111,  289 => 59,  277 => 100,  271 => 55,  265 => 99,  251 => 101,  248 => 100,  239 => 83,  228 => 78,  213 => 126,  211 => 81,  148 => 64,  233 => 62,  202 => 77,  198 => 69,  180 => 62,  175 => 77,  172 => 52,  165 => 59,  137 => 46,  34 => 26,  52 => 21,  212 => 74,  124 => 41,  83 => 82,  215 => 74,  184 => 63,  113 => 41,  74 => 34,  210 => 75,  126 => 42,  20 => 11,  470 => 135,  426 => 102,  419 => 98,  405 => 325,  401 => 156,  394 => 152,  377 => 115,  370 => 100,  357 => 125,  346 => 196,  333 => 117,  329 => 95,  286 => 80,  270 => 4,  70 => 23,  65 => 30,  152 => 92,  118 => 28,  76 => 57,  293 => 109,  262 => 63,  205 => 59,  174 => 60,  157 => 41,  127 => 56,  829 => 529,  823 => 433,  818 => 182,  812 => 106,  806 => 254,  800 => 252,  796 => 17,  791 => 15,  787 => 247,  783 => 13,  779 => 12,  775 => 11,  771 => 10,  767 => 240,  761 => 6,  757 => 4,  754 => 3,  740 => 188,  738 => 529,  723 => 517,  716 => 513,  686 => 205,  664 => 218,  655 => 215,  646 => 455,  639 => 451,  631 => 446,  623 => 441,  614 => 434,  610 => 433,  607 => 432,  604 => 431,  594 => 424,  584 => 199,  578 => 196,  570 => 409,  556 => 398,  548 => 165,  530 => 158,  520 => 371,  503 => 357,  489 => 346,  479 => 339,  472 => 335,  464 => 330,  456 => 273,  446 => 139,  397 => 281,  391 => 278,  376 => 119,  353 => 294,  342 => 129,  331 => 187,  323 => 125,  307 => 66,  292 => 87,  276 => 199,  255 => 183,  253 => 95,  242 => 140,  207 => 151,  200 => 70,  155 => 53,  114 => 71,  58 => 22,  299 => 112,  291 => 169,  284 => 106,  281 => 105,  274 => 98,  267 => 94,  260 => 98,  257 => 149,  250 => 93,  236 => 35,  234 => 80,  225 => 77,  197 => 70,  192 => 65,  188 => 174,  185 => 68,  181 => 80,  167 => 48,  160 => 58,  153 => 56,  146 => 49,  129 => 24,  97 => 63,  84 => 39,  37 => 12,  150 => 55,  139 => 31,  104 => 67,  90 => 27,  81 => 30,  77 => 27,  591 => 407,  586 => 406,  581 => 345,  576 => 195,  571 => 338,  566 => 182,  522 => 408,  519 => 407,  516 => 161,  513 => 405,  510 => 158,  507 => 157,  504 => 302,  488 => 388,  478 => 142,  438 => 313,  434 => 130,  389 => 313,  385 => 312,  378 => 144,  361 => 208,  354 => 293,  330 => 87,  290 => 106,  282 => 79,  222 => 81,  206 => 71,  190 => 175,  161 => 71,  134 => 45,  120 => 46,  100 => 36,  53 => 20,  480 => 128,  474 => 285,  469 => 158,  461 => 155,  457 => 131,  453 => 136,  444 => 132,  440 => 148,  437 => 131,  435 => 258,  430 => 137,  427 => 339,  423 => 128,  413 => 328,  409 => 124,  407 => 242,  402 => 170,  398 => 119,  393 => 158,  387 => 122,  384 => 147,  381 => 121,  379 => 119,  374 => 114,  368 => 264,  365 => 141,  362 => 110,  360 => 259,  355 => 136,  341 => 131,  337 => 282,  322 => 275,  314 => 99,  312 => 177,  309 => 117,  305 => 115,  298 => 173,  294 => 245,  285 => 84,  283 => 102,  278 => 238,  268 => 54,  264 => 72,  258 => 81,  252 => 88,  247 => 66,  241 => 84,  229 => 73,  220 => 80,  214 => 61,  177 => 61,  169 => 57,  140 => 28,  132 => 44,  128 => 47,  111 => 40,  107 => 24,  61 => 25,  273 => 96,  269 => 100,  254 => 68,  246 => 86,  243 => 89,  240 => 176,  238 => 139,  235 => 74,  230 => 82,  227 => 134,  224 => 162,  221 => 75,  219 => 129,  217 => 79,  208 => 124,  204 => 73,  179 => 66,  159 => 70,  143 => 48,  135 => 81,  131 => 48,  119 => 43,  108 => 39,  102 => 38,  71 => 29,  67 => 27,  63 => 50,  59 => 49,  47 => 19,  38 => 17,  94 => 86,  89 => 40,  85 => 34,  79 => 31,  75 => 31,  68 => 31,  56 => 24,  50 => 20,  29 => 21,  87 => 33,  72 => 56,  55 => 22,  21 => 12,  26 => 13,  98 => 37,  93 => 34,  88 => 60,  78 => 36,  46 => 35,  27 => 16,  40 => 44,  44 => 21,  35 => 16,  31 => 22,  43 => 18,  41 => 14,  28 => 13,  201 => 72,  196 => 52,  183 => 121,  171 => 63,  166 => 100,  163 => 49,  158 => 37,  156 => 57,  151 => 45,  142 => 61,  138 => 50,  136 => 39,  123 => 30,  121 => 53,  117 => 89,  115 => 50,  105 => 39,  101 => 73,  91 => 85,  69 => 50,  66 => 23,  62 => 29,  49 => 20,  24 => 13,  32 => 15,  25 => 12,  22 => 12,  19 => 11,  209 => 73,  203 => 71,  199 => 53,  193 => 51,  189 => 64,  187 => 49,  182 => 69,  176 => 65,  173 => 112,  168 => 60,  164 => 72,  162 => 55,  154 => 67,  149 => 50,  147 => 90,  144 => 95,  141 => 94,  133 => 49,  130 => 57,  125 => 45,  122 => 44,  116 => 43,  112 => 26,  109 => 40,  106 => 35,  103 => 46,  99 => 30,  95 => 43,  92 => 61,  86 => 64,  82 => 33,  80 => 9,  73 => 29,  64 => 26,  60 => 25,  57 => 22,  54 => 154,  51 => 38,  48 => 40,  45 => 19,  42 => 18,  39 => 17,  36 => 16,  33 => 16,  30 => 15,);
    }
}
