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
        $__internal_a225986f6c5a99b15cbb04f6fcc4245d04b43af3c3dd01a068c5097083a28c54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a225986f6c5a99b15cbb04f6fcc4245d04b43af3c3dd01a068c5097083a28c54->enter($__internal_a225986f6c5a99b15cbb04f6fcc4245d04b43af3c3dd01a068c5097083a28c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_3cd7f03346e584db27843047a3f40da3ea2761c92ab5c38b8ab45f28c92c3951 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cd7f03346e584db27843047a3f40da3ea2761c92ab5c38b8ab45f28c92c3951->enter($__internal_3cd7f03346e584db27843047a3f40da3ea2761c92ab5c38b8ab45f28c92c3951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a225986f6c5a99b15cbb04f6fcc4245d04b43af3c3dd01a068c5097083a28c54->leave($__internal_a225986f6c5a99b15cbb04f6fcc4245d04b43af3c3dd01a068c5097083a28c54_prof);

        
        $__internal_3cd7f03346e584db27843047a3f40da3ea2761c92ab5c38b8ab45f28c92c3951->leave($__internal_3cd7f03346e584db27843047a3f40da3ea2761c92ab5c38b8ab45f28c92c3951_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_006dac0d534e3f2eb5c621f60917c8aa662b561310930557a531628c60beb586 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_006dac0d534e3f2eb5c621f60917c8aa662b561310930557a531628c60beb586->enter($__internal_006dac0d534e3f2eb5c621f60917c8aa662b561310930557a531628c60beb586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e0890ffc6b07088777a584c36fab2f45969e7b07fe75ed3eb98ace1b2641cce4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0890ffc6b07088777a584c36fab2f45969e7b07fe75ed3eb98ace1b2641cce4->enter($__internal_e0890ffc6b07088777a584c36fab2f45969e7b07fe75ed3eb98ace1b2641cce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_e0890ffc6b07088777a584c36fab2f45969e7b07fe75ed3eb98ace1b2641cce4->leave($__internal_e0890ffc6b07088777a584c36fab2f45969e7b07fe75ed3eb98ace1b2641cce4_prof);

        
        $__internal_006dac0d534e3f2eb5c621f60917c8aa662b561310930557a531628c60beb586->leave($__internal_006dac0d534e3f2eb5c621f60917c8aa662b561310930557a531628c60beb586_prof);

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
