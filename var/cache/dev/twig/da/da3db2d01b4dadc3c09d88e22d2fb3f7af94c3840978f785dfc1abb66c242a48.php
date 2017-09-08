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
        $__internal_42916b709473727aecc78c7f80288e133226e04b872f7414474536179b7ec2a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42916b709473727aecc78c7f80288e133226e04b872f7414474536179b7ec2a6->enter($__internal_42916b709473727aecc78c7f80288e133226e04b872f7414474536179b7ec2a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_6a142f5d6c7aedc0b1b9c5eb9801239ad6e2f777881a9f92265ac32f65e81c2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a142f5d6c7aedc0b1b9c5eb9801239ad6e2f777881a9f92265ac32f65e81c2e->enter($__internal_6a142f5d6c7aedc0b1b9c5eb9801239ad6e2f777881a9f92265ac32f65e81c2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42916b709473727aecc78c7f80288e133226e04b872f7414474536179b7ec2a6->leave($__internal_42916b709473727aecc78c7f80288e133226e04b872f7414474536179b7ec2a6_prof);

        
        $__internal_6a142f5d6c7aedc0b1b9c5eb9801239ad6e2f777881a9f92265ac32f65e81c2e->leave($__internal_6a142f5d6c7aedc0b1b9c5eb9801239ad6e2f777881a9f92265ac32f65e81c2e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9aef28c59ae42270a24b2efc993384a4f6bf046995015926000ff24bfa7d215a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9aef28c59ae42270a24b2efc993384a4f6bf046995015926000ff24bfa7d215a->enter($__internal_9aef28c59ae42270a24b2efc993384a4f6bf046995015926000ff24bfa7d215a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_545fcfe62c414ad71e84c5c521530ba81e7b00501d259856dfdef0b0ab2adfe3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_545fcfe62c414ad71e84c5c521530ba81e7b00501d259856dfdef0b0ab2adfe3->enter($__internal_545fcfe62c414ad71e84c5c521530ba81e7b00501d259856dfdef0b0ab2adfe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_545fcfe62c414ad71e84c5c521530ba81e7b00501d259856dfdef0b0ab2adfe3->leave($__internal_545fcfe62c414ad71e84c5c521530ba81e7b00501d259856dfdef0b0ab2adfe3_prof);

        
        $__internal_9aef28c59ae42270a24b2efc993384a4f6bf046995015926000ff24bfa7d215a->leave($__internal_9aef28c59ae42270a24b2efc993384a4f6bf046995015926000ff24bfa7d215a_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_5eeb0ada0f9ff76c7679c8131d7f8891b9b6501b8b69d5148936d0651e325438 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5eeb0ada0f9ff76c7679c8131d7f8891b9b6501b8b69d5148936d0651e325438->enter($__internal_5eeb0ada0f9ff76c7679c8131d7f8891b9b6501b8b69d5148936d0651e325438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d1ff026caa40641aa55a7ec4d079e97b63b6a9e987c13d52902bad8e83fe3139 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1ff026caa40641aa55a7ec4d079e97b63b6a9e987c13d52902bad8e83fe3139->enter($__internal_d1ff026caa40641aa55a7ec4d079e97b63b6a9e987c13d52902bad8e83fe3139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d1ff026caa40641aa55a7ec4d079e97b63b6a9e987c13d52902bad8e83fe3139->leave($__internal_d1ff026caa40641aa55a7ec4d079e97b63b6a9e987c13d52902bad8e83fe3139_prof);

        
        $__internal_5eeb0ada0f9ff76c7679c8131d7f8891b9b6501b8b69d5148936d0651e325438->leave($__internal_5eeb0ada0f9ff76c7679c8131d7f8891b9b6501b8b69d5148936d0651e325438_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_d5f7c01c5330bbd1f8a65f696cf125784c6105c97cb6042b21277df8763c3ded = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5f7c01c5330bbd1f8a65f696cf125784c6105c97cb6042b21277df8763c3ded->enter($__internal_d5f7c01c5330bbd1f8a65f696cf125784c6105c97cb6042b21277df8763c3ded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_767abcd442ea1ed0b2436ad82428037a286f936a622f5cb9c73f17ec49a7ba89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_767abcd442ea1ed0b2436ad82428037a286f936a622f5cb9c73f17ec49a7ba89->enter($__internal_767abcd442ea1ed0b2436ad82428037a286f936a622f5cb9c73f17ec49a7ba89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_767abcd442ea1ed0b2436ad82428037a286f936a622f5cb9c73f17ec49a7ba89->leave($__internal_767abcd442ea1ed0b2436ad82428037a286f936a622f5cb9c73f17ec49a7ba89_prof);

        
        $__internal_d5f7c01c5330bbd1f8a65f696cf125784c6105c97cb6042b21277df8763c3ded->leave($__internal_d5f7c01c5330bbd1f8a65f696cf125784c6105c97cb6042b21277df8763c3ded_prof);

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
