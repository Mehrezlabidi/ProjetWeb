<?php

/* SonataAdminBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_95d341dcb03c09c684266c9679a680a51b0746f4127c2de028c23cc446c35ed1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_label' => array($this, 'block_form_label'),
            'widget_container_attributes_choice_widget' => array($this, 'block_widget_container_attributes_choice_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'form_row' => array($this, 'block_form_row'),
            'label' => array($this, 'block_label'),
            'collection_widget_row' => array($this, 'block_collection_widget_row'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'sonata_type_immutable_array_widget' => array($this, 'block_sonata_type_immutable_array_widget'),
            'sonata_type_immutable_array_widget_row' => array($this, 'block_sonata_type_immutable_array_widget_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 13
        $this->displayBlock('form_label', $context, $blocks);
        // line 53
        echo "
";
        // line 54
        $this->displayBlock('widget_container_attributes_choice_widget', $context, $blocks);
        // line 61
        echo "
";
        // line 62
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 112
        echo "
";
        // line 113
        $this->displayBlock('form_row', $context, $blocks);
        // line 154
        echo "
";
        // line 155
        $this->displayBlock('collection_widget_row', $context, $blocks);
        // line 165
        echo "
";
        // line 166
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 184
        echo "
";
        // line 185
        $this->displayBlock('sonata_type_immutable_array_widget', $context, $blocks);
        // line 198
        echo "
";
        // line 199
        $this->displayBlock('sonata_type_immutable_array_widget_row', $context, $blocks);
    }

    // line 13
    public function block_form_label($context, array $blocks = array())
    {
        // line 14
        ob_start();
        // line 15
        echo "    ";
        if ((!((isset($context["label"]) ? $context["label"] : null) === false))) {
            // line 16
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class"), "")) : ("")) . " control-label")));
            // line 17
            echo "
        ";
            // line 18
            if ((!(isset($context["compound"]) ? $context["compound"] : null))) {
                // line 19
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("for" => (isset($context["id"]) ? $context["id"] : null)));
                // line 20
                echo "        ";
            }
            // line 21
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : null)) {
                // line 22
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class"), "")) : ("")) . " required"))));
                // line 23
                echo "        ";
            }
            // line 24
            echo "
        ";
            // line 25
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : null))) {
                // line 26
                echo "            ";
                $context["label"] = call_user_func_array($this->env->getFilter('humanize')->getCallable(), array((isset($context["name"]) ? $context["name"] : null)));
                // line 27
                echo "        ";
            }
            // line 28
            echo "
        ";
            // line 29
            if (((array_key_exists("in_list_checkbox", $context) && (isset($context["in_list_checkbox"]) ? $context["in_list_checkbox"] : null)) && array_key_exists("widget", $context))) {
                // line 30
                echo "            <label";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : null));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : null), "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : null), "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">
                ";
                // line 31
                echo (isset($context["widget"]) ? $context["widget"] : null);
                echo "
                <span>
                    ";
                // line 33
                if ((!$this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin"))) {
                    // line 34
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
                } else {
                    // line 36
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null), array(), $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "translationDomain")), "html", null, true);
                }
                // line 38
                echo "                </span>
            </label>
        ";
            } else {
                // line 41
                echo "            <label";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : null));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : null), "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : null), "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">
                ";
                // line 42
                if ((!$this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin"))) {
                    // line 43
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
                } else {
                    // line 45
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin"), "trans", array(0 => (isset($context["label"]) ? $context["label"] : null), 1 => array(), 2 => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "translationDomain")), "method"), "html", null, true);
                    echo "
                ";
                }
                // line 47
                echo "                ";
                echo (((isset($context["required"]) ? $context["required"] : null)) ? ("*") : (""));
                echo "
            </label>
        ";
            }
            // line 50
            echo "    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 54
    public function block_widget_container_attributes_choice_widget($context, array $blocks = array())
    {
        // line 55
        echo "    ";
        ob_start();
        // line 56
        echo "        id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\"
        ";
        // line 57
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : null), "html", null, true);
            echo "=\"";
            if (((isset($context["attrname"]) ? $context["attrname"] : null) == "class")) {
                echo "unstyled ";
            }
            echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : null), "html", null, true);
            echo "\" ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "        ";
        if (!twig_in_filter("class", (isset($context["attr"]) ? $context["attr"] : null))) {
            echo "class=\"unstyled\"";
        }
        // line 59
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 62
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 63
        ob_start();
        // line 64
        echo "    <ul ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 65
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 66
            echo "            <li>
                ";
            // line 67
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : null), 'widget');
            echo "
                ";
            // line 68
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : null), 'label');
            echo "
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "    </ul>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 75
    public function block_choice_widget($context, array $blocks = array())
    {
        // line 76
        ob_start();
        // line 77
        echo "    ";
        if ((isset($context["compound"]) ? $context["compound"] : null)) {
            // line 78
            echo "        <ul ";
            $this->displayBlock("widget_container_attributes_choice_widget", $context, $blocks);
            echo ">
        ";
            // line 79
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 80
                echo "            <li>
                ";
                // line 81
                ob_start();
                // line 82
                echo "                    ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : null), 'widget');
                echo "
                ";
                $context["form_widget_content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 84
                echo "                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : null), 'label', array("in_list_checkbox" => true, "widget" => (isset($context["form_widget_content"]) ? $context["form_widget_content"] : null)) + (twig_test_empty($_label_ = (($this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "vars", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "vars", array(), "any", false, true), "label"), null)) : (null))) ? array() : array("label" => $_label_)));
                echo "
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "        </ul>
    ";
        } else {
            // line 89
            echo "    <select ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
                echo " multiple=\"multiple\"";
            }
            echo ">
        ";
            // line 90
            if ((!(null === (isset($context["empty_value"]) ? $context["empty_value"] : null)))) {
                // line 91
                echo "            <option value=\"\">
                ";
                // line 92
                if ((!$this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin"))) {
                    // line 93
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["empty_value"]) ? $context["empty_value"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
                } else {
                    // line 95
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["empty_value"]) ? $context["empty_value"] : null), array(), $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "translationDomain")), "html", null, true);
                }
                // line 97
                echo "            </option>
        ";
            }
            // line 99
            echo "        ";
            if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : null)) > 0)) {
                // line 100
                echo "            ";
                $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : null);
                // line 101
                echo "            ";
                $this->displayBlock("choice_widget_options", $context, $blocks);
                echo "
            ";
                // line 102
                if ((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : null)) > 0)) {
                    // line 103
                    echo "                <option disabled=\"disabled\">";
                    echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : null), "html", null, true);
                    echo "</option>
            ";
                }
                // line 105
                echo "        ";
            }
            // line 106
            echo "        ";
            $context["options"] = (isset($context["choices"]) ? $context["choices"] : null);
            // line 107
            echo "        ";
            $this->displayBlock("choice_widget_options", $context, $blocks);
            echo "
    </select>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 113
    public function block_form_row($context, array $blocks = array())
    {
        // line 114
        echo "    ";
        if ((((!array_key_exists("sonata_admin", $context)) || (!(isset($context["sonata_admin_enabled"]) ? $context["sonata_admin_enabled"] : null))) || (!$this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description")))) {
            // line 115
            echo "        <div class=\"control-group ";
            if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
                echo " error";
            }
            echo "\">
            ";
            // line 116
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label', (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : null), null)) : (null))) ? array() : array("label" => $_label_)));
            echo "
            <div class=\"controls ";
            // line 117
            if (((isset($context["label"]) ? $context["label"] : null) === false)) {
                echo "sonata-collection-row-without-label";
            }
            echo "\">
                ";
            // line 118
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
            echo "
                ";
            // line 119
            if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
                // line 120
                echo "                    <div class=\"help-inline sonata-ba-field-error-messages\">
                        ";
                // line 121
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
                echo "
                    </div>
                ";
            }
            // line 124
            echo "            </div>
        </div>
    ";
        } else {
            // line 127
            echo "        <div class=\"control-group";
            if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
                echo " error";
            }
            echo "\" id=\"sonata-ba-field-container-";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\">
            ";
            // line 128
            $this->displayBlock('label', $context, $blocks);
            // line 135
            echo "
            ";
            // line 136
            $context["has_label"] = ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true) || (!((isset($context["label"]) ? $context["label"] : null) === false)));
            // line 137
            echo "            <div class=\"controls sonata-ba-field sonata-ba-field-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "edit"), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "inline"), "html", null, true);
            echo " ";
            if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
                echo "sonata-ba-field-error";
            }
            echo " ";
            if ((!(isset($context["has_label"]) ? $context["has_label"] : null))) {
                echo "sonata-collection-row-without-label";
            }
            echo "\">

                ";
            // line 139
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
            echo "

                ";
            // line 141
            if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
                // line 142
                echo "                    <div class=\"help-inline sonata-ba-field-error-messages\">
                        ";
                // line 143
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
                echo "
                    </div>
                ";
            }
            // line 146
            echo "
                ";
            // line 147
            if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "help")) {
                // line 148
                echo "                    <span class=\"help-block sonata-ba-field-help\">";
                echo $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin"), "trans", array(0 => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "help"), 1 => array(), 2 => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "translationDomain")), "method");
                echo "</span>
                ";
            }
            // line 150
            echo "            </div>
        </div>
    ";
        }
    }

    // line 128
    public function block_label($context, array $blocks = array())
    {
        // line 129
        echo "                ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 130
            echo "                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label', array("attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "options"), "name")) ? array() : array("label" => $_label_)));
            echo "
                ";
        } else {
            // line 132
            echo "                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label', array("attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : null), null)) : (null))) ? array() : array("label" => $_label_)));
            echo "
                ";
        }
        // line 134
        echo "            ";
    }

    // line 155
    public function block_collection_widget_row($context, array $blocks = array())
    {
        // line 156
        ob_start();
        // line 157
        echo "    <div class=\"sonata-collection-row\">
        ";
        // line 158
        if ((isset($context["allow_delete"]) ? $context["allow_delete"] : null)) {
            // line 159
            echo "            <a href=\"#\" class=\"btn sonata-collection-delete\"><i class=\"icon-remove\"></i></a>
        ";
        }
        // line 161
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : null), 'row');
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 166
    public function block_collection_widget($context, array $blocks = array())
    {
        // line 167
        ob_start();
        // line 168
        echo "    ";
        if (array_key_exists("prototype", $context)) {
            // line 169
            echo "        ";
            $context["child"] = (isset($context["prototype"]) ? $context["prototype"] : null);
            // line 170
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("data-prototype" => $this->renderBlock("collection_widget_row", $context, $blocks), "data-prototype-name" => $this->getAttribute($this->getAttribute((isset($context["prototype"]) ? $context["prototype"] : null), "vars"), "name"), "class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : (""))));
            // line 171
            echo "    ";
        }
        // line 172
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 173
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
        ";
        // line 174
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 175
            echo "            ";
            $this->displayBlock("collection_widget_row", $context, $blocks);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
        ";
        // line 178
        if ((isset($context["allow_add"]) ? $context["allow_add"] : null)) {
            // line 179
            echo "            <div><a href=\"#\" class=\"btn sonata-collection-add\"><i class=\"icon-plus\"></i></a></div>
        ";
        }
        // line 181
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 185
    public function block_sonata_type_immutable_array_widget($context, array $blocks = array())
    {
        // line 186
        echo "    ";
        ob_start();
        // line 187
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            ";
        // line 188
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "

            ";
        // line 190
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
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
        foreach ($context['_seq'] as $context["key"] => $context["child"]) {
            // line 191
            echo "                ";
            $this->displayBlock("sonata_type_immutable_array_widget_row", $context, $blocks);
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 193
        echo "
            ";
        // line 194
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 199
    public function block_sonata_type_immutable_array_widget_row($context, array $blocks = array())
    {
        // line 200
        echo "    ";
        ob_start();
        // line 201
        echo "        <div class=\"control-group";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            echo " error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
        echo "\">

            ";
        // line 203
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : null), 'label');
        echo "

            <div class=\"controls sonata-ba-field sonata-ba-field-";
        // line 205
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "edit"), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "inline"), "html", null, true);
        echo " ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
                ";
        // line 206
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : null), 'widget');
        echo "
            </div>

            ";
        // line 209
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            // line 210
            echo "                <div class=\"help-inline sonata-ba-field-error-messages\">
                    ";
            // line 211
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : null), 'errors');
            echo "
                </div>
            ";
        }
        // line 214
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Form:form_admin_fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  713 => 214,  707 => 211,  704 => 210,  702 => 209,  696 => 206,  681 => 203,  669 => 201,  666 => 200,  663 => 199,  652 => 193,  635 => 191,  618 => 190,  613 => 188,  608 => 187,  605 => 186,  602 => 185,  596 => 181,  592 => 179,  590 => 178,  585 => 177,  568 => 175,  551 => 174,  547 => 173,  542 => 172,  539 => 171,  533 => 169,  528 => 167,  525 => 166,  512 => 159,  505 => 156,  502 => 155,  498 => 134,  486 => 130,  483 => 129,  473 => 150,  465 => 147,  462 => 146,  451 => 141,  428 => 136,  425 => 135,  414 => 127,  403 => 121,  400 => 120,  371 => 113,  349 => 103,  339 => 100,  336 => 99,  326 => 93,  311 => 89,  297 => 84,  263 => 71,  191 => 50,  344 => 97,  335 => 93,  321 => 91,  295 => 88,  259 => 70,  178 => 45,  572 => 180,  561 => 178,  557 => 177,  549 => 174,  544 => 172,  538 => 170,  536 => 170,  521 => 162,  517 => 161,  511 => 160,  508 => 159,  499 => 156,  492 => 132,  487 => 152,  477 => 150,  467 => 148,  463 => 133,  460 => 132,  449 => 123,  441 => 105,  415 => 97,  410 => 96,  395 => 84,  392 => 83,  388 => 117,  386 => 95,  382 => 93,  380 => 83,  369 => 136,  324 => 92,  300 => 113,  288 => 85,  275 => 77,  272 => 76,  226 => 67,  186 => 54,  367 => 131,  352 => 121,  340 => 95,  332 => 97,  320 => 84,  313 => 82,  310 => 81,  304 => 79,  302 => 114,  296 => 111,  287 => 72,  280 => 82,  249 => 67,  223 => 58,  216 => 25,  23 => 11,  12 => 34,  145 => 53,  110 => 25,  96 => 40,  358 => 106,  351 => 135,  347 => 102,  343 => 91,  338 => 94,  327 => 86,  319 => 90,  315 => 90,  301 => 117,  289 => 81,  277 => 78,  271 => 66,  265 => 64,  251 => 101,  248 => 100,  239 => 97,  228 => 59,  213 => 82,  211 => 81,  148 => 44,  233 => 62,  202 => 77,  198 => 66,  180 => 104,  175 => 43,  172 => 52,  165 => 64,  137 => 27,  34 => 53,  52 => 113,  212 => 74,  124 => 23,  83 => 32,  215 => 54,  184 => 47,  113 => 46,  74 => 29,  210 => 73,  126 => 55,  20 => 11,  470 => 135,  426 => 102,  419 => 98,  405 => 325,  401 => 324,  394 => 118,  377 => 115,  370 => 100,  357 => 125,  346 => 92,  333 => 117,  329 => 95,  286 => 80,  270 => 4,  70 => 23,  65 => 5,  152 => 38,  118 => 28,  76 => 13,  293 => 75,  262 => 63,  205 => 59,  174 => 53,  157 => 41,  127 => 34,  829 => 529,  823 => 433,  818 => 182,  812 => 106,  806 => 71,  800 => 18,  796 => 17,  791 => 15,  787 => 14,  783 => 13,  779 => 12,  775 => 11,  771 => 10,  767 => 9,  761 => 6,  757 => 4,  754 => 3,  740 => 530,  738 => 529,  723 => 517,  716 => 513,  686 => 205,  664 => 467,  655 => 194,  646 => 455,  639 => 451,  631 => 446,  623 => 441,  614 => 434,  610 => 433,  607 => 432,  604 => 431,  594 => 424,  584 => 417,  578 => 414,  570 => 409,  556 => 398,  548 => 393,  530 => 168,  520 => 371,  503 => 357,  489 => 346,  479 => 339,  472 => 335,  464 => 330,  456 => 143,  446 => 139,  397 => 281,  391 => 278,  376 => 269,  353 => 294,  342 => 101,  331 => 239,  323 => 125,  307 => 87,  292 => 87,  276 => 199,  255 => 183,  253 => 1,  242 => 170,  207 => 151,  200 => 55,  155 => 103,  114 => 50,  58 => 25,  299 => 116,  291 => 82,  284 => 100,  281 => 110,  274 => 77,  267 => 193,  260 => 62,  257 => 61,  250 => 67,  236 => 63,  234 => 169,  225 => 87,  197 => 54,  192 => 55,  188 => 21,  185 => 20,  181 => 47,  167 => 48,  160 => 48,  153 => 35,  146 => 34,  129 => 24,  97 => 41,  84 => 16,  37 => 54,  150 => 58,  139 => 31,  104 => 23,  90 => 18,  81 => 15,  77 => 8,  591 => 407,  586 => 406,  581 => 405,  576 => 404,  571 => 403,  566 => 402,  522 => 408,  519 => 407,  516 => 161,  513 => 405,  510 => 158,  507 => 157,  504 => 158,  488 => 388,  478 => 381,  438 => 313,  434 => 343,  389 => 313,  385 => 312,  378 => 308,  361 => 107,  354 => 293,  330 => 87,  290 => 244,  282 => 79,  222 => 76,  206 => 71,  190 => 50,  161 => 38,  134 => 56,  120 => 46,  100 => 43,  53 => 80,  480 => 128,  474 => 149,  469 => 158,  461 => 155,  457 => 131,  453 => 142,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 137,  427 => 339,  423 => 128,  413 => 328,  409 => 124,  407 => 95,  402 => 323,  398 => 119,  393 => 126,  387 => 122,  384 => 116,  381 => 310,  379 => 119,  374 => 114,  368 => 264,  365 => 141,  362 => 110,  360 => 259,  355 => 105,  341 => 131,  337 => 282,  322 => 275,  314 => 99,  312 => 89,  309 => 120,  305 => 119,  298 => 91,  294 => 245,  285 => 84,  283 => 70,  278 => 238,  268 => 73,  264 => 72,  258 => 81,  252 => 68,  247 => 66,  241 => 31,  229 => 73,  220 => 56,  214 => 61,  177 => 54,  169 => 51,  140 => 28,  132 => 57,  128 => 47,  111 => 43,  107 => 24,  61 => 26,  273 => 96,  269 => 75,  254 => 68,  246 => 69,  243 => 65,  240 => 176,  238 => 64,  235 => 74,  230 => 82,  227 => 60,  224 => 162,  221 => 79,  219 => 84,  217 => 75,  208 => 57,  204 => 78,  179 => 72,  159 => 49,  143 => 29,  135 => 48,  131 => 25,  119 => 44,  108 => 45,  102 => 17,  71 => 31,  67 => 185,  63 => 4,  59 => 165,  47 => 75,  38 => 18,  94 => 40,  89 => 34,  85 => 36,  79 => 14,  75 => 31,  68 => 6,  56 => 81,  50 => 78,  29 => 11,  87 => 17,  72 => 199,  55 => 21,  21 => 11,  26 => 14,  98 => 21,  93 => 39,  88 => 12,  78 => 36,  46 => 19,  27 => 3,  40 => 44,  44 => 74,  35 => 20,  31 => 15,  43 => 20,  41 => 20,  28 => 14,  201 => 57,  196 => 52,  183 => 82,  171 => 116,  166 => 50,  163 => 49,  158 => 37,  156 => 36,  151 => 45,  142 => 42,  138 => 57,  136 => 39,  123 => 30,  121 => 29,  117 => 45,  115 => 27,  105 => 44,  101 => 22,  91 => 39,  69 => 198,  66 => 26,  62 => 166,  49 => 112,  24 => 2,  32 => 13,  25 => 13,  22 => 12,  19 => 11,  209 => 24,  203 => 56,  199 => 53,  193 => 51,  189 => 71,  187 => 49,  182 => 69,  176 => 45,  173 => 42,  168 => 113,  164 => 54,  162 => 59,  154 => 46,  149 => 36,  147 => 46,  144 => 33,  141 => 48,  133 => 49,  130 => 35,  125 => 46,  122 => 45,  116 => 43,  112 => 26,  109 => 45,  106 => 35,  103 => 38,  99 => 41,  95 => 20,  92 => 19,  86 => 33,  82 => 10,  80 => 9,  73 => 7,  64 => 184,  60 => 3,  57 => 155,  54 => 154,  51 => 23,  48 => 67,  45 => 66,  42 => 62,  39 => 61,  36 => 17,  33 => 16,  30 => 15,);
    }
}
