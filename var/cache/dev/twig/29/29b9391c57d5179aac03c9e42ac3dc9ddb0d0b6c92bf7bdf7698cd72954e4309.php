<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5e26efcbe1c826448e0c1aaecbfa1b3e2d894c90c41fa359da6d9141e7f631d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4858c0cbdc8fddf68cf11cb1293f699d5340a50958057b266169ce6648f517d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4858c0cbdc8fddf68cf11cb1293f699d5340a50958057b266169ce6648f517d2->enter($__internal_4858c0cbdc8fddf68cf11cb1293f699d5340a50958057b266169ce6648f517d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_ee69ce1e0df737887d7db8f2578b73148e86c5fb635347b548590d6b63615c6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee69ce1e0df737887d7db8f2578b73148e86c5fb635347b548590d6b63615c6f->enter($__internal_ee69ce1e0df737887d7db8f2578b73148e86c5fb635347b548590d6b63615c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4858c0cbdc8fddf68cf11cb1293f699d5340a50958057b266169ce6648f517d2->leave($__internal_4858c0cbdc8fddf68cf11cb1293f699d5340a50958057b266169ce6648f517d2_prof);

        
        $__internal_ee69ce1e0df737887d7db8f2578b73148e86c5fb635347b548590d6b63615c6f->leave($__internal_ee69ce1e0df737887d7db8f2578b73148e86c5fb635347b548590d6b63615c6f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_14f631d8dec57979915b19bd9c8278ce2dc41fdb2a49cb6e21df5c74e2f802a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14f631d8dec57979915b19bd9c8278ce2dc41fdb2a49cb6e21df5c74e2f802a2->enter($__internal_14f631d8dec57979915b19bd9c8278ce2dc41fdb2a49cb6e21df5c74e2f802a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6c1c4a36231dd36c9c17270027cab6e8736ac6cb16c2d84e2801cbe9e50f1447 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c1c4a36231dd36c9c17270027cab6e8736ac6cb16c2d84e2801cbe9e50f1447->enter($__internal_6c1c4a36231dd36c9c17270027cab6e8736ac6cb16c2d84e2801cbe9e50f1447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_6c1c4a36231dd36c9c17270027cab6e8736ac6cb16c2d84e2801cbe9e50f1447->leave($__internal_6c1c4a36231dd36c9c17270027cab6e8736ac6cb16c2d84e2801cbe9e50f1447_prof);

        
        $__internal_14f631d8dec57979915b19bd9c8278ce2dc41fdb2a49cb6e21df5c74e2f802a2->leave($__internal_14f631d8dec57979915b19bd9c8278ce2dc41fdb2a49cb6e21df5c74e2f802a2_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_21ce5d0c95a9dc49a35abe772e1a48c7799726fadfc96ca7765b86162788fc24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21ce5d0c95a9dc49a35abe772e1a48c7799726fadfc96ca7765b86162788fc24->enter($__internal_21ce5d0c95a9dc49a35abe772e1a48c7799726fadfc96ca7765b86162788fc24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_818d8f2f379e3ac91ea50be04beaa52501826a3b5e5bf18dab3e96812ce24d8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_818d8f2f379e3ac91ea50be04beaa52501826a3b5e5bf18dab3e96812ce24d8f->enter($__internal_818d8f2f379e3ac91ea50be04beaa52501826a3b5e5bf18dab3e96812ce24d8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_818d8f2f379e3ac91ea50be04beaa52501826a3b5e5bf18dab3e96812ce24d8f->leave($__internal_818d8f2f379e3ac91ea50be04beaa52501826a3b5e5bf18dab3e96812ce24d8f_prof);

        
        $__internal_21ce5d0c95a9dc49a35abe772e1a48c7799726fadfc96ca7765b86162788fc24->leave($__internal_21ce5d0c95a9dc49a35abe772e1a48c7799726fadfc96ca7765b86162788fc24_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_54f7aeaef3ca9188691680c2e7c492c9ebc31f9b5070e858d7e1ce66a2450cad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54f7aeaef3ca9188691680c2e7c492c9ebc31f9b5070e858d7e1ce66a2450cad->enter($__internal_54f7aeaef3ca9188691680c2e7c492c9ebc31f9b5070e858d7e1ce66a2450cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bc43160d5ddb5bc6337185e6bd7a534fb5ede9fb44a04a5117f0c4119c11bb2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc43160d5ddb5bc6337185e6bd7a534fb5ede9fb44a04a5117f0c4119c11bb2f->enter($__internal_bc43160d5ddb5bc6337185e6bd7a534fb5ede9fb44a04a5117f0c4119c11bb2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_bc43160d5ddb5bc6337185e6bd7a534fb5ede9fb44a04a5117f0c4119c11bb2f->leave($__internal_bc43160d5ddb5bc6337185e6bd7a534fb5ede9fb44a04a5117f0c4119c11bb2f_prof);

        
        $__internal_54f7aeaef3ca9188691680c2e7c492c9ebc31f9b5070e858d7e1ce66a2450cad->leave($__internal_54f7aeaef3ca9188691680c2e7c492c9ebc31f9b5070e858d7e1ce66a2450cad_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/testflix/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
