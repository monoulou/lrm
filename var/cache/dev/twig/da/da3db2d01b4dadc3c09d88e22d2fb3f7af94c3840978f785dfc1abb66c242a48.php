<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_44b814acee18a20fa813f5b47a7edc272c237f0d3094c8f2c37c3ba7b1319eb3 extends Twig_Template
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
        $__internal_9d9b3e18ed82eaf9a610801b388f32190d1ee74889b5ad87023c6d987c67e554 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d9b3e18ed82eaf9a610801b388f32190d1ee74889b5ad87023c6d987c67e554->enter($__internal_9d9b3e18ed82eaf9a610801b388f32190d1ee74889b5ad87023c6d987c67e554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_438168e5efd967e673c83e4cde99d11c33e67b7aab86f56c64207da9e7327e6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_438168e5efd967e673c83e4cde99d11c33e67b7aab86f56c64207da9e7327e6d->enter($__internal_438168e5efd967e673c83e4cde99d11c33e67b7aab86f56c64207da9e7327e6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d9b3e18ed82eaf9a610801b388f32190d1ee74889b5ad87023c6d987c67e554->leave($__internal_9d9b3e18ed82eaf9a610801b388f32190d1ee74889b5ad87023c6d987c67e554_prof);

        
        $__internal_438168e5efd967e673c83e4cde99d11c33e67b7aab86f56c64207da9e7327e6d->leave($__internal_438168e5efd967e673c83e4cde99d11c33e67b7aab86f56c64207da9e7327e6d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_314a3ccd5a2f803379ac67705f89f846b742f3bbfa9196f499742d1d2fd222a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_314a3ccd5a2f803379ac67705f89f846b742f3bbfa9196f499742d1d2fd222a2->enter($__internal_314a3ccd5a2f803379ac67705f89f846b742f3bbfa9196f499742d1d2fd222a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b1ae99a952509f8522275bf49fd4d3acee9c9cbe897074a2e63c9df143fad4e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1ae99a952509f8522275bf49fd4d3acee9c9cbe897074a2e63c9df143fad4e7->enter($__internal_b1ae99a952509f8522275bf49fd4d3acee9c9cbe897074a2e63c9df143fad4e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_b1ae99a952509f8522275bf49fd4d3acee9c9cbe897074a2e63c9df143fad4e7->leave($__internal_b1ae99a952509f8522275bf49fd4d3acee9c9cbe897074a2e63c9df143fad4e7_prof);

        
        $__internal_314a3ccd5a2f803379ac67705f89f846b742f3bbfa9196f499742d1d2fd222a2->leave($__internal_314a3ccd5a2f803379ac67705f89f846b742f3bbfa9196f499742d1d2fd222a2_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_950e3a70094ed4ce2a0c4a5ba2ef631efb8c9b17f5204493a84b1036e87a7554 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_950e3a70094ed4ce2a0c4a5ba2ef631efb8c9b17f5204493a84b1036e87a7554->enter($__internal_950e3a70094ed4ce2a0c4a5ba2ef631efb8c9b17f5204493a84b1036e87a7554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fe0e6c5712d5885a0ea23c9dca1bf9b333507295277332cda6cb7d9ebb37826a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe0e6c5712d5885a0ea23c9dca1bf9b333507295277332cda6cb7d9ebb37826a->enter($__internal_fe0e6c5712d5885a0ea23c9dca1bf9b333507295277332cda6cb7d9ebb37826a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fe0e6c5712d5885a0ea23c9dca1bf9b333507295277332cda6cb7d9ebb37826a->leave($__internal_fe0e6c5712d5885a0ea23c9dca1bf9b333507295277332cda6cb7d9ebb37826a_prof);

        
        $__internal_950e3a70094ed4ce2a0c4a5ba2ef631efb8c9b17f5204493a84b1036e87a7554->leave($__internal_950e3a70094ed4ce2a0c4a5ba2ef631efb8c9b17f5204493a84b1036e87a7554_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_07797ea2d3c61dbc929c185ade09863b24169e8337660e9b7d58625efdfa8844 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07797ea2d3c61dbc929c185ade09863b24169e8337660e9b7d58625efdfa8844->enter($__internal_07797ea2d3c61dbc929c185ade09863b24169e8337660e9b7d58625efdfa8844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0364466c400f077f0552cf81085a63f6db3477d4045e07516a2d68b4d382cb91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0364466c400f077f0552cf81085a63f6db3477d4045e07516a2d68b4d382cb91->enter($__internal_0364466c400f077f0552cf81085a63f6db3477d4045e07516a2d68b4d382cb91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_0364466c400f077f0552cf81085a63f6db3477d4045e07516a2d68b4d382cb91->leave($__internal_0364466c400f077f0552cf81085a63f6db3477d4045e07516a2d68b4d382cb91_prof);

        
        $__internal_07797ea2d3c61dbc929c185ade09863b24169e8337660e9b7d58625efdfa8844->leave($__internal_07797ea2d3c61dbc929c185ade09863b24169e8337660e9b7d58625efdfa8844_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
