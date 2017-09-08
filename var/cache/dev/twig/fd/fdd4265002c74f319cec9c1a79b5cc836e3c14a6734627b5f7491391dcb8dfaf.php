<?php

/* @MAUser/Resetting/reset.html.twig */
class __TwigTemplate_318f9126566ec71d7411730bd736f1d1684265f73bc6134d83a7c77a4453bae9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@MAUser/Resetting/reset.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_22a54046021c08f9696bdb4244d2294b3b9ea34e77710040435d667cccbc300a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22a54046021c08f9696bdb4244d2294b3b9ea34e77710040435d667cccbc300a->enter($__internal_22a54046021c08f9696bdb4244d2294b3b9ea34e77710040435d667cccbc300a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MAUser/Resetting/reset.html.twig"));

        $__internal_8e77590cc70537025a6cb4163587cfb9a8e5b6c74e371dae0ed6e3bbcafa7779 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e77590cc70537025a6cb4163587cfb9a8e5b6c74e371dae0ed6e3bbcafa7779->enter($__internal_8e77590cc70537025a6cb4163587cfb9a8e5b6c74e371dae0ed6e3bbcafa7779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MAUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22a54046021c08f9696bdb4244d2294b3b9ea34e77710040435d667cccbc300a->leave($__internal_22a54046021c08f9696bdb4244d2294b3b9ea34e77710040435d667cccbc300a_prof);

        
        $__internal_8e77590cc70537025a6cb4163587cfb9a8e5b6c74e371dae0ed6e3bbcafa7779->leave($__internal_8e77590cc70537025a6cb4163587cfb9a8e5b6c74e371dae0ed6e3bbcafa7779_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f4d3509ff53bbf2dae9cdad3a50cb1332b685330145288ca1ca525b28bdea605 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4d3509ff53bbf2dae9cdad3a50cb1332b685330145288ca1ca525b28bdea605->enter($__internal_f4d3509ff53bbf2dae9cdad3a50cb1332b685330145288ca1ca525b28bdea605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0c7667bf1c1bd528e0821f9024a528373dcb4bd4b04bf0687dfbef32a04e6b9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c7667bf1c1bd528e0821f9024a528373dcb4bd4b04bf0687dfbef32a04e6b9c->enter($__internal_0c7667bf1c1bd528e0821f9024a528373dcb4bd4b04bf0687dfbef32a04e6b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@MAUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_0c7667bf1c1bd528e0821f9024a528373dcb4bd4b04bf0687dfbef32a04e6b9c->leave($__internal_0c7667bf1c1bd528e0821f9024a528373dcb4bd4b04bf0687dfbef32a04e6b9c_prof);

        
        $__internal_f4d3509ff53bbf2dae9cdad3a50cb1332b685330145288ca1ca525b28bdea605->leave($__internal_f4d3509ff53bbf2dae9cdad3a50cb1332b685330145288ca1ca525b28bdea605_prof);

    }

    public function getTemplateName()
    {
        return "@MAUser/Resetting/reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}", "@MAUser/Resetting/reset.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\UserBundle\\Resources\\views\\Resetting\\reset.html.twig");
    }
}
