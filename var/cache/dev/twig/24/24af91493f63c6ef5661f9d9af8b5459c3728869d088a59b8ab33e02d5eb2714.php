<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_3d8f392525451f483454b58017a3fbf7c8f6d9e3090330ffc4983ab55f2ff73d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_8dcd315473a5f001f9e6fe2144c3a9b3dbd2d748572986212ca250a1f8439fea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dcd315473a5f001f9e6fe2144c3a9b3dbd2d748572986212ca250a1f8439fea->enter($__internal_8dcd315473a5f001f9e6fe2144c3a9b3dbd2d748572986212ca250a1f8439fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_dc86380b1bbf9a51607eb50adf9b0b136e5ea309a66faf691bce1b28558067d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc86380b1bbf9a51607eb50adf9b0b136e5ea309a66faf691bce1b28558067d5->enter($__internal_dc86380b1bbf9a51607eb50adf9b0b136e5ea309a66faf691bce1b28558067d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8dcd315473a5f001f9e6fe2144c3a9b3dbd2d748572986212ca250a1f8439fea->leave($__internal_8dcd315473a5f001f9e6fe2144c3a9b3dbd2d748572986212ca250a1f8439fea_prof);

        
        $__internal_dc86380b1bbf9a51607eb50adf9b0b136e5ea309a66faf691bce1b28558067d5->leave($__internal_dc86380b1bbf9a51607eb50adf9b0b136e5ea309a66faf691bce1b28558067d5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0a6df23d29493897e907ee7fccbf5d9136746429744adb4ea4c70b11d8d314ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a6df23d29493897e907ee7fccbf5d9136746429744adb4ea4c70b11d8d314ea->enter($__internal_0a6df23d29493897e907ee7fccbf5d9136746429744adb4ea4c70b11d8d314ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7ebff712148e983a0bf7f419633a8ea42c4f5328175bbfbf482c072c9c63a8b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ebff712148e983a0bf7f419633a8ea42c4f5328175bbfbf482c072c9c63a8b3->enter($__internal_7ebff712148e983a0bf7f419633a8ea42c4f5328175bbfbf482c072c9c63a8b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_7ebff712148e983a0bf7f419633a8ea42c4f5328175bbfbf482c072c9c63a8b3->leave($__internal_7ebff712148e983a0bf7f419633a8ea42c4f5328175bbfbf482c072c9c63a8b3_prof);

        
        $__internal_0a6df23d29493897e907ee7fccbf5d9136746429744adb4ea4c70b11d8d314ea->leave($__internal_0a6df23d29493897e907ee7fccbf5d9136746429744adb4ea4c70b11d8d314ea_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_aa245d605668e8d6a1d3843c3e4813cb1cc61e3e255a79af8977d1ffe8e290a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa245d605668e8d6a1d3843c3e4813cb1cc61e3e255a79af8977d1ffe8e290a3->enter($__internal_aa245d605668e8d6a1d3843c3e4813cb1cc61e3e255a79af8977d1ffe8e290a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bb644c55f55d8964a36fa0199f5cfa1f9ed1b0c412cee5eb79a8a651eccd0188 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb644c55f55d8964a36fa0199f5cfa1f9ed1b0c412cee5eb79a8a651eccd0188->enter($__internal_bb644c55f55d8964a36fa0199f5cfa1f9ed1b0c412cee5eb79a8a651eccd0188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_bb644c55f55d8964a36fa0199f5cfa1f9ed1b0c412cee5eb79a8a651eccd0188->leave($__internal_bb644c55f55d8964a36fa0199f5cfa1f9ed1b0c412cee5eb79a8a651eccd0188_prof);

        
        $__internal_aa245d605668e8d6a1d3843c3e4813cb1cc61e3e255a79af8977d1ffe8e290a3->leave($__internal_aa245d605668e8d6a1d3843c3e4813cb1cc61e3e255a79af8977d1ffe8e290a3_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_80908829b2eb66e0f7819704240e8242c1cffce4395addd1cbe6535b9a15c4a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80908829b2eb66e0f7819704240e8242c1cffce4395addd1cbe6535b9a15c4a1->enter($__internal_80908829b2eb66e0f7819704240e8242c1cffce4395addd1cbe6535b9a15c4a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6ea15f407a79728993e165b2ca1b9010b199d575733030cedd19eb79f6bdd4f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ea15f407a79728993e165b2ca1b9010b199d575733030cedd19eb79f6bdd4f8->enter($__internal_6ea15f407a79728993e165b2ca1b9010b199d575733030cedd19eb79f6bdd4f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_6ea15f407a79728993e165b2ca1b9010b199d575733030cedd19eb79f6bdd4f8->leave($__internal_6ea15f407a79728993e165b2ca1b9010b199d575733030cedd19eb79f6bdd4f8_prof);

        
        $__internal_80908829b2eb66e0f7819704240e8242c1cffce4395addd1cbe6535b9a15c4a1->leave($__internal_80908829b2eb66e0f7819704240e8242c1cffce4395addd1cbe6535b9a15c4a1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
