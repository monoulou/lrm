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
        $__internal_0bcb2cfbf78a5e828f4587b060e815e9321ef470a645107ef76351cf41bff446 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bcb2cfbf78a5e828f4587b060e815e9321ef470a645107ef76351cf41bff446->enter($__internal_0bcb2cfbf78a5e828f4587b060e815e9321ef470a645107ef76351cf41bff446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_da2d1ecfff8dd54c81c5bc3a205ed8fe8fdd63f8450278f7c094a8d78942571e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da2d1ecfff8dd54c81c5bc3a205ed8fe8fdd63f8450278f7c094a8d78942571e->enter($__internal_da2d1ecfff8dd54c81c5bc3a205ed8fe8fdd63f8450278f7c094a8d78942571e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0bcb2cfbf78a5e828f4587b060e815e9321ef470a645107ef76351cf41bff446->leave($__internal_0bcb2cfbf78a5e828f4587b060e815e9321ef470a645107ef76351cf41bff446_prof);

        
        $__internal_da2d1ecfff8dd54c81c5bc3a205ed8fe8fdd63f8450278f7c094a8d78942571e->leave($__internal_da2d1ecfff8dd54c81c5bc3a205ed8fe8fdd63f8450278f7c094a8d78942571e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bbd51d8329d6ed39bfa5cb65899a7708b0cb250eb228efb4a14262265a0f0b5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbd51d8329d6ed39bfa5cb65899a7708b0cb250eb228efb4a14262265a0f0b5f->enter($__internal_bbd51d8329d6ed39bfa5cb65899a7708b0cb250eb228efb4a14262265a0f0b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2bda520fe74730cd60f076b039f8371ab4670a337e169a410f3e38379c997ed6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bda520fe74730cd60f076b039f8371ab4670a337e169a410f3e38379c997ed6->enter($__internal_2bda520fe74730cd60f076b039f8371ab4670a337e169a410f3e38379c997ed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_2bda520fe74730cd60f076b039f8371ab4670a337e169a410f3e38379c997ed6->leave($__internal_2bda520fe74730cd60f076b039f8371ab4670a337e169a410f3e38379c997ed6_prof);

        
        $__internal_bbd51d8329d6ed39bfa5cb65899a7708b0cb250eb228efb4a14262265a0f0b5f->leave($__internal_bbd51d8329d6ed39bfa5cb65899a7708b0cb250eb228efb4a14262265a0f0b5f_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_846f312444d058ec809db1118371df4cd57300ef5d747daa162618b031b783b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_846f312444d058ec809db1118371df4cd57300ef5d747daa162618b031b783b5->enter($__internal_846f312444d058ec809db1118371df4cd57300ef5d747daa162618b031b783b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7d878bfda8946683e60177d4d0b881f54f6396ef9e0f6c29c272f883f2aba77a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d878bfda8946683e60177d4d0b881f54f6396ef9e0f6c29c272f883f2aba77a->enter($__internal_7d878bfda8946683e60177d4d0b881f54f6396ef9e0f6c29c272f883f2aba77a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7d878bfda8946683e60177d4d0b881f54f6396ef9e0f6c29c272f883f2aba77a->leave($__internal_7d878bfda8946683e60177d4d0b881f54f6396ef9e0f6c29c272f883f2aba77a_prof);

        
        $__internal_846f312444d058ec809db1118371df4cd57300ef5d747daa162618b031b783b5->leave($__internal_846f312444d058ec809db1118371df4cd57300ef5d747daa162618b031b783b5_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_c29e58784125d0b8deaf1f678d5bb0cca91a041b65b6b1a983041bc47c7cdd90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c29e58784125d0b8deaf1f678d5bb0cca91a041b65b6b1a983041bc47c7cdd90->enter($__internal_c29e58784125d0b8deaf1f678d5bb0cca91a041b65b6b1a983041bc47c7cdd90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_03fbcef6740aa42a26b7f70d74b0e5d0c2a6ee28dae0052927dd5f62fa43c6d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03fbcef6740aa42a26b7f70d74b0e5d0c2a6ee28dae0052927dd5f62fa43c6d7->enter($__internal_03fbcef6740aa42a26b7f70d74b0e5d0c2a6ee28dae0052927dd5f62fa43c6d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_03fbcef6740aa42a26b7f70d74b0e5d0c2a6ee28dae0052927dd5f62fa43c6d7->leave($__internal_03fbcef6740aa42a26b7f70d74b0e5d0c2a6ee28dae0052927dd5f62fa43c6d7_prof);

        
        $__internal_c29e58784125d0b8deaf1f678d5bb0cca91a041b65b6b1a983041bc47c7cdd90->leave($__internal_c29e58784125d0b8deaf1f678d5bb0cca91a041b65b6b1a983041bc47c7cdd90_prof);

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
