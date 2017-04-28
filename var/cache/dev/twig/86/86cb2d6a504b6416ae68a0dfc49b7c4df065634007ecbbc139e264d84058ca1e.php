<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_fc56cc03328e3d8df3c43e22f6ef798ff6630e720605144e70a6f675fb162816 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_27ec1f7232fbe24e100b00cc03f8d170b892bca10071950a738c7f321ed7079e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27ec1f7232fbe24e100b00cc03f8d170b892bca10071950a738c7f321ed7079e->enter($__internal_27ec1f7232fbe24e100b00cc03f8d170b892bca10071950a738c7f321ed7079e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_9e33d81790f3525a86139fee8b0d0577dc2db4223cc0ef5ba75b94702e06832c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e33d81790f3525a86139fee8b0d0577dc2db4223cc0ef5ba75b94702e06832c->enter($__internal_9e33d81790f3525a86139fee8b0d0577dc2db4223cc0ef5ba75b94702e06832c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27ec1f7232fbe24e100b00cc03f8d170b892bca10071950a738c7f321ed7079e->leave($__internal_27ec1f7232fbe24e100b00cc03f8d170b892bca10071950a738c7f321ed7079e_prof);

        
        $__internal_9e33d81790f3525a86139fee8b0d0577dc2db4223cc0ef5ba75b94702e06832c->leave($__internal_9e33d81790f3525a86139fee8b0d0577dc2db4223cc0ef5ba75b94702e06832c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fa00c82be6ef728017fd2e907aafc122f2b7c1f82347f10b34101cd80a0db117 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa00c82be6ef728017fd2e907aafc122f2b7c1f82347f10b34101cd80a0db117->enter($__internal_fa00c82be6ef728017fd2e907aafc122f2b7c1f82347f10b34101cd80a0db117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4b04154be35f0bf0c839daf4cf99d0817aa2316cca853ed02e4de6a0bac2d859 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b04154be35f0bf0c839daf4cf99d0817aa2316cca853ed02e4de6a0bac2d859->enter($__internal_4b04154be35f0bf0c839daf4cf99d0817aa2316cca853ed02e4de6a0bac2d859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_4b04154be35f0bf0c839daf4cf99d0817aa2316cca853ed02e4de6a0bac2d859->leave($__internal_4b04154be35f0bf0c839daf4cf99d0817aa2316cca853ed02e4de6a0bac2d859_prof);

        
        $__internal_fa00c82be6ef728017fd2e907aafc122f2b7c1f82347f10b34101cd80a0db117->leave($__internal_fa00c82be6ef728017fd2e907aafc122f2b7c1f82347f10b34101cd80a0db117_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/html/testflix/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
