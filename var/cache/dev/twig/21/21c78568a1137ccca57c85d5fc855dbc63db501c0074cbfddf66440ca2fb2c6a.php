<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_f53598199cc3172408221a89a9eac1511d4f127300a5f528a0185e5de92d91d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_501f4be01a7e176e48f638578584b889c21f31ecddb00769a5a608c5f405e92c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_501f4be01a7e176e48f638578584b889c21f31ecddb00769a5a608c5f405e92c->enter($__internal_501f4be01a7e176e48f638578584b889c21f31ecddb00769a5a608c5f405e92c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_877bd91730fb4ebae1917f631a55538b82ce4665b1e1e6a94a55e52dda2c9eb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_877bd91730fb4ebae1917f631a55538b82ce4665b1e1e6a94a55e52dda2c9eb2->enter($__internal_877bd91730fb4ebae1917f631a55538b82ce4665b1e1e6a94a55e52dda2c9eb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_501f4be01a7e176e48f638578584b889c21f31ecddb00769a5a608c5f405e92c->leave($__internal_501f4be01a7e176e48f638578584b889c21f31ecddb00769a5a608c5f405e92c_prof);

        
        $__internal_877bd91730fb4ebae1917f631a55538b82ce4665b1e1e6a94a55e52dda2c9eb2->leave($__internal_877bd91730fb4ebae1917f631a55538b82ce4665b1e1e6a94a55e52dda2c9eb2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_49cb74a9a9a07d9bfefc986c5f34786071351f4854196d2da3f9f545b1e49b43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49cb74a9a9a07d9bfefc986c5f34786071351f4854196d2da3f9f545b1e49b43->enter($__internal_49cb74a9a9a07d9bfefc986c5f34786071351f4854196d2da3f9f545b1e49b43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_28a9632412c890df0ed4456c78955069aa0278de802080c76cbbd17908f6ae58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28a9632412c890df0ed4456c78955069aa0278de802080c76cbbd17908f6ae58->enter($__internal_28a9632412c890df0ed4456c78955069aa0278de802080c76cbbd17908f6ae58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_28a9632412c890df0ed4456c78955069aa0278de802080c76cbbd17908f6ae58->leave($__internal_28a9632412c890df0ed4456c78955069aa0278de802080c76cbbd17908f6ae58_prof);

        
        $__internal_49cb74a9a9a07d9bfefc986c5f34786071351f4854196d2da3f9f545b1e49b43->leave($__internal_49cb74a9a9a07d9bfefc986c5f34786071351f4854196d2da3f9f545b1e49b43_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d95f8b469f2dfc198d83282884c94420e400eb09383567af17d5dbc671278cca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d95f8b469f2dfc198d83282884c94420e400eb09383567af17d5dbc671278cca->enter($__internal_d95f8b469f2dfc198d83282884c94420e400eb09383567af17d5dbc671278cca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f347fccb53ad96e786c593c6bb18a432c0ae8bca753b360979995fa7cfcf09ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f347fccb53ad96e786c593c6bb18a432c0ae8bca753b360979995fa7cfcf09ad->enter($__internal_f347fccb53ad96e786c593c6bb18a432c0ae8bca753b360979995fa7cfcf09ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_f347fccb53ad96e786c593c6bb18a432c0ae8bca753b360979995fa7cfcf09ad->leave($__internal_f347fccb53ad96e786c593c6bb18a432c0ae8bca753b360979995fa7cfcf09ad_prof);

        
        $__internal_d95f8b469f2dfc198d83282884c94420e400eb09383567af17d5dbc671278cca->leave($__internal_d95f8b469f2dfc198d83282884c94420e400eb09383567af17d5dbc671278cca_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_704326fb0386f120f656e675a91985bc2dbe6d5e899e7665c43a08a3f8bff83c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_704326fb0386f120f656e675a91985bc2dbe6d5e899e7665c43a08a3f8bff83c->enter($__internal_704326fb0386f120f656e675a91985bc2dbe6d5e899e7665c43a08a3f8bff83c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6d1d5c04da89adf8cf1c6054bc8d536aa850243e3dbe0d6f40d200a2a69b4d3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d1d5c04da89adf8cf1c6054bc8d536aa850243e3dbe0d6f40d200a2a69b4d3b->enter($__internal_6d1d5c04da89adf8cf1c6054bc8d536aa850243e3dbe0d6f40d200a2a69b4d3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_6d1d5c04da89adf8cf1c6054bc8d536aa850243e3dbe0d6f40d200a2a69b4d3b->leave($__internal_6d1d5c04da89adf8cf1c6054bc8d536aa850243e3dbe0d6f40d200a2a69b4d3b_prof);

        
        $__internal_704326fb0386f120f656e675a91985bc2dbe6d5e899e7665c43a08a3f8bff83c->leave($__internal_704326fb0386f120f656e675a91985bc2dbe6d5e899e7665c43a08a3f8bff83c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/testflix/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
