<?php

/* client/new.html.twig */
class __TwigTemplate_0bd334b9292fc3ce5b8b984c0b433e41aa635c8f7230888c1d498dd7f627f15a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "client/new.html.twig", 1);
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
        $__internal_bf508a110632ac6181d0e8099cf19eb89791324d23100bcc59e45956778e9672 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf508a110632ac6181d0e8099cf19eb89791324d23100bcc59e45956778e9672->enter($__internal_bf508a110632ac6181d0e8099cf19eb89791324d23100bcc59e45956778e9672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/new.html.twig"));

        $__internal_d9ead9818ed3db2314137b6672e91f442dc750f754315a14b2fcdfcd70f67d5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9ead9818ed3db2314137b6672e91f442dc750f754315a14b2fcdfcd70f67d5c->enter($__internal_d9ead9818ed3db2314137b6672e91f442dc750f754315a14b2fcdfcd70f67d5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf508a110632ac6181d0e8099cf19eb89791324d23100bcc59e45956778e9672->leave($__internal_bf508a110632ac6181d0e8099cf19eb89791324d23100bcc59e45956778e9672_prof);

        
        $__internal_d9ead9818ed3db2314137b6672e91f442dc750f754315a14b2fcdfcd70f67d5c->leave($__internal_d9ead9818ed3db2314137b6672e91f442dc750f754315a14b2fcdfcd70f67d5c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d13436095f656a5a4466c71d8110fe1ad79dab6fb36f456f695a182eb812d7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d13436095f656a5a4466c71d8110fe1ad79dab6fb36f456f695a182eb812d7b->enter($__internal_4d13436095f656a5a4466c71d8110fe1ad79dab6fb36f456f695a182eb812d7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7b3eb2ca17a47d62637149abc7c28baeebeee643e6baa1c0d0646f2c6015a898 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b3eb2ca17a47d62637149abc7c28baeebeee643e6baa1c0d0646f2c6015a898->enter($__internal_7b3eb2ca17a47d62637149abc7c28baeebeee643e6baa1c0d0646f2c6015a898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7b3eb2ca17a47d62637149abc7c28baeebeee643e6baa1c0d0646f2c6015a898->leave($__internal_7b3eb2ca17a47d62637149abc7c28baeebeee643e6baa1c0d0646f2c6015a898_prof);

        
        $__internal_4d13436095f656a5a4466c71d8110fe1ad79dab6fb36f456f695a182eb812d7b->leave($__internal_4d13436095f656a5a4466c71d8110fe1ad79dab6fb36f456f695a182eb812d7b_prof);

    }

    public function getTemplateName()
    {
        return "client/new.html.twig";
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
", "client/new.html.twig", "C:\\wamp64\\www\\ligne_rh\\app\\Resources\\views\\client\\new.html.twig");
    }
}
