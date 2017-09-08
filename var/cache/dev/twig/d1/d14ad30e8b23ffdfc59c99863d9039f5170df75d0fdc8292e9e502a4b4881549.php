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
        $__internal_0d4d8f0a8eeb241a54c76d9151892b1cdf4d9c60f08a564ab2eedb657bc8c07d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d4d8f0a8eeb241a54c76d9151892b1cdf4d9c60f08a564ab2eedb657bc8c07d->enter($__internal_0d4d8f0a8eeb241a54c76d9151892b1cdf4d9c60f08a564ab2eedb657bc8c07d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_eba968d367ea5cc9b5b32d14f9af1380149a87e8293749a7edc9d292eac1cf5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eba968d367ea5cc9b5b32d14f9af1380149a87e8293749a7edc9d292eac1cf5d->enter($__internal_eba968d367ea5cc9b5b32d14f9af1380149a87e8293749a7edc9d292eac1cf5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d4d8f0a8eeb241a54c76d9151892b1cdf4d9c60f08a564ab2eedb657bc8c07d->leave($__internal_0d4d8f0a8eeb241a54c76d9151892b1cdf4d9c60f08a564ab2eedb657bc8c07d_prof);

        
        $__internal_eba968d367ea5cc9b5b32d14f9af1380149a87e8293749a7edc9d292eac1cf5d->leave($__internal_eba968d367ea5cc9b5b32d14f9af1380149a87e8293749a7edc9d292eac1cf5d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c1b2f96ca2d708d4dec42fe38c93ace29d0d44153a55ee7d2400f83d9f147745 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1b2f96ca2d708d4dec42fe38c93ace29d0d44153a55ee7d2400f83d9f147745->enter($__internal_c1b2f96ca2d708d4dec42fe38c93ace29d0d44153a55ee7d2400f83d9f147745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_76b6c7d2b31bfae677a6ad89fa8a5c53a308102a779917b4a2d08a3e4499e0dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76b6c7d2b31bfae677a6ad89fa8a5c53a308102a779917b4a2d08a3e4499e0dc->enter($__internal_76b6c7d2b31bfae677a6ad89fa8a5c53a308102a779917b4a2d08a3e4499e0dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_76b6c7d2b31bfae677a6ad89fa8a5c53a308102a779917b4a2d08a3e4499e0dc->leave($__internal_76b6c7d2b31bfae677a6ad89fa8a5c53a308102a779917b4a2d08a3e4499e0dc_prof);

        
        $__internal_c1b2f96ca2d708d4dec42fe38c93ace29d0d44153a55ee7d2400f83d9f147745->leave($__internal_c1b2f96ca2d708d4dec42fe38c93ace29d0d44153a55ee7d2400f83d9f147745_prof);

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
