<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_association_script.html.twig */
class __TwigTemplate_45c8f6db61343c3289597821bd88960a622a699ef309fbf7fdb5664f92538d29 extends Twig_Template
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
<!-- edit one association -->

<script type=\"text/javascript\">

    // handle the add link
    var field_add_";
        // line 26
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo " = function(event) {

        event.preventDefault();
        event.stopPropagation();

        var form = jQuery(this).closest('form');

        // the ajax post
        jQuery(form).ajaxSubmit({
            url: '";
        // line 35
        echo $this->env->getExtension('routing')->getUrl("sonata_admin_append_form_element", (array("code" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"), "root"), "code"), "elementId" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"), "root"), "id", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"), "root"), "subject")), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"), "root"), "uniqid")) + $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "getOption", array(0 => "link_parameters", 1 => array()), "method")));
        // line 40
        echo "',
            type: \"POST\",
            dataType: 'html',
            data: { _xml_http_request: true },
            success: function(html) {
                if (!html.length) {
                    return;
                }

                jQuery('#field_container_";
        // line 49
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "').replaceWith(html); // replace the html
                Admin.setup_select2(jQuery('#field_container_";
        // line 50
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "'));

                if(jQuery('input[type=\"file\"]', form).length > 0) {
                    jQuery(form).attr('enctype', 'multipart/form-data');
                    jQuery(form).attr('encoding', 'multipart/form-data');
                }
                jQuery('#sonata-ba-field-container-";
        // line 56
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "').trigger('sonata.add_element');
                jQuery('#field_container_";
        // line 57
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "').trigger('sonata.add_element');
            }
        });

        return false;
    };

    var field_widget_";
        // line 64
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo " = false;

    // this function initialize the popup
    // this can be only done this way has popup can be cascaded
    function start_field_retrieve_";
        // line 68
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "(link) {

        link.onclick = null;

        // initialize component
        field_widget_";
        // line 73
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo " = jQuery(\"#field_widget_";
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "\");

        // add the jQuery event to the a element
        jQuery(link)
            .click(field_add_";
        // line 77
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ")
            .trigger('click')
        ;

        return false;
    }
</script>

<!-- / edit one association -->

";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_association_script.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 122,  316 => 121,  284 => 106,  279 => 104,  237 => 86,  694 => 412,  685 => 406,  680 => 403,  678 => 398,  668 => 395,  654 => 389,  647 => 382,  643 => 381,  633 => 377,  617 => 367,  609 => 362,  599 => 355,  579 => 342,  577 => 341,  567 => 337,  550 => 326,  531 => 312,  518 => 307,  514 => 306,  466 => 280,  445 => 267,  443 => 261,  439 => 260,  424 => 254,  422 => 250,  383 => 224,  331 => 187,  267 => 156,  242 => 140,  232 => 84,  836 => 271,  833 => 270,  828 => 265,  821 => 261,  811 => 256,  806 => 254,  800 => 252,  798 => 251,  795 => 250,  787 => 247,  784 => 246,  778 => 244,  776 => 243,  765 => 239,  762 => 238,  759 => 237,  755 => 192,  749 => 191,  740 => 188,  735 => 187,  730 => 186,  727 => 185,  719 => 183,  715 => 277,  708 => 267,  706 => 237,  699 => 235,  693 => 232,  690 => 231,  688 => 230,  683 => 227,  677 => 224,  674 => 223,  672 => 222,  664 => 218,  658 => 391,  638 => 213,  632 => 211,  627 => 374,  621 => 206,  611 => 203,  587 => 200,  582 => 198,  578 => 196,  569 => 183,  548 => 165,  523 => 156,  506 => 151,  491 => 147,  481 => 290,  475 => 141,  468 => 140,  459 => 137,  450 => 135,  447 => 134,  420 => 249,  417 => 126,  408 => 124,  396 => 234,  376 => 119,  363 => 114,  345 => 97,  328 => 74,  325 => 73,  317 => 70,  303 => 65,  231 => 33,  194 => 88,  713 => 270,  707 => 211,  704 => 210,  702 => 236,  696 => 206,  686 => 205,  681 => 203,  669 => 221,  666 => 200,  663 => 393,  655 => 215,  635 => 191,  618 => 190,  608 => 202,  605 => 201,  602 => 185,  596 => 181,  592 => 351,  585 => 347,  568 => 175,  551 => 174,  547 => 173,  542 => 321,  539 => 162,  533 => 169,  528 => 167,  525 => 166,  512 => 152,  505 => 156,  502 => 155,  498 => 149,  486 => 292,  483 => 144,  473 => 150,  465 => 139,  456 => 273,  451 => 141,  428 => 129,  425 => 128,  414 => 125,  400 => 161,  371 => 113,  349 => 103,  342 => 101,  339 => 100,  336 => 99,  326 => 185,  311 => 89,  297 => 84,  263 => 71,  250 => 93,  191 => 69,  146 => 34,  344 => 97,  335 => 188,  321 => 123,  295 => 88,  292 => 87,  184 => 47,  181 => 80,  178 => 119,  572 => 193,  561 => 174,  557 => 330,  549 => 174,  544 => 172,  538 => 319,  530 => 158,  521 => 162,  517 => 155,  511 => 160,  508 => 159,  499 => 156,  492 => 295,  487 => 152,  477 => 150,  467 => 148,  463 => 133,  460 => 132,  449 => 123,  446 => 139,  441 => 105,  415 => 247,  410 => 96,  395 => 84,  392 => 83,  388 => 124,  386 => 95,  380 => 83,  369 => 115,  324 => 92,  307 => 66,  300 => 113,  291 => 169,  288 => 107,  275 => 103,  272 => 158,  367 => 131,  352 => 121,  340 => 95,  332 => 75,  320 => 84,  310 => 81,  304 => 174,  302 => 114,  296 => 111,  280 => 82,  249 => 67,  223 => 58,  216 => 28,  188 => 174,  23 => 18,  12 => 34,  358 => 113,  351 => 135,  347 => 102,  343 => 91,  338 => 76,  327 => 86,  323 => 125,  319 => 71,  315 => 90,  301 => 117,  299 => 112,  293 => 109,  281 => 105,  277 => 78,  271 => 55,  265 => 99,  260 => 98,  257 => 149,  251 => 101,  239 => 97,  228 => 83,  225 => 87,  211 => 81,  197 => 70,  174 => 64,  253 => 95,  202 => 77,  185 => 68,  180 => 120,  175 => 77,  172 => 52,  165 => 59,  160 => 58,  137 => 59,  97 => 63,  34 => 26,  212 => 74,  155 => 103,  129 => 24,  118 => 28,  114 => 71,  65 => 30,  152 => 92,  113 => 41,  84 => 39,  70 => 23,  58 => 22,  210 => 75,  126 => 55,  20 => 11,  426 => 102,  419 => 98,  405 => 325,  401 => 324,  394 => 118,  377 => 115,  370 => 100,  357 => 125,  353 => 294,  346 => 196,  333 => 117,  286 => 80,  274 => 77,  167 => 48,  124 => 23,  76 => 57,  287 => 72,  256 => 96,  236 => 35,  215 => 78,  127 => 56,  826 => 533,  820 => 437,  815 => 258,  809 => 255,  803 => 73,  797 => 18,  793 => 17,  789 => 248,  785 => 15,  781 => 14,  777 => 13,  773 => 242,  767 => 240,  763 => 7,  760 => 6,  746 => 534,  744 => 533,  729 => 521,  722 => 184,  692 => 490,  670 => 471,  661 => 465,  652 => 214,  645 => 455,  637 => 378,  629 => 445,  620 => 438,  616 => 437,  613 => 204,  610 => 435,  600 => 428,  590 => 178,  584 => 199,  562 => 402,  554 => 397,  536 => 161,  526 => 310,  509 => 304,  495 => 148,  485 => 343,  470 => 135,  462 => 138,  452 => 272,  429 => 255,  403 => 121,  397 => 282,  390 => 125,  382 => 93,  366 => 210,  359 => 259,  348 => 251,  329 => 95,  313 => 82,  289 => 59,  261 => 50,  259 => 70,  248 => 100,  213 => 126,  198 => 66,  148 => 64,  270 => 4,  262 => 63,  255 => 91,  233 => 62,  226 => 67,  205 => 59,  200 => 55,  192 => 55,  186 => 83,  170 => 59,  153 => 56,  110 => 77,  150 => 55,  104 => 67,  90 => 27,  81 => 26,  77 => 27,  591 => 407,  586 => 406,  581 => 345,  576 => 195,  571 => 338,  566 => 182,  522 => 408,  519 => 407,  516 => 161,  513 => 405,  510 => 158,  507 => 157,  504 => 302,  488 => 388,  478 => 142,  438 => 344,  434 => 130,  389 => 313,  385 => 312,  378 => 308,  361 => 208,  354 => 293,  330 => 87,  290 => 244,  282 => 79,  222 => 81,  206 => 71,  190 => 175,  161 => 71,  134 => 56,  100 => 36,  53 => 20,  480 => 128,  474 => 285,  469 => 158,  461 => 155,  457 => 131,  453 => 136,  444 => 132,  440 => 148,  437 => 131,  435 => 258,  430 => 137,  427 => 339,  423 => 128,  413 => 292,  409 => 124,  407 => 242,  402 => 170,  398 => 119,  393 => 158,  387 => 122,  384 => 122,  381 => 121,  379 => 119,  374 => 114,  368 => 112,  365 => 141,  362 => 110,  360 => 109,  355 => 112,  341 => 131,  337 => 243,  322 => 275,  314 => 99,  312 => 177,  309 => 117,  305 => 115,  298 => 173,  294 => 245,  285 => 84,  283 => 166,  278 => 238,  268 => 54,  264 => 72,  258 => 81,  252 => 68,  247 => 66,  241 => 31,  229 => 73,  220 => 80,  214 => 61,  177 => 54,  169 => 74,  140 => 28,  132 => 58,  128 => 47,  107 => 24,  61 => 25,  273 => 197,  269 => 100,  254 => 68,  243 => 89,  240 => 176,  238 => 139,  235 => 74,  230 => 166,  227 => 134,  224 => 71,  221 => 79,  219 => 129,  217 => 79,  208 => 124,  204 => 73,  179 => 66,  159 => 70,  143 => 29,  135 => 81,  119 => 43,  102 => 37,  71 => 29,  67 => 28,  63 => 50,  59 => 49,  38 => 17,  94 => 86,  89 => 40,  85 => 34,  75 => 31,  68 => 31,  56 => 24,  87 => 17,  21 => 12,  26 => 20,  93 => 68,  88 => 60,  78 => 36,  46 => 35,  27 => 16,  44 => 21,  31 => 22,  28 => 13,  201 => 72,  196 => 52,  183 => 121,  171 => 63,  166 => 100,  163 => 49,  158 => 37,  156 => 57,  151 => 45,  142 => 61,  138 => 50,  136 => 39,  121 => 53,  117 => 89,  105 => 47,  91 => 85,  62 => 29,  49 => 18,  24 => 13,  25 => 12,  19 => 11,  79 => 31,  72 => 56,  69 => 50,  47 => 21,  40 => 44,  37 => 12,  22 => 12,  246 => 69,  157 => 41,  145 => 52,  139 => 31,  131 => 48,  123 => 30,  120 => 46,  115 => 50,  111 => 40,  108 => 39,  101 => 73,  98 => 44,  96 => 40,  83 => 82,  74 => 34,  66 => 23,  55 => 22,  52 => 21,  50 => 20,  43 => 20,  41 => 14,  35 => 16,  32 => 15,  29 => 21,  209 => 24,  203 => 122,  199 => 53,  193 => 51,  189 => 71,  187 => 49,  182 => 69,  176 => 65,  173 => 112,  168 => 60,  164 => 72,  162 => 56,  154 => 67,  149 => 36,  147 => 90,  144 => 95,  141 => 94,  133 => 49,  130 => 57,  125 => 45,  122 => 44,  116 => 43,  112 => 26,  109 => 69,  106 => 35,  103 => 46,  99 => 30,  95 => 43,  92 => 61,  86 => 64,  82 => 33,  80 => 9,  73 => 29,  64 => 184,  60 => 26,  57 => 22,  54 => 154,  51 => 38,  48 => 40,  45 => 19,  42 => 18,  39 => 13,  36 => 17,  33 => 16,  30 => 15,);
    }
}
