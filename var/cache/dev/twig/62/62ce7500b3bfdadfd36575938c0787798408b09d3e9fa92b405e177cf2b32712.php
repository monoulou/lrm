<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_6401da66b0a171a3e5f8a99aeb1524f7695f477071e438c487a6260f2123576f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/check_email.html.twig", 1);
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
        $__internal_6c0c0ae7d1259a9f5c07f575d9b06a9b668d87ca0ee42e137a9c6a6b675976c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c0c0ae7d1259a9f5c07f575d9b06a9b668d87ca0ee42e137a9c6a6b675976c1->enter($__internal_6c0c0ae7d1259a9f5c07f575d9b06a9b668d87ca0ee42e137a9c6a6b675976c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $__internal_be20c26e6a380456c9b92c3d94ab5ac77578889a0522e3e252b74c6b7f21f8c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be20c26e6a380456c9b92c3d94ab5ac77578889a0522e3e252b74c6b7f21f8c4->enter($__internal_be20c26e6a380456c9b92c3d94ab5ac77578889a0522e3e252b74c6b7f21f8c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c0c0ae7d1259a9f5c07f575d9b06a9b668d87ca0ee42e137a9c6a6b675976c1->leave($__internal_6c0c0ae7d1259a9f5c07f575d9b06a9b668d87ca0ee42e137a9c6a6b675976c1_prof);

        
        $__internal_be20c26e6a380456c9b92c3d94ab5ac77578889a0522e3e252b74c6b7f21f8c4->leave($__internal_be20c26e6a380456c9b92c3d94ab5ac77578889a0522e3e252b74c6b7f21f8c4_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fc821d5e6b57e7e57eccd5501cd8d725bff17a3e734e170afc5f3ce73e7541be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc821d5e6b57e7e57eccd5501cd8d725bff17a3e734e170afc5f3ce73e7541be->enter($__internal_fc821d5e6b57e7e57eccd5501cd8d725bff17a3e734e170afc5f3ce73e7541be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2a4d53f14e999a999604965afb5542c3cb26348b7653cc2c5885c0e6744e79e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a4d53f14e999a999604965afb5542c3cb26348b7653cc2c5885c0e6744e79e3->enter($__internal_2a4d53f14e999a999604965afb5542c3cb26348b7653cc2c5885c0e6744e79e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_2a4d53f14e999a999604965afb5542c3cb26348b7653cc2c5885c0e6744e79e3->leave($__internal_2a4d53f14e999a999604965afb5542c3cb26348b7653cc2c5885c0e6744e79e3_prof);

        
        $__internal_fc821d5e6b57e7e57eccd5501cd8d725bff17a3e734e170afc5f3ce73e7541be->leave($__internal_fc821d5e6b57e7e57eccd5501cd8d725bff17a3e734e170afc5f3ce73e7541be_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "@FOSUser/Registration/check_email.html.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\check_email.html.twig");
    }
}
