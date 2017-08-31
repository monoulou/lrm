<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_385fbc7eef871ead08562761a0c9a0a835554d91c8f75f32d1eecb64b280fddb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_b836ff80892c5a63aa63bcd701e4c6150e7a261b237abab7900f0d37d10cc048 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b836ff80892c5a63aa63bcd701e4c6150e7a261b237abab7900f0d37d10cc048->enter($__internal_b836ff80892c5a63aa63bcd701e4c6150e7a261b237abab7900f0d37d10cc048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_4dbe50f52f8d8f88a94aad6cbcaa25c36e9dd2479bb7806bd23dfdae3232f1d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dbe50f52f8d8f88a94aad6cbcaa25c36e9dd2479bb7806bd23dfdae3232f1d6->enter($__internal_4dbe50f52f8d8f88a94aad6cbcaa25c36e9dd2479bb7806bd23dfdae3232f1d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b836ff80892c5a63aa63bcd701e4c6150e7a261b237abab7900f0d37d10cc048->leave($__internal_b836ff80892c5a63aa63bcd701e4c6150e7a261b237abab7900f0d37d10cc048_prof);

        
        $__internal_4dbe50f52f8d8f88a94aad6cbcaa25c36e9dd2479bb7806bd23dfdae3232f1d6->leave($__internal_4dbe50f52f8d8f88a94aad6cbcaa25c36e9dd2479bb7806bd23dfdae3232f1d6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_64872edb412af1f0a2c5e9ca9dde0e077f6f566eb5b8cc843a86433958a7cc4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64872edb412af1f0a2c5e9ca9dde0e077f6f566eb5b8cc843a86433958a7cc4b->enter($__internal_64872edb412af1f0a2c5e9ca9dde0e077f6f566eb5b8cc843a86433958a7cc4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b076d36eb6b9858399f00be8385bfef655fa80c062ab26d47aa6c2ae185bf443 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b076d36eb6b9858399f00be8385bfef655fa80c062ab26d47aa6c2ae185bf443->enter($__internal_b076d36eb6b9858399f00be8385bfef655fa80c062ab26d47aa6c2ae185bf443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_b076d36eb6b9858399f00be8385bfef655fa80c062ab26d47aa6c2ae185bf443->leave($__internal_b076d36eb6b9858399f00be8385bfef655fa80c062ab26d47aa6c2ae185bf443_prof);

        
        $__internal_64872edb412af1f0a2c5e9ca9dde0e077f6f566eb5b8cc843a86433958a7cc4b->leave($__internal_64872edb412af1f0a2c5e9ca9dde0e077f6f566eb5b8cc843a86433958a7cc4b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\friendsofsymfony\\user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
