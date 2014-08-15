<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_66b9528a08be348045cb6590e3aeb61f8870b74152ad5755f1356d72275597ba extends Twig_Template
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
        echo "<script>/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                options.maxTries = options.maxTries || 0;
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 !== xhr.readyState) {
                        return null;
                    }

                    if (xhr.status == 404 && options.maxTries > 1) {
                        setTimeout(function(){
                            options.maxTries--;
                            request(url, onSuccess, onError, payload, options);
                        }, 500);

                        return null;
                    }

                    if (200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        '',
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  91 => 35,  75 => 28,  70 => 26,  66 => 25,  62 => 24,  42 => 12,  32 => 6,  30 => 5,  26 => 3,  24 => 2,  19 => 1,  826 => 533,  820 => 437,  815 => 186,  809 => 110,  803 => 73,  797 => 18,  793 => 17,  789 => 16,  785 => 15,  781 => 14,  777 => 13,  773 => 12,  767 => 9,  763 => 7,  760 => 6,  746 => 534,  744 => 533,  729 => 521,  722 => 517,  692 => 490,  670 => 471,  661 => 465,  652 => 459,  645 => 455,  637 => 450,  629 => 445,  620 => 438,  616 => 437,  613 => 436,  610 => 435,  600 => 428,  590 => 421,  584 => 418,  576 => 413,  562 => 402,  554 => 397,  536 => 382,  526 => 375,  509 => 361,  495 => 350,  485 => 343,  478 => 339,  470 => 334,  462 => 329,  452 => 322,  444 => 317,  429 => 305,  413 => 292,  403 => 285,  397 => 282,  390 => 278,  382 => 273,  374 => 268,  366 => 263,  359 => 259,  348 => 251,  337 => 243,  329 => 238,  313 => 225,  298 => 213,  289 => 207,  282 => 203,  273 => 197,  261 => 187,  259 => 186,  248 => 178,  240 => 173,  220 => 159,  213 => 155,  206 => 151,  198 => 146,  161 => 111,  159 => 110,  138 => 98,  134 => 97,  125 => 91,  120 => 89,  103 => 74,  101 => 73,  88 => 62,  83 => 30,  68 => 47,  60 => 42,  52 => 37,  33 => 20,  25 => 2,  295 => 94,  287 => 92,  280 => 91,  277 => 90,  272 => 86,  265 => 84,  258 => 80,  251 => 79,  245 => 76,  239 => 74,  234 => 72,  230 => 166,  225 => 69,  217 => 65,  211 => 63,  208 => 62,  201 => 61,  195 => 59,  189 => 57,  187 => 56,  183 => 55,  178 => 53,  174 => 51,  172 => 50,  166 => 49,  160 => 47,  155 => 45,  148 => 102,  142 => 99,  135 => 39,  130 => 37,  124 => 35,  119 => 33,  115 => 32,  111 => 31,  105 => 29,  99 => 27,  96 => 26,  89 => 25,  84 => 24,  79 => 29,  77 => 22,  73 => 21,  67 => 19,  61 => 18,  55 => 16,  50 => 15,  48 => 10,  46 => 14,  44 => 8,  41 => 7,  39 => 6,  37 => 5,  31 => 6,);
    }
}
