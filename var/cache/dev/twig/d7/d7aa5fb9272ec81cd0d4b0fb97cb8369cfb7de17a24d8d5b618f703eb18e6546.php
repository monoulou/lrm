<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_9d865cb9db3179548cc9350a0241d30efead5cba5fd1a73f9fd54492979f2768 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_8abecffc51cc452404d12f6c5275c0aacea06be63d7925a94e59455a81f85b73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8abecffc51cc452404d12f6c5275c0aacea06be63d7925a94e59455a81f85b73->enter($__internal_8abecffc51cc452404d12f6c5275c0aacea06be63d7925a94e59455a81f85b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $__internal_00f499f8282891e220e6272df05a6b5e708b10aff56679d96b7c662f6e72f16b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00f499f8282891e220e6272df05a6b5e708b10aff56679d96b7c662f6e72f16b->enter($__internal_00f499f8282891e220e6272df05a6b5e708b10aff56679d96b7c662f6e72f16b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8abecffc51cc452404d12f6c5275c0aacea06be63d7925a94e59455a81f85b73->leave($__internal_8abecffc51cc452404d12f6c5275c0aacea06be63d7925a94e59455a81f85b73_prof);

        
        $__internal_00f499f8282891e220e6272df05a6b5e708b10aff56679d96b7c662f6e72f16b->leave($__internal_00f499f8282891e220e6272df05a6b5e708b10aff56679d96b7c662f6e72f16b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d8849bfa1729e537f7a6f099dbc5105ba9d1acda237ca24a645b98a5319e6404 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8849bfa1729e537f7a6f099dbc5105ba9d1acda237ca24a645b98a5319e6404->enter($__internal_d8849bfa1729e537f7a6f099dbc5105ba9d1acda237ca24a645b98a5319e6404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_44e56d20d38b4295ef2fe7682e904ca1d4a514a2b51a41e0d992725a42a84cfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44e56d20d38b4295ef2fe7682e904ca1d4a514a2b51a41e0d992725a42a84cfc->enter($__internal_44e56d20d38b4295ef2fe7682e904ca1d4a514a2b51a41e0d992725a42a84cfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_44e56d20d38b4295ef2fe7682e904ca1d4a514a2b51a41e0d992725a42a84cfc->leave($__internal_44e56d20d38b4295ef2fe7682e904ca1d4a514a2b51a41e0d992725a42a84cfc_prof);

        
        $__internal_d8849bfa1729e537f7a6f099dbc5105ba9d1acda237ca24a645b98a5319e6404->leave($__internal_d8849bfa1729e537f7a6f099dbc5105ba9d1acda237ca24a645b98a5319e6404_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/new.html.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\new.html.twig");
    }
}
