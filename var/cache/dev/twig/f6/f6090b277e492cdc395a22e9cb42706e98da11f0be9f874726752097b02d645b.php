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
        $__internal_5c32b0b72ff79e1465a1c5c35bbf6228231f9e433aa255a962c71bb4903e0b67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c32b0b72ff79e1465a1c5c35bbf6228231f9e433aa255a962c71bb4903e0b67->enter($__internal_5c32b0b72ff79e1465a1c5c35bbf6228231f9e433aa255a962c71bb4903e0b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":client:new.html.twig"));

        $__internal_8c6ee4e013797fadb26fb8c2b9f73e01c405344767f845dc04700c6b87f2dea5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c6ee4e013797fadb26fb8c2b9f73e01c405344767f845dc04700c6b87f2dea5->enter($__internal_8c6ee4e013797fadb26fb8c2b9f73e01c405344767f845dc04700c6b87f2dea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":client:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c32b0b72ff79e1465a1c5c35bbf6228231f9e433aa255a962c71bb4903e0b67->leave($__internal_5c32b0b72ff79e1465a1c5c35bbf6228231f9e433aa255a962c71bb4903e0b67_prof);

        
        $__internal_8c6ee4e013797fadb26fb8c2b9f73e01c405344767f845dc04700c6b87f2dea5->leave($__internal_8c6ee4e013797fadb26fb8c2b9f73e01c405344767f845dc04700c6b87f2dea5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_44c20326565b592eb1b0b768aebd5b3b39ef93376ec218e0bfa842605793345e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44c20326565b592eb1b0b768aebd5b3b39ef93376ec218e0bfa842605793345e->enter($__internal_44c20326565b592eb1b0b768aebd5b3b39ef93376ec218e0bfa842605793345e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e4881084e56b5075cda95afdb7af790ba5428890e84bfea9ffabdbd589a8e5f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4881084e56b5075cda95afdb7af790ba5428890e84bfea9ffabdbd589a8e5f5->enter($__internal_e4881084e56b5075cda95afdb7af790ba5428890e84bfea9ffabdbd589a8e5f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e4881084e56b5075cda95afdb7af790ba5428890e84bfea9ffabdbd589a8e5f5->leave($__internal_e4881084e56b5075cda95afdb7af790ba5428890e84bfea9ffabdbd589a8e5f5_prof);

        
        $__internal_44c20326565b592eb1b0b768aebd5b3b39ef93376ec218e0bfa842605793345e->leave($__internal_44c20326565b592eb1b0b768aebd5b3b39ef93376ec218e0bfa842605793345e_prof);

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
