<?php

/* @WebProfiler/Profiler/layout.html.twig */
class __TwigTemplate_f2a9156b994ab1aafc69f6acdf8e8cd3fb3e587ff4dde38616934f4e930abdc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_103f3d7065aea7d30cb56c88c4092008674877fe04e00fbaac0af3db7417e690 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_103f3d7065aea7d30cb56c88c4092008674877fe04e00fbaac0af3db7417e690->enter($__internal_103f3d7065aea7d30cb56c88c4092008674877fe04e00fbaac0af3db7417e690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/layout.html.twig"));

        $__internal_629b705d2719752839c43054eff3f86d86de8694cea5b41aca0055cad3fc56fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_629b705d2719752839c43054eff3f86d86de8694cea5b41aca0055cad3fc56fb->enter($__internal_629b705d2719752839c43054eff3f86d86de8694cea5b41aca0055cad3fc56fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_103f3d7065aea7d30cb56c88c4092008674877fe04e00fbaac0af3db7417e690->leave($__internal_103f3d7065aea7d30cb56c88c4092008674877fe04e00fbaac0af3db7417e690_prof);

        
        $__internal_629b705d2719752839c43054eff3f86d86de8694cea5b41aca0055cad3fc56fb->leave($__internal_629b705d2719752839c43054eff3f86d86de8694cea5b41aca0055cad3fc56fb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c6713b409fc98474105adb098ebf214395c5020fb66e21218fd6a849bf4f169f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6713b409fc98474105adb098ebf214395c5020fb66e21218fd6a849bf4f169f->enter($__internal_c6713b409fc98474105adb098ebf214395c5020fb66e21218fd6a849bf4f169f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_051074b12339123a5d4bc9c34d609d67a9bcdf7ef78d9ad65cad98b9766563c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_051074b12339123a5d4bc9c34d609d67a9bcdf7ef78d9ad65cad98b9766563c5->enter($__internal_051074b12339123a5d4bc9c34d609d67a9bcdf7ef78d9ad65cad98b9766563c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/header.html.twig", array(), false);
        echo "

    <div id=\"summary\">
        ";
        // line 7
        $this->displayBlock('summary', $context, $blocks);
        // line 83
        echo "    </div>

    <div id=\"content\" class=\"container\">
        <div id=\"main\">
            <div id=\"collector-wrapper\">
                <div id=\"collector-content\">
                    ";
        // line 89
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/base_js.html.twig");
        echo "
                    ";
        // line 90
        $this->displayBlock('panel', $context, $blocks);
        // line 91
        echo "                </div>
            </div>

            <div id=\"sidebar\">
                <div id=\"sidebar-shortcuts\">
                    <div class=\"shortcuts\">
                        <a href=\"#\" id=\"sidebarShortcutsMenu\" class=\"visible-small\">
                            <span class=\"icon\">";
        // line 98
        echo twig_include($this->env, $context, "@WebProfiler/Icon/menu.svg");
        echo "</span>
                        </a>

                        <a class=\"btn btn-sm\" href=\"";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_search", array("limit" => 10));
        echo "\">Last 10</a>
                        <a class=\"btn btn-sm\" href=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", twig_array_merge(array("token" => "latest"), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new Twig_Error_Runtime('Variable "request" does not exist.', 102, $this->getSourceContext()); })()), "query", array()), "all", array()))), "html", null, true);
        echo "\">Latest</a>

                        <a class=\"sf-toggle btn btn-sm\" data-toggle-selector=\"#sidebar-search\" ";
        // line 104
        if ((array_key_exists("tokens", $context) || array_key_exists("about", $context))) {
            echo "data-toggle-initial=\"display\"";
        }
        echo ">
                            ";
        // line 105
        echo twig_include($this->env, $context, "@WebProfiler/Icon/search.svg");
        echo " <span class=\"hidden-small\">Search</span>
                        </a>

                        ";
        // line 108
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_search_bar", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new Twig_Error_Runtime('Variable "request" does not exist.', 108, $this->getSourceContext()); })()), "query", array()), "all", array())));
        echo "
                    </div>
                </div>

                ";
        // line 112
        if (array_key_exists("templates", $context)) {
            // line 113
            echo "                    <ul id=\"menu-profiler\">
                        ";
            // line 114
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["templates"]) || array_key_exists("templates", $context) ? $context["templates"] : (function () { throw new Twig_Error_Runtime('Variable "templates" does not exist.', 114, $this->getSourceContext()); })()));
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
            foreach ($context['_seq'] as $context["name"] => $context["template"]) {
                // line 115
                echo "                            ";
                ob_start();
                // line 116
                if (                $this->loadTemplate($context["template"], "@WebProfiler/Profiler/layout.html.twig", 116)->hasBlock("menu", $context)) {
                    // line 117
                    $__internal_7bb0841e536e259f2ed9ff0c9bbc72500e81ebc05cf7a6b22fd72a272749491b = array("collector" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new Twig_Error_Runtime('Variable "profile" does not exist.', 117, $this->getSourceContext()); })()), "getcollector", array(0 => $context["name"]), "method"), "profiler_markup_version" => (isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 117, $this->getSourceContext()); })()));
                    if (!is_array($__internal_7bb0841e536e259f2ed9ff0c9bbc72500e81ebc05cf7a6b22fd72a272749491b)) {
                        throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                    }
                    $context['_parent'] = $context;
                    $context = array_merge($context, $__internal_7bb0841e536e259f2ed9ff0c9bbc72500e81ebc05cf7a6b22fd72a272749491b);
                    // line 118
                    $this->loadTemplate($context["template"], "@WebProfiler/Profiler/layout.html.twig", 118)->displayBlock("menu", $context);
                    $context = $context['_parent'];
                }
                $context["menu"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 122
                echo "                            ";
                if ( !twig_test_empty((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new Twig_Error_Runtime('Variable "menu" does not exist.', 122, $this->getSourceContext()); })()))) {
                    // line 123
                    echo "                                <li class=\"";
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo " ";
                    echo ((($context["name"] == (isset($context["panel"]) || array_key_exists("panel", $context) ? $context["panel"] : (function () { throw new Twig_Error_Runtime('Variable "panel" does not exist.', 123, $this->getSourceContext()); })()))) ? ("selected") : (""));
                    echo "\">
                                    <a href=\"";
                    // line 124
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 124, $this->getSourceContext()); })()), "panel" => $context["name"])), "html", null, true);
                    echo "\">";
                    echo (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new Twig_Error_Runtime('Variable "menu" does not exist.', 124, $this->getSourceContext()); })());
                    echo "</a>
                                </li>
                            ";
                }
                // line 127
                echo "                        ";
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
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['template'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            echo "                    </ul>
                ";
        }
        // line 130
        echo "            </div>
        </div>
    </div>
    <script>
        (function () {
            Sfjs.addEventListener(document.getElementById('sidebarShortcutsMenu'), 'click', function (event) {
                event.preventDefault();
                Sfjs.toggleClass(document.getElementById('sidebar'), 'expanded');
            })
        }())
    </script>
";
        
        $__internal_051074b12339123a5d4bc9c34d609d67a9bcdf7ef78d9ad65cad98b9766563c5->leave($__internal_051074b12339123a5d4bc9c34d609d67a9bcdf7ef78d9ad65cad98b9766563c5_prof);

        
        $__internal_c6713b409fc98474105adb098ebf214395c5020fb66e21218fd6a849bf4f169f->leave($__internal_c6713b409fc98474105adb098ebf214395c5020fb66e21218fd6a849bf4f169f_prof);

    }

    // line 7
    public function block_summary($context, array $blocks = array())
    {
        $__internal_8b4a8234e557dba5e85beaf28cbd9e5bb3c2a1756309fe62202996fd2f49ad39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b4a8234e557dba5e85beaf28cbd9e5bb3c2a1756309fe62202996fd2f49ad39->enter($__internal_8b4a8234e557dba5e85beaf28cbd9e5bb3c2a1756309fe62202996fd2f49ad39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_4839de05746487a0fc4c209ec2675aaf865744b4f231549eaf8e6ddc3fc12cec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4839de05746487a0fc4c209ec2675aaf865744b4f231549eaf8e6ddc3fc12cec->enter($__internal_4839de05746487a0fc4c209ec2675aaf865744b4f231549eaf8e6ddc3fc12cec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 8
        echo "            ";
        if (array_key_exists("profile", $context)) {
            // line 9
            echo "                ";
            $context["status_code"] = ((twig_in_filter("request", twig_get_array_keys_filter(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new Twig_Error_Runtime('Variable "profile" does not exist.', 9, $this->getSourceContext()); })()), "collectors", array())))) ? (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["profile"] ?? null), "getcollector", array(0 => "request"), "method", false, true), "statuscode", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["profile"] ?? null), "getcollector", array(0 => "request"), "method", false, true), "statuscode", array()), 0)) : (0))) : (0));
            // line 10
            echo "                ";
            $context["css_class"] = ((((isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 10, $this->getSourceContext()); })()) > 399)) ? ("status-error") : (((((isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 10, $this->getSourceContext()); })()) > 299)) ? ("status-warning") : ("status-success"))));
            // line 11
            echo "
                <div class=\"status ";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["css_class"]) || array_key_exists("css_class", $context) ? $context["css_class"] : (function () { throw new Twig_Error_Runtime('Variable "css_class" does not exist.', 12, $this->getSourceContext()); })()), "html", null, true);
            echo "\">
                    <div class=\"container\">
                        <h2 class=\"break-long-words\">
                            ";
            // line 15
            if (twig_in_filter(twig_upper_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new Twig_Error_Runtime('Variable "profile" does not exist.', 15, $this->getSourceContext()); })()), "method", array())), array(0 => "GET", 1 => "HEAD"))) {
                // line 16
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new Twig_Error_Runtime('Variable "profile" does not exist.', 16, $this->getSourceContext()); })()), "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new Twig_Error_Runtime('Variable "profile" does not exist.', 16, $this->getSourceContext()); })()), "url", array()), "html", null, true);
                echo "</a>
                            ";
            } else {
                // line 18
                echo "                                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new Twig_Error_Runtime('Variable "profile" does not exist.', 18, $this->getSourceContext()); })()), "url", array()), "html", null, true);
                echo "
                            ";
            }
            // line 20
            echo "                        </h2>

                        ";
            // line 22
            $context["request_collector"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["profile"] ?? null), "collectors", array(), "any", false, true), "request", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["profile"] ?? null), "collectors", array(), "any", false, true), "request", array()), false)) : (false));
            // line 23
            echo "                        ";
            if ((array_key_exists("request_collector", $context) && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["request_collector"]) || array_key_exists("request_collector", $context) ? $context["request_collector"] : (function () { throw new Twig_Error_Runtime('Variable "request_collector" does not exist.', 23, $this->getSourceContext()); })()), "redirect", array()))) {
                // line 24
                $context["redirect"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["request_collector"]) || array_key_exists("request_collector", $context) ? $context["request_collector"] : (function () { throw new Twig_Error_Runtime('Variable "request_collector" does not exist.', 24, $this->getSourceContext()); })()), "redirect", array());
                // line 25
                $context["controller"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["redirect"]) || array_key_exists("redirect", $context) ? $context["redirect"] : (function () { throw new Twig_Error_Runtime('Variable "redirect" does not exist.', 25, $this->getSourceContext()); })()), "controller", array());
                // line 26
                $context["redirect_route"] = ("@" . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["redirect"]) || array_key_exists("redirect", $context) ? $context["redirect"] : (function () { throw new Twig_Error_Runtime('Variable "redirect" does not exist.', 26, $this->getSourceContext()); })()), "route", array()));
                // line 27
                echo "                            <dl class=\"metadata\">
                                <dt>
                                    <span class=\"label\">";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["redirect"]) || array_key_exists("redirect", $context) ? $context["redirect"] : (function () { throw new Twig_Error_Runtime('Variable "redirect" does not exist.', 29, $this->getSourceContext()); })()), "status_code", array()), "html", null, true);
                echo "</span>
                                    Redirect from
                                </dt>
                                <dd>
                                    ";
                // line 33
                echo twig_escape_filter($this->env, ((("GET" != twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["redirect"]) || array_key_exists("redirect", $context) ? $context["redirect"] : (function () { throw new Twig_Error_Runtime('Variable "redirect" does not exist.', 33, $this->getSourceContext()); })()), "method", array()))) ? (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["redirect"]) || array_key_exists("redirect", $context) ? $context["redirect"] : (function () { throw new Twig_Error_Runtime('Variable "redirect" does not exist.', 33, $this->getSourceContext()); })()), "method", array())) : ("")), "html", null, true);
                echo "
                                    ";
                // line 34
                if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["redirect"] ?? null), "controller", array(), "any", false, true), "class", array(), "any", true, true)) {
                    // line 35
                    $context["link"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->getFileLink(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new Twig_Error_Runtime('Variable "controller" does not exist.', 35, $this->getSourceContext()); })()), "file", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new Twig_Error_Runtime('Variable "controller" does not exist.', 35, $this->getSourceContext()); })()), "line", array()));
                    // line 36
                    if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new Twig_Error_Runtime('Variable "link" does not exist.', 36, $this->getSourceContext()); })())) {
                        echo "<a href=\"";
                        echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new Twig_Error_Runtime('Variable "link" does not exist.', 36, $this->getSourceContext()); })()), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new Twig_Error_Runtime('Variable "controller" does not exist.', 36, $this->getSourceContext()); })()), "file", array()), "html", null, true);
                        echo "\">";
                    }
                    // line 37
                    echo twig_escape_filter($this->env, (isset($context["redirect_route"]) || array_key_exists("redirect_route", $context) ? $context["redirect_route"] : (function () { throw new Twig_Error_Runtime('Variable "redirect_route" does not exist.', 37, $this->getSourceContext()); })()), "html", null, true);
                    // line 38
                    if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new Twig_Error_Runtime('Variable "link" does not exist.', 38, $this->getSourceContext()); })())) {
                        echo "</a>";
                    }
                } else {
                    // line 40
                    echo twig_escape_filter($this->env, (isset($context["redirect_route"]) || array_key_exists("redirect_route", $context) ? $context["redirect_route"] : (function () { throw new Twig_Error_Runtime('Variable "redirect_route" does not exist.', 40, $this->getSourceContext()); })()), "html", null, true);
                }
                // line 42
                echo "                                    (<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["redirect"]) || array_key_exists("redirect", $context) ? $context["redirect"] : (function () { throw new Twig_Error_Runtime('Variable "redirect" does not exist.', 42, $this->getSourceContext()); })()), "token", array()), "panel" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new Twig_Error_Runtime('Variable "request" does not exist.', 42, $this->getSourceContext()); })()), "query", array()), "get", array(0 => "panel", 1 => "request"), "method"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["redirect"]) || array_key_exists("redirect", $context) ? $context["redirect"] : (function () { throw new Twig_Error_Runtime('Variable "redirect" does not exist.', 42, $this->getSourceContext()); })()), "token", array()), "html", null, true);
                echo "</a>)
                                </dd>
                            </dl>";
            }
            // line 46
            echo "
                        ";
            // line 47
            if ((((isset($context["request_collector"]) || array_key_exists("request_collector", $context) ? $context["request_collector"] : (function () { throw new Twig_Error_Runtime('Variable "request_collector" does not exist.', 47, $this->getSourceContext()); })()) && ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["request_collector"] ?? null), "forward", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["request_collector"] ?? null), "forward", array()), false)) : (false))) && twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["request_collector"] ?? null), "forward", array(), "any", false, true), "controller", array(), "any", false, true), "class", array(), "any", true, true))) {
                // line 48
                $context["forward"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["request_collector"]) || array_key_exists("request_collector", $context) ? $context["request_collector"] : (function () { throw new Twig_Error_Runtime('Variable "request_collector" does not exist.', 48, $this->getSourceContext()); })()), "forward", array());
                // line 49
                $context["controller"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["forward"]) || array_key_exists("forward", $context) ? $context["forward"] : (function () { throw new Twig_Error_Runtime('Variable "forward" does not exist.', 49, $this->getSourceContext()); })()), "controller", array());
                // line 50
                echo "<dl class=\"metadata\">
                                <dt>Forwarded to</dt>
                                <dd>
                                    ";
                // line 53
                $context["link"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->getFileLink(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new Twig_Error_Runtime('Variable "controller" does not exist.', 53, $this->getSourceContext()); })()), "file", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new Twig_Error_Runtime('Variable "controller" does not exist.', 53, $this->getSourceContext()); })()), "line", array()));
                // line 54
                if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new Twig_Error_Runtime('Variable "link" does not exist.', 54, $this->getSourceContext()); })())) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new Twig_Error_Runtime('Variable "link" does not exist.', 54, $this->getSourceContext()); })()), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new Twig_Error_Runtime('Variable "controller" does not exist.', 54, $this->getSourceContext()); })()), "file", array()), "html", null, true);
                    echo "\">";
                }
                // line 55
                echo twig_escape_filter($this->env, strip_tags($this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->abbrClass(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new Twig_Error_Runtime('Variable "controller" does not exist.', 55, $this->getSourceContext()); })()), "class", array()))), "html", null, true);
                // line 56
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new Twig_Error_Runtime('Variable "controller" does not exist.', 56, $this->getSourceContext()); })()), "method", array())) ? ((" :: " . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new Twig_Error_Runtime('Variable "controller" does not exist.', 56, $this->getSourceContext()); })()), "method", array()))) : ("")), "html", null, true);
                // line 57
                if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new Twig_Error_Runtime('Variable "link" does not exist.', 57, $this->getSourceContext()); })())) {
                    echo "</a>";
                }
                // line 58
                echo "                                    (<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["forward"]) || array_key_exists("forward", $context) ? $context["forward"] : (function () { throw new Twig_Error_Runtime('Variable "forward" does not exist.', 58, $this->getSourceContext()); })()), "token", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["forward"]) || array_key_exists("forward", $context) ? $context["forward"] : (function () { throw new Twig_Error_Runtime('Variable "forward" does not exist.', 58, $this->getSourceContext()); })()), "token", array()), "html", null, true);
                echo "</a>)
                                </dd>
                            </dl>";
            }
            // line 62
            echo "
                        <dl class=\"metadata\">
                            <dt>Method</dt>
                            <dd>";
            // line 65
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new Twig_Error_Runtime('Variable "profile" does not exist.', 65, $this->getSourceContext()); })()), "method", array())), "html", null, true);
            echo "</dd>

                            <dt>HTTP Status</dt>
                            <dd>";
            // line 68
            echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 68, $this->getSourceContext()); })()), "html", null, true);
            echo "</dd>

                            <dt>IP</dt>
                            <dd>";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new Twig_Error_Runtime('Variable "profile" does not exist.', 71, $this->getSourceContext()); })()), "ip", array()), "html", null, true);
            echo "</dd>

                            <dt>Profiled on</dt>
                            <dd>";
            // line 74
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new Twig_Error_Runtime('Variable "profile" does not exist.', 74, $this->getSourceContext()); })()), "time", array()), "r"), "html", null, true);
            echo "</dd>

                            <dt>Token</dt>
                            <dd>";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new Twig_Error_Runtime('Variable "profile" does not exist.', 77, $this->getSourceContext()); })()), "token", array()), "html", null, true);
            echo "</dd>
                        </dl>
                    </div>
                </div>
            ";
        }
        // line 82
        echo "        ";
        
        $__internal_4839de05746487a0fc4c209ec2675aaf865744b4f231549eaf8e6ddc3fc12cec->leave($__internal_4839de05746487a0fc4c209ec2675aaf865744b4f231549eaf8e6ddc3fc12cec_prof);

        
        $__internal_8b4a8234e557dba5e85beaf28cbd9e5bb3c2a1756309fe62202996fd2f49ad39->leave($__internal_8b4a8234e557dba5e85beaf28cbd9e5bb3c2a1756309fe62202996fd2f49ad39_prof);

    }

    // line 90
    public function block_panel($context, array $blocks = array())
    {
        $__internal_39bc68cb2c27b4fcba43337780f297460aed4991917d15890db87ea4c4f7dfc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39bc68cb2c27b4fcba43337780f297460aed4991917d15890db87ea4c4f7dfc2->enter($__internal_39bc68cb2c27b4fcba43337780f297460aed4991917d15890db87ea4c4f7dfc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6b4295e036a9ee8fa6a0ac6fd1b2db841b3bae028ea9454f1d022b723794fca3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b4295e036a9ee8fa6a0ac6fd1b2db841b3bae028ea9454f1d022b723794fca3->enter($__internal_6b4295e036a9ee8fa6a0ac6fd1b2db841b3bae028ea9454f1d022b723794fca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6b4295e036a9ee8fa6a0ac6fd1b2db841b3bae028ea9454f1d022b723794fca3->leave($__internal_6b4295e036a9ee8fa6a0ac6fd1b2db841b3bae028ea9454f1d022b723794fca3_prof);

        
        $__internal_39bc68cb2c27b4fcba43337780f297460aed4991917d15890db87ea4c4f7dfc2->leave($__internal_39bc68cb2c27b4fcba43337780f297460aed4991917d15890db87ea4c4f7dfc2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  405 => 90,  395 => 82,  387 => 77,  381 => 74,  375 => 71,  369 => 68,  363 => 65,  358 => 62,  349 => 58,  345 => 57,  343 => 56,  341 => 55,  333 => 54,  331 => 53,  326 => 50,  324 => 49,  322 => 48,  320 => 47,  317 => 46,  308 => 42,  305 => 40,  300 => 38,  298 => 37,  290 => 36,  288 => 35,  286 => 34,  282 => 33,  275 => 29,  271 => 27,  269 => 26,  267 => 25,  265 => 24,  262 => 23,  260 => 22,  256 => 20,  250 => 18,  242 => 16,  240 => 15,  234 => 12,  231 => 11,  228 => 10,  225 => 9,  222 => 8,  213 => 7,  192 => 130,  188 => 128,  174 => 127,  166 => 124,  159 => 123,  156 => 122,  151 => 118,  144 => 117,  142 => 116,  139 => 115,  122 => 114,  119 => 113,  117 => 112,  110 => 108,  104 => 105,  98 => 104,  93 => 102,  89 => 101,  83 => 98,  74 => 91,  72 => 90,  68 => 89,  60 => 83,  58 => 7,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block body %}
    {{ include('@WebProfiler/Profiler/header.html.twig', with_context = false) }}

    <div id=\"summary\">
        {% block summary %}
            {% if profile is defined %}
                {% set status_code = ('request' in profile.collectors|keys) ? profile.getcollector('request').statuscode|default(0) : 0 %}
                {% set css_class = status_code > 399 ? 'status-error' : status_code > 299 ? 'status-warning' : 'status-success' %}

                <div class=\"status {{ css_class }}\">
                    <div class=\"container\">
                        <h2 class=\"break-long-words\">
                            {% if profile.method|upper in ['GET', 'HEAD'] %}
                                <a href=\"{{ profile.url }}\">{{ profile.url }}</a>
                            {% else %}
                                {{ profile.url }}
                            {% endif %}
                        </h2>

                        {% set request_collector = profile.collectors.request|default(false) %}
                        {% if request_collector is defined and request_collector.redirect -%}
                            {%- set redirect = request_collector.redirect -%}
                            {%- set controller = redirect.controller -%}
                            {%- set redirect_route = '@' ~ redirect.route %}
                            <dl class=\"metadata\">
                                <dt>
                                    <span class=\"label\">{{ redirect.status_code }}</span>
                                    Redirect from
                                </dt>
                                <dd>
                                    {{ 'GET' != redirect.method ? redirect.method }}
                                    {% if redirect.controller.class is defined -%}
                                        {%- set link = controller.file|file_link(controller.line) -%}
                                        {% if link %}<a href=\"{{ link }}\" title=\"{{ controller.file }}\">{% endif -%}
                                            {{ redirect_route }}
                                        {%- if link %}</a>{% endif -%}
                                    {%- else -%}
                                            {{ redirect_route }}
                                    {%- endif %}
                                    (<a href=\"{{ path('_profiler', { token: redirect.token, panel: request.query.get('panel', 'request') }) }}\">{{ redirect.token }}</a>)
                                </dd>
                            </dl>
                        {%- endif %}

                        {% if request_collector and request_collector.forward|default(false) and request_collector.forward.controller.class is defined -%}
                            {%- set forward = request_collector.forward -%}
                            {%- set controller = forward.controller -%}
                            <dl class=\"metadata\">
                                <dt>Forwarded to</dt>
                                <dd>
                                    {% set link = controller.file|file_link(controller.line) -%}
                                    {%- if link %}<a href=\"{{ link }}\" title=\"{{ controller.file }}\">{% endif -%}
                                        {{- controller.class|abbr_class|striptags -}}
                                        {{- controller.method ? ' :: ' ~ controller.method }}
                                    {%- if link %}</a>{% endif %}
                                    (<a href=\"{{ path('_profiler', { token: forward.token }) }}\">{{ forward.token }}</a>)
                                </dd>
                            </dl>
                        {%- endif %}

                        <dl class=\"metadata\">
                            <dt>Method</dt>
                            <dd>{{ profile.method|upper }}</dd>

                            <dt>HTTP Status</dt>
                            <dd>{{ status_code }}</dd>

                            <dt>IP</dt>
                            <dd>{{ profile.ip }}</dd>

                            <dt>Profiled on</dt>
                            <dd>{{ profile.time|date('r') }}</dd>

                            <dt>Token</dt>
                            <dd>{{ profile.token }}</dd>
                        </dl>
                    </div>
                </div>
            {% endif %}
        {% endblock %}
    </div>

    <div id=\"content\" class=\"container\">
        <div id=\"main\">
            <div id=\"collector-wrapper\">
                <div id=\"collector-content\">
                    {{ include('@WebProfiler/Profiler/base_js.html.twig') }}
                    {% block panel '' %}
                </div>
            </div>

            <div id=\"sidebar\">
                <div id=\"sidebar-shortcuts\">
                    <div class=\"shortcuts\">
                        <a href=\"#\" id=\"sidebarShortcutsMenu\" class=\"visible-small\">
                            <span class=\"icon\">{{ include('@WebProfiler/Icon/menu.svg') }}</span>
                        </a>

                        <a class=\"btn btn-sm\" href=\"{{ path('_profiler_search', { limit: 10 }) }}\">Last 10</a>
                        <a class=\"btn btn-sm\" href=\"{{ path('_profiler', { token: 'latest' }|merge(request.query.all)) }}\">Latest</a>

                        <a class=\"sf-toggle btn btn-sm\" data-toggle-selector=\"#sidebar-search\" {% if tokens is defined or about is defined %}data-toggle-initial=\"display\"{% endif %}>
                            {{ include('@WebProfiler/Icon/search.svg') }} <span class=\"hidden-small\">Search</span>
                        </a>

                        {{ render(path('_profiler_search_bar', request.query.all)) }}
                    </div>
                </div>

                {% if templates is defined %}
                    <ul id=\"menu-profiler\">
                        {% for name, template in templates %}
                            {% set menu -%}
                                {%- if block('menu', template) is defined -%}
                                    {% with { collector: profile.getcollector(name), profiler_markup_version: profiler_markup_version } %}
                                        {{- block('menu', template) -}}
                                    {% endwith %}
                                {%- endif -%}
                            {%- endset %}
                            {% if menu is not empty %}
                                <li class=\"{{ name }} {{ name == panel ? 'selected' : '' }}\">
                                    <a href=\"{{ path('_profiler', { token: token, panel: name }) }}\">{{ menu|raw }}</a>
                                </li>
                            {% endif %}
                        {% endfor %}
                    </ul>
                {% endif %}
            </div>
        </div>
    </div>
    <script>
        (function () {
            Sfjs.addEventListener(document.getElementById('sidebarShortcutsMenu'), 'click', function (event) {
                event.preventDefault();
                Sfjs.toggleClass(document.getElementById('sidebar'), 'expanded');
            })
        }())
    </script>
{% endblock %}
", "@WebProfiler/Profiler/layout.html.twig", "/var/www/html/testflix/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/layout.html.twig");
    }
}
