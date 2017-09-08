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
        $__internal_aeb8284443ad0fe26b4a4860106caf0a19088926cdff24d94ec691d90d859fee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aeb8284443ad0fe26b4a4860106caf0a19088926cdff24d94ec691d90d859fee->enter($__internal_aeb8284443ad0fe26b4a4860106caf0a19088926cdff24d94ec691d90d859fee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $__internal_2bac76f5f4fcd12fa5802238413167fb97e7b9137fc1c1a41fe06b90d7f78617 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bac76f5f4fcd12fa5802238413167fb97e7b9137fc1c1a41fe06b90d7f78617->enter($__internal_2bac76f5f4fcd12fa5802238413167fb97e7b9137fc1c1a41fe06b90d7f78617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aeb8284443ad0fe26b4a4860106caf0a19088926cdff24d94ec691d90d859fee->leave($__internal_aeb8284443ad0fe26b4a4860106caf0a19088926cdff24d94ec691d90d859fee_prof);

        
        $__internal_2bac76f5f4fcd12fa5802238413167fb97e7b9137fc1c1a41fe06b90d7f78617->leave($__internal_2bac76f5f4fcd12fa5802238413167fb97e7b9137fc1c1a41fe06b90d7f78617_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_635459979d22d306d94f3e189b86df363fc8c26ede90a5ff09440f6aad34dcac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_635459979d22d306d94f3e189b86df363fc8c26ede90a5ff09440f6aad34dcac->enter($__internal_635459979d22d306d94f3e189b86df363fc8c26ede90a5ff09440f6aad34dcac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_dfff2d0fd47439e63c1bbef8584564109023e50f002b961048961baae786ed35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfff2d0fd47439e63c1bbef8584564109023e50f002b961048961baae786ed35->enter($__internal_dfff2d0fd47439e63c1bbef8584564109023e50f002b961048961baae786ed35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_dfff2d0fd47439e63c1bbef8584564109023e50f002b961048961baae786ed35->leave($__internal_dfff2d0fd47439e63c1bbef8584564109023e50f002b961048961baae786ed35_prof);

        
        $__internal_635459979d22d306d94f3e189b86df363fc8c26ede90a5ff09440f6aad34dcac->leave($__internal_635459979d22d306d94f3e189b86df363fc8c26ede90a5ff09440f6aad34dcac_prof);

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
