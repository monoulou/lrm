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
        $__internal_8f384e8900e59a39aa291a2dd7aca977b2400f73a64232a61881ef45bd8f8ba2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f384e8900e59a39aa291a2dd7aca977b2400f73a64232a61881ef45bd8f8ba2->enter($__internal_8f384e8900e59a39aa291a2dd7aca977b2400f73a64232a61881ef45bd8f8ba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_4c0139890e370ac18fffaf4a5d9bc8d56fbf82ac10b9118c2a331579e9089418 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c0139890e370ac18fffaf4a5d9bc8d56fbf82ac10b9118c2a331579e9089418->enter($__internal_4c0139890e370ac18fffaf4a5d9bc8d56fbf82ac10b9118c2a331579e9089418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f384e8900e59a39aa291a2dd7aca977b2400f73a64232a61881ef45bd8f8ba2->leave($__internal_8f384e8900e59a39aa291a2dd7aca977b2400f73a64232a61881ef45bd8f8ba2_prof);

        
        $__internal_4c0139890e370ac18fffaf4a5d9bc8d56fbf82ac10b9118c2a331579e9089418->leave($__internal_4c0139890e370ac18fffaf4a5d9bc8d56fbf82ac10b9118c2a331579e9089418_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4bd9dd38ecc3e086562eb4599c768812f3fad0f34175d57d359030524ee41e88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bd9dd38ecc3e086562eb4599c768812f3fad0f34175d57d359030524ee41e88->enter($__internal_4bd9dd38ecc3e086562eb4599c768812f3fad0f34175d57d359030524ee41e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1c81fe6fcf2e2aad7eb307a333801d6a0fbd8ec03a4aa9843a834a8c5fe17bd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c81fe6fcf2e2aad7eb307a333801d6a0fbd8ec03a4aa9843a834a8c5fe17bd9->enter($__internal_1c81fe6fcf2e2aad7eb307a333801d6a0fbd8ec03a4aa9843a834a8c5fe17bd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_1c81fe6fcf2e2aad7eb307a333801d6a0fbd8ec03a4aa9843a834a8c5fe17bd9->leave($__internal_1c81fe6fcf2e2aad7eb307a333801d6a0fbd8ec03a4aa9843a834a8c5fe17bd9_prof);

        
        $__internal_4bd9dd38ecc3e086562eb4599c768812f3fad0f34175d57d359030524ee41e88->leave($__internal_4bd9dd38ecc3e086562eb4599c768812f3fad0f34175d57d359030524ee41e88_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_660d37aead3f8fa46f880307ebae7100d15d312800d9e10d03db17e42d1b9c6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_660d37aead3f8fa46f880307ebae7100d15d312800d9e10d03db17e42d1b9c6d->enter($__internal_660d37aead3f8fa46f880307ebae7100d15d312800d9e10d03db17e42d1b9c6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0c626b7c2caeb677f43826ccc9a77717b5ab91765b6e1e820ab7b805ba119230 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c626b7c2caeb677f43826ccc9a77717b5ab91765b6e1e820ab7b805ba119230->enter($__internal_0c626b7c2caeb677f43826ccc9a77717b5ab91765b6e1e820ab7b805ba119230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0c626b7c2caeb677f43826ccc9a77717b5ab91765b6e1e820ab7b805ba119230->leave($__internal_0c626b7c2caeb677f43826ccc9a77717b5ab91765b6e1e820ab7b805ba119230_prof);

        
        $__internal_660d37aead3f8fa46f880307ebae7100d15d312800d9e10d03db17e42d1b9c6d->leave($__internal_660d37aead3f8fa46f880307ebae7100d15d312800d9e10d03db17e42d1b9c6d_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f657fbbbf090b988bcdb6c6036333daec8e090c26763c9cb0ccbf9c1b06ef38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f657fbbbf090b988bcdb6c6036333daec8e090c26763c9cb0ccbf9c1b06ef38->enter($__internal_0f657fbbbf090b988bcdb6c6036333daec8e090c26763c9cb0ccbf9c1b06ef38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_26004c62d07e24711aae1b4762410b8442dfec36b1431aec1434678051ee7108 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26004c62d07e24711aae1b4762410b8442dfec36b1431aec1434678051ee7108->enter($__internal_26004c62d07e24711aae1b4762410b8442dfec36b1431aec1434678051ee7108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_26004c62d07e24711aae1b4762410b8442dfec36b1431aec1434678051ee7108->leave($__internal_26004c62d07e24711aae1b4762410b8442dfec36b1431aec1434678051ee7108_prof);

        
        $__internal_0f657fbbbf090b988bcdb6c6036333daec8e090c26763c9cb0ccbf9c1b06ef38->leave($__internal_0f657fbbbf090b988bcdb6c6036333daec8e090c26763c9cb0ccbf9c1b06ef38_prof);

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
