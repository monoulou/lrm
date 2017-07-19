<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_5b927e3d92d0af1bbd532f4c04d237f5cf8a7d5c0ecf691597dfb9d7f2c0d2ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_f5fffce79490cf6e97e36eecfdf62dad4d717c9336c7ffd6f23461a626334f26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5fffce79490cf6e97e36eecfdf62dad4d717c9336c7ffd6f23461a626334f26->enter($__internal_f5fffce79490cf6e97e36eecfdf62dad4d717c9336c7ffd6f23461a626334f26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $__internal_03a735809c60f2a5279a594c49d474d6e0d4c9397fa74d750ae3c024847e534f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03a735809c60f2a5279a594c49d474d6e0d4c9397fa74d750ae3c024847e534f->enter($__internal_03a735809c60f2a5279a594c49d474d6e0d4c9397fa74d750ae3c024847e534f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5fffce79490cf6e97e36eecfdf62dad4d717c9336c7ffd6f23461a626334f26->leave($__internal_f5fffce79490cf6e97e36eecfdf62dad4d717c9336c7ffd6f23461a626334f26_prof);

        
        $__internal_03a735809c60f2a5279a594c49d474d6e0d4c9397fa74d750ae3c024847e534f->leave($__internal_03a735809c60f2a5279a594c49d474d6e0d4c9397fa74d750ae3c024847e534f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_07d594645016ce6ae067e6857822d8bf3fec306da0d65be1cf23a49b7370f8e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07d594645016ce6ae067e6857822d8bf3fec306da0d65be1cf23a49b7370f8e2->enter($__internal_07d594645016ce6ae067e6857822d8bf3fec306da0d65be1cf23a49b7370f8e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e35859c4b4a44111e749d0624a190651211a4c1388f0e9882974d715983cd018 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e35859c4b4a44111e749d0624a190651211a4c1388f0e9882974d715983cd018->enter($__internal_e35859c4b4a44111e749d0624a190651211a4c1388f0e9882974d715983cd018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_e35859c4b4a44111e749d0624a190651211a4c1388f0e9882974d715983cd018->leave($__internal_e35859c4b4a44111e749d0624a190651211a4c1388f0e9882974d715983cd018_prof);

        
        $__internal_07d594645016ce6ae067e6857822d8bf3fec306da0d65be1cf23a49b7370f8e2->leave($__internal_07d594645016ce6ae067e6857822d8bf3fec306da0d65be1cf23a49b7370f8e2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
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
", "@FOSUser/ChangePassword/change_password.html.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\ChangePassword\\change_password.html.twig");
    }
}
