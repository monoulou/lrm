<?php

/* @MAUser/Registration/register.html.twig */
class __TwigTemplate_21ff2a5b111b0df13c9c1a294c3b5b7c034dcf2c2314d5d1de9f5769152173a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@MAUser/Registration/register.html.twig", 1);
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
        $__internal_770a80fe2b3af99ad8b00795d36e9b951968f20ee7796aa367241110a694f350 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_770a80fe2b3af99ad8b00795d36e9b951968f20ee7796aa367241110a694f350->enter($__internal_770a80fe2b3af99ad8b00795d36e9b951968f20ee7796aa367241110a694f350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MAUser/Registration/register.html.twig"));

        $__internal_e1e7c98fe588daa006704b0f29850da3826d3868941ce4ce9b0430e7531bf813 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1e7c98fe588daa006704b0f29850da3826d3868941ce4ce9b0430e7531bf813->enter($__internal_e1e7c98fe588daa006704b0f29850da3826d3868941ce4ce9b0430e7531bf813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MAUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_770a80fe2b3af99ad8b00795d36e9b951968f20ee7796aa367241110a694f350->leave($__internal_770a80fe2b3af99ad8b00795d36e9b951968f20ee7796aa367241110a694f350_prof);

        
        $__internal_e1e7c98fe588daa006704b0f29850da3826d3868941ce4ce9b0430e7531bf813->leave($__internal_e1e7c98fe588daa006704b0f29850da3826d3868941ce4ce9b0430e7531bf813_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b58dfa9ae88671396252feaae21dd825fc521850c5a5b0fb16154247e2ebaed3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b58dfa9ae88671396252feaae21dd825fc521850c5a5b0fb16154247e2ebaed3->enter($__internal_b58dfa9ae88671396252feaae21dd825fc521850c5a5b0fb16154247e2ebaed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5efe684a88cabe34003463151e30bfe90c344e63c8f3e408d9e687eb7934b52a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5efe684a88cabe34003463151e30bfe90c344e63c8f3e408d9e687eb7934b52a->enter($__internal_5efe684a88cabe34003463151e30bfe90c344e63c8f3e408d9e687eb7934b52a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@MAUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_5efe684a88cabe34003463151e30bfe90c344e63c8f3e408d9e687eb7934b52a->leave($__internal_5efe684a88cabe34003463151e30bfe90c344e63c8f3e408d9e687eb7934b52a_prof);

        
        $__internal_b58dfa9ae88671396252feaae21dd825fc521850c5a5b0fb16154247e2ebaed3->leave($__internal_b58dfa9ae88671396252feaae21dd825fc521850c5a5b0fb16154247e2ebaed3_prof);

    }

    public function getTemplateName()
    {
        return "@MAUser/Registration/register.html.twig";
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
    {% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}", "@MAUser/Registration/register.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\UserBundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
