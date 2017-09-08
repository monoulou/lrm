<?php

/* :client:new.html.twig */
class __TwigTemplate_104d39ac1720f06ee993a33af69b78a57d05b3379f97ec9f05412bf2a90ac70b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":client:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_952358eeacd6ecbbc8a5e9e5d739bd1d27922e70ec16797da28bf9621c795ffe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_952358eeacd6ecbbc8a5e9e5d739bd1d27922e70ec16797da28bf9621c795ffe->enter($__internal_952358eeacd6ecbbc8a5e9e5d739bd1d27922e70ec16797da28bf9621c795ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":client:new.html.twig"));

        $__internal_3b9146d943908ef22cc2968c01ae413fc838960a9c8b645389c560ee68949bda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b9146d943908ef22cc2968c01ae413fc838960a9c8b645389c560ee68949bda->enter($__internal_3b9146d943908ef22cc2968c01ae413fc838960a9c8b645389c560ee68949bda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":client:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_952358eeacd6ecbbc8a5e9e5d739bd1d27922e70ec16797da28bf9621c795ffe->leave($__internal_952358eeacd6ecbbc8a5e9e5d739bd1d27922e70ec16797da28bf9621c795ffe_prof);

        
        $__internal_3b9146d943908ef22cc2968c01ae413fc838960a9c8b645389c560ee68949bda->leave($__internal_3b9146d943908ef22cc2968c01ae413fc838960a9c8b645389c560ee68949bda_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dd4d6aea04f6e95683aa0241ce149dd5f686ca59cf94d8bd1ee6a2a9ef735c75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd4d6aea04f6e95683aa0241ce149dd5f686ca59cf94d8bd1ee6a2a9ef735c75->enter($__internal_dd4d6aea04f6e95683aa0241ce149dd5f686ca59cf94d8bd1ee6a2a9ef735c75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_256c9cd699577f4b8e3a8b7740846fe7dd347d6823ab67bb8f74f3a266b31b8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_256c9cd699577f4b8e3a8b7740846fe7dd347d6823ab67bb8f74f3a266b31b8c->enter($__internal_256c9cd699577f4b8e3a8b7740846fe7dd347d6823ab67bb8f74f3a266b31b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Client creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_client_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_256c9cd699577f4b8e3a8b7740846fe7dd347d6823ab67bb8f74f3a266b31b8c->leave($__internal_256c9cd699577f4b8e3a8b7740846fe7dd347d6823ab67bb8f74f3a266b31b8c_prof);

        
        $__internal_dd4d6aea04f6e95683aa0241ce149dd5f686ca59cf94d8bd1ee6a2a9ef735c75->leave($__internal_dd4d6aea04f6e95683aa0241ce149dd5f686ca59cf94d8bd1ee6a2a9ef735c75_prof);

    }

    public function getTemplateName()
    {
        return ":client:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Client creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('admin_client_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":client:new.html.twig", "C:\\wamp64\\www\\ligne_rh\\app/Resources\\views/client/new.html.twig");
    }
}
