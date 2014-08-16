<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig */
class __TwigTemplate_b6bff3c65477ec50c98275e65acf619687b16397a651d9a4443a1b879ea1f14b extends Twig_Template
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
        echo "

";
        // line 18
        echo "
";
        // line 20
        echo "
";
        // line 21
        $context["associationadmin"] = $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "associationadmin");
        // line 22
        echo "
<!-- edit many association -->

<script type=\"text/javascript\">

    ";
        // line 32
        echo "    var field_dialog_form_list_link_";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo " = function(event) {
        initialize_popup_";
        // line 33
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "();

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 38
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_list_link] handle link click in a list');

        var element = jQuery(this).parents('#field_dialog_";
        // line 40
        echo (isset($context["id"]) ? $context["id"] : null);
        echo " .sonata-ba-list-field');

        // the user does click on a row column
        if (element.length == 0) {
            // make a recursive call (ie: reset the filter)
            jQuery.ajax({
                type: 'GET',
                url: jQuery(this).attr('href'),
                dataType: 'html',
                success: function(html) {
                    Admin.log('[";
        // line 50
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_list_link] callback success, attach valid js event');

                    field_dialog_";
        // line 52
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".html(html);
                    field_dialog_form_list_handle_action_";
        // line 53
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "();
                }
            });

            return;
        }

        jQuery('#";
        // line 60
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "').val(element.attr('objectId'));
        jQuery('#";
        // line 61
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "').trigger('change');

        field_dialog_";
        // line 63
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".dialog('close');
    }

    // this function handle action on the modal list when inside a selected list
    var field_dialog_form_list_handle_action_";
        // line 67
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "  =  function() {

        Admin.log('[";
        // line 69
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_list_handle_action] attaching valid js event');

        Admin.add_filters(field_dialog_";
        // line 71
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");

        // capture the submit event to make an ajax call, ie : POST data to the
        // related create admin
        jQuery('a', field_dialog_";
        // line 75
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ").on('click', field_dialog_form_list_link_";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");
        jQuery('form', field_dialog_";
        // line 76
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ").on('submit', function(event) {
            event.preventDefault();

            var form = jQuery(this);

            Admin.log('[";
        // line 81
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_list_handle_action] catching submit event, sending ajax request');

            jQuery(form).ajaxSubmit({
                type: form.attr('method'),
                url: form.attr('action'),
                dataType: 'html',
                data: {_xml_http_request: true},
                success: function(html) {

                    Admin.log('[";
        // line 90
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_list_handle_action] form submit success, restoring event');

                    field_dialog_";
        // line 92
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".html(html);
                    field_dialog_form_list_handle_action_";
        // line 93
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "();
                }
            });
        });
    }

    // handle the add link
    var field_dialog_form_list_";
        // line 100
        echo (isset($context["id"]) ? $context["id"] : null);
        echo " = function(event) {

        initialize_popup_";
        // line 102
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "();

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 107
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_list] open the list modal');

        var a = jQuery(this);

        field_dialog_";
        // line 111
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".html('');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            dataType: 'html',
            success: function(html) {

                Admin.log('[";
        // line 119
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_list] retrieving the list content');

                // populate the popup container
                field_dialog_";
        // line 122
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".html(html);

                Admin.add_filters(field_dialog_";
        // line 124
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");

                field_dialog_form_list_handle_action_";
        // line 126
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "();

                // open the dialog in modal mode
                field_dialog_";
        // line 129
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".dialog({
                    height: 'auto',
                    width: 980,
                    modal: true,
                    resizable: true,
                    title: '";
        // line 134
        echo $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["associationadmin"]) ? $context["associationadmin"] : null), "label"), array(), $this->getAttribute((isset($context["associationadmin"]) ? $context["associationadmin"] : null), "translationdomain"));
        echo "',
                    close: function(event, ui) {
                        Admin.log('[";
        // line 136
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_list] close callback, removing js event');

                        // make sure we have a clean state
                        jQuery('a', field_dialog_";
        // line 139
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ").off('click');
                        jQuery('form', field_dialog_";
        // line 140
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ").off('submit');
                    }
                });
            }
        });
    };

    // handle the add link
    var field_dialog_form_add_";
        // line 148
        echo (isset($context["id"]) ? $context["id"] : null);
        echo " = function(event) {
        initialize_popup_";
        // line 149
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "();

        event.preventDefault();
        event.stopPropagation();

        var a = jQuery(this);

        field_dialog_";
        // line 156
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".html('');

        Admin.log('[";
        // line 158
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_add] add link action');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            dataType: 'html',
            success: function(html) {

                Admin.log('[";
        // line 166
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_add] ajax success', field_dialog_";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");

                // populate the popup container
                field_dialog_";
        // line 169
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".html(html);

                // capture the submit event to make an ajax call, ie : POST data to the
                // related create admin
                jQuery('a', field_dialog_";
        // line 173
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ").on('click', field_dialog_form_action_";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");
                jQuery('form', field_dialog_";
        // line 174
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ").on('submit', field_dialog_form_action_";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");

                // open the dialog in modal mode
                field_dialog_";
        // line 177
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".dialog({
                    height: 'auto',
                    width: 850,
                    modal: true,
                    autoOpen: true,
                    resizable: true,
                    title: '";
        // line 183
        echo $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["associationadmin"]) ? $context["associationadmin"] : null), "label"), array(), $this->getAttribute((isset($context["associationadmin"]) ? $context["associationadmin"] : null), "translationdomain"));
        echo "',
                    close: function(event, ui) {
                        Admin.log('[";
        // line 185
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_add] dialog closed - removing  events');
                        // make sure we have a clean state
                        jQuery('a', field_dialog_";
        // line 187
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ").off('click');
                        jQuery('form', field_dialog_";
        // line 188
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ").off('submit');
                    }
                });
            }
        });
    };

    // handle the post data
    var field_dialog_form_action_";
        // line 196
        echo (isset($context["id"]) ? $context["id"] : null);
        echo " = function(event) {

        var element = jQuery(this);

        // return if the link is an anchor inside the same page
        if (this.nodeName == 'A' && (element.attr('href').length == 0 || element.attr('href')[0] == '#')) {
            return;
        }

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 208
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_action] action catch', this);

        initialize_popup_";
        // line 210
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "();

        if (this.nodeName == 'FORM') {
            var url  = element.attr('action');
            var type = element.attr('method');
        } else if (this.nodeName == 'A') {
            var url  = element.attr('href');
            var type = 'GET';
        } else {
            alert('unexpected element : @' + this.nodeName + '@');
            return;
        }

        if (element.hasClass('sonata-ba-action')) {
            Admin.log('[";
        // line 224
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_action] reserved action stop catch all events');
            return;
        }

        var data = {
            _xml_http_request: true
        }

        var form = jQuery(this);

        Admin.log('[";
        // line 234
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_action] execute ajax call');

        // the ajax post
        jQuery(form).ajaxSubmit({
            url: url,
            type: type,
            data: data,
            success: function(data) {
                Admin.log('[";
        // line 242
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_action] ajax success');

                // if the crud action return ok, then the element has been added
                // so the widget container must be refresh with the last option available
                if (typeof data != 'string' && data.result == 'ok') {
                    field_dialog_";
        // line 247
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".dialog('close');

                    ";
        // line 249
        if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "edit") == "list")) {
            // line 250
            echo "                        ";
            // line 254
            echo "                        jQuery('#";
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "').val(data.objectId);
                        jQuery('#";
            // line 255
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "').change();

                    ";
        } else {
            // line 258
            echo "
                        // reload the form element
                        jQuery('#field_widget_";
            // line 260
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "').closest('form').ajaxSubmit({
                            url: '";
            // line 261
            echo $this->env->getExtension('routing')->getUrl("sonata_admin_retrieve_form_element", array("elementId" => (isset($context["id"]) ? $context["id"] : null), "subclass" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin"), "getActiveSubclassCode", array(), "method"), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin"), "root"), "id", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin"), "root"), "subject")), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin"), "root"), "uniqid"), "code" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin"), "root"), "code")));
            // line 267
            echo "',
                            data: {_xml_http_request: true },
                            dataType: 'html',
                            type: 'POST',
                            success: function(html) {
                                jQuery('#field_container_";
            // line 272
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "').replaceWith(html);
                                var newElement = jQuery('#";
            // line 273
            echo (isset($context["id"]) ? $context["id"] : null);
            echo " [value=\"' + data.objectId + '\"]');
                                if (newElement.is(\"input\")) {
                                    newElement.attr('checked', 'checked');
                                } else {
                                    newElement.attr('selected', 'selected');
                                }

                                jQuery('#field_container_";
            // line 280
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "').trigger('sonata-admin-append-form-element');
                            }
                        });

                    ";
        }
        // line 285
        echo "
                    return;
                }

                // otherwise, display form error
                field_dialog_";
        // line 290
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".html(data);

                Admin.add_pretty_errors(field_dialog_";
        // line 292
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");

                // reattach the event
                jQuery('form', field_dialog_";
        // line 295
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ").submit(field_dialog_form_action_";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");
            }
        });

        return false;
    }

    var field_dialog_";
        // line 302
        echo (isset($context["id"]) ? $context["id"] : null);
        echo " = false;

    function initialize_popup_";
        // line 304
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "() {
        // initialize component
        if (!field_dialog_";
        // line 306
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ") {
            field_dialog_";
        // line 307
        echo (isset($context["id"]) ? $context["id"] : null);
        echo " = jQuery(\"#field_dialog_";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "\");

            // move the dialog as a child of the root element, nested form breaks html ...
            jQuery(document.body).append(field_dialog_";
        // line 310
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");

            Admin.log('[";
        // line 312
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog] move dialog container as a document child');
        }
    }

    ";
        // line 319
        echo "    // this function initialize the popup
    // this can be only done this way has popup can be cascaded
    function start_field_dialog_form_add_";
        // line 321
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "(link) {

        // remove the html event
        link.onclick = null;

        initialize_popup_";
        // line 326
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "();

        // add the jQuery event to the a element
        jQuery(link)
            .click(field_dialog_form_add_";
        // line 330
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ")
            .trigger('click')
        ;

        return false;
    }

    if (field_dialog_";
        // line 337
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ") {
        Admin.add_pretty_errors(field_dialog_";
        // line 338
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");
    }

    ";
        // line 341
        if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "edit") == "list")) {
            // line 342
            echo "        ";
            // line 345
            echo "        // this function initialize the popup
        // this can be only done this way has popup can be cascaded
        function start_field_dialog_form_list_";
            // line 347
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "(link) {

            link.onclick = null;

            initialize_popup_";
            // line 351
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "();

            // add the jQuery event to the a element
            jQuery(link)
                .click(field_dialog_form_list_";
            // line 355
            echo (isset($context["id"]) ? $context["id"] : null);
            echo ")
                .trigger('click')
            ;

            return false;
        }

        function remove_selected_element_";
            // line 362
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "(link) {

            link.onclick = null;

            jQuery(link)
                .click(field_remove_element_";
            // line 367
            echo (isset($context["id"]) ? $context["id"] : null);
            echo ")
                .trigger('click')
            ;

            return false;
        }

        function field_remove_element_";
            // line 374
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "(event) {
            event.preventDefault();

            if (jQuery('#";
            // line 377
            echo (isset($context["id"]) ? $context["id"] : null);
            echo " option').get(0)) {
                jQuery('#";
            // line 378
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "').attr('selectedIndex', '-1').children(\"option:selected\").attr(\"selected\", false);
            }

            jQuery('#";
            // line 381
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "').val('');
            jQuery('#";
            // line 382
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "').trigger('change');

            return false;
        }
        ";
            // line 389
            echo "
        // update the label
        jQuery('#";
            // line 391
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "').on('change', function(event) {

            Admin.log('[";
            // line 393
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "] update the label');

            jQuery('#field_widget_";
            // line 395
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "').html(\"<span><img src=\\\"";
            echo $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/ajax-loader.gif");
            echo "\\\" style=\\\"vertical-align: middle; margin-right: 10px\\\"/>";
            echo $this->env->getExtension('translator')->trans("loading_information", array(), "SonataAdminBundle");
            echo "</span>\");
            jQuery.ajax({
                type: 'GET',
                url: '";
            // line 398
            echo $this->env->getExtension('routing')->getUrl("sonata_admin_short_object_information", array("objectId" => "OBJECT_ID", "uniqid" => $this->getAttribute((isset($context["associationadmin"]) ? $context["associationadmin"] : null), "uniqid"), "code" => $this->getAttribute((isset($context["associationadmin"]) ? $context["associationadmin"] : null), "code"), "linkParameters" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "options"), "link_parameters")));
            // line 403
            echo "'.replace('OBJECT_ID', jQuery(this).val()),
                dataType: 'html',
                success: function(html) {
                    jQuery('#field_widget_";
            // line 406
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "').html(html);
                }
            });
        });

    ";
        }
        // line 412
        echo "

</script>
<!-- / edit many association -->

";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  694 => 412,  685 => 406,  680 => 403,  678 => 398,  668 => 395,  654 => 389,  647 => 382,  643 => 381,  637 => 378,  633 => 377,  617 => 367,  609 => 362,  599 => 355,  579 => 342,  577 => 341,  567 => 337,  550 => 326,  531 => 312,  518 => 307,  514 => 306,  509 => 304,  466 => 280,  452 => 272,  445 => 267,  443 => 261,  439 => 260,  429 => 255,  424 => 254,  422 => 250,  383 => 224,  366 => 210,  232 => 136,  836 => 271,  833 => 270,  828 => 265,  821 => 261,  815 => 258,  811 => 256,  809 => 255,  798 => 251,  795 => 250,  789 => 248,  784 => 246,  778 => 244,  776 => 243,  773 => 242,  765 => 239,  762 => 238,  759 => 237,  755 => 192,  749 => 191,  735 => 187,  730 => 186,  727 => 185,  722 => 184,  719 => 183,  715 => 277,  708 => 267,  706 => 237,  699 => 235,  693 => 232,  690 => 231,  688 => 230,  683 => 227,  677 => 224,  674 => 223,  672 => 222,  658 => 391,  638 => 213,  632 => 211,  627 => 374,  621 => 206,  611 => 203,  587 => 200,  582 => 198,  569 => 183,  526 => 310,  523 => 156,  506 => 151,  495 => 148,  491 => 147,  481 => 290,  475 => 141,  468 => 140,  459 => 137,  450 => 135,  447 => 134,  420 => 249,  417 => 126,  408 => 124,  396 => 234,  390 => 125,  363 => 114,  345 => 97,  328 => 74,  325 => 73,  317 => 70,  303 => 65,  261 => 50,  231 => 33,  194 => 177,  713 => 270,  707 => 211,  704 => 210,  702 => 236,  696 => 206,  681 => 203,  669 => 221,  666 => 200,  663 => 393,  652 => 214,  635 => 191,  618 => 190,  613 => 204,  608 => 202,  605 => 201,  602 => 185,  596 => 181,  592 => 351,  590 => 178,  585 => 347,  568 => 175,  551 => 174,  547 => 173,  542 => 321,  539 => 162,  533 => 169,  528 => 167,  525 => 166,  512 => 152,  505 => 156,  502 => 155,  498 => 149,  486 => 292,  483 => 144,  473 => 150,  465 => 139,  462 => 138,  451 => 141,  428 => 129,  425 => 128,  414 => 125,  403 => 121,  400 => 161,  371 => 113,  349 => 103,  339 => 100,  336 => 99,  326 => 185,  311 => 89,  297 => 84,  263 => 71,  191 => 50,  344 => 97,  335 => 188,  321 => 183,  295 => 88,  259 => 70,  178 => 119,  572 => 193,  561 => 174,  557 => 330,  549 => 174,  544 => 172,  538 => 319,  536 => 161,  521 => 162,  517 => 155,  511 => 160,  508 => 159,  499 => 156,  492 => 295,  487 => 152,  477 => 150,  467 => 148,  463 => 133,  460 => 132,  449 => 123,  441 => 105,  415 => 247,  410 => 96,  395 => 84,  392 => 83,  388 => 124,  386 => 95,  382 => 93,  380 => 83,  369 => 115,  324 => 92,  300 => 113,  288 => 85,  275 => 57,  272 => 158,  226 => 67,  186 => 111,  367 => 131,  352 => 121,  340 => 95,  332 => 75,  320 => 84,  313 => 82,  310 => 81,  304 => 174,  302 => 114,  296 => 111,  287 => 72,  280 => 82,  249 => 67,  223 => 58,  216 => 28,  23 => 18,  12 => 34,  145 => 53,  110 => 25,  96 => 40,  358 => 113,  351 => 135,  347 => 102,  343 => 91,  338 => 76,  327 => 86,  319 => 71,  315 => 90,  301 => 117,  289 => 59,  277 => 78,  271 => 55,  265 => 64,  251 => 101,  248 => 100,  239 => 97,  228 => 59,  213 => 126,  211 => 81,  148 => 97,  233 => 62,  202 => 77,  198 => 66,  180 => 120,  175 => 118,  172 => 52,  165 => 64,  137 => 27,  34 => 53,  52 => 17,  212 => 74,  124 => 23,  83 => 82,  215 => 54,  184 => 47,  113 => 46,  74 => 52,  210 => 22,  126 => 55,  20 => 11,  470 => 135,  426 => 102,  419 => 98,  405 => 325,  401 => 324,  394 => 118,  377 => 115,  370 => 100,  357 => 125,  346 => 196,  333 => 117,  329 => 95,  286 => 80,  270 => 4,  70 => 23,  65 => 5,  152 => 92,  118 => 28,  76 => 13,  293 => 61,  262 => 63,  205 => 59,  174 => 53,  157 => 41,  127 => 76,  829 => 529,  823 => 433,  818 => 182,  812 => 106,  806 => 254,  800 => 252,  796 => 17,  791 => 15,  787 => 247,  783 => 13,  779 => 12,  775 => 11,  771 => 10,  767 => 240,  761 => 6,  757 => 4,  754 => 3,  740 => 188,  738 => 529,  723 => 517,  716 => 513,  686 => 205,  664 => 218,  655 => 215,  646 => 455,  639 => 451,  631 => 446,  623 => 441,  614 => 434,  610 => 433,  607 => 432,  604 => 431,  594 => 424,  584 => 199,  578 => 196,  570 => 409,  556 => 398,  548 => 165,  530 => 158,  520 => 371,  503 => 357,  489 => 346,  479 => 339,  472 => 335,  464 => 330,  456 => 273,  446 => 139,  397 => 281,  391 => 278,  376 => 119,  353 => 294,  342 => 101,  331 => 187,  323 => 125,  307 => 66,  292 => 87,  276 => 199,  255 => 183,  253 => 148,  242 => 140,  207 => 151,  200 => 55,  155 => 103,  114 => 71,  58 => 22,  299 => 64,  291 => 169,  284 => 100,  281 => 110,  274 => 77,  267 => 156,  260 => 62,  257 => 149,  250 => 67,  236 => 35,  234 => 169,  225 => 87,  197 => 119,  192 => 55,  188 => 174,  185 => 173,  181 => 47,  167 => 48,  160 => 48,  153 => 35,  146 => 34,  129 => 24,  97 => 63,  84 => 16,  37 => 12,  150 => 58,  139 => 31,  104 => 67,  90 => 27,  81 => 26,  77 => 27,  591 => 407,  586 => 406,  581 => 345,  576 => 195,  571 => 338,  566 => 182,  522 => 408,  519 => 407,  516 => 161,  513 => 405,  510 => 158,  507 => 157,  504 => 302,  488 => 388,  478 => 142,  438 => 313,  434 => 130,  389 => 313,  385 => 312,  378 => 308,  361 => 208,  354 => 293,  330 => 87,  290 => 244,  282 => 79,  222 => 30,  206 => 71,  190 => 175,  161 => 38,  134 => 56,  120 => 46,  100 => 43,  53 => 20,  480 => 128,  474 => 285,  469 => 158,  461 => 155,  457 => 131,  453 => 136,  444 => 132,  440 => 148,  437 => 131,  435 => 258,  430 => 137,  427 => 339,  423 => 128,  413 => 328,  409 => 124,  407 => 242,  402 => 170,  398 => 119,  393 => 158,  387 => 122,  384 => 122,  381 => 121,  379 => 119,  374 => 114,  368 => 264,  365 => 141,  362 => 110,  360 => 259,  355 => 112,  341 => 131,  337 => 282,  322 => 275,  314 => 99,  312 => 177,  309 => 120,  305 => 119,  298 => 173,  294 => 245,  285 => 84,  283 => 166,  278 => 238,  268 => 54,  264 => 72,  258 => 81,  252 => 68,  247 => 66,  241 => 31,  229 => 73,  220 => 56,  214 => 61,  177 => 54,  169 => 51,  140 => 28,  132 => 57,  128 => 47,  111 => 40,  107 => 24,  61 => 26,  273 => 96,  269 => 75,  254 => 68,  246 => 69,  243 => 65,  240 => 176,  238 => 139,  235 => 74,  230 => 82,  227 => 134,  224 => 162,  221 => 79,  219 => 129,  217 => 75,  208 => 124,  204 => 78,  179 => 107,  159 => 49,  143 => 29,  135 => 81,  131 => 25,  119 => 44,  108 => 45,  102 => 17,  71 => 29,  67 => 28,  63 => 22,  59 => 23,  47 => 17,  38 => 32,  94 => 86,  89 => 34,  85 => 30,  79 => 31,  75 => 31,  68 => 6,  56 => 40,  50 => 78,  29 => 21,  87 => 17,  72 => 54,  55 => 22,  21 => 11,  26 => 20,  98 => 36,  93 => 39,  88 => 60,  78 => 53,  46 => 19,  27 => 16,  40 => 44,  44 => 21,  35 => 11,  31 => 22,  43 => 33,  41 => 14,  28 => 13,  201 => 182,  196 => 52,  183 => 121,  171 => 102,  166 => 100,  163 => 49,  158 => 37,  156 => 93,  151 => 45,  142 => 42,  138 => 93,  136 => 39,  123 => 30,  121 => 75,  117 => 89,  115 => 27,  105 => 44,  101 => 37,  91 => 85,  69 => 50,  66 => 23,  62 => 24,  49 => 18,  24 => 3,  32 => 21,  25 => 12,  22 => 11,  19 => 11,  209 => 24,  203 => 122,  199 => 53,  193 => 51,  189 => 71,  187 => 49,  182 => 69,  176 => 45,  173 => 112,  168 => 113,  164 => 109,  162 => 59,  154 => 46,  149 => 36,  147 => 90,  144 => 95,  141 => 94,  133 => 49,  130 => 35,  125 => 46,  122 => 45,  116 => 43,  112 => 26,  109 => 69,  106 => 35,  103 => 38,  99 => 30,  95 => 20,  92 => 61,  86 => 33,  82 => 10,  80 => 9,  73 => 24,  64 => 184,  60 => 26,  57 => 155,  54 => 154,  51 => 38,  48 => 67,  45 => 19,  42 => 18,  39 => 13,  36 => 17,  33 => 16,  30 => 17,);
    }
}
