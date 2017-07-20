<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_e5e905a08de63d190931a289f4e94f996e70e0bbddea65d49a7866cecbbd0d28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 2);
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
        $__internal_78055ed3c21825a650359222ce67cbb30e6e1678d90c03f37cc25c049876daaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78055ed3c21825a650359222ce67cbb30e6e1678d90c03f37cc25c049876daaf->enter($__internal_78055ed3c21825a650359222ce67cbb30e6e1678d90c03f37cc25c049876daaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_e87e781eacda81be51f5390410373581f02bdf1495652ef8ef74f9cf83e0dde5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e87e781eacda81be51f5390410373581f02bdf1495652ef8ef74f9cf83e0dde5->enter($__internal_e87e781eacda81be51f5390410373581f02bdf1495652ef8ef74f9cf83e0dde5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78055ed3c21825a650359222ce67cbb30e6e1678d90c03f37cc25c049876daaf->leave($__internal_78055ed3c21825a650359222ce67cbb30e6e1678d90c03f37cc25c049876daaf_prof);

        
        $__internal_e87e781eacda81be51f5390410373581f02bdf1495652ef8ef74f9cf83e0dde5->leave($__internal_e87e781eacda81be51f5390410373581f02bdf1495652ef8ef74f9cf83e0dde5_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_20948764bc93aae6f049ddd1cad0a0b51b5c638a4b62ed80089c9ab384aa6815 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20948764bc93aae6f049ddd1cad0a0b51b5c638a4b62ed80089c9ab384aa6815->enter($__internal_20948764bc93aae6f049ddd1cad0a0b51b5c638a4b62ed80089c9ab384aa6815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0c47bb4df42ed7ed2a246a3d812a167f686f84821a1da71c236aa0e0170657b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c47bb4df42ed7ed2a246a3d812a167f686f84821a1da71c236aa0e0170657b7->enter($__internal_0c47bb4df42ed7ed2a246a3d812a167f686f84821a1da71c236aa0e0170657b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_0c47bb4df42ed7ed2a246a3d812a167f686f84821a1da71c236aa0e0170657b7->leave($__internal_0c47bb4df42ed7ed2a246a3d812a167f686f84821a1da71c236aa0e0170657b7_prof);

        
        $__internal_20948764bc93aae6f049ddd1cad0a0b51b5c638a4b62ed80089c9ab384aa6815->leave($__internal_20948764bc93aae6f049ddd1cad0a0b51b5c638a4b62ed80089c9ab384aa6815_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  40 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}", "@FOSUser/Security/login.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\UserBundle\\Resources\\views\\Security\\login.html.twig");
    }
}
