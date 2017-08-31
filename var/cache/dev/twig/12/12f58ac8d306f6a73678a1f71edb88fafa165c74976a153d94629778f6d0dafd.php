<?php

/* client/edit.html.twig */
class __TwigTemplate_4b3bdea5fcd92963ac2b191483ca7d68d45c333979907b25c3049bc8dc8bb878 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "client/edit.html.twig", 1);
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
        $__internal_f8c11d532366965bc9b8cd3f3f69bf744a531b0f73e2b4f31dcd87c60918702d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8c11d532366965bc9b8cd3f3f69bf744a531b0f73e2b4f31dcd87c60918702d->enter($__internal_f8c11d532366965bc9b8cd3f3f69bf744a531b0f73e2b4f31dcd87c60918702d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/edit.html.twig"));

        $__internal_21736b1dcc8634078aebf9b32086da81efb2d60b5f7bac0ef5e7686db109ca32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21736b1dcc8634078aebf9b32086da81efb2d60b5f7bac0ef5e7686db109ca32->enter($__internal_21736b1dcc8634078aebf9b32086da81efb2d60b5f7bac0ef5e7686db109ca32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8c11d532366965bc9b8cd3f3f69bf744a531b0f73e2b4f31dcd87c60918702d->leave($__internal_f8c11d532366965bc9b8cd3f3f69bf744a531b0f73e2b4f31dcd87c60918702d_prof);

        
        $__internal_21736b1dcc8634078aebf9b32086da81efb2d60b5f7bac0ef5e7686db109ca32->leave($__internal_21736b1dcc8634078aebf9b32086da81efb2d60b5f7bac0ef5e7686db109ca32_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e4e9ed4ff37f7d9a5ef7b7fdfe54ba47c044e7b45d8d264599ee077bd7266fe0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4e9ed4ff37f7d9a5ef7b7fdfe54ba47c044e7b45d8d264599ee077bd7266fe0->enter($__internal_e4e9ed4ff37f7d9a5ef7b7fdfe54ba47c044e7b45d8d264599ee077bd7266fe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c01f624cdb3898059aece68d3731c61174a9036dd8050ec937b3b4e7473e4ee7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c01f624cdb3898059aece68d3731c61174a9036dd8050ec937b3b4e7473e4ee7->enter($__internal_c01f624cdb3898059aece68d3731c61174a9036dd8050ec937b3b4e7473e4ee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c01f624cdb3898059aece68d3731c61174a9036dd8050ec937b3b4e7473e4ee7->leave($__internal_c01f624cdb3898059aece68d3731c61174a9036dd8050ec937b3b4e7473e4ee7_prof);

        
        $__internal_e4e9ed4ff37f7d9a5ef7b7fdfe54ba47c044e7b45d8d264599ee077bd7266fe0->leave($__internal_e4e9ed4ff37f7d9a5ef7b7fdfe54ba47c044e7b45d8d264599ee077bd7266fe0_prof);

    }

    public function getTemplateName()
    {
        return "client/edit.html.twig";
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
", "client/edit.html.twig", "C:\\wamp64\\www\\ligne_rh\\app\\Resources\\views\\client\\edit.html.twig");
    }
}
