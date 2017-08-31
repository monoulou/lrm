<?php

/* :client:edit.html.twig */
class __TwigTemplate_22937556a3e0db39abb1f377380683e484d90e3b100cc3a4f23064a188bdbebf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":client:edit.html.twig", 1);
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
        $__internal_45fb70579aeed3ea010540178e1b407be074cb99faadb0202a39e12c56a25e3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45fb70579aeed3ea010540178e1b407be074cb99faadb0202a39e12c56a25e3f->enter($__internal_45fb70579aeed3ea010540178e1b407be074cb99faadb0202a39e12c56a25e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":client:edit.html.twig"));

        $__internal_6bd115962d4bfa0cb4259f642cbd9ad384393248603a71d1bc68b2f122c8db1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bd115962d4bfa0cb4259f642cbd9ad384393248603a71d1bc68b2f122c8db1a->enter($__internal_6bd115962d4bfa0cb4259f642cbd9ad384393248603a71d1bc68b2f122c8db1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":client:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45fb70579aeed3ea010540178e1b407be074cb99faadb0202a39e12c56a25e3f->leave($__internal_45fb70579aeed3ea010540178e1b407be074cb99faadb0202a39e12c56a25e3f_prof);

        
        $__internal_6bd115962d4bfa0cb4259f642cbd9ad384393248603a71d1bc68b2f122c8db1a->leave($__internal_6bd115962d4bfa0cb4259f642cbd9ad384393248603a71d1bc68b2f122c8db1a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe122d76a94c5389c26725f5e287dd55ca758267305c9a6c371769a868fb49b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe122d76a94c5389c26725f5e287dd55ca758267305c9a6c371769a868fb49b6->enter($__internal_fe122d76a94c5389c26725f5e287dd55ca758267305c9a6c371769a868fb49b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ca69ec29e776a11c1d0808c79b23f5280ed52663251366277209e51669401a6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca69ec29e776a11c1d0808c79b23f5280ed52663251366277209e51669401a6c->enter($__internal_ca69ec29e776a11c1d0808c79b23f5280ed52663251366277209e51669401a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Client edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_client_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_ca69ec29e776a11c1d0808c79b23f5280ed52663251366277209e51669401a6c->leave($__internal_ca69ec29e776a11c1d0808c79b23f5280ed52663251366277209e51669401a6c_prof);

        
        $__internal_fe122d76a94c5389c26725f5e287dd55ca758267305c9a6c371769a868fb49b6->leave($__internal_fe122d76a94c5389c26725f5e287dd55ca758267305c9a6c371769a868fb49b6_prof);

    }

    public function getTemplateName()
    {
        return ":client:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Client edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('admin_client_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":client:edit.html.twig", "C:\\wamp64\\www\\ligne_rh\\app/Resources\\views/client/edit.html.twig");
    }
}
