<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_dae027eb2981f265b54ea1a4e8e6d99771f230f3406bbec133f56678914f8dbc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_1a59c0b57f2f1b9b6b1318604cc2976156724d05eb27fb08eed1d7bd308bc5bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a59c0b57f2f1b9b6b1318604cc2976156724d05eb27fb08eed1d7bd308bc5bb->enter($__internal_1a59c0b57f2f1b9b6b1318604cc2976156724d05eb27fb08eed1d7bd308bc5bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_f646a6efc91ac1b4ae80c22eeac416b0a3e350d37c530fa4969d0fde4b21b34d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f646a6efc91ac1b4ae80c22eeac416b0a3e350d37c530fa4969d0fde4b21b34d->enter($__internal_f646a6efc91ac1b4ae80c22eeac416b0a3e350d37c530fa4969d0fde4b21b34d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a59c0b57f2f1b9b6b1318604cc2976156724d05eb27fb08eed1d7bd308bc5bb->leave($__internal_1a59c0b57f2f1b9b6b1318604cc2976156724d05eb27fb08eed1d7bd308bc5bb_prof);

        
        $__internal_f646a6efc91ac1b4ae80c22eeac416b0a3e350d37c530fa4969d0fde4b21b34d->leave($__internal_f646a6efc91ac1b4ae80c22eeac416b0a3e350d37c530fa4969d0fde4b21b34d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_dc01eb05d66d96882500c7e5a06ad827b00999eb882677a19db7554e5d5c8109 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc01eb05d66d96882500c7e5a06ad827b00999eb882677a19db7554e5d5c8109->enter($__internal_dc01eb05d66d96882500c7e5a06ad827b00999eb882677a19db7554e5d5c8109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_790c0d791b7ad1ad59a7c37f85172ab5813732243cbbc77cfe4918bf7a0bfc61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_790c0d791b7ad1ad59a7c37f85172ab5813732243cbbc77cfe4918bf7a0bfc61->enter($__internal_790c0d791b7ad1ad59a7c37f85172ab5813732243cbbc77cfe4918bf7a0bfc61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_790c0d791b7ad1ad59a7c37f85172ab5813732243cbbc77cfe4918bf7a0bfc61->leave($__internal_790c0d791b7ad1ad59a7c37f85172ab5813732243cbbc77cfe4918bf7a0bfc61_prof);

        
        $__internal_dc01eb05d66d96882500c7e5a06ad827b00999eb882677a19db7554e5d5c8109->leave($__internal_dc01eb05d66d96882500c7e5a06ad827b00999eb882677a19db7554e5d5c8109_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2bf12b9ba2a642eceb2940701e071e1b8563e583985221a1b980557a7a831a6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bf12b9ba2a642eceb2940701e071e1b8563e583985221a1b980557a7a831a6f->enter($__internal_2bf12b9ba2a642eceb2940701e071e1b8563e583985221a1b980557a7a831a6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b91f91dc525e9112a3f2e632be89aee8ec51f37954410b6263b3bd4513671c95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b91f91dc525e9112a3f2e632be89aee8ec51f37954410b6263b3bd4513671c95->enter($__internal_b91f91dc525e9112a3f2e632be89aee8ec51f37954410b6263b3bd4513671c95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b91f91dc525e9112a3f2e632be89aee8ec51f37954410b6263b3bd4513671c95->leave($__internal_b91f91dc525e9112a3f2e632be89aee8ec51f37954410b6263b3bd4513671c95_prof);

        
        $__internal_2bf12b9ba2a642eceb2940701e071e1b8563e583985221a1b980557a7a831a6f->leave($__internal_2bf12b9ba2a642eceb2940701e071e1b8563e583985221a1b980557a7a831a6f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fdcfe7f1874afba7eb21aa53b705d3900a147ee78d5cce5966f648d35cd54a86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdcfe7f1874afba7eb21aa53b705d3900a147ee78d5cce5966f648d35cd54a86->enter($__internal_fdcfe7f1874afba7eb21aa53b705d3900a147ee78d5cce5966f648d35cd54a86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f53189e831cfa88f3871b9832aa6514a3ab304026f6182bbb2b663f661a824bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f53189e831cfa88f3871b9832aa6514a3ab304026f6182bbb2b663f661a824bd->enter($__internal_f53189e831cfa88f3871b9832aa6514a3ab304026f6182bbb2b663f661a824bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_f53189e831cfa88f3871b9832aa6514a3ab304026f6182bbb2b663f661a824bd->leave($__internal_f53189e831cfa88f3871b9832aa6514a3ab304026f6182bbb2b663f661a824bd_prof);

        
        $__internal_fdcfe7f1874afba7eb21aa53b705d3900a147ee78d5cce5966f648d35cd54a86->leave($__internal_fdcfe7f1874afba7eb21aa53b705d3900a147ee78d5cce5966f648d35cd54a86_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/testflix/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
