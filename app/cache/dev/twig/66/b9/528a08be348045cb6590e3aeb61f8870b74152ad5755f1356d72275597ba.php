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
        return array (  91 => 35,  83 => 30,  75 => 28,  70 => 26,  66 => 25,  62 => 24,  50 => 15,  46 => 14,  42 => 12,  32 => 6,  26 => 3,  24 => 2,  19 => 1,  748 => 490,  743 => 20,  736 => 15,  731 => 13,  727 => 12,  723 => 11,  719 => 10,  714 => 7,  711 => 6,  700 => 492,  698 => 490,  683 => 478,  676 => 474,  646 => 447,  624 => 428,  615 => 422,  606 => 416,  599 => 412,  591 => 407,  583 => 402,  566 => 388,  556 => 381,  550 => 378,  542 => 373,  528 => 362,  520 => 357,  502 => 342,  492 => 335,  475 => 321,  461 => 310,  451 => 303,  444 => 299,  436 => 294,  428 => 289,  418 => 282,  410 => 277,  395 => 265,  379 => 252,  369 => 245,  363 => 242,  356 => 238,  348 => 233,  340 => 228,  332 => 223,  325 => 219,  314 => 211,  303 => 203,  295 => 198,  279 => 185,  264 => 173,  255 => 167,  248 => 163,  239 => 157,  221 => 142,  213 => 137,  203 => 130,  193 => 123,  186 => 119,  179 => 115,  171 => 110,  144 => 86,  138 => 83,  134 => 82,  130 => 81,  121 => 75,  116 => 73,  94 => 62,  85 => 56,  79 => 29,  64 => 41,  56 => 36,  48 => 31,  36 => 21,  34 => 20,  30 => 5,  28 => 6,  22 => 2,);
    }
}
