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
        $__internal_1f685045a0923b3bf3a6cdcab22704e7728b4bb9cbd2c35343684f21d29587dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f685045a0923b3bf3a6cdcab22704e7728b4bb9cbd2c35343684f21d29587dd->enter($__internal_1f685045a0923b3bf3a6cdcab22704e7728b4bb9cbd2c35343684f21d29587dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_21b9b22e8eb7578b45c9a60f658a329f9d4ef62b52e88d3e2c81f29f3eb87b05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21b9b22e8eb7578b45c9a60f658a329f9d4ef62b52e88d3e2c81f29f3eb87b05->enter($__internal_21b9b22e8eb7578b45c9a60f658a329f9d4ef62b52e88d3e2c81f29f3eb87b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f685045a0923b3bf3a6cdcab22704e7728b4bb9cbd2c35343684f21d29587dd->leave($__internal_1f685045a0923b3bf3a6cdcab22704e7728b4bb9cbd2c35343684f21d29587dd_prof);

        
        $__internal_21b9b22e8eb7578b45c9a60f658a329f9d4ef62b52e88d3e2c81f29f3eb87b05->leave($__internal_21b9b22e8eb7578b45c9a60f658a329f9d4ef62b52e88d3e2c81f29f3eb87b05_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_417a1f8ed3ba41ccb611cdcb7d5210837d18eca7d156993317b8b92310de89f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_417a1f8ed3ba41ccb611cdcb7d5210837d18eca7d156993317b8b92310de89f5->enter($__internal_417a1f8ed3ba41ccb611cdcb7d5210837d18eca7d156993317b8b92310de89f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5098b97230e3d748af2547686e1c4c06ef31ab088bb5a1c0f442f024302f3b6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5098b97230e3d748af2547686e1c4c06ef31ab088bb5a1c0f442f024302f3b6f->enter($__internal_5098b97230e3d748af2547686e1c4c06ef31ab088bb5a1c0f442f024302f3b6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_5098b97230e3d748af2547686e1c4c06ef31ab088bb5a1c0f442f024302f3b6f->leave($__internal_5098b97230e3d748af2547686e1c4c06ef31ab088bb5a1c0f442f024302f3b6f_prof);

        
        $__internal_417a1f8ed3ba41ccb611cdcb7d5210837d18eca7d156993317b8b92310de89f5->leave($__internal_417a1f8ed3ba41ccb611cdcb7d5210837d18eca7d156993317b8b92310de89f5_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_33cdc78d6b0e9a14367958e81a2c4388eea86a12fbdab868b0645263483eefbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33cdc78d6b0e9a14367958e81a2c4388eea86a12fbdab868b0645263483eefbe->enter($__internal_33cdc78d6b0e9a14367958e81a2c4388eea86a12fbdab868b0645263483eefbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fe580fbdcc483778ab7c28ddd857d9c219b37754fd5e72f4c399a9d84b9407c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe580fbdcc483778ab7c28ddd857d9c219b37754fd5e72f4c399a9d84b9407c5->enter($__internal_fe580fbdcc483778ab7c28ddd857d9c219b37754fd5e72f4c399a9d84b9407c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fe580fbdcc483778ab7c28ddd857d9c219b37754fd5e72f4c399a9d84b9407c5->leave($__internal_fe580fbdcc483778ab7c28ddd857d9c219b37754fd5e72f4c399a9d84b9407c5_prof);

        
        $__internal_33cdc78d6b0e9a14367958e81a2c4388eea86a12fbdab868b0645263483eefbe->leave($__internal_33cdc78d6b0e9a14367958e81a2c4388eea86a12fbdab868b0645263483eefbe_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_d6904ebaad7a552503d5ca949d0fe8df7190586b1bd8c8183b2153f8a29732ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6904ebaad7a552503d5ca949d0fe8df7190586b1bd8c8183b2153f8a29732ab->enter($__internal_d6904ebaad7a552503d5ca949d0fe8df7190586b1bd8c8183b2153f8a29732ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e99445bae46493f6756374ac2c9c5b7ff769d059453376f10da2e15d3a94d31a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e99445bae46493f6756374ac2c9c5b7ff769d059453376f10da2e15d3a94d31a->enter($__internal_e99445bae46493f6756374ac2c9c5b7ff769d059453376f10da2e15d3a94d31a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_e99445bae46493f6756374ac2c9c5b7ff769d059453376f10da2e15d3a94d31a->leave($__internal_e99445bae46493f6756374ac2c9c5b7ff769d059453376f10da2e15d3a94d31a_prof);

        
        $__internal_d6904ebaad7a552503d5ca949d0fe8df7190586b1bd8c8183b2153f8a29732ab->leave($__internal_d6904ebaad7a552503d5ca949d0fe8df7190586b1bd8c8183b2153f8a29732ab_prof);

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
